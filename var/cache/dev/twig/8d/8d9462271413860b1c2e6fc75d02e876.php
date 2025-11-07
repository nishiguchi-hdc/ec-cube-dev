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

/* EccubePaymentLite42/Service/Method/Conveni.php */
class __TwigTemplate_347428cec23f0aab2102bdd60d880afe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/Method/Conveni.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/Method/Conveni.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Service\\Method;

use Eccube\\Common\\EccubeConfig;
use Eccube\\Entity\\Master\\OrderStatus;
use Eccube\\Entity\\Order;
use Eccube\\Repository\\Master\\OrderStatusRepository;
use Eccube\\Service\\Payment\\PaymentMethodInterface;
use Eccube\\Service\\Payment\\PaymentResult;
use Eccube\\Service\\PointHelper;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;
use Eccube\\Service\\PurchaseFlow\\PurchaseFlow;
use Plugin\\EccubePaymentLite42\\Service\\CreateSystemErrorResponseService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestReceiveOrder3Service;
use Plugin\\EccubePaymentLite42\\Service\\UpdateGmoEpsilonOrderService;
use Plugin\\EccubePaymentLite42\\Service\\UpdatePaymentStatusService;
use Symfony\\Component\\Form\\FormInterface;

class Conveni implements PaymentMethodInterface
{
    /**
     * @var UpdatePaymentStatusService
     */
    private \$updatePaymentStatusService;
    /**
     * @var Order
     */
    protected \$Order;
    /**
     * @var FormInterface
     */
    protected \$form;

    private \$eccubeConfig;
    /**
     * @var RequestReceiveOrder3Service
     */
    private \$requestReceiveOrder3Service;
    /**
     * @var OrderStatusRepository
     */
    private \$orderStatusRepository;
    /**
     * @var PurchaseFlow
     */
    private \$purchaseFlow;
    /**
     * @var UpdateGmoEpsilonOrderService
     */
    private \$updateGmoEpsilonOrderService;
    /**
     * @var CreateSystemErrorResponseService
     */
    private \$createSystemErrorResponseService;
    /**
     * @var PointHelper
     */
    protected \$pointHelper;

    public function __construct(
        RequestReceiveOrder3Service \$requestReceiveOrder3Service,
        EccubeConfig \$eccubeConfig,
        OrderStatusRepository \$orderStatusRepository,
        UpdatePaymentStatusService \$updatePaymentStatusService,
        CreateSystemErrorResponseService \$createSystemErrorResponseService,
        UpdateGmoEpsilonOrderService \$updateGmoEpsilonOrderService,
        PurchaseFlow \$shoppingPurchaseFlow,
        PointHelper \$pointHelper
    ) {
        \$this->requestReceiveOrder3Service = \$requestReceiveOrder3Service;
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->orderStatusRepository = \$orderStatusRepository;
        \$this->updatePaymentStatusService = \$updatePaymentStatusService;
        \$this->createSystemErrorResponseService = \$createSystemErrorResponseService;
        \$this->updateGmoEpsilonOrderService = \$updateGmoEpsilonOrderService;
        \$this->purchaseFlow = \$shoppingPurchaseFlow;
        \$this->pointHelper = \$pointHelper;
    }

