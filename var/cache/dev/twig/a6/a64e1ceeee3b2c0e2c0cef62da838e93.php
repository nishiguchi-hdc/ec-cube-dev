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

/* EccubePaymentLite42/Resource/template/admin/Product/ProductClass/regular_discount.twig */
class __TwigTemplate_67641799f2565fd13033dbf6940380c5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/Product/ProductClass/regular_discount.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/Product/ProductClass/regular_discount.twig"));

        // line 1
        echo "<style>
    .regular-discount-id {
        width: 165px;
    }
    .input-group > .form-control {
        max-width: 90px;
    }
    #ex-product_class select[id\$=\"delivery_duration\"] {
        max-width: 120px;
    }
</style>
<script>
    \$(function() {
        ";
        // line 15
        echo "        \$('#ex-product_class thead tr').children('th:nth-child(9)').after(
            '<th class=\"pt-2 pb-2\">定期回数別商品金額割引</th>'
        );
        ";
        // line 19
        echo "        \$('table tbody tr').each(function(i) {
            var \$elem = \$('#product_class_matrix_product_classes_' + i + '_RegularDiscount');
            \$('#ex-product_class-' + i).children('td:nth-child(9)').after(\$('<td class=\"align-middle regular-discount-id\"></td>').append(\$elem));
            i++;
        });

        var regularSaleTypeId = '";
        // line 25
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["regularSaleTypeId"]) || array_key_exists("regularSaleTypeId", $context) ? $context["regularSaleTypeId"] : (function () { throw new RuntimeError('Variable "regularSaleTypeId" does not exist.', 25, $this->source); })()), 25, $this->source), "html", null, true);
        echo "';
        var \$selectorProductClassMatrix = \$('[id\$=_sale_type]');
        ";
        // line 28
        echo "        \$selectorProductClassMatrix.each(function() {
            var selectedSaleTypeId = \$(this).val();
            var index = \$(this).attr('id').replace(/[^0-9]/g, '');

            if (selectedSaleTypeId === regularSaleTypeId) {
                enableRegularDiscountForm(index);
            } else {
                disableRegularDiscountForm(index);
            }
        });

        ";
        // line 40
        echo "        \$selectorProductClassMatrix.on(\"change\", function() {
            var selectedSaleTypeId = \$(this).val();
            var index = \$(this).attr('id').replace(/[^0-9]/g, '');

            if (selectedSaleTypeId === regularSaleTypeId) {
                enableRegularDiscountForm(index);
            } else {
                disableRegularDiscountForm(index);
            }
        });

        function enableRegularDiscountForm(index){
            \$('#product_class_matrix_product_classes_' + index + '_RegularDiscount').prop('disabled', false);
        }

        function disableRegularDiscountForm(index){
            \$('#product_class_matrix_product_classes_' + index + '_RegularDiscount').prop('disabled', true);
        }
    });
</script>
<div style=\"display: none;\">
    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "product_classes", [], "any", false, false, true, 61));
        foreach ($context['_seq'] as $context["_key"] => $context["product_class_form"]) {
            // line 62
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "RegularDiscount", [], "any", false, false, true, 62), 62, $this->source), 'widget');
            echo "
        ";
            // line 63
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "RegularDiscount", [], "any", false, false, true, 63), 63, $this->source), 'errors');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_class_form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "EccubePaymentLite42/Resource/template/admin/Product/ProductClass/regular_discount.twig";
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
        return array (  143 => 65,  135 => 63,  130 => 62,  126 => 61,  103 => 40,  90 => 28,  85 => 25,  77 => 19,  72 => 15,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    .regular-discount-id {
        width: 165px;
    }
    .input-group > .form-control {
        max-width: 90px;
    }
    #ex-product_class select[id\$=\"delivery_duration\"] {
        max-width: 120px;
    }
</style>
<script>
    \$(function() {
        {# テーブルヘッダーを追加 #}
        \$('#ex-product_class thead tr').children('th:nth-child(9)').after(
            '<th class=\"pt-2 pb-2\">定期回数別商品金額割引</th>'
        );
        {# 定期サイクルのフォームを追加 #}
        \$('table tbody tr').each(function(i) {
            var \$elem = \$('#product_class_matrix_product_classes_' + i + '_RegularDiscount');
            \$('#ex-product_class-' + i).children('td:nth-child(9)').after(\$('<td class=\"align-middle regular-discount-id\"></td>').append(\$elem));
            i++;
        });

        var regularSaleTypeId = '{{ regularSaleTypeId }}';
        var \$selectorProductClassMatrix = \$('[id\$=_sale_type]');
        {# ページ読み込み時 #}
        \$selectorProductClassMatrix.each(function() {
            var selectedSaleTypeId = \$(this).val();
            var index = \$(this).attr('id').replace(/[^0-9]/g, '');

            if (selectedSaleTypeId === regularSaleTypeId) {
                enableRegularDiscountForm(index);
            } else {
                disableRegularDiscountForm(index);
            }
        });

        {# 販売種別の選択変更時 #}
        \$selectorProductClassMatrix.on(\"change\", function() {
            var selectedSaleTypeId = \$(this).val();
            var index = \$(this).attr('id').replace(/[^0-9]/g, '');

            if (selectedSaleTypeId === regularSaleTypeId) {
                enableRegularDiscountForm(index);
            } else {
                disableRegularDiscountForm(index);
            }
        });

        function enableRegularDiscountForm(index){
            \$('#product_class_matrix_product_classes_' + index + '_RegularDiscount').prop('disabled', false);
        }

        function disableRegularDiscountForm(index){
            \$('#product_class_matrix_product_classes_' + index + '_RegularDiscount').prop('disabled', true);
        }
    });
</script>
<div style=\"display: none;\">
    {% for product_class_form in form.product_classes %}
        {{ form_widget(product_class_form.RegularDiscount) }}
        {{ form_errors(product_class_form.RegularDiscount) }}
    {% endfor %}
</div>
", "EccubePaymentLite42/Resource/template/admin/Product/ProductClass/regular_discount.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\admin\\Product\\ProductClass\\regular_discount.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 61);
        static $filters = array("escape" => 25);
        static $functions = array("form_widget" => 62, "form_errors" => 63);

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
