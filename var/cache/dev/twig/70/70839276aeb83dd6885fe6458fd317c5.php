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

/* MailMagazine42/Resource/template/admin/history_list.twig */
class __TwigTemplate_51eeaaa6770afd1c89c9f71790ff1bcb extends Template
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
        // line 10
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MailMagazine42/Resource/template/admin/history_list.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MailMagazine42/Resource/template/admin/history_list.twig"));

        // line 12
        $context["menus"] = ["mailmagazine", "mailmagazine_history"];
        // line 10
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "MailMagazine42/Resource/template/admin/history_list.twig", 10);
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
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 18
        echo "<script>
function fnDelete(action) {
    if (confirm('この履歴を削除してもよろしいですか？')) {
        document.form1.action = action;
        document.form1.submit();
    }
}
function sendMail(id, offset, token) {
    \$.post('";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("plugin_mail_magazine_commit");
        echo "', { id : id, offset: offset || 0, _token:token })
        .done(function(res) {
            \$('#send-progress').css('width', (res.count / res.total * 100) + '%');
            \$('#send-status-message').text(res.count + ' / ' + res.total + ' 件処理完了');
            if (res.count < res.total) {
                sendMail(id, res.count);
            } else {
                \$('.modal-title').text('送信完了');
                \$('#send-progress').removeClass('progress-bar-striped active');
                \$('.modal-footer').show();
            }
        })
        .fail(function() {
            alert('エラーが発生しました。');
        });
}
\$(function () {
    var lock = false;
    \$('.retry-btn').click(function(e) {
        e.preventDefault();
        if (!lock && confirm('配信失敗と未配信のメールを再送します。\\nよろしいですか？')) {
            lock = true;
            \$('#sendModal').modal('show');
            var id = \$(this).data('id');
            \$.post(\$(this).data('url'))
                .done(function() { sendMail(id, 0); })
                .fail(function() { alert('エラーが発生しました。'); });
        }
        return false;
    });
    \$('#sendModal').on('show.bs.modal', function () {
        \$('.modal-title').text('送信中...');
        \$('#send-progress').addClass('progress-bar-striped active');
        \$('#send-status-message').text('');
    });
    \$('#sendModal').on('hide.bs.modal', function() {
        location.reload(true);
    });
    ";
        // line 64
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "session", [], "any", false, false, true, 64), "flashBag", [], "any", false, false, true, 64), "has", ["eccube.mailmagazine.history"], "method", false, false, true, 64)) {
            // line 65
            echo "    \$('#sendModal').modal('show');
    sendMail(";
            // line 66
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "session", [], "any", false, false, true, 66), "flashBag", [], "any", false, false, true, 66), "get", ["eccube.mailmagazine.history"], "method", false, false, true, 66), 0, [], "array", false, false, true, 66), 66, $this->source), "html", null, true);
            echo ", 0);
    ";
        }
        // line 68
        echo "})
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
        echo "<form name=\"form1\" id=\"form1\" method=\"post\" action=\"\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_constant("Eccube\\Common\\Constant::TOKEN_NAME")), "html", null, true);
        echo "\">
    <div class=\"c-outsideBlock__contents mb-5\">
        ";
        // line 76
        if ((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 76, $this->source); })())) {
            // line 77
            echo "            <span class=\"fw-bold ml-2\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.mailmagazine.history.search_count", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 77, $this->source); })()), "totalItemCount", [], "any", false, false, true, 77)]), "html", null, true);
            echo "</span>
        ";
        }
        // line 79
        echo "    </div>
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                ";
        // line 83
        if (((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 83, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 83, $this->source); })()), "totalItemCount", [], "any", false, false, true, 83))) {
            // line 84
            echo "                    <div class=\"row justify-content-between mb-2\">
                        <div class=\"col-6\"></div>

                        <div class=\"col-5 text-end\">
                            ";
            // line 89
            echo "                            <div class=\"d-inline-block mr-2 align-bottom\">
                                <select class=\"form-select\" onchange=\"location = this.value;\">
                                    ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pageMaxis"]) || array_key_exists("pageMaxis", $context) ? $context["pageMaxis"] : (function () { throw new RuntimeError('Variable "pageMaxis" does not exist.', 91, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pageMax"]) {
                // line 92
                echo "                                        <option ";
                if ((twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 92) == (isset($context["page_count"]) || array_key_exists("page_count", $context) ? $context["page_count"] : (function () { throw new RuntimeError('Variable "page_count" does not exist.', 92, $this->source); })()))) {
                    echo " selected ";
                }
                // line 93
                echo "                                                value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plugin_mail_magazine_history_page", ["page_no" => 1, "page_count" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 93)]), "html", null, true);
                echo "\">
                                            ";
                // line 94
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.count", ["%count%" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 94)]), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMax'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "                                </select>
                            </div>
                            <div class=\"d-inline-block\">
                                <div class=\"btn-group\" role=\"group\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-body p-0\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.mailmagazine.history.th_send_start_time"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.mailmagazine.history.th_send_end_time"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.mailmagazine.history.th_subject"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 111
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.mailmagazine.history.th_send_total"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.mailmagazine.history.th_send_complete"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 113
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.mailmagazine.history.th_send_fail"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 114
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.mailmagazine.history.th_unsend"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pe-2 pb-2 text-center pe-3\">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 119, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["SendHistory"]) {
                // line 120
                echo "                                    <tr>
                                        <td class=\"\">";
                // line 121
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["SendHistory"], "start_date", [], "any", false, false, true, 121), 121, $this->source), "Y/m/d H:i"), "html", null, true);
                echo "</td>
                                        <td class=\"\">
                                            ";
                // line 123
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["SendHistory"], "end_date", [], "any", false, false, true, 123))) {
                    // line 124
                    echo "                                                ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["SendHistory"], "end_date", [], "any", false, false, true, 124), 124, $this->source), "Y/m/d H:i"), "html", null, true);
                    echo "
                                            ";
                }
                // line 126
                echo "                                        </td>
                                        <td class=\"\">";
                // line 127
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["SendHistory"], "subject", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
                echo "</td>
                                        <td>";
                // line 128
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["SendHistory"], "send_count", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
                echo "</td>
                                        <td>";
                // line 129
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["SendHistory"], "complete_count", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
                echo "</td>
                                        <td>";
                // line 130
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["SendHistory"], "error_count", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
                echo "</td>
                                        <td>";
                // line 131
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["SendHistory"], "send_count", [], "any", false, false, true, 131) - twig_get_attribute($this->env, $this->source, $context["SendHistory"], "complete_count", [], "any", false, false, true, 131)), "html", null, true);
                echo "</td>
                                        <td class=\"icon_edit align-middle pe-3 text-center\">
                                            <div class=\"row justify-content-end\">
                                                <div class=\"col-auto text-center\">
                                                    <a href=\"";
                // line 135
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("plugin_mail_magazine_history_preview", ["id" => twig_get_attribute($this->env, $this->source, $context["SendHistory"], "id", [], "any", false, false, true, 135)]), "html", null, true);
                echo "\" >
                                                        ";
                // line 136
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.btn_preview"), "html", null, true);
                echo "
                                                    </a>
                                                </div>
                                                <div class=\"col-auto text-center\">
                                                    <a href=\"";
                // line 140
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("plugin_mail_magazine_history_condition", ["id" => twig_get_attribute($this->env, $this->source, $context["SendHistory"], "id", [], "any", false, false, true, 140)]), "html", null, true);
                echo "\">
                                                        ";
                // line 141
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.btn_condition"), "html", null, true);
                echo "
                                                    </a>
                                                </div>
                                                <div class=\"col-auto text-center\">
                                                    <a href=\"";
                // line 145
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("plugin_mail_magazine_history_result", ["id" => twig_get_attribute($this->env, $this->source, $context["SendHistory"], "id", [], "any", false, false, true, 145)]), "html", null, true);
                echo "\">
                                                        ";
                // line 146
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.btn_result"), "html", null, true);
                echo "
                                                    </a>
                                                </div>
                                                <div class=\"col-auto text-center\">
                                                    <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
                // line 150
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["SendHistory"], "id", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
                echo "\">
                                                        ";
                // line 151
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.btn_delete"), "html", null, true);
                echo "
                                                    </a>
                                                    <div id=\"deleteModal";
                // line 153
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["SendHistory"], "id", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
                echo "\" class=\"modal\" data-bs-keyboard=\"false\" data-bs-backdrop=\"static\">
                                                        <div class=\"modal-dialog\" role=\"document\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h4 class=\"modal-title\">";
                // line 157
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.modal_del_message"), "html", null, true);
                echo "</h4>
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    <button type=\"button\" class=\"btn btn-ec-regular\" data-bs-dismiss=\"modal\">
                                                                        ";
                // line 161
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.cancel"), "html", null, true);
                echo "
                                                                    </button>
                                                                    <button type=\"submit\" class=\"btn btn-ec-delete\" onclick=\"document.form1.action = '";
                // line 163
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("plugin_mail_magazine_history_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["SendHistory"], "id", [], "any", false, false, true, 163)]), "html", null, true);
                echo "'\">
                                                                        ";
                // line 164
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.delete"), "html", null, true);
                echo "
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                ";
                // line 171
                if (((twig_get_attribute($this->env, $this->source, $context["SendHistory"], "error_count", [], "any", false, false, true, 171) > 0) || ((twig_get_attribute($this->env, $this->source, $context["SendHistory"], "send_count", [], "any", false, false, true, 171) - twig_get_attribute($this->env, $this->source, $context["SendHistory"], "complete_count", [], "any", false, false, true, 171)) > 0))) {
                    // line 172
                    echo "                                                    <div class=\"col-auto text-center\">
                                                        <a href=\"#\" class=\"retry-btn\" data-id=\"";
                    // line 173
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["SendHistory"], "id", [], "any", false, false, true, 173), 173, $this->source), "html", null, true);
                    echo "\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("plugin_mail_magazine_history_retry", ["id" => twig_get_attribute($this->env, $this->source, $context["SendHistory"], "id", [], "any", false, false, true, 173)]), "html", null, true);
                    echo "\">
                                                            ";
                    // line 174
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.btn_resend"), "html", null, true);
                    echo "
                                                        </a>
                                                    </div>
                                                ";
                }
                // line 178
                echo "                                            </div>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['SendHistory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "                                </tbody>
                            </table>
                            <div class=\"row justify-content-md-center mb-4\">
                                ";
            // line 185
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 185, $this->source); })()), "totalItemCount", [], "any", false, false, true, 185) > 0)) {
                // line 186
                echo "                                    ";
                $this->loadTemplate("@admin/pager.twig", "MailMagazine42/Resource/template/admin/history_list.twig", 186)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 186, $this->source); })()), "paginationData", [], "any", false, false, true, 186), "routes" => "plugin_mail_magazine_history_page"]));
                // line 187
                echo "                                ";
            }
            // line 188
            echo "                            </div>
                        </div>
                    </div>
                ";
        } else {
            // line 192
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted\">";
            // line 194
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.mailmagazine.history.notice_no_data"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                ";
        }
        // line 198
        echo "            </div>
        </div>
    </div>
