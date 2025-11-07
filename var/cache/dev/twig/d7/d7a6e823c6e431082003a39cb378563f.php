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

/* EccubePaymentLite42/EventListener/EventSubscriber/Front/Shopping/RemoveRegCreditRadioBtnWhenGuest.php */
class __TwigTemplate_df23badf31ea24dd84c8c95795e74e25 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/EventListener/EventSubscriber/Front/Shopping/RemoveRegCreditRadioBtnWhenGuest.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/EventListener/EventSubscriber/Front/Shopping/RemoveRegCreditRadioBtnWhenGuest.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\EventListener\\EventSubscriber\\Front\\Shopping;

use Eccube\\Entity\\Order;
use Eccube\\Event\\TemplateEvent;
use Eccube\\Repository\\PaymentRepository;
use Plugin\\EccubePaymentLite42\\Service\\Method\\Reg_Credit;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Form\\FormView;

class RemoveRegCreditRadioBtnWhenGuest implements EventSubscriberInterface
{
    /**
     * @var PaymentRepository
     */
    private \$paymentRepository;

    public function __construct(
        PaymentRepository \$paymentRepository
    ) {
        \$this->paymentRepository = \$paymentRepository;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            'Shopping/index.twig' => 'index',
        ];
    }

    public function index(TemplateEvent \$templateEvent)
    {
        /** @var Order \$Order */
        \$Order = \$templateEvent->getParameter('Order');
        // ゲスト購入の場合は登録済みのクレジットカードのラジオボタンを表示しない
        if (is_null(\$Order->getCustomer())) {
            \$RegCreditPayment = \$this->paymentRepository->findOneBy([
                'method_class' => Reg_Credit::class,
            ]);
            /** @var FormView \$paymentFormView */
            \$paymentFormView = \$templateEvent->getParameter('form')['Payment'];
            if (!is_null(\$RegCreditPayment) && !is_null(\$RegCreditPayment->getId())) {
                \$paymentFormView->offsetUnset((string) \$RegCreditPayment->getId());
            }

            return;
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
        return "EccubePaymentLite42/EventListener/EventSubscriber/Front/Shopping/RemoveRegCreditRadioBtnWhenGuest.php";
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

use Eccube\\Entity\\Order;
use Eccube\\Event\\TemplateEvent;
use Eccube\\Repository\\PaymentRepository;
use Plugin\\EccubePaymentLite42\\Service\\Method\\Reg_Credit;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Form\\FormView;

class RemoveRegCreditRadioBtnWhenGuest implements EventSubscriberInterface
{
    /**
     * @var PaymentRepository
     */
    private \$paymentRepository;

    public function __construct(
        PaymentRepository \$paymentRepository
    ) {
        \$this->paymentRepository = \$paymentRepository;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            'Shopping/index.twig' => 'index',
        ];
    }

    public function index(TemplateEvent \$templateEvent)
    {
        /** @var Order \$Order */
        \$Order = \$templateEvent->getParameter('Order');
        // ゲスト購入の場合は登録済みのクレジットカードのラジオボタンを表示しない
        if (is_null(\$Order->getCustomer())) {
            \$RegCreditPayment = \$this->paymentRepository->findOneBy([
                'method_class' => Reg_Credit::class,
            ]);
            /** @var FormView \$paymentFormView */
            \$paymentFormView = \$templateEvent->getParameter('form')['Payment'];
            if (!is_null(\$RegCreditPayment) && !is_null(\$RegCreditPayment->getId())) {
                \$paymentFormView->offsetUnset((string) \$RegCreditPayment->getId());
            }

            return;
        }
    }
}
", "EccubePaymentLite42/EventListener/EventSubscriber/Front/Shopping/RemoveRegCreditRadioBtnWhenGuest.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\EventListener\\EventSubscriber\\Front\\Shopping\\RemoveRegCreditRadioBtnWhenGuest.php");
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
