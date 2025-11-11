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

/* @admin/Customer/delivery_edit.twig */
class __TwigTemplate_f0064be455861e3e196d7cc7af1266f6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Customer/delivery_edit.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Customer/delivery_edit.twig"));

        // line 14
        $context["menus"] = ["customer", "customer_edit"];
        // line 19
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 12
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Customer/delivery_edit.twig", 12);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_address_registration"), "html", null, true);
        
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
        echo "
    <form name=\"customer_address_form\"
          role=\"form\"
          id=\"customer_address_form\"
          method=\"post\"
          action=\"";
        // line 31
        if (twig_get_attribute($this->env, $this->source, (isset($context["CustomerAddress"]) || array_key_exists("CustomerAddress", $context) ? $context["CustomerAddress"] : (function () { throw new RuntimeError('Variable "CustomerAddress" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, true, 31)) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_delivery_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, true, 31), "did" => twig_get_attribute($this->env, $this->source, (isset($context["CustomerAddress"]) || array_key_exists("CustomerAddress", $context) ? $context["CustomerAddress"] : (function () { throw new RuntimeError('Variable "CustomerAddress" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, true, 31)]), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_delivery_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, true, 31)]), "html", null, true);
        }
        echo "\"
          novalidate class=\"h-adr\">
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "_token", [], "any", false, false, true, 33), 33, $this->source), 'widget');
        echo "
        <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <span class=\"card-title\">";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_address_info"), "html", null, true);
        echo "</span>
                        </div>
                        <div class=\"card-body\">
                            ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, (isset($context["CustomerAddress"]) || array_key_exists("CustomerAddress", $context) ? $context["CustomerAddress"] : (function () { throw new RuntimeError('Variable "CustomerAddress" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, true, 43)) {
            // line 44
            echo "                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        ";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.id"), "html", null, true);
            echo "
                                    </div>
                                    <div class=\"col\">
                                        ";
            // line 49
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["CustomerAddress"]) || array_key_exists("CustomerAddress", $context) ? $context["CustomerAddress"] : (function () { throw new RuntimeError('Variable "CustomerAddress" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            echo "
                                    </div>
                                </div>
                            ";
        }
        // line 53
        echo "
                            <div class=\"row mb-2\">
                                <div class=\"col-3 mb-2\">
                                    ";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.company_name"), "html", null, true);
        echo "
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "company_name", [], "any", false, false, true, 59), 59, $this->source), 'widget');
        echo "
                                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "company_name", [], "any", false, false, true, 60), 60, $this->source), 'errors');
        echo "
                                </div>
                            </div>

";
        // line 64
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "customer_address_ext", [], "any", true, true, true, 64)) {
            // line 65
            echo "  <div class=\"row mb-3\">
    <div class=\"col-sm-3\">
      ";
            // line 67
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "customer_address_ext", [], "any", false, false, true, 67), "depart_name", [], "any", false, false, true, 67), 67, $this->source), 'label', ["label_attr" => ["class" => "col-form-label col-sm-3"]]);
            echo "
    </div>
    <div class=\"col-sm-9\">
      ";
            // line 70
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "customer_address_ext", [], "any", false, false, true, 70), "depart_name", [], "any", false, false, true, 70), 70, $this->source), 'widget');
            echo "
      ";
            // line 71
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "customer_address_ext", [], "any", false, false, true, 71), "depart_name", [], "any", false, false, true, 71), 71, $this->source), 'errors');
            echo "
    </div>
  </div>
  <div class=\"row mb-3\">
    <div class=\"col-sm-3\">
      ";
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "customer_address_ext", [], "any", false, false, true, 76), "pic_name", [], "any", false, false, true, 76), 76, $this->source), 'label', ["label_attr" => ["class" => "col-form-label col-sm-3"]]);
            echo "
    </div>
    <div class=\"col-sm-9\">
      ";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "customer_address_ext", [], "any", false, false, true, 79), "pic_name", [], "any", false, false, true, 79), 79, $this->source), 'widget');
            echo "
      ";
            // line 80
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "customer_address_ext", [], "any", false, false, true, 80), "pic_name", [], "any", false, false, true, 80), 80, $this->source), 'errors');
            echo "
    </div>
  </div>
