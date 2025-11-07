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

/* @admin/Store/plugin_search.twig */
class __TwigTemplate_d32a133f58819287e618ff43c2cb369e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/plugin_search.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/plugin_search.twig"));

        // line 14
        $context["menus"] = ["store", "plugin", "plugin_owners_search"];
        // line 12
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Store/plugin_search.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_search.885"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_search.884"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 20
        echo "    <style type=\"text/css\">
        .border-bt {
            border-bottom: 1px solid rgba(0, 0, 0, .125);
        }
        #plugin-list a img{
            max-height: 180px;
        }
        #plugin-list .info{
            min-height: 50%;
        }
        .plugin-ver li span{
            display: inline-block;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 35
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 36
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                ";
        // line 39
        if ((twig_length_filter($this->env, (isset($context["Categories"]) || array_key_exists("Categories", $context) ? $context["Categories"] : (function () { throw new RuntimeError('Variable "Categories" does not exist.', 39, $this->source); })())) > 0)) {
            // line 40
            echo "                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-body p-0\">
                            <div class=\"row\">
                                <div class=\"col-12 p-4\">
                                    ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Categories"]) || array_key_exists("Categories", $context) ? $context["Categories"] : (function () { throw new RuntimeError('Variable "Categories" does not exist.', 44, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["category"]) {
                // line 45
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_owners_search", ["category_id" => $context["key"]]), "html", null, true);
                echo "\" class=\"px-3 text-dark\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["category"], 45, $this->source), "html", null, true);
                echo "</a>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 52
        echo "
                <form method=\"post\" action=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_owners_search");
        echo "\" class=\"plugin-search\" name=\"search\">
                    <div class=\"c-outsideBlock\">
                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 55, $this->source); })()), "_token", [], "any", false, false, true, 55), 55, $this->source), 'widget');
        echo "
                        <div class=\"c-outsideBlock__contents mb-4\">
                            <div class=\"row justify-content-start\">
                                <div class=\"col-3 ps-0\">
                                    <label class=\"col-form-label\">";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 59, $this->source); })()), "category_id", [], "any", false, false, true, 59), "vars", [], "any", false, false, true, 59), "label", [], "any", false, false, true, 59), 59, $this->source)), "html", null, true);
        echo "</label>
                                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 60, $this->source); })()), "category_id", [], "any", false, false, true, 60), 60, $this->source), 'widget');
        echo "
                                </div>
                                <div class=\"col-3\">
                                    <label class=\"col-form-label\">";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 63, $this->source); })()), "price_type", [], "any", false, false, true, 63), "vars", [], "any", false, false, true, 63), "label", [], "any", false, false, true, 63), 63, $this->source)), "html", null, true);
        echo "</label>
                                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 64, $this->source); })()), "price_type", [], "any", false, false, true, 64), 64, $this->source), 'widget');
        echo "
                                </div>
                                <div class=\"col-3\">
                                    <label class=\"col-form-label\">";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 67, $this->source); })()), "keyword", [], "any", false, false, true, 67), "vars", [], "any", false, false, true, 67), "label", [], "any", false, false, true, 67), 67, $this->source)), "html", null, true);
        echo "</label>
                                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 68, $this->source); })()), "keyword", [], "any", false, false, true, 68), 68, $this->source), 'widget');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"c-outsideBlock__contents mb-2 ps-0\">
                            <button class=\"btn btn-ec-conversion px-5 py-2\" type=\"submit\">";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.search_button"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                    <div class=\"row justify-content-between mb-2\">
                        <div class=\"col-12 text-end\">
                            <div class=\"d-inline-block me-2\">
                                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 79, $this->source); })()), "sort", [], "any", false, false, true, 79), 79, $this->source), 'widget', ["attr" => ["onchange" => "document.forms.search.submit();"]]);
        echo "
                            </div>
                            <div class=\"d-inline-block\">
                                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 82, $this->source); })()), "page_count", [], "any", false, false, true, 82), 82, $this->source), 'widget', ["attr" => ["onchange" => "document.forms.search.submit();"]]);
        echo "
                            </div>
                        </div>
                    </div>
                </form>

                <div id=\"plugin-list\" class=\"card rounded border-0 my-4\">
                    <div class=\"card-header\">
                        <h5>";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.search_results", ["%number%" => twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 90, $this->source); })()), 90, $this->source)), "%total%" => (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 90, $this->source); })())]), "html", null, true);
        echo "</h5>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 93
        if ((twig_length_filter($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 93, $this->source); })())) > 0)) {
            // line 94
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 94, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 95
                echo "                                <div class=\"row border-bt pb-2 mb-3\">
                                    ";
                // line 96
                echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@admin/Store/plugin_search_panel.twig");
                echo "
                                </div>
                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "                        ";
        }
        // line 100
        echo "                    </div>

                    ";
        // line 102
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 102, $this->source); })()), "totalItemCount", [], "any", false, false, true, 102) > 0)) {
            // line 103
            echo "                        <div class=\"row justify-content-md-center mb-4\">
                            ";
            // line 104
            $this->loadTemplate("@admin/pager.twig", "@admin/Store/plugin_search.twig", 104)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 104, $this->source); })()), "paginationData", [], "any", false, false, true, 104), "routes" => "admin_store_plugin_owners_search_page"]));
            // line 105
            echo "                        </div>
                    ";
        }
        // line 107
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@admin/Store/plugin_search.twig";
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
        return array (  332 => 107,  328 => 105,  326 => 104,  323 => 103,  321 => 102,  317 => 100,  314 => 99,  297 => 96,  294 => 95,  276 => 94,  274 => 93,  268 => 90,  257 => 82,  251 => 79,  242 => 73,  234 => 68,  230 => 67,  224 => 64,  220 => 63,  214 => 60,  210 => 59,  203 => 55,  198 => 53,  195 => 52,  188 => 47,  177 => 45,  173 => 44,  167 => 40,  165 => 39,  160 => 36,  150 => 35,  126 => 20,  116 => 19,  97 => 17,  78 => 16,  67 => 12,  65 => 14,  40 => 12,);
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

