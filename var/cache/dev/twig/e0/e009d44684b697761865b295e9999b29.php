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

/* @admin/Product/product.twig */
class __TwigTemplate_60ea711373bee348e866610bad6a45be extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Product/product.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Product/product.twig"));

        // line 13
        $context["menus"] = ["product", "product_edit"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Product/product.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_registration"), "html", null, true);
        
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_management"), "html", null, true);
        
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
            ";
        // line 27
        if (((isset($context["has_class"]) || array_key_exists("has_class", $context) ? $context["has_class"] : (function () { throw new RuntimeError('Variable "has_class" does not exist.', 27, $this->source); })()) == false)) {
            // line 28
            echo "            if (\$(\"#";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "class", [], "any", false, false, true, 28), "stock_unlimited", [], "any", false, false, true, 28), "vars", [], "any", false, false, true, 28), "id", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "\").prop(\"checked\")) {
                \$(\"#";
            // line 29
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "class", [], "any", false, false, true, 29), "stock", [], "any", false, false, true, 29), "vars", [], "any", false, false, true, 29), "id", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "\").attr(\"disabled\", \"disabled\").val('');
            } else {
                \$(\"#";
            // line 31
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "class", [], "any", false, false, true, 31), "stock", [], "any", false, false, true, 31), "vars", [], "any", false, false, true, 31), "id", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "\").removeAttr(\"disabled\");
            }
            \$(\"#";
            // line 33
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "class", [], "any", false, false, true, 33), "stock_unlimited", [], "any", false, false, true, 33), "vars", [], "any", false, false, true, 33), "id", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "\").on(\"click change\", function() {
                if (\$(this).prop(\"checked\")) {
                    \$(\"#";
            // line 35
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "class", [], "any", false, false, true, 35), "stock", [], "any", false, false, true, 35), "vars", [], "any", false, false, true, 35), "id", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "\").attr(\"disabled\", \"disabled\").val('');
                } else {
                    \$(\"#";
            // line 37
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "class", [], "any", false, false, true, 37), "stock", [], "any", false, false, true, 37), "vars", [], "any", false, false, true, 37), "id", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "\").removeAttr(\"disabled\");
                }
            });
            ";
        }
        // line 41
        echo "
            // ファイルアップロード
            // see https://pqina.nl/filepond/
            var inputFileElement = document.querySelector('input[type=file]');
            ";
        // line 45
        if (((twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 45, $this->source); })()), "locale", [], "any", false, false, true, 45) == "ja") || (twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 45, $this->source); })()), "locale", [], "any", false, false, true, 45) == "en"))) {
            // line 46
            echo "            FilePond.setOptions(FilePondLocale_";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 46, $this->source); })()), "locale", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo ");
            ";
        }
        // line 48
        echo "            FilePond.setOptions({
                server: {
                    process: {
                        url: '";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_image_process");
        echo "',
                        headers: {
                            'ECCUBE-CSRF-TOKEN': \$('meta[name=\"eccube-csrf-token\"]').attr('content'),
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    },
                    load: {
                        url: '";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_image_load");
        echo "?source=',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    },
                    revert: {
                        url: '";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_image_revert");
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
                maxFiles: 10,
                allowBrowse: true,
                allowDrop: true,
                allowReorder: true,
                labelIdle: '<i class=\"fa fa-cloud-upload fa-3x text-ec-lightGray mx-3 align-middle\" aria-hidden=\"true\" style=\"font-size: 40px\"></i>";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_image_description"), "html", null, true);
        echo "<span class=\"filepond--label-action\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.file_select"), "html", null, true);
        echo "</span>',
                styleItemPanelAspectRatio: 0.5625,
                // 保存されている画像のロード
                files: [
                    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "images", [], "any", false, false, true, 89));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 90
            echo "                    {
                        source: '";
            // line 91
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "vars", [], "any", false, false, true, 91), "value", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
            echo "',
                        options: {
                            type: 'local'
                        }
                    },
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                    // 追加してすぐの画像のロード. バリデーションエラーの場合など.
                    ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "add_images", [], "any", false, false, true, 98));
        foreach ($context['_seq'] as $context["_key"] => $context["add_image"]) {
            // line 99
            echo "                    {
                        source: '";
            // line 100
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["add_image"], "vars", [], "any", false, false, true, 100), "value", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
            echo "',
                        options: {
                            type: 'local'
                        }
                    },
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['add_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                ]
            });
            // 画像が追加されたら add_images にファイル名を追加する
            var proto_add = '";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "add_images", [], "any", false, false, true, 109), "vars", [], "any", false, false, true, 109), "prototype", [], "any", false, false, true, 109), 109, $this->source), 'widget');
        echo "';
            pond.on('processfile', function(error, file) {
                if (error) {
                    console.log(error);
                } else {
                    \$('#upload-zone').append(
                        \$(proto_add.replace(/__name__/g, file.id))
                            .val(file.serverId)
                            .addClass('add_images')
                    );
                }
            });
            // 画像が削除されたら delete_images にファイル名を追加する
            var proto_del = '";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "delete_images", [], "any", false, false, true, 122), "vars", [], "any", false, false, true, 122), "prototype", [], "any", false, false, true, 122), 122, $this->source), 'widget');
        echo "';
            pond.on('removefile', function(error, file) {
                if (error) {
                    console.log(error);
                } else {
                    // file.serverId にはアップロードしたファイル名が格納される.
                    if (file.serverId) {
                        \$('#upload-zone').append(
                            \$(proto_del.replace(/__name__/g, file.id))
                                .val(file.serverId)
                                .addClass('del_images')
                        );
                    }
                    // 追加してすぐ削除した画像があれば削除する
                    \$('#upload-zone').find('#admin_product_add_images_' + file.id).remove(); // 追加してすぐ削除した画像
                    \$('#upload-zone').find('.add_images[value=\"' + file.filename + '\"]').remove(); // 追加後, バリデーションエラーが発生した後に削除した画像
                }
            });
            pond.on('initfile', function() {
                \$('#product_image_error').hide();
            });
            pond.on('error', function(error, file) {
                var message = '";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.upload_error"), "html", null, true);
        echo "';
                if (error.main !== undefined) {
                    message = `\${error.main}: \${error.sub}`;
                }
                \$('#product_image_error')
                    .show()
                    .find('.form-error-message').text(message);

                // エラーメッセージが表示されてからプレビューエリアのエラーメッセージを非表示にする
                setTimeout(function() {
                    \$('.filepond--file-status').hide();
                }, 300);
            });

            // バリデーションエラーが出た場合に画像を保持するための hidden を追加しておく
            var proto_image = '";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "images", [], "any", false, false, true, 159), "vars", [], "any", false, false, true, 159), "prototype", [], "any", false, false, true, 159), 159, $this->source), 'widget');
        echo "';
            ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "images", [], "any", false, false, true, 160));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 161
            echo "                \$('#upload-zone').append(
                    \$(proto_image.replace(/__name__/g, '";
            // line 162
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
            echo "'))
                        .val('";
            // line 163
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "vars", [], "any", false, false, true, 163), "value", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
            echo "')
                        .addClass('images')
                );
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "add_images", [], "any", false, false, true, 167));
        foreach ($context['_seq'] as $context["_key"] => $context["add_image"]) {
            // line 168
            echo "                \$('#upload-zone').append(
                    \$('";
            // line 169
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["add_image"], 169, $this->source), 'widget');
            echo "')
                        .val('";
            // line 170
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["add_image"], "vars", [], "any", false, false, true, 170), "value", [], "any", false, false, true, 170), 170, $this->source), "html", null, true);
            echo "')
                        .addClass('add_images')
                );
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['add_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "delete_images", [], "any", false, false, true, 174));
        foreach ($context['_seq'] as $context["_key"] => $context["delete_image"]) {
            // line 175
            echo "                \$('#upload-zone').append(
                    \$('";
            // line 176
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["delete_image"], 176, $this->source), 'widget');
            echo "').addClass('del_images')
                );
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['delete_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "
            // タグ管理
            var mainTags = \$('#allTags');
            var adminProductTag = \$('#admin_product_Tag');
            \$('input', adminProductTag).each(function() {
                if (\$(this).is(':checked')) {
                    \$('button[data-tag-id=\"' + \$(this).val() + '\"]').removeClass('btn-outline-secondary').addClass('btn-outline-primary');
                }
            });
            mainTags.on('click', 'button.btn', function() {
                var btnTag = \$(this);
                var tagId = btnTag.data('tag-id');
                if (btnTag.hasClass('btn-outline-primary')) {
                    btnTag.removeClass('btn-outline-primary').addClass('btn-outline-secondary');
                    \$('input[value=\"' + tagId + '\"]', mainTags).prop('checked', false);
                } else {
                    btnTag.removeClass('btn-outline-secondary').addClass('btn-outline-primary');
                    \$('input[value=\"' + tagId + '\"]', mainTags).prop('checked', true);
                }
            });

            var confirmFormChange = function(form, target, modal) {
                var returnLink = form.find('input[type=\"hidden\"][name*=\"return_link\"]'),
                    saveBtn = modal.find('a[data-action=\"save\"]'),
                    cancelBtn = modal.find('a[data-action=\"cancel\"]');
                modal.on('hidden.bs.modal', function() {
                    returnLink.val('');
                });
                saveBtn.on('click', function() {
                    returnLink.val(\$(this).data('return-link'));
                    \$(this).addClass('disabled');
                    form.submit();
                });
                target.on('click', function() {
                    modal.find('.modal-body .screen-name').text(\$(this).attr('title'));
                    modal.modal('show');
                    saveBtn.data('return-link', \$(this).attr('href'));
                    cancelBtn.attr('href', \$(this).attr('href'));
                    return false;
                });
            };
            confirmFormChange(\$('#form1'), \$('a[data-action=\"confirm\"]'), \$('#confirmFormChangeModal'))
        });

        // searchWordの実行
        \$('#search-category').on('input', function () {
            searchWord(\$(this).val(), \$('.category-li'));
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 230
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 231
        echo "
    <!-- 移動確認モーダル-->
    <div class=\"modal fade\" id=\"confirmFormChangeModal\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"confirmFormChangeModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_title"), "html", null, true);
        echo "</h5>
                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                    </button>
                </div>
                <div class=\"modal-body\">
                    <p class=\"screen-name\"></p>
                </div>
                <div class=\"modal-footer\">
                    <a class=\"btn btn-ec-conversion\" data-action=\"save\" href=\"javascript:void(0)\">
                        ";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_save_and_move"), "html", null, true);
        echo "
                    </a>
                    <a class=\"btn btn-ec-sub\" data-action=\"cancel\" href=\"javascript:void(0)\">
                        ";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_move_only"), "html", null, true);
        echo "
                    </a>
                </div>
            </div>
        </div>
    </div>
    <form role=\"form\" name=\"form1\" id=\"form1\" method=\"post\" action=\"\" novalidate enctype=\"multipart/form-data\">
        ";
        // line 258
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 258, $this->source); })()), "_token", [], "any", false, false, true, 258), 258, $this->source), 'widget');
        echo "
        ";
        // line 259
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 259, $this->source); })()), "return_link", [], "any", false, false, true, 259), 259, $this->source), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\">
                                    <span class=\"card-title\">
                                        ";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product__card_title"), "html", null, true);
        echo "
                                    </span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-end\">
                                    <a data-bs-toggle=\"collapse\" href=\"#basicConfig\" aria-expanded=\"false\"
                                       aria-controls=\"basicConfig\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"basicConfig\">
                            <div class=\"card-body\">
                                ";
        // line 283
        if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 283, $this->source); })()), "id", [], "any", false, false, true, 283)) {
            // line 284
            echo "                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            // line 286
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.product_id"), "html", null, true);
            echo "\">
                                                <span>";
            // line 287
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_id"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col\">
                                            <p>";
            // line 292
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 292, $this->source); })()), "id", [], "any", false, false, true, 292), 292, $this->source), "html", null, true);
            echo "</p>
                                        </div>
                                    </div>
                                ";
        }
        // line 296
        echo "
