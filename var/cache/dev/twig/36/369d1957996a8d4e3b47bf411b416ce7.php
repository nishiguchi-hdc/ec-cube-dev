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

/* EccubePaymentLite42/Service/SaveRegularOrderService.php */
class __TwigTemplate_2ed1b2d4c52e8c53bab9f302a8dbe38b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/SaveRegularOrderService.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/SaveRegularOrderService.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Service;

use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Entity\\Master\\SaleType;
use Eccube\\Entity\\Order;
use Eccube\\Repository\\Master\\SaleTypeRepository;
use Eccube\\Service\\PurchaseFlow\\Processor\\PointProcessor;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Entity\\RegularCycle;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrder;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrderItem;
use Plugin\\EccubePaymentLite42\\Entity\\RegularShipping;
use Plugin\\EccubePaymentLite42\\Entity\\RegularStatus;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Repository\\RegularCycleRepository;
use Plugin\\EccubePaymentLite42\\Repository\\RegularStatusRepository;
use Symfony\\Component\\HttpFoundation\\RequestStack;

class SaveRegularOrderService
{
    /**
     * @var EntityManagerInterface
     */
    private \$entityManager;
    /**
     * @var RegularStatusRepository
     */
    private \$regularStatusRepository;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;
    /**
     * @var RegularCycleRepository
     */
    private \$regularCycleRepository;
    /**
     * @var SessionInterface
     */
    private \$session;
    /**
     * @var CalculateNextDeliveryDateService
     */
    private \$calculateNextDeliveryDateService;
    /**
     * @var SaleTypeRepository
     */
    private \$saleTypeRepository;

    public function __construct(
        EntityManagerInterface \$entityManager,
        RegularStatusRepository \$regularStatusRepository,
        ConfigRepository \$configRepository,
        RegularCycleRepository \$regularCycleRepository,
        SaleTypeRepository \$saleTypeRepository,
        RequestStack \$requestStack,
        CalculateNextDeliveryDateService \$calculateNextDeliveryDateService
    ) {
        \$this->entityManager = \$entityManager;
        \$this->regularStatusRepository = \$regularStatusRepository;
        \$this->configRepository = \$configRepository;
        \$this->saleTypeRepository = \$saleTypeRepository;
        \$this->regularCycleRepository = \$regularCycleRepository;
        \$this->session = \$requestStack->getSession();
        \$this->calculateNextDeliveryDateService = \$calculateNextDeliveryDateService;
    }

    public function setRegularCycleIdInSession(\$regularCycleId)
    {
        \$this->session->set(
            'regular_cycle_id',
            \$regularCycleId
        );
    }

    public function save(Order \$Order)
    {
        // 一度しか処理が行われないように、セッションを削除している。
        if (is_null(\$this->session->get('regular_cycle_id'))) {
            return;
        }
        \$regularCycleId = \$this->session->get('regular_cycle_id');
        \$this->session->remove('regular_cycle_id');

        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        \$saleTypeId = \$Order->getShippings()[0]->getDelivery()->getSaleType()->getId();
        /** @var SaleType \$SaleType */
        \$SaleType = \$this->saleTypeRepository->find(\$saleTypeId);
        if (\$SaleType->getName() !== '定期商品') {
            return;
        }
        // 配送予定日が入力されていない場合、受注日+初回配送予定日の日数で登録
        foreach (\$Order->getShippings() as \$Shipping) {
            if (is_null(\$Shipping->getShippingDeliveryDate())) {
                \$num = \$Config->getFirstDeliveryDays();
                \$Shipping->setShippingDeliveryDate(new \\DateTime('+'.\$num.' day'));
            }
        }

        \$RegularOrder = new RegularOrder();
        /** @var RegularStatus \$RegularStatus */
        \$RegularStatus = \$this->
            regularStatusRepository
            ->find(RegularStatus::CONTINUE);

        // RegularOrder
        \$RegularOrder->copyProperties(\$Order, [
            'id',
            'create_date',
            'update_date',
        ]);

        /** @var RegularCycle \$RegularCycle */
        \$RegularCycle = \$this
            ->regularCycleRepository
            ->find(\$regularCycleId);

        \$RegularOrder
            ->setTransCode(\$Order->getTransCode())
            ->setRegularOrderCount(1)
            ->setRegularSkipFlag(0)
            ->setRegularStatus(\$RegularStatus)
            ->setRegularCycle(\$RegularCycle);

        // RegularShipping
        \$Shippings = \$Order->getShippings();
        \$shippingList = [];
        foreach (\$Shippings as \$Shipping) {
            \$RegularShipping = new RegularShipping();
            \$RegularShipping->copyProperties(\$Shipping, ['id']);
            \$nextDeliveryDate = \$this->calculateNextDeliveryDateService
                ->calc(\$RegularOrder->getRegularCycle(), \$this->getDiffShippingDeliveryDate(\$Shipping->getShippingDeliveryDate()));
            // お届け予定日が入力されている場合は、現在日付との差分の日付を取得する。
            \$RegularShipping
                ->setRegularOrder(\$RegularOrder)
                ->setNextDeliveryDate(\$nextDeliveryDate)
            ;
            \$RegularOrder->addRegularShipping(\$RegularShipping);

            \$shippingList[\$Shipping->getId()] = \$RegularShipping;
        }

        // RegularOrderItem
        \$OrderItems = \$Order->getOrderItems();
        foreach (\$OrderItems as \$OrderItem) {
            if (\$OrderItem->getProcessorName() == PointProcessor::class) {
                continue;
            }

            \$RegularOrderItem = new RegularOrderItem();
            \$RegularOrderItem->copyProperties(\$OrderItem, ['id']);

            \$RegularOrderItem
                ->setRegularOrder(\$RegularOrder);
            \$RegularOrder->addRegularOrderItem(\$RegularOrderItem);

            \$Shipping = \$OrderItem->getShipping();
            if (\$Shipping) {
                \$RegularShipping = \$shippingList[\$Shipping->getId()];
                \$RegularOrderItem
                    ->setRegularShipping(\$RegularShipping);
                \$RegularShipping->addRegularOrderItem(\$RegularOrderItem);
            }
        }
        // remove use point
        \$this->removePointRegularOrder(\$Order, \$RegularOrder);
        // end remove use point
        \$this->entityManager->persist(\$RegularOrder);
        \$this->entityManager->flush();

        // 受注テーブルに定期受注IDを登録
        \$Order->setRegularOrder(\$RegularOrder);
        \$this->entityManager->persist(\$Order);
        \$this->entityManager->flush();
    }

