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

/* @admin/Customer/edit.twig */
class __TwigTemplate_49fc5344f4bca62d2d55cbe6d3c9c0b1 extends Template
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
        // line 12
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Customer/edit.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Customer/edit.twig"));

        // line 14
        $context["menus"] = ["customer", "customer_edit"];
        // line 19
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 12
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Customer/edit.twig", 12);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_registration"), "html", null, true);
        
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_management"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 21
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 22
        echo "    <script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 25
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 26
        echo "    <form name=\"customer_form\" role=\"form\" id=\"customer_form\" method=\"post\" class=\"h-adr\"
          action=\"";
        // line 27
        if (twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, true, 27)) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, true, 27)]), "html", null, true);
        } else {
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_new");
        }
        echo "\"
          novalidate>
        <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "_token", [], "any", false, false, true, 30), 30, $this->source), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\"><span class=\"card-title\">";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_info"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col-4 text-end\">
                                    <a data-bs-toggle=\"collapse\" href=\"#ordererInfo\"
                                       aria-expanded=\"false\" aria-controls=\"ordererInfo\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"ordererInfo\">
                            <div class=\"card-body\">
                                ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, true, 49)) {
            // line 50
            echo "                                    <div class=\"row mb-2\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                 title=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.customer.customer_id"), "html", null, true);
            echo "\">
                                                <span>";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_id"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col\">
                                            <p>";
            // line 59
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
            echo "</p>
                                        </div>
                                    </div>
                                ";
        }
        // line 63
        echo "                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.company_name"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "company_name", [], "any", false, false, true, 68), 68, $this->source), 'widget');
        echo "
                                        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "company_name", [], "any", false, false, true, 69), 69, $this->source), 'errors');
        echo "
                                    </div>
                                </div>
";
        // line 73
        echo "<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "customer_ext", [], "any", false, false, true, 75), "company_kana", [], "any", false, false, true, 75), 75, $this->source), 'label', ["label_attr" => ["class" => "col-form-label col-sm-4"]]);
        // line 77
        echo "
  </div>
  <div class=\"col-md-9\">
    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "customer_ext", [], "any", false, false, true, 80), "company_kana", [], "any", false, false, true, 80), 80, $this->source), 'widget');
        echo "
    ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "customer_ext", [], "any", false, false, true, 81), "company_kana", [], "any", false, false, true, 81), 81, $this->source), 'errors');
        echo "
  </div>
</div>
";
        // line 85
        echo "<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "customer_ext", [], "any", false, false, true, 87), "rep_name01", [], "any", false, false, true, 87), 87, $this->source), 'label', ["label_attr" => ["class" => "col-form-label col-sm-4"]]);
        // line 89
        echo "
  </div>
  <div class=\"col-md-9\">
    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "customer_ext", [], "any", false, false, true, 92), "rep_name01", [], "any", false, false, true, 92), 92, $this->source), 'widget');
        echo "
    ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "customer_ext", [], "any", false, false, true, 93), "rep_name01", [], "any", false, false, true, 93), 93, $this->source), 'errors');
        echo "
  </div>
</div>
";
        // line 97
        echo "<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "customer_ext", [], "any", false, false, true, 99), "rep_name02", [], "any", false, false, true, 99), 99, $this->source), 'label', ["label_attr" => ["class" => "col-form-label col-sm-4"]]);
        // line 101
        echo "
  </div>
  <div class=\"col-md-9\">
    ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "customer_ext", [], "any", false, false, true, 104), "rep_name02", [], "any", false, false, true, 104), 104, $this->source), 'widget');
        echo "
    ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "customer_ext", [], "any", false, false, true, 105), "rep_name02", [], "any", false, false, true, 105), 105, $this->source), 'errors');
        echo "
  </div>
</div>
";
        // line 109
        echo "<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "customer_ext", [], "any", false, false, true, 111), "rep_kana01", [], "any", false, false, true, 111), 111, $this->source), 'label', ["label_attr" => ["class" => "col-form-label col-sm-4"]]);
        // line 113
        echo "
  </div>
  <div class=\"col-md-9\">
    ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "customer_ext", [], "any", false, false, true, 116), "rep_kana01", [], "any", false, false, true, 116), 116, $this->source), 'widget');
        echo "
    ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "customer_ext", [], "any", false, false, true, 117), "rep_kana01", [], "any", false, false, true, 117), 117, $this->source), 'errors');
        echo "
  </div>
</div>
";
        // line 121
        echo "<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "customer_ext", [], "any", false, false, true, 123), "rep_kana02", [], "any", false, false, true, 123), 123, $this->source), 'label', ["label_attr" => ["class" => "col-form-label col-sm-4"]]);
        // line 125
        echo "
  </div>
  <div class=\"col-md-9\">
    ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "customer_ext", [], "any", false, false, true, 128), "rep_kana02", [], "any", false, false, true, 128), 128, $this->source), 'widget');
        echo "
    ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "customer_ext", [], "any", false, false, true, 129), "rep_kana02", [], "any", false, false, true, 129), 129, $this->source), 'errors');
        echo "
  </div>
</div>
";
        // line 133
        echo "<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "customer_ext", [], "any", false, false, true, 135), "depart_name", [], "any", false, false, true, 135), 135, $this->source), 'label', ["label_attr" => ["class" => "col-form-label col-sm-4"]]);
        // line 137
        echo "
  </div>
  <div class=\"col-md-9\">
    ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "customer_ext", [], "any", false, false, true, 140), "depart_name", [], "any", false, false, true, 140), 140, $this->source), 'widget');
        echo "
    ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "customer_ext", [], "any", false, false, true, 141), "depart_name", [], "any", false, false, true, 141), 141, $this->source), 'errors');
        echo "
  </div>
</div>
";
        // line 145
        echo "<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "customer_ext", [], "any", false, false, true, 147), "pic_name01", [], "any", false, false, true, 147), 147, $this->source), 'label', ["label_attr" => ["class" => "col-form-label col-sm-4"]]);
        // line 149
        echo "
  </div>
  <div class=\"col-md-9\">
    ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "customer_ext", [], "any", false, false, true, 152), "pic_name01", [], "any", false, false, true, 152), 152, $this->source), 'widget');
        echo "
    ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "customer_ext", [], "any", false, false, true, 153), "pic_name01", [], "any", false, false, true, 153), 153, $this->source), 'errors');
        echo "
  </div>
</div>
";
        // line 157
        echo "<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "customer_ext", [], "any", false, false, true, 159), "pic_name02", [], "any", false, false, true, 159), 159, $this->source), 'label', ["label_attr" => ["class" => "col-form-label col-sm-4"]]);
        // line 161
        echo "
  </div>
  <div class=\"col-md-9\">
    ";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "customer_ext", [], "any", false, false, true, 164), "pic_name02", [], "any", false, false, true, 164), 164, $this->source), 'widget');
        echo "
    ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "customer_ext", [], "any", false, false, true, 165), "pic_name02", [], "any", false, false, true, 165), 165, $this->source), 'errors');
        echo "
  </div>
</div>
";
        // line 169
        echo "<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    ";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "customer_ext", [], "any", false, false, true, 171), "pic_kana01", [], "any", false, false, true, 171), 171, $this->source), 'label', ["label_attr" => ["class" => "col-form-label col-sm-4"]]);
        // line 173
        echo "
  </div>
  <div class=\"col-md-9\">
    ";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "customer_ext", [], "any", false, false, true, 176), "pic_kana01", [], "any", false, false, true, 176), 176, $this->source), 'widget');
        echo "
    ";
        // line 177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), "customer_ext", [], "any", false, false, true, 177), "pic_kana01", [], "any", false, false, true, 177), 177, $this->source), 'errors');
        echo "
  </div>
</div>
";
        // line 181
        echo "<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    ";
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "customer_ext", [], "any", false, false, true, 183), "pic_kana02", [], "any", false, false, true, 183), 183, $this->source), 'label', ["label_attr" => ["class" => "col-form-label col-sm-4"]]);
        // line 185
        echo "
  </div>
  <div class=\"col-md-9\">
    ";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "customer_ext", [], "any", false, false, true, 188), "pic_kana02", [], "any", false, false, true, 188), 188, $this->source), 'widget');
        echo "
    ";
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 189, $this->source); })()), "customer_ext", [], "any", false, false, true, 189), "pic_kana02", [], "any", false, false, true, 189), 189, $this->source), 'errors');
        echo "
  </div>