";
        // line 297
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product_class_ext", [], "any", true, true, true, 297)) {
            // line 298
            echo "    <div class=\"row mt-2\">
        <div class=\"col-3\">
            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"品番\">
                <span>品番</span>
            </div>
        </div>
        <div class=\"col mb-2\">
            ";
            // line 305
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 305, $this->source); })()), "product_class_ext", [], "any", false, false, true, 305), "item_code", [], "any", false, false, true, 305), 305, $this->source), 'widget');
            echo "
            ";
            // line 306
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 306, $this->source); })()), "product_class_ext", [], "any", false, false, true, 306), "item_code", [], "any", false, false, true, 306), 306, $this->source), 'errors');
            echo "
        </div>
    </div>
";
        }
        // line 310
        echo "
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\">
                                            <span>";
        // line 314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.name"), "html", null, true);
        echo "</span>
                                            <span class=\"badge bg-primary ms-1\">
                                                ";
        // line 316
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "
                                            </span>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        ";
        // line 321
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 321, $this->source); })()), "name", [], "any", false, false, true, 321), 321, $this->source), 'widget');
        echo "
                                        ";
        // line 322
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 322, $this->source); })()), "name", [], "any", false, false, true, 322), 322, $this->source), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                             title=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.description_detail"), "html", null, true);
        echo "\">
                                            <span>";
        // line 329
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.description_detail"), "html", null, true);
        echo "</span>
                                            <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 334
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 334, $this->source); })()), "description_detail", [], "any", false, false, true, 334), 334, $this->source), 'widget', ["attr" => ["rows" => "8"]]);
        echo "
                                        ";
        // line 335
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 335, $this->source); })()), "description_detail", [], "any", false, false, true, 335), 335, $this->source), 'errors');
        echo "
";
        // line 347
        echo "                                    </div>
                                </div>
";
        // line 349
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product_ext", [], "any", true, true, true, 349)) {
            // line 350
            echo "    <div class=\"row mt-2\">
        <div class=\"col-3\">
            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"品番\">
                <span>生産地</span>
            </div>
        </div>
        <div class=\"col mb-2\">
            ";
            // line 357
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 357, $this->source); })()), "product_ext", [], "any", false, false, true, 357), "made_in", [], "any", false, false, true, 357), 357, $this->source), 'widget');
            echo "
            ";
            // line 358
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 358, $this->source); })()), "product_ext", [], "any", false, false, true, 358), "made_in", [], "any", false, false, true, 358), 358, $this->source), 'errors');
            echo "
        </div>
    </div>
";
        }
        // line 362
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product_ext", [], "any", true, true, true, 362)) {
            // line 363
            echo "    <div class=\"row mt-2\">
        <div class=\"col-3\">
            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"品番\">
                <span>サイズ</span>
            </div>
        </div>
        <div class=\"col mb-2\">
            ";
            // line 370
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 370, $this->source); })()), "product_ext", [], "any", false, false, true, 370), "size", [], "any", false, false, true, 370), 370, $this->source), 'widget');
            echo "
            ";
            // line 371
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 371, $this->source); })()), "product_ext", [], "any", false, false, true, 371), "size", [], "any", false, false, true, 371), 371, $this->source), 'errors');
            echo "
        </div>
    </div>
";
        }
        // line 375
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product_ext", [], "any", true, true, true, 375)) {
            // line 376
            echo "    <div class=\"row mt-2\">
        <div class=\"col-3\">
            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"品番\">
                <span>素材</span>
            </div>
        </div>
        <div class=\"col mb-2\">
            ";
            // line 383
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 383, $this->source); })()), "product_ext", [], "any", false, false, true, 383), "material", [], "any", false, false, true, 383), 383, $this->source), 'widget');
            echo "
            ";
            // line 384
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 384, $this->source); })()), "product_ext", [], "any", false, false, true, 384), "material", [], "any", false, false, true, 384), 384, $this->source), 'errors');
            echo "
        </div>
    </div>
";
        }
        // line 388
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product_ext", [], "any", true, true, true, 388)) {
            // line 389
            echo "    <div class=\"row mt-2\">
        <div class=\"col-3\">
            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"品番\">
                <span>重量</span>
            </div>
        </div>
        <div class=\"col mb-2\">
            ";
            // line 396
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 396, $this->source); })()), "product_ext", [], "any", false, false, true, 396), "weight", [], "any", false, false, true, 396), 396, $this->source), 'widget');
            echo "
            ";
            // line 397
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 397, $this->source); })()), "product_ext", [], "any", false, false, true, 397), "weight", [], "any", false, false, true, 397), 397, $this->source), 'errors');
            echo "
        </div>
    </div>
";
        }
        // line 401
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product_ext", [], "any", true, true, true, 401)) {
            // line 402
            echo "    <div class=\"row mt-2\">
        <div class=\"col-3\">
            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"品番\">
                <span>色柄</span>
            </div>
        </div>
        <div class=\"col mb-2\">
            ";
            // line 409
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 409, $this->source); })()), "product_ext", [], "any", false, false, true, 409), "color_pattern", [], "any", false, false, true, 409), 409, $this->source), 'widget');
            echo "
            ";
            // line 410
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 410, $this->source); })()), "product_ext", [], "any", false, false, true, 410), "color_pattern", [], "any", false, false, true, 410), 410, $this->source), 'errors');
            echo "
        </div>
    </div>
";
        }
        // line 414
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product_ext", [], "any", true, true, true, 414)) {
            // line 415
            echo "    <div class=\"row mt-2\">
        <div class=\"col-3\">
            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"品番\">
                <span>荷姿</span>
            </div>
        </div>
        <div class=\"col mb-2\">
            ";
            // line 422
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 422, $this->source); })()), "product_ext", [], "any", false, false, true, 422), "package_form", [], "any", false, false, true, 422), 422, $this->source), 'widget');
            echo "
            ";
            // line 423
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 423, $this->source); })()), "product_ext", [], "any", false, false, true, 423), "package_form", [], "any", false, false, true, 423), 423, $this->source), 'errors');
            echo "
        </div>
    </div>
";
        }
        // line 427
        echo "                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.image"), "html", null, true);
        echo "\">
                                            <span>";
        // line 430
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.image"), "html", null, true);
        echo "</span>
                                            <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            <br>";
        // line 432
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.image_size"), "html", null, true);
        echo "
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        <p id=\"message\"></p>
                                        <div id=\"upload-zone\" class=\"rounded\">
                                            ";
        // line 438
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 438, $this->source); })()), "product_image", [], "any", false, false, true, 438), 438, $this->source), 'widget', ["attr" => ["style" => "display:none;"]]);
        echo "
                                            ";
        // line 439
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 439, $this->source); })()), "product_image", [], "any", false, false, true, 439), 439, $this->source), 'errors');
        echo "
                                        </div><!-- /#upload-zone -->
                                        <span class=\"invalid-feedback\" id=\"product_image_error\" style=\"display: none\">
                                            <span class=\"d-block\">
                                                <span class=\"form-error-icon badge bg-danger text-uppercase\">";
        // line 443
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Error", [], "validators"), "html", null, true);
        echo "</span>
                                                <span class=\"form-error-message\"></span>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                ";
        // line 449
        if (((isset($context["has_class"]) || array_key_exists("has_class", $context) ? $context["has_class"] : (function () { throw new RuntimeError('Variable "has_class" does not exist.', 449, $this->source); })()) == false)) {
            // line 450
            echo "                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\">
                                                <span>";
            // line 453
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.sale_price"), "html", null, true);
            echo "</span>
                                                <span class=\"badge bg-primary ms-1\">
                                                    ";
            // line 455
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                ";
            // line 461
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 461, $this->source); })()), "class", [], "any", false, false, true, 461), "price02", [], "any", false, false, true, 461), 461, $this->source), 'widget');
            echo "
                                                ";
            // line 462
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 462, $this->source); })()), "class", [], "any", false, false, true, 462), "price02", [], "any", false, false, true, 462), 462, $this->source), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 467
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product_class_ext", [], "any", true, true, true, 467)) {
            // line 468
            echo "    <div class=\"row mt-2\">
        <div class=\"col-3\">
            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"品番\">
                <span>税区分</span>
            </div>
        </div>
        <div class=\"col mb-2\">
            ";
            // line 475
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 475, $this->source); })()), "product_class_ext", [], "any", false, false, true, 475), "tax_category", [], "any", false, false, true, 475), 475, $this->source), 'widget');
            echo "
            ";
            // line 476
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 476, $this->source); })()), "product_class_ext", [], "any", false, false, true, 476), "tax_category", [], "any", false, false, true, 476), 476, $this->source), 'errors');
            echo "
        </div>
    </div>