    private function getDiffShippingDeliveryDate(\\DateTime \$shippingDeliveryDate): int
    {
        \$today = new \\DateTime('today');
        \$interval = \$today->diff(\$shippingDeliveryDate);

        return (int) \$interval->format('%a');
    }

    /**
     * Remove point in RegularOrder
     */
    public function removePointRegularOrder(Order \$Order, RegularOrder \$RegularOrder)
    {
        /** @var OrderItem \$OrderItem */
        \$OrderItems = \$Order->getItems();
        \$discountPrices = 0;
        foreach (\$OrderItems as \$OrderItemKey => \$OrderItem) {
            if (\$OrderItem->isPoint()) {
                \$discountPrices = \$discountPrices - \$OrderItem->getPrice();
            }
        }

        \$RegularOrder->setDiscount(\$RegularOrder->getDiscount() - \$discountPrices)
                     ->setTotal(\$RegularOrder->getTotal() + \$discountPrices)
                     ->setPaymentTotal(\$RegularOrder->getPaymentTotal() + \$discountPrices)
                     ->setUsePoint(0);
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
        return "EccubePaymentLite42/Service/SaveRegularOrderService.php";
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
use Eccube\\Entity\\Master\\SaleType;
use Eccube\\Entity\\Order;
use Eccube\\Repository\\Master\\SaleTypeRepository;
use Eccube\\Service\\PurchaseFlow\\Processor\\PointProcessor;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Entity\\RegularCycle;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrder;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrderItem;
use Plugin\\EccubePaymentLite42\\Entity\\RegularShipping;
use Plugin\\EccubePaymentLite42\\Entity\\RegularStatus;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Repository\\RegularCycleRepository;
use Plugin\\EccubePaymentLite42\\Repository\\RegularStatusRepository;
use Symfony\\Component\\HttpFoundation\\RequestStack;

class SaveRegularOrderService
{
    /**
     * @var EntityManagerInterface
     */
    private \$entityManager;
    /**
     * @var RegularStatusRepository
     */
    private \$regularStatusRepository;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;
    /**
     * @var RegularCycleRepository
     */
    private \$regularCycleRepository;
    /**
     * @var SessionInterface
     */
    private \$session;
    /**
     * @var CalculateNextDeliveryDateService
     */
    private \$calculateNextDeliveryDateService;
    /**
     * @var SaleTypeRepository
     */
    private \$saleTypeRepository;

    public function __construct(
        EntityManagerInterface \$entityManager,
        RegularStatusRepository \$regularStatusRepository,
        ConfigRepository \$configRepository,
        RegularCycleRepository \$regularCycleRepository,
        SaleTypeRepository \$saleTypeRepository,
        RequestStack \$requestStack,
        CalculateNextDeliveryDateService \$calculateNextDeliveryDateService
    ) {
        \$this->entityManager = \$entityManager;
        \$this->regularStatusRepository = \$regularStatusRepository;
        \$this->configRepository = \$configRepository;
        \$this->saleTypeRepository = \$saleTypeRepository;
        \$this->regularCycleRepository = \$regularCycleRepository;
        \$this->session = \$requestStack->getSession();
        \$this->calculateNextDeliveryDateService = \$calculateNextDeliveryDateService;
    }

    public function setRegularCycleIdInSession(\$regularCycleId)
    {
        \$this->session->set(
            'regular_cycle_id',
            \$regularCycleId
        );
    }

    public function save(Order \$Order)
    {
        // 一度しか処理が行われないように、セッションを削除している。
        if (is_null(\$this->session->get('regular_cycle_id'))) {
            return;
        }
        \$regularCycleId = \$this->session->get('regular_cycle_id');
        \$this->session->remove('regular_cycle_id');

        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        \$saleTypeId = \$Order->getShippings()[0]->getDelivery()->getSaleType()->getId();
        /** @var SaleType \$SaleType */
        \$SaleType = \$this->saleTypeRepository->find(\$saleTypeId);
        if (\$SaleType->getName() !== '定期商品') {
            return;
        }
        // 配送予定日が入力されていない場合、受注日+初回配送予定日の日数で登録
        foreach (\$Order->getShippings() as \$Shipping) {
            if (is_null(\$Shipping->getShippingDeliveryDate())) {
                \$num = \$Config->getFirstDeliveryDays();
                \$Shipping->setShippingDeliveryDate(new \\DateTime('+'.\$num.' day'));
            }
        }

        \$RegularOrder = new RegularOrder();
        /** @var RegularStatus \$RegularStatus */
        \$RegularStatus = \$this->
            regularStatusRepository
            ->find(RegularStatus::CONTINUE);

        // RegularOrder
        \$RegularOrder->copyProperties(\$Order, [
            'id',
            'create_date',
            'update_date',
        ]);

        /** @var RegularCycle \$RegularCycle */
        \$RegularCycle = \$this
            ->regularCycleRepository
            ->find(\$regularCycleId);

        \$RegularOrder
            ->setTransCode(\$Order->getTransCode())
            ->setRegularOrderCount(1)
            ->setRegularSkipFlag(0)
            ->setRegularStatus(\$RegularStatus)
            ->setRegularCycle(\$RegularCycle);

        // RegularShipping
        \$Shippings = \$Order->getShippings();
        \$shippingList = [];
        foreach (\$Shippings as \$Shipping) {
            \$RegularShipping = new RegularShipping();
            \$RegularShipping->copyProperties(\$Shipping, ['id']);
            \$nextDeliveryDate = \$this->calculateNextDeliveryDateService
                ->calc(\$RegularOrder->getRegularCycle(), \$this->getDiffShippingDeliveryDate(\$Shipping->getShippingDeliveryDate()));
            // お届け予定日が入力されている場合は、現在日付との差分の日付を取得する。
            \$RegularShipping
                ->setRegularOrder(\$RegularOrder)
                ->setNextDeliveryDate(\$nextDeliveryDate)
            ;
            \$RegularOrder->addRegularShipping(\$RegularShipping);

            \$shippingList[\$Shipping->getId()] = \$RegularShipping;
        }

        // RegularOrderItem
        \$OrderItems = \$Order->getOrderItems();
        foreach (\$OrderItems as \$OrderItem) {
            if (\$OrderItem->getProcessorName() == PointProcessor::class) {
                continue;
            }

            \$RegularOrderItem = new RegularOrderItem();
            \$RegularOrderItem->copyProperties(\$OrderItem, ['id']);

            \$RegularOrderItem
                ->setRegularOrder(\$RegularOrder);
            \$RegularOrder->addRegularOrderItem(\$RegularOrderItem);

            \$Shipping = \$OrderItem->getShipping();
            if (\$Shipping) {
                \$RegularShipping = \$shippingList[\$Shipping->getId()];
                \$RegularOrderItem
                    ->setRegularShipping(\$RegularShipping);
                \$RegularShipping->addRegularOrderItem(\$RegularOrderItem);
            }
        }
        // remove use point
        \$this->removePointRegularOrder(\$Order, \$RegularOrder);
        // end remove use point
        \$this->entityManager->persist(\$RegularOrder);
        \$this->entityManager->flush();

        // 受注テーブルに定期受注IDを登録
        \$Order->setRegularOrder(\$RegularOrder);
        \$this->entityManager->persist(\$Order);
        \$this->entityManager->flush();
    }

    private function getDiffShippingDeliveryDate(\\DateTime \$shippingDeliveryDate): int
    {
        \$today = new \\DateTime('today');
        \$interval = \$today->diff(\$shippingDeliveryDate);

        return (int) \$interval->format('%a');
    }

    /**
     * Remove point in RegularOrder
     */
    public function removePointRegularOrder(Order \$Order, RegularOrder \$RegularOrder)
    {
        /** @var OrderItem \$OrderItem */
        \$OrderItems = \$Order->getItems();
        \$discountPrices = 0;
        foreach (\$OrderItems as \$OrderItemKey => \$OrderItem) {
            if (\$OrderItem->isPoint()) {
                \$discountPrices = \$discountPrices - \$OrderItem->getPrice();
            }
        }

        \$RegularOrder->setDiscount(\$RegularOrder->getDiscount() - \$discountPrices)
                     ->setTotal(\$RegularOrder->getTotal() + \$discountPrices)
                     ->setPaymentTotal(\$RegularOrder->getPaymentTotal() + \$discountPrices)
                     ->setUsePoint(0);
    }
}
", "EccubePaymentLite42/Service/SaveRegularOrderService.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Service\\SaveRegularOrderService.php");
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
