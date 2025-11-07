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

/* EccubePaymentLite42/Service/PurchaseFlow/Processor/RegularDiscountProcessor.php */
class __TwigTemplate_93ad6456b9915fdb40047d14f7722afe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/PurchaseFlow/Processor/RegularDiscountProcessor.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/PurchaseFlow/Processor/RegularDiscountProcessor.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Service\\PurchaseFlow\\Processor;

use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\NoResultException;
use Eccube\\Annotation\\ShoppingFlow;
use Eccube\\Entity\\ItemHolderInterface;
use Eccube\\Entity\\Order;
use Eccube\\Entity\\OrderItem;
use Eccube\\Entity\\Shipping;
use Eccube\\Service\\PurchaseFlow\\DiscountProcessor;
use Eccube\\Service\\PurchaseFlow\\ProcessResult;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;
use Plugin\\EccubePaymentLite42\\Entity\\RegularDiscount;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrder;
use Plugin\\EccubePaymentLite42\\Service\\IsRegularPaymentService;
use Plugin\\EccubePaymentLite42\\Service\\RegularDiscountService;

/**
 * @ShoppingFlow
 */
class RegularDiscountProcessor implements DiscountProcessor
{
    /**
     * @var EntityManagerInterface
     */
    private \$entityManager;

    /**
     * @var IsRegularPaymentService
     */
    private \$isRegularPaymentService;

    /**
     * @var RegularDiscountService
     */
    private \$regularDiscountService;

    /**
     * constructor.
     */
    public function __construct(
        EntityManagerInterface \$entityManager,
        IsRegularPaymentService \$isRegularPaymentService,
        RegularDiscountService \$regularDiscountService
    ) {
        \$this->entityManager = \$entityManager;
        \$this->isRegularPaymentService = \$isRegularPaymentService;
        \$this->regularDiscountService = \$regularDiscountService;
    }

    /**
     * 値引き明細の削除処理を実装します.
     */
    public function removeDiscountItem(ItemHolderInterface \$itemHolder, PurchaseContext \$context)
    {
        foreach (\$itemHolder->getItems() as \$item) {
            if (\$item->getProcessorName() == RegularDiscountProcessor::class) {
                \$itemHolder->removeOrderItem(\$item);
                \$this->entityManager->remove(\$item);
            }
        }
    }

