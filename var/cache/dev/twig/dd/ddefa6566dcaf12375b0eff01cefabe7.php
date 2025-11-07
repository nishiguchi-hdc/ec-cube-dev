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

/* @admin/Setting/Shop/order_status.twig */
class __TwigTemplate_7eadf2419285d7848865541ccf302b72 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/Shop/order_status.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/Shop/order_status.twig"));

        // line 14
        $context["menus"] = ["setting", "shop", "shop_order_status"];
        // line 19
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 12
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/Shop/order_status.twig", 12);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.order_status_setting"), "html", null, true);
        
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop"), "html", null, true);
        
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
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <form id=\"form\" method=\"post\" action=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_order_status");
        echo "\">
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "_token", [], "any", false, false, true, 26), 26, $this->source), 'widget');
        echo "
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.order_status.order_status"), "html", null, true);
        echo "\">
                                <span>";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.order_status.order_status"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                            </div>
                        </div>
                        <div class=\"card-body p-0\">
                            <table class=\"table table-sm\">
                                <thead>
                                <tr>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                        ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.order_status.id"), "html", null, true);
        echo "
                                    </th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.order_status.customer_order_status_name"), "html", null, true);
        echo "\">
                                            <span>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.order_status.customer_order_status_name"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </div>
                                    </th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                        ";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.order_status.admin_order_status_name"), "html", null, true);
        echo "
                                    </th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.order_status.color"), "html", null, true);
        echo "\">
                                            <span>";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.order_status.color"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </div>
                                    </th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.order_status.display_order_count"), "html", null, true);
        echo "\">
                                            <span>";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.order_status.display_order_count"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </div>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "OrderStatuses", [], "any", false, false, true, 61));
        foreach ($context['_seq'] as $context["_key"] => $context["OrderStatus"]) {
            // line 62
            echo "                                    <tr>
                                        <td class=\"align-middle text-center\">
                                            ";
            // line 64
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OrderStatus"], "vars", [], "any", false, false, true, 64), "data", [], "any", false, false, true, 64), "id", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo "
                                        </td>
                                        <td class=\"align-middle\">
                                            ";
            // line 67
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderStatus"], "customer_order_status_name", [], "any", false, false, true, 67), 67, $this->source), 'widget');
            echo "
                                            ";
            // line 68
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderStatus"], "customer_order_status_name", [], "any", false, false, true, 68), 68, $this->source), 'errors');
            echo "
                                        </td>
                                        <td class=\"align-middle\">
                                            ";
            // line 71
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderStatus"], "name", [], "any", false, false, true, 71), 71, $this->source), 'widget');
            echo "
                                            ";
            // line 72
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderStatus"], "name", [], "any", false, false, true, 72), 72, $this->source), 'errors');
            echo "
                                        </td>
                                        <td class=\"align-middle\">
                                            <div class=\"input-group\" >
                                                ";
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderStatus"], "color", [], "any", false, false, true, 76), 76, $this->source), 'widget', ["attr" => ["class" => "form-control-color"]]);
            echo "
                                            </div>
                                            ";
            // line 78
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderStatus"], "color", [], "any", false, false, true, 78), 78, $this->source), 'errors');
            echo "
                                        </td>
                                        <td class=\"align-middle text-center\">
                                            ";
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderStatus"], "display_order_count", [], "any", false, false, true, 81), 81, $this->source), 'widget');
            echo "
                                            ";
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderStatus"], "display_order_count", [], "any", false, false, true, 82), 82, $this->source), 'errors');
            echo "
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderStatus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class=\"c-conversionArea\">
                        <div class=\"c-conversionArea__container\">
                            <div class=\"row justify-content-between align-items-center\">
                                <div class=\"col-6\">
                                    <div class=\"c-conversionArea__leftBlockItem\">
                                    </div>
                                </div>
                                <div class=\"col-6\">
                                    <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                                        <div class=\"col-auto\">
                                            <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
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
        return "@admin/Setting/Shop/order_status.twig";
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
        return array (  281 => 101,  264 => 86,  254 => 82,  250 => 81,  244 => 78,  239 => 76,  232 => 72,  228 => 71,  222 => 68,  218 => 67,  212 => 64,  208 => 62,  204 => 61,  195 => 55,  191 => 54,  184 => 50,  180 => 49,  174 => 46,  167 => 42,  163 => 41,  157 => 38,  146 => 30,  142 => 29,  136 => 26,  132 => 25,  127 => 22,  117 => 21,  98 => 17,  79 => 16,  68 => 12,  66 => 19,  64 => 14,  39 => 12,);
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

{% set menus = ['setting', 'shop', 'shop_order_status'] %}

{% block title %}{{ 'admin.setting.shop.order_status_setting'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.setting.shop'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block main %}
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <form id=\"form\" method=\"post\" action=\"{{ url('admin_setting_shop_order_status') }}\">
                    {{ form_widget(form._token) }}
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.setting.shop.order_status.order_status'|trans }}\">
                                <span>{{ 'admin.setting.shop.order_status.order_status'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                            </div>
                        </div>
                        <div class=\"card-body p-0\">
                            <table class=\"table table-sm\">
                                <thead>
                                <tr>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                        {{ 'admin.setting.shop.order_status.id'|trans }}
                                    </th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.setting.shop.order_status.customer_order_status_name'|trans }}\">
                                            <span>{{ 'admin.setting.shop.order_status.customer_order_status_name'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </div>
                                    </th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                        {{ 'admin.setting.shop.order_status.admin_order_status_name'|trans }}
                                    </th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.setting.shop.order_status.color'|trans }}\">
                                            <span>{{ 'admin.setting.shop.order_status.color'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </div>
                                    </th>
                                    <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.setting.shop.order_status.display_order_count'|trans }}\">
                                            <span>{{ 'admin.setting.shop.order_status.display_order_count'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </div>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for OrderStatus in form.OrderStatuses %}
                                    <tr>
                                        <td class=\"align-middle text-center\">
                                            {{ OrderStatus.vars.data.id }}
                                        </td>
                                        <td class=\"align-middle\">
                                            {{ form_widget(OrderStatus.customer_order_status_name) }}
                                            {{ form_errors(OrderStatus.customer_order_status_name) }}
                                        </td>
                                        <td class=\"align-middle\">
                                            {{ form_widget(OrderStatus.name) }}
                                            {{ form_errors(OrderStatus.name) }}
                                        </td>
                                        <td class=\"align-middle\">
                                            <div class=\"input-group\" >
                                                {{ form_widget(OrderStatus.color, {'attr': {'class': 'form-control-color'}}) }}
                                            </div>
                                            {{ form_errors(OrderStatus.color) }}
                                        </td>
                                        <td class=\"align-middle text-center\">
                                            {{ form_widget(OrderStatus.display_order_count) }}
                                            {{ form_errors(OrderStatus.display_order_count) }}
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class=\"c-conversionArea\">
                        <div class=\"c-conversionArea__container\">
                            <div class=\"row justify-content-between align-items-center\">
                                <div class=\"col-6\">
                                    <div class=\"c-conversionArea__leftBlockItem\">
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
            </div>
        </div>
    </div>
{% endblock %}
", "@admin/Setting/Shop/order_status.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\admin\\Setting\\Shop\\order_status.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 14, "form_theme" => 19, "for" => 61);
        static $filters = array("escape" => 16, "trans" => 16);
        static $functions = array("url" => 25, "form_widget" => 26, "form_errors" => 68);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'for'],
                ['escape', 'trans'],
                ['url', 'form_widget', 'form_errors']
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
