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

/* EccubePaymentLite42/EventListener/EventSubscriber/Front/Shopping/AddRegularCycleFormEventSubscriber.php */
class __TwigTemplate_2406cf416a5d66df57a34343cae2022e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/EventListener/EventSubscriber/Front/Shopping/AddRegularCycleFormEventSubscriber.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/EventListener/EventSubscriber/Front/Shopping/AddRegularCycleFormEventSubscriber.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\EventListener\\EventSubscriber\\Front\\Shopping;

use Eccube\\Common\\EccubeConfig;
use Eccube\\Entity\\Master\\SaleType;
use Eccube\\Entity\\Order;
use Eccube\\Entity\\Shipping;
use Eccube\\Event\\TemplateEvent;
use Eccube\\Service\\Payment\\Method\\Cash;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Entity\\RegularCycle;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Repository\\RegularCycleRepository;
use Plugin\\EccubePaymentLite42\\Service\\CalculateNextDeliveryDateService;
use Plugin\\EccubePaymentLite42\\Service\\IsRegularPaymentService;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\HttpFoundation\\RequestStack;

class AddRegularCycleFormEventSubscriber implements EventSubscriberInterface
{
    /**
     * @var EccubeConfig
     */
    protected \$eccubeConfig;
    /**
     * @var IsRegularPaymentService
     */
    private \$isRegularPaymentService;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;
    /**
     * @var SessionInterface
     */
    private \$session;
    /**
     * @var RegularCycleRepository
     */
    private \$regularCycleRepository;
    /**
     * @var CalculateNextDeliveryDateService
     */
    private \$calculateNextDeliveryDateService;

    public function __construct(
        EccubeConfig \$eccubeConfig,
        IsRegularPaymentService \$isRegularPaymentService,
        ConfigRepository \$configRepository,
        RequestStack \$requestStack,
        RegularCycleRepository \$regularCycleRepository,
        CalculateNextDeliveryDateService \$calculateNextDeliveryDateService
    ) {
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->isRegularPaymentService = \$isRegularPaymentService;
        \$this->configRepository = \$configRepository;
        \$this->session = \$requestStack->getSession();
        \$this->regularCycleRepository = \$regularCycleRepository;
        \$this->calculateNextDeliveryDateService = \$calculateNextDeliveryDateService;
    }

    public static function getSubscribedEvents()
    {
        return [
            'Shopping/index.twig' => 'index',
            'Shopping/confirm.twig' => 'confirm',
        ];
    }

    public function index(TemplateEvent \$event)
    {
        /** @var Order \$Order */
        \$Order = \$event->getParameter('Order');

        /** @var SaleType \$SaleType */
        \$SaleType = \$Order->getShippings()->first()->getDelivery()->getSaleType();

        if (\$SaleType->getName() !== '定期商品') {
            return;
        }

        if (!\$this->isRegularPaymentService->isRegularPayment(\$Order)) {
            return;
        }

        \$event->addSnippet('@EccubePaymentLite42/default/Shopping/regular_cycle_form.twig');
    }

