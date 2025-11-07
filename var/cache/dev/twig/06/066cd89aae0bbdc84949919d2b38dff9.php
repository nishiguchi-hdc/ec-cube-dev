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

/* @admin/Setting/Shop/payment_edit.twig */
class __TwigTemplate_c095a8a74fe840e84a41897c6d1e3839 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/Shop/payment_edit.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/Shop/payment_edit.twig"));

        // line 13
        $context["menus"] = ["setting", "shop", "shop_payment"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/Shop/payment_edit.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.payment_setting"), "html", null, true);
        
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
        echo "    <script>
        \$(document).on('drop dragover', function(e) {
            e.preventDefault();
        });

        \$(function() {
            // ファイルアップロード
            // see https://pqina.nl/filepond/
            var inputFileElement = document.querySelector('input[type=file]');
            ";
        // line 30
        if (((twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 30, $this->source); })()), "locale", [], "any", false, false, true, 30) == "ja") || (twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 30, $this->source); })()), "locale", [], "any", false, false, true, 30) == "en"))) {
            // line 31
            echo "            FilePond.setOptions(FilePondLocale_";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 31, $this->source); })()), "locale", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo ");
            ";
        }
        // line 33
        echo "            FilePond.setOptions({
                server: {
                    process: {
                        url: '";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_payment_image_process");
        echo "',
                        headers: {
                            'ECCUBE-CSRF-TOKEN': \$('meta[name=\"eccube-csrf-token\"]').attr('content'),
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    },
                    load: {
                        url: '";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_payment_image_load");
        echo "?source=',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    },
                    revert: {
                        url: '";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_payment_image_revert");
        echo "',
                        headers: {
                            'ECCUBE-CSRF-TOKEN': \$('meta[name=\"eccube-csrf-token\"]').attr('content'),
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    }
                }
            });
            var pond = FilePond.create(inputFileElement, {
                allowFileTypeValidation: true,
                acceptedFileTypes: [
                    'image/gif',
                    'image/png',
                    'image/jpeg'
                ],
                allowFileSizeValidation: true,
                maxFileSize: 10000000,
                maxFiles: 1,
                allowBrowse: true,
                labelIdle: '<i class=\"fa fa-cloud-upload fa-3x text-ec-lightGray mx-3 align-middle\" aria-hidden=\"true\" style=\"font-size: 40px\"></i>";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_image_description"), "html", null, true);
        echo "<span class=\"filepond--label-action\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.file_select"), "html", null, true);
        echo "</span>',
                // 保存されている画像のロード
                files: [
                    ";
        // line 71
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "payment_image", [], "any", false, false, true, 71), "vars", [], "any", false, false, true, 71), "value", [], "any", false, false, true, 71))) {
            // line 72
            echo "                    {
                        source: '";
            // line 73
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "payment_image", [], "any", false, false, true, 73), "vars", [], "any", false, false, true, 73), "value", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            echo "',
                        options: {
                            type: 'local'
                        }
                    },
                    ";
        }
        // line 79
        echo "                ]
            });
            pond.on('initfile', function() {
                \$('#product_image_error').hide();
            });
            pond.on('error', function(error, file) {
                var message = '";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.upload_error"), "html", null, true);
        echo "';
                if (error.main !== undefined) {
                    message = `\${error.main}: \${error.sub}`;
                }
                \$('#payment_image_error')
                    .show()
                    .find('.form-error-message').text(message);

                // エラーメッセージが表示されてからプレビューエリアのエラーメッセージを非表示にする
                setTimeout(function() {
                    \$('.filepond--file-status').hide();
                }, 300);
            });

            // 画像が追加されたら payment_image にファイル名を追加する
            pond.on('processfile', function(error, file) {
                if (error) {
                    console.log(error);
                } else {
                    \$('#";
        // line 104
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "payment_image", [], "any", false, false, true, 104), "vars", [], "any", false, false, true, 104), "id", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
        echo "').val(file.serverId);
                }
            });
            // 画像が削除されたら payment_image のファイル名を削除する
            pond.on('removefile', function(error, file) {
                if (error) {
                    console.log(error);
                } else {
                    \$('#";
        // line 112
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "payment_image", [], "any", false, false, true, 112), "vars", [], "any", false, false, true, 112), "id", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
        echo "').val('');
                }
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 119
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 120
        echo "    <form role=\"form\" class=\"form-horizontal\" name=\"form1\" id=\"form1\" method=\"post\" action=\"\" enctype=\"multipart/form-data\">
        ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "_token", [], "any", false, false, true, 121), 121, $this->source), 'widget');
        echo "
        ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "fixed", [], "any", false, false, true, 122), 122, $this->source), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.payment_method"), "html", null, true);
        echo "</span></div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <span>";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.payment.payment_name"), "html", null, true);
        echo "</span><span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "method", [], "any", false, false, true, 133), 133, $this->source), 'widget');
        echo "
                                    ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "method", [], "any", false, false, true, 134), 134, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.charge"), "html", null, true);
        echo "</span><span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "charge", [], "any", false, false, true, 140), 140, $this->source), 'widget');
        echo "
                                    ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "charge", [], "any", false, false, true, 141), 141, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.payment.rule"), "html", null, true);
        echo "\">
                                        <span><span>";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.payment.terms_of_use"), "html", null, true);
        echo "</span></span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    <div class=\"row justify-content-start\">
                                        <div class=\"col-4\">
                                            ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "rule_min", [], "any", false, false, true, 153), 153, $this->source), 'widget');
        echo "
                                            ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "rule_min", [], "any", false, false, true, 154), 154, $this->source), 'errors');
        echo "
                                        </div>
                                        <div class=\"col-auto text-center p-0\"><span class=\"align-middle\">";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span></div>
                                        <div class=\"col-4\">
                                            ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "rule_max", [], "any", false, false, true, 158), 158, $this->source), 'widget');
        echo "
                                            ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "rule_max", [], "any", false, false, true, 159), 159, $this->source), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.payment.logo_image"), "html", null, true);
        echo "\">
                                        <span>";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.payment.logo_image"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        <br>";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.payment.logo_image_size"), "html", null, true);
        echo "
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "payment_image", [], "any", false, false, true, 173), 173, $this->source), 'widget', ["attr" => ["style" => "display:none;"]]);
        echo "
                                    <div id=\"upload-zone\" class=\"media py-3\">
                                        <div class=\"media-body\">
                                            ";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "payment_image_file", [], "any", false, false, true, 176), 176, $this->source), 'widget', ["attr" => ["style" => "display:none;"]]);
        echo "
                                            ";
        // line 177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), "payment_image", [], "any", false, false, true, 177), 177, $this->source), 'errors');
        echo "
                                        </div><!-- /.media-body -->
                                        <span class=\"invalid-feedback\" id=\"payment_image_error\" style=\"display: none\">
                                            <span class=\"d-block\">
                                                <span class=\"form-error-icon badge bg-danger text-uppercase\">";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Error", [], "validators"), "html", null, true);
        echo "</span>
                                                <span class=\"form-error-message\"></span>
                                            </span>
                                        </span>
                                    </div><!-- /.media -->
                                </div>
                            </div>
                            ";
        // line 189
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 189, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 189), "eccube_form_options", [], "any", false, false, true, 189), "auto_render", [], "any", false, false, true, 189); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 190
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 190), "eccube_form_options", [], "any", false, false, true, 190), "form_theme", [], "any", false, false, true, 190)) {
                // line 191
                echo "                                    ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 191), "eccube_form_options", [], "any", false, false, true, 191), "form_theme", [], "any", false, false, true, 191)], true);
                // line 192
                echo "                                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 192, $this->source), 'row');
                echo "
                                ";
            } else {
                // line 194
                echo "                                    <div class=\"row\">
                                        <div class=\"col-3\"><span>";
                // line 195
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 195), "label", [], "any", false, false, true, 195), 195, $this->source)), "html", null, true);
                echo "</span></div>
                                        <div class=\"col mb-2\">
                                            ";
                // line 197
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 197, $this->source), 'widget');
                echo "
                                            ";
                // line 198
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 198, $this->source), 'errors');
                echo "
                                        </div>
                                    </div>
                                ";
            }
            // line 202
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "                        </div><!-- /.box-body -->
                    </div>
                </div>
            </div><!-- /.box -->
        </div><!-- /.col -->
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"";
        // line 213
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_payment");
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.payment_list"), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                ";
        // line 221
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 221, $this->source); })()), "visible", [], "any", false, false, true, 221), 221, $this->source), 'widget');
        echo "
                                ";
        // line 222
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 222, $this->source); })()), "visible", [], "any", false, false, true, 222), 222, $this->source), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
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
        return "@admin/Setting/Shop/payment_edit.twig";
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
        return array (  503 => 225,  497 => 222,  493 => 221,  483 => 214,  479 => 213,  467 => 203,  461 => 202,  454 => 198,  450 => 197,  445 => 195,  442 => 194,  436 => 192,  433 => 191,  430 => 190,  425 => 189,  415 => 181,  408 => 177,  404 => 176,  398 => 173,  391 => 169,  387 => 168,  383 => 167,  372 => 159,  368 => 158,  363 => 156,  358 => 154,  354 => 153,  345 => 147,  341 => 146,  333 => 141,  329 => 140,  322 => 138,  315 => 134,  311 => 133,  304 => 131,  297 => 127,  289 => 122,  285 => 121,  282 => 120,  272 => 119,  256 => 112,  245 => 104,  223 => 85,  215 => 79,  206 => 73,  203 => 72,  201 => 71,  193 => 68,  171 => 49,  162 => 43,  152 => 36,  147 => 33,  141 => 31,  139 => 30,  128 => 21,  118 => 20,  99 => 16,  80 => 15,  69 => 11,  67 => 18,  65 => 13,  40 => 11,);
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

