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

/* @admin/Content/page_edit.twig */
class __TwigTemplate_20e4443d1b30c2de2ed407c06c7b3f50 extends Template
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
        // line 11
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Content/page_edit.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Content/page_edit.twig"));

        // line 14
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, true, 14), "query", [], "any", false, false, true, 14), "get", ["return"], "method", false, false, true, 14) == "tradelaw")) {
            // line 15
            $context["menus"] = ["setting", "shop", "shop_tradelaw"];
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, true, 16), "query", [], "any", false, false, true, 16), "get", ["return"], "method", false, false, true, 16) == "agreement")) {
            // line 17
            $context["menus"] = ["setting", "shop", "shop_agreement"];
        } else {
            // line 19
            $context["menus"] = ["content", "page"];
        }
        // line 25
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Content/page_edit.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 22
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_management"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 23
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

    // line 27
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 28
        echo "    <style>
        .ui-resizable-se {
            right: -3px;
            bottom: -3px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 36
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 37
        echo "    <script>
        ace.require('ace/ext/language_tools');
        var editor = ace.edit('editor');
        editor.session.setMode('ace/mode/twig');
        editor.setTheme('ace/theme/tomorrow');
        editor.setValue('";
        // line 42
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "tpl_data", [], "any", false, false, true, 42), "vars", [], "any", false, false, true, 42), "value", [], "any", false, false, true, 42), 42, $this->source), "js"), "html", null, true);
        echo "');
        editor.setOptions({
            enableBasicAutocompletion: true,
            enableSnippets: true,
            enableLiveAutocompletion: true,
            showInvisibles: true
        });

        \$(\"#editor\").resizable({
            resize: function (event, ui) {
                editor.resize();
            }
        });

        \$('#content_page_form').on('submit', function(elem) {
            \$('#main_edit_tpl_data').val(editor.getValue());
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 62
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 63
        echo "    <form id=\"content_page_form\" method=\"post\"
          action=\"";
        // line 64
        if ( !(null === (isset($context["page_id"]) || array_key_exists("page_id", $context) ? $context["page_id"] : (function () { throw new RuntimeError('Variable "page_id" does not exist.', 64, $this->source); })()))) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_content_page_edit", ["id" => (isset($context["page_id"]) || array_key_exists("page_id", $context) ? $context["page_id"] : (function () { throw new RuntimeError('Variable "page_id" does not exist.', 64, $this->source); })())]), "html", null, true);
        } else {
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_content_page_new");
        }
        echo "\">
        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "_token", [], "any", false, false, true, 65), 65, $this->source), 'widget');
        echo "

        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <!-- ページ設定 -->
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\"><span class=\"card-title\">";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page__card_title"), "html", null, true);
        echo "</span></div>
                                <div class=\"col-4 text-end\">
                                    <a data-bs-toggle=\"collapse\" href=\"#pageDetail\" aria-expanded=\"false\" aria-controls=\"pageDetail\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"pageDetail\">
                            <div class=\"card-body\">
                                <!-- ページ名 -->
                                <div class=\"row mb-2\">
                                    <div class=\"col-2\">
                                        <span>";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_name"), "html", null, true);
        echo "</span>
                                        <span class=\"badge bg-primary ms-1\">";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col-10\">
                                        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "name", [], "any", false, false, true, 91), 91, $this->source), 'widget');
        echo "
                                        ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "name", [], "any", false, false, true, 92), 92, $this->source), 'errors');
        echo "
                                    </div>
                                </div>
                                <!-- URL -->
                                <div class=\"row mb-2\">
                                    <div class=\"col-2\">
                                        <span>";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_url"), "html", null, true);
        echo "</span>
                                        <span class=\"badge bg-primary ms-1\">";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col-10\">
                                        <div class=\"row\">
                                            ";
        // line 103
        if ((isset($context["is_user_data_page"]) || array_key_exists("is_user_data_page", $context) ? $context["is_user_data_page"] : (function () { throw new RuntimeError('Variable "is_user_data_page" does not exist.', 103, $this->source); })())) {
            // line 104
            echo "                                                <div class=\"col-3 pe-0\"><span class=\"align-middle\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage");
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 104, $this->source); })()), "eccube_user_data_route", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
            echo "/</span></div>
                                                <div class=\"col-9 ps-0\">";
            // line 105
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "url", [], "any", false, false, true, 105), 105, $this->source), 'widget');
            echo "</div>
                                            ";
        } else {
            // line 107
            echo "                                                <div class=\"col pe-0\"><span class=\"align-middle\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "request", [], "any", false, false, true, 107), "schemeAndHttpHost", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "request", [], "any", false, false, true, 107), "basePath", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 107, $this->source); })()), 107, $this->source), "html", null, true);
            echo "</span></div>
                                                <div>";
            // line 108
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "url", [], "any", false, false, true, 108), 108, $this->source), 'widget', ["type" => "hidden"]);
            echo "</div>
                                            ";
        }
        // line 110
        echo "                                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "url", [], "any", false, false, true, 110), 110, $this->source), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <!-- ファイル名 -->
                                <div class=\"row mb-2\">
                                    <div class=\"col-2\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.content.page_file_name"), "html", null, true);
        echo "\">
                                            <span>";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_file_name"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </div>
                                        <span class=\"badge bg-primary ms-1\">";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col-10\">
                                        <div class=\"row\">
                                            ";
        // line 124
        if ((isset($context["is_user_data_page"]) || array_key_exists("is_user_data_page", $context) ? $context["is_user_data_page"] : (function () { throw new RuntimeError('Variable "is_user_data_page" does not exist.', 124, $this->source); })())) {
            // line 125
            echo "                                                <div class=\"col-3 pe-0 align-middle\"><span class=\"align-middle\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["template_path"]) || array_key_exists("template_path", $context) ? $context["template_path"] : (function () { throw new RuntimeError('Variable "template_path" does not exist.', 125, $this->source); })()), 125, $this->source), "html", null, true);
            echo "/</span></div>
                                                <div class=\"col-7 ps-0\">
                                                    ";
            // line 127
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "file_name", [], "any", false, false, true, 127), 127, $this->source), 'widget');
            echo "
                                                </div>
                                                <div class=\"col-2 ps-0\">.twig</div>
                                            ";
        } else {
            // line 131
            echo "                                                <div class=\"col pe-0 align-middle\">
                                                    <span class=\"align-middle\">";
            // line 132
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["template_path"]) || array_key_exists("template_path", $context) ? $context["template_path"] : (function () { throw new RuntimeError('Variable "template_path" does not exist.', 132, $this->source); })()), 132, $this->source), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "file_name", [], "any", false, false, true, 132), "vars", [], "any", false, false, true, 132), "value", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
            echo ".twig</span>
                                                    <div>";
            // line 133
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "file_name", [], "any", false, false, true, 133), 133, $this->source), 'widget', ["type" => "hidden"]);
            echo "</div>
                                                </div>
                                            ";
        }
        // line 136
        echo "                                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "file_name", [], "any", false, false, true, 136), 136, $this->source), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <!-- コード -->
                                <div class=\"row mb-2\">
                                    <div class=\"col-2\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.content.page_source_code"), "html", null, true);
        echo "\">
                                            <span>";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_source_code"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </div>
                                        <span class=\"badge bg-primary ms-1\">";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col-10\">
                                        <div id=\"editor\" style=\"height: 480px\" class=\"form-control";
        // line 149
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "tpl_data", [], "any", false, false, true, 149), 149, $this->source))) ? (" is-invalid") : (""));
        echo "\"></div>
                                        <div style=\"display: none\">";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "tpl_data", [], "any", false, false, true, 150), 150, $this->source), 'widget');
        echo "</div>
                                        ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "tpl_data", [], "any", false, false, true, 151), 151, $this->source), 'errors');
        echo "
                                    </div>
                                </div>
                                ";
        // line 155
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 155), "eccube_form_options", [], "any", false, false, true, 155), "auto_render", [], "any", false, false, true, 155); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 156
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 156), "eccube_form_options", [], "any", false, false, true, 156), "form_theme", [], "any", false, false, true, 156)) {
                // line 157
                echo "                                        ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 157), "eccube_form_options", [], "any", false, false, true, 157), "form_theme", [], "any", false, false, true, 157)], true);
                // line 158
                echo "                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 158, $this->source), 'row');
                echo "
                                    ";
            } else {
                // line 160
                echo "                                        <div class=\"row\">
                                            <div class=\"col-2\"><span>";
                // line 161
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 161), "label", [], "any", false, false, true, 161), 161, $this->source)), "html", null, true);
                echo "</span></div>
                                            <div class=\"col-10\">
                                                ";
                // line 163
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 163, $this->source), 'widget');
                echo "
                                                ";
                // line 164
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 164, $this->source), 'errors');
                echo "
                                            </div>
                                        </div>
                                    ";
            }
            // line 168
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "                            </div>
                        </div>
                    </div>";
        // line 172
        if ( !(isset($context["is_confirm_page"]) || array_key_exists("is_confirm_page", $context) ? $context["is_confirm_page"] : (function () { throw new RuntimeError('Variable "is_confirm_page" does not exist.', 172, $this->source); })())) {
            // line 173
            echo "                        <!-- レイアウト設定 -->
                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                             title=\"";
            // line 179
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.content.page_layout"), "html", null, true);
            echo "\">
                                            <span class=\"card-title\">
                                                ";
            // line 181
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_layout__card_title"), "html", null, true);
            echo "
                                                <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-end\">
                                        <a data-bs-toggle=\"collapse\" href=\"#pageLayout\" aria-expanded=\"false\" aria-controls=\"pageLayout\">
                                            <i class=\"fa fa-angle-up fa-lg\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"pageLayout\">
                                <div class=\"card-body\">
                                    <!-- PC -->
                                    <div class=\"row mb-2\">
                                        <div class=\"col-2\"><span>";
            // line 197
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_pc"), "html", null, true);
            echo "</span></div>
                                        <div class=\"col-10\">
                                            ";
            // line 199
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), "PcLayout", [], "any", false, false, true, 199), 199, $this->source), 'widget');
            echo "
                                            ";
            // line 200
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "PcLayout", [], "any", false, false, true, 200), 200, $this->source), 'errors');
            echo "
                                        </div>
                                    </div>
                                    <!-- モバイル -->
                                    <div class=\"row mb-2\">
                                        <div class=\"col-2\"><span>";
            // line 205
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_mobile"), "html", null, true);
            echo "</span></div>
                                        <div class=\"col-10\">
                                            ";
            // line 207
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), "SpLayout", [], "any", false, false, true, 207), 207, $this->source), 'widget');
            echo "
                                            ";
            // line 208
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 208, $this->source); })()), "SpLayout", [], "any", false, false, true, 208), 208, $this->source), 'errors');
            echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- メタ設定 -->
                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            // line 219
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.content.page_meta"), "html", null, true);
            echo "\">
                                            <span class=\"card-title\">";
            // line 220
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_meta__card_title"), "html", null, true);
            echo "</span>
                                            <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-end\">
                                        <a data-bs-toggle=\"collapse\" href=\"#pageMeta\" aria-expanded=\"false\" aria-controls=\"pageMeta\">
                                            <i class=\"fa fa-angle-up fa-lg\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"pageMeta\">
                                <div class=\"card-body\">
                                    <!-- author -->
                                    <div class=\"row mb-2\">
                                        <div class=\"col-2\"><span>";
            // line 235
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_meta_author"), "html", null, true);
            echo "</span></div>
                                        <div class=\"col-10\">
                                            ";
            // line 237
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 237, $this->source); })()), "author", [], "any", false, false, true, 237), 237, $this->source), 'widget');
            echo "
                                            ";
            // line 238
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 238, $this->source); })()), "author", [], "any", false, false, true, 238), 238, $this->source), 'errors');
            echo "
                                        </div>
                                    </div>
                                    <!-- description -->
                                    <div class=\"row mb-2\">
                                        <div class=\"col-2\"><span>";
            // line 243
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_meta_description"), "html", null, true);
            echo "</span></div>
                                        <div class=\"col-10\">
                                            ";
            // line 245
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 245, $this->source); })()), "description", [], "any", false, false, true, 245), 245, $this->source), 'widget');
            echo "
                                            ";
            // line 246
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 246, $this->source); })()), "description", [], "any", false, false, true, 246), 246, $this->source), 'errors');
            echo "
                                        </div>
                                    </div>
                                    <!-- keyword -->
                                    <div class=\"row mb-2\">
                                        <div class=\"col-2\"><span>";
            // line 251
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_meta_keyword"), "html", null, true);
            echo "</span></div>
                                        <div class=\"col-10\">
                                            ";
            // line 253
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 253, $this->source); })()), "keyword", [], "any", false, false, true, 253), 253, $this->source), 'widget');
            echo "
                                            ";
            // line 254
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 254, $this->source); })()), "keyword", [], "any", false, false, true, 254), 254, $this->source), 'errors');
            echo "
                                        </div>
                                    </div>
                                    <!-- robot -->
                                    <div class=\"row mb-2\">
                                        <div class=\"col-2\"><span>";
            // line 259
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_meta_robot"), "html", null, true);
            echo "</span></div>
                                        <div class=\"col-10\">
                                            ";
            // line 261
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 261, $this->source); })()), "meta_robots", [], "any", false, false, true, 261), 261, $this->source), 'widget');
            echo "
                                            ";
            // line 262
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 262, $this->source); })()), "meta_robots", [], "any", false, false, true, 262), 262, $this->source), 'errors');
            echo "
                                        </div>
                                    </div>
                                    <!-- metatag -->
                                    <div class=\"row\">
                                        <div class=\"col-2\">
                                            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            // line 268
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.content.page_meta_tags"), "html", null, true);
            echo "\">
                                                <span>";
            // line 269
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_meta_metatag"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col-10\">
                                            ";
            // line 274
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 274, $this->source); })()), "meta_tags", [], "any", false, false, true, 274), 274, $this->source), 'widget');
            echo "
                                            ";
            // line 275
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 275, $this->source); })()), "meta_tags", [], "any", false, false, true, 275), 275, $this->source), 'errors');
            echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 282
        echo "</div>
            </div>
        </div>
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"";
        // line 290
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_content_page");
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                <span>";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_management"), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@admin/Content/page_edit.twig";
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
        return array (  668 => 299,  658 => 292,  653 => 290,  643 => 282,  633 => 275,  629 => 274,  621 => 269,  617 => 268,  608 => 262,  604 => 261,  599 => 259,  591 => 254,  587 => 253,  582 => 251,  574 => 246,  570 => 245,  565 => 243,  557 => 238,  553 => 237,  548 => 235,  530 => 220,  526 => 219,  512 => 208,  508 => 207,  503 => 205,  495 => 200,  491 => 199,  486 => 197,  467 => 181,  462 => 179,  454 => 173,  452 => 172,  448 => 169,  442 => 168,  435 => 164,  431 => 163,  426 => 161,  423 => 160,  417 => 158,  414 => 157,  411 => 156,  406 => 155,  400 => 151,  396 => 150,  392 => 149,  386 => 146,  381 => 144,  377 => 143,  366 => 136,  360 => 133,  354 => 132,  351 => 131,  344 => 127,  338 => 125,  336 => 124,  329 => 120,  324 => 118,  320 => 117,  309 => 110,  304 => 108,  297 => 107,  292 => 105,  286 => 104,  284 => 103,  277 => 99,  273 => 98,  264 => 92,  260 => 91,  254 => 88,  250 => 87,  234 => 74,  222 => 65,  214 => 64,  211 => 63,  201 => 62,  172 => 42,  165 => 37,  155 => 36,  139 => 28,  129 => 27,  110 => 23,  91 => 22,  80 => 11,  78 => 25,  75 => 19,  72 => 17,  70 => 16,  68 => 15,  66 => 14,  41 => 11,);
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

