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

/* @admin/Order/shipping.twig */
class __TwigTemplate_2056487928b335d09060b306e544837c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Order/shipping.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Order/shipping.twig"));

        // line 13
        $context["menus"] = ["order", "order_edit"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 19
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["searchProductModalForm"]) || array_key_exists("searchProductModalForm", $context) ? $context["searchProductModalForm"] : (function () { throw new RuntimeError('Variable "searchProductModalForm" does not exist.', 19, $this->source); })()), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Order/shipping.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_registration"), "html", null, true);
        
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

    // line 21
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 22
        echo "    <script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>

    <script>
        // 商品追加
        \$('.addProduct-button').on('click', function() {
            var no = \$(this).data('shipping-no');
            \$collectionHolder = \$('#table-form-field_' + no);
            index = \$collectionHolder.find('tbody > tr').length;
            formIdPrefix = '#form_shippings_' + no + '_OrderItems_';
        })

        // その他明細追加
        \$('.addOtherProduct-button').on('click', function() {
            var no = \$(this).data('shipping-no');
            \$collectionHolder = \$('#table-form-field_' + no);
            index = \$collectionHolder.find('tbody > tr').length;
            formIdPrefix = '#form_shippings_' + no + '_OrderItems_';
        })

        // 商品検索
        \$('#searchProductModalButton').on('click', function() {
            var list = \$('#searchProductModalList');
            list.children().remove();

            \$.ajax({
                url: '";
        // line 47
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
        // line 67
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

        \$(document).on('click', '.delete', function(e) {
            // 商品削除
            \$(this).parents('tr').remove();
            \$(\"#form1\").submit();

            return false;
        });

        \$(document).on('click', '.delete-shipping', function(e) {
            // お届け先削除
            \$(this).parents('div.card').remove();
            \$(\"#form1\").submit();

            return false;
        });

        ";
        // line 94
        echo "        // 計算結果の更新が押されたらページ内リンクさせる
        // \$('.btn').click(function() {
        //     var data = \$(this).data();
        //     if (data.link) {
        //         \$('#form1').attr('action', '#' + data.link).submit();
        //         return false;
        //     }
        // });

        // 配送業者選択時にお届け時間を設定
        var times = ";
        // line 104
        echo $this->sandbox->ensureToStringAllowed((isset($context["shippingDeliveryTimes"]) || array_key_exists("shippingDeliveryTimes", $context) ? $context["shippingDeliveryTimes"] : (function () { throw new RuntimeError('Variable "shippingDeliveryTimes" does not exist.', 104, $this->source); })()), 104, $this->source);
        echo ";

        \$(\"select[id\$='_Delivery']\").on('change', function() {
            var deliveryId = \$(this).val();
            var \$shippingDeliveryTime = \$(this).parents('.card-body').find(\"select[id\$='_DeliveryTime']\");
            \$shippingDeliveryTime.find('option').remove();
            \$shippingDeliveryTime.append(\$('<option></option>').val('').text('";
        // line 110
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

        \$('#addShipping').on('click', function() {
            \$('#form_add_shipping').val(\"1\");
            \$(\"#form1\").submit();

            return false;
        })

        // 完了ボタン
        \$('#bulkChangeComplete').on('click', function() {
            location.href = '";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_shipping_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 130, $this->source); })()), "id", [], "any", false, false, true, 130)]), "html", null, true);
        echo "';
        });

        // PDF出力(単一)
        \$('.pdf-print').click(function() {
            window.open(this.href, 'newwin', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=700, height=700');
            return false;
        });

        // モーダル注意文言の削除
        \$('#bulkChange').on('click', function() {
            \$('.warning-message').css('display', 'none');
        })
    </script>

    ";
        // line 145
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@admin/Order/confirmationModal_js.twig");
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 149
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 150
        echo "    <form name=\"form1\" id=\"form1\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_shipping_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 150, $this->source); })()), "id", [], "any", false, false, true, 150)]), "html", null, true);
        echo "\"
          method=\"post\">
        ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "_token", [], "any", false, false, true, 152), 152, $this->source), 'widget');
        echo "
        ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "add_shipping", [], "any", false, false, true, 153), 153, $this->source), 'widget');
        echo "
        <!-- 商品明細追加モーダル -->
        <div class=\"modal fade\" id=\"addProduct\" tabindex=\"-1\" role=\"dialog\"
             aria-labelledby=\"addProduct\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_product_item"), "html", null, true);
        echo "</h5>
                        <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                        </button>
                    </div>
                    <div class=\"modal-body\">
                        ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchProductModalForm"]) || array_key_exists("searchProductModalForm", $context) ? $context["searchProductModalForm"] : (function () { throw new RuntimeError('Variable "searchProductModalForm" does not exist.', 166, $this->source); })()), "id", [], "any", false, false, true, 166), 166, $this->source), 'widget', ["attr" => ["class" => "mb-3", "placeholder" => "admin.product.multi_search_label"]]);
        echo "
                        ";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchProductModalForm"]) || array_key_exists("searchProductModalForm", $context) ? $context["searchProductModalForm"] : (function () { throw new RuntimeError('Variable "searchProductModalForm" does not exist.', 167, $this->source); })()), "category_id", [], "any", false, false, true, 167), 167, $this->source), 'widget');
        echo "
                        <button type=\"button\" id=\"searchProductModalButton\"
                                class=\"btn btn-ec-conversion px-5 mb-4 mt-2\">";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search"), "html", null, true);
        echo "</button>
                        <div id=\"searchProductModalList\"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- その他明細追加モーダル -->
        <div class=\"modal fade\" id=\"addOrderItemType\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addOrderItemType\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">";
        // line 181
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
        <!-- 出荷済にするモーダル / 出荷メール送信モーダル -->
        <div class=\"modal fade\" id=\"sentUpdateModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"sentUpdateModal\" aria-hidden=\"true\" data-bs-keyboard=\"false\" data-bs-backdrop=\"static\">
            <div class=\"modal-dialog modal-lg\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title fw-bold\"><!--confirmationModal_js.twig--></h5>
                        <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <p class=\"mb-4 modal-message\"><!--confirmationModal_js.twig--></p>
                        <p class=\"mb-4 warning-message\">";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.bulk_action__confirm_message"), "html", null, true);
        echo "</p>
                        <ul id=\"bulkErrors\"></ul>
                        <div id=\"bulk-options\">
                            <div class=\"fw-bold mb-2 notificationMail\">";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.to_shipped__confirm_send_mail"), "html", null, true);
        echo "</div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"notificationMail\">
                                <label class=\"form-check-label notificationMail\" for=\"notificationMail\">
                                    ";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.to_shipped__confirm_send_mail_in_same_time"), "html", null, true);
        echo "
                                </label>
                            </div>
                            <div>
                                <div class=\"d-inline-block\" data-bs-toggle=\"collapse\" href=\"#viewEmail\" aria-expanded=\"false\" aria-controls=\"viewEmail\"><a><i class=\"fa fa-plus-square-o fw-bold me-1\"></i><span class=\"fw-bold\">";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("メール詳細"), "html", null, true);
        echo "</span></a></div>
                                <div class=\"collapse bg-light p-4 ec-collapse bg-ec-formGray\" id=\"viewEmail\" style=\"word-wrap: break-word; word-break:break-all\">
                                    <pre></pre>
                                </div>
                            </div>
                        </div>
                        <div class=\"progress\" style=\"display: none\">
                            <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                        <button id=\"bulkChange\" class=\"btn btn-ec-conversion\" type=\"button\"><!--confirmationModal_js.twig--></button>
                        <!--完了ボタン-->
                        <button id=\"bulkChangeComplete\" class=\"btn btn-ec-regular\" style=\"display: none\" type=\"button\">";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.close"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    ";
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 234, $this->source); })()), "shippings", [], "any", false, false, true, 234));
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
        foreach ($context['_seq'] as $context["_key"] => $context["shippingForm"]) {
            // line 235
            echo "                        <div class=\"card rounded border-0 mb-4 h-adr\">
                            <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                            <!-- 出荷情報 -->
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\">
                                            <span class=\"card-title\">";
            // line 242
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping__card_title"), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 242), 242, $this->source), "html", null, true);
            echo ")</span>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-end\">
                                        ";
            // line 246
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 246, $this->source); })()), "shippings", [], "any", false, false, true, 246)) > 1)) {
                // line 247
                echo "                                            <!-- 出荷が2つ以上ある場合は, 出荷の削除ボタンを表示する -->
                                            <a class=\"btn btn-ec-regular me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#delete_shipping_";
                // line 248
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "vars", [], "any", false, false, true, 248), "id", [], "any", false, false, true, 248), 248, $this->source), "html", null, true);
                echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                ";
                // line 250
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delete_shipping"), "html", null, true);
                echo "
                                            </a>
                                            <div class=\"modal fade\" id=\"delete_shipping_";
                // line 252
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "vars", [], "any", false, false, true, 252), "id", [], "any", false, false, true, 252), 252, $this->source), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"delete_shipping_";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "vars", [], "any", false, false, true, 252), "id", [], "any", false, false, true, 252), 252, $this->source), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog\" role=\"document\">
                                                    <div class=\"modal-content\">
                                                        ";
                // line 255
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "OrderItems", [], "any", false, false, true, 255)) > 0)) {
                    // line 256
                    echo "                                                            <div class=\"modal-header\">
                                                                <h5 class=\"modal-title fw-bold\">";
                    // line 257
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delete_shipping_error__confirm_title"), "html", null, true);
                    echo "</h5>
                                                                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                                                                </button>
                                                            </div>
                                                            <div class=\"modal-body text-start\">
                                                                <p class=\"text-start\">";
                    // line 263
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delete_shipping_error__confirm_message"), "html", null, true);
                    echo "</p>
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">";
                    // line 266
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                    echo "</button>
                                                            </div>
                                                        ";
                } else {
                    // line 269
                    echo "                                                            <div class=\"modal-header\">
                                                                <h5 class=\"modal-title fw-bold\">";
                    // line 270
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
                    echo "</h5>
                                                                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                                                                </button>
                                                            </div>
                                                            <div class=\"modal-body text-start\">
                                                                <p class=\"text-start\">";
                    // line 276
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delete_shipping__confirm_message", ["%num%" => twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 276)]), "html", null, true);
                    echo "</p>
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">";
                    // line 279
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                    echo "</button>
                                                                <a href=\"#shipping-product_";
                    // line 280
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 280), 280, $this->source), "html", null, true);
                    echo "\" class=\"btn delete-shipping btn-ec-delete\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                    echo "</a>
                                                            </div>
                                                        ";
                }
                // line 283
                echo "                                                    </div>
                                                </div>
                                            </div>
                                        ";
            }
            // line 287
            echo "                                        <a data-bs-toggle=\"collapse\" href=\"#shipmentOverview_";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 287), 287, $this->source), "html", null, true);
            echo "\" aria-expanded=\"false\"
                                           aria-controls=\"shipmentOverview_";
            // line 288
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 288), 288, $this->source), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-angle-up fa-lg\" aria-hidden=\"true\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"shipmentOverview_";
            // line 294
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 294), 294, $this->source), "html", null, true);
            echo "\">
                                <div class=\"card-body\">
                                    <div class=\"row mb-3\">
                                        <div class=\"col-6\">
                                            ";
            // line 298
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "vars", [], "any", false, false, true, 298), "value", [], "any", false, false, true, 298), "id", [], "any", false, false, true, 298)) {
                // line 299
                echo "                                                ";
                // line 300
                echo "                                                <!-- 納品書を出力ボタン -->
                                                <a class=\"btn btn-ec-regular pdf-print\" href=\"";
                // line 301
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_export_pdf");
                echo "?ids[]=";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "vars", [], "any", false, false, true, 301), "value", [], "any", false, false, true, 301), "id", [], "any", false, false, true, 301), 301, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.output_delivery_note"), "html", null, true);
                echo "</a>
                                                <!-- 出荷メール送信ボタン -->
                                                <button type=\"button\" class=\"btn btn-ec-regular confirmationModal\"
                                                        data-type=\"mail\" data-bulk-update=\"false\"
                                                        data-preview-notify-mail-url=\"";
                // line 305
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_shipping_preview_notify_mail", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "vars", [], "any", false, false, true, 305), "value", [], "any", false, false, true, 305), "id", [], "any", false, false, true, 305)]), "html", null, true);
                echo "\"
                                                        data-notify-mail-url=\"";
                // line 306
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_shipping_notify_mail", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "vars", [], "any", false, false, true, 306), "value", [], "any", false, false, true, 306), "id", [], "any", false, false, true, 306)]), "html", null, true);
                echo "\">
                                                    ";
                // line 307
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_mail_send"), "html", null, true);
                echo "
                                                </button>
                                            ";
            } else {
                // line 310
                echo "                                                ";
                // line 311
                echo "                                            ";
            }
            // line 312
            echo "                                        </div>
                                    </div>
                                    <!-- お届先情報 -->
                                    <div class=\"row\">
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    ";
            // line 319
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.name"), "html", null, true);
            echo "
                                                    <span class=\"badge bg-primary ms-1\">
                                                        ";
            // line 321
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "
                                                    </span>
                                                </label>
                                                <div class=\"col\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            ";
            // line 327
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "name", [], "any", false, false, true, 327), "name01", [], "any", false, false, true, 327), 327, $this->source), 'widget');
            echo "
                                                            ";
            // line 328
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "name", [], "any", false, false, true, 328), "name01", [], "any", false, false, true, 328), 328, $this->source), 'errors');
            echo "
                                                        </div>
                                                        <div class=\"col\">
                                                            ";
            // line 331
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "name", [], "any", false, false, true, 331), "name02", [], "any", false, false, true, 331), 331, $this->source), 'widget');
            echo "
                                                            ";
            // line 332
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "name", [], "any", false, false, true, 332), "name02", [], "any", false, false, true, 332), 332, $this->source), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    ";
            // line 339
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.kana"), "html", null, true);
            echo "
                                                    <span class=\"badge bg-primary ms-1\">
                                                        ";
            // line 341
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "
                                                    </span>
                                                </label>
                                                <div class=\"col\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            ";
            // line 347
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "kana", [], "any", false, false, true, 347), "kana01", [], "any", false, false, true, 347), 347, $this->source), 'widget');
            echo "
                                                            ";
            // line 348
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "kana", [], "any", false, false, true, 348), "kana01", [], "any", false, false, true, 348), 348, $this->source), 'errors');
            echo "
                                                        </div>
                                                        <div class=\"col\">
                                                            ";
            // line 351
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "kana", [], "any", false, false, true, 351), "kana02", [], "any", false, false, true, 351), 351, $this->source), 'widget');
            echo "
                                                            ";
            // line 352
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "kana", [], "any", false, false, true, 352), "kana02", [], "any", false, false, true, 352), 352, $this->source), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    ";
            // line 359
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.address"), "html", null, true);
            echo "
                                                    <span class=\"badge bg-primary ms-1\">
                                                        ";
            // line 361
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "
                                                    </span>
                                                </label>
                                                <div class=\"col\">
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col row align-items-center\">
                                                            <span class=\"col-auto\">";
            // line 367
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol"), "html", null, true);
            echo "</span>
                                                            <span class=\"col-auto ps-0\">";
            // line 368
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "postal_code", [], "any", false, false, true, 368), 368, $this->source), 'widget');
            echo "</span>
                                                            ";
            // line 369
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "postal_code", [], "any", false, false, true, 369), 369, $this->source), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col\">
                                                            ";
            // line 374
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "address", [], "any", false, false, true, 374), "pref", [], "any", false, false, true, 374), 374, $this->source), 'widget');
            echo "
                                                            ";
            // line 375
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "address", [], "any", false, false, true, 375), "pref", [], "any", false, false, true, 375), 375, $this->source), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col\">
                                                            ";
            // line 380
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "address", [], "any", false, false, true, 380), "addr01", [], "any", false, false, true, 380), 380, $this->source), 'widget');
            echo "
                                                            ";
            // line 381
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "address", [], "any", false, false, true, 381), "addr01", [], "any", false, false, true, 381), 381, $this->source), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            ";
            // line 386
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "address", [], "any", false, false, true, 386), "addr02", [], "any", false, false, true, 386), 386, $this->source), 'widget');
            echo "
                                                            ";
            // line 387
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "address", [], "any", false, false, true, 387), "addr02", [], "any", false, false, true, 387), 387, $this->source), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                </div>



