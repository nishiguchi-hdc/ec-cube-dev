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

/* @admin/Order/edit.twig */
class __TwigTemplate_c4e099cce292e8ab93fb4a95525d7d67 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Order/edit.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Order/edit.twig"));

        // line 13
        $context["menus"] = ["order", "order_edit"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 19
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["searchCustomerModalForm"]) || array_key_exists("searchCustomerModalForm", $context) ? $context["searchCustomerModalForm"] : (function () { throw new RuntimeError('Variable "searchCustomerModalForm" does not exist.', 19, $this->source); })()), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 20
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["searchProductModalForm"]) || array_key_exists("searchProductModalForm", $context) ? $context["searchProductModalForm"] : (function () { throw new RuntimeError('Variable "searchProductModalForm" does not exist.', 20, $this->source); })()), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Order/edit.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_registration"), "html", null, true);
        
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_management"), "html", null, true);
        
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
        echo "    <script src=\"https://yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
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

            // 会員検索
            \$('#searchCustomerModalButton').on('click', function() {
                var list = \$('#searchCustomerModalList');
                list.children().remove();

                \$.ajax({
                    url: '";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_search_customer_html");
        echo "',
                    type: 'POST',
                    dataType: 'html',
                    data: {'search_word': \$('#admin_search_customer_multi').val()}
                }).done(function(data) {
                    \$('#searchCustomerModalList').html(data);
                }).fail(function(data) {
                    alert('search customer failed.');
                });
            });

            // 商品検索
            \$('#searchProductModalButton').on('click', function() {
                var list = \$('#searchProductModalList');
                list.children().remove();

                \$.ajax({
                    url: '";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_search_product");
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
        // line 78
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
            formIdPrefix = '#order_OrderItems_';
            if (index > 0) {
                let row = '#' + \$collectionHolder.find('tbody > tr').last().data(\"row\");
                index = row.replace(formIdPrefix, '');
            }

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
                \$('#order_Shipping_name_name01').val(\$('#order_name_name01').val());
                \$('#order_Shipping_name_name02').val(\$('#order_name_name02').val());
                \$('#order_Shipping_kana_kana01').val(\$('#order_kana_kana01').val());
                \$('#order_Shipping_kana_kana02').val(\$('#order_kana_kana02').val());
                \$('#order_Shipping_postal_code').val(\$('#order_postal_code').val());
                \$('#order_Shipping_address_pref').val(\$('#order_address_pref').val());
                \$('#order_Shipping_address_addr01').val(\$('#order_address_addr01').val());
                \$('#order_Shipping_address_addr02').val(\$('#order_address_addr02').val());
                \$('#order_Shipping_email').val(\$('#order_email').val());
                \$('#order_Shipping_phone_number').val(\$('#order_phone_number').val());
                \$('#order_Shipping_company_name').val(\$('#order_company_name').val());
            });

            // PDF出力(単一)
            \$('.pdf-print').click(function() {
                window.open(this.href, 'newwin', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=700, height=700');
                return false;
            });

            // お届け時間の初期表示
            \$('#order_Shipping_Delivery').change();

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
        // line 178
        echo $this->sandbox->ensureToStringAllowed((isset($context["shippingDeliveryTimes"]) || array_key_exists("shippingDeliveryTimes", $context) ? $context["shippingDeliveryTimes"] : (function () { throw new RuntimeError('Variable "shippingDeliveryTimes" does not exist.', 178, $this->source); })()), 178, $this->source);
        echo ";
            \$('#order_Shipping_Delivery').change(function() {
                var deliveryId = \$(this).val();
                var \$shippingDeliveryTime = \$('#order_Shipping_DeliveryTime');
                \$shippingDeliveryTime.find('option').remove();
                \$shippingDeliveryTime.append(\$('<option></option>').val('').text('";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.select__unspecified"), "html", null, true);
        echo "'));
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

        ";
        // line 196
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 196, $this->source); })()), "isOptionPoint", [], "any", false, false, true, 196) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 196, $this->source); })()), "Customer", [], "any", false, false, true, 196)))) {
            // line 197
            echo "            // 再計算時のポイントの割引金額の更新
            function updatePointItem() {
                // ポイント換算レート
                var pointConversionRate = ";
            // line 200
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 200, $this->source); })()), "point_conversion_rate", [], "any", false, false, true, 200), 200, $this->source), "html", null, true);
            echo ";
                // 利用ポイント
                var usePoint = \$('#order_use_point').val();

                // 利用ポイントが数値以外の時は割引金額を更新しない
                if (isNaN(usePoint)) return;

                // 割引金額を計算
                var discountPrice = (-1) * pointConversionRate * usePoint;

                // ポイント明細の金額の要素を取得
                var \$pointPrice = \$('.pointPrice');

                // ポイント明細の金額の要素がある場合はポイントの更新
                if (\$pointPrice.length) {
                    \$pointPrice.val(discountPrice);
                }
            }
        ";
        }
        // line 219
        echo "    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 222
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 223
        echo "    ";
        // line 224
        echo "    ";
        $context["action_disabled"] = false;
        // line 225
        echo "    ";
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 225, $this->source); })()), "OrderStatus", [], "any", false, false, true, 225)) && twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 225, $this->source); })()), "OrderStatus", [], "any", false, false, true, 225), "id", [], "any", false, false, true, 225), [twig_constant("Eccube\\Entity\\Master\\OrderStatus::PROCESSING"), twig_constant("Eccube\\Entity\\Master\\OrderStatus::PENDING")]))) {
            // line 227
            $context["action_disabled"] = true;
        }
        // line 229
        echo "    <!-- 移動確認モーダル-->
    <div class=\"modal fade\" id=\"confirmFormChangeModal\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"confirmFormChangeModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">";
        // line 235
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
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_save_and_move"), "html", null, true);
        echo "
                    </a>
                    <a class=\"btn btn-ec-sub\" data-action=\"cancel\" href=\"javascript:void(0)\">
                        ";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_move_only"), "html", null, true);
        echo "
                    </a>
                </div>
            </div>
        </div>
    </div>
    <form name=\"form1\" id=\"form1\" method=\"post\" action=\"?\"";
        // line 254
        if ((twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 254, $this->source); })()), "isOptionPoint", [], "any", false, false, true, 254) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 254, $this->source); })()), "Customer", [], "any", false, false, true, 254)))) {
            echo " onsubmit=\"updatePointItem()\"";
        }
        echo ">
        <input type=\"hidden\" name=\"mode\" value=\"\">
        ";
        // line 256
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 256, $this->source); })()), "_token", [], "any", false, false, true, 256), 256, $this->source), 'widget');
        echo "
        ";
        // line 257
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 257, $this->source); })()), "return_link", [], "any", false, false, true, 257), 257, $this->source), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.order_info"), "html", null, true);
        echo "\"><span class=\"card-title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_info"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#orderOverview\" aria-expanded=\"false\" aria-controls=\"orderOverview\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"orderOverview\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.order_no"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_no"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                            <div class=\"col\">";
        // line 276
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 276, $this->source); })()), "order_no", [], "any", false, false, true, 276), 276, $this->source), "html", null, true);
        echo "</div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.order_status"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_status"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                                            <div class=\"col\">
                                                ";
        // line 281
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 281, $this->source); })()), "id", [], "any", false, false, true, 281))) {
            // line 282
            echo "                                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 282, $this->source); })()), "OrderStatus", [], "any", false, false, true, 282), 282, $this->source), 'widget');
            echo "
                                                    ";
            // line 283
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 283, $this->source); })()), "OrderStatus", [], "any", false, false, true, 283), 283, $this->source), 'errors');
            echo "
                                                ";
        }
        // line 285
        echo "                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.payment_method"), "html", null, true);
        echo "</label>
                                            <div class=\"col\">
                                                ";
        // line 290
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 290, $this->source); })()), "Payment", [], "any", false, false, true, 290), 290, $this->source), 'widget');
        echo "
                                                ";
        // line 291
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 291, $this->source); })()), "Payment", [], "any", false, false, true, 291), 291, $this->source), 'errors');
        echo "
                                                <p class=\"form-text fw-bold text-danger mb-0\">";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.change_payment_method_message"), "html", null, true);
        echo "</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\"><i class=\"fa fa-inbox fa-fw me-1\" aria-hidden=\"true\"></i>";
        // line 298
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_date"), "html", null, true);
        echo "</div>
                                            <div class=\"col\">";
        // line 299
        ((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 299, $this->source); })()), "order_date", [], "any", false, false, true, 299)) ? (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 299, $this->source); })()), "order_date", [], "any", false, false, true, 299)), "html", null, true))) : (print ("")));
        echo "</div>
                                        </div>
                                        <div class=\"row mb-3 d-none\">
                                            <div class=\"col-3\"><i class=\"fa fa-money fa-fw me-1\" aria-hidden=\"true\"></i>";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.payment_date"), "html", null, true);
        echo "</div>
                                            <div class=\"col\">";
        // line 303
        ((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 303, $this->source); })()), "payment_date", [], "any", false, false, true, 303)) ? (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 303, $this->source); })()), "payment_date", [], "any", false, false, true, 303)), "html", null, true))) : (print ("")));
        echo "</div>
                                        </div>
                                        ";
        // line 305
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 305, $this->source); })()), "isMultiple", [], "any", false, false, true, 305)) {
            // line 306
            echo "                                            <div class=\"row mb-3 d-none\">
                                                <div class=\"col-3\"><i class=\"fa fa-truck fa-fw me-1\" aria-hidden=\"true\"></i>";
            // line 307
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_date"), "html", null, true);
            echo "</div>
                                                <div class=\"col\">
                                                    ";
            // line 309
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 309, $this->source); })()), "Shippings", [], "any", false, false, true, 309), 0, [], "array", false, false, true, 309), "shipping_date", [], "any", false, false, true, 309), 309, $this->source)), "html", null, true);
            echo "
                                                </div>
                                            </div>
                                        ";
        }
        // line 313
        echo "                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\"><i class=\"fa fa-refresh fa-fw me-1\" aria-hidden=\"true\"></i>";
        // line 314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.update_date"), "html", null, true);
        echo "</div>
                                            <div class=\"col\">";
        // line 315
        ((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 315, $this->source); })()), "update_date", [], "any", false, false, true, 315)) ? (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 315, $this->source); })()), "update_date", [], "any", false, false, true, 315)), "html", null, true))) : (print ("")));
        echo "</div>
                                        </div>
                                        <div class=\"row mb-3 d-none\">
                                            <div class=\"col-3\"><i class=\"fa fa-mobile fa-fw me-1\" aria-hidden=\"true\"></i>";
        // line 318
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.device_type"), "html", null, true);
        echo "</div>
                                            <div class=\"col\">";
        // line 319
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 319, $this->source); })()), "device_type", [], "any", false, false, true, 319), 319, $this->source), "html", null, true);
        echo "</div>
                                        </div>
                                        <div class=\"row mb-3 d-none\">
                                            <div class=\"col-3\"><i class=\"fa fa-commenting fa-fw me-1\" aria-hidden=\"true\"></i>";
        // line 322
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.message"), "html", null, true);
        echo "</div>
                                            <div class=\"col\">";
        // line 323
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 323, $this->source); })()), "message", [], "any", false, false, true, 323)) ? (twig_nl2br(twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 323, $this->source); })()), "message", [], "any", false, false, true, 323), 323, $this->source), "html", null, true))) : (""));
        echo "</div>
                                        </div>
                                    </div>
                                </div>

                                ";
        // line 329
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 329, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 329), "eccube_form_options", [], "any", false, false, true, 329), "auto_render", [], "any", false, false, true, 329); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 330
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 330), "eccube_form_options", [], "any", false, false, true, 330), "form_theme", [], "any", false, false, true, 330)) {
                // line 331
                echo "                                        ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 331), "eccube_form_options", [], "any", false, false, true, 331), "form_theme", [], "any", false, false, true, 331)], true);
                // line 332
                echo "                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 332, $this->source), 'row');
                echo "
                                    ";
            } else {
                // line 334
                echo "                                        <div class=\"row\">
                                            <div class=\"col-6\">
                                                <div class=\"row mb-3\">
                                                    <div class=\"col-3\">
                                                        <span>";
                // line 338
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 338), "label", [], "any", false, false, true, 338), 338, $this->source)), "html", null, true);
                echo "</span>
                                                    </div>
                                                    <div class=\"col\">
                                                        ";
                // line 341
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 341, $this->source), 'widget');
                echo "
                                                        ";
                // line 342
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 342, $this->source), 'errors');
                echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ";
            }
            // line 348
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 349
        echo "
                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.orderer"), "html", null, true);
        echo "\"><span class=\"card-title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.orderer"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#ordererInfo\" aria-expanded=\"false\" aria-controls=\"orderOverview\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"ordererInfo\">
                            <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                            <div class=\"card-body\">
                                ";
        // line 365
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 365, $this->source); })()), "id", [], "any", false, false, true, 365))) {
            // line 366
            echo "                                    <div class=\"row mb-3\">
                                        <div class=\"col-auto\">
                                            <a class=\"btn btn-ec-regular px-3\" data-bs-toggle=\"modal\" data-bs-target=\"#searchCustomerModal\">";
            // line 368
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.search_from_customer"), "html", null, true);
            echo "</a>
                                        </div>
                                    </div>
                                    <!-- 会員検索モーダル -->
                                    <div class=\"modal fade\" id=\"searchCustomerModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"searchCustomerModal\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog modal-lg\" role=\"document\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title fw-bold\">";
            // line 376
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.search_customer_title"), "html", null, true);
            echo "</h5>
                                                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    ";
            // line 380
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchCustomerModalForm"]) || array_key_exists("searchCustomerModalForm", $context) ? $context["searchCustomerModalForm"] : (function () { throw new RuntimeError('Variable "searchCustomerModalForm" does not exist.', 380, $this->source); })()), "multi", [], "any", false, false, true, 380), 380, $this->source), 'widget', ["attr" => ["class" => "mb-2searchCustomerModal", "placeholder" => "admin.customer.multi_search_label"]]);
            echo "
                                                    <button type=\"button\" id=\"searchCustomerModalButton\" class=\"btn btn-ec-conversion px-5 mb-4 mt-2\">";
            // line 381
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search"), "html", null, true);
            echo "</button>
                                                    <div class=\"mb-3\" id=\"searchCustomerModalList\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 388
        echo "                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <div class=\"row\">
                                            <label class=\"col-3 col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.customer_id"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_id"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                                            <div class=\"col\">
                                                <p id=\"order_CustomerId\">";
        // line 393
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 393, $this->source); })()), "Customer", [], "any", false, false, true, 393), "vars", [], "any", false, false, true, 393), "value", [], "any", false, false, true, 393))) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.non_member"), "html", null, true);
        } else {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 393, $this->source); })()), "Customer", [], "any", false, false, true, 393), "vars", [], "any", false, false, true, 393), "value", [], "any", false, false, true, 393)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 393, $this->source); })()), "Customer", [], "any", false, false, true, 393), "vars", [], "any", false, false, true, 393), "value", [], "any", false, false, true, 393), 393, $this->source), "html", null, true);
            echo "</a>";
        }
        echo "</p>
                                                ";
        // line 394
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 394, $this->source); })()), "Customer", [], "any", false, false, true, 394), 394, $this->source), 'widget');
        echo "
                                                ";
        // line 395
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 395, $this->source); })()), "Customer", [], "any", false, false, true, 395), 395, $this->source), 'errors');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">";
        // line 399
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.name"), "html", null, true);
        echo "<span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></label>
                                            <div class=\"col\">
                                                <div class=\"row\">
                                                    <div class=\"col\">
                                                        ";
        // line 403
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 403, $this->source); })()), "name", [], "any", false, false, true, 403), "name01", [], "any", false, false, true, 403), 403, $this->source), 'widget');
        echo "
                                                        ";
        // line 404
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 404, $this->source); })()), "name", [], "any", false, false, true, 404), "name01", [], "any", false, false, true, 404), 404, $this->source), 'errors');
        echo "
                                                    </div>
                                                    <div class=\"col\">
                                                        ";
        // line 407
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 407, $this->source); })()), "name", [], "any", false, false, true, 407), "name02", [], "any", false, false, true, 407), 407, $this->source), 'widget');
        echo "
                                                        ";
        // line 408
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 408, $this->source); })()), "name", [], "any", false, false, true, 408), "name02", [], "any", false, false, true, 408), 408, $this->source), 'errors');
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row mb-3 d-none\">
                                            <label class=\"col-3 col-form-label\">";
        // line 414
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.kana"), "html", null, true);
        echo "<span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></label>
                                            <div class=\"col\">
                                                <div class=\"row\">
                                                    <div class=\"col\">
                                                        ";
        // line 418
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 418, $this->source); })()), "kana", [], "any", false, false, true, 418), "kana01", [], "any", false, false, true, 418), 418, $this->source), 'widget');
        echo "
                                                        ";
        // line 419
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 419, $this->source); })()), "kana", [], "any", false, false, true, 419), "kana01", [], "any", false, false, true, 419), 419, $this->source), 'errors');
        echo "
                                                    </div>
                                                    <div class=\"col\">
                                                        ";
        // line 422
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 422, $this->source); })()), "kana", [], "any", false, false, true, 422), "kana02", [], "any", false, false, true, 422), 422, $this->source), 'widget');
        echo "
                                                        ";
        // line 423
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 423, $this->source); })()), "kana", [], "any", false, false, true, 423), "kana02", [], "any", false, false, true, 423), 423, $this->source), 'errors');
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">";
        // line 429
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.address"), "html", null, true);
        echo "<span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></label>
                                            <div class=\"col\">
                                                <div class=\"row mb-3\">
                                                    <div class=\"col row align-items-center\">
                                                        <span class=\"col-auto\">";
        // line 433
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol"), "html", null, true);
        echo "</span>
                                                        <span class=\"col-auto ps-0\">";
        // line 434
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 434, $this->source); })()), "postal_code", [], "any", false, false, true, 434), 434, $this->source), 'widget');
        echo "</span>
                                                        ";
        // line 435
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 435, $this->source); })()), "postal_code", [], "any", false, false, true, 435), 435, $this->source), 'errors');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"row mb-3\">
                                                    <div class=\"col\">
                                                        ";
        // line 440
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 440, $this->source); })()), "address", [], "any", false, false, true, 440), "pref", [], "any", false, false, true, 440), 440, $this->source), 'widget');
        echo "
                                                        ";
        // line 441
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 441, $this->source); })()), "address", [], "any", false, false, true, 441), "pref", [], "any", false, false, true, 441), 441, $this->source), 'errors');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"row mb-3\">
                                                    <div class=\"col\">
                                                        ";
        // line 446
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 446, $this->source); })()), "address", [], "any", false, false, true, 446), "addr01", [], "any", false, false, true, 446), 446, $this->source), 'widget');
        echo "
                                                        ";
        // line 447
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 447, $this->source); })()), "address", [], "any", false, false, true, 447), "addr01", [], "any", false, false, true, 447), 447, $this->source), 'errors');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"col\">
                                                        ";
        // line 452
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 452, $this->source); })()), "address", [], "any", false, false, true, 452), "addr02", [], "any", false, false, true, 452), 452, $this->source), 'widget');
        echo "
                                                        ";
        // line 453
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 453, $this->source); })()), "address", [], "any", false, false, true, 453), "addr02", [], "any", false, false, true, 453), 453, $this->source), 'errors');
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col-6\">
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">";
        // line 462
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.mail_address"), "html", null, true);
        echo "<span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></label>
                                            <div class=\"col\">
                                                ";
        // line 464
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 464, $this->source); })()), "email", [], "any", false, false, true, 464), 464, $this->source), 'widget');
        echo "
                                                ";
        // line 465
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 465, $this->source); })()), "email", [], "any", false, false, true, 465), 465, $this->source), 'errors');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">";
        // line 469
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
        echo "<span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></label>
                                            <div class=\"col\">
                                                ";
        // line 471
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 471, $this->source); })()), "phone_number", [], "any", false, false, true, 471), 471, $this->source), 'widget');
        echo "
                                                ";
        // line 472
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 472, $this->source); })()), "phone_number", [], "any", false, false, true, 472), 472, $this->source), 'errors');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">";
        // line 476
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.company_name"), "html", null, true);
        echo "</label>
                                            <div class=\"col\">
                                                ";
        // line 478
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 478, $this->source); })()), "company_name", [], "any", false, false, true, 478), 478, $this->source), 'widget');
        echo "
                                                ";
        // line 479
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 479, $this->source); })()), "company_name", [], "any", false, false, true, 479), 479, $this->source), 'errors');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">";
        // line 483
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.message"), "html", null, true);
        echo "</label>
                                            <div class=\"col\">
                                                ";
        // line 485
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 485, $this->source); })()), "message", [], "any", false, false, true, 485), 485, $this->source), 'widget', ["attr" => ["rows" => 8]]);
        echo "
                                                ";
        // line 486
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 486, $this->source); })()), "message", [], "any", false, false, true, 486), 486, $this->source), 'errors');
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
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 499
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.shipping_info"), "html", null, true);
        echo "\"><span class=\"card-title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_info"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#shippingInfo\" aria-expanded=\"false\" aria-controls=\"shippingInfo\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"shippingInfo\">
                            <div class=\"card-body\">
                                ";
        // line 506
        if (twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 506, $this->source); })()), "isMultiple", [], "any", false, false, true, 506)) {
            // line 507
            echo "                                    ";
            // line 508
            echo "                                    <div class=\"mb-3\">
                                        <a id=\"shipping-add\" class=\"btn btn-ec-regular\" data-action=\"confirm\" title=\"";
            // line 509
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_registration")]), "html", null, true);
            // line 510
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_shipping_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 510, $this->source); })()), "id", [], "any", false, false, true, 510)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.edit_multiple_shipping"), "html", null, true);
            echo "</a>
                                        <span class=\"ml-3\">";
            // line 511
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.edit_multiple_shipping_description"), "html", null, true);
            echo "</span>
                                    </div>
                                    ";
            // line 513
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 513, $this->source); })()), "Shippings", [], "any", false, false, true, 513));
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
                // line 514
                echo "                                        <div class=\"col\">
                                            <span class=\"me-5\">";
                // line 515
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery"), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 515), 515, $this->source), "html", null, true);
                echo ")</span>
                                            ";
                // line 516
                $context["shipping_name"] = (((($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "full_name", [], "any", false, false, true, 516), 516, $this->source) . "(") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "full_name_kana", [], "any", false, false, true, 516), 516, $this->source)) . ")") . (( !(null === twig_get_attribute($this->env, $this->source, $context["shipping"], "company_name", [], "any", false, false, true, 516))) ? ((" " . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "company_name", [], "any", false, false, true, 516), 516, $this->source))) : ("")));
                // line 517
                echo "                                            ";
                $context["shipping_addr"] = ((((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "postal_code", [], "any", false, false, true, 517), 517, $this->source)) . " ") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "pref", [], "any", false, false, true, 517), 517, $this->source)) . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "addr01", [], "any", false, false, true, 517), 517, $this->source)) . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "addr02", [], "any", false, false, true, 517), 517, $this->source));
                // line 518
                echo "                                            ";
                $context["shipping_date"] = (( !(null === twig_get_attribute($this->env, $this->source, $context["shipping"], "shipping_date", [], "any", false, false, true, 518))) ? ($this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "shipping_date", [], "any", false, false, true, 518), 518, $this->source))) : (""));
                // line 519
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["shipping_name"]) || array_key_exists("shipping_name", $context) ? $context["shipping_name"] : (function () { throw new RuntimeError('Variable "shipping_name" does not exist.', 519, $this->source); })()), 519, $this->source), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["shipping_addr"]) || array_key_exists("shipping_addr", $context) ? $context["shipping_addr"] : (function () { throw new RuntimeError('Variable "shipping_addr" does not exist.', 519, $this->source); })()), 519, $this->source), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "phone_number", [], "any", false, false, true, 519), 519, $this->source), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["shipping_date"]) || array_key_exists("shipping_date", $context) ? $context["shipping_date"] : (function () { throw new RuntimeError('Variable "shipping_date" does not exist.', 519, $this->source); })()), 519, $this->source), "html", null, true);
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
            // line 522
            echo "                                ";
        } else {
            // line 523
            echo "                                    ";
            // line 524
            echo "                                    <div class=\"row mb-3\">
                                        <div class=\"col-6\">
                                            <button type=\"button\" class=\"btn btn-ec-regular copy-customer\">";
            // line 526
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.copy_orderer"), "html", null, true);
            echo "</button>
                                            ";
            // line 527
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 527, $this->source); })()), "id", [], "any", false, false, true, 527))) {
                // line 528
                echo "                                                <a class=\"btn btn-ec-regular pdf-print\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_export_pdf");
                echo "?ids[]=";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 528, $this->source); })()), "Shippings", [], "any", false, false, true, 528), 0, [], "array", false, false, true, 528), "id", [], "any", false, false, true, 528), 528, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.output_delivery_note"), "html", null, true);
                echo "</a>
                                            ";
            }
            // line 530
            echo "                                        </div>
                                        ";
            // line 531
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 531, $this->source); })()), "id", [], "any", false, false, true, 531))) {
                // line 532
                echo "                                            <div class=\"col-6 text-end\">
                                                <a id=\"shipping-add\" class=\"btn btn-ec-regular w-25\" data-action=\"confirm\" title=\"";
                // line 533
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_registration")]), "html", null, true);
                // line 534
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_shipping_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 534, $this->source); })()), "id", [], "any", false, false, true, 534)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_shipping"), "html", null, true);
                echo "</a>
                                            </div>
                                        ";
            }
            // line 537
            echo "                                    </div>
                                    <div class=\"row h-adr\">
                                        <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3 d-none\">
                                                <label class=\"col-3 col-form-label\">";
            // line 542
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.name"), "html", null, true);
            echo "<span class=\"badge bg-primary ms-1\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "</span></label>
                                                <div class=\"col\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            ";
            // line 546
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 546, $this->source); })()), "Shipping", [], "any", false, false, true, 546), "name", [], "any", false, false, true, 546), "name01", [], "any", false, false, true, 546), 546, $this->source), 'widget');
            echo "
                                                            ";
            // line 547
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 547, $this->source); })()), "Shipping", [], "any", false, false, true, 547), "name", [], "any", false, false, true, 547), "name01", [], "any", false, false, true, 547), 547, $this->source), 'errors');
            echo "
                                                        </div>
                                                        <div class=\"col\">
                                                            ";
            // line 550
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 550, $this->source); })()), "Shipping", [], "any", false, false, true, 550), "name", [], "any", false, false, true, 550), "name02", [], "any", false, false, true, 550), 550, $this->source), 'widget');
            echo "
                                                            ";
            // line 551
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 551, $this->source); })()), "Shipping", [], "any", false, false, true, 551), "name", [], "any", false, false, true, 551), "name02", [], "any", false, false, true, 551), 551, $this->source), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">";
            // line 557
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.kana"), "html", null, true);
            echo "<span class=\"badge bg-primary ms-1\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "</span></label>
                                                <div class=\"col\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            ";
            // line 561
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 561, $this->source); })()), "Shipping", [], "any", false, false, true, 561), "kana", [], "any", false, false, true, 561), "kana01", [], "any", false, false, true, 561), 561, $this->source), 'widget');
            echo "
                                                            ";
            // line 562
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 562, $this->source); })()), "Shipping", [], "any", false, false, true, 562), "kana", [], "any", false, false, true, 562), "kana01", [], "any", false, false, true, 562), 562, $this->source), 'errors');
            echo "
                                                        </div>
                                                        <div class=\"col\">
                                                            ";
            // line 565
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 565, $this->source); })()), "Shipping", [], "any", false, false, true, 565), "kana", [], "any", false, false, true, 565), "kana02", [], "any", false, false, true, 565), 565, $this->source), 'widget');
            echo "
                                                            ";
            // line 566
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 566, $this->source); })()), "Shipping", [], "any", false, false, true, 566), "kana", [], "any", false, false, true, 566), "kana02", [], "any", false, false, true, 566), 566, $this->source), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">";
            // line 572
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.address"), "html", null, true);
            echo "<span class=\"badge bg-primary ms-1\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "</span></label>
                                                <div class=\"col\">
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col row align-items-center\">
                                                            <span class=\"col-auto\">";
            // line 576
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol"), "html", null, true);
            echo "</span>
                                                            <span class=\"col-auto ps-0\">";
            // line 577
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 577, $this->source); })()), "Shipping", [], "any", false, false, true, 577), "postal_code", [], "any", false, false, true, 577), 577, $this->source), 'widget');
            echo "</span>
                                                            ";
            // line 578
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 578, $this->source); })()), "Shipping", [], "any", false, false, true, 578), "postal_code", [], "any", false, false, true, 578), 578, $this->source), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col\">
                                                            ";
            // line 583
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 583, $this->source); })()), "Shipping", [], "any", false, false, true, 583), "address", [], "any", false, false, true, 583), "pref", [], "any", false, false, true, 583), 583, $this->source), 'widget');
            echo "
                                                            ";
            // line 584
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 584, $this->source); })()), "Shipping", [], "any", false, false, true, 584), "address", [], "any", false, false, true, 584), "pref", [], "any", false, false, true, 584), 584, $this->source), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col\">
                                                            ";
            // line 589
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 589, $this->source); })()), "Shipping", [], "any", false, false, true, 589), "address", [], "any", false, false, true, 589), "addr01", [], "any", false, false, true, 589), 589, $this->source), 'widget');
            echo "
                                                            ";
            // line 590
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 590, $this->source); })()), "Shipping", [], "any", false, false, true, 590), "address", [], "any", false, false, true, 590), "addr01", [], "any", false, false, true, 590), 590, $this->source), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            ";
            // line 595
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 595, $this->source); })()), "Shipping", [], "any", false, false, true, 595), "address", [], "any", false, false, true, 595), "addr02", [], "any", false, false, true, 595), 595, $this->source), 'widget');
            echo "
                                                            ";
            // line 596
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 596, $this->source); })()), "Shipping", [], "any", false, false, true, 596), "address", [], "any", false, false, true, 596), "addr02", [], "any", false, false, true, 596), 596, $this->source), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">";
            // line 604
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
            echo "<span class=\"badge bg-primary ms-1\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "</span></label>
                                                <div class=\"col\">
                                                    ";
            // line 606
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 606, $this->source); })()), "Shipping", [], "any", false, false, true, 606), "phone_number", [], "any", false, false, true, 606), 606, $this->source), 'widget');
            echo "
                                                    ";
            // line 607
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 607, $this->source); })()), "Shipping", [], "any", false, false, true, 607), "phone_number", [], "any", false, false, true, 607), 607, $this->source), 'errors');
            echo "
                                                </div>
                                            </div>

                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">";
            // line 612
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.company_name"), "html", null, true);
            echo "</label>
                                                <div class=\"col\">
                                                    ";
            // line 614
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 614, $this->source); })()), "Shipping", [], "any", false, false, true, 614), "company_name", [], "any", false, false, true, 614), 614, $this->source), 'widget');
            echo "
                                                    ";
            // line 615
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 615, $this->source); })()), "Shipping", [], "any", false, false, true, 615), "company_name", [], "any", false, false, true, 615), 615, $this->source), 'errors');
            echo "
                                                </div>
                                            </div>
                                        </div>

