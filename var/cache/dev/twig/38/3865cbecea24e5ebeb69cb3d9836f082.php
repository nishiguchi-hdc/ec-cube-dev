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

/* Product/list.twig */
class __TwigTemplate_f41d946aa0549f7acf5c8ea17b7dd5a2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Product/list.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Product/list.twig"));

        // line 13
        $context["body_class"] = "product_page";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Product/list.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 16
        echo "    <script>
        eccube.productsClassCategories = {
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 18, $this->source); })()));
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
            // line 19
            echo "            \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 19), 19, $this->source), "js"), "html", null, true);
            echo "\": ";
            echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getClassCategoriesAsJson($this->sandbox->ensureToStringAllowed($context["Product"], 19, $this->source));
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 19) == false)) {
                echo ", ";
            }
            // line 20
            echo "            ";
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
        // line 21
        echo "        };

        \$(function() {

            // 表示件数を変更
            \$('.disp-number').change(function() {
                var dispNumber = \$(this).val();
                \$('#disp_number').val(dispNumber);
                \$('#pageno').val(1);
                \$(\"#form1\").submit();
            });

            // 並び順を変更
            \$('.order-by').change(function() {
                var orderBy = \$(this).val();
                \$('#orderby').val(orderBy);
                \$('#pageno').val(1);
                \$(\"#form1\").submit();
            });

            \$('.add-cart').on('click', function(e) {
                var \$form = \$(this).parents('li').find('form');

                // 個数フォームのチェック
                var \$quantity = \$form.parent().find('.quantity');
                if (\$quantity.val() < 1) {
                    \$quantity[0].setCustomValidity('";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("1以上で入力してください。"), "html", null, true);
        echo "');
                    setTimeout(function() {
                        loadingOverlay('hide');
                    }, 100);
                    return true;
                } else {
                    \$quantity[0].setCustomValidity('');
                }
                e.preventDefault();
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    data: \$form.serialize(),
                    dataType: 'json',
                    beforeSend: function(xhr, settings) {
                        // Buttonを無効にする
                        \$('.add-cart').prop('disabled', true);
                    }
                }).done(function(data) {
                    // レスポンス内のメッセージをalertで表示
                    \$.each(data.messages, function() {
                        \$('#ec-modal-header').text(this);
                    });

                    \$('.ec-modal').show()

                    // カートブロックを更新する
                    \$.ajax({
                        url: '";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("block_cart");
        echo "',
                        type: 'GET',
                        dataType: 'html'
                    }).done(function(html) {
                        \$('.ec-headerRole__cart').html(html);
                    });
                }).fail(function(data) {
                    alert('";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートへの追加に失敗しました。"), "html", null, true);
        echo "');
                }).always(function(data) {
                    // Buttonを有効にする
                    \$('.add-cart').prop('disabled', false);
                });
            });
        });

        \$('.ec-modal-wrap').on('click', function(e) {
            // モーダル内の処理は外側にバブリングさせない
            e.stopPropagation();
        });
        \$('.ec-modal-overlay, .ec-modal, .ec-modal-close, .ec-inlineBtn--cancel').on('click', function() {
            \$('.ec-modal').hide()
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 100
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 101
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 101, $this->source); })()), "category_id", [], "any", false, false, true, 101), "vars", [], "any", false, false, true, 101), "errors", [], "any", false, false, true, 101)) > 0)) {
            // line 102
            echo "        <div class=\"ec-searchnavRole\">
            <p class=\"errormsg text-danger\">";
            // line 103
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご指定のカテゴリは存在しません"), "html", null, true);
            echo "</p>
        </div>
    ";
        } else {
            // line 106
            echo "        <div class=\"ec-searchnavRole\">
            <form name=\"form1\" id=\"form1\" method=\"get\" action=\"?\">
                ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 108, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 109
                echo "                    <input type=\"hidden\" id=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, true, 109), "id", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
                echo "\"
                           name=\"";
                // line 110
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, true, 110), "full_name", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
                echo "\"
                           ";
                // line 111
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, true, 111), "value", [], "any", false, false, true, 111))) {
                    echo "value=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, true, 111), "value", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
                    echo "\" ";
                }
                echo "/>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "            </form>
            <div class=\"ec-searchnavRole__topicpath\">
                <ol class=\"ec-topicpath\">
                    <li class=\"ec-topicpath__item\"><a href=\"";
            // line 116
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("全て"), "html", null, true);
            echo "</a>
                    </li>
                    ";
            // line 118
            if ( !(null === (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 118, $this->source); })()))) {
                // line 119
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 119, $this->source); })()), "path", [], "any", false, false, true, 119));
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
                foreach ($context['_seq'] as $context["_key"] => $context["Path"]) {
                    // line 120
                    echo "                            <li class=\"ec-topicpath__divider\">|</li>
                            <li class=\"ec-topicpath__item";
                    // line 121
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 121)) {
                        echo "--active";
                    }
                    echo "\"><a
                                        href=\"";
                    // line 122
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
                    echo "?category_id=";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Path"], "id", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Path"], "name", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
                    echo "</a>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Path'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                echo "                    ";
            }
            // line 126
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 126, $this->source); })()), "vars", [], "any", false, false, true, 126), "value", [], "any", false, false, true, 126) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 126, $this->source); })()), "vars", [], "any", false, false, true, 126), "value", [], "any", false, false, true, 126), "name", [], "any", false, false, true, 126))) {
                // line 127
                echo "                        <li class=\"ec-topicpath__divider\">|</li>
                        <li class=\"ec-topicpath__item\">";
                // line 128
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("「%name%」の検索結果", ["%name%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 128, $this->source); })()), "vars", [], "any", false, false, true, 128), "value", [], "any", false, false, true, 128), "name", [], "any", false, false, true, 128)]), "html", null, true);
                echo "</li>
                    ";
            }
            // line 130
            echo "                </ol>
            </div>
            <div class=\"ec-searchnavRole__infos\">
                <div class=\"ec-searchnavRole__counter\">
                    ";
            // line 134
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 134, $this->source); })()), "totalItemCount", [], "any", false, false, true, 134) > 0)) {
                // line 135
                echo "                        ";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("<span class=\"ec-font-bold\">%count%件</span><span>の商品が見つかりました</span>", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 135, $this->source); })()), "totalItemCount", [], "any", false, false, true, 135)]);
                echo "
                    ";
            } else {
                // line 137
                echo "                        <span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お探しの商品は見つかりませんでした"), "html", null, true);
                echo "</span>
                    ";
            }
            // line 139
            echo "                </div>
                ";
            // line 140
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 140, $this->source); })()), "totalItemCount", [], "any", false, false, true, 140) > 0)) {
                // line 141
                echo "                    <div class=\"ec-searchnavRole__actions\">
                        <div class=\"ec-select\">
                            ";
                // line 143
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 143, $this->source); })()), "disp_number", [], "any", false, false, true, 143), 143, $this->source), 'widget', ["id" => "", "attr" => ["class" => "disp-number"]]);
                echo "
                            ";
                // line 144
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 144, $this->source); })()), "orderby", [], "any", false, false, true, 144), 144, $this->source), 'widget', ["id" => "", "attr" => ["class" => "order-by"]]);
                echo "
                        </div>
                    </div>
                ";
            }
            // line 148
            echo "            </div>
        </div>
        ";
            // line 150
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 150, $this->source); })()), "totalItemCount", [], "any", false, false, true, 150) > 0)) {
                // line 151
                echo "            <div class=\"ec-shelfRole\">
                <ul class=\"ec-shelfGrid\">
                    ";
                // line 153
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 153, $this->source); })()));
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
                    // line 154
                    echo "                        <li class=\"ec-shelfGrid__item\">
                            <a href=\"";
                    // line 155
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 155)]), "html", null, true);
                    echo "\">
                                <p class=\"ec-shelfGrid__item-image\">
                                    <img src=\"";
                    // line 157
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "main_list_image", [], "any", false, false, true, 157), 157, $this->source)), "save_image"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, true, 157), 157, $this->source), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 157) > 5)) {
                        echo " loading=\"lazy\"";
                    }
                    echo ">
                                </p>
                                <p>";
                    // line 159
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, true, 159), 159, $this->source), "html", null, true);
                    echo "</p>
                                ";
                    // line 160
                    if (twig_get_attribute($this->env, $this->source, $context["Product"], "description_list", [], "any", false, false, true, 160)) {
                        // line 161
                        echo "                                    <p>";
                        echo twig_nl2br($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "description_list", [], "any", false, false, true, 161), 161, $this->source));
                        echo "</p>
                                ";
                    }
                    // line 163
                    echo "                                <p class=\"price02-default\">
                                    ";
                    // line 164
                    if (twig_get_attribute($this->env, $this->source, $context["Product"], "hasProductClass", [], "any", false, false, true, 164)) {
                        // line 165
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02Min", [], "any", false, false, true, 165) == twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02Max", [], "any", false, false, true, 165))) {
                            // line 166
                            echo "                                            ";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, true, 166), 166, $this->source)), "html", null, true);
                            echo "
                                        ";
                        } else {
                            // line 168
                            echo "                                            ";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, true, 168), 168, $this->source)), "html", null, true);
                            echo " ～ ";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMax", [], "any", false, false, true, 168), 168, $this->source)), "html", null, true);
                            echo "
                                        ";
                        }
                        // line 170
                        echo "                                    ";
                    } else {
                        // line 171
                        echo "                                        ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, true, 171), 171, $this->source)), "html", null, true);
                        echo "
                                    ";
                    }
                    // line 173
                    echo "                                </p>
                            </a>

                            ";
                    // line 176
                    if (twig_get_attribute($this->env, $this->source, $context["Product"], "stock_find", [], "any", false, false, true, 176)) {
                        // line 177
                        echo "                                ";
                        $context["form"] = twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 177, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 177), [], "array", false, false, true, 177);
                        // line 178
                        echo "                                <form name=\"form";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 178), 178, $this->source), "html", null, true);
                        echo "\" id=\"productForm";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 178), 178, $this->source), "html", null, true);
                        echo "\" action=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_add_cart", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 178)]), "html", null, true);
                        echo "\" method=\"post\">
                                    <div class=\"ec-productRole__actions\">
                                        ";
                        // line 180
                        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", true, true, true, 180)) {
                            // line 181
                            echo "                                            <div class=\"ec-select\">
                                                ";
                            // line 182
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "classcategory_id1", [], "any", false, false, true, 182), 182, $this->source), 'widget');
                            echo "
                                                ";
                            // line 183
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "classcategory_id1", [], "any", false, false, true, 183), 183, $this->source), 'errors');
                            echo "
                                            </div>
                                            ";
                            // line 185
                            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", true, true, true, 185)) {
                                // line 186
                                echo "                                                <div class=\"ec-select\">
                                                    ";
                                // line 187
                                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "classcategory_id2", [], "any", false, false, true, 187), 187, $this->source), 'widget');
                                echo "
                                                    ";
                                // line 188
                                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "classcategory_id2", [], "any", false, false, true, 188), 188, $this->source), 'errors');
                                echo "
                                                </div>
                                            ";
                            }
                            // line 191
                            echo "                                        ";
                        }
                        // line 192
                        echo "                                        <div class=\"ec-numberInput\"><span>";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("数量"), "html", null, true);
                        echo "</span>
                                            ";
                        // line 193
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "quantity", [], "any", false, false, true, 193), 193, $this->source), 'widget', ["attr" => ["class" => "quantity"]]);
                        echo "
                                            ";
                        // line 194
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "quantity", [], "any", false, false, true, 194), 194, $this->source), 'errors');
                        echo "
                                        </div>
                                    </div>
                                    ";
                        // line 197
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), 197, $this->source), 'rest');
                        echo "
                                </form>
                                <div class=\"ec-productRole__btn\">
                                    <button type=\"submit\" class=\"ec-blockBtn--action add-cart\" data-cartid=\"";
                        // line 200
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 200), 200, $this->source), "html", null, true);
                        echo "\" form=\"productForm";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 200), 200, $this->source), "html", null, true);
                        echo "\">
                                        ";
                        // line 201
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートに入れる"), "html", null, true);
                        echo "
                                    </button>
                                </div>
                            ";
                    } else {
                        // line 205
                        echo "                                <div class=\"ec-productRole__btn\">
                                    <button type=\"button\" class=\"ec-blockBtn--action\" disabled=\"disabled\">
                                        ";
                        // line 207
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ただいま品切れ中です。"), "html", null, true);
                        echo "
                                    </button>
                                </div>
                            ";
                    }
                    // line 211
                    echo "                        </li>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 213
                echo "                </ul>
            </div>
            <div class=\"ec-modal\">
                <div class=\"ec-modal-overlay\">
                    <div class=\"ec-modal-wrap\">
                        <span class=\"ec-modal-close\"><span class=\"ec-icon\"><img src=\"";
                // line 218
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/cross-dark.svg"), "html", null, true);
                echo "\" alt=\"\"/></span></span>
                        <div id=\"ec-modal-header\" class=\"text-center\">";
                // line 219
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートに追加しました。"), "html", null, true);
                echo "</div>
                        <div class=\"ec-modal-box\">
                            <div class=\"ec-role\">
                                <span class=\"ec-inlineBtn--cancel\">";
                // line 222
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お買い物を続ける"), "html", null, true);
                echo "</span>
                                <a href=\"";
                // line 223
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart");
                echo "\" class=\"ec-inlineBtn--action\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートへ進む"), "html", null, true);
                echo "</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"ec-pagerRole\">
                ";
                // line 230
                $this->loadTemplate("pager.twig", "Product/list.twig", 230)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 230, $this->source); })()), "paginationData", [], "any", false, false, true, 230)]));
                // line 231
                echo "            </div>
        ";
            }
            // line 233
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Product/list.twig";
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
        return array (  632 => 233,  628 => 231,  626 => 230,  614 => 223,  610 => 222,  604 => 219,  600 => 218,  593 => 213,  578 => 211,  571 => 207,  567 => 205,  560 => 201,  554 => 200,  548 => 197,  542 => 194,  538 => 193,  533 => 192,  530 => 191,  524 => 188,  520 => 187,  517 => 186,  515 => 185,  510 => 183,  506 => 182,  503 => 181,  501 => 180,  491 => 178,  488 => 177,  486 => 176,  481 => 173,  475 => 171,  472 => 170,  464 => 168,  458 => 166,  455 => 165,  453 => 164,  450 => 163,  444 => 161,  442 => 160,  438 => 159,  427 => 157,  422 => 155,  419 => 154,  402 => 153,  398 => 151,  396 => 150,  392 => 148,  385 => 144,  381 => 143,  377 => 141,  375 => 140,  372 => 139,  366 => 137,  360 => 135,  358 => 134,  352 => 130,  347 => 128,  344 => 127,  341 => 126,  338 => 125,  317 => 122,  311 => 121,  308 => 120,  290 => 119,  288 => 118,  281 => 116,  276 => 113,  264 => 111,  260 => 110,  255 => 109,  251 => 108,  247 => 106,  241 => 103,  238 => 102,  235 => 101,  225 => 100,  198 => 82,  188 => 75,  157 => 47,  129 => 21,  115 => 20,  107 => 19,  90 => 18,  86 => 16,  76 => 15,  65 => 11,  63 => 13,  38 => 11,);
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
{% extends 'default_frame.twig' %}