222
";
            // line 395
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shipping_ext", [], "any", true, true, true, 395)) {
                // line 396
                echo "  <div class=\"row mb-2\">
    <div class=\"col-sm-3\">
      ";
                // line 398
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 398, $this->source); })()), "shipping_ext", [], "any", false, false, true, 398), "depart_name", [], "any", false, false, true, 398), 398, $this->source), 'label', ["label_attr" => ["class" => "col-form-label col-sm-3"]]);
                echo "
    </div>
    <div class=\"col-sm-9\">
      ";
                // line 401
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 401, $this->source); })()), "shipping_ext", [], "any", false, false, true, 401), "depart_name", [], "any", false, false, true, 401), 401, $this->source), 'widget');
                echo "
      ";
                // line 402
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 402, $this->source); })()), "shipping_ext", [], "any", false, false, true, 402), "depart_name", [], "any", false, false, true, 402), 402, $this->source), 'errors');
                echo "
    </div>
  </div>

  <div class=\"row mb-3\">
    <div class=\"col-sm-3\">
      ";
                // line 408
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 408, $this->source); })()), "shipping_ext", [], "any", false, false, true, 408), "pic_name", [], "any", false, false, true, 408), 408, $this->source), 'label', ["label_attr" => ["class" => "col-form-label col-sm-3"]]);
                echo "
    </div>
    <div class=\"col-sm-9\">
      ";
                // line 411
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 411, $this->source); })()), "shipping_ext", [], "any", false, false, true, 411), "pic_name", [], "any", false, false, true, 411), 411, $this->source), 'widget');
                echo "
      ";
                // line 412
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 412, $this->source); })()), "shipping_ext", [], "any", false, false, true, 412), "pic_name", [], "any", false, false, true, 412), 412, $this->source), 'errors');
                echo "
    </div>
  </div>
