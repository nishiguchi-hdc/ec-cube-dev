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

/* EccubePaymentLite42/Resource/template/default/Shopping/regular_cycle_confirm_form.twig */
class __TwigTemplate_9496a7e8fd22e2dc1625e26d95779cfc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Shopping/regular_cycle_confirm_form.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Shopping/regular_cycle_confirm_form.twig"));

        // line 1
        echo "<script>
    \$(function() {
        \$('.ec-orderPayment:first').after(
            '<div class=\"ec-orderPayment\">'+
                '<div class=\"ec-rectHeading\">'+
                    '<h2>";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.front.shopping.regular_cycle"), "html", null, true);
        echo "</h2>'+
                '</div>'+
                '<div class=\"ec-radio\">'+
                    '<div style=\"display: none;\">'+
                    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "RegularCycles", [], "any", false, false, true, 10));
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 11
            echo "                        ";
            $context["RegularCycle"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "RegularCycles", [], "any", false, false, true, 11), "vars", [], "any", false, false, true, 11), "choices", [], "any", false, false, true, 11), $context["key"], [], "array", false, false, true, 11), "data", [], "any", false, false, true, 11);
            // line 12
            echo "                        '<input type=\"radio\" id=\"shopping_order_RegularCycles_";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 12, $this->source), "html", null, true);
            echo "\" name=\"_shopping_order[RegularCycles]\" required=\"required\" data-trigger=\"change\" value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularCycle"]) || array_key_exists("RegularCycle", $context) ? $context["RegularCycle"] : (function () { throw new RuntimeError('Variable "RegularCycle" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "RegularCycles", [], "any", false, false, true, 12), "vars", [], "any", false, false, true, 12), "value", [], "any", false, false, true, 12) == twig_get_attribute($this->env, $this->source, (isset($context["RegularCycle"]) || array_key_exists("RegularCycle", $context) ? $context["RegularCycle"] : (function () { throw new RuntimeError('Variable "RegularCycle" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, true, 12))) {
                echo "checked=\"checked\"";
            }
            echo " />'+
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                    '</div>'+
                    '";
        // line 15
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 15, $this->source); })()), 15, $this->source), "html", null, true);
        echo "'+
                '</div>'+

                ";
        // line 18
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "RegularCycles", [], "any", false, false, true, 18), "vars", [], "any", false, false, true, 18), "errors", [], "any", false, false, true, 18)) > 0)) {
            // line 19
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "RegularCycles", [], "any", false, false, true, 19), "vars", [], "any", false, false, true, 19), "errors", [], "any", false, false, true, 19));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 20
                echo "                        '<span class=\"invalid-feedback d-block\">' +
                            '<span class=\"d-block\">' +
                                '<span class=\"form-error-icon badge bg-danger text-uppercase\">エラー</span> <span class=\"form-error-message\">";
                // line 22
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                echo "</span>' +
                            '</span>' +
                        '</span>' +
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                ";
        }
        // line 27
        echo "
            '</div>'+
            '<div class=\"ec-orderPayment\">'+
                '<div class=\"ec-rectHeading\">'+
                    '<h2>お届け日・お支払い時期について</h2>'+
                '</div>'+
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ProductItems"]) || array_key_exists("ProductItems", $context) ? $context["ProductItems"] : (function () { throw new RuntimeError('Variable "ProductItems" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["Items"]) {
            // line 34
            echo "                    ";
            $context["product"] = twig_get_attribute($this->env, $this->source, $context["Items"], "product", [], "any", false, false, true, 34);
            // line 35
            echo "                    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 35, $this->source); })()), "free_description_of_payment_delivery", [], "any", false, false, true, 35))) {
                // line 36
                echo "                    ";
                $context["free_description_of_payment_delivery"] = twig_escape_filter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 36, $this->source); })()), "free_description_of_payment_delivery", [], "any", false, false, true, 36), 36, $this->source), ["
" => "<br>", "
" => "<br>", "" => "<br>"]), "js");
                // line 37
                echo "                        '<p>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["free_description_of_payment_delivery"]) || array_key_exists("free_description_of_payment_delivery", $context) ? $context["free_description_of_payment_delivery"] : (function () { throw new RuntimeError('Variable "free_description_of_payment_delivery" does not exist.', 37, $this->source); })()), 37, $this->source), "html", null, true);
                echo "</p>'+
                    ";
            }
            // line 39
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['Items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            '</div>' +

                ";
        // line 42
        $context["charge"] = 0;
        // line 43
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 43, $this->source); })()), "order_items", [], "any", false, false, true, 43), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return twig_get_attribute($this->env, $this->source, $context["item"], "isCharge", [], "any", false, false, true, 43); }));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "                ";
            $context["charge"] = twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, true, 44);
            // line 45
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            '<p style=\"margin-top: 10px;margin-bottom: 10px;\">お届けサイクル：";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 46, $this->source); })()), 46, $this->source), "html", null, true);
        echo "　";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["limitCycle"]) || array_key_exists("limitCycle", $context) ? $context["limitCycle"] : (function () { throw new RuntimeError('Variable "limitCycle" does not exist.', 46, $this->source); })()), 46, $this->source), "html", null, true);
        echo "回購入　決済方法： ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 46, $this->source); })()), "Payment", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
        echo "(";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed((isset($context["charge"]) || array_key_exists("charge", $context) ? $context["charge"] : (function () { throw new RuntimeError('Variable "charge" does not exist.', 46, $this->source); })()), 46, $this->source)), "html", null, true);
        echo ")</p>' +
                '<div class=\"table-responsive-sm\">' +
            '<table class=\"table table-sm\">' +
                '<tbody>' +
                '<tr>' +
                '<th>日程/回数</th>' +
                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["limitCycle"]) || array_key_exists("limitCycle", $context) ? $context["limitCycle"] : (function () { throw new RuntimeError('Variable "limitCycle" does not exist.', 52, $this->source); })())));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 53
            echo "                    '<td class=\"align-middle;\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "</td>' +
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
                '</tr>' +
                '<tr>' +
                '<th>お届け日</th>' +
                ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nextOrderDate"]) || array_key_exists("nextOrderDate", $context) ? $context["nextOrderDate"] : (function () { throw new RuntimeError('Variable "nextOrderDate" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 60
            echo "                    '<td class=\"align-middle;\" style=\"line-break: auto;\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 60, $this->source), "Y/m/d"), "html", null, true);
            echo "</td>' +
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
                '</tr>' +
                '<tr>' +
                    '<th>お支払い時期</th>' +
                ";
        // line 66
        $context["firstDay"] = (isset($context["firstDay"]) || array_key_exists("firstDay", $context) ? $context["firstDay"] : (function () { throw new RuntimeError('Variable "firstDay" does not exist.', 66, $this->source); })());
        // line 67
        echo "                ";
        $context["deadline"] = (isset($context["deadlineDay"]) || array_key_exists("deadlineDay", $context) ? $context["deadlineDay"] : (function () { throw new RuntimeError('Variable "deadlineDay" does not exist.', 67, $this->source); })());
        // line 68
        echo "
                ";
        // line 69
        if ((isset($context["isCashPayment"]) || array_key_exists("isCashPayment", $context) ? $context["isCashPayment"] : (function () { throw new RuntimeError('Variable "isCashPayment" does not exist.', 69, $this->source); })())) {
            // line 70
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nextOrderDate"]) || array_key_exists("nextOrderDate", $context) ? $context["nextOrderDate"] : (function () { throw new RuntimeError('Variable "nextOrderDate" does not exist.', 70, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 71
                echo "                        '<td class=\"align-middle;\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 71, $this->source), "Y/m/d"), "html", null, true);
                echo "</td>' +
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                ";
        } else {
            // line 74
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nextOrderDate"]) || array_key_exists("nextOrderDate", $context) ? $context["nextOrderDate"] : (function () { throw new RuntimeError('Variable "nextOrderDate" does not exist.', 74, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 75
                echo "                        ";
                if (($context["key"] == 0)) {
                    // line 76
                    echo "                            '<td class=\"align-middle;\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 76, $this->source), (("-" . $this->sandbox->ensureToStringAllowed((isset($context["firstDay"]) || array_key_exists("firstDay", $context) ? $context["firstDay"] : (function () { throw new RuntimeError('Variable "firstDay" does not exist.', 76, $this->source); })()), 76, $this->source)) . " day")), "Y/m/d"), "html", null, true);
                    echo "</td>' +
                        ";
                } else {
                    // line 78
                    echo "                            '<td class=\"align-middle;\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 78, $this->source), (("-" . $this->sandbox->ensureToStringAllowed((isset($context["deadline"]) || array_key_exists("deadline", $context) ? $context["deadline"] : (function () { throw new RuntimeError('Variable "deadline" does not exist.', 78, $this->source); })()), 78, $this->source)) . " day")), "Y/m/d"), "html", null, true);
                    echo "</td>' +
                        ";
                }
                // line 80
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                ";
        }
        // line 82
        echo "                '</tr>' +
                '</tbody>' +
            '</table>' +
            '</div>' +
            '</div>'
        );
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
        return "EccubePaymentLite42/Resource/template/default/Shopping/regular_cycle_confirm_form.twig";
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
        return array (  314 => 82,  311 => 81,  305 => 80,  299 => 78,  293 => 76,  290 => 75,  285 => 74,  282 => 73,  273 => 71,  268 => 70,  266 => 69,  263 => 68,  260 => 67,  258 => 66,  252 => 62,  243 => 60,  239 => 59,  233 => 55,  216 => 53,  199 => 52,  183 => 46,  177 => 45,  174 => 44,  169 => 43,  167 => 42,  163 => 40,  157 => 39,  149 => 37,  144 => 36,  141 => 35,  138 => 34,  134 => 33,  126 => 27,  123 => 26,  113 => 22,  109 => 20,  104 => 19,  102 => 18,  96 => 15,  93 => 14,  78 => 12,  75 => 11,  71 => 10,  64 => 6,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    \$(function() {
        \$('.ec-orderPayment:first').after(
            '<div class=\"ec-orderPayment\">'+
                '<div class=\"ec-rectHeading\">'+
                    '<h2>{{ 'gmo_epsilon.front.shopping.regular_cycle'|trans }}</h2>'+
                '</div>'+
                '<div class=\"ec-radio\">'+
                    '<div style=\"display: none;\">'+
                    {% for key, child in form.RegularCycles %}
                        {% set RegularCycle = form.RegularCycles.vars.choices[key].data %}
                        '<input type=\"radio\" id=\"shopping_order_RegularCycles_{{ key }}\" name=\"_shopping_order[RegularCycles]\" required=\"required\" data-trigger=\"change\" value=\"{{ RegularCycle.id }}\" {% if form.RegularCycles.vars.value == RegularCycle.id  %}checked=\"checked\"{% endif %} />'+
                    {% endfor %}
                    '</div>'+
                    '{{ label }}'+
                '</div>'+

                {% if form.RegularCycles.vars.errors|length > 0 %}
                    {% for error in form.RegularCycles.vars.errors %}
                        '<span class=\"invalid-feedback d-block\">' +
                            '<span class=\"d-block\">' +
                                '<span class=\"form-error-icon badge bg-danger text-uppercase\">エラー</span> <span class=\"form-error-message\">{{ error.message }}</span>' +
                            '</span>' +
                        '</span>' +
                    {% endfor %}
                {% endif %}

            '</div>'+
            '<div class=\"ec-orderPayment\">'+
                '<div class=\"ec-rectHeading\">'+
                    '<h2>お届け日・お支払い時期について</h2>'+
                '</div>'+
                {% for key, Items in ProductItems %}
                    {% set product = Items.product %}
                    {% if product.free_description_of_payment_delivery is not empty %}
                    {% set free_description_of_payment_delivery = product.free_description_of_payment_delivery|replace({ '\\r\\n': '<br>', '\\n': '<br>', '\\r': '<br>' })|escape('js') %}
                        '<p>{{ product.name }} : {{ free_description_of_payment_delivery }}</p>'+
                    {% endif %}
                {% endfor %}
            '</div>' +

                {% set charge = 0 %}
                {% for item in Order.order_items|filter(item => item.isCharge) %}
                {% set charge = item.total_price %}
                {% endfor %}
            '<p style=\"margin-top: 10px;margin-bottom: 10px;\">お届けサイクル：{{ label }}　{{ limitCycle }}回購入　決済方法： {{ Order.Payment }}({{ charge|price }})</p>' +
                '<div class=\"table-responsive-sm\">' +
            '<table class=\"table table-sm\">' +
                '<tbody>' +
                '<tr>' +
                '<th>日程/回数</th>' +
                {% for i in 1..limitCycle %}
                    '<td class=\"align-middle;\">{{ loop.index }}</td>' +
                {% endfor %}

                '</tr>' +
                '<tr>' +
                '<th>お届け日</th>' +
                {% for key, value in nextOrderDate %}
                    '<td class=\"align-middle;\" style=\"line-break: auto;\">{{ value|date('Y/m/d') }}</td>' +
                {% endfor %}

                '</tr>' +
                '<tr>' +
                    '<th>お支払い時期</th>' +
                {% set firstDay = firstDay %}
                {% set deadline = deadlineDay %}

                {% if isCashPayment %}
                    {% for key, value in nextOrderDate %}
                        '<td class=\"align-middle;\">{{ value|date('Y/m/d') }}</td>' +
                    {% endfor %}
                {% else %}
                    {% for key, value in nextOrderDate %}
                        {% if key == 0 %}
                            '<td class=\"align-middle;\">{{ value|date_modify(\"-\" ~ firstDay  ~ \" day\")|date('Y/m/d') }}</td>' +
                        {% else %}
                            '<td class=\"align-middle;\">{{ value|date_modify(\"-\" ~ deadline  ~ \" day\")|date('Y/m/d') }}</td>' +
                        {% endif %}
                    {% endfor %}
                {% endif %}
                '</tr>' +
                '</tbody>' +
            '</table>' +
            '</div>' +
            '</div>'
        );
    });
</script>
", "EccubePaymentLite42/Resource/template/default/Shopping/regular_cycle_confirm_form.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\default\\Shopping\\regular_cycle_confirm_form.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 10, "set" => 11, "if" => 12);
        static $filters = array("escape" => 6, "trans" => 6, "length" => 18, "replace" => 36, "filter" => 43, "price" => 46, "date" => 60, "date_modify" => 76);
        static $functions = array("range" => 52);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'trans', 'length', 'replace', 'filter', 'price', 'date', 'date_modify'],
                ['range']
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
