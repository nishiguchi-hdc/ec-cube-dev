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

/* pager.twig */
class __TwigTemplate_f6e5b5eb50a79cc0157f34b30d3be0e6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pager.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pager.twig"));

        // line 11
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 11, $this->source); })()), "pageCount", [], "any", false, false, true, 11) > 1)) {
            // line 12
            echo "    <ul class=\"ec-pager\">
        ";
            // line 14
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 14, $this->source); })()), "firstPageInRange", [], "any", false, false, true, 14) != 1)) {
                // line 15
                echo "            <li class=\"ec-pager__item\">
                <a href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 17
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, true, 17), "attributes", [], "any", false, false, true, 17), "get", ["_route"], "method", false, false, true, 17), 17, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 18
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, true, 18), "query", [], "any", false, false, true, 18), "all", [], "any", false, false, true, 18), 18, $this->source), ["pageno" => twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 18, $this->source); })()), "first", [], "any", false, false, true, 18)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("最初へ"), "html", null, true);
                echo "</a></li>

        ";
            }
            // line 21
            echo "
        ";
            // line 23
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "previous", [], "any", true, true, true, 23)) {
                // line 24
                echo "            <li class=\"ec-pager__item\">
                <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 26
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", [], "any", false, false, true, 26), "attributes", [], "any", false, false, true, 26), "get", ["_route"], "method", false, false, true, 26), 26, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 27
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, true, 27), "query", [], "any", false, false, true, 27), "all", [], "any", false, false, true, 27), 27, $this->source), ["pageno" => twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 27, $this->source); })()), "previous", [], "any", false, false, true, 27)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("前へ"), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 29
            echo "
        ";
            // line 31
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 31, $this->source); })()), "firstPageInRange", [], "any", false, false, true, 31) != 1)) {
                // line 32
                echo "            <li class=\"ec-pager__item\">...</li>
        ";
            }
            // line 34
            echo "
        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 35, $this->source); })()), "pagesInRange", [], "any", false, false, true, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 36
                echo "            ";
                if (($context["page"] == twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 36, $this->source); })()), "current", [], "any", false, false, true, 36))) {
                    // line 37
                    echo "                <li class=\"ec-pager__item--active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 38
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, true, 38), "attributes", [], "any", false, false, true, 38), "get", ["_route"], "method", false, false, true, 38), 38, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 39
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "request", [], "any", false, false, true, 39), "query", [], "any", false, false, true, 39), "all", [], "any", false, false, true, 39), 39, $this->source), ["pageno" => $context["page"]])), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 39, $this->source), "html", null, true);
                    echo " </a></li>
            ";
                } else {
                    // line 41
                    echo "                <li class=\"ec-pager__item\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 42
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "request", [], "any", false, false, true, 42), "attributes", [], "any", false, false, true, 42), "get", ["_route"], "method", false, false, true, 42), 42, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 43
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "request", [], "any", false, false, true, 43), "query", [], "any", false, false, true, 43), "all", [], "any", false, false, true, 43), 43, $this->source), ["pageno" => $context["page"]])), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 43, $this->source), "html", null, true);
                    echo " </a></li>
            ";
                }
                // line 45
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "
        ";
            // line 48
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 48, $this->source); })()), "last", [], "any", false, false, true, 48) != twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 48, $this->source); })()), "lastPageInRange", [], "any", false, false, true, 48))) {
                // line 49
                echo "            <li class=\"ec-pager__item\">...</li>
        ";
            }
            // line 51
            echo "
        ";
            // line 53
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "next", [], "any", true, true, true, 53)) {
                // line 54
                echo "            <li class=\"ec-pager__item\">
                <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 56
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "request", [], "any", false, false, true, 56), "attributes", [], "any", false, false, true, 56), "get", ["_route"], "method", false, false, true, 56), 56, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 57
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "request", [], "any", false, false, true, 57), "query", [], "any", false, false, true, 57), "all", [], "any", false, false, true, 57), 57, $this->source), ["pageno" => twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 57, $this->source); })()), "next", [], "any", false, false, true, 57)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("次へ"), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 59
            echo "
        ";
            // line 61
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 61, $this->source); })()), "last", [], "any", false, false, true, 61) != twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 61, $this->source); })()), "lastPageInRange", [], "any", false, false, true, 61))) {
                // line 62
                echo "            <li class=\"ec-pager__item\">
                <a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 64
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "request", [], "any", false, false, true, 64), "attributes", [], "any", false, false, true, 64), "get", ["_route"], "method", false, false, true, 64), 64, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 65
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "request", [], "any", false, false, true, 65), "query", [], "any", false, false, true, 65), "all", [], "any", false, false, true, 65), 65, $this->source), ["pageno" => twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 65, $this->source); })()), "last", [], "any", false, false, true, 65)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("最後へ"), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 67
            echo "    </ul>
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
        return "pager.twig";
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
        return array (  188 => 67,  181 => 65,  180 => 64,  179 => 63,  176 => 62,  173 => 61,  170 => 59,  163 => 57,  162 => 56,  161 => 55,  158 => 54,  155 => 53,  152 => 51,  148 => 49,  145 => 48,  142 => 46,  136 => 45,  129 => 43,  128 => 42,  126 => 41,  119 => 39,  118 => 38,  116 => 37,  113 => 36,  109 => 35,  106 => 34,  102 => 32,  99 => 31,  96 => 29,  89 => 27,  88 => 26,  87 => 25,  84 => 24,  81 => 23,  78 => 21,  70 => 18,  69 => 17,  68 => 16,  65 => 15,  62 => 14,  59 => 12,  57 => 11,);
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
    <ul class=\"ec-pager\">
        {# 最初へ #}
        {% if pages.firstPageInRange != 1 %}
            <li class=\"ec-pager__item\">
                <a href=\"{{ path(
                app.request.attributes.get('_route'),
                app.request.query.all|merge({'pageno': pages.first})) }}\">{{ '最初へ'|trans }}</a></li>

        {% endif %}

        {# 前へ #}
        {% if pages.previous is defined %}
            <li class=\"ec-pager__item\">
                <a href=\"{{ path(
                app.request.attributes.get('_route'),
                app.request.query.all|merge({'pageno': pages.previous})) }}\">{{ '前へ'|trans }}</a></li>
        {% endif %}

        {# 1ページリンクが表示されない場合、「...」を表示 #}
        {% if pages.firstPageInRange != 1 %}
            <li class=\"ec-pager__item\">...</li>
        {% endif %}

        {% for page in pages.pagesInRange %}
            {% if page == pages.current %}
                <li class=\"ec-pager__item--active\"><a href=\"{{ path(
                    app.request.attributes.get('_route'),
                    app.request.query.all|merge({'pageno': page})) }}\"> {{ page }} </a></li>
            {% else %}
                <li class=\"ec-pager__item\"><a href=\"{{ path(
                    app.request.attributes.get('_route'),
                    app.request.query.all|merge({'pageno': page})) }}\"> {{ page }} </a></li>
            {% endif %}
        {% endfor %}

        {# 最終ページリンクが表示されない場合、「...」を表示 #}
        {% if pages.last != pages.lastPageInRange %}
            <li class=\"ec-pager__item\">...</li>
        {% endif %}

        {# 次へ #}
        {% if pages.next is defined %}
            <li class=\"ec-pager__item\">
                <a href=\"{{ path(
                app.request.attributes.get('_route'),
                app.request.query.all|merge({'pageno': pages.next})) }}\">{{ '次へ'|trans }}</a></li>
        {% endif %}

        {# 最後へ #}
        {% if pages.last != pages.lastPageInRange %}
            <li class=\"ec-pager__item\">
                <a href=\"{{ path(
                app.request.attributes.get('_route'),
                app.request.query.all|merge({'pageno': pages.last})) }}\">{{ '最後へ'|trans }}</a></li>
        {% endif %}
    </ul>
{% endif %}
", "pager.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\default\\pager.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 11, "for" => 35);
        static $filters = array("escape" => 16, "merge" => 18, "trans" => 18);
        static $functions = array("path" => 16);

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
