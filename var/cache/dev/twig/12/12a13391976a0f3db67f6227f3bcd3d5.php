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

/* EccubePaymentLite42/Controller/Admin/Order/CreateRegCreditOrderController.php */
class __TwigTemplate_a157aa8b005dcc257efd38c75ff8553b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Admin/Order/CreateRegCreditOrderController.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Admin/Order/CreateRegCreditOrderController.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Controller\\Admin\\Order;

use Eccube\\Controller\\AbstractController;
use Eccube\\Entity\\Order;
use Eccube\\Repository\\OrderRepository;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Service\\GetProductInformationFromOrderService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonOrderNoService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\GetCardCgiUrlService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestGetSales2Service;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestGetUserInfoService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestReceiveOrderService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequestService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonUrlService;
use Plugin\\EccubePaymentLite42\\Service\\Method\\Reg_Credit;
use Symfony\\Component\\Routing\\Annotation\\Route;

class CreateRegCreditOrderController extends AbstractController
{
    /**
     * @var GmoEpsilonRequestService
     */
    private \$gmoEpsilonRequestService;
    /**
     * @var OrderRepository
     */
    private \$orderRepository;
    /**
     * @var GmoEpsilonUrlService
     */
    private \$gmoEpsilonUrlService;
    /**
     * @var GetProductInformationFromOrderService
     */
    private \$getProductInformationFromOrderService;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;
    /**
     * @var GmoEpsilonOrderNoService
     */
    private \$gmoEpsilonOrderNoService;
    /**
     * @var RequestGetUserInfoService
     */
    private \$requestGetUserInfoService;
    /**
     * @var GetCardCgiUrlService
     */
    private \$getCardCgiUrlService;
    /**
     * @var RequestReceiveOrderService
     */
    private \$requestReceiveOrderService;
    /**
     * @var RequestGetSales2Service
     */
    private \$requestGetSales2Service;

    public function __construct(
        OrderRepository \$orderRepository,
        GmoEpsilonRequestService \$gmoEpsilonRequestService,
        GmoEpsilonUrlService \$gmoEpsilonUrlService,
        GetProductInformationFromOrderService \$getProductInformationFromOrderService,
        ConfigRepository \$configRepository,
        GmoEpsilonOrderNoService \$gmoEpsilonOrderNoService,
        RequestGetUserInfoService \$requestGetUserInfoService,
        GetCardCgiUrlService \$getCardCgiUrlService,
        RequestReceiveOrderService \$requestReceiveOrderService,
        RequestGetSales2Service \$requestGetSales2Service
    ) {
        \$this->gmoEpsilonRequestService = \$gmoEpsilonRequestService;
        \$this->orderRepository = \$orderRepository;
        \$this->gmoEpsilonUrlService = \$gmoEpsilonUrlService;
        \$this->getProductInformationFromOrderService = \$getProductInformationFromOrderService;
        \$this->configRepository = \$configRepository;
        \$this->gmoEpsilonOrderNoService = \$gmoEpsilonOrderNoService;
        \$this->requestGetUserInfoService = \$requestGetUserInfoService;
        \$this->getCardCgiUrlService = \$getCardCgiUrlService;
        \$this->requestReceiveOrderService = \$requestReceiveOrderService;
        \$this->requestGetSales2Service = \$requestGetSales2Service;
    }

