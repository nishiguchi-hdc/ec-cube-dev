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

/* EccubePaymentLite42/Resource/template/default/Mypage/Alert/alert.twig */
class __TwigTemplate_e032f25e801d1630b4fa49a951ec4961 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Mypage/Alert/alert.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Mypage/Alert/alert.twig"));

        // line 1
        if ( !array_key_exists("error_only", $context)) {
            // line 2
            echo "    ";
            $context["error_only"] = false;
        }
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "session", [], "any", false, false, true, 4), "flashbag", [], "any", false, false, true, 4), "get", ["eccube.front.error"], "method", false, false, true, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 5
            echo "    <div class=\"ec-cartRole__error\">
        <div class=\"ec-alert-warning\">
            <div class=\"ec-alert-warning__icon\"><img src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
            echo "\"></div>
            <div class=\"ec-alert-warning__text\">
                ";
            // line 9
            echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed($context["error"], 9, $this->source)), "html", null, true));
            echo "
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        if (((isset($context["error_only"]) || array_key_exists("error_only", $context) ? $context["error_only"] : (function () { throw new RuntimeError('Variable "error_only" does not exist.', 14, $this->source); })()) == false)) {
            // line 15
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "session", [], "any", false, false, true, 15), "flashbag", [], "any", false, false, true, 15), "get", ["eccube.front.warning"], "method", false, false, true, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 16
                echo "        <div class=\"ec-cartRole__error\">
            <div class=\"ec-alert-warning\">
                <div class=\"ec-alert-warning__icon\"><img src=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
                echo "\">
                </div>
                <div class=\"ec-alert-warning__text\">
                    ";
                // line 21
                echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed($context["error"], 21, $this->source)), "html", null, true));
                echo "
                </div>
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 27
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, true, 27), "get", ["_route"], "method", false, false, true, 27) == "mypage_change_complete")) {
            // line 28
            echo "<script>
    \$(function () {
        var \$element = \$('.ec-cartRole__error');
        \$('.ec-registerCompleteRole').prepend(\$element);
    });
</script>
";
        }
        // line 35
        echo "
";
        // line 36
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "request", [], "any", false, false, true, 36), "get", ["_route"], "method", false, false, true, 36) == "mypage_delivery")) {
            // line 37
            echo "<script>
    \$(function () {
        var \$element = \$('.ec-cartRole__error');
        console.log(\$element);
        \$('.ec-mypageRole:last').prepend(\$element);
    });
</script>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "EccubePaymentLite42/Resource/template/default/Mypage/Alert/alert.twig";
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
        return array (  132 => 37,  130 => 36,  127 => 35,  118 => 28,  116 => 27,  104 => 21,  98 => 18,  94 => 16,  89 => 15,  87 => 14,  76 => 9,  71 => 7,  67 => 5,  63 => 4,  59 => 2,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if error_only is not defined %}
    {% set error_only = false %}
{% endif %}
{% for error in app.session.flashbag.get('eccube.front.error') %}
    <div class=\"ec-cartRole__error\">
        <div class=\"ec-alert-warning\">
            <div class=\"ec-alert-warning__icon\"><img src=\"{{ asset('assets/icon/exclamation-white.svg') }}\"></div>
            <div class=\"ec-alert-warning__text\">
                {{ error|trans|nl2br }}
            </div>
        </div>
    </div>
{% endfor %}
{% if error_only == false %}
    {% for error in app.session.flashbag.get('eccube.front.warning') %}
        <div class=\"ec-cartRole__error\">
            <div class=\"ec-alert-warning\">
                <div class=\"ec-alert-warning__icon\"><img src=\"{{ asset('assets/icon/exclamation-white.svg') }}\">
                </div>
                <div class=\"ec-alert-warning__text\">
                    {{ error|trans|nl2br }}
                </div>
            </div>
        </div>
    {% endfor %}
{% endif %}
{% if (app.request.get('_route')) == 'mypage_change_complete' %}
<script>
    \$(function () {
        var \$element = \$('.ec-cartRole__error');
        \$('.ec-registerCompleteRole').prepend(\$element);
    });
</script>
{% endif %}

{% if (app.request.get('_route')) == 'mypage_delivery' %}
<script>
    \$(function () {
        var \$element = \$('.ec-cartRole__error');
        console.log(\$element);
        \$('.ec-mypageRole:last').prepend(\$element);
    });
</script>
{% endif %}
", "EccubePaymentLite42/Resource/template/default/Mypage/Alert/alert.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\default\\Mypage\\Alert\\alert.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 2, "for" => 4);
        static $filters = array("escape" => 7, "nl2br" => 9, "trans" => 9);
        static $functions = array("asset" => 7);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'nl2br', 'trans'],
                ['asset']
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
