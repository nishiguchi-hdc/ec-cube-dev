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

/* EccubePaymentLite42/Resource/template/admin/Product/regular_cycle_form.twig */
class __TwigTemplate_ffcbc181b6298c37907723785e37b711 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/Product/regular_cycle_form.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/Product/regular_cycle_form.twig"));

        // line 1
        echo "<script>
    function changeRegularCycleForm(selectedSaleTypeId, regularSaleTypeId) {
        if (selectedSaleTypeId === regularSaleTypeId) {
            \$('input[id^=admin_product_class_RegularCycle]').prop('disabled', false);
        } else {
            \$('input[id^=admin_product_class_RegularCycle]').prop('disabled', true);
        }
    }
    \$(function() {
        ";
        // line 11
        echo "        \$('#admin_product_class_delivery_duration').closest('#basicConfig > .card-body').append(
            '<div class=\"row\">' +
                '<div class=\"col-3\">' +
                    '<span>定期サイクル</span>' +
                '</div>' +
                '<div class=\"col mb-2\">' +
                    '<div id=\"admin_product_class_RegularCycle\">' +
                        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "class", [], "any", false, false, true, 18), "RegularCycle", [], "any", false, false, true, 18), "vars", [], "any", false, false, true, 18), "choices", [], "any", false, false, true, 18));
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 19
            echo "                        ";
            $context["Cycle"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "class", [], "any", false, false, true, 19), "RegularCycle", [], "any", false, false, true, 19), "vars", [], "any", false, false, true, 19), "choices", [], "any", false, false, true, 19), $context["key"], [], "array", false, false, true, 19), "data", [], "any", false, false, true, 19);
            // line 20
            echo "                        '<div class=\"form-check\">' +
                            '<input type=\"checkbox\" id=\"admin_product_class_RegularCycle_";
            // line 21
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 21, $this->source), "html", null, true);
            echo "\" name=\"admin_product[class][RegularCycle][]\" class=\"form-check-input\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "class", [], "any", false, false, true, 21), "RegularCycle", [], "any", false, false, true, 21), "vars", [], "any", false, false, true, 21), "value", [], "any", false, false, true, 21));
            foreach ($context['_seq'] as $context["key2"] => $context["child2"]) {
                if (($context["child2"] == $context["key"])) {
                    echo "checked=\"checked\"";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key2'], $context['child2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 21, $this->source), "html", null, true);
            echo "\">' +
                            '<label class=\"form-check-label\" for=\"admin_product_class_RegularCycle_";
            // line 22
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 22, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["Cycle"]) || array_key_exists("Cycle", $context) ? $context["Cycle"] : (function () { throw new RuntimeError('Variable "Cycle" does not exist.', 22, $this->source); })()), 22, $this->source), "html", null, true);
            echo "</label>' +
                        '</div>' +
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                    '</div>' +

                    ";
        // line 27
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "class", [], "any", false, false, true, 27), "RegularCycle", [], "any", false, false, true, 27), "vars", [], "any", false, false, true, 27), "errors", [], "any", false, false, true, 27)) > 0)) {
            // line 28
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "class", [], "any", false, false, true, 28), "RegularCycle", [], "any", false, false, true, 28), "vars", [], "any", false, false, true, 28), "errors", [], "any", false, false, true, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 29
                echo "                            '<span class=\"invalid-feedback d-block\">' +
                                '<span class=\"d-block\">' +
                                    '<span class=\"form-error-icon badge bg-danger text-uppercase\">エラー</span> <span class=\"form-error-message\">";
                // line 31
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                echo "</span>' +
                                '</span>' +
                            '</span>' +
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                    ";
        }
        // line 36
        echo "
                '</div>' +
            '</div>'
        );
        var regularSaleTypeId = '";
        // line 40
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["regularSaleTypeId"]) || array_key_exists("regularSaleTypeId", $context) ? $context["regularSaleTypeId"] : (function () { throw new RuntimeError('Variable "regularSaleTypeId" does not exist.', 40, $this->source); })()), 40, $this->source), "html", null, true);
        echo "';
        ";
        // line 42
        echo "        changeRegularCycleForm(\$('#admin_product_class_sale_type option:selected').val(), regularSaleTypeId);
        ";
        // line 44
        echo "        \$('#admin_product_class_sale_type').on('change', function() {
            var selectedSaleTypeId = \$(this).val();
            changeRegularCycleForm(selectedSaleTypeId, regularSaleTypeId);
        });
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
        return "EccubePaymentLite42/Resource/template/admin/Product/regular_cycle_form.twig";
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
        return array (  156 => 44,  153 => 42,  149 => 40,  143 => 36,  140 => 35,  130 => 31,  126 => 29,  121 => 28,  119 => 27,  115 => 25,  104 => 22,  87 => 21,  84 => 20,  81 => 19,  77 => 18,  68 => 11,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    function changeRegularCycleForm(selectedSaleTypeId, regularSaleTypeId) {
        if (selectedSaleTypeId === regularSaleTypeId) {
            \$('input[id^=admin_product_class_RegularCycle]').prop('disabled', false);
        } else {
            \$('input[id^=admin_product_class_RegularCycle]').prop('disabled', true);
        }
    }
    \$(function() {
        {# 定期サイクルフォームの追加 #}
        \$('#admin_product_class_delivery_duration').closest('#basicConfig > .card-body').append(
            '<div class=\"row\">' +
                '<div class=\"col-3\">' +
                    '<span>定期サイクル</span>' +
                '</div>' +
                '<div class=\"col mb-2\">' +
                    '<div id=\"admin_product_class_RegularCycle\">' +
                        {% for key, child in form.class.RegularCycle.vars.choices %}
                        {% set Cycle = form.class.RegularCycle.vars.choices[key].data %}
                        '<div class=\"form-check\">' +
                            '<input type=\"checkbox\" id=\"admin_product_class_RegularCycle_{{ key }}\" name=\"admin_product[class][RegularCycle][]\" class=\"form-check-input\" {% for key2, child2 in form.class.RegularCycle.vars.value %}{% if child2 == key %}checked=\"checked\"{% endif %}{% endfor %} value=\"{{ key }}\">' +
                            '<label class=\"form-check-label\" for=\"admin_product_class_RegularCycle_{{ key }}\">{{ Cycle }}</label>' +
                        '</div>' +
                        {% endfor %}
                    '</div>' +

                    {% if form.class.RegularCycle.vars.errors|length > 0 %}
                        {% for error in form.class.RegularCycle.vars.errors %}
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
        {# 定期サイクルフォーム初期読み込み時、使用可、不可を設定 #}
        changeRegularCycleForm(\$('#admin_product_class_sale_type option:selected').val(), regularSaleTypeId);
        {# 販売種別変更時に、定期サイクルフォームの使用可、不可を設定 #}
        \$('#admin_product_class_sale_type').on('change', function() {
            var selectedSaleTypeId = \$(this).val();
            changeRegularCycleForm(selectedSaleTypeId, regularSaleTypeId);
        });
    });
</script>
", "EccubePaymentLite42/Resource/template/admin/Product/regular_cycle_form.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\admin\\Product\\regular_cycle_form.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 18, "set" => 19, "if" => 21);
        static $filters = array("escape" => 21, "length" => 27);
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