</div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\"><span>";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.address"), "html", null, true);
        echo "</span><span
                                                class=\"badge bg-primary ms-1\">";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        <div class=\"mb-3\">
                                            <div class=\"row justify-content-start\">
                                                <div class=\"col-auto pe-0 align-self-center\"><span>";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol"), "html", null, true);
        echo "</span></div>
                                                <div class=\"col-2\">
                                                    ";
        // line 201
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), "postal_code", [], "any", false, false, true, 201), 201, $this->source), 'widget');
        echo "

                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col\">
                                                    ";
        // line 207
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), "postal_code", [], "any", false, false, true, 207), 207, $this->source), 'errors');
        echo "
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mb-3\">
                                            <div class=\"row justify-content-start\">
                                                <div class=\"col-auto\">
                                                    ";
        // line 214
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 214, $this->source); })()), "address", [], "any", false, false, true, 214), "pref", [], "any", false, false, true, 214), 214, $this->source), 'widget');
        echo "
                                                    ";
        // line 215
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 215, $this->source); })()), "address", [], "any", false, false, true, 215), "pref", [], "any", false, false, true, 215), 215, $this->source), 'errors');
        echo "
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mb-3\">
                                            ";
        // line 220
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 220, $this->source); })()), "address", [], "any", false, false, true, 220), "addr01", [], "any", false, false, true, 220), 220, $this->source), 'widget', ["attr" => ["placeholder" => "admin.common.address_sample_01"]]);
        echo "
                                            ";
        // line 221
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 221, $this->source); })()), "address", [], "any", false, false, true, 221), "addr01", [], "any", false, false, true, 221), 221, $this->source), 'errors');
        echo "
                                        </div>
                                        <div class=\"mb-3\">
                                            ";
        // line 224
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 224, $this->source); })()), "address", [], "any", false, false, true, 224), "addr02", [], "any", false, false, true, 224), 224, $this->source), 'widget', ["attr" => ["placeholder" => "admin.common.address_sample_02"]]);
        echo "
                                            ";
        // line 225
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 225, $this->source); })()), "address", [], "any", false, false, true, 225), "addr02", [], "any", false, false, true, 225), 225, $this->source), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.mail_address"), "html", null, true);
        echo "</span>
                                        <span class=\"badge bg-primary ms-1\">";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 235
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 235, $this->source); })()), "email", [], "any", false, false, true, 235), 235, $this->source), 'widget');
        echo "
                                        ";
        // line 236
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 236, $this->source); })()), "email", [], "any", false, false, true, 236), 236, $this->source), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
        echo "</span>
                                        <span class=\"badge bg-primary ms-1\">";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 245
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 245, $this->source); })()), "phone_number", [], "any", false, false, true, 245), 245, $this->source), 'widget');
        echo "
                                        ";
        // line 246
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 246, $this->source); })()), "phone_number", [], "any", false, false, true, 246), 246, $this->source), 'errors');
        echo "
                                    </div>
                                </div>

";
        // line 251
        echo "<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    ";
        // line 253
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 253, $this->source); })()), "customer_ext", [], "any", false, false, true, 253), "mb_phone_number", [], "any", false, false, true, 253), 253, $this->source), 'label', ["label_attr" => ["class" => "col-form-label col-sm-4"]]);
        // line 255
        echo "
  </div>
  <div class=\"col-md-9\">
    ";
        // line 258
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 258, $this->source); })()), "customer_ext", [], "any", false, false, true, 258), "mb_phone_number", [], "any", false, false, true, 258), 258, $this->source), 'widget');
        echo "
    ";
        // line 259
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 259, $this->source); })()), "customer_ext", [], "any", false, false, true, 259), "mb_phone_number", [], "any", false, false, true, 259), 259, $this->source), 'errors');
        echo "
  </div>
</div>
";
        // line 263
        echo "<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    ";
        // line 265
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 265, $this->source); })()), "customer_ext", [], "any", false, false, true, 265), "fax_number", [], "any", false, false, true, 265), 265, $this->source), 'label', ["label_attr" => ["class" => "col-form-label col-sm-4"]]);
        // line 267
        echo "
  </div>
  <div class=\"col-md-9\">
    ";
        // line 270
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 270, $this->source); })()), "customer_ext", [], "any", false, false, true, 270), "fax_number", [], "any", false, false, true, 270), 270, $this->source), 'widget');
        echo "
    ";
        // line 271
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 271, $this->source); })()), "customer_ext", [], "any", false, false, true, 271), "fax_number", [], "any", false, false, true, 271), 271, $this->source), 'errors');
        echo "
  </div>
</div>
";
        // line 275
        echo "<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    ";
        // line 277
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 277, $this->source); })()), "customer_ext", [], "any", false, false, true, 277), "established_ym", [], "any", false, false, true, 277), 277, $this->source), 'label', ["label_attr" => ["class" => "col-form-label col-sm-4"]]);
        // line 279
        echo "
  </div>
  <div class=\"col-md-9\">
    ";
        // line 282
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 282, $this->source); })()), "customer_ext", [], "any", false, false, true, 282), "established_ym", [], "any", false, false, true, 282), 282, $this->source), 'widget');
        echo "
    ";
        // line 283
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 283, $this->source); })()), "customer_ext", [], "any", false, false, true, 283), "established_ym", [], "any", false, false, true, 283), 283, $this->source), 'errors');
        echo "
  </div>
</div>
";
        // line 287
        echo "<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    ";
        // line 289
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 289, $this->source); })()), "customer_ext", [], "any", false, false, true, 289), "annual_sales", [], "any", false, false, true, 289), 289, $this->source), 'label', ["label_attr" => ["class" => "col-form-label col-sm-4"]]);
        // line 291
        echo "
  </div>
  <div class=\"col-md-9\">
    ";
        // line 294
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 294, $this->source); })()), "customer_ext", [], "any", false, false, true, 294), "annual_sales", [], "any", false, false, true, 294), 294, $this->source), 'widget');
        echo "
    ";
        // line 295
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 295, $this->source); })()), "customer_ext", [], "any", false, false, true, 295), "annual_sales", [], "any", false, false, true, 295), 295, $this->source), 'errors');
        echo "
  </div>
</div>
";
        // line 299
        echo "<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    ";
        // line 301
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 301, $this->source); })()), "customer_ext", [], "any", false, false, true, 301), "business_type", [], "any", false, false, true, 301), 301, $this->source), 'label', ["label_attr" => ["class" => "col-form-label col-sm-4"]]);
        // line 303
        echo "
  </div>
  <div class=\"col-md-9\">
    ";
        // line 306
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 306, $this->source); })()), "customer_ext", [], "any", false, false, true, 306), "business_type", [], "any", false, false, true, 306), 306, $this->source), 'widget');
        echo "
    ";
        // line 307
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 307, $this->source); })()), "customer_ext", [], "any", false, false, true, 307), "business_type", [], "any", false, false, true, 307), 307, $this->source), 'errors');
        echo "
  </div>
</div>
";
        // line 311
        echo "<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    ";
        // line 313
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 313, $this->source); })()), "customer_ext", [], "any", false, false, true, 313), "url", [], "any", false, false, true, 313), 313, $this->source), 'label', ["label_attr" => ["class" => "col-form-label col-sm-4"]]);
        // line 315
        echo "
  </div>
  <div class=\"col-md-9\">
    ";
        // line 318
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 318, $this->source); })()), "customer_ext", [], "any", false, false, true, 318), "url", [], "any", false, false, true, 318), 318, $this->source), 'widget');
        echo "
    ";
        // line 319
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 319, $this->source); })()), "customer_ext", [], "any", false, false, true, 319), "url", [], "any", false, false, true, 319), 319, $this->source), 'errors');
        echo "
  </div>
