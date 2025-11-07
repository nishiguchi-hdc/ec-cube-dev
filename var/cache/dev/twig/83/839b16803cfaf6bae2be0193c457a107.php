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

/* MailMagazine42/Resource/template/admin/index.twig */
class __TwigTemplate_3dcc0e9b10940114dcc3105f19bea642 extends Template
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
        // line 14
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MailMagazine42/Resource/template/admin/index.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MailMagazine42/Resource/template/admin/index.twig"));

        // line 16
        $context["menus"] = ["mailmagazine", "mailmagazine"];
        // line 21
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 21, $this->source); })()), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 14
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "MailMagazine42/Resource/template/admin/index.twig", 14);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.index.title"), "html", null, true);
        
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.title"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 23
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 24
        echo "<script>
\$(function() {

    var inputDate = document.createElement('input');
    inputDate.setAttribute('type', 'date');
    if (inputDate.type !== 'date') {
        \$('input[id\$=_date_start]').datetimepicker({
            locale: 'ja',
            format: 'YYYY-MM-DD',
            useCurrent: false,
            showTodayButton: true
        });

        \$('input[id\$=_date_end]').datetimepicker({
            locale: 'ja',
            format: 'YYYY-MM-DD',
            useCurrent: false,
            showTodayButton: true
        });

    \$('#admin_search_customer_birth_start').datetimepicker({
            locale: 'ja',
            format: 'YYYY-MM-DD',
            useCurrent: false,
            showTodayButton: true
        });

    \$('#admin_search_customer_birth_end').datetimepicker({
            locale: 'ja',
            format: 'YYYY-MM-DD',
            useCurrent: false,
            showTodayButton: true
        });

    \$('#admin_search_customer_last_buy_start').datetimepicker({
            locale: 'ja',
            format: 'YYYY-MM-DD',
            useCurrent: false,
            showTodayButton: true
        });

    \$('#admin_search_customer_last_buy_end').datetimepicker({
            locale: 'ja',
            format: 'YYYY-MM-DD',
            useCurrent: false,
            showTodayButton: true
        });
    }
});