{% set menus = ['setting', 'shop', 'shop_payment'] %}

{% block title %}{{ 'admin.setting.shop.payment_setting'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.setting.shop'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block javascript %}
    <script>
        \$(document).on('drop dragover', function(e) {
            e.preventDefault();
        });

        \$(function() {
            // ファイルアップロード
            // see https://pqina.nl/filepond/
            var inputFileElement = document.querySelector('input[type=file]');
            {% if eccube_config.locale == 'ja' or eccube_config.locale == 'en' %}
            FilePond.setOptions(FilePondLocale_{{ eccube_config.locale }});
            {% endif %}
            FilePond.setOptions({
                server: {
                    process: {
                        url: '{{ path('admin_payment_image_process') }}',
                        headers: {
                            'ECCUBE-CSRF-TOKEN': \$('meta[name=\"eccube-csrf-token\"]').attr('content'),
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    },
                    load: {
                        url: '{{ path('admin_payment_image_load') }}?source=',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    },
                    revert: {
                        url: '{{ path('admin_payment_image_revert') }}',
                        headers: {
                            'ECCUBE-CSRF-TOKEN': \$('meta[name=\"eccube-csrf-token\"]').attr('content'),
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    }
                }
            });
            var pond = FilePond.create(inputFileElement, {
                allowFileTypeValidation: true,
                acceptedFileTypes: [
                    'image/gif',
                    'image/png',
                    'image/jpeg'
                ],
                allowFileSizeValidation: true,
                maxFileSize: 10000000,
                maxFiles: 1,
                allowBrowse: true,
                labelIdle: '<i class=\"fa fa-cloud-upload fa-3x text-ec-lightGray mx-3 align-middle\" aria-hidden=\"true\" style=\"font-size: 40px\"></i>{{ 'admin.common.drag_and_drop_image_description'|trans }}<span class=\"filepond--label-action\">{{ 'admin.common.file_select'|trans }}</span>',
                // 保存されている画像のロード
                files: [
                    {% if form.payment_image.vars.value is not empty %}
                    {
                        source: '{{ form.payment_image.vars.value }}',
                        options: {
                            type: 'local'
                        }
                    },
                    {% endif %}
                ]
            });
            pond.on('initfile', function() {
                \$('#product_image_error').hide();
            });
            pond.on('error', function(error, file) {
                var message = '{{ 'admin.common.upload_error'|trans }}';
                if (error.main !== undefined) {
                    message = `\${error.main}: \${error.sub}`;
                }
                \$('#payment_image_error')
                    .show()
                    .find('.form-error-message').text(message);

                // エラーメッセージが表示されてからプレビューエリアのエラーメッセージを非表示にする
                setTimeout(function() {
                    \$('.filepond--file-status').hide();
                }, 300);
            });

            // 画像が追加されたら payment_image にファイル名を追加する
            pond.on('processfile', function(error, file) {
                if (error) {
                    console.log(error);
                } else {
                    \$('#{{ form.payment_image.vars.id }}').val(file.serverId);
                }
            });
            // 画像が削除されたら payment_image のファイル名を削除する
            pond.on('removefile', function(error, file) {
                if (error) {
                    console.log(error);
                } else {
                    \$('#{{ form.payment_image.vars.id }}').val('');
                }
            });
        });
    </script>
{% endblock %}

{% block main %}
    <form role=\"form\" class=\"form-horizontal\" name=\"form1\" id=\"form1\" method=\"post\" action=\"\" enctype=\"multipart/form-data\">
        {{ form_widget(form._token) }}
        {{ form_widget(form.fixed) }}
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>{{ 'admin.common.payment_method'|trans }}</span></div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <span>{{ 'admin.setting.shop.payment.payment_name'|trans }}</span><span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span></div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.method) }}
                                    {{ form_errors(form.method) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'admin.common.charge'|trans }}</span><span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span></div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.charge) }}
                                    {{ form_errors(form.charge) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.setting.shop.payment.rule'|trans }}\">
                                        <span><span>{{ 'admin.setting.shop.payment.terms_of_use'|trans }}</span></span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    <div class=\"row justify-content-start\">
                                        <div class=\"col-4\">
                                            {{ form_widget(form.rule_min) }}
                                            {{ form_errors(form.rule_min) }}
                                        </div>
                                        <div class=\"col-auto text-center p-0\"><span class=\"align-middle\">{{ 'admin.common.separator__range'|trans }}</span></div>
                                        <div class=\"col-4\">
                                            {{ form_widget(form.rule_max) }}
                                            {{ form_errors(form.rule_max) }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.setting.shop.payment.logo_image'|trans }}\">
                                        <span>{{ 'admin.setting.shop.payment.logo_image'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        <br>{{ 'admin.setting.shop.payment.logo_image_size'|trans }}
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.payment_image, { attr : { style : 'display:none;' } }) }}
                                    <div id=\"upload-zone\" class=\"media py-3\">
                                        <div class=\"media-body\">
                                            {{ form_widget(form.payment_image_file, { attr : { style : 'display:none;' } }) }}
                                            {{ form_errors(form.payment_image) }}
                                        </div><!-- /.media-body -->
                                        <span class=\"invalid-feedback\" id=\"payment_image_error\" style=\"display: none\">
                                            <span class=\"d-block\">
                                                <span class=\"form-error-icon badge bg-danger text-uppercase\">{{ 'Error'|trans({}, 'validators') }}</span>
                                                <span class=\"form-error-message\"></span>
                                            </span>
                                        </span>
                                    </div><!-- /.media -->
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
                        </div><!-- /.box-body -->
                    </div>
                </div>
            </div><!-- /.box -->
        </div><!-- /.col -->
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"{{ url('admin_setting_shop_payment') }}\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>{{ 'admin.setting.shop.payment_list'|trans }}</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                {{ form_widget(form.visible) }}
                                {{ form_errors(form.visible) }}
                            </div>
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
", "@admin/Setting/Shop/payment_edit.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\admin\\Setting\\Shop\\payment_edit.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18, "if" => 30, "for" => 189);
        static $filters = array("escape" => 15, "trans" => 15, "filter" => 189);
        static $functions = array("path" => 36, "form_widget" => 121, "form_errors" => 134, "form_row" => 192, "url" => 213);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'if', 'for'],
                ['escape', 'trans', 'filter'],
                ['path', 'form_widget', 'form_errors', 'form_row', 'url']
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
