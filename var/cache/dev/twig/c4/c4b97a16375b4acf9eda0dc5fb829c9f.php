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

/* @admin/Setting/Shop/shop_master.twig */
class __TwigTemplate_79dc8330c2f9b548d537394b62ec56c0 extends Template
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
        // line 11
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/Shop/shop_master.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/Shop/shop_master.twig"));

        // line 13
        $context["menus"] = ["setting", "shop", "shop_index"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/Shop/shop_master.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop_setting"), "html", null, true);
        
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 21
        echo "    <script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 24
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 25
        echo "    <form name=\"form1\" role=\"form\" class=\"form-horizontal h-adr\" id=\"point_form\" method=\"post\" action=\"\">
        <span class=\"p-country-name\" style=\"display:none;\">Japan</span>

        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "_token", [], "any", false, false, true, 28), 28, $this->source), 'widget');
        echo "

        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.base_info"), "html", null, true);
        echo "</span></div>
                        <div id=\"ex-shop-basic\" class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.company_name"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "company_name", [], "any", false, false, true, 39), 39, $this->source), 'widget');
        echo "
                                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "company_name", [], "any", false, false, true, 40), 40, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.company_name_kana"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "company_kana", [], "any", false, false, true, 46), 46, $this->source), 'widget');
        echo "
                                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "company_kana", [], "any", false, false, true, 47), 47, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.shop_name"), "html", null, true);
        echo "</span><span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "shop_name", [], "any", false, false, true, 53), 53, $this->source), 'widget');
        echo "
                                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "shop_name", [], "any", false, false, true, 54), 54, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.shop_name_kana"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "shop_kana", [], "any", false, false, true, 60), 60, $this->source), 'widget');
        echo "
                                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "shop_kana", [], "any", false, false, true, 61), 61, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.shop_name_en"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "shop_name_eng", [], "any", false, false, true, 67), 67, $this->source), 'widget');
        echo "
                                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "shop_name_eng", [], "any", false, false, true, 68), 68, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.address"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    <div class=\"mb-2\">
                                        <div class=\"row justify-content-start\">
                                            <div class=\"col-auto text-center pe-0\"><span class=\"align-middle\">";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol"), "html", null, true);
        echo "</span></div>
                                            <div class=\"col-2\">
                                                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "postal_code", [], "any", false, false, true, 78), 78, $this->source), 'widget');
        echo "
                                            </div>
                                            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "postal_code", [], "any", false, false, true, 80), 80, $this->source), 'errors');
        echo "
                                        </div>
                                    </div>
                                    <div class=\"mb-2\">
                                        <div class=\"row justify-content-start\">
                                            <div class=\"col-3\">
                                                ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "address", [], "any", false, false, true, 86), "pref", [], "any", false, false, true, 86), 86, $this->source), 'widget');
        echo "
                                                ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "address", [], "any", false, false, true, 87), "pref", [], "any", false, false, true, 87), 87, $this->source), 'errors');
        echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"mb-2\">
                                        ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "address", [], "any", false, false, true, 92), "addr01", [], "any", false, false, true, 92), 92, $this->source), 'widget');
        echo "
                                        ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "address", [], "any", false, false, true, 93), "addr01", [], "any", false, false, true, 93), 93, $this->source), 'errors');
        echo "
                                    </div>
                                    <div class=\"mb-2\">
                                        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "address", [], "any", false, false, true, 96), "addr02", [], "any", false, false, true, 96), 96, $this->source), 'widget');
        echo "
                                        ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "address", [], "any", false, false, true, 97), "addr02", [], "any", false, false, true, 97), 97, $this->source), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"row mb-2\">
                                <div class=\"col-3\"><span>";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
        echo "</span></div>
                                <div class=\"col\">
                                    ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "phone_number", [], "any", false, false, true, 104), 104, $this->source), 'widget');
        echo "
                                    ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "phone_number", [], "any", false, false, true, 105), 105, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-3\"><span>";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.business_hour"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "business_hour", [], "any", false, false, true, 111), 111, $this->source), 'widget');
        echo "
                                    ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "business_hour", [], "any", false, false, true, 112), 112, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.shop.email_from"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.email_from"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                    <span class=\"badge bg-primary ms-1\">";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "email01", [], "any", false, false, true, 121), 121, $this->source), 'widget');
        echo "
                                    ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "email01", [], "any", false, false, true, 122), 122, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.shop.email_reply_to"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.email_reply_to"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                    <span class=\"badge bg-primary ms-1\">";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "email03", [], "any", false, false, true, 131), 131, $this->source), 'widget');
        echo "
                                    ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "email03", [], "any", false, false, true, 132), 132, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.shop.email_return_path"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.email_return_path"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                    <span class=\"badge bg-primary ms-1\">";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "email04", [], "any", false, false, true, 141), 141, $this->source), 'widget');
        echo "
                                    ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "email04", [], "any", false, false, true, 142), 142, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.shop.email_for_inquiries"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.email_for_inquiries"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                    <span class=\"badge bg-primary ms-1\">";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "email02", [], "any", false, false, true, 151), 151, $this->source), 'widget');
        echo "
                                    ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "email02", [], "any", false, false, true, 152), 152, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.shop.good_traded"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.good_traded"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "good_traded", [], "any", false, false, true, 160), 160, $this->source), 'widget');
        echo "
                                    ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "good_traded", [], "any", false, false, true, 161), 161, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.shop.message"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.message"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), "message", [], "any", false, false, true, 169), 169, $this->source), 'widget');
        echo "
                                    ";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "message", [], "any", false, false, true, 170), 170, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            ";
        // line 174
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 174), "eccube_form_options", [], "any", false, false, true, 174), "auto_render", [], "any", false, false, true, 174); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 175
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 175), "eccube_form_options", [], "any", false, false, true, 175), "form_theme", [], "any", false, false, true, 175)) {
                // line 176
                echo "                                    ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 176), "eccube_form_options", [], "any", false, false, true, 176), "form_theme", [], "any", false, false, true, 176)], true);
                // line 177
                echo "                                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 177, $this->source), 'row');
                echo "
                                ";
            } else {
                // line 179
                echo "                                    <div class=\"row\">
                                        <div class=\"col-3\"><span>";
                // line 180
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 180), "label", [], "any", false, false, true, 180), 180, $this->source)), "html", null, true);
                echo "</span></div>
                                        <div class=\"col mb-2\">
                                            ";
                // line 182
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 182, $this->source), 'widget');
                echo "
                                            ";
                // line 183
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 183, $this->source), 'errors');
                echo "
                                        </div>
                                    </div>
                                ";
            }
            // line 187
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.option_delivery_fee"), "html", null, true);
        echo "</span></div>
                        <div id=\"ex-shop-delivery\" class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.shop.option_delivery_fee_free_amount"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.option_delivery_fee_free_amount"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col-4 mb-2\">
                                    ";
        // line 198
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "delivery_free_amount", [], "any", false, false, true, 198), 198, $this->source), 'widget');
        echo "
                                    ";
        // line 199
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), "delivery_free_amount", [], "any", false, false, true, 199), 199, $this->source), 'errors');
        echo "
                                </div>
                                <div class=\"col\"></div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.shop.option_delivery_fee_free_quantity"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.option_delivery_fee_free_quantity"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col-4 mb-2\">
                                    ";
        // line 208
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 208, $this->source); })()), "delivery_free_quantity", [], "any", false, false, true, 208), 208, $this->source), 'widget');
        echo "
                                    ";
        // line 209
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 209, $this->source); })()), "delivery_free_quantity", [], "any", false, false, true, 209), 209, $this->source), 'errors');
        echo "
                                </div>
                                <div class=\"col\"></div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.shop.option_delivery_fee_by_product"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.option_delivery_fee_by_product"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 218
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 218, $this->source); })()), "option_product_delivery_fee", [], "any", false, false, true, 218), 218, $this->source), 'widget');
        echo "
                                    ";
        // line 219
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 219, $this->source); })()), "option_product_delivery_fee", [], "any", false, false, true, 219), 219, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.option_customer"), "html", null, true);
        echo "</span></div>
                        <div id=\"ex-shop-customer\" class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.shop.option_customer_activate"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.option_customer_activate"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 232
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 232, $this->source); })()), "option_customer_activate", [], "any", false, false, true, 232), 232, $this->source), 'widget');
        echo "
                                    ";
        // line 233
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 233, $this->source); })()), "option_customer_activate", [], "any", false, false, true, 233), 233, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <span>";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.option_mypage_order_status_display"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 241
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 241, $this->source); })()), "option_mypage_order_status_display", [], "any", false, false, true, 241), 241, $this->source), 'widget');
        echo "
                                    ";
        // line 242
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 242, $this->source); })()), "option_mypage_order_status_display", [], "any", false, false, true, 242), 242, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.shop.option_favorite_product"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.option_favorite_product"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 250
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 250, $this->source); })()), "option_favorite_product", [], "any", false, false, true, 250), 250, $this->source), 'widget');
        echo "
                                    ";
        // line 251
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 251, $this->source); })()), "option_favorite_product", [], "any", false, false, true, 251), 251, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.shop.option_remember_me"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.option_remember_me"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 259
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 259, $this->source); })()), "option_remember_me", [], "any", false, false, true, 259), 259, $this->source), 'widget');
        echo "
                                    ";
        // line 260
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 260, $this->source); })()), "option_remember_me", [], "any", false, false, true, 260), 260, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.shop.option_mail_notifier"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.option_mail_notifier"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 268
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 268, $this->source); })()), "option_mail_notifier", [], "any", false, false, true, 268), 268, $this->source), 'widget');
        echo "
                                    ";
        // line 269
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 269, $this->source); })()), "option_mail_notifier", [], "any", false, false, true, 269), 269, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.option_product"), "html", null, true);
        echo "</span></div>
                        <div id=\"ex-shop-product\" class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.nostock_hidden"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 280
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 280, $this->source); })()), "option_nostock_hidden", [], "any", false, false, true, 280), 280, $this->source), 'widget');
        echo "
                                    ";
        // line 281
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 281, $this->source); })()), "option_nostock_hidden", [], "any", false, false, true, 281), 281, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 287
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.option_tax"), "html", null, true);
        echo "</span></div>
                        <div id=\"ex-shop-tax\" class=\"card-body\">
                             <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.shop.option_invoice_registration_number"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.option_invoice_registration_number"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 294
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 294, $this->source); })()), "invoice_registration_number", [], "any", false, false, true, 294), 294, $this->source), 'widget');
        echo "
                                    ";
        // line 295
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 295, $this->source); })()), "invoice_registration_number", [], "any", false, false, true, 295), 295, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.shop.option_product_tax"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.option_product_tax"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 303, $this->source); })()), "option_product_tax_rule", [], "any", false, false, true, 303), 303, $this->source), 'widget');
        echo "
                                    ";
        // line 304
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 304, $this->source); })()), "option_product_tax_rule", [], "any", false, false, true, 304), 304, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 310
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.option_point"), "html", null, true);
        echo "</span></div>
                        <div id=\"ex-shop-point\" class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.shop.option_point_enabled"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.option_point_enabled"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 317
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 317, $this->source); })()), "option_point", [], "any", false, false, true, 317), 317, $this->source), 'widget');
        echo "
                                    ";
        // line 318
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 318, $this->source); })()), "option_point", [], "any", false, false, true, 318), 318, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.shop.option_point_rate"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.option_point_rate"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col mb-2\">
                                    <div class=\"input-group col-2 ps-0\">
                                        <div class=\"input-group\">
                                            ";
        // line 328
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 328, $this->source); })()), "basic_point_rate", [], "any", false, false, true, 328), 328, $this->source), 'widget');
        echo "
                                            <div class=\"input-group-text\">%</div>
                                            ";
        // line 330
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 330, $this->source); })()), "basic_point_rate", [], "any", false, false, true, 330), 330, $this->source), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.shop.option_point_conversion_rate"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.option_point_conversion_rate"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col mb-2\">
                                    <div class=\"input-group col-2 ps-0\">
                                        <div class=\"input-group\">
                                            ";
        // line 342
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 342, $this->source); })()), "point_conversion_rate", [], "any", false, false, true, 342), 342, $this->source), 'widget');
        echo "
                                            ";
        // line 343
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 343, $this->source); })()), "point_conversion_rate", [], "any", false, false, true, 343), 343, $this->source), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 351
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.ga"), "html", null, true);
        echo "</span></div>
                        <div id=\"ex-shop-ga\" class=\"card-body\">
                            <div class=\"row mb-3\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.shop.ga.tracking_id"), "html", null, true);
        echo "\">
                                        <span>";
        // line 356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.ga.tracking_id"), "html", null, true);
        echo "</span>
                                        <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 361
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 361, $this->source); })()), "ga_id", [], "any", false, false, true, 361), 361, $this->source), 'widget', ["attr" => ["placeholder" => "admin.common.ga.tracking_id"]]);
        echo "
                                    ";
        // line 362
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 362, $this->source); })()), "ga_id", [], "any", false, false, true, 362), 362, $this->source), 'errors');
        echo "
                                </div>
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
                        </div>
                    </div>
                    <div id=\"ex-conversion-action\" class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 380
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
        return "@admin/Setting/Shop/shop_master.twig";
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
        return array (  894 => 380,  873 => 362,  869 => 361,  861 => 356,  857 => 355,  850 => 351,  839 => 343,  835 => 342,  825 => 337,  815 => 330,  810 => 328,  800 => 323,  792 => 318,  788 => 317,  780 => 314,  773 => 310,  764 => 304,  760 => 303,  752 => 300,  744 => 295,  740 => 294,  732 => 291,  725 => 287,  716 => 281,  712 => 280,  707 => 278,  701 => 275,  692 => 269,  688 => 268,  680 => 265,  672 => 260,  668 => 259,  660 => 256,  652 => 251,  648 => 250,  640 => 247,  632 => 242,  628 => 241,  622 => 238,  614 => 233,  610 => 232,  602 => 229,  595 => 225,  586 => 219,  582 => 218,  574 => 215,  565 => 209,  561 => 208,  553 => 205,  544 => 199,  540 => 198,  532 => 195,  525 => 191,  520 => 188,  514 => 187,  507 => 183,  503 => 182,  498 => 180,  495 => 179,  489 => 177,  486 => 176,  483 => 175,  478 => 174,  472 => 170,  468 => 169,  460 => 166,  452 => 161,  448 => 160,  440 => 157,  432 => 152,  428 => 151,  422 => 148,  416 => 147,  408 => 142,  404 => 141,  398 => 138,  392 => 137,  384 => 132,  380 => 131,  374 => 128,  368 => 127,  360 => 122,  356 => 121,  350 => 118,  344 => 117,  336 => 112,  332 => 111,  327 => 109,  320 => 105,  316 => 104,  311 => 102,  303 => 97,  299 => 96,  293 => 93,  289 => 92,  281 => 87,  277 => 86,  268 => 80,  263 => 78,  258 => 76,  251 => 72,  244 => 68,  240 => 67,  235 => 65,  228 => 61,  224 => 60,  219 => 58,  212 => 54,  208 => 53,  201 => 51,  194 => 47,  190 => 46,  185 => 44,  178 => 40,  174 => 39,  169 => 37,  163 => 34,  154 => 28,  149 => 25,  139 => 24,  128 => 21,  118 => 20,  99 => 16,  80 => 15,  69 => 11,  67 => 18,  65 => 13,  40 => 11,);
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

