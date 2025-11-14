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

/* @admin/Customer/index.twig */
class __TwigTemplate_0ec3a1cc99c8729a144ebdb8b54137fc extends Template
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
        // line 11
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Customer/index.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Customer/index.twig"));

        // line 13
        $context["menus"] = ["customer", "customer_master"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 18, $this->source); })()), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Customer/index.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_list"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_management"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    <form name=\"search_form\" id=\"search_form\" method=\"post\" action=\"\">
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 22, $this->source); })()), "_token", [], "any", false, false, true, 22), 22, $this->source), 'widget');
        echo "
        <div class=\"c-outsideBlock\">
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row justify-content-start\">
                    <div class=\"col-6\">
                        <div class=\"mb-2\">
                            <label class=\"col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"会員ID・メールアドレス・担当者・会社名\">";
        // line 28
        echo "会員ID・メールアドレス・担当者・会社名";
        echo "<i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                            ";
        // line 29
        $context["custom_labels"] = ["multi" => "会員ID・メールアドレス・担当者・会社名"];
        // line 30
        echo "                            ";
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
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_status"), "html", null, true);
        echo "</p>
                                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 43, $this->source); })()), "customer_status", [], "any", false, false, true, 43), 43, $this->source), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 44, $this->source); })()), "customer_status", [], "any", false, false, true, 44), 44, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>

<div class=\"row mb-2\">
    <div class=\"col\">
        <div>
            <label>";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.pref"), "html", null, true);
        echo "</label>
            <div class=\"row\">
                <div class=\"col-5\">
                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 56, $this->source); })()), "pref", [], "any", false, false, true, 56), 56, $this->source), 'widget');
        echo "
                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 57, $this->source); })()), "pref", [], "any", false, false, true, 57), 57, $this->source), 'errors');
        echo "
                </div>
                <div class=\"col-7\"></div>
            </div>
        </div>
    </div>
    <div class=\"col\">
        <div class=\"mb-3\">
            <label>";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
        echo "</label>
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 66, $this->source); })()), "phone_number", [], "any", false, false, true, 66), 66, $this->source), 'widget');
        echo "
            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 67, $this->source); })()), "phone_number", [], "any", false, false, true, 67), 67, $this->source), 'errors');
        echo "
        </div>
    </div>
