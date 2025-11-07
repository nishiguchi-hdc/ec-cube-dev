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

/* @admin/Product/class_category.twig */
class __TwigTemplate_d87ea9669820458c94cfdab988adfed2 extends Template
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
            'stylesheet' => [$this, 'block_stylesheet'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Product/class_category.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Product/class_category.twig"));

        // line 13
        $context["menus"] = ["product", "class_name"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Product/class_category.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category_management"), "html", null, true);
        
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
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 21
        echo "    <style type=\"text/css\">
        .list-group-item:hover {
            z-index: inherit;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 27
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 28
        echo "    <script type=\"text/javascript\">
        \$(function() {
            // 初期表示時のsort noを保持.
            var oldSortNos = [];
            var sortable = \$('.sortable-item');
            sortable.each(function() {
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
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_class_category_sort_no_move");
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
                items.find('a').removeClass('disabled');
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
            sortable.on('click', 'a.action-up', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                if (current.prev().hasClass('sortable-item')) {
                    current.prev().before(current);
                    moveSortNo();
                }
            });
            // Down
            sortable.on('click', 'a.action-down', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                if (current.next().hasClass('sortable-item')) {
                    current.next().after(current);
                    moveSortNo();
                }
            });

            sortable.on('click', 'a.action-edit', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                current.find('.mode-view').addClass('d-none');
                current.find('.mode-edit').removeClass('d-none');
            });
            sortable.on('click', 'button.action-edit-cancel', function(e) {
                location.href = \"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_class_category", ["class_name_id" => twig_get_attribute($this->env, $this->source, (isset($context["ClassName"]) || array_key_exists("ClassName", $context) ? $context["ClassName"] : (function () { throw new RuntimeError('Variable "ClassName" does not exist.', 102, $this->source); })()), "id", [], "any", false, false, true, 102)]), "html", null, true);
        echo "\";
            });
            sortable.find('.is-invalid').each(function(e) {
                var current = \$(this).parents('li');
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

    // line 124
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 125
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <div class=\"row\">
                            <div class=\"col\"><span class=\"card-title\">";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_name"), "html", null, true);
        echo "</span></div>
                        </div>
                    </div>
                    <div id=\"ex-class_category\" class=\"card-body\">
                        <div class=\"row mb-2\">
                            <div class=\"col-auto\"><span>";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_name"), "html", null, true);
        echo "</span></div>
                            <div class=\"col-auto\"><span>";
        // line 137
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["ClassName"]) || array_key_exists("ClassName", $context) ? $context["ClassName"] : (function () { throw new RuntimeError('Variable "ClassName" does not exist.', 137, $this->source); })()), "name", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
        echo "</span></div>
                        </div>
                        <div class=\"row mb-2\">
                            <div class=\"col-auto\"><span>";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_name__backend_name"), "html", null, true);
        echo "</span></div>
                            <div class=\"col-auto\"><span>";
        // line 141
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["ClassName"]) || array_key_exists("ClassName", $context) ? $context["ClassName"] : (function () { throw new RuntimeError('Variable "ClassName" does not exist.', 141, $this->source); })()), "backend_name", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
        echo "</span></div>
                        </div>
                    </div>
                </div>
                <div class=\"c-outsideBlock\">
                    <div class=\"c-outsideBlock__contents mb-2\">
                        <div class=\"row\">
                            <div class=\"col-12 text-right\">
                                <div class=\"btn-group\" role=\"group\">
                                    <a class=\"btn btn-ec-regular\" href=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_class_category_export", ["class_name_id" => twig_get_attribute($this->env, $this->source, (isset($context["ClassName"]) || array_key_exists("ClassName", $context) ? $context["ClassName"] : (function () { throw new RuntimeError('Variable "ClassName" does not exist.', 150, $this->source); })()), "id", [], "any", false, false, true, 150)]), "html", null, true);
        echo "\">
                                        <i class=\"fa fa-cloud-download mr-1 text-secondary\"></i>
                                        <span>";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_download"), "html", null, true);
        echo "</span>
                                    </a>
                                    <a class=\"btn btn-ec-regular\" href=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_csv", ["id" => twig_constant("\\Eccube\\Entity\\Master\\CsvType::CSV_TYPE_CLASS_CATEGORY")]), "html", null, true);
        echo "\">
                                        <i class=\"fa fa-cog mr-1 text-secondary\"></i>
                                        <span>";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv_setting"), "html", null, true);
        echo "</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\"><span class=\"card-title\">";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category"), "html", null, true);
        echo "</span></div>
                    <div id=\"ex-class_category-edit\" class=\"card-body p-0\">
                        <div class=\"card rounded border-0\">

                            <ul class=\"list-group list-group-flush sortable-container\">
                                <li class=\"list-group-item\">
                                    <form role=\"form\" class=\"row\" name=\"form1\" id=\"form1\" method=\"post\" action=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_class_category", ["class_name_id" => twig_get_attribute($this->env, $this->source, (isset($context["ClassName"]) || array_key_exists("ClassName", $context) ? $context["ClassName"] : (function () { throw new RuntimeError('Variable "ClassName" does not exist.', 170, $this->source); })()), "id", [], "any", false, false, true, 170)]), "html", null, true);
        echo "\">
                                        <div class=\"col-auto align-self-center\">
                                            <span>";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category_name__short"), "html", null, true);
        echo "</span>
                                            <span class=\"badge bg-primary ms-1\">";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                        </div>
                                        <div class=\"col-3 me-2\">
                                            ";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "_token", [], "any", false, false, true, 176), 176, $this->source), 'widget');
        echo "
                                            ";
        // line 177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), "name", [], "any", false, false, true, 177), 177, $this->source), 'widget');
        echo "
                                            ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "name", [], "any", false, false, true, 178), 178, $this->source), 'errors');
        echo "
                                        </div>
                                        <div class=\"col-auto align-self-center\"><span>";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category__backend_name"), "html", null, true);
        echo "</span></div>
                                        <div class=\"col-3\">
                                            ";
        // line 182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "backend_name", [], "any", false, false, true, 182), 182, $this->source), 'widget');
        echo "
                                            ";
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "backend_name", [], "any", false, false, true, 183), 183, $this->source), 'errors');
        echo "
                                        </div>
                                        <div class=\"col-auto\">
                                            <button class=\"btn btn-ec-regular\" type=\"submit\">";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
        echo "</button>
                                        </div>
                                    </form>
                                </li>
                                <li class=\"list-group-item\">
                                    <div class=\"row\">
                                        <div class=\"col-auto\"><strong>&nbsp;</strong></div>
                                        <div class=\"col-auto\"><strong>";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.id"), "html", null, true);
        echo "</strong></div>
                                        <div class=\"col-1\"><strong>";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category"), "html", null, true);
        echo "</strong></div>
                                    </div>
                                </li>
                                ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ClassCategories"]) || array_key_exists("ClassCategories", $context) ? $context["ClassCategories"] : (function () { throw new RuntimeError('Variable "ClassCategories" does not exist.', 197, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["ClassCategory"]) {
            // line 198
            echo "                                    <li id=\"ex-class_category-";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "id", [], "any", false, false, true, 198), 198, $this->source), "html", null, true);
            echo "\" class=\"list-group-item sortable-item\" data-classname-id=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "ClassName", [], "any", false, false, true, 198), "id", [], "any", false, false, true, 198), 198, $this->source), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "id", [], "any", false, false, true, 198), 198, $this->source), "html", null, true);
            echo "\" data-sort-no=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "sortNo", [], "any", false, false, true, 198), 198, $this->source), "html", null, true);
            echo "\">
                                        <div class=\"row justify-content-around mode-view\">
                                            <div class=\"col-auto d-flex align-items-center\"><i class=\"fa fa-bars text-ec-gray\"></i></div>
                                            <div class=\"col-auto d-flex align-items-center\">";
            // line 201
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "id", [], "any", false, false, true, 201), 201, $this->source), "html", null, true);
            echo "</div>
                                            <div class=\"col d-flex align-items-center\">";
            // line 202
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "name", [], "any", false, false, true, 202), 202, $this->source), "html", null, true);
            echo " ［";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category__backend_name"), "html", null, true);
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__colon"), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "backend_name", [], "any", false, false, true, 202), 202, $this->source), "html", null, true);
            echo "］</div>
                                            <div class=\"col-auto text-end\">
                                                <a class=\"btn btn-ec-actionIcon me-2 action-up ";
            // line 204
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 204)) {
                echo "disabled";
            }
            echo "\" href=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.up"), "html", null, true);
            echo "\">
                                                    <i class=\"fa fa-arrow-up fa-lg text-secondary\"></i>
                                                </a>
                                                <a class=\"btn btn-ec-actionIcon me-2 action-down ";
            // line 207
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 207)) {
                echo "disabled";
            }
            echo "\" href=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.down"), "html", null, true);
            echo "\">
                                                    <i class=\"fa fa-arrow-down fa-lg text-secondary\"></i>
                                                </a>
                                                <a class=\"btn btn-ec-actionIcon me-2 action-edit\" href=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            // line 210
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.edit"), "html", null, true);
            echo "\">
                                                    <i class=\"fa fa-pencil fa-lg text-secondary\"></i>
                                                </a>
                                                <a class=\"btn btn-ec-actionIcon me-2 action-visible\" href=\"";
            // line 213
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_class_category_visibility", ["class_name_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "ClassName", [], "any", false, false, true, 213), "id", [], "any", false, false, true, 213), "id" => twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "id", [], "any", false, false, true, 213)]), "html", null, true);
            echo "\"
                                                   data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            // line 214
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "visible", [], "any", false, false, true, 214)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.to_hide")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.to_show"))), "html", null, true);
            echo "\"
                                                   data-confirm=\"false\" data-method=\"put\" ";
            // line 215
            echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
            echo " >
                                                    <i class=\"fa fa-toggle-";
            // line 216
            echo ((twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "visible", [], "any", false, false, true, 216)) ? ("on") : ("off"));
            echo " fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                </a>
                                                <div class=\"d-inline-block me-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            // line 218
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
            echo "\">
                                                    <a class=\"btn btn-ec-actionIcon\" data-bs-toggle=\"modal\" data-bs-target=\"#DeleteModal\"
                                                       data-url=\"";
            // line 220
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_class_category_delete", ["class_name_id" => twig_get_attribute($this->env, $this->source, (isset($context["ClassName"]) || array_key_exists("ClassName", $context) ? $context["ClassName"] : (function () { throw new RuntimeError('Variable "ClassName" does not exist.', 220, $this->source); })()), "id", [], "any", false, false, true, 220), "id" => twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "id", [], "any", false, false, true, 220)]), "html", null, true);
            echo "\"
                                                       data-message=\"";
            // line 221
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "name", [], "any", false, false, true, 221)]), "html", null, true);
            echo "\">
                                                        <i class=\"fa fa-close fa-lg text-secondary\"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <form class=\"row d-none mode-edit\" method=\"post\" action=\"";
            // line 227
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_class_category_edit", ["class_name_id" => twig_get_attribute($this->env, $this->source, (isset($context["ClassName"]) || array_key_exists("ClassName", $context) ? $context["ClassName"] : (function () { throw new RuntimeError('Variable "ClassName" does not exist.', 227, $this->source); })()), "id", [], "any", false, false, true, 227), "id" => twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "id", [], "any", false, false, true, 227)]), "html", null, true);
            echo "\">
                                            ";
            // line 228
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 228, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "id", [], "any", false, false, true, 228), [], "array", false, false, true, 228), "_token", [], "any", false, false, true, 228), 228, $this->source), 'widget');
            echo "
                                            <div class=\"col-3 me-2\">
                                                ";
            // line 230
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 230, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "id", [], "any", false, false, true, 230), [], "array", false, false, true, 230), "name", [], "any", false, false, true, 230), 230, $this->source), 'widget', ["attr" => ["data-origin-value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 230, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "id", [], "any", false, false, true, 230), [], "array", false, false, true, 230), "name", [], "any", false, false, true, 230), "vars", [], "any", false, false, true, 230), "value", [], "any", false, false, true, 230)]]);
            echo "
                                                ";
            // line 231
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 231, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "id", [], "any", false, false, true, 231), [], "array", false, false, true, 231), "name", [], "any", false, false, true, 231), 231, $this->source), 'errors');
            echo "
                                            </div>
                                            <div class=\"col-auto align-self-center\"><span>";
            // line 233
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category__backend_name"), "html", null, true);
            echo "</span></div>
                                            <div class=\"col-auto align-items-center\">
                                                ";
            // line 235
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 235, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "id", [], "any", false, false, true, 235), [], "array", false, false, true, 235), "backend_name", [], "any", false, false, true, 235), 235, $this->source), 'widget', ["attr" => ["data-origin-value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 235, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "id", [], "any", false, false, true, 235), [], "array", false, false, true, 235), "backend_name", [], "any", false, false, true, 235), "vars", [], "any", false, false, true, 235), "value", [], "any", false, false, true, 235)]]);
            echo "
                                                ";
            // line 236
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 236, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "id", [], "any", false, false, true, 236), [], "array", false, false, true, 236), "backend_name", [], "any", false, false, true, 236), 236, $this->source), 'errors');
            echo "
                                            </div>
                                            ";
            // line 238
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 238, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "id", [], "any", false, false, true, 238), [], "array", false, false, true, 238), "visible", [], "any", false, false, true, 238), 238, $this->source), 'widget', ["attr" => ["class" => "d-none"]]);
            echo "
                                            <div class=\"col-auto align-items-center\">
                                                <button class=\"btn btn-ec-conversion\" type=\"submit\">";
            // line 240
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.decision"), "html", null, true);
            echo "</button>
                                            </div>
                                            <div class=\"col-auto align-items-center\">
                                                <button class=\"btn btn-ec-sub action-edit-cancel\" type=\"button\">";
            // line 243
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
            echo "</button>
                                            </div>
                                        </form>
                                    </li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ClassCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 248
        echo "                            </ul>
                            <!-- 削除モーダル -->
                            <div class=\"modal fade\" id=\"DeleteModal\" tabindex=\"-1\" role=\"dialog\"
                                 aria-labelledby=\"DeleteModal\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title fw-bold\">
                                                ";
        // line 256
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
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "
                                            </button>
                                            <a class=\"btn btn-ec-delete\" href=\"#\" ";
        // line 269
        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
        echo "
                                               data-method=\"delete\" data-confirm=\"false\">
                                                ";
        // line 271
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
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_description"), "html", null, true);
        echo "</p>
            </div>
        </div>
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"";
        // line 288
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_class_name");
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_management"), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\"></div>
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
        return "@admin/Product/class_category.twig";
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
        return array (  641 => 289,  637 => 288,  626 => 280,  614 => 271,  609 => 269,  604 => 267,  590 => 256,  580 => 248,  561 => 243,  555 => 240,  550 => 238,  545 => 236,  541 => 235,  536 => 233,  531 => 231,  527 => 230,  522 => 228,  518 => 227,  509 => 221,  505 => 220,  500 => 218,  495 => 216,  491 => 215,  487 => 214,  483 => 213,  477 => 210,  467 => 207,  457 => 204,  448 => 202,  444 => 201,  431 => 198,  414 => 197,  408 => 194,  404 => 193,  394 => 186,  388 => 183,  384 => 182,  379 => 180,  374 => 178,  370 => 177,  366 => 176,  360 => 173,  356 => 172,  351 => 170,  342 => 164,  331 => 156,  326 => 154,  321 => 152,  316 => 150,  304 => 141,  300 => 140,  294 => 137,  290 => 136,  282 => 131,  274 => 125,  264 => 124,  233 => 102,  176 => 48,  154 => 28,  144 => 27,  129 => 21,  119 => 20,  100 => 16,  81 => 15,  70 => 11,  68 => 18,  66 => 13,  41 => 11,);
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

