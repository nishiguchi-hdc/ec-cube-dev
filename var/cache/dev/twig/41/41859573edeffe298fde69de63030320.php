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

/* EccubePaymentLite42/Service/RegularDiscountService.php */
class __TwigTemplate_bfdd1542dc0cad87d7edc51317cfc6e9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/RegularDiscountService.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/RegularDiscountService.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Service;

use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\NoResultException;
use Eccube\\Entity\\ItemHolderInterface;
use Eccube\\Entity\\Master\\OrderItemType;
use Eccube\\Entity\\Master\\TaxDisplayType;
use Eccube\\Entity\\Master\\TaxType;
use Eccube\\Entity\\OrderItem;
use Eccube\\Repository\\TaxRuleRepository;
use Plugin\\EccubePaymentLite42\\Entity\\RegularDiscount;
use Plugin\\EccubePaymentLite42\\Repository\\RegularDiscountRepository;
use Plugin\\EccubePaymentLite42\\Service\\PurchaseFlow\\Processor\\RegularDiscountProcessor;
use Plugin\\EccubePaymentLite42\\Service\\Util\\CommonUtil;

class RegularDiscountService
{
    /**
     * @var EntityManagerInterface
     */
    private \$entityManager;

    /**
     * @var RegularDiscountRepository
     */
    private \$regularDiscountRepository;

    /**
     * @var TaxRuleRepository
     */
    private \$taxRuleRepository;

    public function __construct(
        EntityManagerInterface \$entityManager,
        RegularDiscountRepository \$regularDiscountRepository,
        TaxRuleRepository \$taxRuleRepository
    ) {
        \$this->entityManager = \$entityManager;
        \$this->regularDiscountRepository = \$regularDiscountRepository;
        \$this->taxRuleRepository = \$taxRuleRepository;
    }

    /**
     * @param \$discountRate
     *
     * @return float|int
     *
     * @throws NoResultException
     */
    public function getDiscountPrice(OrderItem \$OrderItem, \$discountRate)
    {
        \$ProductClass = \$OrderItem->getProductClass();
        \$TaxRule = \$this->taxRuleRepository->getByRule();
        \$price = CommonUtil::roundByCalcRule(
            \$ProductClass->getPrice02IncTax() * \$discountRate / 100,
                \$TaxRule->getRoundingType()->getId()
        ) * \$OrderItem->getQuantity();

        return \$price;
    }

    /**
     * Add Discount Item
     *
     * @param ItemHolderInterface \$itemHolder
     * @param \$price
     */
    public function addDiscountItem(\$itemHolder, \$price)
    {
        \$DiscountType = \$this->entityManager->find(OrderItemType::class, OrderItemType::DISCOUNT);
        \$TaxInclude = \$this->entityManager->find(TaxDisplayType::class, TaxDisplayType::INCLUDED);
        \$Taxation = \$this->entityManager->find(TaxType::class, TaxType::NON_TAXABLE);

        \$OrderItem = new OrderItem();
        \$OrderItem->setProductName('定期回数別商品金額割引')
            ->setPrice(\$price * -1)
            ->setQuantity(1)
            ->setTax(0)
            ->setTaxRate(0)
            ->setRoundingType(null)
            ->setOrderItemType(\$DiscountType)
            ->setTaxDisplayType(\$TaxInclude)
            ->setTaxType(\$Taxation)
            ->setOrder(\$itemHolder)
            ->setProcessorName(RegularDiscountProcessor::class);

        \$itemHolder->addItem(\$OrderItem);
    }

