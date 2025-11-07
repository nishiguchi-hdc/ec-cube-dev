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

/* @admin/Content/news.twig */
class __TwigTemplate_3ccfebe09c3e8c068dd97156c0616825 extends Template
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
        // line 11
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Content/news.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Content/news.twig"));

        // line 13
        $context["menus"] = ["content", "news"];
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Content/news.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.news_management"), "html", null, true);
        
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.contents_management"), "html", null, true);
        
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
        li.list-group-item {
            z-index: inherit !important;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 27
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 28
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"d-block mb-3\">
                    <a id=\"addNew\" class=\"btn btn-ec-regular\"
                       href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_content_news_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
        echo "</a>
                </div>
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <ul class=\"list-group list-group-flush mb-4 sortable-container\">
                            <li class=\"list-group-item\">
                                <div class=\"row justify-content-around\">
                                    <div class=\"col-2\"><strong>";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.news.publish_date"), "html", null, true);
        echo "</strong>
                                    </div>
                                    <div class=\"col-1\"><strong>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.news.display_status"), "html", null, true);
        echo "</strong>
                                    </div>
                                    <div class=\"col\"><strong>";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.news.title"), "html", null, true);
        echo "</strong></div>
                                </div>
                            </li>
                            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["News"]) {
            // line 48
            echo "                                <li class=\"list-group-item sortable-item\" data-id=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["News"], "id", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "\">
                                    <div class=\"row justify-content-around\">
                                        <div class=\"col-2 d-flex align-items-center\">
                                            <span>";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["News"], "publishDate", [], "any", false, false, true, 51), 51, $this->source)), "html", null, true);
            echo "</span></div>
                                        <div class=\"col-1 d-flex align-items-center\">";
            // line 52
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["News"], "visible", [], "any", false, false, true, 52)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.news.display_status__show")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.news.display_status__hide"))), "html", null, true);
            echo "</div>
                                        <div class=\"col d-flex align-items-center\"><a
                                                    href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_content_news_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["News"], "id", [], "any", false, false, true, 54)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["News"], "title", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            echo "</a>
                                        </div>
                                        <div class=\"col-2\">
                                            <div class=\"row\">
                                                <div class=\"col px-0 text-center\">
                                                    <a class=\"btn btn-ec-actionIcon\"
                                                       href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_content_news_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["News"], "id", [], "any", false, false, true, 60)]), "html", null, true);
            echo "\"
                                                       data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                       title=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.edit"), "html", null, true);
            echo "\">
                                                        <i class=\"fa fa-pencil fa-lg text-secondary\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"col ps-0 text-center\" data-bs-toggle=\"tooltip\"
                                                     data-bs-placement=\"top\" title=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
            echo "\">
                                                    <a class=\"btn btn-ec-actionIcon\" data-bs-toggle=\"modal\"
                                                       data-bs-target=\"#delete_";
            // line 69
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["News"], "id", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
            echo "\">
                                                        <i class=\"fa fa-close fa-lg text-secondary\"
                                                           aria-hidden=\"true\"></i>
                                                    </a>
                                                    <div class=\"modal fade\" id=\"delete_";
            // line 73
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["News"], "id", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            echo "\" tabindex=\"-1\"
                                                         role=\"dialog\"
                                                         aria-labelledby=\"delete_";
            // line 75
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["News"], "id", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "\" aria-hidden=\"true\">
                                                        <div class=\"modal-dialog\" role=\"document\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h5 class=\"modal-title fw-bold\">";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
            echo "</h5>
                                                                    <button class=\"btn-close\" type=\"button\"
                                                                            data-bs-dismiss=\"modal\"
                                                                            aria-label=\"Close\">
                                                                    </button>
                                                                </div>
                                                                <div class=\"modal-body text-start\">
                                                                    <p class=\"text-start\">";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["News"], "title", [], "any", false, false, true, 86)]), "html", null, true);
            echo "</p>
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    <button class=\"btn btn-ec-sub\" type=\"button\"
                                                                            data-bs-dismiss=\"modal\">";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
            echo "</button>
                                                                    <a class=\"btn btn-ec-delete\"
                                                                       href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_content_news_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["News"], "id", [], "any", false, false, true, 92)]), "html", null, true);
            echo "\" ";
            echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
            echo "
                                                                       data-method=\"delete\"
                                                                       data-confirm=\"false\">";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
            echo "</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['News'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                        </ul>

                        ";
        // line 107
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 107, $this->source); })()), "paginationData", [], "any", false, false, true, 107), "pageCount", [], "any", false, false, true, 107) > 1)) {
            // line 108
            echo "                            <div class=\"row justify-content-md-center mb-4\">
                                ";
            // line 109
            $this->loadTemplate("@admin/pager.twig", "@admin/Content/news.twig", 109)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 109, $this->source); })()), "paginationData", [], "any", false, false, true, 109), "routes" => "admin_content_news_page"]));
            // line 110
            echo "                            </div>
                        ";
        }
        // line 112
        echo "                    </div>
                </div>
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
        return "@admin/Content/news.twig";
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
        return array (  315 => 112,  311 => 110,  309 => 109,  306 => 108,  304 => 107,  300 => 105,  283 => 94,  276 => 92,  271 => 90,  264 => 86,  254 => 79,  247 => 75,  242 => 73,  235 => 69,  230 => 67,  222 => 62,  217 => 60,  206 => 54,  201 => 52,  197 => 51,  190 => 48,  186 => 47,  180 => 44,  175 => 42,  170 => 40,  158 => 33,  151 => 28,  141 => 27,  126 => 20,  116 => 19,  97 => 17,  78 => 16,  67 => 11,  65 => 13,  40 => 11,);
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

