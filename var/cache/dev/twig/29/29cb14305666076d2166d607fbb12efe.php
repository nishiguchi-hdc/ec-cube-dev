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

/* EccubePaymentLite42/Controller/Front/PaymentNotification/PaymentNotificationController.php */
class __TwigTemplate_1374f59eed4703b14855ec44c08154f9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Front/PaymentNotification/PaymentNotificationController.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Front/PaymentNotification/PaymentNotificationController.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Controller\\Front\\PaymentNotification;

use Eccube\\Controller\\AbstractController;
use Eccube\\Entity\\Master\\OrderStatus;
use Eccube\\Entity\\Order;
use Eccube\\Repository\\CartRepository;
use Eccube\\Repository\\CartItemRepository;
use Eccube\\Repository\\MailHistoryRepository;
use Eccube\\Repository\\Master\\OrderStatusRepository;
use Eccube\\Repository\\OrderRepository;
use Eccube\\Service\\CartService;
use Eccube\\Service\\MailService;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;
use Eccube\\Service\\PurchaseFlow\\PurchaseFlow;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Entity\\PaymentStatus;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Repository\\PaymentStatusRepository;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\Annotation\\Route;

class PaymentNotificationController extends AbstractController
{
    /**
     * @var OrderRepository
     */
    private \$orderRepository;
    /**
     * @var PaymentStatusRepository
     */
    private \$paymentStatusRepository;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;
    /**
     * @var PurchaseFlow
     */
    protected \$purchaseFlow;
    /**
     * @var CartRepository
     */
    private \$cartRepository;
    /**
     * @var CartItemRepository
     */
    private \$cartItemRepository;

    public function __construct(
        OrderRepository \$orderRepository,
        PaymentStatusRepository \$paymentStatusRepository,
        ConfigRepository \$configRepository,
        OrderStatusRepository \$orderStatusRepository,
        PurchaseFlow \$shoppingPurchaseFlow,
        CartService \$cartService,
        MailService \$mailService,
        MailHistoryRepository \$mailHistoryRepository,
        CartRepository \$cartRepository,
        CartItemRepository \$cartItemRepository
    ) {
        \$this->orderRepository = \$orderRepository;
        \$this->paymentStatusRepository = \$paymentStatusRepository;
        \$this->configRepository = \$configRepository;
        \$this->orderStatusRepository = \$orderStatusRepository;
        \$this->purchaseFlow = \$shoppingPurchaseFlow;
        \$this->cartService = \$cartService;
        \$this->mailService = \$mailService;
        \$this->mailHistoryRepository = \$mailHistoryRepository;
        \$this->cartRepository = \$cartRepository;
        \$this->cartItemRepository = \$cartItemRepository;
    }