</div>

                ";
        // line 73
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 73, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 73), "eccube_form_options", [], "any", false, false, true, 73), "auto_render", [], "any", false, false, true, 73); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 74
            echo "                    ";
            // line 75
            echo "                    <div class=\"row mb-2\">
                        ";
            // line 76
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 76), "eccube_form_options", [], "any", false, false, true, 76), "form_theme", [], "any", false, false, true, 76)) {
                // line 77
                echo "                            ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 77), "eccube_form_options", [], "any", false, false, true, 77), "form_theme", [], "any", false, false, true, 77)], true);
                // line 78
                echo "                            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 78, $this->source), 'row');
                echo "
                        ";
            } else {
                // line 80
                echo "                            <div class=\"col\">
                                <div class=\"mb-3\">
                                    <label>";
                // line 82
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 82), "label", [], "any", false, false, true, 82), 82, $this->source)), "html", null, true);
                echo "</label>
                                    ";
                // line 83
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 83, $this->source), 'widget');
                echo "
                                    ";
                // line 84
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 84, $this->source), 'errors');
                echo "
                                </div>
                            </div>
                        ";
            }
            // line 88
            echo "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "            </div>
            ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 91, $this->source); })()), "sortkey", [], "any", false, false, true, 91), 91, $this->source), 'widget', ["attr" => ["class" => "js-listSort-key"]]);
        echo "
            ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 92, $this->source); })()), "sorttype", [], "any", false, false, true, 92), 92, $this->source), 'widget', ["attr" => ["class" => "js-listSort-type"]]);
        echo "
        </div>
        <div class=\"c-outsideBlock__contents mb-5\">
            <button type=\"submit\" class=\"btn btn-ec-conversion px-5\">";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search"), "html", null, true);
        echo "</button>
            ";
        // line 96
        if ((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 96, $this->source); })())) {
            // line 97
            echo "                <span class=\"fw-bold ms-2\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_result", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 97, $this->source); })()), "totalItemCount", [], "any", false, false, true, 97)]), "html", null, true);
            echo "</span>
            ";
        }
        // line 99
        echo "        </div>
        <div class=\"c-outsideBlock__contents mb-5\">
            ";
        // line 101
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@admin/search_items.twig", ["form" => (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 101, $this->source); })()), "custom_labels" => (isset($context["custom_labels"]) || array_key_exists("custom_labels", $context) ? $context["custom_labels"] : (function () { throw new RuntimeError('Variable "custom_labels" does not exist.', 101, $this->source); })())], true, true);
        echo "
        </div>
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    ";
        // line 106
        if (((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 106, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 106, $this->source); })()), "totalItemCount", [], "any", false, false, true, 106))) {
            // line 107
            echo "                        <div class=\"row justify-content-between mb-2\">
                            <div class=\"col-6\"></div>

                            <div class=\"col-5 text-end\">
                                ";
            // line 112
            echo "                                <div class=\"d-inline-block me-2 align-bottom\">
                                    <select class=\"form-select\" onchange=\"location = this.value;\">
                                        ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pageMaxis"]) || array_key_exists("pageMaxis", $context) ? $context["pageMaxis"] : (function () { throw new RuntimeError('Variable "pageMaxis" does not exist.', 114, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pageMax"]) {
                // line 115
                echo "                                            <option ";
                if ((twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 115) == (isset($context["page_count"]) || array_key_exists("page_count", $context) ? $context["page_count"] : (function () { throw new RuntimeError('Variable "page_count" does not exist.', 115, $this->source); })()))) {
                    echo " selected ";
                }
                // line 116
                echo "                                                    value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customer_page", ["page_no" => 1, "page_count" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 116)]), "html", null, true);
                echo "\">
                                                ";
                // line 117
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.count", ["%count%" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 117)]), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMax'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "                                    </select>
                                </div>

                                <div class=\"d-inline-block\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a class=\"btn btn-ec-regular\" href=\"";
            // line 124
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_export");
            echo "\"><i class=\"fa fa-cloud-download me-1 text-secondary\"></i><span>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_download"), "html", null, true);
            echo "</span></a>
                                        <a class=\"btn btn-ec-regular\" href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_csv", ["id" => twig_constant("\\Eccube\\Entity\\Master\\CsvType::CSV_TYPE_CUSTOMER")]), "html", null, true);
            echo "\"><i class=\"fa fa-cog me-1 text-secondary\"></i><span>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv_setting"), "html", null, true);
            echo "</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card rounded border-0 mb-4 d-block\">
                            <div class=\"card-body p-0\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
<th class=\"border-top-0 pt-2 pb-3 ps-3 text-nowrap\">";
            // line 135
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_id"), "html", null, true);
            echo "<a href=\"#\" class=\"js-listSort\" data-sortkey=\"customer_id\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a></th>
<th class=\"border-top-0 pt-2 pb-3\">担当者</th>
<th class=\"border-top-0 pt-2 pb-3\">会社名</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">";
            // line 138
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">";
            // line 139
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.mail_address"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">&nbsp;</th>
                                        <th class=\"border-top-0 pt-2 pb-3 pe-3\">&nbsp;</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 145, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["Customer"]) {
                // line 146
                $context["ext"] = (((twig_get_attribute($this->env, $this->source, $context["Customer"], "customerExt", [], "any", true, true, true, 146) &&  !(null === twig_get_attribute($this->env, $this->source, $context["Customer"], "customerExt", [], "any", false, false, true, 146)))) ? (twig_get_attribute($this->env, $this->source, $context["Customer"], "customerExt", [], "any", false, false, true, 146)) : (null));
                // line 147
                echo "                                        <tr id=\"ex-customer-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Customer"], "id", [], "any", false, false, true, 147), 147, $this->source), "html", null, true);
                echo "\">
