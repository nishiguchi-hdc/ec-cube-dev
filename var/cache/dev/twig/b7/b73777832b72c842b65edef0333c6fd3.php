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

/* @admin/Product/category.twig */
class __TwigTemplate_0177becfdc1da062f1a94b80c00621ab extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Product/category.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Product/category.twig"));

        // line 13
        $context["menus"] = ["product", "class_category"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Product/category.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category_management"), "html", null, true);
        
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
        \$(function() {
            // 初期表示時のsort noを保持.
            var oldSortNos = [];
            \$('.sortable-item').each(function() {
                oldSortNos.push(this.dataset.sortNo);
            });
            oldSortNos.sort(function(a, b) {
                return a - b;
            }).reverse();
            // 並び替え後にsort noを更新
            var updateSortNo = function() {
                var newSortNos = {};
                var i = 0;
                \$('.sortable-item').each(function() {
                    newSortNos[this.dataset.id] = oldSortNos[i];
                    i++;
                });
                \$.ajax({
                    url: '";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_sort_no_move");
        echo "',
                    type: 'POST',
                    data: newSortNos
                }).always(function() {
                    \$(\".modal-backdrop\").remove();
                });
            };
            // 最初と最後の↑↓を再描画
            var redrawDisableAllows = function() {
                var items = \$('.sortable-item');
                items.find('a.action-up').removeClass('disabled');
                items.find('a.action-down').removeClass('disabled');
                items.first().find('a.action-up').addClass('disabled');
                items.last().find('a.action-down').addClass('disabled');
            };
            // オーバレイ後, 表示順の更新を行う
            var moveSortNo = function() {
                \$('body').append(\$('<div class=\"modal-backdrop show\"></div>'));
                updateSortNo();
                redrawDisableAllows();
            };
            // Drag and Drop
            \$('.sortable-container').sortable({
                items: '> .sortable-item',
                cursor: 'move',
                update: function(e, ui) {
                    moveSortNo();
                }
            });
            // Up
            \$('.sortable-item').on('click', 'a.action-up', function(e) {
                e.preventDefault();
                var current = \$(this).parents(\"li\");
                if (current.prev().hasClass('sortable-item')) {
                    current.prev().before(current);
                    moveSortNo();
                }
            });
            // Down
            \$('.sortable-item').on('click', 'a.action-down', function(e) {
                e.preventDefault();
                var current = \$(this).parents(\"li\");
                if (current.next().hasClass('sortable-item')) {
                    current.next().after(current);
                    moveSortNo();
                }
            });

            var groupItem = \$('.list-group-item');
            groupItem.on('click', 'a.action-edit', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                current.find('.mode-view').addClass('d-none');
                current.find('.mode-edit').removeClass('d-none');
            });

            groupItem.on('click', 'button.action-edit-cancel', function(e) {
                location.href = \"";
        // line 97
        if (twig_get_attribute($this->env, $this->source, (isset($context["TargetCategory"]) || array_key_exists("TargetCategory", $context) ? $context["TargetCategory"] : (function () { throw new RuntimeError('Variable "TargetCategory" does not exist.', 97, $this->source); })()), "id", [], "any", false, false, true, 97)) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["TargetCategory"]) || array_key_exists("TargetCategory", $context) ? $context["TargetCategory"] : (function () { throw new RuntimeError('Variable "TargetCategory" does not exist.', 97, $this->source); })()), "id", [], "any", false, false, true, 97)]), "html", null, true);
        } elseif ((isset($context["Parent"]) || array_key_exists("Parent", $context) ? $context["Parent"] : (function () { throw new RuntimeError('Variable "Parent" does not exist.', 97, $this->source); })())) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_show", ["parent_id" => twig_get_attribute($this->env, $this->source, (isset($context["Parent"]) || array_key_exists("Parent", $context) ? $context["Parent"] : (function () { throw new RuntimeError('Variable "Parent" does not exist.', 97, $this->source); })()), "id", [], "any", false, false, true, 97)]), "html", null, true);
        } else {
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category");
        }
        echo "\";
            });

            groupItem.find('.is-invalid').each(function(e) {
                e.preventDefault();
                var current = \$(this).parents(\"li\");
                current.find('.mode-view').addClass('d-none');
                current.find('.mode-edit').removeClass('d-none');
            });

            // 削除モーダルのhrefとmessageの変更
            \$('#DeleteModal').on('shown.bs.modal', function(event) {
                var target = \$(event.relatedTarget);
                // hrefの変更
                \$(this).find('[data-method=\"delete\"]').attr('href', target.data('url'));

                // messageの変更
                \$(this).find('p.modal-message').text(target.data('message'));
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 120
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 121
        echo "    <div class=\"c-outsideBlock\">
        <div class=\"c-outsideBlock__contents mb-2\">
            <div class=\"row\">
                <div class=\"col-6\">
                    <nav aria-label=\"breadcrumb\" role=\"navigation\">
                        <ol class=\"breadcrumb mb-2 p-0\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category");
        echo "\">
                                    ";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category_all"), "html", null, true);
        echo "
                                </a>
                            </li>
                            ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["TargetCategory"]) || array_key_exists("TargetCategory", $context) ? $context["TargetCategory"] : (function () { throw new RuntimeError('Variable "TargetCategory" does not exist.', 132, $this->source); })()), "path", [], "any", false, false, true, 132));
        foreach ($context['_seq'] as $context["_key"] => $context["ParentCategory"]) {
            // line 133
            echo "                                ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["ParentCategory"], "id", [], "any", false, false, true, 133))) {
                // line 134
                echo "                                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                        <a href=\"";
                // line 135
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_show", ["parent_id" => twig_get_attribute($this->env, $this->source, $context["ParentCategory"], "id", [], "any", false, false, true, 135)]), "html", null, true);
                echo "\">
                                            ";
                // line 136
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ParentCategory"], "name", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
                echo "
                                        </a>
                                    </li>
                                ";
            }
            // line 140
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ParentCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "                        </ol>
                    </nav>
                </div>
                <div class=\"col-6 text-end\">
                    <div class=\"btn-group\" role=\"group\">
                        <a class=\"btn btn-ec-regular\" href=\"";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_export");
        echo "\">
                            <i class=\"fa fa-cloud-download me-1 text-secondary\"></i>
                            <span>";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_download"), "html", null, true);
        echo "</span>
                        </a>
                        <a class=\"btn btn-ec-regular\" href=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_csv", ["id" => twig_constant("\\Eccube\\Entity\\Master\\CsvType::CSV_TYPE_CATEGORY")]), "html", null, true);
        echo "\">
                            <i class=\"fa fa-cog me-1 text-secondary\"></i>
                            <span>";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv_setting"), "html", null, true);
        echo "</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div id=\"ex-primaryCol\" class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <div class=\"card rounded border-0\">
                            <ul class=\"list-group list-group-flush sortable-container\">
                                <li class=\"list-group-item\">
                                    <form role=\"form\" name=\"form1\" id=\"form1\" method=\"post\"
                                          action=\"";
        // line 168
        if (twig_get_attribute($this->env, $this->source, (isset($context["TargetCategory"]) || array_key_exists("TargetCategory", $context) ? $context["TargetCategory"] : (function () { throw new RuntimeError('Variable "TargetCategory" does not exist.', 168, $this->source); })()), "id", [], "any", false, false, true, 168)) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_category_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["TargetCategory"]) || array_key_exists("TargetCategory", $context) ? $context["TargetCategory"] : (function () { throw new RuntimeError('Variable "TargetCategory" does not exist.', 168, $this->source); })()), "id", [], "any", false, false, true, 168)]), "html", null, true);
        } elseif ((isset($context["Parent"]) || array_key_exists("Parent", $context) ? $context["Parent"] : (function () { throw new RuntimeError('Variable "Parent" does not exist.', 168, $this->source); })())) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_show", ["parent_id" => twig_get_attribute($this->env, $this->source, (isset($context["Parent"]) || array_key_exists("Parent", $context) ? $context["Parent"] : (function () { throw new RuntimeError('Variable "Parent" does not exist.', 168, $this->source); })()), "id", [], "any", false, false, true, 168)]), "html", null, true);
        } else {
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category");
        }
        echo "\"
                                          enctype=\"multipart/form-data\">
                                        ";
        // line 170
        if ((twig_get_attribute($this->env, $this->source, (isset($context["TargetCategory"]) || array_key_exists("TargetCategory", $context) ? $context["TargetCategory"] : (function () { throw new RuntimeError('Variable "TargetCategory" does not exist.', 170, $this->source); })()), "hierarchy", [], "any", false, false, true, 170) <= twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 170, $this->source); })()), "eccube_category_nest_level", [], "any", false, false, true, 170))) {
            // line 171
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "_token", [], "any", false, false, true, 171), 171, $this->source), 'widget');
            echo "
                                            <div class=\"row mb-3\">
                                                <div class=\"col-auto\">
                                                    ";
            // line 174
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "name", [], "any", false, false, true, 174), 174, $this->source), 'widget');
            echo "
                                                    ";
            // line 175
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 175, $this->source); })()), "name", [], "any", false, false, true, 175), 175, $this->source), 'errors');
            echo "
                                                </div>
                                                <div class=\"col-auto\">
                                                    <button class=\"btn btn-ec-regular\" type=\"submit\">
                                                        ";
            // line 179
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
            echo "
                                                    </button>
                                                </div>
                                            </div>
                                            ";
            // line 184
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 184), "eccube_form_options", [], "any", false, false, true, 184), "auto_render", [], "any", false, false, true, 184); }));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 185
                echo "                                                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 185), "eccube_form_options", [], "any", false, false, true, 185), "form_theme", [], "any", false, false, true, 185)) {
                    // line 186
                    echo "                                                    ";
                    $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 186), "eccube_form_options", [], "any", false, false, true, 186), "form_theme", [], "any", false, false, true, 186)], true);
                    // line 187
                    echo "                                                    ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 187, $this->source), 'row');
                    echo "
                                                ";
                } else {
                    // line 189
                    echo "                                                    <div class=\"row mb-3\">
                                                        <div class=\"col-3\">
                                                            <span>";
                    // line 191
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 191), "label", [], "any", false, false, true, 191), 191, $this->source)), "html", null, true);
                    echo "</span>
                                                        </div>
                                                        <div class=\"col\">
                                                            ";
                    // line 194
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 194, $this->source), 'widget');
                    echo "
                                                            ";
                    // line 195
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 195, $this->source), 'errors');
                    echo "
                                                        </div>
                                                    </div>
                                                ";
                }
                // line 199
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 200
            echo "                                        ";
        }
        // line 201
        echo "                                    </form>
                                </li>
                                <li class=\"list-group-item\">
                                    <div class=\"row\">
                                        <div class=\"col-auto\"><strong>&nbsp;</strong></div>
                                        <div class=\"col-auto\"><strong>";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.id"), "html", null, true);
        echo "</strong></div>
                                        <div class=\"col-2\"><strong>";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category"), "html", null, true);
        echo "</strong></div>
                                    </div>
                                </li>
                                ";
        // line 210
        if ((twig_length_filter($this->env, (isset($context["Categories"]) || array_key_exists("Categories", $context) ? $context["Categories"] : (function () { throw new RuntimeError('Variable "Categories" does not exist.', 210, $this->source); })())) > 0)) {
            // line 211
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Categories"]) || array_key_exists("Categories", $context) ? $context["Categories"] : (function () { throw new RuntimeError('Variable "Categories" does not exist.', 211, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
                // line 212
                echo "                                        <li id=\"ex-category-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, true, 212), 212, $this->source), "html", null, true);
                echo "\" class=\"list-group-item sortable-item\" data-id=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, true, 212), 212, $this->source), "html", null, true);
                echo "\" data-sort-no=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Category"], "sort_no", [], "any", false, false, true, 212), 212, $this->source), "html", null, true);
                echo "\">
                                            ";
                // line 213
                if ((twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, true, 213) != twig_get_attribute($this->env, $this->source, (isset($context["TargetCategory"]) || array_key_exists("TargetCategory", $context) ? $context["TargetCategory"] : (function () { throw new RuntimeError('Variable "TargetCategory" does not exist.', 213, $this->source); })()), "id", [], "any", false, false, true, 213))) {
                    // line 214
                    echo "                                                <div class=\"row justify-content-around mode-view ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["error_forms"]) || array_key_exists("error_forms", $context) ? $context["error_forms"] : (function () { throw new RuntimeError('Variable "error_forms" does not exist.', 214, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, true, 214), [], "array", false, false, true, 214), "count", [], "any", false, false, true, 214)) {
                        echo " d-none ";
                    }
                    echo "\">
                                                    <div class=\"col-auto d-flex align-items-center\"><i class=\"fa fa-bars text-ec-gray\"></i></div>
                                                    <div class=\"col-auto d-flex align-items-center\">";
                    // line 216
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, true, 216), 216, $this->source), "html", null, true);
                    echo "</div>
                                                    <div class=\"col d-flex align-items-center\">
                                                        <a href=\"";
                    // line 218
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_show", ["parent_id" => twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, true, 218)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Category"], "name", [], "any", false, false, true, 218), 218, $this->source), "html", null, true);
                    echo "</a>
                                                    </div>
                                                    <div class=\"col-auto text-end\">
                                                        <a class=\"btn btn-ec-actionIcon action-up me-2 ";
                    // line 221
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 221)) {
                        echo " disabled ";
                    }
                    echo "\" href=\"\"
                                                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                           title=\"";
                    // line 223
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.up"), "html", null, true);
                    echo "\">
                                                            <i class=\"fa fa-arrow-up fa-lg text-secondary\"></i>
                                                        </a>
                                                        <a class=\"btn btn-ec-actionIcon action-down me-2 ";
                    // line 226
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 226)) {
                        echo " disabled ";
                    }
                    echo "\" href=\"\"
                                                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                           title=\"";
                    // line 228
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.down"), "html", null, true);
                    echo "\">
                                                            <i class=\"fa fa-arrow-down fa-lg text-secondary\"></i>
                                                        </a>
                                                        <a class=\"btn btn-ec-actionIcon me-2 action-edit\"
                                                           href=\"";
                    // line 232
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, true, 232)]), "html", null, true);
                    echo "\"
                                                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                           title=\"";
                    // line 234
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.edit"), "html", null, true);
                    echo "\">
                                                            <i class=\"fa fa-pencil fa-lg text-secondary\"></i>
                                                        </a>
                                                        <div class=\"d-inline-block me-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                             title=\"";
                    // line 238
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                    echo "\">
                                                            <a class=\"btn btn-ec-actionIcon";
                    // line 239
                    if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "Children", [], "any", false, false, true, 239)) > 0) || twig_get_attribute($this->env, $this->source, $context["Category"], "hasProductCategories", [], "any", false, false, true, 239))) {
                        echo " disabled";
                    }
                    echo "\"
                                                               data-bs-toggle=\"modal\" data-bs-target=\"#DeleteModal\"
                                                               data-url=\"";
                    // line 241
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, true, 241)]), "html", null, true);
                    echo "\"
                                                               data-message=\"";
                    // line 242
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["Category"], "name", [], "any", false, false, true, 242)]), "html", null, true);
                    echo "\">
                                                                <i class=\"fa fa-close fa-lg text-secondary\"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form class=\"row  ";
                    // line 248
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["error_forms"]) || array_key_exists("error_forms", $context) ? $context["error_forms"] : (function () { throw new RuntimeError('Variable "error_forms" does not exist.', 248, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, true, 248), [], "array", false, false, true, 248), "count", [], "any", false, false, true, 248) == 0)) {
                        echo " d-none ";
                    }
                    echo " mode-edit\" method=\"POST\" action=\"";
                    ((((isset($context["Parent"]) || array_key_exists("Parent", $context) ? $context["Parent"] : (function () { throw new RuntimeError('Variable "Parent" does not exist.', 248, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["Parent"]) || array_key_exists("Parent", $context) ? $context["Parent"] : (function () { throw new RuntimeError('Variable "Parent" does not exist.', 248, $this->source); })()), "id", [], "any", false, false, true, 248))) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_show", ["parent_id" => twig_get_attribute($this->env, $this->source, (isset($context["Parent"]) || array_key_exists("Parent", $context) ? $context["Parent"] : (function () { throw new RuntimeError('Variable "Parent" does not exist.', 248, $this->source); })()), "id", [], "any", false, false, true, 248)]), "html", null, true))) : (print ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category"))));
                    echo "\" enctype=\"multipart/form-data\">
                                                    ";
                    // line 249
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 249, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, true, 249), [], "array", false, false, true, 249), "_token", [], "any", false, false, true, 249), 249, $this->source), 'widget');
                    echo "
                                                    <div class=\"col-auto align-items-center\">
                                                        ";
                    // line 251
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 251, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, true, 251), [], "array", false, false, true, 251), "name", [], "any", false, false, true, 251), 251, $this->source), 'widget', ["attr" => ["data-origin-value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 251, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, true, 251), [], "array", false, false, true, 251), "name", [], "any", false, false, true, 251), "vars", [], "any", false, false, true, 251), "value", [], "any", false, false, true, 251)]]);
                    echo "
                                                        ";
                    // line 252
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 252, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, true, 252), [], "array", false, false, true, 252), "name", [], "any", false, false, true, 252), 252, $this->source), 'errors');
                    echo "
                                                    </div>
                                                    <div class=\"col-auto align-items-center\">
                                                        <button class=\"btn btn-ec-conversion\" type=\"submit\">";
                    // line 255
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.decision"), "html", null, true);
                    echo "</button>
                                                    </div>
                                                    <div class=\"col-auto align-items-center\">
                                                        <button class=\"btn btn-ec-sub action-edit-cancel\" type=\"button\">";
                    // line 258
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                    echo "</button>
                                                    </div>
                                                    ";
                    // line 261
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 261, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, true, 261), [], "array", false, false, true, 261), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 261), "eccube_form_options", [], "any", false, false, true, 261), "auto_render", [], "any", false, false, true, 261); }));
                    foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                        // line 262
                        echo "                                                    <div class=\"col-auto align-items-center\" style=\"width:90%; padding-top: 10px;\">
                                                        <div class=\"row\">
                                                            <div class=\"col-3\">
                                                                <span>";
                        // line 265
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 265), "label", [], "any", false, false, true, 265), 265, $this->source)), "html", null, true);
                        echo "</span>
                                                            </div>
                                                            <div class=\"col-9\">
                                                                ";
                        // line 268
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 268, $this->source), 'widget');
                        echo "
                                                                ";
                        // line 269
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 269, $this->source), 'errors');
                        echo "
                                                            </div>
                                                        </div>
                                                    </div>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 274
                    echo "                                                </form>
                                            ";
                }
                // line 276
                echo "                                        </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 278
            echo "                                ";
        }
        // line 279
        echo "                            </ul>
                            <!-- 削除モーダル -->
                            <div class=\"modal fade\" id=\"DeleteModal\" tabindex=\"-1\" role=\"dialog\"
                                 aria-labelledby=\"DeleteModal\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title fw-bold\">
                                                ";
        // line 287
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
        echo "
                                            </h5>
                                            <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                                            </button>
                                        </div>
                                        <div class=\"modal-body text-start\">
                                            <p class=\"text-start modal-message\"><!-- jsでメッセージを挿入 --></p>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">
                                                ";
        // line 298
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "
                                            </button>
                                            <a class=\"btn btn-ec-delete\" href=\"#\" ";
        // line 300
        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
        echo "
                                               data-method=\"delete\" data-confirm=\"false\">
                                                ";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
        echo "
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p>";
        // line 311
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_description"), "html", null, true);
        echo "</p>
            </div>
        </div>

        ";
        // line 337
        echo "
        <div class=\"c-contentsArea__secondaryCol\">
            <div id=\"ex-secondaryCol\" class=\"c-secondaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <span class=\"card-title\"><a
                                    href=\"";
        // line 343
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category_all"), "html", null, true);
        echo "</a></span>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"c-directoryTree mb-3\">
                            ";
        // line 347
        $macros["renderMacro"] = $this;
        // line 348
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["TopCategories"]) || array_key_exists("TopCategories", $context) ? $context["TopCategories"] : (function () { throw new RuntimeError('Variable "TopCategories" does not exist.', 348, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["TopCategory"]) {
            // line 349
            echo "                                <ul class=\"list-unstyled\">
                                    ";
            // line 350
            echo twig_call_macro($macros["renderMacro"], "macro_tree", [$context["TopCategory"], ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TargetCategory"] ?? null), "Parent", [], "any", false, true, true, 350), "id", [], "any", true, true, true, 350)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TargetCategory"] ?? null), "Parent", [], "any", false, true, true, 350), "id", [], "any", false, false, true, 350), 350, $this->source), null)) : (null)), 0, (isset($context["Ids"]) || array_key_exists("Ids", $context) ? $context["Ids"] : (function () { throw new RuntimeError('Variable "Ids" does not exist.', 350, $this->source); })())], 350, $context, $this->getSourceContext());
            echo "
                                </ul>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['TopCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 353
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 315
    public function macro_tree($__Category__ = null, $__TargetId__ = null, $__level__ = null, $__Ids__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "Category" => $__Category__,
            "TargetId" => $__TargetId__,
            "level" => $__level__,
            "Ids" => $__Ids__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tree"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tree"));

            // line 316
            echo "            ";
            $macros["selfMacro"] = $this;
            // line 317
            echo "            ";
            $context["level"] = ((isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 317, $this->source); })()) + 1);
            // line 318
            echo "            <li>
                <label ";
            // line 319
            if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 319, $this->source); })()), "children", [], "any", false, false, true, 319)) > 0) && !twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 319, $this->source); })()), "id", [], "any", false, false, true, 319), (isset($context["Ids"]) || array_key_exists("Ids", $context) ? $context["Ids"] : (function () { throw new RuntimeError('Variable "Ids" does not exist.', 319, $this->source); })())))) {
                echo "class=\"collapsed\"
                       ";
            }
            // line 320
            echo "data-bs-toggle=\"collapse\"
                       href=\"#directory_category";
            // line 321
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 321, $this->source); })()), "id", [], "any", false, false, true, 321), 321, $this->source), "html", null, true);
            echo "\"
                       aria-expanded=\"";
            // line 322
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 322, $this->source); })()), "id", [], "any", false, false, true, 322), (isset($context["Ids"]) || array_key_exists("Ids", $context) ? $context["Ids"] : (function () { throw new RuntimeError('Variable "Ids" does not exist.', 322, $this->source); })()))) {
                echo "true";
            }
            echo "\"
                       aria-controls=\"directory_category";
            // line 323
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 323, $this->source); })()), "id", [], "any", false, false, true, 323), 323, $this->source), "html", null, true);
            echo "\"></label>
                <span>
                    <a href=\"";
            // line 325
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_show", ["parent_id" => twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 325, $this->source); })()), "id", [], "any", false, false, true, 325)]), "html", null, true);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 325, $this->source); })()), "id", [], "any", false, false, true, 325) == (isset($context["TargetId"]) || array_key_exists("TargetId", $context) ? $context["TargetId"] : (function () { throw new RuntimeError('Variable "TargetId" does not exist.', 325, $this->source); })()))) {
                echo " class=\"fw-bold\"";
            }
            echo ">ID:";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 325, $this->source); })()), "id", [], "any", false, false, true, 325), 325, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 325, $this->source); })()), "name", [], "any", false, false, true, 325), 325, $this->source), "html", null, true);
            echo "
                        (";
            // line 326
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 326, $this->source); })()), "children", [], "any", false, false, true, 326), 326, $this->source)), "html", null, true);
            echo ")</a></span>
                ";
            // line 327
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 327, $this->source); })()), "children", [], "any", false, false, true, 327)) > 0)) {
                // line 328
                echo "                    <ul class=\"collapse list-unstyled ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 328, $this->source); })()), "id", [], "any", false, false, true, 328), (isset($context["Ids"]) || array_key_exists("Ids", $context) ? $context["Ids"] : (function () { throw new RuntimeError('Variable "Ids" does not exist.', 328, $this->source); })()))) {
                    echo "show";
                }
                echo "\"
                        id=\"directory_category";
                // line 329
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 329, $this->source); })()), "id", [], "any", false, false, true, 329), 329, $this->source), "html", null, true);
                echo "\">
                        ";
                // line 330
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 330, $this->source); })()), "children", [], "any", false, false, true, 330));
                foreach ($context['_seq'] as $context["_key"] => $context["ChildCategory"]) {
                    // line 331
                    echo "                            ";
                    echo twig_call_macro($macros["selfMacro"], "macro_tree", [$context["ChildCategory"], (isset($context["TargetId"]) || array_key_exists("TargetId", $context) ? $context["TargetId"] : (function () { throw new RuntimeError('Variable "TargetId" does not exist.', 331, $this->source); })()), (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 331, $this->source); })()), (isset($context["Ids"]) || array_key_exists("Ids", $context) ? $context["Ids"] : (function () { throw new RuntimeError('Variable "Ids" does not exist.', 331, $this->source); })())], 331, $context, $this->getSourceContext());
                    echo "
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ChildCategory'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 333
                echo "                    </ul>
                ";
            }
            // line 335
            echo "            </li>
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
        return "@admin/Product/category.twig";
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
        return array (  853 => 335,  849 => 333,  840 => 331,  836 => 330,  832 => 329,  825 => 328,  823 => 327,  819 => 326,  807 => 325,  802 => 323,  796 => 322,  792 => 321,  789 => 320,  784 => 319,  781 => 318,  778 => 317,  775 => 316,  753 => 315,  737 => 353,  728 => 350,  725 => 349,  720 => 348,  718 => 347,  709 => 343,  701 => 337,  694 => 311,  682 => 302,  677 => 300,  672 => 298,  658 => 287,  648 => 279,  645 => 278,  630 => 276,  626 => 274,  615 => 269,  611 => 268,  605 => 265,  600 => 262,  595 => 261,  590 => 258,  584 => 255,  578 => 252,  574 => 251,  569 => 249,  561 => 248,  552 => 242,  548 => 241,  541 => 239,  537 => 238,  530 => 234,  525 => 232,  518 => 228,  511 => 226,  505 => 223,  498 => 221,  490 => 218,  485 => 216,  477 => 214,  475 => 213,  466 => 212,  448 => 211,  446 => 210,  440 => 207,  436 => 206,  429 => 201,  426 => 200,  420 => 199,  413 => 195,  409 => 194,  403 => 191,  399 => 189,  393 => 187,  390 => 186,  387 => 185,  382 => 184,  375 => 179,  368 => 175,  364 => 174,  357 => 171,  355 => 170,  344 => 168,  325 => 152,  320 => 150,  315 => 148,  310 => 146,  303 => 141,  297 => 140,  290 => 136,  286 => 135,  283 => 134,  280 => 133,  276 => 132,  270 => 129,  266 => 128,  257 => 121,  247 => 120,  209 => 97,  149 => 40,  128 => 21,  118 => 20,  99 => 16,  80 => 15,  69 => 11,  67 => 18,  65 => 13,  40 => 11,);
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