{% set menus = ['setting', 'shop', 'shop_index'] %}

{% block title %}{{ 'admin.setting.shop.shop_setting'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.setting.shop'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block javascript %}
    <script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
{% endblock %}

{% block main %}
    <form name=\"form1\" role=\"form\" class=\"form-horizontal h-adr\" id=\"point_form\" method=\"post\" action=\"\">
        <span class=\"p-country-name\" style=\"display:none;\">Japan</span>

        {{ form_widget(form._token) }}

        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>{{ 'admin.setting.shop.shop.base_info'|trans }}</span></div>
                        <div id=\"ex-shop-basic\" class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'admin.common.company_name'|trans }}</span></div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.company_name) }}
                                    {{ form_errors(form.company_name) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'admin.common.company_name_kana'|trans }}</span></div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.company_kana) }}
                                    {{ form_errors(form.company_kana) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'admin.setting.shop.shop.shop_name'|trans }}</span><span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span></div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.shop_name) }}
                                    {{ form_errors(form.shop_name) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'admin.setting.shop.shop.shop_name_kana'|trans }}</span></div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.shop_kana) }}
                                    {{ form_errors(form.shop_kana) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'admin.setting.shop.shop.shop_name_en'|trans }}</span></div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.shop_name_eng) }}
                                    {{ form_errors(form.shop_name_eng) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'admin.common.address'|trans }}</span></div>
                                <div class=\"col mb-2\">
                                    <div class=\"mb-2\">
                                        <div class=\"row justify-content-start\">
                                            <div class=\"col-auto text-center pe-0\"><span class=\"align-middle\">{{ 'admin.common.postal_symbol'|trans }}</span></div>
                                            <div class=\"col-2\">
                                                {{ form_widget(form.postal_code) }}
                                            </div>
                                            {{ form_errors(form.postal_code) }}
                                        </div>
                                    </div>
                                    <div class=\"mb-2\">
                                        <div class=\"row justify-content-start\">
                                            <div class=\"col-3\">
                                                {{ form_widget(form.address.pref) }}
                                                {{ form_errors(form.address.pref) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"mb-2\">
                                        {{ form_widget(form.address.addr01) }}
                                        {{ form_errors(form.address.addr01) }}
                                    </div>
                                    <div class=\"mb-2\">
                                        {{ form_widget(form.address.addr02) }}
                                        {{ form_errors(form.address.addr02) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"row mb-2\">
                                <div class=\"col-3\"><span>{{ 'admin.common.phone_number'|trans }}</span></div>
                                <div class=\"col\">
                                    {{ form_widget(form.phone_number) }}
                                    {{ form_errors(form.phone_number) }}
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-3\"><span>{{ 'admin.setting.shop.shop.business_hour'|trans }}</span></div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.business_hour) }}
                                    {{ form_errors(form.business_hour) }}
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.setting.shop.shop.email_from'|trans }}\"><span>{{ 'admin.setting.shop.shop.email_from'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                    <span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.email01) }}
                                    {{ form_errors(form.email01) }}
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.setting.shop.shop.email_reply_to'|trans }}\"><span>{{ 'admin.setting.shop.shop.email_reply_to'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                    <span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.email03) }}
                                    {{ form_errors(form.email03) }}
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.setting.shop.shop.email_return_path'|trans }}\"><span>{{ 'admin.setting.shop.shop.email_return_path'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                    <span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.email04) }}
                                    {{ form_errors(form.email04) }}
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.setting.shop.shop.email_for_inquiries'|trans }}\"><span>{{ 'admin.setting.shop.shop.email_for_inquiries'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                    <span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.email02) }}
                                    {{ form_errors(form.email02) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.setting.shop.shop.good_traded'|trans }}\"><span>{{ 'admin.setting.shop.shop.good_traded'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.good_traded) }}
                                    {{ form_errors(form.good_traded) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.setting.shop.shop.message'|trans }}\"><span>{{ 'admin.setting.shop.shop.message'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.message) }}
                                    {{ form_errors(form.message) }}
                                </div>
                            </div>
                            {# エンティティ拡張の自動出力 #}
                            {% for f in form|filter(f => f.vars.eccube_form_options.auto_render) %}
                                {% if f.vars.eccube_form_options.form_theme %}
                                    {% form_theme f f.vars.eccube_form_options.form_theme %}
                                    {{ form_row(f) }}
                                {% else %}
                                    <div class=\"row\">
                                        <div class=\"col-3\"><span>{{ f.vars.label|trans }}</span></div>
                                        <div class=\"col mb-2\">
                                            {{ form_widget(f) }}
                                            {{ form_errors(f) }}
                                        </div>
                                    </div>
                                {% endif %}
                            {% endfor %}
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>{{ 'admin.setting.shop.shop.option_delivery_fee'|trans }}</span></div>
                        <div id=\"ex-shop-delivery\" class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.setting.shop.shop.option_delivery_fee_free_amount'|trans }}\"><span>{{ 'admin.setting.shop.shop.option_delivery_fee_free_amount'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col-4 mb-2\">
                                    {{ form_widget(form.delivery_free_amount) }}
                                    {{ form_errors(form.delivery_free_amount) }}
                                </div>
                                <div class=\"col\"></div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.setting.shop.shop.option_delivery_fee_free_quantity'|trans }}\"><span>{{ 'admin.setting.shop.shop.option_delivery_fee_free_quantity'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col-4 mb-2\">
                                    {{ form_widget(form.delivery_free_quantity) }}
                                    {{ form_errors(form.delivery_free_quantity) }}
                                </div>
                                <div class=\"col\"></div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.setting.shop.shop.option_delivery_fee_by_product'|trans }}\"><span>{{ 'admin.setting.shop.shop.option_delivery_fee_by_product'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.option_product_delivery_fee) }}
                                    {{ form_errors(form.option_product_delivery_fee) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>{{ 'admin.setting.shop.shop.option_customer'|trans }}</span></div>
                        <div id=\"ex-shop-customer\" class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.setting.shop.shop.option_customer_activate'|trans }}\"><span>{{ 'admin.setting.shop.shop.option_customer_activate'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.option_customer_activate) }}
                                    {{ form_errors(form.option_customer_activate) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <span>{{ 'admin.setting.shop.shop.option_mypage_order_status_display'|trans }}</span>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.option_mypage_order_status_display) }}
                                    {{ form_errors(form.option_mypage_order_status_display) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.setting.shop.shop.option_favorite_product'|trans }}\"><span>{{ 'admin.setting.shop.shop.option_favorite_product'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.option_favorite_product) }}
                                    {{ form_errors(form.option_favorite_product) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.setting.shop.shop.option_remember_me'|trans }}\"><span>{{ 'admin.setting.shop.shop.option_remember_me'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.option_remember_me) }}
                                    {{ form_errors(form.option_remember_me) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.setting.shop.shop.option_mail_notifier'|trans }}\"><span>{{ 'admin.setting.shop.shop.option_mail_notifier'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.option_mail_notifier) }}
                                    {{ form_errors(form.option_mail_notifier) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>{{ 'admin.setting.shop.shop.option_product'|trans }}</span></div>
                        <div id=\"ex-shop-product\" class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'admin.setting.shop.shop.nostock_hidden'|trans }}</span></div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.option_nostock_hidden) }}
                                    {{ form_errors(form.option_nostock_hidden) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>{{ 'admin.setting.shop.shop.option_tax'|trans }}</span></div>
                        <div id=\"ex-shop-tax\" class=\"card-body\">
                             <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.setting.shop.shop.option_invoice_registration_number'|trans }}\"><span>{{ 'admin.setting.shop.shop.option_invoice_registration_number'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.invoice_registration_number) }}
                                    {{ form_errors(form.invoice_registration_number) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.setting.shop.shop.option_product_tax'|trans }}\"><span>{{ 'admin.setting.shop.shop.option_product_tax'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.option_product_tax_rule) }}
                                    {{ form_errors(form.option_product_tax_rule) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>{{ 'admin.setting.shop.shop.option_point'|trans }}</span></div>
                        <div id=\"ex-shop-point\" class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.setting.shop.shop.option_point_enabled'|trans }}\"><span>{{ 'admin.setting.shop.shop.option_point_enabled'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.option_point) }}
                                    {{ form_errors(form.option_point) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.setting.shop.shop.option_point_rate'|trans }}\"><span>{{ 'admin.setting.shop.shop.option_point_rate'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col mb-2\">
                                    <div class=\"input-group col-2 ps-0\">
                                        <div class=\"input-group\">
                                            {{ form_widget(form.basic_point_rate) }}
                                            <div class=\"input-group-text\">%</div>
                                            {{ form_errors(form.basic_point_rate) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.setting.shop.shop.option_point_conversion_rate'|trans }}\"><span>{{ 'admin.setting.shop.shop.option_point_conversion_rate'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col mb-2\">
                                    <div class=\"input-group col-2 ps-0\">
                                        <div class=\"input-group\">
                                            {{ form_widget(form.point_conversion_rate) }}
                                            {{ form_errors(form.point_conversion_rate) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>{{ 'admin.setting.shop.shop.ga'|trans }}</span></div>
                        <div id=\"ex-shop-ga\" class=\"card-body\">
                            <div class=\"row mb-3\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.setting.shop.shop.ga.tracking_id'|trans }}\">
                                        <span>{{ 'admin.setting.shop.shop.ga.tracking_id'|trans }}</span>
                                        <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.ga_id, { attr : { placeholder : 'admin.common.ga.tracking_id' }} ) }}
                                    {{ form_errors(form.ga_id) }}
                                </div>
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
                        </div>
                    </div>
                    <div id=\"ex-conversion-action\" class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
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
", "@admin/Setting/Shop/shop_master.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\admin\\Setting\\Shop\\shop_master.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18, "for" => 174, "if" => 175);
        static $filters = array("escape" => 15, "trans" => 15, "filter" => 174);
        static $functions = array("form_widget" => 28, "form_errors" => 40, "form_row" => 177);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'for', 'if'],
                ['escape', 'trans', 'filter'],
                ['form_widget', 'form_errors', 'form_row']
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
