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

/* @admin/Order/mail_confirm.twig */
class __TwigTemplate_12eee77e6f0a7cab15af424ef4ea0630 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Order/mail_confirm.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Order/mail_confirm.twig"));

        // line 13
        $context["menus"] = ["order", "order_master"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Order/mail_confirm.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail"), "html", null, true);
        
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_management"), "html", null, true);
        
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
        echo "<script>
\$(function() {
    \$('#template-change').on('change', function() {
        \$('#mode').val('change');
        \$('#order-mail-form').submit();
        return false;
    });

    \$('#back').on('click', function(e) {
        e.preventDefault();
        \$('#mode').val('back');
        \$('#order-mail-form').submit();
        return false;
    });
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 39
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 40
        echo "<div class=\"c-contentsArea__cols\">
    <div class=\"c-contentsArea__primaryCol\">
        <div class=\"c-primaryCol\">
            <div class=\"card rounded border-0 mb-4\">
                <div class=\"card-header\">
                    <div class=\"row\">
                        <div class=\"col-8\">
                            <div class=\"d-inline-block\"><span class=\"card-title\">";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_destination_info"), "html", null, true);
        echo "</span></div>
                        </div>
                        <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#mailTo\" aria-expanded=\"false\" aria-controls=\"mailTo\"></a></div>
                    </div>
                </div>
                <div class=\"collapse show ec-cardCollapse\" id=\"mailTo\">
                    <div class=\"card-body\">
                        <div class=\"row mb-2\">
                            <div class=\"col-2\"><span>";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_no"), "html", null, true);
        echo "</span></div>
                            <div class=\"col-4\"><span>";
        // line 56
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "</span></div>
                            <div class=\"col-2\"><span>";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_price"), "html", null, true);
        echo "</span></div>
                            <div class=\"col-4\"><span>";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 58, $this->source); })()), "payment_total", [], "any", false, false, true, 58), 58, $this->source)), "html", null, true);
        echo "</span></div>
                        </div>
                        <div class=\"row mb-2\">
                            <div class=\"col-2\"><span>";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.orderer"), "html", null, true);
        echo "</span></div>
                            <div class=\"col-4\"><span>";
        // line 62
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 62, $this->source); })()), "name01", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 62, $this->source); })()), "name02", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "（";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 62, $this->source); })()), "kana01", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 62, $this->source); })()), "kana02", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "）</span><br>〒";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 62, $this->source); })()), "postal_code", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "<br>";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 62, $this->source); })()), "pref", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 62, $this->source); })()), "addr01", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 62, $this->source); })()), "addr02", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "</div>
                            <div class=\"col-2\"><span>";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_product"), "html", null, true);
        echo "</span></div>
                            <div class=\"col-4\"><span>
                            ";
        // line 65
        if (twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 65, $this->source); })()), "productOrderItems", [], "any", false, false, true, 65)) {
            // line 66
            echo "                                ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 66, $this->source); })()), "productOrderItems", [], "any", false, false, true, 66), 0, [], "array", false, false, true, 66), "productName", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
            echo "
                                ";
            // line 67
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 67, $this->source); })()), "productOrderItems", [], "any", false, false, true, 67)) > 2)) {
                // line 68
                echo "                                    ";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_purchase_product_count", ["%count%" => (twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 68, $this->source); })()), "productOrderItems", [], "any", false, false, true, 68), 68, $this->source)) - 1)]);
                echo "
                                ";
            }
            // line 70
            echo "                            ";
        }
        // line 71
        echo "                            </span></div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-2\"><span>";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_status"), "html", null, true);
        echo "</span></div>
                            <div class=\"col-10\"><span class=\"badge badge-ec-blue\" style=\"background-color: #fff; color: ";
        // line 75
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 75, $this->source); })()), "OrderStatusColor", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo "; border-color: ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 75, $this->source); })()), "OrderStatusColor", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 75, $this->source); })()), "OrderStatus", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo "</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <form id=\"order-mail-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_mail", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 81, $this->source); })()), "id", [], "any", false, false, true, 81)]), "html", null, true);
        echo "\">
                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "_token", [], "any", false, false, true, 82), 82, $this->source), 'widget');
        echo "
                <input id=\"mode\" type=\"hidden\" name=\"mode\">

                <div class=\"card rounded border-0 mb-4\">
                <div class=\"card-header\">
                    <div class=\"row\">
                        <div class=\"col-8\"><span class=\"card-title\">";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_mail_info"), "html", null, true);
        echo "</span></div>
                        <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#mailCreate\" aria-expanded=\"false\" aria-controls=\"mailCreate\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                    </div>
                </div>
                <div class=\"collapse show ec-cardCollapse\" id=\"mailCreate\">
                    <div class=\"card-body\">
                        <div class=\"row mb-2\">
                            <div class=\"col-3\">
                                <div class=\"d-inline-block\"><span>";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_template"), "html", null, true);
        echo "</span></div>
                            </div>
                            <div class=\"col\">
                                ";
        // line 99
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "template", [], "any", false, false, true, 99), "vars", [], "any", false, false, true, 99), "data", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
        echo "
                                ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "template", [], "any", false, false, true, 100), 100, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                            </div>
                        </div>
                        <div class=\"row mb-2\">
                            <div class=\"col-3\"><span>";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_subject"), "html", null, true);
        echo "</span><span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                            <div class=\"col\">
                                ";
        // line 106
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "mail_subject", [], "any", false, false, true, 106), "vars", [], "any", false, false, true, 106), "data", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
        echo "
                                ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "mail_subject", [], "any", false, false, true, 107), 107, $this->source), 'widget', ["type" => "hidden"]);
        echo "
                            </div>
                        </div>
                        <div class=\"row mb-2\">
                            <div class=\"col-3\"><span>";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_body"), "html", null, true);
        echo "</span></div>
                            <div class=\"col\">
                                <div id=\"detail_box__tpl_data\" class=\"mb-3 tab-pane active\">
                                    ";
        // line 114
        echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "tpl_data", [], "any", false, false, true, 114), "vars", [], "any", false, false, true, 114), "data", [], "any", false, false, true, 114), 114, $this->source)), "html", null, true));
        echo "
                                    <div style=\"display: none\">";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "tpl_data", [], "any", false, false, true, 115), 115, $this->source), 'widget');
        echo "</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"c-conversionArea\">
                    <div class=\"c-conversionArea__container\">
                        <div class=\"row justify-content-between align-items-center\">
                            <div class=\"col-6\">
                                <div class=\"c-conversionArea__leftBlockItem\"><a class=\"c-baseLink\" href=\"javascript:void(0)\" id=\"back\"><i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail"), "html", null, true);
        echo "</span></a>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"row align-items-center justify-content-end\">
                                    <div class=\"col-auto\"><button type=\"submit\" class=\"btn btn-ec-conversion px-5\" name=\"mode\" value=\"complete\">";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_send"), "html", null, true);
        echo "</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </form>
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
        return "@admin/Order/mail_confirm.twig";
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
        return array (  357 => 130,  349 => 125,  336 => 115,  332 => 114,  326 => 111,  319 => 107,  315 => 106,  308 => 104,  301 => 100,  297 => 99,  291 => 96,  280 => 88,  271 => 82,  267 => 81,  254 => 75,  250 => 74,  245 => 71,  242 => 70,  236 => 68,  234 => 67,  229 => 66,  227 => 65,  222 => 63,  206 => 62,  202 => 61,  196 => 58,  192 => 57,  188 => 56,  184 => 55,  173 => 47,  164 => 40,  154 => 39,  128 => 21,  118 => 20,  99 => 16,  80 => 15,  69 => 11,  67 => 18,  65 => 13,  40 => 11,);
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