<td class=\"align-middle\"><a href=\"";
                // line 148
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Customer"], "id", [], "any", false, false, true, 148)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Customer"], "id", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
                echo "</a></td>
                                            <td class=\"align-middle\">";
                // line 149
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["ext"]) || array_key_exists("ext", $context) ? $context["ext"] : (function () { throw new RuntimeError('Variable "ext" does not exist.', 149, $this->source); })()), "picName01", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["ext"]) || array_key_exists("ext", $context) ? $context["ext"] : (function () { throw new RuntimeError('Variable "ext" does not exist.', 149, $this->source); })()), "picName02", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
                echo "</td>
                                            <td class=\"align-middle\">";
                // line 150
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Customer"], "company_name", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
                echo "</td>
                                            <td class=\"align-middle\">";
                // line 151
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Customer"], "phone_number", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
                echo "</td>
                                            <td class=\"align-middle\">";
                // line 152
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Customer"], "email", [], "any", false, false, true, 152), 152, $this->source), "html", null, true);
                echo "</td>
                                            <td class=\"align-middle\"></td>
                                            <td class=\"align-middle pe-3\">
                                                <div class=\"text-end\">
                                                    ";
                // line 156
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Customer"], "Status", [], "any", false, false, true, 156), "id", [], "any", false, false, true, 156) == twig_constant("Eccube\\Entity\\Master\\CustomerStatus::PROVISIONAL"))) {
                    // line 157
                    echo "                                                        <div class=\"px-1 d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.resend"), "html", null, true);
                    echo "\">
                                                            <a class=\"btn btn-ec-actionIcon\" data-bs-toggle=\"modal\" data-bs-target=\"#discontinuance_cus_";
                    // line 158
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Customer"], "id", [], "any", false, false, true, 158), 158, $this->source), "html", null, true);
                    echo "\">
                                                                <i class=\"fa fa-send fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                            </a>
                                                        </div>
                                                        <div class=\"modal fade\" id=\"discontinuance_cus_";
                    // line 162
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Customer"], "id", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
                    echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"discontinuance\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                    <div class=\"modal-header\">
                                                                        <h5 class=\"modal-title fw-bold\">";
                    // line 166
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.resend_confirm_title"), "html", null, true);
                    echo "</h5>
                                                                        <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                                                                        </button>
                                                                    </div>
                                                                    <div class=\"modal-body text-start\">
                                                                        <p class=\"text-start\">";
                    // line 172
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.resend_confirm_message"), "html", null, true);
                    echo "</p>
                                                                    </div>
                                                                    <div class=\"modal-footer\">
                                                                        <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">";
                    // line 175
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                    echo "</button>
                                                                        ";
                    // line 177
                    echo "                                                                        <a class=\"btn btn-ec-delete\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_resend", ["id" => twig_get_attribute($this->env, $this->source, $context["Customer"], "id", [], "any", false, false, true, 177)]), "html", null, true);
                    echo "\" ";
                    echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                    echo " data-method=\"get\" data-confirm=\"false\">
                                                                            ";
                    // line 178
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.send"), "html", null, true);
                    echo "
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ";
                }
                // line 185
                echo "                                                    <div class=\"px-1 d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                        <a class=\"btn btn-ec-actionIcon\" data-bs-toggle=\"modal\" data-bs-target=\"#discontinuance-";
                // line 186
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Customer"], "id", [], "any", false, false, true, 186), 186, $this->source), "html", null, true);
                echo "\">
                                                            <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                        </a>
                                                    </div>
                                                    <div class=\"modal fade\" id=\"discontinuance-";
                // line 190
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Customer"], "id", [], "any", false, false, true, 190), 190, $this->source), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"discontinuance\" aria-hidden=\"true\">
                                                        <div class=\"modal-dialog\" role=\"document\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h5 class=\"modal-title fw-bold\">
                                                                        ";
                // line 195
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
                echo "</h5>
                                                                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                                                                    </button>
                                                                </div>
                                                                <div class=\"modal-body text-start\">
                                                                    <p class=\"text-start\">
                                                                        ";
                // line 202
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["Customer"], "email", [], "any", false, false, true, 202)]), "html", null, true);
                echo "</p>
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">
                                                                        ";
                // line 206
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                echo "
                                                                    </button>
                                                                    <a href=\"";
                // line 208
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Customer"], "id", [], "any", false, false, true, 208)]), "html", null, true);
                echo "\" class=\"btn btn-ec-delete\"";
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo " data-method=\"delete\" data-confirm=\"false\">
                                                                        ";
                // line 209
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.text-end -->
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 219
            echo "                                    </tbody>
                                </table>
                                <div class=\"row justify-content-md-center pb-4 mb-4\">
                                    ";
            // line 222
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 222, $this->source); })()), "totalItemCount", [], "any", false, false, true, 222) > 0)) {
                // line 223
                echo "                                        ";
                $this->loadTemplate("@admin/pager.twig", "@admin/Customer/index.twig", 223)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 223, $this->source); })()), "paginationData", [], "any", false, false, true, 223), "routes" => "admin_customer_page"]));
                // line 224
                echo "                                    ";
            }
            // line 225
            echo "                                </div>
                            </div>
                        </div>
                    ";
        } elseif (        // line 228
(isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 228, $this->source); })())) {
            // line 229
            echo "                        <div class=\"card rounded border-0\">
                            <div class=\"card-body p-4\">
                                <div class=\"text-center text-muted mb-4 h5\">";
            // line 231
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_invalid_condition"), "html", null, true);
            echo "</div>
                                <div class=\"text-center text-muted\">";
            // line 232
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                            </div>
                        </div>
                    ";
        } else {
            // line 236
            echo "                        <div class=\"card rounded border-0\">
                            <div class=\"card-body p-4\">
                                <div class=\"text-center text-muted mb-4 h5\">";
            // line 238
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_no_result"), "html", null, true);
            echo "</div>
                                <div class=\"text-center text-muted\">";
            // line 239
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                                <div class=\"text-center text-muted\">";
            // line 240
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_advanced_search"), "html", null, true);
            echo "</div>
                            </div>
                        </div>
                    ";
        }
        // line 244
        echo "                </div>
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
        return "@admin/Customer/index.twig";
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
        return array (  605 => 244,  598 => 240,  594 => 239,  590 => 238,  586 => 236,  579 => 232,  575 => 231,  571 => 229,  569 => 228,  564 => 225,  561 => 224,  558 => 223,  556 => 222,  551 => 219,  535 => 209,  529 => 208,  524 => 206,  517 => 202,  507 => 195,  499 => 190,  492 => 186,  487 => 185,  477 => 178,  470 => 177,  466 => 175,  460 => 172,  451 => 166,  444 => 162,  437 => 158,  432 => 157,  430 => 156,  423 => 152,  419 => 151,  415 => 150,  409 => 149,  403 => 148,  398 => 147,  396 => 146,  392 => 145,  383 => 139,  379 => 138,  373 => 135,  358 => 125,  352 => 124,  345 => 119,  337 => 117,  332 => 116,  327 => 115,  323 => 114,  319 => 112,  313 => 107,  311 => 106,  303 => 101,  299 => 99,  293 => 97,  291 => 96,  287 => 95,  281 => 92,  277 => 91,  274 => 90,  267 => 88,  260 => 84,  256 => 83,  252 => 82,  248 => 80,  242 => 78,  239 => 77,  237 => 76,  234 => 75,  232 => 74,  227 => 73,  219 => 67,  215 => 66,  211 => 65,  200 => 57,  196 => 56,  190 => 53,  178 => 44,  174 => 43,  170 => 42,  162 => 37,  155 => 33,  150 => 31,  145 => 30,  143 => 29,  139 => 28,  130 => 22,  127 => 21,  117 => 20,  98 => 16,  79 => 15,  68 => 11,  66 => 18,  64 => 13,  39 => 11,);
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

