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

/* @admin/pager.twig */
class __TwigTemplate_3886b73106f6845713262e2ebf0bace8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/pager.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/pager.twig"));

        // line 11
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 11, $this->source); })()), "pageCount", [], "any", false, false, true, 11) > 1)) {
            // line 12
            echo "    <ul class=\"pagination col-auto\">

        <!-- 最初へ -->
        ";
            // line 15
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 15, $this->source); })()), "firstPageInRange", [], "any", false, false, true, 15) != 1)) {
                // line 16
                echo "            <li class=\"page-item\">
                ";
                // line 18
                echo "                ";
                $context["request"] = twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, true, 18), "query", [], "any", false, false, true, 18), "all", [], "any", false, false, true, 18), 18, $this->source), ["page_no" => twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 18, $this->source); })()), "first", [], "any", false, false, true, 18)]);
                // line 19
                echo "                ";
                $context["request"] = ((array_key_exists("id", $context)) ? (twig_array_merge($this->sandbox->ensureToStringAllowed((isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 19, $this->source); })()), 19, $this->source), ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 19, $this->source); })())])) : ((isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 19, $this->source); })())));
                // line 20
                echo "                <a class=\"page-link\"
                   href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 21, $this->source); })())) ? ((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 21, $this->source); })())) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, true, 21), "attributes", [], "any", false, false, true, 21), "get", ["_route"], "method", false, false, true, 21))), $this->sandbox->ensureToStringAllowed((isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 21, $this->source); })()), 21, $this->source)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.first"), "html", null, true);
                echo "</a></li>

        ";
            }
            // line 24
            echo "
        <!-- 前へ -->
        ";
            // line 26
            if (twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "previous", [], "any", true, true, true, 26)) {
                // line 27
                echo "            <li class=\"page-item\">
                ";
                // line 29
                echo "                ";
                $context["request"] = twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, true, 29), "query", [], "any", false, false, true, 29), "all", [], "any", false, false, true, 29), 29, $this->source), ["page_no" => twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 29, $this->source); })()), "previous", [], "any", false, false, true, 29)]);
                // line 30
                echo "                ";
                $context["request"] = ((array_key_exists("id", $context)) ? (twig_array_merge($this->sandbox->ensureToStringAllowed((isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 30, $this->source); })()), 30, $this->source), ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 30, $this->source); })())])) : ((isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 30, $this->source); })())));
                // line 31
                echo "                <a class=\"page-link\"
                   href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 32, $this->source); })())) ? ((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 32, $this->source); })())) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, true, 32), "attributes", [], "any", false, false, true, 32), "get", ["_route"], "method", false, false, true, 32))), $this->sandbox->ensureToStringAllowed((isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 32, $this->source); })()), 32, $this->source)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.prev"), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            // line 35
            echo "
        <!-- 1ページリンクが表示されない場合、「...」を表示 -->
        ";
            // line 37
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 37, $this->source); })()), "firstPageInRange", [], "any", false, false, true, 37) != 1)) {
                // line 38
                echo "            <li class=\"page-item\">...</li>
        ";
            }
            // line 40
            echo "
        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 41, $this->source); })()), "pagesInRange", [], "any", false, false, true, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 42
                echo "            <li class=\"page-item";
                if (($context["page"] == twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 42, $this->source); })()), "current", [], "any", false, false, true, 42))) {
                    echo " active";
                }
                echo "\">
                ";
                // line 44
                echo "                ";
                $context["request"] = twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "request", [], "any", false, false, true, 44), "query", [], "any", false, false, true, 44), "all", [], "any", false, false, true, 44), 44, $this->source), ["page_no" => $context["page"]]);
                // line 45
                echo "                ";
                $context["request"] = ((array_key_exists("id", $context)) ? (twig_array_merge($this->sandbox->ensureToStringAllowed((isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 45, $this->source); })()), 45, $this->source), ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 45, $this->source); })())])) : ((isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 45, $this->source); })())));
                // line 46
                echo "                <a class=\"page-link\"
                   href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 47, $this->source); })())) ? ((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 47, $this->source); })())) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "request", [], "any", false, false, true, 47), "attributes", [], "any", false, false, true, 47), "get", ["_route"], "method", false, false, true, 47))), $this->sandbox->ensureToStringAllowed((isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 47, $this->source); })()), 47, $this->source)), "html", null, true);
                echo "\">
                    ";
                // line 48
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 48, $this->source), "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "
        <!-- 最終ページリンクが表示されない場合、「...」を表示 -->
        ";
            // line 54
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 54, $this->source); })()), "last", [], "any", false, false, true, 54) != twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 54, $this->source); })()), "lastPageInRange", [], "any", false, false, true, 54))) {
                // line 55
                echo "            <li class=\"page-item\">...</li>
        ";
            }
            // line 57
            echo "
        <!-- 次へ -->
        ";
            // line 59
            if (twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "next", [], "any", true, true, true, 59)) {
                // line 60
                echo "            <li class=\"page-item\">
                ";
                // line 62
                echo "                ";
                $context["request"] = twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "request", [], "any", false, false, true, 62), "query", [], "any", false, false, true, 62), "all", [], "any", false, false, true, 62), 62, $this->source), ["page_no" => twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 62, $this->source); })()), "next", [], "any", false, false, true, 62)]);
                // line 63
                echo "                ";
                $context["request"] = ((array_key_exists("id", $context)) ? (twig_array_merge($this->sandbox->ensureToStringAllowed((isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 63, $this->source); })()), 63, $this->source), ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 63, $this->source); })())])) : ((isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 63, $this->source); })())));
                // line 64
                echo "                <a class=\"page-link\"
                   href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 65, $this->source); })())) ? ((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 65, $this->source); })())) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "request", [], "any", false, false, true, 65), "attributes", [], "any", false, false, true, 65), "get", ["_route"], "method", false, false, true, 65))), $this->sandbox->ensureToStringAllowed((isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 65, $this->source); })()), 65, $this->source)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.next"), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            // line 68
            echo "
        <!-- 最後へ -->
        ";
            // line 70
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 70, $this->source); })()), "last", [], "any", false, false, true, 70) != twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 70, $this->source); })()), "lastPageInRange", [], "any", false, false, true, 70))) {
                // line 71
                echo "            <li class=\"page-item\">
                ";
                // line 73
                echo "                ";
                $context["request"] = twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "request", [], "any", false, false, true, 73), "query", [], "any", false, false, true, 73), "all", [], "any", false, false, true, 73), 73, $this->source), ["page_no" => twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 73, $this->source); })()), "last", [], "any", false, false, true, 73)]);
                // line 74
                echo "                ";
                $context["request"] = ((array_key_exists("id", $context)) ? (twig_array_merge($this->sandbox->ensureToStringAllowed((isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 74, $this->source); })()), 74, $this->source), ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 74, $this->source); })())])) : ((isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 74, $this->source); })())));
                // line 75
                echo "                <a class=\"page-link\"
                   href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 76, $this->source); })())) ? ((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 76, $this->source); })())) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "request", [], "any", false, false, true, 76), "attributes", [], "any", false, false, true, 76), "get", ["_route"], "method", false, false, true, 76))), $this->sandbox->ensureToStringAllowed((isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 76, $this->source); })()), 76, $this->source)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.last"), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 78
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
        return "@admin/pager.twig";
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
        return array (  220 => 78,  213 => 76,  210 => 75,  207 => 74,  204 => 73,  201 => 71,  199 => 70,  195 => 68,  187 => 65,  184 => 64,  181 => 63,  178 => 62,  175 => 60,  173 => 59,  169 => 57,  165 => 55,  163 => 54,  159 => 52,  149 => 48,  145 => 47,  142 => 46,  139 => 45,  136 => 44,  129 => 42,  125 => 41,  122 => 40,  118 => 38,  116 => 37,  112 => 35,  104 => 32,  101 => 31,  98 => 30,  95 => 29,  92 => 27,  90 => 26,  86 => 24,  78 => 21,  75 => 20,  72 => 19,  69 => 18,  66 => 16,  64 => 15,  59 => 12,  57 => 11,);
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
    <ul class=\"pagination col-auto\">

        <!-- 最初へ -->
        {% if pages.firstPageInRange != 1 %}
            <li class=\"page-item\">
                {# FIXME: Need check pass routes before use default _route from request #}
                {% set request = app.request.query.all|merge({'page_no': pages.first}) %}
                {% set request = id is defined ? request|merge({'id': id}) : request %}
                <a class=\"page-link\"
                   href=\"{{ path(routes ? routes : app.request.attributes.get('_route'), request) }}\">{{ 'admin.common.first'|trans }}</a></li>

        {% endif %}

        <!-- 前へ -->
        {% if pages.previous is defined %}
            <li class=\"page-item\">
                {# FIXME: Need check pass routes before use default _route from request #}
                {% set request = app.request.query.all|merge({'page_no': pages.previous}) %}
                {% set request = id is defined ? request|merge({'id': id}) : request %}
                <a class=\"page-link\"
                   href=\"{{ path(routes ? routes : app.request.attributes.get('_route'), request) }}\">{{ 'admin.common.prev'|trans }}</a>
            </li>
        {% endif %}

        <!-- 1ページリンクが表示されない場合、「...」を表示 -->
        {% if pages.firstPageInRange != 1 %}
            <li class=\"page-item\">...</li>
        {% endif %}

        {% for page in pages.pagesInRange %}
            <li class=\"page-item{% if page == pages.current %} active{% endif %}\">
                {# FIXME: Need check pass routes before use default _route from request #}
                {% set request = app.request.query.all|merge({'page_no': page}) %}
                {% set request = id is defined ? request|merge({'id': id}) : request %}
                <a class=\"page-link\"
                   href=\"{{ path(routes ? routes : app.request.attributes.get('_route'), request) }}\">
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
                {% set request = app.request.query.all|merge({'page_no': pages.next}) %}
                {% set request = id is defined ? request|merge({'id': id}) : request %}
                <a class=\"page-link\"
                   href=\"{{ path(routes ? routes : app.request.attributes.get('_route'), request) }}\">{{ 'admin.common.next'|trans }}</a>
            </li>
        {% endif %}

        <!-- 最後へ -->
        {% if pages.last != pages.lastPageInRange %}
            <li class=\"page-item\">
                {# FIXME: Need check pass routes before use default _route from request #}
                {% set request = app.request.query.all|merge({'page_no': pages.last}) %}
                {% set request = id is defined ? request|merge({'id': id}) : request %}
                <a class=\"page-link\"
                   href=\"{{ path(routes ? routes : app.request.attributes.get('_route'), request) }}\">{{ 'admin.common.last'|trans }}</a></li>
        {% endif %}

    </ul>
{% endif %}
", "@admin/pager.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\admin\\pager.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 11, "set" => 18, "for" => 41);
        static $filters = array("merge" => 18, "escape" => 21, "trans" => 21);
        static $functions = array("path" => 21);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['merge', 'escape', 'trans'],
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