    /**
     * 決済完了通知を受け取る.
     *
     * @Route(
     *     \"/epsilon_receive_complete\",
     *     name=\"eccube_payment_lite42_payment_notification\"
     * )
     */
    public function receiveComplete(Request \$request): Response
    {
        // 注文完了画面の処理と競合するため、処理を遅らせる
        sleep(10);
        logs('gmo_epsilon')->info('決済完了通知: start.');
        logs('gmo_epsilon')->info('POST param argument '.print_r(\$request->getContent(), true));
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        \$contract_code = \$Config->getContractCode();
        if (\$contract_code != \$request->get('contract_code') ||
            empty(\$request->get('trans_code')) ||
            empty(\$request->get('state'))
        ) {
            logs('gmo_epsilon')->error('決済完了通知 : POST param argument '.print_r(\$request->getContent(), true));
            // 異常応答
            return new Response(0);
        }

        // 決済会社から受注番号を受け取る
        \$orderId = \$this->getOrderId(\$request->get('order_number'));
        /** @var Order \$Order */
        \$Order = \$this->getOrderByNo(\$orderId);

        if (!\$Order) {
            \$Order = \$this->orderRepository->findOneBy(['order_no' => \$orderId]);
            if (!\$Order) {
                logs('gmo_epsilon')->error('決済完了通知 : Not Found Order. POST param argument ' . print_r(\$request->getContent(), true));
                // 異常応答
                return new Response(0);
            }
            logs('gmo_epsilon')->info('決済完了通知 : end. 対象データ処理済み');
            // 正常終了 完了画面で処理済み
            return new Response(1);
        }

        // Get order status before updating
        \$orderStatusIdBefore = \$Order->getOrderStatus()->getId();

        // purchaseFlow::commitを呼び出し, 購入処理を完了させる.
        \$this->purchaseFlow->commit(\$Order, new PurchaseContext());

        // 決済ステータスを更新する
        /** @var PaymentStatus \$PaymentStatus */
        \$PaymentStatus = \$this->paymentStatusRepository->find(\$request->get('state'));
        \$Order->setPaymentStatus(\$PaymentStatus);
        \$Order->setOrderStatus(\$this->orderStatusRepository->find(OrderStatus::NEW));
        \$Order->setPaymentDate(new \\DateTime());

        // 会員の場合、購入回数、購入金額などを更新
        if (\$Customer = \$Order->getCustomer()) {
            \$this->orderRepository->updateOrderSummary(\$Customer);
        }

        // トランザクションコードを登録
        \$Order->setTransCode(\$request->get('trans_code'));

        // カートを削除する
        \$this->clearCart(\$Order->getPreOrderId());

        // メール送信
        \$MailHistory = \$this->mailHistoryRepository->findBy(['Order' => \$Order]);

        /**
         * ■操作と現象
         * ユーザーが決済処理をした直後に画面を閉じたりした時
         * ①イプシロン側の決済処理は完了
         * ②ECCUBE側が決済処理中のまま
         * ■決済完了通知の動き
         * イプシロン側の処理は完了 してるので、決済完了通知がくる。
         * 既にECCUBE側の決済処理が完了している場合は対象データ処理済みで終了。
         * 決済処理中ならステータスの更新等の決済処理をする。
         * メール送信の処理は必ず入れるが、メール履歴（dtb_mail_history）を確認して無ければ送信の判断を入れる。
         */
        if (!\$MailHistory && \$orderStatusIdBefore != OrderStatus::NEW) {
            \$MailHistory = \$this->mailService->sendOrderMail(\$Order);
        }

        \$this->entityManager->persist(\$Order);
        \$this->entityManager->flush();
        logs('gmo_epsilon')->info('決済完了通知: end.');
        // 正常終了 完了画面で処理済み
        return new Response(1);
    }

    /**
     * レスポンスパラメータorder_numberから受注番号を取得
     * @var order_number 受注番号xリクエスト日時 (ex. 12345x20190301)
     * @return integer
     */
    private function getOrderId(\$order_number)
    {
        if (empty(\$order_number)) {
            return null;
        } else if (is_numeric(\$order_number)) {
            return \$order_number;
        } else{
            \\preg_match('/(\\d+)x(\\d+)/', \$order_number, \$matchs);

            return \$matchs[1];
        }
    }

    /**
     * 注文番号で受注を検索する.
     *
     * @param \$orderId
     *
     * @return Order
     */
    private function getOrderByNo(\$orderId)
    {
        /** @var OrderStatus \$pendingOrderStatus */
        \$pendingOrderStatus = \$this->orderStatusRepository->find(OrderStatus::PENDING);

        /** @var Order \$Order */
        \$Order = \$this->orderRepository->findOneBy([
            'order_no' => \$orderId,
            'OrderStatus' => \$pendingOrderStatus,
        ]);

        if (!\$Order) {
            /** @var OrderStatus \$newOrderStatus */
            \$newOrderStatus = \$this->orderStatusRepository->find(OrderStatus::NEW);

            /** @var Order \$Order */
            \$Order = \$this->orderRepository->findOneBy([
                'order_no' => \$orderId,
                'OrderStatus' => \$newOrderStatus,
            ]);
        }

        return \$Order;
    }