</form>
<div id=\"sendModal\" class=\"modal\" data-bs-keyboard=\"false\" data-bs-backdrop=\"static\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">送信中...</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"progress\">
                    <div id=\"send-progress\" class=\"progress-bar\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\"></div>
                </div>
                <div id=\"send-status-message\"></div>
            </div>
            <div class=\"modal-footer\" style=\"display: none;\">
                <button type=\"button\" class=\"btn btn-ec-sub\" data-bs-dismiss=\"modal\">";
        // line 215
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
        return "MailMagazine42/Resource/template/admin/history_list.twig";
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
        return array (  508 => 215,  489 => 198,  482 => 194,  478 => 192,  472 => 188,  469 => 187,  466 => 186,  464 => 185,  459 => 182,  450 => 178,  443 => 174,  437 => 173,  434 => 172,  432 => 171,  422 => 164,  418 => 163,  413 => 161,  406 => 157,  399 => 153,  394 => 151,  390 => 150,  383 => 146,  379 => 145,  372 => 141,  368 => 140,  361 => 136,  357 => 135,  350 => 131,  346 => 130,  342 => 129,  338 => 128,  334 => 127,  331 => 126,  325 => 124,  323 => 123,  318 => 121,  315 => 120,  311 => 119,  303 => 114,  299 => 113,  295 => 112,  291 => 111,  287 => 110,  283 => 109,  279 => 108,  265 => 96,  257 => 94,  252 => 93,  247 => 92,  243 => 91,  239 => 89,  233 => 84,  231 => 83,  225 => 79,  219 => 77,  217 => 76,  212 => 74,  209 => 73,  199 => 72,  187 => 68,  182 => 66,  179 => 65,  177 => 64,  136 => 26,  126 => 18,  116 => 17,  97 => 15,  78 => 14,  67 => 10,  65 => 12,  40 => 10,);
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