    /**
     * @Route(
     *     \"%eccube_admin_route%/eccube_payment_lite/order/{id}/create_reg_credit_order\",
     *     name=\"eccube_payment_lite42_admin_create_reg_credit_order\"
     * )
     */
    public function index(\$id)
    {
        /** @var Order \$Order */
        \$Order = \$this->orderRepository->find(\$id);
        \$Customer = \$Order->getCustomer();
        if (is_null(\$Customer)) {
            \$this->addError(
                '非会員の受注は、イプシロン決済登録が出来ません。',
                'admin'
            );

            return \$this->redirectToRoute('admin_order_edit', [
                'id' => \$Order->getId(),
            ]);
        }
        if (!is_null(\$Order->getPayment())
            && \$Order->getPayment()->getMethodClass() !== Reg_Credit::class) {
            \$this->addError(
                \$this->eccubeConfig['gmo_epsilon']['pay_name']['reg_credit'].'以外の受注は、イプシロン決済登録が出来ません。',
                'admin'
            );

            return \$this->redirectToRoute('admin_order_edit', [
                'id' => \$Order->getId(),
            ]);
        }

        \$getSalesResult = \$this->requestGetSales2Service->handle(null, \$Order->getGmoEpsilonOrderNo());
        // gmo_epsilon_order_noが未登録または、gmo_epsilon_order_noに紐づく決済情報が無い場合
        if (is_null(\$Order->getGmoEpsilonOrderNo()) || \$getSalesResult['order_number'] !== 0) {
            \$results = \$this
                ->requestReceiveOrderService
                ->handle(\$Customer, 2, 'eccube_payment_lite42_admin_create_reg_credit_order', \$Order);
            if (\$results['status'] === 'NG') {
                \$this->addError(
                    \$results['message'],
                    'admin'
                );

                return \$this->redirectToRoute('admin_order_edit', [
                    'id' => \$Order->getId(),
                ]);
            }

            return \$this->redirect(\$results['url']);
        }

        // 決済登録済みの場合
        \$this
            ->addWarning('すでにイプシロン決済サービスに決済情報を登録済みです。', 'admin');

        return \$this->redirectToRoute('admin_order_edit', [
            'id' => \$Order->getId(),
        ]);
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
        return "EccubePaymentLite42/Controller/Admin/Order/CreateRegCreditOrderController.php";
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

namespace Plugin\\EccubePaymentLite42\\Controller\\Admin\\Order;

use Eccube\\Controller\\AbstractController;
use Eccube\\Entity\\Order;
use Eccube\\Repository\\OrderRepository;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Service\\GetProductInformationFromOrderService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonOrderNoService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\GetCardCgiUrlService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestGetSales2Service;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestGetUserInfoService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestReceiveOrderService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequestService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonUrlService;
use Plugin\\EccubePaymentLite42\\Service\\Method\\Reg_Credit;
use Symfony\\Component\\Routing\\Annotation\\Route;

class CreateRegCreditOrderController extends AbstractController
{
    /**
     * @var GmoEpsilonRequestService
     */
    private \$gmoEpsilonRequestService;
    /**
     * @var OrderRepository
     */
    private \$orderRepository;
    /**
     * @var GmoEpsilonUrlService
     */
    private \$gmoEpsilonUrlService;
    /**
     * @var GetProductInformationFromOrderService
     */
    private \$getProductInformationFromOrderService;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;
    /**
     * @var GmoEpsilonOrderNoService
     */
    private \$gmoEpsilonOrderNoService;
    /**
     * @var RequestGetUserInfoService
     */
    private \$requestGetUserInfoService;
    /**
     * @var GetCardCgiUrlService
     */
    private \$getCardCgiUrlService;
    /**
     * @var RequestReceiveOrderService
     */
    private \$requestReceiveOrderService;
    /**
     * @var RequestGetSales2Service
     */
    private \$requestGetSales2Service;

    public function __construct(
        OrderRepository \$orderRepository,
        GmoEpsilonRequestService \$gmoEpsilonRequestService,
        GmoEpsilonUrlService \$gmoEpsilonUrlService,
        GetProductInformationFromOrderService \$getProductInformationFromOrderService,
        ConfigRepository \$configRepository,
        GmoEpsilonOrderNoService \$gmoEpsilonOrderNoService,
        RequestGetUserInfoService \$requestGetUserInfoService,
        GetCardCgiUrlService \$getCardCgiUrlService,
        RequestReceiveOrderService \$requestReceiveOrderService,
        RequestGetSales2Service \$requestGetSales2Service
    ) {
        \$this->gmoEpsilonRequestService = \$gmoEpsilonRequestService;
        \$this->orderRepository = \$orderRepository;
        \$this->gmoEpsilonUrlService = \$gmoEpsilonUrlService;
        \$this->getProductInformationFromOrderService = \$getProductInformationFromOrderService;
        \$this->configRepository = \$configRepository;
        \$this->gmoEpsilonOrderNoService = \$gmoEpsilonOrderNoService;
        \$this->requestGetUserInfoService = \$requestGetUserInfoService;
        \$this->getCardCgiUrlService = \$getCardCgiUrlService;
        \$this->requestReceiveOrderService = \$requestReceiveOrderService;
        \$this->requestGetSales2Service = \$requestGetSales2Service;
    }

    /**
     * @Route(
     *     \"%eccube_admin_route%/eccube_payment_lite/order/{id}/create_reg_credit_order\",
     *     name=\"eccube_payment_lite42_admin_create_reg_credit_order\"
     * )
     */
    public function index(\$id)
    {
        /** @var Order \$Order */
        \$Order = \$this->orderRepository->find(\$id);
        \$Customer = \$Order->getCustomer();
        if (is_null(\$Customer)) {
            \$this->addError(
                '非会員の受注は、イプシロン決済登録が出来ません。',
                'admin'
            );

            return \$this->redirectToRoute('admin_order_edit', [
                'id' => \$Order->getId(),
            ]);
        }
        if (!is_null(\$Order->getPayment())
            && \$Order->getPayment()->getMethodClass() !== Reg_Credit::class) {
            \$this->addError(
                \$this->eccubeConfig['gmo_epsilon']['pay_name']['reg_credit'].'以外の受注は、イプシロン決済登録が出来ません。',
                'admin'
            );

            return \$this->redirectToRoute('admin_order_edit', [
                'id' => \$Order->getId(),
            ]);
        }

        \$getSalesResult = \$this->requestGetSales2Service->handle(null, \$Order->getGmoEpsilonOrderNo());
        // gmo_epsilon_order_noが未登録または、gmo_epsilon_order_noに紐づく決済情報が無い場合
        if (is_null(\$Order->getGmoEpsilonOrderNo()) || \$getSalesResult['order_number'] !== 0) {
            \$results = \$this
                ->requestReceiveOrderService
                ->handle(\$Customer, 2, 'eccube_payment_lite42_admin_create_reg_credit_order', \$Order);
            if (\$results['status'] === 'NG') {
                \$this->addError(
                    \$results['message'],
                    'admin'
                );

                return \$this->redirectToRoute('admin_order_edit', [
                    'id' => \$Order->getId(),
                ]);
            }

            return \$this->redirect(\$results['url']);
        }

        // 決済登録済みの場合
        \$this
            ->addWarning('すでにイプシロン決済サービスに決済情報を登録済みです。', 'admin');

        return \$this->redirectToRoute('admin_order_edit', [
            'id' => \$Order->getId(),
        ]);
    }
}
", "EccubePaymentLite42/Controller/Admin/Order/CreateRegCreditOrderController.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Controller\\Admin\\Order\\CreateRegCreditOrderController.php");
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
