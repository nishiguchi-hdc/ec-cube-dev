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

/* EccubePaymentLite42/Resource/template/default/Mypage/RegularNav/product_quantity.twig */
class __TwigTemplate_1e5e6ef3938620d8cc23f9236b7babcb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Mypage/RegularNav/product_quantity.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Mypage/RegularNav/product_quantity.twig"));

        // line 1
        echo "<script>
    \$(function() {
        \$('#gmoEpsilonRegularNavList').append(
            '<li class=\"ec-navlistRole__item ";
        // line 4
        if ((((array_key_exists("regular_mypage_no", $context)) ? (_twig_default_filter((isset($context["regular_mypage_no"]) || array_key_exists("regular_mypage_no", $context) ? $context["regular_mypage_no"] : (function () { throw new RuntimeError('Variable "regular_mypage_no" does not exist.', 4, $this->source); })()), "")) : ("")) == "product_quantity")) {
            echo "active";
        }
        echo "\">' +
                '<a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eccube_payment_lite42_mypage_regular_product_quantity", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, true, 5)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.front.mypage.regular_nav__product_quantity"), "html", null, true);
        echo "</a>' +
            '</li>'
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
        return "EccubePaymentLite42/Resource/template/default/Mypage/RegularNav/product_quantity.twig";
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
        return array (  68 => 5,  62 => 4,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    \$(function() {
        \$('#gmoEpsilonRegularNavList').append(
            '<li class=\"ec-navlistRole__item {% if regular_mypage_no|default('') == 'product_quantity' %}active{% endif %}\">' +
                '<a href=\"{{ url('eccube_payment_lite42_mypage_regular_product_quantity', { 'id': RegularOrder.id }) }}\">{{ 'gmo_epsilon.front.mypage.regular_nav__product_quantity'|trans }}</a>' +
            '</li>'
        );
    });
</script>
", "EccubePaymentLite42/Resource/template/default/Mypage/RegularNav/product_quantity.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\default\\Mypage\\RegularNav\\product_quantity.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4);
        static $filters = array("default" => 4, "escape" => 5, "trans" => 5);
        static $functions = array("url" => 5);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['default', 'escape', 'trans'],
                ['url']
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
