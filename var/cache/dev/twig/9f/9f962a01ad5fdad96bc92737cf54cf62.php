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

/* @admin/Setting/System/login_history.twig */
class __TwigTemplate_98541386b9e0b55b3644165b00022a26 extends Template
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
        // line 12
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/System/login_history.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/System/login_history.twig"));

        // line 14
        $context["menus"] = ["setting", "system", "login_history"];
        // line 19
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 19, $this->source); })()), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 12
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/System/login_history.twig", 12);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.login_history"), "html", null, true);
        
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 21
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 22
        echo "<form name=\"search_form\" id=\"search_form\" method=\"post\" action=\"\">
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 23, $this->source); })()), "_token", [], "any", false, false, true, 23), 23, $this->source), 'widget');
        echo "
    <div class=\"c-outsideBlock\">
        <div class=\"c-outsideBlock__contents\">
            <div class=\"row justify-content-start\">
                <div class=\"col-6\">
                    <div class=\"mb-2\">
                        <label class=\"col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.system.login_history.multi_search_label"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.login_history.multi_search_label"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 30, $this->source); })()), "multi", [], "any", false, false, true, 30), 30, $this->source), 'widget');
        echo "
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 31, $this->source); })()), "multi", [], "any", false, false, true, 31), 31, $this->source), 'errors');
        echo "
                    </div>
                    <div class=\"d-inline-block mb-3 collapsed\" data-bs-toggle=\"collapse\" href=\"#searchDetail\" aria-expanded=\"false\" aria-controls=\"searchDetail\"><a><i class=\"fa fw-bold me-1 fa-plus-square-o\"></i><span class=\"fw-bold\">";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_detail"), "html", null, true);
        echo "</span></a></div>
                </div>
            </div>
        </div>
        <div class=\"c-subContents ec-collapse collapse";
        // line 37
        echo (((isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 37, $this->source); })())) ? (" show") : (""));
        echo "\" id=\"searchDetail\">
            <div class=\"row mb-2\">
                <div class=\"col\">
                    <div>
                        <label>";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.login_history.user_name"), "html", null, true);
        echo "</label>
                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 42, $this->source); })()), "user_name", [], "any", false, false, true, 42), 42, $this->source), 'widget');
        echo "
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 43, $this->source); })()), "user_name", [], "any", false, false, true, 43), 43, $this->source), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"col\">
                    <div>
                        <label>";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.login_history.client_ip"), "html", null, true);
        echo "</label>
                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 49, $this->source); })()), "client_ip", [], "any", false, false, true, 49), 49, $this->source), 'widget');
        echo "
                        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 50, $this->source); })()), "client_ip", [], "any", false, false, true, 50), 50, $this->source), 'errors');
        echo "
                    </div>
                </div>
            </div>

            <div class=\"row mb-2\">
                <div class=\"col\">
                    <div>
                        <label>";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.login_history.create_date"), "html", null, true);
        echo "</label>
                        <div class=\"row align-items-center\">
                            <div class=\"col\">
                                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 61, $this->source); })()), "create_datetime_start", [], "any", false, false, true, 61), 61, $this->source), 'widget');
        echo "
                                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 62, $this->source); })()), "create_datetime_start", [], "any", false, false, true, 62), 62, $this->source), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto text-center\"><span>";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span></div>
                            <div class=\"col\">
                                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 66, $this->source); })()), "create_datetime_end", [], "any", false, false, true, 66), 66, $this->source), 'widget');
        echo "
                                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 67, $this->source); })()), "create_datetime_end", [], "any", false, false, true, 67), 67, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div>
                        <label>";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.login_history.status"), "html", null, true);
        echo "</label>
                        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 75, $this->source); })()), "Status", [], "any", false, false, true, 75), 75, $this->source), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 76, $this->source); })()), "Status", [], "any", false, false, true, 76), 76, $this->source), 'errors');
        echo "
                    </div>
                </div>
            </div>

            ";
        // line 82
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 82, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 82), "eccube_form_options", [], "any", false, false, true, 82), "auto_render", [], "any", false, false, true, 82); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 83
            echo "                <div class=\"row mb-2\">
                    ";
            // line 84
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 84), "eccube_form_options", [], "any", false, false, true, 84), "form_theme", [], "any", false, false, true, 84)) {
                // line 85
                echo "                        ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 85), "eccube_form_options", [], "any", false, false, true, 85), "form_theme", [], "any", false, false, true, 85)], true);
                // line 86
                echo "                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 86, $this->source), 'row');
                echo "
                    ";
            } else {
                // line 88
                echo "                        <div class=\"col\">
                            <div class=\"mb-3\">
                                <label>";
                // line 90
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 90), "label", [], "any", false, false, true, 90), 90, $this->source)), "html", null, true);
                echo "</label>
                                ";
                // line 91
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 91, $this->source), 'widget');
                echo "
                                ";
                // line 92
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 92, $this->source), 'errors');
                echo "
                            </div>
                        </div>
                    ";
            }
            // line 96
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "        </div>
    </div>
    <div class=\"c-outsideBlock__contents mb-5\">
        <button type=\"submit\" class=\"btn btn-ec-conversion px-5\">";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search"), "html", null, true);
        echo "</button>
        ";
        // line 102
        if ((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 102, $this->source); })())) {
            // line 103
            echo "            <span class=\"fw-bold ms-2\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_result", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 103, $this->source); })()), "totalItemCount", [], "any", false, false, true, 103)]), "html", null, true);
            echo "</span>
        ";
        }
        // line 105
        echo "    </div>
    <div class=\"c-outsideBlock__contents mb-5\">
        ";
        // line 107
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@admin/search_items.twig", ["form" => (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 107, $this->source); })())], true, true);
        echo "
    </div>
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                ";
        // line 112
        if (((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 112, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 112, $this->source); })()), "totalItemCount", [], "any", false, false, true, 112))) {
            // line 113
            echo "                    <div class=\"row justify-content-between mb-2\">
                        <div class=\"col-6\"></div>

                        <div class=\"col-5 text-end\">
                            ";
            // line 118
            echo "                            <div class=\"d-inline-block me-2\">
                                <select class=\"form-select\" onchange=\"location = this.value;\">
                                    ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pageMaxis"]) || array_key_exists("pageMaxis", $context) ? $context["pageMaxis"] : (function () { throw new RuntimeError('Variable "pageMaxis" does not exist.', 120, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pageMax"]) {
                // line 121
                echo "                                        <option ";
                if ((twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 121) == (isset($context["page_count"]) || array_key_exists("page_count", $context) ? $context["page_count"] : (function () { throw new RuntimeError('Variable "page_count" does not exist.', 121, $this->source); })()))) {
                    echo " selected ";
                }
                // line 122
                echo "                                                value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_setting_system_login_history_page", ["page_no" => 1, "page_count" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 122)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.count", ["%count%" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 122)]), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMax'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
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
                                        <th class=\"border-top-0 pt-2 pb-3 ps-3\">";
            // line 136
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.id"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">";
            // line 137
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.login_history.user_name"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-3 ps-3\">";
            // line 138
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.login_history.client_ip"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">";
            // line 139
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.login_history.create_date"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">";
            // line 140
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.login_history.status"), "html", null, true);
            echo "</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
            // line 144
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 144, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["LoginHistory"]) {
                // line 145
                echo "                                    <tr>
                                        <td class=\"align-middle ps-3\">
                                            ";
                // line 147
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["LoginHistory"], "id", [], "any", false, false, true, 147), 147, $this->source), "html", null, true);
                echo "
                                        </td>
                                        <td class=\"align-middle\">
                                            ";
                // line 150
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["LoginHistory"], "user_name", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
                echo "
                                        </td>
                                        <td class=\"align-middle\">
                                            ";
                // line 153
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["LoginHistory"], "client_ip", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
                echo "
                                        </td>
                                        <td class=\"align-middle\">
                                            ";
                // line 156
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getDateFormatFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["LoginHistory"], "create_date", [], "any", false, false, true, 156), 156, $this->source), "", "Y/m/d H:i:s"), "html", null, true);
                echo "
                                        </td>
                                        <td class=\"align-middle\">
                                            <span class=\"badge ";
                // line 159
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["LoginHistory"], "Status", [], "any", false, false, true, 159), "id", [], "any", false, false, true, 159) == twig_constant("Eccube\\Entity\\Master\\LoginHistoryStatus::SUCCESS"))) {
                    echo "badge-ec-blue";
                } else {
                    echo "badge-ec-red";
                }
                echo "\">
                                                ";
                // line 160
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["LoginHistory"], "Status", [], "any", false, false, true, 160), 160, $this->source), "html", null, true);
                echo "
                                            </span>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['LoginHistory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "                                </tbody>
                            </table>
                            <div class=\"row justify-content-md-center mb-4\">
                                ";
            // line 168
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 168, $this->source); })()), "totalItemCount", [], "any", false, false, true, 168) > 0)) {
                // line 169
                echo "                                    ";
                $this->loadTemplate("@admin/pager.twig", "@admin/Setting/System/login_history.twig", 169)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 169, $this->source); })()), "paginationData", [], "any", false, false, true, 169), "routes" => "admin_setting_system_login_history_page"]));
                // line 170
                echo "                                ";
            }
            // line 171
            echo "                            </div>
                        </div>
                    </div>
                ";
        } elseif (        // line 174
(isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 174, $this->source); })())) {
            // line 175
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 177
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_invalid_condition"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 178
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                ";
        } else {
            // line 182
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 184
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_no_result"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 185
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 186
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_advanced_search"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                ";
        }
        // line 190
        echo "            </div>
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
        return "@admin/Setting/System/login_history.twig";
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
        return array (  501 => 190,  494 => 186,  490 => 185,  486 => 184,  482 => 182,  475 => 178,  471 => 177,  467 => 175,  465 => 174,  460 => 171,  457 => 170,  454 => 169,  452 => 168,  447 => 165,  436 => 160,  428 => 159,  422 => 156,  416 => 153,  410 => 150,  404 => 147,  400 => 145,  396 => 144,  389 => 140,  385 => 139,  381 => 138,  377 => 137,  373 => 136,  359 => 124,  348 => 122,  343 => 121,  339 => 120,  335 => 118,  329 => 113,  327 => 112,  319 => 107,  315 => 105,  309 => 103,  307 => 102,  303 => 101,  298 => 98,  291 => 96,  284 => 92,  280 => 91,  276 => 90,  272 => 88,  266 => 86,  263 => 85,  261 => 84,  258 => 83,  253 => 82,  245 => 76,  241 => 75,  237 => 74,  227 => 67,  223 => 66,  218 => 64,  213 => 62,  209 => 61,  203 => 58,  192 => 50,  188 => 49,  184 => 48,  176 => 43,  172 => 42,  168 => 41,  161 => 37,  154 => 33,  149 => 31,  145 => 30,  139 => 29,  130 => 23,  127 => 22,  117 => 21,  98 => 17,  79 => 16,  68 => 12,  66 => 19,  64 => 14,  39 => 12,);
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

