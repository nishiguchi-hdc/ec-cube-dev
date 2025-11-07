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

/* EccubePaymentLite42/Resource/template/admin/Regular/Order/edit.twig */
class __TwigTemplate_972516d5c03153a32c79618e54543cb6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/Regular/Order/edit.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/Regular/Order/edit.twig"));

        // line 2
        $context["menus"] = ["regular", "order"];
        // line 7
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 8
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["searchProductModalForm"]) || array_key_exists("searchProductModalForm", $context) ? $context["searchProductModalForm"] : (function () { throw new RuntimeError('Variable "searchProductModalForm" does not exist.', 8, $this->source); })()), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "EccubePaymentLite42/Resource/template/admin/Regular/Order/edit.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "定期受注編集";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo "定期管理";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 11
        echo "<script src=\"https://yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
<script>
    \$(function() {
        // 項目数が多く、入力している項目によってEnter押下時に期待する動作が変わるので、いったん禁止
        \$('input').on('keydown', function(e) {
            if ((e.which && e.which === 13) || (e.keyCode && e.keyCode === 13)) {
                return false;
            } else {
                return true;
            }
        });

        // 商品検索
        \$('#searchProductModalButton').on('click', function() {
            var list = \$('#searchProductModalList');
            list.children().remove();

            \$.ajax({
                url: '";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eccube_payment_lite42_admin_regular_order_search_product");
        echo "',
                type: 'POST',
                dataType: 'html',
                data: {
                    'id': \$('#admin_search_product_id').val(),
                    'category_id': \$('#admin_search_product_category_id').val()
                }
            }).done(function(data) {
                \$('#searchProductModalList').html(data);
            }).fail(function(data) {
                alert('search product failed.');
            });
        });

        // その他明細
        \$('#addOrderItemType').on('show.bs.modal', function(e) {
            var list = \$('#searchOrderItemTypeList');
            list.children().remove();

            \$.ajax({
                url: '";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_search_order_item_type");
        echo "',
                type: 'POST',
                dataType: 'html'
            }).done(function(data) {
                \$('#searchOrderItemTypeList').html(data);
            }).fail(function(data) {
                alert('search order item type failed.');
            });
        });

        // ページング処理
        \$(document).on('click', '#searchProductModalList ul.pagination li.page-item a.page-link', function(e) {
            e.preventDefault();
            var list = \$('#searchProductModalList');
            list.children().remove();
            var url = \$(this).attr('href');
            \$.ajax({
                url: url,
                type: 'GET',
                dataType: 'html'
            }).done(function(data) {
                \$('#searchProductModalList').html(data);
            }).fail(function(data) {
                alert('search product failed.');
            });
        });

        // 商品追加
        \$collectionHolder = \$('#table-form-field');
        index = \$collectionHolder.find('tbody > tr').length;
        formIdPrefix = '#regular_order_RegularOrderItems_';

        \$(document).on('click', '.delete', function(e) {
            // 商品削除
            \$(this).parents('tr').remove();
            index--;
            \$(\"#calculate\").trigger('click');
        });

        // 計算結果の更新が押されたらページ内リンクさせる
        \$('.btn').click(function() {
            var data = \$(this).data();
            if (data.link) {
                \$('#form1').attr('action', '#' + data.link).submit();
                return false;
            }
        });

        // 注文者情報をコピー
        \$('.copy-customer').on('click', function() {
            \$('#regular_order_RegularShipping_name_name01').val(\$('#regular_order_name_name01').val());
            \$('#regular_order_RegularShipping_name_name02').val(\$('#regular_order_name_name02').val());
            \$('#regular_order_RegularShipping_kana_kana01').val(\$('#regular_order_kana_kana01').val());
            \$('#regular_order_RegularShipping_kana_kana02').val(\$('#regular_order_kana_kana02').val());
            \$('#regular_order_RegularShipping_postal_code').val(\$('#regular_order_postal_code').val());
            \$('#regular_order_RegularShipping_address_pref').val(\$('#regular_order_address_pref').val());
            \$('#regular_order_RegularShipping_address_addr01').val(\$('#regular_order_address_addr01').val());
            \$('#regular_order_RegularShipping_address_addr02').val(\$('#regular_order_address_addr02').val());
            \$('#regular_order_RegularShipping_email').val(\$('#regular_order_email').val());
            \$('#regular_order_RegularShipping_phone_number').val(\$('#regular_order_phone_number').val());
            \$('#regular_order_RegularShipping_company_name').val(\$('#regular_order_company_name').val());
        });

        // お届け時間の初期表示
        \$('#regular_order_RegularShipping_Delivery').change();

        var confirmFormChange = function(form, target, modal) {
            var returnLink = form.find('input[type=\"hidden\"][name*=\"return_link\"]'),
                saveBtn = modal.find('a[data-action=\"save\"]'),
                cancelBtn = modal.find('a[data-action=\"cancel\"]');
            modal.on('hidden.bs.modal', function() {
                returnLink.val('');
            });
            saveBtn.on('click', function() {
                returnLink.val(\$(this).data('return-link'));
                \$('#form1').append('<input type=\"hidden\" name=\"mode\" value=\"register\">');
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

        // 配送業者選択時にお届け時間を設定
        var times = ";
        // line 138
        echo $this->sandbox->ensureToStringAllowed((isset($context["shippingDeliveryTimes"]) || array_key_exists("shippingDeliveryTimes", $context) ? $context["shippingDeliveryTimes"] : (function () { throw new RuntimeError('Variable "shippingDeliveryTimes" does not exist.', 138, $this->source); })()), 138, $this->source);
        echo ";
        \$('#regular_order_RegularShipping_Delivery').change(function() {
            var deliveryId = \$(this).val();
            var \$shippingDeliveryTime = \$('#regular_order_RegularShipping_DeliveryTime');
            \$shippingDeliveryTime.find('option').remove();
            \$shippingDeliveryTime.append(\$('<option></option>').val('').text('指定なし'));
            if (typeof(times[deliveryId]) !== 'undefined') {
                for (var timeId in times[deliveryId]) {
                    timeValue = times[deliveryId][timeId];
                    \$shippingDeliveryTime.append(\$('<option></option>')
                        .val(timeId)
                        .text(timeValue));
                }
            }
        });
    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 157
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 158
        echo "    <!-- 移動確認モーダル-->
    <div class=\"modal fade\" id=\"confirmFormChangeModal\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"confirmFormChangeModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_title"), "html", null, true);
        echo "</h5>
                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <p class=\"screen-name\"></p>
                </div>
                <div class=\"modal-footer\">
                    <a class=\"btn btn-ec-conversion\" data-action=\"save\" href=\"javascript:void(0)\">
                        ";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_save_and_move"), "html", null, true);
        echo "
                    </a>
                    <a class=\"btn btn-ec-sub\" data-action=\"cancel\" href=\"javascript:void(0)\">
                        ";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_move_only"), "html", null, true);
        echo "
                    </a>
                </div>
            </div>
        </div>
    </div>

    <form name=\"form1\" id=\"form1\" method=\"post\" action=\"?\">
        <input type=\"hidden\" name=\"mode\" value=\"\">
        <input type=\"hidden\" name=\"modal\" value=\"\">
        ";
        // line 185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "_token", [], "any", false, false, true, 185), 185, $this->source), 'widget');
        echo "
        ";
        // line 186
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "return_link", [], "any", false, false, true, 186), 186, $this->source), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"定期情報の確認ができます。\">
                                        <span class=\"card-title\">定期情報</span>
                                        <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#orderOverview\" aria-expanded=\"false\" aria-controls=\"orderOverview\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"orderOverview\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\">
                                                定期ID
                                            </div>
                                            <div class=\"col\">";
        // line 210
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 210, $this->source); })()), "id", [], "any", false, false, true, 210), 210, $this->source), "html", null, true);
        echo "</div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\">
                                                定期回数
                                            </div>
                                            <div class=\"col\">";
        // line 216
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 216, $this->source); })()), "regular_order_count", [], "any", false, false, true, 216), 216, $this->source), "html", null, true);
        echo "回</div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\">
                                                定期継続状況
                                            </div>
                                            <div class=\"col\">";
        // line 222
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 222, $this->source); })()), "RegularStatus", [], "any", false, false, true, 222), "name", [], "any", false, false, true, 222), 222, $this->source), "html", null, true);
        echo "</div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\">
                                                支払方法
                                            </div>
                                            <div class=\"col\">";
        // line 228
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 228, $this->source); })()), "payment_method", [], "any", false, false, true, 228), 228, $this->source), "html", null, true);
        echo "</div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\">
                                                定期サイクル
                                            </div>
                                            <div class=\"col\">
                                                ";
        // line 235
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 235, $this->source); })()), "RegularCycle", [], "any", false, false, true, 235), 235, $this->source), 'widget');
        echo "
                                                ";
        // line 236
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 236, $this->source); })()), "RegularCycle", [], "any", false, false, true, 236), 236, $this->source), 'errors');
        echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\"><i class=\"fa fa-inbox fa-fw mr-1\" aria-hidden=\"true\"></i>作成日時</div>
                                            <div class=\"col\">";
        // line 243
        ((twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 243, $this->source); })()), "order_date", [], "any", false, false, true, 243)) ? (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 243, $this->source); })()), "order_date", [], "any", false, false, true, 243)), "html", null, true))) : (print ("")));
        echo "</div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\"><i class=\"fa fa-refresh fa-fw mr-1\" aria-hidden=\"true\"></i>更新日時</div>
                                            <div class=\"col\">";
        // line 247
        ((twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 247, $this->source); })()), "update_date", [], "any", false, false, true, 247)) ? (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 247, $this->source); })()), "update_date", [], "any", false, false, true, 247)), "html", null, true))) : (print ("")));
        echo "</div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\"><i class=\"fa fa-truck fa-fw mr-1\" aria-hidden=\"true\"></i>前回お届け日</div>
                                            <div class=\"col\">
                                                ";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day_with_weekday($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 252, $this->source); })()), "RegularShippings", [], "any", false, false, true, 252), "first", [], "any", false, false, true, 252), "shippingDeliveryDate", [], "any", false, false, true, 252), 252, $this->source)), "html", null, true);
        echo "
                                            </div>
                                        </div>
                                        ";
        // line 255
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "RegularStatus", [], "any", true, true, true, 255)) {
            // line 256
            echo "                                            <div class=\"row mb-3 form-group\">
                                                <label class=\"col-3 col-form-label\">定期ステータス</label>
                                                <div class=\"col\">
                                                    ";
            // line 259
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 259, $this->source); })()), "id", [], "any", false, false, true, 259))) {
                // line 260
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 260, $this->source); })()), "RegularStatus", [], "any", false, false, true, 260), 260, $this->source), 'widget');
                echo "
                                                        ";
                // line 261
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 261, $this->source); })()), "RegularStatus", [], "any", false, false, true, 261), 261, $this->source), 'errors');
                echo "
                                                    ";
            }
            // line 263
            echo "                                                </div>
                                            </div>
                                        ";
        }
        // line 266
        echo "                                        <div class=\"row mb-3 form-group\">
                                            <label class=\"col-3 col-form-label\">
                                                <i class=\"fa fa-calendar-check-o fa-fw mr-1\" aria-hidden=\"true\"></i>
                                                次回お届け予定日
                                            </label>
                                            <div class=\"col\">
                                                ";
        // line 272
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 272, $this->source); })()), "RegularShipping", [], "any", false, false, true, 272), "next_delivery_date", [], "any", false, false, true, 272), 272, $this->source), 'widget');
        echo "
                                                ";
        // line 273
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 273, $this->source); })()), "RegularShipping", [], "any", false, false, true, 273), "next_delivery_date", [], "any", false, false, true, 273), 273, $this->source), 'errors');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row mb-3 form-group\">
                                            <label class=\"col-3 col-form-label\">
                                                <i class=\"fa fa-clock-o fa-fw mr-1\" aria-hidden=\"true\"></i>
                                                次回お届け時間
                                            </label>
                                            <div class=\"col\">
                                                ";
        // line 282
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 282, $this->source); })()), "RegularShipping", [], "any", false, false, true, 282), "DeliveryTime", [], "any", false, false, true, 282), 282, $this->source), 'widget');
        echo "
                                                ";
        // line 283
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 283, $this->source); })()), "RegularShipping", [], "any", false, false, true, 283), "DeliveryTime", [], "any", false, false, true, 283), 283, $this->source), 'errors');
        echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-2\">
                                    <div class=\"d-inline-block\"><span class=\"card-title\">";
        // line 295
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.orderer"), "html", null, true);
        echo "</span></div>
                                </div>
                                <div class=\"col\">";
        // line 297
        if ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 297, $this->source); })())) {
            echo "<span class=\"mr-5\">";
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 297, $this->source); })()), "Customer", [], "any", false, false, true, 297), "vars", [], "any", false, false, true, 297), "value", [], "any", false, false, true, 297))) {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.non_member"), "html", null, true);
            } else {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 297, $this->source); })()), "Customer", [], "any", false, false, true, 297), "vars", [], "any", false, false, true, 297), "value", [], "any", false, false, true, 297)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 297, $this->source); })()), "Customer", [], "any", false, false, true, 297), "vars", [], "any", false, false, true, 297), "value", [], "any", false, false, true, 297), 297, $this->source), "html", null, true);
                echo "</a>";
            }
            echo "</span>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 297, $this->source); })()), "full_name", [], "any", false, false, true, 297), 297, $this->source), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 297, $this->source); })()), "full_name_kana", [], "any", false, false, true, 297), 297, $this->source), "html", null, true);
            echo ") 〒";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 297, $this->source); })()), "postal_code", [], "any", false, false, true, 297), 297, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 297, $this->source); })()), "pref", [], "any", false, false, true, 297), 297, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 297, $this->source); })()), "addr01", [], "any", false, false, true, 297), 297, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 297, $this->source); })()), "addr02", [], "any", false, false, true, 297), 297, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 297, $this->source); })()), "email", [], "any", false, false, true, 297), 297, $this->source), "html", null, true);
        }
        echo "</div>
                                <div class=\"col-1 text-end\"><a class=\"d-block\" data-bs-toggle=\"collapse\" href=\"#ordererInfo\" aria-expanded=\"false\" aria-controls=\"ordererInfo\"><i class=\"fa ";
        // line 298
        echo (((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 298, $this->source); })())) ? ("fa-angle-down") : ("fa-angle-up"));
        echo " fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse ";
        // line 301
        echo (((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 301, $this->source); })())) ? ("") : ("show"));
        echo " ec-cardCollapse h-adr\" id=\"ordererInfo\">
                            <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <div class=\"row\">
                                            <label class=\"col-3 col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.customer_id"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_id"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                            <div class=\"col\">
                                                <p id=\"order_CustomerId\">";
        // line 309
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 309, $this->source); })()), "Customer", [], "any", false, false, true, 309), "vars", [], "any", false, false, true, 309), "value", [], "any", false, false, true, 309))) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.non_member"), "html", null, true);
        } else {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 309, $this->source); })()), "Customer", [], "any", false, false, true, 309), "vars", [], "any", false, false, true, 309), "value", [], "any", false, false, true, 309)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 309, $this->source); })()), "Customer", [], "any", false, false, true, 309), "vars", [], "any", false, false, true, 309), "value", [], "any", false, false, true, 309), 309, $this->source), "html", null, true);
            echo "</a>";
        }
        echo "</p>
                                                ";
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 310, $this->source); })()), "Customer", [], "any", false, false, true, 310), 310, $this->source), 'widget');
        echo "
                                                ";
        // line 311
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 311, $this->source); })()), "Customer", [], "any", false, false, true, 311), 311, $this->source), 'errors');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">";
        // line 315
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.name"), "html", null, true);
        echo "<span class=\"badge bg-primary ml-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></label>
                                            <div class=\"col\">
                                                <div class=\"row\">
                                                    <div class=\"col\">
                                                        ";
        // line 319
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 319, $this->source); })()), "name", [], "any", false, false, true, 319), "name01", [], "any", false, false, true, 319), 319, $this->source), 'widget');
        echo "
                                                        ";
        // line 320
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 320, $this->source); })()), "name", [], "any", false, false, true, 320), "name01", [], "any", false, false, true, 320), 320, $this->source), 'errors');
        echo "
                                                    </div>
                                                    <div class=\"col\">
                                                        ";
        // line 323
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 323, $this->source); })()), "name", [], "any", false, false, true, 323), "name02", [], "any", false, false, true, 323), 323, $this->source), 'widget');
        echo "
                                                        ";
        // line 324
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 324, $this->source); })()), "name", [], "any", false, false, true, 324), "name02", [], "any", false, false, true, 324), 324, $this->source), 'errors');
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">";
        // line 330
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.kana"), "html", null, true);
        echo "<span class=\"badge bg-primary ml-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></label>
                                            <div class=\"col\">
                                                <div class=\"row\">
                                                    <div class=\"col\">
                                                        ";
        // line 334
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 334, $this->source); })()), "kana", [], "any", false, false, true, 334), "kana01", [], "any", false, false, true, 334), 334, $this->source), 'widget');
        echo "
                                                        ";
        // line 335
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 335, $this->source); })()), "kana", [], "any", false, false, true, 335), "kana01", [], "any", false, false, true, 335), 335, $this->source), 'errors');
        echo "
                                                    </div>
                                                    <div class=\"col\">
                                                        ";
        // line 338
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 338, $this->source); })()), "kana", [], "any", false, false, true, 338), "kana02", [], "any", false, false, true, 338), 338, $this->source), 'widget');
        echo "
                                                        ";
        // line 339
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 339, $this->source); })()), "kana", [], "any", false, false, true, 339), "kana02", [], "any", false, false, true, 339), 339, $this->source), 'errors');
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">";
        // line 345
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.address"), "html", null, true);
        echo "<span class=\"badge bg-primary ml-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></label>
                                            <div class=\"col\">
                                                <div class=\"row mb-3\">
                                                    <div class=\"col form-inline\">
                                                        ";
        // line 349
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol"), "html", null, true);
        echo "
                                                        ";
        // line 350
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 350, $this->source); })()), "postal_code", [], "any", false, false, true, 350), 350, $this->source), 'widget');
        echo "
                                                        ";
        // line 351
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 351, $this->source); })()), "postal_code", [], "any", false, false, true, 351), 351, $this->source), 'errors');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"row mb-3\">
                                                    <div class=\"col\">
                                                        ";
        // line 356
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 356, $this->source); })()), "address", [], "any", false, false, true, 356), "pref", [], "any", false, false, true, 356), 356, $this->source), 'widget');
        echo "
                                                        ";
        // line 357
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 357, $this->source); })()), "address", [], "any", false, false, true, 357), "pref", [], "any", false, false, true, 357), 357, $this->source), 'errors');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"row mb-3\">
                                                    <div class=\"col\">
                                                        ";
        // line 362
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 362, $this->source); })()), "address", [], "any", false, false, true, 362), "addr01", [], "any", false, false, true, 362), 362, $this->source), 'widget');
        echo "
                                                        ";
        // line 363
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 363, $this->source); })()), "address", [], "any", false, false, true, 363), "addr01", [], "any", false, false, true, 363), 363, $this->source), 'errors');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"col\">
                                                        ";
        // line 368
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 368, $this->source); })()), "address", [], "any", false, false, true, 368), "addr02", [], "any", false, false, true, 368), 368, $this->source), 'widget');
        echo "
                                                        ";
        // line 369
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 369, $this->source); })()), "address", [], "any", false, false, true, 369), "addr02", [], "any", false, false, true, 369), 369, $this->source), 'errors');
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col-6\">
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">";
        // line 378
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.mail_address"), "html", null, true);
        echo "<span class=\"badge bg-primary ml-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></label>
                                            <div class=\"col\">
                                                ";
        // line 380
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 380, $this->source); })()), "email", [], "any", false, false, true, 380), 380, $this->source), 'widget');
        echo "
                                                ";
        // line 381
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 381, $this->source); })()), "email", [], "any", false, false, true, 381), 381, $this->source), 'errors');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">";
        // line 385
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
        echo "<span class=\"badge bg-primary ml-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></label>
                                            <div class=\"col\">
                                                ";
        // line 387
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 387, $this->source); })()), "phone_number", [], "any", false, false, true, 387), 387, $this->source), 'widget');
        echo "
                                                ";
        // line 388
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 388, $this->source); })()), "phone_number", [], "any", false, false, true, 388), 388, $this->source), 'errors');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">";
        // line 392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.company_name"), "html", null, true);
        echo "</label>
                                            <div class=\"col\">
                                                ";
        // line 394
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 394, $this->source); })()), "company_name", [], "any", false, false, true, 394), 394, $this->source), 'widget');
        echo "
                                                ";
        // line 395
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 395, $this->source); })()), "company_name", [], "any", false, false, true, 395), 395, $this->source), 'errors');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">";
        // line 399
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.message"), "html", null, true);
        echo "</label>
                                            <div class=\"col\">
                                                ";
        // line 401
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 401, $this->source); })()), "message", [], "any", false, false, true, 401), 401, $this->source), 'widget', ["attr" => ["rows" => 8]]);
        echo "
                                                ";
        // line 402
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 402, $this->source); })()), "message", [], "any", false, false, true, 402), 402, $this->source), 'errors');
        echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.shipping_info"), "html", null, true);
        echo "\"><span class=\"card-title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_info"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                </div>
                                <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#shippingInfo\" aria-expanded=\"false\" aria-controls=\"shippingInfo\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"shippingInfo\">
                            <div class=\"card-body\">
                                ";
        // line 422
        if (twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 422, $this->source); })()), "isMultiple", [], "any", false, false, true, 422)) {
            // line 423
            echo "                                    ";
            // line 424
            echo "                                    <div class=\"mb-3\">
                                    </div>
                                    ";
            // line 426
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 426, $this->source); })()), "Shippings", [], "any", false, false, true, 426));
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
            foreach ($context['_seq'] as $context["_key"] => $context["shipping"]) {
                // line 427
                echo "                                        <div class=\"col\">
                                            <span class=\"mr-5\">";
                // line 428
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery"), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 428), 428, $this->source), "html", null, true);
                echo ")</span>
                                            ";
                // line 429
                $context["shipping_name"] = (((((($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "full_name", [], "any", false, false, true, 429), 429, $this->source) . "(") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "full_name_kana", [], "any", false, false, true, 429), 429, $this->source)) . ")") .  !(null === twig_get_attribute($this->env, $this->source, $context["shipping"], "company_name", [], "any", false, false, true, 429)))) ? (twig_get_attribute($this->env, $this->source, $context["shipping"], "company_name", [], "any", false, false, true, 429)) : (""));
                // line 430
                echo "                                            ";
                $context["shipping_addr"] = ((((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "postal_code", [], "any", false, false, true, 430), 430, $this->source)) . " ") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "pref", [], "any", false, false, true, 430), 430, $this->source)) . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "addr01", [], "any", false, false, true, 430), 430, $this->source)) . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "addr02", [], "any", false, false, true, 430), 430, $this->source));
                // line 431
                echo "                                            ";
                $context["shipping_date"] = (( !(null === twig_get_attribute($this->env, $this->source, $context["shipping"], "shipping_date", [], "any", false, false, true, 431))) ? ($this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "shipping_date", [], "any", false, false, true, 431), 431, $this->source))) : (""));
                // line 432
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["shipping_name"]) || array_key_exists("shipping_name", $context) ? $context["shipping_name"] : (function () { throw new RuntimeError('Variable "shipping_name" does not exist.', 432, $this->source); })()), 432, $this->source), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["shipping_addr"]) || array_key_exists("shipping_addr", $context) ? $context["shipping_addr"] : (function () { throw new RuntimeError('Variable "shipping_addr" does not exist.', 432, $this->source); })()), 432, $this->source), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "phone_number", [], "any", false, false, true, 432), 432, $this->source), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["shipping_date"]) || array_key_exists("shipping_date", $context) ? $context["shipping_date"] : (function () { throw new RuntimeError('Variable "shipping_date" does not exist.', 432, $this->source); })()), 432, $this->source), "html", null, true);
                echo "
                                        </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 435
            echo "                                ";
        } else {
            // line 436
            echo "                                    ";
            // line 437
            echo "                                    <div class=\"row mb-3\">
                                        <div class=\"col-6\">
                                            <button type=\"button\" class=\"btn btn-ec-regular copy-customer\">";
            // line 439
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.copy_orderer"), "html", null, true);
            echo "</button>
                                        </div>
                                        ";
            // line 441
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 441, $this->source); })()), "id", [], "any", false, false, true, 441))) {
                // line 442
                echo "                                            <div class=\"col-6 text-end\">
                                            </div>
                                        ";
            }
            // line 445
            echo "                                    </div>
                                    <div class=\"row h-adr\">
                                        <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">";
            // line 450
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.name"), "html", null, true);
            echo "<span class=\"badge bg-primary ml-1\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "</span></label>
                                                <div class=\"col\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            ";
            // line 454
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 454, $this->source); })()), "RegularShipping", [], "any", false, false, true, 454), "name", [], "any", false, false, true, 454), "name01", [], "any", false, false, true, 454), 454, $this->source), 'widget');
            echo "
                                                            ";
            // line 455
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 455, $this->source); })()), "RegularShipping", [], "any", false, false, true, 455), "name", [], "any", false, false, true, 455), "name01", [], "any", false, false, true, 455), 455, $this->source), 'errors');
            echo "
                                                        </div>
                                                        <div class=\"col\">
                                                            ";
            // line 458
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 458, $this->source); })()), "RegularShipping", [], "any", false, false, true, 458), "name", [], "any", false, false, true, 458), "name02", [], "any", false, false, true, 458), 458, $this->source), 'widget');
            echo "
                                                            ";
            // line 459
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 459, $this->source); })()), "RegularShipping", [], "any", false, false, true, 459), "name", [], "any", false, false, true, 459), "name02", [], "any", false, false, true, 459), 459, $this->source), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">";
            // line 465
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.kana"), "html", null, true);
            echo "<span class=\"badge bg-primary ml-1\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "</span></label>
                                                <div class=\"col\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            ";
            // line 469
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 469, $this->source); })()), "RegularShipping", [], "any", false, false, true, 469), "kana", [], "any", false, false, true, 469), "kana01", [], "any", false, false, true, 469), 469, $this->source), 'widget');
            echo "
                                                            ";
            // line 470
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 470, $this->source); })()), "RegularShipping", [], "any", false, false, true, 470), "kana", [], "any", false, false, true, 470), "kana01", [], "any", false, false, true, 470), 470, $this->source), 'errors');
            echo "
                                                        </div>
                                                        <div class=\"col\">
                                                            ";
            // line 473
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 473, $this->source); })()), "RegularShipping", [], "any", false, false, true, 473), "kana", [], "any", false, false, true, 473), "kana02", [], "any", false, false, true, 473), 473, $this->source), 'widget');
            echo "
                                                            ";
            // line 474
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 474, $this->source); })()), "RegularShipping", [], "any", false, false, true, 474), "kana", [], "any", false, false, true, 474), "kana02", [], "any", false, false, true, 474), 474, $this->source), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">";
            // line 480
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.address"), "html", null, true);
            echo "<span class=\"badge bg-primary ml-1\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "</span></label>
                                                <div class=\"col\">
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col form-inline\">
                                                            ";
            // line 484
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol"), "html", null, true);
            echo "
                                                            ";
            // line 485
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 485, $this->source); })()), "RegularShipping", [], "any", false, false, true, 485), "postal_code", [], "any", false, false, true, 485), 485, $this->source), 'widget');
            echo "
                                                            ";
            // line 486
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 486, $this->source); })()), "RegularShipping", [], "any", false, false, true, 486), "postal_code", [], "any", false, false, true, 486), 486, $this->source), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col\">
                                                            ";
            // line 491
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 491, $this->source); })()), "RegularShipping", [], "any", false, false, true, 491), "address", [], "any", false, false, true, 491), "pref", [], "any", false, false, true, 491), 491, $this->source), 'widget');
            echo "
                                                            ";
            // line 492
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 492, $this->source); })()), "RegularShipping", [], "any", false, false, true, 492), "address", [], "any", false, false, true, 492), "pref", [], "any", false, false, true, 492), 492, $this->source), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col\">
                                                            ";
            // line 497
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 497, $this->source); })()), "RegularShipping", [], "any", false, false, true, 497), "address", [], "any", false, false, true, 497), "addr01", [], "any", false, false, true, 497), 497, $this->source), 'widget');
            echo "
                                                            ";
            // line 498
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 498, $this->source); })()), "RegularShipping", [], "any", false, false, true, 498), "address", [], "any", false, false, true, 498), "addr01", [], "any", false, false, true, 498), 498, $this->source), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            ";
            // line 503
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 503, $this->source); })()), "RegularShipping", [], "any", false, false, true, 503), "address", [], "any", false, false, true, 503), "addr02", [], "any", false, false, true, 503), 503, $this->source), 'widget');
            echo "
                                                            ";
            // line 504
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 504, $this->source); })()), "RegularShipping", [], "any", false, false, true, 504), "address", [], "any", false, false, true, 504), "addr02", [], "any", false, false, true, 504), 504, $this->source), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">";
            // line 512
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
            echo "<span class=\"badge bg-primary ml-1\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "</span></label>
                                                <div class=\"col\">
                                                    ";
            // line 514
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 514, $this->source); })()), "RegularShipping", [], "any", false, false, true, 514), "phone_number", [], "any", false, false, true, 514), 514, $this->source), 'widget');
            echo "
                                                    ";
            // line 515
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 515, $this->source); })()), "RegularShipping", [], "any", false, false, true, 515), "phone_number", [], "any", false, false, true, 515), 515, $this->source), 'errors');
            echo "
                                                </div>
                                            </div>

                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">";
            // line 520
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.company_name"), "html", null, true);
            echo "</label>
                                                <div class=\"col\">
                                                    ";
            // line 522
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 522, $this->source); })()), "RegularShipping", [], "any", false, false, true, 522), "company_name", [], "any", false, false, true, 522), 522, $this->source), 'widget');
            echo "
                                                    ";
            // line 523
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 523, $this->source); })()), "RegularShipping", [], "any", false, false, true, 523), "company_name", [], "any", false, false, true, 523), 523, $this->source), 'errors');
            echo "
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"d-none\">
                                            ";
            // line 528
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 528, $this->source); })()), "RegularShipping", [], "any", false, false, true, 528), "Delivery", [], "any", false, false, true, 528), 528, $this->source), 'widget');
            echo "
                                            ";
            // line 529
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 529, $this->source); })()), "RegularShipping", [], "any", false, false, true, 529), "Delivery", [], "any", false, false, true, 529), 529, $this->source), 'errors');
            echo "
                                        </div>
                                    </div>
                                ";
        }
        // line 533
        echo "                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <div id=\"order-product\" class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 540
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.product_info"), "html", null, true);
        echo "\"><span class=\"card-title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.product_info"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></span></div>
                                </div>
                                <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#orderItem\" aria-expanded=\"false\" aria-controls=\"orderItem\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"orderItem\">
                            <div class=\"card-body\">
                                <div class=\"row justify-content-between mb-2\">
                                    <div class=\"col-6\">
                                        ";
        // line 550
        echo "                                        ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 550, $this->source); })()), "isMultiple", [], "any", false, false, true, 550)) {
            // line 551
            echo "                                            <a class=\"btn btn-ec-regular mr-2 add\" data-bs-toggle=\"modal\" data-bs-target=\"#addProduct\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_product_item"), "html", null, true);
            echo "</a>
                                            <div class=\"modal fade\" id=\"addProduct\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addProduct\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog modal-lg\" role=\"document\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <h5 class=\"modal-title\">";
            // line 556
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_product_item"), "html", null, true);
            echo "</h5>
                                                            <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            ";
            // line 560
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchProductModalForm"]) || array_key_exists("searchProductModalForm", $context) ? $context["searchProductModalForm"] : (function () { throw new RuntimeError('Variable "searchProductModalForm" does not exist.', 560, $this->source); })()), "id", [], "any", false, false, true, 560), 560, $this->source), 'widget', ["attr" => ["class" => "mb-3", "placeholder" => "admin.product.multi_search_label"]]);
            echo "
                                                            ";
            // line 561
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchProductModalForm"]) || array_key_exists("searchProductModalForm", $context) ? $context["searchProductModalForm"] : (function () { throw new RuntimeError('Variable "searchProductModalForm" does not exist.', 561, $this->source); })()), "category_id", [], "any", false, false, true, 561), 561, $this->source), 'widget');
            echo "
                                                            <button type=\"button\" id=\"searchProductModalButton\" class=\"btn btn-ec-conversion px-5 mb-4 mt-2\">";
            // line 562
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search"), "html", null, true);
            echo "</button>
                                                            <div id=\"searchProductModalList\"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
        }
        // line 569
        echo "                                        <a class=\"btn btn-ec-regular mr-2\" data-bs-toggle=\"modal\" data-bs-target=\"#addOrderItemType\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_other_item"), "html", null, true);
        echo "</a>
                                        <div class=\"modal fade\" id=\"addOrderItemType\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addOrderItemType\" aria-hidden=\"true\">
                                            <div class=\"modal-dialog modal-lg\" role=\"document\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <h5 class=\"modal-title\">";
        // line 574
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_other_item"), "html", null, true);
        echo "</h5>
                                                        <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                    </div>
                                                    <div class=\"modal-body\">
                                                        <div id=\"searchOrderItemTypeList\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        ";
        // line 583
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 583, $this->source); })()), "RegularOrderItemsErrors", [], "any", false, false, true, 583), 583, $this->source), 'errors');
        echo "
                                    </div>
                                    <div class=\"col-5 text-end\">
                                        <button type=\"submit\" class=\"btn btn-ec-regular mr-2\" name=\"mode\" value=\"calc\" data-link=\"order-product\" id=\"calculate\">";
        // line 586
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.update_calculation_results"), "html", null, true);
        echo "</button>
                                    </div>
                                </div>
                                <table id=\"table-form-field\" class=\"table table-striped table-sm mb-0\"
                                       data-prototype=\"";
        // line 590
        ob_start();
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@admin/Order/order_item_prototype.twig", ["orderItemForm" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 590, $this->source); })()), "RegularOrderItems", [], "any", false, false, true, 590), "vars", [], "any", false, false, true, 590), "prototype", [], "any", false, false, true, 590)]);
        $___internal_parse_7_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_parse_7_);
        echo "\">
                                    <thead class=\"table-active\">
                                    <tr class=\"text-nowrap\">
                                        <th class=\"pt-2 pb-2 pl-3\">";
        // line 593
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_name_and_code"), "html", null, true);
        echo "</th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">";
        // line 595
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.amount"), "html", null, true);
        echo "</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">";
        // line 598
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.quantity"), "html", null, true);
        echo "</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">";
        // line 601
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tax_rate"), "html", null, true);
        echo "</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">";
        // line 604
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tax_type"), "html", null, true);
        echo "</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">";
        // line 607
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.subtotal"), "html", null, true);
        echo "</div>
                                        </th>
                                        <th class=\"pt-2 pb-2 pr-3\"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 613
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 613, $this->source); })()), "RegularOrderItems", [], "any", false, false, true, 613));
        foreach ($context['_seq'] as $context["_key"] => $context["orderItemForm"]) {
            // line 614
            echo "                                        ";
            $context["OrderItem"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, true, 614), "data", [], "any", false, false, true, 614);
            // line 615
            echo "                                        <tr>
                                            ";
            // line 617
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "ProductClass", [], "any", false, false, true, 617), 617, $this->source), 'widget');
            echo "
                                            ";
            // line 618
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "order_item_type", [], "any", false, false, true, 618), 618, $this->source), 'widget');
            echo "
                                            ";
            // line 619
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "tax_type", [], "any", false, false, true, 619), 619, $this->source), 'widget');
            echo "
                                            ";
            // line 620
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "point_rate", [], "any", false, false, true, 620), 620, $this->source), 'widget');
            echo "
                                            <!-- 商品名 -->
                                            <td class=\"align-middle w-25 pl-3\">
                                                <p class=\"mb-0 fw-bold\">
                                                    ";
            // line 625
            echo "                                                    ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 625, $this->source); })()), "isProduct", [], "any", false, false, true, 625) || twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 625, $this->source); })()), "isPoint", [], "any", false, false, true, 625))) {
                // line 626
                echo "                                                        ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 626, $this->source); })()), "isProduct", [], "any", false, false, true, 626)) {
                    // line 627
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_product_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 627, $this->source); })()), "ProductClass", [], "any", false, false, true, 627), "Product", [], "any", false, false, true, 627), "id", [], "any", false, false, true, 627)]), "html", null, true);
                    echo "\" target=\"_blank\">
                                                                ";
                    // line 628
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 628, $this->source); })()), "product_name", [], "any", false, false, true, 628), 628, $this->source), "html", null, true);
                    echo "
                                                            </a>
                                                        ";
                } else {
                    // line 631
                    echo "                                                            ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 631, $this->source); })()), "product_name", [], "any", false, false, true, 631), 631, $this->source), "html", null, true);
                    echo "
                                                        ";
                }
                // line 633
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "product_name", [], "any", false, false, true, 633), 633, $this->source), 'widget', ["type" => "hidden"]);
                echo "
                                                    ";
            } else {
                // line 635
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "product_name", [], "any", false, false, true, 635), 635, $this->source), 'widget');
                echo "
                                                    ";
            }
            // line 637
            echo "                                                </p>
                                                <span>
                                                    ";
            // line 639
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 639, $this->source); })()), "product_code", [], "any", false, false, true, 639), 639, $this->source), "html", null, true);
            echo "
                                                    ";
            // line 640
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 640, $this->source); })()), "class_category_name1", [], "any", false, false, true, 640))) {
                // line 641
                echo "                                                        / (
                                                        ";
                // line 642
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 642, $this->source); })()), "class_name1", [], "any", false, false, true, 642), 642, $this->source), "html", null, true);
                echo "：
                                                        ";
                // line 643
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 643, $this->source); })()), "class_category_name1", [], "any", false, false, true, 643), 643, $this->source), "html", null, true);
                echo "
                                                        ";
                // line 644
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 644, $this->source); })()), "class_category_name2", [], "any", false, false, true, 644))) {
                    // line 645
                    echo "                                                            /
                                                            ";
                    // line 646
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 646, $this->source); })()), "class_name2", [], "any", false, false, true, 646), 646, $this->source), "html", null, true);
                    echo "：
                                                            ";
                    // line 647
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 647, $this->source); })()), "class_category_name2", [], "any", false, false, true, 647), 647, $this->source), "html", null, true);
                    echo "
                                                        ";
                }
                // line 649
                echo "                                                        )
                                                    ";
            }
            // line 651
            echo "                                                </span>
                                                ";
            // line 652
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "product_name", [], "any", false, false, true, 652), 652, $this->source), 'errors');
            echo "
                                            </td>
                                            <!-- 金額 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col mt-3\">
                                                    ";
            // line 658
            echo "                                                    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 658, $this->source); })()), "isPoint", [], "any", false, false, true, 658)) {
                // line 659
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "price", [], "any", false, false, true, 659), 659, $this->source), 'widget', ["attr" => ["readonly" => "readonly", "class" => "pointPrice"]]);
                echo "
                                                    ";
            } else {
                // line 661
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "price", [], "any", false, false, true, 661), 661, $this->source), 'widget');
                echo "
                                                    ";
            }
            // line 663
            echo "                                                    <div class=\"text-end small\">(";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 663, $this->source); })()), "TaxDisplayType", [], "any", false, false, true, 663), 663, $this->source), "html", null, true);
            echo ")</div>
                                                    ";
            // line 664
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "price", [], "any", false, false, true, 664), 664, $this->source), 'errors');
            echo "
                                                </div>
                                            </td>
                                            <!-- 数量 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col-12 col-xl-8\">
                                                    ";
            // line 671
            echo "                                                    ";
            if (((twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 671, $this->source); })()), "isMultiple", [], "any", false, false, true, 671) && twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 671, $this->source); })()), "isProduct", [], "any", false, false, true, 671)) || twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 671, $this->source); })()), "isPoint", [], "any", false, false, true, 671))) {
                // line 672
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "quantity", [], "any", false, false, true, 672), 672, $this->source), 'widget', ["attr" => ["readonly" => "readonly"]]);
                echo "
                                                    ";
            } else {
                // line 674
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "quantity", [], "any", false, false, true, 674), 674, $this->source), 'widget');
                echo "
                                                    ";
            }
            // line 676
            echo "                                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "quantity", [], "any", false, false, true, 676), 676, $this->source), 'errors');
            echo "
                                                </div>
                                            </td>
                                            <!-- 税率 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col-12 col-xl-8\">
                                                    ";
            // line 683
            echo "                                                    ";
            if ((((twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 683, $this->source); })()), "isMultiple", [], "any", false, false, true, 683) && twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 683, $this->source); })()), "isProduct", [], "any", false, false, true, 683)) || twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 683, $this->source); })()), "isPoint", [], "any", false, false, true, 683)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 683, $this->source); })()), "TaxType", [], "any", false, false, true, 683), "id", [], "any", false, false, true, 683) == twig_constant("Eccube\\Entity\\Master\\TaxType::NON_TAXABLE")))) {
                // line 684
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "tax_rate", [], "any", false, false, true, 684), 684, $this->source), 'widget', ["attr" => ["readonly" => "readonly"]]);
                echo "
                                                    ";
            } else {
                // line 686
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "tax_rate", [], "any", false, false, true, 686), 686, $this->source), 'widget');
                echo "
                                                    ";
            }
            // line 688
            echo "                                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "tax_rate", [], "any", false, false, true, 688), 688, $this->source), 'errors');
            echo "
                                                </div>
                                            </td>
                                            <!-- 課税区分 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col\">
                                                    ";
            // line 694
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 694, $this->source); })()), "tax_type", [], "any", false, false, true, 694), 694, $this->source), "html", null, true);
            echo "
                                                </div>
                                            </td>
                                            <!-- 小計 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col\">
                                                    <span>";
            // line 700
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 700, $this->source); })()), "total_price", [], "any", false, false, true, 700), 700, $this->source)), "html", null, true);
            echo "</span>
                                                </div>
                                            </td>
                                            <td class=\"align-middle text-end pr-3\">
                                                <div class=\"row justify-content-end\">
                                                    ";
            // line 706
            echo "                                                    ";
            if (((twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 706, $this->source); })()), "isMultiple", [], "any", false, false, true, 706) && twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 706, $this->source); })()), "isProduct", [], "any", false, false, true, 706)) || twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 706, $this->source); })()), "isPoint", [], "any", false, false, true, 706))) {
                // line 707
                echo "                                                        <div class=\"col-auto text-center\">
                                                            <div class=\"d-inline-block mr-3\" data-tooltip=\"true\"
                                                                 data-placement=\"top\" title=\"";
                // line 709
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                                <a class=\"btn btn-ec-actionIcon disabled\">
                                                                    <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    ";
            } else {
                // line 716
                echo "                                                        <div class=\"col-auto text-center\">
                                                            <div class=\"d-inline-block mr-3\" data-tooltip=\"true\"
                                                                 data-placement=\"top\" title=\"";
                // line 718
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                                <a class=\"btn btn-ec-actionIcon\" data-bs-toggle=\"modal\" data-bs-target=\"#delete_";
                // line 719
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, true, 719), "id", [], "any", false, false, true, 719), 719, $this->source), "html", null, true);
                echo "\">
                                                                    <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </div>
                                                            <!-- 明細の削除確認モーダル -->
                                                            <div class=\"modal fade\" id=\"delete_";
                // line 724
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, true, 724), "id", [], "any", false, false, true, 724), 724, $this->source), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"delete_";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, true, 724), "id", [], "any", false, false, true, 724), 724, $this->source), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                                <div class=\"modal-dialog\" role=\"document\">
                                                                    <div class=\"modal-content\">
                                                                        <div class=\"modal-header\">
                                                                            <h5 class=\"modal-title fw-bold\">";
                // line 728
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
                echo "</h5>
                                                                            <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                                        </div>
                                                                        <div class=\"modal-body text-start\">
                                                                            <p class=\"text-start\">";
                // line 732
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delete_item__confirm_message", ["%name%" => twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 732, $this->source); })()), "product_name", [], "any", false, false, true, 732)]), "html", null, true);
                echo "</p>
                                                                        </div>
                                                                        <div class=\"modal-footer\">
                                                                            <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">";
                // line 735
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                echo "</button>
                                                                            <a href=\"#order-product\" class=\"btn delete btn-ec-delete\">";
                // line 736
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ";
            }
            // line 743
            echo "                                                </div>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItemForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 747
        echo "                                    </tbody>
                                </table>
                                <hr class=\"mt-0\">
                                <!-- 小計 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 752
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.subtotal"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle font-weight-normal\">";
        // line 753
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 753, $this->source); })()), "subtotal", [], "any", false, false, true, 753), 753, $this->source)), "html", null, true);
        echo "</span></div>
                                </div>
                                <!-- 送料 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 757
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_fee"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle font-weight-normal\">";
        // line 758
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 758, $this->source); })()), "delivery_fee_total", [], "any", false, false, true, 758), 758, $this->source)), "html", null, true);
        echo "</span></div>
                                </div>
                                <!-- 手数料 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 762
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.charge"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle font-weight-normal\">";
        // line 763
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 763, $this->source); })()), "charge", [], "any", false, false, true, 763), 763, $this->source)), "html", null, true);
        echo "</span></div>
                                </div>
                                <!-- 値引き -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 767
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.discount"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle text-danger font-weight-normal\">";
        // line 768
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 768, $this->source); })()), "taxable_discount", [], "any", false, false, true, 768), 768, $this->source)), "html", null, true);
        echo "</span></div>
                                </div>
                                <hr>
                                <!-- 合計 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 773
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.total"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle font-weight-normal\">";
        // line 774
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 774, $this->source); })()), "taxable_total", [], "any", false, false, true, 774), 774, $this->source)), "html", null, true);
        echo "</span></div>
                                </div>
