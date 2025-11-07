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

/* SalesReport42/Resource/template/admin/term.twig */
class __TwigTemplate_e31fe167ab17b20767fc57203cee83ee extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'sub_title' => [$this, 'block_sub_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'chart' => [$this, 'block_chart'],
            'option' => [$this, 'block_option'],
            'table' => [$this, 'block_table'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 10
        return "SalesReport42/Resource/template/admin/index.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SalesReport42/Resource/template/admin/term.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SalesReport42/Resource/template/admin/term.twig"));

        // line 13
        $context["report_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.term.report_title");
        // line 14
        $context["action"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sales_report_admin_term");
        // line 15
        $context["menus"] = ["SalesReport42", "sales_report_admin_term"];
        // line 10
        $this->parent = $this->loadTemplate("SalesReport42/Resource/template/admin/index.twig", "SalesReport42/Resource/template/admin/term.twig", 10);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.sub.title.term"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 18
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/tempusdominus-bootstrap-4.min.css", "admin"), "html", null, true);
        echo "\">
    <style type=\"text/css\">
        .datepicker-days th.dow:first-child,
        .datepicker-days td:first-child {
            color: #f00;
        }

        .datepicker-days th.dow:last-child,
        .datepicker-days td:last-child {
            color: #00f;
        }
        #sales_report_unit > div {
            float: left;
            padding-right: 15px
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 36
    public function block_chart($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "chart"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "chart"));

        // line 37
        echo "    <script>
        var graphData = ";
        // line 38
        echo $this->sandbox->ensureToStringAllowed((isset($context["graphData"]) || array_key_exists("graphData", $context) ? $context["graphData"] : (function () { throw new RuntimeError('Variable "graphData" does not exist.', 38, $this->source); })()), 38, $this->source);
        echo ";

        window.onload = function () {
            //create line chart
            if (graphData != null) {
                var dataSet = graphData.datasets;
                graphData.datasets = [dataSet];
                ";
        // line 45
        if ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "unit", [], "any", true, true, true, 45) && ((twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 45, $this->source); })()), "unit", [], "any", false, false, true, 45) == "byWeekDay") || (twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 45, $this->source); })()), "unit", [], "any", false, false, true, 45) == "byHour")))) {
            // line 46
            echo "                var config = {
                    type: 'bar',
                    data: graphData,
                    options: {
                        responsive: true,
                        tooltips: {
                            callbacks: {
                                label: function tooltipsRender(tooltipItem, graphData) {
                                    var index = tooltipItem.index;
                                    var tooltipData = graphData.datasets[0].data[index];
                                    var tooltipLabel = graphData.labels[index];
                                    return '";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.money"), "html", null, true);
            echo "' + moneyFormat(tooltipData);
                                }
                            }
                        },
                        scales: {
                            yAxes: [{
                                ticks: {
                                    callback: function (value) {
                                        return Math.round(value).toString().replace(/(\\d)(?=(\\d{3})+\$)/g, '\$1,');
                                    }
                                }
                            }]
                        }
                    }
                };
                ";
        } else {
            // line 73
            echo "                var config = {
                    type: 'line',
                    data: graphData,
                    options: {
                        responsive: true,
                        tooltips: {
                            callbacks: {
                                label: function tooltipsRender(tooltipItem, graphData) {
                                    var index = tooltipItem.index;
                                    var tooltipData = graphData.datasets[0].data[index];
                                    var tooltipLabel = graphData.labels[index];
                                    return '";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.money"), "html", null, true);
            echo "' + moneyFormat(tooltipData);
                                }
                            }
                        },
                        scales: {
                            yAxes: [{
                                ticks: {
                                    callback: function (value) {
                                        return Math.round(value).toString().replace(/(\\d)(?=(\\d{3})+\$)/g, '\$1,');
                                    }
                                }
                            }]
                        }
                    }
                };
                ";
        }
        // line 100
        echo "                var ctx = document.getElementById(\"chart\").getContext(\"2d\");
                new Chart(ctx, config);
            }
            //export csv
            \$('#export-csv').click(function () {
                var form = document.createElement(\"form\");
                form.setAttribute(\"method\", 'POST');
                form.setAttribute(\"action\", \"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sales_report_admin_export", ["type" => "term"]);
        echo "\");
                document.body.appendChild(form);
                form.submit();
                document.body.removeChild(form);
            });
        };
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 116
    public function block_option($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "option"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "option"));

        // line 117
        echo "    <div class=\"row\">
        <div class=\"col-3\"><span>";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.term.001"), "html", null, true);
        echo "</span></div>
        <div class=\"col mb-2\">
            ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "unit", [], "any", false, false, true, 120), 120, $this->source), 'widget');
        echo "
            ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "unit", [], "any", false, false, true, 121), 121, $this->source), 'errors');
        echo "
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 126
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        // line 127
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 127, $this->source); })()), "request", [], "any", false, false, true, 127), "method", [], "any", false, false, true, 127) == "POST")) {
            // line 128
            echo "        <div class=\"card-body\">
            <div class=\"row\">
                ";
            // line 130
            if ( !(null === (isset($context["rawData"]) || array_key_exists("rawData", $context) ? $context["rawData"] : (function () { throw new RuntimeError('Variable "rawData" does not exist.', 130, $this->source); })()))) {
                // line 131
                echo "                    <div class=\"col-12 text-end mb-2\">
                        <div class=\"d-inline-block\">
                            <div class=\"btn-group d-inline-block\" role=\"group\">
                                <button type=\"button\" class=\"btn btn-ec-regular\" id=\"export-csv\"><i
                                            class=\"fa fa-cloud-download mr-1 text-secondary\"></i> ";
                // line 135
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.csv.download"), "html", null, true);
                echo "
                                </button>
                            </div>
                        </div>
                    </div>

                    <table class=\"table table-striped\" id=\"term-table\">
                        <thead>
                        <tr>
                            <th class=\"border-top-0 py-2 text-center\">";
                // line 144
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.list.label.001"), "html", null, true);
                echo "</th>
                            <th class=\"border-top-0 py-2 text-center\">";
                // line 145
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.list.label.002"), "html", null, true);
                echo "</th>
                            <th class=\"border-top-0 py-2 text-center\">";
                // line 146
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.list.label.003"), "html", null, true);
                echo "</th>
                            <th class=\"border-top-0 py-2 text-center\">";
                // line 147
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.list.label.004"), "html", null, true);
                echo "</th>
                            <th class=\"border-top-0 py-2 text-center\">";
                // line 148
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.list.label.005"), "html", null, true);
                echo "</th>
                            <th class=\"border-top-0 py-2 text-center\">";
                // line 149
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.list.label.006"), "html", null, true);
                echo "</th>
                            <th class=\"border-top-0 py-2 text-center\">";
                // line 150
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.list.label.007"), "html", null, true);
                echo "</th>
                            <th class=\"border-top-0 py-2 text-center\">";
                // line 151
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.list.label.008"), "html", null, true);
                echo "</th>
                            <th class=\"border-top-0 py-2 text-center\">";
                // line 152
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.list.label.009"), "html", null, true);
                echo "</th>
                            <th class=\"border-top-0 py-2 text-end\">";
                // line 153
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.list.label.010"), "html", null, true);
                echo "</th>
                            <th class=\"border-top-0 py-2 text-end\">";
                // line 154
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.list.label.011"), "html", null, true);
                echo "</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
                // line 158
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["rawData"]) || array_key_exists("rawData", $context) ? $context["rawData"] : (function () { throw new RuntimeError('Variable "rawData" does not exist.', 158, $this->source); })()));
                foreach ($context['_seq'] as $context["date"] => $context["row"]) {
                    // line 159
                    echo "                            <tr>
                                <td class=\"align-middle text-center ps-3\">";
                    // line 160
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["date"], 160, $this->source), "html", null, true);
                    echo "</td>
                                <td class=\"align-middle text-center ps-3\">";
                    // line 161
                    ((twig_test_empty($context["row"])) ? (print ("")) : (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "time", [], "any", false, false, true, 161)), "html", null, true))));
                    echo "</td>

                                <td class=\"align-middle text-center ps-3\">";
                    // line 163
                    ((twig_test_empty($context["row"])) ? (print ("")) : (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "male", [], "any", false, false, true, 163)), "html", null, true))));
                    echo "</td>
                                <td class=\"align-middle text-center ps-3\">";
                    // line 164
                    ((twig_test_empty($context["row"])) ? (print ("")) : (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "female", [], "any", false, false, true, 164)), "html", null, true))));
                    echo "</td>
                                <td class=\"align-middle text-center ps-3\">";
                    // line 165
                    ((twig_test_empty($context["row"])) ? (print ("")) : (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "other", [], "any", false, false, true, 165)), "html", null, true))));
                    echo "</td>
                                <td class=\"align-middle text-center ps-3\">";
                    // line 166
                    ((twig_test_empty($context["row"])) ? (print ("")) : (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "member_male", [], "any", false, false, true, 166)), "html", null, true))));
                    echo "</td>
                                <td class=\"align-middle text-center ps-3\">";
                    // line 167
                    ((twig_test_empty($context["row"])) ? (print ("")) : (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "nonmember_male", [], "any", false, false, true, 167)), "html", null, true))));
                    echo "</td>
                                <td class=\"align-middle text-center ps-3\">";
                    // line 168
                    ((twig_test_empty($context["row"])) ? (print ("")) : (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "member_female", [], "any", false, false, true, 168)), "html", null, true))));
                    echo "</td>
                                <td class=\"align-middle text-center ps-3\">";
                    // line 169
                    ((twig_test_empty($context["row"])) ? (print ("")) : (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "nonmember_female", [], "any", false, false, true, 169)), "html", null, true))));
                    echo "</td>

                                <td class=\"price-format text-end\">
                                    ";
                    // line 172
                    ((twig_test_empty($context["row"])) ? (print ("")) : (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["row"], "price", [], "any", false, false, true, 172)), "html", null, true))));
                    echo "
                                    <span class=\"d-none\">";
                    // line 173
                    ((twig_test_empty($context["row"])) ? (print ("")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "price", [], "any", false, false, true, 173), "html", null, true))));
                    echo "</span>
                                </td>
                                <td class=\"price-format text-end\">
                                    ";
                    // line 176
                    if (( !twig_test_empty($context["row"]) && (twig_get_attribute($this->env, $this->source, $context["row"], "time", [], "any", false, false, true, 176) > 0))) {
                        // line 177
                        echo "                                        ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_round((twig_get_attribute($this->env, $this->source, $context["row"], "price", [], "any", false, false, true, 177) / twig_get_attribute($this->env, $this->source, $context["row"], "time", [], "any", false, false, true, 177)), 2, "floor")), "html", null, true);
                        echo "
                                    ";
                    } else {
                        // line 179
                        echo "                                        ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(0), "html", null, true);
                        echo "
                                    ";
                    }
                    // line 181
                    echo "                                    <span class=\"d-none\">
                                                    ";
                    // line 182
                    if ((twig_get_attribute($this->env, $this->source, $context["row"], "time", [], "any", false, false, true, 182) > 0)) {
                        // line 183
                        echo "                                                        ";
                        echo twig_escape_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["row"], "price", [], "any", false, false, true, 183) / twig_get_attribute($this->env, $this->source, $context["row"], "time", [], "any", false, false, true, 183)), 2, "floor"), "html", null, true);
                        echo "
                                                    ";
                    } else {
                        // line 185
                        echo "                                                        0
                                                    ";
                    }
                    // line 187
                    echo "                                                </span>
                                </td>
                            </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['date'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 191
                echo "                        </tbody>
                    </table>
                ";
            } else {
                // line 194
                echo "                    <div class=\"col-12\">
                        <p class=\"mb-0\">";
                // line 195
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.list.nodata"), "html", null, true);
                echo "</p>
                    </div>
                ";
            }
            // line 198
            echo "            </div>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "SalesReport42/Resource/template/admin/term.twig";
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
        return array (  484 => 198,  478 => 195,  475 => 194,  470 => 191,  461 => 187,  457 => 185,  451 => 183,  449 => 182,  446 => 181,  440 => 179,  434 => 177,  432 => 176,  426 => 173,  422 => 172,  416 => 169,  412 => 168,  408 => 167,  404 => 166,  400 => 165,  396 => 164,  392 => 163,  387 => 161,  383 => 160,  380 => 159,  376 => 158,  369 => 154,  365 => 153,  361 => 152,  357 => 151,  353 => 150,  349 => 149,  345 => 148,  341 => 147,  337 => 146,  333 => 145,  329 => 144,  317 => 135,  311 => 131,  309 => 130,  305 => 128,  302 => 127,  292 => 126,  278 => 121,  274 => 120,  269 => 118,  266 => 117,  256 => 116,  238 => 107,  229 => 100,  210 => 84,  197 => 73,  178 => 57,  165 => 46,  163 => 45,  153 => 38,  150 => 37,  140 => 36,  112 => 18,  102 => 17,  83 => 11,  72 => 10,  70 => 15,  68 => 14,  66 => 13,  41 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 This file is part of the Sales Report plugin

Copyright (C) EC-CUBE CO.,LTD. All Rights Reserved.

 For the full copyright and license information, please view the LICENSE
 file that was distributed with this source code.
#}

{% extends 'SalesReport42/Resource/template/admin/index.twig' %}
{% block sub_title %}{{ 'sales_report.admin.sub.title.term'|trans }}{% endblock %}

{% set report_title = 'sales_report.admin.term.report_title'|trans %}
{% set action = url('sales_report_admin_term') %}
{% set menus = ['SalesReport42', 'sales_report_admin_term'] %}

{% block stylesheet %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/tempusdominus-bootstrap-4.min.css', 'admin') }}\">
    <style type=\"text/css\">
        .datepicker-days th.dow:first-child,
        .datepicker-days td:first-child {
            color: #f00;
        }

        .datepicker-days th.dow:last-child,
        .datepicker-days td:last-child {
            color: #00f;
        }
        #sales_report_unit > div {
            float: left;
            padding-right: 15px
        }
    </style>
{% endblock stylesheet %}

{% block chart %}
    <script>
        var graphData = {{ graphData|raw }};

        window.onload = function () {
            //create line chart
            if (graphData != null) {
                var dataSet = graphData.datasets;
                graphData.datasets = [dataSet];
                {% if options.unit is defined and (options.unit == 'byWeekDay' or options.unit == 'byHour') %}
                var config = {
                    type: 'bar',
                    data: graphData,
                    options: {
                        responsive: true,
                        tooltips: {
                            callbacks: {
                                label: function tooltipsRender(tooltipItem, graphData) {
                                    var index = tooltipItem.index;
                                    var tooltipData = graphData.datasets[0].data[index];
                                    var tooltipLabel = graphData.labels[index];
                                    return '{{ 'sales_report.admin.money'|trans }}' + moneyFormat(tooltipData);
                                }
                            }
                        },
                        scales: {
                            yAxes: [{
                                ticks: {
                                    callback: function (value) {
                                        return Math.round(value).toString().replace(/(\\d)(?=(\\d{3})+\$)/g, '\$1,');
                                    }
                                }
                            }]
                        }
                    }
                };
                {% else %}
                var config = {
                    type: 'line',
                    data: graphData,
                    options: {
                        responsive: true,
                        tooltips: {
                            callbacks: {
                                label: function tooltipsRender(tooltipItem, graphData) {
                                    var index = tooltipItem.index;
                                    var tooltipData = graphData.datasets[0].data[index];
                                    var tooltipLabel = graphData.labels[index];
                                    return '{{ 'sales_report.admin.money'|trans }}' + moneyFormat(tooltipData);
                                }
                            }
                        },
                        scales: {
                            yAxes: [{
                                ticks: {
                                    callback: function (value) {
                                        return Math.round(value).toString().replace(/(\\d)(?=(\\d{3})+\$)/g, '\$1,');
                                    }
                                }
                            }]
                        }
                    }
                };
                {% endif %}
                var ctx = document.getElementById(\"chart\").getContext(\"2d\");
                new Chart(ctx, config);
            }
            //export csv
            \$('#export-csv').click(function () {
                var form = document.createElement(\"form\");
                form.setAttribute(\"method\", 'POST');
                form.setAttribute(\"action\", \"{{ url('sales_report_admin_export', { type : 'term' }) }}\");
                document.body.appendChild(form);
                form.submit();
                document.body.removeChild(form);
            });
        };
    </script>
{% endblock %}

{% block option %}
    <div class=\"row\">
        <div class=\"col-3\"><span>{{ 'sales_report.admin.term.001'|trans }}</span></div>
        <div class=\"col mb-2\">
            {{ form_widget(form.unit) }}
            {{ form_errors(form.unit) }}
        </div>
    </div>
{% endblock %}

{% block table %}
    {% if app.request.method == 'POST' %}
        <div class=\"card-body\">
            <div class=\"row\">
                {% if rawData is not null %}
                    <div class=\"col-12 text-end mb-2\">
                        <div class=\"d-inline-block\">
                            <div class=\"btn-group d-inline-block\" role=\"group\">
                                <button type=\"button\" class=\"btn btn-ec-regular\" id=\"export-csv\"><i
                                            class=\"fa fa-cloud-download mr-1 text-secondary\"></i> {{ 'sales_report.admin.csv.download'|trans }}
                                </button>
                            </div>
                        </div>
                    </div>

                    <table class=\"table table-striped\" id=\"term-table\">
                        <thead>
                        <tr>
                            <th class=\"border-top-0 py-2 text-center\">{{ 'sales_report.admin.list.label.001'|trans }}</th>
                            <th class=\"border-top-0 py-2 text-center\">{{ 'sales_report.admin.list.label.002'|trans }}</th>
                            <th class=\"border-top-0 py-2 text-center\">{{ 'sales_report.admin.list.label.003'|trans }}</th>
                            <th class=\"border-top-0 py-2 text-center\">{{ 'sales_report.admin.list.label.004'|trans }}</th>
                            <th class=\"border-top-0 py-2 text-center\">{{ 'sales_report.admin.list.label.005'|trans }}</th>
                            <th class=\"border-top-0 py-2 text-center\">{{ 'sales_report.admin.list.label.006'|trans }}</th>
                            <th class=\"border-top-0 py-2 text-center\">{{ 'sales_report.admin.list.label.007'|trans }}</th>
                            <th class=\"border-top-0 py-2 text-center\">{{ 'sales_report.admin.list.label.008'|trans }}</th>
                            <th class=\"border-top-0 py-2 text-center\">{{ 'sales_report.admin.list.label.009'|trans }}</th>
                            <th class=\"border-top-0 py-2 text-end\">{{ 'sales_report.admin.list.label.010'|trans }}</th>
                            <th class=\"border-top-0 py-2 text-end\">{{ 'sales_report.admin.list.label.011'|trans }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for date, row in rawData %}
                            <tr>
                                <td class=\"align-middle text-center ps-3\">{{ date }}</td>
                                <td class=\"align-middle text-center ps-3\">{{ row is empty ? '' : row.time|number_format }}</td>

                                <td class=\"align-middle text-center ps-3\">{{ row is empty ? '' : row.male|number_format }}</td>
                                <td class=\"align-middle text-center ps-3\">{{ row is empty ? '' : row.female|number_format }}</td>
                                <td class=\"align-middle text-center ps-3\">{{ row is empty ? '' : row.other|number_format }}</td>
                                <td class=\"align-middle text-center ps-3\">{{ row is empty ? '' : row.member_male|number_format }}</td>
                                <td class=\"align-middle text-center ps-3\">{{ row is empty ? '' : row.nonmember_male|number_format }}</td>
                                <td class=\"align-middle text-center ps-3\">{{ row is empty ? '' : row.member_female|number_format }}</td>
                                <td class=\"align-middle text-center ps-3\">{{ row is empty ? '' : row.nonmember_female|number_format }}</td>

                                <td class=\"price-format text-end\">
                                    {{ row is empty ? '' : row.price|price }}
                                    <span class=\"d-none\">{{ row is empty ? '' : row.price }}</span>
                                </td>
                                <td class=\"price-format text-end\">
                                    {% if row is not empty and row.time > 0 %}
                                        {{ (row.price / row.time)|round(2, 'floor')|price }}
                                    {% else %}
                                        {{ 0|price }}
                                    {% endif %}
                                    <span class=\"d-none\">
                                                    {% if row.time > 0 %}
                                                        {{ (row.price / row.time)|round(2, 'floor') }}
                                                    {% else %}
                                                        0
                                                    {% endif %}
                                                </span>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                {% else %}
                    <div class=\"col-12\">
                        <p class=\"mb-0\">{{ 'sales_report.admin.list.nodata'|trans }}</p>
                    </div>
                {% endif %}
            </div>
        </div>
    {% endif %}
{% endblock %}
", "SalesReport42/Resource/template/admin/term.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\SalesReport42\\Resource\\template\\admin\\term.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "if" => 45, "for" => 158);
        static $filters = array("trans" => 13, "escape" => 11, "raw" => 38, "number_format" => 161, "price" => 172, "round" => 177);
        static $functions = array("url" => 14, "asset" => 18, "form_widget" => 120, "form_errors" => 121);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['trans', 'escape', 'raw', 'number_format', 'price', 'round'],
                ['url', 'asset', 'form_widget', 'form_errors']
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