{% set menus = ['product', 'class_name'] %}

{% block title %}{{ 'admin.product.class_category_management'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.product.product_management'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block stylesheet %}
    <style type=\"text/css\">
        .list-group-item:hover {
            z-index: inherit;
        }
    </style>
{% endblock stylesheet %}
{% block javascript %}
    <script type=\"text/javascript\">
        \$(function() {
            // 初期表示時のsort noを保持.
            var oldSortNos = [];
            var sortable = \$('.sortable-item');
            sortable.each(function() {
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
                    url: '{{ url('admin_product_class_category_sort_no_move') }}',
                    type: 'POST',
                    data: newSortNos
                }).always(function() {
                    \$(\".modal-backdrop\").remove();
                });
            };
            // 最初と最後の↑↓を再描画
            var redrawDisableAllows = function() {
                var items = \$('.sortable-item');
                items.find('a').removeClass('disabled');
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
            sortable.on('click', 'a.action-up', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                if (current.prev().hasClass('sortable-item')) {
                    current.prev().before(current);
                    moveSortNo();
                }
            });
            // Down
            sortable.on('click', 'a.action-down', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                if (current.next().hasClass('sortable-item')) {
                    current.next().after(current);
                    moveSortNo();
                }
            });

            sortable.on('click', 'a.action-edit', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                current.find('.mode-view').addClass('d-none');
                current.find('.mode-edit').removeClass('d-none');
            });
            sortable.on('click', 'button.action-edit-cancel', function(e) {
                location.href = \"{{ url('admin_product_class_category', {'class_name_id': ClassName.id}) }}\";
            });
            sortable.find('.is-invalid').each(function(e) {
                var current = \$(this).parents('li');
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
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <div class=\"row\">
                            <div class=\"col\"><span class=\"card-title\">{{ 'admin.product.class_name'|trans }}</span></div>
                        </div>
                    </div>
                    <div id=\"ex-class_category\" class=\"card-body\">
                        <div class=\"row mb-2\">
                            <div class=\"col-auto\"><span>{{ 'admin.product.class_name'|trans }}</span></div>
                            <div class=\"col-auto\"><span>{{ ClassName.name }}</span></div>
                        </div>
                        <div class=\"row mb-2\">
                            <div class=\"col-auto\"><span>{{ 'admin.product.class_name__backend_name'|trans }}</span></div>
                            <div class=\"col-auto\"><span>{{ ClassName.backend_name }}</span></div>
                        </div>
                    </div>
                </div>
                <div class=\"c-outsideBlock\">
                    <div class=\"c-outsideBlock__contents mb-2\">
                        <div class=\"row\">
                            <div class=\"col-12 text-right\">
                                <div class=\"btn-group\" role=\"group\">
                                    <a class=\"btn btn-ec-regular\" href=\"{{ url('admin_product_class_category_export', {'class_name_id':ClassName.id}) }}\">
                                        <i class=\"fa fa-cloud-download mr-1 text-secondary\"></i>
                                        <span>{{ 'admin.common.csv_download'|trans }}</span>
                                    </a>
                                    <a class=\"btn btn-ec-regular\" href=\"{{ url('admin_setting_shop_csv', { id : constant('\\\\Eccube\\\\Entity\\\\Master\\\\CsvType::CSV_TYPE_CLASS_CATEGORY') }) }}\">
                                        <i class=\"fa fa-cog mr-1 text-secondary\"></i>
                                        <span>{{ 'admin.setting.shop.csv_setting'|trans }}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\"><span class=\"card-title\">{{ 'admin.product.class_category'|trans }}</span></div>
                    <div id=\"ex-class_category-edit\" class=\"card-body p-0\">
                        <div class=\"card rounded border-0\">

                            <ul class=\"list-group list-group-flush sortable-container\">
                                <li class=\"list-group-item\">
                                    <form role=\"form\" class=\"row\" name=\"form1\" id=\"form1\" method=\"post\" action=\"{{ url('admin_product_class_category', {'class_name_id': ClassName.id}) }}\">
                                        <div class=\"col-auto align-self-center\">
                                            <span>{{ 'admin.product.class_category_name__short'|trans }}</span>
                                            <span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span>
                                        </div>
                                        <div class=\"col-3 me-2\">
                                            {{ form_widget(form._token) }}
                                            {{ form_widget(form.name) }}
                                            {{ form_errors(form.name) }}
                                        </div>
                                        <div class=\"col-auto align-self-center\"><span>{{ 'admin.product.class_category__backend_name'|trans }}</span></div>
                                        <div class=\"col-3\">
                                            {{ form_widget(form.backend_name) }}
                                            {{ form_errors(form.backend_name) }}
                                        </div>
                                        <div class=\"col-auto\">
                                            <button class=\"btn btn-ec-regular\" type=\"submit\">{{ 'admin.common.create__new'|trans }}</button>
                                        </div>
                                    </form>
                                </li>
                                <li class=\"list-group-item\">
                                    <div class=\"row\">
                                        <div class=\"col-auto\"><strong>&nbsp;</strong></div>
                                        <div class=\"col-auto\"><strong>{{ 'admin.common.id'|trans }}</strong></div>
                                        <div class=\"col-1\"><strong>{{ 'admin.product.class_category'|trans }}</strong></div>
                                    </div>
                                </li>
                                {% for ClassCategory in ClassCategories %}
                                    <li id=\"ex-class_category-{{ ClassCategory.id }}\" class=\"list-group-item sortable-item\" data-classname-id=\"{{ ClassCategory.ClassName.id }}\" data-id=\"{{ ClassCategory.id }}\" data-sort-no=\"{{ ClassCategory.sortNo }}\">
                                        <div class=\"row justify-content-around mode-view\">
                                            <div class=\"col-auto d-flex align-items-center\"><i class=\"fa fa-bars text-ec-gray\"></i></div>
                                            <div class=\"col-auto d-flex align-items-center\">{{ ClassCategory.id }}</div>
                                            <div class=\"col d-flex align-items-center\">{{ ClassCategory.name }} ［{{ 'admin.product.class_category__backend_name'|trans }}{{ 'admin.common.separator__colon'|trans }}{{ ClassCategory.backend_name }}］</div>
                                            <div class=\"col-auto text-end\">
                                                <a class=\"btn btn-ec-actionIcon me-2 action-up {% if loop.first %}disabled{% endif %}\" href=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'admin.common.up'|trans }}\">
                                                    <i class=\"fa fa-arrow-up fa-lg text-secondary\"></i>
                                                </a>
                                                <a class=\"btn btn-ec-actionIcon me-2 action-down {% if loop.last %}disabled{% endif %}\" href=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'admin.common.down'|trans }}\">
                                                    <i class=\"fa fa-arrow-down fa-lg text-secondary\"></i>
                                                </a>
                                                <a class=\"btn btn-ec-actionIcon me-2 action-edit\" href=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'admin.common.edit'|trans }}\">
                                                    <i class=\"fa fa-pencil fa-lg text-secondary\"></i>
                                                </a>
                                                <a class=\"btn btn-ec-actionIcon me-2 action-visible\" href=\"{{ url('admin_product_class_category_visibility', {'class_name_id': ClassCategory.ClassName.id, 'id': ClassCategory.id}) }}\"
                                                   data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ ClassCategory.visible ? 'admin.common.to_hide'|trans : 'admin.common.to_show'|trans }}\"
                                                   data-confirm=\"false\" data-method=\"put\" {{ csrf_token_for_anchor() }} >
                                                    <i class=\"fa fa-toggle-{{ ClassCategory.visible ? 'on' : 'off' }} fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                </a>
                                                <div class=\"d-inline-block me-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'admin.common.delete'|trans }}\">
                                                    <a class=\"btn btn-ec-actionIcon\" data-bs-toggle=\"modal\" data-bs-target=\"#DeleteModal\"
                                                       data-url=\"{{ url('admin_product_class_category_delete', {'class_name_id' : ClassName.id, 'id': ClassCategory.id}) }}\"
                                                       data-message=\"{{ 'admin.common.delete_modal__message'|trans({ \"%name%\" : ClassCategory.name }) }}\">
                                                        <i class=\"fa fa-close fa-lg text-secondary\"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <form class=\"row d-none mode-edit\" method=\"post\" action=\"{{ url('admin_product_class_category_edit', {'class_name_id': ClassName.id, 'id': ClassCategory.id}) }}\">
                                            {{ form_widget(forms[ClassCategory.id]._token) }}
                                            <div class=\"col-3 me-2\">
                                                {{ form_widget(forms[ClassCategory.id].name, {'attr': {'data-origin-value': forms[ClassCategory.id].name.vars.value}}) }}
                                                {{ form_errors(forms[ClassCategory.id].name) }}
                                            </div>
                                            <div class=\"col-auto align-self-center\"><span>{{ 'admin.product.class_category__backend_name'|trans }}</span></div>
                                            <div class=\"col-auto align-items-center\">
                                                {{ form_widget(forms[ClassCategory.id].backend_name, {'attr': {'data-origin-value': forms[ClassCategory.id].backend_name.vars.value}}) }}
                                                {{ form_errors(forms[ClassCategory.id].backend_name) }}
                                            </div>
                                            {{ form_widget(forms[ClassCategory.id].visible, {'attr': {'class': 'd-none'}}) }}
                                            <div class=\"col-auto align-items-center\">
                                                <button class=\"btn btn-ec-conversion\" type=\"submit\">{{ 'admin.common.decision'|trans }}</button>
                                            </div>
                                            <div class=\"col-auto align-items-center\">
                                                <button class=\"btn btn-ec-sub action-edit-cancel\" type=\"button\">{{ 'admin.common.cancel'|trans }}</button>
                                            </div>
                                        </form>
                                    </li>
                                {% endfor %}
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
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"{{ url('admin_product_class_name') }}\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>{{ 'admin.product.class_management'|trans }}</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\"></div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "@admin/Product/class_category.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\admin\\Product\\class_category.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18, "for" => 197, "if" => 204);
        static $filters = array("escape" => 15, "trans" => 15);
        static $functions = array("url" => 48, "constant" => 154, "form_widget" => 176, "form_errors" => 178, "csrf_token_for_anchor" => 215);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'for', 'if'],
                ['escape', 'trans'],
                ['url', 'constant', 'form_widget', 'form_errors', 'csrf_token_for_anchor']
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