";
            // line 621
            if ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", true, true, true, 621) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, true, true, 621), "shipping_ext", [], "any", true, true, true, 621))) {
                // line 622
                echo "  <div class=\"row mb-2\">
    <div class=\"col-sm-3\">
      ";
                // line 624
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 624, $this->source); })()), "Shipping", [], "any", false, false, true, 624), "shipping_ext", [], "any", false, false, true, 624), "depart_name", [], "any", false, false, true, 624), 624, $this->source), 'label', ["label_attr" => ["class" => "col-form-label col-sm-3"]]);
                echo "
    </div>
    <div class=\"col-sm-9\">
      ";
                // line 627
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 627, $this->source); })()), "Shipping", [], "any", false, false, true, 627), "shipping_ext", [], "any", false, false, true, 627), "depart_name", [], "any", false, false, true, 627), 627, $this->source), 'widget');
                echo "
      ";
                // line 628
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 628, $this->source); })()), "Shipping", [], "any", false, false, true, 628), "shipping_ext", [], "any", false, false, true, 628), "depart_name", [], "any", false, false, true, 628), 628, $this->source), 'errors');
                echo "
    </div>
  </div>

  <div class=\"row mb-3\">
    <div class=\"col-sm-3\">
      ";
                // line 634
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 634, $this->source); })()), "Shipping", [], "any", false, false, true, 634), "shipping_ext", [], "any", false, false, true, 634), "pic_name", [], "any", false, false, true, 634), 634, $this->source), 'label', ["label_attr" => ["class" => "col-form-label col-sm-3"]]);
                echo "
    </div>
    <div class=\"col-sm-9\">
      ";
                // line 637
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 637, $this->source); })()), "Shipping", [], "any", false, false, true, 637), "shipping_ext", [], "any", false, false, true, 637), "pic_name", [], "any", false, false, true, 637), 637, $this->source), 'widget');
                echo "
      ";
                // line 638
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 638, $this->source); })()), "Shipping", [], "any", false, false, true, 638), "shipping_ext", [], "any", false, false, true, 638), "pic_name", [], "any", false, false, true, 638), 638, $this->source), 'errors');
                echo "
    </div>
  </div>