";
            }
            // line 416
            echo "


                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    ";
            // line 424
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
            echo "
                                                    <span class=\"badge bg-primary ms-1\">
                                                        ";
            // line 426
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "
                                                    </span>
                                                </label>
                                                <div class=\"col\">
                                                    ";
            // line 430
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "phone_number", [], "any", false, false, true, 430), 430, $this->source), 'widget');
            echo "
                                                    ";
            // line 431
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "phone_number", [], "any", false, false, true, 431), 431, $this->source), 'errors');
            echo "
                                                </div>
                                            </div>

                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    ";
            // line 437
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.company_name"), "html", null, true);
            echo "
                                                </label>
                                                <div class=\"col\">
                                                    ";
            // line 440
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "company_name", [], "any", false, false, true, 440), 440, $this->source), 'widget');
            echo "
                                                    ";
            // line 441
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "company_name", [], "any", false, false, true, 441), 441, $this->source), 'errors');
            echo "
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <hr>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    ";
            // line 453
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tracking_number"), "html", null, true);
            echo "
                                                </label>
                                                <div class=\"col\">
                                                    ";
            // line 456
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "tracking_number", [], "any", false, false, true, 456), 456, $this->source), 'widget');
            echo "
                                                    ";
            // line 457
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "tracking_number", [], "any", false, false, true, 457), 457, $this->source), 'errors');
            echo "
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    ";
            // line 462
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_provider"), "html", null, true);
            echo "
                                                    <span class=\"badge bg-primary ms-1\">";
            // line 463
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "
                                                    </span>
                                                </label>
                                                <div class=\"col\">
                                                    ";
            // line 467
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "Delivery", [], "any", false, false, true, 467), 467, $this->source), 'widget');
            echo "
                                                    ";
            // line 468
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "Delivery", [], "any", false, false, true, 468), 468, $this->source), 'errors');
            echo "
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    <i class=\"fa fa-calendar-check-o fa-fw me-1\" aria-hidden=\"true\"></i>
                                                    ";
            // line 476
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_date"), "html", null, true);
            echo "
                                                </label>
                                                <div class=\"col\">
                                                    ";
            // line 479
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "shipping_delivery_date", [], "any", false, false, true, 479), 479, $this->source), 'widget');
            echo "
                                                    ";
            // line 480
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "shipping_delivery_date", [], "any", false, false, true, 480), 480, $this->source), 'errors');
            echo "
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    <i class=\"fa fa-clock-o fa-fw me-1\" aria-hidden=\"true\"></i>
                                                    ";
            // line 486
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_time"), "html", null, true);
            echo "
                                                </label>
                                                <div class=\"col\">
                                                    ";
            // line 489
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "DeliveryTime", [], "any", false, false, true, 489), 489, $this->source), 'widget');
            echo "
                                                    ";
            // line 490
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "DeliveryTime", [], "any", false, false, true, 490), 490, $this->source), 'errors');
            echo "
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    <i class=\"fa fa-truck fa-fw me-1\" aria-hidden=\"true\"></i>
                                                    ";
            // line 496
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_date"), "html", null, true);
            echo "
                                                </label>
                                                <div class=\"col\">
                                                    ";
            // line 499
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "vars", [], "any", false, false, true, 499), "value", [], "any", false, false, true, 499), "shipping_date", [], "any", false, false, true, 499)) {
                // line 500
                echo "                                                        ";
                // line 501
                echo "                                                        <span>";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "vars", [], "any", false, false, true, 501), "value", [], "any", false, false, true, 501), "shipping_date", [], "any", false, false, true, 501), 501, $this->source)), "html", null, true);
                echo "</span>
                                                    ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 502
