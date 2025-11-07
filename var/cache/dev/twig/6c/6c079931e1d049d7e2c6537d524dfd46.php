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

/* EccubePaymentLite42/Resource/template/admin/Regular/Cycle/index.twig */
class __TwigTemplate_97959c0019aeff679cf1129222125a3d extends Template
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
        // line 1
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/Regular/Cycle/index.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/Regular/Cycle/index.twig"));

        // line 3
        $context["menus"] = ["regular", "cycle"];
        // line 1
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "EccubePaymentLite42/Resource/template/admin/Regular/Cycle/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.title.regular.cycle"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.sub_title.regular.cycle.index"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 9
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.core.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.widget.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function() {
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
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eccube_payment_lite42_admin_regular_cycle_sort_no_move");
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
            \$(\".sortable-container\").sortable({
                items: '> .sortable-item',
                cursor: 'move',
                update: function(e, ui) {
                    moveSortNo();
                }
            });
            // Up
            \$('.sortable-item').on('click', 'a.action-up', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                if (current.prev().hasClass('sortable-item')) {
                    current.prev().before(current);
                    moveSortNo();
                }
            });
            // Down
            \$('.sortable-item').on('click', 'a.action-down', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                if (current.next().hasClass('sortable-item')) {
                    current.next().after(current);
                    moveSortNo();
                }
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

    // line 91
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 92
        echo "    <form name=\"form1\" method=\"post\">
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"d-block mb-3\">
                        <a class=\"btn btn-ec-regular\" href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eccube_payment_lite42_admin_regular_cycle_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
        echo "</a>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-body p-0\">
                            <div class=\"card rounded border-0\">
                                <ul class=\"list-group list-group-flush sortable-container\">
                                    <li class=\"list-group-item\">
                                        <div class=\"row justify-content-between\">
                                            <div class=\"col-2\">
                                                <div class=\"row\">
                                                    <div class=\"col-auto offset-6\">
                                                        <strong>";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.id"), "html", null, true);
        echo "</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-2\"><strong>";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.regular.table_head.regular_cycle"), "html", null, true);
        echo "</strong></div>
                                            <div class=\"col-2\"><strong>";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.regular.table_head.day"), "html", null, true);
        echo "</strong></div>
                                            <div class=\"col-2\"><strong>";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.regular.table_head.week"), "html", null, true);
        echo "</strong></div>
                                            <div class=\"col-2\">&nbsp;</div>
                                        </div>
                                    </li>
                                    ";
        // line 118
        if ((twig_length_filter($this->env, (isset($context["RegularCycles"]) || array_key_exists("RegularCycles", $context) ? $context["RegularCycles"] : (function () { throw new RuntimeError('Variable "RegularCycles" does not exist.', 118, $this->source); })())) > 0)) {
            // line 119
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["RegularCycles"]) || array_key_exists("RegularCycles", $context) ? $context["RegularCycles"] : (function () { throw new RuntimeError('Variable "RegularCycles" does not exist.', 119, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["RegularCycle"]) {
                // line 120
                echo "                                            <li id=\"ex-regular-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularCycle"], "id", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
                echo "\"
                                                class=\"list-group-item sortable-item\"
                                                data-id=\"";
                // line 122
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularCycle"], "id", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
                echo "\"
                                                data-sort-no=\"";
                // line 123
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularCycle"], "sortNo", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
                echo "\">
                                                <div class=\"row justify-content-between align-items-center\">
                                                    <div class=\"col-2\">
                                                        <div class=\"row d-flex\">
                                                            <div class=\"col-6\">
                                                                <i class=\"fa fa-bars text-ec-gray\"></i>
                                                            </div>
                                                            <div class=\"col-auto\">
                                                                ";
                // line 131
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularCycle"], "id", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
                echo "
                                                            </div>
                                                        </div>
                                                        </div>
                                                    <div class=\"col-2\">
                                                        <a href=\"";
                // line 136
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eccube_payment_lite42_admin_regular_cycle_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["RegularCycle"], "id", [], "any", false, false, true, 136)]), "html", null, true);
                echo "\">
                                                            ";
                // line 137
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RegularCycle"], "RegularCycleType", [], "any", false, false, true, 137), "name", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
                echo "
                                                        </a>
                                                    </div>
                                                    <div class=\"col-2 d-flex align-items-center\">
                                                            ";
                // line 141
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularCycle"], "day", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
                echo "
                                                    </div>
                                                    <div class=\"col-2 d-flex align-items-center\">
                                                        ";
                // line 144
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularCycle"], "getWeekName", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
                echo "
                                                    </div>
                                                    <div class=\"col-auto text-end\">
                                                        <a href=\"#\" class=\"btn btn-ec-actionIcon mr-2 action-up ";
                // line 147
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 147)) {
                    echo "disabled";
                }
                echo "\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.up"), "html", null, true);
                echo "\">
                                                            <i class=\"fa fa-arrow-up fa-lg text-secondary\"></i>
                                                        </a>
                                                        <a href=\"#\" class=\"btn btn-ec-actionIcon mr-2 action-down ";
                // line 150
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 150)) {
                    echo "disabled";
                }
                echo "\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.down"), "html", null, true);
                echo "\">
                                                            <i class=\"fa fa-arrow-down fa-lg text-secondary\"></i>
                                                        </a>
                                                        <div class=\"d-inline-block mr-2\" data-tooltip=\"true\" data-placement=\"top\"
                                                             title=\"";
                // line 154
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                            <a class=\"btn btn-ec-actionIcon ";
                // line 155
                if (twig_get_attribute($this->env, $this->source, $context["RegularCycle"], "hasProductClassRegularCycles", [], "any", false, false, true, 155)) {
                    echo " disabled";
                }
                echo "\"
                                                               data-bs-toggle=\"modal\"
                                                                data-bs-target=\"#DeleteModal\"
                                                                data-url=\"";
                // line 158
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eccube_payment_lite42_admin_regular_cycle_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["RegularCycle"], "Id", [], "any", false, false, true, 158)]), "html", null, true);
                echo "\"
                                                                data-message=\"";
                // line 159
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RegularCycle"], "RegularCycleType", [], "any", false, false, true, 159), "name", [], "any", false, false, true, 159)]), "html", null, true);
                echo "\"

                                                            >
                                                                <i class=\"fa fa-close fa-lg\"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['RegularCycle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            echo "                                    ";
        }
        // line 170
        echo "                                </ul>
                                <!-- 削除モーダル -->
                                <div class=\"modal fade\" id=\"DeleteModal\" tabindex=\"-1\" role=\"dialog\"
                                     aria-labelledby=\"DeleteModal\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <h5 class=\"modal-title fw-bold\">
                                                    ";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
        echo "
                                                </h5>
                                                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                            </div>
                                            <div class=\"modal-body text-start\">
                                                <p class=\"text-start modal-message\"><!-- jsでメッセージを挿入 --></p>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">
                                                    ";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "
                                                </button>
                                                <a class=\"btn btn-ec-delete\" href=\"#\" ";
        // line 189
        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
        echo "
                                                   data-method=\"delete\" data-confirm=\"false\">
                                                    ";
        // line 191
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
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_description"), "html", null, true);
        echo "</p>
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
        return "EccubePaymentLite42/Resource/template/admin/Regular/Cycle/index.twig";
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
        return array (  465 => 200,  453 => 191,  448 => 189,  443 => 187,  431 => 178,  421 => 170,  418 => 169,  394 => 159,  390 => 158,  382 => 155,  378 => 154,  367 => 150,  357 => 147,  351 => 144,  345 => 141,  338 => 137,  334 => 136,  326 => 131,  315 => 123,  311 => 122,  305 => 120,  287 => 119,  285 => 118,  278 => 114,  274 => 113,  270 => 112,  263 => 108,  247 => 97,  240 => 92,  230 => 91,  161 => 31,  139 => 12,  135 => 11,  131 => 10,  126 => 9,  116 => 8,  97 => 6,  78 => 5,  67 => 1,  65 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@admin/default_frame.twig' %}

{% set menus = ['regular', 'cycle'] %}

{% block title %}{{ 'gmo_epsilon.admin.title.regular.cycle'|trans }}{% endblock %}
{% block sub_title %}{{ 'gmo_epsilon.admin.sub_title.regular.cycle.index'|trans }}{% endblock %}

{% block javascript %}
    <script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.core.min.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.widget.min.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js', 'admin') }}\"></script>
    <script>
        \$(function() {
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
                    url: '{{ url('eccube_payment_lite42_admin_regular_cycle_sort_no_move') }}',
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
            \$(\".sortable-container\").sortable({
                items: '> .sortable-item',
                cursor: 'move',
                update: function(e, ui) {
                    moveSortNo();
                }
            });
            // Up
            \$('.sortable-item').on('click', 'a.action-up', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                if (current.prev().hasClass('sortable-item')) {
                    current.prev().before(current);
                    moveSortNo();
                }
            });
            // Down
            \$('.sortable-item').on('click', 'a.action-down', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                if (current.next().hasClass('sortable-item')) {
                    current.next().after(current);
                    moveSortNo();
                }
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
    <form name=\"form1\" method=\"post\">
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"d-block mb-3\">
                        <a class=\"btn btn-ec-regular\" href=\"{{ url('eccube_payment_lite42_admin_regular_cycle_new') }}\">{{ 'admin.common.create__new'|trans }}</a>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-body p-0\">
                            <div class=\"card rounded border-0\">
                                <ul class=\"list-group list-group-flush sortable-container\">
                                    <li class=\"list-group-item\">
                                        <div class=\"row justify-content-between\">
                                            <div class=\"col-2\">
                                                <div class=\"row\">
                                                    <div class=\"col-auto offset-6\">
                                                        <strong>{{ 'admin.common.id'|trans }}</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-2\"><strong>{{ 'gmo_epsilon.admin.regular.table_head.regular_cycle'|trans }}</strong></div>
                                            <div class=\"col-2\"><strong>{{ 'gmo_epsilon.admin.regular.table_head.day'|trans }}</strong></div>
                                            <div class=\"col-2\"><strong>{{ 'gmo_epsilon.admin.regular.table_head.week'|trans }}</strong></div>
                                            <div class=\"col-2\">&nbsp;</div>
                                        </div>
                                    </li>
                                    {% if RegularCycles|length > 0 %}
                                        {% for RegularCycle in RegularCycles %}
                                            <li id=\"ex-regular-{{ RegularCycle.id }}\"
                                                class=\"list-group-item sortable-item\"
                                                data-id=\"{{ RegularCycle.id }}\"
                                                data-sort-no=\"{{ RegularCycle.sortNo }}\">
                                                <div class=\"row justify-content-between align-items-center\">
                                                    <div class=\"col-2\">
                                                        <div class=\"row d-flex\">
                                                            <div class=\"col-6\">
                                                                <i class=\"fa fa-bars text-ec-gray\"></i>
                                                            </div>
                                                            <div class=\"col-auto\">
                                                                {{ RegularCycle.id }}
                                                            </div>
                                                        </div>
                                                        </div>
                                                    <div class=\"col-2\">
                                                        <a href=\"{{ url('eccube_payment_lite42_admin_regular_cycle_edit', {id: RegularCycle.id} ) }}\">
                                                            {{ RegularCycle.RegularCycleType.name }}
                                                        </a>
                                                    </div>
                                                    <div class=\"col-2 d-flex align-items-center\">
                                                            {{ RegularCycle.day }}
                                                    </div>
                                                    <div class=\"col-2 d-flex align-items-center\">
                                                        {{ RegularCycle.getWeekName }}
                                                    </div>
                                                    <div class=\"col-auto text-end\">
                                                        <a href=\"#\" class=\"btn btn-ec-actionIcon mr-2 action-up {% if loop.first %}disabled{% endif %}\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'admin.common.up'|trans }}\">
                                                            <i class=\"fa fa-arrow-up fa-lg text-secondary\"></i>
                                                        </a>
                                                        <a href=\"#\" class=\"btn btn-ec-actionIcon mr-2 action-down {% if loop.last %}disabled{% endif %}\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'admin.common.down'|trans }}\">
                                                            <i class=\"fa fa-arrow-down fa-lg text-secondary\"></i>
                                                        </a>
                                                        <div class=\"d-inline-block mr-2\" data-tooltip=\"true\" data-placement=\"top\"
                                                             title=\"{{ 'admin.common.delete'|trans }}\">
                                                            <a class=\"btn btn-ec-actionIcon {% if RegularCycle.hasProductClassRegularCycles %} disabled{% endif %}\"
                                                               data-bs-toggle=\"modal\"
                                                                data-bs-target=\"#DeleteModal\"
                                                                data-url=\"{{ url('eccube_payment_lite42_admin_regular_cycle_delete', {id: RegularCycle.Id} ) }}\"
                                                                data-message=\"{{ 'admin.common.delete_modal__message'|trans({ \"%name%\" : RegularCycle.RegularCycleType.name }) }}\"

                                                            >
                                                                <i class=\"fa fa-close fa-lg\"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
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
        </div>
    </form>

{% endblock %}
", "EccubePaymentLite42/Resource/template/admin/Regular/Cycle/index.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\admin\\Regular\\Cycle\\index.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3, "if" => 118, "for" => 119);
        static $filters = array("escape" => 5, "trans" => 5, "length" => 118);
        static $functions = array("asset" => 9, "url" => 31, "csrf_token_for_anchor" => 189);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'trans', 'length'],
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
