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

/* MailMagazine42/Resource/template/admin/history_result_pager.twig */
class __TwigTemplate_f3b546815f15ec962eef893c403e50d8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MailMagazine42/Resource/template/admin/history_result_pager.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MailMagazine42/Resource/template/admin/history_result_pager.twig"));

        // line 10
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 10, $this->source); })()), "pageCount", [], "any", false, false, true, 10) > 1)) {
            // line 11
            echo "    <ul class=\"pagination\">

        <!-- 最初へ -->
        ";
            // line 14
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 14, $this->source); })()), "firstPageInRange", [], "any", false, false, true, 14) != 1)) {
                // line 15
                echo "            <li class=\"page-item\">
                ";
                // line 17
                echo "                <a class=\"page-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((                // line 18
(isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 18, $this->source); })())) ? ((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 18, $this->source); })())) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, true, 18), "attributes", [], "any", false, false, true, 18), "get", ["_route"], "method", false, false, true, 18))), twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 19
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, true, 19), "attributes", [], "any", false, false, true, 19), "get", ["_route_params"], "method", false, false, true, 19), 19, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, true, 19), "query", [], "any", false, false, true, 19), "all", [], "any", false, false, true, 19), 19, $this->source), ["page_no" => twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 19, $this->source); })()), "first", [], "any", false, false, true, 19)]))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.first"), "html", null, true);
                echo "</a></li>

        ";
            }
            // line 22
            echo "
        <!-- 前へ -->
        ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "previous", [], "any", true, true, true, 24)) {
                // line 25
                echo "            <li class=\"page-item\">
                ";
                // line 27
                echo "                <a class=\"page-link\"
                   href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 28, $this->source); })())) ? ((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 28, $this->source); })())) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, true, 28), "attributes", [], "any", false, false, true, 28), "get", ["_route"], "method", false, false, true, 28))), twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, true, 28), "attributes", [], "any", false, false, true, 28), "get", ["_route_params"], "method", false, false, true, 28), 28, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, true, 28), "query", [], "any", false, false, true, 28), "all", [], "any", false, false, true, 28), 28, $this->source), ["page_no" => twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 28, $this->source); })()), "previous", [], "any", false, false, true, 28)]))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.prev"), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            // line 31
            echo "
        <!-- 1ページリンクが表示されない場合、「...」を表示 -->
        ";
            // line 33
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 33, $this->source); })()), "firstPageInRange", [], "any", false, false, true, 33) != 1)) {
                // line 34
                echo "            <li class=\"page-item\">...</li>
        ";
            }
            // line 36
            echo "
        ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 37, $this->source); })()), "pagesInRange", [], "any", false, false, true, 37));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 38
                echo "            <li class=\"page-item";
                if (($context["page"] == twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 38, $this->source); })()), "current", [], "any", false, false, true, 38))) {
                    echo " active";
                }
                echo "\">
                ";
                // line 40
                echo "                <a class=\"page-link\"
                   href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 41, $this->source); })())) ? ((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 41, $this->source); })())) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, true, 41), "attributes", [], "any", false, false, true, 41), "get", ["_route"], "method", false, false, true, 41))), twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, true, 41), "attributes", [], "any", false, false, true, 41), "get", ["_route_params"], "method", false, false, true, 41), 41, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, true, 41), "query", [], "any", false, false, true, 41), "all", [], "any", false, false, true, 41), 41, $this->source), ["page_no" => $context["page"]]))), "html", null, true);
                echo "\">
                    ";
                // line 42
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 42, $this->source), "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "
        <!-- 最終ページリンクが表示されない場合、「...」を表示 -->
        ";
            // line 48
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 48, $this->source); })()), "last", [], "any", false, false, true, 48) != twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 48, $this->source); })()), "lastPageInRange", [], "any", false, false, true, 48))) {
                // line 49
                echo "            <li class=\"page-item\">...</li>
        ";
            }
            // line 51
            echo "
        <!-- 次へ -->
        ";
            // line 53
            if (twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "next", [], "any", true, true, true, 53)) {
                // line 54
                echo "            <li class=\"page-item\">
                ";
                // line 56
                echo "                <a class=\"page-link\"
                   href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 57, $this->source); })())) ? ((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 57, $this->source); })())) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "request", [], "any", false, false, true, 57), "attributes", [], "any", false, false, true, 57), "get", ["_route"], "method", false, false, true, 57))), twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "request", [], "any", false, false, true, 57), "attributes", [], "any", false, false, true, 57), "get", ["_route_params"], "method", false, false, true, 57), 57, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "request", [], "any", false, false, true, 57), "query", [], "any", false, false, true, 57), "all", [], "any", false, false, true, 57), 57, $this->source), ["page_no" => twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 57, $this->source); })()), "next", [], "any", false, false, true, 57)]))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.next"), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            // line 60
            echo "
        <!-- 最後へ -->
        ";
            // line 62
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 62, $this->source); })()), "last", [], "any", false, false, true, 62) != twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 62, $this->source); })()), "lastPageInRange", [], "any", false, false, true, 62))) {
                // line 63
                echo "            <li class=\"page-item\">
                ";
                // line 65
                echo "                <a class=\"page-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((                // line 66
(isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 66, $this->source); })())) ? ((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 66, $this->source); })())) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "request", [], "any", false, false, true, 66), "attributes", [], "any", false, false, true, 66), "get", ["_route"], "method", false, false, true, 66))), twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 67
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "request", [], "any", false, false, true, 67), "attributes", [], "any", false, false, true, 67), "get", ["_route_params"], "method", false, false, true, 67), 67, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "request", [], "any", false, false, true, 67), "query", [], "any", false, false, true, 67), "all", [], "any", false, false, true, 67), 67, $this->source), ["page_no" => twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 67, $this->source); })()), "last", [], "any", false, false, true, 67)]))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.last"), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 69
            echo "
    </ul>
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
        return "MailMagazine42/Resource/template/admin/history_result_pager.twig";
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
        return array (  190 => 69,  183 => 67,  182 => 66,  180 => 65,  177 => 63,  175 => 62,  171 => 60,  163 => 57,  160 => 56,  157 => 54,  155 => 53,  151 => 51,  147 => 49,  145 => 48,  141 => 46,  131 => 42,  127 => 41,  124 => 40,  117 => 38,  113 => 37,  110 => 36,  106 => 34,  104 => 33,  100 => 31,  92 => 28,  89 => 27,  86 => 25,  84 => 24,  80 => 22,  72 => 19,  71 => 18,  69 => 17,  66 => 15,  64 => 14,  59 => 11,  57 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 This file is part of EC-CUBE

 Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 http://www.ec-cube.co.jp/

 For the full copyright and license information, please view the LICENSE
 file that was distributed with this source code.
#}
{% if pages.pageCount > 1 %}
    <ul class=\"pagination\">

        <!-- 最初へ -->
        {% if pages.firstPageInRange != 1 %}
            <li class=\"page-item\">
                {# FIXME: Need check pass routes before use default _route from request #}
                <a class=\"page-link\" href=\"{{ path(
                    routes ? routes : app.request.attributes.get('_route'),
                    app.request.attributes.get('_route_params')|merge(app.request.query.all|merge({'page_no': pages.first}))) }}\">{{ 'admin.common.first'|trans }}</a></li>

        {% endif %}

        <!-- 前へ -->
        {% if pages.previous is defined %}
            <li class=\"page-item\">
                {# FIXME: Need check pass routes before use default _route from request #}
                <a class=\"page-link\"
                   href=\"{{ path(routes ? routes : app.request.attributes.get('_route'), app.request.attributes.get('_route_params')|merge(app.request.query.all|merge({'page_no': pages.previous}))) }}\">{{ 'admin.common.prev'|trans }}</a>
            </li>
        {% endif %}

        <!-- 1ページリンクが表示されない場合、「...」を表示 -->
        {% if pages.firstPageInRange != 1 %}
            <li class=\"page-item\">...</li>
        {% endif %}

        {% for page in pages.pagesInRange %}
            <li class=\"page-item{% if page == pages.current %} active{% endif %}\">
                {# FIXME: Need check pass routes before use default _route from request #}
                <a class=\"page-link\"
                   href=\"{{ path(routes ? routes : app.request.attributes.get('_route'),app.request.attributes.get('_route_params')|merge(app.request.query.all|merge({'page_no': page}))) }}\">
                    {{ page }}
                </a>
            </li>
        {% endfor %}

        <!-- 最終ページリンクが表示されない場合、「...」を表示 -->
        {% if pages.last != pages.lastPageInRange %}
            <li class=\"page-item\">...</li>
        {% endif %}

        <!-- 次へ -->
        {% if pages.next is defined %}
            <li class=\"page-item\">
                {# FIXME: Need check pass routes before use default _route from request #}
                <a class=\"page-link\"
                   href=\"{{ path(routes ? routes : app.request.attributes.get('_route'),app.request.attributes.get('_route_params')|merge(app.request.query.all|merge({'page_no': pages.next}))) }}\">{{ 'admin.common.next'|trans }}</a>
            </li>
        {% endif %}

        <!-- 最後へ -->
        {% if pages.last != pages.lastPageInRange %}
            <li class=\"page-item\">
                {# FIXME: Need check pass routes before use default _route from request #}
                <a class=\"page-link\" href=\"{{ path(
                    routes ? routes : app.request.attributes.get('_route'),
                    app.request.attributes.get('_route_params')|merge(app.request.query.all|merge({'page_no': pages.last}))) }}\">{{ 'admin.common.last'|trans }}</a></li>
        {% endif %}

    </ul>
{% endif %}
", "MailMagazine42/Resource/template/admin/history_result_pager.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\MailMagazine42\\Resource\\template\\admin\\history_result_pager.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10, "for" => 37);
        static $filters = array("escape" => 17, "merge" => 19, "trans" => 19);
        static $functions = array("path" => 17);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'merge', 'trans'],
                ['path']
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