$context["shippingForm"], "vars", [], "any", false, false, true, 502), "value", [], "any", false, false, true, 502), "id", [], "any", false, false, true, 502)) {
                // line 503
                echo "                                                        ";
                // line 504
                echo "                                                        <!-- 出荷済にするボタン -->
                                                        <button type=\"button\" class=\"btn btn-ec-regular me-2 confirmationModal\" href=\"javascript:;\"
                                                                data-id=\"";
                // line 506
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "vars", [], "any", false, false, true, 506), "value", [], "any", false, false, true, 506), "id", [], "any", false, false, true, 506), 506, $this->source), "html", null, true);
                echo "\" data-type=\"status\" data-bulk-update=\"false\"
                                                                data-update-status-id=\"";
                // line 507
                echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Master\\OrderStatus::DELIVERED"), "html", null, true);
                echo "\"
                                                                data-update-status-url=\"";
                // line 508
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_shipping_update_order_status", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "vars", [], "any", false, false, true, 508), "value", [], "any", false, false, true, 508), "id", [], "any", false, false, true, 508)]), "html", null, true);
                echo "\"
                                                                data-preview-notify-mail-url=\"";
                // line 509
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_shipping_preview_notify_mail", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "vars", [], "any", false, false, true, 509), "value", [], "any", false, false, true, 509), "id", [], "any", false, false, true, 509)]), "html", null, true);
                echo "\"
                                                                data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                // line 510
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.to_shipped"), "html", null, true);
                echo "\">
                                                            <i class=\"fa fa-check fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                            ";
                // line 512
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.to_shipped"), "html", null, true);
                echo "
                                                        </button>
                                                    ";
            } else {
                // line 515
                echo "                                                        ";
                // line 516
                echo "                                                    ";
            }
            // line 517
            echo "                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    <i class=\"fa fa-refresh fa-fw me-1\" aria-hidden=\"true\"></i>
                                                    ";
            // line 522
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.last_update_date"), "html", null, true);
            echo "
                                                </label>
                                                <div class=\"col\">
                                                    <span>";
            // line 525
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "vars", [], "any", false, false, true, 525), "value", [], "any", false, false, true, 525), "id", [], "any", false, false, true, 525)) ? (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "vars", [], "any", false, false, true, 525), "value", [], "any", false, false, true, 525), "update_date", [], "any", false, false, true, 525)), "html", null, true))) : (print ("")));
            echo "</span>
                                                </div>
                                            </div>
                                            <div class=\"row mb-2 align-items-center\">
                                                <label class=\"col-3 col-form-label\">
                                                    <i class=\"fa fa-user fa-fw me-1\" aria-hidden=\"true\"></i>
                                                    ";
            // line 531
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.last_updater"), "html", null, true);
            echo "
                                                </label>
                                                <div class=\"col\">
                                                    <span>";
            // line 534
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "vars", [], "any", false, false, true, 534), "value", [], "any", false, false, true, 534), "id", [], "any", false, false, true, 534)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "vars", [], "any", false, false, true, 534), "value", [], "any", false, false, true, 534), "creator", [], "any", false, false, true, 534), "html", null, true))) : (print ("")));
            echo "</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <hr>
                                    </div>
                                    <!-- 明細追加ボタン -->
                                    <div id=\"shipping-product_";
            // line 543
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 543), 543, $this->source), "html", null, true);
            echo "\" class=\"row justify-content-between mb-2\">
                                        <div class=\"col-6\">
                                            <!-- 商品を追加 -->
                                            <button class=\"btn btn-ec-regular me-2 addProduct-button\" type=\"button\" data-bs-toggle=\"modal\"
                                                    data-bs-target=\"#addProduct\" data-shipping-no=\"";
            // line 547
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 547), 547, $this->source), "html", null, true);
            echo "\">
                                                ";
            // line 548
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_product_item"), "html", null, true);
            echo "
                                            </button>
                                            <!-- その他の明細を追加 -->
                                            <a class=\"btn btn-ec-regular me-2 addOtherProduct-button\" data-bs-toggle=\"modal\" data-bs-target=\"#addOrderItemType\" data-shipping-no=\"";
            // line 551
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 551), 551, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_other_item"), "html", null, true);
            echo "</a>
                                            ";
            // line 553
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "OrderItemsErrors", [], "any", false, false, true, 553), 553, $this->source), 'errors');
            echo "
                                        </div>
                                    </div>
                                    <!-- 明細 -->
                                    <div class=\"row\">
                                        <table id=\"table-form-field_";
            // line 558
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 558), 558, $this->source), "html", null, true);
            echo "\" class=\"table table-striped table-sm mb-0\"
                                               data-prototype=\"";
            // line 559
            ob_start();
            echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@admin/Order/order_item_prototype.twig", ["orderItemForm" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "OrderItems", [], "any", false, false, true, 559), "vars", [], "any", false, false, true, 559), "prototype", [], "any", false, false, true, 559)]);
            $___internal_parse_9_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            echo twig_escape_filter($this->env, $___internal_parse_9_);
            echo "\">
                                            <thead class=\"table-active\">
                                            <tr class=\"text-nowrap\">
                                                <th class=\"pt-2 pb-2 ps-3\">";
            // line 562
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_name_and_code"), "html", null, true);
            echo "</th>
                                                <th class=\"pt-2 pb-2\">
                                                    <div class=\"col-8\">";
            // line 564
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.amount"), "html", null, true);
            echo "</div>
                                                </th>
                                                <th class=\"pt-2 pb-2\">
                                                    <div class=\"col-8\">";
            // line 567
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.quantity"), "html", null, true);
            echo "</div>
                                                </th>
                                                <th class=\"pt-2 pb-2\">
                                                    <div class=\"col-8\">";
            // line 570
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tax_rate"), "html", null, true);
            echo "</div>
                                                </th>
                                                <th class=\"pt-2 pb-2\">
                                                    <div class=\"col-8\">";
            // line 573
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tax_type"), "html", null, true);
            echo "</div>
                                                </th>
                                                <th class=\"pt-2 pb-2\">
                                                    <div class=\"col-8\">";
            // line 576
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.subtotal"), "html", null, true);
            echo "</div>
                                                </th>
                                                <th class=\"pt-2 pb-2 pe-3\"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
            // line 582
            $context["shippingNo"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 582);
            // line 583
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "OrderItems", [], "any", false, false, true, 583));
            foreach ($context['_seq'] as $context["_key"] => $context["orderItemForm"]) {
                // line 584
                echo "                                                ";
                $context["OrderItem"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, true, 584), "data", [], "any", false, false, true, 584);
                // line 585
                echo "                                                <tr>
                                                    ";
                // line 587
                echo "                                                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "ProductClass", [], "any", false, false, true, 587), 587, $this->source), 'widget');
                echo "
                                                    ";
                // line 588
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "order_item_type", [], "any", false, false, true, 588), 588, $this->source), 'widget');
                echo "
                                                    ";
                // line 589
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "point_rate", [], "any", false, false, true, 589), 589, $this->source), 'widget');
                echo "
                                                    ";
                // line 590
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "tax_type", [], "any", false, false, true, 590), 590, $this->source), 'widget');
                echo "
                                                    ";
                // line 591
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "tax_rate", [], "any", false, false, true, 591), 591, $this->source), 'widget', ["type" => "hidden"]);
                echo "
                                                    <td class=\"align-middle w-25 ps-3\">
                                                        <p class=\"mb-0 fw-bold\">
                                                            ";
                // line 594
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 594, $this->source); })()), "OrderItemType", [], "any", false, false, true, 594), "isProduct", [], "any", false, false, true, 594)) {
                    // line 595
                    echo "                                                                ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 595, $this->source); })()), "product_name", [], "any", false, false, true, 595), 595, $this->source), "html", null, true);
                    echo "
                                                                ";
                    // line 596
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "product_name", [], "any", false, false, true, 596), 596, $this->source), 'widget', ["type" => "hidden"]);
                    echo "
                                                            ";
                } else {
                    // line 598
                    echo "                                                                ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "product_name", [], "any", false, false, true, 598), 598, $this->source), 'widget');
                    echo "
                                                            ";
                }
                // line 600
                echo "                                                        </p>
                                                        <span>
                                                            ";
                // line 602
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 602, $this->source); })()), "product_code", [], "any", false, false, true, 602), 602, $this->source), "html", null, true);
                echo "
                                                            ";
                // line 603
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 603, $this->source); })()), "class_category_name1", [], "any", false, false, true, 603))) {
                    // line 604
                    echo "                                                                / (
                                                                ";
                    // line 605
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 605, $this->source); })()), "class_name1", [], "any", false, false, true, 605), 605, $this->source), "html", null, true);
                    echo "：
                                                                ";
                    // line 606
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 606, $this->source); })()), "class_category_name1", [], "any", false, false, true, 606), 606, $this->source), "html", null, true);
                    echo "
                                                                ";
                    // line 607
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 607, $this->source); })()), "class_category_name2", [], "any", false, false, true, 607))) {
                        // line 608
                        echo "                                                                    /
                                                                    ";
                        // line 609
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 609, $this->source); })()), "class_name2", [], "any", false, false, true, 609), 609, $this->source), "html", null, true);
                        echo "：
                                                                    ";
                        // line 610
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 610, $this->source); })()), "class_category_name2", [], "any", false, false, true, 610), 610, $this->source), "html", null, true);
                        echo "
                                                                ";
                    }
                    // line 612
                    echo "                                                                )
                                                            ";
                }
                // line 614
                echo "                                                        </span>
                                                        ";
                // line 615
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "product_name", [], "any", false, false, true, 615), 615, $this->source), 'errors');
                echo "
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"col mt-3\">
                                                            ";
                // line 619
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "price", [], "any", false, false, true, 619), 619, $this->source), 'widget', ["attr" => ["readonly" => "readonly"]]);
                echo "
                                                            <div class=\"text-end small\">(";
                // line 620
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 620, $this->source); })()), "TaxDisplayType", [], "any", false, false, true, 620), 620, $this->source), "html", null, true);
                echo ")</div>
                                                            ";
                // line 621
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "price", [], "any", false, false, true, 621), 621, $this->source), 'errors');
                echo "
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"col-12 col-xl-8\">
                                                            ";
                // line 626
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "quantity", [], "any", false, false, true, 626), 626, $this->source), 'widget');
                echo "
                                                            ";
                // line 627
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "quantity", [], "any", false, false, true, 627), 627, $this->source), 'errors');
                echo "
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"col\">
                                                            ";
                // line 632
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 632, $this->source); })()), "tax_rate", [], "any", false, false, true, 632), 632, $this->source), "html", null, true);
                echo "%
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"col\">
                                                            ";
                // line 637
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 637, $this->source); })()), "tax_type", [], "any", false, false, true, 637), 637, $this->source), "html", null, true);
                echo "
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"col\">
                                                            <span>";
                // line 642
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 642, $this->source); })()), "total_price", [], "any", false, false, true, 642), 642, $this->source)), "html", null, true);
                echo "</span>
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle text-end pe-3\">
                                                        <div class=\"row justify-content-end\">
                                                            <div class=\"col-auto text-center\">
                                                                <div class=\"d-inline-block me-3\" data-bs-toggle=\"tooltip\"
                                                                     data-bs-placement=\"top\" title=\"";
                // line 649
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                                    <a class=\"btn btn-ec-actionIcon\" data-bs-toggle=\"modal\" data-bs-target=\"#delete_";
                // line 650
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, true, 650), "id", [], "any", false, false, true, 650), 650, $this->source), "html", null, true);
                echo "\">
                                                                        <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </div>
                                                                <!-- 削除確認モーダル -->
                                                                <div class=\"modal fade\" id=\"delete_";
                // line 655
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, true, 655), "id", [], "any", false, false, true, 655), 655, $this->source), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"delete_";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, true, 655), "id", [], "any", false, false, true, 655), 655, $this->source), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                                    <div class=\"modal-dialog\" role=\"document\">
                                                                        <div class=\"modal-content\">
                                                                            <div class=\"modal-header\">
                                                                                <h5 class=\"modal-title fw-bold\">";
                // line 659
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
                echo "</h5>
                                                                                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                                                                                </button>
                                                                            </div>
                                                                            <div class=\"modal-body text-start\">
                                                                                <p class=\"text-start\">";
                // line 665
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delete_item__confirm_message", ["%name%" => twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 665, $this->source); })()), "product_name", [], "any", false, false, true, 665)]), "html", null, true);
                echo "</p>
                                                                            </div>
                                                                            <div class=\"modal-footer\">
                                                                                <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">";
                // line 668
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                echo "</button>
                                                                                <a href=\"#shipping-product_";
                // line 669
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["shippingNo"]) || array_key_exists("shippingNo", $context) ? $context["shippingNo"] : (function () { throw new RuntimeError('Variable "shippingNo" does not exist.', 669, $this->source); })()), 669, $this->source), "html", null, true);
                echo "\" class=\"btn delete btn-ec-delete\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "</a>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItemForm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 679
            echo "                                            </tbody>
                                        </table>
                                    </div>
                                    <div class=\"col-12\">
                                        <hr>
                                    </div>
                                    <!-- 出荷用メモ -->
                                    <div class=\"row\">
                                        <div class=\"col-12\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    ";
            // line 690
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shop_memo_for_shipped"), "html", null, true);
            echo "
                                                </label>
                                                <div class=\"col\">
                                                    ";
            // line 693
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "note", [], "any", false, false, true, 693), 693, $this->source), 'widget', ["attr" => ["rows" => 8]]);
            echo "
                                                    ";
            // line 694
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "note", [], "any", false, false, true, 694), 694, $this->source), 'errors');
            echo "
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shippingForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 703
        echo "                    <!-- 出荷先を追加 -->
                    <div class=\"card rounded border-0 mb-4\">
                        <button id=\"addShipping\" type=\"button\" class=\"btn btn-ec-regular\">";
        // line 705
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_shipping"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- コンバージョンエリア -->
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <!-- 受注一覧 -->
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"";
        // line 718
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 718, $this->source); })()), "id", [], "any", false, false, true, 718)]), "html", null, true);
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                <span>";
        // line 720
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_registration"), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                    <!-- 登録 -->
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button type=\"submit\" class=\"btn btn-ec-conversion px-4\" id=\"btn_save\" name=\"mode\" value=\"register\">
                                    ";
        // line 729
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "
                                </button>
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
        return "@admin/Order/shipping.twig";
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
        return array (  1415 => 729,  1403 => 720,  1398 => 718,  1382 => 705,  1378 => 703,  1355 => 694,  1351 => 693,  1345 => 690,  1332 => 679,  1314 => 669,  1310 => 668,  1304 => 665,  1295 => 659,  1286 => 655,  1278 => 650,  1274 => 649,  1264 => 642,  1256 => 637,  1248 => 632,  1240 => 627,  1236 => 626,  1228 => 621,  1224 => 620,  1220 => 619,  1213 => 615,  1210 => 614,  1206 => 612,  1201 => 610,  1197 => 609,  1194 => 608,  1192 => 607,  1188 => 606,  1184 => 605,  1181 => 604,  1179 => 603,  1175 => 602,  1171 => 600,  1165 => 598,  1160 => 596,  1155 => 595,  1153 => 594,  1147 => 591,  1143 => 590,  1139 => 589,  1135 => 588,  1130 => 587,  1127 => 585,  1124 => 584,  1119 => 583,  1117 => 582,  1108 => 576,  1102 => 573,  1096 => 570,  1090 => 567,  1084 => 564,  1079 => 562,  1070 => 559,  1066 => 558,  1057 => 553,  1051 => 551,  1045 => 548,  1041 => 547,  1034 => 543,  1022 => 534,  1016 => 531,  1007 => 525,  1001 => 522,  994 => 517,  991 => 516,  989 => 515,  983 => 512,  978 => 510,  974 => 509,  970 => 508,  966 => 507,  962 => 506,  958 => 504,  956 => 503,  954 => 502,  949 => 501,  947 => 500,  945 => 499,  939 => 496,  930 => 490,  926 => 489,  920 => 486,  911 => 480,  907 => 479,  901 => 476,  890 => 468,  886 => 467,  879 => 463,  875 => 462,  867 => 457,  863 => 456,  857 => 453,  842 => 441,  838 => 440,  832 => 437,  823 => 431,  819 => 430,  812 => 426,  807 => 424,  797 => 416,  790 => 412,  786 => 411,  780 => 408,  771 => 402,  767 => 401,  761 => 398,  757 => 396,  755 => 395,  744 => 387,  740 => 386,  732 => 381,  728 => 380,  720 => 375,  716 => 374,  708 => 369,  704 => 368,  700 => 367,  691 => 361,  686 => 359,  676 => 352,  672 => 351,  666 => 348,  662 => 347,  653 => 341,  648 => 339,  638 => 332,  634 => 331,  628 => 328,  624 => 327,  615 => 321,  610 => 319,  601 => 312,  598 => 311,  596 => 310,  590 => 307,  586 => 306,  582 => 305,  571 => 301,  568 => 300,  566 => 299,  564 => 298,  557 => 294,  548 => 288,  543 => 287,  537 => 283,  529 => 280,  525 => 279,  519 => 276,  510 => 270,  507 => 269,  501 => 266,  495 => 263,  486 => 257,  483 => 256,  481 => 255,  473 => 252,  468 => 250,  461 => 248,  458 => 247,  456 => 246,  447 => 242,  438 => 235,  421 => 234,  409 => 225,  403 => 222,  389 => 211,  382 => 207,  375 => 203,  369 => 200,  347 => 181,  332 => 169,  327 => 167,  323 => 166,  314 => 160,  304 => 153,  300 => 152,  294 => 150,  284 => 149,  271 => 145,  253 => 130,  230 => 110,  221 => 104,  209 => 94,  180 => 67,  157 => 47,  130 => 22,  120 => 21,  101 => 16,  82 => 15,  71 => 11,  69 => 19,  67 => 18,  65 => 13,  40 => 11,);
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