";
        }
        // line 84
        echo "

                            <div class=\"row mb-2\">
                                <div class=\"col-3\">
                                    <span>";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.address"), "html", null, true);
        echo "</span>
                                    <span class=\"badge bg-primary ms-1\">";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col\">
                                    <div class=\"row mb-2\">
                                        <div class=\"col-auto pe-0 align-self-center\"><span>";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol"), "html", null, true);
        echo "</span></div>
                                        <div class=\"col-2\">
                                            ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "postal_code", [], "any", false, false, true, 95), 95, $this->source), 'widget');
        echo "
                                            ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "postal_code", [], "any", false, false, true, 96), 96, $this->source), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row mb-2\">
                                <div class=\"col-3\">
                                    &nbsp;
                                </div>
                                <div class=\"col row mb-2\">
                                    <span class=\"col-auto\">";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "address", [], "any", false, false, true, 107), "pref", [], "any", false, false, true, 107), 107, $this->source), 'widget');
        echo "</span>
                                    ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "address", [], "any", false, false, true, 108), "pref", [], "any", false, false, true, 108), 108, $this->source), 'errors');
        echo "
                                </div>
                            </div>

                            <div class=\"row mb-2\">
                                <div class=\"col-3\">
                                    &nbsp;
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "address", [], "any", false, false, true, 117), "addr01", [], "any", false, false, true, 117), 117, $this->source), 'widget');
        echo "
                                    ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "address", [], "any", false, false, true, 118), "addr01", [], "any", false, false, true, 118), 118, $this->source), 'errors');
        echo "
                                </div>
                            </div>

                            <div class=\"row mb-2\">
                                <div class=\"col-3\">
                                    &nbsp;
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "address", [], "any", false, false, true, 127), "addr02", [], "any", false, false, true, 127), 127, $this->source), 'widget');
        echo "
                                    ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "address", [], "any", false, false, true, 128), "addr02", [], "any", false, false, true, 128), 128, $this->source), 'errors');
        echo "
                                </div>
                            </div>

                            <div class=\"row mb-2\">
                                <div class=\"col-3\">
                                    <span>";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
        echo "</span>
                                    <span class=\"badge bg-primary ms-1\">";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col\">
                                    ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "phone_number", [], "any", false, false, true, 138), 138, $this->source), 'widget');
        echo "
                                    ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "phone_number", [], "any", false, false, true, 139), 139, $this->source), 'errors');
        echo "
                                </div>
                            </div>






                            <div class=\"row mb-2 d-none\">
                                <div class=\"col-3\">
                                    <span>";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.name"), "html", null, true);
        echo "</span>
                                    <span class=\"badge bg-primary ms-1\">";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col\">
                                    <div class=\"row mb-2\">
                                        <div class=\"col\">
                                            ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), "name", [], "any", false, false, true, 156), "name01", [], "any", false, false, true, 156), 156, $this->source), 'widget');
        echo "
                                            ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "name", [], "any", false, false, true, 157), "name01", [], "any", false, false, true, 157), 157, $this->source), 'errors');
        echo "
                                        </div>
                                        <div class=\"col\">
                                            ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "name", [], "any", false, false, true, 160), "name02", [], "any", false, false, true, 160), 160, $this->source), 'widget');
        echo "
                                            ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "name", [], "any", false, false, true, 161), "name02", [], "any", false, false, true, 161), 161, $this->source), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row mb-2 d-none\">
                                <div class=\"col-3\">
                                    <span>";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.kana"), "html", null, true);
        echo "</span>
                                    <span class=\"badge bg-primary ms-1\">";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col\">
                                    <div class=\"row mb-2\">
                                        <div class=\"col\">
                                            ";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 175, $this->source); })()), "kana", [], "any", false, false, true, 175), "kana01", [], "any", false, false, true, 175), 175, $this->source), 'widget');
        echo "
                                            ";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "kana", [], "any", false, false, true, 176), "kana01", [], "any", false, false, true, 176), 176, $this->source), 'errors');
        echo "
                                        </div>
                                        <div class=\"col\">
                                            ";
        // line 179
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "kana", [], "any", false, false, true, 179), "kana02", [], "any", false, false, true, 179), 179, $this->source), 'widget');
        echo "
                                            ";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "kana", [], "any", false, false, true, 180), "kana02", [], "any", false, false, true, 180), 180, $this->source), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>


                            ";
        // line 188
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 188), "eccube_form_options", [], "any", false, false, true, 188), "auto_render", [], "any", false, false, true, 188); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 189
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 189), "eccube_form_options", [], "any", false, false, true, 189), "form_theme", [], "any", false, false, true, 189)) {
                // line 190
                echo "                                    ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 190), "eccube_form_options", [], "any", false, false, true, 190), "form_theme", [], "any", false, false, true, 190)], true);
                // line 191
                echo "                                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 191, $this->source), 'row');
                echo "
                                ";
            } else {
                // line 193
                echo "                                    <div class=\"row mb-2\">
                                        <div class=\"col-3\">
                                            <span>";
                // line 195
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 195), "label", [], "any", false, false, true, 195), 195, $this->source)), "html", null, true);
                echo "</span>
                                        </div>
                                        <div class=\"col\">
                                            ";
                // line 198
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 198, $this->source), 'widget');
                echo "
                                            ";
                // line 199
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 199, $this->source), 'errors');
                echo "
                                        </div>
                                    </div>
                                ";
            }
            // line 203
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "
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
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 216, $this->source); })()), "id", [], "any", false, false, true, 216)]), "html", null, true);
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                <span>";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_registration"), "html", null, true);
        echo "</span></a>
                        </div>
                    </div>
                    <div id=\"ex-conversion-action\" class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\"
                                        type=\"submit\">";
        // line 225
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
        return "@admin/Customer/delivery_edit.twig";
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
        return array (  522 => 225,  512 => 218,  507 => 216,  493 => 204,  487 => 203,  480 => 199,  476 => 198,  470 => 195,  466 => 193,  460 => 191,  457 => 190,  454 => 189,  449 => 188,  439 => 180,  435 => 179,  429 => 176,  425 => 175,  417 => 170,  413 => 169,  402 => 161,  398 => 160,  392 => 157,  388 => 156,  380 => 151,  376 => 150,  362 => 139,  358 => 138,  352 => 135,  348 => 134,  339 => 128,  335 => 127,  323 => 118,  319 => 117,  307 => 108,  303 => 107,  289 => 96,  285 => 95,  280 => 93,  273 => 89,  269 => 88,  263 => 84,  256 => 80,  252 => 79,  246 => 76,  238 => 71,  234 => 70,  228 => 67,  224 => 65,  222 => 64,  215 => 60,  211 => 59,  205 => 56,  200 => 53,  193 => 49,  187 => 46,  183 => 44,  181 => 43,  175 => 40,  165 => 33,  156 => 31,  149 => 26,  139 => 25,  128 => 22,  118 => 21,  99 => 17,  80 => 16,  69 => 12,  67 => 19,  65 => 14,  40 => 12,);
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