";
        }
        // line 480
        echo "                                ";
        if (((isset($context["has_class"]) || array_key_exists("has_class", $context) ? $context["has_class"] : (function () { throw new RuntimeError('Variable "has_class" does not exist.', 480, $this->source); })()) == false)) {
            // line 481
            echo "                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\">
                                                <span>";
            // line 484
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock"), "html", null, true);
            echo "</span>
                                                <span class=\"badge bg-primary ms-1\">
                                                    ";
            // line 486
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"col\">
                                            <div>
                                                ";
            // line 492
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 492, $this->source); })()), "class", [], "any", false, false, true, 492), "stock", [], "any", false, false, true, 492), 492, $this->source), 'widget');
            echo "
                                                ";
            // line 493
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 493, $this->source); })()), "class", [], "any", false, false, true, 493), "stock", [], "any", false, false, true, 493), 493, $this->source), 'errors');
            echo "
                                                ";
            // line 495
            echo "                                                ";
            // line 496
            echo "                                                ";
            // line 497
            echo "                                                ";
            // line 498
            echo "                                                ";
            // line 499
            echo "                                                ";
            // line 500
            echo "                                                ";
            // line 501
            echo "                                                ";
            // line 502
            echo "                                                ";
            // line 503
            echo "                                                ";
            // line 504
            echo "                                                ";
            // line 505
            echo "                                                ";
            // line 506
            echo "                                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 506, $this->source); })()), "class", [], "any", false, false, true, 506), "stock_unlimited", [], "any", false, false, true, 506), 506, $this->source), 'widget');
            echo "
                                                ";
            // line 507
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 507, $this->source); })()), "class", [], "any", false, false, true, 507), "stock_unlimited", [], "any", false, false, true, 507), 507, $this->source), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 512
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product_class_ext", [], "any", true, true, true, 512)) {
            // line 513
            echo "    <div class=\"row mt-2\">
        <div class=\"col-3\">
            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"品番\">
                <span>JANコード</span>
            </div>
        </div>
        <div class=\"col mb-2\">
            ";
            // line 520
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 520, $this->source); })()), "product_class_ext", [], "any", false, false, true, 520), "jan_code", [], "any", false, false, true, 520), 520, $this->source), 'widget');
            echo "
            ";
            // line 521
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 521, $this->source); })()), "product_class_ext", [], "any", false, false, true, 521), "jan_code", [], "any", false, false, true, 521), 521, $this->source), 'errors');
            echo "
        </div>
    </div>
";
        }
        // line 525
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product_class_ext", [], "any", true, true, true, 525)) {
            // line 526
            echo "    <div class=\"row mt-2\">
        <div class=\"col-3\">
            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"品番\">
                <span>表示順</span>
            </div>
        </div>
        <div class=\"col mb-2\">
            ";
            // line 533
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 533, $this->source); })()), "product_class_ext", [], "any", false, false, true, 533), "display_order", [], "any", false, false, true, 533), 533, $this->source), 'widget');
            echo "
            ";
            // line 534
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 534, $this->source); })()), "product_class_ext", [], "any", false, false, true, 534), "display_order", [], "any", false, false, true, 534), 534, $this->source), 'errors');
            echo "
        </div>
    </div>
";
        }
        // line 538
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product_class_ext", [], "any", true, true, true, 538)) {
            // line 539
            echo "    <div class=\"row mt-2\">
        <div class=\"col-3\">
            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"品番\">
                <span>表示状態</span>
            </div>
        </div>
        <div class=\"col mb-2\">
            ";
            // line 546
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 546, $this->source); })()), "product_class_ext", [], "any", false, false, true, 546), "is_visible", [], "any", false, false, true, 546), 546, $this->source), 'widget');
            echo "
            ";
            // line 547
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 547, $this->source); })()), "product_class_ext", [], "any", false, false, true, 547), "is_visible", [], "any", false, false, true, 547), 547, $this->source), 'errors');
            echo "
        </div>
    </div>
";
        }
        // line 551
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product_ext", [], "any", true, true, true, 551)) {
            // line 552
            echo "    <div class=\"row mt-2\">
        <div class=\"col-3\">
            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"品番\">
                <span>掛け率</span>
            </div>
        </div>
        <div class=\"col mb-2\">
            ";
            // line 559
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 559, $this->source); })()), "product_ext", [], "any", false, false, true, 559), "trade_rate", [], "any", false, false, true, 559), 559, $this->source), 'widget');
            echo "
            ";
            // line 560
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 560, $this->source); })()), "product_ext", [], "any", false, false, true, 560), "trade_rate", [], "any", false, false, true, 560), 560, $this->source), 'errors');
            echo "
        </div>
    </div>
";
        }
        // line 564
        echo "














                                ";
        // line 579
        if (((isset($context["has_class"]) || array_key_exists("has_class", $context) ? $context["has_class"] : (function () { throw new RuntimeError('Variable "has_class" does not exist.', 579, $this->source); })()) == false)) {
            // line 580
            echo "                                    <div class=\"row d-none\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            // line 582
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.sale_type"), "html", null, true);
            echo "\">
                                                <span>";
            // line 583
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.sale_type"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                                <span class=\"badge bg-primary ms-1\">
                                                    ";
            // line 586
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            ";
            // line 591
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 591, $this->source); })()), "class", [], "any", false, false, true, 591), "sale_type", [], "any", false, false, true, 591), 591, $this->source), 'widget');
            echo "
                                            ";
            // line 592
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 592, $this->source); })()), "class", [], "any", false, false, true, 592), "sale_type", [], "any", false, false, true, 592), 592, $this->source), 'errors');
            echo "
                                        </div>
                                    </div>
                                ";
        }
        // line 596
        echo "                                <div class=\"collapse ec-collapse\" id=\"addComment\">
                                    <div class=\"row bg-ec-formGray pt-3 mb-2\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                 title=\"";
        // line 600
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.description_list"), "html", null, true);
        echo "\">
                                                <span>";
        // line 601
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.description_list"), "html", null, true);
        echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-4\">
                                            <div>
                                                ";
        // line 607
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 607, $this->source); })()), "description_list", [], "any", false, false, true, 607), 607, $this->source), 'widget', ["attr" => ["rows" => "4"]]);
        echo "
                                                ";
        // line 608
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 608, $this->source); })()), "description_list", [], "any", false, false, true, 608), 608, $this->source), 'errors');
        echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                ";
        // line 614
        if (((isset($context["has_class"]) || array_key_exists("has_class", $context) ? $context["has_class"] : (function () { throw new RuntimeError('Variable "has_class" does not exist.', 614, $this->source); })()) == false)) {
            // line 615
            echo "                                    <div class=\"row d-none\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                 title=\"";
            // line 618
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.normal_price"), "html", null, true);
            echo "\">
                                                <span>";
            // line 619
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.normal_price"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                ";
            // line 625
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 625, $this->source); })()), "class", [], "any", false, false, true, 625), "price01", [], "any", false, false, true, 625), 625, $this->source), 'widget');
            echo "
                                                ";
            // line 626
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 626, $this->source); })()), "class", [], "any", false, false, true, 626), "price01", [], "any", false, false, true, 626), 626, $this->source), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 631
        echo "                                <div class=\"row d-none\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                             title=\"";
        // line 634
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.search_word"), "html", null, true);
        echo "\">
                                            <span>";
        // line 635
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.search_word"), "html", null, true);
        echo "</span>
                                            <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        <div>
                                            ";
        // line 641
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 641, $this->source); })()), "search_word", [], "any", false, false, true, 641), 641, $this->source), 'widget');
        echo "
                                            ";
        // line 642
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 642, $this->source); })()), "search_word", [], "any", false, false, true, 642), 642, $this->source), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 646
        if (((isset($context["has_class"]) || array_key_exists("has_class", $context) ? $context["has_class"] : (function () { throw new RuntimeError('Variable "has_class" does not exist.', 646, $this->source); })()) == false)) {
            // line 647
            echo "                                    <div class=\"row d-none\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                 title=\"";
            // line 650
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.product_code"), "html", null, true);
            echo "\">
                                                <span>";
            // line 651
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_code"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                ";
            // line 657
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 657, $this->source); })()), "class", [], "any", false, false, true, 657), "code", [], "any", false, false, true, 657), 657, $this->source), 'widget');
            echo "
                                                ";
            // line 658
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 658, $this->source); })()), "class", [], "any", false, false, true, 658), "code", [], "any", false, false, true, 658), 658, $this->source), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row d-none\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                 title=\"";
            // line 665
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.sale_limit"), "html", null, true);
            echo "\">
                                                <span>";
            // line 666
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.sale_limit"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                ";
            // line 672
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 672, $this->source); })()), "class", [], "any", false, false, true, 672), "sale_limit", [], "any", false, false, true, 672), 672, $this->source), 'widget');
            echo "
                                                ";
            // line 673
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 673, $this->source); })()), "class", [], "any", false, false, true, 673), "sale_limit", [], "any", false, false, true, 673), 673, $this->source), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row d-none\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                 title=\"";
            // line 680
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.delivery_duration"), "html", null, true);
            echo "\">
                                                <span>";
            // line 681
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.delivery_duration"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                ";
            // line 687
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 687, $this->source); })()), "class", [], "any", false, false, true, 687), "delivery_duration", [], "any", false, false, true, 687), 687, $this->source), 'widget');
            echo "
                                                ";
            // line 688
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 688, $this->source); })()), "class", [], "any", false, false, true, 688), "delivery_duration", [], "any", false, false, true, 688), 688, $this->source), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                    ";
            // line 692
            if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 692, $this->source); })()), "option_product_delivery_fee", [], "any", false, false, true, 692)) {
                // line 693
                echo "                                        <div class=\"row\">
                                            <div class=\"col-3\">
                                                <div class=\"d-inline-block\">
                                                    <span>";
                // line 696
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.delivery_fee"), "html", null, true);
                echo "</span>
                                                </div>
                                            </div>
                                            <div class=\"col mb-2\">
                                                <div>
                                                    ";
                // line 701
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 701, $this->source); })()), "class", [], "any", false, false, true, 701), "delivery_fee", [], "any", false, false, true, 701), 701, $this->source), 'widget');
                echo "
                                                    ";
                // line 702
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 702, $this->source); })()), "class", [], "any", false, false, true, 702), "delivery_fee", [], "any", false, false, true, 702), 702, $this->source), 'errors');
                echo "
                                                </div>
                                            </div>
                                        </div>
                                    ";
            }
            // line 707
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 707, $this->source); })()), "option_product_tax_rule", [], "any", false, false, true, 707)) {
                // line 708
                echo "                                        <div class=\"row\">
                                            <div class=\"col-3\">
                                                <div class=\"d-inline-block\">
                                                    <span>";
                // line 711
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.tax_rate"), "html", null, true);
                echo "</span>
                                                </div>
                                            </div>
                                            <div class=\"col mb-2\">
                                                <div>
                                                    ";
                // line 716
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 716, $this->source); })()), "class", [], "any", false, false, true, 716), "tax_rate", [], "any", false, false, true, 716), 716, $this->source), 'widget');
                echo "
                                                    ";
                // line 717
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 717, $this->source); })()), "class", [], "any", false, false, true, 717), "tax_rate", [], "any", false, false, true, 717), 717, $this->source), 'errors');
                echo "
                                                </div>
                                            </div>
                                        </div>
                                    ";
            }
            // line 722
            echo "                                ";
        }
        // line 723
        echo "                                ";
        // line 724
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 724, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 724), "eccube_form_options", [], "any", false, false, true, 724), "auto_render", [], "any", false, false, true, 724); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 725
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 725), "eccube_form_options", [], "any", false, false, true, 725), "form_theme", [], "any", false, false, true, 725)) {
                // line 726
                echo "                                        ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 726), "eccube_form_options", [], "any", false, false, true, 726), "form_theme", [], "any", false, false, true, 726)], true);
                // line 727
                echo "                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 727, $this->source), 'row');
                echo "
                                    ";
            } else {
                // line 729
                echo "                                        <div class=\"row\">
                                            <div class=\"col-3\">
                                                <span>";
                // line 731
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 731), "label", [], "any", false, false, true, 731), 731, $this->source)), "html", null, true);
                echo "</span>
                                            </div>
                                            <div class=\"col mb-2\">
                                                <div>
                                                    ";
                // line 735
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 735, $this->source), 'widget');
                echo "
                                                    ";
                // line 736
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 736, $this->source), 'errors');
                echo "
                                                </div>
                                            </div>
                                        </div>
                                    ";
            }
            // line 741
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 742
        echo "
                                ";
        // line 743
        if (((isset($context["has_class"]) || array_key_exists("has_class", $context) ? $context["has_class"] : (function () { throw new RuntimeError('Variable "has_class" does not exist.', 743, $this->source); })()) == false)) {
            // line 744
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 744, $this->source); })()), "class", [], "any", false, false, true, 744), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 744), "eccube_form_options", [], "any", false, false, true, 744), "auto_render", [], "any", false, false, true, 744); }));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 745
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 745), "eccube_form_options", [], "any", false, false, true, 745), "form_theme", [], "any", false, false, true, 745)) {
                    // line 746
                    echo "                                            ";
                    $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 746), "eccube_form_options", [], "any", false, false, true, 746), "form_theme", [], "any", false, false, true, 746)], true);
                    // line 747
                    echo "                                            ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 747, $this->source), 'row');
                    echo "
                                        ";
                } else {
                    // line 749
                    echo "                                            <div class=\"row\">
                                                <div class=\"col-3\">
                                                    <span>";
                    // line 751
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 751), "label", [], "any", false, false, true, 751), 751, $this->source)), "html", null, true);
                    echo "</span>
                                                </div>
                                                <div class=\"col mb-2\">
                                                    <div>
                                                        ";
                    // line 755
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 755, $this->source), 'widget');
                    echo "
                                                        ";
                    // line 756
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 756, $this->source), 'errors');
                    echo "
                                                    </div>
                                                </div>
                                            </div>
                                        ";
                }
                // line 761
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 762
            echo "                                ";
        }
        // line 763
        echo "
                            </div>
                        </div>
                    </div>