{% block javascript %}
<script>
function fnDelete(action) {
    if (confirm('この履歴を削除してもよろしいですか？')) {
        document.form1.action = action;
        document.form1.submit();
    }
}
function sendMail(id, offset, token) {
    \$.post('{{ url('plugin_mail_magazine_commit') }}', { id : id, offset: offset || 0, _token:token })
        .done(function(res) {
            \$('#send-progress').css('width', (res.count / res.total * 100) + '%');
            \$('#send-status-message').text(res.count + ' / ' + res.total + ' 件処理完了');
            if (res.count < res.total) {
                sendMail(id, res.count);
            } else {
                \$('.modal-title').text('送信完了');
                \$('#send-progress').removeClass('progress-bar-striped active');
                \$('.modal-footer').show();
            }
        })
        .fail(function() {
            alert('エラーが発生しました。');
        });
}
\$(function () {
    var lock = false;
    \$('.retry-btn').click(function(e) {
        e.preventDefault();
        if (!lock && confirm('配信失敗と未配信のメールを再送します。\\nよろしいですか？')) {
            lock = true;
            \$('#sendModal').modal('show');
            var id = \$(this).data('id');
            \$.post(\$(this).data('url'))
                .done(function() { sendMail(id, 0); })
                .fail(function() { alert('エラーが発生しました。'); });
        }
        return false;
    });
    \$('#sendModal').on('show.bs.modal', function () {
        \$('.modal-title').text('送信中...');
        \$('#send-progress').addClass('progress-bar-striped active');
        \$('#send-status-message').text('');
    });
    \$('#sendModal').on('hide.bs.modal', function() {
        location.reload(true);
    });
    {% if app.session.flashBag.has('eccube.mailmagazine.history') %}
    \$('#sendModal').modal('show');
    sendMail({{ app.session.flashBag.get('eccube.mailmagazine.history')[0] }}, 0);
    {% endif %}
})
</script>
{% endblock %}

