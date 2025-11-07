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

/* EccubePaymentLite42/Resource/template/admin/Order/regular_search_product.twig */
class __TwigTemplate_7049085d912b1639390c93387f54330e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/Order/regular_search_product.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/Order/regular_search_product.twig"));

        // line 1
        echo "<script>
    // 商品規格情報. 規格2のプルダウンリストの設定に利用する,
    var productsClassCategories = {
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 4, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
            // line 5
            echo "        \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 5), 5, $this->source), "js"), "html", null, true);
            echo "\": ";
            echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getClassCategoriesAsJson($this->sandbox->ensureToStringAllowed($context["Product"], 5, $this->source), false);
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 5) == false)) {
                echo ", ";
            }
            // line 6
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    };

    // 規格1が選択された際に, 規格2のプルダウンリストを設定する,
    function fnSetClassCategory2(select, product_id) {
        // 規格1の要素を取得
        var \$sele1 = \$(select);
        // 規格2の要素を取得
        var \$sele2 = \$sele1.parents(\".align-middle\").find('select[name=classcategory_id2]');

        // 規格1の選択肢
        var classcat_id1 = \$sele1.val() ? \$sele1.val() : '';

        // 規格2がある場合は選択肢を書き換える
        if (\$sele2 && \$sele2.length) {
            // 規格2の選択肢をクリア
            \$sele2.children().remove();
            var classcat2 = productsClassCategories[product_id][classcat_id1];

            // 規格2の要素を設定
            for (var key in classcat2) {
                if (classcat2.hasOwnProperty(key)) {
                    var id = classcat2[key].classcategory_id2;
                    var name = classcat2[key].name;
                    var option = \$('<option />').val(id ? id : '').text(name);
                    \$sele2.append(option);
                }
            }
        }
    }

    // 受注明細行を追加する.
    function fnAddOrderItem(\$row, product_id, type, product_name) {
        // 規格1の要素を取得
        var \$sele1 = \$row.find('select[name=classcategory_id1]');
        // 規格2の要素を取得
        var \$sele2 = \$row.find('select[name=classcategory_id2]');

        var product_class_id = null;
        var price = 0;
        var quantity = 1;

        // 規格なし商品の場合
        if (!\$sele1.length && !\$sele2.length) {
            var product = productsClassCategories[product_id]['__unselected2']['#'];
            product_class_id = product['product_class_id'];
            price = product['price02'];
            // 規格が登録されている商品の場合
        } else if (\$sele1.length) {
            if (\$sele2.length) {
                var class_category_id1 = \$sele1.val();
                var class_cateogry_id2 = \$sele2.val();
                if (class_category_id1 == '__unselected' || !class_cateogry_id2) {
                    alert('";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.unselected_class"), "html", null, true);
        echo "');
                    return;
                }
                var product = productsClassCategories[product_id][class_category_id1]['#' + class_cateogry_id2];

                product_class_id = product['product_class_id'];
                price = product['price02'];
            } else {
                var class_category_id1 = \$sele1.val();
                if (class_category_id1 == '__unselected') {
                    alert('";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.unselected_class"), "html", null, true);
        echo "');
                    return;
                }
                var product = productsClassCategories[product_id][class_category_id1]['#'];

                product_class_id = product['product_class_id'];
                price = product['price02'];
            }
        }

        var prototype = \$collectionHolder.data('prototype');
        index++;
        var newForm = prototype.replace(/__name__/g, index);
        \$collectionHolder.children('tbody').append(newForm);
        var \$lastRow = \$collectionHolder.children('tbody').children('tr').last();

        \$(\$lastRow).find(formIdPrefix + index + '_ProductClass').val(product_class_id);
        \$(\$lastRow).find(formIdPrefix + index + '_price').val(price);
        \$(\$lastRow).find(formIdPrefix + index + '_quantity').val(quantity);
        \$(\$lastRow).find(formIdPrefix + index + '_order_item_type').val(type);
        \$(\$lastRow).find(formIdPrefix + index + '_product_name').val(product_name);

        // モーダル閉じる.
        \$('#searchProductModal').modal('hide');

        // 再計算のためsubmit.
        \$('#form1').submit();

        return false;
    }

    // 商品検索
    \$('#product_pagination a').on('click', function(event) {
        if (!\$(this).parent().is('.active')) {
            var list = \$('#searchProductModalList');
            list.children().remove();

            \$.ajax({
                url: \$(this).attr('href'),
                type: 'GET',
                dataType: 'html'
            }).done(function(data) {
                \$('#searchProductModalList').html(data);
            }).fail(function(data) {
                alert('search product failed.');
            });
        }

        event.preventDefault();
    });
</script>


<table class=\"table table-striped table-sm mb-3\">
    <thead class=\"table-active\">
    <tr>
        <th class=\"pt-2 pb-2 pl-3\">";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_id"), "html", null, true);
        echo "</th>
        <th class=\"pt-2 pb-2 pl-3\">";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_name_and_code"), "html", null, true);
        echo "</th>
        <th class=\"pt-2 pb-2\">";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class__short"), "html", null, true);
        echo "</th>
        <th class=\"pt-2 pb-2 pr-3\"></th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 132, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
            // line 133
            echo "        <form name=\"product_form";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
            echo "\">
            ";
            // line 134
            $context["form"] = twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 134, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 134), [], "array", false, false, true, 134);
            // line 135
            echo "            <tr>
                <td class=\"align-middle pl-3\">
                    ";
            // line 137
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
            echo "
                </td>
                <td class=\"align-middle pl-3\">
                    <p class=\"m-0\"> ";
            // line 140
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
            echo "</p>
                    <span>
                        ";
            // line 142
            if (twig_get_attribute($this->env, $this->source, $context["Product"], "hasProductClass", [], "any", false, false, true, 142)) {
                // line 143
                echo "                            ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "code_min", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
                echo "～";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "code_max", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
                echo "
                        ";
            } else {
                // line 145
                echo "                            ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "code_min", [], "any", false, false, true, 145), 145, $this->source), "html", null, true);
                echo "
                        ";
            }
            // line 147
            echo "                    </span>
                </td>
                <td class=\"align-middle\">
                    ";
            // line 150
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", true, true, true, 150)) {
                // line 151
                echo "                        <div class=\"row mb-2\">
                            <div class=\"col-4 pr-0\"><span>";
                // line 152
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "classcategory_id1", [], "any", false, false, true, 152), 152, $this->source), 'label');
                echo "</span></div>
                            <div class=\"col-8 text-start pl-0\">
                                ";
                // line 154
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "classcategory_id1", [], "any", false, false, true, 154), 154, $this->source), 'widget', ["attr" => ["onchange" => (("fnSetClassCategory2(this," . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 154), 154, $this->source)) . ")")]]);
                echo "
                            </div>
                        </div>
                    ";
            }
            // line 158
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", true, true, true, 158)) {
                // line 159
                echo "                        <div class=\"row\">
                            <div class=\"col-4 pr-0\"><span>";
                // line 160
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "classcategory_id2", [], "any", false, false, true, 160), 160, $this->source), 'label');
                echo "</span></div>
                            <div class=\"col-8 text-start pl-0\">
                                ";
                // line 162
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "classcategory_id2", [], "any", false, false, true, 162), 162, $this->source), 'widget', ["id" => ""]);
                echo "
                            </div>
                        </div>
                    ";
            }
            // line 166
            echo "                </td>
                <td class=\"align-middle pr-3 text-end\">
                    <button type=\"button\" class=\"btn btn-ec-actionIcon\" onclick=\"fnAddOrderItem(\$(this).parent().parent(), ";
            // line 168
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 168), 168, $this->source), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Master\\OrderItemType::PRODUCT"), "html", null, true);
            echo ", '";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, true, 168), 168, $this->source), "html", null, true);
            echo "')\" name=\"mode\" value=\"modal\">
                        <i class=\"fa fa-plus fa-lg fw-bold text-secondary\"></i>
                    </button>
                </td>
            </tr>
        </form>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "    </tbody>
