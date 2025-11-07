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

/* Recommend42/Resource/template/admin/index.twig */
class __TwigTemplate_66b793e5fc251afdd250ad0d0b9aeb0c extends Template
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
        // line 13
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Recommend42/Resource/template/admin/index.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Recommend42/Resource/template/admin/index.twig"));

        // line 15
        $context["menus"] = ["content", "plugin_recommend"];
        // line 13
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "Recommend42/Resource/template/admin/index.twig", 13);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 17
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_recommend.admin.index.title"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 18
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_recommend.admin.index.subtitle"), "html", null, true);
        
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

    // line 28
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 29
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.core.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.widget.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js", "admin"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
        \$(function () {
            // 初期表示時のsort noを保持.
            var oldSortNos = [];
            \$('.sortable-item').each(function () {
                oldSortNos.push(this.dataset.sortNo);
            });
            oldSortNos.sort(function (a, b) {
                return a - b;
            }).reverse();
            // 並び替え後にsort noを更新
            var updateSortNo = function () {
                var newSortNos = {};
                var i = 0;
                \$('.sortable-item').each(function () {
                    newSortNos[this.dataset.id] = oldSortNos[i];
                    i++;
                });
                \$.ajax({
                    url: '";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("plugin_recommend_rank_move");
        echo "',
                    type: 'POST',
                    data: newSortNos
                }).always(function () {
                    \$(\".modal-backdrop\").remove();
                });
            };

            // オーバレイ後, 表示順の更新を行う
            var moveSortNo = function () {
                \$('body').append(\$('<div class=\"modal-backdrop show\"></div>'));
                updateSortNo();
            };
            // Drag and Drop
            \$(\".sortable-container\").sortable({
                items: '> .sortable-item',
                cursor: 'move',
                update: function (e, ui) {
                    moveSortNo();
                }
            });
        })
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 78
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 79
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\"><span class=\"normal\">";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_recommend.admin.index.total_num", ["%number%" => (isset($context["total_item_count"]) || array_key_exists("total_item_count", $context) ? $context["total_item_count"] : (function () { throw new RuntimeError('Variable "total_item_count" does not exist.', 83, $this->source); })())]);
        echo "</span></div>
                    <div class=\"card-body p-0\">

                        ";
        // line 86
        if ((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 86, $this->source); })())) {
            // line 87
            echo "                            <ul class=\"list-group list-group-flush sortable-container\">
                                <li class=\"list-group-item\">
                                    <div class=\"row justify-content-around\">
                                        <div class=\"col-auto\"><strong>&nbsp;&nbsp;</strong></div>
                                        <div class=\"col-2\"><strong>";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_recommend.admin.index.col2"), "html", null, true);
            echo "</strong></div>
                                        <div class=\"col-2\"><strong>";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_recommend.admin.index.col3"), "html", null, true);
            echo "</strong></div>
                                        <div class=\"col-auto\"><strong>";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_recommend.admin.index.col4"), "html", null, true);
            echo "</strong></div>
                                        <div class=\"col\"><strong></strong></div>
                                    </div>
                                </li>
                                ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 97, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["RecommendProduct"]) {
                // line 98
                echo "                                    <li class=\"list-group-item sortable-item\" data-sort-no=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "sort_no", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "id", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
                echo "\">
                                        <div class=\"row justify-content-around\">

                                            <div class=\"col-auto d-flex align-items-center\"><i class=\"fa fa-bars text-ec-gray\"></i></div>
                                            <div class=\"col-2\">
                                                <a href=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("plugin_recommend_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "id", [], "any", false, false, true, 103)]), "html", null, true);
                echo "\" >
                                                    <img src=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, true, 104), "mainFileName", [], "any", false, false, true, 104), 104, $this->source)), "save_image"), "html", null, true);
                echo "\" style=\"max-width: 100px;\"/>
                                                </a>
                                            </div>
                                            <div class=\"col-2 d-flex align-items-center\">
                                                <a href=\"";
                // line 108
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("plugin_recommend_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "id", [], "any", false, false, true, 108)]), "html", null, true);
                echo "\" >
                                                    ";
                // line 109
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, true, 109), "name", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
                echo "
                                                    <br>
                                                    ";
                // line 111
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, true, 111), "code_min", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
                echo "
                                                    ";
                // line 112
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, true, 112), "code_min", [], "any", false, false, true, 112) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, true, 112), "code_max", [], "any", false, false, true, 112))) {
                    echo " ～ ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, true, 112), "code_max", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
                    echo "
                                                    ";
                }
                // line 114
                echo "                                                </a>
                                            </div>
                                            <div class=\"col-6 d-flex\">";
                // line 116
                echo twig_nl2br($this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "comment", [], "any", false, false, true, 116), 116, $this->source)));
                echo "</div>

                                            <div class=\"col text-end\">
                                                <a href=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("plugin_recommend_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "id", [], "any", false, false, true, 119)]), "html", null, true);
                echo "\"
                                                   class=\"btn btn-ec-actionIcon me-3 action-edit\"
                                                   data-bs-toggle=\"tooltip\"
                                                   data-bs-placement=\"top\"
                                                   title=\"";
                // line 123
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.edit"), "html", null, true);
                echo "\"><i
                                                            class=\"fa fa-pencil fa-lg text-secondary\"></i></a>
                                                <a
                                                        class=\"btn btn-ec-actionIcon me-3\"
                                                        data-bs-toggle=\"modal\"
                                                        data-bs-target=\"#confirmModal-";
                // line 128
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "id", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
                echo "\"
                                                        data-bs-tooltip=\"tooltip\"
                                                        data-bs-placement=\"top\"
                                                        title=\"";
                // line 131
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\"><i
                                                            class=\"fa fa-close fa-lg text-secondary\"></i></a>
                                            </div>

                                            <div class=\"modal fade\" id=\"confirmModal-";
                // line 135
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "id", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
                echo "\" tabindex=\"-1\"
                                                 role=\"dialog\"
                                                 aria-labelledby=\"confirmModal-";
                // line 137
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "id", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog\" role=\"document\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <h5 class=\"modal-title font-weight-bold\">
                                                                ";
                // line 142
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_recommend.admin.index.delete.confirm"), "html", null, true);
                echo "</h5>
                                                            <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                        </div>
                                                        <div class=\"modal-body text-start\">
                                                            <p class=\"text-start\">
                                                                ";
                // line 147
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_recommend.admin.index.delete.confirm"), "html", null, true);
                echo "</p>
                                                        </div>
                                                        <div class=\"modal-footer\">
                                                            <button class=\"btn btn-ec-sub\" type=\"button\"
                                                                    data-bs-dismiss=\"modal\">";
                // line 151
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.cancel"), "html", null, true);
                echo "
                                                            </button>
                                                            <a href=\"";
                // line 153
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("plugin_recommend_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "id", [], "any", false, false, true, 153)]), "html", null, true);
                echo "\" class=\"btn btn-ec-delete\" data-confirm=\"false\" ";
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo " data-method=\"delete\">
                                                                ";
                // line 154
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.delete"), "html", null, true);
                echo "
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['RecommendProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            echo "                            </ul>
                        ";
        }
        // line 166
        echo "                    </div><!-- /.box -->
                </div><!-- /.col -->

                <p>";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_recommend.admin.notice"), "html", null, true);
        echo "</p>
            </div>

            <div class=\"card rounded border-0\">
                <div class=\"card-body p-4\">
                    <div class=\"text-center\">
                        <a href=\"";
        // line 175
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("plugin_recommend_new");
        echo "\" class=\"btn btn-ec-regular pl-4 pr-4\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_recommend.admin.new"), "html", null, true);
        echo "</a>
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
        return "Recommend42/Resource/template/admin/index.twig";
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
        return array (  425 => 175,  416 => 169,  411 => 166,  407 => 164,  391 => 154,  385 => 153,  380 => 151,  373 => 147,  365 => 142,  357 => 137,  352 => 135,  345 => 131,  339 => 128,  331 => 123,  324 => 119,  318 => 116,  314 => 114,  307 => 112,  303 => 111,  298 => 109,  294 => 108,  287 => 104,  283 => 103,  272 => 98,  268 => 97,  261 => 93,  257 => 92,  253 => 91,  247 => 87,  245 => 86,  239 => 83,  233 => 79,  223 => 78,  189 => 53,  165 => 32,  161 => 31,  157 => 30,  152 => 29,  142 => 28,  127 => 21,  117 => 20,  98 => 18,  79 => 17,  68 => 13,  66 => 15,  41 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 * This file is part of the Recommend Product plugin
 *
 * Copyright (C) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
#}
{#
[コンテンツ]-[おすすめ商品]-[一覧・検索]画面
#}

{% extends '@admin/default_frame.twig' %}

{% set menus = ['content', 'plugin_recommend'] %}

{% block title %}{{ 'plugin_recommend.admin.index.title'|trans }}{% endblock %}
{% block sub_title %}{{ 'plugin_recommend.admin.index.subtitle'|trans }}{% endblock %}

{% block stylesheet %}
    <style type=\"text/css\">
        .list-group-item:hover {
            z-index: inherit;
        }
    </style>
{% endblock stylesheet %}

{% block javascript %}
    <script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.core.min.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.widget.min.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js', 'admin') }}\"></script>

    <script type=\"text/javascript\">
        \$(function () {
            // 初期表示時のsort noを保持.
            var oldSortNos = [];
            \$('.sortable-item').each(function () {
                oldSortNos.push(this.dataset.sortNo);
            });
            oldSortNos.sort(function (a, b) {
                return a - b;
            }).reverse();
            // 並び替え後にsort noを更新
            var updateSortNo = function () {
                var newSortNos = {};
                var i = 0;
                \$('.sortable-item').each(function () {
                    newSortNos[this.dataset.id] = oldSortNos[i];
                    i++;
                });
                \$.ajax({
                    url: '{{ url('plugin_recommend_rank_move') }}',
                    type: 'POST',
                    data: newSortNos
                }).always(function () {
                    \$(\".modal-backdrop\").remove();
                });
            };

            // オーバレイ後, 表示順の更新を行う
            var moveSortNo = function () {
                \$('body').append(\$('<div class=\"modal-backdrop show\"></div>'));
                updateSortNo();
            };
            // Drag and Drop
            \$(\".sortable-container\").sortable({
                items: '> .sortable-item',
                cursor: 'move',
                update: function (e, ui) {
                    moveSortNo();
                }
            });
        })
    </script>
{% endblock javascript %}

{% block main %}
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\"><span class=\"normal\">{{ 'plugin_recommend.admin.index.total_num'|trans({'%number%' : total_item_count})|raw }}</span></div>
                    <div class=\"card-body p-0\">

                        {% if pagination %}
                            <ul class=\"list-group list-group-flush sortable-container\">
                                <li class=\"list-group-item\">
                                    <div class=\"row justify-content-around\">
                                        <div class=\"col-auto\"><strong>&nbsp;&nbsp;</strong></div>
                                        <div class=\"col-2\"><strong>{{ 'plugin_recommend.admin.index.col2'|trans }}</strong></div>
                                        <div class=\"col-2\"><strong>{{ 'plugin_recommend.admin.index.col3'|trans }}</strong></div>
                                        <div class=\"col-auto\"><strong>{{ 'plugin_recommend.admin.index.col4'|trans }}</strong></div>
                                        <div class=\"col\"><strong></strong></div>
                                    </div>
                                </li>
                                {% for RecommendProduct in pagination %}
                                    <li class=\"list-group-item sortable-item\" data-sort-no=\"{{ RecommendProduct.sort_no }}\" data-id=\"{{ RecommendProduct.id }}\">
                                        <div class=\"row justify-content-around\">

                                            <div class=\"col-auto d-flex align-items-center\"><i class=\"fa fa-bars text-ec-gray\"></i></div>
                                            <div class=\"col-2\">
                                                <a href=\"{{ url('plugin_recommend_edit', { id : RecommendProduct.id }) }}\" >
                                                    <img src=\"{{ asset(RecommendProduct.Product.mainFileName|no_image_product, 'save_image') }}\" style=\"max-width: 100px;\"/>
                                                </a>
                                            </div>
                                            <div class=\"col-2 d-flex align-items-center\">
                                                <a href=\"{{ url('plugin_recommend_edit', { id : RecommendProduct.id }) }}\" >
                                                    {{ RecommendProduct.Product.name }}
                                                    <br>
                                                    {{ RecommendProduct.Product.code_min }}
                                                    {% if RecommendProduct.Product.code_min != RecommendProduct.Product.code_max %} ～ {{ RecommendProduct.Product.code_max }}
                                                    {% endif %}
                                                </a>
                                            </div>
                                            <div class=\"col-6 d-flex\">{{ RecommendProduct.comment|raw|purify|nl2br }}</div>

                                            <div class=\"col text-end\">
                                                <a href=\"{{ url('plugin_recommend_edit', { id : RecommendProduct.id }) }}\"
                                                   class=\"btn btn-ec-actionIcon me-3 action-edit\"
                                                   data-bs-toggle=\"tooltip\"
                                                   data-bs-placement=\"top\"
                                                   title=\"{{ 'admin.common.edit'|trans }}\"><i
                                                            class=\"fa fa-pencil fa-lg text-secondary\"></i></a>
                                                <a
                                                        class=\"btn btn-ec-actionIcon me-3\"
                                                        data-bs-toggle=\"modal\"
                                                        data-bs-target=\"#confirmModal-{{ RecommendProduct.id }}\"
                                                        data-bs-tooltip=\"tooltip\"
                                                        data-bs-placement=\"top\"
                                                        title=\"{{ 'admin.common.delete'|trans }}\"><i
                                                            class=\"fa fa-close fa-lg text-secondary\"></i></a>
                                            </div>

                                            <div class=\"modal fade\" id=\"confirmModal-{{ RecommendProduct.id }}\" tabindex=\"-1\"
                                                 role=\"dialog\"
                                                 aria-labelledby=\"confirmModal-{{ RecommendProduct.id }}\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog\" role=\"document\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <h5 class=\"modal-title font-weight-bold\">
                                                                {{ 'plugin_recommend.admin.index.delete.confirm'|trans }}</h5>
                                                            <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                        </div>
                                                        <div class=\"modal-body text-start\">
                                                            <p class=\"text-start\">
                                                                {{ 'plugin_recommend.admin.index.delete.confirm'|trans }}</p>
                                                        </div>
                                                        <div class=\"modal-footer\">
                                                            <button class=\"btn btn-ec-sub\" type=\"button\"
                                                                    data-bs-dismiss=\"modal\">{{ 'common.cancel'|trans }}
                                                            </button>
                                                            <a href=\"{{ url('plugin_recommend_delete', {'id' : RecommendProduct.id}) }}\" class=\"btn btn-ec-delete\" data-confirm=\"false\" {{ csrf_token_for_anchor() }} data-method=\"delete\">
                                                                {{ 'common.delete'|trans }}
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                {% endfor %}
                            </ul>
                        {% endif %}
                    </div><!-- /.box -->
                </div><!-- /.col -->

                <p>{{'plugin_recommend.admin.notice'|trans}}</p>
            </div>

            <div class=\"card rounded border-0\">
                <div class=\"card-body p-4\">
                    <div class=\"text-center\">
                        <a href=\"{{ url('plugin_recommend_new') }}\" class=\"btn btn-ec-regular pl-4 pr-4\">{{ 'plugin_recommend.admin.new'|trans }}</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
{% endblock %}
", "Recommend42/Resource/template/admin/index.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\Recommend42\\Resource\\template\\admin\\index.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 15, "if" => 86, "for" => 97);
        static $filters = array("escape" => 17, "trans" => 17, "raw" => 83, "no_image_product" => 104, "nl2br" => 116, "purify" => 116);
        static $functions = array("asset" => 29, "url" => 53, "csrf_token_for_anchor" => 153);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'trans', 'raw', 'no_image_product', 'nl2br', 'purify'],
                ['asset', 'url', 'csrf_token_for_anchor']
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
