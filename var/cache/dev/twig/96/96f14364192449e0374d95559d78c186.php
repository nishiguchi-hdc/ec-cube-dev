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

/* EccubePaymentLite42/Service/PurchaseFlow/Processor/RegularAddPointProcessor.php */
class __TwigTemplate_a1dcb63e618ce68a12e612bca82b3b1e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/PurchaseFlow/Processor/RegularAddPointProcessor.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/PurchaseFlow/Processor/RegularAddPointProcessor.php"));

        // line 1
        echo "<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\\EccubePaymentLite42\\Service\\PurchaseFlow\\Processor;

use Eccube\\Annotation\\OrderFlow;
use Eccube\\Annotation\\ShoppingFlow;
use Eccube\\Entity\\BaseInfo;
use Eccube\\Entity\\ItemHolderInterface;
use Eccube\\Entity\\ItemInterface;
use Eccube\\Entity\\Order;
use Eccube\\Entity\\OrderItem;
use Eccube\\Repository\\BaseInfoRepository;
use Eccube\\Service\\PurchaseFlow\\Processor\\AddPointProcessor;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Service\\IsRegularPaymentService;

/**
 * @ShoppingFlow
 * @OrderFlow
 */
class RegularAddPointProcessor extends AddPointProcessor
{
    /**
     * @var BaseInfo
     */
    protected \$BaseInfo;

    /**
     * @var ConfigRepository
     */
    private \$epsilonConfig;

    /**
     * @var IsRegularPaymentService
     */
    private \$isRegularPaymentService;

    public function __construct(
        BaseInfoRepository \$baseInfoRepository,
        ConfigRepository \$configRepository,
        IsRegularPaymentService \$isRegularPaymentService
    ) {
        parent::__construct(\$baseInfoRepository);
        \$this->BaseInfo = \$baseInfoRepository->get();
        \$this->epsilonConfig = \$configRepository->get();
        \$this->isRegularPaymentService = \$isRegularPaymentService;
    }

    public function validate(ItemHolderInterface \$itemHolder, PurchaseContext \$context)
    {
        if (!\$this->supports(\$itemHolder)) {
            return;
        }

        // 付与ポイントを計算
        \$addPoint = \$this->calculateAddPoint(\$itemHolder);
        \$itemHolder->setAddPoint(\$addPoint);
    }

    /**
     * 定期商品の付与ポイントを計算.
     */
    private function calculateAddPoint(ItemHolderInterface \$itemHolder)
    {
        \$basicPointRate = \$this->BaseInfo->getBasicPointRate();

        \$regularPointMagnification = \$this->epsilonConfig->getRegularPointMagnification();

        \$Shipping = \$itemHolder->getShippings()->first();
        if (\$Shipping) {
            if (\$Shipping->getDelivery()->getSaleType()->getName() !== '定期商品') {
                \$regularPointMagnification = 1;
            }
        }
        if (!\$this->isRegularPaymentService->isRegularPayment(\$itemHolder)) {
            \$regularPointMagnification = 1;
        }

        // 明細ごとのポイントを集計
        \$totalPoint = array_reduce(\$itemHolder->getItems()->toArray(),
            function (\$carry, ItemInterface \$item) use (\$basicPointRate, \$regularPointMagnification) {
                //\$pointRate = \$item->isProduct() ? \$item->getProductClass()->getPointRate() : null;
                //dd(\$item);
                \$pointRate = \$item->getPointRate() ? \$item->getPointRate() : null;
                //dd(\$pointRate);
                if (\$pointRate === null) {
                    \$pointRate = \$basicPointRate;
                }

                // 通常購入時と比較したポイント付与倍率（「basic_point_rate」に設定した値を掛けた倍率。）
                //　0：0*1=0。定期商品はポイント付与しない。
                //　1：1*1=1。定期商品は通常商品と同じ 100円の1%＝ 1 Pt
                //　2：2*1=2。定期商品は通常商品の2倍 100円の2%= 2 Pt
                \$pointRate = \$regularPointMagnification * \$pointRate;
                \$point = 0;
                if (\$item->isPoint()) {
                    \$point = round(\$item->getPrice() * (\$pointRate / 100)) * \$item->getQuantity();
                // Only calc point on product
                } elseif (\$item->isProduct()) {
                    // ポイント = 単価 * ポイント付与率 * 数量
                    \$point = round(\$item->getPrice() * (\$pointRate / 100)) * \$item->getQuantity();
                } elseif (\$item->isDiscount()) {
                    \$point = round(\$item->getPrice() * (\$pointRate / 100)) * \$item->getQuantity();
                }

                return \$carry + \$point;
            }, 0);

        return \$totalPoint < 0 ? 0 : \$totalPoint;
    }