function fnChangeActionSubmit(action) {
    document.search_form.action = action;
    document.search_form.submit();
}
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 81
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 82
        echo "<form name=\"search_form\" id=\"search_form\" method=\"post\" action=\"\">
    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 83, $this->source); })()), "_token", [], "any", false, false, true, 83), 83, $this->source), 'widget');
        echo "
    <div class=\"c-outsideBlock\">
        <div class=\"c-outsideBlock__contents\">
            <div class=\"row justify-content-start\">
                <div class=\"col-6\">
                    <div class=\"mb-2\">
                        <label class=\"col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.multi_search_label"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.multi_search_label"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                        ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 90, $this->source); })()), "multi", [], "any", false, false, true, 90), 90, $this->source), 'widget');
        echo "
                        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 91, $this->source); })()), "multi", [], "any", false, false, true, 91), 91, $this->source), 'errors');
        echo "
                    </div>
                    <div class=\"d-inline-block mb-3 collapsed\" data-bs-toggle=\"collapse\" href=\"#searchDetail\" aria-expanded=\"false\" aria-controls=\"searchDetail\"><a><i class=\"fa fw-bold me-1 fa-plus-square-o\"></i><span class=\"fw-bold\">";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_detail"), "html", null, true);
        echo "</span></a></div>
                </div>
            </div>
        </div>
        <div class=\"c-subContents ec-collapse collapse";
        // line 97
        echo (((isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 97, $this->source); })())) ? (" show") : (""));
        echo "\" id=\"searchDetail\">
            <div class=\"row mb-2\">
                <div class=\"col\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <p class=\"col-form-label\">";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_status"), "html", null, true);
        echo "</p>
                            ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 103, $this->source); })()), "customer_status", [], "any", false, false, true, 103), 103, $this->source), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                            ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 104, $this->source); })()), "customer_status", [], "any", false, false, true, 104), 104, $this->source), 'errors');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div>
                        <label>";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_product"), "html", null, true);
        echo "</label>
                        ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 111, $this->source); })()), "buy_product_name", [], "any", false, false, true, 111), 111, $this->source), 'widget');
        echo "
                        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 112, $this->source); })()), "buy_product_name", [], "any", false, false, true, 112), 112, $this->source), 'errors');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row mb-2\">
                <div class=\"col\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <p class=\"col-form-label\">";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.gender"), "html", null, true);
        echo "</p>
                            ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 121, $this->source); })()), "sex", [], "any", false, false, true, 121), 121, $this->source), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                            ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 122, $this->source); })()), "sex", [], "any", false, false, true, 122), 122, $this->source), 'errors');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div>
                        <label class=\"col-form-label\">";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_price"), "html", null, true);
        echo "</label>
                        <div class=\"row align-items-center\">
                            <div class=\"col\">
                                ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 131, $this->source); })()), "buy_total_start", [], "any", false, false, true, 131), 131, $this->source), 'widget');
        echo "
                                ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 132, $this->source); })()), "buy_total_start", [], "any", false, false, true, 132), 132, $this->source), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto text-center\"><span>";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span></div>
                            <div class=\"col\">
                                ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 136, $this->source); })()), "buy_total_end", [], "any", false, false, true, 136), 136, $this->source), 'widget');
        echo "
                                ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 137, $this->source); })()), "buy_total_end", [], "any", false, false, true, 137), 137, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row mb-2\">
                <div class=\"col\">
                    <div>
                        <label class=\"col-form-label\">";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.birth_month"), "html", null, true);
        echo "</label>
                        <div class=\"row\">
                            <div class=\"col-5\">
                                ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 149, $this->source); })()), "birth_month", [], "any", false, false, true, 149), 149, $this->source), 'widget');
        echo "
                                ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 150, $this->source); })()), "birth_month", [], "any", false, false, true, 150), 150, $this->source), 'errors');
        echo "
                            </div>
                            <div class=\"col-7\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div>
                        <label class=\"col-form-label\">";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_count"), "html", null, true);
        echo "</label>
                        <div class=\"row align-items-center\">
                            <div class=\"col\">
                                ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 161, $this->source); })()), "buy_times_start", [], "any", false, false, true, 161), 161, $this->source), 'widget');
        echo "
                                ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 162, $this->source); })()), "buy_times_start", [], "any", false, false, true, 162), 162, $this->source), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto text-center\"><span>";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span></div>
                            <div class=\"col\">
                                ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 166, $this->source); })()), "buy_times_end", [], "any", false, false, true, 166), 166, $this->source), 'widget');
        echo "
                                ";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 167, $this->source); })()), "buy_times_end", [], "any", false, false, true, 167), 167, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row mb-2\">
                <div class=\"col\">
                    <div>
                        <label class=\"col-form-label\">";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.birth_day"), "html", null, true);
        echo "</label>
                        <div class=\"row align-items-center\">
                            <div class=\"col\">
                                ";
        // line 179
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 179, $this->source); })()), "birth_start", [], "any", false, false, true, 179), 179, $this->source), 'widget');
        echo "
                                ";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 180, $this->source); })()), "birth_start", [], "any", false, false, true, 180), 180, $this->source), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto text-center\"><span>";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span></div>
                            <div class=\"col\">
                                ";
        // line 184
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 184, $this->source); })()), "birth_end", [], "any", false, false, true, 184), 184, $this->source), 'widget');
        echo "
                                ";
        // line 185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 185, $this->source); })()), "birth_end", [], "any", false, false, true, 185), 185, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div>
                        <label class=\"col-form-label\">";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create_date"), "html", null, true);
        echo "</label>
                        <div class=\"row align-items-center\">
                            <div class=\"col\">
                                ";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 195, $this->source); })()), "create_date_start", [], "any", false, false, true, 195), 195, $this->source), 'widget');
        echo "
                                ";
        // line 196
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 196, $this->source); })()), "create_date_start", [], "any", false, false, true, 196), 196, $this->source), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto text-center\"><span>";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span></div>
                            <div class=\"col\">
                                ";
        // line 200
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 200, $this->source); })()), "create_date_end", [], "any", false, false, true, 200), 200, $this->source), 'widget');
        echo "
                                ";
        // line 201
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 201, $this->source); })()), "create_date_end", [], "any", false, false, true, 201), 201, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row mb-2\">
                <div class=\"col\">
                    <div>
                        <label class=\"col-form-label\">";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.pref"), "html", null, true);
        echo "</label>
                        <div class=\"row\">
                            <div class=\"col-5\">
                                ";
        // line 213
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 213, $this->source); })()), "pref", [], "any", false, false, true, 213), 213, $this->source), 'widget');
        echo "
                                ";
        // line 214
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 214, $this->source); })()), "pref", [], "any", false, false, true, 214), 214, $this->source), 'errors');
        echo "
                            </div>
                            <div class=\"col-7\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div>
                        <label class=\"col-form-label\">";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.update_date"), "html", null, true);
        echo "</label>
                        <div class=\"row align-items-center\">
                            <div class=\"col\">
                                ";
        // line 225
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 225, $this->source); })()), "update_date_start", [], "any", false, false, true, 225), 225, $this->source), 'widget');
        echo "
                                ";
        // line 226
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 226, $this->source); })()), "update_date_start", [], "any", false, false, true, 226), 226, $this->source), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto text-center\"><span>";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span></div>
                            <div class=\"col\">
                                ";
        // line 230
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 230, $this->source); })()), "update_date_end", [], "any", false, false, true, 230), 230, $this->source), 'widget');
        echo "
                                ";
        // line 231
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 231, $this->source); })()), "update_date_end", [], "any", false, false, true, 231), 231, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row mb-2\">
                <div class=\"col\">
                    <div class=\"mb-3\">
                        <label class=\"col-form-label\">";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
        echo "</label>
                        ";
        // line 241
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 241, $this->source); })()), "phone_number", [], "any", false, false, true, 241), 241, $this->source), 'widget');
        echo "
                        ";
        // line 242
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 242, $this->source); })()), "phone_number", [], "any", false, false, true, 242), 242, $this->source), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"col\">
                    <div>
                        <label class=\"col-form-label\">";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.last_buy_date"), "html", null, true);
        echo "</label>
                        <div class=\"row align-items-center\">
                            <div class=\"col\">
                                ";
        // line 250
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 250, $this->source); })()), "last_buy_start", [], "any", false, false, true, 250), 250, $this->source), 'widget');
        echo "
                                ";
        // line 251
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 251, $this->source); })()), "last_buy_start", [], "any", false, false, true, 251), 251, $this->source), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto text-center\"><span>";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span></div>
                            <div class=\"col\">
                                ";
        // line 255
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 255, $this->source); })()), "last_buy_end", [], "any", false, false, true, 255), 255, $this->source), 'widget');
        echo "
                                ";
        // line 256
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 256, $this->source); })()), "last_buy_end", [], "any", false, false, true, 256), 256, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 264
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 264, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 264), "eccube_form_options", [], "any", false, false, true, 264), "auto_render", [], "any", false, false, true, 264); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 265
            echo "                ";
            // line 266
            echo "                <div class=\"row mb-2\">
                    ";
            // line 267
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 267), "eccube_form_options", [], "any", false, false, true, 267), "form_theme", [], "any", false, false, true, 267)) {
                // line 268
                echo "                        ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 268), "eccube_form_options", [], "any", false, false, true, 268), "form_theme", [], "any", false, false, true, 268)], true);
                // line 269
                echo "                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 269, $this->source), 'row');
                echo "
                    ";
            } else {
                // line 271
                echo "                        <div class=\"col\">
                            <div class=\"mb-3\">
                                <label class=\"col-form-label\">";
                // line 273
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 273), "label", [], "any", false, false, true, 273), 273, $this->source)), "html", null, true);
                echo "</label>
                                ";
                // line 274
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 274, $this->source), 'widget');
                echo "
                                ";
                // line 275
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 275, $this->source), 'errors');
                echo "
                            </div>
                        </div>
                    ";
            }
            // line 279
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 281
        echo "        </div>
    </div>
    <div class=\"c-outsideBlock__contents mb-5\">
        <button type=\"submit\" class=\"btn btn-ec-conversion px-5\">";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search"), "html", null, true);
        echo "</button>
        ";
        // line 285
        if ((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 285, $this->source); })())) {
            // line 286
            echo "            <span class=\"fw-bold ms-2\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_result", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 286, $this->source); })()), "totalItemCount", [], "any", false, false, true, 286)]), "html", null, true);
            echo "</span>
        ";
        }
        // line 288
        echo "    </div>
    <div class=\"c-outsideBlock__contents mb-5\">
        ";
        // line 290
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@admin/search_items.twig", ["form" => (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 290, $this->source); })())], true, true);
        echo "
    </div>
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                ";
        // line 295
        if (((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 295, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 295, $this->source); })()), "totalItemCount", [], "any", false, false, true, 295))) {
            // line 296
            echo "                    <div class=\"row justify-content-between mb-2\">
                        <div class=\"col-6\"></div>

                        <div class=\"col-5 text-end\">
                            ";
            // line 301
            echo "                            <div class=\"d-inline-block mr-2 align-bottom\">
                                <select class=\"form-select\" onchange=\"location = this.value;\">
                                    ";
            // line 303
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pageMaxis"]) || array_key_exists("pageMaxis", $context) ? $context["pageMaxis"] : (function () { throw new RuntimeError('Variable "pageMaxis" does not exist.', 303, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pageMax"]) {
                // line 304
                echo "                                        <option ";
                if ((twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 304) == (isset($context["page_count"]) || array_key_exists("page_count", $context) ? $context["page_count"] : (function () { throw new RuntimeError('Variable "page_count" does not exist.', 304, $this->source); })()))) {
                    echo " selected ";
                }
                // line 305
                echo "                                                value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plugin_mail_magazine_page", ["page_no" => 1, "page_count" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 305)]), "html", null, true);
                echo "\">
                                            ";
                // line 306
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.count", ["%count%" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 306)]), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMax'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 308
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
                                        <th class=\"border-top-0 pt-2 pb-3 pl-3\">";
            // line 320
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_id"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">";
            // line 321
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.name"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">";
            // line 322
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">";
            // line 323
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.mail_address"), "html", null, true);
            echo "</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
            // line 327
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 327, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["Customer"]) {
                // line 328
                echo "                                    <tr>
                                        <td class=\"align-middle pl-3\">";
                // line 329
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Customer"], "id", [], "any", false, false, true, 329), 329, $this->source), "html", null, true);
                echo "</td>
                                        <td class=\"align-middle\"><a href=\"";
                // line 330
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Customer"], "id", [], "any", false, false, true, 330)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Customer"], "name01", [], "any", false, false, true, 330), 330, $this->source), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Customer"], "name02", [], "any", false, false, true, 330), 330, $this->source), "html", null, true);
                echo "</a></td>
                                        <td class=\"align-middle\">";
                // line 331
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Customer"], "phone_number", [], "any", false, false, true, 331), 331, $this->source), "html", null, true);
                echo "</td>
                                        <td class=\"align-middle\">";
                // line 332
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Customer"], "email", [], "any", false, false, true, 332), 332, $this->source), "html", null, true);
                echo "</td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 335
            echo "                                </tbody>
                            </table>
                            <div class=\"row justify-content-md-center mb-4\">
                                ";
            // line 338
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 338, $this->source); })()), "totalItemCount", [], "any", false, false, true, 338) > 0)) {
                // line 339
                echo "                                    ";
                $this->loadTemplate("@admin/pager.twig", "MailMagazine42/Resource/template/admin/index.twig", 339)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 339, $this->source); })()), "paginationData", [], "any", false, false, true, 339), "routes" => "plugin_mail_magazine_page"]));
                // line 340
                echo "                                ";
            }
            // line 341
            echo "                            </div>
                        </div>
                    </div>
                    <div class=\"row justify-content-md-center mb-4 \">
                        <div class=\"col-auto\">
                            <button class=\"btn btn-ec-regular ps-4 pe-4\" onclick=\"fnChangeActionSubmit('";
            // line 346
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("plugin_mail_magazine_select");
            echo "'); return false;\">
                                ";
            // line 347
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.index.btn_select_template"), "html", null, true);
            echo "
                            </button>
                        </div>
                    </div>
                ";
        } elseif (        // line 351
(isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 351, $this->source); })())) {
            // line 352
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 354
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_invalid_condition"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 355
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                ";
        } else {
            // line 359
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 361
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_no_result"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 362
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 363
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_advanced_search"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                ";
        }
        // line 367
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
        return "MailMagazine42/Resource/template/admin/index.twig";
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
        return array (  810 => 367,  803 => 363,  799 => 362,  795 => 361,  791 => 359,  784 => 355,  780 => 354,  776 => 352,  774 => 351,  767 => 347,  763 => 346,  756 => 341,  753 => 340,  750 => 339,  748 => 338,  743 => 335,  734 => 332,  730 => 331,  722 => 330,  718 => 329,  715 => 328,  711 => 327,  704 => 323,  700 => 322,  696 => 321,  692 => 320,  678 => 308,  670 => 306,  665 => 305,  660 => 304,  656 => 303,  652 => 301,  646 => 296,  644 => 295,  636 => 290,  632 => 288,  626 => 286,  624 => 285,  620 => 284,  615 => 281,  608 => 279,  601 => 275,  597 => 274,  593 => 273,  589 => 271,  583 => 269,  580 => 268,  578 => 267,  575 => 266,  573 => 265,  568 => 264,  558 => 256,  554 => 255,  549 => 253,  544 => 251,  540 => 250,  534 => 247,  526 => 242,  522 => 241,  518 => 240,  506 => 231,  502 => 230,  497 => 228,  492 => 226,  488 => 225,  482 => 222,  471 => 214,  467 => 213,  461 => 210,  449 => 201,  445 => 200,  440 => 198,  435 => 196,  431 => 195,  425 => 192,  415 => 185,  411 => 184,  406 => 182,  401 => 180,  397 => 179,  391 => 176,  379 => 167,  375 => 166,  370 => 164,  365 => 162,  361 => 161,  355 => 158,  344 => 150,  340 => 149,  334 => 146,  322 => 137,  318 => 136,  313 => 134,  308 => 132,  304 => 131,  298 => 128,  289 => 122,  285 => 121,  281 => 120,  270 => 112,  266 => 111,  262 => 110,  253 => 104,  249 => 103,  245 => 102,  237 => 97,  230 => 93,  225 => 91,  221 => 90,  215 => 89,  206 => 83,  203 => 82,  193 => 81,  128 => 24,  118 => 23,  99 => 19,  80 => 18,  69 => 14,  67 => 21,  65 => 16,  40 => 14,);
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
[メルマガ管理]-[配信内容設定]-[一覧・検索]画面
#}

