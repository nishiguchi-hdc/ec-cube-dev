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

/* EccubePaymentLite42/Resource/template/default/Shopping/conveni_confirm_form.twig */
class __TwigTemplate_e2bae1cfc6ce6e091821593c098fc228 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Shopping/conveni_confirm_form.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Shopping/conveni_confirm_form.twig"));

        // line 1
        echo "<script>
    \$(function() {
        \$('.ec-orderPayment:first').after(
            '<div class=\"ec-orderPayment\" id=\"gmo_epsilon_conveni\">' +
                '<div class=\"ec-rectHeading\">' +
                    '<h2>コンビニ</h2>' +
                '</div>' +
                '<div class=\"ec-radio\">' +
                    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "convenience", [], "any", false, false, true, 9));
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 10
            echo "                    ";
            $context["Convenience"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "convenience", [], "any", false, false, true, 10), "vars", [], "any", false, false, true, 10), "choices", [], "any", false, false, true, 10), $context["key"], [], "array", false, false, true, 10), "data", [], "any", false, false, true, 10);
            // line 11
            echo "                    '<div style=\"display: none;\">' +
                        '<input type=\"radio\" id=\"shopping_order_convenience_";
            // line 12
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 12, $this->source), "html", null, true);
            echo "\" name=\"_shopping_order[convenience]\" ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "convenience", [], "any", false, false, true, 12), "vars", [], "any", false, false, true, 12), "value", [], "any", false, false, true, 12) == twig_get_attribute($this->env, $this->source, (isset($context["Convenience"]) || array_key_exists("Convenience", $context) ? $context["Convenience"] : (function () { throw new RuntimeError('Variable "Convenience" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, true, 12))) {
                echo "checked=\"checked\"";
            }
            echo " required=\"required\" value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 12, $this->source), "html", null, true);
            echo "\">' +
                        '<label for=\"shopping_order_convenience_";
            // line 13
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 13, $this->source), "html", null, true);
            echo "\">' +
                            '<span>";
            // line 14
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["Convenience"]) || array_key_exists("Convenience", $context) ? $context["Convenience"] : (function () { throw new RuntimeError('Variable "Convenience" does not exist.', 14, $this->source); })()), 14, $this->source), "html", null, true);
            echo "</span>' +
                        '</label>'+
                    '</div>' +
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                    '";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "convenience", [], "any", false, false, true, 18), "children", [], "any", false, false, true, 18), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "convenience", [], "any", false, false, true, 18), "vars", [], "any", false, false, true, 18), "value", [], "any", false, false, true, 18), [], "array", false, false, true, 18), "vars", [], "any", false, false, true, 18), "label", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "' +
                '</div>' +

                ";
        // line 21
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "RegularCycles", [], "any", false, false, true, 21), "vars", [], "any", false, false, true, 21), "errors", [], "any", false, false, true, 21)) > 0)) {
            // line 22
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "RegularCycles", [], "any", false, false, true, 22), "vars", [], "any", false, false, true, 22), "errors", [], "any", false, false, true, 22));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 23
                echo "                        '<span class=\"invalid-feedback d-block\">' +
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
            echo "                ";
        }
        // line 30
        echo "
            '</div>'
        )
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
        return "EccubePaymentLite42/Resource/template/default/Shopping/conveni_confirm_form.twig";
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
        return array (  132 => 30,  129 => 29,  119 => 25,  115 => 23,  110 => 22,  108 => 21,  101 => 18,  91 => 14,  87 => 13,  77 => 12,  74 => 11,  71 => 10,  67 => 9,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    \$(function() {
        \$('.ec-orderPayment:first').after(
            '<div class=\"ec-orderPayment\" id=\"gmo_epsilon_conveni\">' +
                '<div class=\"ec-rectHeading\">' +
                    '<h2>コンビニ</h2>' +
                '</div>' +
                '<div class=\"ec-radio\">' +
                    {% for key, child in form.convenience %}
                    {% set Convenience = form.convenience.vars.choices[key].data %}
                    '<div style=\"display: none;\">' +
                        '<input type=\"radio\" id=\"shopping_order_convenience_{{ key }}\" name=\"_shopping_order[convenience]\" {% if form.convenience.vars.value == Convenience.id  %}checked=\"checked\"{% endif %} required=\"required\" value=\"{{ key }}\">' +
                        '<label for=\"shopping_order_convenience_{{ key }}\">' +
                            '<span>{{ Convenience }}</span>' +
                        '</label>'+
                    '</div>' +
                    {% endfor %}
                    '{{ form.convenience.children[form.convenience.vars.value].vars.label }}' +
                '</div>' +

                {% if form.RegularCycles.vars.errors|length > 0 %}
                    {% for error in form.RegularCycles.vars.errors %}
                        '<span class=\"invalid-feedback d-block\">' +
                            '<span class=\"d-block\">' +
                                '<span class=\"form-error-icon badge bg-danger text-uppercase\">エラー</span> <span class=\"form-error-message\">{{ error.message }}</span>' +
                            '</span>' +
                        '</span>' +
                    {% endfor %}
                {% endif %}

            '</div>'
        )
    });
</script>
", "EccubePaymentLite42/Resource/template/default/Shopping/conveni_confirm_form.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\default\\Shopping\\conveni_confirm_form.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 9, "set" => 10, "if" => 12);
        static $filters = array("escape" => 12, "length" => 21);
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
