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

/* Shopping/alert.twig */
class __TwigTemplate_7157be9eb1fcee58b401fa2aefde0455 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shopping/alert.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shopping/alert.twig"));

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
            <div class=\"ec-alert-warning__inner\">
                <div class=\"ec-alert-warning__inner__item\">
                    <div class=\"ec-alert-warning__icon\"><img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
            echo "\"></div>
                    <div class=\"ec-alert-warning__text\">
                        ";
            // line 11
            echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed($context["error"], 11, $this->source)), "html", null, true));
            echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        if (((isset($context["error_only"]) || array_key_exists("error_only", $context) ? $context["error_only"] : (function () { throw new RuntimeError('Variable "error_only" does not exist.', 18, $this->source); })()) == false)) {
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "session", [], "any", false, false, true, 19), "flashbag", [], "any", false, false, true, 19), "get", ["eccube.front.warning"], "method", false, false, true, 19));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 20
                echo "    <div class=\"ec-cartRole__error\">
        <div class=\"ec-alert-warning\">
            <div class=\"ec-alert-warning__inner\">
                <div class=\"ec-alert-warning__inner__item\">
                    <div class=\"ec-alert-warning__icon\"><img src=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
                echo "\">
                    </div>
                    <div class=\"ec-alert-warning__text\">
                        ";
                // line 27
                echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed($context["error"], 27, $this->source)), "html", null, true));
                echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Shopping/alert.twig";
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
        return array (  109 => 27,  103 => 24,  97 => 20,  93 => 19,  91 => 18,  78 => 11,  73 => 9,  67 => 5,  63 => 4,  59 => 2,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if error_only is not defined %}
    {% set error_only = false %}
{% endif %}
{% for error in app.session.flashbag.get('eccube.front.error') %}
    <div class=\"ec-cartRole__error\">
        <div class=\"ec-alert-warning\">
            <div class=\"ec-alert-warning__inner\">
                <div class=\"ec-alert-warning__inner__item\">
                    <div class=\"ec-alert-warning__icon\"><img src=\"{{ asset('assets/icon/exclamation-white.svg') }}\"></div>
                    <div class=\"ec-alert-warning__text\">
                        {{ error|trans|nl2br }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endfor %}
{% if error_only == false %}
{% for error in app.session.flashbag.get('eccube.front.warning') %}
    <div class=\"ec-cartRole__error\">
        <div class=\"ec-alert-warning\">
            <div class=\"ec-alert-warning__inner\">
                <div class=\"ec-alert-warning__inner__item\">
                    <div class=\"ec-alert-warning__icon\"><img src=\"{{ asset('assets/icon/exclamation-white.svg') }}\">
                    </div>
                    <div class=\"ec-alert-warning__text\">
                        {{ error|trans|nl2br }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endfor %}
{% endif %}
", "Shopping/alert.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\default\\Shopping\\alert.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 2, "for" => 4);
        static $filters = array("escape" => 9, "nl2br" => 11, "trans" => 11);
        static $functions = array("asset" => 9);

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