    public function confirm(TemplateEvent \$event)
    {
        /** @var Order \$Order */
        \$Order = \$event->getParameter('Order');
        /** @var FormView \$form */
        \$form = \$event->getParameter('form');

        /** @var SaleType \$SaleType */
        \$SaleType = \$Order->getShippings()->first()->getDelivery()->getSaleType();

        if (\$SaleType->getName() !== '定期商品') {
            return;
        }

        if (!\$this->isRegularPaymentService->isRegularPayment(\$Order)) {
            return;
        }
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        /** @var Shipping \$Shipping */
        \$Shipping = \$Order->getShippings()->first();
        if (is_null(\$Shipping->getShippingDeliveryDate())) {
            \$addDay = \$Config->getFirstDeliveryDays();
            \$firstDeliveryDate = new \\DateTime('+'.\$Config->getFirstDeliveryDays().' day');
        } else {
            \$firstDeliveryDate = \$Shipping->getShippingDeliveryDate();
            \$addDay = \$this->getDiffShippingDeliveryDate(\$firstDeliveryDate);
        }
        /** @var RegularCycle \$RegularCycle */
        \$RegularCycle = \$this
            ->regularCycleRepository
            ->find(\$this->session->get('regular_cycle_id'));
        \$nextDeliveryDate = \$this
            ->calculateNextDeliveryDateService
            ->calc(\$RegularCycle, \$addDay);

        \$nextDate = \$nextDeliveryDate;
        // get list delivery date
        \$nextOrderDate = [];
        \$nextOrderDate[0] = clone \$firstDeliveryDate;
        \$nextOrderDate[1] = clone \$nextDeliveryDate;
        \$limitCycle = 4;
        for (\$i = 2; \$i <= \$limitCycle; \$i++) {
            \$nextDeliveryDate = \$this->calculateNextDeliveryDateService->calc_delivery(\$RegularCycle, clone \$nextDeliveryDate);
            \$nextOrderDate[\$i] = \$nextDeliveryDate;
        }

        \$firstDay = \$Config->getFirstDeliveryDays();
        \$deadlineDay = \$Config->getRegularOrderDeadline();

        // payment is 代金引換
        \$isCashPayment = false;
        if (!is_null(\$Order->getPayment())
            && \$Order->getPayment()->getMethodClass() === Cash::class) {
            \$isCashPayment = true;
        }

        // Get list product item
        \$ProductItems = \$Order->getProductOrderItems();
        \$event->setParameter('ProductItems', \$ProductItems);
        \$event->setParameter('limitCycle', 5);
        \$event->setParameter('isCashPayment', \$isCashPayment);
        \$event->setParameter('firstDay', \$firstDay);
        \$event->setParameter('deadlineDay', \$deadlineDay);
        \$event->setParameter('nextOrderDate', \$nextOrderDate);
        \$event->setParameter('label', \$form->children['RegularCycles']->vars['data']);
        \$event->setParameter('firstDeliveryDate', \$firstDeliveryDate);
        \$event->setParameter('nextDeliveryDate', \$nextDate);
        \$event->addSnippet('@EccubePaymentLite42/default/Shopping/regular_cycle_confirm_form.twig');
    }

