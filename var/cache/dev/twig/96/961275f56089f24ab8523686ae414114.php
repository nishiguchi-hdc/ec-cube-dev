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

/* EccubePaymentLite42/Controller/Front/Shopping/EpsilonPaymentBackController.php */
class __TwigTemplate_73e193a023549dd7bf998b03395f323b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Front/Shopping/EpsilonPaymentBackController.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Front/Shopping/EpsilonPaymentBackController.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Controller\\Front\\Shopping;

use Eccube\\Controller\\AbstractController;
use Eccube\\Entity\\Master\\OrderStatus;
use Eccube\\Entity\\Order;
use Eccube\\Repository\\Master\\OrderStatusRepository;
use Eccube\\Repository\\OrderRepository;
use Eccube\\Service\\PointHelper;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;
use Eccube\\Service\\PurchaseFlow\\PurchaseFlow;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestGetSales2Service;
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;
use Symfony\\Component\\Routing\\Annotation\\Route;

class EpsilonPaymentBackController extends AbstractController
{
    /**
     * @var RequestGetSales2Service
     */
    private \$requestGetSales2Service;
    /**
     * @var OrderStatusRepository
     */
    private \$orderStatusRepository;
    /**
     * @var OrderRepository
     */
    private \$orderRepository;
    /**
     * @var PurchaseFlow
     */
    private \$purchaseFlow;
    /**
     * @var PointHelper
     */
    protected \$pointHelper;

    public function __construct(
        RequestGetSales2Service \$requestGetSales2Service,
        OrderStatusRepository \$orderStatusRepository,
        OrderRepository \$orderRepository,
        PurchaseFlow \$shoppingPurchaseFlow,
        PointHelper \$pointHelper
    ) {
        \$this->requestGetSales2Service = \$requestGetSales2Service;
        \$this->orderStatusRepository = \$orderStatusRepository;
        \$this->orderRepository = \$orderRepository;
        \$this->purchaseFlow = \$shoppingPurchaseFlow;
        \$this->pointHelper = \$pointHelper;
    }

    /**
     * @Route(
     *     \"/shopping/epsilon_payment/back\",
     *     name=\"eccube_payment_lite42_payment_back\"
     * )
     *
     * @return RedirectResponse
     */
    public function back(Request \$request)
    {
        \$transCode = '';
        \$orderNumber = '';
        if (\$request->query->get('trans_code')) {
            \$transCode = \$request->query->get('trans_code');
        }
        if (\$request->query->get('order_number')) {
            \$orderNumber = \$request->query->get('order_number');
        }
        \$results = \$this->requestGetSales2Service->handle(\$transCode, \$orderNumber);
        // マイページよりクレジットカードの登録を行った場合は、カード編集画面にリダイレクトさせる
        if (\$results['route'] === 'eccube_payment_lite42_mypage_credit_card_edit') {
            return \$this->redirectToRoute('eccube_payment_lite42_mypage_credit_card_index');
        }
        /** @var OrderStatus \$pendingOrderStatus */
        \$pendingOrderStatus = \$this->orderStatusRepository->find(OrderStatus::PENDING);

        // 決済会社から受注番号を受け取る
        \$orderId = \$this->getOrderId(\$orderNumber);

        /** @var Order \$Order */
        \$Order = \$this->orderRepository->findOneBy([
            'id' => \$orderId,
            'OrderStatus' => \$pendingOrderStatus,
        ]);

        if (!\$Order) {
            throw new NotFoundHttpException();
        }

        if (\$this->getUser() != \$Order->getCustomer()) {
            throw new NotFoundHttpException();
        }

        // 受注ステータスを購入処理中へ変更
        \$OrderStatus = \$this->orderStatusRepository->find(OrderStatus::PROCESSING);
        \$Order->setOrderStatus(\$OrderStatus);

        // purchaseFlow::rollbackを呼び出し, 購入処理をロールバックする.
        \$this->purchaseFlow->rollback(\$Order, new PurchaseContext());

        // Calculator point for customer
        if (\$Order->getUsePoint() > 0) {
            // ユーザの保有ポイントを減算
            \$this->pointHelper->prepare(\$Order, \$Order->getUsePoint());
        }
        \$this->entityManager->flush();

        return \$this->redirectToRoute('shopping');
    }