{% set menus = ['customer', 'customer_master'] %}

{% block title %}{{ 'admin.customer.customer_list'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.customer.customer_management'|trans }}{% endblock %}

{% form_theme searchForm '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block main %}
    <form name=\"search_form\" id=\"search_form\" method=\"post\" action=\"\">
        {{ form_widget(searchForm._token) }}
        <div class=\"c-outsideBlock\">
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row justify-content-start\">
                    <div class=\"col-6\">
                        <div class=\"mb-2\">
                            <label class=\"col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"会員ID・メールアドレス・担当者・会社名\">{{ '会員ID・メールアドレス・担当者・会社名' }}<i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                            {% set custom_labels = {'multi': '会員ID・メールアドレス・担当者・会社名'} %}
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
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">{{ 'admin.customer.customer_status'|trans }}</p>
                                {{ form_widget(searchForm.customer_status, { 'label_attr': { 'class': 'checkbox-inline'}}) }}
                                {{ form_errors(searchForm.customer_status) }}
                            </div>
                        </div>
                    </div>
                </div>

<div class=\"row mb-2\">
    <div class=\"col\">
        <div>
            <label>{{ 'admin.common.pref'|trans }}</label>
            <div class=\"row\">
                <div class=\"col-5\">
                    {{ form_widget(searchForm.pref) }}
                    {{ form_errors(searchForm.pref) }}
                </div>
                <div class=\"col-7\"></div>
            </div>
        </div>
    </div>
    <div class=\"col\">
        <div class=\"mb-3\">
            <label>{{ 'admin.common.phone_number'|trans }}</label>
            {{ form_widget(searchForm.phone_number) }}
            {{ form_errors(searchForm.phone_number) }}
        </div>
    </div>
</div>

                {# エンティティ拡張の自動出力 #}
                {% for f in searchForm|filter(f => f.vars.eccube_form_options.auto_render) %}
                    {# TODO 1項目1行になるのを改善 #}
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
            {{ form_widget(searchForm.sortkey, {'attr': {'class': 'js-listSort-key'}}) }}
            {{ form_widget(searchForm.sorttype, {'attr': {'class': 'js-listSort-type'}}) }}
        </div>
        <div class=\"c-outsideBlock__contents mb-5\">
            <button type=\"submit\" class=\"btn btn-ec-conversion px-5\">{{ 'admin.common.search'|trans }}</button>
            {% if pagination %}
                <span class=\"fw-bold ms-2\">{{ 'admin.common.search_result'|trans({'%count%':pagination.totalItemCount}) }}</span>
            {% endif %}
        </div>
        <div class=\"c-outsideBlock__contents mb-5\">
            {{ include('@admin/search_items.twig', { 'form': searchForm, 'custom_labels': custom_labels }, ignore_missing = true) }}
        </div>
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    {% if pagination and pagination.totalItemCount %}
                        <div class=\"row justify-content-between mb-2\">
                            <div class=\"col-6\"></div>

                            <div class=\"col-5 text-end\">
                                {#Dropdown page count#}
                                <div class=\"d-inline-block me-2 align-bottom\">
                                    <select class=\"form-select\" onchange=\"location = this.value;\">
                                        {% for pageMax in pageMaxis %}
                                            <option {% if pageMax.name == page_count %} selected {% endif %}
                                                    value=\"{{ path('admin_customer_page', {'page_no': 1, 'page_count': pageMax.name }) }}\">
                                                {{ 'admin.common.count'|trans({ '%count%': pageMax.name }) }}</option>
                                        {% endfor %}
                                    </select>
                                </div>

                                <div class=\"d-inline-block\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a class=\"btn btn-ec-regular\" href=\"{{ url('admin_customer_export') }}\"><i class=\"fa fa-cloud-download me-1 text-secondary\"></i><span>{{ 'admin.common.csv_download'|trans }}</span></a>
                                        <a class=\"btn btn-ec-regular\" href=\"{{ url('admin_setting_shop_csv', { id : constant('\\\\Eccube\\\\Entity\\\\Master\\\\CsvType::CSV_TYPE_CUSTOMER') }) }}\"><i class=\"fa fa-cog me-1 text-secondary\"></i><span>{{ 'admin.setting.shop.csv_setting'|trans }}</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card rounded border-0 mb-4 d-block\">
                            <div class=\"card-body p-0\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
<th class=\"border-top-0 pt-2 pb-3 ps-3 text-nowrap\">{{ 'admin.customer.customer_id'|trans }}<a href=\"#\" class=\"js-listSort\" data-sortkey=\"customer_id\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a></th>
<th class=\"border-top-0 pt-2 pb-3\">担当者</th>
<th class=\"border-top-0 pt-2 pb-3\">会社名</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">{{ 'admin.common.phone_number'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">{{ 'admin.common.mail_address'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">&nbsp;</th>
                                        <th class=\"border-top-0 pt-2 pb-3 pe-3\">&nbsp;</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for Customer in pagination %}
{% set ext = Customer.customerExt ?? null %}
                                        <tr id=\"ex-customer-{{ Customer.id }}\">
<td class=\"align-middle\"><a href=\"{{ url('admin_customer_edit', { 'id': Customer.id}) }}\">{{ Customer.id }}</a></td>
                                            <td class=\"align-middle\">{{ ext.picName01 }}&nbsp;{{ ext.picName02 }}</td>
                                            <td class=\"align-middle\">{{ Customer.company_name }}</td>
                                            <td class=\"align-middle\">{{ Customer.phone_number }}</td>
                                            <td class=\"align-middle\">{{ Customer.email }}</td>
                                            <td class=\"align-middle\"></td>
                                            <td class=\"align-middle pe-3\">
                                                <div class=\"text-end\">
                                                    {% if Customer.Status.id == constant('Eccube\\\\Entity\\\\Master\\\\CustomerStatus::PROVISIONAL') %}
                                                        <div class=\"px-1 d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'admin.customer.resend'|trans }}\">
                                                            <a class=\"btn btn-ec-actionIcon\" data-bs-toggle=\"modal\" data-bs-target=\"#discontinuance_cus_{{ Customer.id }}\">
                                                                <i class=\"fa fa-send fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                            </a>
                                                        </div>
                                                        <div class=\"modal fade\" id=\"discontinuance_cus_{{ Customer.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"discontinuance\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                    <div class=\"modal-header\">
                                                                        <h5 class=\"modal-title fw-bold\">{{ 'admin.customer.resend_confirm_title'|trans }}</h5>
                                                                        <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                                                                        </button>
                                                                    </div>
                                                                    <div class=\"modal-body text-start\">
                                                                        <p class=\"text-start\">{{ 'admin.customer.resend_confirm_message'|trans }}</p>
                                                                    </div>
                                                                    <div class=\"modal-footer\">
                                                                        <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}</button>
                                                                        {# TODO: CSSの変更は別タスクでやります #}
                                                                        <a class=\"btn btn-ec-delete\" href=\"{{ url('admin_customer_resend', {'id' : Customer.id}) }}\" {{ csrf_token_for_anchor() }} data-method=\"get\" data-confirm=\"false\">
                                                                            {{ 'admin.common.send'|trans }}
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    {% endif %}
                                                    <div class=\"px-1 d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'admin.common.delete'|trans }}\">
                                                        <a class=\"btn btn-ec-actionIcon\" data-bs-toggle=\"modal\" data-bs-target=\"#discontinuance-{{ Customer.id }}\">
                                                            <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                        </a>
                                                    </div>
                                                    <div class=\"modal fade\" id=\"discontinuance-{{ Customer.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"discontinuance\" aria-hidden=\"true\">
                                                        <div class=\"modal-dialog\" role=\"document\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h5 class=\"modal-title fw-bold\">
                                                                        {{ 'admin.common.delete_modal__title'|trans }}</h5>
                                                                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                                                                    </button>
                                                                </div>
                                                                <div class=\"modal-body text-start\">
                                                                    <p class=\"text-start\">
                                                                        {{ 'admin.common.delete_modal__message'|trans({ '%name%' : Customer.email }) }}</p>
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">
                                                                        {{ 'admin.common.cancel'|trans }}
                                                                    </button>
                                                                    <a href=\"{{ url('admin_customer_delete', {'id' : Customer.id}) }}\" class=\"btn btn-ec-delete\"{{ csrf_token_for_anchor() }} data-method=\"delete\" data-confirm=\"false\">
                                                                        {{ 'admin.common.delete'|trans }}
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.text-end -->
                                            </td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                                <div class=\"row justify-content-md-center pb-4 mb-4\">
                                    {% if pagination.totalItemCount > 0 %}
                                        {% include \"@admin/pager.twig\" with { 'pages' : pagination.paginationData, 'routes' : 'admin_customer_page' } %}
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
", "@admin/Customer/index.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\template\\admin\\Customer\\index.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18, "for" => 73, "if" => 76, "include" => 223);
        static $filters = array("escape" => 15, "trans" => 15, "filter" => 73);
        static $functions = array("form_widget" => 22, "form_errors" => 31, "form_row" => 78, "include" => 101, "path" => 116, "url" => 124, "constant" => 125, "csrf_token_for_anchor" => 177);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'for', 'if', 'include'],
                ['escape', 'trans', 'filter'],
                ['form_widget', 'form_errors', 'form_row', 'include', 'path', 'url', 'constant', 'csrf_token_for_anchor']
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
