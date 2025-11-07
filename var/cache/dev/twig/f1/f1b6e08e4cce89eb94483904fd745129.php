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

/* EccubePaymentLite42/Resource/template/admin/Product/ProductClass/regular_cycle_form.twig */
class __TwigTemplate_a18bba707faa8f3a841f4471aa1de655 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/Product/ProductClass/regular_cycle_form.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/Product/ProductClass/regular_cycle_form.twig"));

        // line 1
        echo "<script>
    \$(function() {
        ";
        // line 4
        echo "        \$('#ex-product_class thead tr').children('th:nth-child(9)').after(
            '<th class=\"pt-2 pb-2\">定期サイクル</th>'
        );
        ";
        // line 8
        echo "        \$('table tbody tr').each(function(i) {
            var \$elem = \$('#product_class_matrix_product_classes_' + i + '_RegularCycle');
            \$('#ex-product_class-' + i).children('td:nth-child(9)').after('<td class=\"pt-2 pb-2\">' + \$elem.html() + '</td>');
            ";
        // line 12
        echo "            if (\$elem.next('span').length > 0) {
                \$elementError = \$elem.next('span');
                \$('#ex-product_class-' + i).children('td:nth-child(10)').append('<span class=\"invalid-feedback d-block\">' + \$elementError.html() + '</span>');
                ";
        // line 16
        echo "                \$elementError.remove();
            }
            ";
        // line 19
        echo "            \$elem.remove();
            i++;
        })

        var regularSaleTypeId = '";
        // line 23
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["regularSaleTypeId"]) || array_key_exists("regularSaleTypeId", $context) ? $context["regularSaleTypeId"] : (function () { throw new RuntimeError('Variable "regularSaleTypeId" does not exist.', 23, $this->source); })()), 23, $this->source), "html", null, true);
        echo "';
        var \$selectorProductClassMatrix = \$('[id\$=_sale_type]');
        ";
        // line 26
        echo "        \$selectorProductClassMatrix.each(function() {
            var selectedSaleTypeId = \$(this).val();
            var index = \$(this).attr('id').replace(/[^0-9]/g, '');

            if (selectedSaleTypeId === regularSaleTypeId) {
                enableRegularCycleForm(index);
            } else {
                disableRegularCycleForm(index);
            }
        });

        ";
        // line 38
        echo "        \$selectorProductClassMatrix.on(\"change\", function() {
            var selectedSaleTypeId = \$(this).val();
            var index = \$(this).attr('id').replace(/[^0-9]/g, '');

            if (selectedSaleTypeId === regularSaleTypeId) {
                enableRegularCycleForm(index);
            } else {
                disableRegularCycleForm(index);
            }
        });
    });

    function enableRegularCycleForm(index){
        \$(\"input[id^=product_class_matrix_product_classes_\"+ index +\"_RegularCycle_]\").prop('disabled', false);
    }

    function disableRegularCycleForm(index){
        \$(\"input[id^=product_class_matrix_product_classes_\"+ index +\"_RegularCycle_]\").prop('disabled', true);
    }

</script>
";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "product_classes", [], "any", false, false, true, 59));
        foreach ($context['_seq'] as $context["_key"] => $context["product_class_form"]) {
            // line 60
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "RegularCycle", [], "any", false, false, true, 60), 60, $this->source), 'widget');
            echo "
    ";
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "RegularCycle", [], "any", false, false, true, 61), 61, $this->source), 'errors');
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_class_form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "EccubePaymentLite42/Resource/template/admin/Product/ProductClass/regular_cycle_form.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  136 => 61,  131 => 60,  127 => 59,  104 => 38,  91 => 26,  86 => 23,  80 => 19,  76 => 16,  71 => 12,  66 => 8,  61 => 4,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    \$(function() {
        {# テーブルヘッダーを追加 #}
        \$('#ex-product_class thead tr').children('th:nth-child(9)').after(
            '<th class=\"pt-2 pb-2\">定期サイクル</th>'
        );
        {# 定期サイクルのフォームを追加 #}
        \$('table tbody tr').each(function(i) {
            var \$elem = \$('#product_class_matrix_product_classes_' + i + '_RegularCycle');
            \$('#ex-product_class-' + i).children('td:nth-child(9)').after('<td class=\"pt-2 pb-2\">' + \$elem.html() + '</td>');
            {# エラーメッセージがレンダリングされている場合はエラーメッセージも追加する #}
            if (\$elem.next('span').length > 0) {
                \$elementError = \$elem.next('span');
                \$('#ex-product_class-' + i).children('td:nth-child(10)').append('<span class=\"invalid-feedback d-block\">' + \$elementError.html() + '</span>');
                {# 定期サイクルのエラーメッセージを削除 #}
                \$elementError.remove();
            }
            {# 定期サイクルのフォームを削除 #}
            \$elem.remove();
            i++;
        })

        var regularSaleTypeId = '{{ regularSaleTypeId }}';
        var \$selectorProductClassMatrix = \$('[id\$=_sale_type]');
        {# ページ読み込み時 #}
        \$selectorProductClassMatrix.each(function() {
            var selectedSaleTypeId = \$(this).val();
            var index = \$(this).attr('id').replace(/[^0-9]/g, '');

            if (selectedSaleTypeId === regularSaleTypeId) {
                enableRegularCycleForm(index);
            } else {
                disableRegularCycleForm(index);
            }
        });

        {# 販売種別の選択変更時 #}
        \$selectorProductClassMatrix.on(\"change\", function() {
            var selectedSaleTypeId = \$(this).val();
            var index = \$(this).attr('id').replace(/[^0-9]/g, '');

            if (selectedSaleTypeId === regularSaleTypeId) {
                enableRegularCycleForm(index);
            } else {
                disableRegularCycleForm(index);
            }
        });
    });

    function enableRegularCycleForm(index){
        \$(\"input[id^=product_class_matrix_product_classes_\"+ index +\"_RegularCycle_]\").prop('disabled', false);
    }

    function disableRegularCycleForm(index){
        \$(\"input[id^=product_class_matrix_product_classes_\"+ index +\"_RegularCycle_]\").prop('disabled', true);
    }

</script>
{% for product_class_form in form.product_classes %}
    {{ form_widget(product_class_form.RegularCycle) }}
    {{ form_errors(product_class_form.RegularCycle) }}
{% endfor %}
", "EccubePaymentLite42/Resource/template/admin/Product/ProductClass/regular_cycle_form.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\admin\\Product\\ProductClass\\regular_cycle_form.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 59);
        static $filters = array("escape" => 23);
        static $functions = array("form_widget" => 60, "form_errors" => 61);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
                ['form_widget', 'form_errors']
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