{% extends '@admin/default_frame.twig' %}

{% set menus = ['store', 'plugin', 'plugin_owners_search'] %}

{% block title %}{{'admin.store.plugin_search.885'|trans}}{% endblock %}
{% block sub_title %}{{'admin.store.plugin_search.884'|trans}}{% endblock %}

{% block stylesheet %}
    <style type=\"text/css\">
        .border-bt {
            border-bottom: 1px solid rgba(0, 0, 0, .125);
        }
        #plugin-list a img{
            max-height: 180px;
        }
        #plugin-list .info{
            min-height: 50%;
        }
        .plugin-ver li span{
            display: inline-block;
        }
    </style>
{% endblock %}
{% block main %}
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                {% if Categories|length > 0 %}
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-body p-0\">
                            <div class=\"row\">
                                <div class=\"col-12 p-4\">
                                    {% for key,category in Categories %}
                                        <a href=\"{{ url('admin_store_plugin_owners_search', {'category_id' : key}) }}\" class=\"px-3 text-dark\">{{ category }}</a>
                                    {% endfor %}
                                </div>
                            </div>
                        </div>
                    </div>
                {% endif %}

                <form method=\"post\" action=\"{{ url('admin_store_plugin_owners_search') }}\" class=\"plugin-search\" name=\"search\">
                    <div class=\"c-outsideBlock\">
                        {{ form_widget(searchForm._token) }}
                        <div class=\"c-outsideBlock__contents mb-4\">
                            <div class=\"row justify-content-start\">
                                <div class=\"col-3 ps-0\">
                                    <label class=\"col-form-label\">{{ searchForm.category_id.vars.label|trans }}</label>
                                    {{ form_widget(searchForm.category_id) }}
                                </div>
                                <div class=\"col-3\">
                                    <label class=\"col-form-label\">{{ searchForm.price_type.vars.label|trans }}</label>
                                    {{ form_widget(searchForm.price_type) }}
                                </div>
                                <div class=\"col-3\">
                                    <label class=\"col-form-label\">{{ searchForm.keyword.vars.label|trans }}</label>
                                    {{ form_widget(searchForm.keyword) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"c-outsideBlock__contents mb-2 ps-0\">
                            <button class=\"btn btn-ec-conversion px-5 py-2\" type=\"submit\">{{ 'admin.store.plugin_owners_search.search_button'|trans }}</button>
                        </div>
                    </div>
                    <div class=\"row justify-content-between mb-2\">
                        <div class=\"col-12 text-end\">
                            <div class=\"d-inline-block me-2\">
                                {{ form_widget(searchForm.sort, {attr: {onchange: 'document.forms.search.submit();'}}) }}
                            </div>
                            <div class=\"d-inline-block\">
                                {{ form_widget(searchForm.page_count, {attr: {onchange: 'document.forms.search.submit();'}}) }}
                            </div>
                        </div>
                    </div>
                </form>

                <div id=\"plugin-list\" class=\"card rounded border-0 my-4\">
                    <div class=\"card-header\">
                        <h5>{{ 'admin.store.plugin_owners_search.search_results'|trans({'%number%': pagination|length, '%total%' : total}) }}</h5>
                    </div>
                    <div class=\"card-body\">
                        {% if pagination|length > 0%}
                            {% for item in pagination %}
                                <div class=\"row border-bt pb-2 mb-3\">
                                    {{ include('@admin/Store/plugin_search_panel.twig') }}
                                </div>
                            {% endfor %}
                        {% endif %}
                    </div>

                    {% if pagination.totalItemCount > 0 %}
                        <div class=\"row justify-content-md-center mb-4\">
                            {% include \"@admin/pager.twig\" with { 'pages' : pagination.paginationData, 'routes' : 'admin_store_plugin_owners_search_page' } %}
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "@admin/Store/plugin_search.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\admin\\Store\\plugin_search.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 14, "if" => 39, "for" => 44, "include" => 104);
        static $filters = array("escape" => 16, "trans" => 16, "length" => 39);
        static $functions = array("url" => 45, "form_widget" => 55, "include" => 96);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'include'],
                ['escape', 'trans', 'length'],
                ['url', 'form_widget', 'include']
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