    private function getDiffShippingDeliveryDate(\\DateTime \$shippingDeliveryDate): int
    {
        \$today = new \\DateTime('today');
        \$interval = \$today->diff(\$shippingDeliveryDate);

        return (int) \$interval->format('%a');
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
        return "EccubePaymentLite42/EventListener/EventSubscriber/Front/Shopping/AddRegularCycleFormEventSubscriber.php";
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
use Eccube\\Entity\\Master\\SaleType;
use Eccube\\Entity\\Order;
use Eccube\\Entity\\Shipping;
use Eccube\\Event\\TemplateEvent;
use Eccube\\Service\\Payment\\Method\\Cash;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Entity\\RegularCycle;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Repository\\RegularCycleRepository;
use Plugin\\EccubePaymentLite42\\Service\\CalculateNextDeliveryDateService;
use Plugin\\EccubePaymentLite42\\Service\\IsRegularPaymentService;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\HttpFoundation\\RequestStack;

class AddRegularCycleFormEventSubscriber implements EventSubscriberInterface
{
    /**
     * @var EccubeConfig
     */
    protected \$eccubeConfig;
    /**
     * @var IsRegularPaymentService
     */
    private \$isRegularPaymentService;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;
    /**
     * @var SessionInterface
     */
    private \$session;
    /**
     * @var RegularCycleRepository
     */
    private \$regularCycleRepository;
    /**
     * @var CalculateNextDeliveryDateService
     */
    private \$calculateNextDeliveryDateService;

    public function __construct(
        EccubeConfig \$eccubeConfig,
        IsRegularPaymentService \$isRegularPaymentService,
        ConfigRepository \$configRepository,
        RequestStack \$requestStack,
        RegularCycleRepository \$regularCycleRepository,
        CalculateNextDeliveryDateService \$calculateNextDeliveryDateService
    ) {
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->isRegularPaymentService = \$isRegularPaymentService;
        \$this->configRepository = \$configRepository;
        \$this->session = \$requestStack->getSession();
        \$this->regularCycleRepository = \$regularCycleRepository;
        \$this->calculateNextDeliveryDateService = \$calculateNextDeliveryDateService;
    }

    public static function getSubscribedEvents()
    {
        return [
            'Shopping/index.twig' => 'index',
            'Shopping/confirm.twig' => 'confirm',
        ];
    }

    public function index(TemplateEvent \$event)
    {
        /** @var Order \$Order */
        \$Order = \$event->getParameter('Order');

        /** @var SaleType \$SaleType */
        \$SaleType = \$Order->getShippings()->first()->getDelivery()->getSaleType();

        if (\$SaleType->getName() !== '定期商品') {
            return;
        }

        if (!\$this->isRegularPaymentService->isRegularPayment(\$Order)) {
            return;
        }

        \$event->addSnippet('@EccubePaymentLite42/default/Shopping/regular_cycle_form.twig');
    }

    public function confirm(TemplateEvent \$event)
    {
        /** @var Order \$Order */
        \$Order = \$event->getParameter('Order');
        /** @var FormView \$form */
        \$form = \$event->getParameter('form');

        /** @var SaleType \$SaleType */
        \$SaleType = \$Order->getShippings()->first()->getDelivery()->getSaleType();

        if (\$SaleType->getName() !== '定期商品') {
            return;
        }

        if (!\$this->isRegularPaymentService->isRegularPayment(\$Order)) {
            return;
        }
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        /** @var Shipping \$Shipping */
        \$Shipping = \$Order->getShippings()->first();
        if (is_null(\$Shipping->getShippingDeliveryDate())) {
            \$addDay = \$Config->getFirstDeliveryDays();
            \$firstDeliveryDate = new \\DateTime('+'.\$Config->getFirstDeliveryDays().' day');
        } else {
            \$firstDeliveryDate = \$Shipping->getShippingDeliveryDate();
            \$addDay = \$this->getDiffShippingDeliveryDate(\$firstDeliveryDate);
        }
        /** @var RegularCycle \$RegularCycle */
        \$RegularCycle = \$this
            ->regularCycleRepository
            ->find(\$this->session->get('regular_cycle_id'));
        \$nextDeliveryDate = \$this
            ->calculateNextDeliveryDateService
            ->calc(\$RegularCycle, \$addDay);

        \$nextDate = \$nextDeliveryDate;
        // get list delivery date
        \$nextOrderDate = [];
        \$nextOrderDate[0] = clone \$firstDeliveryDate;
        \$nextOrderDate[1] = clone \$nextDeliveryDate;
        \$limitCycle = 4;
        for (\$i = 2; \$i <= \$limitCycle; \$i++) {
            \$nextDeliveryDate = \$this->calculateNextDeliveryDateService->calc_delivery(\$RegularCycle, clone \$nextDeliveryDate);
            \$nextOrderDate[\$i] = \$nextDeliveryDate;
        }

        \$firstDay = \$Config->getFirstDeliveryDays();
        \$deadlineDay = \$Config->getRegularOrderDeadline();

        // payment is 代金引換
        \$isCashPayment = false;
        if (!is_null(\$Order->getPayment())
            && \$Order->getPayment()->getMethodClass() === Cash::class) {
            \$isCashPayment = true;
        }

        // Get list product item
        \$ProductItems = \$Order->getProductOrderItems();
        \$event->setParameter('ProductItems', \$ProductItems);
        \$event->setParameter('limitCycle', 5);
        \$event->setParameter('isCashPayment', \$isCashPayment);
        \$event->setParameter('firstDay', \$firstDay);
        \$event->setParameter('deadlineDay', \$deadlineDay);
        \$event->setParameter('nextOrderDate', \$nextOrderDate);
        \$event->setParameter('label', \$form->children['RegularCycles']->vars['data']);
        \$event->setParameter('firstDeliveryDate', \$firstDeliveryDate);
        \$event->setParameter('nextDeliveryDate', \$nextDate);
        \$event->addSnippet('@EccubePaymentLite42/default/Shopping/regular_cycle_confirm_form.twig');
    }

    private function getDiffShippingDeliveryDate(\\DateTime \$shippingDeliveryDate): int
    {
        \$today = new \\DateTime('today');
        \$interval = \$today->diff(\$shippingDeliveryDate);

        return (int) \$interval->format('%a');
    }
}
", "EccubePaymentLite42/EventListener/EventSubscriber/Front/Shopping/AddRegularCycleFormEventSubscriber.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\EventListener\\EventSubscriber\\Front\\Shopping\\AddRegularCycleFormEventSubscriber.php");
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
