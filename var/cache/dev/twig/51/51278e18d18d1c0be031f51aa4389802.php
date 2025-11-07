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

/* @admin/Product/index.twig */
class __TwigTemplate_808f1760e01f22e14402c286f4564d40 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Product/index.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Product/index.twig"));

        // line 13
        $context["menus"] = ["product", "product_master"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 18, $this->source); })()), ["@admin/Form/bootstrap_4_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Product/index.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_list"), "html", null, true);
        
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

    // line 19
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 20
        echo "    <script>
        \$(function() {
            \$('#bulkDelete').on('click', function() {

                var modal = \$('#bulkDeleteModal');

                // 削除中のUI変更処理
                modal.find('button').attr('disabled', 'disabled');
                \$('.modal-body p', modal).text(\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.permanently_delete__in_progress"), "html", null, true);
        echo "\");
                \$('.progress', modal).show();

                var checkedList = \$('input[type=checkbox][data-delete-url]:checked');
                var totalCount = checkedList.length;
                var currentCount = 0;

                var promises = checkedList.map(function() {
                    return \$.ajax({
                        'url': \$(this).data('delete-url'),
                        'type': 'delete',
                        'data': {'_token': \$(this).attr('token-for-anchor')}
                    }).always(function() {
                        \$('.progress-bar', modal).css('width', (++currentCount / totalCount * 100) + '%');
                    });
                });

                var addError = function(errorMessage) {
                    \$('<li><span class=\"badge bg-danger\">ERROR</span> </li>')
                        .append(\$('<span></span>').text(errorMessage))
                        .appendTo('#bulkErrors');
                };

                \$.when.apply(\$, promises)
                    .done(function() {
                        // 削除できなかった場合はエラーメッセージを表示
                        var args = promises.length === 1 ? [arguments[0]] : [].slice.call(arguments).map(function(result) {
                            return result[0];
                        });
                        args.filter(function(result) {
                            return result.success === false;
                        }).forEach(function(result) {
                            addError(result.message);
                        });
                    })
                    .fail(function() {
                        // システムエラー
                        addError(\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.permanently_delete__system_error"), "html", null, true);
        echo "\");
                    })
                    .always(function() {
                        \$('.progress', modal).hide();
                        \$('.modal-body p', modal).text(\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.permanently_delete__complete_message"), "html", null, true);
        echo "\");
                        modal.find('button').removeAttr('disabled').toggle();
                    })
            });

            \$('#bulkDeleteDone').on('click', function() {
                location.reload(true);
            });

            toggleBtnBulk('input[id^=\"check_\"]', '#btn_bulk');
            \$('input[id^=\"check_\"]').on('change', function() {
                \$('#trigger_check_all').prop('checked', false);
                toggleBtnBulk('input[id^=\"check_\"]', '#btn_bulk');
            });

            \$('#trigger_check_all').on('change', function() {
                var checked = \$(this).prop('checked');
                if (checked) {
                    \$('input[id^=\"check_\"]').prop('checked', true);
                } else {
                    \$('input[id^=\"check_\"]').prop('checked', false);
                }
                toggleBtnBulk('input[id^=\"check_\"]', '#btn_bulk');
            });

            \$('#form_bulk').find('.action-submit').on('click', function(event) {
                event.preventDefault();
                var form = \$(this).closest('form');
                if (!form.find('input:checkbox[name^=\"ids\"]:checked').length) {
                    ";
        // line 99
        echo "                    alert('please check');
                    return false;
                }

                \$('<input />').attr('type', 'hidden').attr('name', '";
        // line 103
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::TOKEN_NAME"), "html", null, true);
        echo "')
                    .val(\$(this).attr('token-for-anchor'))
                    .appendTo(form);
                form.attr('action', \$(this).data('action')).submit();
                return false;
            });

            var dataClass = [];
            var modalClass = \$('#productClassesModal');
            \$('form#form_bulk').on('click', 'table.table button[data-class-url]', function() {
                var btnClass = \$(this);
                btnClass.attr('disabled', true);
                var productId = btnClass.data('product-id');

                if (dataClass[productId] != undefined) {
                    renderClass(dataClass[productId], btnClass);
                    return;
                }

                \$.ajax({
                    url: btnClass.data('class-load'),
                    type: 'GET',
                }).done(function(data) {
                    dataClass[productId] = data;
                    renderClass(dataClass[productId], btnClass);
                }).fail(function() {
                    alert('Failed');
                });
            });

            // Append html and show popup
            function renderClass(data, btnClass) {
                \$('div.modal-body', modalClass).html(data);
                \$('h5.modal-title', modalClass).text(btnClass.data('message'));
                \$('a.btn-ec-conversion', modalClass).attr('href', btnClass.data('class-url'));
                modalClass.modal('show');
                btnClass.attr('disabled', false);
            }
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 145
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 146
        echo "    <div class=\"c-outsideBlock\">
        <form id='search_form' method=\"post\" action=\"";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product");
        echo "\">
            ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 148, $this->source); })()), "_token", [], "any", false, false, true, 148), 148, $this->source), 'widget');
        echo "
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row justify-content-start\">

                    <div class=\"col-6\">
                        <div class=\"mb-2\">
                            <label class=\"col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.multi_search_label"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.multi_search_label"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                            ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 155, $this->source); })()), "id", [], "any", false, false, true, 155), 155, $this->source), 'widget');
        echo "
                            ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 156, $this->source); })()), "id", [], "any", false, false, true, 156), 156, $this->source), 'errors');
        echo "
                        </div>
                        <div class=\"d-inline-block mb-3\" data-bs-toggle=\"collapse\" href=\"#searchDetail\"
                             aria-expanded=\"false\" aria-controls=\"searchDetail\"><a><i
                                        class=\"fa fa-plus-square-o fw-bold me-1\"></i><span
                                        class=\"fw-bold\">";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_detail"), "html", null, true);
        echo "</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"c-subContents collapse ec-collapse";
        // line 166
        echo (((isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 166, $this->source); })())) ? (" show") : (""));
        echo "\" id=\"searchDetail\">
                <div class=\"row mb-2\">
                    <div class=\"col-6\">
                        <div class=\"row mb-2\">
                            <div class=\"col-6\">
                                <label class=\"col-form-label\">";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category"), "html", null, true);
        echo "</label>
                                ";
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 172, $this->source); })()), "category_id", [], "any", false, false, true, 172), 172, $this->source), 'widget');
        echo "
                                ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 173, $this->source); })()), "category_id", [], "any", false, false, true, 173), 173, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                        <div class=\"row mb-2\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.display_status"), "html", null, true);
        echo "</p>
                                ";
        // line 179
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 179, $this->source); })()), "status", [], "any", false, false, true, 179), 179, $this->source), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 180, $this->source); })()), "status", [], "any", false, false, true, 180), 180, $this->source), 'errors', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"row mb-2\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock__short"), "html", null, true);
        echo "</p>
                                ";
        // line 186
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 186, $this->source); })()), "stock", [], "any", false, false, true, 186), 186, $this->source), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 187, $this->source); })()), "stock", [], "any", false, false, true, 187), 187, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row mb-2\">
                            <div class=\"col-6\">
                                <label class=\"col-form-label\">";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.tag"), "html", null, true);
        echo "</label>
                                ";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 195, $this->source); })()), "tag_id", [], "any", false, false, true, 195), 195, $this->source), 'widget');
        echo "
                                ";
        // line 196
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 196, $this->source); })()), "tag_id", [], "any", false, false, true, 196), 196, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                        <div class=\"mb-2\">
                            <label class=\"col-form-label\">
                                ";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create_date"), "html", null, true);
        echo "
                            </label>
                            <div class=\"row align-items-center\">
                                <div class=\"col\">
                                    ";
        // line 206
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 206, $this->source); })()), "create_datetime_start", [], "any", false, false, true, 206), 206, $this->source), 'widget');
        echo "
                                    ";
        // line 207
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 207, $this->source); })()), "create_datetime_start", [], "any", false, false, true, 207), 207, $this->source), 'errors');
        echo "
                                </div>
                                <div class=\"col-auto text-center\"><span>";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col\">
                                    ";
        // line 212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 212, $this->source); })()), "create_datetime_end", [], "any", false, false, true, 212), 212, $this->source), 'widget');
        echo "
                                    ";
        // line 213
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 213, $this->source); })()), "create_datetime_end", [], "any", false, false, true, 213), 213, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"mb-2\">
                            <label class=\"col-form-label\">";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.update_date"), "html", null, true);
        echo "</label>
                            <div class=\"row align-items-center\">
                                <div class=\"col\">
                                    ";
        // line 222
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 222, $this->source); })()), "update_datetime_start", [], "any", false, false, true, 222), 222, $this->source), 'widget');
        echo "
                                    ";
        // line 223
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 223, $this->source); })()), "update_datetime_start", [], "any", false, false, true, 223), 223, $this->source), 'errors');
        echo "
                                </div>
                                <div class=\"col-auto\"><span>";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span></div>
                                <div class=\"col\">
                                    ";
        // line 227
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 227, $this->source); })()), "update_datetime_end", [], "any", false, false, true, 227), 227, $this->source), 'widget');
        echo "
                                    ";
        // line 228
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 228, $this->source); })()), "update_datetime_end", [], "any", false, false, true, 228), 228, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 235
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 235, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 235), "eccube_form_options", [], "any", false, false, true, 235), "auto_render", [], "any", false, false, true, 235); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 236
            echo "                    ";
            // line 237
            echo "                    <div class=\"row mb-2\">
                        ";
            // line 238
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 238), "eccube_form_options", [], "any", false, false, true, 238), "form_theme", [], "any", false, false, true, 238)) {
                // line 239
                echo "                            ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 239), "eccube_form_options", [], "any", false, false, true, 239), "form_theme", [], "any", false, false, true, 239)], true);
                // line 240
                echo "                            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 240, $this->source), 'row');
                echo "
                        ";
            } else {
                // line 242
                echo "                            <div class=\"col\">
                                <div class=\"mb-3\">
                                    <label>";
                // line 244
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 244), "label", [], "any", false, false, true, 244), 244, $this->source)), "html", null, true);
                echo "</label>
                                    ";
                // line 245
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 245, $this->source), 'widget');
                echo "
                                    ";
                // line 246
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 246, $this->source), 'errors');
                echo "
                                </div>
                            </div>
                        ";
            }
            // line 250
            echo "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 252
        echo "            </div>
            <div class=\"c-outsideBlock__contents mb-5\">
                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search"), "html", null, true);
        echo "</button>
                ";
        // line 255
        if ((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 255, $this->source); })())) {
            // line 256
            echo "                    <span class=\"fw-bold ms-2\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_result", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 256, $this->source); })()), "totalItemCount", [], "any", false, false, true, 256)]);
            echo "</span>
                ";
        }
        // line 258
        echo "            </div>
            <div class=\"c-outsideBlock__contents mb-5\">
                ";
        // line 260
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@admin/search_items.twig", ["form" => (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 260, $this->source); })())], true, true);
        echo "
            </div>
            ";
        // line 262
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 262, $this->source); })()), "sortkey", [], "any", false, false, true, 262), 262, $this->source), 'widget', ["attr" => ["class" => "js-listSort-key"]]);
        echo "
            ";
        // line 263
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 263, $this->source); })()), "sorttype", [], "any", false, false, true, 263), 263, $this->source), 'widget', ["attr" => ["class" => "js-listSort-type"]]);
        echo "
        </form>
    </div>
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                ";
        // line 269
        if (((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 269, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 269, $this->source); })()), "totalItemCount", [], "any", false, false, true, 269))) {
            // line 270
            echo "                    <form id=\"form_bulk\" method=\"POST\" action=\"\">
                        <div class=\"row justify-content-between mb-2\">
                            <div class=\"col-6\">
                                <div id=\"btn_bulk\" class=\"d-none\">
                                    <label class=\"me-2\">";
            // line 274
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.bulk_actions"), "html", null, true);
            echo "</label>
                                    <div class=\"btn-group me-2\" role=\"group\">
                                        <button ";
            // line 276
            echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
            echo " data-action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_bulk_product_status", ["id" => twig_constant("Eccube\\Entity\\Master\\ProductStatus::DISPLAY_SHOW")]), "html", null, true);
            echo "\" class=\"btn btn-ec-regular action-submit\" type=\"button\">
                                            <span>";
            // line 277
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.display_status__show"), "html", null, true);
            echo "</span>
                                        </button>
                                        <button ";
            // line 279
            echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
            echo " data-action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_bulk_product_status", ["id" => twig_constant("Eccube\\Entity\\Master\\ProductStatus::DISPLAY_HIDE")]), "html", null, true);
            echo "\" class=\"btn btn-ec-regular action-submit\" type=\"button\">
                                            <span>";
            // line 280
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.display_status__hide"), "html", null, true);
            echo "</span>
                                        </button>
                                    </div>
                                    <button ";
            // line 283
            echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
            echo " data-action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_bulk_product_status", ["id" => twig_constant("Eccube\\Entity\\Master\\ProductStatus::DISPLAY_ABOLISHED")]), "html", null, true);
            echo "\" class=\"btn btn-ec-regular me-2 action-submit\">
                                        ";
            // line 284
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.display_status__abolished"), "html", null, true);
            echo "
                                    </button>
                                    <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#bulkDeleteModal\" class=\"btn btn-ec-delete\">";
            // line 286
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.permanently_delete"), "html", null, true);
            echo "</button>
                                </div>
                            </div>
                            <div class=\"col-5 text-end\">
                                <div class=\"d-inline-block me-2 align-bottom\">
                                    <div>
                                        <select class=\"form-select\" onchange=\"location = this.value;\">
                                            ";
            // line 293
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pageMaxis"]) || array_key_exists("pageMaxis", $context) ? $context["pageMaxis"] : (function () { throw new RuntimeError('Variable "pageMaxis" does not exist.', 293, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pageMax"]) {
                // line 294
                echo "                                                <option ";
                if ((twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 294) == (isset($context["page_count"]) || array_key_exists("page_count", $context) ? $context["page_count"] : (function () { throw new RuntimeError('Variable "page_count" does not exist.', 294, $this->source); })()))) {
                    echo "selected=\"\"";
                }
                echo " value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_page", ["page_no" => 1, "page_count" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 294)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.count", ["%count%" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 294)]), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMax'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 296
            echo "                                        </select>
                                    </div>
                                </div>
                                <div class=\"d-inline-block\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a class=\"btn btn-ec-regular\" href=\"";
            // line 301
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_export");
            echo "\">
                                            <i class=\"fa fa-cloud-download me-1 text-secondary\"></i><span>";
            // line 302
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_download"), "html", null, true);
            echo "</span>
                                        </a>
                                        <a class=\"btn btn-ec-regular\" href=\"";
            // line 304
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_csv", ["id" => twig_constant("\\Eccube\\Entity\\Master\\CsvType::CSV_TYPE_PRODUCT")]), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-cog me-1 text-secondary\"></i><span>";
            // line 305
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv_setting"), "html", null, true);
            echo "</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card rounded border-0 mb-4 d-block\">
                            <div class=\"card-body p-0\">
                                <table class=\"table table-sm\">
                                    <thead>
                                    <tr>
                                        <th class=\"border-top-0 ps-3 pt-2 pb-2\">
                                            <input type=\"checkbox\" name=\"filter\" value=\"open\" id=\"trigger_check_all\">
                                        </th>
                                        <th class=\"border-top-0 pt-2 pb-2\" nowrap>";
            // line 319
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_id__short"), "html", null, true);
            echo "<a href=\"#\" class=\"js-listSort\" data-sortkey=\"product_id\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a></th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 320
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.image__short"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 321
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.name"), "html", null, true);
            echo "<a href=\"#\" class=\"js-listSort\" data-sortkey=\"name\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a></th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 322
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_code__short"), "html", null, true);
            echo "<a href=\"#\" class=\"js-listSort\" data-sortkey=\"product_code\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a></th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 323
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.price"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 324
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock"), "html", null, true);
            echo "<a href=\"#\" class=\"js-listSort\" data-sortkey=\"stock\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a></th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-nowrap\">";
            // line 325
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.display_status__short"), "html", null, true);
            echo "<a href=\"#\" class=\"js-listSort\" data-sortkey=\"status\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a></th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 326
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create_date"), "html", null, true);
            echo "<a href=\"#\" class=\"js-listSort\" data-sortkey=\"create_date\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a></th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 327
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.update_date"), "html", null, true);
            echo "<a href=\"#\" class=\"js-listSort\" data-sortkey=\"update_date\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a></th>
                                        <th class=\"border-top-0 pt-2 pb-2 pe-3\" colspan=\"3\"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
            // line 332
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 332, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
                // line 333
                echo "                                        <tr id=\"ex-product-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 333), 333, $this->source), "html", null, true);
                echo "\">
                                            <td class=\"align-middle ps-3\">
                                                <input type=\"checkbox\" name=\"ids[]\" value=\"";
                // line 335
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 335), 335, $this->source), "html", null, true);
                echo "\" id=\"check_";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 335), 335, $this->source), "html", null, true);
                echo "\" data-delete-url=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_product_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 335)]), "html", null, true);
                echo "\">
                                            </td>
                                            <td class=\"align-middle\">";
                // line 337
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 337), 337, $this->source), "html", null, true);
                echo "</td>
                                            ";
                // line 339
                echo "                                            <td class=\"align-middle\">
                                                <a href=\"";
                // line 340
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_product_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 340)]), "html", null, true);
                echo "\">
                                                    <img src=\"";
                // line 341
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "mainFileName", [], "any", false, false, true, 341), 341, $this->source)), "save_image"), "html", null, true);
                echo "\"
                                                         style=\"max-width: 50px\">
                                                </a>
                                            </td>
                                            <td class=\"align-middle\"><a
                                                        href=\"";
                // line 346
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_product_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 346)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, true, 346), 346, $this->source), "html", null, true);
                echo "</a>
                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 349
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "code_min", [], "any", false, false, true, 349), 349, $this->source), "html", null, true);
                echo "
                                                ";
                // line 350
                if ((twig_get_attribute($this->env, $this->source, $context["Product"], "code_min", [], "any", false, false, true, 350) != twig_get_attribute($this->env, $this->source, $context["Product"], "code_max", [], "any", false, false, true, 350))) {
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "code_max", [], "any", false, false, true, 350), 350, $this->source), "html", null, true);
                    echo "
                                                ";
                }
                // line 352
                echo "                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 354
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "price02_min", [], "any", false, false, true, 354), 354, $this->source)), "html", null, true);
                echo "
                                                ";
                // line 355
                if ((twig_get_attribute($this->env, $this->source, $context["Product"], "price02_min", [], "any", false, false, true, 355) != twig_get_attribute($this->env, $this->source, $context["Product"], "price02_max", [], "any", false, false, true, 355))) {
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "price02_max", [], "any", false, false, true, 355), 355, $this->source)), "html", null, true);
                    echo "
                                                ";
                }
                // line 357
                echo "                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 359
                if (twig_get_attribute($this->env, $this->source, $context["Product"], "hasProductClass", [], "any", false, false, true, 359)) {
                    // line 360
                    echo "                                                    <button type=\"button\" class=\"btn page-link text-dark d-inline-block\"
                                                            data-product-id=\"";
                    // line 361
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 361), 361, $this->source), "html", null, true);
                    echo "\"
                                                            data-message=\"";
                    // line 362
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.move_to_product_class__confirm_title", ["%name%" => twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, true, 362)]), "html", null, true);
                    echo "\"
                                                            data-class-load=\"";
                    // line 363
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_classes_load", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 363)]), "html", null, true);
                    echo "\"
                                                            data-class-url=\"";
                    // line 364
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_product_class", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 364), "return_product_list" => true]), "html", null, true);
                    echo "\">
                                                        ";
                    // line 365
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class__confirm"), "html", null, true);
                    echo "
                                                    </button>
                                                ";
                } else {
                    // line 368
                    echo "                                                    ";
                    // line 369
                    echo "                                                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["Product"], "stockunlimited_min", [], "any", false, false, true, 369)) {
                        // line 370
                        echo "                                                        ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock_unlimited__short"), "html", null, true);
                        echo "
                                                    ";
                    } else {
                        // line 372
                        echo "                                                        ";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "stock_min", [], "any", false, false, true, 372), 372, $this->source), "html", null, true);
                        echo "
                                                    ";
                    }
                    // line 374
                    echo "                                                ";
                }
                // line 375
                echo "                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 377
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Product"], "status", [], "any", false, false, true, 377), "name", [], "any", false, false, true, 377), 377, $this->source), "html", null, true);
                echo "
                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 380
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "create_date", [], "any", false, false, true, 380), 380, $this->source)), "html", null, true);
                echo "
                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 383
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "update_date", [], "any", false, false, true, 383), 383, $this->source)), "html", null, true);
                echo "
                                            </td>
                                            <td class=\"align-middle pe-3\" colspan=\"3\">
                                                <div class=\"text-end\">
                                                    <div class=\"px-1 d-inline-block text-center\" data-bs-toggle=\"tooltip\"
                                                         data-bs-placement=\"top\"
                                                         title=\"";
                // line 389
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.display"), "html", null, true);
                echo "\"><a class=\"btn btn-ec-actionIcon\"
                                                                                                       href=\"";
                // line 390
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 390)]), "html", null, true);
                echo "\"
                                                                                                       target=\"_blank\"><i
                                                                    class=\"fa fa-eye fa-lg text-secondary\"
                                                                    aria-hidden=\"true\"></i></a></div>
                                                    <div class=\"px-1 d-inline-block text-center\" data-bs-toggle=\"tooltip\"
                                                         data-bs-placement=\"top\"
                                                         title=\"";
                // line 396
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.copy"), "html", null, true);
                echo "\">
                                                        <a href=\"#\" class=\"btn btn-ec-actionIcon\"
                                                           data-bs-toggle=\"modal\"
                                                           data-bs-target=\"#confirmModal-";
                // line 399
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 399), 399, $this->source), "html", null, true);
                echo "\">
                                                            <i class=\"fa fa-files-o fa-lg text-secondary\"
                                                               aria-hidden=\"true\"></i></a>
                                                        <div class=\"modal fade\" id=\"confirmModal-";
                // line 402
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 402), 402, $this->source), "html", null, true);
                echo "\" tabindex=\"-1\"
                                                             role=\"dialog\"
                                                             aria-labelledby=\"confirmModal-";
                // line 404
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 404), 404, $this->source), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                    <div class=\"modal-header\">
                                                                        <h5 class=\"modal-title fw-bold\">
                                                                            ";
                // line 409
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.copy__confirm_title"), "html", null, true);
                echo "</h5>
                                                                        <button class=\"btn-close\" type=\"button\"
                                                                                data-bs-dismiss=\"modal\"
                                                                                aria-label=\"Close\">
                                                                        </button>
                                                                    </div>
                                                                    <div class=\"modal-body text-start\">
                                                                        <p class=\"text-start\">
                                                                            ";
                // line 417
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.copy__confirm_message"), "html", null, true);
                echo "</p>
                                                                    </div>
                                                                    <div class=\"modal-footer\">
                                                                        <button class=\"btn btn-ec-sub\" type=\"button\"
                                                                                data-bs-dismiss=\"modal\">";
                // line 421
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                echo "
                                                                        </button>
                                                                        <a
                                                                                href=\"";
                // line 424
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_product_copy", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 424)]), "html", null, true);
                echo "\"
                                                                                class=\"btn btn-ec-conversion\"
                                                                                data-confirm=\"false\"
                                                                                ";
                // line 427
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo "
                                                                                data-method=\"post\">
                                                                            ";
                // line 429
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.copy"), "html", null, true);
                echo "
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 440
            echo "
                                    </tbody>
                                </table>
                            </div>
                            ";
            // line 444
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 444, $this->source); })()), "totalItemCount", [], "any", false, false, true, 444) > 0)) {
                // line 445
                echo "                                <div class=\"row justify-content-md-center mb-4 pb-4\">
                                    ";
                // line 446
                $this->loadTemplate("@admin/pager.twig", "@admin/Product/index.twig", 446)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 446, $this->source); })()), "paginationData", [], "any", false, false, true, 446), "routes" => "admin_product_page"]));
                // line 447
                echo "                                </div>
                            ";
            }
            // line 449
            echo "                        </div>
                    </form>
                ";
        } elseif (        // line 451
(isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 451, $this->source); })())) {
            // line 452
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 454
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_invalid_condition"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 455
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                ";
        } else {
            // line 459
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 461
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_no_result"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 462
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 463
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_advanced_search"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                ";
        }
        // line 467
        echo "            </div>

            <!-- 完全に削除の確認モーダル-->
            <div class=\"modal fade\" id=\"bulkDeleteModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"discontinuance\" aria-hidden=\"true\" data-bs-keyboard=\"false\" data-bs-backdrop=\"static\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title fw-bold\">";
        // line 474
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.permanently_delete__confirm_title"), "html", null, true);
        echo "</h5>
                            <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"modal-body text-start\">
                            <p class=\"text-start\">";
        // line 478
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.permanently_delete__confirm_message"), "html", null, true);
        echo "</p>
                            <ul id=\"bulkErrors\"></ul>
                            <div class=\"progress\" style=\"display: none\">
                                <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                            </div>
                        </div>
                        <div class=\"modal-footer\">
                            <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">";
        // line 485
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                            <button class=\"btn btn-ec-delete\" type=\"button\" id=\"bulkDelete\">";
        // line 486
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.permanently_delete"), "html", null, true);
        echo "</button>
                            <button class=\"btn btn-ec-regular\" id=\"bulkDeleteDone\" style=\"display: none\" type=\"button\" data-bs-dismiss=\"modal\">";
        // line 487
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.permanently_delete__complete"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class=\"modal fade\" id=\"productClassesModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"productClassesModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title fw-bold\">";
        // line 500
        echo "</h5>
                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
                    </button>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 506
        echo "                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-v-sub\" type=\"button\" data-bs-dismiss=\"modal\">
                        ";
        // line 509
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "
                    </button>
                    <a class=\"btn btn-ec-conversion\"
                       href=\"#\">
                        ";
        // line 513
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.move_to_product_class"), "html", null, true);
        echo "
                    </a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /#productClassesModal -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@admin/Product/index.twig";
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
        return array (  1071 => 513,  1064 => 509,  1059 => 506,  1052 => 500,  1036 => 487,  1032 => 486,  1028 => 485,  1018 => 478,  1011 => 474,  1002 => 467,  995 => 463,  991 => 462,  987 => 461,  983 => 459,  976 => 455,  972 => 454,  968 => 452,  966 => 451,  962 => 449,  958 => 447,  956 => 446,  953 => 445,  951 => 444,  945 => 440,  928 => 429,  923 => 427,  917 => 424,  911 => 421,  904 => 417,  893 => 409,  885 => 404,  880 => 402,  874 => 399,  868 => 396,  859 => 390,  855 => 389,  846 => 383,  840 => 380,  834 => 377,  830 => 375,  827 => 374,  821 => 372,  815 => 370,  812 => 369,  810 => 368,  804 => 365,  800 => 364,  796 => 363,  792 => 362,  788 => 361,  785 => 360,  783 => 359,  779 => 357,  772 => 355,  768 => 354,  764 => 352,  757 => 350,  753 => 349,  745 => 346,  737 => 341,  733 => 340,  730 => 339,  726 => 337,  717 => 335,  711 => 333,  707 => 332,  699 => 327,  695 => 326,  691 => 325,  687 => 324,  683 => 323,  679 => 322,  675 => 321,  671 => 320,  667 => 319,  650 => 305,  646 => 304,  641 => 302,  637 => 301,  630 => 296,  615 => 294,  611 => 293,  601 => 286,  596 => 284,  590 => 283,  584 => 280,  578 => 279,  573 => 277,  567 => 276,  562 => 274,  556 => 270,  554 => 269,  545 => 263,  541 => 262,  536 => 260,  532 => 258,  526 => 256,  524 => 255,  520 => 254,  516 => 252,  509 => 250,  502 => 246,  498 => 245,  494 => 244,  490 => 242,  484 => 240,  481 => 239,  479 => 238,  476 => 237,  474 => 236,  469 => 235,  460 => 228,  456 => 227,  451 => 225,  446 => 223,  441 => 222,  435 => 218,  427 => 213,  423 => 212,  417 => 209,  412 => 207,  407 => 206,  400 => 201,  392 => 196,  388 => 195,  384 => 194,  374 => 187,  370 => 186,  366 => 185,  358 => 180,  354 => 179,  350 => 178,  342 => 173,  338 => 172,  334 => 171,  326 => 166,  318 => 161,  310 => 156,  306 => 155,  300 => 154,  291 => 148,  287 => 147,  284 => 146,  274 => 145,  223 => 103,  217 => 99,  185 => 69,  178 => 65,  138 => 28,  128 => 20,  118 => 19,  99 => 16,  80 => 15,  69 => 11,  67 => 18,  65 => 13,  40 => 11,);
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

