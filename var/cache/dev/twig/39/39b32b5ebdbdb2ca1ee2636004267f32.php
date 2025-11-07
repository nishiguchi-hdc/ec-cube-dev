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

/* EccubePaymentLite42/Service/RegularCreditService.php */
class __TwigTemplate_e30a9d213b76b11c3cee34712e178058 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/RegularCreditService.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/RegularCreditService.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Service;

use DateTime;
use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Common\\EccubeConfig;
use Eccube\\Entity\\Master\\OrderStatus;
use Eccube\\Entity\\Order;
use Eccube\\Entity\\OrderItem;
use Eccube\\Entity\\Shipping;
use Eccube\\Repository\\Master\\OrderStatusRepository;
use Eccube\\Service\\PurchaseFlow\\Processor\\OrderNoProcessor;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;
use Eccube\\Service\\PurchaseFlow\\PurchaseFlow;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrder;
use Plugin\\EccubePaymentLite42\\Entity\\RegularStatus;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Repository\\RegularOrderRepository;
use Plugin\\EccubePaymentLite42\\Repository\\RegularStatusRepository;

class RegularCreditService
{
    /**
     * @var RegularOrderRepository
     */
    private \$regularOrderRepository;
    /**
     * @var RegularStatusRepository
     */
    private \$regularStatusRepository;
    /**
     * @var EntityManagerInterface
     */
    private \$entityManager;
    /**
     * @var PurchaseFlow
     */
    private \$purchaseFlow;
    /**
     * @var OrderStatusRepository
     */
    private \$orderStatusRepository;
    /**
     * @var EccubeConfig
     */
    protected \$eccubeConfig;
    /**
     * @var OrderNoProcessor
     */
    private \$orderNoProcessor;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;

    public function __construct(
        EntityManagerInterface \$entityManager,
        RegularStatusRepository \$regularStatusRepository,
        RegularOrderRepository \$regularOrderRepository,
        OrderStatusRepository \$orderStatusRepository,
        ConfigRepository \$configRepository,
        EccubeConfig \$eccubeConfig,
        PurchaseFlow \$shoppingPurchaseFlow,
        OrderNoProcessor \$orderNoProcessor
    ) {
        \$this->entityManager = \$entityManager;
        \$this->purchaseFlow = \$shoppingPurchaseFlow;
        \$this->orderStatusRepository = \$orderStatusRepository;
        \$this->regularStatusRepository = \$regularStatusRepository;
        \$this->regularOrderRepository = \$regularOrderRepository;
        \$this->configRepository = \$configRepository;
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->orderNoProcessor = \$orderNoProcessor;
    }