{% set body_class = 'product_page' %}

{% block javascript %}
    <script>
        eccube.productsClassCategories = {
            {% for Product in pagination %}
            \"{{ Product.id|escape('js') }}\": {{ class_categories_as_json(Product)|raw }}{% if loop.last == false %}, {% endif %}
            {% endfor %}
        };

        \$(function() {

            // 表示件数を変更
            \$('.disp-number').change(function() {
                var dispNumber = \$(this).val();
                \$('#disp_number').val(dispNumber);
                \$('#pageno').val(1);
                \$(\"#form1\").submit();
            });

            // 並び順を変更
            \$('.order-by').change(function() {
                var orderBy = \$(this).val();
                \$('#orderby').val(orderBy);
                \$('#pageno').val(1);
                \$(\"#form1\").submit();
            });

            \$('.add-cart').on('click', function(e) {
                var \$form = \$(this).parents('li').find('form');

                // 個数フォームのチェック
                var \$quantity = \$form.parent().find('.quantity');
                if (\$quantity.val() < 1) {
                    \$quantity[0].setCustomValidity('{{ '1以上で入力してください。'|trans }}');
                    setTimeout(function() {
                        loadingOverlay('hide');
                    }, 100);
                    return true;
                } else {
                    \$quantity[0].setCustomValidity('');
                }
                e.preventDefault();
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    data: \$form.serialize(),
                    dataType: 'json',
                    beforeSend: function(xhr, settings) {
                        // Buttonを無効にする
                        \$('.add-cart').prop('disabled', true);
                    }
                }).done(function(data) {
                    // レスポンス内のメッセージをalertで表示
                    \$.each(data.messages, function() {
                        \$('#ec-modal-header').text(this);
                    });

                    \$('.ec-modal').show()

                    // カートブロックを更新する
                    \$.ajax({
                        url: '{{ url('block_cart') }}',
                        type: 'GET',
                        dataType: 'html'
                    }).done(function(html) {
                        \$('.ec-headerRole__cart').html(html);
                    });
                }).fail(function(data) {
                    alert('{{ 'カートへの追加に失敗しました。'|trans }}');
                }).always(function(data) {
                    // Buttonを有効にする
                    \$('.add-cart').prop('disabled', false);
                });
            });
        });

        \$('.ec-modal-wrap').on('click', function(e) {
            // モーダル内の処理は外側にバブリングさせない
            e.stopPropagation();
        });
        \$('.ec-modal-overlay, .ec-modal, .ec-modal-close, .ec-inlineBtn--cancel').on('click', function() {
            \$('.ec-modal').hide()
        });
    </script>
{% endblock %}