{% set menus = ['order', 'order_master'] %}

{% block title %}{{'admin.order.mail'|trans}}{% endblock %}
{% block sub_title %}{{'admin.order.order_management'|trans}}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block javascript %}
<script>
\$(function() {
    \$('#template-change').on('change', function() {
        \$('#mode').val('change');
        \$('#order-mail-form').submit();
        return false;
    });

    \$('#back').on('click', function(e) {
        e.preventDefault();
        \$('#mode').val('back');
        \$('#order-mail-form').submit();
        return false;
    });
});
</script>
{% endblock javascript %}

{% block main %}
<div class=\"c-contentsArea__cols\">
    <div class=\"c-contentsArea__primaryCol\">
        <div class=\"c-primaryCol\">
            <div class=\"card rounded border-0 mb-4\">
                <div class=\"card-header\">
                    <div class=\"row\">
                        <div class=\"col-8\">
                            <div class=\"d-inline-block\"><span class=\"card-title\">{{ 'admin.order.mail_destination_info'|trans }}</span></div>
                        </div>
                        <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#mailTo\" aria-expanded=\"false\" aria-controls=\"mailTo\"></a></div>
                    </div>
                </div>
                <div class=\"collapse show ec-cardCollapse\" id=\"mailTo\">
                    <div class=\"card-body\">
                        <div class=\"row mb-2\">
                            <div class=\"col-2\"><span>{{ 'admin.order.order_no'|trans }}</span></div>
                            <div class=\"col-4\"><span>{{ Order.id }}</span></div>
                            <div class=\"col-2\"><span>{{ 'admin.order.purchase_price'|trans }}</span></div>
                            <div class=\"col-4\"><span>{{ Order.payment_total|price }}</span></div>
                        </div>
                        <div class=\"row mb-2\">
                            <div class=\"col-2\"><span>{{ 'admin.order.orderer'|trans }}</span></div>
                            <div class=\"col-4\"><span>{{ Order.name01 }} {{ Order.name02 }}（{{ Order.kana01 }} {{ Order.kana02 }}）</span><br>〒{{ Order.postal_code }}<br>{{ Order.pref }}{{ Order.addr01 }}{{ Order.addr02 }}</div>
                            <div class=\"col-2\"><span>{{ 'admin.order.purchase_product'|trans }}</span></div>
                            <div class=\"col-4\"><span>
                            {% if Order.productOrderItems %}
                                {{ Order.productOrderItems[0].productName }}
                                {% if Order.productOrderItems|length > 2 %}
                                    {{ 'admin.order.mail_purchase_product_count'|trans({'%count%':Order.productOrderItems|length - 1})|raw }}
                                {% endif %}
                            {% endif %}
                            </span></div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-2\"><span>{{ 'admin.order.order_status'|trans }}</span></div>
                            <div class=\"col-10\"><span class=\"badge badge-ec-blue\" style=\"background-color: #fff; color: {{ Order.OrderStatusColor }}; border-color: {{ Order.OrderStatusColor }}\">{{ Order.OrderStatus }}</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <form id=\"order-mail-form\" class=\"form-horizontal\" method=\"post\" action=\"{{ url('admin_order_mail', {id : Order.id}) }}\">
                {{ form_widget(form._token) }}
                <input id=\"mode\" type=\"hidden\" name=\"mode\">

                <div class=\"card rounded border-0 mb-4\">
                <div class=\"card-header\">
                    <div class=\"row\">
                        <div class=\"col-8\"><span class=\"card-title\">{{ 'admin.order.mail_mail_info'|trans }}</span></div>
                        <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#mailCreate\" aria-expanded=\"false\" aria-controls=\"mailCreate\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                    </div>
                </div>
                <div class=\"collapse show ec-cardCollapse\" id=\"mailCreate\">
                    <div class=\"card-body\">
                        <div class=\"row mb-2\">
                            <div class=\"col-3\">
                                <div class=\"d-inline-block\"><span>{{ 'admin.order.mail_template'|trans }}</span></div>
                            </div>
                            <div class=\"col\">
                                {{ form.template.vars.data }}
                                {{ form_widget(form.template, { type : 'hidden' }) }}
                            </div>
                        </div>
                        <div class=\"row mb-2\">
                            <div class=\"col-3\"><span>{{ 'admin.order.mail_subject'|trans }}</span><span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span></div>
                            <div class=\"col\">
                                {{ form.mail_subject.vars.data }}
                                {{ form_widget(form.mail_subject, { type : 'hidden' }) }}
                            </div>
                        </div>
                        <div class=\"row mb-2\">
                            <div class=\"col-3\"><span>{{ 'admin.order.mail_body'|trans }}</span></div>
                            <div class=\"col\">
                                <div id=\"detail_box__tpl_data\" class=\"mb-3 tab-pane active\">
                                    {{ form.tpl_data.vars.data|trans|nl2br }}
                                    <div style=\"display: none\">{{ form_widget(form.tpl_data) }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"c-conversionArea\">
                    <div class=\"c-conversionArea__container\">
                        <div class=\"row justify-content-between align-items-center\">
                            <div class=\"col-6\">
                                <div class=\"c-conversionArea__leftBlockItem\"><a class=\"c-baseLink\" href=\"javascript:void(0)\" id=\"back\"><i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>{{ 'admin.order.mail'|trans }}</span></a>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"row align-items-center justify-content-end\">
                                    <div class=\"col-auto\"><button type=\"submit\" class=\"btn btn-ec-conversion px-5\" name=\"mode\" value=\"complete\">{{ 'admin.order.mail_send'|trans }}</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>
{% endblock %}
", "@admin/Order/mail_confirm.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\admin\\Order\\mail_confirm.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18, "if" => 65);
        static $filters = array("escape" => 15, "trans" => 15, "price" => 58, "length" => 67, "raw" => 68, "nl2br" => 114);
        static $functions = array("url" => 81, "form_widget" => 82);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'if'],
                ['escape', 'trans', 'price', 'length', 'raw', 'nl2br'],
                ['url', 'form_widget']
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