</div>
";
        // line 323
        echo "<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    ";
        // line 325
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 325, $this->source); })()), "customer_ext", [], "any", false, false, true, 325), "real_store", [], "any", false, false, true, 325), 325, $this->source), 'label', ["label_attr" => ["class" => "col-form-label col-sm-4"]]);
        // line 327
        echo "
  </div>
  <div class=\"col-md-9\">
    ";
        // line 330
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 330, $this->source); })()), "customer_ext", [], "any", false, false, true, 330), "real_store", [], "any", false, false, true, 330), 330, $this->source), 'widget');
        echo "
    ";
        // line 331
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 331, $this->source); })()), "customer_ext", [], "any", false, false, true, 331), "real_store", [], "any", false, false, true, 331), 331, $this->source), 'errors');
        echo "
  </div>
</div>

                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.password"), "html", null, true);
        echo "</span>
                                        <span class=\"badge bg-primary ms-1\">";
        // line 338
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 341
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 341, $this->source); })()), "plain_password", [], "any", false, false, true, 341), "first", [], "any", false, false, true, 341), 341, $this->source), 'widget', ["type" => "password"]);
        echo "
                                        ";
        // line 342
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 342, $this->source); })()), "plain_password", [], "any", false, false, true, 342), "first", [], "any", false, false, true, 342), 342, $this->source), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 347
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.password_for_confirmation"), "html", null, true);
        echo "</span>
                                        <span class=\"badge bg-primary ms-1\">";
        // line 348
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 351
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 351, $this->source); })()), "plain_password", [], "any", false, false, true, 351), "second", [], "any", false, false, true, 351), 351, $this->source), 'widget', ["type" => "password"]);
        echo "
                                        ";
        // line 352
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 352, $this->source); })()), "plain_password", [], "any", false, false, true, 352), "second", [], "any", false, false, true, 352), 352, $this->source), 'errors');
        echo "
                                    </div>
                                </div>


";
        // line 358
        echo "<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    ";
        // line 360
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 360, $this->source); })()), "customer_ext", [], "any", false, false, true, 360), "trade_rate", [], "any", false, false, true, 360), 360, $this->source), 'label', ["label_attr" => ["class" => "col-form-label col-sm-4"]]);
        // line 362
        echo "
  </div>
  <div class=\"col-md-9\">
    ";
        // line 365
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 365, $this->source); })()), "customer_ext", [], "any", false, false, true, 365), "trade_rate", [], "any", false, false, true, 365), 365, $this->source), 'widget');
        echo "
    ";
        // line 366
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 366, $this->source); })()), "customer_ext", [], "any", false, false, true, 366), "trade_rate", [], "any", false, false, true, 366), 366, $this->source), 'errors');
        echo "
  </div>
