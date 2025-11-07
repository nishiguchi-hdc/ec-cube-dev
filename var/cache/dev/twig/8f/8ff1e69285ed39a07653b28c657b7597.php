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

/* EccubePaymentLite42/Service/Method/Virtual_Account.php */
class __TwigTemplate_9034b7e9e86032510ce4106d7e57df00 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/Method/Virtual_Account.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/Method/Virtual_Account.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Service\\Method;

use Eccube\\Common\\EccubeConfig;
use Eccube\\Entity\\Master\\OrderStatus;
use Eccube\\Entity\\Order;
use Eccube\\Repository\\Master\\OrderStatusRepository;
use Eccube\\Service\\Payment\\PaymentDispatcher;
use Eccube\\Service\\Payment\\PaymentMethodInterface;
use Eccube\\Service\\Payment\\PaymentResult;
use Eccube\\Service\\PointHelper;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;
use Eccube\\Service\\PurchaseFlow\\PurchaseFlow;
use Plugin\\EccubePaymentLite42\\Service\\CreateSystemErrorResponseService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestReceiveOrder3Service;
use Plugin\\EccubePaymentLite42\\Service\\UpdateGmoEpsilonOrderService;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Request;

class Virtual_Account implements PaymentMethodInterface
{
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
        EccubeConfig \$eccubeConfig,
        CreateSystemErrorResponseService \$createSystemErrorResponseService,
        UpdateGmoEpsilonOrderService \$updateGmoEpsilonOrderService,
        RequestReceiveOrder3Service \$requestReceiveOrder3Service,
        OrderStatusRepository \$orderStatusRepository,
        PurchaseFlow \$shoppingPurchaseFlow,
        PointHelper \$pointHelper
    ) {
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->createSystemErrorResponseService = \$createSystemErrorResponseService;
        \$this->updateGmoEpsilonOrderService = \$updateGmoEpsilonOrderService;
        \$this->requestReceiveOrder3Service = \$requestReceiveOrder3Service;
        \$this->orderStatusRepository = \$orderStatusRepository;
        \$this->purchaseFlow = \$shoppingPurchaseFlow;
        \$this->pointHelper = \$pointHelper;
    }

    public function getCheckParameter(): array
    {
        return [
            'trans_code',
            'user_id',
            'result',
            'order_number',
        ];
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
    public function checkout(): PaymentResult
    {
        \$request = Request::createFromGlobals();
        \$PaymentResult = new PaymentResult();
        if (!\$this->checkParameter(\$request, \$this->getCheckParameter())) {
            logs('gmo_epsilon')->info('受注ID: '.\$this->Order->getId().' 不正なGETリクエストを受信しました。');
            \$PaymentResult->setErrors([
                '不正なリクエストを受信しました。',
            ]);

            return \$PaymentResult;
        }

        \$this
            ->updateGmoEpsilonOrderService
            ->updateAfterMakingPayment(
                \$this->Order,
                \$request->get('trans_code'),
                \$request->get('order_number')
            );
        if (\$this->Order->getUsePoint() > 0) {
            // ユーザの保有ポイントを減算
            \$this->pointHelper->prepare(\$this->Order, \$this->Order->getUsePoint());
        }
        \$PaymentResult->setSuccess(true);
        logs('gmo_epsilon')->info('受注ID: '.\$this->Order->getId().'Virtual Account payment process end.');

        return \$PaymentResult;
    }

    /**
     * {@inheritdoc}
     */
    public function apply()
    {
        logs('gmo_epsilon')->info('受注ID: '.\$this->Order->getId().'Virtual Account payment process start.');
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
        \$dispatcher = new PaymentDispatcher();
        \$results = \$this
            ->requestReceiveOrder3Service
            ->handle(
                \$this->Order,
                \$this->eccubeConfig['gmo_epsilon']['st_code']['virtual_account']
            );
        if (\$results['status'] === 'NG') {
            logs('gmo_epsilon')->error('ERR_CODE = '.\$results['err_code']);
            logs('gmo_epsilon')->error('ERR_DETAIL = '.\$results['message']);
            \$response = \$this->createSystemErrorResponseService->get(
                trans('gmo_epsilon.front.shopping.error'),
                \$results['message']
            );

            return \$dispatcher->setResponse(\$response);
        }
        \$response = new RedirectResponse(\$results['url']);

        return \$dispatcher->setResponse(\$response);
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

    private function checkParameter(\$request, \$arrCheckParameter): bool
    {
        foreach (\$arrCheckParameter as \$key) {
            if (empty(\$request->get(\$key)) && \$request->get(\$key) !== '0') {
                return false;
            }
        }

        return true;
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
        return "EccubePaymentLite42/Service/Method/Virtual_Account.php";
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
use Eccube\\Service\\Payment\\PaymentDispatcher;
use Eccube\\Service\\Payment\\PaymentMethodInterface;
use Eccube\\Service\\Payment\\PaymentResult;
use Eccube\\Service\\PointHelper;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;
use Eccube\\Service\\PurchaseFlow\\PurchaseFlow;
use Plugin\\EccubePaymentLite42\\Service\\CreateSystemErrorResponseService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestReceiveOrder3Service;
use Plugin\\EccubePaymentLite42\\Service\\UpdateGmoEpsilonOrderService;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Request;

class Virtual_Account implements PaymentMethodInterface
{
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
        EccubeConfig \$eccubeConfig,
        CreateSystemErrorResponseService \$createSystemErrorResponseService,
        UpdateGmoEpsilonOrderService \$updateGmoEpsilonOrderService,
        RequestReceiveOrder3Service \$requestReceiveOrder3Service,
        OrderStatusRepository \$orderStatusRepository,
        PurchaseFlow \$shoppingPurchaseFlow,
        PointHelper \$pointHelper
    ) {
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->createSystemErrorResponseService = \$createSystemErrorResponseService;
        \$this->updateGmoEpsilonOrderService = \$updateGmoEpsilonOrderService;
        \$this->requestReceiveOrder3Service = \$requestReceiveOrder3Service;
        \$this->orderStatusRepository = \$orderStatusRepository;
        \$this->purchaseFlow = \$shoppingPurchaseFlow;
        \$this->pointHelper = \$pointHelper;
    }

    public function getCheckParameter(): array
    {
        return [
            'trans_code',
            'user_id',
            'result',
            'order_number',
        ];
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
    public function checkout(): PaymentResult
    {
        \$request = Request::createFromGlobals();
        \$PaymentResult = new PaymentResult();
        if (!\$this->checkParameter(\$request, \$this->getCheckParameter())) {
            logs('gmo_epsilon')->info('受注ID: '.\$this->Order->getId().' 不正なGETリクエストを受信しました。');
            \$PaymentResult->setErrors([
                '不正なリクエストを受信しました。',
            ]);

            return \$PaymentResult;
        }

        \$this
            ->updateGmoEpsilonOrderService
            ->updateAfterMakingPayment(
                \$this->Order,
                \$request->get('trans_code'),
                \$request->get('order_number')
            );
        if (\$this->Order->getUsePoint() > 0) {
            // ユーザの保有ポイントを減算
            \$this->pointHelper->prepare(\$this->Order, \$this->Order->getUsePoint());
        }
        \$PaymentResult->setSuccess(true);
        logs('gmo_epsilon')->info('受注ID: '.\$this->Order->getId().'Virtual Account payment process end.');

        return \$PaymentResult;
    }

    /**
     * {@inheritdoc}
     */
    public function apply()
    {
        logs('gmo_epsilon')->info('受注ID: '.\$this->Order->getId().'Virtual Account payment process start.');
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
        \$dispatcher = new PaymentDispatcher();
        \$results = \$this
            ->requestReceiveOrder3Service
            ->handle(
                \$this->Order,
                \$this->eccubeConfig['gmo_epsilon']['st_code']['virtual_account']
            );
        if (\$results['status'] === 'NG') {
            logs('gmo_epsilon')->error('ERR_CODE = '.\$results['err_code']);
            logs('gmo_epsilon')->error('ERR_DETAIL = '.\$results['message']);
            \$response = \$this->createSystemErrorResponseService->get(
                trans('gmo_epsilon.front.shopping.error'),
                \$results['message']
            );

            return \$dispatcher->setResponse(\$response);
        }
        \$response = new RedirectResponse(\$results['url']);

        return \$dispatcher->setResponse(\$response);
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

    private function checkParameter(\$request, \$arrCheckParameter): bool
    {
        foreach (\$arrCheckParameter as \$key) {
            if (empty(\$request->get(\$key)) && \$request->get(\$key) !== '0') {
                return false;
            }
        }

        return true;
    }
}
", "EccubePaymentLite42/Service/Method/Virtual_Account.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Service\\Method\\Virtual_Account.php");
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
