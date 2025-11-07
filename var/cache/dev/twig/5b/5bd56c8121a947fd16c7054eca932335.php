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

/* EccubePaymentLite42/Service/UpdateNextShippingDateFromRePaymentService.php */
class __TwigTemplate_02c1b7d72fbba7f29a29da91ad684c27 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/UpdateNextShippingDateFromRePaymentService.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/UpdateNextShippingDateFromRePaymentService.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Service;

use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Entity\\Customer;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrder;
use Plugin\\EccubePaymentLite42\\Entity\\RegularShipping;
use Plugin\\EccubePaymentLite42\\Entity\\RegularStatus;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Repository\\RegularOrderRepository;
use Plugin\\EccubePaymentLite42\\Repository\\RegularStatusRepository;

class UpdateNextShippingDateFromRePaymentService
{
    /**
     * @var ConfigRepository
     */
    private \$configRepository;
    /**
     * @var EntityManagerInterface
     */
    private \$entityManager;
    /**
     * @var RegularStatusRepository
     */
    private \$regularStatusRepository;
    /**
     * @var RegularOrderRepository
     */
    private \$regularOrderRepository;
    /**
     * @var IsActiveRegularService
     */
    private \$isActiveRegularService;

    public function __construct(
        ConfigRepository \$configRepository,
        RegularStatusRepository \$regularStatusRepository,
        RegularOrderRepository \$regularOrderRepository,
        EntityManagerInterface \$entityManager,
        IsActiveRegularService \$isActiveRegularService
    ) {
        \$this->configRepository = \$configRepository;
        \$this->regularStatusRepository = \$regularStatusRepository;
        \$this->regularOrderRepository = \$regularOrderRepository;
        \$this->entityManager = \$entityManager;
        \$this->isActiveRegularService = \$isActiveRegularService;
    }

    public function update(Customer \$Customer)
    {
        if (!\$this->isActiveRegularService->isActive()) {
            return;
        }
        /** @var RegularStatus \$RegularStatusPaymentError */
        \$RegularStatusPaymentError = \$this->regularStatusRepository->find(RegularStatus::WAITING_RE_PAYMENT);
        /** @var RegularOrder[] \$RegularOrders */
        \$RegularOrders = \$this->regularOrderRepository->findBy([
            'Customer' => \$Customer,
            'RegularStatus' => \$RegularStatusPaymentError,
        ]);
        if (empty(\$RegularOrders)) {
            return;
        }
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        \$nextDeliveryDate = new \\DateTime('today');
        \$nextDeliveryDate->modify('+'.\$Config->getNextDeliveryDaysAfterRePayment().' day');
        foreach (\$RegularOrders as \$RegularOrder) {
            /** @var RegularShipping \$RegularShipping */
            \$RegularShipping = \$RegularOrder->getRegularShippings()->first();
            \$RegularShipping->setNextDeliveryDate(\$nextDeliveryDate);
            \$this->entityManager->persist(\$RegularShipping);
        }
        \$this->entityManager->flush();
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
        return "EccubePaymentLite42/Service/UpdateNextShippingDateFromRePaymentService.php";
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

namespace Plugin\\EccubePaymentLite42\\Service;

use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Entity\\Customer;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrder;
use Plugin\\EccubePaymentLite42\\Entity\\RegularShipping;
use Plugin\\EccubePaymentLite42\\Entity\\RegularStatus;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Repository\\RegularOrderRepository;
use Plugin\\EccubePaymentLite42\\Repository\\RegularStatusRepository;

class UpdateNextShippingDateFromRePaymentService
{
    /**
     * @var ConfigRepository
     */
    private \$configRepository;
    /**
     * @var EntityManagerInterface
     */
    private \$entityManager;
    /**
     * @var RegularStatusRepository
     */
    private \$regularStatusRepository;
    /**
     * @var RegularOrderRepository
     */
    private \$regularOrderRepository;
    /**
     * @var IsActiveRegularService
     */
    private \$isActiveRegularService;

    public function __construct(
        ConfigRepository \$configRepository,
        RegularStatusRepository \$regularStatusRepository,
        RegularOrderRepository \$regularOrderRepository,
        EntityManagerInterface \$entityManager,
        IsActiveRegularService \$isActiveRegularService
    ) {
        \$this->configRepository = \$configRepository;
        \$this->regularStatusRepository = \$regularStatusRepository;
        \$this->regularOrderRepository = \$regularOrderRepository;
        \$this->entityManager = \$entityManager;
        \$this->isActiveRegularService = \$isActiveRegularService;
    }

    public function update(Customer \$Customer)
    {
        if (!\$this->isActiveRegularService->isActive()) {
            return;
        }
        /** @var RegularStatus \$RegularStatusPaymentError */
        \$RegularStatusPaymentError = \$this->regularStatusRepository->find(RegularStatus::WAITING_RE_PAYMENT);
        /** @var RegularOrder[] \$RegularOrders */
        \$RegularOrders = \$this->regularOrderRepository->findBy([
            'Customer' => \$Customer,
            'RegularStatus' => \$RegularStatusPaymentError,
        ]);
        if (empty(\$RegularOrders)) {
            return;
        }
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        \$nextDeliveryDate = new \\DateTime('today');
        \$nextDeliveryDate->modify('+'.\$Config->getNextDeliveryDaysAfterRePayment().' day');
        foreach (\$RegularOrders as \$RegularOrder) {
            /** @var RegularShipping \$RegularShipping */
            \$RegularShipping = \$RegularOrder->getRegularShippings()->first();
            \$RegularShipping->setNextDeliveryDate(\$nextDeliveryDate);
            \$this->entityManager->persist(\$RegularShipping);
        }
        \$this->entityManager->flush();
    }
}
", "EccubePaymentLite42/Service/UpdateNextShippingDateFromRePaymentService.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Service\\UpdateNextShippingDateFromRePaymentService.php");
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