{% set menus = ['content', 'news'] %}


{% block title %}{{ 'admin.content.news_management'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.content.contents_management'|trans }}{% endblock %}

{% block stylesheet %}
    <style type=\"text/css\">
        li.list-group-item {
            z-index: inherit !important;
        }
    </style>
{% endblock %}

{% block main %}
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"d-block mb-3\">
                    <a id=\"addNew\" class=\"btn btn-ec-regular\"
                       href=\"{{ url('admin_content_news_new') }}\">{{ 'admin.common.create__new'|trans }}</a>
                </div>
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <ul class=\"list-group list-group-flush mb-4 sortable-container\">
                            <li class=\"list-group-item\">
                                <div class=\"row justify-content-around\">
                                    <div class=\"col-2\"><strong>{{ 'admin.content.news.publish_date'|trans }}</strong>
                                    </div>
                                    <div class=\"col-1\"><strong>{{ 'admin.content.news.display_status'|trans }}</strong>
                                    </div>
                                    <div class=\"col\"><strong>{{ 'admin.content.news.title'|trans }}</strong></div>
                                </div>
                            </li>
                            {% for News in pagination %}
                                <li class=\"list-group-item sortable-item\" data-id=\"{{ News.id }}\">
                                    <div class=\"row justify-content-around\">
                                        <div class=\"col-2 d-flex align-items-center\">
                                            <span>{{ News.publishDate|date_sec }}</span></div>
                                        <div class=\"col-1 d-flex align-items-center\">{{ News.visible ? 'admin.content.news.display_status__show'|trans : 'admin.content.news.display_status__hide'|trans }}</div>
                                        <div class=\"col d-flex align-items-center\"><a
                                                    href=\"{{ url('admin_content_news_edit', {id: News.id}) }}\">{{ News.title }}</a>
                                        </div>
                                        <div class=\"col-2\">
                                            <div class=\"row\">
                                                <div class=\"col px-0 text-center\">
                                                    <a class=\"btn btn-ec-actionIcon\"
                                                       href=\"{{ url('admin_content_news_edit', {id: News.id}) }}\"
                                                       data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                       title=\"{{ 'admin.common.edit'|trans }}\">
                                                        <i class=\"fa fa-pencil fa-lg text-secondary\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"col ps-0 text-center\" data-bs-toggle=\"tooltip\"
                                                     data-bs-placement=\"top\" title=\"{{ 'admin.common.delete'|trans }}\">
                                                    <a class=\"btn btn-ec-actionIcon\" data-bs-toggle=\"modal\"
                                                       data-bs-target=\"#delete_{{ News.id }}\">
                                                        <i class=\"fa fa-close fa-lg text-secondary\"
                                                           aria-hidden=\"true\"></i>
                                                    </a>
                                                    <div class=\"modal fade\" id=\"delete_{{ News.id }}\" tabindex=\"-1\"
                                                         role=\"dialog\"
                                                         aria-labelledby=\"delete_{{ News.id }}\" aria-hidden=\"true\">
                                                        <div class=\"modal-dialog\" role=\"document\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h5 class=\"modal-title fw-bold\">{{ 'admin.common.delete_modal__title'|trans }}</h5>
                                                                    <button class=\"btn-close\" type=\"button\"
                                                                            data-bs-dismiss=\"modal\"
                                                                            aria-label=\"Close\">
                                                                    </button>
                                                                </div>
                                                                <div class=\"modal-body text-start\">
                                                                    <p class=\"text-start\">{{ 'admin.common.delete_modal__message'|trans({'%name%': News.title}) }}</p>
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    <button class=\"btn btn-ec-sub\" type=\"button\"
                                                                            data-bs-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}</button>
                                                                    <a class=\"btn btn-ec-delete\"
                                                                       href=\"{{ url('admin_content_news_delete', {id: News.id}) }}\" {{ csrf_token_for_anchor() }}
                                                                       data-method=\"delete\"
                                                                       data-confirm=\"false\">{{ 'admin.common.delete'|trans }}</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            {% endfor %}
                        </ul>

                        {% if pagination.paginationData.pageCount > 1 %}
                            <div class=\"row justify-content-md-center mb-4\">
                                {% include \"@admin/pager.twig\" with { 'pages' : pagination.paginationData, 'routes' : 'admin_content_news_page' } %}
                            </div>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "@admin/Content/news.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\admin\\Content\\news.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "for" => 47, "if" => 107, "include" => 109);
        static $filters = array("escape" => 16, "trans" => 16, "date_sec" => 51);
        static $functions = array("url" => 33, "csrf_token_for_anchor" => 92);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'include'],
                ['escape', 'trans', 'date_sec'],
                ['url', 'csrf_token_for_anchor']
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
