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

/* MailMagazine42/Resource/template/admin/confirm.twig */
class __TwigTemplate_8aa323192524d7161f24809de7b666e4 extends Template
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
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 15
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MailMagazine42/Resource/template/admin/confirm.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MailMagazine42/Resource/template/admin/confirm.twig"));

        // line 17
        $context["menus"] = ["mailmagazine", "mailmagazine"];
        // line 22
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 15
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "MailMagazine42/Resource/template/admin/confirm.twig", 15);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 19
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.index.title"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
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

    // line 24
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 25
        echo "    <script>
        function changeAction(action) {
            document.form1.action = action;
            document.form1.submit();
        }
        \$(function () {
            \$('#sendMailMagazine').on('click', function (e) {
                e.preventDefault();
                if (confirm('";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.confirm.modal.confirm_prepare_message"), "html", null, true);
        echo "')) {
                    \$(this).attr('disabled', 'disabled');
                    changeAction('";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("plugin_mail_magazine_prepare");
        echo "');
                }
                return false;
            });
            \$('#testSendModal input').on('keyup', function() {
                if (this.checkValidity()) {
                    \$(this).parents('div.form-group').removeClass('has-error');
                } else {
                    \$(this).parents('div.form-group').addClass('has-error');
                }
                if (\$('#testSendModal form').get(0).checkValidity()) {
                    \$('#sendTestMail').removeAttr('disabled');
                } else {
                    \$('#sendTestMail').attr('disabled', 'disabled');
                }
            });
            \$('#sendTestMail').on('click', function() {
                if (confirm('";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.confirm.modal.confirm_test_message"), "html", null, true);
        echo "')) {
                    \$.post(\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("plugin_mail_magazine_test");
        echo "\", {
                        '_token': \$('mail_magazine__token').val(),
                        'email': \$('#testEmail').val(),
                        'name': \$('#testName').val(),
                        'subject': \$('#mail_magazine_subject').val(),
                        'body': \$('#mail_magazine_body').val(),
                        'htmlBody': \$('#mail_magazine_htmlBody').val()
                    }).done(function(res) {
                        alert('";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.confirm.modal.confirm_test_success_message"), "html", null, true);
        echo "');
                        \$('#testSendModal').modal('hide');
                    }).fail(function (res) {
                        alert('";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.confirm.modal.confirm_test_fail_message"), "html", null, true);
        echo "');
                    });
                }
            })
        })
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 72
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 73
        echo "    <form name=\"form1\" role=\"form\" class=\"form-horizontal\" id=\"form1\" method=\"post\" action=\"\">
    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "_token", [], "any", false, false, true, 74), 74, $this->source), 'widget');
        echo "
        <div class=\"c-outsideBlock\">
            <div class=\"c-outsideBlock__contents\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <div class=\"row\">
                            <div class=\"col-8\">
                                <span class=\"card-title\">
                                    ";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.confirm.html"), "html", null, true);
        echo "
                                </span>
                            </div>
                            <div class=\"col-4 text-end\">
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body mb-lg-5\">
                        <div class=\"row\">
                            <table class=\"table table-striped\">
                                <tbody>
                                    <tr>
                                        <th class=\"w-25\">";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.select.label_subject"), "html", null, true);
        echo "</th>
                                        <td>";
        // line 95
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["subject_itm"]) || array_key_exists("subject_itm", $context) ? $context["subject_itm"] : (function () { throw new RuntimeError('Variable "subject_itm" does not exist.', 95, $this->source); })()), 95, $this->source), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.select.label_body"), "html", null, true);
        echo "</th>
                                        <td><pre>";
        // line 99
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["body_itm"]) || array_key_exists("body_itm", $context) ? $context["body_itm"] : (function () { throw new RuntimeError('Variable "body_itm" does not exist.', 99, $this->source); })()), 99, $this->source), "html", null, true);
        echo "</pre></td>
                                    </tr>
                                    <tr>
                                        <th>";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.select.label_body_html"), "html", null, true);
        echo "</th>
                                        <td><pre>";
        // line 103
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->sandbox->ensureToStringAllowed((isset($context["htmlBody_itm"]) || array_key_exists("htmlBody_itm", $context) ? $context["htmlBody_itm"] : (function () { throw new RuntimeError('Variable "htmlBody_itm" does not exist.', 103, $this->source); })()), 103, $this->source));
        echo "</pre></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class=\"d-none\">
                                ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), 108, $this->source), 'rest');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("plugin_mail_magazine");
        echo "\"  onclick=\"changeAction('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("plugin_mail_magazine_select", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 120, $this->source); })())]), "html", null, true);
        echo "'); return false;\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.confirm.btn_back"), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <a class=\"btn btn-primary btn-block btn-lg active\" role=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#testSendModal\">
                                    ";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.confirm.btn_send_test"), "html", null, true);
        echo "
                                </a>
                            </div>
                            <div class=\"col-auto\">
                                <button class=\"btn btn-danger btn-block btn-lg\" id=\"sendMailMagazine\">
                                    ";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.confirm.btn_send"), "html", null, true);
        echo "
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div id=\"testSendModal\" class=\"modal\" data-bs-keyboard=\"false\" data-bs-backdrop=\"static\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h4 class=\"modal-title\">";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.confirm.modal.title"), "html", null, true);
        echo "</h4>
                </div>
                <div class=\"modal-body\">
                    <form class=\"form-horizontal\">
                        <div class=\"form-group\">
                            <label for=\"testEmail\" class=\"col-sm-2 control-label\">
                                ";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.confirm.modal.label_from"), "html", null, true);
        echo "
                            </label>
                            <div class=\"col-sm-10\">
                                <input type=\"email\" class=\"form-control\" id=\"testEmail\" placeholder=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.confirm.modal.placeholder_from"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["testMailTo"]) || array_key_exists("testMailTo", $context) ? $context["testMailTo"] : (function () { throw new RuntimeError('Variable "testMailTo" does not exist.', 156, $this->source); })()), 156, $this->source), "html", null, true);
        echo "\" required>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"testName\" class=\"col-sm-2 control-label\">名前</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" class=\"form-control\" id=\"testName\" placeholder=\"名前\" value=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 162, $this->source); })()), "user", [], "any", false, false, true, 162), "name", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
        echo "\" required>
                            </div>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-ec-conversion\" id=\"sendTestMail\">";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.confirm.modal.btn_send"), "html", null, true);
        echo "</button>
                    <button class=\"btn btn-ec-sub\" data-bs-dismiss=\"modal\">";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.confirm.modal.btn_cancel"), "html", null, true);
        echo "</button>
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
        return "MailMagazine42/Resource/template/admin/confirm.twig";
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
        return array (  367 => 169,  363 => 168,  354 => 162,  343 => 156,  337 => 153,  328 => 147,  312 => 134,  304 => 129,  293 => 121,  287 => 120,  272 => 108,  264 => 103,  260 => 102,  254 => 99,  250 => 98,  244 => 95,  240 => 94,  225 => 82,  214 => 74,  211 => 73,  201 => 72,  184 => 64,  178 => 61,  167 => 53,  163 => 52,  143 => 35,  138 => 33,  128 => 25,  118 => 24,  99 => 20,  80 => 19,  69 => 15,  67 => 22,  65 => 17,  40 => 15,);
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

