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

/* EccubePaymentLite42/Resource/template/admin/Regular/Order/index.twig */
class __TwigTemplate_a35936d51d6f819a928b1c09198e2a9b extends Template
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
        // line 1
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/Regular/Order/index.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/Regular/Order/index.twig"));

        // line 2
        $context["menus"] = ["regular", "order"];
        // line 7
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 7, $this->source); })()), ["@admin/Form/bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "EccubePaymentLite42/Resource/template/admin/Regular/Order/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "定期受注一覧";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo "定期管理";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 10
        echo "<script>
\$(function() {
// datetimepicker と競合するため HTML5 のカレンダ入力を無効に
    \$('input[type=\"date\"]').attr('type','text');

    \$.when(
        \$.getScript(\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/moment.min.js", "admin"), "html", null, true);
        echo "\"),
        \$.getScript(\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/moment-with-locales.min.js", "admin"), "html", null, true);
        echo "\"),
        \$.getScript(\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/tempusdominus-bootstrap-4.min.js", "admin"), "html", null, true);
        echo "\")
    ).done(function() {
        // datetimepicker で value が消えてしまうので data-value に保持しておく
        \$('input.datetimepicker-input').each(function() {
            \$(this).data('value', \$(this).val());
        });
        \$('#admin_search_regular_order_first_order_date_start').datetimepicker({
            locale: '";
        // line 25
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 25, $this->source); })()), "locale", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        echo "',
            format: 'YYYY-MM-DD',
            useCurrent: false,
            buttons: {
                showToday: true,
                showClose: true
            }
        });

        \$('#admin_search_regular_order_first_order_date_end').datetimepicker({
            locale: '";
        // line 35
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 35, $this->source); })()), "locale", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
        echo "',
            format: 'YYYY-MM-DD',
            useCurrent: false,
            buttons: {
                showToday: true,
                showClose: true
            }
        });
        \$('#admin_search_regular_order_next_delivery_date_start').datetimepicker({
            locale: '";
        // line 44
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 44, $this->source); })()), "locale", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        echo "',
            format: 'YYYY-MM-DD',
            useCurrent: false,
            buttons: {
                showToday: true,
                showClose: true
            }
        });

        \$('#admin_search_regular_order_next_delivery_date_end').datetimepicker({
            locale: '";
        // line 54
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 54, $this->source); })()), "locale", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "',
            format: 'YYYY-MM-DD',
            useCurrent: false,
            buttons: {
                showToday: true,
                showClose: true
            }
        });
    });
});
</script>
";
        // line 65
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@EccubePaymentLite42/admin/Regular/Order/confirmationModal_js.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 68
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 69
        echo "    <!--検索条件設定テーブルここから-->
    <div class=\"c-outsideBlock\">
        <form name=\"search_form\" id=\"search_form\" method=\"POST\" action=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eccube_payment_lite42_admin_regular_index_page");
        echo "\">
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 75, $this->source); })()), "_token", [], "any", false, false, true, 75), 75, $this->source), 'widget');
        echo "
                        <div>
                            <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"定期受注ID・お名前・会社名・メールアドレス・電話番号\">定期受注ID・注文番号・お名前・会社名・メールアドレス・電話番号<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 78, $this->source); })()), "multi", [], "any", false, false, true, 78), 78, $this->source), 'widget');
        echo "
                            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 79, $this->source); })()), "multi", [], "any", false, false, true, 79), 79, $this->source), 'errors');
        echo "
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-12\">
                                <label class=\"col-form-label\">";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.regular_order.regular_status"), "html", null, true);
        echo "</label>
                                ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 84, $this->source); })()), "regular_status", [], "any", false, false, true, 84), 84, $this->source), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 85, $this->source); })()), "regular_status", [], "any", false, false, true, 85), 85, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                        <div class=\"d-inline-block mb-3 collapsed\" data-bs-toggle=\"collapse\" href=\"#searchDetail\" aria-expanded=\"false\" aria-controls=\"searchDetail\">
                            <a>
                                <i class=\"fa fw-bold mr-1 fa-plus-square-o\">
                                    <span class=\"fw-bold\">";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_detail"), "html", null, true);
        echo "</span>
                                </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"c-subContents ec-collapse collapse";
        // line 98
        echo (((isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 98, $this->source); })())) ? (" show") : (""));
        echo "\" id=\"searchDetail\">
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.orderer_name"), "html", null, true);
        echo "</label>
                        ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 102, $this->source); })()), "name", [], "any", false, false, true, 102), 102, $this->source), 'widget');
        echo "
                        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 103, $this->source); })()), "name", [], "any", false, false, true, 103), 103, $this->source), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.gender"), "html", null, true);
        echo "</label>
                        ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 107, $this->source); })()), "sex", [], "any", false, false, true, 107), 107, $this->source), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                        ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 108, $this->source); })()), "sex", [], "any", false, false, true, 108), 108, $this->source), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.orderer_kana"), "html", null, true);
        echo "</label>
                        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 114, $this->source); })()), "kana", [], "any", false, false, true, 114), 114, $this->source), 'widget');
        echo "
                        ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 115, $this->source); })()), "kana", [], "any", false, false, true, 115), 115, $this->source), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("初回購入日"), "html", null, true);
        echo "</label>
                        <div class=\"form-row align-items-center\">
                            <div class=\"col\">
                                ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 121, $this->source); })()), "first_order_date_start", [], "any", false, false, true, 121), 121, $this->source), 'widget');
        echo "
                                ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 122, $this->source); })()), "first_order_date_start", [], "any", false, false, true, 122), 122, $this->source), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto text-center\">";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                            <div class=\"col\">
                                ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 126, $this->source); })()), "first_order_date_end", [], "any", false, false, true, 126), 126, $this->source), 'widget');
        echo "
                                ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 127, $this->source); })()), "first_order_date_end", [], "any", false, false, true, 127), 127, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.company_name"), "html", null, true);
        echo "</label>
                        ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 135, $this->source); })()), "company_name", [], "any", false, false, true, 135), 135, $this->source), 'widget');
        echo "
                        ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 136, $this->source); })()), "company_name", [], "any", false, false, true, 136), 136, $this->source), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">次回お届け予定日</label>
                        <div class=\"form-row align-items-center\">
                            <div class=\"col\">
                                ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 142, $this->source); })()), "next_delivery_date_start", [], "any", false, false, true, 142), 142, $this->source), 'widget');
        echo "
                                ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 143, $this->source); })()), "next_delivery_date_start", [], "any", false, false, true, 143), 143, $this->source), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto text-center\">";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                            <div class=\"col\">
                                ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 147, $this->source); })()), "next_delivery_date_end", [], "any", false, false, true, 147), 147, $this->source), 'widget');
        echo "
                                ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 148, $this->source); })()), "next_delivery_date_end", [], "any", false, false, true, 148), 148, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.mail_address"), "html", null, true);
        echo "</label>
                        ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 156, $this->source); })()), "email", [], "any", false, false, true, 156), 156, $this->source), 'widget');
        echo "
                        ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 157, $this->source); })()), "email", [], "any", false, false, true, 157), 157, $this->source), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">最新対応状況</label>
                        ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 161, $this->source); })()), "latest_status", [], "any", false, false, true, 161), 161, $this->source), 'widget');
        echo "
                        ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 162, $this->source); })()), "latest_status", [], "any", false, false, true, 162), 162, $this->source), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
        echo "</label>
                        ";
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 168, $this->source); })()), "phone_number", [], "any", false, false, true, 168), 168, $this->source), 'widget');
        echo "
                        ";
        // line 169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 169, $this->source); })()), "phone_number", [], "any", false, false, true, 169), 169, $this->source), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">定期回数</label>
                        <div class=\"form-row align-items-center\">
                            <div class=\"col\">
                                ";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 175, $this->source); })()), "regular_count_start", [], "any", false, false, true, 175), 175, $this->source), 'widget');
        echo "
                                ";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 176, $this->source); })()), "regular_count_start", [], "any", false, false, true, 176), 176, $this->source), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto text-center\">";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                            <div class=\"col\">
                                ";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 180, $this->source); })()), "regular_count_end", [], "any", false, false, true, 180), 180, $this->source), 'widget');
        echo "
                                ";
        // line 181
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 181, $this->source); })()), "regular_count_end", [], "any", false, false, true, 181), 181, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">定期受注ID</label>
                        ";
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 189, $this->source); })()), "regular_order_id", [], "any", false, false, true, 189), 189, $this->source), 'widget');
        echo "
                        ";
        // line 190
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 190, $this->source); })()), "regular_order_id", [], "any", false, false, true, 190), 190, $this->source), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.regular_order.buy_product_id"), "html", null, true);
        echo "</label>
                        ";
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 194, $this->source); })()), "buy_product_id", [], "any", false, false, true, 194), 194, $this->source), 'widget');
        echo "
                        ";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 195, $this->source); })()), "buy_product_id", [], "any", false, false, true, 195), 195, $this->source), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">注文番号</label>
                        ";
        // line 201
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 201, $this->source); })()), "order_no", [], "any", false, false, true, 201), 201, $this->source), 'widget');
        echo "
                        ";
        // line 202
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 202, $this->source); })()), "order_no", [], "any", false, false, true, 202), 202, $this->source), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_price"), "html", null, true);
        echo "</label>
                        <div class=\"form-row align-items-center\">
                            <div class=\"col\">
                                <div class=\"input-group\">
                                    ";
        // line 209
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 209, $this->source); })()), "payment_total_start", [], "any", false, false, true, 209), 209, $this->source), 'widget');
        echo "
                                    ";
        // line 210
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 210, $this->source); })()), "payment_total_start", [], "any", false, false, true, 210), 210, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"col-auto text-center\">";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                            <div class=\"col\">
                                <div class=\"input-group\">
                                    ";
        // line 216
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 216, $this->source); })()), "payment_total_end", [], "any", false, false, true, 216), 216, $this->source), 'widget');
        echo "
                                    ";
        // line 217
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 217, $this->source); })()), "payment_total_end", [], "any", false, false, true, 217), 217, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">カード変更依頼メール送信状況</label>
                        ";
        // line 226
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 226, $this->source); })()), "card_change_request_mail_status", [], "any", false, false, true, 226), 226, $this->source), 'widget');
        echo "
                        ";
        // line 227
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 227, $this->source); })()), "card_change_request_mail_status", [], "any", false, false, true, 227), 227, $this->source), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.regular_order.buy_product_name"), "html", null, true);
        echo "</label>
                        ";
        // line 231
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 231, $this->source); })()), "buy_product_name", [], "any", false, false, true, 231), 231, $this->source), 'widget');
        echo "
                        ";
        // line 232
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 232, $this->source); })()), "buy_product_name", [], "any", false, false, true, 232), 232, $this->source), 'errors');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row\">
                    <div class=\"mb-4\">
                        <div class=\"col-12\">
                            <button class=\"btn btn-ec-conversion px-5\" type=\"submit\" id=\"search_submit\">";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search"), "html", null, true);
        echo "</button>
                            ";
        // line 241
        if ((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 241, $this->source); })())) {
            // line 242
            echo "                                <span class=\"fw-bold ml-2\" id=\"search_total_count\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_result", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 242, $this->source); })()), "totalItemCount", [], "any", false, false, true, 242)]);
            echo "</span>
                            ";
        }
        // line 244
        echo "                        </div>
                    </div>
                </div>
            </div>
            <div class=\"c-outsideBlock__contents mb-5\">
                ";
        // line 249
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@admin/search_items.twig", ["form" => (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 249, $this->source); })())], true, true);
        echo "
            </div>
        </form>
    </div>
    <!--検索条件設定テーブルここまで-->

    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                ";
        // line 258
        if (((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 258, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 258, $this->source); })()), "totalItemCount", [], "any", false, false, true, 258))) {
            // line 259
            echo "                    <form id=\"form_bulk\" method=\"POST\" action=\"\">
                        <input type=\"hidden\" name=\"";
            // line 260
            echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::TOKEN_NAME"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_constant("Eccube\\Common\\Constant::TOKEN_NAME")), "html", null, true);
            echo "\">
                        <div class=\"row justify-content-between mb-2\">
                            <div class=\"col-7\">
                                <div class=\"row justify-content-between\">
                                    <div class=\"col-auto d-none btn-bulk-wrapper\">
                                        <button type=\"button\" id=\"order_add\" class=\"btn btn-ec-regular mr-2\" data-type=\"create_order\" data-bulk-update=\"true\">
                                            ";
            // line 266
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.regular_order.order_add"), "html", null, true);
            echo "
                                        </button>
                                        <button id=\"bulkSendNotifyChangeCardMail\" type=\"button\" class=\"btn btn-ec-regular mr-2\" data-type=\"mail\">
                                            カード変更依頼メール送信
                                        </button>
                                    </div>

                                </div>
                            </div>
                            <div class=\"col-5 text-end\">
                                <div class=\"d-inline-block\">
                                    <select class=\"custom-select\" onchange=\"location = this.value;\">
                                        ";
            // line 278
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pageMaxis"]) || array_key_exists("pageMaxis", $context) ? $context["pageMaxis"] : (function () { throw new RuntimeError('Variable "pageMaxis" does not exist.', 278, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pageMax"]) {
                // line 279
                echo "                                            <option ";
                if ((twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 279) == (isset($context["page_count"]) || array_key_exists("page_count", $context) ? $context["page_count"] : (function () { throw new RuntimeError('Variable "page_count" does not exist.', 279, $this->source); })()))) {
                    echo " selected ";
                }
                // line 280
                echo "                                                value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eccube_payment_lite42_admin_regular_index_page", ["page_no" => 1, "page_count" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 280)]), "html", null, true);
                echo "\">
                                                ";
                // line 281
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.count", ["%count%" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 281)]), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMax'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 283
            echo "                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"card rounded border-0 mb-4 d-block\">
                            <div class=\"card-body p-0\">
                                <table class=\"table table-sm\" id=\"search_result\">
                                    <thead>
                                    <tr>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center pl-3\">
                                            <input type=\"checkbox\" id=\"toggle_check_all\" name=\"filter\" value=\"open\">
                                        </th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 295
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.regular_order.table.id"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 296
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.regular_order.table.name"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 297
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.regular_order.table.regular_status"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 298
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.regular_order.table.email"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 299
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.regular_order.table.regular_order_count"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 300
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.regular_order.table.next_delivery_date"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 301
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.regular_order.table.card_change_request_mail_send_date"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 302
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.regular_order.table.first_order_id"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 303
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.regular_order.table.last_order_id"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 304
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.regular_order.table.last_order_status"), "html", null, true);
            echo "</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
            // line 308
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 308, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["RegularOrder"]) {
                // line 309
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["RegularOrder"], "RegularShippings", [], "any", false, false, true, 309));
                foreach ($context['_seq'] as $context["_key"] => $context["RegularShipping"]) {
                    // line 310
                    echo "                                            <tr>
                                                <td class=\"align-middle text-center pl-3\">
                                                    <input type=\"checkbox\" id=\"check_";
                    // line 312
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrder"], "id", [], "any", false, false, true, 312), 312, $this->source), "html", null, true);
                    echo "\"
                                                           data-id=\"";
                    // line 313
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrder"], "id", [], "any", false, false, true, 313), 313, $this->source), "html", null, true);
                    echo "\"
                                                           name=\"ids[]\"
                                                           value=\"";
                    // line 315
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrder"], "id", [], "any", false, false, true, 315), 315, $this->source), "html", null, true);
                    echo "\"
                                                           data-notify-mail-url=\"";
                    // line 316
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eccube_payment_lite42_admin_send_change_mail", ["id" => twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "id", [], "any", false, false, true, 316)]), "html", null, true);
                    echo "\"
                                                    />
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    <a href=\"";
                    // line 320
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eccube_payment_lite42_admin_regular_order_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["RegularOrder"], "id", [], "any", false, false, true, 320)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrder"], "id", [], "any", false, false, true, 320), 320, $this->source), "html", null, true);
                    echo "</a>
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    ";
                    // line 323
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrder"], "name01", [], "any", false, false, true, 323), 323, $this->source), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrder"], "name02", [], "any", false, false, true, 323), 323, $this->source), "html", null, true);
                    echo "
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    ";
                    // line 326
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrder"], "RegularStatus", [], "any", false, false, true, 326), 326, $this->source), "html", null, true);
                    echo "
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    ";
                    // line 329
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrder"], "email", [], "any", false, false, true, 329), 329, $this->source), "html", null, true);
                    echo "
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    ";
                    // line 332
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrder"], "regular_order_count", [], "any", false, false, true, 332), 332, $this->source), "html", null, true);
                    echo "
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    ";
                    // line 335
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "nextDeliveryDate", [], "any", false, false, true, 335), 335, $this->source), "Y/m/d"), "html", null, true);
                    echo "
                                                <td class=\"align-middle text-center\">
                                                    ";
                    // line 337
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "RegularOrder", [], "any", false, false, true, 337), "Customer", [], "any", false, false, true, 337), "card_change_request_mail_send_date", [], "any", false, false, true, 337)) {
                        // line 338
                        echo "                                                        ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "RegularOrder", [], "any", false, false, true, 338), "Customer", [], "any", false, false, true, 338), "card_change_request_mail_send_date", [], "any", false, false, true, 338), 338, $this->source)), "html", null, true);
                        echo "
                                                        <i class=\"fa fa-envelope fa-lg text-secondary\"
                                                           aria-hidden=\"true\"
                                                           data-tooltip=\"true\"
                                                           data-placement=\"top\"
                                                           data-bs-original-title=\"";
                        // line 343
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "RegularOrder", [], "any", false, false, true, 343), "Customer", [], "any", false, false, true, 343), "card_change_request_mail_send_date", [], "any", false, false, true, 343), 343, $this->source)), "html", null, true);
                        echo "にカード変更依頼メールを送信済みです\"></i>
                                                    ";
                    } else {
                        // line 345
                        echo "                                                        ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.regular.unsent"), "html", null, true);
                        echo "
                                                    ";
                    }
                    // line 347
                    echo "                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    <a href=\"";
                    // line 349
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RegularOrder"], "getFirstOrder", [], "any", false, false, true, 349), "id", [], "any", false, false, true, 349)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RegularOrder"], "getFirstOrder", [], "any", false, false, true, 349), "id", [], "any", false, false, true, 349), 349, $this->source), "html", null, true);
                    echo "</a>
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    <a href=\"";
                    // line 352
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RegularOrder"], "getLastOrder", [], "any", false, false, true, 352), "id", [], "any", false, false, true, 352)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RegularOrder"], "getLastOrder", [], "any", false, false, true, 352), "id", [], "any", false, false, true, 352), 352, $this->source), "html", null, true);
                    echo "</a>
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    ";
                    // line 355
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RegularOrder"], "getLastOrder", [], "any", false, false, true, 355), "OrderStatus", [], "any", false, false, true, 355), 355, $this->source), "html", null, true);
                    echo "
                                                </td>
                                            </tr>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['RegularShipping'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 359
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['RegularOrder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 360
            echo "                                    </tbody>
                                </table>
                            </div>
                            <div class=\"row justify-content-md-center mb-4\">
                                ";
            // line 364
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 364, $this->source); })()), "totalItemCount", [], "any", false, false, true, 364) > 0)) {
                // line 365
                echo "                                    ";
                $this->loadTemplate("@admin/pager.twig", "EccubePaymentLite42/Resource/template/admin/Regular/Order/index.twig", 365)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 365, $this->source); })()), "paginationData", [], "any", false, false, true, 365), "routes" => "eccube_payment_lite42_admin_regular_index_page"]));
                // line 366
                echo "                                ";
            }
            // line 367
            echo "                            </div>
                        </div>
                    </form>
                ";
        } elseif (        // line 370
(isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 370, $this->source); })())) {
            // line 371
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 373
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_invalid_condition"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 374
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                    ";
            // line 378
            echo "                ";
        } else {
            // line 379
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 381
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_no_result"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 382
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 383
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_advanced_search"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                ";
        }
        // line 387
        echo "                <div class=\"modal fade\" id=\"sentUpdateModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"sentUpdateModal\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
                    <div class=\"modal-dialog modal-lg\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title fw-bold\"><!--confirmationModal_js.twig--></h5>
                                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                            </div>
                            <div class=\"modal-body\">
                                <p class=\"modal-message\"></p>
                                <ul id=\"bulkErrors\"></ul>
                                <div class=\"progress\" style=\"display: none\">
                                    <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                            <div class=\"modal-footer\">
                                <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">";
        // line 402
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                                <button id=\"bulkChange\" class=\"btn btn-ec-conversion\" type=\"button\"><!--confirmationModal_js.twig--></button>
                                <button id=\"bulkChangeComplete\" class=\"btn btn-ec-regular\" style=\"display: none\" type=\"button\">";
        // line 404
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.close"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
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
        return "EccubePaymentLite42/Resource/template/admin/Regular/Order/index.twig";
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
        return array (  940 => 404,  935 => 402,  918 => 387,  911 => 383,  907 => 382,  903 => 381,  899 => 379,  896 => 378,  890 => 374,  886 => 373,  882 => 371,  880 => 370,  875 => 367,  872 => 366,  869 => 365,  867 => 364,  861 => 360,  855 => 359,  845 => 355,  837 => 352,  829 => 349,  825 => 347,  819 => 345,  814 => 343,  805 => 338,  803 => 337,  798 => 335,  792 => 332,  786 => 329,  780 => 326,  772 => 323,  764 => 320,  757 => 316,  753 => 315,  748 => 313,  744 => 312,  740 => 310,  735 => 309,  731 => 308,  724 => 304,  720 => 303,  716 => 302,  712 => 301,  708 => 300,  704 => 299,  700 => 298,  696 => 297,  692 => 296,  688 => 295,  674 => 283,  666 => 281,  661 => 280,  656 => 279,  652 => 278,  637 => 266,  626 => 260,  623 => 259,  621 => 258,  609 => 249,  602 => 244,  596 => 242,  594 => 241,  590 => 240,  579 => 232,  575 => 231,  571 => 230,  565 => 227,  561 => 226,  549 => 217,  545 => 216,  539 => 213,  533 => 210,  529 => 209,  522 => 205,  516 => 202,  512 => 201,  503 => 195,  499 => 194,  495 => 193,  489 => 190,  485 => 189,  474 => 181,  470 => 180,  465 => 178,  460 => 176,  456 => 175,  447 => 169,  443 => 168,  439 => 167,  431 => 162,  427 => 161,  420 => 157,  416 => 156,  412 => 155,  402 => 148,  398 => 147,  393 => 145,  388 => 143,  384 => 142,  375 => 136,  371 => 135,  367 => 134,  357 => 127,  353 => 126,  348 => 124,  343 => 122,  339 => 121,  333 => 118,  327 => 115,  323 => 114,  319 => 113,  311 => 108,  307 => 107,  303 => 106,  297 => 103,  293 => 102,  289 => 101,  283 => 98,  273 => 91,  264 => 85,  260 => 84,  256 => 83,  249 => 79,  245 => 78,  239 => 75,  232 => 71,  228 => 69,  218 => 68,  206 => 65,  192 => 54,  179 => 44,  167 => 35,  154 => 25,  144 => 18,  140 => 17,  136 => 16,  128 => 10,  118 => 9,  99 => 5,  80 => 4,  69 => 1,  67 => 7,  65 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@admin/default_frame.twig' %}
{% set menus = ['regular', 'order'] %}

{% block title %}定期受注一覧{% endblock %}
{% block sub_title %}定期管理{% endblock %}

{% form_theme searchForm '@admin/Form/bootstrap_4_layout.html.twig' %}

{% block javascript %}
<script>
\$(function() {
// datetimepicker と競合するため HTML5 のカレンダ入力を無効に
    \$('input[type=\"date\"]').attr('type','text');

    \$.when(
        \$.getScript(\"{{ asset('assets/js/vendor/moment.min.js', 'admin') }}\"),
        \$.getScript(\"{{ asset('assets/js/vendor/moment-with-locales.min.js', 'admin') }}\"),
        \$.getScript(\"{{ asset('assets/js/vendor/tempusdominus-bootstrap-4.min.js', 'admin') }}\")
    ).done(function() {
        // datetimepicker で value が消えてしまうので data-value に保持しておく
        \$('input.datetimepicker-input').each(function() {
            \$(this).data('value', \$(this).val());
        });
        \$('#admin_search_regular_order_first_order_date_start').datetimepicker({
            locale: '{{ eccube_config.locale }}',
            format: 'YYYY-MM-DD',
            useCurrent: false,
            buttons: {
                showToday: true,
                showClose: true
            }
        });

        \$('#admin_search_regular_order_first_order_date_end').datetimepicker({
            locale: '{{ eccube_config.locale }}',
            format: 'YYYY-MM-DD',
            useCurrent: false,
            buttons: {
                showToday: true,
                showClose: true
            }
        });
        \$('#admin_search_regular_order_next_delivery_date_start').datetimepicker({
            locale: '{{ eccube_config.locale }}',
            format: 'YYYY-MM-DD',
            useCurrent: false,
            buttons: {
                showToday: true,
                showClose: true
            }
        });

        \$('#admin_search_regular_order_next_delivery_date_end').datetimepicker({
            locale: '{{ eccube_config.locale }}',
            format: 'YYYY-MM-DD',
            useCurrent: false,
            buttons: {
                showToday: true,
                showClose: true
            }
        });
    });
});
</script>
{{ include('@EccubePaymentLite42/admin/Regular/Order/confirmationModal_js.twig') }}
{% endblock javascript %}

{% block main %}
    <!--検索条件設定テーブルここから-->
    <div class=\"c-outsideBlock\">
        <form name=\"search_form\" id=\"search_form\" method=\"POST\" action=\"{{ url('eccube_payment_lite42_admin_regular_index_page') }}\">
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        {{ form_widget(searchForm._token) }}
                        <div>
                            <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"定期受注ID・お名前・会社名・メールアドレス・電話番号\">定期受注ID・注文番号・お名前・会社名・メールアドレス・電話番号<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                            {{ form_widget(searchForm.multi) }}
                            {{ form_errors(searchForm.multi) }}
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-12\">
                                <label class=\"col-form-label\">{{ 'gmo_epsilon.admin.regular_order.regular_status'|trans }}</label>
                                {{ form_widget(searchForm.regular_status, { 'label_attr': { 'class': 'checkbox-inline'}}) }}
                                {{ form_errors(searchForm.regular_status) }}
                            </div>
                        </div>
                        <div class=\"d-inline-block mb-3 collapsed\" data-bs-toggle=\"collapse\" href=\"#searchDetail\" aria-expanded=\"false\" aria-controls=\"searchDetail\">
                            <a>
                                <i class=\"fa fw-bold mr-1 fa-plus-square-o\">
                                    <span class=\"fw-bold\">{{ 'admin.common.search_detail'|trans }}</span>
                                </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"c-subContents ec-collapse collapse{{ has_errors ? ' show' }}\" id=\"searchDetail\">
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">{{ 'admin.order.orderer_name'|trans }}</label>
                        {{ form_widget(searchForm.name) }}
                        {{ form_errors(searchForm.name) }}
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">{{ 'admin.common.gender'|trans }}</label>
                        {{ form_widget(searchForm.sex, { 'label_attr': { 'class': 'checkbox-inline'}}) }}
                        {{ form_errors(searchForm.sex) }}
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">{{ 'admin.order.orderer_kana'|trans }}</label>
                        {{ form_widget(searchForm.kana) }}
                        {{ form_errors(searchForm.kana) }}
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">{{ '初回購入日'|trans }}</label>
                        <div class=\"form-row align-items-center\">
                            <div class=\"col\">
                                {{ form_widget(searchForm.first_order_date_start) }}
                                {{ form_errors(searchForm.first_order_date_start) }}
                            </div>
                            <div class=\"col-auto text-center\">{{ 'admin.common.separator__range'|trans }}</div>
                            <div class=\"col\">
                                {{ form_widget(searchForm.first_order_date_end) }}
                                {{ form_errors(searchForm.first_order_date_end) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">{{ 'admin.common.company_name'|trans }}</label>
                        {{ form_widget(searchForm.company_name) }}
                        {{ form_errors(searchForm.company_name) }}
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">次回お届け予定日</label>
                        <div class=\"form-row align-items-center\">
                            <div class=\"col\">
                                {{ form_widget(searchForm.next_delivery_date_start) }}
                                {{ form_errors(searchForm.next_delivery_date_start) }}
                            </div>
                            <div class=\"col-auto text-center\">{{ 'admin.common.separator__range'|trans }}</div>
                            <div class=\"col\">
                                {{ form_widget(searchForm.next_delivery_date_end) }}
                                {{ form_errors(searchForm.next_delivery_date_end) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">{{ 'admin.common.mail_address'|trans }}</label>
                        {{ form_widget(searchForm.email) }}
                        {{ form_errors(searchForm.email) }}
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">最新対応状況</label>
                        {{ form_widget(searchForm.latest_status) }}
                        {{ form_errors(searchForm.latest_status) }}
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">{{ 'admin.common.phone_number'|trans }}</label>
                        {{ form_widget(searchForm.phone_number) }}
                        {{ form_errors(searchForm.phone_number) }}
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">定期回数</label>
                        <div class=\"form-row align-items-center\">
                            <div class=\"col\">
                                {{ form_widget(searchForm.regular_count_start) }}
                                {{ form_errors(searchForm.regular_count_start) }}
                            </div>
                            <div class=\"col-auto text-center\">{{ 'admin.common.separator__range'|trans }}</div>
                            <div class=\"col\">
                                {{ form_widget(searchForm.regular_count_end) }}
                                {{ form_errors(searchForm.regular_count_end) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">定期受注ID</label>
                        {{ form_widget(searchForm.regular_order_id) }}
                        {{ form_errors(searchForm.regular_order_id) }}
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">{{ 'gmo_epsilon.admin.regular_order.buy_product_id'|trans }}</label>
                        {{ form_widget(searchForm.buy_product_id) }}
                        {{ form_errors(searchForm.buy_product_id) }}
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">注文番号</label>
                        {{ form_widget(searchForm.order_no) }}
                        {{ form_errors(searchForm.order_no) }}
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">{{ 'admin.order.purchase_price'|trans }}</label>
                        <div class=\"form-row align-items-center\">
                            <div class=\"col\">
                                <div class=\"input-group\">
                                    {{ form_widget(searchForm.payment_total_start) }}
                                    {{ form_errors(searchForm.payment_total_start) }}
                                </div>
                            </div>
                            <div class=\"col-auto text-center\">{{ 'admin.common.separator__range'|trans }}</div>
                            <div class=\"col\">
                                <div class=\"input-group\">
                                    {{ form_widget(searchForm.payment_total_end) }}
                                    {{ form_errors(searchForm.payment_total_end) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">カード変更依頼メール送信状況</label>
                        {{ form_widget(searchForm.card_change_request_mail_status) }}
                        {{ form_errors(searchForm.card_change_request_mail_status) }}
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">{{ 'gmo_epsilon.admin.regular_order.buy_product_name'|trans }}</label>
                        {{ form_widget(searchForm.buy_product_name) }}
                        {{ form_errors(searchForm.buy_product_name) }}
                    </div>
                </div>
            </div>
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row\">
                    <div class=\"mb-4\">
                        <div class=\"col-12\">
                            <button class=\"btn btn-ec-conversion px-5\" type=\"submit\" id=\"search_submit\">{{ 'admin.common.search'|trans }}</button>
                            {% if pagination %}
                                <span class=\"fw-bold ml-2\" id=\"search_total_count\">{{ 'admin.common.search_result'|trans({\"%count%\":pagination.totalItemCount})|raw }}</span>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"c-outsideBlock__contents mb-5\">
                {{ include('@admin/search_items.twig', { 'form': searchForm }, ignore_missing = true) }}
            </div>
        </form>
    </div>
    <!--検索条件設定テーブルここまで-->

    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                {% if pagination and pagination.totalItemCount %}
                    <form id=\"form_bulk\" method=\"POST\" action=\"\">
                        <input type=\"hidden\" name=\"{{ constant('Eccube\\\\Common\\\\Constant::TOKEN_NAME') }}\" value=\"{{ csrf_token(constant('Eccube\\\\Common\\\\Constant::TOKEN_NAME')) }}\">
                        <div class=\"row justify-content-between mb-2\">
                            <div class=\"col-7\">
                                <div class=\"row justify-content-between\">
                                    <div class=\"col-auto d-none btn-bulk-wrapper\">
                                        <button type=\"button\" id=\"order_add\" class=\"btn btn-ec-regular mr-2\" data-type=\"create_order\" data-bulk-update=\"true\">
                                            {{ 'gmo_epsilon.admin.regular_order.order_add'|trans }}
                                        </button>
                                        <button id=\"bulkSendNotifyChangeCardMail\" type=\"button\" class=\"btn btn-ec-regular mr-2\" data-type=\"mail\">
                                            カード変更依頼メール送信
                                        </button>
                                    </div>

                                </div>
                            </div>
                            <div class=\"col-5 text-end\">
                                <div class=\"d-inline-block\">
                                    <select class=\"custom-select\" onchange=\"location = this.value;\">
                                        {% for pageMax in pageMaxis %}
                                            <option {% if pageMax.name == page_count %} selected {% endif %}
                                                value=\"{{ path('eccube_payment_lite42_admin_regular_index_page', {'page_no': 1, 'page_count': pageMax.name}) }}\">
                                                {{ 'admin.common.count'|trans({ '%count%': pageMax.name }) }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"card rounded border-0 mb-4 d-block\">
                            <div class=\"card-body p-0\">
                                <table class=\"table table-sm\" id=\"search_result\">
                                    <thead>
                                    <tr>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center pl-3\">
                                            <input type=\"checkbox\" id=\"toggle_check_all\" name=\"filter\" value=\"open\">
                                        </th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">{{ 'gmo_epsilon.admin.regular_order.table.id'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">{{ 'gmo_epsilon.admin.regular_order.table.name'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">{{ 'gmo_epsilon.admin.regular_order.table.regular_status'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">{{ 'gmo_epsilon.admin.regular_order.table.email'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">{{ 'gmo_epsilon.admin.regular_order.table.regular_order_count'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">{{ 'gmo_epsilon.admin.regular_order.table.next_delivery_date'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">{{ 'gmo_epsilon.admin.regular_order.table.card_change_request_mail_send_date'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">{{ 'gmo_epsilon.admin.regular_order.table.first_order_id'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">{{ 'gmo_epsilon.admin.regular_order.table.last_order_id'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">{{ 'gmo_epsilon.admin.regular_order.table.last_order_status'|trans }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for RegularOrder in pagination %}
                                        {% for RegularShipping in RegularOrder.RegularShippings %}
                                            <tr>
                                                <td class=\"align-middle text-center pl-3\">
                                                    <input type=\"checkbox\" id=\"check_{{ RegularOrder.id }}\"
                                                           data-id=\"{{ RegularOrder.id }}\"
                                                           name=\"ids[]\"
                                                           value=\"{{ RegularOrder.id }}\"
                                                           data-notify-mail-url=\"{{ url('eccube_payment_lite42_admin_send_change_mail', { id: RegularShipping.id}) }}\"
                                                    />
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    <a href=\"{{ url('eccube_payment_lite42_admin_regular_order_edit', { id : RegularOrder.id }) }}\">{{ RegularOrder.id }}</a>
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    {{ RegularOrder.name01 }} {{ RegularOrder.name02 }}
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    {{ RegularOrder.RegularStatus }}
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    {{ RegularOrder.email }}
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    {{ RegularOrder.regular_order_count }}
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    {{ RegularShipping.nextDeliveryDate|date(\"Y/m/d\") }}
                                                <td class=\"align-middle text-center\">
                                                    {% if RegularShipping.RegularOrder.Customer.card_change_request_mail_send_date  %}
                                                        {{ RegularShipping.RegularOrder.Customer.card_change_request_mail_send_date|date_day }}
                                                        <i class=\"fa fa-envelope fa-lg text-secondary\"
                                                           aria-hidden=\"true\"
                                                           data-tooltip=\"true\"
                                                           data-placement=\"top\"
                                                           data-bs-original-title=\"{{ RegularShipping.RegularOrder.Customer.card_change_request_mail_send_date|date_day }}にカード変更依頼メールを送信済みです\"></i>
                                                    {% else %}
                                                        {{ 'gmo_epsilon.admin.regular.unsent'|trans }}
                                                    {% endif %}
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    <a href=\"{{ url('admin_order_edit', { id : RegularOrder.getFirstOrder.id }) }}\">{{ RegularOrder.getFirstOrder.id }}</a>
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    <a href=\"{{ url('admin_order_edit', { id : RegularOrder.getLastOrder.id }) }}\">{{ RegularOrder.getLastOrder.id }}</a>
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    {{ RegularOrder.getLastOrder.OrderStatus }}
                                                </td>
                                            </tr>
                                        {% endfor %}
                                    {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                            <div class=\"row justify-content-md-center mb-4\">
                                {% if pagination.totalItemCount > 0 %}
                                    {% include \"@admin/pager.twig\" with { 'pages' : pagination.paginationData, 'routes' : 'eccube_payment_lite42_admin_regular_index_page' } %}
                                {% endif %}
                            </div>
                        </div>
                    </form>
                {% elseif has_errors %}
                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">{{ 'admin.common.search_invalid_condition'|trans }}</div>
                            <div class=\"text-center text-muted\">{{ 'admin.common.search_try_change_condition'|trans }}</div>
                        </div>
                    </div>
                    {# 検索結果なし #}
                {% else %}
                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">{{ 'admin.common.search_no_result'|trans }}</div>
                            <div class=\"text-center text-muted\">{{ 'admin.common.search_try_change_condition'|trans }}</div>
                            <div class=\"text-center text-muted\">{{ 'admin.common.search_try_advanced_search'|trans }}</div>
                        </div>
                    </div>
                {% endif %}
                <div class=\"modal fade\" id=\"sentUpdateModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"sentUpdateModal\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
                    <div class=\"modal-dialog modal-lg\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title fw-bold\"><!--confirmationModal_js.twig--></h5>
                                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                            </div>
                            <div class=\"modal-body\">
                                <p class=\"modal-message\"></p>
                                <ul id=\"bulkErrors\"></ul>
                                <div class=\"progress\" style=\"display: none\">
                                    <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                            <div class=\"modal-footer\">
                                <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}</button>
                                <button id=\"bulkChange\" class=\"btn btn-ec-conversion\" type=\"button\"><!--confirmationModal_js.twig--></button>
                                <button id=\"bulkChangeComplete\" class=\"btn btn-ec-regular\" style=\"display: none\" type=\"button\">{{ 'admin.common.close'|trans }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "EccubePaymentLite42/Resource/template/admin/Regular/Order/index.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\admin\\Regular\\Order\\index.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "form_theme" => 7, "if" => 241, "for" => 278, "include" => 365);
        static $filters = array("escape" => 16, "trans" => 83, "raw" => 242, "date" => 335, "date_day" => 338);
        static $functions = array("asset" => 16, "include" => 65, "url" => 71, "form_widget" => 75, "form_errors" => 79, "constant" => 260, "csrf_token" => 260, "path" => 280);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'if', 'for', 'include'],
                ['escape', 'trans', 'raw', 'date', 'date_day'],
                ['asset', 'include', 'url', 'form_widget', 'form_errors', 'constant', 'csrf_token', 'path']
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
