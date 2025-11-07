<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* AmazonPayV2_42_Bundle/Service/AmazonIPNService.php */
class __TwigTemplate_b97c8855f0e5fd44b783e7e06b88ec44 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Service/AmazonIPNService.php"));

        $__eccube__gblobal = $this->env->getGlobals();
        $__eccube__eventDispatcher = $__eccube__gblobal['event_dispatcher'];
        $__eccube__source = $this->env->getLoader()->getSourceContext($this->getTemplateName())->getCode();
        $__eccube__event = new \Eccube\Event\TemplateEvent($this->getTemplateName(), $__eccube__source, $context);
        $__eccube__eventDispatcher->dispatch($__eccube__event, $this->getTemplateName());
        $context = $__eccube__event->getParameters();
        if ($__eccube__event->getSource() !== $__eccube__source) {
            $__eccube__newTemplate = $this->env->createTemplate($__eccube__event->getSource());
            $__eccube__newTemplate->display($__eccube__event->getParameters());
            return;
        }

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Service/AmazonIPNService.php"));

        // line 1
        echo "<?php

/*
 * Amazon Pay V2 for EC-CUBE4.2
 * Copyright(c) 2023 EC-CUBE CO.,LTD. all rights reserved.
 *
 * https://www.ec-cube.co.jp/
 *
 * This program is not free software.
 * It applies to terms of service.
 *
 */

namespace Plugin\\AmazonPayV2_42_Bundle\\Service;

use Doctrine\\ORM\\EntityManagerInterface;
use Plugin\\AmazonPayV2_42_Bundle\\Entity\\Master\\AmazonStatus;
use Plugin\\AmazonPayV2_42_Bundle\\Entity\\AmazonTrading;
use Plugin\\AmazonPayV2_42_Bundle\\Repository\\ConfigRepository;
use Plugin\\AmazonPayV2_42_Bundle\\Service\\AmazonOrderHelper;
use Plugin\\AmazonPayV2_42_Bundle\\Service\\AmazonRequestService;
use Eccube\\Common\\EccubeConfig;
use Eccube\\Entity\\Master\\OrderStatus;
use Eccube\\Repository\\CustomerRepository;
use Eccube\\Repository\\OrderRepository;
use Eccube\\Repository\\Master\\OrderStatusRepository;
use Eccube\\Service\\MailService;
use Eccube\\Service\\PurchaseFlow\\PurchaseFlow;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;
use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Doctrine\\DBAL\\LockMode;

class AmazonIPNService
{
    /**
     * @var string プロファイル情報キー
     */
    private \$sessionAmazonProfileKey = 'amazon_pay_v2.profile';

    /**
     * @var string チェックアウトセッション情報キー
     */
    private \$sessionAmazonCheckoutSessionIdKey = 'amazon_pay_v2.checkout_session_id';

    /**
     * @var string 会員登録情報
     */
    private \$sessionAmazonCustomerParamKey = 'amazon_pay_v2.customer_regist_v2';

    /**
     * @var OrderRepository
     */
    protected \$orderRepository;

    /**
     * @var EntityManagerInterface
     */
    protected \$entityManager;

    public function __construct(
        EccubeConfig \$eccubeConfig,
        MailService \$mailService,
        CustomerRepository \$customerRepository,
        OrderRepository \$orderRepository,
        OrderStatusRepository \$orderStatusRepository,
        EntityManagerInterface \$entityManager,
        PurchaseFlow \$shoppingPurchaseFlow,
        ConfigRepository \$configRepository,
        AmazonOrderHelper \$amazonOrderHelper,
        AmazonRequestService \$amazonRequestService,
        ContainerInterface \$container
    ) {
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->mailService = \$mailService;
        \$this->customerRepository = \$customerRepository;
        \$this->orderRepository = \$orderRepository;
        \$this->orderStatusRepository = \$orderStatusRepository;
        \$this->entityManager = \$entityManager;
        \$this->purchaseFlow = \$shoppingPurchaseFlow;
        \$this->configRepository = \$configRepository;
        \$this->amazonOrderHelper = \$amazonOrderHelper;
        \$this->amazonRequestService = \$amazonRequestService;
        \$this->container = \$container;

        \$this->Config = \$this->configRepository->get();
    }