";
            }
            // line 642
            echo "


                                        <div class=\"col-12\">
                                            <hr>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            // line 650
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.shipping_info.tracking_number"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tracking_number"), "html", null, true);
            echo "<i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                                                <div class=\"col\">
                                                    ";
            // line 652
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 652, $this->source); })()), "Shipping", [], "any", false, false, true, 652), "tracking_number", [], "any", false, false, true, 652), 652, $this->source), 'widget');
            echo "
                                                    ";
            // line 653
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 653, $this->source); })()), "Shipping", [], "any", false, false, true, 653), "tracking_number", [], "any", false, false, true, 653), 653, $this->source), 'errors');
            echo "
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            // line 657
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.shipping_info.delivery_provider"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_provider"), "html", null, true);
            echo "<span class=\"badge bg-primary ms-1\"></span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                                                <div class=\"col\">
                                                    ";
            // line 659
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 659, $this->source); })()), "Shipping", [], "any", false, false, true, 659), "Delivery", [], "any", false, false, true, 659), 659, $this->source), 'widget');
            echo "
                                                    ";
            // line 660
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 660, $this->source); })()), "Shipping", [], "any", false, false, true, 660), "Delivery", [], "any", false, false, true, 660), 660, $this->source), 'errors');
            echo "
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            // line 664
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.shipping_info.shop_memo"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shop_memo_for_shipped"), "html", null, true);
            echo "<i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                                                <div class=\"col\">
                                                    ";
            // line 666
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 666, $this->source); })()), "Shipping", [], "any", false, false, true, 666), "note", [], "any", false, false, true, 666), 666, $this->source), 'widget');
            echo "
                                                    ";
            // line 667
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 667, $this->source); })()), "Shipping", [], "any", false, false, true, 667), "note", [], "any", false, false, true, 667), 667, $this->source), 'errors');
            echo "
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\"><i class=\"fa fa-calendar-check-o fa-fw me-1\" aria-hidden=\"true\"></i>";
            // line 673
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_date"), "html", null, true);
            echo "</label>
                                                <div class=\"col\">
                                                    ";
            // line 675
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 675, $this->source); })()), "Shipping", [], "any", false, false, true, 675), "shipping_delivery_date", [], "any", false, false, true, 675), 675, $this->source), 'widget');
            echo "
                                                    ";
            // line 676
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 676, $this->source); })()), "Shipping", [], "any", false, false, true, 676), "shipping_delivery_date", [], "any", false, false, true, 676), 676, $this->source), 'errors');
            echo "
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\"><i class=\"fa fa-clock-o fa-fw me-1\" aria-hidden=\"true\"></i>";
            // line 680
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_time"), "html", null, true);
            echo "</label>
                                                <div class=\"col\">
                                                    ";
            // line 682
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 682, $this->source); })()), "Shipping", [], "any", false, false, true, 682), "DeliveryTime", [], "any", false, false, true, 682), 682, $this->source), 'widget');
            echo "
                                                    ";
            // line 683
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 683, $this->source); })()), "Shipping", [], "any", false, false, true, 683), "DeliveryTime", [], "any", false, false, true, 683), 683, $this->source), 'errors');
            echo "
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 689
        echo "                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <div id=\"order-product\" class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 696
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.product_info"), "html", null, true);
        echo "\"><span class=\"card-title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.product_info"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ms-1\"></i></span></div>
                                </div>
                                <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#orderItem\" aria-expanded=\"false\" aria-controls=\"orderItem\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"orderItem\">
                            <div class=\"card-body\">
                                <div class=\"row justify-content-between mb-2\">
                                    <div class=\"col-6\">
                                        ";
        // line 706
        echo "                                        ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 706, $this->source); })()), "isMultiple", [], "any", false, false, true, 706)) {
            // line 707
            echo "                                            <a class=\"btn btn-ec-regular me-2 add\" data-bs-toggle=\"modal\" data-bs-target=\"#addProduct\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_product_item"), "html", null, true);
            echo "</a>
                                            <div class=\"modal fade\" id=\"addProduct\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addProduct\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog modal-lg\" role=\"document\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <h5 class=\"modal-title\">";
            // line 712
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_product_item"), "html", null, true);
            echo "</h5>
                                                            <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            ";
            // line 716
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchProductModalForm"]) || array_key_exists("searchProductModalForm", $context) ? $context["searchProductModalForm"] : (function () { throw new RuntimeError('Variable "searchProductModalForm" does not exist.', 716, $this->source); })()), "id", [], "any", false, false, true, 716), 716, $this->source), 'widget', ["attr" => ["class" => "mb-3", "placeholder" => "admin.product.multi_search_label"]]);
            echo "
                                                            ";
            // line 717
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchProductModalForm"]) || array_key_exists("searchProductModalForm", $context) ? $context["searchProductModalForm"] : (function () { throw new RuntimeError('Variable "searchProductModalForm" does not exist.', 717, $this->source); })()), "category_id", [], "any", false, false, true, 717), 717, $this->source), 'widget');
            echo "
                                                            <button type=\"button\" id=\"searchProductModalButton\" class=\"btn btn-ec-conversion px-5 mb-4 mt-2\">";
            // line 718
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search"), "html", null, true);
            echo "</button>
                                                            <div id=\"searchProductModalList\"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
        }
        // line 725
        echo "                                        <a class=\"btn btn-ec-regular me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#addOrderItemType\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_other_item"), "html", null, true);
        echo "</a>
                                        <div class=\"modal fade\" id=\"addOrderItemType\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addOrderItemType\" aria-hidden=\"true\">
                                            <div class=\"modal-dialog modal-lg\" role=\"document\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <h5 class=\"modal-title\">";
        // line 730
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
        // line 739
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 739, $this->source); })()), "OrderItemsErrors", [], "any", false, false, true, 739), 739, $this->source), 'errors');
        echo "
                                    </div>
                                    <div class=\"col-5 text-end\">
                                        <button type=\"submit\" class=\"btn btn-ec-regular me-2\" name=\"mode\" value=\"calc\" data-link=\"order-product\" id=\"calculate\"";
        // line 742
        echo (((isset($context["action_disabled"]) || array_key_exists("action_disabled", $context) ? $context["action_disabled"] : (function () { throw new RuntimeError('Variable "action_disabled" does not exist.', 742, $this->source); })())) ? (" disabled=\"disabled\"") : (""));
        echo ">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.update_calculation_results"), "html", null, true);
        echo "</button>
                                    </div>
                                </div>
                                <table id=\"table-form-field\" class=\"table table-striped table-sm mb-0\"
                                       data-prototype=\"";
        // line 746
        ob_start();
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@admin/Order/order_item_prototype.twig", ["orderItemForm" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 746, $this->source); })()), "OrderItems", [], "any", false, false, true, 746), "vars", [], "any", false, false, true, 746), "prototype", [], "any", false, false, true, 746)]);
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_parse_0_);
        echo "\">
                                    <thead class=\"table-active\">
                                    <tr class=\"text-nowrap\">
                                        <th class=\"pt-2 pb-2 ps-3\">";
        // line 749
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_name_and_code"), "html", null, true);
        echo "</th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">";
        // line 751
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.amount"), "html", null, true);
        echo "</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">";
        // line 754
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.quantity"), "html", null, true);
        echo "</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">";
        // line 757
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tax_rate"), "html", null, true);
        echo "</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">";
        // line 760
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tax_type"), "html", null, true);
        echo "</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">";
        // line 763
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.subtotal"), "html", null, true);
        echo "</div>
                                        </th>
                                        <th class=\"pt-2 pb-2 pe-3\"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 769
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 769, $this->source); })()), "OrderItems", [], "any", false, false, true, 769));
        foreach ($context['_seq'] as $context["_key"] => $context["orderItemForm"]) {
            // line 770
            echo "                                        ";
            $context["OrderItem"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, true, 770), "data", [], "any", false, false, true, 770);
            // line 771
            echo "                                        <tr data-row=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, true, 771), "id", [], "any", false, false, true, 771), 771, $this->source), "html", null, true);
            echo "\">
                                            ";
            // line 773
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "ProductClass", [], "any", false, false, true, 773), 773, $this->source), 'widget');
            echo "
                                            ";
            // line 774
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "order_item_type", [], "any", false, false, true, 774), 774, $this->source), 'widget');
            echo "
                                            ";
            // line 775
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "point_rate", [], "any", false, false, true, 775), 775, $this->source), 'widget');
            echo "
                                            ";
            // line 776
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "tax_type", [], "any", false, false, true, 776), 776, $this->source), 'widget');
            echo "
                                            <!-- 商品名 -->
                                            <td class=\"align-middle w-25 ps-3\">
                                                <p class=\"mb-0 fw-bold\">
                                                    ";
            // line 781
            echo "                                                    ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 781, $this->source); })()), "isProduct", [], "any", false, false, true, 781) || twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 781, $this->source); })()), "isPoint", [], "any", false, false, true, 781))) {
                // line 782
                echo "                                                        ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 782, $this->source); })()), "isProduct", [], "any", false, false, true, 782)) {
                    // line 783
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_product_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 783, $this->source); })()), "ProductClass", [], "any", false, false, true, 783), "Product", [], "any", false, false, true, 783), "id", [], "any", false, false, true, 783)]), "html", null, true);
                    echo "\" target=\"_blank\">
                                                                ";
                    // line 784
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 784, $this->source); })()), "product_name", [], "any", false, false, true, 784), 784, $this->source), "html", null, true);
                    echo "
                                                            </a>
                                                        ";
                } else {
                    // line 787
                    echo "                                                            ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 787, $this->source); })()), "product_name", [], "any", false, false, true, 787), 787, $this->source), "html", null, true);
                    echo "
                                                        ";
                }
                // line 789
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "product_name", [], "any", false, false, true, 789), 789, $this->source), 'widget', ["type" => "hidden"]);
                echo "
                                                    ";
            } else {
                // line 791
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "product_name", [], "any", false, false, true, 791), 791, $this->source), 'widget');
                echo "
                                                    ";
            }
            // line 793
            echo "                                                </p>
                                                <span>
                                                    ";
            // line 795
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 795, $this->source); })()), "product_code", [], "any", false, false, true, 795), 795, $this->source), "html", null, true);
            echo "
                                                    ";
            // line 796
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 796, $this->source); })()), "class_category_name1", [], "any", false, false, true, 796))) {
                // line 797
                echo "                                                        / (
                                                        ";
                // line 798
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 798, $this->source); })()), "class_name1", [], "any", false, false, true, 798), 798, $this->source), "html", null, true);
                echo "：
                                                        ";
                // line 799
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 799, $this->source); })()), "class_category_name1", [], "any", false, false, true, 799), 799, $this->source), "html", null, true);
                echo "
                                                        ";
                // line 800
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 800, $this->source); })()), "class_category_name2", [], "any", false, false, true, 800))) {
                    // line 801
                    echo "                                                            /
                                                            ";
                    // line 802
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 802, $this->source); })()), "class_name2", [], "any", false, false, true, 802), 802, $this->source), "html", null, true);
                    echo "：
                                                            ";
                    // line 803
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 803, $this->source); })()), "class_category_name2", [], "any", false, false, true, 803), 803, $this->source), "html", null, true);
                    echo "
                                                        ";
                }
                // line 805
                echo "                                                        )
                                                    ";
            }
            // line 807
            echo "                                                </span>
                                                ";
            // line 808
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "product_name", [], "any", false, false, true, 808), 808, $this->source), 'errors');
            echo "
                                            </td>
                                            <!-- 金額 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col mt-3\">
                                                    ";
            // line 814
            echo "                                                    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 814, $this->source); })()), "isPoint", [], "any", false, false, true, 814)) {
                // line 815
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "price", [], "any", false, false, true, 815), 815, $this->source), 'widget', ["attr" => ["readonly" => "readonly", "class" => "pointPrice"]]);
                echo "
                                                    ";
            } else {
                // line 817
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "price", [], "any", false, false, true, 817), 817, $this->source), 'widget');
                echo "
                                                    ";
            }
            // line 819
            echo "                                                    <div class=\"text-end small\">(";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 819, $this->source); })()), "TaxDisplayType", [], "any", false, false, true, 819), 819, $this->source), "html", null, true);
            echo ")</div>
                                                    ";
            // line 820
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "price", [], "any", false, false, true, 820), 820, $this->source), 'errors');
            echo "
                                                </div>
                                            </td>
                                            <!-- 数量 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col-12 col-xl-8\">
                                                    ";
            // line 827
            echo "                                                    ";
            if (((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 827, $this->source); })()), "isMultiple", [], "any", false, false, true, 827) && twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 827, $this->source); })()), "isProduct", [], "any", false, false, true, 827)) || twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 827, $this->source); })()), "isPoint", [], "any", false, false, true, 827))) {
                // line 828
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "quantity", [], "any", false, false, true, 828), 828, $this->source), 'widget', ["attr" => ["readonly" => "readonly"]]);
                echo "
                                                    ";
            } else {
                // line 830
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "quantity", [], "any", false, false, true, 830), 830, $this->source), 'widget');
                echo "
                                                    ";
            }
            // line 832
            echo "                                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "quantity", [], "any", false, false, true, 832), 832, $this->source), 'errors');
            echo "
                                                </div>
                                            </td>
                                            <!-- 税率 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col-12 col-xl-8\">
                                                    ";
            // line 839
            echo "                                                    ";
            if ((((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 839, $this->source); })()), "isMultiple", [], "any", false, false, true, 839) && twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 839, $this->source); })()), "isProduct", [], "any", false, false, true, 839)) || twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 839, $this->source); })()), "isPoint", [], "any", false, false, true, 839)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 839, $this->source); })()), "TaxType", [], "any", false, false, true, 839), "id", [], "any", false, false, true, 839) == twig_constant("Eccube\\Entity\\Master\\TaxType::NON_TAXABLE")))) {
                // line 840
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "tax_rate", [], "any", false, false, true, 840), 840, $this->source), 'widget', ["attr" => ["readonly" => "readonly"]]);
                echo "
                                                    ";
            } else {
                // line 842
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "tax_rate", [], "any", false, false, true, 842), 842, $this->source), 'widget');
                echo "
                                                    ";
            }
            // line 844
            echo "                                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "tax_rate", [], "any", false, false, true, 844), 844, $this->source), 'errors');
            echo "
                                                </div>
                                            </td>
                                            <!-- 課税区分 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col\">
                                                    ";
            // line 850
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 850, $this->source); })()), "tax_type", [], "any", false, false, true, 850), 850, $this->source), "html", null, true);
            echo "
                                                </div>
                                            </td>
                                            <!-- 小計 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col\">
                                                    <span>";
            // line 856
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 856, $this->source); })()), "total_price", [], "any", false, false, true, 856), 856, $this->source)), "html", null, true);
            echo "</span>
                                                </div>
                                            </td>
                                            <td class=\"align-middle text-end pe-3\">
                                                <div class=\"row justify-content-end\">
                                                    ";
            // line 862
            echo "                                                    ";
            if (((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 862, $this->source); })()), "isMultiple", [], "any", false, false, true, 862) && twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 862, $this->source); })()), "isProduct", [], "any", false, false, true, 862)) || twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 862, $this->source); })()), "isPoint", [], "any", false, false, true, 862))) {
                // line 863
                echo "                                                        <div class=\"col-auto text-center\">
                                                            <div class=\"d-inline-block me-3\" data-bs-toggle=\"tooltip\"
                                                                 data-bs-placement=\"top\" title=\"";
                // line 865
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                                <a class=\"btn btn-ec-actionIcon disabled\">
                                                                    <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    ";
            } else {
                // line 872
                echo "                                                        <div class=\"col-auto text-center\">
                                                            <div class=\"d-inline-block me-3\" data-bs-toggle=\"tooltip\"
                                                                 data-bs-placement=\"top\" title=\"";
                // line 874
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                                <a class=\"btn btn-ec-actionIcon\" data-bs-toggle=\"modal\" data-bs-target=\"#delete_";
                // line 875
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, true, 875), "id", [], "any", false, false, true, 875), 875, $this->source), "html", null, true);
                echo "\">
                                                                    <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </div>
                                                            <!-- 明細の削除確認モーダル -->
                                                            <div class=\"modal fade\" id=\"delete_";
                // line 880
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, true, 880), "id", [], "any", false, false, true, 880), 880, $this->source), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"delete_";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, true, 880), "id", [], "any", false, false, true, 880), 880, $this->source), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                                <div class=\"modal-dialog\" role=\"document\">
                                                                    <div class=\"modal-content\">
                                                                        <div class=\"modal-header\">
                                                                            <h5 class=\"modal-title fw-bold\">";
                // line 884
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
                echo "</h5>
                                                                            <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                                                                            </button>
                                                                        </div>
                                                                        <div class=\"modal-body text-start\">
                                                                            <p class=\"text-start\">";
                // line 890
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delete_item__confirm_message", ["%name%" => twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 890, $this->source); })()), "product_name", [], "any", false, false, true, 890)]), "html", null, true);
                echo "</p>
                                                                        </div>
                                                                        <div class=\"modal-footer\">
                                                                            <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">";
                // line 893
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                echo "</button>
                                                                            <a href=\"#order-product\" class=\"btn delete btn-ec-delete\">";
                // line 894
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ";
            }
            // line 901
            echo "                                                </div>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItemForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 905
        echo "                                    </tbody>
                                </table>
                                <hr class=\"mt-0\">
                                <!-- 小計 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 910
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.subtotal"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle fw-normal\">";
        // line 911
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 911, $this->source); })()), "subtotal", [], "any", false, false, true, 911), 911, $this->source)), "html", null, true);
        echo "</span></div>
                                </div>
                                <!-- 送料 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 915
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_fee"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle fw-normal\">";
        // line 916
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 916, $this->source); })()), "delivery_fee_total", [], "any", false, false, true, 916), 916, $this->source)), "html", null, true);
        echo "</span></div>
                                </div>
                                <!-- 手数料 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 920
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.charge"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle fw-normal\">";
        // line 921
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 921, $this->source); })()), "charge", [], "any", false, false, true, 921), 921, $this->source)), "html", null, true);
        echo "</span></div>
                                </div>
                                <!-- 値引き -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 925
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.discount"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle text-danger fw-normal\">";
        // line 926
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 926, $this->source); })()), "taxable_discount", [], "any", false, false, true, 926), 926, $this->source)), "html", null, true);
        echo "</span></div>
                                </div>
                                <hr>
                                <!-- 合計 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 931
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.total"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle fw-normal\">";
        // line 932
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 932, $this->source); })()), "taxable_total", [], "any", false, false, true, 932), 932, $this->source)), "html", null, true);
        echo "</span></div>
                                </div>
                                ";
        // line 934
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 934, $this->source); })()), "tax_free_discount_items", [], "any", false, false, true, 934));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 935
            echo "                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
            // line 936
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "product_name", [], "any", false, false, true, 936), 936, $this->source), "html", null, true);
            echo "</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle text-danger fw-normal\">";
            // line 937
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, true, 937), 937, $this->source)), "html", null, true);
            echo "</span></div>
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 940
        echo "                                <!-- お支払い合計 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 942
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.payment_total"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle fw-normal\">";
        // line 943
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 943, $this->source); })()), "payment_total", [], "any", false, false, true, 943), 943, $this->source)), "html", null, true);
        echo "</span></div>
                                </div>
                                <hr>
                                <!-- 消費税額 -->
                                ";
        // line 947
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 947, $this->source); })()), "total_by_tax_rate", [], "any", false, false, true, 947));
        foreach ($context['_seq'] as $context["rate"] => $context["total"]) {
            // line 948
            echo "                                    <div class=\"row justify-content-end mb-3\">
                                        <div class=\"col-auto\"><span class=\"align-middle\">";
            // line 949
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_rate_target", ["%rate%" => $context["rate"]]), "html", null, true);
            echo "</span></div>
                                        <div class=\"col-2 text-end\"><span class=\"align-middle fw-normal\">";
            // line 950
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed($context["total"], 950, $this->source)), "html", null, true);
            echo "</span>(";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_amount"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 950, $this->source); })()), "tax_by_tax_rate", [], "any", false, false, true, 950), $context["rate"], [], "array", false, false, true, 950), 950, $this->source)), "html", null, true);
            echo ")</div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rate'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 953
        echo "                                <hr>
                                <!-- 加算ポイント -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 956
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_point"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-end\">
                                        <span class=\"h4 align-middle fw-normal\">
                                            ";
        // line 959
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 959, $this->source); })()), "vars", [], "any", false, false, true, 959), "value", [], "any", false, false, true, 959), "addpoint", [], "any", false, false, true, 959), 959, $this->source)), "html", null, true);
        echo "
                                        </span>
                                    </div>
                                </div>
                                <!-- 利用ポイント -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 965
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.use_point"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-end\">
                                        <span class=\"h4 align-middle fw-normal\">
                                            ";
        // line 969
        echo "                                            ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 969, $this->source); })()), "isOptionPoint", [], "any", false, false, true, 969) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 969, $this->source); })()), "Customer", [], "any", false, false, true, 969)))) {
            // line 970
            echo "                                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 970, $this->source); })()), "use_point", [], "any", false, false, true, 970), 970, $this->source), 'widget');
            echo "
                                            ";
        } else {
            // line 972
            echo "                                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 972, $this->source); })()), "use_point", [], "any", false, false, true, 972), 972, $this->source), 'widget', ["attr" => ["readonly" => "readonly"]]);
            echo "
                                            ";
        }
        // line 974
        echo "                                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 974, $this->source); })()), "use_point", [], "any", false, false, true, 974), 974, $this->source), 'errors');
        echo "
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <!-- ショップ用メモ欄 -->
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 986
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.shop_memo"), "html", null, true);
        echo "\"><span class=\"card-title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.shop_memo"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ms-1\"></i></span></div>
                                </div>
                                <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#freeArea\" aria-expanded=\"false\" aria-controls=\"freeArea\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"freeArea\">
                            <div class=\"card-body\">
                                ";
        // line 993
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 993, $this->source); })()), "note", [], "any", false, false, true, 993), 993, $this->source), 'widget', ["attr" => ["rows" => 8]]);
        echo "
                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <!-- メール送信履歴 -->
                    ";
        // line 998
        if ( !(null === (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 998, $this->source); })()))) {
            // line 999
            echo "                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            // line 1003
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.mail_history"), "html", null, true);
            echo "\"><span class=\"card-title\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_history"), "html", null, true);
            echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                    </div>
                                    <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#mailHistory\" aria-expanded=\"false\" aria-controls=\"mailHistory\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"mailHistory\">
                                <div class=\"card-body\">
                                    <table class=\"table table-striped\">
                                        <thead class=\"table-active\">
                                        <tr>
                                            <th class=\"pt-2 pb-2 ps-3\">";
            // line 1013
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_send_date"), "html", null, true);
            echo "</th>
                                            <th class=\"pt-2 pb-2 pe-3\">";
            // line 1014
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_subject"), "html", null, true);
            echo "</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
            // line 1018
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 1018, $this->source); })()), "MailHistories", [], "any", false, false, true, 1018));
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
            foreach ($context['_seq'] as $context["_key"] => $context["MailHistory"]) {
                // line 1019
                echo "                                            <tr>
                                                <td class=\"ps-3\">";
                // line 1020
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["MailHistory"], "send_date", [], "any", false, false, true, 1020), 1020, $this->source)), "html", null, true);
                echo "</td>
                                                <td class=\"pe-3\">
                                                    <a class=\"text-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#mail2-";
                // line 1022
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 1022), 1022, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_subject", [], "any", false, false, true, 1022), 1022, $this->source), "html", null, true);
                echo "</a>
                                                    <div class=\"modal fade\" id=\"mail2-";
                // line 1023
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 1023), 1023, $this->source), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mail2-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 1023), 1023, $this->source), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                        <div class=\"modal-dialog\" role=\"document\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h5 class=\"modal-title\">";
                // line 1027
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_subject", [], "any", false, false, true, 1027), 1027, $this->source), "html", null, true);
                echo "</h5>
                                                                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                                </div>
                                                                <div class=\"modal-body\">
                                                                    <p>
                                                                        ";
                // line 1032
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_html_body", [], "any", false, false, true, 1032)) > 0)) {
                    // line 1033
                    echo "                                                                            ";
                    echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_html_body", [], "any", false, false, true, 1033), 1033, $this->source));
                    echo "
                                                                        ";
                } else {
                    // line 1035
                    echo "                                                                            ";
                    echo twig_nl2br(twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_body", [], "any", false, false, true, 1035), 1035, $this->source), "html", null, true));
                    echo "
                                                                        ";
                }
                // line 1037
                echo "                                                                    </p>
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    <button class=\"btn btn-ec-regular\" type=\"button\" data-bs-dismiss=\"modal\">";
                // line 1040
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.close"), "html", null, true);
                echo "</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['MailHistory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1048
            echo "                                        </tbody>
                                    </table>
                                    <div class=\"text-center\">
                                        <a class=\"btn btn-ec-regular\" data-action=\"confirm\" title=\"";
            // line 1051
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail")]), "html", null, true);
            // line 1053
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_mail", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 1053, $this->source); })()), "id", [], "any", false, false, true, 1053)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_create"), "html", null, true);
            echo "</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card.rounded -->
                    ";
        }
        // line 1059
        echo "                </div>
            </div>
        </div>
        <!-- コンバージョンエリア -->
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"";
        // line 1068
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order", ["resume" => 1]);
        echo "\"><i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_list"), "html", null, true);
        echo "</span></a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button type=\"submit\" class=\"btn btn-ec-conversion px-5\" name=\"mode\" value=\"register\"";
        // line 1074
        echo (((isset($context["action_disabled"]) || array_key_exists("action_disabled", $context) ? $context["action_disabled"] : (function () { throw new RuntimeError('Variable "action_disabled" does not exist.', 1074, $this->source); })())) ? (" disabled=\"disabled\"") : (""));
        echo ">";
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
        return "@admin/Order/edit.twig";
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
        return array (  2180 => 1074,  2169 => 1068,  2158 => 1059,  2146 => 1053,  2144 => 1051,  2139 => 1048,  2117 => 1040,  2112 => 1037,  2106 => 1035,  2100 => 1033,  2098 => 1032,  2090 => 1027,  2081 => 1023,  2075 => 1022,  2070 => 1020,  2067 => 1019,  2050 => 1018,  2043 => 1014,  2039 => 1013,  2024 => 1003,  2018 => 999,  2016 => 998,  2008 => 993,  1996 => 986,  1980 => 974,  1974 => 972,  1968 => 970,  1965 => 969,  1959 => 965,  1950 => 959,  1944 => 956,  1939 => 953,  1926 => 950,  1922 => 949,  1919 => 948,  1915 => 947,  1908 => 943,  1904 => 942,  1900 => 940,  1891 => 937,  1887 => 936,  1884 => 935,  1880 => 934,  1875 => 932,  1871 => 931,  1863 => 926,  1859 => 925,  1852 => 921,  1848 => 920,  1841 => 916,  1837 => 915,  1830 => 911,  1826 => 910,  1819 => 905,  1810 => 901,  1800 => 894,  1796 => 893,  1790 => 890,  1781 => 884,  1772 => 880,  1764 => 875,  1760 => 874,  1756 => 872,  1746 => 865,  1742 => 863,  1739 => 862,  1731 => 856,  1722 => 850,  1712 => 844,  1706 => 842,  1700 => 840,  1697 => 839,  1687 => 832,  1681 => 830,  1675 => 828,  1672 => 827,  1663 => 820,  1658 => 819,  1652 => 817,  1646 => 815,  1643 => 814,  1635 => 808,  1632 => 807,  1628 => 805,  1623 => 803,  1619 => 802,  1616 => 801,  1614 => 800,  1610 => 799,  1606 => 798,  1603 => 797,  1601 => 796,  1597 => 795,  1593 => 793,  1587 => 791,  1581 => 789,  1575 => 787,  1569 => 784,  1564 => 783,  1561 => 782,  1558 => 781,  1551 => 776,  1547 => 775,  1543 => 774,  1538 => 773,  1533 => 771,  1530 => 770,  1526 => 769,  1517 => 763,  1511 => 760,  1505 => 757,  1499 => 754,  1493 => 751,  1488 => 749,  1479 => 746,  1470 => 742,  1464 => 739,  1452 => 730,  1443 => 725,  1433 => 718,  1429 => 717,  1425 => 716,  1418 => 712,  1409 => 707,  1406 => 706,  1392 => 696,  1383 => 689,  1374 => 683,  1370 => 682,  1365 => 680,  1358 => 676,  1354 => 675,  1349 => 673,  1340 => 667,  1336 => 666,  1329 => 664,  1322 => 660,  1318 => 659,  1311 => 657,  1304 => 653,  1300 => 652,  1293 => 650,  1283 => 642,  1276 => 638,  1272 => 637,  1266 => 634,  1257 => 628,  1253 => 627,  1247 => 624,  1243 => 622,  1241 => 621,  1233 => 615,  1229 => 614,  1224 => 612,  1216 => 607,  1212 => 606,  1205 => 604,  1194 => 596,  1190 => 595,  1182 => 590,  1178 => 589,  1170 => 584,  1166 => 583,  1158 => 578,  1154 => 577,  1150 => 576,  1141 => 572,  1132 => 566,  1128 => 565,  1122 => 562,  1118 => 561,  1109 => 557,  1100 => 551,  1096 => 550,  1090 => 547,  1086 => 546,  1077 => 542,  1070 => 537,  1061 => 534,  1059 => 533,  1056 => 532,  1054 => 531,  1051 => 530,  1041 => 528,  1039 => 527,  1035 => 526,  1031 => 524,  1029 => 523,  1026 => 522,  1002 => 519,  999 => 518,  996 => 517,  994 => 516,  988 => 515,  985 => 514,  968 => 513,  963 => 511,  956 => 510,  954 => 509,  951 => 508,  949 => 507,  947 => 506,  935 => 499,  919 => 486,  915 => 485,  910 => 483,  903 => 479,  899 => 478,  894 => 476,  887 => 472,  883 => 471,  876 => 469,  869 => 465,  865 => 464,  858 => 462,  846 => 453,  842 => 452,  834 => 447,  830 => 446,  822 => 441,  818 => 440,  810 => 435,  806 => 434,  802 => 433,  793 => 429,  784 => 423,  780 => 422,  774 => 419,  770 => 418,  761 => 414,  752 => 408,  748 => 407,  742 => 404,  738 => 403,  729 => 399,  722 => 395,  718 => 394,  706 => 393,  699 => 391,  694 => 388,  684 => 381,  680 => 380,  673 => 376,  662 => 368,  658 => 366,  656 => 365,  643 => 357,  633 => 349,  627 => 348,  618 => 342,  614 => 341,  608 => 338,  602 => 334,  596 => 332,  593 => 331,  590 => 330,  585 => 329,  577 => 323,  573 => 322,  567 => 319,  563 => 318,  557 => 315,  553 => 314,  550 => 313,  543 => 309,  538 => 307,  535 => 306,  533 => 305,  528 => 303,  524 => 302,  518 => 299,  514 => 298,  505 => 292,  501 => 291,  497 => 290,  492 => 288,  487 => 285,  482 => 283,  477 => 282,  475 => 281,  468 => 279,  462 => 276,  456 => 275,  441 => 265,  430 => 257,  426 => 256,  419 => 254,  410 => 248,  404 => 245,  391 => 235,  383 => 229,  380 => 227,  377 => 225,  374 => 224,  372 => 223,  362 => 222,  351 => 219,  329 => 200,  324 => 197,  321 => 196,  306 => 183,  298 => 178,  195 => 78,  172 => 58,  152 => 41,  132 => 23,  122 => 22,  103 => 16,  84 => 15,  73 => 11,  71 => 20,  69 => 19,  67 => 18,  65 => 13,  40 => 11,);
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