";
        // line 866
        echo "                </div>
            </div>
            <div class=\"c-contentsArea__secondaryCol\">
                <div class=\"c-secondaryCol\">
                    ";
        // line 870
        if ( !(null === (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 870, $this->source); })()))) {
            // line 871
            echo "                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"collapse show ec-cardCollapse\" id=\"preview\">
                                <div class=\"card-body\">
                                    <div class=\"d-block text-center\">
                                        <a class=\"btn w-100 btn-ec-regular\"
                                           target=\"_blank\"
                                           href=\"";
            // line 877
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 877, $this->source); })())]), "html", null, true);
            echo "\"
                                           title=\"";
            // line 878
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.preview"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.preview"), "html", null, true);
            echo "</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 884
        echo "                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\">
                                        <span class=\"card-title\">";
        // line 889
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category__product_card_title"), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-end\">
                                    <a data-bs-toggle=\"collapse\" href=\"#category\" aria-expanded=\"false\"
                                       aria-controls=\"category\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"category\">
                            <div class=\"card-body\">
                                <div class=\"mb-3\">
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            <div class=\"input-group\">
                                                <div class=\"input-group-text\">
                                                    <span id=\"basic-addon1\">
                                                            <i class=\"fa fa-search\"></i>
                                                    </span>
                                                </div>
                                                <input id=\"search-category\" class=\"form-control\" type=\"search\"
                                                       placeholder=\"";
        // line 912
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.search_category"), "html", null, true);
        echo "\"
                                                       aria-label=\"Search\">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                ";
        // line 931
        echo "
                                <div class=\"c-directoryTree--register rounded border mb-3 p-3\">
                                    ";
        // line 933
        $macros["renderMacro"] = $this;
        // line 934
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["TopCategories"]) || array_key_exists("TopCategories", $context) ? $context["TopCategories"] : (function () { throw new RuntimeError('Variable "TopCategories" does not exist.', 934, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["TopCategory"]) {
            // line 935
            echo "                                        <ul class=\"list-unstyled\">
                                            ";
            // line 936
            echo twig_call_macro($macros["renderMacro"], "macro_tree", [(isset($context["ChoicedCategoryIds"]) || array_key_exists("ChoicedCategoryIds", $context) ? $context["ChoicedCategoryIds"] : (function () { throw new RuntimeError('Variable "ChoicedCategoryIds" does not exist.', 936, $this->source); })()), $context["TopCategory"], twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 936, $this->source); })()), "Category", [], "any", false, false, true, 936)], 936, $context, $this->getSourceContext());
            echo "
                                        </ul>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['TopCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 939
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 939, $this->source); })()), "Category", [], "any", false, false, true, 939), 939, $this->source), 'errors');
        echo "
                                </div>
                                <div class=\"d-block text-center\">
                                    <a class=\"btn w-100 btn-ec-regular\"
                                       data-action=\"confirm\"
                                       href=\"";
        // line 944
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_category");
        echo "\"
                                       title=\"";
        // line 945
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category_management")]), "html", null, true);
        // line 946
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.move_to_category"), "html", null, true);
        echo "</a>
                                </div>
                            </div>
                        </div>
                    </div>
";
        // line 953
        echo "                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\">
                                        <span class=\"card-title\">
                                            ";
        // line 959
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.tag__product_card_title"), "html", null, true);
        echo "
                                        </span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-end\">
                                    <a data-bs-toggle=\"collapse\" href=\"#tag\" aria-expanded=\"false\" aria-controls=\"tag\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class=\"collapse show ec-cardCollapse\" id=\"tag\">
                            <div class=\"card-body\">
                                ";
        // line 973
        if ((twig_length_filter($this->env, (isset($context["Tags"]) || array_key_exists("Tags", $context) ? $context["Tags"] : (function () { throw new RuntimeError('Variable "Tags" does not exist.', 973, $this->source); })())) > 0)) {
            // line 974
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Tags"]) || array_key_exists("Tags", $context) ? $context["Tags"] : (function () { throw new RuntimeError('Variable "Tags" does not exist.', 974, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["Tag"]) {
                // line 975
                echo "                                        <div class=\"d-inline-block mb-2 me-2\">
                                            <button class=\"btn btn-outline-primary\" type=\"button\">";
                // line 976
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Tag"], "name", [], "any", false, false, true, 976), 976, $this->source), "html", null, true);
                echo "</button>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 979
            echo "                                ";
        }
        // line 980
        echo "
                                <div class=\"d-block mb-3\" data-bs-toggle=\"collapse\" href=\"#allTags\" role=\"button\"
                                     aria-expanded=\"false\" aria-controls=\"allTags\">
                                    <a>
                                        <i class=\"fa fa-plus-square-o fw-bold me-1\"></i>
                                        <span class=\"fw-bold\">";
        // line 985
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.save_tag"), "html", null, true);
        echo "</span>
                                    </a>
                                </div>
                                <div class=\"collapse p-3 bg-ec-lightGray mb-3 ec-collapse\" id=\"allTags\">
                                    <div class=\"d-none\">
                                        ";
        // line 990
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 990, $this->source); })()), "Tag", [], "any", false, false, true, 990), 990, $this->source), 'widget');
        echo "
                                    </div>
                                    ";
        // line 992
        if ((twig_length_filter($this->env, (isset($context["TagsList"]) || array_key_exists("TagsList", $context) ? $context["TagsList"] : (function () { throw new RuntimeError('Variable "TagsList" does not exist.', 992, $this->source); })())) > 0)) {
            // line 993
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["TagsList"]) || array_key_exists("TagsList", $context) ? $context["TagsList"] : (function () { throw new RuntimeError('Variable "TagsList" does not exist.', 993, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["Tag"]) {
                // line 994
                echo "                                            <div class=\"d-inline-block mb-2 me-2\">
                                                <button class=\"btn btn-outline-secondary\" type=\"button\"
                                                        data-tag-id=\"";
                // line 996
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Tag"], "id", [], "any", false, false, true, 996), 996, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Tag"], "name", [], "any", false, false, true, 996), 996, $this->source), "html", null, true);
                echo "</button>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 999
            echo "                                    ";
        }
        // line 1000
        echo "
                                    <div class=\"d-block mb-3\" data-bs-toggle=\"collapse\" href=\"#allTags\" role=\"button\"
                                         aria-expanded=\"false\" aria-controls=\"allTags\"></div>
                                </div>

                                <div class=\"d-block text-center\">
                                    <a href=\"";
        // line 1006
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_tag");
        echo "\"
                                       class=\"btn w-100 btn-ec-regular\"
                                       data-action=\"confirm\"
                                       title=\"";
        // line 1009
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.tag_management")]), "html", null, true);
        // line 1010
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.move_to_tag"), "html", null, true);
        echo "</a>
                                </div>
                            </div>
                        </div>
                    </div>
