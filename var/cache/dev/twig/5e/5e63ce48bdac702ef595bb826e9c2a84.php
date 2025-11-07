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

/* EccubePaymentLite42/Service/UpdateRegularOrderService.php */
class __TwigTemplate_954da73e249f19382a101cb5eafbbae0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/UpdateRegularOrderService.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/UpdateRegularOrderService.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Service;

use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\NoResultException;
use Eccube\\Entity\\Order;
use Eccube\\Repository\\TaxRuleRepository;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrder;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrderItem;
use Plugin\\EccubePaymentLite42\\Entity\\RegularShipping;
use Plugin\\EccubePaymentLite42\\Entity\\RegularStatus;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Repository\\RegularStatusRepository;

class UpdateRegularOrderService
{
    /**
     * @var EntityManagerInterface
     */
    private \$entityManager;
    /**
     * @var TaxRuleRepository
     */
    private \$taxRuleRepository;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;
    /**
     * @var CalculateNextDeliveryDateService
     */
    private \$calculateNextDeliveryDateService;
    /**
     * @var RegularStatusRepository
     */
    private \$regularStatusRepository;

    public function __construct(
        TaxRuleRepository \$taxRuleRepository,
        ConfigRepository \$configRepository,
        EntityManagerInterface \$entityManager,
        CalculateNextDeliveryDateService \$calculateNextDeliveryDateService,
        RegularStatusRepository \$regularStatusRepository
    ) {
        \$this->taxRuleRepository = \$taxRuleRepository;
        \$this->configRepository = \$configRepository;
        \$this->entityManager = \$entityManager;
        \$this->calculateNextDeliveryDateService = \$calculateNextDeliveryDateService;
        \$this->regularStatusRepository = \$regularStatusRepository;
    }

    public function update(RegularOrder \$RegularOrder, Order \$Order)
    {
        /** @var RegularStatus \$RegularStatus */
        \$RegularStatus = \$this->regularStatusRepository->find(RegularStatus::CONTINUE);
        \$RegularOrder
            ->setRegularStatus(\$RegularStatus)
            ->setSubtotal(\$Order->getSubtotal())
            ->setTotal(\$Order->getTotal())
            ->setPaymentTotal(\$Order->getPaymentTotal())
        ;
        /** @var RegularOrderItem[] \$RegularOrderItems */
        \$RegularOrderItems = \$RegularOrder->getRegularOrderItems();
        foreach (\$RegularOrderItems as \$RegularOrderItem) {
            if (!\$RegularOrderItem->isProduct()) {
                continue;
            }
            \$ProductClass = \$RegularOrderItem->getProductClass();
            try {
                \$taxRule = \$this->taxRuleRepository->getByRule(\$ProductClass->getProduct(), \$ProductClass);
            } catch (NoResultException \$e) {
            }
            \$taxRate = \$taxRule->getTaxRate();
            \$RegularOrderItem
                ->setProductName(\$ProductClass->getProduct()->getName())
                ->setProductCode(\$ProductClass->getCode())
                ->setPrice(\$ProductClass->getPrice02())
                ->setTaxRate(\$taxRate)
            ;
        }
        \$this->entityManager->persist(\$RegularOrder);
        \$this->entityManager->flush();
    }