    public function getDiscountRate(\$discountId, \$regularCount)
    {
        \$maxNumberOfRegularCount = \$this->regularDiscountRepository->getMaxNumberOfRegularCount(\$discountId, \$regularCount);
        /** @var RegularDiscount \$RegularDiscount */
        \$RegularDiscount = \$this->regularDiscountRepository->findOneBy([
            'discount_id' => \$discountId,
            'regular_count' => \$maxNumberOfRegularCount,
        ]);

        return \$RegularDiscount ? \$RegularDiscount->getDiscountRate() : null;
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
        return "EccubePaymentLite42/Service/RegularDiscountService.php";
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
use Eccube\\Entity\\ItemHolderInterface;
use Eccube\\Entity\\Master\\OrderItemType;
use Eccube\\Entity\\Master\\TaxDisplayType;
use Eccube\\Entity\\Master\\TaxType;
use Eccube\\Entity\\OrderItem;
use Eccube\\Repository\\TaxRuleRepository;
use Plugin\\EccubePaymentLite42\\Entity\\RegularDiscount;
use Plugin\\EccubePaymentLite42\\Repository\\RegularDiscountRepository;
use Plugin\\EccubePaymentLite42\\Service\\PurchaseFlow\\Processor\\RegularDiscountProcessor;
use Plugin\\EccubePaymentLite42\\Service\\Util\\CommonUtil;

class RegularDiscountService
{
    /**
     * @var EntityManagerInterface
     */
    private \$entityManager;

    /**
     * @var RegularDiscountRepository
     */
    private \$regularDiscountRepository;

    /**
     * @var TaxRuleRepository
     */
    private \$taxRuleRepository;

    public function __construct(
        EntityManagerInterface \$entityManager,
        RegularDiscountRepository \$regularDiscountRepository,
        TaxRuleRepository \$taxRuleRepository
    ) {
        \$this->entityManager = \$entityManager;
        \$this->regularDiscountRepository = \$regularDiscountRepository;
        \$this->taxRuleRepository = \$taxRuleRepository;
    }

    /**
     * @param \$discountRate
     *
     * @return float|int
     *
     * @throws NoResultException
     */
    public function getDiscountPrice(OrderItem \$OrderItem, \$discountRate)
    {
        \$ProductClass = \$OrderItem->getProductClass();
        \$TaxRule = \$this->taxRuleRepository->getByRule();
        \$price = CommonUtil::roundByCalcRule(
            \$ProductClass->getPrice02IncTax() * \$discountRate / 100,
                \$TaxRule->getRoundingType()->getId()
        ) * \$OrderItem->getQuantity();

        return \$price;
    }

    /**
     * Add Discount Item
     *
     * @param ItemHolderInterface \$itemHolder
     * @param \$price
     */
    public function addDiscountItem(\$itemHolder, \$price)
    {
        \$DiscountType = \$this->entityManager->find(OrderItemType::class, OrderItemType::DISCOUNT);
        \$TaxInclude = \$this->entityManager->find(TaxDisplayType::class, TaxDisplayType::INCLUDED);
        \$Taxation = \$this->entityManager->find(TaxType::class, TaxType::NON_TAXABLE);

        \$OrderItem = new OrderItem();
        \$OrderItem->setProductName('定期回数別商品金額割引')
            ->setPrice(\$price * -1)
            ->setQuantity(1)
            ->setTax(0)
            ->setTaxRate(0)
            ->setRoundingType(null)
            ->setOrderItemType(\$DiscountType)
            ->setTaxDisplayType(\$TaxInclude)
            ->setTaxType(\$Taxation)
            ->setOrder(\$itemHolder)
            ->setProcessorName(RegularDiscountProcessor::class);

        \$itemHolder->addItem(\$OrderItem);
    }

    public function getDiscountRate(\$discountId, \$regularCount)
    {
        \$maxNumberOfRegularCount = \$this->regularDiscountRepository->getMaxNumberOfRegularCount(\$discountId, \$regularCount);
        /** @var RegularDiscount \$RegularDiscount */
        \$RegularDiscount = \$this->regularDiscountRepository->findOneBy([
            'discount_id' => \$discountId,
            'regular_count' => \$maxNumberOfRegularCount,
        ]);

        return \$RegularDiscount ? \$RegularDiscount->getDiscountRate() : null;
    }
}
", "EccubePaymentLite42/Service/RegularDiscountService.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Service\\RegularDiscountService.php");
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
