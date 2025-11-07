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

/* MailMagazine42/Resource/template/admin/template_list.twig */
class __TwigTemplate_c50ae492ed4d82ca5beae14687cab377 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MailMagazine42/Resource/template/admin/template_list.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MailMagazine42/Resource/template/admin/template_list.twig"));

        // line 12
        $context["menus"] = ["mailmagazine", "mailmagazine_template"];
        // line 10
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "MailMagazine42/Resource/template/admin/template_list.twig", 10);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.template.title"), "html", null, true);
        
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
                    <div class=\"card-header\">
                        <div class=\"row\">
                            <div class=\"col-8\">
                                <span class=\"card-title\">
                                    ";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.template.card_title"), "html", null, true);
        echo "
                                </span>
                            </div>
                            <div class=\"col-4 text-end\">
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body p-0\">
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th class=\"border-top-0 pt-2 pb-2\">";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.template.th_created_date"), "html", null, true);
        echo "</th>
                                    <th class=\"border-top-0 pt-2 pb-2\">";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.template.th_subject"), "html", null, true);
        echo "</th>
                                    <th class=\"border-top-0 pt-2 pb-2\">";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.template.th_edit"), "html", null, true);
        echo "</th>
                                    <th class=\"border-top-0 pt-2 pb-2\">";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.template.th_del"), "html", null, true);
        echo "</th>
                                    <th class=\"border-top-0 pt-2 pb-2\">";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.template.btn_review"), "html", null, true);
        echo "</th>
                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["TemplateList"]) || array_key_exists("TemplateList", $context) ? $context["TemplateList"] : (function () { throw new RuntimeError('Variable "TemplateList" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Template"]) {
            // line 46
            echo "                                <tr>
                                    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Template"], "create_date", [], "any", false, false, true, 47), 47, $this->source)), "html", null, true);
            echo "</td>
                                    <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Template"], "subject", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "</td>
                                    <td><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("plugin_mail_magazine_template_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Template"], "id", [], "any", false, false, true, 49)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.template.btn_edit"), "html", null, true);
            echo "</a></td>
                                    <td>
                                        <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
            // line 51
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Template"], "id", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.template.btn_del"), "html", null, true);
            echo "</a>
                                        <div id=\"deleteModal";
            // line 52
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Template"], "id", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "\" class=\"modal\" data-bs-keyboard=\"false\" data-bs-backdrop=\"static\">
                                            <div class=\"modal-dialog\" role=\"document\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <h4 class=\"modal-title\">";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.template.modal_del_message"), "html", null, true);
            echo "</h4>
                                                    </div>
                                                    <div class=\"modal-footer\">
                                                        <button type=\"button\" class=\"btn btn-ec-regular\" data-bs-dismiss=\"modal\">
                                                            ";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.cancel"), "html", null, true);
            echo "
                                                        </button>
                                                        <form action=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("plugin_mail_magazine_template_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Template"], "id", [], "any", false, false, true, 62)]), "html", null, true);
            echo "\" method=\"post\" enctype=\"application/x-www-form-urlencoded\">
                                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_constant("Eccube\\Common\\Constant::TOKEN_NAME")), "html", null, true);
            echo "\">
                                                            <button type=\"submit\" class=\"btn btn-ec-delete\">
                                                                ";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.delete"), "html", null, true);
            echo "
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("plugin_mail_magazine_template_preview", ["id" => twig_get_attribute($this->env, $this->source, $context["Template"], "id", [], "any", false, false, true, 74)]), "html", null, true);
            echo "\">
                                            ";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.template.btn_review"), "html", null, true);
            echo "
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"row justify-content-md-center mb-4 \">
                    <div class=\"col-auto\">
                        <a class=\"btn btn-ec-regular ps-4 pe-4\" href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("plugin_mail_magazine_template_regist");
        echo "\">
                            ";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.template.btn_new"), "html", null, true);
        echo "
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
        return "MailMagazine42/Resource/template/admin/template_list.twig";
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
        return array (  267 => 87,  263 => 86,  255 => 80,  244 => 75,  240 => 74,  228 => 65,  223 => 63,  219 => 62,  214 => 60,  207 => 56,  200 => 52,  194 => 51,  187 => 49,  183 => 48,  179 => 47,  176 => 46,  172 => 45,  165 => 41,  161 => 40,  157 => 39,  153 => 38,  149 => 37,  135 => 26,  125 => 18,  115 => 17,  96 => 15,  77 => 14,  66 => 10,  64 => 12,  39 => 10,);
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