</table>
";
        // line 177
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 177, $this->source); })()), "totalItemCount", [], "any", false, false, true, 177) > 0)) {
            // line 178
            echo "    <div id=\"product_pagination\" class=\"row justify-content-md-center mb-4\">
        ";
            // line 179
            $this->loadTemplate("@admin/pager.twig", "EccubePaymentLite42/Resource/template/admin/Order/regular_search_product.twig", 179)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 179, $this->source); })()), "paginationData", [], "any", false, false, true, 179), "routes" => "eccube_payment_lite42_admin_regular_order_search_product"]));
            // line 180
            echo "    </div>
";
        }
        // line 182
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "EccubePaymentLite42/Resource/template/admin/Order/regular_search_product.twig";
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
        return array (  361 => 182,  357 => 180,  355 => 179,  352 => 178,  350 => 177,  346 => 175,  329 => 168,  325 => 166,  318 => 162,  313 => 160,  310 => 159,  307 => 158,  300 => 154,  295 => 152,  292 => 151,  290 => 150,  285 => 147,  279 => 145,  271 => 143,  269 => 142,  264 => 140,  258 => 137,  254 => 135,  252 => 134,  247 => 133,  243 => 132,  235 => 127,  231 => 126,  227 => 125,  168 => 69,  155 => 59,  101 => 7,  87 => 6,  79 => 5,  62 => 4,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    // 商品規格情報. 規格2のプルダウンリストの設定に利用する,
    var productsClassCategories = {
        {% for Product in pagination %}
        \"{{ Product.id|escape('js') }}\": {{ class_categories_as_json(Product, false)|raw }}{% if loop.last == false %}, {% endif %}
        {% endfor %}
    };

    // 規格1が選択された際に, 規格2のプルダウンリストを設定する,
    function fnSetClassCategory2(select, product_id) {
        // 規格1の要素を取得
        var \$sele1 = \$(select);
        // 規格2の要素を取得
        var \$sele2 = \$sele1.parents(\".align-middle\").find('select[name=classcategory_id2]');

        // 規格1の選択肢
        var classcat_id1 = \$sele1.val() ? \$sele1.val() : '';

        // 規格2がある場合は選択肢を書き換える
        if (\$sele2 && \$sele2.length) {
            // 規格2の選択肢をクリア
            \$sele2.children().remove();
            var classcat2 = productsClassCategories[product_id][classcat_id1];

            // 規格2の要素を設定
            for (var key in classcat2) {
                if (classcat2.hasOwnProperty(key)) {
                    var id = classcat2[key].classcategory_id2;
                    var name = classcat2[key].name;
                    var option = \$('<option />').val(id ? id : '').text(name);
                    \$sele2.append(option);
                }
            }
        }
    }

    // 受注明細行を追加する.
    function fnAddOrderItem(\$row, product_id, type, product_name) {
        // 規格1の要素を取得
        var \$sele1 = \$row.find('select[name=classcategory_id1]');
        // 規格2の要素を取得
        var \$sele2 = \$row.find('select[name=classcategory_id2]');

        var product_class_id = null;
        var price = 0;
        var quantity = 1;

        // 規格なし商品の場合
        if (!\$sele1.length && !\$sele2.length) {
            var product = productsClassCategories[product_id]['__unselected2']['#'];
            product_class_id = product['product_class_id'];
            price = product['price02'];
            // 規格が登録されている商品の場合
        } else if (\$sele1.length) {
            if (\$sele2.length) {
                var class_category_id1 = \$sele1.val();
                var class_cateogry_id2 = \$sele2.val();
                if (class_category_id1 == '__unselected' || !class_cateogry_id2) {
                    alert('{{'admin.product.unselected_class'|trans}}');
                    return;
                }
                var product = productsClassCategories[product_id][class_category_id1]['#' + class_cateogry_id2];

                product_class_id = product['product_class_id'];
                price = product['price02'];
            } else {
                var class_category_id1 = \$sele1.val();
                if (class_category_id1 == '__unselected') {
                    alert('{{ 'admin.product.unselected_class'|trans }}');
                    return;
                }
                var product = productsClassCategories[product_id][class_category_id1]['#'];

                product_class_id = product['product_class_id'];
                price = product['price02'];
            }
        }

        var prototype = \$collectionHolder.data('prototype');
        index++;
        var newForm = prototype.replace(/__name__/g, index);
        \$collectionHolder.children('tbody').append(newForm);
        var \$lastRow = \$collectionHolder.children('tbody').children('tr').last();

        \$(\$lastRow).find(formIdPrefix + index + '_ProductClass').val(product_class_id);
        \$(\$lastRow).find(formIdPrefix + index + '_price').val(price);
        \$(\$lastRow).find(formIdPrefix + index + '_quantity').val(quantity);
        \$(\$lastRow).find(formIdPrefix + index + '_order_item_type').val(type);
        \$(\$lastRow).find(formIdPrefix + index + '_product_name').val(product_name);

        // モーダル閉じる.
        \$('#searchProductModal').modal('hide');

        // 再計算のためsubmit.
        \$('#form1').submit();

        return false;
    }

    // 商品検索
    \$('#product_pagination a').on('click', function(event) {
        if (!\$(this).parent().is('.active')) {
            var list = \$('#searchProductModalList');
            list.children().remove();

            \$.ajax({
                url: \$(this).attr('href'),
                type: 'GET',
                dataType: 'html'
            }).done(function(data) {
                \$('#searchProductModalList').html(data);
            }).fail(function(data) {
                alert('search product failed.');
            });
        }

        event.preventDefault();
    });
</script>


<table class=\"table table-striped table-sm mb-3\">
    <thead class=\"table-active\">
    <tr>
        <th class=\"pt-2 pb-2 pl-3\">{{ 'admin.product.product_id'|trans }}</th>
        <th class=\"pt-2 pb-2 pl-3\">{{ 'admin.product.product_name_and_code'|trans }}</th>
        <th class=\"pt-2 pb-2\">{{ 'admin.product.product_class__short'|trans }}</th>
        <th class=\"pt-2 pb-2 pr-3\"></th>
    </tr>
    </thead>
    <tbody>
    {% for Product in pagination %}
        <form name=\"product_form{{ Product.id }}\">
            {% set form = forms[Product.id] %}
            <tr>
                <td class=\"align-middle pl-3\">
                    {{ Product.id }}
                </td>
                <td class=\"align-middle pl-3\">
                    <p class=\"m-0\"> {{ Product.name }}</p>
                    <span>
                        {% if Product.hasProductClass %}
                            {{ Product.code_min }}～{{ Product.code_max }}
                        {% else %}
                            {{ Product.code_min }}
                        {% endif %}
                    </span>
                </td>
                <td class=\"align-middle\">
                    {% if form.classcategory_id1 is defined %}
                        <div class=\"row mb-2\">
                            <div class=\"col-4 pr-0\"><span>{{ form_label(form.classcategory_id1) }}</span></div>
                            <div class=\"col-8 text-start pl-0\">
                                {{ form_widget(form.classcategory_id1, { attr : { 'onchange' : \"fnSetClassCategory2(this,\" ~ Product.id ~ \")\" } } ) }}
                            </div>
                        </div>
                    {% endif %}
                    {% if form.classcategory_id2 is defined %}
                        <div class=\"row\">
                            <div class=\"col-4 pr-0\"><span>{{ form_label(form.classcategory_id2) }}</span></div>
                            <div class=\"col-8 text-start pl-0\">
                                {{ form_widget(form.classcategory_id2, {'id': ''}) }}
                            </div>
                        </div>
                    {% endif %}
                </td>
                <td class=\"align-middle pr-3 text-end\">
                    <button type=\"button\" class=\"btn btn-ec-actionIcon\" onclick=\"fnAddOrderItem(\$(this).parent().parent(), {{ Product.id }}, {{ constant('Eccube\\\\Entity\\\\Master\\\\OrderItemType::PRODUCT') }}, '{{ Product.name }}')\" name=\"mode\" value=\"modal\">
                        <i class=\"fa fa-plus fa-lg fw-bold text-secondary\"></i>
                    </button>
                </td>
            </tr>
        </form>
    {% endfor %}
    </tbody>
</table>
{% if pagination.totalItemCount > 0 %}
    <div id=\"product_pagination\" class=\"row justify-content-md-center mb-4\">
        {% include \"@admin/pager.twig\" with {'pages': pagination.paginationData, 'routes': 'eccube_payment_lite42_admin_regular_order_search_product'} %}
    </div>
{% endif %}

", "EccubePaymentLite42/Resource/template/admin/Order/regular_search_product.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\admin\\Order\\regular_search_product.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 4, "if" => 5, "set" => 134, "include" => 179);
        static $filters = array("escape" => 5, "raw" => 5, "trans" => 59);
        static $functions = array("class_categories_as_json" => 5, "form_label" => 152, "form_widget" => 154, "constant" => 168);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'set', 'include'],
                ['escape', 'raw', 'trans'],
                ['class_categories_as_json', 'form_label', 'form_widget', 'constant']
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
