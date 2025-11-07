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

/* SalesReport42/Resource/template/admin/index.twig */
class __TwigTemplate_b5212b40a74703ea1ad0cc6b68890749 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascript' => [$this, 'block_javascript'],
            'chart' => [$this, 'block_chart'],
            'main' => [$this, 'block_main'],
            'option' => [$this, 'block_option'],
            'table' => [$this, 'block_table'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SalesReport42/Resource/template/admin/index.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SalesReport42/Resource/template/admin/index.twig"));

        // line 14
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 10
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "SalesReport42/Resource/template/admin/index.twig", 10);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.title"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 17
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.js\" integrity=\"sha384-flDTcmsJ2GUugPAgAMrEXML3nSGciiqQJkAcUPwL6l5lm8K5ydDoLV/Ad3vyFWOi\" crossorigin=\"anonymous\"></script>
    ";
        // line 18
        $this->displayBlock('chart', $context, $blocks);
        // line 19
        echo "    <script>
        \$(function () {
            if (\$('[type=\"date\"]').prop('type') != 'date') {
                // input type属性でdateが利用できるかどうか(カレンダー表示できないブラウザ対応)
                \$.when(
                    \$.getScript(\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/moment.min.js", "admin"), "html", null, true);
        echo "\"),
                    \$.getScript(\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/moment-with-locales.min.js", "admin"), "html", null, true);
        echo "\"),
                    \$.getScript(\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/tempusdominus-bootstrap-4.min.js", "admin"), "html", null, true);
        echo "\")
                ).done(function() {
                    \$('input[id\$=_start]').datetimepicker({
                        locale: '";
        // line 29
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 29, $this->source); })()), "locale", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "',
                        format: 'YYYY-MM-DD',
                        useCurrent: false,
                        buttons: {
                            showToday: true,
                            showClose: true
                        }
                    });

                    \$('input[id\$=_end]').datetimepicker({
                        locale: '";
        // line 39
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 39, $this->source); })()), "locale", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "',
                        format: 'YYYY-MM-DD',
                        useCurrent: false,
                        buttons: {
                            showToday: true,
                            showClose: true
                        }
                    });

                });
            }

            \$('#btn-monthly').on('click', function () {
                \$('#";
        // line 52
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "term_type", [], "any", false, false, true, 52), "vars", [], "any", false, false, true, 52), "id", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        echo "').val('monthly');
                document.form1.submit();
            });

            \$('#btn-term').on('click', function () {
                \$('#";
        // line 57
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "term_type", [], "any", false, false, true, 57), "vars", [], "any", false, false, true, 57), "id", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        echo "').val('term');
                document.form1.submit();
            });

        });

        function moneyFormat(money) {
            return money.toString().replace(/\\B(?=(\\d{3})+(?!\\d))/g, ',');
        }

        jQuery.fn.tableToCSV = function() {
            var clean_text = function(text){
                text = text.replace(/\"/g, '\"\"');
                return '\"' + text + '\"';
            };

            \$(this).each(function(){
                var table = \$(this);
                var caption = \$('.box-title').text();
                var title = [];
                var rows = [];

                \$(this).find('tr').each(function(){
                    var data = [];
                    \$(this).find('th').each(function(){
                        var text = \$(this).text();
                        title.push(text);
                    });
                    \$(this).find('td').each(function(){
                        var td = \$(this);
                        var text = td.text();
                        if(td.hasClass('price-format')) {
                            td.find('span').each(function() {
                                text = \$(this).text().trim();
                                if (text != '-') {
                                    text = Math.round(text);
                                } else {
                                    text = 0;
                                }
                                data.push(text);
                            });
                        } else {
                            data.push(text);
                        }
                    });
                    data = data.join(',');
                    rows.push(data);
                });
                title = title.join(',');
                rows = rows.join('\\n');

                var csv = title + rows;
                var ts = new Date();
                var fileName;
                ts = ts.getFullYear().toString() + (ts.getMonth() + 1) + ts.getDate() + ts.getHours() + ts.getMinutes() + ts.getSeconds();

                if(caption == ''){
                    fileName = ts + '.csv';
                } else {
                    fileName = caption + '_' + ts + '.csv';
                }

                // if microsoft IE
                if (navigator.msSaveBlob) {
                    navigator.msSaveBlob(new Blob([csv], { type: 'text/csv;charset=utf-8;' }), fileName);
                } else {
                    var uri = 'data:text/csv;charset=utf-8,' + encodeURIComponent(csv);
                    var download_link = document.createElement('a');
                    download_link.href = uri;
                    download_link.download = fileName;
                    document.body.appendChild(download_link);
                    download_link.click();
                    document.body.removeChild(download_link);
                }

            });
        };

    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 18
    public function block_chart($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "chart"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "chart"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 138
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 139
        echo "    <form role=\"form\" name=\"form1\" id=\"form1\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 139, $this->source); })()), 139, $this->source), "html", null, true);
        echo "\" novalidate>
        ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "_token", [], "any", false, false, true, 140), 140, $this->source), 'widget');
        echo "
        ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "term_type", [], "any", false, false, true, 141), 141, $this->source), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <span class=\"card-title\">";
        // line 147
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["report_title"]) || array_key_exists("report_title", $context) ? $context["report_title"] : (function () { throw new RuntimeError('Variable "report_title" does not exist.', 147, $this->source); })()), 147, $this->source), "html", null, true);
        echo "</span>
                        </div>

                        <div class=\"card-body\">
                            ";
        // line 151
        $this->displayBlock('option', $context, $blocks);
        // line 152
        echo "
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.index.001"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    <div class=\"row justify-content-start\">
                                        <div class=\"w-auto\">
                                            <div class=\"align-items-center d-flex\">
                                                ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "monthly_year", [], "any", false, false, true, 159), 159, $this->source), 'widget', ["attr" => ["class" => "float-start"]]);
        echo "
                                                ";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.label.monthly_year"), "html", null, true);
        echo "
                                            </div>
                                            ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "monthly_year", [], "any", false, false, true, 162), 162, $this->source), 'errors');
        echo "
                                        </div>
                                        <div class=\"w-auto\">
                                            <div class=\"align-items-center d-flex\">
                                                ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "monthly_month", [], "any", false, false, true, 166), 166, $this->source), 'widget', ["attr" => ["class" => "float-start"]]);
        echo "
                                                ";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.label.monthly_month"), "html", null, true);
        echo "
                                            </div>
                                            ";
        // line 169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), "monthly_month", [], "any", false, false, true, 169), 169, $this->source), 'errors');
        echo "
                                        </div>
                                        <div class=\"w-auto\">
                                            <button id=\"btn-monthly\" class=\"btn btn-ec-conversion px-5\" data-style=\"expand-right\" type=\"submit\">";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.index.002"), "html", null, true);
        echo "</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.index.003"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    <div class=\"row justify-content-start\">
                                        <div class=\"w-auto\">
                                            ";
        // line 182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "term_start", [], "any", false, false, true, 182), 182, $this->source), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.placholder")]]);
        echo "
                                            ";
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "term_start", [], "any", false, false, true, 183), 183, $this->source), 'errors');
        echo "
                                        </div>
                                        <div class=\"w-auto text-center p-0\">
                                            <span class=\"align-middle\">～</span>
                                        </div>
                                        <div class=\"w-auto\">
                                            ";
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 189, $this->source); })()), "term_end", [], "any", false, false, true, 189), 189, $this->source), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.placholder")]]);
        echo "
                                            ";
        // line 190
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "term_end", [], "any", false, false, true, 190), 190, $this->source), 'errors');
        echo "
                                        </div>
                                        <div class=\"w-auto\">
                                            <button id=\"btn-term\" class=\"btn btn-ec-conversion px-5 text-nowrap\" data-style=\"expand-right\" type=\"submit\">";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sales_report.admin.index.004"), "html", null, true);
        echo "</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"card rounded border-0 mb-4\">
                        ";
        // line 202
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 202, $this->source); })()), "request", [], "any", false, false, true, 202), "method", [], "any", false, false, true, 202) == "POST") &&  !(null === (isset($context["rawData"]) || array_key_exists("rawData", $context) ? $context["rawData"] : (function () { throw new RuntimeError('Variable "rawData" does not exist.', 202, $this->source); })())))) {
            // line 203
            echo "                            <div class=\"card-body container\">
                                <div class=\"col-12\">
                                    <canvas id=\"chart\"></canvas>
                                </div>
                            </div>
                        ";
        }
        // line 209
        echo "
                        ";
        // line 210
        $this->displayBlock('table', $context, $blocks);
        // line 211
        echo "                    </div>
                </div>
            </div>
        </div>

    </form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 151
    public function block_option($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "option"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "option"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 210
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "SalesReport42/Resource/template/admin/index.twig";
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
        return array (  460 => 210,  442 => 151,  426 => 211,  424 => 210,  421 => 209,  413 => 203,  411 => 202,  399 => 193,  393 => 190,  389 => 189,  380 => 183,  376 => 182,  369 => 178,  360 => 172,  354 => 169,  349 => 167,  345 => 166,  338 => 162,  333 => 160,  329 => 159,  321 => 154,  317 => 152,  315 => 151,  308 => 147,  299 => 141,  295 => 140,  290 => 139,  280 => 138,  262 => 18,  172 => 57,  164 => 52,  148 => 39,  135 => 29,  129 => 26,  125 => 25,  121 => 24,  114 => 19,  112 => 18,  109 => 17,  99 => 16,  80 => 12,  69 => 10,  67 => 14,  42 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 This file is part of the Sales Report plugin

Copyright (C) EC-CUBE CO.,LTD. All Rights Reserved.

 For the full copyright and license information, please view the LICENSE
 file that was distributed with this source code.
#}

{% extends '@admin/default_frame.twig' %}

{% block title %}{{ 'sales_report.admin.title'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block javascript %}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.js\" integrity=\"sha384-flDTcmsJ2GUugPAgAMrEXML3nSGciiqQJkAcUPwL6l5lm8K5ydDoLV/Ad3vyFWOi\" crossorigin=\"anonymous\"></script>
    {% block chart %}{% endblock %}
    <script>
        \$(function () {
            if (\$('[type=\"date\"]').prop('type') != 'date') {
                // input type属性でdateが利用できるかどうか(カレンダー表示できないブラウザ対応)
                \$.when(
                    \$.getScript(\"{{ asset('assets/js/vendor/moment.min.js', 'admin') }}\"),
                    \$.getScript(\"{{ asset('assets/js/vendor/moment-with-locales.min.js', 'admin') }}\"),
                    \$.getScript(\"{{ asset('assets/js/vendor/tempusdominus-bootstrap-4.min.js', 'admin') }}\")
                ).done(function() {
                    \$('input[id\$=_start]').datetimepicker({
                        locale: '{{ eccube_config.locale }}',
                        format: 'YYYY-MM-DD',
                        useCurrent: false,
                        buttons: {
                            showToday: true,
                            showClose: true
                        }
                    });

                    \$('input[id\$=_end]').datetimepicker({
                        locale: '{{ eccube_config.locale }}',
                        format: 'YYYY-MM-DD',
                        useCurrent: false,
                        buttons: {
                            showToday: true,
                            showClose: true
                        }
                    });

                });
            }

            \$('#btn-monthly').on('click', function () {
                \$('#{{ form.term_type.vars.id }}').val('monthly');
                document.form1.submit();
            });

            \$('#btn-term').on('click', function () {
                \$('#{{ form.term_type.vars.id }}').val('term');
                document.form1.submit();
            });

        });

        function moneyFormat(money) {
            return money.toString().replace(/\\B(?=(\\d{3})+(?!\\d))/g, ',');
        }

        jQuery.fn.tableToCSV = function() {
            var clean_text = function(text){
                text = text.replace(/\"/g, '\"\"');
                return '\"' + text + '\"';
            };

            \$(this).each(function(){
                var table = \$(this);
                var caption = \$('.box-title').text();
                var title = [];
                var rows = [];

                \$(this).find('tr').each(function(){
                    var data = [];
                    \$(this).find('th').each(function(){
                        var text = \$(this).text();
                        title.push(text);
                    });
                    \$(this).find('td').each(function(){
                        var td = \$(this);
                        var text = td.text();
                        if(td.hasClass('price-format')) {
                            td.find('span').each(function() {
                                text = \$(this).text().trim();
                                if (text != '-') {
                                    text = Math.round(text);
                                } else {
                                    text = 0;
                                }
                                data.push(text);
                            });
                        } else {
                            data.push(text);
                        }
                    });
                    data = data.join(',');
                    rows.push(data);
                });
                title = title.join(',');
                rows = rows.join('\\n');

                var csv = title + rows;
                var ts = new Date();
                var fileName;
                ts = ts.getFullYear().toString() + (ts.getMonth() + 1) + ts.getDate() + ts.getHours() + ts.getMinutes() + ts.getSeconds();

                if(caption == ''){
                    fileName = ts + '.csv';
                } else {
                    fileName = caption + '_' + ts + '.csv';
                }

                // if microsoft IE
                if (navigator.msSaveBlob) {
                    navigator.msSaveBlob(new Blob([csv], { type: 'text/csv;charset=utf-8;' }), fileName);
                } else {
                    var uri = 'data:text/csv;charset=utf-8,' + encodeURIComponent(csv);
                    var download_link = document.createElement('a');
                    download_link.href = uri;
                    download_link.download = fileName;
                    document.body.appendChild(download_link);
                    download_link.click();
                    document.body.removeChild(download_link);
                }

            });
        };

    </script>
{% endblock javascript %}

{% block main %}
    <form role=\"form\" name=\"form1\" id=\"form1\" method=\"post\" action=\"{{ action }}\" novalidate>
        {{ form_widget(form._token) }}
        {{ form_widget(form.term_type) }}
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <span class=\"card-title\">{{ report_title }}</span>
                        </div>

                        <div class=\"card-body\">
                            {% block option %}{% endblock %}

                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'sales_report.admin.index.001'|trans }}</span></div>
                                <div class=\"col mb-2\">
                                    <div class=\"row justify-content-start\">
                                        <div class=\"w-auto\">
                                            <div class=\"align-items-center d-flex\">
                                                {{ form_widget(form.monthly_year, {'attr': {'class':'float-start'}}) }}
                                                {{ 'sales_report.admin.label.monthly_year'|trans }}
                                            </div>
                                            {{ form_errors(form.monthly_year) }}
                                        </div>
                                        <div class=\"w-auto\">
                                            <div class=\"align-items-center d-flex\">
                                                {{ form_widget(form.monthly_month, {'attr': {'class':'float-start'}}) }}
                                                {{ 'sales_report.admin.label.monthly_month'|trans }}
                                            </div>
                                            {{ form_errors(form.monthly_month) }}
                                        </div>
                                        <div class=\"w-auto\">
                                            <button id=\"btn-monthly\" class=\"btn btn-ec-conversion px-5\" data-style=\"expand-right\" type=\"submit\">{{ 'sales_report.admin.index.002'|trans }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'sales_report.admin.index.003'|trans }}</span></div>
                                <div class=\"col mb-2\">
                                    <div class=\"row justify-content-start\">
                                        <div class=\"w-auto\">
                                            {{ form_widget(form.term_start, {'attr': {'placeholder': 'sales_report.admin.placholder'|trans}}) }}
                                            {{ form_errors(form.term_start) }}
                                        </div>
                                        <div class=\"w-auto text-center p-0\">
                                            <span class=\"align-middle\">～</span>
                                        </div>
                                        <div class=\"w-auto\">
                                            {{ form_widget(form.term_end, {'attr': {'placeholder': 'sales_report.admin.placholder'|trans}}) }}
                                            {{ form_errors(form.term_end) }}
                                        </div>
                                        <div class=\"w-auto\">
                                            <button id=\"btn-term\" class=\"btn btn-ec-conversion px-5 text-nowrap\" data-style=\"expand-right\" type=\"submit\">{{ 'sales_report.admin.index.004'|trans }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"card rounded border-0 mb-4\">
                        {% if app.request.method == 'POST' and rawData is not null %}
                            <div class=\"card-body container\">
                                <div class=\"col-12\">
                                    <canvas id=\"chart\"></canvas>
                                </div>
                            </div>
                        {% endif %}

                        {% block table %}{% endblock %}
                    </div>
                </div>
            </div>
        </div>

    </form>
{% endblock main %}
", "SalesReport42/Resource/template/admin/index.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\SalesReport42\\Resource\\template\\admin\\index.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("form_theme" => 14, "block" => 18, "if" => 202);
        static $filters = array("escape" => 12, "trans" => 12);
        static $functions = array("asset" => 24, "form_widget" => 140, "form_errors" => 162);

        try {
            $this->sandbox->checkSecurity(
                ['form_theme', 'block', 'if'],
                ['escape', 'trans'],
                ['asset', 'form_widget', 'form_errors']
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