{% block title %}{{ 'admin.order.shipping_registration'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.order.order_management'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}
{% form_theme searchProductModalForm '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block javascript %}
    <script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>

    <script>
        // 商品追加
        \$('.addProduct-button').on('click', function() {
            var no = \$(this).data('shipping-no');
            \$collectionHolder = \$('#table-form-field_' + no);
            index = \$collectionHolder.find('tbody > tr').length;
            formIdPrefix = '#form_shippings_' + no + '_OrderItems_';
        })

        // その他明細追加
        \$('.addOtherProduct-button').on('click', function() {
            var no = \$(this).data('shipping-no');
            \$collectionHolder = \$('#table-form-field_' + no);
            index = \$collectionHolder.find('tbody > tr').length;
            formIdPrefix = '#form_shippings_' + no + '_OrderItems_';
        })

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

        \$(document).on('click', '.delete', function(e) {
            // 商品削除
            \$(this).parents('tr').remove();
            \$(\"#form1\").submit();

            return false;
        });

        \$(document).on('click', '.delete-shipping', function(e) {
            // お届け先削除
            \$(this).parents('div.card').remove();
            \$(\"#form1\").submit();

            return false;
        });

        {# TODO: 商品削除時に更新が走って画面上に行ってしまう。 #}
        // 計算結果の更新が押されたらページ内リンクさせる
        // \$('.btn').click(function() {
        //     var data = \$(this).data();
        //     if (data.link) {
        //         \$('#form1').attr('action', '#' + data.link).submit();
        //         return false;
        //     }
        // });

        // 配送業者選択時にお届け時間を設定
        var times = {{ shippingDeliveryTimes|raw }};

        \$(\"select[id\$='_Delivery']\").on('change', function() {
            var deliveryId = \$(this).val();
            var \$shippingDeliveryTime = \$(this).parents('.card-body').find(\"select[id\$='_DeliveryTime']\");
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

        \$('#addShipping').on('click', function() {
            \$('#form_add_shipping').val(\"1\");
            \$(\"#form1\").submit();

            return false;
        })

        // 完了ボタン
        \$('#bulkChangeComplete').on('click', function() {
            location.href = '{{ url('admin_shipping_edit', { 'id': Order.id }) }}';
        });

        // PDF出力(単一)
        \$('.pdf-print').click(function() {
            window.open(this.href, 'newwin', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=700, height=700');
            return false;
        });

        // モーダル注意文言の削除
        \$('#bulkChange').on('click', function() {
            \$('.warning-message').css('display', 'none');
        })
    </script>

    {{ include('@admin/Order/confirmationModal_js.twig') }}

{% endblock javascript %}

{% block main %}
    <form name=\"form1\" id=\"form1\" action=\"{{ url('admin_shipping_edit', {id: Order.id}) }}\"
          method=\"post\">
        {{ form_widget(form._token) }}
        {{ form_widget(form.add_shipping) }}
        <!-- 商品明細追加モーダル -->
        <div class=\"modal fade\" id=\"addProduct\" tabindex=\"-1\" role=\"dialog\"
             aria-labelledby=\"addProduct\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">{{ 'admin.order.add_product_item'|trans }}</h5>
                        <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                        </button>
                    </div>
                    <div class=\"modal-body\">
                        {{ form_widget(searchProductModalForm.id, { attr : {'class': 'mb-3',  placeholder : 'admin.product.multi_search_label' }}) }}
                        {{ form_widget(searchProductModalForm.category_id) }}
                        <button type=\"button\" id=\"searchProductModalButton\"
                                class=\"btn btn-ec-conversion px-5 mb-4 mt-2\">{{ 'admin.common.search'|trans }}</button>
                        <div id=\"searchProductModalList\"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- その他明細追加モーダル -->
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
        <!-- 出荷済にするモーダル / 出荷メール送信モーダル -->
        <div class=\"modal fade\" id=\"sentUpdateModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"sentUpdateModal\" aria-hidden=\"true\" data-bs-keyboard=\"false\" data-bs-backdrop=\"static\">
            <div class=\"modal-dialog modal-lg\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title fw-bold\"><!--confirmationModal_js.twig--></h5>
                        <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <p class=\"mb-4 modal-message\"><!--confirmationModal_js.twig--></p>
                        <p class=\"mb-4 warning-message\">{{ 'admin.order.bulk_action__confirm_message'|trans }}</p>
                        <ul id=\"bulkErrors\"></ul>
                        <div id=\"bulk-options\">
                            <div class=\"fw-bold mb-2 notificationMail\">{{ 'admin.order.to_shipped__confirm_send_mail'|trans }}</div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"notificationMail\">
                                <label class=\"form-check-label notificationMail\" for=\"notificationMail\">
                                    {{ 'admin.order.to_shipped__confirm_send_mail_in_same_time'|trans }}
                                </label>
                            </div>
                            <div>
                                <div class=\"d-inline-block\" data-bs-toggle=\"collapse\" href=\"#viewEmail\" aria-expanded=\"false\" aria-controls=\"viewEmail\"><a><i class=\"fa fa-plus-square-o fw-bold me-1\"></i><span class=\"fw-bold\">{{ 'メール詳細'|trans }}</span></a></div>
                                <div class=\"collapse bg-light p-4 ec-collapse bg-ec-formGray\" id=\"viewEmail\" style=\"word-wrap: break-word; word-break:break-all\">
                                    <pre></pre>
                                </div>
                            </div>
                        </div>
                        <div class=\"progress\" style=\"display: none\">
                            <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}</button>
                        <button id=\"bulkChange\" class=\"btn btn-ec-conversion\" type=\"button\"><!--confirmationModal_js.twig--></button>
                        <!--完了ボタン-->
                        <button id=\"bulkChangeComplete\" class=\"btn btn-ec-regular\" style=\"display: none\" type=\"button\">{{ 'admin.common.close'|trans }}</button>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    {% for shippingForm in form.shippings %}
                        <div class=\"card rounded border-0 mb-4 h-adr\">
                            <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                            <!-- 出荷情報 -->
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\">
                                            <span class=\"card-title\">{{ 'admin.order.shipping__card_title'|trans }}({{ loop.index }})</span>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-end\">
                                        {% if form.shippings|length > 1 %}
                                            <!-- 出荷が2つ以上ある場合は, 出荷の削除ボタンを表示する -->
                                            <a class=\"btn btn-ec-regular me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#delete_shipping_{{ shippingForm.vars.id }}\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'admin.common.delete'|trans }}\">
                                                <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                {{ 'admin.order.delete_shipping'|trans }}
                                            </a>
                                            <div class=\"modal fade\" id=\"delete_shipping_{{ shippingForm.vars.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"delete_shipping_{{ shippingForm.vars.id }}\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog\" role=\"document\">
                                                    <div class=\"modal-content\">
                                                        {% if shippingForm.OrderItems|length > 0 %}
                                                            <div class=\"modal-header\">
                                                                <h5 class=\"modal-title fw-bold\">{{ 'admin.order.delete_shipping_error__confirm_title'|trans }}</h5>
                                                                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                                                                </button>
                                                            </div>
                                                            <div class=\"modal-body text-start\">
                                                                <p class=\"text-start\">{{ 'admin.order.delete_shipping_error__confirm_message'|trans }}</p>
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}</button>
                                                            </div>
                                                        {% else %}
                                                            <div class=\"modal-header\">
                                                                <h5 class=\"modal-title fw-bold\">{{ 'admin.common.delete_modal__title'|trans }}</h5>
                                                                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                                                                </button>
                                                            </div>
                                                            <div class=\"modal-body text-start\">
                                                                <p class=\"text-start\">{{ 'admin.order.delete_shipping__confirm_message'|trans({ \"%num%\" : loop.index }) }}</p>
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}</button>
                                                                <a href=\"#shipping-product_{{ loop.index0 }}\" class=\"btn delete-shipping btn-ec-delete\">{{ 'admin.common.delete'|trans }}</a>
                                                            </div>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            </div>
                                        {% endif %}
                                        <a data-bs-toggle=\"collapse\" href=\"#shipmentOverview_{{ loop.index0 }}\" aria-expanded=\"false\"
                                           aria-controls=\"shipmentOverview_{{ loop.index0 }}\">
                                            <i class=\"fa fa-angle-up fa-lg\" aria-hidden=\"true\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"shipmentOverview_{{ loop.index0 }}\">
                                <div class=\"card-body\">
                                    <div class=\"row mb-3\">
                                        <div class=\"col-6\">
                                            {% if shippingForm.vars.value.id %}
                                                {# ボタンは登録済みの出荷のみ表示する #}
                                                <!-- 納品書を出力ボタン -->
                                                <a class=\"btn btn-ec-regular pdf-print\" href=\"{{ url('admin_order_export_pdf') }}?ids[]={{ shippingForm.vars.value.id }}\">{{ 'admin.order.output_delivery_note'|trans }}</a>
                                                <!-- 出荷メール送信ボタン -->
                                                <button type=\"button\" class=\"btn btn-ec-regular confirmationModal\"
                                                        data-type=\"mail\" data-bulk-update=\"false\"
                                                        data-preview-notify-mail-url=\"{{ url('admin_shipping_preview_notify_mail', { id: shippingForm.vars.value.id}) }}\"
                                                        data-notify-mail-url=\"{{ url('admin_shipping_notify_mail', { id: shippingForm.vars.value.id}) }}\">
                                                    {{ 'admin.order.shipping_mail_send'|trans }}
                                                </button>
                                            {% else %}
                                                {# 未登録の出荷 #}
                                            {% endif %}
                                        </div>
                                    </div>
                                    <!-- お届先情報 -->
                                    <div class=\"row\">
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    {{ 'admin.common.name'|trans }}
                                                    <span class=\"badge bg-primary ms-1\">
                                                        {{ 'admin.common.required'|trans }}
                                                    </span>
                                                </label>
                                                <div class=\"col\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            {{ form_widget(shippingForm.name.name01) }}
                                                            {{ form_errors(shippingForm.name.name01) }}
                                                        </div>
                                                        <div class=\"col\">
                                                            {{ form_widget(shippingForm.name.name02) }}
                                                            {{ form_errors(shippingForm.name.name02) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    {{ 'admin.common.kana'|trans }}
                                                    <span class=\"badge bg-primary ms-1\">
                                                        {{ 'admin.common.required'|trans }}
                                                    </span>
                                                </label>
                                                <div class=\"col\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            {{ form_widget(shippingForm.kana.kana01) }}
                                                            {{ form_errors(shippingForm.kana.kana01) }}
                                                        </div>
                                                        <div class=\"col\">
                                                            {{ form_widget(shippingForm.kana.kana02) }}
                                                            {{ form_errors(shippingForm.kana.kana02) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    {{ 'admin.common.address'|trans }}
                                                    <span class=\"badge bg-primary ms-1\">
                                                        {{ 'admin.common.required'|trans }}
                                                    </span>
                                                </label>
                                                <div class=\"col\">
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col row align-items-center\">
                                                            <span class=\"col-auto\">{{ 'admin.common.postal_symbol'|trans }}</span>
                                                            <span class=\"col-auto ps-0\">{{ form_widget(shippingForm.postal_code) }}</span>
                                                            {{ form_errors(shippingForm.postal_code) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col\">
                                                            {{ form_widget(shippingForm.address.pref) }}
                                                            {{ form_errors(shippingForm.address.pref) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col\">
                                                            {{ form_widget(shippingForm.address.addr01) }}
                                                            {{ form_errors(shippingForm.address.addr01) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            {{ form_widget(shippingForm.address.addr02) }}
                                                            {{ form_errors(shippingForm.address.addr02) }}
                                                        </div>
                                                    </div>
                                                </div>



222
{% if form.shipping_ext is defined %}
  <div class=\"row mb-2\">
    <div class=\"col-sm-3\">
      {{ form_label(form.shipping_ext.depart_name, null, {'label_attr': {'class': 'col-form-label col-sm-3'}}) }}
    </div>
    <div class=\"col-sm-9\">
      {{ form_widget(form.shipping_ext.depart_name) }}
      {{ form_errors(form.shipping_ext.depart_name) }}
    </div>
  </div>

  <div class=\"row mb-3\">
    <div class=\"col-sm-3\">
      {{ form_label(form.shipping_ext.pic_name, null, {'label_attr': {'class': 'col-form-label col-sm-3'}}) }}
    </div>
    <div class=\"col-sm-9\">
      {{ form_widget(form.shipping_ext.pic_name) }}
      {{ form_errors(form.shipping_ext.pic_name) }}
    </div>
  </div>
{% endif %}



                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    {{ 'admin.common.phone_number'|trans }}
                                                    <span class=\"badge bg-primary ms-1\">
                                                        {{ 'admin.common.required'|trans }}
                                                    </span>
                                                </label>
                                                <div class=\"col\">
                                                    {{ form_widget(shippingForm.phone_number) }}
                                                    {{ form_errors(shippingForm.phone_number) }}
                                                </div>
                                            </div>

                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    {{ 'admin.common.company_name'|trans }}
                                                </label>
                                                <div class=\"col\">
                                                    {{ form_widget(shippingForm.company_name) }}
                                                    {{ form_errors(shippingForm.company_name) }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <hr>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    {{ 'admin.order.tracking_number'|trans }}
                                                </label>
                                                <div class=\"col\">
                                                    {{ form_widget(shippingForm.tracking_number) }}
                                                    {{ form_errors(shippingForm.tracking_number) }}
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    {{ 'admin.order.delivery_provider'|trans }}
                                                    <span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}
                                                    </span>
                                                </label>
                                                <div class=\"col\">
                                                    {{ form_widget(shippingForm.Delivery) }}
                                                    {{ form_errors(shippingForm.Delivery) }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    <i class=\"fa fa-calendar-check-o fa-fw me-1\" aria-hidden=\"true\"></i>
                                                    {{ 'admin.order.delivery_date'|trans }}
                                                </label>
                                                <div class=\"col\">
                                                    {{ form_widget(shippingForm.shipping_delivery_date) }}
                                                    {{ form_errors(shippingForm.shipping_delivery_date) }}
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    <i class=\"fa fa-clock-o fa-fw me-1\" aria-hidden=\"true\"></i>
                                                    {{ 'admin.order.delivery_time'|trans }}
                                                </label>
                                                <div class=\"col\">
                                                    {{ form_widget(shippingForm.DeliveryTime) }}
                                                    {{ form_errors(shippingForm.DeliveryTime) }}
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    <i class=\"fa fa-truck fa-fw me-1\" aria-hidden=\"true\"></i>
                                                    {{ 'admin.order.shipping_date'|trans }}
                                                </label>
                                                <div class=\"col\">
                                                    {% if shippingForm.vars.value.shipping_date %}
                                                        {# 登録済みの出荷で出荷日が設定されている場合は出荷日を表示する #}
                                                        <span>{{ shippingForm.vars.value.shipping_date|date_min }}</span>
                                                    {% elseif shippingForm.vars.value.id %}
                                                        {# 登録済みの出荷で出荷日が設定されていない場合 #}
                                                        <!-- 出荷済にするボタン -->
                                                        <button type=\"button\" class=\"btn btn-ec-regular me-2 confirmationModal\" href=\"javascript:;\"
                                                                data-id=\"{{ shippingForm.vars.value.id }}\" data-type=\"status\" data-bulk-update=\"false\"
                                                                data-update-status-id=\"{{ constant('Eccube\\\\Entity\\\\Master\\\\OrderStatus::DELIVERED') }}\"
                                                                data-update-status-url=\"{{ url('admin_shipping_update_order_status', { id: shippingForm.vars.value.id}) }}\"
                                                                data-preview-notify-mail-url=\"{{ url('admin_shipping_preview_notify_mail', { id: shippingForm.vars.value.id}) }}\"
                                                                data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'admin.order.to_shipped'|trans }}\">
                                                            <i class=\"fa fa-check fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                            {{ 'admin.order.to_shipped'|trans }}
                                                        </button>
                                                    {% else %}
                                                        {# 未登録の出荷 #}
                                                    {% endif %}
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    <i class=\"fa fa-refresh fa-fw me-1\" aria-hidden=\"true\"></i>
                                                    {{ 'admin.common.last_update_date'|trans }}
                                                </label>
                                                <div class=\"col\">
                                                    <span>{{ shippingForm.vars.value.id ? shippingForm.vars.value.update_date|date_min }}</span>
                                                </div>
                                            </div>
                                            <div class=\"row mb-2 align-items-center\">
                                                <label class=\"col-3 col-form-label\">
                                                    <i class=\"fa fa-user fa-fw me-1\" aria-hidden=\"true\"></i>
                                                    {{ 'admin.common.last_updater'|trans }}
                                                </label>
                                                <div class=\"col\">
                                                    <span>{{ shippingForm.vars.value.id ? shippingForm.vars.value.creator }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <hr>
                                    </div>
                                    <!-- 明細追加ボタン -->
                                    <div id=\"shipping-product_{{ loop.index0 }}\" class=\"row justify-content-between mb-2\">
                                        <div class=\"col-6\">
                                            <!-- 商品を追加 -->
                                            <button class=\"btn btn-ec-regular me-2 addProduct-button\" type=\"button\" data-bs-toggle=\"modal\"
                                                    data-bs-target=\"#addProduct\" data-shipping-no=\"{{ loop.index0 }}\">
                                                {{ 'admin.order.add_product_item'|trans }}
                                            </button>
                                            <!-- その他の明細を追加 -->
                                            <a class=\"btn btn-ec-regular me-2 addOtherProduct-button\" data-bs-toggle=\"modal\" data-bs-target=\"#addOrderItemType\" data-shipping-no=\"{{ loop.index0 }}\">{{ 'admin.order.add_other_item'|trans }}</a>
                                            {# 明細行のエラー表示 #}
                                            {{ form_errors(shippingForm.OrderItemsErrors) }}
                                        </div>
                                    </div>
                                    <!-- 明細 -->
                                    <div class=\"row\">
                                        <table id=\"table-form-field_{{ loop.index0 }}\" class=\"table table-striped table-sm mb-0\"
                                               data-prototype=\"{% apply escape %}{{ include('@admin/Order/order_item_prototype.twig', {'orderItemForm': shippingForm.OrderItems.vars.prototype}) }}{% endapply %}\">
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
                                            {% set shippingNo = loop.index0 %}
                                            {% for orderItemForm in shippingForm.OrderItems %}
                                                {% set OrderItem = orderItemForm.vars.data %}
                                                <tr>
                                                    {# hidden values #}
                                                    {{ form_widget(orderItemForm.ProductClass) }}
                                                    {{ form_widget(orderItemForm.order_item_type) }}
                                                    {{ form_widget(orderItemForm.point_rate) }}
                                                    {{ form_widget(orderItemForm.tax_type) }}
                                                    {{ form_widget(orderItemForm.tax_rate, {'type': 'hidden'}) }}
                                                    <td class=\"align-middle w-25 ps-3\">
                                                        <p class=\"mb-0 fw-bold\">
                                                            {% if OrderItem.OrderItemType.isProduct %}
                                                                {{ OrderItem.product_name }}
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
                                                    <td class=\"align-middle\">
                                                        <div class=\"col mt-3\">
                                                            {{ form_widget(orderItemForm.price, {'attr': { 'readonly': 'readonly' } }) }}
                                                            <div class=\"text-end small\">({{ OrderItem.TaxDisplayType }})</div>
                                                            {{ form_errors(orderItemForm.price) }}
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"col-12 col-xl-8\">
                                                            {{ form_widget(orderItemForm.quantity) }}
                                                            {{ form_errors(orderItemForm.quantity) }}
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"col\">
                                                            {{ OrderItem.tax_rate }}%
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"col\">
                                                            {{ OrderItem.tax_type }}
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"col\">
                                                            <span>{{ OrderItem.total_price|price }}</span>
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle text-end pe-3\">
                                                        <div class=\"row justify-content-end\">
                                                            <div class=\"col-auto text-center\">
                                                                <div class=\"d-inline-block me-3\" data-bs-toggle=\"tooltip\"
                                                                     data-bs-placement=\"top\" title=\"{{ 'admin.common.delete'|trans }}\">
                                                                    <a class=\"btn btn-ec-actionIcon\" data-bs-toggle=\"modal\" data-bs-target=\"#delete_{{ orderItemForm.vars.id }}\">
                                                                        <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </div>
                                                                <!-- 削除確認モーダル -->
                                                                <div class=\"modal fade\" id=\"delete_{{ orderItemForm.vars.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"delete_{{ orderItemForm.vars.id }}\" aria-hidden=\"true\">
                                                                    <div class=\"modal-dialog\" role=\"document\">
                                                                        <div class=\"modal-content\">
                                                                            <div class=\"modal-header\">
                                                                                <h5 class=\"modal-title fw-bold\">{{ 'admin.common.delete_modal__title'|trans }}</h5>
                                                                                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                                                                                </button>
                                                                            </div>
                                                                            <div class=\"modal-body text-start\">
                                                                                <p class=\"text-start\">{{ 'admin.order.delete_item__confirm_message'|trans({ \"%name%\" : OrderItem.product_name }) }}</p>
                                                                            </div>
                                                                            <div class=\"modal-footer\">
                                                                                <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}</button>
                                                                                <a href=\"#shipping-product_{{ shippingNo }}\" class=\"btn delete btn-ec-delete\">{{ 'admin.common.delete'|trans }}</a>
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
                                    <div class=\"col-12\">
                                        <hr>
                                    </div>
                                    <!-- 出荷用メモ -->
                                    <div class=\"row\">
                                        <div class=\"col-12\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    {{ 'admin.order.shop_memo_for_shipped'|trans }}
                                                </label>
                                                <div class=\"col\">
                                                    {{ form_widget(shippingForm.note, { attr: { rows: 8 }}) }}
                                                    {{ form_errors(shippingForm.note) }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                    <!-- 出荷先を追加 -->
                    <div class=\"card rounded border-0 mb-4\">
                        <button id=\"addShipping\" type=\"button\" class=\"btn btn-ec-regular\">{{ 'admin.order.add_shipping'|trans }}</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- コンバージョンエリア -->
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <!-- 受注一覧 -->
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"{{ url(\"admin_order_edit\", {id: Order.id}) }}\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                <span>{{ 'admin.order.order_registration'|trans }}</span>
                            </a>
                        </div>
                    </div>
                    <!-- 登録 -->
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button type=\"submit\" class=\"btn btn-ec-conversion px-4\" id=\"btn_save\" name=\"mode\" value=\"register\">
                                    {{ 'admin.common.registration'|trans }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
{% endblock %}
", "@admin/Order/shipping.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\template\\admin\\Order\\shipping.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18, "for" => 234, "if" => 246, "apply" => 559);
        static $filters = array("escape" => 15, "trans" => 15, "raw" => 104, "length" => 246, "date_min" => 501, "price" => 642);
        static $functions = array("url" => 47, "include" => 145, "form_widget" => 152, "form_errors" => 328, "form_label" => 398, "constant" => 507);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'for', 'if', 'apply'],
                ['escape', 'trans', 'raw', 'length', 'date_min', 'price'],
                ['url', 'include', 'form_widget', 'form_errors', 'form_label', 'constant']
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
