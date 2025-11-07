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

/* AmazonPayV2_42_Bundle/Resource/template/admin/Order/payment_status.twig */
class __TwigTemplate_5ee29b6615f22aa5ffc309397f69b9a9 extends Template
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
        // line 10
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Resource/template/admin/Order/payment_status.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Resource/template/admin/Order/payment_status.twig"));

        // line 12
        $context["menus"] = ["order", "amazon_pay_v2_admin_payment_status"];
        // line 17
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 17, $this->source); })()), ["@admin/Form/bootstrap_4_layout.html.twig"], true);
        // line 10
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "AmazonPayV2_42_Bundle/Resource/template/admin/Order/payment_status.twig", 10);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.payment_status.title"), "html", null, true);
        
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.payment_status.sub_title"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 22
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 23
        echo "    <script>
        \$('#capture_all_check').click(function() {
        var amazon_checkall = \$('#capture_all_check').prop('checked');
        if (amazon_checkall) {
            \$('input[id^=capture_check_]').prop('checked', true);
        } else {
            \$('input[id^=capture_check_]').prop('checked', false);
        }
    });

    \$('#cancel_all_check').click(function() {
        var amazon_checkall = \$('#cancel_all_check').prop('checked');
        if (amazon_checkall) {
            \$('input[id^=cancel_check_]').prop('checked', true);
        } else {
            \$('input[id^=cancel_check_]').prop('checked', false);
        }
    });

    \$('[id^=capture_link_]').click(function(event) {
        event.preventDefault();
        var id = \$(this).attr('id');
        var order_id = id.slice(id.lastIndexOf('_') + 1);

        if (confirm('売上処理を実行します。よろしいですか？')) {
            \$('#amazon_order_id').val(order_id);
            \$('#amazon_request').val('capture');
            \$('#form_bulk').submit();
        }
    });

    \$('[id^=cancel_link_]').click(function(event) {
        event.preventDefault();
        var id = \$(this).attr('id');
        var order_id = id.slice(id.lastIndexOf('_') + 1);

        if (confirm('取消処理を実行します。よろしいですか？')) {
            \$('#amazon_order_id').val(order_id);
            \$('#amazon_request').val('cancel');
            \$('#form_bulk').submit();
        }
    });

    \$('#capture_button').click(function(event) {
        event.preventDefault();
        var isChecked = false;
        \$('input[id^=capture_check_]').each(function() {
            var check = \$(this).prop('checked');
            if (check) {
                isChecked = true;
            }
        });
        if (!isChecked) {
            alert(\"チェックボックスが選択されていません\");
            return false;
        }
        if (confirm('売上処理を実行します。よろしいですか？')) {
            \$('#amazon_request').val('capture');
            \$('#form_bulk').submit();
        }
    });

    \$('#cancel_button').click(function(event) {
        event.preventDefault();
        var isChecked = false;
        \$('input[id^=cancel_check_]').each(function() {
            var check = \$(this).prop('checked');
            if (check) {
                isChecked = true;
            }
        });
        if (!isChecked) {
            alert(\"チェックボックスが選択されていません\");
            return false;
        }
        if (confirm('取消処理を実行します。よろしいですか？')) {
            \$('#amazon_request').val('cancel');
            \$('#form_bulk').submit();
        }
    });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 106
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 107
        echo "    <!--検索条件設定テーブルここから-->
    <div class=\"c-outsideBlock\">
        <form name=\"search_form\" method=\"POST\" action=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("amazon_pay_v2_admin_payment_status");
        echo "\">
            ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 110, $this->source); })()), "_token", [], "any", false, false, true, 110), 110, $this->source), 'widget');
        echo "
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"form-row\">
                            <div class=\"form-group col-12\">
                                <p class=\"col-form-label\">";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.payment_status.search_condition_order_status"), "html", null, true);
        echo "</p>
                                ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 117, $this->source); })()), "OrderStatuses", [], "any", false, false, true, 117), 117, $this->source), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 118, $this->source); })()), "OrderStatuses", [], "any", false, false, true, 118), 118, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"form-row\">
                            <div class=\"form-group col-12\">
                                <p class=\"col-form-label\">";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.payment_status.search_condition_amazon_status"), "html", null, true);
        echo "</p>
                                ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 128, $this->source); })()), "AmazonStatuses", [], "any", false, false, true, 128), 128, $this->source), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 129, $this->source); })()), "AmazonStatuses", [], "any", false, false, true, 129), 129, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row\">
                    <div class=\"mb-4\">
                        <div class=\"col-12\">
                            <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">検索</button>
                            ";
        // line 140
        if ((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 140, $this->source); })())) {
            // line 141
            echo "                                <span class=\"font-weight-bold ml-2\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.payment_status.search_result_count", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 141, $this->source); })()), "totalItemCount", [], "any", false, false, true, 141)]), "html", null, true);
            echo "</span>
                            ";
        }
        // line 143
        echo "                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!--検索条件設定テーブルここまで-->

    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                ";
        // line 154
        if (((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 154, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 154, $this->source); })()), "totalItemCount", [], "any", false, false, true, 154))) {
            // line 155
            echo "                    <div class=\"modal fade\" id=\"confirmBulkModal\" tabindex=\"-1\" role=\"dialog\"
                         aria-labelledby=\"confirmModal\" aria-hidden=\"true\">
                        <div class=\"modal-dialog\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\">";
            // line 160
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.payment_status.bulk_modal_title"), "html", null, true);
            echo "</h5>
                                    <button class=\"btn-close\" type=\"button\" data-dismiss=\"modal\"
                                            aria-label=\"Close\">
                                        <span aria-hidden=\"true\">×</span>
                                    </button>
                                </div>
                                <div class=\"modal-body\">
                                    <p>";
            // line 167
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.payment_status.bulk_modal_body"), "html", null, true);
            echo "</p>
                                </div>
                                <div class=\"modal-footer\">
                                    <button class=\"btn btn-ec-conversion\" data-action=\"execute\" type=\"button\"
                                            data-dismiss=\"modal\">
                                        ";
            // line 172
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.payment_status.bulk_modal_action_exec"), "html", null, true);
            echo "
                                    </button>
                                    <button class=\"btn btn-ec-sub\" data-action=\"cancel\" type=\"button\"
                                            data-dismiss=\"modal\">
                                        ";
            // line 176
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.payment_status.bulk_modal_action_cancel"), "html", null, true);
            echo "
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form id=\"form_bulk\" method=\"POST\" action=\"";
            // line 182
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("amazon_pay_v2_admin_payment_status_request");
            echo "\">
                        <input type=\"hidden\" name=\"amazon_request\" id=\"amazon_request\" value=\"\" />
                        <input type=\"hidden\" name=\"amazon_order_id\" id=\"amazon_order_id\" value=\"\" />
                        <input type=\"hidden\" name=\"";
            // line 185
            echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::TOKEN_NAME"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_constant("Eccube\\Common\\Constant::TOKEN_NAME")), "html", null, true);
            echo "\">
                        <div class=\"row justify-content-between mb-2\">
                            <div class=\"col-12 text-end\">
                                <div class=\"d-inline-block\">
                                    <select class=\"custom-select\" onchange=\"location.href = this.value;\">
                                        ";
            // line 190
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pageMaxis"]) || array_key_exists("pageMaxis", $context) ? $context["pageMaxis"] : (function () { throw new RuntimeError('Variable "pageMaxis" does not exist.', 190, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pageMax"]) {
                // line 191
                echo "                                            <option ";
                if ((twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 191) == (isset($context["page_count"]) || array_key_exists("page_count", $context) ? $context["page_count"] : (function () { throw new RuntimeError('Variable "page_count" does not exist.', 191, $this->source); })()))) {
                    echo " selected ";
                }
                // line 192
                echo "                                                    value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("amazon_pay_v2_admin_payment_status", ["page_no" => 1, "page_count" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 192)]), "html", null, true);
                echo "\">
                                                ";
                // line 193
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.payment_status.display_count", ["%count%" => twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, true, 193), 193, $this->source))]), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMax'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 195
            echo "                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-body p-0\">
                                <table class=\"table table-sm\" id=\"search_result\">
                                    <thead>
                                    <tr>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 204
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.payment_status.col_order_date"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 205
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.payment_status.col_order_no"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 206
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.payment_status.col_order_name"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 207
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.payment_status.col_order_price"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                            <input type=\"checkbox\" id=\"capture_all_check\" name=\"capture\" />
                                            <label for=\"capture_all_check\">";
            // line 210
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.payment_status.col_amazon_order_capture"), "html", null, true);
            echo "</label>
                                            <input type=\"button\" id=\"capture_button\" value=\"実行\" />
                                        </th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                            <input type=\"checkbox\" id=\"cancel_all_check\" name=\"cancel\" />
                                            <label for=\"cancel_all_check\">";
            // line 215
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.payment_status.col_amazon_order_cancel"), "html", null, true);
            echo "</label>
                                            <input type=\"button\" id=\"cancel_button\" value=\"実行\" />
                                        </th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 218
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.payment_status.col_amazon_order_reference_id"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 219
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.payment_status.col_amazon_order_status"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 220
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.payment_status.col_order_staus"), "html", null, true);
            echo "</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
            // line 224
            $context["cssClassAmazonStatus"] = [twig_constant("Plugin\\AmazonPayV2_42_Bundle\\Entity\\Master\\AmazonStatus::AUTHORI") => "badge-ec-blue", twig_constant("Plugin\\AmazonPayV2_42_Bundle\\Entity\\Master\\AmazonStatus::CAPTURE") => "badge-ec-green", twig_constant("Plugin\\AmazonPayV2_42_Bundle\\Entity\\Master\\AmazonStatus::CANCEL") => "badge-ec-glay"];
            // line 230
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 230, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["Order"]) {
                // line 231
                echo "                                        <tr>
                                            <td class=\"align-middle text-start\" id=\"order_date--";
                // line 232
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 232), 232, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "order_date", [], "any", false, false, true, 232), 232, $this->source)), "html", null, true);
                echo "</td>
                                            <td class=\"align-middle text-center\" id=\"id--";
                // line 233
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 233), 233, $this->source), "html", null, true);
                echo "\"><a class=\"action-edit\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 233)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "order_no", [], "any", false, false, true, 233), 233, $this->source), "html", null, true);
                echo "</a></td>
                                            <td class=\"align-middle text-center\" id=\"name--";
                // line 234
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 234), 234, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "name01", [], "any", false, false, true, 234), 234, $this->source), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "name02", [], "any", false, false, true, 234), 234, $this->source), "html", null, true);
                echo "</td>
                                            <td class=\"align-middle text-end\" id=\"payment_total--";
                // line 235
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 235), 235, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "payment_total", [], "any", false, false, true, 235), 235, $this->source)), "html", null, true);
                echo "</td>
                                            <td class=\"align-middle text-center\">
                                            ";
                // line 237
                if (twig_get_attribute($this->env, $this->source, $context["Order"], "AmazonPayV2AmazonStatus", [], "any", false, false, true, 237)) {
                    // line 238
                    echo "                                                ";
                    if (((twig_get_attribute($this->env, $this->source, $context["Order"], "payment_total", [], "any", false, false, true, 238) <= twig_get_attribute($this->env, $this->source, $context["Order"], "AmazonPayV2SumCaptureAmount", [], "any", false, false, true, 238)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "AmazonPayV2AmazonStatus", [], "any", false, false, true, 238), "id", [], "any", false, false, true, 238) == twig_constant("Plugin\\AmazonPayV2_42_Bundle\\Entity\\Master\\AmazonStatus::CANCEL")))) {
                        // line 239
                        echo "                                                    -
                                                ";
                    } elseif (((twig_get_attribute($this->env, $this->source,                     // line 240
$context["Order"], "payment_total", [], "any", false, false, true, 240) - twig_get_attribute($this->env, $this->source, $context["Order"], "AmazonPayV2SumAuthoriAmount", [], "any", false, false, true, 240)) > twig_get_attribute($this->env, $this->source, $context["Order"], "AmazonPayV2BillableAmount", [], "any", false, false, true, 240))) {
                        // line 241
                        echo "                                                    <span class=\"text-danger\">金額超過</span>
                                                ";
                    } else {
                        // line 243
                        echo "                                                    ";
                        if (((twig_get_attribute($this->env, $this->source, $context["Order"], "payment_total", [], "any", false, false, true, 243) < twig_get_attribute($this->env, $this->source, $context["Order"], "AmazonPayV2SumAuthoriAmount", [], "any", false, false, true, 243)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "AmazonPayV2AmazonStatus", [], "any", false, false, true, 243), "id", [], "any", false, false, true, 243) == twig_constant("Plugin\\AmazonPayV2_42_Bundle\\Entity\\Master\\AmazonStatus::AUTHORI")))) {
                            // line 244
                            echo "                                                        <a href=\"?\" id=\"capture_link_";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 244), 244, $this->source), "html", null, true);
                            echo "\">金額変更</a><br/>
                                                        <span style=\"color:#0000FF;\">-";
                            // line 245
                            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["Order"], "AmazonPayV2SumAuthoriAmount", [], "any", false, false, true, 245) - twig_get_attribute($this->env, $this->source, $context["Order"], "payment_total", [], "any", false, false, true, 245)), "html", null, true);
                            echo "円</span>
                                                    ";
                        } elseif (((twig_get_attribute($this->env, $this->source,                         // line 246
$context["Order"], "payment_total", [], "any", false, false, true, 246) > twig_get_attribute($this->env, $this->source, $context["Order"], "AmazonPayV2SumAuthoriAmount", [], "any", false, false, true, 246)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "AmazonPayV2AmazonStatus", [], "any", false, false, true, 246), "id", [], "any", false, false, true, 246) == twig_constant("Plugin\\AmazonPayV2_42_Bundle\\Entity\\Master\\AmazonStatus::AUTHORI")))) {
                            // line 247
                            echo "                                                        <a href=\"\" id=\"capture_link_";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 247), 247, $this->source), "html", null, true);
                            echo "\">金額変更</a><br/>
                                                        <span style=\"color:#FF0000;\">+";
                            // line 248
                            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["Order"], "payment_total", [], "any", false, false, true, 248) - twig_get_attribute($this->env, $this->source, $context["Order"], "AmazonPayV2SumAuthoriAmount", [], "any", false, false, true, 248)), "html", null, true);
                            echo "円</span>
                                                    ";
                        } elseif (((twig_get_attribute($this->env, $this->source,                         // line 249
$context["Order"], "payment_total", [], "any", false, false, true, 249) > twig_get_attribute($this->env, $this->source, $context["Order"], "AmazonPayV2SumAuthoriAmount", [], "any", false, false, true, 249)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "AmazonPayV2AmazonStatus", [], "any", false, false, true, 249), "id", [], "any", false, false, true, 249) == twig_constant("Plugin\\AmazonPayV2_42_Bundle\\Entity\\Master\\AmazonStatus::CAPTURE")))) {
                            // line 250
                            echo "                                                        <a href=\"\" id=\"capture_link_";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 250), 250, $this->source), "html", null, true);
                            echo "\">金額変更</a><br/>
                                                        <span style=\"color:#FF0000;\">+";
                            // line 251
                            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["Order"], "payment_total", [], "any", false, false, true, 251) - twig_get_attribute($this->env, $this->source, $context["Order"], "AmazonPayV2SumCaptureAmount", [], "any", false, false, true, 251)), "html", null, true);
                            echo "円</span>
                                                    ";
                        } else {
                            // line 253
                            echo "                                                        <input type=\"checkbox\" name=\"capture_id[]\" id=\"capture_check_";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 253), 253, $this->source), "html", null, true);
                            echo "\" value=\"";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 253), 253, $this->source), "html", null, true);
                            echo "\"/><label for=\"capture_check_";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 253), 253, $this->source), "html", null, true);
                            echo "\">一括</label><br/>
                                                        <a href=\"\" id=\"capture_link_";
                            // line 254
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 254), 254, $this->source), "html", null, true);
                            echo "\">個別売上</a>
                                                    ";
                        }
                        // line 256
                        echo "                                                ";
                    }
                    // line 257
                    echo "                                                </td>
                                                <td class=\"align-middle text-center\">
                                                ";
                    // line 259
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "AmazonPayV2AmazonStatus", [], "any", false, false, true, 259), "id", [], "any", false, false, true, 259) == twig_constant("Plugin\\AmazonPayV2_42_Bundle\\Entity\\Master\\AmazonStatus::CANCEL"))) {
                        // line 260
                        echo "                                                    -
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 261
$context["Order"], "AmazonPayV2AmazonStatus", [], "any", false, false, true, 261), "id", [], "any", false, false, true, 261) == twig_constant("Plugin\\AmazonPayV2_42_Bundle\\Entity\\Master\\AmazonStatus::CAPTURE"))) {
                        // line 262
                        echo "                                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["Order"], "payment_total", [], "any", false, false, true, 262) > twig_get_attribute($this->env, $this->source, $context["Order"], "AmazonPayV2SumCaptureAmount", [], "any", false, false, true, 262))) {
                            // line 263
                            echo "                                                        <span class=\"text-danger\">金額超過</span>
                                                    ";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 264
$context["Order"], "payment_total", [], "any", false, false, true, 264) < twig_get_attribute($this->env, $this->source, $context["Order"], "AmazonPayV2SumCaptureAmount", [], "any", false, false, true, 264))) {
                            // line 265
                            echo "                                                        <a href=\"?\" id=\"cancel_link_";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 265), 265, $this->source), "html", null, true);
                            echo "\">金額変更</a><br/>
                                                        <span style=\"color:#0000FF;\">-";
                            // line 266
                            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["Order"], "AmazonPayV2SumCaptureAmount", [], "any", false, false, true, 266) - twig_get_attribute($this->env, $this->source, $context["Order"], "payment_total", [], "any", false, false, true, 266)), "html", null, true);
                            echo "円</span>
                                                    ";
                        } else {
                            // line 268
                            echo "                                                        <input type=\"checkbox\" name=\"cancel_id[]\" id=\"cancel_check_";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 268), 268, $this->source), "html", null, true);
                            echo "\" value=\"";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 268), 268, $this->source), "html", null, true);
                            echo "\"/><label for=\"cancel_check_";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 268), 268, $this->source), "html", null, true);
                            echo "\">一括</label><br/>
                                                        <a href=\"\" id=\"cancel_link_";
                            // line 269
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 269), 269, $this->source), "html", null, true);
                            echo "\">個別取消</a>
                                                    ";
                        }
                        // line 271
                        echo "                                                ";
                    } else {
                        // line 272
                        echo "                                                    <input type=\"checkbox\" name=\"cancel_id[]\" id=\"cancel_check_";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 272), 272, $this->source), "html", null, true);
                        echo "\" value=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 272), 272, $this->source), "html", null, true);
                        echo "\"/><label for=\"cancel_check_";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 272), 272, $this->source), "html", null, true);
                        echo "\">一括</label><br/>
                                                    <a href=\"\" id=\"cancel_link_";
                        // line 273
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 273), 273, $this->source), "html", null, true);
                        echo "\">個別取消</a>
                                                ";
                    }
                    // line 275
                    echo "                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    <a href=\"https://sellercentral.amazon.co.jp/hz/me/pmd/payment-details?orderReferenceId=";
                    // line 277
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "amazonpay_v2_charge_permission_id", [], "any", false, false, true, 277), 277, $this->source), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "amazonpay_v2_charge_permission_id", [], "any", false, false, true, 277), 277, $this->source), "html", null, true);
                    echo "</a>
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    <span class=\"badge ";
                    // line 280
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["cssClassAmazonStatus"]) || array_key_exists("cssClassAmazonStatus", $context) ? $context["cssClassAmazonStatus"] : (function () { throw new RuntimeError('Variable "cssClassAmazonStatus" does not exist.', 280, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "AmazonPayV2AmazonStatus", [], "any", false, false, true, 280), "id", [], "any", false, false, true, 280), [], "any", false, false, true, 280), 280, $this->source), "html", null, true);
                    echo " \">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "AmazonPayV2AmazonStatus", [], "any", false, false, true, 280), "name", [], "any", false, false, true, 280), 280, $this->source), "html", null, true);
                    echo "</span>
                                                </td>
                                                <td class=\"align-middle text-center\"  id=\"order_status--";
                    // line 282
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 282), 282, $this->source), "html", null, true);
                    echo "\">
                                                    <span class=\"badge badge-ec-blue\" style=\"background-color: #fff; color: ";
                    // line 283
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "OrderStatusColor", [], "any", false, false, true, 283), 283, $this->source), "html", null, true);
                    echo "; border-color: ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "OrderStatusColor", [], "any", false, false, true, 283), 283, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "OrderStatus", [], "any", false, false, true, 283), 283, $this->source), "html", null, true);
                    echo "</span>
                                                </td>
                                            ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 285