";
        // line 1016
        echo "#}
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <span class=\"card-title\">";
        // line 1021
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.create_date__card_title"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col-4 text-end\">
                                    <a data-bs-toggle=\"collapse\" href=\"#update\" aria-expanded=\"false\"
                                       aria-controls=\"update\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"update\">
                            <div class=\"card-body\">
                                <div class=\"row mb-2\">
                                    <div class=\"col\">
                                        <i class=\"fa fa-flag me-1\"></i>
                                        <span>";
        // line 1036
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create_date"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        <span>：";
        // line 1039
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 1039, $this->source); })()), "create_date", [], "any", false, false, true, 1039), 1039, $this->source)), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col\">
                                        <i class=\"fa fa-refresh me-1\"></i>
                                        <span>";
        // line 1045
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.update_date"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        <span>：";
        // line 1048
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 1048, $this->source); })()), "update_date", [], "any", false, false, true, 1048), 1048, $this->source)), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col\">
                                        <i class=\"fa fa-user me-1\"></i>
                                        <span>";
        // line 1054
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.last_updater"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        <span>：";
        // line 1057
        ((twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 1057, $this->source); })()), "Creator", [], "any", false, false, true, 1057)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 1057, $this->source); })()), "Creator", [], "any", false, false, true, 1057), "name", [], "any", false, false, true, 1057), "html", null, true))) : (print ("")));
        echo "</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                         title=\"";
        // line 1068
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.shop_memo"), "html", null, true);
        echo "\">
                                        <span class=\"card-title\">
                                            ";
        // line 1070
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.shop_memo"), "html", null, true);
        echo "
                                            <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </span>
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
        // line 1085
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1085, $this->source); })()), "note", [], "any", false, false, true, 1085), 1085, $this->source), 'widget', ["attr" => ["rows" => "8"]]);
        echo "
                                ";
        // line 1086
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1086, $this->source); })()), "note", [], "any", false, false, true, 1086), 1086, $this->source), 'errors');
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
                            <a class=\"c-baseLink\" href=\"";
        // line 1098
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_page", ["page_no" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, true, 1098), "get", ["eccube.admin.product.search.page_no"], "method", true, true, true, 1098)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, true, 1098), "get", ["eccube.admin.product.search.page_no"], "method", false, false, true, 1098), 1098, $this->source), "1")) : ("1"))]), "html", null, true);
        echo "\"
                               data-action=\"confirm\" title=\"";
        // line 1099
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_list")]), "html", null, true);
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        // line 1100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_list"), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                ";
        // line 1107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1107, $this->source); })()), "Status", [], "any", false, false, true, 1107), 1107, $this->source), 'widget');
        echo "
                                ";
        // line 1108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1108, $this->source); })()), "Status", [], "any", false, false, true, 1108), 1108, $this->source), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 1111
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

    // line 919
    public function macro_tree($__ChoicedIds__ = null, $__Category__ = null, $__form__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "ChoicedIds" => $__ChoicedIds__,
            "Category" => $__Category__,
            "form" => $__form__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tree"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tree"));

            // line 920
            echo "                                    ";
            $macros["selfMacro"] = $this;
            // line 921
            echo "                                    <li class=\"c-directoryTree--registerItem category-li\">
                                        <input type=\"checkbox\" id=\"admin_product_category_";
            // line 922
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 922, $this->source); })()), "id", [], "any", false, false, true, 922), 922, $this->source), "html", null, true);
            echo "\" name=\"admin_product[Category][]\" value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 922, $this->source); })()), "id", [], "any", false, false, true, 922), 922, $this->source), "html", null, true);
            echo "\" ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 922, $this->source); })()), "id", [], "any", false, false, true, 922), (isset($context["ChoicedIds"]) || array_key_exists("ChoicedIds", $context) ? $context["ChoicedIds"] : (function () { throw new RuntimeError('Variable "ChoicedIds" does not exist.', 922, $this->source); })()))) {
                echo "checked";
            }
            echo ">
                                        <label for=\"admin_product_category_";
            // line 923
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 923, $this->source); })()), "id", [], "any", false, false, true, 923), 923, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 923, $this->source); })()), "name", [], "any", false, false, true, 923), 923, $this->source), "html", null, true);
            echo "</label>
                                        <ul class=\"list-unstyled\">
                                            ";
            // line 925
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 925, $this->source); })()), "children", [], "any", false, false, true, 925));
            foreach ($context['_seq'] as $context["child"] => $context["ChildCategory"]) {
                // line 926
                echo "                                                ";
                echo twig_call_macro($macros["selfMacro"], "macro_tree", [(isset($context["ChoicedIds"]) || array_key_exists("ChoicedIds", $context) ? $context["ChoicedIds"] : (function () { throw new RuntimeError('Variable "ChoicedIds" does not exist.', 926, $this->source); })()), $context["ChildCategory"], (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 926, $this->source); })())], 926, $context, $this->getSourceContext());
                echo "
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['child'], $context['ChildCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 928
            echo "                                        </ul>
                                    </li>
                                ";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@admin/Product/product.twig";
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
        return array (  1915 => 928,  1906 => 926,  1902 => 925,  1895 => 923,  1885 => 922,  1882 => 921,  1879 => 920,  1858 => 919,  1839 => 1111,  1833 => 1108,  1829 => 1107,  1819 => 1100,  1815 => 1099,  1811 => 1098,  1796 => 1086,  1792 => 1085,  1774 => 1070,  1769 => 1068,  1755 => 1057,  1749 => 1054,  1740 => 1048,  1734 => 1045,  1725 => 1039,  1719 => 1036,  1701 => 1021,  1694 => 1016,  1685 => 1010,  1683 => 1009,  1677 => 1006,  1669 => 1000,  1666 => 999,  1655 => 996,  1651 => 994,  1646 => 993,  1644 => 992,  1639 => 990,  1631 => 985,  1624 => 980,  1621 => 979,  1612 => 976,  1609 => 975,  1604 => 974,  1602 => 973,  1585 => 959,  1577 => 953,  1568 => 946,  1566 => 945,  1562 => 944,  1553 => 939,  1544 => 936,  1541 => 935,  1536 => 934,  1534 => 933,  1530 => 931,  1520 => 912,  1494 => 889,  1487 => 884,  1476 => 878,  1472 => 877,  1464 => 871,  1462 => 870,  1456 => 866,  1450 => 763,  1447 => 762,  1441 => 761,  1433 => 756,  1429 => 755,  1422 => 751,  1418 => 749,  1412 => 747,  1409 => 746,  1406 => 745,  1401 => 744,  1399 => 743,  1396 => 742,  1390 => 741,  1382 => 736,  1378 => 735,  1371 => 731,  1367 => 729,  1361 => 727,  1358 => 726,  1355 => 725,  1350 => 724,  1348 => 723,  1345 => 722,  1337 => 717,  1333 => 716,  1325 => 711,  1320 => 708,  1317 => 707,  1309 => 702,  1305 => 701,  1297 => 696,  1292 => 693,  1290 => 692,  1283 => 688,  1279 => 687,  1270 => 681,  1266 => 680,  1256 => 673,  1252 => 672,  1243 => 666,  1239 => 665,  1229 => 658,  1225 => 657,  1216 => 651,  1212 => 650,  1207 => 647,  1205 => 646,  1198 => 642,  1194 => 641,  1185 => 635,  1181 => 634,  1176 => 631,  1168 => 626,  1164 => 625,  1155 => 619,  1151 => 618,  1146 => 615,  1144 => 614,  1135 => 608,  1131 => 607,  1122 => 601,  1118 => 600,  1112 => 596,  1105 => 592,  1101 => 591,  1093 => 586,  1087 => 583,  1083 => 582,  1079 => 580,  1077 => 579,  1060 => 564,  1053 => 560,  1049 => 559,  1040 => 552,  1038 => 551,  1031 => 547,  1027 => 546,  1018 => 539,  1016 => 538,  1009 => 534,  1005 => 533,  996 => 526,  994 => 525,  987 => 521,  983 => 520,  974 => 513,  972 => 512,  964 => 507,  959 => 506,  957 => 505,  955 => 504,  953 => 503,  951 => 502,  949 => 501,  947 => 500,  945 => 499,  943 => 498,  941 => 497,  939 => 496,  937 => 495,  933 => 493,  929 => 492,  920 => 486,  915 => 484,  910 => 481,  907 => 480,  900 => 476,  896 => 475,  887 => 468,  885 => 467,  877 => 462,  873 => 461,  864 => 455,  859 => 453,  854 => 450,  852 => 449,  843 => 443,  836 => 439,  832 => 438,  823 => 432,  818 => 430,  814 => 429,  810 => 427,  803 => 423,  799 => 422,  790 => 415,  788 => 414,  781 => 410,  777 => 409,  768 => 402,  766 => 401,  759 => 397,  755 => 396,  746 => 389,  744 => 388,  737 => 384,  733 => 383,  724 => 376,  722 => 375,  715 => 371,  711 => 370,  702 => 363,  700 => 362,  693 => 358,  689 => 357,  680 => 350,  678 => 349,  674 => 347,  670 => 335,  666 => 334,  658 => 329,  654 => 328,  645 => 322,  641 => 321,  633 => 316,  628 => 314,  622 => 310,  615 => 306,  611 => 305,  602 => 298,  600 => 297,  597 => 296,  590 => 292,  582 => 287,  578 => 286,  574 => 284,  572 => 283,  555 => 269,  542 => 259,  538 => 258,  528 => 251,  522 => 248,  509 => 238,  500 => 231,  490 => 230,  431 => 179,  422 => 176,  419 => 175,  414 => 174,  404 => 170,  400 => 169,  397 => 168,  392 => 167,  374 => 163,  370 => 162,  367 => 161,  350 => 160,  346 => 159,  328 => 144,  303 => 122,  287 => 109,  282 => 106,  270 => 100,  267 => 99,  263 => 98,  260 => 97,  248 => 91,  245 => 90,  241 => 89,  232 => 85,  208 => 64,  199 => 58,  189 => 51,  184 => 48,  178 => 46,  176 => 45,  170 => 41,  163 => 37,  158 => 35,  153 => 33,  148 => 31,  143 => 29,  138 => 28,  136 => 27,  128 => 21,  118 => 20,  99 => 16,  80 => 15,  69 => 11,  67 => 18,  65 => 13,  40 => 11,);
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

{% set menus = ['product', 'product_edit'] %}

{% block title %}{{ 'admin.product.product_registration'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.product.product_management'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block javascript %}
    <script>
        \$(document).on('drop dragover', function(e) {
            e.preventDefault();
        });

        \$(function() {
            {% if has_class == false %}
            if (\$(\"#{{ form.class.stock_unlimited.vars.id }}\").prop(\"checked\")) {
                \$(\"#{{ form.class.stock.vars.id }}\").attr(\"disabled\", \"disabled\").val('');
            } else {
                \$(\"#{{ form.class.stock.vars.id }}\").removeAttr(\"disabled\");
            }
            \$(\"#{{ form.class.stock_unlimited.vars.id }}\").on(\"click change\", function() {
                if (\$(this).prop(\"checked\")) {
                    \$(\"#{{ form.class.stock.vars.id }}\").attr(\"disabled\", \"disabled\").val('');
                } else {
                    \$(\"#{{ form.class.stock.vars.id }}\").removeAttr(\"disabled\");
                }
            });
            {% endif %}

            // ファイルアップロード
            // see https://pqina.nl/filepond/
            var inputFileElement = document.querySelector('input[type=file]');
            {% if eccube_config.locale == 'ja' or eccube_config.locale == 'en' %}
            FilePond.setOptions(FilePondLocale_{{ eccube_config.locale }});
            {% endif %}
            FilePond.setOptions({
                server: {
                    process: {
                        url: '{{ path('admin_product_image_process') }}',
                        headers: {
                            'ECCUBE-CSRF-TOKEN': \$('meta[name=\"eccube-csrf-token\"]').attr('content'),
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    },
                    load: {
                        url: '{{ path('admin_product_image_load') }}?source=',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    },
                    revert: {
                        url: '{{ path('admin_product_image_revert') }}',
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
                maxFiles: 10,
                allowBrowse: true,
                allowDrop: true,
                allowReorder: true,
                labelIdle: '<i class=\"fa fa-cloud-upload fa-3x text-ec-lightGray mx-3 align-middle\" aria-hidden=\"true\" style=\"font-size: 40px\"></i>{{ 'admin.common.drag_and_drop_image_description'|trans }}<span class=\"filepond--label-action\">{{ 'admin.common.file_select'|trans }}</span>',
                styleItemPanelAspectRatio: 0.5625,
                // 保存されている画像のロード
                files: [
                    {% for image in form.images %}
                    {
                        source: '{{ image.vars.value }}',
                        options: {
                            type: 'local'
                        }
                    },
                    {% endfor %}
                    // 追加してすぐの画像のロード. バリデーションエラーの場合など.
                    {% for add_image in form.add_images %}
                    {
                        source: '{{ add_image.vars.value }}',
                        options: {
                            type: 'local'
                        }
                    },
                    {% endfor %}
                ]
            });
            // 画像が追加されたら add_images にファイル名を追加する
            var proto_add = '{{ form_widget(form.add_images.vars.prototype) }}';
            pond.on('processfile', function(error, file) {
                if (error) {
                    console.log(error);
                } else {
                    \$('#upload-zone').append(
                        \$(proto_add.replace(/__name__/g, file.id))
                            .val(file.serverId)
                            .addClass('add_images')
                    );
                }
            });
            // 画像が削除されたら delete_images にファイル名を追加する
            var proto_del = '{{ form_widget(form.delete_images.vars.prototype) }}';
            pond.on('removefile', function(error, file) {
                if (error) {
                    console.log(error);
                } else {
                    // file.serverId にはアップロードしたファイル名が格納される.
                    if (file.serverId) {
                        \$('#upload-zone').append(
                            \$(proto_del.replace(/__name__/g, file.id))
                                .val(file.serverId)
                                .addClass('del_images')
                        );
                    }
                    // 追加してすぐ削除した画像があれば削除する
                    \$('#upload-zone').find('#admin_product_add_images_' + file.id).remove(); // 追加してすぐ削除した画像
                    \$('#upload-zone').find('.add_images[value=\"' + file.filename + '\"]').remove(); // 追加後, バリデーションエラーが発生した後に削除した画像
                }
            });
            pond.on('initfile', function() {
                \$('#product_image_error').hide();
            });
            pond.on('error', function(error, file) {
                var message = '{{ 'admin.common.upload_error'|trans }}';
                if (error.main !== undefined) {
                    message = `\${error.main}: \${error.sub}`;
                }
                \$('#product_image_error')
                    .show()
                    .find('.form-error-message').text(message);

                // エラーメッセージが表示されてからプレビューエリアのエラーメッセージを非表示にする
                setTimeout(function() {
                    \$('.filepond--file-status').hide();
                }, 300);
            });

            // バリデーションエラーが出た場合に画像を保持するための hidden を追加しておく
            var proto_image = '{{ form_widget(form.images.vars.prototype) }}';
            {% for image in form.images %}
                \$('#upload-zone').append(
                    \$(proto_image.replace(/__name__/g, '{{ loop.index0 }}'))
                        .val('{{ image.vars.value }}')
                        .addClass('images')
                );
            {% endfor %}
            {% for add_image in form.add_images %}
                \$('#upload-zone').append(
                    \$('{{ form_widget(add_image) }}')
                        .val('{{ add_image.vars.value }}')
                        .addClass('add_images')
                );
            {% endfor %}
            {% for delete_image in form.delete_images %}
                \$('#upload-zone').append(
                    \$('{{ form_widget(delete_image) }}').addClass('del_images')
                );
            {% endfor %}

            // タグ管理
            var mainTags = \$('#allTags');
            var adminProductTag = \$('#admin_product_Tag');
            \$('input', adminProductTag).each(function() {
                if (\$(this).is(':checked')) {
                    \$('button[data-tag-id=\"' + \$(this).val() + '\"]').removeClass('btn-outline-secondary').addClass('btn-outline-primary');
                }
            });
            mainTags.on('click', 'button.btn', function() {
                var btnTag = \$(this);
                var tagId = btnTag.data('tag-id');
                if (btnTag.hasClass('btn-outline-primary')) {
                    btnTag.removeClass('btn-outline-primary').addClass('btn-outline-secondary');
                    \$('input[value=\"' + tagId + '\"]', mainTags).prop('checked', false);
                } else {
                    btnTag.removeClass('btn-outline-secondary').addClass('btn-outline-primary');
                    \$('input[value=\"' + tagId + '\"]', mainTags).prop('checked', true);
                }
            });

            var confirmFormChange = function(form, target, modal) {
                var returnLink = form.find('input[type=\"hidden\"][name*=\"return_link\"]'),
                    saveBtn = modal.find('a[data-action=\"save\"]'),
                    cancelBtn = modal.find('a[data-action=\"cancel\"]');
                modal.on('hidden.bs.modal', function() {
                    returnLink.val('');
                });
                saveBtn.on('click', function() {
                    returnLink.val(\$(this).data('return-link'));
                    \$(this).addClass('disabled');
                    form.submit();
                });
                target.on('click', function() {
                    modal.find('.modal-body .screen-name').text(\$(this).attr('title'));
                    modal.modal('show');
                    saveBtn.data('return-link', \$(this).attr('href'));
                    cancelBtn.attr('href', \$(this).attr('href'));
                    return false;
                });
            };
            confirmFormChange(\$('#form1'), \$('a[data-action=\"confirm\"]'), \$('#confirmFormChangeModal'))
        });

        // searchWordの実行
        \$('#search-category').on('input', function () {
            searchWord(\$(this).val(), \$('.category-li'));
        });
    </script>
{% endblock javascript %}

{% block main %}

    <!-- 移動確認モーダル-->
    <div class=\"modal fade\" id=\"confirmFormChangeModal\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"confirmFormChangeModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">{{ 'admin.common.move_to_confirm_title'|trans }}</h5>
                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                    </button>
                </div>
                <div class=\"modal-body\">
                    <p class=\"screen-name\"></p>
                </div>
                <div class=\"modal-footer\">
                    <a class=\"btn btn-ec-conversion\" data-action=\"save\" href=\"javascript:void(0)\">
                        {{ 'admin.common.move_to_confirm_save_and_move'|trans }}
                    </a>
                    <a class=\"btn btn-ec-sub\" data-action=\"cancel\" href=\"javascript:void(0)\">
                        {{ 'admin.common.move_to_confirm_move_only'|trans }}
                    </a>
                </div>
            </div>
        </div>
    </div>
    <form role=\"form\" name=\"form1\" id=\"form1\" method=\"post\" action=\"\" novalidate enctype=\"multipart/form-data\">
        {{ form_widget(form._token) }}
        {{ form_widget(form.return_link) }}
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\">
                                    <span class=\"card-title\">
                                        {{ 'admin.product.product__card_title'|trans }}
                                    </span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-end\">
                                    <a data-bs-toggle=\"collapse\" href=\"#basicConfig\" aria-expanded=\"false\"
                                       aria-controls=\"basicConfig\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"basicConfig\">
                            <div class=\"card-body\">
                                {% if Product.id %}
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.product.product_id'|trans }}\">
                                                <span>{{ 'admin.product.product_id'|trans }}</span>
                                                <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col\">
                                            <p>{{ Product.id }}</p>
                                        </div>
                                    </div>
                                {% endif %}

{% if form.product_class_ext is defined %}
    <div class=\"row mt-2\">
        <div class=\"col-3\">
            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"品番\">
                <span>品番</span>
            </div>
        </div>
        <div class=\"col mb-2\">
            {{ form_widget(form.product_class_ext.item_code) }}
            {{ form_errors(form.product_class_ext.item_code) }}
        </div>
    </div>
{% endif %}

                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\">
                                            <span>{{ 'admin.product.name'|trans }}</span>
                                            <span class=\"badge bg-primary ms-1\">
                                                {{ 'admin.common.required'|trans }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        {{ form_widget(form.name) }}
                                        {{ form_errors(form.name) }}
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                             title=\"{{ 'tooltip.product.description_detail'|trans }}\">
                                            <span>{{ 'admin.product.description_detail'|trans }}</span>
                                            <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col\">
                                        {{ form_widget(form.description_detail, { attr : { rows : \"8\"} }) }}
                                        {{ form_errors(form.description_detail) }}
{#
                                        <div class=\"d-inline-block mb-2\" data-bs-toggle=\"collapse\" href=\"#addComment\"
                                             role=\"button\" aria-expanded=\"false\" aria-controls=\"addComment\">
                                            <a>
                                                <i class=\"fa fa-plus-square-o fw-bold me-1\"></i>
                                                <span class=\"fw-bold text-ec-black\">
                                                    {{ 'admin.product.description_list__add'|trans }}
                                                </span>
                                            </a>
                                        </div>
#}
                                    </div>
                                </div>
{% if form.product_ext is defined %}
    <div class=\"row mt-2\">
        <div class=\"col-3\">
            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"品番\">
                <span>生産地</span>
            </div>
        </div>
        <div class=\"col mb-2\">
            {{ form_widget(form.product_ext.made_in) }}
            {{ form_errors(form.product_ext.made_in) }}
        </div>
    </div>
{% endif %}
{% if form.product_ext is defined %}
    <div class=\"row mt-2\">
        <div class=\"col-3\">
            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"品番\">
                <span>サイズ</span>
            </div>
        </div>
        <div class=\"col mb-2\">
            {{ form_widget(form.product_ext.size) }}
            {{ form_errors(form.product_ext.size) }}
        </div>
    </div>
{% endif %}
{% if form.product_ext is defined %}
    <div class=\"row mt-2\">
        <div class=\"col-3\">
            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"品番\">
                <span>素材</span>
            </div>
        </div>
        <div class=\"col mb-2\">
            {{ form_widget(form.product_ext.material) }}
            {{ form_errors(form.product_ext.material) }}
        </div>
    </div>
{% endif %}
{% if form.product_ext is defined %}
    <div class=\"row mt-2\">
        <div class=\"col-3\">
            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"品番\">
                <span>重量</span>
            </div>
        </div>
        <div class=\"col mb-2\">
            {{ form_widget(form.product_ext.weight) }}
            {{ form_errors(form.product_ext.weight) }}
        </div>
    </div>
{% endif %}
{% if form.product_ext is defined %}
    <div class=\"row mt-2\">
        <div class=\"col-3\">
            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"品番\">
                <span>色柄</span>
            </div>
        </div>
        <div class=\"col mb-2\">
            {{ form_widget(form.product_ext.color_pattern) }}
            {{ form_errors(form.product_ext.color_pattern) }}
        </div>
    </div>
{% endif %}
{% if form.product_ext is defined %}
    <div class=\"row mt-2\">
        <div class=\"col-3\">
            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"品番\">
                <span>荷姿</span>
            </div>
        </div>
        <div class=\"col mb-2\">
            {{ form_widget(form.product_ext.package_form) }}
            {{ form_errors(form.product_ext.package_form) }}
        </div>
    </div>
{% endif %}
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.product.image'|trans }}\">
                                            <span>{{ 'admin.product.image'|trans }}</span>
                                            <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            <br>{{ 'admin.product.image_size'|trans }}
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        <p id=\"message\"></p>
                                        <div id=\"upload-zone\" class=\"rounded\">
                                            {{ form_widget(form.product_image, { attr : { style : 'display:none;' } }) }}
                                            {{ form_errors(form.product_image) }}
                                        </div><!-- /#upload-zone -->
                                        <span class=\"invalid-feedback\" id=\"product_image_error\" style=\"display: none\">
                                            <span class=\"d-block\">
                                                <span class=\"form-error-icon badge bg-danger text-uppercase\">{{ 'Error'|trans({}, 'validators') }}</span>
                                                <span class=\"form-error-message\"></span>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                {% if has_class == false %}
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\">
                                                <span>{{ 'admin.product.sale_price'|trans }}</span>
                                                <span class=\"badge bg-primary ms-1\">
                                                    {{ 'admin.common.required'|trans }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                {{ form_widget(form.class.price02) }}
                                                {{ form_errors(form.class.price02) }}
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}
{% if form.product_class_ext is defined %}
    <div class=\"row mt-2\">
        <div class=\"col-3\">
            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"品番\">
                <span>税区分</span>
            </div>
        </div>
        <div class=\"col mb-2\">
            {{ form_widget(form.product_class_ext.tax_category) }}
            {{ form_errors(form.product_class_ext.tax_category) }}
        </div>
    </div>
{% endif %}
                                {% if has_class == false %}
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\">
                                                <span>{{ 'admin.product.stock'|trans }}</span>
                                                <span class=\"badge bg-primary ms-1\">
                                                    {{ 'admin.common.required'|trans }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"col\">
                                            <div>
                                                {{ form_widget(form.class.stock) }}
                                                {{ form_errors(form.class.stock) }}
                                                {# TODO: form_layoutの調整 #}
                                                {#<div class=\"form-check mb-2\">#}
                                                {#<input class=\"form-check-input\"#}
                                                {#id=\"{{ form.class.stock_unlimited.vars.id }}\"#}
                                                {#name=\"{{ form.class.stock_unlimited.vars.full_name }}\"#}
                                                {#type=\"checkbox\"#}
                                                {#value=\"{{ form.class.stock_unlimited.vars.value }}\">#}
                                                {#<label class=\"form-check-label\"#}
                                                {#for=\"{{ form.class.stock_unlimited.vars.id }}\">#}
                                                {#{{ 'admin.product.product.stock_unlimited'|trans }}#}
                                                {#</label>#}
                                                {#</div>#}
                                                {{ form_widget(form.class.stock_unlimited) }}
                                                {{ form_errors(form.class.stock_unlimited) }}
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}
{% if form.product_class_ext is defined %}
    <div class=\"row mt-2\">
        <div class=\"col-3\">
            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"品番\">
                <span>JANコード</span>
            </div>
        </div>
        <div class=\"col mb-2\">
            {{ form_widget(form.product_class_ext.jan_code) }}
            {{ form_errors(form.product_class_ext.jan_code) }}
        </div>
    </div>
{% endif %}
{% if form.product_class_ext is defined %}
    <div class=\"row mt-2\">
        <div class=\"col-3\">
            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"品番\">
                <span>表示順</span>
            </div>
        </div>
        <div class=\"col mb-2\">
            {{ form_widget(form.product_class_ext.display_order) }}
            {{ form_errors(form.product_class_ext.display_order) }}
        </div>
    </div>
{% endif %}
{% if form.product_class_ext is defined %}
    <div class=\"row mt-2\">
        <div class=\"col-3\">
            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"品番\">
                <span>表示状態</span>
            </div>
        </div>
        <div class=\"col mb-2\">
            {{ form_widget(form.product_class_ext.is_visible) }}
            {{ form_errors(form.product_class_ext.is_visible) }}
        </div>
    </div>
{% endif %}
{% if form.product_ext is defined %}
    <div class=\"row mt-2\">
        <div class=\"col-3\">
            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"品番\">
                <span>掛け率</span>
            </div>
        </div>
        <div class=\"col mb-2\">
            {{ form_widget(form.product_ext.trade_rate) }}
            {{ form_errors(form.product_ext.trade_rate) }}
        </div>
    </div>
{% endif %}















                                {% if has_class == false %}
                                    <div class=\"row d-none\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.product.sale_type'|trans }}\">
                                                <span>{{ 'admin.product.sale_type'|trans }}</span>
                                                <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                                <span class=\"badge bg-primary ms-1\">
                                                    {{ 'admin.common.required'|trans }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            {{ form_widget(form.class.sale_type) }}
                                            {{ form_errors(form.class.sale_type) }}
                                        </div>
                                    </div>
                                {% endif %}
                                <div class=\"collapse ec-collapse\" id=\"addComment\">
                                    <div class=\"row bg-ec-formGray pt-3 mb-2\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                 title=\"{{ 'tooltip.product.description_list'|trans }}\">
                                                <span>{{ 'admin.product.description_list'|trans }}</span>
                                                <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-4\">
                                            <div>
                                                {{ form_widget(form.description_list, { attr : { rows : \"4\"} }) }}
                                                {{ form_errors(form.description_list) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {% if has_class == false %}
                                    <div class=\"row d-none\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                 title=\"{{ 'tooltip.product.normal_price'|trans }}\">
                                                <span>{{ 'admin.product.normal_price'|trans }}</span>
                                                <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                {{ form_widget(form.class.price01) }}
                                                {{ form_errors(form.class.price01) }}
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}
                                <div class=\"row d-none\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                             title=\"{{ 'tooltip.product.search_word'|trans }}\">
                                            <span>{{ 'admin.product.search_word'|trans }}</span>
                                            <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        <div>
                                            {{ form_widget(form.search_word) }}
                                            {{ form_errors(form.search_word) }}
                                        </div>
                                    </div>
                                </div>
                                {% if has_class == false %}
                                    <div class=\"row d-none\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                 title=\"{{ 'tooltip.product.product_code'|trans }}\">
                                                <span>{{ 'admin.product.product_code'|trans }}</span>
                                                <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                {{ form_widget(form.class.code) }}
                                                {{ form_errors(form.class.code) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row d-none\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                 title=\"{{ 'tooltip.product.sale_limit'|trans }}\">
                                                <span>{{ 'admin.product.sale_limit'|trans }}</span>
                                                <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                {{ form_widget(form.class.sale_limit) }}
                                                {{ form_errors(form.class.sale_limit) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row d-none\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                 title=\"{{ 'tooltip.product.delivery_duration'|trans }}\">
                                                <span>{{ 'admin.product.delivery_duration'|trans }}</span>
                                                <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                {{ form_widget(form.class.delivery_duration) }}
                                                {{ form_errors(form.class.delivery_duration) }}
                                            </div>
                                        </div>
                                    </div>
                                    {% if BaseInfo.option_product_delivery_fee %}
                                        <div class=\"row\">
                                            <div class=\"col-3\">
                                                <div class=\"d-inline-block\">
                                                    <span>{{ 'admin.product.delivery_fee'|trans }}</span>
                                                </div>
                                            </div>
                                            <div class=\"col mb-2\">
                                                <div>
                                                    {{ form_widget(form.class.delivery_fee) }}
                                                    {{ form_errors(form.class.delivery_fee) }}
                                                </div>
                                            </div>
                                        </div>
                                    {% endif %}
                                    {% if BaseInfo.option_product_tax_rule %}
                                        <div class=\"row\">
                                            <div class=\"col-3\">
                                                <div class=\"d-inline-block\">
                                                    <span>{{ 'admin.product.tax_rate'|trans }}</span>
                                                </div>
                                            </div>
                                            <div class=\"col mb-2\">
                                                <div>
                                                    {{ form_widget(form.class.tax_rate) }}
                                                    {{ form_errors(form.class.tax_rate) }}
                                                </div>
                                            </div>
                                        </div>
                                    {% endif %}
                                {% endif %}
                                {# エンティティ拡張の自動出力 #}
                                {% for f in form|filter(f => f.vars.eccube_form_options.auto_render) %}
                                    {% if f.vars.eccube_form_options.form_theme %}
                                        {% form_theme f f.vars.eccube_form_options.form_theme %}
                                        {{ form_row(f) }}
                                    {% else %}
                                        <div class=\"row\">
                                            <div class=\"col-3\">
                                                <span>{{ f.vars.label|trans }}</span>
                                            </div>
                                            <div class=\"col mb-2\">
                                                <div>
                                                    {{ form_widget(f) }}
                                                    {{ form_errors(f) }}
                                                </div>
                                            </div>
                                        </div>
                                    {% endif %}
                                {% endfor %}

                                {% if has_class == false %}
                                    {% for f in form.class|filter(f => f.vars.eccube_form_options.auto_render) %}
                                        {% if f.vars.eccube_form_options.form_theme %}
                                            {% form_theme f f.vars.eccube_form_options.form_theme %}
                                            {{ form_row(f) }}
                                        {% else %}
                                            <div class=\"row\">
                                                <div class=\"col-3\">
                                                    <span>{{ f.vars.label|trans }}</span>
                                                </div>
                                                <div class=\"col mb-2\">
                                                    <div>
                                                        {{ form_widget(f) }}
                                                        {{ form_errors(f) }}
                                                    </div>
                                                </div>
                                            </div>
                                        {% endif %}
                                    {% endfor %}
                                {% endif %}

                            </div>
                        </div>
                    </div>
{##↓規格##}
{#
                    {% if id is not null %}
                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                             title=\"{{ 'tooltip.product.product_class'|trans }}\">
                                        <span class=\"card-title\">
                                            {{ 'admin.product.product_class__card_title'|trans }}
                                            <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </span>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-end\">
                                        <a data-bs-toggle=\"collapse\" href=\"#standardConfig\" aria-expanded=\"false\"
                                           aria-controls=\"standardConfig\">
                                            <i class=\"fa fa-angle-up fa-lg\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"standardConfig\">
                                <div class=\"card-body\">
                                    {% if has_class == true %}
                                        <table class=\"table table-striped\">
                                            <thead class=\"table-active\">
                                            <th class=\"ps-3 pt-2 pb-2\">{{ 'admin.product.class_category1__short'|trans }}</th>
                                            <th class=\"pt-2 pb-2\">{{ 'admin.product.class_category2__short'|trans }}</th>
                                            <th class=\"pt-2 pb-2\">{{ 'admin.product.product_code__short'|trans }}</th>
                                            <th class=\"pt-2 pb-2\">{{ 'admin.product.stock'|trans }}</th>
                                            <th class=\"pe-3 pt-2 pb-2\">{{ 'admin.product.price'|trans }}</th>
                                            </thead>
                                            <tbody>
                                            {% for Class in Product.ProductClasses %}
                                                {% if Class.visible == 1 %}
                                                    <tr>
                                                        <td class=\"ps-3\">{% if Class.hasClassCategory1 %}{{ Class.ClassCategory1.name }}{% endif %}</td>
                                                        <td>{% if Class.hasClassCategory2 %}{{ Class.ClassCategory2.name }}{% endif %}</td>
                                                        <td>{{ Class.code }}</td>
                                                        <td>{% if Class.stock_unlimited %}{{ 'admin.product.stock_unlimited__short'|trans }}{% else %}{{ Class.stock }}{% endif %}</td>
                                                        <td class=\"pe-3\">{{ Class.price02|price }}</td>
                                                    </tr>
                                                {% endif %}
                                            {% endfor %}
                                            </tbody>
                                        </table>
                                    {% endif %}
                                    <div class=\"d-block text-center text-center\">
                                        <a href=\"{{ path('admin_product_product_class', { 'id' : id }) }}\" class=\"btn btn-ec-regular\" data-action=\"confirm\"
                                           title=\"{{ 'admin.common.move_to_confirm_message'|trans({
                                               '%name%' : 'admin.product.product_class_registration'|trans
                                           }) }}\">{{ 'admin.product.product_class__confirm_of_product'|trans }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endif %}
#}
{##↑規格##}
{##↓フリーエリア##}
{#
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                         title=\"{{ 'tooltip.product.free_area'|trans }}\">
                                        <span class=\"card-title\">{{ 'admin.product.free_area__card_title'|trans }}</span>
                                        <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col-4 text-end\">
                                    <a data-bs-toggle=\"collapse\" href=\"#freeArea\" aria-expanded=\"false\"
                                       aria-controls=\"freeArea\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"freeArea\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <span>{{ 'admin.product.free_area'|trans }}</span>
                                    </div>
                                    <div class=\"col-9\">
                                        <div>
                                            {{ form_widget(form.free_area, {id: 'wysiwyg-area', attr : { rows : \"8\"} }) }}
                                            {{ form_errors(form.free_area) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
#}
{##↑フリーエリア##}
                </div>
            </div>
            <div class=\"c-contentsArea__secondaryCol\">
                <div class=\"c-secondaryCol\">
                    {% if id is not null %}
                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"collapse show ec-cardCollapse\" id=\"preview\">
                                <div class=\"card-body\">
                                    <div class=\"d-block text-center\">
                                        <a class=\"btn w-100 btn-ec-regular\"
                                           target=\"_blank\"
                                           href=\"{{ url('product_detail', {id:id}) }}\"
                                           title=\"{{ 'admin.product.preview'|trans }}\">{{ 'admin.product.preview'|trans }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endif %}
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\">
                                        <span class=\"card-title\">{{ 'admin.product.category__product_card_title'|trans }}</span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-end\">
                                    <a data-bs-toggle=\"collapse\" href=\"#category\" aria-expanded=\"false\"
                                       aria-controls=\"category\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"category\">
                            <div class=\"card-body\">
                                <div class=\"mb-3\">
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            <div class=\"input-group\">
                                                <div class=\"input-group-text\">
                                                    <span id=\"basic-addon1\">
                                                            <i class=\"fa fa-search\"></i>
                                                    </span>
                                                </div>
                                                <input id=\"search-category\" class=\"form-control\" type=\"search\"
                                                       placeholder=\"{{ 'admin.product.search_category'|trans }}\"
                                                       aria-label=\"Search\">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {% macro tree(ChoicedIds, Category, form) %}
                                    {% import _self as selfMacro %}
                                    <li class=\"c-directoryTree--registerItem category-li\">
                                        <input type=\"checkbox\" id=\"admin_product_category_{{ Category.id }}\" name=\"admin_product[Category][]\" value=\"{{ Category.id }}\" {% if Category.id in ChoicedIds %}checked{% endif %}>
                                        <label for=\"admin_product_category_{{ Category.id }}\">{{ Category.name }}</label>
                                        <ul class=\"list-unstyled\">
                                            {% for child,ChildCategory in Category.children %}
                                                {{ selfMacro.tree(ChoicedIds, ChildCategory, form) }}
                                            {% endfor %}
                                        </ul>
                                    </li>
                                {% endmacro %}

                                <div class=\"c-directoryTree--register rounded border mb-3 p-3\">
                                    {% import _self as renderMacro %}
                                    {% for TopCategory in TopCategories %}
                                        <ul class=\"list-unstyled\">
                                            {{ renderMacro.tree(ChoicedCategoryIds, TopCategory, form.Category) }}
                                        </ul>
                                    {% endfor %}
                                    {{ form_errors(form.Category) }}
                                </div>
                                <div class=\"d-block text-center\">
                                    <a class=\"btn w-100 btn-ec-regular\"
                                       data-action=\"confirm\"
                                       href=\"{{ path('admin_product_category') }}\"
                                       title=\"{{ 'admin.common.move_to_confirm_message'|trans({
                                           '%name%' : 'admin.product.category_management'|trans}) }}\">{{ 'admin.product.move_to_category'|trans }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
{#
{##↓タグ登録削除##}
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\">
                                        <span class=\"card-title\">
                                            {{ 'admin.product.tag__product_card_title'|trans }}
                                        </span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-end\">
                                    <a data-bs-toggle=\"collapse\" href=\"#tag\" aria-expanded=\"false\" aria-controls=\"tag\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class=\"collapse show ec-cardCollapse\" id=\"tag\">
                            <div class=\"card-body\">
                                {% if(Tags|length > 0) %}
                                    {% for Tag in Tags %}
                                        <div class=\"d-inline-block mb-2 me-2\">
                                            <button class=\"btn btn-outline-primary\" type=\"button\">{{ Tag.name }}</button>
                                        </div>
                                    {% endfor %}
                                {% endif %}

                                <div class=\"d-block mb-3\" data-bs-toggle=\"collapse\" href=\"#allTags\" role=\"button\"
                                     aria-expanded=\"false\" aria-controls=\"allTags\">
                                    <a>
                                        <i class=\"fa fa-plus-square-o fw-bold me-1\"></i>
                                        <span class=\"fw-bold\">{{ 'admin.product.save_tag'|trans }}</span>
                                    </a>
                                </div>
                                <div class=\"collapse p-3 bg-ec-lightGray mb-3 ec-collapse\" id=\"allTags\">
                                    <div class=\"d-none\">
                                        {{ form_widget(form.Tag) }}
                                    </div>
                                    {% if(TagsList|length > 0) %}
                                        {% for Tag in TagsList %}
                                            <div class=\"d-inline-block mb-2 me-2\">
                                                <button class=\"btn btn-outline-secondary\" type=\"button\"
                                                        data-tag-id=\"{{ Tag.id }}\">{{ Tag.name }}</button>
                                            </div>
                                        {% endfor %}
                                    {% endif %}

                                    <div class=\"d-block mb-3\" data-bs-toggle=\"collapse\" href=\"#allTags\" role=\"button\"
                                         aria-expanded=\"false\" aria-controls=\"allTags\"></div>
                                </div>

                                <div class=\"d-block text-center\">
                                    <a href=\"{{ path('admin_product_tag') }}\"
                                       class=\"btn w-100 btn-ec-regular\"
                                       data-action=\"confirm\"
                                       title=\"{{ 'admin.common.move_to_confirm_message'|trans({
                                           '%name%' : 'admin.product.tag_management'|trans }) }}\">{{ 'admin.product.move_to_tag'|trans }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
{##↑タグ登録削除##}
#}
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <span class=\"card-title\">{{ 'admin.product.create_date__card_title'|trans }}</span>
                                </div>
                                <div class=\"col-4 text-end\">
                                    <a data-bs-toggle=\"collapse\" href=\"#update\" aria-expanded=\"false\"
                                       aria-controls=\"update\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"update\">
                            <div class=\"card-body\">
                                <div class=\"row mb-2\">
                                    <div class=\"col\">
                                        <i class=\"fa fa-flag me-1\"></i>
                                        <span>{{ 'admin.common.create_date'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        <span>：{{ Product.create_date|date_min }}</span>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col\">
                                        <i class=\"fa fa-refresh me-1\"></i>
                                        <span>{{ 'admin.common.update_date'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        <span>：{{ Product.update_date|date_min }}</span>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col\">
                                        <i class=\"fa fa-user me-1\"></i>
                                        <span>{{ 'admin.common.last_updater'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        <span>：{{ Product.Creator ? Product.Creator.name }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                         title=\"{{ 'tooltip.product.shop_memo'|trans }}\">
                                        <span class=\"card-title\">
                                            {{ 'admin.common.shop_memo'|trans }}
                                            <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                        </span>
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
                                {{ form_widget(form.note, { attr : { rows : \"8\"} }) }}
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
                            <a class=\"c-baseLink\" href=\"{{ path('admin_product_page', { page_no : app.session.get('eccube.admin.product.search.page_no')|default('1') } ) }}\"
                               data-action=\"confirm\" title=\"{{ 'admin.common.move_to_confirm_message'|trans({'%name%' : 'admin.product.product_list'|trans }) }}\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>{{ 'admin.product.product_list'|trans }}</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                {{ form_widget(form.Status) }}
                                {{ form_errors(form.Status) }}
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
", "@admin/Product/product.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\template\\admin\\Product\\product.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18, "if" => 27, "for" => 89, "import" => 933, "macro" => 919);
        static $filters = array("escape" => 15, "trans" => 15, "filter" => 724, "length" => 973, "date_min" => 1039, "default" => 1098);
        static $functions = array("path" => 51, "form_widget" => 109, "form_errors" => 306, "form_row" => 727, "url" => 877);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'if', 'for', 'import', 'macro'],
                ['escape', 'trans', 'filter', 'length', 'date_min', 'default'],
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