    /**
     * 値引き明細の追加処理を実装します.
     *
     * かならず合計金額等のチェックを行い, 超える場合は利用できる金額まで丸めるか、もしくは明細の追加処理をスキップしてください.
     * 正常に追加できない場合は, ProcessResult::warnを返却してください.
     *
     * @return ProcessResult|null
     *
     * @throws NoResultException
     */
    public function addDiscountItem(ItemHolderInterface \$itemHolder, PurchaseContext \$context)
    {
        /** @var Shipping \$Shipping */
        \$Shipping = \$itemHolder->getShippings()->first();
        if (empty(\$Shipping) || \$Shipping->getDelivery()->getSaleType()->getName() !== '定期商品') {
            return null;
        }

        if (!\$this->isRegularPaymentService->isRegularPayment(\$itemHolder)) {
            return null;
        }

        /** @var RegularOrder \$RegularOrder */
        \$RegularOrder = \$itemHolder instanceof Order ? \$itemHolder->getRegularOrder() : null;
        \$regularCount = !empty(\$RegularOrder) ? \$RegularOrder->getRegularOrderCount() : 0;
        \$discountPrice = 0;

        /** @var OrderItem \$item */
        foreach (\$itemHolder->getItems() as \$item) {
            \$ProductClass = \$item->getProductClass();
            /** @var RegularDiscount \$RegularDiscount */
            \$RegularDiscount = \$ProductClass ? \$ProductClass->getRegularDiscount() : null;

            if (\$item->isProduct() && \$RegularDiscount) {
                \$discountRate = \$this->regularDiscountService->getDiscountRate(\$RegularDiscount->getDiscountId(), \$regularCount + 1);
                \$discountPrice += !empty(\$discountRate) ? \$this->regularDiscountService->getDiscountPrice(\$item, \$discountRate) : 0;
            }
        }

        if (\$discountPrice > 0) {
            \$this->regularDiscountService->addDiscountItem(\$itemHolder, \$discountPrice);
        }

        return null;
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
        return "EccubePaymentLite42/Service/PurchaseFlow/Processor/RegularDiscountProcessor.php";
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

namespace Plugin\\EccubePaymentLite42\\Service\\PurchaseFlow\\Processor;

use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\NoResultException;
use Eccube\\Annotation\\ShoppingFlow;
use Eccube\\Entity\\ItemHolderInterface;
use Eccube\\Entity\\Order;
use Eccube\\Entity\\OrderItem;
use Eccube\\Entity\\Shipping;
use Eccube\\Service\\PurchaseFlow\\DiscountProcessor;
use Eccube\\Service\\PurchaseFlow\\ProcessResult;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;
use Plugin\\EccubePaymentLite42\\Entity\\RegularDiscount;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrder;
use Plugin\\EccubePaymentLite42\\Service\\IsRegularPaymentService;
use Plugin\\EccubePaymentLite42\\Service\\RegularDiscountService;

/**
 * @ShoppingFlow
 */
class RegularDiscountProcessor implements DiscountProcessor
{
    /**
     * @var EntityManagerInterface
     */
    private \$entityManager;

    /**
     * @var IsRegularPaymentService
     */
    private \$isRegularPaymentService;

    /**
     * @var RegularDiscountService
     */
    private \$regularDiscountService;

    /**
     * constructor.
     */
    public function __construct(
        EntityManagerInterface \$entityManager,
        IsRegularPaymentService \$isRegularPaymentService,
        RegularDiscountService \$regularDiscountService
    ) {
        \$this->entityManager = \$entityManager;
        \$this->isRegularPaymentService = \$isRegularPaymentService;
        \$this->regularDiscountService = \$regularDiscountService;
    }

    /**
     * 値引き明細の削除処理を実装します.
     */
    public function removeDiscountItem(ItemHolderInterface \$itemHolder, PurchaseContext \$context)
    {
        foreach (\$itemHolder->getItems() as \$item) {
            if (\$item->getProcessorName() == RegularDiscountProcessor::class) {
                \$itemHolder->removeOrderItem(\$item);
                \$this->entityManager->remove(\$item);
            }
        }
    }

    /**
     * 値引き明細の追加処理を実装します.
     *
     * かならず合計金額等のチェックを行い, 超える場合は利用できる金額まで丸めるか、もしくは明細の追加処理をスキップしてください.
     * 正常に追加できない場合は, ProcessResult::warnを返却してください.
     *
     * @return ProcessResult|null
     *
     * @throws NoResultException
     */
    public function addDiscountItem(ItemHolderInterface \$itemHolder, PurchaseContext \$context)
    {
        /** @var Shipping \$Shipping */
        \$Shipping = \$itemHolder->getShippings()->first();
        if (empty(\$Shipping) || \$Shipping->getDelivery()->getSaleType()->getName() !== '定期商品') {
            return null;
        }

        if (!\$this->isRegularPaymentService->isRegularPayment(\$itemHolder)) {
            return null;
        }

        /** @var RegularOrder \$RegularOrder */
        \$RegularOrder = \$itemHolder instanceof Order ? \$itemHolder->getRegularOrder() : null;
        \$regularCount = !empty(\$RegularOrder) ? \$RegularOrder->getRegularOrderCount() : 0;
        \$discountPrice = 0;

        /** @var OrderItem \$item */
        foreach (\$itemHolder->getItems() as \$item) {
            \$ProductClass = \$item->getProductClass();
            /** @var RegularDiscount \$RegularDiscount */
            \$RegularDiscount = \$ProductClass ? \$ProductClass->getRegularDiscount() : null;

            if (\$item->isProduct() && \$RegularDiscount) {
                \$discountRate = \$this->regularDiscountService->getDiscountRate(\$RegularDiscount->getDiscountId(), \$regularCount + 1);
                \$discountPrice += !empty(\$discountRate) ? \$this->regularDiscountService->getDiscountPrice(\$item, \$discountRate) : 0;
            }
        }

        if (\$discountPrice > 0) {
            \$this->regularDiscountService->addDiscountItem(\$itemHolder, \$discountPrice);
        }

        return null;
    }
}
", "EccubePaymentLite42/Service/PurchaseFlow/Processor/RegularDiscountProcessor.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Service\\PurchaseFlow\\Processor\\RegularDiscountProcessor.php");
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