{% set menus = ['mailmagazine', 'mailmagazine_template'] %}

{% block title %}{{ 'mailmagazine.template.title'|trans }}{% endblock %}
{% block sub_title %}{{ 'mailmagazine.title'|trans }}{% endblock %}

{% block main %}
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <div class=\"row\">
                            <div class=\"col-8\">
                                <span class=\"card-title\">
                                    {{ 'mailmagazine.template.card_title'|trans }}
                                </span>
                            </div>
                            <div class=\"col-4 text-end\">
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body p-0\">
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th class=\"border-top-0 pt-2 pb-2\">{{ 'mailmagazine.template.th_created_date'|trans }}</th>
                                    <th class=\"border-top-0 pt-2 pb-2\">{{ 'mailmagazine.template.th_subject'|trans }}</th>
                                    <th class=\"border-top-0 pt-2 pb-2\">{{ 'mailmagazine.template.th_edit'|trans }}</th>
                                    <th class=\"border-top-0 pt-2 pb-2\">{{ 'mailmagazine.template.th_del'|trans }}</th>
                                    <th class=\"border-top-0 pt-2 pb-2\">{{ 'mailmagazine.template.btn_review'|trans }}</th>
                                </tr>
                            </thead>
                            <tbody>
                            {% for Template in TemplateList %}
                                <tr>
                                    <td>{{ Template.create_date|date_day }}</td>
                                    <td>{{ Template.subject }}</td>
                                    <td><a href=\"{{ url('plugin_mail_magazine_template_edit', { id: Template.id }) }}\">{{ 'mailmagazine.template.btn_edit'|trans }}</a></td>
                                    <td>
                                        <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal{{ Template.id }}\">{{ 'mailmagazine.template.btn_del'|trans }}</a>
                                        <div id=\"deleteModal{{ Template.id }}\" class=\"modal\" data-bs-keyboard=\"false\" data-bs-backdrop=\"static\">
                                            <div class=\"modal-dialog\" role=\"document\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <h4 class=\"modal-title\">{{ 'mailmagazine.template.modal_del_message'|trans }}</h4>
                                                    </div>
                                                    <div class=\"modal-footer\">
                                                        <button type=\"button\" class=\"btn btn-ec-regular\" data-bs-dismiss=\"modal\">
                                                            {{ 'common.cancel'|trans }}
                                                        </button>
                                                        <form action=\"{{ url('plugin_mail_magazine_template_delete', { id: Template.id }) }}\" method=\"post\" enctype=\"application/x-www-form-urlencoded\">
                                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token(constant('Eccube\\\\Common\\\\Constant::TOKEN_NAME')) }}\">
                                                            <button type=\"submit\" class=\"btn btn-ec-delete\">
                                                                {{ 'common.delete'|trans }}
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href=\"{{ url('plugin_mail_magazine_template_preview', { id: Template.id }) }}\">
                                            {{ 'mailmagazine.template.btn_review'|trans }}
                                        </a>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"row justify-content-md-center mb-4 \">
                    <div class=\"col-auto\">
                        <a class=\"btn btn-ec-regular ps-4 pe-4\" href=\"{{ url('plugin_mail_magazine_template_regist') }}\">
                            {{ 'mailmagazine.template.btn_new'|trans }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "MailMagazine42/Resource/template/admin/template_list.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\MailMagazine42\\Resource\\template\\admin\\template_list.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 12, "for" => 45);
        static $filters = array("escape" => 14, "trans" => 14, "date_day" => 47);
        static $functions = array("url" => 49, "csrf_token" => 63, "constant" => 63);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape', 'trans', 'date_day'],
                ['url', 'csrf_token', 'constant']
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