</div>



                                <div class=\"row mb-2 d-none\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 374
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.name"), "html", null, true);
        echo "</span>
                                        <span class=\"badge bg-primary ms-1\">";
        // line 375
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                ";
        // line 380
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 380, $this->source); })()), "name", [], "any", false, false, true, 380), "name01", [], "any", false, false, true, 380), 380, $this->source), 'widget');
        echo "
                                            </div>
                                            <div class=\"col\">
                                                ";
        // line 383
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 383, $this->source); })()), "name", [], "any", false, false, true, 383), "name02", [], "any", false, false, true, 383), 383, $this->source), 'widget');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                ";
        // line 388
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 388, $this->source); })()), "name", [], "any", false, false, true, 388), "name01", [], "any", false, false, true, 388), 388, $this->source), 'errors');
        echo "
                                            </div>
                                            <div class=\"col\">
                                                ";
        // line 391
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 391, $this->source); })()), "name", [], "any", false, false, true, 391), "name02", [], "any", false, false, true, 391), 391, $this->source), 'errors');
        echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row mb-2 d-none\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 398
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.kana"), "html", null, true);
        echo "</span>
                                        <span class=\"badge bg-primary ms-1\">";
        // line 399
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                ";
        // line 404
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 404, $this->source); })()), "kana", [], "any", false, false, true, 404), "kana01", [], "any", false, false, true, 404), 404, $this->source), 'widget');
        echo "
                                            </div>
                                            <div class=\"col\">
                                                ";
        // line 407
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 407, $this->source); })()), "kana", [], "any", false, false, true, 407), "kana02", [], "any", false, false, true, 407), 407, $this->source), 'widget');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                ";
        // line 412
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 412, $this->source); })()), "kana", [], "any", false, false, true, 412), "kana01", [], "any", false, false, true, 412), 412, $this->source), 'errors');
        echo "
                                            </div>
                                            <div class=\"col\">
                                                ";
        // line 415
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 415, $this->source); })()), "kana", [], "any", false, false, true, 415), "kana02", [], "any", false, false, true, 415), 415, $this->source), 'errors');
        echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row mb-2 d-none\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 422
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.gender"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 425
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 425, $this->source); })()), "sex", [], "any", false, false, true, 425), 425, $this->source), 'widget', ["label_attr" => ["class" => "radio-inline"]]);
        echo "
                                        ";
        // line 426
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 426, $this->source); })()), "sex", [], "any", false, false, true, 426), 426, $this->source), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row mb-2 d-none\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 431
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.job"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 434
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 434, $this->source); })()), "job", [], "any", false, false, true, 434), 434, $this->source), 'widget');
        echo "
                                        ";
        // line 435
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 435, $this->source); })()), "job", [], "any", false, false, true, 435), 435, $this->source), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row mb-2 d-none\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 440
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.birth_day"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 443
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 443, $this->source); })()), "birth", [], "any", false, false, true, 443), 443, $this->source), 'widget');
        echo "
                                        ";
        // line 444
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 444, $this->source); })()), "birth", [], "any", false, false, true, 444), 444, $this->source), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row mb-2 d-none\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 449
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.point"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 452
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 452, $this->source); })()), "point", [], "any", false, false, true, 452), 452, $this->source), 'widget');
        echo "
                                        ";
        // line 453
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 453, $this->source); })()), "point", [], "any", false, false, true, 453), 453, $this->source), 'errors');
        echo "
                                    </div>
                                </div>



                                ";
        // line 460
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 460, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 460), "eccube_form_options", [], "any", false, false, true, 460), "auto_render", [], "any", false, false, true, 460); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 461
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 461), "eccube_form_options", [], "any", false, false, true, 461), "form_theme", [], "any", false, false, true, 461)) {
                // line 462
                echo "                                        ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 462), "eccube_form_options", [], "any", false, false, true, 462), "form_theme", [], "any", false, false, true, 462)], true);
                // line 463
                echo "                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 463, $this->source), 'row');
                echo "
                                    ";
            } else {
                // line 465
                echo "                                        <div class=\"row mb-2\">
                                            <div class=\"col-3\">
                                                <span>";
                // line 467
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 467), "label", [], "any", false, false, true, 467), 467, $this->source)), "html", null, true);
                echo "</span>
                                            </div>
                                            <div class=\"col\">
                                                ";
                // line 470
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 470, $this->source), 'widget');
                echo "
                                                ";
                // line 471
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 471, $this->source), 'errors');
                echo "
                                            </div>
                                        </div>
                                    ";
            }
            // line 475
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 476
        echo "
                            </div>
                        </div>
                    </div>

                    ";
        // line 481
        if (twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 481, $this->source); })()), "id", [], "any", false, false, true, 481)) {
            // line 482
            echo "                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                             title=\"";
            // line 487
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.customer.customer_address"), "html", null, true);
            echo "\">
                                        <span class=\"card-title\">
                                            ";
            // line 489
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_address"), "html", null, true);
            echo "
                                            <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </span>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-end\">
                                        <a data-bs-toggle=\"collapse\" href=\"#delivery\" aria-expanded=\"false\"
                                           aria-controls=\"delivery\">
                                            <i class=\"fa fa-angle-up fa-lg\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"delivery\">
                                ";
            // line 503
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 503, $this->source); })()), "CustomerAddresses", [], "any", false, false, true, 503)) > 0)) {
                // line 504
                echo "                                    <div class=\"card-body\">
                                        <table class=\"table table-striped table-sm\">
                                            <thead class=\"table-active\">
                                            <th class=\"align-middle pt-2 pb-2\">";
                // line 507
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.name"), "html", null, true);
                echo "</th>
                                            <th class=\"align-middle pt-2 pb-2\">";
                // line 508
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.address"), "html", null, true);
                echo "</th>
                                            <th class=\"align-middle pt-2 pb-2 pe-3\">";
                // line 509
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
                echo "</th>
                                            <th class=\"align-middle pt-2 pb-2 pe-3\"></th>
                                            </thead>
                                            <tbody>
                                            ";
                // line 513
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 513, $this->source); })()), "CustomerAddresses", [], "any", false, false, true, 513));
                foreach ($context['_seq'] as $context["_key"] => $context["CustomerAddress"]) {
                    // line 514
                    echo "                                                <tr>
                                                    <td class=\"align-middle\">
                                                        ";
                    // line 516
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "name01", [], "any", false, false, true, 516), 516, $this->source), "html", null, true);
                    echo "&nbsp;";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "name02", [], "any", false, false, true, 516), 516, $this->source), "html", null, true);
                    echo "
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <a href=\"";
                    // line 519
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_delivery_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 519, $this->source); })()), "id", [], "any", false, false, true, 519), "did" => twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "id", [], "any", false, false, true, 519)]), "html", null, true);
                    echo "\">
                                                            ";
                    // line 520
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "postal_code", [], "any", false, false, true, 520), 520, $this->source), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "Pref", [], "any", false, false, true, 520), 520, $this->source), "html", null, true);
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "addr01", [], "any", false, false, true, 520), 520, $this->source), "html", null, true);
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "addr02", [], "any", false, false, true, 520), 520, $this->source), "html", null, true);
                    echo "
                                                        </a>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        ";
                    // line 524
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "phone_number", [], "any", false, false, true, 524), 524, $this->source), "html", null, true);
                    echo "
                                                    </td>
                                                    <td>
                                                        <div class=\"text-center\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                    // line 527
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                    echo "\">
                                                            <a class=\"btn btn-ec-actionIcon\" data-bs-toggle=\"modal\"
                                                               data-bs-target=\"#discontinuance-";
                    // line 529
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "id", [], "any", false, false, true, 529), 529, $this->source), "html", null, true);
                    echo "\">
                                                                <i class=\"fa fa-close text-secondary\"
                                                                   aria-hidden=\"true\"></i>
                                                            </a>
                                                        </div>
                                                        <div class=\"modal fade\" id=\"discontinuance-";
                    // line 534
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "id", [], "any", false, false, true, 534), 534, $this->source), "html", null, true);
                    echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"discontinuance\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                    <div class=\"modal-header\">
                                                                        <h5 class=\"modal-title fw-bold\">
                                                                            ";
                    // line 539
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
                    echo "</h5>
                                                                        <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                                                                        </button>
                                                                    </div>
                                                                    <div class=\"modal-body text-start\">
                                                                        <p class=\"text-start\">
                                                                            ";
                    // line 546
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => ((((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "postal_code", [], "any", false, false, true, 546), 546, $this->source)) . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "Pref", [], "any", false, false, true, 546), 546, $this->source)) . " ") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "name01", [], "any", false, false, true, 546), 546, $this->source)) . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "name02", [], "any", false, false, true, 546), 546, $this->source))]), "html", null, true);
                    echo "</p>
                                                                    </div>
                                                                    <div class=\"modal-footer\">
                                                                        <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">
                                                                            ";
                    // line 550
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                    echo "
                                                                        </button>
                                                                        <a href=\"";
                    // line 552
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_delivery_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 552, $this->source); })()), "id", [], "any", false, false, true, 552), "did" => twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "id", [], "any", false, false, true, 552)]), "html", null, true);
                    echo "\" class=\"btn btn-ec-delete\"";
                    echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                    echo " data-method=\"delete\" data-confirm=\"false\">
                                                                            ";
                    // line 553
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['CustomerAddress'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 562
                echo "                                            </tbody>
                                        </table>

                                        ";
                // line 566
                echo "                                        ";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 566, $this->source); })()), "CustomerAddresses", [], "any", false, false, true, 566)) < twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 566, $this->source); })()), "eccube_deliv_addr_max", [], "any", false, false, true, 566))) {
                    // line 567
                    echo "                                            <div class=\"d-block text-center\">
                                                <a href=\"";
                    // line 568
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_delivery_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 568, $this->source); })()), "id", [], "any", false, false, true, 568)]), "html", null, true);
                    echo "\"
                                                   class=\"btn btn-ec-regular\">";
                    // line 569
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_address__add"), "html", null, true);
                    echo "</a>
                                            </div>
                                        ";
                } else {
                    // line 572
                    echo "                                            <span class=\"ec-errorMessage\">
                                                ";
                    // line 573
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_address_count_is_over", ["%eccube_deliv_addr_max%" => twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 573, $this->source); })()), "eccube_deliv_addr_max", [], "any", false, false, true, 573)]), "html", null, true);
                    echo "
                                            </span>
                                        ";
                }
                // line 576
                echo "                                    </div>
                                ";
            } else {
                // line 578
                echo "                                    <div class=\"card-body\">
                                        <div id=\"address_box\" class=\"data-empty\">
                                            <span>";
                // line 580
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.no_customer_address"), "html", null, true);
                echo "</span>
                                        </div>

                                        <div class=\"d-block text-center\">
                                            <a href=\"";
                // line 584
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_delivery_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 584, $this->source); })()), "id", [], "any", false, false, true, 584)]), "html", null, true);
                echo "\"
                                               class=\"btn btn-ec-regular\">";
                // line 585
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_address__add"), "html", null, true);
                echo "</a>
                                        </div>

                                    </div>
                                ";
            }
            // line 590
            echo "                            </div>
                        </div>
                    ";
        }
        // line 593
        echo "
                    ";
        // line 594
        if (twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 594, $this->source); })()), "id", [], "any", false, false, true, 594)) {
            // line 595
            echo "                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                             title=\"";
            // line 600
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.customer.purchase_history"), "html", null, true);
            echo "\">
                                        <span class=\"card-title\">
                                            ";
            // line 602
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.purchase_history"), "html", null, true);
            echo "
                                            <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </span>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-end\">
                                        <a data-bs-toggle=\"collapse\" href=\"#orderHistory\" aria-expanded=\"false\"
                                           aria-controls=\"orderHistory\">
                                            <i class=\"fa fa-angle-up fa-lg\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"orderHistory\">
                                ";
            // line 616
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 616, $this->source); })()), "Orders", [], "any", false, false, true, 616)) > 0)) {
                // line 617
                echo "                                    <div class=\"card-body\">
                                        <div class=\"row justify-content-between mb-2\">
                                            <div class=\"col-6\">
                                            </div>
                                            <div class=\"col-5 text-end\">
                                                <div class=\"d-inline-block me-2 align-bottom\">
                                                    <div>
                                                        <select class=\"form-select\" onchange=\"location = this.value;\">
                                                            ";
                // line 625
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["pageMaxis"]) || array_key_exists("pageMaxis", $context) ? $context["pageMaxis"] : (function () { throw new RuntimeError('Variable "pageMaxis" does not exist.', 625, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["pageMax"]) {
                    // line 626
                    echo "                                                                <option ";
                    if ((twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 626) == (isset($context["page_count"]) || array_key_exists("page_count", $context) ? $context["page_count"] : (function () { throw new RuntimeError('Variable "page_count" does not exist.', 626, $this->source); })()))) {
                        echo "selected=\"\"";
                    }
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customer_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 626, $this->source); })()), "id", [], "any", false, false, true, 626), "page_no" => 1, "page_count" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 626)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.count", ["%count%" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 626)]), "html", null, true);
                    echo "</option>
                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMax'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 628
                echo "                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <table class=\"table table-striped table-sm\">
                                            <thead class=\"table-active\">
                                            <th class=\"align-middle pt-2 pb-2 ps-3\">";
                // line 635
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_date"), "html", null, true);
                echo "</th>
                                            <th class=\"align-middle pt-2 pb-2\">";
                // line 636
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_no"), "html", null, true);
                echo "</th>
                                            <th class=\"align-middle pt-2 pb-2\">";
                // line 637
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_price"), "html", null, true);
                echo "</th>
                                            <th class=\"align-middle pt-2 pb-2 pe-3\">";
                // line 638
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_status"), "html", null, true);
                echo "</th>
                                            </thead>
                                            <tbody>
                                            ";
                // line 641
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 641, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["Order"]) {
                    // line 642
                    echo "                                                <tr>
                                                    <td class=\"align-middle ps-3\">";
                    // line 643
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "order_date", [], "any", false, false, true, 643), 643, $this->source)), "html", null, true);
                    echo "</td>
                                                    <td class=\"align-middle\">
                                                        <a href=\"";
                    // line 645
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 645)]), "html", null, true);
                    echo "\">
                                                            ";
                    // line 646
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "order_no", [], "any", false, false, true, 646), 646, $this->source), "html", null, true);
                    echo "
                                                        </a>
                                                    </td>
                                                    <td class=\"align-middle\">";
                    // line 649
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "total", [], "any", false, false, true, 649), 649, $this->source)), "html", null, true);
                    echo "</td>
                                                    <td class=\"align-middle pe-3\">
                                                        <span class=\"badge badge-ec-blue\" style=\"background-color: #fff; color: ";
                    // line 651
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "OrderStatusColor", [], "any", false, false, true, 651), 651, $this->source), "html", null, true);
                    echo "; border-color: ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "OrderStatusColor", [], "any", false, false, true, 651), 651, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "OrderStatus", [], "any", false, false, true, 651), 651, $this->source), "html", null, true);
                    echo "</span>
                                                    </td>
                                                </tr>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Order'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 655
                echo "                                            </tbody>
                                        </table>
                                        ";
                // line 657
                if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 657, $this->source); })()), "totalItemCount", [], "any", false, false, true, 657) > 0)) {
                    // line 658
                    echo "                                                <div class=\"row justify-content-md-center pb-4\">
                                                    ";
                    // line 659
                    $this->loadTemplate("@admin/pager.twig", "@admin/Customer/edit.twig", 659)->display(twig_array_merge($context, ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 659, $this->source); })()), "id", [], "any", false, false, true, 659), "pages" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 659, $this->source); })()), "paginationData", [], "any", false, false, true, 659), "routes" => "admin_customer_edit"]));
                    // line 660
                    echo "                                                </div>
                                            ";
                }
                // line 662
                echo "                                    </div>
                                ";
            } else {
                // line 664
                echo "                                    <div class=\"card-body\">
                                        <div id=\"history_box\" class=\"data-empty\">
                                        <span>
                                            ";
                // line 667
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.no_purchase_history"), "html", null, true);
                echo "
                                        </span>
                                        </div>
                                    </div>
                                ";
            }
            // line 672
            echo "                            </div>
                        </div>
                    ";
        }
        // line 675
        echo "
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                         title=\"";
        // line 681
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.customer.shop_memo"), "html", null, true);
        echo "\">
                                        <span class=\"card-title\">";
        // line 682
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.shop_memo"), "html", null, true);
        echo "</span>
                                        <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col-4 text-end\">
                                    <a data-bs-toggle=\"collapse\" href=\"#shopMemo\" aria-expanded=\"false\"
                                       aria-controls=\"shopMemo\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"shopMemo\">
                            <div class=\"card-body\">
                                ";
        // line 696
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 696, $this->source); })()), "note", [], "any", false, false, true, 696), 696, $this->source), 'widget', ["attr" => ["row" => 8]]);
        echo "
                                ";
        // line 697
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 697, $this->source); })()), "note", [], "any", false, false, true, 697), 697, $this->source), 'errors');
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
                            <a class=\"c-baseLink\"
                               href=\"";
        // line 711
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_page", ["page_no" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, true, 711), "get", ["eccube.admin.customer.search.page_no"], "method", true, true, true, 711)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, true, 711), "get", ["eccube.admin.customer.search.page_no"], "method", false, false, true, 711), 711, $this->source), "1")) : ("1"))]), "html", null, true);
        echo "?resume=1\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                <span>";
        // line 713
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_list"), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                ";
        // line 720
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 720, $this->source); })()), "status", [], "any", false, false, true, 720), 720, $this->source), 'widget');
        echo "
                                ";
        // line 721
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 721, $this->source); })()), "status", [], "any", false, false, true, 721), 721, $this->source), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\"
                                        type=\"submit\">";
        // line 725
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
        return "@admin/Customer/edit.twig";
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
        return array (  1449 => 725,  1442 => 721,  1438 => 720,  1428 => 713,  1423 => 711,  1406 => 697,  1402 => 696,  1385 => 682,  1381 => 681,  1373 => 675,  1368 => 672,  1360 => 667,  1355 => 664,  1351 => 662,  1347 => 660,  1345 => 659,  1342 => 658,  1340 => 657,  1336 => 655,  1322 => 651,  1317 => 649,  1311 => 646,  1307 => 645,  1302 => 643,  1299 => 642,  1295 => 641,  1289 => 638,  1285 => 637,  1281 => 636,  1277 => 635,  1268 => 628,  1253 => 626,  1249 => 625,  1239 => 617,  1237 => 616,  1220 => 602,  1215 => 600,  1208 => 595,  1206 => 594,  1203 => 593,  1198 => 590,  1190 => 585,  1186 => 584,  1179 => 580,  1175 => 578,  1171 => 576,  1165 => 573,  1162 => 572,  1156 => 569,  1152 => 568,  1149 => 567,  1146 => 566,  1141 => 562,  1126 => 553,  1120 => 552,  1115 => 550,  1108 => 546,  1098 => 539,  1090 => 534,  1082 => 529,  1077 => 527,  1071 => 524,  1059 => 520,  1055 => 519,  1047 => 516,  1043 => 514,  1039 => 513,  1032 => 509,  1028 => 508,  1024 => 507,  1019 => 504,  1017 => 503,  1000 => 489,  995 => 487,  988 => 482,  986 => 481,  979 => 476,  973 => 475,  966 => 471,  962 => 470,  956 => 467,  952 => 465,  946 => 463,  943 => 462,  940 => 461,  935 => 460,  926 => 453,  922 => 452,  916 => 449,  908 => 444,  904 => 443,  898 => 440,  890 => 435,  886 => 434,  880 => 431,  872 => 426,  868 => 425,  862 => 422,  852 => 415,  846 => 412,  838 => 407,  832 => 404,  824 => 399,  820 => 398,  810 => 391,  804 => 388,  796 => 383,  790 => 380,  782 => 375,  778 => 374,  767 => 366,  763 => 365,  758 => 362,  756 => 360,  752 => 358,  744 => 352,  740 => 351,  734 => 348,  730 => 347,  722 => 342,  718 => 341,  712 => 338,  708 => 337,  699 => 331,  695 => 330,  690 => 327,  688 => 325,  684 => 323,  678 => 319,  674 => 318,  669 => 315,  667 => 313,  663 => 311,  657 => 307,  653 => 306,  648 => 303,  646 => 301,  642 => 299,  636 => 295,  632 => 294,  627 => 291,  625 => 289,  621 => 287,  615 => 283,  611 => 282,  606 => 279,  604 => 277,  600 => 275,  594 => 271,  590 => 270,  585 => 267,  583 => 265,  579 => 263,  573 => 259,  569 => 258,  564 => 255,  562 => 253,  558 => 251,  551 => 246,  547 => 245,  541 => 242,  537 => 241,  529 => 236,  525 => 235,  519 => 232,  515 => 231,  506 => 225,  502 => 224,  496 => 221,  492 => 220,  484 => 215,  480 => 214,  470 => 207,  461 => 201,  456 => 199,  448 => 194,  444 => 193,  437 => 189,  433 => 188,  428 => 185,  426 => 183,  422 => 181,  416 => 177,  412 => 176,  407 => 173,  405 => 171,  401 => 169,  395 => 165,  391 => 164,  386 => 161,  384 => 159,  380 => 157,  374 => 153,  370 => 152,  365 => 149,  363 => 147,  359 => 145,  353 => 141,  349 => 140,  344 => 137,  342 => 135,  338 => 133,  332 => 129,  328 => 128,  323 => 125,  321 => 123,  317 => 121,  311 => 117,  307 => 116,  302 => 113,  300 => 111,  296 => 109,  290 => 105,  286 => 104,  281 => 101,  279 => 99,  275 => 97,  269 => 93,  265 => 92,  260 => 89,  258 => 87,  254 => 85,  248 => 81,  244 => 80,  239 => 77,  237 => 75,  233 => 73,  227 => 69,  223 => 68,  217 => 65,  213 => 63,  206 => 59,  198 => 54,  194 => 53,  189 => 50,  187 => 49,  172 => 37,  162 => 30,  152 => 27,  149 => 26,  139 => 25,  128 => 22,  118 => 21,  99 => 17,  80 => 16,  69 => 12,  67 => 19,  65 => 14,  40 => 12,);
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