{% extends '@admin/default_frame.twig' %}

{% set menus = ['mailmagazine', 'mailmagazine'] %}

{% block title %}{{ 'mailmagazine.index.title'|trans }}{% endblock %}
{% block sub_title %}{{ 'mailmagazine.title'|trans }}{% endblock %}

{% form_theme searchForm '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block javascript %}
<script>
\$(function() {

    var inputDate = document.createElement('input');
    inputDate.setAttribute('type', 'date');
    if (inputDate.type !== 'date') {
        \$('input[id\$=_date_start]').datetimepicker({
            locale: 'ja',
            format: 'YYYY-MM-DD',
            useCurrent: false,
            showTodayButton: true
        });

        \$('input[id\$=_date_end]').datetimepicker({
            locale: 'ja',
            format: 'YYYY-MM-DD',
            useCurrent: false,
            showTodayButton: true
        });

    \$('#admin_search_customer_birth_start').datetimepicker({
            locale: 'ja',
            format: 'YYYY-MM-DD',
            useCurrent: false,
            showTodayButton: true
        });

    \$('#admin_search_customer_birth_end').datetimepicker({
            locale: 'ja',
            format: 'YYYY-MM-DD',
            useCurrent: false,
            showTodayButton: true
        });

    \$('#admin_search_customer_last_buy_start').datetimepicker({
            locale: 'ja',
            format: 'YYYY-MM-DD',
            useCurrent: false,
            showTodayButton: true
        });

    \$('#admin_search_customer_last_buy_end').datetimepicker({
            locale: 'ja',
            format: 'YYYY-MM-DD',
            useCurrent: false,
            showTodayButton: true
        });
    }
});

function fnChangeActionSubmit(action) {
    document.search_form.action = action;
    document.search_form.submit();
}
</script>
{% endblock javascript %}

{% block main %}
<form name=\"search_form\" id=\"search_form\" method=\"post\" action=\"\">
    {{ form_widget(searchForm._token) }}
    <div class=\"c-outsideBlock\">
        <div class=\"c-outsideBlock__contents\">
            <div class=\"row justify-content-start\">
                <div class=\"col-6\">
                    <div class=\"mb-2\">
                        <label class=\"col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.order.multi_search_label'|trans }}\">{{ 'admin.customer.multi_search_label'|trans }}<i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
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
                <div class=\"col\">
                    <div>
                        <label>{{ 'admin.order.purchase_product'|trans }}</label>
                        {{ form_widget(searchForm.buy_product_name) }}
                        {{ form_errors(searchForm.buy_product_name) }}
                    </div>
                </div>
            </div>
            <div class=\"row mb-2\">
                <div class=\"col\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <p class=\"col-form-label\">{{ 'admin.common.gender'|trans }}</p>
                            {{ form_widget(searchForm.sex, { 'label_attr': { 'class': 'checkbox-inline'}}) }}
                            {{ form_errors(searchForm.sex) }}
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div>
                        <label class=\"col-form-label\">{{ 'admin.order.purchase_price'|trans }}</label>
                        <div class=\"row align-items-center\">
                            <div class=\"col\">
                                {{ form_widget(searchForm.buy_total_start) }}
                                {{ form_errors(searchForm.buy_total_start) }}
                            </div>
                            <div class=\"col-auto text-center\"><span>{{ 'admin.common.separator__range'|trans }}</span></div>
                            <div class=\"col\">
                                {{ form_widget(searchForm.buy_total_end) }}
                                {{ form_errors(searchForm.buy_total_end) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row mb-2\">
                <div class=\"col\">
                    <div>
                        <label class=\"col-form-label\">{{ 'admin.customer.birth_month'|trans }}</label>
                        <div class=\"row\">
                            <div class=\"col-5\">
                                {{ form_widget(searchForm.birth_month) }}
                                {{ form_errors(searchForm.birth_month) }}
                            </div>
                            <div class=\"col-7\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div>
                        <label class=\"col-form-label\">{{ 'admin.order.purchase_count'|trans }}</label>
                        <div class=\"row align-items-center\">
                            <div class=\"col\">
                                {{ form_widget(searchForm.buy_times_start) }}
                                {{ form_errors(searchForm.buy_times_start) }}
                            </div>
                            <div class=\"col-auto text-center\"><span>{{ 'admin.common.separator__range'|trans }}</span></div>
                            <div class=\"col\">
                                {{ form_widget(searchForm.buy_times_end) }}
                                {{ form_errors(searchForm.buy_times_end) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row mb-2\">
                <div class=\"col\">
                    <div>
                        <label class=\"col-form-label\">{{ 'admin.common.birth_day'|trans }}</label>
                        <div class=\"row align-items-center\">
                            <div class=\"col\">
                                {{ form_widget(searchForm.birth_start) }}
                                {{ form_errors(searchForm.birth_start) }}
                            </div>
                            <div class=\"col-auto text-center\"><span>{{ 'admin.common.separator__range'|trans }}</span></div>
                            <div class=\"col\">
                                {{ form_widget(searchForm.birth_end) }}
                                {{ form_errors(searchForm.birth_end) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div>
                        <label class=\"col-form-label\">{{ 'admin.common.create_date'|trans }}</label>
                        <div class=\"row align-items-center\">
                            <div class=\"col\">
                                {{ form_widget(searchForm.create_date_start) }}
                                {{ form_errors(searchForm.create_date_start) }}
                            </div>
                            <div class=\"col-auto text-center\"><span>{{ 'admin.common.separator__range'|trans }}</span></div>
                            <div class=\"col\">
                                {{ form_widget(searchForm.create_date_end) }}
                                {{ form_errors(searchForm.create_date_end) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row mb-2\">
                <div class=\"col\">
                    <div>
                        <label class=\"col-form-label\">{{ 'admin.common.pref'|trans }}</label>
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
                    <div>
                        <label class=\"col-form-label\">{{ 'admin.common.update_date'|trans }}</label>
                        <div class=\"row align-items-center\">
                            <div class=\"col\">
                                {{ form_widget(searchForm.update_date_start) }}
                                {{ form_errors(searchForm.update_date_start) }}
                            </div>
                            <div class=\"col-auto text-center\"><span>{{ 'admin.common.separator__range'|trans }}</span></div>
                            <div class=\"col\">
                                {{ form_widget(searchForm.update_date_end) }}
                                {{ form_errors(searchForm.update_date_end) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row mb-2\">
                <div class=\"col\">
                    <div class=\"mb-3\">
                        <label class=\"col-form-label\">{{ 'admin.common.phone_number'|trans }}</label>
                        {{ form_widget(searchForm.phone_number) }}
                        {{ form_errors(searchForm.phone_number) }}
                    </div>
                </div>
                <div class=\"col\">
                    <div>
                        <label class=\"col-form-label\">{{ 'admin.order.last_buy_date'|trans }}</label>
                        <div class=\"row align-items-center\">
                            <div class=\"col\">
                                {{ form_widget(searchForm.last_buy_start) }}
                                {{ form_errors(searchForm.last_buy_start) }}
                            </div>
                            <div class=\"col-auto text-center\"><span>{{ 'admin.common.separator__range'|trans }}</span></div>
                            <div class=\"col\">
                                {{ form_widget(searchForm.last_buy_end) }}
                                {{ form_errors(searchForm.last_buy_end) }}
                            </div>
                        </div>
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
                                <label class=\"col-form-label\">{{ f.vars.label|trans }}</label>
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
                            <div class=\"d-inline-block mr-2 align-bottom\">
                                <select class=\"form-select\" onchange=\"location = this.value;\">
                                    {% for pageMax in pageMaxis %}
                                        <option {% if pageMax.name == page_count %} selected {% endif %}
                                                value=\"{{ path('plugin_mail_magazine_page', {'page_no': 1, 'page_count': pageMax.name }) }}\">
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
                                        <th class=\"border-top-0 pt-2 pb-3 pl-3\">{{ 'admin.customer.customer_id'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">{{ 'admin.common.name'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">{{ 'admin.common.phone_number'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">{{ 'admin.common.mail_address'|trans }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {% for Customer in pagination %}
                                    <tr>
                                        <td class=\"align-middle pl-3\">{{ Customer.id }}</td>
                                        <td class=\"align-middle\"><a href=\"{{ url('admin_customer_edit', { 'id': Customer.id}) }}\">{{ Customer.name01 }}&nbsp;{{ Customer.name02 }}</a></td>
                                        <td class=\"align-middle\">{{ Customer.phone_number }}</td>
                                        <td class=\"align-middle\">{{ Customer.email }}</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                            <div class=\"row justify-content-md-center mb-4\">
                                {% if pagination.totalItemCount > 0 %}
                                    {% include \"@admin/pager.twig\" with { 'pages' : pagination.paginationData, 'routes' : 'plugin_mail_magazine_page' } %}
                                {% endif %}
                            </div>
                        </div>
                    </div>
                    <div class=\"row justify-content-md-center mb-4 \">
                        <div class=\"col-auto\">
                            <button class=\"btn btn-ec-regular ps-4 pe-4\" onclick=\"fnChangeActionSubmit('{{ url('plugin_mail_magazine_select') }}'); return false;\">
                                {{ 'mailmagazine.index.btn_select_template'|trans }}
                            </button>
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
", "MailMagazine42/Resource/template/admin/index.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\MailMagazine42\\Resource\\template\\admin\\index.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "form_theme" => 21, "for" => 264, "if" => 267, "include" => 339);
        static $filters = array("escape" => 18, "trans" => 18, "filter" => 264);
        static $functions = array("form_widget" => 83, "form_errors" => 91, "form_row" => 269, "include" => 290, "path" => 305, "url" => 330);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'for', 'if', 'include'],
                ['escape', 'trans', 'filter'],
                ['form_widget', 'form_errors', 'form_row', 'include', 'path', 'url']
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