{% block main %}
<form name=\"form1\" id=\"form1\" method=\"post\" action=\"\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token(constant('Eccube\\\\Common\\\\Constant::TOKEN_NAME')) }}\">
    <div class=\"c-outsideBlock__contents mb-5\">
        {% if pagination %}
            <span class=\"fw-bold ml-2\">{{ 'admin.mailmagazine.history.search_count'|trans({'%count%':pagination.totalItemCount}) }}</span>
        {% endif %}
    </div>
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                {% if pagination and pagination.totalItemCount %}
                    <div class=\"row justify-content-between mb-2\">
                        <div class=\"col-6\"></div>

                        <div class=\"col-5 text-end\">
                            {#Dropdown page count#}
                            <div class=\"d-inline-block mr-2 align-bottom\">
                                <select class=\"form-select\" onchange=\"location = this.value;\">
                                    {% for pageMax in pageMaxis %}
                                        <option {% if pageMax.name == page_count %} selected {% endif %}
                                                value=\"{{ path('plugin_mail_magazine_history_page', {'page_no': 1, 'page_count': pageMax.name }) }}\">
                                            {{ 'admin.common.count'|trans({ '%count%': pageMax.name }) }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"d-inline-block\">
                                <div class=\"btn-group\" role=\"group\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-body p-0\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.mailmagazine.history.th_send_start_time'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.mailmagazine.history.th_send_end_time'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.mailmagazine.history.th_subject'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.mailmagazine.history.th_send_total'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.mailmagazine.history.th_send_complete'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.mailmagazine.history.th_send_fail'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.mailmagazine.history.th_unsend'|trans }}</th>
                                        <th class=\"border-top-0 pe-2 pb-2 text-center pe-3\">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {% for SendHistory in pagination %}
                                    <tr>
                                        <td class=\"\">{{ SendHistory.start_date|date(\"Y/m/d H:i\") }}</td>
                                        <td class=\"\">
                                            {% if SendHistory.end_date is not null %}
                                                {{ SendHistory.end_date|date(\"Y/m/d H:i\") }}
                                            {% endif %}
                                        </td>
                                        <td class=\"\">{{ SendHistory.subject}}</td>
                                        <td>{{ SendHistory.send_count }}</td>
                                        <td>{{ SendHistory.complete_count }}</td>
                                        <td>{{ SendHistory.error_count }}</td>
                                        <td>{{ SendHistory.send_count - SendHistory.complete_count }}</td>
                                        <td class=\"icon_edit align-middle pe-3 text-center\">
                                            <div class=\"row justify-content-end\">
                                                <div class=\"col-auto text-center\">
                                                    <a href=\"{{ url('plugin_mail_magazine_history_preview', { id: SendHistory.id }) }}\" >
                                                        {{ 'mailmagazine.history.btn_preview'|trans }}
                                                    </a>
                                                </div>
                                                <div class=\"col-auto text-center\">
                                                    <a href=\"{{ url('plugin_mail_magazine_history_condition', { id: SendHistory.id }) }}\">
                                                        {{ 'mailmagazine.history.btn_condition'|trans }}
                                                    </a>
                                                </div>
                                                <div class=\"col-auto text-center\">
                                                    <a href=\"{{ url('plugin_mail_magazine_history_result', { id: SendHistory.id }) }}\">
                                                        {{ 'mailmagazine.history.btn_result'|trans }}
                                                    </a>
                                                </div>
                                                <div class=\"col-auto text-center\">
                                                    <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal{{ SendHistory.id }}\">
                                                        {{ 'mailmagazine.history.btn_delete'|trans }}
                                                    </a>
                                                    <div id=\"deleteModal{{ SendHistory.id }}\" class=\"modal\" data-bs-keyboard=\"false\" data-bs-backdrop=\"static\">
                                                        <div class=\"modal-dialog\" role=\"document\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h4 class=\"modal-title\">{{ 'mailmagazine.history.modal_del_message'|trans }}</h4>
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    <button type=\"button\" class=\"btn btn-ec-regular\" data-bs-dismiss=\"modal\">
                                                                        {{ 'common.cancel'|trans }}
                                                                    </button>
                                                                    <button type=\"submit\" class=\"btn btn-ec-delete\" onclick=\"document.form1.action = '{{ url('plugin_mail_magazine_history_delete', { id: SendHistory.id }) }}'\">
                                                                        {{ 'common.delete'|trans }}
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {% if SendHistory.error_count > 0 or (SendHistory.send_count - SendHistory.complete_count) > 0 %}
                                                    <div class=\"col-auto text-center\">
                                                        <a href=\"#\" class=\"retry-btn\" data-id=\"{{ SendHistory.id }}\" data-url=\"{{ url('plugin_mail_magazine_history_retry', {id: SendHistory.id}) }}\">
                                                            {{ 'mailmagazine.history.btn_resend'|trans }}
                                                        </a>
                                                    </div>
                                                {% endif %}
                                            </div>
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                            <div class=\"row justify-content-md-center mb-4\">
                                {% if pagination.totalItemCount > 0 %}
                                    {% include \"@admin/pager.twig\" with { 'pages' : pagination.paginationData, 'routes' : 'plugin_mail_magazine_history_page' } %}
                                {% endif %}
                            </div>
                        </div>
                    </div>
                {% else %}
                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted\">{{ 'admin.mailmagazine.history.notice_no_data'|trans }}</div>
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
</form>
<div id=\"sendModal\" class=\"modal\" data-bs-keyboard=\"false\" data-bs-backdrop=\"static\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">送信中...</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"progress\">
                    <div id=\"send-progress\" class=\"progress-bar\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\"></div>
                </div>
                <div id=\"send-status-message\"></div>
            </div>
            <div class=\"modal-footer\" style=\"display: none;\">
                <button type=\"button\" class=\"btn btn-ec-sub\" data-bs-dismiss=\"modal\">{{ 'mailmagazine.confirm.modal.btn_cancel'|trans }}</button>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "MailMagazine42/Resource/template/admin/history_list.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\MailMagazine42\\Resource\\template\\admin\\history_list.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 12, "if" => 64, "for" => 91, "include" => 186);
        static $filters = array("escape" => 14, "trans" => 14, "date" => 121);
        static $functions = array("url" => 26, "csrf_token" => 74, "constant" => 74, "path" => 93);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'include'],
                ['escape', 'trans', 'date'],
                ['url', 'csrf_token', 'constant', 'path']
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
