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

/* MailMagazine42/Resource/template/admin/history_result.twig */
class __TwigTemplate_33544e29dd710927b9bfade72c80b812 extends Template
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
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 10
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MailMagazine42/Resource/template/admin/history_result.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MailMagazine42/Resource/template/admin/history_result.twig"));

        // line 12
        $context["menus"] = ["mailmagazine", "mailmagazine_history"];
        // line 10
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "MailMagazine42/Resource/template/admin/history_result.twig", 10);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.title"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.title"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 18
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    ";
        // line 22
        if (((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 22, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 22, $this->source); })()), "totalItemCount", [], "any", false, false, true, 22) > 0))) {
            // line 23
            echo "                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <span class=\"card-title\">
                                        ";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.result.number_record"), "html", null, true);
            echo " <strong>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 27, $this->source); })()), "totalItemCount", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "</strong>
                                    </span>
                                </div>
                                <div class=\"col-4 text-end\">
                                </div>
                            </div>
                        </div>
                        <div class=\"row justify-content-between mb-2\">
                            <div class=\"col-6\"></div>

                            <div class=\"col-5 text-end\">
                                ";
            // line 39
            echo "                                <div class=\"d-inline-block mr-2\">
                                    <select class=\"form-select\" onchange=\"location = this.value;\">
                                        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pageMaxis"]) || array_key_exists("pageMaxis", $context) ? $context["pageMaxis"] : (function () { throw new RuntimeError('Variable "pageMaxis" does not exist.', 41, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pageMax"]) {
                // line 42
                echo "                                            <option ";
                if ((twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 42) == (isset($context["page_count"]) || array_key_exists("page_count", $context) ? $context["page_count"] : (function () { throw new RuntimeError('Variable "page_count" does not exist.', 42, $this->source); })()))) {
                    echo " selected ";
                }
                // line 43
                echo "                                                    value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plugin_mail_magazine_history_result_page", ["id" => (isset($context["historyId"]) || array_key_exists("historyId", $context) ? $context["historyId"] : (function () { throw new RuntimeError('Variable "historyId" does not exist.', 43, $this->source); })()), "page_no" => 1, "page_count" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 43)]), "html", null, true);
                echo "\">
                                                ";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.count", ["%count%" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 44)]), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMax'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                                    </select>
                                </div>
                                <div class=\"d-inline-block\">
                                    <div class=\"btn-group\" role=\"group\"></div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body mb-lg-5\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.result.th_status"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.result.th_id"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.result.th_from"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.result.th_name"), "html", null, true);
            echo "</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 64, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 65
                echo "                                    <tr>
                                        <td class=\"align-middle text-start\">
                                            ";
                // line 67
                if ((twig_get_attribute($this->env, $this->source, $context["result"], "status", [], "any", false, false, true, 67) == "0")) {
                    // line 68
                    echo "                                                <span class=\"badge badge-ec-blue\">
                                                    ";
                    // line 69
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.result.status_unsend"), "html", null, true);
                    echo "
                                                </span>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 71
$context["result"], "status", [], "any", false, false, true, 71) == "1")) {
                    // line 72
                    echo "                                                <span class=\"badge badge-ec-green\">
                                                    ";
                    // line 73
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.result.status_sent"), "html", null, true);
                    echo "
                                                </span>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 75
$context["result"], "status", [], "any", false, false, true, 75) == "2")) {
                    // line 76
                    echo "                                                <span class=\"badge badge-ec-red\">
                                                    ";
                    // line 77
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.result.status_fail"), "html", null, true);
                    echo "
                                                </span>
                                    ";
                } else {
                    // line 80
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["result"], "status", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                    echo "
                                            ";
                }
                // line 82
                echo "                                        </td>
                                        <td class=\"align-middle text-start\">";
                // line 83
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["result"], "customerId", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                echo "</td>
                                        <td class=\"align-middle text-start\">";
                // line 84
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["result"], "email", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                echo "</td>
                                        <td class=\"align-middle text-start\">";
                // line 85
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["result"], "name", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                echo "</td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                                </tbody>
                            </table>
                            <div class=\"row justify-content-md-center mb-4\">
                                ";
            // line 91
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 91, $this->source); })()), "totalItemCount", [], "any", false, false, true, 91) > 0)) {
                // line 92
                echo "                                    ";
                $this->loadTemplate("@MailMagazine42/admin/history_result_pager.twig", "MailMagazine42/Resource/template/admin/history_result.twig", 92)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 92, $this->source); })()), "paginationData", [], "any", false, false, true, 92), "routes" => "plugin_mail_magazine_history_result_page"]));
                // line 93
                echo "                                ";
            }
            // line 94
            echo "                            </div>
                        </div>
                    ";
        } else {
            // line 97
            echo "                        <div class=\"card-body mb-lg-5\">
                            <div class=\"row\">
                                <div class=\"col-auto\">
                                    ";
            // line 100
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.result.no_record"), "html", null, true);
            echo "
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 105
        echo "                </div>
            </div>
        </div>
    </div>
    <div class=\"c-conversionArea\">
        <div class=\"c-conversionArea__container\">
            <div class=\"row justify-content-between align-items-center\">
                <div class=\"col-6\">
                    <div class=\"c-conversionArea__leftBlockItem\">
                        <a class=\"c-baseLink\" href=\"";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("plugin_mail_magazine_history");
        echo "\">
                            <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.preview.btn_back"), "html", null, true);
        echo "</span>
                        </a>
                    </div>
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
        return "MailMagazine42/Resource/template/admin/history_result.twig";
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
        return array (  324 => 115,  320 => 114,  309 => 105,  301 => 100,  296 => 97,  291 => 94,  288 => 93,  285 => 92,  283 => 91,  278 => 88,  269 => 85,  265 => 84,  261 => 83,  258 => 82,  252 => 80,  246 => 77,  243 => 76,  241 => 75,  236 => 73,  233 => 72,  231 => 71,  226 => 69,  223 => 68,  221 => 67,  217 => 65,  213 => 64,  206 => 60,  202 => 59,  198 => 58,  194 => 57,  181 => 46,  173 => 44,  168 => 43,  163 => 42,  159 => 41,  155 => 39,  139 => 27,  133 => 23,  131 => 22,  125 => 18,  115 => 17,  96 => 15,  77 => 14,  66 => 10,  64 => 12,  39 => 10,);
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

{% set menus = ['mailmagazine', 'mailmagazine_history'] %}

{% block title %}{{ 'mailmagazine.history.title'|trans }}{% endblock %}
{% block sub_title %}{{ 'mailmagazine.title'|trans }}{% endblock %}

{% block main %}
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    {% if pagination and pagination.totalItemCount > 0 %}
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <span class=\"card-title\">
                                        {{ 'mailmagazine.history.result.number_record'|trans }} <strong>{{ pagination.totalItemCount }}</strong>
                                    </span>
                                </div>
                                <div class=\"col-4 text-end\">
                                </div>
                            </div>
                        </div>
                        <div class=\"row justify-content-between mb-2\">
                            <div class=\"col-6\"></div>

                            <div class=\"col-5 text-end\">
                                {#Dropdown page count#}
                                <div class=\"d-inline-block mr-2\">
                                    <select class=\"form-select\" onchange=\"location = this.value;\">
                                        {% for pageMax in pageMaxis %}
                                            <option {% if pageMax.name == page_count %} selected {% endif %}
                                                    value=\"{{ path('plugin_mail_magazine_history_result_page', {'id': historyId, 'page_no': 1, 'page_count': pageMax.name }) }}\">
                                                {{ 'admin.common.count'|trans({ '%count%': pageMax.name }) }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                                <div class=\"d-inline-block\">
                                    <div class=\"btn-group\" role=\"group\"></div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body mb-lg-5\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'mailmagazine.history.result.th_status'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'mailmagazine.history.result.th_id'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'mailmagazine.history.result.th_from'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'mailmagazine.history.result.th_name'|trans }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {% for result in pagination %}
                                    <tr>
                                        <td class=\"align-middle text-start\">
                                            {% if result.status == '0' %}
                                                <span class=\"badge badge-ec-blue\">
                                                    {{ 'mailmagazine.history.result.status_unsend'|trans }}
                                                </span>
                                            {% elseif result.status == '1' %}
                                                <span class=\"badge badge-ec-green\">
                                                    {{ 'mailmagazine.history.result.status_sent'|trans }}
                                                </span>
                                            {% elseif result.status == '2' %}
                                                <span class=\"badge badge-ec-red\">
                                                    {{ 'mailmagazine.history.result.status_fail'|trans }}
                                                </span>
                                    {% else %}
                                                {{ result.status }}
                                            {% endif %}
                                        </td>
                                        <td class=\"align-middle text-start\">{{ result.customerId }}</td>
                                        <td class=\"align-middle text-start\">{{ result.email }}</td>
                                        <td class=\"align-middle text-start\">{{ result.name }}</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                            <div class=\"row justify-content-md-center mb-4\">
                                {% if pagination.totalItemCount > 0 %}
                                    {% include \"@MailMagazine42/admin/history_result_pager.twig\" with { 'pages' : pagination.paginationData, 'routes' : 'plugin_mail_magazine_history_result_page' } %}
                                {% endif %}
                            </div>
                        </div>
                    {% else %}
                        <div class=\"card-body mb-lg-5\">
                            <div class=\"row\">
                                <div class=\"col-auto\">
                                    {{ 'mailmagazine.history.result.no_record'|trans }}
                                </div>
                            </div>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
    <div class=\"c-conversionArea\">
        <div class=\"c-conversionArea__container\">
            <div class=\"row justify-content-between align-items-center\">
                <div class=\"col-6\">
                    <div class=\"c-conversionArea__leftBlockItem\">
                        <a class=\"c-baseLink\" href=\"{{ url('plugin_mail_magazine_history') }}\">
                            <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>{{ 'mailmagazine.history.preview.btn_back'|trans }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "MailMagazine42/Resource/template/admin/history_result.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\MailMagazine42\\Resource\\template\\admin\\history_result.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 12, "if" => 22, "for" => 41, "include" => 92);
        static $filters = array("escape" => 14, "trans" => 14);
        static $functions = array("path" => 43, "url" => 114);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'include'],
                ['escape', 'trans'],
                ['path', 'url']
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