{% set menus = ['order', 'order_edit'] %}

{% block title %}{{ 'admin.order.order_registration'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.order.order_management'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}
{% form_theme searchCustomerModalForm '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}
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

            // 会員検索
            \$('#searchCustomerModalButton').on('click', function() {
                var list = \$('#searchCustomerModalList');
                list.children().remove();

                \$.ajax({
                    url: '{{ url('admin_order_search_customer_html') }}',
                    type: 'POST',
                    dataType: 'html',
                    data: {'search_word': \$('#admin_search_customer_multi').val()}
                }).done(function(data) {
                    \$('#searchCustomerModalList').html(data);
                }).fail(function(data) {
                    alert('search customer failed.');
                });
            });

            // 商品検索
            \$('#searchProductModalButton').on('click', function() {
                var list = \$('#searchProductModalList');
                list.children().remove();

                \$.ajax({
                    url: '{{ url('admin_order_search_product') }}',
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
            formIdPrefix = '#order_OrderItems_';
            if (index > 0) {
                let row = '#' + \$collectionHolder.find('tbody > tr').last().data(\"row\");
                index = row.replace(formIdPrefix, '');
            }

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
                \$('#order_Shipping_name_name01').val(\$('#order_name_name01').val());
                \$('#order_Shipping_name_name02').val(\$('#order_name_name02').val());
                \$('#order_Shipping_kana_kana01').val(\$('#order_kana_kana01').val());
                \$('#order_Shipping_kana_kana02').val(\$('#order_kana_kana02').val());
                \$('#order_Shipping_postal_code').val(\$('#order_postal_code').val());
                \$('#order_Shipping_address_pref').val(\$('#order_address_pref').val());
                \$('#order_Shipping_address_addr01').val(\$('#order_address_addr01').val());
                \$('#order_Shipping_address_addr02').val(\$('#order_address_addr02').val());
                \$('#order_Shipping_email').val(\$('#order_email').val());
                \$('#order_Shipping_phone_number').val(\$('#order_phone_number').val());
                \$('#order_Shipping_company_name').val(\$('#order_company_name').val());
            });

            // PDF出力(単一)
            \$('.pdf-print').click(function() {
                window.open(this.href, 'newwin', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=700, height=700');
                return false;
            });

            // お届け時間の初期表示
            \$('#order_Shipping_Delivery').change();

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
            \$('#order_Shipping_Delivery').change(function() {
                var deliveryId = \$(this).val();
                var \$shippingDeliveryTime = \$('#order_Shipping_DeliveryTime');
                \$shippingDeliveryTime.find('option').remove();
                \$shippingDeliveryTime.append(\$('<option></option>').val('').text('{{ 'admin.common.select__unspecified'|trans }}'));
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

        {# ポイント機能が有効かつ会員の場合のみポイントの割引金額を変更する #}
        {% if BaseInfo.isOptionPoint and Order.Customer is not null %}
            // 再計算時のポイントの割引金額の更新
            function updatePointItem() {
                // ポイント換算レート
                var pointConversionRate = {{ BaseInfo.point_conversion_rate }};
                // 利用ポイント
                var usePoint = \$('#order_use_point').val();

                // 利用ポイントが数値以外の時は割引金額を更新しない
                if (isNaN(usePoint)) return;

                // 割引金額を計算
                var discountPrice = (-1) * pointConversionRate * usePoint;

                // ポイント明細の金額の要素を取得
                var \$pointPrice = \$('.pointPrice');

                // ポイント明細の金額の要素がある場合はポイントの更新
                if (\$pointPrice.length) {
                    \$pointPrice.val(discountPrice);
                }
            }
        {% endif %}
    </script>
{% endblock javascript %}

{% block main %}
    {# 決済処理中/購入処理中ステータスは登録・更新等の操作を無効にする #}
    {% set action_disabled = false %}
    {% if Order.OrderStatus is not empty and Order.OrderStatus.id in [
        constant('Eccube\\\\Entity\\\\Master\\\\OrderStatus::PROCESSING'), constant('Eccube\\\\Entity\\\\Master\\\\OrderStatus::PENDING')] -%}
        {% set action_disabled = true %}
    {%- endif %}
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
    <form name=\"form1\" id=\"form1\" method=\"post\" action=\"?\"{% if BaseInfo.isOptionPoint and Order.Customer is not null %} onsubmit=\"updatePointItem()\"{% endif %}>
        <input type=\"hidden\" name=\"mode\" value=\"\">
        {{ form_widget(form._token) }}
        {{ form_widget(form.return_link) }}
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.order.order_info'|trans }}\"><span class=\"card-title\">{{ 'admin.order.order_info'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#orderOverview\" aria-expanded=\"false\" aria-controls=\"orderOverview\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"orderOverview\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.order.order_no'|trans }}\">{{ 'admin.order.order_no'|trans }}<i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                            <div class=\"col\">{{ Order.order_no }}</div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.order.order_status'|trans }}\">{{ 'admin.order.order_status'|trans }}<i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                                            <div class=\"col\">
                                                {% if Order.id is not empty %}
                                                    {{ form_widget(form.OrderStatus) }}
                                                    {{ form_errors(form.OrderStatus) }}
                                                {% endif %}
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">{{ 'admin.common.payment_method'|trans }}</label>
                                            <div class=\"col\">
                                                {{ form_widget(form.Payment) }}
                                                {{ form_errors(form.Payment) }}
                                                <p class=\"form-text fw-bold text-danger mb-0\">{{ 'admin.order.change_payment_method_message'|trans }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\"><i class=\"fa fa-inbox fa-fw me-1\" aria-hidden=\"true\"></i>{{ 'admin.order.order_date'|trans }}</div>
                                            <div class=\"col\">{{ Order.order_date ? Order.order_date|date_sec : '' }}</div>
                                        </div>
                                        <div class=\"row mb-3 d-none\">
                                            <div class=\"col-3\"><i class=\"fa fa-money fa-fw me-1\" aria-hidden=\"true\"></i>{{ 'admin.order.payment_date'|trans }}</div>
                                            <div class=\"col\">{{ Order.payment_date ? Order.payment_date|date_sec : '' }}</div>
                                        </div>
                                        {% if not Order.isMultiple %}
                                            <div class=\"row mb-3 d-none\">
                                                <div class=\"col-3\"><i class=\"fa fa-truck fa-fw me-1\" aria-hidden=\"true\"></i>{{ 'admin.order.shipping_date'|trans }}</div>
                                                <div class=\"col\">
                                                    {{ Order.Shippings[0].shipping_date|date_sec }}
                                                </div>
                                            </div>
                                        {% endif %}
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\"><i class=\"fa fa-refresh fa-fw me-1\" aria-hidden=\"true\"></i>{{ 'admin.common.update_date'|trans }}</div>
                                            <div class=\"col\">{{ Order.update_date ? Order.update_date|date_sec : '' }}</div>
                                        </div>
                                        <div class=\"row mb-3 d-none\">
                                            <div class=\"col-3\"><i class=\"fa fa-mobile fa-fw me-1\" aria-hidden=\"true\"></i>{{ 'admin.common.device_type'|trans }}</div>
                                            <div class=\"col\">{{ Order.device_type }}</div>
                                        </div>
                                        <div class=\"row mb-3 d-none\">
                                            <div class=\"col-3\"><i class=\"fa fa-commenting fa-fw me-1\" aria-hidden=\"true\"></i>{{ 'admin.order.message'|trans }}</div>
                                            <div class=\"col\">{{ Order.message ? Order.message|nl2br : '' }}</div>
                                        </div>
                                    </div>
                                </div>

                                {# エンティティ拡張の自動出力 #}
                                {% for f in form|filter(f => f.vars.eccube_form_options.auto_render) %}
                                    {% if f.vars.eccube_form_options.form_theme %}
                                        {% form_theme f f.vars.eccube_form_options.form_theme %}
                                        {{ form_row(f) }}
                                    {% else %}
                                        <div class=\"row\">
                                            <div class=\"col-6\">
                                                <div class=\"row mb-3\">
                                                    <div class=\"col-3\">
                                                        <span>{{ f.vars.label|trans }}</span>
                                                    </div>
                                                    <div class=\"col\">
                                                        {{ form_widget(f) }}
                                                        {{ form_errors(f) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    {% endif %}
                                {% endfor %}

                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'admin.order.orderer'|trans }}\"><span class=\"card-title\">{{ 'admin.order.orderer'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#ordererInfo\" aria-expanded=\"false\" aria-controls=\"orderOverview\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"ordererInfo\">
                            <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                            <div class=\"card-body\">
                                {% if Order.id is empty %}
                                    <div class=\"row mb-3\">
                                        <div class=\"col-auto\">
                                            <a class=\"btn btn-ec-regular px-3\" data-bs-toggle=\"modal\" data-bs-target=\"#searchCustomerModal\">{{ 'admin.order.search_from_customer'|trans }}</a>
                                        </div>
                                    </div>
                                    <!-- 会員検索モーダル -->
                                    <div class=\"modal fade\" id=\"searchCustomerModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"searchCustomerModal\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog modal-lg\" role=\"document\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title fw-bold\">{{ 'admin.order.search_customer_title'|trans }}</h5>
                                                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    {{ form_widget(searchCustomerModalForm.multi, { attr : {'class': 'mb-2searchCustomerModal', placeholder : 'admin.customer.multi_search_label' }}) }}
                                                    <button type=\"button\" id=\"searchCustomerModalButton\" class=\"btn btn-ec-conversion px-5 mb-4 mt-2\">{{ 'admin.common.search'|trans }}</button>
                                                    <div class=\"mb-3\" id=\"searchCustomerModalList\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}
                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <div class=\"row\">
                                            <label class=\"col-3 col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.order.customer_id'|trans }}\">{{ 'admin.customer.customer_id'|trans }}<i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                                            <div class=\"col\">
                                                <p id=\"order_CustomerId\">{% if form.Customer.vars.value is empty %}{{ 'admin.order.non_member'|trans }}{% else %}<a href=\"{{ url('admin_customer_edit', {'id': form.Customer.vars.value}) }}\">{{ form.Customer.vars.value }}</a>{% endif %}</p>
                                                {{ form_widget(form.Customer) }}
                                                {{ form_errors(form.Customer) }}
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">{{ 'admin.common.name'|trans }}<span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span></label>
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
                                        <div class=\"row mb-3 d-none\">
                                            <label class=\"col-3 col-form-label\">{{ 'admin.common.kana'|trans }}<span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span></label>
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
                                            <label class=\"col-3 col-form-label\">{{ 'admin.common.address'|trans }}<span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span></label>
                                            <div class=\"col\">
                                                <div class=\"row mb-3\">
                                                    <div class=\"col row align-items-center\">
                                                        <span class=\"col-auto\">{{ 'admin.common.postal_symbol'|trans }}</span>
                                                        <span class=\"col-auto ps-0\">{{ form_widget(form.postal_code) }}</span>
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
                                            <label class=\"col-3 col-form-label\">{{ 'admin.common.mail_address'|trans }}<span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span></label>
                                            <div class=\"col\">
                                                {{ form_widget(form.email) }}
                                                {{ form_errors(form.email) }}
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">{{ 'admin.common.phone_number'|trans }}<span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span></label>
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
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.order.shipping_info'|trans }}\"><span class=\"card-title\">{{ 'admin.order.shipping_info'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#shippingInfo\" aria-expanded=\"false\" aria-controls=\"shippingInfo\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"shippingInfo\">
                            <div class=\"card-body\">
                                {% if Order.isMultiple %}
                                    {# 複数配送の場合は配送先の表示のみ #}
                                    <div class=\"mb-3\">
                                        <a id=\"shipping-add\" class=\"btn btn-ec-regular\" data-action=\"confirm\" title=\"{{ 'admin.common.move_to_confirm_message'|trans({'%name%' : 'admin.order.shipping_registration'|trans
                                           }) }}\" href=\"{{ path(\"admin_shipping_edit\", {id: Order.id}) }}\">{{ 'admin.order.edit_multiple_shipping'|trans }}</a>
                                        <span class=\"ml-3\">{{ 'admin.order.edit_multiple_shipping_description'|trans }}</span>
                                    </div>
                                    {% for shipping in Order.Shippings %}
                                        <div class=\"col\">
                                            <span class=\"me-5\">{{ 'admin.order.delivery'|trans }}({{ loop.index }})</span>
                                            {% set shipping_name = shipping.full_name ~ '(' ~ shipping.full_name_kana ~ ')' ~ (shipping.company_name is not null ? ' ' ~ shipping.company_name : '') %}
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
                                            {% if Order.id is not empty %}
                                                <a class=\"btn btn-ec-regular pdf-print\" href=\"{{ url('admin_order_export_pdf') }}?ids[]={{ Order.Shippings[0].id }}\">{{ 'admin.order.output_delivery_note'|trans }}</a>
                                            {% endif %}
                                        </div>
                                        {% if Order.id is not empty %}
                                            <div class=\"col-6 text-end\">
                                                <a id=\"shipping-add\" class=\"btn btn-ec-regular w-25\" data-action=\"confirm\" title=\"{{ 'admin.common.move_to_confirm_message'|trans({'%name%' : 'admin.order.shipping_registration'|trans
                                           }) }}\" href=\"{{ path(\"admin_shipping_edit\", {id: Order.id}) }}\">{{ 'admin.order.add_shipping'|trans }}</a>
                                            </div>
                                        {% endif %}
                                    </div>
                                    <div class=\"row h-adr\">
                                        <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3 d-none\">
                                                <label class=\"col-3 col-form-label\">{{ 'admin.common.name'|trans }}<span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span></label>
                                                <div class=\"col\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            {{ form_widget(form.Shipping.name.name01) }}
                                                            {{ form_errors(form.Shipping.name.name01) }}
                                                        </div>
                                                        <div class=\"col\">
                                                            {{ form_widget(form.Shipping.name.name02) }}
                                                            {{ form_errors(form.Shipping.name.name02) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">{{ 'admin.common.kana'|trans }}<span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span></label>
                                                <div class=\"col\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            {{ form_widget(form.Shipping.kana.kana01) }}
                                                            {{ form_errors(form.Shipping.kana.kana01) }}
                                                        </div>
                                                        <div class=\"col\">
                                                            {{ form_widget(form.Shipping.kana.kana02) }}
                                                            {{ form_errors(form.Shipping.kana.kana02) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">{{ 'admin.common.address'|trans }}<span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span></label>
                                                <div class=\"col\">
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col row align-items-center\">
                                                            <span class=\"col-auto\">{{ 'admin.common.postal_symbol'|trans }}</span>
                                                            <span class=\"col-auto ps-0\">{{ form_widget(form.Shipping.postal_code) }}</span>
                                                            {{ form_errors(form.Shipping.postal_code) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col\">
                                                            {{ form_widget(form.Shipping.address.pref) }}
                                                            {{ form_errors(form.Shipping.address.pref) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col\">
                                                            {{ form_widget(form.Shipping.address.addr01) }}
                                                            {{ form_errors(form.Shipping.address.addr01) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            {{ form_widget(form.Shipping.address.addr02) }}
                                                            {{ form_errors(form.Shipping.address.addr02) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">{{ 'admin.common.phone_number'|trans }}<span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span></label>
                                                <div class=\"col\">
                                                    {{ form_widget(form.Shipping.phone_number) }}
                                                    {{ form_errors(form.Shipping.phone_number) }}
                                                </div>
                                            </div>

                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">{{ 'admin.common.company_name'|trans }}</label>
                                                <div class=\"col\">
                                                    {{ form_widget(form.Shipping.company_name) }}
                                                    {{ form_errors(form.Shipping.company_name) }}
                                                </div>
                                            </div>
                                        </div>

{# 会社名の直後あたりに #}
{% if form.Shipping is defined and form.Shipping.shipping_ext is defined %}
  <div class=\"row mb-2\">
    <div class=\"col-sm-3\">
      {{ form_label(form.Shipping.shipping_ext.depart_name, null, {'label_attr': {'class': 'col-form-label col-sm-3'}}) }}
    </div>
    <div class=\"col-sm-9\">
      {{ form_widget(form.Shipping.shipping_ext.depart_name) }}
      {{ form_errors(form.Shipping.shipping_ext.depart_name) }}
    </div>
  </div>

  <div class=\"row mb-3\">
    <div class=\"col-sm-3\">
      {{ form_label(form.Shipping.shipping_ext.pic_name, null, {'label_attr': {'class': 'col-form-label col-sm-3'}}) }}
    </div>
    <div class=\"col-sm-9\">
      {{ form_widget(form.Shipping.shipping_ext.pic_name) }}
      {{ form_errors(form.Shipping.shipping_ext.pic_name) }}
    </div>
  </div>
{% endif %}



                                        <div class=\"col-12\">
                                            <hr>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.order.shipping_info.tracking_number'|trans }}\">{{ 'admin.order.tracking_number'|trans }}<i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                                                <div class=\"col\">
                                                    {{ form_widget(form.Shipping.tracking_number) }}
                                                    {{ form_errors(form.Shipping.tracking_number) }}
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.order.shipping_info.delivery_provider'|trans }}\">{{ 'admin.order.delivery_provider'|trans }}<span class=\"badge bg-primary ms-1\"></span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                                                <div class=\"col\">
                                                    {{ form_widget(form.Shipping.Delivery) }}
                                                    {{ form_errors(form.Shipping.Delivery) }}
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.order.shipping_info.shop_memo'|trans }}\">{{ 'admin.order.shop_memo_for_shipped'|trans }}<i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                                                <div class=\"col\">
                                                    {{ form_widget(form.Shipping.note) }}
                                                    {{ form_errors(form.Shipping.note) }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\"><i class=\"fa fa-calendar-check-o fa-fw me-1\" aria-hidden=\"true\"></i>{{ 'admin.order.delivery_date'|trans }}</label>
                                                <div class=\"col\">
                                                    {{ form_widget(form.Shipping.shipping_delivery_date) }}
                                                    {{ form_errors(form.Shipping.shipping_delivery_date) }}
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\"><i class=\"fa fa-clock-o fa-fw me-1\" aria-hidden=\"true\"></i>{{ 'admin.order.delivery_time'|trans }}</label>
                                                <div class=\"col\">
                                                    {{ form_widget(form.Shipping.DeliveryTime) }}
                                                    {{ form_errors(form.Shipping.DeliveryTime) }}
                                                </div>
                                            </div>
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
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.order.product_info'|trans }}\"><span class=\"card-title\">{{ 'admin.order.product_info'|trans }}<i class=\"fa fa-question-circle fa-lg ms-1\"></i></span></div>
                                </div>
                                <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#orderItem\" aria-expanded=\"false\" aria-controls=\"orderItem\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"orderItem\">
                            <div class=\"card-body\">
                                <div class=\"row justify-content-between mb-2\">
                                    <div class=\"col-6\">
                                        {# 複数配送の場合は商品追加できない #}
                                        {% if not Order.isMultiple %}
                                            <a class=\"btn btn-ec-regular me-2 add\" data-bs-toggle=\"modal\" data-bs-target=\"#addProduct\">{{ 'admin.order.add_product_item'|trans }}</a>
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
                                        <a class=\"btn btn-ec-regular me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#addOrderItemType\">{{ 'admin.order.add_other_item'|trans }}</a>
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
                                        {{ form_errors(form.OrderItemsErrors) }}
                                    </div>
                                    <div class=\"col-5 text-end\">
                                        <button type=\"submit\" class=\"btn btn-ec-regular me-2\" name=\"mode\" value=\"calc\" data-link=\"order-product\" id=\"calculate\"{{ action_disabled ? ' disabled=\"disabled\"' }}>{{ 'admin.order.update_calculation_results'|trans }}</button>
                                    </div>
                                </div>
                                <table id=\"table-form-field\" class=\"table table-striped table-sm mb-0\"
                                       data-prototype=\"{% apply escape %}{{ include('@admin/Order/order_item_prototype.twig', {'orderItemForm': form.OrderItems.vars.prototype}) }}{% endapply %}\">
                                    <thead class=\"table-active\">
                                    <tr class=\"text-nowrap\">
                                        <th class=\"pt-2 pb-2 ps-3\">{{ 'admin.product.product_name_and_code'|trans }}</th>
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
                                        <th class=\"pt-2 pb-2 pe-3\"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for orderItemForm in form.OrderItems %}
                                        {% set OrderItem = orderItemForm.vars.data %}
                                        <tr data-row=\"{{ orderItemForm.vars.id }}\">
                                            {# hidden values #}
                                            {{ form_widget(orderItemForm.ProductClass) }}
                                            {{ form_widget(orderItemForm.order_item_type) }}
                                            {{ form_widget(orderItemForm.point_rate) }}
                                            {{ form_widget(orderItemForm.tax_type) }}
                                            <!-- 商品名 -->
                                            <td class=\"align-middle w-25 ps-3\">
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
                                                    {% if (Order.isMultiple and OrderItem.isProduct) or OrderItem.isPoint %}
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
                                                    {% if (Order.isMultiple and OrderItem.isProduct) or OrderItem.isPoint or OrderItem.TaxType.id == constant('Eccube\\\\Entity\\\\Master\\\\TaxType::NON_TAXABLE') %}
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
                                            <td class=\"align-middle text-end pe-3\">
                                                <div class=\"row justify-content-end\">
                                                    {# 複数配送の場合は商品を削除できない #}
                                                    {% if (Order.isMultiple and OrderItem.isProduct) or OrderItem.isPoint %}
                                                        <div class=\"col-auto text-center\">
                                                            <div class=\"d-inline-block me-3\" data-bs-toggle=\"tooltip\"
                                                                 data-bs-placement=\"top\" title=\"{{ 'admin.common.delete'|trans }}\">
                                                                <a class=\"btn btn-ec-actionIcon disabled\">
                                                                    <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    {% else %}
                                                        <div class=\"col-auto text-center\">
                                                            <div class=\"d-inline-block me-3\" data-bs-toggle=\"tooltip\"
                                                                 data-bs-placement=\"top\" title=\"{{ 'admin.common.delete'|trans }}\">
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
                                                                            <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                                                                            </button>
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
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle fw-normal\">{{ Order.subtotal|price }}</span></div>
                                </div>
                                <!-- 送料 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">{{ 'admin.order.delivery_fee'|trans }}</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle fw-normal\">{{ Order.delivery_fee_total|price }}</span></div>
                                </div>
                                <!-- 手数料 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">{{ 'admin.common.charge'|trans }}</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle fw-normal\">{{ Order.charge|price }}</span></div>
                                </div>
                                <!-- 値引き -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">{{ 'admin.order.discount'|trans }}</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle text-danger fw-normal\">{{ Order.taxable_discount|price }}</span></div>
                                </div>
                                <hr>
                                <!-- 合計 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">{{ 'admin.order.total'|trans }}</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle fw-normal\">{{ Order.taxable_total|price }}</span></div>
                                </div>
                                {% for item in Order.tax_free_discount_items %}
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">{{ item.product_name }}</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle text-danger fw-normal\">{{ item.total_price|price }}</span></div>
                                </div>
                                {% endfor %}
                                <!-- お支払い合計 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">{{ 'admin.order.payment_total'|trans }}</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle fw-normal\">{{ Order.payment_total|price }}</span></div>
                                </div>
                                <hr>
                                <!-- 消費税額 -->
                                {% for rate, total in Order.total_by_tax_rate %}
                                    <div class=\"row justify-content-end mb-3\">
                                        <div class=\"col-auto\"><span class=\"align-middle\">{{ 'common.tax_rate_target'|trans({ '%rate%': rate }) }}</span></div>
                                        <div class=\"col-2 text-end\"><span class=\"align-middle fw-normal\">{{ total|price }}</span>({{ 'common.tax_amount'|trans }} {{ Order.tax_by_tax_rate[rate]|price }})</div>
                                    </div>
                                {% endfor %}
                                <hr>
                                <!-- 加算ポイント -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">{{ 'admin.order.add_point'|trans }}</span></div>
                                    <div class=\"col-2 text-end\">
                                        <span class=\"h4 align-middle fw-normal\">
                                            {{ form.vars.value.addpoint|number_format }}
                                        </span>
                                    </div>
                                </div>
                                <!-- 利用ポイント -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">{{ 'admin.order.use_point'|trans }}</span></div>
                                    <div class=\"col-2 text-end\">
                                        <span class=\"h4 align-middle fw-normal\">
                                            {# ポイント機能が有効かつ会員の場合のみポイントを編集可能とする #}
                                            {% if BaseInfo.isOptionPoint and Order.Customer is not null %}
                                                {{ form_widget(form.use_point) }}
                                            {% else %}
                                                {{ form_widget(form.use_point, {'attr': { 'readonly': 'readonly' } }) }}
                                            {% endif %}
                                            {{ form_errors(form.use_point) }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <!-- ショップ用メモ欄 -->
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.order.shop_memo'|trans }}\"><span class=\"card-title\">{{ 'admin.common.shop_memo'|trans }}<i class=\"fa fa-question-circle fa-lg ms-1\"></i></span></div>
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
                    <!-- メール送信履歴 -->
                    {% if id is not null %}
                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.order.mail_history'|trans }}\"><span class=\"card-title\">{{ 'admin.order.mail_history'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                    </div>
                                    <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#mailHistory\" aria-expanded=\"false\" aria-controls=\"mailHistory\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"mailHistory\">
                                <div class=\"card-body\">
                                    <table class=\"table table-striped\">
                                        <thead class=\"table-active\">
                                        <tr>
                                            <th class=\"pt-2 pb-2 ps-3\">{{ 'admin.order.mail_send_date'|trans }}</th>
                                            <th class=\"pt-2 pb-2 pe-3\">{{ 'admin.order.mail_subject'|trans }}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for MailHistory in Order.MailHistories %}
                                            <tr>
                                                <td class=\"ps-3\">{{ MailHistory.send_date|date_min }}</td>
                                                <td class=\"pe-3\">
                                                    <a class=\"text-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#mail2-{{ loop.index }}\">{{ MailHistory.mail_subject }}</a>
                                                    <div class=\"modal fade\" id=\"mail2-{{ loop.index }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mail2-{{ loop.index }}\" aria-hidden=\"true\">
                                                        <div class=\"modal-dialog\" role=\"document\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h5 class=\"modal-title\">{{ MailHistory.mail_subject }}</h5>
                                                                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                                </div>
                                                                <div class=\"modal-body\">
                                                                    <p>
                                                                        {% if MailHistory.mail_html_body|length > 0 %}
                                                                            {{ MailHistory.mail_html_body|raw|purify }}
                                                                        {% else %}
                                                                            {{ MailHistory.mail_body|nl2br }}
                                                                        {% endif %}
                                                                    </p>
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    <button class=\"btn btn-ec-regular\" type=\"button\" data-bs-dismiss=\"modal\">{{ 'admin.common.close'|trans }}</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                    <div class=\"text-center\">
                                        <a class=\"btn btn-ec-regular\" data-action=\"confirm\" title=\"{{ 'admin.common.move_to_confirm_message'|trans({
                                               '%name%' : 'admin.order.mail'|trans
                                           }) }}\" href=\"{{ path('admin_order_mail', { id : Order.id }) }}\">{{ 'admin.order.mail_create'|trans }}</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card.rounded -->
                    {% endif %}
                </div>
            </div>
        </div>
        <!-- コンバージョンエリア -->
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"{{ url('admin_order', { 'resume': 1 }) }}\"><i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>{{ 'admin.order.order_list'|trans }}</span></a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button type=\"submit\" class=\"btn btn-ec-conversion px-5\" name=\"mode\" value=\"register\"{{ action_disabled ? ' disabled=\"disabled\"' }}>{{ 'admin.common.registration'|trans }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
{% endblock %}
", "@admin/Order/edit.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\template\\admin\\Order\\edit.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18, "if" => 196, "for" => 329, "apply" => 746);
        static $filters = array("escape" => 15, "trans" => 15, "raw" => 178, "date_sec" => 299, "nl2br" => 323, "filter" => 329, "date_day" => 518, "price" => 856, "number_format" => 959, "date_min" => 1020, "length" => 1032, "purify" => 1033);
        static $functions = array("url" => 41, "constant" => 226, "form_widget" => 256, "form_errors" => 283, "form_row" => 332, "path" => 510, "form_label" => 624, "include" => 746);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'if', 'for', 'apply'],
                ['escape', 'trans', 'raw', 'date_sec', 'nl2br', 'filter', 'date_day', 'price', 'number_format', 'date_min', 'length', 'purify'],
                ['url', 'constant', 'form_widget', 'form_errors', 'form_row', 'path', 'form_label', 'include']
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