{% block main %}
    {% if search_form.category_id.vars.errors|length > 0 %}
        <div class=\"ec-searchnavRole\">
            <p class=\"errormsg text-danger\">{{ 'ご指定のカテゴリは存在しません'|trans }}</p>
        </div>
    {% else %}
        <div class=\"ec-searchnavRole\">
            <form name=\"form1\" id=\"form1\" method=\"get\" action=\"?\">
                {% for item in search_form %}
                    <input type=\"hidden\" id=\"{{ item.vars.id }}\"
                           name=\"{{ item.vars.full_name }}\"
                           {% if item.vars.value is not empty %}value=\"{{ item.vars.value }}\" {% endif %}/>
                {% endfor %}
            </form>
            <div class=\"ec-searchnavRole__topicpath\">
                <ol class=\"ec-topicpath\">
                    <li class=\"ec-topicpath__item\"><a href=\"{{ url('product_list') }}\">{{ '全て'|trans }}</a>
                    </li>
                    {% if Category is not null %}
                        {% for Path in Category.path %}
                            <li class=\"ec-topicpath__divider\">|</li>
                            <li class=\"ec-topicpath__item{% if loop.last %}--active{% endif %}\"><a
                                        href=\"{{ url('product_list') }}?category_id={{ Path.id }}\">{{ Path.name }}</a>
                            </li>
                        {% endfor %}
                    {% endif %}
                    {% if search_form.vars.value and search_form.vars.value.name %}
                        <li class=\"ec-topicpath__divider\">|</li>
                        <li class=\"ec-topicpath__item\">{{ '「%name%」の検索結果'|trans({ '%name%': search_form.vars.value.name }) }}</li>
                    {% endif %}
                </ol>
            </div>
            <div class=\"ec-searchnavRole__infos\">
                <div class=\"ec-searchnavRole__counter\">
                    {% if pagination.totalItemCount > 0 %}
                        {{ '<span class=\"ec-font-bold\">%count%件</span><span>の商品が見つかりました</span>'|trans({ '%count%': pagination.totalItemCount })|raw }}
                    {% else %}
                        <span>{{ 'お探しの商品は見つかりませんでした'|trans }}</span>
                    {% endif %}
                </div>
                {% if pagination.totalItemCount > 0 %}
                    <div class=\"ec-searchnavRole__actions\">
                        <div class=\"ec-select\">
                            {{ form_widget(search_form.disp_number, {'id': '', 'attr': {'class': 'disp-number'}}) }}
                            {{ form_widget(search_form.orderby, {'id': '', 'attr': {'class': 'order-by'}}) }}
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
        {% if pagination.totalItemCount > 0 %}
            <div class=\"ec-shelfRole\">
                <ul class=\"ec-shelfGrid\">
                    {% for Product in pagination %}
                        <li class=\"ec-shelfGrid__item\">
                            <a href=\"{{ url('product_detail', {'id': Product.id}) }}\">
                                <p class=\"ec-shelfGrid__item-image\">
                                    <img src=\"{{ asset(Product.main_list_image|no_image_product, 'save_image') }}\" alt=\"{{ Product.name }}\" {% if loop.index > 5 %} loading=\"lazy\"{% endif %}>
                                </p>
                                <p>{{ Product.name }}</p>
                                {% if Product.description_list %}
                                    <p>{{ Product.description_list|raw|nl2br }}</p>
                                {% endif %}
                                <p class=\"price02-default\">
                                    {% if Product.hasProductClass %}
                                        {% if Product.getPrice02Min == Product.getPrice02Max %}
                                            {{ Product.getPrice02IncTaxMin|price }}
                                        {% else %}
                                            {{ Product.getPrice02IncTaxMin|price }} ～ {{ Product.getPrice02IncTaxMax|price }}
                                        {% endif %}
                                    {% else %}
                                        {{ Product.getPrice02IncTaxMin|price }}
                                    {% endif %}
                                </p>
                            </a>

                            {% if Product.stock_find %}
                                {% set form = forms[Product.id] %}
                                <form name=\"form{{ Product.id }}\" id=\"productForm{{ Product.id }}\" action=\"{{ url('product_add_cart', {id:Product.id}) }}\" method=\"post\">
                                    <div class=\"ec-productRole__actions\">
                                        {% if form.classcategory_id1 is defined %}
                                            <div class=\"ec-select\">
                                                {{ form_widget(form.classcategory_id1) }}
                                                {{ form_errors(form.classcategory_id1) }}
                                            </div>
                                            {% if form.classcategory_id2 is defined %}
                                                <div class=\"ec-select\">
                                                    {{ form_widget(form.classcategory_id2) }}
                                                    {{ form_errors(form.classcategory_id2) }}
                                                </div>
                                            {% endif %}
                                        {% endif %}
                                        <div class=\"ec-numberInput\"><span>{{ '数量'|trans }}</span>
                                            {{ form_widget(form.quantity, {'attr': {'class': 'quantity'}}) }}
                                            {{ form_errors(form.quantity) }}
                                        </div>
                                    </div>
                                    {{ form_rest(form) }}
                                </form>
                                <div class=\"ec-productRole__btn\">
                                    <button type=\"submit\" class=\"ec-blockBtn--action add-cart\" data-cartid=\"{{ Product.id }}\" form=\"productForm{{ Product.id }}\">
                                        {{ 'カートに入れる'|trans }}
                                    </button>
                                </div>
                            {% else %}
                                <div class=\"ec-productRole__btn\">
                                    <button type=\"button\" class=\"ec-blockBtn--action\" disabled=\"disabled\">
                                        {{ 'ただいま品切れ中です。'|trans }}
                                    </button>
                                </div>
                            {% endif %}
                        </li>
                    {% endfor %}
                </ul>
            </div>
            <div class=\"ec-modal\">
                <div class=\"ec-modal-overlay\">
                    <div class=\"ec-modal-wrap\">
                        <span class=\"ec-modal-close\"><span class=\"ec-icon\"><img src=\"{{ asset('assets/icon/cross-dark.svg') }}\" alt=\"\"/></span></span>
                        <div id=\"ec-modal-header\" class=\"text-center\">{{ 'カートに追加しました。'|trans }}</div>
                        <div class=\"ec-modal-box\">
                            <div class=\"ec-role\">
                                <span class=\"ec-inlineBtn--cancel\">{{ 'お買い物を続ける'|trans }}</span>
                                <a href=\"{{ url('cart') }}\" class=\"ec-inlineBtn--action\">{{ 'カートへ進む'|trans }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"ec-pagerRole\">
                {% include \"pager.twig\" with {'pages': pagination.paginationData} %}
            </div>
        {% endif %}
    {% endif %}
{% endblock %}
", "Product/list.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\default\\Product\\list.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "for" => 18, "if" => 19, "include" => 230);
        static $filters = array("escape" => 19, "raw" => 19, "trans" => 47, "length" => 101, "no_image_product" => 157, "nl2br" => 161, "price" => 166);
        static $functions = array("class_categories_as_json" => 19, "url" => 75, "form_widget" => 143, "asset" => 157, "form_errors" => 183, "form_rest" => 197);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'include'],
                ['escape', 'raw', 'trans', 'length', 'no_image_product', 'nl2br', 'price'],
                ['class_categories_as_json', 'url', 'form_widget', 'asset', 'form_errors', 'form_rest']
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
