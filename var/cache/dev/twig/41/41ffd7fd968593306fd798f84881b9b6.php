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

/* EccubePaymentLite42/EventListener/EventSubscriber/Front/Shopping/CreditCardInfoEventSubscriber.php */
class __TwigTemplate_91f31e398ec4d6a9f71fb3b0ab286552 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/EventListener/EventSubscriber/Front/Shopping/CreditCardInfoEventSubscriber.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/EventListener/EventSubscriber/Front/Shopping/CreditCardInfoEventSubscriber.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\EventListener\\EventSubscriber\\Front\\Shopping;

use Eccube\\Common\\EccubeConfig;
use Eccube\\Entity\\Order;
use Eccube\\Event\\TemplateEvent;
use Eccube\\Repository\\PaymentRepository;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestGetUserInfoService;
use Plugin\\EccubePaymentLite42\\Service\\Method\\Credit;
use Plugin\\EccubePaymentLite42\\Service\\Method\\Reg_Credit;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Form\\FormView;

class CreditCardInfoEventSubscriber implements EventSubscriberInterface
{
    /**
     * @var RequestGetUserInfoService
     */
    private \$requestGetUserInfoService;
    /**
     * @var EccubeConfig
     */
    private \$eccubeConfig;
    /**
     * @var PaymentRepository
     */
    private \$paymentRepository;

    public function __construct(
        RequestGetUserInfoService \$requestGetUserInfoService,
        EccubeConfig \$eccubeConfig,
        PaymentRepository \$paymentRepository
    ) {
        \$this->requestGetUserInfoService = \$requestGetUserInfoService;
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->paymentRepository = \$paymentRepository;
    }

    public static function getSubscribedEvents()
    {
        return [
            'Shopping/index.twig' => 'index',
        ];
    }

    public function index(TemplateEvent \$event)
    {
        /** @var Order \$Order */
        \$Order = \$event->getParameter('Order');

        if (!is_null(\$Order->getPayment()) &&
            Credit::class !== \$Order->getPayment()->getMethodClass() &&
            Reg_Credit::class !== \$Order->getPayment()->getMethodClass()) {
            return;
        }
        // ゲスト購入の場合はクレジットカード情報を表示しない
        if (is_null(\$Order->getCustomer())) {
            return;
        }
        \$results = \$this->requestGetUserInfoService->handle(\$Order->getCustomer()->getId());
        \$isRegisteredCreditCard = true;
        // クレジットカード情報が未登録の場合は、登録済みのクレジットカードのラジオボタンを表示しない
        if (\$results['status'] === 'NG') {
            \$RegCreditPayment = \$this->paymentRepository->findOneBy([
                'method_class' => Reg_Credit::class,
            ]);
            /** @var FormView \$paymentFormView */
            \$paymentFormView = \$event->getParameter('form')['Payment'];
            if (!is_null(\$RegCreditPayment) && !is_null(\$RegCreditPayment->getId())) {
                \$paymentFormView->offsetUnset((string) \$RegCreditPayment->getId());
            }
            \$isRegisteredCreditCard = false;
        }
        \$event->setParameter('isRegisteredCreditCard', \$isRegisteredCreditCard);
        if (!\$isRegisteredCreditCard) {
            return;
        }
        \$event->addSnippet('@EccubePaymentLite42/default/Shopping/credit_card_info.twig');
        \$event->setParameter('cardBrand', \$results['cardBrand']);
        \$event->setParameter('cardNumberMask', \$results['cardNumberMask']);
        \$event->setParameter('cardExpire', \$results['cardExpire']);
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
        return "EccubePaymentLite42/EventListener/EventSubscriber/Front/Shopping/CreditCardInfoEventSubscriber.php";
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

namespace Plugin\\EccubePaymentLite42\\EventListener\\EventSubscriber\\Front\\Shopping;

use Eccube\\Common\\EccubeConfig;
use Eccube\\Entity\\Order;
use Eccube\\Event\\TemplateEvent;
use Eccube\\Repository\\PaymentRepository;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestGetUserInfoService;
use Plugin\\EccubePaymentLite42\\Service\\Method\\Credit;
use Plugin\\EccubePaymentLite42\\Service\\Method\\Reg_Credit;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Form\\FormView;

class CreditCardInfoEventSubscriber implements EventSubscriberInterface
{
    /**
     * @var RequestGetUserInfoService
     */
    private \$requestGetUserInfoService;
    /**
     * @var EccubeConfig
     */
    private \$eccubeConfig;
    /**
     * @var PaymentRepository
     */
    private \$paymentRepository;

    public function __construct(
        RequestGetUserInfoService \$requestGetUserInfoService,
        EccubeConfig \$eccubeConfig,
        PaymentRepository \$paymentRepository
    ) {
        \$this->requestGetUserInfoService = \$requestGetUserInfoService;
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->paymentRepository = \$paymentRepository;
    }

    public static function getSubscribedEvents()
    {
        return [
            'Shopping/index.twig' => 'index',
        ];
    }

    public function index(TemplateEvent \$event)
    {
        /** @var Order \$Order */
        \$Order = \$event->getParameter('Order');

        if (!is_null(\$Order->getPayment()) &&
            Credit::class !== \$Order->getPayment()->getMethodClass() &&
            Reg_Credit::class !== \$Order->getPayment()->getMethodClass()) {
            return;
        }
        // ゲスト購入の場合はクレジットカード情報を表示しない
        if (is_null(\$Order->getCustomer())) {
            return;
        }
        \$results = \$this->requestGetUserInfoService->handle(\$Order->getCustomer()->getId());
        \$isRegisteredCreditCard = true;
        // クレジットカード情報が未登録の場合は、登録済みのクレジットカードのラジオボタンを表示しない
        if (\$results['status'] === 'NG') {
            \$RegCreditPayment = \$this->paymentRepository->findOneBy([
                'method_class' => Reg_Credit::class,
            ]);
            /** @var FormView \$paymentFormView */
            \$paymentFormView = \$event->getParameter('form')['Payment'];
            if (!is_null(\$RegCreditPayment) && !is_null(\$RegCreditPayment->getId())) {
                \$paymentFormView->offsetUnset((string) \$RegCreditPayment->getId());
            }
            \$isRegisteredCreditCard = false;
        }
        \$event->setParameter('isRegisteredCreditCard', \$isRegisteredCreditCard);
        if (!\$isRegisteredCreditCard) {
            return;
        }
        \$event->addSnippet('@EccubePaymentLite42/default/Shopping/credit_card_info.twig');
        \$event->setParameter('cardBrand', \$results['cardBrand']);
        \$event->setParameter('cardNumberMask', \$results['cardNumberMask']);
        \$event->setParameter('cardExpire', \$results['cardExpire']);
    }
}
", "EccubePaymentLite42/EventListener/EventSubscriber/Front/Shopping/CreditCardInfoEventSubscriber.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\EventListener\\EventSubscriber\\Front\\Shopping\\CreditCardInfoEventSubscriber.php");
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