{% set menus = ['setting', 'system', 'login_history'] %}

{% block title %}{{ 'admin.setting.system.login_history'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.setting.system'|trans }}{% endblock %}

{% form_theme searchForm '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block main %}
<form name=\"search_form\" id=\"search_form\" method=\"post\" action=\"\">
    {{ form_widget(searchForm._token) }}
    <div class=\"c-outsideBlock\">
        <div class=\"c-outsideBlock__contents\">
            <div class=\"row justify-content-start\">
                <div class=\"col-6\">
                    <div class=\"mb-2\">
                        <label class=\"col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.setting.system.login_history.multi_search_label'|trans }}\">{{ 'admin.setting.system.login_history.multi_search_label'|trans }}<i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                        {{ form_widget(searchForm.multi) }}
                        {{ form_errors(searchForm.multi) }}
                    </div>
                    <div class=\"d-inline-block mb-3 collapsed\" data-bs-toggle=\"collapse\" href=\"#searchDetail\" aria-expanded=\"false\" aria-controls=\"searchDetail\"><a><i class=\"fa fw-bold me-1 fa-plus-square-o\"></i><span class=\"fw-bold\">{{ 'admin.common.search_detail'|trans }}</span></a></div>
                </div>
            </div>
        </div>
        <div class=\"c-subContents ec-collapse collapse{{ has_errors ? ' show' }}\" id=\"searchDetail\">
            <div class=\"row mb-2\">
                <div class=\"col\">
                    <div>
                        <label>{{ 'admin.setting.system.login_history.user_name'|trans }}</label>
                        {{ form_widget(searchForm.user_name) }}
                        {{ form_errors(searchForm.user_name) }}
                    </div>
                </div>
                <div class=\"col\">
                    <div>
                        <label>{{ 'admin.setting.system.login_history.client_ip'|trans }}</label>
                        {{ form_widget(searchForm.client_ip) }}
                        {{ form_errors(searchForm.client_ip) }}
                    </div>
                </div>
            </div>

            <div class=\"row mb-2\">
                <div class=\"col\">
                    <div>
                        <label>{{ 'admin.setting.system.login_history.create_date'|trans }}</label>
                        <div class=\"row align-items-center\">
                            <div class=\"col\">
                                {{ form_widget(searchForm.create_datetime_start) }}
                                {{ form_errors(searchForm.create_datetime_start) }}
                            </div>
                            <div class=\"col-auto text-center\"><span>{{ 'admin.common.separator__range'|trans }}</span></div>
                            <div class=\"col\">
                                {{ form_widget(searchForm.create_datetime_end) }}
                                {{ form_errors(searchForm.create_datetime_end) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div>
                        <label>{{ 'admin.setting.system.login_history.status'|trans }}</label>
                        {{ form_widget(searchForm.Status, { 'label_attr': { 'class': 'checkbox-inline'}}) }}
                        {{ form_errors(searchForm.Status) }}
                    </div>
                </div>
            </div>

            {# エンティティ拡張の自動出力 #}
            {% for f in searchForm|filter(f => f.vars.eccube_form_options.auto_render) %}
                <div class=\"row mb-2\">
                    {% if f.vars.eccube_form_options.form_theme %}
                        {% form_theme f f.vars.eccube_form_options.form_theme %}
                        {{ form_row(f) }}
                    {% else %}
                        <div class=\"col\">
                            <div class=\"mb-3\">
                                <label>{{ f.vars.label|trans }}</label>
                                {{ form_widget(f) }}
                                {{ form_errors(f) }}
                            </div>
                        </div>
                    {% endif %}
                </div>
            {% endfor %}
        </div>
    </div>
    <div class=\"c-outsideBlock__contents mb-5\">
        <button type=\"submit\" class=\"btn btn-ec-conversion px-5\">{{ 'admin.common.search'|trans }}</button>
        {% if pagination %}
            <span class=\"fw-bold ms-2\">{{ 'admin.common.search_result'|trans({'%count%':pagination.totalItemCount}) }}</span>
        {% endif %}
    </div>
    <div class=\"c-outsideBlock__contents mb-5\">
        {{ include('@admin/search_items.twig', { 'form': searchForm }, ignore_missing = true) }}
    </div>
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                {% if pagination and pagination.totalItemCount %}
                    <div class=\"row justify-content-between mb-2\">
                        <div class=\"col-6\"></div>

                        <div class=\"col-5 text-end\">
                            {#Dropdown page count#}
                            <div class=\"d-inline-block me-2\">
                                <select class=\"form-select\" onchange=\"location = this.value;\">
                                    {% for pageMax in pageMaxis %}
                                        <option {% if pageMax.name == page_count %} selected {% endif %}
                                                value=\"{{ path('admin_setting_system_login_history_page', {'page_no': 1, 'page_count': pageMax.name }) }}\">{{ 'admin.common.count'|trans({ '%count%': pageMax.name }) }}</option>
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
                                        <th class=\"border-top-0 pt-2 pb-3 ps-3\">{{ 'admin.common.id'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">{{ 'admin.setting.system.login_history.user_name'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-3 ps-3\">{{ 'admin.setting.system.login_history.client_ip'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">{{ 'admin.setting.system.login_history.create_date'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">{{ 'admin.setting.system.login_history.status'|trans }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {% for LoginHistory in pagination %}
                                    <tr>
                                        <td class=\"align-middle ps-3\">
                                            {{ LoginHistory.id }}
                                        </td>
                                        <td class=\"align-middle\">
                                            {{ LoginHistory.user_name }}
                                        </td>
                                        <td class=\"align-middle\">
                                            {{ LoginHistory.client_ip }}
                                        </td>
                                        <td class=\"align-middle\">
                                            {{ LoginHistory.create_date|date_format('','Y/m/d H:i:s') }}
                                        </td>
                                        <td class=\"align-middle\">
                                            <span class=\"badge {% if LoginHistory.Status.id == constant('Eccube\\\\Entity\\\\Master\\\\LoginHistoryStatus::SUCCESS') %}badge-ec-blue{% else %}badge-ec-red{% endif %}\">
                                                {{ LoginHistory.Status }}
                                            </span>
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                            <div class=\"row justify-content-md-center mb-4\">
                                {% if pagination.totalItemCount > 0 %}
                                    {% include \"@admin/pager.twig\" with { 'pages' : pagination.paginationData, 'routes' : 'admin_setting_system_login_history_page' } %}
                                {% endif %}
                            </div>
                        </div>
                    </div>
                {% elseif has_errors %}
                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">{{ 'admin.common.search_invalid_condition'|trans }}</div>
                            <div class=\"text-center text-muted\">{{ 'admin.common.search_try_change_condition'|trans }}</div>
                        </div>
                    </div>
                {% else %}
                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">{{ 'admin.common.search_no_result'|trans }}</div>
                            <div class=\"text-center text-muted\">{{ 'admin.common.search_try_change_condition'|trans }}</div>
                            <div class=\"text-center text-muted\">{{ 'admin.common.search_try_advanced_search'|trans }}</div>
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
</form>
{% endblock %}
", "@admin/Setting/System/login_history.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\admin\\Setting\\System\\login_history.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 14, "form_theme" => 19, "for" => 82, "if" => 84, "include" => 169);
        static $filters = array("escape" => 16, "trans" => 16, "filter" => 82, "date_format" => 156);
        static $functions = array("form_widget" => 23, "form_errors" => 31, "form_row" => 86, "include" => 107, "path" => 122, "constant" => 159);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'for', 'if', 'include'],
                ['escape', 'trans', 'filter', 'date_format'],
                ['form_widget', 'form_errors', 'form_row', 'include', 'path', 'constant']
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