    public function createOrder(RegularOrder \$RegularOrder)
    {
        \$RegularStatus = \$RegularOrder->getRegularStatus();
        // remove use point
        \$RegularOrder->setUsePoint(0);
        // end remove use point
        if (\$RegularStatus instanceof RegularStatus == false || \$RegularStatus->getId() == \$RegularStatus::CANCELLATION) {
            return null;
        }

        /** @var Order \$Order */
        \$Order = \$this->createOrderData(\$RegularOrder);
        \$Order->setRegularOrder(\$RegularOrder);
        \$Order->setOrderDate(new DateTime());
        \$flowResult = \$this->purchaseFlow->validate(\$Order, new PurchaseContext(clone \$Order, \$Order->getCustomer()));
        if (\$flowResult->hasError() == false) {
            \$this->entityManager->persist(\$Order);
            \$this->entityManager->flush();
            \$this->orderNoProcessor->process(\$Order, new PurchaseContext(clone \$Order, \$Order->getCustomer()));
            \$this->entityManager->flush();
        } else {
        \t\$results = \$flowResult->getErrors();
        \tlog_error('定期受注の処理でエラーが発生しました。注文が保存されていない可能性があります');
        \tforeach (\$results as \$result) {
        \t\tlog_info(\"Error:\" . \$result->getMessage());
        \t}
        }

        return \$Order;
    }

    public function createOrderData(\$RegularOrder)
    {
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        \$Order = new Order();
        \$Order->copyProperties(\$RegularOrder, [
            'id',
            'pre_order_id',
            'order_no',
            'regular_order_count',
            'regular_status_id',
            'create_date',
            'update_date',
        ]);
        \$Order
            ->setOrderStatus(\$this->orderStatusRepository->find(OrderStatus::PENDING))
            ->setCreateDate(new DateTime())
            ->setUpdateDate(new DateTime());

        // Shippings
        \$RegularShippings = \$RegularOrder->getRegularShippings();
        \$shippingList = [];
        foreach (\$RegularShippings as \$RegularShipping) {
            \$Shipping = new Shipping();
            \$Shipping->copyProperties(\$RegularShipping, [
                'id',
                'delivery_date',
            ]);
            \$shippingDeliveryDate = new \\DateTime('today');
            \$shippingDeliveryDate->modify('+'.\$Config->getRegularOrderDeadline().' day');
            \$Shipping
                ->setOrder(\$Order)
                ->setShippingDeliveryDate(\$shippingDeliveryDate)
            ;
            \$Order->addShipping(\$Shipping);

            \$shippingList[\$RegularShipping->getId()] = \$Shipping;
        }

        // OrderItems
        \$RegularOrderItems = \$RegularOrder->getRegularOrderItems();
        foreach (\$RegularOrderItems as \$RegularOrderItem) {
            \$OrderItem = new OrderItem();
            \$OrderItem->copyProperties(\$RegularOrderItem, ['id']);

            \$OrderItem->setOrder(\$Order);
            \$Order->addOrderItem(\$OrderItem);

            \$RegularShipping = \$RegularOrderItem->getRegularShipping();
            if (\$RegularShipping) {
                \$Shipping = \$shippingList[\$RegularShipping->getId()];
                \$OrderItem->setShipping(\$Shipping);
                \$Shipping->addOrderItem(\$OrderItem);
            }
        }

        return \$Order;
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
        return "EccubePaymentLite42/Service/RegularCreditService.php";
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

use DateTime;
use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Common\\EccubeConfig;
use Eccube\\Entity\\Master\\OrderStatus;
use Eccube\\Entity\\Order;
use Eccube\\Entity\\OrderItem;
use Eccube\\Entity\\Shipping;
use Eccube\\Repository\\Master\\OrderStatusRepository;
use Eccube\\Service\\PurchaseFlow\\Processor\\OrderNoProcessor;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;
use Eccube\\Service\\PurchaseFlow\\PurchaseFlow;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrder;
use Plugin\\EccubePaymentLite42\\Entity\\RegularStatus;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Repository\\RegularOrderRepository;
use Plugin\\EccubePaymentLite42\\Repository\\RegularStatusRepository;

class RegularCreditService
{
    /**
     * @var RegularOrderRepository
     */
    private \$regularOrderRepository;
    /**
     * @var RegularStatusRepository
     */
    private \$regularStatusRepository;
    /**
     * @var EntityManagerInterface
     */
    private \$entityManager;
    /**
     * @var PurchaseFlow
     */
    private \$purchaseFlow;
    /**
     * @var OrderStatusRepository
     */
    private \$orderStatusRepository;
    /**
     * @var EccubeConfig
     */
    protected \$eccubeConfig;
    /**
     * @var OrderNoProcessor
     */
    private \$orderNoProcessor;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;

    public function __construct(
        EntityManagerInterface \$entityManager,
        RegularStatusRepository \$regularStatusRepository,
        RegularOrderRepository \$regularOrderRepository,
        OrderStatusRepository \$orderStatusRepository,
        ConfigRepository \$configRepository,
        EccubeConfig \$eccubeConfig,
        PurchaseFlow \$shoppingPurchaseFlow,
        OrderNoProcessor \$orderNoProcessor
    ) {
        \$this->entityManager = \$entityManager;
        \$this->purchaseFlow = \$shoppingPurchaseFlow;
        \$this->orderStatusRepository = \$orderStatusRepository;
        \$this->regularStatusRepository = \$regularStatusRepository;
        \$this->regularOrderRepository = \$regularOrderRepository;
        \$this->configRepository = \$configRepository;
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->orderNoProcessor = \$orderNoProcessor;
    }

    public function createOrder(RegularOrder \$RegularOrder)
    {
        \$RegularStatus = \$RegularOrder->getRegularStatus();
        // remove use point
        \$RegularOrder->setUsePoint(0);
        // end remove use point
        if (\$RegularStatus instanceof RegularStatus == false || \$RegularStatus->getId() == \$RegularStatus::CANCELLATION) {
            return null;
        }

        /** @var Order \$Order */
        \$Order = \$this->createOrderData(\$RegularOrder);
        \$Order->setRegularOrder(\$RegularOrder);
        \$Order->setOrderDate(new DateTime());
        \$flowResult = \$this->purchaseFlow->validate(\$Order, new PurchaseContext(clone \$Order, \$Order->getCustomer()));
        if (\$flowResult->hasError() == false) {
            \$this->entityManager->persist(\$Order);
            \$this->entityManager->flush();
            \$this->orderNoProcessor->process(\$Order, new PurchaseContext(clone \$Order, \$Order->getCustomer()));
            \$this->entityManager->flush();
        } else {
        \t\$results = \$flowResult->getErrors();
        \tlog_error('定期受注の処理でエラーが発生しました。注文が保存されていない可能性があります');
        \tforeach (\$results as \$result) {
        \t\tlog_info(\"Error:\" . \$result->getMessage());
        \t}
        }

        return \$Order;
    }

    public function createOrderData(\$RegularOrder)
    {
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        \$Order = new Order();
        \$Order->copyProperties(\$RegularOrder, [
            'id',
            'pre_order_id',
            'order_no',
            'regular_order_count',
            'regular_status_id',
            'create_date',
            'update_date',
        ]);
        \$Order
            ->setOrderStatus(\$this->orderStatusRepository->find(OrderStatus::PENDING))
            ->setCreateDate(new DateTime())
            ->setUpdateDate(new DateTime());

        // Shippings
        \$RegularShippings = \$RegularOrder->getRegularShippings();
        \$shippingList = [];
        foreach (\$RegularShippings as \$RegularShipping) {
            \$Shipping = new Shipping();
            \$Shipping->copyProperties(\$RegularShipping, [
                'id',
                'delivery_date',
            ]);
            \$shippingDeliveryDate = new \\DateTime('today');
            \$shippingDeliveryDate->modify('+'.\$Config->getRegularOrderDeadline().' day');
            \$Shipping
                ->setOrder(\$Order)
                ->setShippingDeliveryDate(\$shippingDeliveryDate)
            ;
            \$Order->addShipping(\$Shipping);

            \$shippingList[\$RegularShipping->getId()] = \$Shipping;
        }

        // OrderItems
        \$RegularOrderItems = \$RegularOrder->getRegularOrderItems();
        foreach (\$RegularOrderItems as \$RegularOrderItem) {
            \$OrderItem = new OrderItem();
            \$OrderItem->copyProperties(\$RegularOrderItem, ['id']);

            \$OrderItem->setOrder(\$Order);
            \$Order->addOrderItem(\$OrderItem);

            \$RegularShipping = \$RegularOrderItem->getRegularShipping();
            if (\$RegularShipping) {
                \$Shipping = \$shippingList[\$RegularShipping->getId()];
                \$OrderItem->setShipping(\$Shipping);
                \$Shipping->addOrderItem(\$OrderItem);
            }
        }

        return \$Order;
    }
}
", "EccubePaymentLite42/Service/RegularCreditService.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Service\\RegularCreditService.php");
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
