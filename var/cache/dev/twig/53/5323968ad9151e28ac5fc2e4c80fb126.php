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

/* EccubePaymentLite42/Resource/template/admin/Setting/delivery_company_form.twig */
class __TwigTemplate_d1e0291ed8030103c6d5f4fa60c05562 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/Setting/delivery_company_form.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/Setting/delivery_company_form.twig"));

        // line 1
        echo "<script>
    \$(function() {
        \$('#ex-delivery-basic:first').append(
            '<div class=\"row\">' +
                '<div class=\"col-3\">' +
                    '<span>' +
                        '";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.setting.shop.delivery_company"), "html", null, true);
        echo "' +
                    '</span>' +
                '</div>' +
                '<div class=\"col mb-2\">' +
                    '<div id=\"delivery_DeliveryCompany\">' +
                        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "DeliveryCompany", [], "any", false, false, true, 12));
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 13
            echo "                        ";
            $context["Delivery"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "DeliveryCompany", [], "any", false, false, true, 13), "vars", [], "any", false, false, true, 13), "choices", [], "any", false, false, true, 13), $context["key"], [], "array", false, false, true, 13), "data", [], "any", false, false, true, 13);
            // line 14
            echo "                        '<div class=\"form-check\">' +
                            '<input type=\"radio\" id=\"delivery_DeliveryCompany_";
            // line 15
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 15, $this->source), "html", null, true);
            echo "\" name=\"delivery[DeliveryCompany]\" ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "DeliveryCompany", [], "any", false, false, true, 15), "vars", [], "any", false, false, true, 15), "value", [], "any", false, false, true, 15) == twig_get_attribute($this->env, $this->source, (isset($context["Delivery"]) || array_key_exists("Delivery", $context) ? $context["Delivery"] : (function () { throw new RuntimeError('Variable "Delivery" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, true, 15))) {
                echo "checked=\"checked\"";
            }
            echo " required=\"required\" class=\"form-check-input\" value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 15, $this->source), "html", null, true);
            echo "\">' +
                            '<label class=\"form-check-label required\" for=\"delivery_DeliveryCompany_";
            // line 16
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 16, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["Delivery"]) || array_key_exists("Delivery", $context) ? $context["Delivery"] : (function () { throw new RuntimeError('Variable "Delivery" does not exist.', 16, $this->source); })()), 16, $this->source), "html", null, true);
            echo "</label>' +
                        '</div>' +
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                    '</div>' +

                    ";
        // line 21
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "DeliveryCompany", [], "any", false, false, true, 21), "vars", [], "any", false, false, true, 21), "errors", [], "any", false, false, true, 21)) > 0)) {
            // line 22
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "DeliveryCompany", [], "any", false, false, true, 22), "vars", [], "any", false, false, true, 22), "errors", [], "any", false, false, true, 22));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 23
                echo "                            '<span class=\"invalid-feedback d-block\">' +
                                '<span class=\"d-block\">' +
                                    '<span class=\"form-error-icon badge bg-danger text-uppercase\">エラー</span> <span class=\"form-error-message\">";
                // line 25
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                echo "</span>' +
                                '</span>' +
                            '</span>' +
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                    ";
        }
        // line 30
        echo "
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
        return "EccubePaymentLite42/Resource/template/admin/Setting/delivery_company_form.twig";
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
        return array (  132 => 30,  129 => 29,  119 => 25,  115 => 23,  110 => 22,  108 => 21,  104 => 19,  93 => 16,  83 => 15,  80 => 14,  77 => 13,  73 => 12,  65 => 7,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    \$(function() {
        \$('#ex-delivery-basic:first').append(
            '<div class=\"row\">' +
                '<div class=\"col-3\">' +
                    '<span>' +
                        '{{ \"gmo_epsilon.admin.setting.shop.delivery_company\"|trans }}' +
                    '</span>' +
                '</div>' +
                '<div class=\"col mb-2\">' +
                    '<div id=\"delivery_DeliveryCompany\">' +
                        {% for key, child in form.DeliveryCompany %}
                        {% set Delivery = form.DeliveryCompany.vars.choices[key].data %}
                        '<div class=\"form-check\">' +
                            '<input type=\"radio\" id=\"delivery_DeliveryCompany_{{ key }}\" name=\"delivery[DeliveryCompany]\" {% if form.DeliveryCompany.vars.value == Delivery.id  %}checked=\"checked\"{% endif %} required=\"required\" class=\"form-check-input\" value=\"{{ key }}\">' +
                            '<label class=\"form-check-label required\" for=\"delivery_DeliveryCompany_{{ key }}\">{{ Delivery }}</label>' +
                        '</div>' +
                        {% endfor %}
                    '</div>' +

                    {% if form.DeliveryCompany.vars.errors|length > 0 %}
                        {% for error in form.DeliveryCompany.vars.errors %}
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
    });
</script>
", "EccubePaymentLite42/Resource/template/admin/Setting/delivery_company_form.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\admin\\Setting\\delivery_company_form.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 12, "set" => 13, "if" => 15);
        static $filters = array("escape" => 7, "trans" => 7, "length" => 21);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'trans', 'length'],
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