";
        // line 782
        echo "                                <hr>
                                ";
        // line 783
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 783, $this->source); })()), "tax_free_discount_items", [], "any", false, false, true, 783));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 784
            echo "                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
            // line 785
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "product_name", [], "any", false, false, true, 785), 785, $this->source), "html", null, true);
            echo "</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle text-danger font-weight-normal\">";
            // line 786
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, true, 786), 786, $this->source)), "html", null, true);
            echo "</span></div>
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 789
        echo "                                <!-- お支払い合計 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 791
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.payment_total"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle font-weight-normal\">";
        // line 792
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 792, $this->source); })()), "payment_total", [], "any", false, false, true, 792), 792, $this->source)), "html", null, true);
        echo "</span></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .card.rounded -->

                    <!-- ショップ用メモ欄 -->
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 803
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.shop_memo"), "html", null, true);
        echo "\"><span class=\"card-title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.shop_memo"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></span></div>
                                </div>
                                <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#freeArea\" aria-expanded=\"false\" aria-controls=\"freeArea\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"freeArea\">
                            <div class=\"card-body\">
                                ";
        // line 810
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 810, $this->source); })()), "note", [], "any", false, false, true, 810), 810, $this->source), 'widget', ["attr" => ["rows" => 8]]);
        echo "
                            </div>
                        </div>
                    </div><!-- .card.rounded -->

                    <!-- 定期履歴 -->
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\"><span class=\"card-title\">";
        // line 820
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.regular_order_edit.order_history"), "html", null, true);
        echo "</span></div>
                                </div>
                                <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#orderHistoryArea\" aria-expanded=\"false\" aria-controls=\"freeArea\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"orderHistoryArea\">
                            <div class=\"card-body\">
                                <table class=\"table table-striped\">
                                    <thead>
                                        <tr>
                                            <th>回数</th>
                                            <th>受注番号</th>
                                            <th>作成日時</th>
                                            <th>更新日時</th>
                                            <th>入金日</th>
                                            <th>発送日</th>
                                            <th>支払方法</th>
                                            <th>対応状況</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 841
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["OrderHistories"]) || array_key_exists("OrderHistories", $context) ? $context["OrderHistories"] : (function () { throw new RuntimeError('Variable "OrderHistories" does not exist.', 841, $this->source); })()));
        foreach ($context['_seq'] as $context["index"] => $context["Order"]) {
            // line 842
            echo "                                        <tr>
                                            <td>";
            // line 843
            echo twig_escape_filter($this->env, ($context["index"] + 1), "html", null, true);
            echo "</td>
                                            <td><a href=\"";
            // line 844
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 844)]), "html", null, true);
            echo "\" target=\"blank\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, true, 844), 844, $this->source), "html", null, true);
            echo "</a></td>
                                            <td>";
            // line 845
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "create_date", [], "any", false, false, true, 845), 845, $this->source), "Y/m/d H:m:s"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 846
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "update_date", [], "any", false, false, true, 846), 846, $this->source), "Y/m/d H:m:s"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 847
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getDateFormatFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "payment_date", [], "any", false, false, true, 847), 847, $this->source)), "html", null, true);
            echo "</td>
                                            <td>";
            // line 848
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getDateFormatFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "Shippings", [], "any", false, false, true, 848), 0, [], "array", false, false, true, 848), "shipping_date", [], "any", false, false, true, 848), 848, $this->source)), "html", null, true);
            echo "</td>
                                            <td>";
            // line 849
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "payment_method", [], "any", false, false, true, 849), 849, $this->source), "html", null, true);
            echo "</td>
                                            <td>";
            // line 850
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "OrderStatus", [], "any", false, false, true, 850), 850, $this->source), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['Order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 853
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                </div>
            </div>
        </div>

        <!-- コンバージョンエリア -->
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"";
        // line 868
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eccube_payment_lite42_admin_regular_index", ["resume" => 1]);
        echo "\"><i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.back"), "html", null, true);
        echo "</span></a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button type=\"submit\" class=\"btn btn-ec-conversion px-5\" name=\"mode\" value=\"register\">";
        // line 874
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
        return "EccubePaymentLite42/Resource/template/admin/Regular/Order/edit.twig";
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
        return array (  1734 => 874,  1723 => 868,  1706 => 853,  1697 => 850,  1693 => 849,  1689 => 848,  1685 => 847,  1681 => 846,  1677 => 845,  1671 => 844,  1667 => 843,  1664 => 842,  1660 => 841,  1636 => 820,  1623 => 810,  1611 => 803,  1597 => 792,  1593 => 791,  1589 => 789,  1580 => 786,  1576 => 785,  1573 => 784,  1569 => 783,  1566 => 782,  1561 => 774,  1557 => 773,  1549 => 768,  1545 => 767,  1538 => 763,  1534 => 762,  1527 => 758,  1523 => 757,  1516 => 753,  1512 => 752,  1505 => 747,  1496 => 743,  1486 => 736,  1482 => 735,  1476 => 732,  1469 => 728,  1460 => 724,  1452 => 719,  1448 => 718,  1444 => 716,  1434 => 709,  1430 => 707,  1427 => 706,  1419 => 700,  1410 => 694,  1400 => 688,  1394 => 686,  1388 => 684,  1385 => 683,  1375 => 676,  1369 => 674,  1363 => 672,  1360 => 671,  1351 => 664,  1346 => 663,  1340 => 661,  1334 => 659,  1331 => 658,  1323 => 652,  1320 => 651,  1316 => 649,  1311 => 647,  1307 => 646,  1304 => 645,  1302 => 644,  1298 => 643,  1294 => 642,  1291 => 641,  1289 => 640,  1285 => 639,  1281 => 637,  1275 => 635,  1269 => 633,  1263 => 631,  1257 => 628,  1252 => 627,  1249 => 626,  1246 => 625,  1239 => 620,  1235 => 619,  1231 => 618,  1226 => 617,  1223 => 615,  1220 => 614,  1216 => 613,  1207 => 607,  1201 => 604,  1195 => 601,  1189 => 598,  1183 => 595,  1178 => 593,  1169 => 590,  1162 => 586,  1156 => 583,  1144 => 574,  1135 => 569,  1125 => 562,  1121 => 561,  1117 => 560,  1110 => 556,  1101 => 551,  1098 => 550,  1084 => 540,  1075 => 533,  1068 => 529,  1064 => 528,  1056 => 523,  1052 => 522,  1047 => 520,  1039 => 515,  1035 => 514,  1028 => 512,  1017 => 504,  1013 => 503,  1005 => 498,  1001 => 497,  993 => 492,  989 => 491,  981 => 486,  977 => 485,  973 => 484,  964 => 480,  955 => 474,  951 => 473,  945 => 470,  941 => 469,  932 => 465,  923 => 459,  919 => 458,  913 => 455,  909 => 454,  900 => 450,  893 => 445,  888 => 442,  886 => 441,  881 => 439,  877 => 437,  875 => 436,  872 => 435,  848 => 432,  845 => 431,  842 => 430,  840 => 429,  834 => 428,  831 => 427,  814 => 426,  810 => 424,  808 => 423,  806 => 422,  794 => 415,  778 => 402,  774 => 401,  769 => 399,  762 => 395,  758 => 394,  753 => 392,  746 => 388,  742 => 387,  735 => 385,  728 => 381,  724 => 380,  717 => 378,  705 => 369,  701 => 368,  693 => 363,  689 => 362,  681 => 357,  677 => 356,  669 => 351,  665 => 350,  661 => 349,  652 => 345,  643 => 339,  639 => 338,  633 => 335,  629 => 334,  620 => 330,  611 => 324,  607 => 323,  601 => 320,  597 => 319,  588 => 315,  581 => 311,  577 => 310,  565 => 309,  558 => 307,  549 => 301,  543 => 298,  516 => 297,  511 => 295,  496 => 283,  492 => 282,  480 => 273,  476 => 272,  468 => 266,  463 => 263,  458 => 261,  453 => 260,  451 => 259,  446 => 256,  444 => 255,  438 => 252,  430 => 247,  423 => 243,  413 => 236,  409 => 235,  399 => 228,  390 => 222,  381 => 216,  372 => 210,  345 => 186,  341 => 185,  328 => 175,  322 => 172,  311 => 164,  303 => 158,  293 => 157,  265 => 138,  173 => 49,  150 => 29,  130 => 11,  120 => 10,  101 => 5,  82 => 4,  71 => 1,  69 => 8,  67 => 7,  65 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@admin/default_frame.twig' %}
{% set menus = ['regular', 'order'] %}

{% block title %}定期受注編集{% endblock %}
{% block sub_title %}定期管理{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}
{% form_theme searchProductModalForm '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block javascript %}
<script src=\"https://yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
<script>
    \$(function() {
        // 項目数が多く、入力している項目によってEnter押下時に期待する動作が変わるので、いったん禁止
        \$('input').on('keydown', function(e) {
            if ((e.which && e.which === 13) || (e.keyCode && e.keyCode === 13)) {
                return false;
            } else {
                return true;
            }
        });

        // 商品検索
        \$('#searchProductModalButton').on('click', function() {
            var list = \$('#searchProductModalList');
            list.children().remove();

            \$.ajax({
                url: '{{ url('eccube_payment_lite42_admin_regular_order_search_product') }}',
                type: 'POST',
                dataType: 'html',
                data: {
                    'id': \$('#admin_search_product_id').val(),
                    'category_id': \$('#admin_search_product_category_id').val()
                }
            }).done(function(data) {
                \$('#searchProductModalList').html(data);
            }).fail(function(data) {
                alert('search product failed.');
            });
        });

        // その他明細
        \$('#addOrderItemType').on('show.bs.modal', function(e) {
            var list = \$('#searchOrderItemTypeList');
            list.children().remove();

            \$.ajax({
                url: '{{ url('admin_order_search_order_item_type') }}',
                type: 'POST',
                dataType: 'html'
            }).done(function(data) {
                \$('#searchOrderItemTypeList').html(data);
            }).fail(function(data) {
                alert('search order item type failed.');
            });
        });

        // ページング処理
        \$(document).on('click', '#searchProductModalList ul.pagination li.page-item a.page-link', function(e) {
            e.preventDefault();
            var list = \$('#searchProductModalList');
            list.children().remove();
            var url = \$(this).attr('href');
            \$.ajax({
                url: url,
                type: 'GET',
                dataType: 'html'
            }).done(function(data) {
                \$('#searchProductModalList').html(data);
            }).fail(function(data) {
                alert('search product failed.');
            });
        });

        // 商品追加
        \$collectionHolder = \$('#table-form-field');
        index = \$collectionHolder.find('tbody > tr').length;
        formIdPrefix = '#regular_order_RegularOrderItems_';

        \$(document).on('click', '.delete', function(e) {
            // 商品削除
            \$(this).parents('tr').remove();
            index--;
            \$(\"#calculate\").trigger('click');
        });

        // 計算結果の更新が押されたらページ内リンクさせる
        \$('.btn').click(function() {
            var data = \$(this).data();
            if (data.link) {
                \$('#form1').attr('action', '#' + data.link).submit();
                return false;
            }
        });

        // 注文者情報をコピー
        \$('.copy-customer').on('click', function() {
            \$('#regular_order_RegularShipping_name_name01').val(\$('#regular_order_name_name01').val());
            \$('#regular_order_RegularShipping_name_name02').val(\$('#regular_order_name_name02').val());
            \$('#regular_order_RegularShipping_kana_kana01').val(\$('#regular_order_kana_kana01').val());
            \$('#regular_order_RegularShipping_kana_kana02').val(\$('#regular_order_kana_kana02').val());
            \$('#regular_order_RegularShipping_postal_code').val(\$('#regular_order_postal_code').val());
            \$('#regular_order_RegularShipping_address_pref').val(\$('#regular_order_address_pref').val());
            \$('#regular_order_RegularShipping_address_addr01').val(\$('#regular_order_address_addr01').val());
            \$('#regular_order_RegularShipping_address_addr02').val(\$('#regular_order_address_addr02').val());
            \$('#regular_order_RegularShipping_email').val(\$('#regular_order_email').val());
            \$('#regular_order_RegularShipping_phone_number').val(\$('#regular_order_phone_number').val());
            \$('#regular_order_RegularShipping_company_name').val(\$('#regular_order_company_name').val());
        });

        // お届け時間の初期表示
        \$('#regular_order_RegularShipping_Delivery').change();

        var confirmFormChange = function(form, target, modal) {
            var returnLink = form.find('input[type=\"hidden\"][name*=\"return_link\"]'),
                saveBtn = modal.find('a[data-action=\"save\"]'),
                cancelBtn = modal.find('a[data-action=\"cancel\"]');
            modal.on('hidden.bs.modal', function() {
                returnLink.val('');
            });
            saveBtn.on('click', function() {
                returnLink.val(\$(this).data('return-link'));
                \$('#form1').append('<input type=\"hidden\" name=\"mode\" value=\"register\">');
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

        // 配送業者選択時にお届け時間を設定
        var times = {{ shippingDeliveryTimes|raw }};
        \$('#regular_order_RegularShipping_Delivery').change(function() {
            var deliveryId = \$(this).val();
            var \$shippingDeliveryTime = \$('#regular_order_RegularShipping_DeliveryTime');
            \$shippingDeliveryTime.find('option').remove();
            \$shippingDeliveryTime.append(\$('<option></option>').val('').text('指定なし'));
            if (typeof(times[deliveryId]) !== 'undefined') {
                for (var timeId in times[deliveryId]) {
                    timeValue = times[deliveryId][timeId];
                    \$shippingDeliveryTime.append(\$('<option></option>')
                        .val(timeId)
                        .text(timeValue));
                }
            }
        });
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
                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
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

    <form name=\"form1\" id=\"form1\" method=\"post\" action=\"?\">
        <input type=\"hidden\" name=\"mode\" value=\"\">
        <input type=\"hidden\" name=\"modal\" value=\"\">
        {{ form_widget(form._token) }}
        {{ form_widget(form.return_link) }}
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"定期情報の確認ができます。\">
                                        <span class=\"card-title\">定期情報</span>
                                        <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#orderOverview\" aria-expanded=\"false\" aria-controls=\"orderOverview\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"orderOverview\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\">
                                                定期ID
                                            </div>
                                            <div class=\"col\">{{ RegularOrder.id }}</div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\">
                                                定期回数
                                            </div>
                                            <div class=\"col\">{{ RegularOrder.regular_order_count }}回</div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\">
                                                定期継続状況
                                            </div>
                                            <div class=\"col\">{{ RegularOrder.RegularStatus.name }}</div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\">
                                                支払方法
                                            </div>
                                            <div class=\"col\">{{ RegularOrder.payment_method }}</div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\">
                                                定期サイクル
                                            </div>
                                            <div class=\"col\">
                                                {{ form_widget(form.RegularCycle) }}
                                                {{ form_errors(form.RegularCycle) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\"><i class=\"fa fa-inbox fa-fw mr-1\" aria-hidden=\"true\"></i>作成日時</div>
                                            <div class=\"col\">{{ RegularOrder.order_date ? RegularOrder.order_date|date_sec : '' }}</div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\"><i class=\"fa fa-refresh fa-fw mr-1\" aria-hidden=\"true\"></i>更新日時</div>
                                            <div class=\"col\">{{ RegularOrder.update_date ? RegularOrder.update_date|date_sec : '' }}</div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\"><i class=\"fa fa-truck fa-fw mr-1\" aria-hidden=\"true\"></i>前回お届け日</div>
                                            <div class=\"col\">
                                                {{ RegularOrder.RegularShippings.first.shippingDeliveryDate|date_day_with_weekday }}
                                            </div>
                                        </div>
                                        {% if form.RegularStatus is defined %}
                                            <div class=\"row mb-3 form-group\">
                                                <label class=\"col-3 col-form-label\">定期ステータス</label>
                                                <div class=\"col\">
                                                    {% if RegularOrder.id is not empty %}
                                                        {{ form_widget(form.RegularStatus) }}
                                                        {{ form_errors(form.RegularStatus) }}
                                                    {% endif %}
                                                </div>
                                            </div>
                                        {% endif %}
                                        <div class=\"row mb-3 form-group\">
                                            <label class=\"col-3 col-form-label\">
                                                <i class=\"fa fa-calendar-check-o fa-fw mr-1\" aria-hidden=\"true\"></i>
                                                次回お届け予定日
                                            </label>
                                            <div class=\"col\">
                                                {{ form_widget(form.RegularShipping.next_delivery_date) }}
                                                {{ form_errors(form.RegularShipping.next_delivery_date) }}
                                            </div>
                                        </div>
                                        <div class=\"row mb-3 form-group\">
                                            <label class=\"col-3 col-form-label\">
                                                <i class=\"fa fa-clock-o fa-fw mr-1\" aria-hidden=\"true\"></i>
                                                次回お届け時間
                                            </label>
                                            <div class=\"col\">
                                                {{ form_widget(form.RegularShipping.DeliveryTime) }}
                                                {{ form_errors(form.RegularShipping.DeliveryTime) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-2\">
                                    <div class=\"d-inline-block\"><span class=\"card-title\">{{ 'admin.order.orderer'|trans }}</span></div>
                                </div>
                                <div class=\"col\">{% if id %}<span class=\"mr-5\">{% if form.Customer.vars.value is empty %}{{ 'admin.order.non_member'|trans }}{% else %}<a href=\"{{ url('admin_customer_edit', {'id': form.Customer.vars.value}) }}\">{{ form.Customer.vars.value }}</a>{% endif %}</span>{{ RegularOrder.full_name }} ({{ RegularOrder.full_name_kana }}) 〒{{ RegularOrder.postal_code }} {{ RegularOrder.pref }}{{ RegularOrder.addr01 }}{{ RegularOrder.addr02 }} {{ RegularOrder.email }}{% endif %}</div>
                                <div class=\"col-1 text-end\"><a class=\"d-block\" data-bs-toggle=\"collapse\" href=\"#ordererInfo\" aria-expanded=\"false\" aria-controls=\"ordererInfo\"><i class=\"fa {{ id ? 'fa-angle-down' : 'fa-angle-up' }} fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse {{ id ? '' : 'show' }} ec-cardCollapse h-adr\" id=\"ordererInfo\">
                            <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <div class=\"row\">
                                            <label class=\"col-3 col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.order.customer_id'|trans }}\">{{ 'admin.customer.customer_id'|trans }}<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                            <div class=\"col\">
                                                <p id=\"order_CustomerId\">{% if form.Customer.vars.value is empty %}{{ 'admin.order.non_member'|trans }}{% else %}<a href=\"{{ url('admin_customer_edit', {'id': form.Customer.vars.value}) }}\">{{ form.Customer.vars.value }}</a>{% endif %}</p>
                                                {{ form_widget(form.Customer) }}
                                                {{ form_errors(form.Customer) }}
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">{{ 'admin.common.name'|trans }}<span class=\"badge bg-primary ml-1\">{{ 'admin.common.required'|trans }}</span></label>
                                            <div class=\"col\">
                                                <div class=\"row\">
                                                    <div class=\"col\">
                                                        {{ form_widget(form.name.name01) }}
                                                        {{ form_errors(form.name.name01) }}
                                                    </div>
                                                    <div class=\"col\">
                                                        {{ form_widget(form.name.name02) }}
                                                        {{ form_errors(form.name.name02) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">{{ 'admin.common.kana'|trans }}<span class=\"badge bg-primary ml-1\">{{ 'admin.common.required'|trans }}</span></label>
                                            <div class=\"col\">
                                                <div class=\"row\">
                                                    <div class=\"col\">
                                                        {{ form_widget(form.kana.kana01) }}
                                                        {{ form_errors(form.kana.kana01) }}
                                                    </div>
                                                    <div class=\"col\">
                                                        {{ form_widget(form.kana.kana02) }}
                                                        {{ form_errors(form.kana.kana02) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">{{ 'admin.common.address'|trans }}<span class=\"badge bg-primary ml-1\">{{ 'admin.common.required'|trans }}</span></label>
                                            <div class=\"col\">
                                                <div class=\"row mb-3\">
                                                    <div class=\"col form-inline\">
                                                        {{ 'admin.common.postal_symbol'|trans }}
                                                        {{ form_widget(form.postal_code) }}
                                                        {{ form_errors(form.postal_code) }}
                                                    </div>
                                                </div>
                                                <div class=\"row mb-3\">
                                                    <div class=\"col\">
                                                        {{ form_widget(form.address.pref) }}
                                                        {{ form_errors(form.address.pref) }}
                                                    </div>
                                                </div>
                                                <div class=\"row mb-3\">
                                                    <div class=\"col\">
                                                        {{ form_widget(form.address.addr01) }}
                                                        {{ form_errors(form.address.addr01) }}
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"col\">
                                                        {{ form_widget(form.address.addr02) }}
                                                        {{ form_errors(form.address.addr02) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col-6\">
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">{{ 'admin.common.mail_address'|trans }}<span class=\"badge bg-primary ml-1\">{{ 'admin.common.required'|trans }}</span></label>
                                            <div class=\"col\">
                                                {{ form_widget(form.email) }}
                                                {{ form_errors(form.email) }}
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">{{ 'admin.common.phone_number'|trans }}<span class=\"badge bg-primary ml-1\">{{ 'admin.common.required'|trans }}</span></label>
                                            <div class=\"col\">
                                                {{ form_widget(form.phone_number) }}
                                                {{ form_errors(form.phone_number) }}
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">{{ 'admin.common.company_name'|trans }}</label>
                                            <div class=\"col\">
                                                {{ form_widget(form.company_name) }}
                                                {{ form_errors(form.company_name) }}
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">{{ 'admin.order.message'|trans }}</label>
                                            <div class=\"col\">
                                                {{ form_widget(form.message, { attr : {'rows': 8 }}) }}
                                                {{ form_errors(form.message) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.order.shipping_info'|trans }}\"><span class=\"card-title\">{{ 'admin.order.shipping_info'|trans }}</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                </div>
                                <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#shippingInfo\" aria-expanded=\"false\" aria-controls=\"shippingInfo\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"shippingInfo\">
                            <div class=\"card-body\">
                                {% if RegularOrder.isMultiple %}
                                    {# 複数配送の場合は配送先の表示のみ #}
                                    <div class=\"mb-3\">
                                    </div>
                                    {% for shipping in RegularOrder.Shippings %}
                                        <div class=\"col\">
                                            <span class=\"mr-5\">{{ 'admin.order.delivery'|trans }}({{ loop.index }})</span>
                                            {% set shipping_name = shipping.full_name ~ '(' ~ shipping.full_name_kana ~ ')' ~ shipping.company_name is not null ? shipping.company_name : '' %}
                                            {% set shipping_addr = 'admin.common.postal_symbol'|trans ~ shipping.postal_code ~ ' ' ~ shipping.pref ~ shipping.addr01 ~ shipping.addr02 %}
                                            {% set shipping_date = shipping.shipping_date is not null ? shipping.shipping_date|date_day : '' %}
                                            {{ shipping_name }} {{ shipping_addr }} {{ shipping.phone_number }} {{ shipping_date }}
                                        </div>
                                    {% endfor %}
                                {% else %}
                                    {# 単数配送の場合は配送先の編集が可能 #}
                                    <div class=\"row mb-3\">
                                        <div class=\"col-6\">
                                            <button type=\"button\" class=\"btn btn-ec-regular copy-customer\">{{ 'admin.order.copy_orderer'|trans }}</button>
                                        </div>
                                        {% if RegularOrder.id is not empty %}
                                            <div class=\"col-6 text-end\">
                                            </div>
                                        {% endif %}
                                    </div>
                                    <div class=\"row h-adr\">
                                        <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">{{ 'admin.common.name'|trans }}<span class=\"badge bg-primary ml-1\">{{ 'admin.common.required'|trans }}</span></label>
                                                <div class=\"col\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            {{ form_widget(form.RegularShipping.name.name01) }}
                                                            {{ form_errors(form.RegularShipping.name.name01) }}
                                                        </div>
                                                        <div class=\"col\">
                                                            {{ form_widget(form.RegularShipping.name.name02) }}
                                                            {{ form_errors(form.RegularShipping.name.name02) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">{{ 'admin.common.kana'|trans }}<span class=\"badge bg-primary ml-1\">{{ 'admin.common.required'|trans }}</span></label>
                                                <div class=\"col\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            {{ form_widget(form.RegularShipping.kana.kana01) }}
                                                            {{ form_errors(form.RegularShipping.kana.kana01) }}
                                                        </div>
                                                        <div class=\"col\">
                                                            {{ form_widget(form.RegularShipping.kana.kana02) }}
                                                            {{ form_errors(form.RegularShipping.kana.kana02) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">{{ 'admin.common.address'|trans }}<span class=\"badge bg-primary ml-1\">{{ 'admin.common.required'|trans }}</span></label>
                                                <div class=\"col\">
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col form-inline\">
                                                            {{ 'admin.common.postal_symbol'|trans }}
                                                            {{ form_widget(form.RegularShipping.postal_code) }}
                                                            {{ form_errors(form.RegularShipping.postal_code) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col\">
                                                            {{ form_widget(form.RegularShipping.address.pref) }}
                                                            {{ form_errors(form.RegularShipping.address.pref) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col\">
                                                            {{ form_widget(form.RegularShipping.address.addr01) }}
                                                            {{ form_errors(form.RegularShipping.address.addr01) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            {{ form_widget(form.RegularShipping.address.addr02) }}
                                                            {{ form_errors(form.RegularShipping.address.addr02) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">{{ 'admin.common.phone_number'|trans }}<span class=\"badge bg-primary ml-1\">{{ 'admin.common.required'|trans }}</span></label>
                                                <div class=\"col\">
                                                    {{ form_widget(form.RegularShipping.phone_number) }}
                                                    {{ form_errors(form.RegularShipping.phone_number) }}
                                                </div>
                                            </div>

                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">{{ 'admin.common.company_name'|trans }}</label>
                                                <div class=\"col\">
                                                    {{ form_widget(form.RegularShipping.company_name) }}
                                                    {{ form_errors(form.RegularShipping.company_name) }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"d-none\">
                                            {{ form_widget(form.RegularShipping.Delivery) }}
                                            {{ form_errors(form.RegularShipping.Delivery) }}
                                        </div>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <div id=\"order-product\" class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.order.product_info'|trans }}\"><span class=\"card-title\">{{ 'admin.order.product_info'|trans }}<i class=\"fa fa-question-circle fa-lg ml-1\"></i></span></div>
                                </div>
                                <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#orderItem\" aria-expanded=\"false\" aria-controls=\"orderItem\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"orderItem\">
                            <div class=\"card-body\">
                                <div class=\"row justify-content-between mb-2\">
                                    <div class=\"col-6\">
                                        {# 複数配送の場合は商品追加できない #}
                                        {% if not RegularOrder.isMultiple %}
                                            <a class=\"btn btn-ec-regular mr-2 add\" data-bs-toggle=\"modal\" data-bs-target=\"#addProduct\">{{ 'admin.order.add_product_item'|trans }}</a>
                                            <div class=\"modal fade\" id=\"addProduct\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addProduct\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog modal-lg\" role=\"document\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <h5 class=\"modal-title\">{{ 'admin.order.add_product_item'|trans }}</h5>
                                                            <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            {{ form_widget(searchProductModalForm.id, { attr : {'class': 'mb-3', 'placeholder': 'admin.product.multi_search_label' }}) }}
                                                            {{ form_widget(searchProductModalForm.category_id) }}
                                                            <button type=\"button\" id=\"searchProductModalButton\" class=\"btn btn-ec-conversion px-5 mb-4 mt-2\">{{ 'admin.common.search'|trans }}</button>
                                                            <div id=\"searchProductModalList\"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        {% endif %}
                                        <a class=\"btn btn-ec-regular mr-2\" data-bs-toggle=\"modal\" data-bs-target=\"#addOrderItemType\">{{ 'admin.order.add_other_item'|trans }}</a>
                                        <div class=\"modal fade\" id=\"addOrderItemType\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addOrderItemType\" aria-hidden=\"true\">
                                            <div class=\"modal-dialog modal-lg\" role=\"document\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <h5 class=\"modal-title\">{{ 'admin.order.add_other_item'|trans }}</h5>
                                                        <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                    </div>
                                                    <div class=\"modal-body\">
                                                        <div id=\"searchOrderItemTypeList\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{ form_errors(form.RegularOrderItemsErrors) }}
                                    </div>
                                    <div class=\"col-5 text-end\">
                                        <button type=\"submit\" class=\"btn btn-ec-regular mr-2\" name=\"mode\" value=\"calc\" data-link=\"order-product\" id=\"calculate\">{{ 'admin.order.update_calculation_results'|trans }}</button>
                                    </div>
                                </div>
                                <table id=\"table-form-field\" class=\"table table-striped table-sm mb-0\"
                                       data-prototype=\"{% apply escape %}{{ include('@admin/Order/order_item_prototype.twig', {'orderItemForm': form.RegularOrderItems.vars.prototype}) }}{% endapply %}\">
                                    <thead class=\"table-active\">
                                    <tr class=\"text-nowrap\">
                                        <th class=\"pt-2 pb-2 pl-3\">{{ 'admin.product.product_name_and_code'|trans }}</th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">{{ 'admin.order.amount'|trans }}</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">{{ 'admin.order.quantity'|trans }}</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">{{ 'admin.order.tax_rate'|trans }}</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">{{ 'admin.order.tax_type'|trans }}</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">{{ 'admin.order.subtotal'|trans }}</div>
                                        </th>
                                        <th class=\"pt-2 pb-2 pr-3\"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for orderItemForm in form.RegularOrderItems %}
                                        {% set OrderItem = orderItemForm.vars.data %}
                                        <tr>
                                            {# hidden values #}
                                            {{ form_widget(orderItemForm.ProductClass) }}
                                            {{ form_widget(orderItemForm.order_item_type) }}
                                            {{ form_widget(orderItemForm.tax_type) }}
                                            {{ form_widget(orderItemForm.point_rate) }}
                                            <!-- 商品名 -->
                                            <td class=\"align-middle w-25 pl-3\">
                                                <p class=\"mb-0 fw-bold\">
                                                    {# 商品とポイント値引きは名前変更できない #}
                                                    {% if OrderItem.isProduct or OrderItem.isPoint %}
                                                        {% if OrderItem.isProduct %}
                                                            <a href=\"{{ url('admin_product_product_edit', {id: OrderItem.ProductClass.Product.id}) }}\" target=\"_blank\">
                                                                {{ OrderItem.product_name }}
                                                            </a>
                                                        {% else %}
                                                            {{ OrderItem.product_name }}
                                                        {% endif %}
                                                        {{ form_widget(orderItemForm.product_name, { 'type': 'hidden' }) }}
                                                    {% else %}
                                                        {{ form_widget(orderItemForm.product_name) }}
                                                    {% endif %}
                                                </p>
                                                <span>
                                                    {{ OrderItem.product_code }}
                                                    {% if OrderItem.class_category_name1 is not empty %}
                                                        / (
                                                        {{ OrderItem.class_name1 }}：
                                                        {{ OrderItem.class_category_name1 }}
                                                        {% if OrderItem.class_category_name2 is not empty %}
                                                            /
                                                            {{ OrderItem.class_name2 }}：
                                                            {{ OrderItem.class_category_name2 }}
                                                        {% endif %}
                                                        )
                                                    {% endif %}
                                                </span>
                                                {{ form_errors(orderItemForm.product_name) }}
                                            </td>
                                            <!-- 金額 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col mt-3\">
                                                    {# ポイント値引きは価格変更できない #}
                                                    {% if OrderItem.isPoint %}
                                                        {{ form_widget(orderItemForm.price, {'attr': { 'readonly': 'readonly', 'class': 'pointPrice' } }) }}
                                                    {% else %}
                                                        {{ form_widget(orderItemForm.price) }}
                                                    {% endif %}
                                                    <div class=\"text-end small\">({{ OrderItem.TaxDisplayType }})</div>
                                                    {{ form_errors(orderItemForm.price) }}
                                                </div>
                                            </td>
                                            <!-- 数量 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col-12 col-xl-8\">
                                                    {# 複数配送の場合は商品の個数を変更できない、ポイントの場合も個数を変更できない #}
                                                    {% if (RegularOrder.isMultiple and OrderItem.isProduct) or OrderItem.isPoint %}
                                                        {{ form_widget(orderItemForm.quantity, { 'attr': { 'readonly': 'readonly' } }) }}
                                                    {% else %}
                                                        {{ form_widget(orderItemForm.quantity) }}
                                                    {% endif %}
                                                    {{ form_errors(orderItemForm.quantity) }}
                                                </div>
                                            </td>
                                            <!-- 税率 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col-12 col-xl-8\">
                                                    {# 複数配送・ポイント明細・不課税明細は商品の税率を変更できない #}
                                                    {% if (RegularOrder.isMultiple and OrderItem.isProduct) or OrderItem.isPoint or OrderItem.TaxType.id == constant('Eccube\\\\Entity\\\\Master\\\\TaxType::NON_TAXABLE') %}
                                                        {{ form_widget(orderItemForm.tax_rate, { 'attr': { 'readonly': 'readonly' } }) }}
                                                    {% else %}
                                                        {{ form_widget(orderItemForm.tax_rate) }}
                                                    {% endif %}
                                                    {{ form_errors(orderItemForm.tax_rate) }}
                                                </div>
                                            </td>
                                            <!-- 課税区分 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col\">
                                                    {{ OrderItem.tax_type }}
                                                </div>
                                            </td>
                                            <!-- 小計 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col\">
                                                    <span>{{ OrderItem.total_price|price }}</span>
                                                </div>
                                            </td>
                                            <td class=\"align-middle text-end pr-3\">
                                                <div class=\"row justify-content-end\">
                                                    {# 複数配送の場合は商品を削除できない #}
                                                    {% if (RegularOrder.isMultiple and OrderItem.isProduct) or OrderItem.isPoint %}
                                                        <div class=\"col-auto text-center\">
                                                            <div class=\"d-inline-block mr-3\" data-tooltip=\"true\"
                                                                 data-placement=\"top\" title=\"{{ 'admin.common.delete'|trans }}\">
                                                                <a class=\"btn btn-ec-actionIcon disabled\">
                                                                    <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    {% else %}
                                                        <div class=\"col-auto text-center\">
                                                            <div class=\"d-inline-block mr-3\" data-tooltip=\"true\"
                                                                 data-placement=\"top\" title=\"{{ 'admin.common.delete'|trans }}\">
                                                                <a class=\"btn btn-ec-actionIcon\" data-bs-toggle=\"modal\" data-bs-target=\"#delete_{{ orderItemForm.vars.id }}\">
                                                                    <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </div>
                                                            <!-- 明細の削除確認モーダル -->
                                                            <div class=\"modal fade\" id=\"delete_{{ orderItemForm.vars.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"delete_{{ orderItemForm.vars.id }}\" aria-hidden=\"true\">
                                                                <div class=\"modal-dialog\" role=\"document\">
                                                                    <div class=\"modal-content\">
                                                                        <div class=\"modal-header\">
                                                                            <h5 class=\"modal-title fw-bold\">{{ 'admin.common.delete_modal__title'|trans }}</h5>
                                                                            <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                                        </div>
                                                                        <div class=\"modal-body text-start\">
                                                                            <p class=\"text-start\">{{ 'admin.order.delete_item__confirm_message'|trans({ '%name%' : OrderItem.product_name }) }}</p>
                                                                        </div>
                                                                        <div class=\"modal-footer\">
                                                                            <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}</button>
                                                                            <a href=\"#order-product\" class=\"btn delete btn-ec-delete\">{{ 'admin.common.delete'|trans }}</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    {% endif %}
                                                </div>
                                            </td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                                <hr class=\"mt-0\">
                                <!-- 小計 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">{{ 'admin.order.subtotal'|trans }}</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle font-weight-normal\">{{ RegularOrder.subtotal|price }}</span></div>
                                </div>
                                <!-- 送料 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">{{ 'admin.order.delivery_fee'|trans }}</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle font-weight-normal\">{{ RegularOrder.delivery_fee_total|price }}</span></div>
                                </div>
                                <!-- 手数料 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">{{ 'admin.common.charge'|trans }}</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle font-weight-normal\">{{ RegularOrder.charge|price }}</span></div>
                                </div>
                                <!-- 値引き -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">{{ 'admin.order.discount'|trans }}</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle text-danger font-weight-normal\">{{ RegularOrder.taxable_discount|price }}</span></div>
                                </div>
                                <hr>
                                <!-- 合計 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">{{ 'admin.order.total'|trans }}</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle font-weight-normal\">{{ RegularOrder.taxable_total|price }}</span></div>
                                </div>
{#                                {% for rate, total in RegularOrder.taxable_total_by_tax_rate %}#}
{#                                    <div class=\"row justify-content-end mb-3\">#}
{#                                        <div class=\"col-auto\"><span class=\"align-middle\">{{ 'common.tax_rate_target'|trans({ '%rate%': rate }) }}</span></div>#}
{#                                        <div class=\"col-2 text-end\"><span class=\"align-middle font-weight-normal\">{{ total|price }}</span></div>#}
{#                                    </div>#}
{#                                {% endfor %}#}
                                <hr>
                                {% for item in RegularOrder.tax_free_discount_items %}
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">{{ item.product_name }}</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle text-danger font-weight-normal\">{{ item.total_price|price }}</span></div>
                                </div>
                                {% endfor %}
                                <!-- お支払い合計 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">{{ 'admin.order.payment_total'|trans }}</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle font-weight-normal\">{{ RegularOrder.payment_total|price }}</span></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .card.rounded -->

                    <!-- ショップ用メモ欄 -->
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.order.shop_memo'|trans }}\"><span class=\"card-title\">{{ 'admin.common.shop_memo'|trans }}<i class=\"fa fa-question-circle fa-lg ml-1\"></i></span></div>
                                </div>
                                <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#freeArea\" aria-expanded=\"false\" aria-controls=\"freeArea\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"freeArea\">
                            <div class=\"card-body\">
                                {{ form_widget(form.note, {'attr': {'rows': 8}}) }}
                            </div>
                        </div>
                    </div><!-- .card.rounded -->

                    <!-- 定期履歴 -->
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\"><span class=\"card-title\">{{ 'gmo_epsilon.admin.regular_order_edit.order_history'|trans }}</span></div>
                                </div>
                                <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#orderHistoryArea\" aria-expanded=\"false\" aria-controls=\"freeArea\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"orderHistoryArea\">
                            <div class=\"card-body\">
                                <table class=\"table table-striped\">
                                    <thead>
                                        <tr>
                                            <th>回数</th>
                                            <th>受注番号</th>
                                            <th>作成日時</th>
                                            <th>更新日時</th>
                                            <th>入金日</th>
                                            <th>発送日</th>
                                            <th>支払方法</th>
                                            <th>対応状況</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    {% for index, Order in OrderHistories %}
                                        <tr>
                                            <td>{{ index + 1 }}</td>
                                            <td><a href=\"{{ url('admin_order_edit', { id : Order.id }) }}\" target=\"blank\">{{ Order.id }}</a></td>
                                            <td>{{ Order.create_date|date('Y/m/d H:m:s') }}</td>
                                            <td>{{ Order.update_date|date('Y/m/d H:m:s') }}</td>
                                            <td>{{ Order.payment_date|date_format }}</td>
                                            <td>{{ Order.Shippings[0].shipping_date|date_format }}</td>
                                            <td>{{ Order.payment_method }}</td>
                                            <td>{{ Order.OrderStatus }}</td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                </div>
            </div>
        </div>

        <!-- コンバージョンエリア -->
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"{{ url('eccube_payment_lite42_admin_regular_index', { 'resume': 1 }) }}\"><i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>{{ 'common.back'|trans }}</span></a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button type=\"submit\" class=\"btn btn-ec-conversion px-5\" name=\"mode\" value=\"register\">{{ 'admin.common.registration'|trans }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
{% endblock %}
", "EccubePaymentLite42/Resource/template/admin/Regular/Order/edit.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\admin\\Regular\\Order\\edit.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "form_theme" => 7, "if" => 255, "for" => 426, "apply" => 590);
        static $filters = array("raw" => 138, "escape" => 164, "trans" => 164, "date_sec" => 243, "date_day_with_weekday" => 252, "date_day" => 431, "price" => 700, "date" => 845, "date_format" => 847);
        static $functions = array("url" => 29, "form_widget" => 185, "form_errors" => 236, "include" => 590, "constant" => 683);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'if', 'for', 'apply'],
                ['raw', 'escape', 'trans', 'date_sec', 'date_day_with_weekday', 'date_day', 'price', 'date', 'date_format'],
                ['url', 'form_widget', 'form_errors', 'include', 'constant']
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
