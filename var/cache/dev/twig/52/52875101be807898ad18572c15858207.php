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

/* MailMagazine42/Resource/template/admin/history_condition.twig */
class __TwigTemplate_2e5fb32bf84308b22516c8822dc45c8c extends Template
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
        // line 10
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MailMagazine42/Resource/template/admin/history_condition.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MailMagazine42/Resource/template/admin/history_condition.twig"));

        // line 12
        $context["menus"] = ["mailmagazine", "mailmagazine_history"];
        // line 10
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "MailMagazine42/Resource/template/admin/history_condition.twig", 10);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.title"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
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

    // line 17
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 18
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <table class=\"table table-striped\">
                    <tbody>
                        <tr>
                            <th class=\"w-25\">";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.multi_search_label"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 26
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 26, $this->source); })()), "multi", [], "any", false, false, true, 26))) {
            // line 27
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 29
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 29, $this->source); })()), "multi", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 31
        echo "
                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_status"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 37
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 37, $this->source); })()), "customer_status", [], "any", false, false, true, 37))) {
            // line 38
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 40
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 40, $this->source); })()), "customer_status", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 42
        echo "                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.gender"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 47
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 47, $this->source); })()), "sex", [], "any", false, false, true, 47))) {
            // line 48
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 50
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 50, $this->source); })()), "sex", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 52
        echo "                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.birth_month"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 57
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 57, $this->source); })()), "birth_month", [], "any", false, false, true, 57))) {
            // line 58
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 60
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 60, $this->source); })()), "birth_month", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 62
        echo "                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.birth_day"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 67
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 67, $this->source); })()), "birth_start", [], "any", false, false, true, 67))) {
            // line 68
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 70
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 70, $this->source); })()), "birth_start", [], "any", false, false, true, 70), 70, $this->source), "Y/m/d"), "html", null, true);
            echo "
                                ";
        }
        // line 72
        echo "                                ～
                                ";
        // line 73
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 73, $this->source); })()), "birth_end", [], "any", false, false, true, 73))) {
            // line 74
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 76
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 76, $this->source); })()), "birth_end", [], "any", false, false, true, 76), 76, $this->source), "Y/m/d"), "html", null, true);
            echo "
                                ";
        }
        // line 78
        echo "                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.pref"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 83
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 83, $this->source); })()), "pref", [], "any", false, false, true, 83))) {
            // line 84
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 86
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 86, $this->source); })()), "pref", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 88
        echo "                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 93
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 93, $this->source); })()), "phone_number", [], "any", false, false, true, 93))) {
            // line 94
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 96
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 96, $this->source); })()), "phone_number", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 98
        echo "                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create_date"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 103
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 103, $this->source); })()), "create_date_start", [], "any", false, false, true, 103))) {
            // line 104
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 106
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 106, $this->source); })()), "create_date_start", [], "any", false, false, true, 106), 106, $this->source), "Y/m/d"), "html", null, true);
            echo "
                                ";
        }
        // line 108
        echo "                                ～
                                ";
        // line 109
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 109, $this->source); })()), "create_date_end", [], "any", false, false, true, 109))) {
            // line 110
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 112
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 112, $this->source); })()), "create_date_end", [], "any", false, false, true, 112), 112, $this->source), "Y/m/d"), "html", null, true);
            echo "
                                ";
        }
        // line 114
        echo "                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.update_date"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 119
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 119, $this->source); })()), "update_date_start", [], "any", false, false, true, 119))) {
            // line 120
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 122
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 122, $this->source); })()), "update_date_start", [], "any", false, false, true, 122), 122, $this->source), "Y/m/d"), "html", null, true);
            echo "
                                ";
        }
        // line 124
        echo "                                ～
                                ";
        // line 125
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 125, $this->source); })()), "update_date_end", [], "any", false, false, true, 125))) {
            // line 126
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 128
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 128, $this->source); })()), "update_date_end", [], "any", false, false, true, 128), 128, $this->source), "Y/m/d"), "html", null, true);
            echo "
                                ";
        }
        // line 130
        echo "                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_price"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 135
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 135, $this->source); })()), "buy_total_start", [], "any", false, false, true, 135))) {
            // line 136
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 138
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 138, $this->source); })()), "buy_total_start", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 140
        echo "                                ～
                                ";
        // line 141
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 141, $this->source); })()), "buy_total_end", [], "any", false, false, true, 141))) {
            // line 142
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 144
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 144, $this->source); })()), "buy_total_end", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 146
        echo "                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_count"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 151
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 151, $this->source); })()), "buy_times_start", [], "any", false, false, true, 151))) {
            // line 152
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 154
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 154, $this->source); })()), "buy_times_start", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 156
        echo "                                ～
                                ";
        // line 157
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 157, $this->source); })()), "buy_times_end", [], "any", false, false, true, 157))) {
            // line 158
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 160
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 160, $this->source); })()), "buy_times_end", [], "any", false, false, true, 160), 160, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 162
        echo "                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_product"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 167
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 167, $this->source); })()), "buy_product_name", [], "any", false, false, true, 167))) {
            // line 168
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 170
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 170, $this->source); })()), "buy_product_name", [], "any", false, false, true, 170), 170, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 172
        echo "                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.last_buy_date"), "html", null, true);
        echo "</th>
                            <td>
                                ";
        // line 177
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 177, $this->source); })()), "last_buy_start", [], "any", false, false, true, 177))) {
            // line 178
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 180
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 180, $this->source); })()), "last_buy_start", [], "any", false, false, true, 180), 180, $this->source), "Y/m/d"), "html", null, true);
            echo "
                                ";
        }
        // line 182
        echo "                                ～
                                ";
        // line 183
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 183, $this->source); })()), "last_buy_end", [], "any", false, false, true, 183))) {
            // line 184
            echo "                                    (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.condition.label_null"), "html", null, true);
            echo ")
                                ";
        } else {
            // line 186
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 186, $this->source); })()), "last_buy_end", [], "any", false, false, true, 186), 186, $this->source), "Y/m/d"), "html", null, true);
            echo "
                                ";
        }
        // line 188
        echo "                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class=\"c-conversionArea\">
        <div class=\"c-conversionArea__container\">
            <div class=\"row justify-content-between align-items-center\">
                <div class=\"col-6\">
                    <div class=\"c-conversionArea__leftBlockItem\">
                        <a class=\"c-baseLink\" href=\"";
        // line 200
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("plugin_mail_magazine_history");
        echo "\">
                            <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mailmagazine.history.preview.btn_back"), "html", null, true);
        echo "</span>
                        </a>
                    </div>
                </div>
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
        return "MailMagazine42/Resource/template/admin/history_condition.twig";
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
        return array (  561 => 201,  557 => 200,  543 => 188,  537 => 186,  531 => 184,  529 => 183,  526 => 182,  520 => 180,  514 => 178,  512 => 177,  507 => 175,  502 => 172,  496 => 170,  490 => 168,  488 => 167,  483 => 165,  478 => 162,  472 => 160,  466 => 158,  464 => 157,  461 => 156,  455 => 154,  449 => 152,  447 => 151,  442 => 149,  437 => 146,  431 => 144,  425 => 142,  423 => 141,  420 => 140,  414 => 138,  408 => 136,  406 => 135,  401 => 133,  396 => 130,  390 => 128,  384 => 126,  382 => 125,  379 => 124,  373 => 122,  367 => 120,  365 => 119,  360 => 117,  355 => 114,  349 => 112,  343 => 110,  341 => 109,  338 => 108,  332 => 106,  326 => 104,  324 => 103,  319 => 101,  314 => 98,  308 => 96,  302 => 94,  300 => 93,  295 => 91,  290 => 88,  284 => 86,  278 => 84,  276 => 83,  271 => 81,  266 => 78,  260 => 76,  254 => 74,  252 => 73,  249 => 72,  243 => 70,  237 => 68,  235 => 67,  230 => 65,  225 => 62,  219 => 60,  213 => 58,  211 => 57,  206 => 55,  201 => 52,  195 => 50,  189 => 48,  187 => 47,  182 => 45,  177 => 42,  171 => 40,  165 => 38,  163 => 37,  158 => 35,  152 => 31,  146 => 29,  140 => 27,  138 => 26,  133 => 24,  125 => 18,  115 => 17,  96 => 15,  77 => 14,  66 => 10,  64 => 12,  39 => 10,);
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