    /**
     * IPN - メインメソッド
     * Amazonサーバーから送られてくるJSONを処理して、ステータスの変更処理を行う。
     */
    public function mainProcess(\$arrParam)
    {

        if (\$this->Config->getSellerId() != \$arrParam['MerchantID']) {
            return null;
        }

        \$objectId = \$arrParam['ObjectId'];

        // 初回注文 or 売上請求 or 支払いキャンセル
        if (\$arrParam['ObjectType'] == 'CHARGE')
        {
            // 決済情報の取得
            \$chargeResponse = \$this->amazonRequestService->getCharge(\$objectId);
            \$chargeResponseState = \$chargeResponse->statusDetails->state;

            // 受注情報の取得
            \$Order = \$this->getFirstOrder(\$arrParam, \$chargeResponse);

            // 初回注文時
            if (
                \$Order
                && (\$chargeResponseState == 'Authorized' || \$chargeResponseState == 'Captured')
                && \$Order->getAmazonPayV2SessionTemp()
            ) {
                logs('amazon_pay_v2')->info('AmazonIPNService::初回注文処理 start');
                \$this->firstOrderProcess(\$Order);
                logs('amazon_pay_v2')->info('AmazonIPNService::初回注文処理 end');
            }

            \$Order = \$this->getOrder(\$arrParam, \$chargeResponse);

            if (\$Order) {
                // Amazon取引一覧を取得
                \$AmazonTradings = \$Order->getAmazonPayV2AmazonTradings();
                \$arrChargeId = [];
                foreach (\$AmazonTradings as \$AmazonTrading) {
                    \$arrChargeId[] = \$AmazonTrading->getChargeId();
                }

                // 売上請求時
                if (
                    \$chargeResponseState == 'Captured'
                    && (!in_array(\$objectId, \$arrChargeId))
                ) {
                    logs('amazon_pay_v2')->info('AmazonIPNService::売上請求処理 start');
                    logs('amazon_pay_v2')->info('AmazonIPNService::売上請求処理 end');
                }
                // 売上キャンセル時
                if (
                    \$chargeResponseState == 'Canceled'
                    && (in_array(\$objectId, \$arrChargeId))
                ) {
                    logs('amazon_pay_v2')->info('AmazonIPNService::売上キャンセル処理 start');
                    logs('amazon_pay_v2')->info('AmazonIPNService::売上キャンセル処理 end');
                }
            }
            

        // 返金処理時
        } elseif (\$arrParam['ObjectType'] == 'REFUND')
        {
            logs('amazon_pay_v2')->info('AmazonIPNService::返金処理 start');
            logs('amazon_pay_v2')->info('AmazonIPNService::返金処理 end');
        }
    }

    /**
     * 受注情報の取得
     */
    public function getOrder(\$arrParam, \$response)
    {
        \$Order = \$this->orderRepository->findOneBy([
            'amazonpay_v2_charge_permission_id' => \$arrParam['ChargePermissionId'],
            'AmazonPayV2AmazonStatus' => [
                AmazonStatus::AUTHORI,
                AmazonStatus::CAPTURE
            ],
            'OrderStatus' => [
                OrderStatus::NEW,
                OrderStatus::PAID
            ],
        ]);

        return \$Order;
    }

