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

/* EccubePaymentLite42/Resource/template/admin/Order/payment_status_form.twig */
class __TwigTemplate_3001a2a75fa5ae4c659f8821ab861d63 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/Order/payment_status_form.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/Order/payment_status_form.twig"));

        // line 1
        echo "<script>
    \$(function() {
        \$('#orderOverview .col-6:first').append(
            '<div class=\"row mb-3 form-group\">' +
                '<div class=\"col-3 col-form-label\">' +
                    '";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.order.payment_status"), "html", null, true);
        echo "' +
                '</div>' +
                '<div class=\"col\">' +
                    '<select id=\"order_PaymentStatus\" name=\"order[PaymentStatus]\" class=\"form-control\">' +
                        '<option value=\"\">-</option>' +
                        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "PaymentStatus", [], "any", false, false, true, 11), "vars", [], "any", false, false, true, 11), "choices", [], "any", false, false, true, 11));
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 12
            echo "                        ";
            $context["Status"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "PaymentStatus", [], "any", false, false, true, 12), "vars", [], "any", false, false, true, 12), "choices", [], "any", false, false, true, 12), $context["key"], [], "array", false, false, true, 12), "data", [], "any", false, false, true, 12);
            // line 13
            echo "                        '<option value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 13, $this->source), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "PaymentStatus", [], "any", false, false, true, 13), "vars", [], "any", false, false, true, 13), "value", [], "any", false, false, true, 13) == $context["key"])) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["Status"]) || array_key_exists("Status", $context) ? $context["Status"] : (function () { throw new RuntimeError('Variable "Status" does not exist.', 13, $this->source); })()), 13, $this->source), "html", null, true);
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
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "PaymentStatus", [], "any", false, false, true, 17), "vars", [], "any", false, false, true, 17), "errors", [], "any", false, false, true, 17)) > 0)) {
            // line 18
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "PaymentStatus", [], "any", false, false, true, 18), "vars", [], "any", false, false, true, 18), "errors", [], "any", false, false, true, 18));
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
        \$('#submitPaymentStatusForm').on('click', function() {
            \$('#form1').submit();
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
        return "EccubePaymentLite42/Resource/template/admin/Order/payment_status_form.twig";
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
        return array (  122 => 26,  119 => 25,  109 => 21,  105 => 19,  100 => 18,  98 => 17,  94 => 15,  79 => 13,  76 => 12,  72 => 11,  64 => 6,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    \$(function() {
        \$('#orderOverview .col-6:first').append(
            '<div class=\"row mb-3 form-group\">' +
                '<div class=\"col-3 col-form-label\">' +
                    '{{ 'gmo_epsilon.admin.order.payment_status'|trans }}' +
                '</div>' +
                '<div class=\"col\">' +
                    '<select id=\"order_PaymentStatus\" name=\"order[PaymentStatus]\" class=\"form-control\">' +
                        '<option value=\"\">-</option>' +
                        {% for key, child in form.PaymentStatus.vars.choices %}
                        {% set Status = form.PaymentStatus.vars.choices[key].data %}
                        '<option value=\"{{ key }}\" {% if form.PaymentStatus.vars.value == key %}selected=\"selected\"{% endif %}>{{ Status }}</option>' +
                        {% endfor %}
                    '</select>' +

                    {% if form.PaymentStatus.vars.errors|length > 0 %}
                        {% for error in form.PaymentStatus.vars.errors %}
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
        \$('#submitPaymentStatusForm').on('click', function() {
            \$('#form1').submit();
        });
    });
</script>
", "EccubePaymentLite42/Resource/template/admin/Order/payment_status_form.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\admin\\Order\\payment_status_form.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 11, "set" => 12, "if" => 13);
        static $filters = array("escape" => 6, "trans" => 6, "length" => 17);
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