{% set menus = ['mailmagazine', 'mailmagazine_history'] %}

{% block title %}{{ 'mailmagazine.history.title'|trans }}{% endblock %}
{% block sub_title %}{{ 'mailmagazine.title'|trans }}{% endblock %}

{% block main %}
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <table class=\"table table-striped\">
                    <tbody>
                        <tr>
                            <th class=\"w-25\">{{ 'admin.customer.multi_search_label'|trans }}</th>
                            <td>
                                {% if search_data.multi is null %}
                                    ({{ 'mailmagazine.history.condition.label_null'|trans }})
                                {% else %}
                                    {{ search_data.multi }}
                                {% endif %}

                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">{{ 'admin.customer.customer_status'|trans }}</th>
                            <td>
                                {% if search_data.customer_status is null %}
                                    ({{ 'mailmagazine.history.condition.label_null'|trans }})
                                {% else %}
                                    {{ search_data.customer_status }}
                                {% endif %}
                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">{{ 'admin.common.gender'|trans }}</th>
                            <td>
                                {% if search_data.sex is null %}
                                    ({{ 'mailmagazine.history.condition.label_null'|trans }})
                                {% else %}
                                    {{ search_data.sex }}
                                {% endif %}
                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">{{ 'admin.customer.birth_month'|trans }}</th>
                            <td>
                                {% if search_data.birth_month is null %}
                                    ({{ 'mailmagazine.history.condition.label_null'|trans }})
                                {% else %}
                                    {{ search_data.birth_month }}
                                {% endif %}
                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">{{ 'admin.common.birth_day'|trans }}</th>
                            <td>
                                {% if search_data.birth_start is null %}
                                    ({{ 'mailmagazine.history.condition.label_null'|trans }})
                                {% else %}
                                    {{ search_data.birth_start|date(\"Y/m/d\") }}
                                {% endif %}
                                ～
                                {% if search_data.birth_end is null %}
                                    ({{ 'mailmagazine.history.condition.label_null'|trans }})
                                {% else %}
                                    {{ search_data.birth_end|date(\"Y/m/d\") }}
                                {% endif %}
                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">{{ 'admin.common.pref'|trans }}</th>
                            <td>
                                {% if search_data.pref is null %}
                                    ({{ 'mailmagazine.history.condition.label_null'|trans }})
                                {% else %}
                                    {{ search_data.pref }}
                                {% endif %}
                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">{{ 'admin.common.phone_number'|trans }}</th>
                            <td>
                                {% if search_data.phone_number is null %}
                                    ({{ 'mailmagazine.history.condition.label_null'|trans }})
                                {% else %}
                                    {{ search_data.phone_number }}
                                {% endif %}
                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">{{ 'admin.common.create_date'|trans }}</th>
                            <td>
                                {% if search_data.create_date_start is null %}
                                    ({{ 'mailmagazine.history.condition.label_null'|trans }})
                                {% else %}
                                    {{ search_data.create_date_start|date(\"Y/m/d\") }}
                                {% endif %}
                                ～
                                {% if search_data.create_date_end is null %}
                                    ({{ 'mailmagazine.history.condition.label_null'|trans }})
                                {% else %}
                                    {{ search_data.create_date_end|date(\"Y/m/d\") }}
                                {% endif %}
                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">{{ 'admin.common.update_date'|trans }}</th>
                            <td>
                                {% if search_data.update_date_start is null %}
                                    ({{ 'mailmagazine.history.condition.label_null'|trans }})
                                {% else %}
                                    {{ search_data.update_date_start|date(\"Y/m/d\") }}
                                {% endif %}
                                ～
                                {% if search_data.update_date_end is null %}
                                    ({{ 'mailmagazine.history.condition.label_null'|trans }})
                                {% else %}
                                    {{ search_data.update_date_end|date(\"Y/m/d\") }}
                                {% endif %}
                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">{{ 'admin.order.purchase_price'|trans }}</th>
                            <td>
                                {% if search_data.buy_total_start is null %}
                                    ({{ 'mailmagazine.history.condition.label_null'|trans }})
                                {% else %}
                                    {{ search_data.buy_total_start }}
                                {% endif %}
                                ～
                                {% if search_data.buy_total_end is null %}
                                    ({{ 'mailmagazine.history.condition.label_null'|trans }})
                                {% else %}
                                    {{ search_data.buy_total_end }}
                                {% endif %}
                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">{{ 'admin.order.purchase_count'|trans }}</th>
                            <td>
                                {% if search_data.buy_times_start is null %}
                                    ({{ 'mailmagazine.history.condition.label_null'|trans }})
                                {% else %}
                                    {{ search_data.buy_times_start }}
                                {% endif %}
                                ～
                                {% if search_data.buy_times_end is null %}
                                    ({{ 'mailmagazine.history.condition.label_null'|trans }})
                                {% else %}
                                    {{ search_data.buy_times_end }}
                                {% endif %}
                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">{{ 'admin.order.purchase_product'|trans }}</th>
                            <td>
                                {% if search_data.buy_product_name is null %}
                                    ({{ 'mailmagazine.history.condition.label_null'|trans }})
                                {% else %}
                                    {{ search_data.buy_product_name }}
                                {% endif %}
                            </td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">{{ 'admin.order.last_buy_date'|trans }}</th>
                            <td>
                                {% if search_data.last_buy_start is null %}
                                    ({{ 'mailmagazine.history.condition.label_null'|trans }})
                                {% else %}
                                    {{ search_data.last_buy_start|date(\"Y/m/d\") }}
                                {% endif %}
                                ～
                                {% if search_data.last_buy_end is null %}
                                    ({{ 'mailmagazine.history.condition.label_null'|trans }})
                                {% else %}
                                    {{ search_data.last_buy_end|date(\"Y/m/d\") }}
                                {% endif %}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class=\"c-conversionArea\">
        <div class=\"c-conversionArea__container\">
            <div class=\"row justify-content-between align-items-center\">
                <div class=\"col-6\">
                    <div class=\"c-conversionArea__leftBlockItem\">
                        <a class=\"c-baseLink\" href=\"{{ url('plugin_mail_magazine_history') }}\">
                            <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>{{ 'mailmagazine.history.preview.btn_back'|trans }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "MailMagazine42/Resource/template/admin/history_condition.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\MailMagazine42\\Resource\\template\\admin\\history_condition.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 12, "if" => 26);
        static $filters = array("escape" => 14, "trans" => 14, "date" => 70);
        static $functions = array("url" => 200);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'trans', 'date'],
                ['url']
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