    /**
     * 初回注文時 受注情報の取得
     */
    public function getFirstOrder(\$arrParam, \$response)
    {
        \$Order = \$this->orderRepository->findOneBy([
            'amazonpay_v2_charge_permission_id' => \$arrParam['ChargePermissionId'],
            'payment_total' => (int)\$response->chargeAmount->amount,
            'OrderStatus' => OrderStatus::PENDING,
        ]);

        if (!\$Order) {
            \$prefix = '';
            \$iniFile = dirname(__FILE__) . '/../amazon_pay_config.ini';
            if (file_exists(\$iniFile)) {
                \$arrInit = parse_ini_file(\$iniFile);
                \$prefix = \$arrInit['prefix'];
            }
            \$prefix = \$prefix === '' ? '' : \$prefix . '_';

            \$order_id = \$response->merchantMetadata->merchantReferenceId;

            if (\$prefix) {
                \$order_id = str_replace(\$prefix, '', \$order_id);
            }
    
            \$Order = \$this->orderRepository->findOneBy([
                'id' => \$order_id,
                'payment_total' => (int)\$response->chargeAmount->amount,
                'OrderStatus' => OrderStatus::PENDING,
            ]);
        }

        return \$Order;
    }

    function firstOrderProcess(\$Order)
    {
        // ここで最新の受注情報を取得し、
        // 取得していた受注情報と更新日時に違いがあるなら
        // 他スレッドからの更新があったものとして終了する
        \$this->entityManager->beginTransaction();
        \$LockedOrder = \$this->orderRepository->find(\$Order['id'], LockMode::PESSIMISTIC_WRITE);
        // 重複処理調査用のログ出力
        logs('amazon_pay_v2')->info('\$Order[update_date] is ' . \$Order['update_date']->format('Y-m-d H:i:s.u') . ', \$LockedOrder[update_date] is ' . \$LockedOrder['update_date']->format('Y-m-d H:i:s.u'));
        if (\$Order['update_date'] != \$LockedOrder['update_date']) {
            logs('amazon_pay_v2')->info('[注文処理] 受注情報に更新がありました。処理を中断します。');
            \$this->entityManager->rollback();
            return;
        }

        \$session_temp = unserialize(\$Order->getAmazonPayV2SessionTemp());

        \$arrAmazonCustomerParam = \$session_temp[\$this->sessionAmazonCustomerParamKey];
        \$profile = \$session_temp[\$this->sessionAmazonProfileKey];
        \$amazonCheckoutSessionId = \$session_temp[\$this->sessionAmazonCheckoutSessionIdKey];

        \$response = \$this->amazonOrderHelper->completeCheckout(\$Order, \$amazonCheckoutSessionId);

        \$this->amazonOrderHelper->setAmazonOrder(\$Order, \$response->chargePermissionId, \$response->chargeId);

        \$OrderStatus = \$this->orderStatusRepository->find(OrderStatus::NEW);
        \$Order->setOrderStatus(\$OrderStatus);

        // purchaseFlow::commitを呼び出し, 購入処理を完了させる.
        \$this->purchaseFlow->commit(\$Order, new PurchaseContext());

        if (\$session_temp['IS_AUTHENTICATED_FULLY']) {
            \$Customer = \$Order->getCustomer();
            \$Customers = \$this->customerRepository->getNonWithdrawingCustomers(['v2_amazon_user_id' => \$profile->buyerId]);
            if (!\$Customer->getV2AmazonUserId() && empty(\$Customers[0])) {
                \$Customer->setV2AmazonUserId(\$profile->buyerId);
            }
        } else {
            if (empty(\$arrAmazonCustomerParam['login_check_v2']) || \$arrAmazonCustomerParam['login_check_v2'] == 'regist') {
                if (\$arrAmazonCustomerParam['customer_regist_v2']) {
                    \$url = \$this->container->get('router')->generate('mypage_login', [], UrlGeneratorInterface::ABSOLUTE_URL);
                    if (
                        \$this->customerRepository->getNonWithdrawingCustomers(['email' => \$Order->getEmail()]) ||
                        \$this->customerRepository->getNonWithdrawingCustomers(['v2_amazon_user_id' => \$profile->buyerId])
                    ) {
                        // 登録済み
                        \$mail = \$Order->getEmail();
                        \$mail_message = <<<__EOS__
************************************************
　会員登録情報
************************************************
マイページURL：{\$url}
※会員登録済みです。メールアドレスは{\$mail}です。

__EOS__;
                    } else {
                        // 会員登録処理
                        \$password = \$this->amazonOrderHelper->registCustomer(\$Order, \$arrAmazonCustomerParam['mail_magazine'], \$profile);

                        \$Customer = \$this->customerRepository->findOneBy(['email' => \$Order->getEmail()]);
                        \$Order->setCustomer(\$Customer);

                        \$mail = \$Customer->getEmail();
                        \$mail_message = <<<__EOS__
************************************************
　会員登録情報
************************************************
マイページURL：{\$url}
ログインメールアドレス：{\$mail}
初期パスワード：{\$password}

__EOS__;
                    }

                    \$Order->setCompleteMailMessage(\$mail_message);
                }
            } else if (\$arrAmazonCustomerParam['login_check_v2'] == 'login') {
                \$Customer = \$this->customerRepository->findOneBy(['email' => \$arrAmazonCustomerParam['amazon_login_email_v2']]);

                // 取得した会員を設定
                \$Order->setCustomer(\$Customer);
                // お届け先情報をログイン会員の情報に置き換える
                \$this->amazonOrderHelper->copyToOrderFromCustomer(\$Order, \$Customer);
                // v2_amazon_user_idをセットする
                \$Customers = \$this->customerRepository->getNonWithdrawingCustomers(['v2_amazon_user_id' => \$profile->buyerId]);
                if (!\$Customer->getV2AmazonUserId() && empty(\$Customers[0])) {
                    \$Customer->setV2AmazonUserId(\$profile->buyerId);
                }

            }
        }

        // セッション情報を空にする
        \$Order->setAmazonPayV2SessionTemp(null);
        \$this->entityManager->flush();
        \$this->entityManager->commit();

        logs('amazon_pay_v2')->info('[注文処理] 注文処理が完了しました.', [\$Order->getId()]);

        // メール送信
        logs('amazon_pay_v2')->info('[注文処理] 注文メールの送信を行います.', [\$Order->getId()]);

        // 特記事項を設定
        if (!is_null(\$this->Config->getMailNotices())) {
            \$Order->appendCompleteMailMessage(\"特記事項：\" . \$this->Config->getMailNotices());
        }

        \$this->mailService->sendOrderMail(\$Order);
        \$this->entityManager->flush();
        

        logs('amazon_pay_v2')->info('購入処理完了', [\$Order->getId()]);
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "AmazonPayV2_42_Bundle/Service/AmazonIPNService.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * Amazon Pay V2 for EC-CUBE4.2
 * Copyright(c) 2023 EC-CUBE CO.,LTD. all rights reserved.
 *
 * https://www.ec-cube.co.jp/
 *
 * This program is not free software.
 * It applies to terms of service.
 *
 */

namespace Plugin\\AmazonPayV2_42_Bundle\\Service;

use Doctrine\\ORM\\EntityManagerInterface;
use Plugin\\AmazonPayV2_42_Bundle\\Entity\\Master\\AmazonStatus;
use Plugin\\AmazonPayV2_42_Bundle\\Entity\\AmazonTrading;
use Plugin\\AmazonPayV2_42_Bundle\\Repository\\ConfigRepository;
use Plugin\\AmazonPayV2_42_Bundle\\Service\\AmazonOrderHelper;
use Plugin\\AmazonPayV2_42_Bundle\\Service\\AmazonRequestService;
use Eccube\\Common\\EccubeConfig;
use Eccube\\Entity\\Master\\OrderStatus;
use Eccube\\Repository\\CustomerRepository;
use Eccube\\Repository\\OrderRepository;
use Eccube\\Repository\\Master\\OrderStatusRepository;
use Eccube\\Service\\MailService;
use Eccube\\Service\\PurchaseFlow\\PurchaseFlow;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;
use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Doctrine\\DBAL\\LockMode;

class AmazonIPNService
{
    /**
     * @var string プロファイル情報キー
     */
    private \$sessionAmazonProfileKey = 'amazon_pay_v2.profile';

    /**
     * @var string チェックアウトセッション情報キー
     */
    private \$sessionAmazonCheckoutSessionIdKey = 'amazon_pay_v2.checkout_session_id';

    /**
     * @var string 会員登録情報
     */
    private \$sessionAmazonCustomerParamKey = 'amazon_pay_v2.customer_regist_v2';

    /**
     * @var OrderRepository
     */
    protected \$orderRepository;

    /**
     * @var EntityManagerInterface
     */
    protected \$entityManager;

    public function __construct(
        EccubeConfig \$eccubeConfig,
        MailService \$mailService,
        CustomerRepository \$customerRepository,
        OrderRepository \$orderRepository,
        OrderStatusRepository \$orderStatusRepository,
        EntityManagerInterface \$entityManager,
        PurchaseFlow \$shoppingPurchaseFlow,
        ConfigRepository \$configRepository,
        AmazonOrderHelper \$amazonOrderHelper,
        AmazonRequestService \$amazonRequestService,
        ContainerInterface \$container
    ) {
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->mailService = \$mailService;
        \$this->customerRepository = \$customerRepository;
        \$this->orderRepository = \$orderRepository;
        \$this->orderStatusRepository = \$orderStatusRepository;
        \$this->entityManager = \$entityManager;
        \$this->purchaseFlow = \$shoppingPurchaseFlow;
        \$this->configRepository = \$configRepository;
        \$this->amazonOrderHelper = \$amazonOrderHelper;
        \$this->amazonRequestService = \$amazonRequestService;
        \$this->container = \$container;

        \$this->Config = \$this->configRepository->get();
    }

    /**
     * IPN - メインメソッド
     * Amazonサーバーから送られてくるJSONを処理して、ステータスの変更処理を行う。
     */
    public function mainProcess(\$arrParam)
    {

        if (\$this->Config->getSellerId() != \$arrParam['MerchantID']) {
            return null;
        }

        \$objectId = \$arrParam['ObjectId'];

        // 初回注文 or 売上請求 or 支払いキャンセル
        if (\$arrParam['ObjectType'] == 'CHARGE')
        {
            // 決済情報の取得
            \$chargeResponse = \$this->amazonRequestService->getCharge(\$objectId);
            \$chargeResponseState = \$chargeResponse->statusDetails->state;

            // 受注情報の取得
            \$Order = \$this->getFirstOrder(\$arrParam, \$chargeResponse);

            // 初回注文時
            if (
                \$Order
                && (\$chargeResponseState == 'Authorized' || \$chargeResponseState == 'Captured')
                && \$Order->getAmazonPayV2SessionTemp()
            ) {
                logs('amazon_pay_v2')->info('AmazonIPNService::初回注文処理 start');
                \$this->firstOrderProcess(\$Order);
                logs('amazon_pay_v2')->info('AmazonIPNService::初回注文処理 end');
            }

            \$Order = \$this->getOrder(\$arrParam, \$chargeResponse);

            if (\$Order) {
                // Amazon取引一覧を取得
                \$AmazonTradings = \$Order->getAmazonPayV2AmazonTradings();
                \$arrChargeId = [];
                foreach (\$AmazonTradings as \$AmazonTrading) {
                    \$arrChargeId[] = \$AmazonTrading->getChargeId();
                }

                // 売上請求時
                if (
                    \$chargeResponseState == 'Captured'
                    && (!in_array(\$objectId, \$arrChargeId))
                ) {
                    logs('amazon_pay_v2')->info('AmazonIPNService::売上請求処理 start');
                    logs('amazon_pay_v2')->info('AmazonIPNService::売上請求処理 end');
                }
                // 売上キャンセル時
                if (
                    \$chargeResponseState == 'Canceled'
                    && (in_array(\$objectId, \$arrChargeId))
                ) {
                    logs('amazon_pay_v2')->info('AmazonIPNService::売上キャンセル処理 start');
                    logs('amazon_pay_v2')->info('AmazonIPNService::売上キャンセル処理 end');
                }
            }
            

        // 返金処理時
        } elseif (\$arrParam['ObjectType'] == 'REFUND')
        {
            logs('amazon_pay_v2')->info('AmazonIPNService::返金処理 start');
            logs('amazon_pay_v2')->info('AmazonIPNService::返金処理 end');
        }
    }

    /**
     * 受注情報の取得
     */
    public function getOrder(\$arrParam, \$response)
    {
        \$Order = \$this->orderRepository->findOneBy([
            'amazonpay_v2_charge_permission_id' => \$arrParam['ChargePermissionId'],
            'AmazonPayV2AmazonStatus' => [
                AmazonStatus::AUTHORI,
                AmazonStatus::CAPTURE
            ],
            'OrderStatus' => [
                OrderStatus::NEW,
                OrderStatus::PAID
            ],
        ]);

        return \$Order;
    }

    /**
     * 初回注文時 受注情報の取得
     */
    public function getFirstOrder(\$arrParam, \$response)
    {
        \$Order = \$this->orderRepository->findOneBy([
            'amazonpay_v2_charge_permission_id' => \$arrParam['ChargePermissionId'],
            'payment_total' => (int)\$response->chargeAmount->amount,
            'OrderStatus' => OrderStatus::PENDING,
        ]);

        if (!\$Order) {
            \$prefix = '';
            \$iniFile = dirname(__FILE__) . '/../amazon_pay_config.ini';
            if (file_exists(\$iniFile)) {
                \$arrInit = parse_ini_file(\$iniFile);
                \$prefix = \$arrInit['prefix'];
            }
            \$prefix = \$prefix === '' ? '' : \$prefix . '_';

            \$order_id = \$response->merchantMetadata->merchantReferenceId;

            if (\$prefix) {
                \$order_id = str_replace(\$prefix, '', \$order_id);
            }
    
            \$Order = \$this->orderRepository->findOneBy([
                'id' => \$order_id,
                'payment_total' => (int)\$response->chargeAmount->amount,
                'OrderStatus' => OrderStatus::PENDING,
            ]);
        }

        return \$Order;
    }

    function firstOrderProcess(\$Order)
    {
        // ここで最新の受注情報を取得し、
        // 取得していた受注情報と更新日時に違いがあるなら
        // 他スレッドからの更新があったものとして終了する
        \$this->entityManager->beginTransaction();
        \$LockedOrder = \$this->orderRepository->find(\$Order['id'], LockMode::PESSIMISTIC_WRITE);
        // 重複処理調査用のログ出力
        logs('amazon_pay_v2')->info('\$Order[update_date] is ' . \$Order['update_date']->format('Y-m-d H:i:s.u') . ', \$LockedOrder[update_date] is ' . \$LockedOrder['update_date']->format('Y-m-d H:i:s.u'));
        if (\$Order['update_date'] != \$LockedOrder['update_date']) {
            logs('amazon_pay_v2')->info('[注文処理] 受注情報に更新がありました。処理を中断します。');
            \$this->entityManager->rollback();
            return;
        }

        \$session_temp = unserialize(\$Order->getAmazonPayV2SessionTemp());

        \$arrAmazonCustomerParam = \$session_temp[\$this->sessionAmazonCustomerParamKey];
        \$profile = \$session_temp[\$this->sessionAmazonProfileKey];
        \$amazonCheckoutSessionId = \$session_temp[\$this->sessionAmazonCheckoutSessionIdKey];

        \$response = \$this->amazonOrderHelper->completeCheckout(\$Order, \$amazonCheckoutSessionId);

        \$this->amazonOrderHelper->setAmazonOrder(\$Order, \$response->chargePermissionId, \$response->chargeId);

        \$OrderStatus = \$this->orderStatusRepository->find(OrderStatus::NEW);
        \$Order->setOrderStatus(\$OrderStatus);

        // purchaseFlow::commitを呼び出し, 購入処理を完了させる.
        \$this->purchaseFlow->commit(\$Order, new PurchaseContext());

        if (\$session_temp['IS_AUTHENTICATED_FULLY']) {
            \$Customer = \$Order->getCustomer();
            \$Customers = \$this->customerRepository->getNonWithdrawingCustomers(['v2_amazon_user_id' => \$profile->buyerId]);
            if (!\$Customer->getV2AmazonUserId() && empty(\$Customers[0])) {
                \$Customer->setV2AmazonUserId(\$profile->buyerId);
            }
        } else {
            if (empty(\$arrAmazonCustomerParam['login_check_v2']) || \$arrAmazonCustomerParam['login_check_v2'] == 'regist') {
                if (\$arrAmazonCustomerParam['customer_regist_v2']) {
                    \$url = \$this->container->get('router')->generate('mypage_login', [], UrlGeneratorInterface::ABSOLUTE_URL);
                    if (
                        \$this->customerRepository->getNonWithdrawingCustomers(['email' => \$Order->getEmail()]) ||
                        \$this->customerRepository->getNonWithdrawingCustomers(['v2_amazon_user_id' => \$profile->buyerId])
                    ) {
                        // 登録済み
                        \$mail = \$Order->getEmail();
                        \$mail_message = <<<__EOS__
************************************************
　会員登録情報
************************************************
マイページURL：{\$url}
※会員登録済みです。メールアドレスは{\$mail}です。

__EOS__;
                    } else {
                        // 会員登録処理
                        \$password = \$this->amazonOrderHelper->registCustomer(\$Order, \$arrAmazonCustomerParam['mail_magazine'], \$profile);

                        \$Customer = \$this->customerRepository->findOneBy(['email' => \$Order->getEmail()]);
                        \$Order->setCustomer(\$Customer);

                        \$mail = \$Customer->getEmail();
                        \$mail_message = <<<__EOS__
************************************************
　会員登録情報
************************************************
マイページURL：{\$url}
ログインメールアドレス：{\$mail}
初期パスワード：{\$password}

__EOS__;
                    }

                    \$Order->setCompleteMailMessage(\$mail_message);
                }
            } else if (\$arrAmazonCustomerParam['login_check_v2'] == 'login') {
                \$Customer = \$this->customerRepository->findOneBy(['email' => \$arrAmazonCustomerParam['amazon_login_email_v2']]);

                // 取得した会員を設定
                \$Order->setCustomer(\$Customer);
                // お届け先情報をログイン会員の情報に置き換える
                \$this->amazonOrderHelper->copyToOrderFromCustomer(\$Order, \$Customer);
                // v2_amazon_user_idをセットする
                \$Customers = \$this->customerRepository->getNonWithdrawingCustomers(['v2_amazon_user_id' => \$profile->buyerId]);
                if (!\$Customer->getV2AmazonUserId() && empty(\$Customers[0])) {
                    \$Customer->setV2AmazonUserId(\$profile->buyerId);
                }

            }
        }

        // セッション情報を空にする
        \$Order->setAmazonPayV2SessionTemp(null);
        \$this->entityManager->flush();
        \$this->entityManager->commit();

        logs('amazon_pay_v2')->info('[注文処理] 注文処理が完了しました.', [\$Order->getId()]);

        // メール送信
        logs('amazon_pay_v2')->info('[注文処理] 注文メールの送信を行います.', [\$Order->getId()]);

        // 特記事項を設定
        if (!is_null(\$this->Config->getMailNotices())) {
            \$Order->appendCompleteMailMessage(\"特記事項：\" . \$this->Config->getMailNotices());
        }

        \$this->mailService->sendOrderMail(\$Order);
        \$this->entityManager->flush();
        

        logs('amazon_pay_v2')->info('購入処理完了', [\$Order->getId()]);
    }
}
", "AmazonPayV2_42_Bundle/Service/AmazonIPNService.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\AmazonPayV2_42_Bundle\\Service\\AmazonIPNService.php");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