{# 設定メニューからも遷移するため、遷移元に応じてナビを変更 #}
{% if app.request.query.get('return') == 'tradelaw' %}
    {% set menus = ['setting', 'shop', 'shop_tradelaw'] %}
{% elseif app.request.query.get('return') == 'agreement' %}
    {% set menus = ['setting', 'shop', 'shop_agreement'] %}
{% else %}
    {% set menus = ['content', 'page'] %}
{% endif %}

{% block title %}{{ 'admin.content.page_management'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.content.contents_management'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block stylesheet %}
    <style>
        .ui-resizable-se {
            right: -3px;
            bottom: -3px;
        }
    </style>
{% endblock %}

{% block javascript %}
    <script>
        ace.require('ace/ext/language_tools');
        var editor = ace.edit('editor');
        editor.session.setMode('ace/mode/twig');
        editor.setTheme('ace/theme/tomorrow');
        editor.setValue('{{ form.tpl_data.vars.value|escape('js') }}');
        editor.setOptions({
            enableBasicAutocompletion: true,
            enableSnippets: true,
            enableLiveAutocompletion: true,
            showInvisibles: true
        });

        \$(\"#editor\").resizable({
            resize: function (event, ui) {
                editor.resize();
            }
        });

        \$('#content_page_form').on('submit', function(elem) {
            \$('#main_edit_tpl_data').val(editor.getValue());
        });
    </script>
{% endblock %}

{% block main %}
    <form id=\"content_page_form\" method=\"post\"
          action=\"{%- if page_id is not null %}{{ url('admin_content_page_edit', {id: page_id}) }}{% else %}{{ url('admin_content_page_new') }}{% endif -%}\">
        {{ form_widget(form._token) }}

        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <!-- ページ設定 -->
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\"><span class=\"card-title\">{{ 'admin.content.page__card_title'|trans }}</span></div>
                                <div class=\"col-4 text-end\">
                                    <a data-bs-toggle=\"collapse\" href=\"#pageDetail\" aria-expanded=\"false\" aria-controls=\"pageDetail\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"pageDetail\">
                            <div class=\"card-body\">
                                <!-- ページ名 -->
                                <div class=\"row mb-2\">
                                    <div class=\"col-2\">
                                        <span>{{ 'admin.content.page_name'|trans }}</span>
                                        <span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span>
                                    </div>
                                    <div class=\"col-10\">
                                        {{ form_widget(form.name) }}
                                        {{ form_errors(form.name) }}
                                    </div>
                                </div>
                                <!-- URL -->
                                <div class=\"row mb-2\">
                                    <div class=\"col-2\">
                                        <span>{{ 'admin.content.page_url'|trans }}</span>
                                        <span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span>
                                    </div>
                                    <div class=\"col-10\">
                                        <div class=\"row\">
                                            {% if is_user_data_page %}
                                                <div class=\"col-3 pe-0\"><span class=\"align-middle\">{{ url('homepage') }}{{ eccube_config.eccube_user_data_route }}/</span></div>
                                                <div class=\"col-9 ps-0\">{{ form_widget(form.url) }}</div>
                                            {% else %}
                                                <div class=\"col pe-0\"><span class=\"align-middle\">{{ app.request.schemeAndHttpHost }}{{ app.request.basePath }}{{ url }}</span></div>
                                                <div>{{ form_widget(form.url, { type : 'hidden' } ) }}</div>
                                            {% endif %}
                                            {{ form_errors(form.url) }}
                                        </div>
                                    </div>
                                </div>
                                <!-- ファイル名 -->
                                <div class=\"row mb-2\">
                                    <div class=\"col-2\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.content.page_file_name'|trans }}\">
                                            <span>{{ 'admin.content.page_file_name'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </div>
                                        <span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span>
                                    </div>
                                    <div class=\"col-10\">
                                        <div class=\"row\">
                                            {% if is_user_data_page %}
                                                <div class=\"col-3 pe-0 align-middle\"><span class=\"align-middle\">{{ template_path }}/</span></div>
                                                <div class=\"col-7 ps-0\">
                                                    {{ form_widget(form.file_name) }}
                                                </div>
                                                <div class=\"col-2 ps-0\">.twig</div>
                                            {% else %}
                                                <div class=\"col pe-0 align-middle\">
                                                    <span class=\"align-middle\">{{ template_path }}/{{ form.file_name.vars.value }}.twig</span>
                                                    <div>{{ form_widget(form.file_name, { type : 'hidden' } ) }}</div>
                                                </div>
                                            {% endif %}
                                            {{ form_errors(form.file_name) }}
                                        </div>
                                    </div>
                                </div>
                                <!-- コード -->
                                <div class=\"row mb-2\">
                                    <div class=\"col-2\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.content.page_source_code'|trans }}\">
                                            <span>{{ 'admin.content.page_source_code'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </div>
                                        <span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span>
                                    </div>
                                    <div class=\"col-10\">
                                        <div id=\"editor\" style=\"height: 480px\" class=\"form-control{{ has_errors(form.tpl_data) ? ' is-invalid' }}\"></div>
                                        <div style=\"display: none\">{{ form_widget(form.tpl_data) }}</div>
                                        {{ form_errors(form.tpl_data) }}
                                    </div>
                                </div>
                                {# エンティティ拡張の自動出力 #}
                                {% for f in form|filter(f => f.vars.eccube_form_options.auto_render) %}
                                    {% if f.vars.eccube_form_options.form_theme %}
                                        {% form_theme f f.vars.eccube_form_options.form_theme %}
                                        {{ form_row(f) }}
                                    {% else %}
                                        <div class=\"row\">
                                            <div class=\"col-2\"><span>{{ f.vars.label|trans }}</span></div>
                                            <div class=\"col-10\">
                                                {{ form_widget(f) }}
                                                {{ form_errors(f) }}
                                            </div>
                                        </div>
                                    {% endif %}
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                    {%- if not is_confirm_page %}
                        <!-- レイアウト設定 -->
                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                             title=\"{{ 'tooltip.content.page_layout'|trans }}\">
                                            <span class=\"card-title\">
                                                {{ 'admin.content.page_layout__card_title'|trans }}
                                                <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-end\">
                                        <a data-bs-toggle=\"collapse\" href=\"#pageLayout\" aria-expanded=\"false\" aria-controls=\"pageLayout\">
                                            <i class=\"fa fa-angle-up fa-lg\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"pageLayout\">
                                <div class=\"card-body\">
                                    <!-- PC -->
                                    <div class=\"row mb-2\">
                                        <div class=\"col-2\"><span>{{ 'admin.content.page_pc'|trans }}</span></div>
                                        <div class=\"col-10\">
                                            {{ form_widget(form.PcLayout) }}
                                            {{ form_errors(form.PcLayout) }}
                                        </div>
                                    </div>
                                    <!-- モバイル -->
                                    <div class=\"row mb-2\">
                                        <div class=\"col-2\"><span>{{ 'admin.content.page_mobile'|trans }}</span></div>
                                        <div class=\"col-10\">
                                            {{ form_widget(form.SpLayout) }}
                                            {{ form_errors(form.SpLayout) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- メタ設定 -->
                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.content.page_meta'|trans }}\">
                                            <span class=\"card-title\">{{ 'admin.content.page_meta__card_title'|trans }}</span>
                                            <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-end\">
                                        <a data-bs-toggle=\"collapse\" href=\"#pageMeta\" aria-expanded=\"false\" aria-controls=\"pageMeta\">
                                            <i class=\"fa fa-angle-up fa-lg\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"pageMeta\">
                                <div class=\"card-body\">
                                    <!-- author -->
                                    <div class=\"row mb-2\">
                                        <div class=\"col-2\"><span>{{ 'admin.content.page_meta_author'|trans }}</span></div>
                                        <div class=\"col-10\">
                                            {{ form_widget(form.author) }}
                                            {{ form_errors(form.author) }}
                                        </div>
                                    </div>
                                    <!-- description -->
                                    <div class=\"row mb-2\">
                                        <div class=\"col-2\"><span>{{ 'admin.content.page_meta_description'|trans }}</span></div>
                                        <div class=\"col-10\">
                                            {{ form_widget(form.description) }}
                                            {{ form_errors(form.description) }}
                                        </div>
                                    </div>
                                    <!-- keyword -->
                                    <div class=\"row mb-2\">
                                        <div class=\"col-2\"><span>{{ 'admin.content.page_meta_keyword'|trans }}</span></div>
                                        <div class=\"col-10\">
                                            {{ form_widget(form.keyword) }}
                                            {{ form_errors(form.keyword) }}
                                        </div>
                                    </div>
                                    <!-- robot -->
                                    <div class=\"row mb-2\">
                                        <div class=\"col-2\"><span>{{ 'admin.content.page_meta_robot'|trans }}</span></div>
                                        <div class=\"col-10\">
                                            {{ form_widget(form.meta_robots) }}
                                            {{ form_errors(form.meta_robots) }}
                                        </div>
                                    </div>
                                    <!-- metatag -->
                                    <div class=\"row\">
                                        <div class=\"col-2\">
                                            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.content.page_meta_tags'|trans }}\">
                                                <span>{{ 'admin.content.page_meta_metatag'|trans }}</span>
                                                <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col-10\">
                                            {{ form_widget(form.meta_tags) }}
                                            {{ form_errors(form.meta_tags) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endif -%}
                </div>
            </div>
        </div>
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"{{ url('admin_content_page') }}\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                <span>{{ 'admin.content.page_management'|trans }}</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">{{ 'admin.common.registration'|trans }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
{% endblock %}
", "@admin/Content/page_edit.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\admin\\Content\\page_edit.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 14, "set" => 15, "form_theme" => 25, "for" => 155);
        static $filters = array("escape" => 22, "trans" => 22, "filter" => 155);
        static $functions = array("url" => 64, "form_widget" => 65, "form_errors" => 92, "has_errors" => 149, "form_row" => 158);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'form_theme', 'for'],
                ['escape', 'trans', 'filter'],
                ['url', 'form_widget', 'form_errors', 'has_errors', 'form_row']
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