{% set menus = ['product', 'class_category'] %}

{% block title %}{{ 'admin.product.category_management'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.product.product_management'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block javascript %}
    <script>
        \$(function() {
            // 初期表示時のsort noを保持.
            var oldSortNos = [];
            \$('.sortable-item').each(function() {
                oldSortNos.push(this.dataset.sortNo);
            });
            oldSortNos.sort(function(a, b) {
                return a - b;
            }).reverse();
            // 並び替え後にsort noを更新
            var updateSortNo = function() {
                var newSortNos = {};
                var i = 0;
                \$('.sortable-item').each(function() {
                    newSortNos[this.dataset.id] = oldSortNos[i];
                    i++;
                });
                \$.ajax({
                    url: '{{ url('admin_product_category_sort_no_move') }}',
                    type: 'POST',
                    data: newSortNos
                }).always(function() {
                    \$(\".modal-backdrop\").remove();
                });
            };
            // 最初と最後の↑↓を再描画
            var redrawDisableAllows = function() {
                var items = \$('.sortable-item');
                items.find('a.action-up').removeClass('disabled');
                items.find('a.action-down').removeClass('disabled');
                items.first().find('a.action-up').addClass('disabled');
                items.last().find('a.action-down').addClass('disabled');
            };
            // オーバレイ後, 表示順の更新を行う
            var moveSortNo = function() {
                \$('body').append(\$('<div class=\"modal-backdrop show\"></div>'));
                updateSortNo();
                redrawDisableAllows();
            };
            // Drag and Drop
            \$('.sortable-container').sortable({
                items: '> .sortable-item',
                cursor: 'move',
                update: function(e, ui) {
                    moveSortNo();
                }
            });
            // Up
            \$('.sortable-item').on('click', 'a.action-up', function(e) {
                e.preventDefault();
                var current = \$(this).parents(\"li\");
                if (current.prev().hasClass('sortable-item')) {
                    current.prev().before(current);
                    moveSortNo();
                }
            });
            // Down
            \$('.sortable-item').on('click', 'a.action-down', function(e) {
                e.preventDefault();
                var current = \$(this).parents(\"li\");
                if (current.next().hasClass('sortable-item')) {
                    current.next().after(current);
                    moveSortNo();
                }
            });

            var groupItem = \$('.list-group-item');
            groupItem.on('click', 'a.action-edit', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                current.find('.mode-view').addClass('d-none');
                current.find('.mode-edit').removeClass('d-none');
            });

            groupItem.on('click', 'button.action-edit-cancel', function(e) {
                location.href = \"{% if TargetCategory.id %}{{ url('admin_product_category_edit', {id: TargetCategory.id}) }}{% elseif Parent %}{{ url('admin_product_category_show', {'parent_id': Parent.id}) }}{% else %}{{ url('admin_product_category') }}{% endif %}\";
            });

            groupItem.find('.is-invalid').each(function(e) {
                e.preventDefault();
                var current = \$(this).parents(\"li\");
                current.find('.mode-view').addClass('d-none');
                current.find('.mode-edit').removeClass('d-none');
            });

            // 削除モーダルのhrefとmessageの変更
            \$('#DeleteModal').on('shown.bs.modal', function(event) {
                var target = \$(event.relatedTarget);
                // hrefの変更
                \$(this).find('[data-method=\"delete\"]').attr('href', target.data('url'));

                // messageの変更
                \$(this).find('p.modal-message').text(target.data('message'));
            });
        });
    </script>
{% endblock %}

{% block main %}
    <div class=\"c-outsideBlock\">
        <div class=\"c-outsideBlock__contents mb-2\">
            <div class=\"row\">
                <div class=\"col-6\">
                    <nav aria-label=\"breadcrumb\" role=\"navigation\">
                        <ol class=\"breadcrumb mb-2 p-0\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"{{ url('admin_product_category') }}\">
                                    {{ 'admin.product.category_all'|trans }}
                                </a>
                            </li>
                            {% for ParentCategory in TargetCategory.path %}
                                {% if ParentCategory.id is not null %}
                                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                        <a href=\"{{ url('admin_product_category_show', { parent_id : ParentCategory.id }) }}\">
                                            {{ ParentCategory.name }}
                                        </a>
                                    </li>
                                {% endif %}
                            {% endfor %}
                        </ol>
                    </nav>
                </div>
                <div class=\"col-6 text-end\">
                    <div class=\"btn-group\" role=\"group\">
                        <a class=\"btn btn-ec-regular\" href=\"{{ url('admin_product_category_export') }}\">
                            <i class=\"fa fa-cloud-download me-1 text-secondary\"></i>
                            <span>{{ 'admin.common.csv_download'|trans }}</span>
                        </a>
                        <a class=\"btn btn-ec-regular\" href=\"{{ url('admin_setting_shop_csv', { id : constant('\\\\Eccube\\\\Entity\\\\Master\\\\CsvType::CSV_TYPE_CATEGORY') }) }}\">
                            <i class=\"fa fa-cog me-1 text-secondary\"></i>
                            <span>{{ 'admin.setting.shop.csv_setting'|trans }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div id=\"ex-primaryCol\" class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <div class=\"card rounded border-0\">
                            <ul class=\"list-group list-group-flush sortable-container\">
                                <li class=\"list-group-item\">
                                    <form role=\"form\" name=\"form1\" id=\"form1\" method=\"post\"
                                          action=\"{% if TargetCategory.id %}{{ path('admin_product_category_edit', {id: TargetCategory.id}) }}{% elseif Parent %}{{ url('admin_product_category_show', {'parent_id': Parent.id}) }}{% else %}{{ url('admin_product_category') }}{% endif %}\"
                                          enctype=\"multipart/form-data\">
                                        {% if TargetCategory.hierarchy <= eccube_config.eccube_category_nest_level %}
                                            {{ form_widget(form._token) }}
                                            <div class=\"row mb-3\">
                                                <div class=\"col-auto\">
                                                    {{ form_widget(form.name) }}
                                                    {{ form_errors(form.name) }}
                                                </div>
                                                <div class=\"col-auto\">
                                                    <button class=\"btn btn-ec-regular\" type=\"submit\">
                                                        {{ 'admin.common.create__new'|trans }}
                                                    </button>
                                                </div>
                                            </div>
                                            {# エンティティ拡張の自動出力 #}
                                            {% for f in form|filter(f => f.vars.eccube_form_options.auto_render) %}
                                                {% if f.vars.eccube_form_options.form_theme %}
                                                    {% form_theme f f.vars.eccube_form_options.form_theme %}
                                                    {{ form_row(f) }}
                                                {% else %}
                                                    <div class=\"row mb-3\">
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
                                        {% endif %}
                                    </form>
                                </li>
                                <li class=\"list-group-item\">
                                    <div class=\"row\">
                                        <div class=\"col-auto\"><strong>&nbsp;</strong></div>
                                        <div class=\"col-auto\"><strong>{{ 'admin.common.id'|trans }}</strong></div>
                                        <div class=\"col-2\"><strong>{{ 'admin.product.category'|trans }}</strong></div>
                                    </div>
                                </li>
                                {% if Categories|length > 0 %}
                                    {% for Category in Categories %}
                                        <li id=\"ex-category-{{ Category.id }}\" class=\"list-group-item sortable-item\" data-id=\"{{ Category.id }}\" data-sort-no=\"{{ Category.sort_no }}\">
                                            {% if Category.id != TargetCategory.id %}
                                                <div class=\"row justify-content-around mode-view {% if error_forms[Category.id].count %} d-none {% endif %}\">
                                                    <div class=\"col-auto d-flex align-items-center\"><i class=\"fa fa-bars text-ec-gray\"></i></div>
                                                    <div class=\"col-auto d-flex align-items-center\">{{ Category.id }}</div>
                                                    <div class=\"col d-flex align-items-center\">
                                                        <a href=\"{{ url('admin_product_category_show',  { parent_id : Category.id }) }}\">{{ Category.name }}</a>
                                                    </div>
                                                    <div class=\"col-auto text-end\">
                                                        <a class=\"btn btn-ec-actionIcon action-up me-2 {% if loop.first %} disabled {% endif %}\" href=\"\"
                                                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                           title=\"{{ 'admin.common.up'|trans }}\">
                                                            <i class=\"fa fa-arrow-up fa-lg text-secondary\"></i>
                                                        </a>
                                                        <a class=\"btn btn-ec-actionIcon action-down me-2 {% if loop.last %} disabled {% endif %}\" href=\"\"
                                                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                           title=\"{{ 'admin.common.down'|trans }}\">
                                                            <i class=\"fa fa-arrow-down fa-lg text-secondary\"></i>
                                                        </a>
                                                        <a class=\"btn btn-ec-actionIcon me-2 action-edit\"
                                                           href=\"{{ url('admin_product_category_edit', {id: Category.id}) }}\"
                                                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                           title=\"{{ 'admin.common.edit'|trans }}\">
                                                            <i class=\"fa fa-pencil fa-lg text-secondary\"></i>
                                                        </a>
                                                        <div class=\"d-inline-block me-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                             title=\"{{ 'admin.common.delete'|trans }}\">
                                                            <a class=\"btn btn-ec-actionIcon{% if Category.Children|length > 0 or Category.hasProductCategories %} disabled{% endif %}\"
                                                               data-bs-toggle=\"modal\" data-bs-target=\"#DeleteModal\"
                                                               data-url=\"{{ url('admin_product_category_delete', {id: Category.id}) }}\"
                                                               data-message=\"{{ 'admin.common.delete_modal__message'|trans({ \"%name%\" : Category.name }) }}\">
                                                                <i class=\"fa fa-close fa-lg text-secondary\"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form class=\"row  {% if error_forms[Category.id].count == 0 %} d-none {% endif %} mode-edit\" method=\"POST\" action=\"{{ (Parent and Parent.id) ? url('admin_product_category_show', {'parent_id': Parent.id}) : url('admin_product_category') }}\" enctype=\"multipart/form-data\">
                                                    {{ form_widget(forms[Category.id]._token) }}
                                                    <div class=\"col-auto align-items-center\">
                                                        {{ form_widget(forms[Category.id].name, {'attr': {'data-origin-value': forms[Category.id].name.vars.value}}) }}
                                                        {{ form_errors(forms[Category.id].name) }}
                                                    </div>
                                                    <div class=\"col-auto align-items-center\">
                                                        <button class=\"btn btn-ec-conversion\" type=\"submit\">{{ 'admin.common.decision'|trans }}</button>
                                                    </div>
                                                    <div class=\"col-auto align-items-center\">
                                                        <button class=\"btn btn-ec-sub action-edit-cancel\" type=\"button\">{{ 'admin.common.cancel'|trans }}</button>
                                                    </div>
                                                    {# エンティティ拡張の自動出力 #}
                                                    {% for f in forms[Category.id]|filter(f => f.vars.eccube_form_options.auto_render) %}
                                                    <div class=\"col-auto align-items-center\" style=\"width:90%; padding-top: 10px;\">
                                                        <div class=\"row\">
                                                            <div class=\"col-3\">
                                                                <span>{{ f.vars.label|trans }}</span>
                                                            </div>
                                                            <div class=\"col-9\">
                                                                {{ form_widget(f) }}
                                                                {{ form_errors(f) }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {% endfor %}
                                                </form>
                                            {% endif %}
                                        </li>
                                    {% endfor %}
                                {% endif %}
                            </ul>
                            <!-- 削除モーダル -->
                            <div class=\"modal fade\" id=\"DeleteModal\" tabindex=\"-1\" role=\"dialog\"
                                 aria-labelledby=\"DeleteModal\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title fw-bold\">
                                                {{ 'admin.common.delete_modal__title'|trans }}
                                            </h5>
                                            <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                                            </button>
                                        </div>
                                        <div class=\"modal-body text-start\">
                                            <p class=\"text-start modal-message\"><!-- jsでメッセージを挿入 --></p>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">
                                                {{ 'admin.common.cancel'|trans }}
                                            </button>
                                            <a class=\"btn btn-ec-delete\" href=\"#\" {{ csrf_token_for_anchor() }}
                                               data-method=\"delete\" data-confirm=\"false\">
                                                {{ 'admin.common.delete'|trans }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p>{{ 'admin.common.drag_and_drop_description'|trans }}</p>
            </div>
        </div>

        {% macro tree(Category, TargetId, level, Ids) %}
            {% import _self as selfMacro %}
            {% set level = level + 1 %}
            <li>
                <label {% if (Category.children|length > 0) and (Category.id not in Ids) %}class=\"collapsed\"
                       {% endif %}data-bs-toggle=\"collapse\"
                       href=\"#directory_category{{ Category.id }}\"
                       aria-expanded=\"{% if Category.id in Ids %}true{% endif %}\"
                       aria-controls=\"directory_category{{ Category.id }}\"></label>
                <span>
                    <a href=\"{{ url('admin_product_category_show', { parent_id : Category.id }) }}\"{%if (Category.id == TargetId) %} class=\"fw-bold\"{% endif %}>ID:{{ Category.id }} {{ Category.name }}
                        ({{ Category.children|length }})</a></span>
                {% if Category.children|length > 0 %}
                    <ul class=\"collapse list-unstyled {% if Category.id in Ids %}show{% endif %}\"
                        id=\"directory_category{{ Category.id }}\">
                        {% for ChildCategory in Category.children %}
                            {{ selfMacro.tree(ChildCategory, TargetId, level, Ids) }}
                        {% endfor %}
                    </ul>
                {% endif %}
            </li>
        {% endmacro %}

        <div class=\"c-contentsArea__secondaryCol\">
            <div id=\"ex-secondaryCol\" class=\"c-secondaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <span class=\"card-title\"><a
                                    href=\"{{ url('admin_product_category') }}\">{{ 'admin.product.category_all'|trans }}</a></span>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"c-directoryTree mb-3\">
                            {% import _self as renderMacro %}
                            {% for TopCategory in TopCategories %}
                                <ul class=\"list-unstyled\">
                                    {{ renderMacro.tree(TopCategory, TargetCategory.Parent.id | default(null), 0, Ids) }}
                                </ul>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "@admin/Product/category.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\admin\\Product\\category.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18, "if" => 97, "for" => 132, "import" => 347, "macro" => 315);
        static $filters = array("escape" => 15, "trans" => 15, "filter" => 184, "length" => 210, "default" => 350);
        static $functions = array("url" => 40, "constant" => 150, "path" => 168, "form_widget" => 171, "form_errors" => 175, "form_row" => 187, "csrf_token_for_anchor" => 300);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'if', 'for', 'import', 'macro'],
                ['escape', 'trans', 'filter', 'length', 'default'],
                ['url', 'constant', 'path', 'form_widget', 'form_errors', 'form_row', 'csrf_token_for_anchor']
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