{% set menus = ['product', 'product_master'] %}

{% block title %}{{ 'admin.product.product_list'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.product.product_management'|trans }}{% endblock %}

{% form_theme searchForm '@admin/Form/bootstrap_4_layout.html.twig' %}
{% block javascript %}
    <script>
        \$(function() {
            \$('#bulkDelete').on('click', function() {

                var modal = \$('#bulkDeleteModal');

                // 削除中のUI変更処理
                modal.find('button').attr('disabled', 'disabled');
                \$('.modal-body p', modal).text(\"{{ 'admin.product.permanently_delete__in_progress'|trans }}\");
                \$('.progress', modal).show();

                var checkedList = \$('input[type=checkbox][data-delete-url]:checked');
                var totalCount = checkedList.length;
                var currentCount = 0;

                var promises = checkedList.map(function() {
                    return \$.ajax({
                        'url': \$(this).data('delete-url'),
                        'type': 'delete',
                        'data': {'_token': \$(this).attr('token-for-anchor')}
                    }).always(function() {
                        \$('.progress-bar', modal).css('width', (++currentCount / totalCount * 100) + '%');
                    });
                });

                var addError = function(errorMessage) {
                    \$('<li><span class=\"badge bg-danger\">ERROR</span> </li>')
                        .append(\$('<span></span>').text(errorMessage))
                        .appendTo('#bulkErrors');
                };

                \$.when.apply(\$, promises)
                    .done(function() {
                        // 削除できなかった場合はエラーメッセージを表示
                        var args = promises.length === 1 ? [arguments[0]] : [].slice.call(arguments).map(function(result) {
                            return result[0];
                        });
                        args.filter(function(result) {
                            return result.success === false;
                        }).forEach(function(result) {
                            addError(result.message);
                        });
                    })
                    .fail(function() {
                        // システムエラー
                        addError(\"{{ 'admin.product.permanently_delete__system_error'|trans }}\");
                    })
                    .always(function() {
                        \$('.progress', modal).hide();
                        \$('.modal-body p', modal).text(\"{{ 'admin.product.permanently_delete__complete_message'|trans }}\");
                        modal.find('button').removeAttr('disabled').toggle();
                    })
            });

            \$('#bulkDeleteDone').on('click', function() {
                location.reload(true);
            });

            toggleBtnBulk('input[id^=\"check_\"]', '#btn_bulk');
            \$('input[id^=\"check_\"]').on('change', function() {
                \$('#trigger_check_all').prop('checked', false);
                toggleBtnBulk('input[id^=\"check_\"]', '#btn_bulk');
            });

            \$('#trigger_check_all').on('change', function() {
                var checked = \$(this).prop('checked');
                if (checked) {
                    \$('input[id^=\"check_\"]').prop('checked', true);
                } else {
                    \$('input[id^=\"check_\"]').prop('checked', false);
                }
                toggleBtnBulk('input[id^=\"check_\"]', '#btn_bulk');
            });

            \$('#form_bulk').find('.action-submit').on('click', function(event) {
                event.preventDefault();
                var form = \$(this).closest('form');
                if (!form.find('input:checkbox[name^=\"ids\"]:checked').length) {
                    {# TODO: should use modal instead of alert #}
                    alert('please check');
                    return false;
                }

                \$('<input />').attr('type', 'hidden').attr('name', '{{ constant('Eccube\\\\Common\\\\Constant::TOKEN_NAME') }}')
                    .val(\$(this).attr('token-for-anchor'))
                    .appendTo(form);
                form.attr('action', \$(this).data('action')).submit();
                return false;
            });

            var dataClass = [];
            var modalClass = \$('#productClassesModal');
            \$('form#form_bulk').on('click', 'table.table button[data-class-url]', function() {
                var btnClass = \$(this);
                btnClass.attr('disabled', true);
                var productId = btnClass.data('product-id');

                if (dataClass[productId] != undefined) {
                    renderClass(dataClass[productId], btnClass);
                    return;
                }

                \$.ajax({
                    url: btnClass.data('class-load'),
                    type: 'GET',
                }).done(function(data) {
                    dataClass[productId] = data;
                    renderClass(dataClass[productId], btnClass);
                }).fail(function() {
                    alert('Failed');
                });
            });

            // Append html and show popup
            function renderClass(data, btnClass) {
                \$('div.modal-body', modalClass).html(data);
                \$('h5.modal-title', modalClass).text(btnClass.data('message'));
                \$('a.btn-ec-conversion', modalClass).attr('href', btnClass.data('class-url'));
                modalClass.modal('show');
                btnClass.attr('disabled', false);
            }
        });
    </script>
{% endblock javascript %}

{% block main %}
    <div class=\"c-outsideBlock\">
        <form id='search_form' method=\"post\" action=\"{{ url('admin_product') }}\">
            {{ form_widget(searchForm._token) }}
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row justify-content-start\">

                    <div class=\"col-6\">
                        <div class=\"mb-2\">
                            <label class=\"col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.product.multi_search_label'|trans }}\">{{ 'admin.product.multi_search_label'|trans }}<i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                            {{ form_widget(searchForm.id) }}
                            {{ form_errors(searchForm.id) }}
                        </div>
                        <div class=\"d-inline-block mb-3\" data-bs-toggle=\"collapse\" href=\"#searchDetail\"
                             aria-expanded=\"false\" aria-controls=\"searchDetail\"><a><i
                                        class=\"fa fa-plus-square-o fw-bold me-1\"></i><span
                                        class=\"fw-bold\">{{ 'admin.common.search_detail'|trans }}</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"c-subContents collapse ec-collapse{{ has_errors ? ' show' }}\" id=\"searchDetail\">
                <div class=\"row mb-2\">
                    <div class=\"col-6\">
                        <div class=\"row mb-2\">
                            <div class=\"col-6\">
                                <label class=\"col-form-label\">{{ 'admin.product.category'|trans }}</label>
                                {{ form_widget(searchForm.category_id) }}
                                {{ form_errors(searchForm.category_id) }}
                            </div>
                        </div>
                        <div class=\"row mb-2\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">{{ 'admin.product.display_status'|trans }}</p>
                                {{ form_widget(searchForm.status, {'label_attr': {'class': 'checkbox-inline'}}) }}
                                {{ form_errors(searchForm.status, {'label_attr': {'class': 'checkbox-inline'}}) }}
                            </div>
                        </div>
                        <div class=\"row mb-2\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">{{ 'admin.product.stock__short'|trans }}</p>
                                {{ form_widget(searchForm.stock, {'label_attr': {'class': 'checkbox-inline'}}) }}
                                {{ form_errors(searchForm.stock) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row mb-2\">
                            <div class=\"col-6\">
                                <label class=\"col-form-label\">{{ 'admin.product.tag'|trans }}</label>
                                {{ form_widget(searchForm.tag_id) }}
                                {{ form_errors(searchForm.tag_id) }}
                            </div>
                        </div>
                        <div class=\"mb-2\">
                            <label class=\"col-form-label\">
                                {{ 'admin.common.create_date'|trans }}
                            </label>
                            <div class=\"row align-items-center\">
                                <div class=\"col\">
                                    {# TODO: カレンダー表示の調整 #}
                                    {{ form_widget(searchForm.create_datetime_start) }}
                                    {{ form_errors(searchForm.create_datetime_start) }}
                                </div>
                                <div class=\"col-auto text-center\"><span>{{ 'admin.common.separator__range'|trans }}</span>
                                </div>
                                <div class=\"col\">
                                    {{ form_widget(searchForm.create_datetime_end) }}
                                    {{ form_errors(searchForm.create_datetime_end) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"mb-2\">
                            <label class=\"col-form-label\">{{ 'admin.common.update_date'|trans }}</label>
                            <div class=\"row align-items-center\">
                                <div class=\"col\">
                                    {# TODO: カレンダー表示の調整 #}
                                    {{ form_widget(searchForm.update_datetime_start) }}
                                    {{ form_errors(searchForm.update_datetime_start) }}
                                </div>
                                <div class=\"col-auto\"><span>{{ 'admin.common.separator__range'|trans }}</span></div>
                                <div class=\"col\">
                                    {{ form_widget(searchForm.update_datetime_end) }}
                                    {{ form_errors(searchForm.update_datetime_end) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {# エンティティ拡張の自動出力 #}
                {% for f in searchForm|filter(f => f.vars.eccube_form_options.auto_render) %}
                    {# TODO 1項目1行になるのを改善 #}
                    <div class=\"row mb-2\">
                        {% if f.vars.eccube_form_options.form_theme %}
                            {% form_theme f f.vars.eccube_form_options.form_theme %}
                            {{ form_row(f) }}
                        {% else %}
                            <div class=\"col\">
                                <div class=\"mb-3\">
                                    <label>{{ f.vars.label|trans }}</label>
                                    {{ form_widget(f) }}
                                    {{ form_errors(f) }}
                                </div>
                            </div>
                        {% endif %}
                    </div>
                {% endfor %}
            </div>
            <div class=\"c-outsideBlock__contents mb-5\">
                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">{{ 'admin.common.search'|trans }}</button>
                {% if pagination %}
                    <span class=\"fw-bold ms-2\">{{ 'admin.common.search_result'|trans({\"%count%\":pagination.totalItemCount})|raw }}</span>
                {% endif %}
            </div>
            <div class=\"c-outsideBlock__contents mb-5\">
                {{ include('@admin/search_items.twig', { 'form': searchForm }, ignore_missing = true) }}
            </div>
            {{ form_widget(searchForm.sortkey, {'attr': {'class': 'js-listSort-key'}}) }}
            {{ form_widget(searchForm.sorttype, {'attr': {'class': 'js-listSort-type'}}) }}
        </form>
    </div>
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                {% if pagination and pagination.totalItemCount %}
                    <form id=\"form_bulk\" method=\"POST\" action=\"\">
                        <div class=\"row justify-content-between mb-2\">
                            <div class=\"col-6\">
                                <div id=\"btn_bulk\" class=\"d-none\">
                                    <label class=\"me-2\">{{ 'admin.common.bulk_actions'|trans }}</label>
                                    <div class=\"btn-group me-2\" role=\"group\">
                                        <button {{ csrf_token_for_anchor() }} data-action=\"{{ url('admin_product_bulk_product_status', {id: constant('Eccube\\\\Entity\\\\Master\\\\ProductStatus::DISPLAY_SHOW')}) }}\" class=\"btn btn-ec-regular action-submit\" type=\"button\">
                                            <span>{{ 'admin.product.display_status__show'|trans }}</span>
                                        </button>
                                        <button {{ csrf_token_for_anchor() }} data-action=\"{{ url('admin_product_bulk_product_status', {id: constant('Eccube\\\\Entity\\\\Master\\\\ProductStatus::DISPLAY_HIDE')}) }}\" class=\"btn btn-ec-regular action-submit\" type=\"button\">
                                            <span>{{ 'admin.product.display_status__hide'|trans }}</span>
                                        </button>
                                    </div>
                                    <button {{ csrf_token_for_anchor() }} data-action=\"{{ url('admin_product_bulk_product_status', {id: constant('Eccube\\\\Entity\\\\Master\\\\ProductStatus::DISPLAY_ABOLISHED')}) }}\" class=\"btn btn-ec-regular me-2 action-submit\">
                                        {{ 'admin.product.display_status__abolished'|trans }}
                                    </button>
                                    <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#bulkDeleteModal\" class=\"btn btn-ec-delete\">{{ 'admin.product.permanently_delete'|trans }}</button>
                                </div>
                            </div>
                            <div class=\"col-5 text-end\">
                                <div class=\"d-inline-block me-2 align-bottom\">
                                    <div>
                                        <select class=\"form-select\" onchange=\"location = this.value;\">
                                            {% for pageMax in pageMaxis %}
                                                <option {% if pageMax.name == page_count %}selected=\"\"{% endif %} value=\"{{ path('admin_product_page', {'page_no': 1, 'page_count': pageMax.name}) }}\">{{ 'admin.common.count'|trans({ '%count%': pageMax.name }) }}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                </div>
                                <div class=\"d-inline-block\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a class=\"btn btn-ec-regular\" href=\"{{ url('admin_product_export') }}\">
                                            <i class=\"fa fa-cloud-download me-1 text-secondary\"></i><span>{{ 'admin.common.csv_download'|trans }}</span>
                                        </a>
                                        <a class=\"btn btn-ec-regular\" href=\"{{ url('admin_setting_shop_csv', { id : constant('\\\\Eccube\\\\Entity\\\\Master\\\\CsvType::CSV_TYPE_PRODUCT') }) }}\">
                                            <i class=\"fa fa-cog me-1 text-secondary\"></i><span>{{ 'admin.setting.shop.csv_setting'|trans }}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card rounded border-0 mb-4 d-block\">
                            <div class=\"card-body p-0\">
                                <table class=\"table table-sm\">
                                    <thead>
                                    <tr>
                                        <th class=\"border-top-0 ps-3 pt-2 pb-2\">
                                            <input type=\"checkbox\" name=\"filter\" value=\"open\" id=\"trigger_check_all\">
                                        </th>
                                        <th class=\"border-top-0 pt-2 pb-2\" nowrap>{{ 'admin.product.product_id__short'|trans }}<a href=\"#\" class=\"js-listSort\" data-sortkey=\"product_id\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a></th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.product.image__short'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.product.name'|trans }}<a href=\"#\" class=\"js-listSort\" data-sortkey=\"name\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a></th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.product.product_code__short'|trans }}<a href=\"#\" class=\"js-listSort\" data-sortkey=\"product_code\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a></th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.product.price'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.product.stock'|trans }}<a href=\"#\" class=\"js-listSort\" data-sortkey=\"stock\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a></th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-nowrap\">{{ 'admin.product.display_status__short'|trans }}<a href=\"#\" class=\"js-listSort\" data-sortkey=\"status\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a></th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.common.create_date'|trans }}<a href=\"#\" class=\"js-listSort\" data-sortkey=\"create_date\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a></th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.common.update_date'|trans }}<a href=\"#\" class=\"js-listSort\" data-sortkey=\"update_date\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a></th>
                                        <th class=\"border-top-0 pt-2 pb-2 pe-3\" colspan=\"3\"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for Product in pagination %}
                                        <tr id=\"ex-product-{{ Product.id }}\">
                                            <td class=\"align-middle ps-3\">
                                                <input type=\"checkbox\" name=\"ids[]\" value=\"{{ Product.id }}\" id=\"check_{{ Product.id }}\" data-delete-url=\"{{ url('admin_product_product_delete', { id: Product.id }) }}\">
                                            </td>
                                            <td class=\"align-middle\">{{ Product.id }}</td>
                                            {# TODO: 画像のサイズをベタ指定しているので、styleguide側を直す #}
                                            <td class=\"align-middle\">
                                                <a href=\"{{ url('admin_product_product_edit', { id : Product.id }) }}\">
                                                    <img src=\"{{ asset(Product.mainFileName|no_image_product, 'save_image') }}\"
                                                         style=\"max-width: 50px\">
                                                </a>
                                            </td>
                                            <td class=\"align-middle\"><a
                                                        href=\"{{ url('admin_product_product_edit', { id : Product.id }) }}\">{{ Product.name }}</a>
                                            </td>
                                            <td class=\"align-middle\">
                                                {{ Product.code_min }}
                                                {% if Product.code_min != Product.code_max %}{{ 'admin.common.separator__range'|trans }}{{ Product.code_max }}
                                                {% endif %}
                                            </td>
                                            <td class=\"align-middle\">
                                                {{ Product.price02_min|price }}
                                                {% if Product.price02_min != Product.price02_max %}{{ 'admin.common.separator__range'|trans }}{{ Product.price02_max|price }}
                                                {% endif %}
                                            </td>
                                            <td class=\"align-middle\">
                                                {% if Product.hasProductClass %}
                                                    <button type=\"button\" class=\"btn page-link text-dark d-inline-block\"
                                                            data-product-id=\"{{ Product.id }}\"
                                                            data-message=\"{{ 'admin.product.move_to_product_class__confirm_title'|trans({'%name%': Product.name}) }}\"
                                                            data-class-load=\"{{ url('admin_product_classes_load', { 'id' : Product.id }) }}\"
                                                            data-class-url=\"{{ url('admin_product_product_class', { 'id' : Product.id, 'return_product_list' : true }) }}\">
                                                        {{ 'admin.product.product_class__confirm'|trans }}
                                                    </button>
                                                {% else %}
                                                    {# 規格なし商品 は在庫数を表示 #}
                                                    {% if Product.stockunlimited_min %}
                                                        {{ 'admin.product.stock_unlimited__short'|trans }}
                                                    {% else %}
                                                        {{ Product.stock_min }}
                                                    {% endif %}
                                                {% endif %}
                                            </td>
                                            <td class=\"align-middle\">
                                                {{ Product.status.name }}
                                            </td>
                                            <td class=\"align-middle\">
                                                {{ Product.create_date|date_min }}
                                            </td>
                                            <td class=\"align-middle\">
                                                {{ Product.update_date|date_min }}
                                            </td>
                                            <td class=\"align-middle pe-3\" colspan=\"3\">
                                                <div class=\"text-end\">
                                                    <div class=\"px-1 d-inline-block text-center\" data-bs-toggle=\"tooltip\"
                                                         data-bs-placement=\"top\"
                                                         title=\"{{ 'admin.common.display'|trans }}\"><a class=\"btn btn-ec-actionIcon\"
                                                                                                       href=\"{{ url('product_detail', {id:Product.id}) }}\"
                                                                                                       target=\"_blank\"><i
                                                                    class=\"fa fa-eye fa-lg text-secondary\"
                                                                    aria-hidden=\"true\"></i></a></div>
                                                    <div class=\"px-1 d-inline-block text-center\" data-bs-toggle=\"tooltip\"
                                                         data-bs-placement=\"top\"
                                                         title=\"{{ 'admin.common.copy'|trans }}\">
                                                        <a href=\"#\" class=\"btn btn-ec-actionIcon\"
                                                           data-bs-toggle=\"modal\"
                                                           data-bs-target=\"#confirmModal-{{ Product.id }}\">
                                                            <i class=\"fa fa-files-o fa-lg text-secondary\"
                                                               aria-hidden=\"true\"></i></a>
                                                        <div class=\"modal fade\" id=\"confirmModal-{{ Product.id }}\" tabindex=\"-1\"
                                                             role=\"dialog\"
                                                             aria-labelledby=\"confirmModal-{{ Product.id }}\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                    <div class=\"modal-header\">
                                                                        <h5 class=\"modal-title fw-bold\">
                                                                            {{ 'admin.product.copy__confirm_title'|trans }}</h5>
                                                                        <button class=\"btn-close\" type=\"button\"
                                                                                data-bs-dismiss=\"modal\"
                                                                                aria-label=\"Close\">
                                                                        </button>
                                                                    </div>
                                                                    <div class=\"modal-body text-start\">
                                                                        <p class=\"text-start\">
                                                                            {{ 'admin.product.copy__confirm_message'|trans }}</p>
                                                                    </div>
                                                                    <div class=\"modal-footer\">
                                                                        <button class=\"btn btn-ec-sub\" type=\"button\"
                                                                                data-bs-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}
                                                                        </button>
                                                                        <a
                                                                                href=\"{{ url('admin_product_product_copy', {'id' : Product.id}) }}\"
                                                                                class=\"btn btn-ec-conversion\"
                                                                                data-confirm=\"false\"
                                                                                {{ csrf_token_for_anchor() }}
                                                                                data-method=\"post\">
                                                                            {{ 'admin.common.copy'|trans }}
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    {% endfor %}

                                    </tbody>
                                </table>
                            </div>
                            {% if pagination.totalItemCount > 0 %}
                                <div class=\"row justify-content-md-center mb-4 pb-4\">
                                    {% include \"@admin/pager.twig\" with { 'pages' : pagination.paginationData, 'routes' : 'admin_product_page' } %}
                                </div>
                            {% endif %}
                        </div>
                    </form>
                {% elseif has_errors %}
                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">{{ 'admin.common.search_invalid_condition'|trans }}</div>
                            <div class=\"text-center text-muted\">{{ 'admin.common.search_try_change_condition'|trans }}</div>
                        </div>
                    </div>
                {% else %}
                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">{{ 'admin.common.search_no_result'|trans }}</div>
                            <div class=\"text-center text-muted\">{{ 'admin.common.search_try_change_condition'|trans }}</div>
                            <div class=\"text-center text-muted\">{{ 'admin.common.search_try_advanced_search'|trans }}</div>
                        </div>
                    </div>
                {% endif %}
            </div>

            <!-- 完全に削除の確認モーダル-->
            <div class=\"modal fade\" id=\"bulkDeleteModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"discontinuance\" aria-hidden=\"true\" data-bs-keyboard=\"false\" data-bs-backdrop=\"static\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title fw-bold\">{{ 'admin.product.permanently_delete__confirm_title'|trans }}</h5>
                            <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"modal-body text-start\">
                            <p class=\"text-start\">{{ 'admin.product.permanently_delete__confirm_message'|trans }}</p>
                            <ul id=\"bulkErrors\"></ul>
                            <div class=\"progress\" style=\"display: none\">
                                <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                            </div>
                        </div>
                        <div class=\"modal-footer\">
                            <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}</button>
                            <button class=\"btn btn-ec-delete\" type=\"button\" id=\"bulkDelete\">{{ 'admin.product.permanently_delete' | trans }}</button>
                            <button class=\"btn btn-ec-regular\" id=\"bulkDeleteDone\" style=\"display: none\" type=\"button\" data-bs-dismiss=\"modal\">{{ 'admin.product.permanently_delete__complete'|trans }}</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class=\"modal fade\" id=\"productClassesModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"productClassesModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title fw-bold\">{# Title #}</h5>
                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
                    </button>
                </div>
                <div class=\"modal-body\">
                    {# Append data list #}
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-v-sub\" type=\"button\" data-bs-dismiss=\"modal\">
                        {{ 'admin.common.cancel'|trans }}
                    </button>
                    <a class=\"btn btn-ec-conversion\"
                       href=\"#\">
                        {{ 'admin.product.move_to_product_class'|trans }}
                    </a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /#productClassesModal -->
{% endblock %}

", "@admin/Product/index.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\admin\\Product\\index.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18, "for" => 235, "if" => 238, "include" => 446);
        static $filters = array("escape" => 15, "trans" => 15, "filter" => 235, "raw" => 256, "no_image_product" => 341, "price" => 354, "date_min" => 380);
        static $functions = array("constant" => 103, "url" => 147, "form_widget" => 148, "form_errors" => 156, "form_row" => 240, "include" => 260, "csrf_token_for_anchor" => 276, "path" => 294, "asset" => 341);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'for', 'if', 'include'],
                ['escape', 'trans', 'filter', 'raw', 'no_image_product', 'price', 'date_min'],
                ['constant', 'url', 'form_widget', 'form_errors', 'form_row', 'include', 'csrf_token_for_anchor', 'path', 'asset']
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
