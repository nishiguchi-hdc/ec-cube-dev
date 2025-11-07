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

/* EccubePaymentLite42/Resource/template/admin/Nav/regular_nav.twig */
class __TwigTemplate_74f0cf62a1483c08d04f694719f1243c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/Nav/regular_nav.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/Nav/regular_nav.twig"));

        // line 1
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, true, 1), "get", ["_route"], "method", false, false, true, 1) == "eccube_payment_lite42_admin_regular_index") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, true, 1), "get", ["_route"], "method", false, false, true, 1) == "eccube_payment_lite42_admin_regular_index_page"))) {
            // line 2
            echo "    ";
            $context["menus"] = ["regular", "order"];
        }
        // line 4
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, true, 4), "get", ["_route"], "method", false, false, true, 4) == "eccube_payment_lite42_admin_regular_cycle")) {
            // line 5
            echo "    ";
            $context["menus"] = ["regular", "cycle"];
        }
        // line 7
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, true, 7), "get", ["_route"], "method", false, false, true, 7) == "eccube_payment_lite42_admin_regular_discount_setting")) {
            // line 8
            echo "    ";
            $context["menus"] = ["regular", "discount"];
        }
        // line 10
        echo "<script>
    \$(function () {
        \$('ul.c-mainNavArea__nav > li').eq(6).after(
            '<li class=\"c-mainNavArea__navItem\">' +
                '<a class=\"c-mainNavArea__navItemTitle\" data-bs-toggle=\"collapse\" href=\"#nav-regular\" aria-expanded=\"true\" aria-controls=\"nav-regular\">' +
                    '<i class=\"fa fa-cube fa-fw\" aria-hidden=\"true\"></i>' +
                    '<span>定期管理</span>' +
                '</a>' +
                '<ul class=\"collapse show\" id=\"nav-regular\" style=\"\">' +
                    '<li>' +
                        '<a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eccube_payment_lite42_admin_regular_index");
        echo "\"";
        echo (((twig_get_attribute($this->env, $this->source, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getActiveMenus($this->sandbox->ensureToStringAllowed((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new RuntimeError('Variable "menus" does not exist.', 20, $this->source); })()), 20, $this->source)), 1, [], "array", false, false, true, 20) == "order")) ? (" class=\"is-active\"") : (""));
        echo ">' +
                            '<span>定期受注管理</span>' +
                        '</a>' +
                    '</li>' +
                    '<li>' +
                        '<a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eccube_payment_lite42_admin_regular_cycle");
        echo "\"";
        echo (((twig_get_attribute($this->env, $this->source, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getActiveMenus($this->sandbox->ensureToStringAllowed((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new RuntimeError('Variable "menus" does not exist.', 25, $this->source); })()), 25, $this->source)), 1, [], "array", false, false, true, 25) == "cycle")) ? (" class=\"is-active\"") : (""));
        echo ">' +
                            '<span>定期サイクル管理</span>' +
                        '</a>' +
                    '</li>' +
                    '<li>' +
                        '<a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eccube_payment_lite42_admin_regular_discount_setting");
        echo "\"";
        echo (((twig_get_attribute($this->env, $this->source, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getActiveMenus($this->sandbox->ensureToStringAllowed((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new RuntimeError('Variable "menus" does not exist.', 30, $this->source); })()), 30, $this->source)), 1, [], "array", false, false, true, 30) == "discount")) ? (" class=\"is-active\"") : (""));
        echo ">' +
                            '<span>定期回数別管理</span>' +
                        '</a>' +
                    '</li>' +
                '</ul>' +
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
        return "EccubePaymentLite42/Resource/template/admin/Nav/regular_nav.twig";
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
        return array (  107 => 30,  97 => 25,  87 => 20,  75 => 10,  71 => 8,  69 => 7,  65 => 5,  63 => 4,  59 => 2,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if (app.request.get('_route')) == 'eccube_payment_lite42_admin_regular_index' or (app.request.get('_route')) == 'eccube_payment_lite42_admin_regular_index_page' %}
    {% set menus = ['regular', 'order'] %}
{% endif %}
{% if (app.request.get('_route')) == 'eccube_payment_lite42_admin_regular_cycle' %}
    {% set menus = ['regular', 'cycle'] %}
{% endif %}
{% if (app.request.get('_route')) == 'eccube_payment_lite42_admin_regular_discount_setting' %}
    {% set menus = ['regular', 'discount'] %}
{% endif %}
<script>
    \$(function () {
        \$('ul.c-mainNavArea__nav > li').eq(6).after(
            '<li class=\"c-mainNavArea__navItem\">' +
                '<a class=\"c-mainNavArea__navItemTitle\" data-bs-toggle=\"collapse\" href=\"#nav-regular\" aria-expanded=\"true\" aria-controls=\"nav-regular\">' +
                    '<i class=\"fa fa-cube fa-fw\" aria-hidden=\"true\"></i>' +
                    '<span>定期管理</span>' +
                '</a>' +
                '<ul class=\"collapse show\" id=\"nav-regular\" style=\"\">' +
                    '<li>' +
                        '<a href=\"{{ url('eccube_payment_lite42_admin_regular_index') }}\"{{ active_menus(menus)[1] == 'order' ? ' class=\"is-active\"' }}>' +
                            '<span>定期受注管理</span>' +
                        '</a>' +
                    '</li>' +
                    '<li>' +
                        '<a href=\"{{ url('eccube_payment_lite42_admin_regular_cycle') }}\"{{ active_menus(menus)[1] == 'cycle' ? ' class=\"is-active\"' }}>' +
                            '<span>定期サイクル管理</span>' +
                        '</a>' +
                    '</li>' +
                    '<li>' +
                        '<a href=\"{{ url('eccube_payment_lite42_admin_regular_discount_setting') }}\"{{ active_menus(menus)[1] == 'discount' ? ' class=\"is-active\"' }}>' +
                            '<span>定期回数別管理</span>' +
                        '</a>' +
                    '</li>' +
                '</ul>' +
            '</li>'
        );
    });
</script>
", "EccubePaymentLite42/Resource/template/admin/Nav/regular_nav.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\admin\\Nav\\regular_nav.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 2);
        static $filters = array();
        static $functions = array("url" => 20, "active_menus" => 20);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                [],
                ['url', 'active_menus']
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