{% set menus = ['customer', 'customer_edit'] %}

{% block title %}{{ 'admin.customer.customer_registration'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.customer.customer_management'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block javascript %}
    <script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
{% endblock javascript %}

{% block main %}
    <form name=\"customer_form\" role=\"form\" id=\"customer_form\" method=\"post\" class=\"h-adr\"
          action=\"{%- if Customer.id %}{{ url('admin_customer_edit', { id : Customer.id }) }}{% else %}{{ url('admin_customer_new') }}{% endif -%}\"
          novalidate>
        <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
        {{ form_widget(form._token) }}
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\"><span class=\"card-title\">{{ 'admin.customer.customer_info'|trans }}</span>
                                </div>
                                <div class=\"col-4 text-end\">
                                    <a data-bs-toggle=\"collapse\" href=\"#ordererInfo\"
                                       aria-expanded=\"false\" aria-controls=\"ordererInfo\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"ordererInfo\">
                            <div class=\"card-body\">
                                {% if Customer.id %}
                                    <div class=\"row mb-2\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                 title=\"{{ 'tooltip.customer.customer_id'|trans }}\">
                                                <span>{{ 'admin.customer.customer_id'|trans }}</span>
                                                <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col\">
                                            <p>{{ Customer.id }}</p>
                                        </div>
                                    </div>
                                {% endif %}
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>{{ 'admin.common.company_name'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        {{ form_widget(form.company_name) }}
                                        {{ form_errors(form.company_name) }}
                                    </div>
                                </div>
{# 会社名カナ #}
<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    {{ form_label(form.customer_ext.company_kana, null, {
      'label_attr': {'class': 'col-form-label col-sm-4'}
    }) }}
  </div>
  <div class=\"col-md-9\">
    {{ form_widget(form.customer_ext.company_kana) }}
    {{ form_errors(form.customer_ext.company_kana) }}
  </div>
</div>
{# 代表者_姓 #}
<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    {{ form_label(form.customer_ext.rep_name01, null, {
      'label_attr': {'class': 'col-form-label col-sm-4'}
    }) }}
  </div>
  <div class=\"col-md-9\">
    {{ form_widget(form.customer_ext.rep_name01) }}
    {{ form_errors(form.customer_ext.rep_name01) }}
  </div>
</div>
{# 代表者_名 #}
<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    {{ form_label(form.customer_ext.rep_name02, null, {
      'label_attr': {'class': 'col-form-label col-sm-4'}
    }) }}
  </div>
  <div class=\"col-md-9\">
    {{ form_widget(form.customer_ext.rep_name02) }}
    {{ form_errors(form.customer_ext.rep_name02) }}
  </div>
</div>
{# 代表者カナ_姓 #}
<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    {{ form_label(form.customer_ext.rep_kana01, null, {
      'label_attr': {'class': 'col-form-label col-sm-4'}
    }) }}
  </div>
  <div class=\"col-md-9\">
    {{ form_widget(form.customer_ext.rep_kana01) }}
    {{ form_errors(form.customer_ext.rep_kana01) }}
  </div>
</div>
{# 代表者カナ_名 #}
<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    {{ form_label(form.customer_ext.rep_kana02, null, {
      'label_attr': {'class': 'col-form-label col-sm-4'}
    }) }}
  </div>
  <div class=\"col-md-9\">
    {{ form_widget(form.customer_ext.rep_kana02) }}
    {{ form_errors(form.customer_ext.rep_kana02) }}
  </div>
</div>
{# 部署名 #}
<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    {{ form_label(form.customer_ext.depart_name, null, {
      'label_attr': {'class': 'col-form-label col-sm-4'}
    }) }}
  </div>
  <div class=\"col-md-9\">
    {{ form_widget(form.customer_ext.depart_name) }}
    {{ form_errors(form.customer_ext.depart_name) }}
  </div>
</div>
{# 担当者_姓 #}
<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    {{ form_label(form.customer_ext.pic_name01, null, {
      'label_attr': {'class': 'col-form-label col-sm-4'}
    }) }}
  </div>
  <div class=\"col-md-9\">
    {{ form_widget(form.customer_ext.pic_name01) }}
    {{ form_errors(form.customer_ext.pic_name01) }}
  </div>
</div>
{# 担当者_名 #}
<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    {{ form_label(form.customer_ext.pic_name02, null, {
      'label_attr': {'class': 'col-form-label col-sm-4'}
    }) }}
  </div>
  <div class=\"col-md-9\">
    {{ form_widget(form.customer_ext.pic_name02) }}
    {{ form_errors(form.customer_ext.pic_name02) }}
  </div>
</div>
{# 担当者カナ_姓 #}
<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    {{ form_label(form.customer_ext.pic_kana01, null, {
      'label_attr': {'class': 'col-form-label col-sm-4'}
    }) }}
  </div>
  <div class=\"col-md-9\">
    {{ form_widget(form.customer_ext.pic_kana01) }}
    {{ form_errors(form.customer_ext.pic_kana01) }}
  </div>
</div>
{# 担当者カナ_名 #}
<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    {{ form_label(form.customer_ext.pic_kana02, null, {
      'label_attr': {'class': 'col-form-label col-sm-4'}
    }) }}
  </div>
  <div class=\"col-md-9\">
    {{ form_widget(form.customer_ext.pic_kana02) }}
    {{ form_errors(form.customer_ext.pic_kana02) }}
  </div>
</div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\"><span>{{ 'admin.common.address'|trans }}</span><span
                                                class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        <div class=\"mb-3\">
                                            <div class=\"row justify-content-start\">
                                                <div class=\"col-auto pe-0 align-self-center\"><span>{{ 'admin.common.postal_symbol'|trans }}</span></div>
                                                <div class=\"col-2\">
                                                    {{ form_widget(form.postal_code) }}

                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col\">
                                                    {{ form_errors(form.postal_code) }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mb-3\">
                                            <div class=\"row justify-content-start\">
                                                <div class=\"col-auto\">
                                                    {{ form_widget(form.address.pref) }}
                                                    {{ form_errors(form.address.pref) }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mb-3\">
                                            {{ form_widget(form.address.addr01, { attr : { placeholder : 'admin.common.address_sample_01' }} ) }}
                                            {{ form_errors(form.address.addr01) }}
                                        </div>
                                        <div class=\"mb-3\">
                                            {{ form_widget(form.address.addr02, { attr : { placeholder : 'admin.common.address_sample_02' }}) }}
                                            {{ form_errors(form.address.addr02) }}
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>{{ 'admin.common.mail_address'|trans }}</span>
                                        <span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        {{ form_widget(form.email) }}
                                        {{ form_errors(form.email) }}
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>{{ 'admin.common.phone_number'|trans }}</span>
                                        <span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        {{ form_widget(form.phone_number) }}
                                        {{ form_errors(form.phone_number) }}
                                    </div>
                                </div>

{# 携帯番号 #}
<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    {{ form_label(form.customer_ext.mb_phone_number, null, {
      'label_attr': {'class': 'col-form-label col-sm-4'}
    }) }}
  </div>
  <div class=\"col-md-9\">
    {{ form_widget(form.customer_ext.mb_phone_number) }}
    {{ form_errors(form.customer_ext.mb_phone_number) }}
  </div>
</div>
{# FAX番号 #}
<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    {{ form_label(form.customer_ext.fax_number, null, {
      'label_attr': {'class': 'col-form-label col-sm-4'}
    }) }}
  </div>
  <div class=\"col-md-9\">
    {{ form_widget(form.customer_ext.fax_number) }}
    {{ form_errors(form.customer_ext.fax_number) }}
  </div>
</div>
{# 設立年月 #}
<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    {{ form_label(form.customer_ext.established_ym, null, {
      'label_attr': {'class': 'col-form-label col-sm-4'}
    }) }}
  </div>
  <div class=\"col-md-9\">
    {{ form_widget(form.customer_ext.established_ym) }}
    {{ form_errors(form.customer_ext.established_ym) }}
  </div>
</div>
{# 年商 #}
<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    {{ form_label(form.customer_ext.annual_sales, null, {
      'label_attr': {'class': 'col-form-label col-sm-4'}
    }) }}
  </div>
  <div class=\"col-md-9\">
    {{ form_widget(form.customer_ext.annual_sales) }}
    {{ form_errors(form.customer_ext.annual_sales) }}
  </div>
</div>
{# 業態 / 業種 #}
<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    {{ form_label(form.customer_ext.business_type, null, {
      'label_attr': {'class': 'col-form-label col-sm-4'}
    }) }}
  </div>
  <div class=\"col-md-9\">
    {{ form_widget(form.customer_ext.business_type) }}
    {{ form_errors(form.customer_ext.business_type) }}
  </div>
</div>
{# ホームページURL #}
<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    {{ form_label(form.customer_ext.url, null, {
      'label_attr': {'class': 'col-form-label col-sm-4'}
    }) }}
  </div>
  <div class=\"col-md-9\">
    {{ form_widget(form.customer_ext.url) }}
    {{ form_errors(form.customer_ext.url) }}
  </div>
</div>
{# 実店舗 #}
<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    {{ form_label(form.customer_ext.real_store, null, {
      'label_attr': {'class': 'col-form-label col-sm-4'}
    }) }}
  </div>
  <div class=\"col-md-9\">
    {{ form_widget(form.customer_ext.real_store) }}
    {{ form_errors(form.customer_ext.real_store) }}
  </div>
</div>

                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>{{ 'admin.common.password'|trans }}</span>
                                        <span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        {{ form_widget(form.plain_password.first, { type : 'password'}) }}
                                        {{ form_errors(form.plain_password.first) }}
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>{{ 'admin.common.password_for_confirmation'|trans }}</span>
                                        <span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        {{ form_widget(form.plain_password.second, { type : 'password'}) }}
                                        {{ form_errors(form.plain_password.second) }}
                                    </div>
                                </div>


{# 掛け率 #}
<div class=\"row mb-3\">
  <div class=\"col-md-3\">
    {{ form_label(form.customer_ext.trade_rate, null, {
      'label_attr': {'class': 'col-form-label col-sm-4'}
    }) }}
  </div>
  <div class=\"col-md-9\">
    {{ form_widget(form.customer_ext.trade_rate) }}
    {{ form_errors(form.customer_ext.trade_rate) }}
  </div>
</div>



                                <div class=\"row mb-2 d-none\">
                                    <div class=\"col-3\">
                                        <span>{{ 'admin.common.name'|trans }}</span>
                                        <span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                {{ form_widget(form.name.name01) }}
                                            </div>
                                            <div class=\"col\">
                                                {{ form_widget(form.name.name02) }}
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                {{ form_errors(form.name.name01) }}
                                            </div>
                                            <div class=\"col\">
                                                {{ form_errors(form.name.name02) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row mb-2 d-none\">
                                    <div class=\"col-3\">
                                        <span>{{ 'admin.common.kana'|trans }}</span>
                                        <span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                {{ form_widget(form.kana.kana01) }}
                                            </div>
                                            <div class=\"col\">
                                                {{ form_widget(form.kana.kana02) }}
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                {{ form_errors(form.kana.kana01) }}
                                            </div>
                                            <div class=\"col\">
                                                {{ form_errors(form.kana.kana02) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row mb-2 d-none\">
                                    <div class=\"col-3\">
                                        <span>{{ 'admin.common.gender'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        {{ form_widget(form.sex,  {'label_attr': {'class': 'radio-inline'}}) }}
                                        {{ form_errors(form.sex) }}
                                    </div>
                                </div>
                                <div class=\"row mb-2 d-none\">
                                    <div class=\"col-3\">
                                        <span>{{ 'admin.common.job'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        {{ form_widget(form.job) }}
                                        {{ form_errors(form.job) }}
                                    </div>
                                </div>
                                <div class=\"row mb-2 d-none\">
                                    <div class=\"col-3\">
                                        <span>{{ 'admin.common.birth_day'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        {{ form_widget(form.birth) }}
                                        {{ form_errors(form.birth) }}
                                    </div>
                                </div>
                                <div class=\"row mb-2 d-none\">
                                    <div class=\"col-3\">
                                        <span>{{ 'admin.common.point'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        {{ form_widget(form.point) }}
                                        {{ form_errors(form.point) }}
                                    </div>
                                </div>



                                {# エンティティ拡張の自動出力 #}
                                {% for f in form|filter(f => f.vars.eccube_form_options.auto_render) %}
                                    {% if f.vars.eccube_form_options.form_theme %}
                                        {% form_theme f f.vars.eccube_form_options.form_theme %}
                                        {{ form_row(f) }}
                                    {% else %}
                                        <div class=\"row mb-2\">
                                            <div class=\"col-3\">
                                                <span>{{ f.vars.label|trans }}</span>
                                            </div>
                                            <div class=\"col\">
                                                {{ form_widget(f) }}
                                                {{ form_errors(f) }}
                                            </div>
                                        </div>
                                    {% endif %}
                                {% endfor %}

                            </div>
                        </div>
                    </div>

                    {% if Customer.id %}
                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                             title=\"{{ 'tooltip.customer.customer_address'|trans }}\">
                                        <span class=\"card-title\">
                                            {{ 'admin.customer.customer_address'|trans }}
                                            <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </span>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-end\">
                                        <a data-bs-toggle=\"collapse\" href=\"#delivery\" aria-expanded=\"false\"
                                           aria-controls=\"delivery\">
                                            <i class=\"fa fa-angle-up fa-lg\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"delivery\">
                                {% if Customer.CustomerAddresses|length > 0 %}
                                    <div class=\"card-body\">
                                        <table class=\"table table-striped table-sm\">
                                            <thead class=\"table-active\">
                                            <th class=\"align-middle pt-2 pb-2\">{{ 'admin.common.name'|trans }}</th>
                                            <th class=\"align-middle pt-2 pb-2\">{{ 'admin.common.address'|trans }}</th>
                                            <th class=\"align-middle pt-2 pb-2 pe-3\">{{ 'admin.common.phone_number'|trans }}</th>
                                            <th class=\"align-middle pt-2 pb-2 pe-3\"></th>
                                            </thead>
                                            <tbody>
                                            {% for CustomerAddress in Customer.CustomerAddresses %}
                                                <tr>
                                                    <td class=\"align-middle\">
                                                        {{ CustomerAddress.name01 }}&nbsp;{{ CustomerAddress.name02 }}
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <a href=\"{{ url('admin_customer_delivery_edit', { 'id': Customer.id, 'did': CustomerAddress.id }) }}\">
                                                            {{ 'admin.common.postal_symbol'|trans }}{{ CustomerAddress.postal_code }} {{ CustomerAddress.Pref }}{{ CustomerAddress.addr01 }}{{ CustomerAddress.addr02 }}
                                                        </a>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        {{ CustomerAddress.phone_number }}
                                                    </td>
                                                    <td>
                                                        <div class=\"text-center\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'admin.common.delete'|trans }}\">
                                                            <a class=\"btn btn-ec-actionIcon\" data-bs-toggle=\"modal\"
                                                               data-bs-target=\"#discontinuance-{{ CustomerAddress.id }}\">
                                                                <i class=\"fa fa-close text-secondary\"
                                                                   aria-hidden=\"true\"></i>
                                                            </a>
                                                        </div>
                                                        <div class=\"modal fade\" id=\"discontinuance-{{ CustomerAddress.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"discontinuance\" aria-hidden=\"true\">
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
                                                                            {{ 'admin.common.delete_modal__message'|trans({ '%name%' : 'admin.common.postal_symbol'|trans ~ CustomerAddress.postal_code ~ CustomerAddress.Pref ~ ' ' ~ CustomerAddress.name01 ~ CustomerAddress.name02 }) }}</p>
                                                                    </div>
                                                                    <div class=\"modal-footer\">
                                                                        <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">
                                                                            {{ 'admin.common.cancel'|trans }}
                                                                        </button>
                                                                        <a href=\"{{ url('admin_customer_delivery_delete', {'id' : Customer.id, 'did':  CustomerAddress.id}) }}\" class=\"btn btn-ec-delete\"{{ csrf_token_for_anchor() }} data-method=\"delete\" data-confirm=\"false\">
                                                                            {{ 'admin.common.delete'|trans }}
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

                                        {# TODO: 新規追加ボタンと文言のデザインを整える #}
                                        {% if Customer.CustomerAddresses|length < eccube_config.eccube_deliv_addr_max %}
                                            <div class=\"d-block text-center\">
                                                <a href=\"{{ url('admin_customer_delivery_new', { id: Customer.id }) }}\"
                                                   class=\"btn btn-ec-regular\">{{ 'admin.customer.customer_address__add'|trans }}</a>
                                            </div>
                                        {% else %}
                                            <span class=\"ec-errorMessage\">
                                                {{ 'admin.customer.customer_address_count_is_over'|trans({\"%eccube_deliv_addr_max%\":eccube_config.eccube_deliv_addr_max}) }}
                                            </span>
                                        {% endif %}
                                    </div>
                                {% else %}
                                    <div class=\"card-body\">
                                        <div id=\"address_box\" class=\"data-empty\">
                                            <span>{{ 'admin.customer.no_customer_address'|trans }}</span>
                                        </div>

                                        <div class=\"d-block text-center\">
                                            <a href=\"{{ url('admin_customer_delivery_new', { id: Customer.id }) }}\"
                                               class=\"btn btn-ec-regular\">{{ 'admin.customer.customer_address__add'|trans }}</a>
                                        </div>

                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    {% endif %}

                    {% if Customer.id %}
                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                             title=\"{{ 'tooltip.customer.purchase_history'|trans }}\">
                                        <span class=\"card-title\">
                                            {{ 'admin.customer.purchase_history'|trans }}
                                            <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </span>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-end\">
                                        <a data-bs-toggle=\"collapse\" href=\"#orderHistory\" aria-expanded=\"false\"
                                           aria-controls=\"orderHistory\">
                                            <i class=\"fa fa-angle-up fa-lg\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"orderHistory\">
                                {% if Customer.Orders|length > 0 %}
                                    <div class=\"card-body\">
                                        <div class=\"row justify-content-between mb-2\">
                                            <div class=\"col-6\">
                                            </div>
                                            <div class=\"col-5 text-end\">
                                                <div class=\"d-inline-block me-2 align-bottom\">
                                                    <div>
                                                        <select class=\"form-select\" onchange=\"location = this.value;\">
                                                            {% for pageMax in pageMaxis %}
                                                                <option {% if pageMax.name == page_count %}selected=\"\"{% endif %} value=\"{{ path('admin_customer_edit', {'id':Customer.id, 'page_no': 1, 'page_count': pageMax.name}) }}\">{{ 'admin.common.count'|trans({ '%count%': pageMax.name }) }}</option>
                                                            {% endfor %}
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <table class=\"table table-striped table-sm\">
                                            <thead class=\"table-active\">
                                            <th class=\"align-middle pt-2 pb-2 ps-3\">{{ 'admin.order.order_date'|trans }}</th>
                                            <th class=\"align-middle pt-2 pb-2\">{{ 'admin.order.order_no'|trans }}</th>
                                            <th class=\"align-middle pt-2 pb-2\">{{ 'admin.order.purchase_price'|trans }}</th>
                                            <th class=\"align-middle pt-2 pb-2 pe-3\">{{ 'admin.order.order_status'|trans }}</th>
                                            </thead>
                                            <tbody>
                                            {% for Order in pagination %}
                                                <tr>
                                                    <td class=\"align-middle ps-3\">{{ Order.order_date|date_min }}</td>
                                                    <td class=\"align-middle\">
                                                        <a href=\"{{ url('admin_order_edit', { 'id' : Order.id }) }}\">
                                                            {{ Order.order_no }}
                                                        </a>
                                                    </td>
                                                    <td class=\"align-middle\">{{ Order.total|price }}</td>
                                                    <td class=\"align-middle pe-3\">
                                                        <span class=\"badge badge-ec-blue\" style=\"background-color: #fff; color: {{ Order.OrderStatusColor }}; border-color: {{ Order.OrderStatusColor }}\">{{ Order.OrderStatus }}</span>
                                                    </td>
                                                </tr>
                                            {% endfor %}
                                            </tbody>
                                        </table>
                                        {% if pagination.totalItemCount > 0 %}
                                                <div class=\"row justify-content-md-center pb-4\">
                                                    {% include \"@admin/pager.twig\" with { 'id':Customer.id, 'pages' : pagination.paginationData, 'routes' : 'admin_customer_edit' } %}
                                                </div>
                                            {% endif %}
                                    </div>
                                {% else %}
                                    <div class=\"card-body\">
                                        <div id=\"history_box\" class=\"data-empty\">
                                        <span>
                                            {{ 'admin.customer.no_purchase_history'|trans }}
                                        </span>
                                        </div>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    {% endif %}

                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                         title=\"{{ 'tooltip.customer.shop_memo'|trans }}\">
                                        <span class=\"card-title\">{{ 'admin.common.shop_memo'|trans }}</span>
                                        <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col-4 text-end\">
                                    <a data-bs-toggle=\"collapse\" href=\"#shopMemo\" aria-expanded=\"false\"
                                       aria-controls=\"shopMemo\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"shopMemo\">
                            <div class=\"card-body\">
                                {{ form_widget(form.note, { 'attr': { 'row': 8 }}) }}
                                {{ form_errors(form.note) }}
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
                            <a class=\"c-baseLink\"
                               href=\"{{ url('admin_customer_page', { page_no : app.session.get('eccube.admin.customer.search.page_no')|default('1') } ) }}?resume=1\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                <span>{{ 'admin.customer.customer_list'|trans }}</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                {{ form_widget(form.status) }}
                                {{ form_errors(form.status) }}
                            </div>
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\"
                                        type=\"submit\">{{ 'admin.common.registration'|trans }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
{% endblock %}
", "@admin/Customer/edit.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\template\\admin\\Customer\\edit.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 14, "form_theme" => 19, "if" => 27, "for" => 460, "include" => 659);
        static $filters = array("escape" => 16, "trans" => 16, "filter" => 460, "length" => 503, "date_min" => 643, "price" => 649, "default" => 711);
        static $functions = array("url" => 27, "form_widget" => 30, "form_errors" => 69, "form_label" => 75, "form_row" => 463, "csrf_token_for_anchor" => 552, "path" => 626);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'if', 'for', 'include'],
                ['escape', 'trans', 'filter', 'length', 'date_min', 'price', 'default'],
                ['url', 'form_widget', 'form_errors', 'form_label', 'form_row', 'csrf_token_for_anchor', 'path']
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
