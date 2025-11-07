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

/* EccubePaymentLite42/Service/ModifyRegularOrderService.php */
class __TwigTemplate_7ae52ffb7c5854d672c0598194666588 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/ModifyRegularOrderService.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/ModifyRegularOrderService.php"));

        // line 1
        echo "<?php

/**
 * This service serve for updating a regular order
 * there are some obsorts of cost account that has not developed because of they no change in quantity of order items modify features.
 * if need change payment and delivery method, we need to write some code for two corresponsed function
 */

namespace Plugin\\EccubePaymentLite42\\Service;

use Eccube\\Repository\\TaxRuleRepository;
use Eccube\\Entity\\Master\\TaxType;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrder;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrderItem;

class ModifyRegularOrderService
{
    /**
     * @var TaxRuleRepository
     */
    private \$taxRuleRepository;

    public function __construct(
        TaxRuleRepository \$taxRuleRepository
    ) {
        \$this->taxRuleRepository = \$taxRuleRepository;
    }

    /**
     * Recalculate Total Payment Of Regular Order
     * 
     * @param RegularOrder \$RegularOrder
     */
    public function reCalculateAll(RegularOrder \$RegularOrder)
    {
        \$this->reCalculateRegularOrderItemAll(\$RegularOrder);
        \$this->reCalculateRegularOrderAll(\$RegularOrder);
    }

    /**
     * Recalculate Regular Order Items
     * 
     * @param RegularOrder \$RegularOrder
     */
    public function reCalculateRegularOrderItemAll(RegularOrder \$RegularOrder)
    {
        \$this->reCalculateTaxationRegularOrderItem(\$RegularOrder);
    }

    /**
     * Recalculate Regular Order
     * 
     * @param RegularOrder \$RegularOrder
     */
    public function reCalculateRegularOrderAll(RegularOrder \$RegularOrder)
    {
        \$this->reCalculateTaxationRegularOrder(\$RegularOrder);
        \$this->reCalculateSubtotalRegularOrder(\$RegularOrder);
        \$this->reCalculateTotalAmountRegularOrder(\$RegularOrder);
        \$this->reCalculateTotalpaymentRegularOrder(\$RegularOrder);
    }