    /**
     * Clear cart
     * @param \$preOrderId
     */
    private function clearCart(\$preOrderId)
    {
        \$Cart =  \$this->cartRepository->findOneBy(['pre_order_id' => \$preOrderId]);
        if (\$Cart) {
            \$CartItems = \$this->cartItemRepository->findBy(['Cart' => \$Cart]);
            if (\$CartItems) {
                foreach (\$CartItems as \$CartItem) {
                    \$this->cartItemRepository->delete(\$CartItem);
                }
            }
            \$this->cartRepository->delete(\$Cart);
            \$this->entityManager->flush();
        }
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
        return "EccubePaymentLite42/Controller/Front/PaymentNotification/PaymentNotificationController.php";
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

namespace Plugin\\EccubePaymentLite42\\Controller\\Front\\PaymentNotification;

use Eccube\\Controller\\AbstractController;
use Eccube\\Entity\\Master\\OrderStatus;
use Eccube\\Entity\\Order;
use Eccube\\Repository\\CartRepository;
use Eccube\\Repository\\CartItemRepository;
use Eccube\\Repository\\MailHistoryRepository;
use Eccube\\Repository\\Master\\OrderStatusRepository;
use Eccube\\Repository\\OrderRepository;
use Eccube\\Service\\CartService;
use Eccube\\Service\\MailService;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;
use Eccube\\Service\\PurchaseFlow\\PurchaseFlow;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Entity\\PaymentStatus;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Repository\\PaymentStatusRepository;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\Annotation\\Route;

class PaymentNotificationController extends AbstractController
{
    /**
     * @var OrderRepository
     */
    private \$orderRepository;
    /**
     * @var PaymentStatusRepository
     */
    private \$paymentStatusRepository;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;
    /**
     * @var PurchaseFlow
     */
    protected \$purchaseFlow;
    /**
     * @var CartRepository
     */
    private \$cartRepository;
    /**
     * @var CartItemRepository
     */
    private \$cartItemRepository;

    public function __construct(
        OrderRepository \$orderRepository,
        PaymentStatusRepository \$paymentStatusRepository,
        ConfigRepository \$configRepository,
        OrderStatusRepository \$orderStatusRepository,
        PurchaseFlow \$shoppingPurchaseFlow,
        CartService \$cartService,
        MailService \$mailService,
        MailHistoryRepository \$mailHistoryRepository,
        CartRepository \$cartRepository,
        CartItemRepository \$cartItemRepository
    ) {
        \$this->orderRepository = \$orderRepository;
        \$this->paymentStatusRepository = \$paymentStatusRepository;
        \$this->configRepository = \$configRepository;
        \$this->orderStatusRepository = \$orderStatusRepository;
        \$this->purchaseFlow = \$shoppingPurchaseFlow;
        \$this->cartService = \$cartService;
        \$this->mailService = \$mailService;
        \$this->mailHistoryRepository = \$mailHistoryRepository;
        \$this->cartRepository = \$cartRepository;
        \$this->cartItemRepository = \$cartItemRepository;
    }

    /**
     * 決済完了通知を受け取る.
     *
     * @Route(
     *     \"/epsilon_receive_complete\",
     *     name=\"eccube_payment_lite42_payment_notification\"
     * )
     */
    public function receiveComplete(Request \$request): Response
    {
        // 注文完了画面の処理と競合するため、処理を遅らせる
        sleep(10);
        logs('gmo_epsilon')->info('決済完了通知: start.');
        logs('gmo_epsilon')->info('POST param argument '.print_r(\$request->getContent(), true));
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        \$contract_code = \$Config->getContractCode();
        if (\$contract_code != \$request->get('contract_code') ||
            empty(\$request->get('trans_code')) ||
            empty(\$request->get('state'))
        ) {
            logs('gmo_epsilon')->error('決済完了通知 : POST param argument '.print_r(\$request->getContent(), true));
            // 異常応答
            return new Response(0);
        }

        // 決済会社から受注番号を受け取る
        \$orderId = \$this->getOrderId(\$request->get('order_number'));
        /** @var Order \$Order */
        \$Order = \$this->getOrderByNo(\$orderId);

        if (!\$Order) {
            \$Order = \$this->orderRepository->findOneBy(['order_no' => \$orderId]);
            if (!\$Order) {
                logs('gmo_epsilon')->error('決済完了通知 : Not Found Order. POST param argument ' . print_r(\$request->getContent(), true));
                // 異常応答
                return new Response(0);
            }
            logs('gmo_epsilon')->info('決済完了通知 : end. 対象データ処理済み');
            // 正常終了 完了画面で処理済み
            return new Response(1);
        }

        // Get order status before updating
        \$orderStatusIdBefore = \$Order->getOrderStatus()->getId();

        // purchaseFlow::commitを呼び出し, 購入処理を完了させる.
        \$this->purchaseFlow->commit(\$Order, new PurchaseContext());

        // 決済ステータスを更新する
        /** @var PaymentStatus \$PaymentStatus */
        \$PaymentStatus = \$this->paymentStatusRepository->find(\$request->get('state'));
        \$Order->setPaymentStatus(\$PaymentStatus);
        \$Order->setOrderStatus(\$this->orderStatusRepository->find(OrderStatus::NEW));
        \$Order->setPaymentDate(new \\DateTime());

        // 会員の場合、購入回数、購入金額などを更新
        if (\$Customer = \$Order->getCustomer()) {
            \$this->orderRepository->updateOrderSummary(\$Customer);
        }

        // トランザクションコードを登録
        \$Order->setTransCode(\$request->get('trans_code'));

        // カートを削除する
        \$this->clearCart(\$Order->getPreOrderId());

        // メール送信
        \$MailHistory = \$this->mailHistoryRepository->findBy(['Order' => \$Order]);

        /**
         * ■操作と現象
         * ユーザーが決済処理をした直後に画面を閉じたりした時
         * ①イプシロン側の決済処理は完了
         * ②ECCUBE側が決済処理中のまま
         * ■決済完了通知の動き
         * イプシロン側の処理は完了 してるので、決済完了通知がくる。
         * 既にECCUBE側の決済処理が完了している場合は対象データ処理済みで終了。
         * 決済処理中ならステータスの更新等の決済処理をする。
         * メール送信の処理は必ず入れるが、メール履歴（dtb_mail_history）を確認して無ければ送信の判断を入れる。
         */
        if (!\$MailHistory && \$orderStatusIdBefore != OrderStatus::NEW) {
            \$MailHistory = \$this->mailService->sendOrderMail(\$Order);
        }

        \$this->entityManager->persist(\$Order);
        \$this->entityManager->flush();
        logs('gmo_epsilon')->info('決済完了通知: end.');
        // 正常終了 完了画面で処理済み
        return new Response(1);
    }

    /**
     * レスポンスパラメータorder_numberから受注番号を取得
     * @var order_number 受注番号xリクエスト日時 (ex. 12345x20190301)
     * @return integer
     */
    private function getOrderId(\$order_number)
    {
        if (empty(\$order_number)) {
            return null;
        } else if (is_numeric(\$order_number)) {
            return \$order_number;
        } else{
            \\preg_match('/(\\d+)x(\\d+)/', \$order_number, \$matchs);

            return \$matchs[1];
        }
    }

    /**
     * 注文番号で受注を検索する.
     *
     * @param \$orderId
     *
     * @return Order
     */
    private function getOrderByNo(\$orderId)
    {
        /** @var OrderStatus \$pendingOrderStatus */
        \$pendingOrderStatus = \$this->orderStatusRepository->find(OrderStatus::PENDING);

        /** @var Order \$Order */
        \$Order = \$this->orderRepository->findOneBy([
            'order_no' => \$orderId,
            'OrderStatus' => \$pendingOrderStatus,
        ]);

        if (!\$Order) {
            /** @var OrderStatus \$newOrderStatus */
            \$newOrderStatus = \$this->orderStatusRepository->find(OrderStatus::NEW);

            /** @var Order \$Order */
            \$Order = \$this->orderRepository->findOneBy([
                'order_no' => \$orderId,
                'OrderStatus' => \$newOrderStatus,
            ]);
        }

        return \$Order;
    }

    /**
     * Clear cart
     * @param \$preOrderId
     */
    private function clearCart(\$preOrderId)
    {
        \$Cart =  \$this->cartRepository->findOneBy(['pre_order_id' => \$preOrderId]);
        if (\$Cart) {
            \$CartItems = \$this->cartItemRepository->findBy(['Cart' => \$Cart]);
            if (\$CartItems) {
                foreach (\$CartItems as \$CartItem) {
                    \$this->cartItemRepository->delete(\$CartItem);
                }
            }
            \$this->cartRepository->delete(\$Cart);
            \$this->entityManager->flush();
        }
    }
}
", "EccubePaymentLite42/Controller/Front/PaymentNotification/PaymentNotificationController.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Controller\\Front\\PaymentNotification\\PaymentNotificationController.php");
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
