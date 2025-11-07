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

/* EccubePaymentLite42/Service/GetProductInformationFromOrderService.php */
class __TwigTemplate_82691bcd6bf89b03e4f6c43273aebf49 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/GetProductInformationFromOrderService.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/GetProductInformationFromOrderService.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Service;

use Eccube\\Entity\\Order;

class GetProductInformationFromOrderService
{
    /**
     * 受注から代表商品情報を取得
     *
     * @return array
     */
    public function handle(Order \$Order)
    {
        foreach (\$Order->getOrderItems() as \$orderItem) {
            if (!\$orderItem->isProduct()) {
                continue;
            }
            \$item_code = \$orderItem->getProductCode();

            // 空の場合は仮の値をセット
            if (empty(\$item_code)) {
                \$item_code = 'no_code';
            } else {
                /**
                 * 商品コードを整形
                 * 1. 全角→半角
                 * 2. 許容されない文字を削除
                 * 3. 64byteに丸め
                 */
                \$item_code = mb_convert_kana(\$item_code, 'kvrn');
                \$item_code = preg_replace('/[^a-zA-Z0-9\\.\\-\\+\\/]/', '', \$item_code);
                if (64 < strlen(\$item_code)) {
                    \$item_code = mb_strimwidth(\$item_code, 0, 64);
                }
            }

            \$itemInfo['item_code'] = \$item_code;
            \$itemInfo['item_name'] = \$orderItem->getProductName().'x'.\$orderItem->getQuantity().'個（代表）';

            return \$itemInfo;
        }
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
        return "EccubePaymentLite42/Service/GetProductInformationFromOrderService.php";
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

use Eccube\\Entity\\Order;

class GetProductInformationFromOrderService
{
    /**
     * 受注から代表商品情報を取得
     *
     * @return array
     */
    public function handle(Order \$Order)
    {
        foreach (\$Order->getOrderItems() as \$orderItem) {
            if (!\$orderItem->isProduct()) {
                continue;
            }
            \$item_code = \$orderItem->getProductCode();

            // 空の場合は仮の値をセット
            if (empty(\$item_code)) {
                \$item_code = 'no_code';
            } else {
                /**
                 * 商品コードを整形
                 * 1. 全角→半角
                 * 2. 許容されない文字を削除
                 * 3. 64byteに丸め
                 */
                \$item_code = mb_convert_kana(\$item_code, 'kvrn');
                \$item_code = preg_replace('/[^a-zA-Z0-9\\.\\-\\+\\/]/', '', \$item_code);
                if (64 < strlen(\$item_code)) {
                    \$item_code = mb_strimwidth(\$item_code, 0, 64);
                }
            }

            \$itemInfo['item_code'] = \$item_code;
            \$itemInfo['item_name'] = \$orderItem->getProductName().'x'.\$orderItem->getQuantity().'個（代表）';

            return \$itemInfo;
        }
    }
}
", "EccubePaymentLite42/Service/GetProductInformationFromOrderService.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Service\\GetProductInformationFromOrderService.php");
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
