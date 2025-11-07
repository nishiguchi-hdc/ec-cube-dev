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

/* EccubePaymentLite42/Resource/template/admin/Product/regular_discount.twig */
class __TwigTemplate_5d88cbf6a78a1afab320d7a3fe0dec10 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/Product/regular_discount.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/Product/regular_discount.twig"));

        // line 1
        echo "<script>
    \$(function() {
        \$('#admin_product_class_delivery_duration').closest('#basicConfig > .card-body').append(
            '<div class=\"row\">' +
                '<div class=\"col-3\">' +
                    '<span>定期回数別商品金額割引</span>' +
                '</div>' +
                '<div class=\"col mb-2\">' +
                    '<select id=\"admin_product_class_RegularDiscount\" name=\"admin_product[class][RegularDiscount]\" class=\"form-control\">' +
                        '<option value=\"\">選択してください</option>' +
                        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "class", [], "any", false, false, true, 11), "RegularDiscount", [], "any", false, false, true, 11), "vars", [], "any", false, false, true, 11), "choices", [], "any", false, false, true, 11));
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 12
            echo "                        ";
            $context["Discount"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "class", [], "any", false, false, true, 12), "RegularDiscount", [], "any", false, false, true, 12), "vars", [], "any", false, false, true, 12), "choices", [], "any", false, false, true, 12), $context["key"], [], "array", false, false, true, 12), "data", [], "any", false, false, true, 12);
            // line 13
            echo "                        '<option value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["Discount"]) || array_key_exists("Discount", $context) ? $context["Discount"] : (function () { throw new RuntimeError('Variable "Discount" does not exist.', 13, $this->source); })()), 13, $this->source), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "class", [], "any", false, false, true, 13), "RegularDiscount", [], "any", false, false, true, 13), "vars", [], "any", false, false, true, 13), "value", [], "any", false, false, true, 13) == (isset($context["Discount"]) || array_key_exists("Discount", $context) ? $context["Discount"] : (function () { throw new RuntimeError('Variable "Discount" does not exist.', 13, $this->source); })()))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "class", [], "any", false, false, true, 13), "RegularDiscount", [], "any", false, false, true, 13), "vars", [], "any", false, false, true, 13), "choices", [], "any", false, false, true, 13), $context["key"], [], "array", false, false, true, 13), "label", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "</option>' +
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "                    '</select>' +

                    ";
        // line 17
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "class", [], "any", false, false, true, 17), "RegularDiscount", [], "any", false, false, true, 17), "vars", [], "any", false, false, true, 17), "errors", [], "any", false, false, true, 17)) > 0)) {
            // line 18
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "class", [], "any", false, false, true, 18), "RegularDiscount", [], "any", false, false, true, 18), "vars", [], "any", false, false, true, 18), "errors", [], "any", false, false, true, 18));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 19
                echo "                            '<span class=\"invalid-feedback d-block\">' +
                                '<span class=\"d-block\">' +
                                    '<span class=\"form-error-icon badge bg-danger text-uppercase\">エラー</span> <span class=\"form-error-message\">";
                // line 21
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                echo "</span>' +
                                '</span>' +
                            '</span>' +
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                    ";
        }
        // line 26
        echo "
                '</div>' +
            '</div>'
        );

        var regularSaleTypeId = '";
        // line 31
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["regularSaleTypeId"]) || array_key_exists("regularSaleTypeId", $context) ? $context["regularSaleTypeId"] : (function () { throw new RuntimeError('Variable "regularSaleTypeId" does not exist.', 31, $this->source); })()), 31, $this->source), "html", null, true);
        echo "';
        changeRegularDiscountForm(\$('#admin_product_class_sale_type option:selected').val(), regularSaleTypeId);

        ";
        // line 35
        echo "        \$('#admin_product_class_sale_type').on('change', function() {
            var selectedSaleTypeId = \$(this).val();
            changeRegularDiscountForm(selectedSaleTypeId, regularSaleTypeId);
        });

        function changeRegularDiscountForm(selectedSaleTypeId, regularSaleTypeId) {
            if (selectedSaleTypeId === regularSaleTypeId) {
                \$('#admin_product_class_RegularDiscount').prop('disabled', false);
            } else {
                \$('#admin_product_class_RegularDiscount').prop('disabled', true);
            }
        }
    });
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "EccubePaymentLite42/Resource/template/admin/Product/regular_discount.twig";
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
        return array (  132 => 35,  126 => 31,  119 => 26,  116 => 25,  106 => 21,  102 => 19,  97 => 18,  95 => 17,  91 => 15,  76 => 13,  73 => 12,  69 => 11,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    \$(function() {
        \$('#admin_product_class_delivery_duration').closest('#basicConfig > .card-body').append(
            '<div class=\"row\">' +
                '<div class=\"col-3\">' +
                    '<span>定期回数別商品金額割引</span>' +
                '</div>' +
                '<div class=\"col mb-2\">' +
                    '<select id=\"admin_product_class_RegularDiscount\" name=\"admin_product[class][RegularDiscount]\" class=\"form-control\">' +
                        '<option value=\"\">選択してください</option>' +
                        {% for key, child in form.class.RegularDiscount.vars.choices %}
                        {% set Discount = form.class.RegularDiscount.vars.choices[key].data %}
                        '<option value=\"{{ Discount }}\" {% if form.class.RegularDiscount.vars.value == Discount %}selected=\"selected\"{% endif %}>{{ form.class.RegularDiscount.vars.choices[key].label }}</option>' +
                        {% endfor %}
                    '</select>' +

                    {% if form.class.RegularDiscount.vars.errors|length > 0 %}
                        {% for error in form.class.RegularDiscount.vars.errors %}
                            '<span class=\"invalid-feedback d-block\">' +
                                '<span class=\"d-block\">' +
                                    '<span class=\"form-error-icon badge bg-danger text-uppercase\">エラー</span> <span class=\"form-error-message\">{{ error.message }}</span>' +
                                '</span>' +
                            '</span>' +
                        {% endfor %}
                    {% endif %}

                '</div>' +
            '</div>'
        );

        var regularSaleTypeId = '{{ regularSaleTypeId }}';
        changeRegularDiscountForm(\$('#admin_product_class_sale_type option:selected').val(), regularSaleTypeId);

        {# 販売種別変更時に、定期サイクルフォームの使用可、不可を設定 #}
        \$('#admin_product_class_sale_type').on('change', function() {
            var selectedSaleTypeId = \$(this).val();
            changeRegularDiscountForm(selectedSaleTypeId, regularSaleTypeId);
        });

        function changeRegularDiscountForm(selectedSaleTypeId, regularSaleTypeId) {
            if (selectedSaleTypeId === regularSaleTypeId) {
                \$('#admin_product_class_RegularDiscount').prop('disabled', false);
            } else {
                \$('#admin_product_class_RegularDiscount').prop('disabled', true);
            }
        }
    });
</script>
", "EccubePaymentLite42/Resource/template/admin/Product/regular_discount.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\admin\\Product\\regular_discount.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 11, "set" => 12, "if" => 13);
        static $filters = array("escape" => 13, "length" => 17);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'length'],
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