    /**
     * レスポンスパラメータorder_numberから受注番号を取得
     *
     * @var order_number 受注番号xリクエスト日時 (ex. 12345x20190301)
     *
     * @return integer
     */
    private function getOrderId(\$order_number)
    {
        if (empty(\$order_number)) {
            return null;
        } elseif (is_numeric(\$order_number)) {
            return \$order_number;
        } else {
            \\preg_match('/(\\d+)x(\\d+)/', \$order_number, \$matchs);

            return \$matchs[1];
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
        return "EccubePaymentLite42/Controller/Front/Shopping/EpsilonPaymentBackController.php";
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

namespace Plugin\\EccubePaymentLite42\\Controller\\Front\\Shopping;

use Eccube\\Controller\\AbstractController;
use Eccube\\Entity\\Master\\OrderStatus;
use Eccube\\Entity\\Order;
use Eccube\\Repository\\Master\\OrderStatusRepository;
use Eccube\\Repository\\OrderRepository;
use Eccube\\Service\\PointHelper;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;
use Eccube\\Service\\PurchaseFlow\\PurchaseFlow;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestGetSales2Service;
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;
use Symfony\\Component\\Routing\\Annotation\\Route;

class EpsilonPaymentBackController extends AbstractController
{
    /**
     * @var RequestGetSales2Service
     */
    private \$requestGetSales2Service;
    /**
     * @var OrderStatusRepository
     */
    private \$orderStatusRepository;
    /**
     * @var OrderRepository
     */
    private \$orderRepository;
    /**
     * @var PurchaseFlow
     */
    private \$purchaseFlow;
    /**
     * @var PointHelper
     */
    protected \$pointHelper;

    public function __construct(
        RequestGetSales2Service \$requestGetSales2Service,
        OrderStatusRepository \$orderStatusRepository,
        OrderRepository \$orderRepository,
        PurchaseFlow \$shoppingPurchaseFlow,
        PointHelper \$pointHelper
    ) {
        \$this->requestGetSales2Service = \$requestGetSales2Service;
        \$this->orderStatusRepository = \$orderStatusRepository;
        \$this->orderRepository = \$orderRepository;
        \$this->purchaseFlow = \$shoppingPurchaseFlow;
        \$this->pointHelper = \$pointHelper;
    }

    /**
     * @Route(
     *     \"/shopping/epsilon_payment/back\",
     *     name=\"eccube_payment_lite42_payment_back\"
     * )
     *
     * @return RedirectResponse
     */
    public function back(Request \$request)
    {
        \$transCode = '';
        \$orderNumber = '';
        if (\$request->query->get('trans_code')) {
            \$transCode = \$request->query->get('trans_code');
        }
        if (\$request->query->get('order_number')) {
            \$orderNumber = \$request->query->get('order_number');
        }
        \$results = \$this->requestGetSales2Service->handle(\$transCode, \$orderNumber);
        // マイページよりクレジットカードの登録を行った場合は、カード編集画面にリダイレクトさせる
        if (\$results['route'] === 'eccube_payment_lite42_mypage_credit_card_edit') {
            return \$this->redirectToRoute('eccube_payment_lite42_mypage_credit_card_index');
        }
        /** @var OrderStatus \$pendingOrderStatus */
        \$pendingOrderStatus = \$this->orderStatusRepository->find(OrderStatus::PENDING);

        // 決済会社から受注番号を受け取る
        \$orderId = \$this->getOrderId(\$orderNumber);

        /** @var Order \$Order */
        \$Order = \$this->orderRepository->findOneBy([
            'id' => \$orderId,
            'OrderStatus' => \$pendingOrderStatus,
        ]);

        if (!\$Order) {
            throw new NotFoundHttpException();
        }

        if (\$this->getUser() != \$Order->getCustomer()) {
            throw new NotFoundHttpException();
        }

        // 受注ステータスを購入処理中へ変更
        \$OrderStatus = \$this->orderStatusRepository->find(OrderStatus::PROCESSING);
        \$Order->setOrderStatus(\$OrderStatus);

        // purchaseFlow::rollbackを呼び出し, 購入処理をロールバックする.
        \$this->purchaseFlow->rollback(\$Order, new PurchaseContext());

        // Calculator point for customer
        if (\$Order->getUsePoint() > 0) {
            // ユーザの保有ポイントを減算
            \$this->pointHelper->prepare(\$Order, \$Order->getUsePoint());
        }
        \$this->entityManager->flush();

        return \$this->redirectToRoute('shopping');
    }

    /**
     * レスポンスパラメータorder_numberから受注番号を取得
     *
     * @var order_number 受注番号xリクエスト日時 (ex. 12345x20190301)
     *
     * @return integer
     */
    private function getOrderId(\$order_number)
    {
        if (empty(\$order_number)) {
            return null;
        } elseif (is_numeric(\$order_number)) {
            return \$order_number;
        } else {
            \\preg_match('/(\\d+)x(\\d+)/', \$order_number, \$matchs);

            return \$matchs[1];
        }
    }
}
", "EccubePaymentLite42/Controller/Front/Shopping/EpsilonPaymentBackController.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Controller\\Front\\Shopping\\EpsilonPaymentBackController.php");
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
