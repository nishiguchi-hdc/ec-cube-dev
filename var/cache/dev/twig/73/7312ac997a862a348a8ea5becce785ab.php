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

/* EccubePaymentLite42/EventListener/EventSubscriber/Front/Shopping/AddDescriptionShoppingConfirmEventSubscriber.php */
class __TwigTemplate_2db5dd0658fbce20e0e4505f9dac0951 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/EventListener/EventSubscriber/Front/Shopping/AddDescriptionShoppingConfirmEventSubscriber.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/EventListener/EventSubscriber/Front/Shopping/AddDescriptionShoppingConfirmEventSubscriber.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\EventListener\\EventSubscriber\\Front\\Shopping;

use Eccube\\Entity\\Master\\SaleType;
use Eccube\\Event\\TemplateEvent;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Service\\Method\\Credit;
use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Plugin\\EccubePaymentLite42\\Service\\RegularDiscountService;


class AddDescriptionShoppingConfirmEventSubscriber implements EventSubscriberInterface
{
    /**
     * @var ConfigRepository
     */
    private \$configRepository;
    /**
     * @var ContainerInterface
     */
    private \$container;
    /**
     * @var RegularDiscountService
     */
    private \$regularDiscountService;

    public function __construct(
        ConfigRepository \$configRepository,
        ContainerInterface \$parameter_bag,
        RegularDiscountService \$regularDiscountService
    ) {
        \$this->configRepository = \$configRepository;
        \$this->container = \$parameter_bag;
        \$this->regularDiscountService = \$regularDiscountService;
    }

    public static function getSubscribedEvents()
    {
        return [
            'Shopping/confirm.twig' => 'confirm',
        ];
    }

    public function confirm(TemplateEvent \$event)
    {
        /** @var Order \$Order */
        \$Order = \$event->getParameter('Order');

        \$quantity = 0;
        \$ProductOrderItems = \$Order->getProductOrderItems();
        foreach (\$ProductOrderItems as \$OrderItems){
            \$quantity += \$OrderItems->getQuantity();
        }

        /** @var SaleType \$SaleType */
        \$SaleType = \$Order->getShippings()->first()->getDelivery()->getSaleType();

        \$discountPrice = [];
        for (\$regularCount = 1; \$regularCount <= 5; \$regularCount++) {
            \$discountPrice[\$regularCount] = 0;
            foreach (\$Order->getItems() as \$item) {
                \$ProductClass = \$item->getProductClass();
                /** @var RegularDiscount \$RegularDiscount */
                \$RegularDiscount = \$ProductClass ? \$ProductClass->getRegularDiscount() : null;
                if (\$item->isProduct() && \$RegularDiscount) {
                    \$discountRate = \$this->regularDiscountService->getDiscountRate(\$RegularDiscount->getDiscountId(), \$regularCount);
                    \$discountPrice[\$regularCount] += !empty(\$discountRate) ? \$this->regularDiscountService->getDiscountPrice(\$item, \$discountRate) : 0;
                }
            }
        }
        if (\$SaleType->getName() === '定期商品') {
            \$event->setParameter('total_quantity_item', \$quantity);
            \$event->setParameter('ProductOrderItems', \$ProductOrderItems);
            \$event->setParameter('first_discount', \$discountPrice[1]);
            \$event->setParameter('second_discount', \$discountPrice[2]);
            \$event->setParameter('third_discount', \$discountPrice[3]);
            \$event->setParameter('forth_discount', \$discountPrice[4]);
            \$event->setParameter('fifth_discount', \$discountPrice[5]);
            \$event->addSnippet('@EccubePaymentLite42/default/Shopping/specified_commercial_transactions.twig');
        }

        \$event->addSnippet('@EccubePaymentLite42/default/Shopping/specified_commercial_payment_time.twig');
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
        return "EccubePaymentLite42/EventListener/EventSubscriber/Front/Shopping/AddDescriptionShoppingConfirmEventSubscriber.php";
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

use Eccube\\Entity\\Master\\SaleType;
use Eccube\\Event\\TemplateEvent;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Service\\Method\\Credit;
use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Plugin\\EccubePaymentLite42\\Service\\RegularDiscountService;


class AddDescriptionShoppingConfirmEventSubscriber implements EventSubscriberInterface
{
    /**
     * @var ConfigRepository
     */
    private \$configRepository;
    /**
     * @var ContainerInterface
     */
    private \$container;
    /**
     * @var RegularDiscountService
     */
    private \$regularDiscountService;

    public function __construct(
        ConfigRepository \$configRepository,
        ContainerInterface \$parameter_bag,
        RegularDiscountService \$regularDiscountService
    ) {
        \$this->configRepository = \$configRepository;
        \$this->container = \$parameter_bag;
        \$this->regularDiscountService = \$regularDiscountService;
    }

    public static function getSubscribedEvents()
    {
        return [
            'Shopping/confirm.twig' => 'confirm',
        ];
    }

    public function confirm(TemplateEvent \$event)
    {
        /** @var Order \$Order */
        \$Order = \$event->getParameter('Order');

        \$quantity = 0;
        \$ProductOrderItems = \$Order->getProductOrderItems();
        foreach (\$ProductOrderItems as \$OrderItems){
            \$quantity += \$OrderItems->getQuantity();
        }

        /** @var SaleType \$SaleType */
        \$SaleType = \$Order->getShippings()->first()->getDelivery()->getSaleType();

        \$discountPrice = [];
        for (\$regularCount = 1; \$regularCount <= 5; \$regularCount++) {
            \$discountPrice[\$regularCount] = 0;
            foreach (\$Order->getItems() as \$item) {
                \$ProductClass = \$item->getProductClass();
                /** @var RegularDiscount \$RegularDiscount */
                \$RegularDiscount = \$ProductClass ? \$ProductClass->getRegularDiscount() : null;
                if (\$item->isProduct() && \$RegularDiscount) {
                    \$discountRate = \$this->regularDiscountService->getDiscountRate(\$RegularDiscount->getDiscountId(), \$regularCount);
                    \$discountPrice[\$regularCount] += !empty(\$discountRate) ? \$this->regularDiscountService->getDiscountPrice(\$item, \$discountRate) : 0;
                }
            }
        }
        if (\$SaleType->getName() === '定期商品') {
            \$event->setParameter('total_quantity_item', \$quantity);
            \$event->setParameter('ProductOrderItems', \$ProductOrderItems);
            \$event->setParameter('first_discount', \$discountPrice[1]);
            \$event->setParameter('second_discount', \$discountPrice[2]);
            \$event->setParameter('third_discount', \$discountPrice[3]);
            \$event->setParameter('forth_discount', \$discountPrice[4]);
            \$event->setParameter('fifth_discount', \$discountPrice[5]);
            \$event->addSnippet('@EccubePaymentLite42/default/Shopping/specified_commercial_transactions.twig');
        }

        \$event->addSnippet('@EccubePaymentLite42/default/Shopping/specified_commercial_payment_time.twig');
    }
}
", "EccubePaymentLite42/EventListener/EventSubscriber/Front/Shopping/AddDescriptionShoppingConfirmEventSubscriber.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\EventListener\\EventSubscriber\\Front\\Shopping\\AddDescriptionShoppingConfirmEventSubscriber.php");
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