$context["Order"], "AmazonStatus", [], "any", false, false, true, 285)) {
                    // line 286
                    echo "                                            ";
                    // line 287
                    echo "                                                ";
                    if (((twig_get_attribute($this->env, $this->source, $context["Order"], "payment_total", [], "any", false, false, true, 287) <= twig_get_attribute($this->env, $this->source, $context["Order"], "sumCaptureAmount", [], "any", false, false, true, 287)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "AmazonStatus", [], "any", false, false, true, 287), "id", [], "any", false, false, true, 287) == twig_constant("Plugin\\AmazonPay\\Entity\\Master\\AmazonStatus::CANCEL")))) {
                        // line 288
                        echo "                                                    -
                                                ";
                    } elseif (((twig_get_attribute($this->env, $this->source,                     // line 289
$context["Order"], "payment_total", [], "any", false, false, true, 289) - twig_get_attribute($this->env, $this->source, $context["Order"], "sumCaptureAmount", [], "any", false, false, true, 289)) > twig_get_attribute($this->env, $this->source, $context["Order"], "billableAmount", [], "any", false, false, true, 289))) {
                        // line 290
                        echo "                                                    cv1<span class=\"text-danger\">金額超過</span>
                                                ";
                    } else {
                        // line 292
                        echo "                                                    ";
                        if (((twig_get_attribute($this->env, $this->source, $context["Order"], "payment_total", [], "any", false, false, true, 292) < twig_get_attribute($this->env, $this->source, $context["Order"], "sumAuthoriAmount", [], "any", false, false, true, 292)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "AmazonStatus", [], "any", false, false, true, 292), "id", [], "any", false, false, true, 292) == twig_constant("Plugin\\AmazonPay\\Entity\\Master\\AmazonStatus::AUTHORI")))) {
                            // line 293
                            echo "                                                        cv1<a href=\"?\" id=\"capture_link_";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 293), 293, $this->source), "html", null, true);
                            echo "\">金額変更</a><br/>
                                                        <span style=\"color:#0000FF;\">-";
                            // line 294
                            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["Order"], "sumAuthoriAmount", [], "any", false, false, true, 294) - twig_get_attribute($this->env, $this->source, $context["Order"], "payment_total", [], "any", false, false, true, 294)), "html", null, true);
                            echo "円</span>
                                                    ";
                        } elseif (((twig_get_attribute($this->env, $this->source,                         // line 295
$context["Order"], "payment_total", [], "any", false, false, true, 295) > twig_get_attribute($this->env, $this->source, $context["Order"], "sumAuthoriAmount", [], "any", false, false, true, 295)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "AmazonStatus", [], "any", false, false, true, 295), "id", [], "any", false, false, true, 295) == twig_constant("Plugin\\AmazonPay\\Entity\\Master\\AmazonStatus::AUTHORI")))) {
                            // line 296
                            echo "                                                        cv1<a href=\"\" id=\"capture_link_";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 296), 296, $this->source), "html", null, true);
                            echo "\">金額変更</a><br/>
                                                        <span style=\"color:#FF0000;\">+";
                            // line 297
                            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["Order"], "payment_total", [], "any", false, false, true, 297) - twig_get_attribute($this->env, $this->source, $context["Order"], "sumAuthoriAmount", [], "any", false, false, true, 297)), "html", null, true);
                            echo "円</span>
                                                    ";
                        } elseif (((twig_get_attribute($this->env, $this->source,                         // line 298
$context["Order"], "payment_total", [], "any", false, false, true, 298) > twig_get_attribute($this->env, $this->source, $context["Order"], "sumAuthoriAmount", [], "any", false, false, true, 298)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "AmazonStatus", [], "any", false, false, true, 298), "id", [], "any", false, false, true, 298) == twig_constant("Plugin\\AmazonPay\\Entity\\Master\\AmazonStatus::CAPTURE")))) {
                            // line 299
                            echo "                                                        cv1<a href=\"\" id=\"capture_link_";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 299), 299, $this->source), "html", null, true);
                            echo "\">金額変更</a><br/>
                                                        <span style=\"color:#FF0000;\">+";
                            // line 300
                            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["Order"], "payment_total", [], "any", false, false, true, 300) - twig_get_attribute($this->env, $this->source, $context["Order"], "sumCaptureAmount", [], "any", false, false, true, 300)), "html", null, true);
                            echo "円</span>
                                                    ";
                        } else {
                            // line 302
                            echo "                                                        <input type=\"checkbox\" name=\"capture_id[]\" id=\"capture_check_";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 302), 302, $this->source), "html", null, true);
                            echo "\" value=\"";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 302), 302, $this->source), "html", null, true);
                            echo "\"/><label for=\"capture_check_";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 302), 302, $this->source), "html", null, true);
                            echo "\">一括</label><br/>
                                                        cv1<a href=\"\" id=\"capture_link_";
                            // line 303
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 303), 303, $this->source), "html", null, true);
                            echo "\">個別売上</a>
                                                    ";
                        }
                        // line 305
                        echo "                                                ";
                    }
                    // line 306
                    echo "                                                </td>
                                                <td class=\"align-middle text-center\">
                                                ";
                    // line 308
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "AmazonStatus", [], "any", false, false, true, 308), "id", [], "any", false, false, true, 308) == twig_constant("Plugin\\AmazonPay\\Entity\\Master\\AmazonStatus::CANCEL"))) {
                        // line 309
                        echo "                                                    -
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 310
$context["Order"], "AmazonStatus", [], "any", false, false, true, 310), "id", [], "any", false, false, true, 310) == twig_constant("Plugin\\AmazonPay\\Entity\\Master\\AmazonStatus::CAPTURE"))) {
                        // line 311
                        echo "                                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["Order"], "payment_total", [], "any", false, false, true, 311) > twig_get_attribute($this->env, $this->source, $context["Order"], "sumCaptureAmount", [], "any", false, false, true, 311))) {
                            // line 312
                            echo "                                                        cv1<span class=\"text-danger\">金額超過</span>
                                                    ";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 313
$context["Order"], "payment_total", [], "any", false, false, true, 313) < twig_get_attribute($this->env, $this->source, $context["Order"], "sumCaptureAmount", [], "any", false, false, true, 313))) {
                            // line 314
                            echo "                                                        cv1<a href=\"?\" id=\"cancel_link_";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 314), 314, $this->source), "html", null, true);
                            echo "\">金額変更</a><br/>
                                                        <span style=\"color:#0000FF;\">-";
                            // line 315
                            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["Order"], "sumCaptureAmount", [], "any", false, false, true, 315) - twig_get_attribute($this->env, $this->source, $context["Order"], "payment_total", [], "any", false, false, true, 315)), "html", null, true);
                            echo "円</span>
                                                    ";
                        } else {
                            // line 317
                            echo "                                                        <input type=\"checkbox\" name=\"cancel_id[]\" id=\"cancel_check_";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 317), 317, $this->source), "html", null, true);
                            echo "\" value=\"";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 317), 317, $this->source), "html", null, true);
                            echo "\"/><label for=\"cancel_check_";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 317), 317, $this->source), "html", null, true);
                            echo "\">一括</label><br/>
                                                        cv1<a href=\"\" id=\"cancel_link_";
                            // line 318
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 318), 318, $this->source), "html", null, true);
                            echo "\">個別取消</a>
                                                    ";
                        }
                        // line 320
                        echo "                                                ";
                    } else {
                        // line 321
                        echo "                                                    <input type=\"checkbox\" name=\"cancel_id[]\" id=\"cancel_check_";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 321), 321, $this->source), "html", null, true);
                        echo "\" value=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 321), 321, $this->source), "html", null, true);
                        echo "\"/><label for=\"cancel_check_";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 321), 321, $this->source), "html", null, true);
                        echo "\">一括</label><br/>
                                                    cv1<a href=\"\" id=\"cancel_link_";
                        // line 322
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 322), 322, $this->source), "html", null, true);
                        echo "\">個別取消</a>
                                                ";
                    }
                    // line 324
                    echo "                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    <a href=\"https://sellercentral.amazon.co.jp/hz/me/pmd/payment-details?orderReferenceId=";
                    // line 326
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "reference_code", [], "any", false, false, true, 326), 326, $this->source), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "reference_code", [], "any", false, false, true, 326), 326, $this->source), "html", null, true);
                    echo "</a>
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    <span class=\"badge ";
                    // line 329
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["cssClassAmazonStatus"]) || array_key_exists("cssClassAmazonStatus", $context) ? $context["cssClassAmazonStatus"] : (function () { throw new RuntimeError('Variable "cssClassAmazonStatus" does not exist.', 329, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "AmazonStatus", [], "any", false, false, true, 329), "id", [], "any", false, false, true, 329), [], "any", false, false, true, 329), 329, $this->source), "html", null, true);
                    echo " \">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "AmazonStatus", [], "any", false, false, true, 329), "name", [], "any", false, false, true, 329), 329, $this->source), "html", null, true);
                    echo "</span>
                                                </td>
                                                <td class=\"align-middle text-center\" id=\"order_status--";
                    // line 331
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 331), 331, $this->source), "html", null, true);
                    echo "\">
                                                    <span class=\"badge badge-ec-blue\" style=\"background-color: #fff; color: ";
                    // line 332
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "OrderStatusColor", [], "any", false, false, true, 332), 332, $this->source), "html", null, true);
                    echo "; border-color: ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "OrderStatusColor", [], "any", false, false, true, 332), 332, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "OrderStatus", [], "any", false, false, true, 332), 332, $this->source), "html", null, true);
                    echo "</span>
                                                </td>
                                            ";
                }
                // line 335
                echo "                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 337
            echo "                                    </tbody>
                                </table>
                                <div class=\"row justify-content-md-center mb-4\"></div>
                            </div>
                            <div class=\"row justify-content-md-center mb-4\">
                                ";
            // line 342
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 342, $this->source); })()), "totalItemCount", [], "any", false, false, true, 342) > 0)) {
                // line 343
                echo "                                    ";
                $this->loadTemplate("@admin/pager.twig", "AmazonPayV2_42_Bundle/Resource/template/admin/Order/payment_status.twig", 343)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 343, $this->source); })()), "paginationData", [], "any", false, false, true, 343), "routes" => "amazon_pay_v2_admin_payment_status_pageno"]));
                // line 344
                echo "                                ";
            }
            // line 345
            echo "                            </div>
                        </div>
                    </form>
                ";
            // line 349
            echo "                ";
        } elseif ((isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 349, $this->source); })())) {
            // line 350
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 352
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.payment_status.invalid_condition"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 353
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.payment_status.change_condition"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                ";
        } else {
            // line 357
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 359
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.payment_status.no_result"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 360
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.payment_status.change_condition"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                ";
        }
        // line 364
        echo "            </div>
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
        return "AmazonPayV2_42_Bundle/Resource/template/admin/Order/payment_status.twig";
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
        return array (  885 => 364,  878 => 360,  874 => 359,  870 => 357,  863 => 353,  859 => 352,  855 => 350,  852 => 349,  847 => 345,  844 => 344,  841 => 343,  839 => 342,  832 => 337,  825 => 335,  815 => 332,  811 => 331,  804 => 329,  796 => 326,  792 => 324,  787 => 322,  778 => 321,  775 => 320,  770 => 318,  761 => 317,  756 => 315,  751 => 314,  749 => 313,  746 => 312,  743 => 311,  741 => 310,  738 => 309,  736 => 308,  732 => 306,  729 => 305,  724 => 303,  715 => 302,  710 => 300,  705 => 299,  703 => 298,  699 => 297,  694 => 296,  692 => 295,  688 => 294,  683 => 293,  680 => 292,  676 => 290,  674 => 289,  671 => 288,  668 => 287,  666 => 286,  664 => 285,  655 => 283,  651 => 282,  644 => 280,  636 => 277,  632 => 275,  627 => 273,  618 => 272,  615 => 271,  610 => 269,  601 => 268,  596 => 266,  591 => 265,  589 => 264,  586 => 263,  583 => 262,  581 => 261,  578 => 260,  576 => 259,  572 => 257,  569 => 256,  564 => 254,  555 => 253,  550 => 251,  545 => 250,  543 => 249,  539 => 248,  534 => 247,  532 => 246,  528 => 245,  523 => 244,  520 => 243,  516 => 241,  514 => 240,  511 => 239,  508 => 238,  506 => 237,  499 => 235,  491 => 234,  483 => 233,  477 => 232,  474 => 231,  469 => 230,  467 => 224,  460 => 220,  456 => 219,  452 => 218,  446 => 215,  438 => 210,  432 => 207,  428 => 206,  424 => 205,  420 => 204,  409 => 195,  401 => 193,  396 => 192,  391 => 191,  387 => 190,  377 => 185,  371 => 182,  362 => 176,  355 => 172,  347 => 167,  337 => 160,  330 => 155,  328 => 154,  315 => 143,  309 => 141,  307 => 140,  293 => 129,  289 => 128,  285 => 127,  273 => 118,  269 => 117,  265 => 116,  256 => 110,  252 => 109,  248 => 107,  238 => 106,  147 => 23,  137 => 22,  119 => 19,  100 => 15,  81 => 14,  70 => 10,  68 => 17,  66 => 12,  41 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("{#
Amazon Pay V2 for EC-CUBE4.2
Copyright(c) 2023 EC-CUBE CO.,LTD. all rights reserved.

https://www.ec-cube.co.jp/

This program is not free software.
It applies to terms of service.
#}
{% extends '@admin/default_frame.twig' %}

{% set menus = ['order', 'amazon_pay_v2_admin_payment_status'] %}

{% block title %}{{ 'amazon_pay_v2.admin.payment_status.title'|trans }}{% endblock %}
{% block sub_title %}{{ 'amazon_pay_v2.admin.payment_status.sub_title'|trans }}{% endblock %}

{% form_theme searchForm '@admin/Form/bootstrap_4_layout.html.twig' %}

{% block stylesheet %}
{% endblock stylesheet %}

{% block javascript %}
    <script>
        \$('#capture_all_check').click(function() {
        var amazon_checkall = \$('#capture_all_check').prop('checked');
        if (amazon_checkall) {
            \$('input[id^=capture_check_]').prop('checked', true);
        } else {
            \$('input[id^=capture_check_]').prop('checked', false);
        }
    });

    \$('#cancel_all_check').click(function() {
        var amazon_checkall = \$('#cancel_all_check').prop('checked');
        if (amazon_checkall) {
            \$('input[id^=cancel_check_]').prop('checked', true);
        } else {
            \$('input[id^=cancel_check_]').prop('checked', false);
        }
    });

    \$('[id^=capture_link_]').click(function(event) {
        event.preventDefault();
        var id = \$(this).attr('id');
        var order_id = id.slice(id.lastIndexOf('_') + 1);

        if (confirm('売上処理を実行します。よろしいですか？')) {
            \$('#amazon_order_id').val(order_id);
            \$('#amazon_request').val('capture');
            \$('#form_bulk').submit();
        }
    });

    \$('[id^=cancel_link_]').click(function(event) {
        event.preventDefault();
        var id = \$(this).attr('id');
        var order_id = id.slice(id.lastIndexOf('_') + 1);

        if (confirm('取消処理を実行します。よろしいですか？')) {
            \$('#amazon_order_id').val(order_id);
            \$('#amazon_request').val('cancel');
            \$('#form_bulk').submit();
        }
    });

    \$('#capture_button').click(function(event) {
        event.preventDefault();
        var isChecked = false;
        \$('input[id^=capture_check_]').each(function() {
            var check = \$(this).prop('checked');
            if (check) {
                isChecked = true;
            }
        });
        if (!isChecked) {
            alert(\"チェックボックスが選択されていません\");
            return false;
        }
        if (confirm('売上処理を実行します。よろしいですか？')) {
            \$('#amazon_request').val('capture');
            \$('#form_bulk').submit();
        }
    });

    \$('#cancel_button').click(function(event) {
        event.preventDefault();
        var isChecked = false;
        \$('input[id^=cancel_check_]').each(function() {
            var check = \$(this).prop('checked');
            if (check) {
                isChecked = true;
            }
        });
        if (!isChecked) {
            alert(\"チェックボックスが選択されていません\");
            return false;
        }
        if (confirm('取消処理を実行します。よろしいですか？')) {
            \$('#amazon_request').val('cancel');
            \$('#form_bulk').submit();
        }
    });
    </script>
{% endblock javascript %}

{% block main %}
    <!--検索条件設定テーブルここから-->
    <div class=\"c-outsideBlock\">
        <form name=\"search_form\" method=\"POST\" action=\"{{ url('amazon_pay_v2_admin_payment_status') }}\">
            {{ form_widget(searchForm._token) }}
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"form-row\">
                            <div class=\"form-group col-12\">
                                <p class=\"col-form-label\">{{ 'amazon_pay_v2.admin.payment_status.search_condition_order_status'|trans }}</p>
                                {{ form_widget(searchForm.OrderStatuses, {'label_attr': {'class': 'checkbox-inline'}}) }}
                                {{ form_errors(searchForm.OrderStatuses) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"form-row\">
                            <div class=\"form-group col-12\">
                                <p class=\"col-form-label\">{{ 'amazon_pay_v2.admin.payment_status.search_condition_amazon_status'|trans }}</p>
                                {{ form_widget(searchForm.AmazonStatuses, {'label_attr': {'class': 'checkbox-inline'}}) }}
                                {{ form_errors(searchForm.AmazonStatuses) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row\">
                    <div class=\"mb-4\">
                        <div class=\"col-12\">
                            <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">検索</button>
                            {% if pagination %}
                                <span class=\"font-weight-bold ml-2\">{{ 'amazon_pay_v2.admin.payment_status.search_result_count'|trans({ '%count%': pagination.totalItemCount }) }}</span>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!--検索条件設定テーブルここまで-->

    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                {% if pagination and pagination.totalItemCount %}
                    <div class=\"modal fade\" id=\"confirmBulkModal\" tabindex=\"-1\" role=\"dialog\"
                         aria-labelledby=\"confirmModal\" aria-hidden=\"true\">
                        <div class=\"modal-dialog\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\">{{ 'amazon_pay_v2.admin.payment_status.bulk_modal_title'|trans }}</h5>
                                    <button class=\"btn-close\" type=\"button\" data-dismiss=\"modal\"
                                            aria-label=\"Close\">
                                        <span aria-hidden=\"true\">×</span>
                                    </button>
                                </div>
                                <div class=\"modal-body\">
                                    <p>{{ 'amazon_pay_v2.admin.payment_status.bulk_modal_body'|trans }}</p>
                                </div>
                                <div class=\"modal-footer\">
                                    <button class=\"btn btn-ec-conversion\" data-action=\"execute\" type=\"button\"
                                            data-dismiss=\"modal\">
                                        {{ 'amazon_pay_v2.admin.payment_status.bulk_modal_action_exec'|trans }}
                                    </button>
                                    <button class=\"btn btn-ec-sub\" data-action=\"cancel\" type=\"button\"
                                            data-dismiss=\"modal\">
                                        {{ 'amazon_pay_v2.admin.payment_status.bulk_modal_action_cancel'|trans }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form id=\"form_bulk\" method=\"POST\" action=\"{{ url('amazon_pay_v2_admin_payment_status_request') }}\">
                        <input type=\"hidden\" name=\"amazon_request\" id=\"amazon_request\" value=\"\" />
                        <input type=\"hidden\" name=\"amazon_order_id\" id=\"amazon_order_id\" value=\"\" />
                        <input type=\"hidden\" name=\"{{ constant('Eccube\\\\Common\\\\Constant::TOKEN_NAME') }}\" value=\"{{ csrf_token(constant('Eccube\\\\Common\\\\Constant::TOKEN_NAME')) }}\">
                        <div class=\"row justify-content-between mb-2\">
                            <div class=\"col-12 text-end\">
                                <div class=\"d-inline-block\">
                                    <select class=\"custom-select\" onchange=\"location.href = this.value;\">
                                        {% for pageMax in pageMaxis %}
                                            <option {% if pageMax.name == page_count%} selected {% endif %}
                                                    value=\"{{ path('amazon_pay_v2_admin_payment_status', {'page_no': 1, 'page_count': pageMax.name}) }}\">
                                                {{ 'amazon_pay_v2.admin.payment_status.display_count'|trans({ '%count%': pageMax.name|e }) }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-body p-0\">
                                <table class=\"table table-sm\" id=\"search_result\">
                                    <thead>
                                    <tr>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">{{ 'amazon_pay_v2.admin.payment_status.col_order_date'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">{{ 'amazon_pay_v2.admin.payment_status.col_order_no'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">{{ 'amazon_pay_v2.admin.payment_status.col_order_name'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">{{ 'amazon_pay_v2.admin.payment_status.col_order_price'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                            <input type=\"checkbox\" id=\"capture_all_check\" name=\"capture\" />
                                            <label for=\"capture_all_check\">{{ 'amazon_pay_v2.admin.payment_status.col_amazon_order_capture'|trans }}</label>
                                            <input type=\"button\" id=\"capture_button\" value=\"実行\" />
                                        </th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                            <input type=\"checkbox\" id=\"cancel_all_check\" name=\"cancel\" />
                                            <label for=\"cancel_all_check\">{{ 'amazon_pay_v2.admin.payment_status.col_amazon_order_cancel'|trans }}</label>
                                            <input type=\"button\" id=\"cancel_button\" value=\"実行\" />
                                        </th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">{{ 'amazon_pay_v2.admin.payment_status.col_amazon_order_reference_id'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">{{ 'amazon_pay_v2.admin.payment_status.col_amazon_order_status'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">{{ 'amazon_pay_v2.admin.payment_status.col_order_staus'|trans }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% set cssClassAmazonStatus = {
                                        (constant('Plugin\\\\AmazonPayV2_42_Bundle\\\\Entity\\\\Master\\\\AmazonStatus::AUTHORI')): \"badge-ec-blue\",
                                        (constant('Plugin\\\\AmazonPayV2_42_Bundle\\\\Entity\\\\Master\\\\AmazonStatus::CAPTURE')): \"badge-ec-green\",
                                        (constant('Plugin\\\\AmazonPayV2_42_Bundle\\\\Entity\\\\Master\\\\AmazonStatus::CANCEL')): \"badge-ec-glay\",
                                    }
                                    %}
                                    {% for Order in pagination %}
                                        <tr>
                                            <td class=\"align-middle text-start\" id=\"order_date--{{ Order.id }}\">{{ Order.order_date|date_min }}</td>
                                            <td class=\"align-middle text-center\" id=\"id--{{ Order.id }}\"><a class=\"action-edit\" href=\"{{ url('admin_order_edit', { id : Order.id }) }}\">{{ Order.order_no }}</a></td>
                                            <td class=\"align-middle text-center\" id=\"name--{{ Order.id }}\">{{ Order.name01 }} {{ Order.name02 }}</td>
                                            <td class=\"align-middle text-end\" id=\"payment_total--{{ Order.id }}\">{{ Order.payment_total|price }}</td>
                                            <td class=\"align-middle text-center\">
                                            {% if Order.AmazonPayV2AmazonStatus %}
                                                {% if Order.payment_total <= Order.AmazonPayV2SumCaptureAmount or Order.AmazonPayV2AmazonStatus.id == constant('Plugin\\\\AmazonPayV2_42_Bundle\\\\Entity\\\\Master\\\\AmazonStatus::CANCEL') %}
                                                    -
                                                {% elseif Order.payment_total - Order.AmazonPayV2SumAuthoriAmount > Order.AmazonPayV2BillableAmount %}
                                                    <span class=\"text-danger\">金額超過</span>
                                                {% else %}
                                                    {% if Order.payment_total < Order.AmazonPayV2SumAuthoriAmount and Order.AmazonPayV2AmazonStatus.id == constant('Plugin\\\\AmazonPayV2_42_Bundle\\\\Entity\\\\Master\\\\AmazonStatus::AUTHORI') %}
                                                        <a href=\"?\" id=\"capture_link_{{ Order.id }}\">金額変更</a><br/>
                                                        <span style=\"color:#0000FF;\">-{{ Order.AmazonPayV2SumAuthoriAmount - Order.payment_total }}円</span>
                                                    {% elseif Order.payment_total > Order.AmazonPayV2SumAuthoriAmount and Order.AmazonPayV2AmazonStatus.id == constant('Plugin\\\\AmazonPayV2_42_Bundle\\\\Entity\\\\Master\\\\AmazonStatus::AUTHORI') %}
                                                        <a href=\"\" id=\"capture_link_{{ Order.id }}\">金額変更</a><br/>
                                                        <span style=\"color:#FF0000;\">+{{ Order.payment_total - Order.AmazonPayV2SumAuthoriAmount }}円</span>
                                                    {% elseif Order.payment_total > Order.AmazonPayV2SumAuthoriAmount and Order.AmazonPayV2AmazonStatus.id == constant('Plugin\\\\AmazonPayV2_42_Bundle\\\\Entity\\\\Master\\\\AmazonStatus::CAPTURE') %}
                                                        <a href=\"\" id=\"capture_link_{{ Order.id }}\">金額変更</a><br/>
                                                        <span style=\"color:#FF0000;\">+{{ Order.payment_total - Order.AmazonPayV2SumCaptureAmount }}円</span>
                                                    {% else %}
                                                        <input type=\"checkbox\" name=\"capture_id[]\" id=\"capture_check_{{ Order.id }}\" value=\"{{ Order.id }}\"/><label for=\"capture_check_{{ Order.id }}\">一括</label><br/>
                                                        <a href=\"\" id=\"capture_link_{{ Order.id }}\">個別売上</a>
                                                    {% endif %}
                                                {% endif %}
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                {% if Order.AmazonPayV2AmazonStatus.id == constant('Plugin\\\\AmazonPayV2_42_Bundle\\\\Entity\\\\Master\\\\AmazonStatus::CANCEL') %}
                                                    -
                                                {% elseif Order.AmazonPayV2AmazonStatus.id == constant('Plugin\\\\AmazonPayV2_42_Bundle\\\\Entity\\\\Master\\\\AmazonStatus::CAPTURE') %}
                                                    {% if Order.payment_total > Order.AmazonPayV2SumCaptureAmount %}
                                                        <span class=\"text-danger\">金額超過</span>
                                                    {% elseif Order.payment_total < Order.AmazonPayV2SumCaptureAmount %}
                                                        <a href=\"?\" id=\"cancel_link_{{ Order.id }}\">金額変更</a><br/>
                                                        <span style=\"color:#0000FF;\">-{{ Order.AmazonPayV2SumCaptureAmount - Order.payment_total }}円</span>
                                                    {% else %}
                                                        <input type=\"checkbox\" name=\"cancel_id[]\" id=\"cancel_check_{{ Order.id }}\" value=\"{{ Order.id }}\"/><label for=\"cancel_check_{{ Order.id }}\">一括</label><br/>
                                                        <a href=\"\" id=\"cancel_link_{{ Order.id }}\">個別取消</a>
                                                    {% endif %}
                                                {% else %}
                                                    <input type=\"checkbox\" name=\"cancel_id[]\" id=\"cancel_check_{{ Order.id }}\" value=\"{{ Order.id }}\"/><label for=\"cancel_check_{{ Order.id }}\">一括</label><br/>
                                                    <a href=\"\" id=\"cancel_link_{{ Order.id }}\">個別取消</a>
                                                {% endif %}
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    <a href=\"https://sellercentral.amazon.co.jp/hz/me/pmd/payment-details?orderReferenceId={{ Order.amazonpay_v2_charge_permission_id }}\" target=\"_blank\">{{ Order.amazonpay_v2_charge_permission_id }}</a>
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    <span class=\"badge {{ attribute(cssClassAmazonStatus, Order.AmazonPayV2AmazonStatus.id)}} \">{{ Order.AmazonPayV2AmazonStatus.name }}</span>
                                                </td>
                                                <td class=\"align-middle text-center\"  id=\"order_status--{{ Order.id }}\">
                                                    <span class=\"badge badge-ec-blue\" style=\"background-color: #fff; color: {{ Order.OrderStatusColor }}; border-color: {{ Order.OrderStatusColor }}\">{{ Order.OrderStatus }}</span>
                                                </td>
                                            {% elseif Order.AmazonStatus %}
                                            {# CV1の受注 #}
                                                {% if Order.payment_total <= Order.sumCaptureAmount or Order.AmazonStatus.id == constant('Plugin\\\\AmazonPay\\\\Entity\\\\Master\\\\AmazonStatus::CANCEL') %}
                                                    -
                                                {% elseif Order.payment_total - Order.sumCaptureAmount > Order.billableAmount %}
                                                    cv1<span class=\"text-danger\">金額超過</span>
                                                {% else %}
                                                    {% if Order.payment_total < Order.sumAuthoriAmount and Order.AmazonStatus.id == constant('Plugin\\\\AmazonPay\\\\Entity\\\\Master\\\\AmazonStatus::AUTHORI') %}
                                                        cv1<a href=\"?\" id=\"capture_link_{{ Order.id }}\">金額変更</a><br/>
                                                        <span style=\"color:#0000FF;\">-{{ Order.sumAuthoriAmount - Order.payment_total }}円</span>
                                                    {% elseif Order.payment_total > Order.sumAuthoriAmount and Order.AmazonStatus.id == constant('Plugin\\\\AmazonPay\\\\Entity\\\\Master\\\\AmazonStatus::AUTHORI') %}
                                                        cv1<a href=\"\" id=\"capture_link_{{ Order.id }}\">金額変更</a><br/>
                                                        <span style=\"color:#FF0000;\">+{{ Order.payment_total - Order.sumAuthoriAmount }}円</span>
                                                    {% elseif Order.payment_total > Order.sumAuthoriAmount and Order.AmazonStatus.id == constant('Plugin\\\\AmazonPay\\\\Entity\\\\Master\\\\AmazonStatus::CAPTURE') %}
                                                        cv1<a href=\"\" id=\"capture_link_{{ Order.id }}\">金額変更</a><br/>
                                                        <span style=\"color:#FF0000;\">+{{ Order.payment_total - Order.sumCaptureAmount }}円</span>
                                                    {% else %}
                                                        <input type=\"checkbox\" name=\"capture_id[]\" id=\"capture_check_{{ Order.id }}\" value=\"{{ Order.id }}\"/><label for=\"capture_check_{{ Order.id }}\">一括</label><br/>
                                                        cv1<a href=\"\" id=\"capture_link_{{ Order.id }}\">個別売上</a>
                                                    {% endif %}
                                                {% endif %}
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                {% if Order.AmazonStatus.id == constant('Plugin\\\\AmazonPay\\\\Entity\\\\Master\\\\AmazonStatus::CANCEL') %}
                                                    -
                                                {% elseif Order.AmazonStatus.id == constant('Plugin\\\\AmazonPay\\\\Entity\\\\Master\\\\AmazonStatus::CAPTURE') %}
                                                    {% if Order.payment_total > Order.sumCaptureAmount %}
                                                        cv1<span class=\"text-danger\">金額超過</span>
                                                    {% elseif Order.payment_total < Order.sumCaptureAmount %}
                                                        cv1<a href=\"?\" id=\"cancel_link_{{ Order.id }}\">金額変更</a><br/>
                                                        <span style=\"color:#0000FF;\">-{{ Order.sumCaptureAmount - Order.payment_total }}円</span>
                                                    {% else %}
                                                        <input type=\"checkbox\" name=\"cancel_id[]\" id=\"cancel_check_{{ Order.id }}\" value=\"{{ Order.id }}\"/><label for=\"cancel_check_{{ Order.id }}\">一括</label><br/>
                                                        cv1<a href=\"\" id=\"cancel_link_{{ Order.id }}\">個別取消</a>
                                                    {% endif %}
                                                {% else %}
                                                    <input type=\"checkbox\" name=\"cancel_id[]\" id=\"cancel_check_{{ Order.id }}\" value=\"{{ Order.id }}\"/><label for=\"cancel_check_{{ Order.id }}\">一括</label><br/>
                                                    cv1<a href=\"\" id=\"cancel_link_{{ Order.id }}\">個別取消</a>
                                                {% endif %}
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    <a href=\"https://sellercentral.amazon.co.jp/hz/me/pmd/payment-details?orderReferenceId={{ Order.reference_code }}\" target=\"_blank\">{{ Order.reference_code }}</a>
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    <span class=\"badge {{ attribute(cssClassAmazonStatus, Order.AmazonStatus.id)}} \">{{ Order.AmazonStatus.name }}</span>
                                                </td>
                                                <td class=\"align-middle text-center\" id=\"order_status--{{ Order.id }}\">
                                                    <span class=\"badge badge-ec-blue\" style=\"background-color: #fff; color: {{ Order.OrderStatusColor }}; border-color: {{ Order.OrderStatusColor }}\">{{ Order.OrderStatus }}</span>
                                                </td>
                                            {% endif %}
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                                <div class=\"row justify-content-md-center mb-4\"></div>
                            </div>
                            <div class=\"row justify-content-md-center mb-4\">
                                {% if pagination.totalItemCount > 0 %}
                                    {% include \"@admin/pager.twig\" with { 'pages' : pagination.paginationData, 'routes' : 'amazon_pay_v2_admin_payment_status_pageno' } %}
                                {% endif %}
                            </div>
                        </div>
                    </form>
                {# 検索条件エラー時 #}
                {% elseif has_errors %}
                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">{{ 'amazon_pay_v2.admin.payment_status.invalid_condition'|trans }}</div>
                            <div class=\"text-center text-muted\">{{ 'amazon_pay_v2.admin.payment_status.change_condition'|trans }}</div>
                        </div>
                    </div>
                {% else %}
                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">{{ 'amazon_pay_v2.admin.payment_status.no_result'|trans }}</div>
                            <div class=\"text-center text-muted\">{{ 'amazon_pay_v2.admin.payment_status.change_condition'|trans }}</div>
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}
", "AmazonPayV2_42_Bundle/Resource/template/admin/Order/payment_status.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\AmazonPayV2_42_Bundle\\Resource\\template\\admin\\Order\\payment_status.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 12, "form_theme" => 17, "if" => 140, "for" => 190, "include" => 343);
        static $filters = array("escape" => 14, "trans" => 14, "e" => 193, "date_min" => 232, "price" => 235);
        static $functions = array("url" => 109, "form_widget" => 110, "form_errors" => 118, "constant" => 185, "csrf_token" => 185, "path" => 192);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'if', 'for', 'include'],
                ['escape', 'trans', 'e', 'date_min', 'price'],
                ['url', 'form_widget', 'form_errors', 'constant', 'csrf_token', 'path']
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