{#
[メルマガ管理]-[配信内容設定]-[確認]画面
#}

{% extends '@admin/default_frame.twig' %}

{% set menus = ['mailmagazine', 'mailmagazine'] %}

{% block title %}{{ 'mailmagazine.index.title'|trans }}{% endblock %}
{% block sub_title %}{{ 'mailmagazine.title'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block javascript %}
    <script>
        function changeAction(action) {
            document.form1.action = action;
            document.form1.submit();
        }
        \$(function () {
            \$('#sendMailMagazine').on('click', function (e) {
                e.preventDefault();
                if (confirm('{{ 'mailmagazine.confirm.modal.confirm_prepare_message'|trans }}')) {
                    \$(this).attr('disabled', 'disabled');
                    changeAction('{{ url('plugin_mail_magazine_prepare') }}');
                }
                return false;
            });
            \$('#testSendModal input').on('keyup', function() {
                if (this.checkValidity()) {
                    \$(this).parents('div.form-group').removeClass('has-error');
                } else {
                    \$(this).parents('div.form-group').addClass('has-error');
                }
                if (\$('#testSendModal form').get(0).checkValidity()) {
                    \$('#sendTestMail').removeAttr('disabled');
                } else {
                    \$('#sendTestMail').attr('disabled', 'disabled');
                }
            });
            \$('#sendTestMail').on('click', function() {
                if (confirm('{{ 'mailmagazine.confirm.modal.confirm_test_message'|trans }}')) {
                    \$.post(\"{{ url('plugin_mail_magazine_test') }}\", {
                        '_token': \$('mail_magazine__token').val(),
                        'email': \$('#testEmail').val(),
                        'name': \$('#testName').val(),
                        'subject': \$('#mail_magazine_subject').val(),
                        'body': \$('#mail_magazine_body').val(),
                        'htmlBody': \$('#mail_magazine_htmlBody').val()
                    }).done(function(res) {
                        alert('{{ 'mailmagazine.confirm.modal.confirm_test_success_message'|trans }}');
                        \$('#testSendModal').modal('hide');
                    }).fail(function (res) {
                        alert('{{ 'mailmagazine.confirm.modal.confirm_test_fail_message'|trans }}');
                    });
                }
            })
        })
    </script>
{% endblock javascript%}

{% block main %}
    <form name=\"form1\" role=\"form\" class=\"form-horizontal\" id=\"form1\" method=\"post\" action=\"\">
    {{ form_widget(form._token) }}
        <div class=\"c-outsideBlock\">
            <div class=\"c-outsideBlock__contents\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <div class=\"row\">
                            <div class=\"col-8\">
                                <span class=\"card-title\">
                                    {{ 'mailmagazine.confirm.html'|trans }}
                                </span>
                            </div>
                            <div class=\"col-4 text-end\">
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body mb-lg-5\">
                        <div class=\"row\">
                            <table class=\"table table-striped\">
                                <tbody>
                                    <tr>
                                        <th class=\"w-25\">{{ 'mailmagazine.select.label_subject'|trans }}</th>
                                        <td>{{ subject_itm }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{ 'mailmagazine.select.label_body'|trans }}</th>
                                        <td><pre>{{ body_itm }}</pre></td>
                                    </tr>
                                    <tr>
                                        <th>{{ 'mailmagazine.select.label_body_html'|trans }}</th>
                                        <td><pre>{{ htmlBody_itm|raw|purify }}</pre></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class=\"d-none\">
                                {{ form_rest(form) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"{{ url('plugin_mail_magazine') }}\"  onclick=\"changeAction('{{ url('plugin_mail_magazine_select', { id: id }) }}'); return false;\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>{{ 'mailmagazine.confirm.btn_back'|trans }}</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <a class=\"btn btn-primary btn-block btn-lg active\" role=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#testSendModal\">
                                    {{ 'mailmagazine.confirm.btn_send_test'|trans }}
                                </a>
                            </div>
                            <div class=\"col-auto\">
                                <button class=\"btn btn-danger btn-block btn-lg\" id=\"sendMailMagazine\">
                                    {{ 'mailmagazine.confirm.btn_send'|trans }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div id=\"testSendModal\" class=\"modal\" data-bs-keyboard=\"false\" data-bs-backdrop=\"static\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h4 class=\"modal-title\">{{ 'mailmagazine.confirm.modal.title'|trans }}</h4>
                </div>
                <div class=\"modal-body\">
                    <form class=\"form-horizontal\">
                        <div class=\"form-group\">
                            <label for=\"testEmail\" class=\"col-sm-2 control-label\">
                                {{ 'mailmagazine.confirm.modal.label_from'|trans }}
                            </label>
                            <div class=\"col-sm-10\">
                                <input type=\"email\" class=\"form-control\" id=\"testEmail\" placeholder=\"{{ 'mailmagazine.confirm.modal.placeholder_from'|trans }}\" value=\"{{ testMailTo }}\" required>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"testName\" class=\"col-sm-2 control-label\">名前</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" class=\"form-control\" id=\"testName\" placeholder=\"名前\" value=\"{{ app.user.name }}\" required>
                            </div>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-ec-conversion\" id=\"sendTestMail\">{{ 'mailmagazine.confirm.modal.btn_send'|trans }}</button>
                    <button class=\"btn btn-ec-sub\" data-bs-dismiss=\"modal\">{{ 'mailmagazine.confirm.modal.btn_cancel'|trans }}</button>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "MailMagazine42/Resource/template/admin/confirm.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\MailMagazine42\\Resource\\template\\admin\\confirm.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 17, "form_theme" => 22);
        static $filters = array("escape" => 19, "trans" => 19, "purify" => 103, "raw" => 103);
        static $functions = array("url" => 35, "form_widget" => 74, "form_rest" => 108);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme'],
                ['escape', 'trans', 'purify', 'raw'],
                ['url', 'form_widget', 'form_rest']
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