    /**
     * Recalculate Taxation Of Regular Order Item
     * 
     * @param RegularOrder \$RegularOrder
     */
    public function reCalculateTaxationRegularOrderItem(RegularOrder \$RegularOrder)
    {
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
            \$tax = (\$taxRate / 100) * (\$RegularOrderItem->getPrice());
            \$RegularOrderItem
                ->setTax(\$tax)
                ->setTaxRate(\$taxRate);
        }
    }

    /**
     * Recalculate Taxation Of Regular Order
     * 
     * @param RegularOrder \$RegularOrder
     */
    public function reCalculateTaxationRegularOrder(RegularOrder \$RegularOrder)
    {
        \$RegularOrderItems = \$RegularOrder->getItems();
        \$totalTax = 0;
        foreach (\$RegularOrderItems as \$RegularOrderItem) {
            if (\$RegularOrderItem->getTaxType()->getId() == TaxType::TAXATION) {
                \$taxPrice = \$RegularOrderItem->getTax() * \$RegularOrderItem->getQuantity();
                \$totalTax += \$taxPrice;
            }
        }
        \$RegularOrder->setTax(\$totalTax);
    }

    /**
     * Recalculate Subtotal Of Regular Order
     * 
     * @param RegularOrder \$RegularOrder
     */
    public function reCalculateSubtotalRegularOrder(RegularOrder \$RegularOrder)
    {
        \$RegularOrderItems = \$RegularOrder->getItems();
        \$subTotal = 0;
        foreach (\$RegularOrderItems as \$RegularOrderItem) {
            if (\$RegularOrderItem->isProduct()) {
                \$totalPrice = \$RegularOrderItem->getPrice() * \$RegularOrderItem->getQuantity();
                if (\$RegularOrderItem->getTaxType()->getId() == TaxType::TAXATION) {
                    \$totalPrice += \$RegularOrderItem->getTax() * \$RegularOrderItem->getQuantity();
                }
                \$subTotal += \$totalPrice;
            }
        }
        \$RegularOrder->setSubtotal(\$subTotal);
    }

    /**
     * Recalculate Total Amount Of Regular Order
     * 
     * @param RegularOrder \$RegularOrder
     */
    public function reCalculateTotalAmountRegularOrder(RegularOrder \$RegularOrder)
    {
        \$totalAmount = \$RegularOrder->getSubtotal() +
            \$RegularOrder->getDeliveryFeeTotal() +
            \$RegularOrder->getCharge() -
            \$RegularOrder->getDiscount();
        \$RegularOrder->setTotal(\$totalAmount);
    }

    /**
     * Recalculate Total Payment Of Regular Order
     * 
     * @param RegularOrder \$RegularOrder
     */
    public function reCalculateTotalpaymentRegularOrder(RegularOrder \$RegularOrder)
    {
        \$totalAmountPayment = \$RegularOrder->getSubtotal() +
            \$RegularOrder->getDeliveryFeeTotal() +
            \$RegularOrder->getCharge() -
            \$RegularOrder->getDiscount();
        \$RegularOrder->setPaymentTotal(\$totalAmountPayment);
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
        return "EccubePaymentLite42/Service/ModifyRegularOrderService.php";
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

/**
 * This service serve for updating a regular order
 * there are some obsorts of cost account that has not developed because of they no change in quantity of order items modify features.
 * if need change payment and delivery method, we need to write some code for two corresponsed function
 */

namespace Plugin\\EccubePaymentLite42\\Service;

use Eccube\\Repository\\TaxRuleRepository;
use Eccube\\Entity\\Master\\TaxType;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrder;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrderItem;

class ModifyRegularOrderService
{
    /**
     * @var TaxRuleRepository
     */
    private \$taxRuleRepository;

    public function __construct(
        TaxRuleRepository \$taxRuleRepository
    ) {
        \$this->taxRuleRepository = \$taxRuleRepository;
    }

    /**
     * Recalculate Total Payment Of Regular Order
     * 
     * @param RegularOrder \$RegularOrder
     */
    public function reCalculateAll(RegularOrder \$RegularOrder)
    {
        \$this->reCalculateRegularOrderItemAll(\$RegularOrder);
        \$this->reCalculateRegularOrderAll(\$RegularOrder);
    }

    /**
     * Recalculate Regular Order Items
     * 
     * @param RegularOrder \$RegularOrder
     */
    public function reCalculateRegularOrderItemAll(RegularOrder \$RegularOrder)
    {
        \$this->reCalculateTaxationRegularOrderItem(\$RegularOrder);
    }

    /**
     * Recalculate Regular Order
     * 
     * @param RegularOrder \$RegularOrder
     */
    public function reCalculateRegularOrderAll(RegularOrder \$RegularOrder)
    {
        \$this->reCalculateTaxationRegularOrder(\$RegularOrder);
        \$this->reCalculateSubtotalRegularOrder(\$RegularOrder);
        \$this->reCalculateTotalAmountRegularOrder(\$RegularOrder);
        \$this->reCalculateTotalpaymentRegularOrder(\$RegularOrder);
    }

    /**
     * Recalculate Taxation Of Regular Order Item
     * 
     * @param RegularOrder \$RegularOrder
     */
    public function reCalculateTaxationRegularOrderItem(RegularOrder \$RegularOrder)
    {
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
            \$tax = (\$taxRate / 100) * (\$RegularOrderItem->getPrice());
            \$RegularOrderItem
                ->setTax(\$tax)
                ->setTaxRate(\$taxRate);
        }
    }

    /**
     * Recalculate Taxation Of Regular Order
     * 
     * @param RegularOrder \$RegularOrder
     */
    public function reCalculateTaxationRegularOrder(RegularOrder \$RegularOrder)
    {
        \$RegularOrderItems = \$RegularOrder->getItems();
        \$totalTax = 0;
        foreach (\$RegularOrderItems as \$RegularOrderItem) {
            if (\$RegularOrderItem->getTaxType()->getId() == TaxType::TAXATION) {
                \$taxPrice = \$RegularOrderItem->getTax() * \$RegularOrderItem->getQuantity();
                \$totalTax += \$taxPrice;
            }
        }
        \$RegularOrder->setTax(\$totalTax);
    }

    /**
     * Recalculate Subtotal Of Regular Order
     * 
     * @param RegularOrder \$RegularOrder
     */
    public function reCalculateSubtotalRegularOrder(RegularOrder \$RegularOrder)
    {
        \$RegularOrderItems = \$RegularOrder->getItems();
        \$subTotal = 0;
        foreach (\$RegularOrderItems as \$RegularOrderItem) {
            if (\$RegularOrderItem->isProduct()) {
                \$totalPrice = \$RegularOrderItem->getPrice() * \$RegularOrderItem->getQuantity();
                if (\$RegularOrderItem->getTaxType()->getId() == TaxType::TAXATION) {
                    \$totalPrice += \$RegularOrderItem->getTax() * \$RegularOrderItem->getQuantity();
                }
                \$subTotal += \$totalPrice;
            }
        }
        \$RegularOrder->setSubtotal(\$subTotal);
    }

    /**
     * Recalculate Total Amount Of Regular Order
     * 
     * @param RegularOrder \$RegularOrder
     */
    public function reCalculateTotalAmountRegularOrder(RegularOrder \$RegularOrder)
    {
        \$totalAmount = \$RegularOrder->getSubtotal() +
            \$RegularOrder->getDeliveryFeeTotal() +
            \$RegularOrder->getCharge() -
            \$RegularOrder->getDiscount();
        \$RegularOrder->setTotal(\$totalAmount);
    }

    /**
     * Recalculate Total Payment Of Regular Order
     * 
     * @param RegularOrder \$RegularOrder
     */
    public function reCalculateTotalpaymentRegularOrder(RegularOrder \$RegularOrder)
    {
        \$totalAmountPayment = \$RegularOrder->getSubtotal() +
            \$RegularOrder->getDeliveryFeeTotal() +
            \$RegularOrder->getCharge() -
            \$RegularOrder->getDiscount();
        \$RegularOrder->setPaymentTotal(\$totalAmountPayment);
    }
}
", "EccubePaymentLite42/Service/ModifyRegularOrderService.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Service\\ModifyRegularOrderService.php");
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