    /**
     * {@inheritdoc}
     */
    public function apply()
    {
        logs('gmo_epsilon')->info('受注ID: '.\$this->Order->getId().'Conveni payment process start.');
        \$OrderStatus = \$this
            ->orderStatusRepository
            ->find(OrderStatus::PENDING);
        \$this->Order->setOrderStatus(\$OrderStatus);
        \$this->purchaseFlow->prepare(\$this->Order, new PurchaseContext());

        // if customer use point =>  rollback point of customer
        if (\$this->Order->getUsePoint() > 0) {
            // 利用したポイントをユーザに戻す.
            \$this->pointHelper->rollback(\$this->Order, \$this->Order->getUsePoint());
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function checkout(): PaymentResult
    {
        logs('gmo_epsilon')->info('受注ID: '.\$this->Order->getId().'Conveni payment process end.');
        \$PaymentResult = new PaymentResult();
        \$results = \$this
            ->requestReceiveOrder3Service
            ->handle(
                \$this->Order,
                \$this->eccubeConfig['gmo_epsilon']['st_code']['conveni'],
                \$this->form['convenience']->getData()->getConveniCode()
            );
        if (\$results['status'] === 'NG') {
            logs('gmo_epsilon')->error('ERR_CODE = '.\$results['err_code']);
            logs('gmo_epsilon')->error('ERR_DETAIL = '.\$results['message']);
            \$PaymentResult->setErrors([
                'コンビニ決済情報の登録に失敗しました。この注文についてショップにお問合せください。',
            ]);

            return \$PaymentResult;
        }

        \$pay_info = \$this->getPaymentInfo(\$results);
        \$this->setOrderCompleteMessages(\$pay_info);
        \$this
            ->updateGmoEpsilonOrderService
            ->updateAfterMakingPayment(
                \$this->Order,
                \$results['trans_code'],
                \$results['order_number']
            );
        \$this->updatePaymentStatusService->handle(
            \$this->Order,
            \$results['state']
        );
        if (\$this->Order->getUsePoint() > 0) {
            // ユーザの保有ポイントを減算
            \$this->pointHelper->prepare(\$this->Order, \$this->Order->getUsePoint());
        }
        \$PaymentResult->setSuccess(true);

        return \$PaymentResult;
    }

    /**
     * @param \$result
     */
    private function getPaymentInfo(\$result): string
    {
        // リクエスト結果を取得
        \$receipt_no = \$result['receipt_no'];
        \$haraikomi_url = \$result['haraikomi_url'];
        \$kigyou_code = \$result['kigyou_code'];
        \$conveni_limit = \$result['conveni_limit'];
        \$tel = \$this->Order->getPhoneNumber();

        // コンビニ別に決済情報を設定
        \$pay_info = '';
        switch (\$result['conveni_code']) {
            case \$this->eccubeConfig['gmo_epsilon']['conveni_id']['seveneleven']:
                \$pay_info .= \$this->eccubeConfig['gmo_epsilon']['conveni_pre_message']['seveneleven'].\"\\n\\n\";

                \$pay_info .= \"払込票URL:\$haraikomi_url\\n\";
                \$pay_info .= \"払込票番号（13桁）:\$receipt_no\\n\";
                \$pay_info .= \"お支払期限:\$conveni_limit\\n\\n\";

                \$pay_info .= \$this->eccubeConfig['gmo_epsilon']['conveni_message']['seveneleven'].\"\\n\\n\";
                break;
            case \$this->eccubeConfig['gmo_epsilon']['conveni_id']['familymart']:
                \$pay_info .= \$this->eccubeConfig['gmo_epsilon']['conveni_pre_message']['familymart'].\"\\n\\n\";

                \$pay_info .= \"企業コード（5桁）:\$kigyou_code\\n\";
                \$pay_info .= \"注文番号（12桁）:\$receipt_no\\n\";
                \$pay_info .= \"お支払期限:\$conveni_limit\\n\\n\";

                \$pay_info .= \$this->eccubeConfig['gmo_epsilon']['conveni_message']['familymart'].\"\\n\\n\";
                break;
            case \$this->eccubeConfig['gmo_epsilon']['conveni_id']['lawson']:
                \$pay_info .= \$this->eccubeConfig['gmo_epsilon']['conveni_pre_message']['lawson'].\"\\n\\n\";

                \$pay_info .= \"受付番号（6桁）:\$receipt_no\\n\";
                \$pay_info .= \"電話番号:\$tel\\n\";
                \$pay_info .= \"お支払期限:\$conveni_limit\\n\\n\";

                \$pay_info .= \$this->eccubeConfig['gmo_epsilon']['conveni_message']['lawson'].\"\\n\\n\";
                break;
            case \$this->eccubeConfig['gmo_epsilon']['conveni_id']['seicomart']:
                \$pay_info .= \$this->eccubeConfig['gmo_epsilon']['conveni_pre_message']['seicomart'].\"\\n\\n\";

                \$pay_info .= \"受付番号（6桁）:\$receipt_no\\n\";
                \$pay_info .= \"電話番号:\$tel\\n\";
                \$pay_info .= \"お支払期限:\$conveni_limit\\n\\n\";

                \$pay_info .= \$this->eccubeConfig['gmo_epsilon']['conveni_message']['seicomart'].\"\\n\\n\";
                break;
            case \$this->eccubeConfig['gmo_epsilon']['conveni_id']['ministop']:
                \$pay_info .= \$this->eccubeConfig['gmo_epsilon']['conveni_pre_message']['ministop'].\"\\n\\n\";

                \$pay_info .= \"払込票番号:\$receipt_no\\n\";
                \$pay_info .= \"電話番号:\$tel\\n\";
                \$pay_info .= \"お支払期限:\$conveni_limit\\n\\n\";

                \$pay_info .= \$this->eccubeConfig['gmo_epsilon']['conveni_message']['ministop'].\"\\n\\n\";
                break;
        }

        return \$pay_info;
    }

    /**
     * 決済情報を受注完了メッセージにセット
     *
     * @param string pay_info
     */
    public function setOrderCompleteMessages(\$pay_info)
    {
        \$complete_mail_message = <<<EOT
************************************************
コンビニ決済情報
************************************************
\$pay_info
EOT;

        // URLをリンクに変換
        // EC-CUBE 4.2以降は `target=\"_blank\"` や `onClick=\"...\"` が動作しない (https://github.com/EC-CUBE/ec-cube/issues/5372)
        \$pay_info = preg_replace('/(http.*?)\\\\n/', \"<a href=\\\"\$1\\\" target=\\\"_blank\\\">\$1</a>\\n\", \$pay_info);
        \$pay_info = nl2br(\$pay_info, false);

        \$complete_message = <<<EOT
        <div class=\"ec-rectHeading\">
            <h2>■コンビニ決済情報</h2>
        </div>
        <p style=\"text-align:left; word-wrap: break-word; white-space: normal;\">\$pay_info</p>
EOT;

        // 注文完了メールにメッセージを追加
        \$this->Order->appendCompleteMailMessage(\$complete_mail_message);
        // 注文完了画面にメッセージを追加
        \$this->Order->appendCompleteMessage(\$complete_message);
    }

    /**
     * {@inheritdoc}
     */
    public function verify(): PaymentResult
    {
        \$PaymentResult = new PaymentResult();

        return \$PaymentResult->setSuccess(true);
    }

    /**
     * {@inheritdoc}
     */
    public function setFormType(FormInterface \$form): void
    {
        \$this->form = \$form;
    }

    /**
     * {@inheritdoc}
     */
    public function setOrder(Order \$Order): void
    {
        \$this->Order = \$Order;
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
        return "EccubePaymentLite42/Service/Method/Conveni.php";
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

namespace Plugin\\EccubePaymentLite42\\Service\\Method;

use Eccube\\Common\\EccubeConfig;
use Eccube\\Entity\\Master\\OrderStatus;
use Eccube\\Entity\\Order;
use Eccube\\Repository\\Master\\OrderStatusRepository;
use Eccube\\Service\\Payment\\PaymentMethodInterface;
use Eccube\\Service\\Payment\\PaymentResult;
use Eccube\\Service\\PointHelper;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;
use Eccube\\Service\\PurchaseFlow\\PurchaseFlow;
use Plugin\\EccubePaymentLite42\\Service\\CreateSystemErrorResponseService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestReceiveOrder3Service;
use Plugin\\EccubePaymentLite42\\Service\\UpdateGmoEpsilonOrderService;
use Plugin\\EccubePaymentLite42\\Service\\UpdatePaymentStatusService;
use Symfony\\Component\\Form\\FormInterface;

class Conveni implements PaymentMethodInterface
{
    /**
     * @var UpdatePaymentStatusService
     */
    private \$updatePaymentStatusService;
    /**
     * @var Order
     */
    protected \$Order;
    /**
     * @var FormInterface
     */
    protected \$form;

    private \$eccubeConfig;
    /**
     * @var RequestReceiveOrder3Service
     */
    private \$requestReceiveOrder3Service;
    /**
     * @var OrderStatusRepository
     */
    private \$orderStatusRepository;
    /**
     * @var PurchaseFlow
     */
    private \$purchaseFlow;
    /**
     * @var UpdateGmoEpsilonOrderService
     */
    private \$updateGmoEpsilonOrderService;
    /**
     * @var CreateSystemErrorResponseService
     */
    private \$createSystemErrorResponseService;
    /**
     * @var PointHelper
     */
    protected \$pointHelper;

    public function __construct(
        RequestReceiveOrder3Service \$requestReceiveOrder3Service,
        EccubeConfig \$eccubeConfig,
        OrderStatusRepository \$orderStatusRepository,
        UpdatePaymentStatusService \$updatePaymentStatusService,
        CreateSystemErrorResponseService \$createSystemErrorResponseService,
        UpdateGmoEpsilonOrderService \$updateGmoEpsilonOrderService,
        PurchaseFlow \$shoppingPurchaseFlow,
        PointHelper \$pointHelper
    ) {
        \$this->requestReceiveOrder3Service = \$requestReceiveOrder3Service;
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->orderStatusRepository = \$orderStatusRepository;
        \$this->updatePaymentStatusService = \$updatePaymentStatusService;
        \$this->createSystemErrorResponseService = \$createSystemErrorResponseService;
        \$this->updateGmoEpsilonOrderService = \$updateGmoEpsilonOrderService;
        \$this->purchaseFlow = \$shoppingPurchaseFlow;
        \$this->pointHelper = \$pointHelper;
    }

    /**
     * {@inheritdoc}
     */
    public function apply()
    {
        logs('gmo_epsilon')->info('受注ID: '.\$this->Order->getId().'Conveni payment process start.');
        \$OrderStatus = \$this
            ->orderStatusRepository
            ->find(OrderStatus::PENDING);
        \$this->Order->setOrderStatus(\$OrderStatus);
        \$this->purchaseFlow->prepare(\$this->Order, new PurchaseContext());

        // if customer use point =>  rollback point of customer
        if (\$this->Order->getUsePoint() > 0) {
            // 利用したポイントをユーザに戻す.
            \$this->pointHelper->rollback(\$this->Order, \$this->Order->getUsePoint());
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function checkout(): PaymentResult
    {
        logs('gmo_epsilon')->info('受注ID: '.\$this->Order->getId().'Conveni payment process end.');
        \$PaymentResult = new PaymentResult();
        \$results = \$this
            ->requestReceiveOrder3Service
            ->handle(
                \$this->Order,
                \$this->eccubeConfig['gmo_epsilon']['st_code']['conveni'],
                \$this->form['convenience']->getData()->getConveniCode()
            );
        if (\$results['status'] === 'NG') {
            logs('gmo_epsilon')->error('ERR_CODE = '.\$results['err_code']);
            logs('gmo_epsilon')->error('ERR_DETAIL = '.\$results['message']);
            \$PaymentResult->setErrors([
                'コンビニ決済情報の登録に失敗しました。この注文についてショップにお問合せください。',
            ]);

            return \$PaymentResult;
        }

        \$pay_info = \$this->getPaymentInfo(\$results);
        \$this->setOrderCompleteMessages(\$pay_info);
        \$this
            ->updateGmoEpsilonOrderService
            ->updateAfterMakingPayment(
                \$this->Order,
                \$results['trans_code'],
                \$results['order_number']
            );
        \$this->updatePaymentStatusService->handle(
            \$this->Order,
            \$results['state']
        );
        if (\$this->Order->getUsePoint() > 0) {
            // ユーザの保有ポイントを減算
            \$this->pointHelper->prepare(\$this->Order, \$this->Order->getUsePoint());
        }
        \$PaymentResult->setSuccess(true);

        return \$PaymentResult;
    }

    /**
     * @param \$result
     */
    private function getPaymentInfo(\$result): string
    {
        // リクエスト結果を取得
        \$receipt_no = \$result['receipt_no'];
        \$haraikomi_url = \$result['haraikomi_url'];
        \$kigyou_code = \$result['kigyou_code'];
        \$conveni_limit = \$result['conveni_limit'];
        \$tel = \$this->Order->getPhoneNumber();

        // コンビニ別に決済情報を設定
        \$pay_info = '';
        switch (\$result['conveni_code']) {
            case \$this->eccubeConfig['gmo_epsilon']['conveni_id']['seveneleven']:
                \$pay_info .= \$this->eccubeConfig['gmo_epsilon']['conveni_pre_message']['seveneleven'].\"\\n\\n\";

                \$pay_info .= \"払込票URL:\$haraikomi_url\\n\";
                \$pay_info .= \"払込票番号（13桁）:\$receipt_no\\n\";
                \$pay_info .= \"お支払期限:\$conveni_limit\\n\\n\";

                \$pay_info .= \$this->eccubeConfig['gmo_epsilon']['conveni_message']['seveneleven'].\"\\n\\n\";
                break;
            case \$this->eccubeConfig['gmo_epsilon']['conveni_id']['familymart']:
                \$pay_info .= \$this->eccubeConfig['gmo_epsilon']['conveni_pre_message']['familymart'].\"\\n\\n\";

                \$pay_info .= \"企業コード（5桁）:\$kigyou_code\\n\";
                \$pay_info .= \"注文番号（12桁）:\$receipt_no\\n\";
                \$pay_info .= \"お支払期限:\$conveni_limit\\n\\n\";

                \$pay_info .= \$this->eccubeConfig['gmo_epsilon']['conveni_message']['familymart'].\"\\n\\n\";
                break;
            case \$this->eccubeConfig['gmo_epsilon']['conveni_id']['lawson']:
                \$pay_info .= \$this->eccubeConfig['gmo_epsilon']['conveni_pre_message']['lawson'].\"\\n\\n\";

                \$pay_info .= \"受付番号（6桁）:\$receipt_no\\n\";
                \$pay_info .= \"電話番号:\$tel\\n\";
                \$pay_info .= \"お支払期限:\$conveni_limit\\n\\n\";

                \$pay_info .= \$this->eccubeConfig['gmo_epsilon']['conveni_message']['lawson'].\"\\n\\n\";
                break;
            case \$this->eccubeConfig['gmo_epsilon']['conveni_id']['seicomart']:
                \$pay_info .= \$this->eccubeConfig['gmo_epsilon']['conveni_pre_message']['seicomart'].\"\\n\\n\";

                \$pay_info .= \"受付番号（6桁）:\$receipt_no\\n\";
                \$pay_info .= \"電話番号:\$tel\\n\";
                \$pay_info .= \"お支払期限:\$conveni_limit\\n\\n\";

                \$pay_info .= \$this->eccubeConfig['gmo_epsilon']['conveni_message']['seicomart'].\"\\n\\n\";
                break;
            case \$this->eccubeConfig['gmo_epsilon']['conveni_id']['ministop']:
                \$pay_info .= \$this->eccubeConfig['gmo_epsilon']['conveni_pre_message']['ministop'].\"\\n\\n\";

                \$pay_info .= \"払込票番号:\$receipt_no\\n\";
                \$pay_info .= \"電話番号:\$tel\\n\";
                \$pay_info .= \"お支払期限:\$conveni_limit\\n\\n\";

                \$pay_info .= \$this->eccubeConfig['gmo_epsilon']['conveni_message']['ministop'].\"\\n\\n\";
                break;
        }

        return \$pay_info;
    }

    /**
     * 決済情報を受注完了メッセージにセット
     *
     * @param string pay_info
     */
    public function setOrderCompleteMessages(\$pay_info)
    {
        \$complete_mail_message = <<<EOT
************************************************
コンビニ決済情報
************************************************
\$pay_info
EOT;

        // URLをリンクに変換
        // EC-CUBE 4.2以降は `target=\"_blank\"` や `onClick=\"...\"` が動作しない (https://github.com/EC-CUBE/ec-cube/issues/5372)
        \$pay_info = preg_replace('/(http.*?)\\\\n/', \"<a href=\\\"\$1\\\" target=\\\"_blank\\\">\$1</a>\\n\", \$pay_info);
        \$pay_info = nl2br(\$pay_info, false);

        \$complete_message = <<<EOT
        <div class=\"ec-rectHeading\">
            <h2>■コンビニ決済情報</h2>
        </div>
        <p style=\"text-align:left; word-wrap: break-word; white-space: normal;\">\$pay_info</p>
EOT;

        // 注文完了メールにメッセージを追加
        \$this->Order->appendCompleteMailMessage(\$complete_mail_message);
        // 注文完了画面にメッセージを追加
        \$this->Order->appendCompleteMessage(\$complete_message);
    }

    /**
     * {@inheritdoc}
     */
    public function verify(): PaymentResult
    {
        \$PaymentResult = new PaymentResult();

        return \$PaymentResult->setSuccess(true);
    }

    /**
     * {@inheritdoc}
     */
    public function setFormType(FormInterface \$form): void
    {
        \$this->form = \$form;
    }

    /**
     * {@inheritdoc}
     */
    public function setOrder(Order \$Order): void
    {
        \$this->Order = \$Order;
    }
}
", "EccubePaymentLite42/Service/Method/Conveni.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Service\\Method\\Conveni.php");
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