    /**
     * Processorが実行出来るかどうかを返す.
     *
     * 以下を満たす場合に実行できる.
     *
     * - ポイント設定が有効であること.
     * - \$itemHolderがOrderエンティティであること.
     * - 会員のOrderであること.
     */
    private function supports(ItemHolderInterface \$itemHolder): bool
    {
        if (!\$this->BaseInfo->isOptionPoint()) {
            return false;
        }

        if (!\$itemHolder instanceof Order) {
            return false;
        }

        if (!\$itemHolder->getCustomer()) {
            return false;
        }

        return true;
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
        return "EccubePaymentLite42/Service/PurchaseFlow/Processor/RegularAddPointProcessor.php";
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

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\\EccubePaymentLite42\\Service\\PurchaseFlow\\Processor;

use Eccube\\Annotation\\OrderFlow;
use Eccube\\Annotation\\ShoppingFlow;
use Eccube\\Entity\\BaseInfo;
use Eccube\\Entity\\ItemHolderInterface;
use Eccube\\Entity\\ItemInterface;
use Eccube\\Entity\\Order;
use Eccube\\Entity\\OrderItem;
use Eccube\\Repository\\BaseInfoRepository;
use Eccube\\Service\\PurchaseFlow\\Processor\\AddPointProcessor;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Service\\IsRegularPaymentService;

/**
 * @ShoppingFlow
 * @OrderFlow
 */
class RegularAddPointProcessor extends AddPointProcessor
{
    /**
     * @var BaseInfo
     */
    protected \$BaseInfo;

    /**
     * @var ConfigRepository
     */
    private \$epsilonConfig;

    /**
     * @var IsRegularPaymentService
     */
    private \$isRegularPaymentService;

    public function __construct(
        BaseInfoRepository \$baseInfoRepository,
        ConfigRepository \$configRepository,
        IsRegularPaymentService \$isRegularPaymentService
    ) {
        parent::__construct(\$baseInfoRepository);
        \$this->BaseInfo = \$baseInfoRepository->get();
        \$this->epsilonConfig = \$configRepository->get();
        \$this->isRegularPaymentService = \$isRegularPaymentService;
    }

    public function validate(ItemHolderInterface \$itemHolder, PurchaseContext \$context)
    {
        if (!\$this->supports(\$itemHolder)) {
            return;
        }

        // 付与ポイントを計算
        \$addPoint = \$this->calculateAddPoint(\$itemHolder);
        \$itemHolder->setAddPoint(\$addPoint);
    }

    /**
     * 定期商品の付与ポイントを計算.
     */
    private function calculateAddPoint(ItemHolderInterface \$itemHolder)
    {
        \$basicPointRate = \$this->BaseInfo->getBasicPointRate();

        \$regularPointMagnification = \$this->epsilonConfig->getRegularPointMagnification();

        \$Shipping = \$itemHolder->getShippings()->first();
        if (\$Shipping) {
            if (\$Shipping->getDelivery()->getSaleType()->getName() !== '定期商品') {
                \$regularPointMagnification = 1;
            }
        }
        if (!\$this->isRegularPaymentService->isRegularPayment(\$itemHolder)) {
            \$regularPointMagnification = 1;
        }

        // 明細ごとのポイントを集計
        \$totalPoint = array_reduce(\$itemHolder->getItems()->toArray(),
            function (\$carry, ItemInterface \$item) use (\$basicPointRate, \$regularPointMagnification) {
                //\$pointRate = \$item->isProduct() ? \$item->getProductClass()->getPointRate() : null;
                //dd(\$item);
                \$pointRate = \$item->getPointRate() ? \$item->getPointRate() : null;
                //dd(\$pointRate);
                if (\$pointRate === null) {
                    \$pointRate = \$basicPointRate;
                }

                // 通常購入時と比較したポイント付与倍率（「basic_point_rate」に設定した値を掛けた倍率。）
                //　0：0*1=0。定期商品はポイント付与しない。
                //　1：1*1=1。定期商品は通常商品と同じ 100円の1%＝ 1 Pt
                //　2：2*1=2。定期商品は通常商品の2倍 100円の2%= 2 Pt
                \$pointRate = \$regularPointMagnification * \$pointRate;
                \$point = 0;
                if (\$item->isPoint()) {
                    \$point = round(\$item->getPrice() * (\$pointRate / 100)) * \$item->getQuantity();
                // Only calc point on product
                } elseif (\$item->isProduct()) {
                    // ポイント = 単価 * ポイント付与率 * 数量
                    \$point = round(\$item->getPrice() * (\$pointRate / 100)) * \$item->getQuantity();
                } elseif (\$item->isDiscount()) {
                    \$point = round(\$item->getPrice() * (\$pointRate / 100)) * \$item->getQuantity();
                }

                return \$carry + \$point;
            }, 0);

        return \$totalPoint < 0 ? 0 : \$totalPoint;
    }

    /**
     * Processorが実行出来るかどうかを返す.
     *
     * 以下を満たす場合に実行できる.
     *
     * - ポイント設定が有効であること.
     * - \$itemHolderがOrderエンティティであること.
     * - 会員のOrderであること.
     */
    private function supports(ItemHolderInterface \$itemHolder): bool
    {
        if (!\$this->BaseInfo->isOptionPoint()) {
            return false;
        }

        if (!\$itemHolder instanceof Order) {
            return false;
        }

        if (!\$itemHolder->getCustomer()) {
            return false;
        }

        return true;
    }
}
", "EccubePaymentLite42/Service/PurchaseFlow/Processor/RegularAddPointProcessor.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Service\\PurchaseFlow\\Processor\\RegularAddPointProcessor.php");
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