    public function updateAfterMakingPayment(RegularOrder \$RegularOrder)
    {
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        // 定期購入回数の更新
        \$RegularOrder
            ->setRegularOrderCount(\$RegularOrder->getRegularOrderCount() + 1)
            ->setRegularSkipFlag(0);
        // 次回お届け予定日と締め日、お届け予定日の更新
        foreach (\$RegularOrder->getRegularShippings() as \$RegularShipping) {
            \$nextDeliveryDate = \$this
                ->calculateNextDeliveryDateService
                ->calc(\$RegularOrder->getRegularCycle(), \$Config->getRegularOrderDeadline());
            \$shippingDeliveryDate = new \\DateTime('today');
            \$shippingDeliveryDate->modify('+'.\$Config->getRegularOrderDeadline().' day');
            /* @var RegularShipping \$RegularShipping */
            \$RegularShipping
                ->setShippingDeliveryDate(\$shippingDeliveryDate)
                ->setRegularOrder(\$RegularOrder)
                ->setNextDeliveryDate(\$nextDeliveryDate)
            ;
        }

        \$this->entityManager->persist(\$RegularOrder);
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
        return "EccubePaymentLite42/Service/UpdateRegularOrderService.php";
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
use Doctrine\\ORM\\NoResultException;
use Eccube\\Entity\\Order;
use Eccube\\Repository\\TaxRuleRepository;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrder;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrderItem;
use Plugin\\EccubePaymentLite42\\Entity\\RegularShipping;
use Plugin\\EccubePaymentLite42\\Entity\\RegularStatus;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Repository\\RegularStatusRepository;

class UpdateRegularOrderService
{
    /**
     * @var EntityManagerInterface
     */
    private \$entityManager;
    /**
     * @var TaxRuleRepository
     */
    private \$taxRuleRepository;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;
    /**
     * @var CalculateNextDeliveryDateService
     */
    private \$calculateNextDeliveryDateService;
    /**
     * @var RegularStatusRepository
     */
    private \$regularStatusRepository;

    public function __construct(
        TaxRuleRepository \$taxRuleRepository,
        ConfigRepository \$configRepository,
        EntityManagerInterface \$entityManager,
        CalculateNextDeliveryDateService \$calculateNextDeliveryDateService,
        RegularStatusRepository \$regularStatusRepository
    ) {
        \$this->taxRuleRepository = \$taxRuleRepository;
        \$this->configRepository = \$configRepository;
        \$this->entityManager = \$entityManager;
        \$this->calculateNextDeliveryDateService = \$calculateNextDeliveryDateService;
        \$this->regularStatusRepository = \$regularStatusRepository;
    }

    public function update(RegularOrder \$RegularOrder, Order \$Order)
    {
        /** @var RegularStatus \$RegularStatus */
        \$RegularStatus = \$this->regularStatusRepository->find(RegularStatus::CONTINUE);
        \$RegularOrder
            ->setRegularStatus(\$RegularStatus)
            ->setSubtotal(\$Order->getSubtotal())
            ->setTotal(\$Order->getTotal())
            ->setPaymentTotal(\$Order->getPaymentTotal())
        ;
        /** @var RegularOrderItem[] \$RegularOrderItems */
        \$RegularOrderItems = \$RegularOrder->getRegularOrderItems();
        foreach (\$RegularOrderItems as \$RegularOrderItem) {
            if (!\$RegularOrderItem->isProduct()) {
                continue;
            }
            \$ProductClass = \$RegularOrderItem->getProductClass();
            try {
                \$taxRule = \$this->taxRuleRepository->getByRule(\$ProductClass->getProduct(), \$ProductClass);
            } catch (NoResultException \$e) {
            }
            \$taxRate = \$taxRule->getTaxRate();
            \$RegularOrderItem
                ->setProductName(\$ProductClass->getProduct()->getName())
                ->setProductCode(\$ProductClass->getCode())
                ->setPrice(\$ProductClass->getPrice02())
                ->setTaxRate(\$taxRate)
            ;
        }
        \$this->entityManager->persist(\$RegularOrder);
        \$this->entityManager->flush();
    }

    public function updateAfterMakingPayment(RegularOrder \$RegularOrder)
    {
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        // 定期購入回数の更新
        \$RegularOrder
            ->setRegularOrderCount(\$RegularOrder->getRegularOrderCount() + 1)
            ->setRegularSkipFlag(0);
        // 次回お届け予定日と締め日、お届け予定日の更新
        foreach (\$RegularOrder->getRegularShippings() as \$RegularShipping) {
            \$nextDeliveryDate = \$this
                ->calculateNextDeliveryDateService
                ->calc(\$RegularOrder->getRegularCycle(), \$Config->getRegularOrderDeadline());
            \$shippingDeliveryDate = new \\DateTime('today');
            \$shippingDeliveryDate->modify('+'.\$Config->getRegularOrderDeadline().' day');
            /* @var RegularShipping \$RegularShipping */
            \$RegularShipping
                ->setShippingDeliveryDate(\$shippingDeliveryDate)
                ->setRegularOrder(\$RegularOrder)
                ->setNextDeliveryDate(\$nextDeliveryDate)
            ;
        }

        \$this->entityManager->persist(\$RegularOrder);
        \$this->entityManager->flush();
    }
}
", "EccubePaymentLite42/Service/UpdateRegularOrderService.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Service\\UpdateRegularOrderService.php");
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