{% block title %}{{ 'admin.customer.customer_address_registration'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.customer.customer_management'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block javascript %}
    <script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
{% endblock javascript %}

{% block main %}

    <form name=\"customer_address_form\"
          role=\"form\"
          id=\"customer_address_form\"
          method=\"post\"
          action=\"{%- if CustomerAddress.id %}{{ url('admin_customer_delivery_edit', { id : Customer.id, did: CustomerAddress.id }) }}{% else %}{{ url('admin_customer_delivery_new', { id: Customer.id }) }}{% endif -%}\"
          novalidate class=\"h-adr\">
        {{ form_widget(form._token) }}
        <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <span class=\"card-title\">{{ 'admin.customer.customer_address_info'|trans }}</span>
                        </div>
                        <div class=\"card-body\">
                            {% if CustomerAddress.id %}
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        {{ 'admin.common.id'|trans }}
                                    </div>
                                    <div class=\"col\">
                                        {{ CustomerAddress.id }}
                                    </div>
                                </div>
                            {% endif %}

                            <div class=\"row mb-2\">
                                <div class=\"col-3 mb-2\">
                                    {{ 'admin.common.company_name'|trans }}
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.company_name) }}
                                    {{ form_errors(form.company_name) }}
                                </div>
                            </div>

{% if form.customer_address_ext is defined %}
  <div class=\"row mb-3\">
    <div class=\"col-sm-3\">
      {{ form_label(form.customer_address_ext.depart_name, null, {'label_attr': {'class': 'col-form-label col-sm-3'}}) }}
    </div>
    <div class=\"col-sm-9\">
      {{ form_widget(form.customer_address_ext.depart_name) }}
      {{ form_errors(form.customer_address_ext.depart_name) }}
    </div>
  </div>
  <div class=\"row mb-3\">
    <div class=\"col-sm-3\">
      {{ form_label(form.customer_address_ext.pic_name, null, {'label_attr': {'class': 'col-form-label col-sm-3'}}) }}
    </div>
    <div class=\"col-sm-9\">
      {{ form_widget(form.customer_address_ext.pic_name) }}
      {{ form_errors(form.customer_address_ext.pic_name) }}
    </div>
  </div>
{% endif %}


                            <div class=\"row mb-2\">
                                <div class=\"col-3\">
                                    <span>{{ 'admin.common.address'|trans }}</span>
                                    <span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span>
                                </div>
                                <div class=\"col\">
                                    <div class=\"row mb-2\">
                                        <div class=\"col-auto pe-0 align-self-center\"><span>{{ 'admin.common.postal_symbol'|trans }}</span></div>
                                        <div class=\"col-2\">
                                            {{ form_widget(form.postal_code) }}
                                            {{ form_errors(form.postal_code) }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row mb-2\">
                                <div class=\"col-3\">
                                    &nbsp;
                                </div>
                                <div class=\"col row mb-2\">
                                    <span class=\"col-auto\">{{ form_widget(form.address.pref) }}</span>
                                    {{ form_errors(form.address.pref) }}
                                </div>
                            </div>

                            <div class=\"row mb-2\">
                                <div class=\"col-3\">
                                    &nbsp;
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.address.addr01) }}
                                    {{ form_errors(form.address.addr01) }}
                                </div>
                            </div>

                            <div class=\"row mb-2\">
                                <div class=\"col-3\">
                                    &nbsp;
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.address.addr02) }}
                                    {{ form_errors(form.address.addr02) }}
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






                            <div class=\"row mb-2 d-none\">
                                <div class=\"col-3\">
                                    <span>{{ 'admin.common.name'|trans }}</span>
                                    <span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span>
                                </div>
                                <div class=\"col\">
                                    <div class=\"row mb-2\">
                                        <div class=\"col\">
                                            {{ form_widget(form.name.name01) }}
                                            {{ form_errors(form.name.name01) }}
                                        </div>
                                        <div class=\"col\">
                                            {{ form_widget(form.name.name02) }}
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
                                    <div class=\"row mb-2\">
                                        <div class=\"col\">
                                            {{ form_widget(form.kana.kana01) }}
                                            {{ form_errors(form.kana.kana01) }}
                                        </div>
                                        <div class=\"col\">
                                            {{ form_widget(form.kana.kana02) }}
                                            {{ form_errors(form.kana.kana02) }}
                                        </div>
                                    </div>
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
            </div>
        </div>

        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"{{ url('admin_customer_edit', { id: Customer.id }) }}\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                <span>{{ 'admin.customer.customer_registration'|trans }}</span></a>
                        </div>
                    </div>
                    <div id=\"ex-conversion-action\" class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
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
", "@admin/Customer/delivery_edit.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\template\\admin\\Customer\\delivery_edit.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 14, "form_theme" => 19, "if" => 31, "for" => 188);
        static $filters = array("escape" => 16, "trans" => 16, "filter" => 188);
        static $functions = array("url" => 31, "form_widget" => 33, "form_errors" => 60, "form_label" => 67, "form_row" => 191);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'if', 'for'],
                ['escape', 'trans', 'filter'],
                ['url', 'form_widget', 'form_errors', 'form_label', 'form_row']
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
