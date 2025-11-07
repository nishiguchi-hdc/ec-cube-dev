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

/* ProductReview42/Resource/template/admin/index.twig */
class __TwigTemplate_1c29925db148a6b8634a6f8f1fab441b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductReview42/Resource/template/admin/index.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductReview42/Resource/template/admin/index.twig"));

        // line 17
        $context["menus"] = ["product", "product_review"];
        // line 21
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 21, $this->source); })()), ["@admin/Form/bootstrap_4_layout.html.twig"], true);
        // line 15
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "ProductReview42/Resource/template/admin/index.twig", 15);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 18
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.title"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.sub_title"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 23
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 24
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/tempusdominus-bootstrap-4.min.css", "admin"), "html", null, true);
        echo "\">
    <style type=\"text/css\">
        .datepicker-days th.dow:first-child,
        .datepicker-days td:first-child {
            color: #f00;
        }

        .datepicker-days th.dow:last-child,
        .datepicker-days td:last-child {
            color: #00f;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 38
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 39
        echo "    <script>
        \$(function() {
            if (\$('[type=\"date\"]').prop('type') != 'date') {
                // input type属性でdateが利用できるかどうか(カレンダー表示できないブラウザ対応)
                \$.when(
                    \$.getScript(\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/moment.min.js", "admin"), "html", null, true);
        echo "\"),
                    \$.getScript(\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/moment-with-locales.min.js", "admin"), "html", null, true);
        echo "\"),
                    \$.getScript(\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/tempusdominus-bootstrap-4.min.js", "admin"), "html", null, true);
        echo "\")
                ).done(function() {
                    \$('input[id\$=_review_start]').datetimepicker({
                        locale: '";
        // line 49
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 49, $this->source); })()), "locale", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "',
                        format: 'YYYY-MM-DD',
                        useCurrent: false,
                        buttons: {
                            showToday: true,
                            showClose: true
                        }
                    });
                    \$('input[id\$=_review_end]').datetimepicker({
                        locale: '";
        // line 58
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 58, $this->source); })()), "locale", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
        echo "',
                        format: 'YYYY-MM-DD',
                        useCurrent: false,
                        buttons: {
                            showToday: true,
                            showClose: true
                        }
                    });
                });
            }
        });
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
        echo "    <!--検索条件設定テーブルここから-->
    <div class=\"c-outsideBlock\">
        <form name=\"search_form\" id=\"search_form\" method=\"post\" action=\"\">
            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 76, $this->source); })()), "_token", [], "any", false, false, true, 76), 76, $this->source), 'widget');
        echo "
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row justify-content-start\">
                    <div class=\"col-6\">
                        <div class=\"mb-2\">
                            <label class=\"col-form-label\">";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.search_multi"), "html", null, true);
        echo "</label>
                            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 82, $this->source); })()), "multi", [], "any", false, false, true, 82), 82, $this->source), 'widget');
        echo "
                            ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 83, $this->source); })()), "multi", [], "any", false, false, true, 83), 83, $this->source), 'errors');
        echo "
                        </div>
                        <div class=\"d-inline-block mb-3\" data-bs-toggle=\"collapse\" href=\"#searchDetail\"
                             aria-expanded=\"false\" aria-controls=\"searchDetail\"><a><i
                                        class=\"fa fa-plus-square-o fw-bold mr-1\"></i><span
                                        class=\"fw-bold\">";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.search_detail"), "html", null, true);
        echo "</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"c-subContents collapse ec-collapse\" id=\"searchDetail\">
                <div class=\"row mb-2\">
                    <div class=\"col-6 col-sm-4\">
                        <label>";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 96, $this->source); })()), "product_name", [], "any", false, false, true, 96), 96, $this->source), 'label');
        echo "</label>
                        <div class=\"form-group\">
                            ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 98, $this->source); })()), "product_name", [], "any", false, false, true, 98), 98, $this->source), 'widget');
        echo "
                            ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 99, $this->source); })()), "product_name", [], "any", false, false, true, 99), 99, $this->source), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"col-6 col-sm-4\">
                        <label>";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 103, $this->source); })()), "product_code", [], "any", false, false, true, 103), 103, $this->source), 'label');
        echo "</label>
                        <div class=\"form-group\">
                            ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 105, $this->source); })()), "product_code", [], "any", false, false, true, 105), 105, $this->source), 'widget');
        echo "
                            ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 106, $this->source); })()), "product_code", [], "any", false, false, true, 106), 106, $this->source), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"col-6 col-sm-4\">
                        <label>";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 110, $this->source); })()), "recommend_level", [], "any", false, false, true, 110), 110, $this->source), 'label');
        echo "</label>
                        <div class=\"form-group\">
                            ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 112, $this->source); })()), "recommend_level", [], "any", false, false, true, 112), 112, $this->source), 'widget');
        echo "
                            ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 113, $this->source); })()), "recommend_level", [], "any", false, false, true, 113), 113, $this->source), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"col-6 col-sm-4\">
                        <label>";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.search_posted_date"), "html", null, true);
        echo "</label>
                        <div class=\"form-group range\">
                            ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 119, $this->source); })()), "review_start", [], "any", false, false, true, 119), 119, $this->source), 'widget');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 119, $this->source); })()), "review_start", [], "any", false, false, true, 119), 119, $this->source), 'errors');
        echo " ～ ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 119, $this->source); })()), "review_end", [], "any", false, false, true, 119), 119, $this->source), 'widget');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 119, $this->source); })()), "review_end", [], "any", false, false, true, 119), 119, $this->source), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"col-6 col-sm-4\">
                        <label>";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 123, $this->source); })()), "sex", [], "any", false, false, true, 123), 123, $this->source), 'label');
        echo "</label>
                        <div class=\"form-group\">
                            ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 125, $this->source); })()), "sex", [], "any", false, false, true, 125), 125, $this->source), 'widget');
        echo "
                            ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 126, $this->source); })()), "sex", [], "any", false, false, true, 126), 126, $this->source), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"col-6 col-sm-4\">
                        <label>";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 130, $this->source); })()), "status", [], "any", false, false, true, 130), 130, $this->source), 'label');
        echo "</label>
                        <div class=\"form-group\">
                            ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 132, $this->source); })()), "status", [], "any", false, false, true, 132), 132, $this->source), 'widget');
        echo "
                            ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 133, $this->source); })()), "status", [], "any", false, false, true, 133), 133, $this->source), 'errors');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"d-block text-center\">
                    <button class=\"btn btn-ec-regular search-clear\"
                            type=\"reset\">";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.search_clear"), "html", null, true);
        echo "</button>
                </div>
            </div><!-- /.col -->
            <div class=\"c-outsideBlock__contents mb-5\">
                <button class=\"btn btn-ec-conversion px-5\"
                        type=\"submit\">";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.search_button"), "html", null, true);
        echo "</button>
                ";
        // line 145
        if ((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 145, $this->source); })())) {
            // line 146
            echo "                    <span id=\"search-result\"
                          class=\"fw-bold ml-2\">";
            // line 147
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.search_result_count", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 147, $this->source); })()), "totalItemCount", [], "any", false, false, true, 147)]), "html", null, true);
            echo "</span>
                ";
        }
        // line 149
        echo "            </div>
            <div class=\"c-outsideBlock__contents mb-5\">
                ";
        // line 151
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@admin/search_items.twig", ["form" => (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 151, $this->source); })())], true, true);
        echo "
            </div>
        </form>
    </div>
    <!--検索条件設定テーブルここまで-->
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                ";
        // line 159
        if (((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 159, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 159, $this->source); })()), "totalItemCount", [], "any", false, false, true, 159))) {
            // line 160
            echo "
                <div class=\"row justify-content-between mb-2\">
                    <div class=\"col-6\">
                        &nbsp;
                    </div>
                    <div class=\"col-5 text-right\">
                        <div class=\"d-inline-block mr-2 align-bottom\">
                            <div>
                                <select class=\"form-select\" onchange=\"location = this.value;\">
                                    ";
            // line 169
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pageMaxis"]) || array_key_exists("pageMaxis", $context) ? $context["pageMaxis"] : (function () { throw new RuntimeError('Variable "pageMaxis" does not exist.', 169, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pageMax"]) {
                // line 170
                echo "                                        <option ";
                if ((twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 170) == (isset($context["page_count"]) || array_key_exists("page_count", $context) ? $context["page_count"] : (function () { throw new RuntimeError('Variable "page_count" does not exist.', 170, $this->source); })()))) {
                    echo "selected=\"\"";
                }
                // line 171
                echo "                                                value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_review_admin_product_review_page", ["page_no" => 1, "page_count" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 171)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.diaply_count", ["%count%" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 171)]), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMax'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            echo "                                </select>
                            </div>
                        </div>
                        <div class=\"d-inline-block\">
                            <div class=\"btn-group\" role=\"group\">
                                <button class=\"btn btn-ec-regular\" type=\"button\"
                                        onclick='location.href=\"";
            // line 179
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_review_admin_product_review_download");
            echo "\"'>
                                    <i
                                            class=\"fa fa-cloud-download mr-1 text-secondary\"></i><span>";
            // line 181
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.csv_download"), "html", null, true);
            echo "</span>
                                </button>
                                <button class=\"btn btn-ec-regular\" type=\"button\"
                                        onclick='location.href=\"";
            // line 184
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_csv", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["CsvType"]) || array_key_exists("CsvType", $context) ? $context["CsvType"] : (function () { throw new RuntimeError('Variable "CsvType" does not exist.', 184, $this->source); })()), "id", [], "any", false, false, true, 184)]), "html", null, true);
            echo "\"'>
                                    <i class=\"fa fa-cog mr-1 text-secondary\"></i><span>";
            // line 185
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.csv_download_setting"), "html", null, true);
            echo "</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <table class=\"table table-sm\">
                            <thead>
                            <tr>
                                <th class=\"border-top-0 ps-3 pt-2 pb-2\">ID</th>
                                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 197
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.th_posted_date"), "html", null, true);
            echo "</th>
                                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 198
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.th_contributor"), "html", null, true);
            echo "</th>
                                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 199
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.th_product_name"), "html", null, true);
            echo "</th>
                                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 200
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.th_title"), "html", null, true);
            echo "</th>
                                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 201
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.th_level"), "html", null, true);
            echo "</th>
                                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 202
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.th_status"), "html", null, true);
            echo "</th>
                                <th>&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
            // line 207
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 207, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["Review"]) {
                // line 208
                echo "                                <tr>
                                    <td class=\"align-middle ps-3\">";
                // line 209
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Review"], "id", [], "any", false, false, true, 209), 209, $this->source), "html", null, true);
                echo "</td>
                                    <td class=\"align-middle\">";
                // line 210
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Review"], "create_date", [], "any", false, false, true, 210), 210, $this->source)), "html", null, true);
                echo "</td>
                                    <td class=\"align-middle\">";
                // line 211
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Review"], "reviewer_name", [], "any", false, false, true, 211), 211, $this->source), "html", null, true);
                echo "</td>
                                    <td class=\"align-middle\">";
                // line 212
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Review"], "Product", [], "any", false, false, true, 212), "name", [], "any", false, false, true, 212), 212, $this->source), "html", null, true);
                echo "</td>
                                    <td class=\"align-middle\">
                                        <a href=\"";
                // line 214
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_review_admin_product_review_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Review"], "id", [], "any", false, false, true, 214)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Review"], "title", [], "any", false, false, true, 214), 214, $this->source), "html", null, true);
                echo "</a>
                                    </td>
                                    <td class=\"align-middle\">";
                // line 216
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["Review"], "recommend_level", [], "any", false, false, true, 216)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    echo "★";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</td>
                                    <td class=\"align-middle\">";
                // line 217
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Review"], "status", [], "any", false, false, true, 217), 217, $this->source), "html", null, true);
                echo "</td>
                                    <td class=\"icon_edit\">
                                        <div class=\"col-auto text-right\">
                                            <a href=\"";
                // line 220
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_review_admin_product_review_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Review"], "id", [], "any", false, false, true, 220)]), "html", null, true);
                echo "\"
                                               class=\"btn btn-ec-actionIcon mr-3 action-edit\"
                                               data-bs-toggle=\"tooltip\"
                                               data-bs-placement=\"top\" title=\"\"
                                               data-bs-original-title=\"\"><i class=\"fa fa-pencil fa-lg text-secondary\"></i></a>

                                            <a
                                                    class=\"btn btn-ec-actionIcon mr-3\"
                                                    data-bs-toggle=\"modal\"
                                                    data-bs-target=\"#confirmModal-";
                // line 229
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Review"], "id", [], "any", false, false, true, 229), 229, $this->source), "html", null, true);
                echo "\"
                                                    data-bs-toggle=\"tooltip\"
                                                    data-bs-placement=\"top\"><i
                                                        class=\"fa fa-close fa-lg text-secondary\"></i></a>
                                        </div>
                                        <div class=\"modal fade\" id=\"confirmModal-";
                // line 234
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Review"], "id", [], "any", false, false, true, 234), 234, $this->source), "html", null, true);
                echo "\" tabindex=\"-1\"
                                             role=\"dialog\"
                                             aria-labelledby=\"confirmModal-";
                // line 236
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Review"], "id", [], "any", false, false, true, 236), 236, $this->source), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                            <div class=\"modal-dialog\" role=\"document\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <h5 class=\"modal-title fw-bold\">
                                                            ";
                // line 241
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.delete_confirm_title"), "html", null, true);
                echo "</h5>
                                                        <button class=\"btn-close\" type=\"button\"
                                                                data-bs-dismiss=\"modal\"
                                                                aria-label=\"Close\">
                                                        </button>
                                                    </div>
                                                    <div class=\"modal-body text-left\">
                                                        <p class=\"text-left\">
                                                            ";
                // line 249
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.delete_confirm_message"), "html", null, true);
                echo "</p>
                                                    </div>
                                                    <div class=\"modal-footer\">
                                                        <button class=\"btn btn-ec-sub\" type=\"button\"
                                                                data-bs-dismiss=\"modal\">";
                // line 253
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.delete_cancel"), "html", null, true);
                echo "
                                                        </button>
                                                        <a
                                                                href=\"";
                // line 256
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_review_admin_product_review_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Review"], "id", [], "any", false, false, true, 256)]), "html", null, true);
                echo "\"
                                                                class=\"btn btn-ec-delete\"
                                                                data-confirm=\"false\"
                                                                ";
                // line 259
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo "
                                                                data-method=\"delete\">
                                                            ";
                // line 261
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.delete"), "html", null, true);
                echo "
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 270
            echo "                            </tbody>
                        </table>
                    </div>

                    <div class=\"row justify-content-md-center mb-4\">
                        ";
            // line 275
            if ((twig_length_filter($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 275, $this->source); })())) > 0)) {
                // line 276
                echo "                            ";
                $this->loadTemplate("@admin/pager.twig", "ProductReview42/Resource/template/admin/index.twig", 276)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 276, $this->source); })()), "paginationData", [], "any", false, false, true, 276), "routes" => "product_review_admin_product_review_page"]));
                // line 277
                echo "                        ";
            }
            // line 278
            echo "                    </div>
                    ";
        } elseif (        // line 279
(isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 279, $this->source); })())) {
            // line 280
            echo "                        <div class=\"card rounded border-0\">
                            <div class=\"card-body p-4\">
                                <div class=\"text-center text-muted mb-4 h5\">";
            // line 282
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.search_invalid_condition"), "html", null, true);
            echo "</div>
                                <div class=\"text-center text-muted\">";
            // line 283
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.search_change_condition_and_retry"), "html", null, true);
            echo "</div>
                            </div>
                        </div>
                    ";
        } else {
            // line 287
            echo "                        <div class=\"card rounded border-0\">
                            <div class=\"card-body p-4\">
                                <div class=\"text-center text-muted mb-4 h5\">";
            // line 289
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.search_no_result"), "html", null, true);
            echo "</div>
                                <div class=\"text-center text-muted\">";
            // line 290
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.search_change_condition_and_retry"), "html", null, true);
            echo "</div>
                                <div class=\"text-center text-muted\">";
            // line 291
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.admin.product_review.search_try_detail_condition"), "html", null, true);
            echo "</div>
                            </div>
                        </div>
                    ";
        }
        // line 295
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
        return "ProductReview42/Resource/template/admin/index.twig";
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
        return array (  688 => 295,  681 => 291,  677 => 290,  673 => 289,  669 => 287,  662 => 283,  658 => 282,  654 => 280,  652 => 279,  649 => 278,  646 => 277,  643 => 276,  641 => 275,  634 => 270,  619 => 261,  614 => 259,  608 => 256,  602 => 253,  595 => 249,  584 => 241,  576 => 236,  571 => 234,  563 => 229,  551 => 220,  545 => 217,  534 => 216,  527 => 214,  522 => 212,  518 => 211,  514 => 210,  510 => 209,  507 => 208,  503 => 207,  495 => 202,  491 => 201,  487 => 200,  483 => 199,  479 => 198,  475 => 197,  460 => 185,  456 => 184,  450 => 181,  445 => 179,  437 => 173,  426 => 171,  421 => 170,  417 => 169,  406 => 160,  404 => 159,  393 => 151,  389 => 149,  384 => 147,  381 => 146,  379 => 145,  375 => 144,  367 => 139,  358 => 133,  354 => 132,  349 => 130,  342 => 126,  338 => 125,  333 => 123,  322 => 119,  317 => 117,  310 => 113,  306 => 112,  301 => 110,  294 => 106,  290 => 105,  285 => 103,  278 => 99,  274 => 98,  269 => 96,  258 => 88,  250 => 83,  246 => 82,  242 => 81,  234 => 76,  229 => 73,  219 => 72,  196 => 58,  184 => 49,  178 => 46,  174 => 45,  170 => 44,  163 => 39,  153 => 38,  129 => 24,  119 => 23,  100 => 19,  81 => 18,  70 => 15,  68 => 21,  66 => 17,  41 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/*
 * This file is part of the ProductReview plugin
 *
 * Copyright (C) 2016 LOCKON CO.,LTD. All Rights Reserved.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
#}
{#
[商品管理]-[商品レビュー]-[一覧・検索]画面
#}

{% extends '@admin/default_frame.twig' %}

{% set menus = ['product', 'product_review'] %}
{% block title %}{{ 'product_review.admin.product_review.title'|trans }}{% endblock %}
{% block sub_title %}{{ 'product_review.admin.product_review.sub_title'|trans }}{% endblock %}

{% form_theme searchForm '@admin/Form/bootstrap_4_layout.html.twig' %}

{% block stylesheet %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/tempusdominus-bootstrap-4.min.css', 'admin') }}\">
    <style type=\"text/css\">
        .datepicker-days th.dow:first-child,
        .datepicker-days td:first-child {
            color: #f00;
        }

        .datepicker-days th.dow:last-child,
        .datepicker-days td:last-child {
            color: #00f;
        }
    </style>
{% endblock stylesheet %}

{% block javascript %}
    <script>
        \$(function() {
            if (\$('[type=\"date\"]').prop('type') != 'date') {
                // input type属性でdateが利用できるかどうか(カレンダー表示できないブラウザ対応)
                \$.when(
                    \$.getScript(\"{{ asset('assets/js/vendor/moment.min.js', 'admin') }}\"),
                    \$.getScript(\"{{ asset('assets/js/vendor/moment-with-locales.min.js', 'admin') }}\"),
                    \$.getScript(\"{{ asset('assets/js/vendor/tempusdominus-bootstrap-4.min.js', 'admin') }}\")
                ).done(function() {
                    \$('input[id\$=_review_start]').datetimepicker({
                        locale: '{{ eccube_config.locale }}',
                        format: 'YYYY-MM-DD',
                        useCurrent: false,
                        buttons: {
                            showToday: true,
                            showClose: true
                        }
                    });
                    \$('input[id\$=_review_end]').datetimepicker({
                        locale: '{{ eccube_config.locale }}',
                        format: 'YYYY-MM-DD',
                        useCurrent: false,
                        buttons: {
                            showToday: true,
                            showClose: true
                        }
                    });
                });
            }
        });
    </script>
{% endblock javascript %}

{% block main %}
    <!--検索条件設定テーブルここから-->
    <div class=\"c-outsideBlock\">
        <form name=\"search_form\" id=\"search_form\" method=\"post\" action=\"\">
            {{ form_widget(searchForm._token) }}
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row justify-content-start\">
                    <div class=\"col-6\">
                        <div class=\"mb-2\">
                            <label class=\"col-form-label\">{{ 'product_review.admin.product_review.search_multi'|trans }}</label>
                            {{ form_widget(searchForm.multi) }}
                            {{ form_errors(searchForm.multi) }}
                        </div>
                        <div class=\"d-inline-block mb-3\" data-bs-toggle=\"collapse\" href=\"#searchDetail\"
                             aria-expanded=\"false\" aria-controls=\"searchDetail\"><a><i
                                        class=\"fa fa-plus-square-o fw-bold mr-1\"></i><span
                                        class=\"fw-bold\">{{ 'product_review.admin.product_review.search_detail'|trans }}</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"c-subContents collapse ec-collapse\" id=\"searchDetail\">
                <div class=\"row mb-2\">
                    <div class=\"col-6 col-sm-4\">
                        <label>{{ form_label(searchForm.product_name) }}</label>
                        <div class=\"form-group\">
                            {{ form_widget(searchForm.product_name) }}
                            {{ form_errors(searchForm.product_name) }}
                        </div>
                    </div>
                    <div class=\"col-6 col-sm-4\">
                        <label>{{ form_label(searchForm.product_code) }}</label>
                        <div class=\"form-group\">
                            {{ form_widget(searchForm.product_code) }}
                            {{ form_errors(searchForm.product_code) }}
                        </div>
                    </div>
                    <div class=\"col-6 col-sm-4\">
                        <label>{{ form_label(searchForm.recommend_level) }}</label>
                        <div class=\"form-group\">
                            {{ form_widget(searchForm.recommend_level) }}
                            {{ form_errors(searchForm.recommend_level) }}
                        </div>
                    </div>
                    <div class=\"col-6 col-sm-4\">
                        <label>{{ 'product_review.admin.product_review.search_posted_date'|trans }}</label>
                        <div class=\"form-group range\">
                            {{ form_widget(searchForm.review_start) }}{{ form_errors(searchForm.review_start) }} ～ {{ form_widget(searchForm.review_end) }}{{ form_errors(searchForm.review_end) }}
                        </div>
                    </div>
                    <div class=\"col-6 col-sm-4\">
                        <label>{{ form_label(searchForm.sex) }}</label>
                        <div class=\"form-group\">
                            {{ form_widget(searchForm.sex) }}
                            {{ form_errors(searchForm.sex) }}
                        </div>
                    </div>
                    <div class=\"col-6 col-sm-4\">
                        <label>{{ form_label(searchForm.status) }}</label>
                        <div class=\"form-group\">
                            {{ form_widget(searchForm.status) }}
                            {{ form_errors(searchForm.status) }}
                        </div>
                    </div>
                </div>
                <div class=\"d-block text-center\">
                    <button class=\"btn btn-ec-regular search-clear\"
                            type=\"reset\">{{ 'product_review.admin.product_review.search_clear'|trans }}</button>
                </div>
            </div><!-- /.col -->
            <div class=\"c-outsideBlock__contents mb-5\">
                <button class=\"btn btn-ec-conversion px-5\"
                        type=\"submit\">{{ 'product_review.admin.product_review.search_button'|trans }}</button>
                {% if pagination %}
                    <span id=\"search-result\"
                          class=\"fw-bold ml-2\">{{ 'product_review.admin.product_review.search_result_count'|trans({\"%count%\":pagination.totalItemCount}) }}</span>
                {% endif %}
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

                <div class=\"row justify-content-between mb-2\">
                    <div class=\"col-6\">
                        &nbsp;
                    </div>
                    <div class=\"col-5 text-right\">
                        <div class=\"d-inline-block mr-2 align-bottom\">
                            <div>
                                <select class=\"form-select\" onchange=\"location = this.value;\">
                                    {% for pageMax in pageMaxis %}
                                        <option {% if pageMax.name == page_count %}selected=\"\"{% endif %}
                                                value=\"{{ path('product_review_admin_product_review_page', {'page_no': 1, 'page_count': pageMax.name}) }}\">{{ 'product_review.admin.product_review.diaply_count'|trans({'%count%' : pageMax.name}) }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <div class=\"d-inline-block\">
                            <div class=\"btn-group\" role=\"group\">
                                <button class=\"btn btn-ec-regular\" type=\"button\"
                                        onclick='location.href=\"{{ url('product_review_admin_product_review_download') }}\"'>
                                    <i
                                            class=\"fa fa-cloud-download mr-1 text-secondary\"></i><span>{{ 'product_review.admin.product_review.csv_download'|trans }}</span>
                                </button>
                                <button class=\"btn btn-ec-regular\" type=\"button\"
                                        onclick='location.href=\"{{ url('admin_setting_shop_csv', { id : CsvType.id }) }}\"'>
                                    <i class=\"fa fa-cog mr-1 text-secondary\"></i><span>{{ 'product_review.admin.product_review.csv_download_setting'|trans }}</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <table class=\"table table-sm\">
                            <thead>
                            <tr>
                                <th class=\"border-top-0 ps-3 pt-2 pb-2\">ID</th>
                                <th class=\"border-top-0 pt-2 pb-2\">{{ 'product_review.admin.product_review.th_posted_date'|trans }}</th>
                                <th class=\"border-top-0 pt-2 pb-2\">{{ 'product_review.admin.product_review.th_contributor'|trans }}</th>
                                <th class=\"border-top-0 pt-2 pb-2\">{{ 'product_review.admin.product_review.th_product_name'|trans }}</th>
                                <th class=\"border-top-0 pt-2 pb-2\">{{ 'product_review.admin.product_review.th_title'|trans }}</th>
                                <th class=\"border-top-0 pt-2 pb-2\">{{ 'product_review.admin.product_review.th_level'|trans }}</th>
                                <th class=\"border-top-0 pt-2 pb-2\">{{ 'product_review.admin.product_review.th_status'|trans }}</th>
                                <th>&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for Review in pagination %}
                                <tr>
                                    <td class=\"align-middle ps-3\">{{ Review.id }}</td>
                                    <td class=\"align-middle\">{{ Review.create_date|date_min }}</td>
                                    <td class=\"align-middle\">{{ Review.reviewer_name }}</td>
                                    <td class=\"align-middle\">{{ Review.Product.name }}</td>
                                    <td class=\"align-middle\">
                                        <a href=\"{{ url('product_review_admin_product_review_edit', { id : Review.id }) }}\">{{ Review.title }}</a>
                                    </td>
                                    <td class=\"align-middle\">{% for i in 1..Review.recommend_level %}★{% endfor %}</td>
                                    <td class=\"align-middle\">{{ Review.status }}</td>
                                    <td class=\"icon_edit\">
                                        <div class=\"col-auto text-right\">
                                            <a href=\"{{ url('product_review_admin_product_review_edit', { id : Review.id }) }}\"
                                               class=\"btn btn-ec-actionIcon mr-3 action-edit\"
                                               data-bs-toggle=\"tooltip\"
                                               data-bs-placement=\"top\" title=\"\"
                                               data-bs-original-title=\"\"><i class=\"fa fa-pencil fa-lg text-secondary\"></i></a>

                                            <a
                                                    class=\"btn btn-ec-actionIcon mr-3\"
                                                    data-bs-toggle=\"modal\"
                                                    data-bs-target=\"#confirmModal-{{ Review.id }}\"
                                                    data-bs-toggle=\"tooltip\"
                                                    data-bs-placement=\"top\"><i
                                                        class=\"fa fa-close fa-lg text-secondary\"></i></a>
                                        </div>
                                        <div class=\"modal fade\" id=\"confirmModal-{{ Review.id }}\" tabindex=\"-1\"
                                             role=\"dialog\"
                                             aria-labelledby=\"confirmModal-{{ Review.id }}\" aria-hidden=\"true\">
                                            <div class=\"modal-dialog\" role=\"document\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <h5 class=\"modal-title fw-bold\">
                                                            {{ 'product_review.admin.product_review.delete_confirm_title'|trans }}</h5>
                                                        <button class=\"btn-close\" type=\"button\"
                                                                data-bs-dismiss=\"modal\"
                                                                aria-label=\"Close\">
                                                        </button>
                                                    </div>
                                                    <div class=\"modal-body text-left\">
                                                        <p class=\"text-left\">
                                                            {{ 'product_review.admin.product_review.delete_confirm_message'|trans }}</p>
                                                    </div>
                                                    <div class=\"modal-footer\">
                                                        <button class=\"btn btn-ec-sub\" type=\"button\"
                                                                data-bs-dismiss=\"modal\">{{ 'product_review.admin.product_review.delete_cancel'|trans }}
                                                        </button>
                                                        <a
                                                                href=\"{{ url('product_review_admin_product_review_delete', { id : Review.id }) }}\"
                                                                class=\"btn btn-ec-delete\"
                                                                data-confirm=\"false\"
                                                                {{ csrf_token_for_anchor() }}
                                                                data-method=\"delete\">
                                                            {{ 'product_review.admin.product_review.delete'|trans }}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>

                    <div class=\"row justify-content-md-center mb-4\">
                        {% if pagination|length > 0 %}
                            {% include \"@admin/pager.twig\" with { 'pages' : pagination.paginationData, 'routes' : 'product_review_admin_product_review_page' } %}
                        {% endif %}
                    </div>
                    {% elseif has_errors %}
                        <div class=\"card rounded border-0\">
                            <div class=\"card-body p-4\">
                                <div class=\"text-center text-muted mb-4 h5\">{{ 'product_review.admin.product_review.search_invalid_condition'|trans }}</div>
                                <div class=\"text-center text-muted\">{{ 'product_review.admin.product_review.search_change_condition_and_retry'|trans }}</div>
                            </div>
                        </div>
                    {% else %}
                        <div class=\"card rounded border-0\">
                            <div class=\"card-body p-4\">
                                <div class=\"text-center text-muted mb-4 h5\">{{ 'product_review.admin.product_review.search_no_result'|trans }}</div>
                                <div class=\"text-center text-muted\">{{ 'product_review.admin.product_review.search_change_condition_and_retry'|trans }}</div>
                                <div class=\"text-center text-muted\">{{ 'product_review.admin.product_review.search_try_detail_condition'|trans }}</div>
                            </div>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "ProductReview42/Resource/template/admin/index.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\ProductReview42\\Resource\\template\\admin\\index.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 17, "form_theme" => 21, "if" => 145, "for" => 169, "include" => 276);
        static $filters = array("escape" => 18, "trans" => 18, "date_min" => 210, "length" => 275);
        static $functions = array("asset" => 24, "form_widget" => 76, "form_errors" => 83, "form_label" => 96, "include" => 151, "path" => 171, "url" => 179, "range" => 216, "csrf_token_for_anchor" => 259);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'if', 'for', 'include'],
                ['escape', 'trans', 'date_min', 'length'],
                ['asset', 'form_widget', 'form_errors', 'form_label', 'include', 'path', 'url', 'range', 'csrf_token_for_anchor']
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
