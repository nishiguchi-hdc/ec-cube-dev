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

/* RelatedProduct42/Resource/template/admin/related_product.twig */
class __TwigTemplate_514269bba0aec9dc7698ee9ae9e5afc1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "RelatedProduct42/Resource/template/admin/related_product.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "RelatedProduct42/Resource/template/admin/related_product.twig"));

        // line 10
        echo "
<script>
\$(function() {
    \$('#plugin_related_product_related_product').appendTo('.c-contentsArea__primaryCol');
    \$('#plugin_related_product_related_product').removeClass('d-none');

    var dataId = null;

    \$(document).on('click', 'button[id^=\"RelatedProduct-delete\"]', function() {
        var data = \$(this).data();
        \$('.RelatedProduct-view' + data.id ).addClass('d-none');
        \$('#admin_product_RelatedProducts_' + data.id + '_ChildProduct').val('');
        \$('#admin_product_RelatedProducts_' + data.id + '_content' ).val('');
        \$('#RelatedProductSearchResult').children().remove();
    });

    \$(document).on(\"click\", 'button[id^=\"RelatedProduct-search\"]', function () {
        dataId = \$(this).attr(\"data-id\");
        \$(\"#RelatedProductDataId\").val(dataId);
        \$(\"#RelatedProductSearchResult\").children().remove();
    });

    \$(\"#RelatedProductSearchButton\").on(\"click\", function () {
        var formIdVal = \$(\"#";
        // line 33
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, true, 33), "vars", [], "any", false, false, true, 33), "id", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "\").val();
        var formCatIdVal = \$(\"#";
        // line 34
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 34, $this->source); })()), "category_id", [], "any", false, false, true, 34), "vars", [], "any", false, false, true, 34), "id", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
        echo "\").val();
        var data = {
            id: formIdVal,
            category_id: formCatIdVal,
            product_id: ";
        // line 38
        ((twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, true, 38)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, true, 38), "html", null, true))) : (print (0)));
        echo "
        };
        \$(\"#RelatedProductSearchResult\")
                .children()
                .remove();
        \$.ajax({
            type: \"POST\",
            url: \"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_related_product_search");
        echo "\",
            data: data,
            success: function(data){
                \$(\"#RelatedProductSearchResult\").append(data);
            },
            error: function() {
                alert('product search failed.');
            }
        });
    });
});
</script>

<div id=\"plugin_related_product_related_product\" class=\"d-none\">
    <div class=\"card rounded border-0 mb-4\">
        <div class=\"card-header\">
            <span class=\"card-title\">";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "RelatedProducts", [], "any", false, false, true, 61), "vars", [], "any", false, false, true, 61), "label", [], "any", false, false, true, 61), 61, $this->source)), "html", null, true);
        echo "</span>
        </div>
        <div class=\"card-body\">
            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "RelatedProducts", [], "any", false, false, true, 64));
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
        foreach ($context['_seq'] as $context["_key"] => $context["RelatedProductForm"]) {
            // line 65
            echo "            ";
            $context["RelatedProduct"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProductForm"], "vars", [], "any", false, false, true, 65), "value", [], "any", false, false, true, 65);
            // line 66
            echo "            ";
            $context["ChildProduct"] = twig_get_attribute($this->env, $this->source, (isset($context["RelatedProduct"]) || array_key_exists("RelatedProduct", $context) ? $context["RelatedProduct"] : (function () { throw new RuntimeError('Variable "RelatedProduct" does not exist.', 66, $this->source); })()), "ChildProduct", [], "any", false, false, true, 66);
            // line 67
            echo "            <div class=\"row mb-2\">
                <div class=\"col-3\">
                    <label>
                        ";
            // line 70
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProductForm"], "ChildProduct", [], "any", false, false, true, 70), "vars", [], "any", false, false, true, 70), "label", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
            echo "
                    </label>
                </div>
                <div class=\"col-9\">
                    ";
            // line 74
            if ((isset($context["ChildProduct"]) || array_key_exists("ChildProduct", $context) ? $context["ChildProduct"] : (function () { throw new RuntimeError('Variable "ChildProduct" does not exist.', 74, $this->source); })())) {
                // line 75
                echo "                        <div>
                            <a href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_product_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["ChildProduct"]) || array_key_exists("ChildProduct", $context) ? $context["ChildProduct"] : (function () { throw new RuntimeError('Variable "ChildProduct" does not exist.', 76, $this->source); })()), "id", [], "any", false, false, true, 76)]), "html", null, true);
                echo "\" id=\"RelatedProduct-product_image_link";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
                echo "\" class=\"RelatedProduct-view";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
                echo "\" >
                                <img src=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["ChildProduct"]) || array_key_exists("ChildProduct", $context) ? $context["ChildProduct"] : (function () { throw new RuntimeError('Variable "ChildProduct" does not exist.', 77, $this->source); })()), "mainFileName", [], "any", false, false, true, 77), 77, $this->source)), "save_image"), "html", null, true);
                echo "\" id=\"RelatedProduct-product_image_img";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                echo "\" style=\"max-width: 100px;margin-right: 10px;\" />
                            </a>
                            <span id=\"RelatedProduct-product_name";
                // line 79
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                echo "\" class=\"RelatedProduct-view";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                echo "\" style=\"margin-right: 10px;\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["ChildProduct"]) || array_key_exists("ChildProduct", $context) ? $context["ChildProduct"] : (function () { throw new RuntimeError('Variable "ChildProduct" does not exist.', 79, $this->source); })()), "name", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                echo "</span>
                            ";
                // line 80
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RelatedProductForm"], "ChildProduct", [], "any", false, false, true, 80), 80, $this->source), 'widget', ["attr" => ["style" => "display: none", "class" => "child-product"]]);
                echo "
                            <br>
                            <span class=\"RelatedProduct-view";
                // line 82
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                echo "\" id=\"RelatedProduct-product_code";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                echo "\">
                        ";
                // line 83
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["ChildProduct"]) || array_key_exists("ChildProduct", $context) ? $context["ChildProduct"] : (function () { throw new RuntimeError('Variable "ChildProduct" does not exist.', 83, $this->source); })()), "code_min", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                echo "
                                ";
                // line 84
                if ((twig_get_attribute($this->env, $this->source, (isset($context["ChildProduct"]) || array_key_exists("ChildProduct", $context) ? $context["ChildProduct"] : (function () { throw new RuntimeError('Variable "ChildProduct" does not exist.', 84, $this->source); })()), "code_min", [], "any", false, false, true, 84) != twig_get_attribute($this->env, $this->source, (isset($context["ChildProduct"]) || array_key_exists("ChildProduct", $context) ? $context["ChildProduct"] : (function () { throw new RuntimeError('Variable "ChildProduct" does not exist.', 84, $this->source); })()), "code_max", [], "any", false, false, true, 84))) {
                    echo " ～ ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["ChildProduct"]) || array_key_exists("ChildProduct", $context) ? $context["ChildProduct"] : (function () { throw new RuntimeError('Variable "ChildProduct" does not exist.', 84, $this->source); })()), "code_max", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                    echo "
                                ";
                }
                // line 86
                echo "                            </span>
                        </div>
                        <div>
                            <button type=\"button\" id=\"RelatedProduct-search";
                // line 89
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
                echo "\" class=\"btn btn-ec-regular\" data-bs-toggle=\"modal\" data-bs-target=\"#RelatedProductSearchProductModal\" data-id=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
                echo "\">
                                ";
                // line 90
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("related_product.select_product"), "html", null, true);
                echo "
                            </button>
                            <button type=\"button\" id=\"RelatedProduct-delete";
                // line 92
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
                echo "\" class=\"btn text-end RelatedProduct-view";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
                echo "\">
                                ";
                // line 93
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("related_product.remove_product"), "html", null, true);
                echo "
                            </button>
                        </div>
                    ";
            } else {
                // line 97
                echo "                        <div>
                            <a href=\"\" id=\"RelatedProduct-product_image_link";
                // line 98
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
                echo "\" class=\"RelatedProduct-view";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
                echo " d-none\" >
                                <img src=\"\" id=\"RelatedProduct-product_image_img";
                // line 99
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
                echo "\" style=\"max-width: 100px;margin-right: 10px;\" />
                            </a>
                            <span id=\"RelatedProduct-product_name";
                // line 101
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
                echo "\" class=\"RelatedProduct-view";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
                echo " d-none\" ></span>
                            ";
                // line 102
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RelatedProductForm"], "ChildProduct", [], "any", false, false, true, 102), 102, $this->source), 'widget', ["attr" => ["style" => "display: none", "class" => "child-product"]]);
                echo "
                            <br>
                            <span id=\"RelatedProduct-product_code";
                // line 104
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
                echo "\" class=\"RelatedProduct-view";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
                echo " d-none\"></span>
                        </div>
                        <div>
                            <button type=\"button\" id=\"RelatedProduct-search";
                // line 107
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
                echo "\" class=\"btn btn-ec-regular\" data-bs-toggle=\"modal\" data-bs-target=\"#RelatedProductSearchProductModal\" data-id=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
                echo "\">
                                ";
                // line 108
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("related_product.select_product"), "html", null, true);
                echo "
                            </button>
                            <button  type=\"button\" id=\"RelatedProduct-delete";
                // line 110
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
                echo "\" class=\"btn text-end RelatedProduct-view";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
                echo " d-none\" data-id=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
                echo "\">
                                ";
                // line 111
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("related_product.remove_product"), "html", null, true);
                echo "
                            </button>
                        </div>
                    ";
            }
            // line 115
            echo "                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-3\">
                    <label>
                        ";
            // line 120
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProductForm"], "content", [], "any", false, false, true, 120), "vars", [], "any", false, false, true, 120), "label", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
            echo "
                    </label>
                </div>
                <div class=\"col-9\">
                    <div>
                        ";
            // line 125
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RelatedProductForm"], "content", [], "any", false, false, true, 125), 125, $this->source), 'widget', ["attr" => ["rows" => 8]]);
            echo "
                        ";
            // line 126
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RelatedProductForm"], "content", [], "any", false, false, true, 126), 126, $this->source), 'errors');
            echo "
                    </div>
                </div>
            </div>
            <hr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['RelatedProductForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "            <input type=\"hidden\" id=\"RelatedProductDataId\" value=\"\">
        </div>
    </div>
</div>

";
        // line 137
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 137, $this->source); })()), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 138
        echo "
<div class=\"modal fade\" id=\"RelatedProductSearchProductModal\" tabindex=\"-1\" role=\"dialog\"
     aria-labelledby=\"RelatedProductSearchProductModal\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("related_product.modal.product_search.title"), "html", null, true);
        echo "</h5>
                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"mb-3\">
                    ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 149, $this->source); })()), "id", [], "any", false, false, true, 149), 149, $this->source), 'widget', ["attr" => ["placeholder" => "related_product.modal.product_search.input_name"]]);
        echo "
                </div>
                <div class=\"mb-3\">
                    ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 152, $this->source); })()), "category_id", [], "any", false, false, true, 152), 152, $this->source), 'widget');
        echo "
                </div>
                <div class=\"mb-3\">
                    <button type=\"button\" id=\"RelatedProductSearchButton\" class=\"btn btn-ec-conversion\" >
                        ";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.execute"), "html", null, true);
        echo "
                    </button>
                </div>
                <div id=\"RelatedProductSearchResult\">
                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "RelatedProduct42/Resource/template/admin/related_product.twig";
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
        return array (  380 => 156,  373 => 152,  367 => 149,  359 => 144,  351 => 138,  349 => 137,  342 => 132,  322 => 126,  318 => 125,  310 => 120,  303 => 115,  296 => 111,  288 => 110,  283 => 108,  277 => 107,  269 => 104,  264 => 102,  258 => 101,  253 => 99,  247 => 98,  244 => 97,  237 => 93,  229 => 92,  224 => 90,  218 => 89,  213 => 86,  206 => 84,  202 => 83,  196 => 82,  191 => 80,  183 => 79,  176 => 77,  168 => 76,  165 => 75,  163 => 74,  156 => 70,  151 => 67,  148 => 66,  145 => 65,  128 => 64,  122 => 61,  103 => 45,  93 => 38,  86 => 34,  82 => 33,  57 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 This file is part of the Related Product plugin

 Copyright(c) 2000-2016 EC-CUBE CO.,LTD. All Rights Reserved.
 http://www.ec-cube.co.jp/

 For the full copyright and license information, please view the LICENSE
 file that was distributed with this source code.
#}

<script>
\$(function() {
    \$('#plugin_related_product_related_product').appendTo('.c-contentsArea__primaryCol');
    \$('#plugin_related_product_related_product').removeClass('d-none');

    var dataId = null;

    \$(document).on('click', 'button[id^=\"RelatedProduct-delete\"]', function() {
        var data = \$(this).data();
        \$('.RelatedProduct-view' + data.id ).addClass('d-none');
        \$('#admin_product_RelatedProducts_' + data.id + '_ChildProduct').val('');
        \$('#admin_product_RelatedProducts_' + data.id + '_content' ).val('');
        \$('#RelatedProductSearchResult').children().remove();
    });

    \$(document).on(\"click\", 'button[id^=\"RelatedProduct-search\"]', function () {
        dataId = \$(this).attr(\"data-id\");
        \$(\"#RelatedProductDataId\").val(dataId);
        \$(\"#RelatedProductSearchResult\").children().remove();
    });

    \$(\"#RelatedProductSearchButton\").on(\"click\", function () {
        var formIdVal = \$(\"#{{ searchForm.id.vars.id }}\").val();
        var formCatIdVal = \$(\"#{{ searchForm.category_id.vars.id }}\").val();
        var data = {
            id: formIdVal,
            category_id: formCatIdVal,
            product_id: {{ Product.id ? Product.id : 0 }}
        };
        \$(\"#RelatedProductSearchResult\")
                .children()
                .remove();
        \$.ajax({
            type: \"POST\",
            url: \"{{ url('admin_related_product_search') }}\",
            data: data,
            success: function(data){
                \$(\"#RelatedProductSearchResult\").append(data);
            },
            error: function() {
                alert('product search failed.');
            }
        });
    });
});
</script>

<div id=\"plugin_related_product_related_product\" class=\"d-none\">
    <div class=\"card rounded border-0 mb-4\">
        <div class=\"card-header\">
            <span class=\"card-title\">{{ form.RelatedProducts.vars.label|trans }}</span>
        </div>
        <div class=\"card-body\">
            {% for RelatedProductForm in form.RelatedProducts %}
            {% set RelatedProduct = RelatedProductForm.vars.value %}
            {% set ChildProduct = RelatedProduct.ChildProduct %}
            <div class=\"row mb-2\">
                <div class=\"col-3\">
                    <label>
                        {{ RelatedProductForm.ChildProduct.vars.label }}
                    </label>
                </div>
                <div class=\"col-9\">
                    {% if ChildProduct %}
                        <div>
                            <a href=\"{{ url('admin_product_product_edit', { id : ChildProduct.id }) }}\" id=\"RelatedProduct-product_image_link{{ loop.index0 }}\" class=\"RelatedProduct-view{{ loop.index0 }}\" >
                                <img src=\"{{ asset(ChildProduct.mainFileName|no_image_product, 'save_image') }}\" id=\"RelatedProduct-product_image_img{{ loop.index0 }}\" style=\"max-width: 100px;margin-right: 10px;\" />
                            </a>
                            <span id=\"RelatedProduct-product_name{{ loop.index0 }}\" class=\"RelatedProduct-view{{ loop.index0 }}\" style=\"margin-right: 10px;\">{{ ChildProduct.name }}</span>
                            {{ form_widget(RelatedProductForm.ChildProduct, { attr: { style: 'display: none', class: 'child-product' } }) }}
                            <br>
                            <span class=\"RelatedProduct-view{{ loop.index0 }}\" id=\"RelatedProduct-product_code{{ loop.index0 }}\">
                        {{ ChildProduct.code_min }}
                                {% if ChildProduct.code_min != ChildProduct.code_max %} ～ {{ ChildProduct.code_max }}
                                {% endif %}
                            </span>
                        </div>
                        <div>
                            <button type=\"button\" id=\"RelatedProduct-search{{ loop.index0 }}\" class=\"btn btn-ec-regular\" data-bs-toggle=\"modal\" data-bs-target=\"#RelatedProductSearchProductModal\" data-id=\"{{ loop.index0 }}\">
                                {{ 'related_product.select_product'|trans }}
                            </button>
                            <button type=\"button\" id=\"RelatedProduct-delete{{ loop.index0 }}\" class=\"btn text-end RelatedProduct-view{{ loop.index0 }}\" data-id=\"{{ loop.index0 }}\">
                                {{ 'related_product.remove_product'|trans }}
                            </button>
                        </div>
                    {% else %}
                        <div>
                            <a href=\"\" id=\"RelatedProduct-product_image_link{{ loop.index0 }}\" class=\"RelatedProduct-view{{ loop.index0 }} d-none\" >
                                <img src=\"\" id=\"RelatedProduct-product_image_img{{ loop.index0 }}\" style=\"max-width: 100px;margin-right: 10px;\" />
                            </a>
                            <span id=\"RelatedProduct-product_name{{ loop.index0 }}\" class=\"RelatedProduct-view{{ loop.index0 }} d-none\" ></span>
                            {{ form_widget(RelatedProductForm.ChildProduct, { attr: { style: 'display: none' , class: 'child-product' } }) }}
                            <br>
                            <span id=\"RelatedProduct-product_code{{ loop.index0 }}\" class=\"RelatedProduct-view{{ loop.index0 }} d-none\"></span>
                        </div>
                        <div>
                            <button type=\"button\" id=\"RelatedProduct-search{{ loop.index0 }}\" class=\"btn btn-ec-regular\" data-bs-toggle=\"modal\" data-bs-target=\"#RelatedProductSearchProductModal\" data-id=\"{{ loop.index0 }}\">
                                {{ 'related_product.select_product'|trans }}
                            </button>
                            <button  type=\"button\" id=\"RelatedProduct-delete{{ loop.index0 }}\" class=\"btn text-end RelatedProduct-view{{ loop.index0 }} d-none\" data-id=\"{{ loop.index0 }}\">
                                {{ 'related_product.remove_product'|trans }}
                            </button>
                        </div>
                    {% endif %}
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-3\">
                    <label>
                        {{ RelatedProductForm.content.vars.label }}
                    </label>
                </div>
                <div class=\"col-9\">
                    <div>
                        {{ form_widget(RelatedProductForm.content, { 'attr': { 'rows': 8 }}) }}
                        {{ form_errors(RelatedProductForm.content) }}
                    </div>
                </div>
            </div>
            <hr>
            {% endfor %}
            <input type=\"hidden\" id=\"RelatedProductDataId\" value=\"\">
        </div>
    </div>
</div>

{% form_theme searchForm '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

<div class=\"modal fade\" id=\"RelatedProductSearchProductModal\" tabindex=\"-1\" role=\"dialog\"
     aria-labelledby=\"RelatedProductSearchProductModal\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">{{ 'related_product.modal.product_search.title'|trans }}</h5>
                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"mb-3\">
                    {{ form_widget(searchForm.id, { attr : { placeholder : 'related_product.modal.product_search.input_name' } } ) }}
                </div>
                <div class=\"mb-3\">
                    {{ form_widget(searchForm.category_id) }}
                </div>
                <div class=\"mb-3\">
                    <button type=\"button\" id=\"RelatedProductSearchButton\" class=\"btn btn-ec-conversion\" >
                        {{ 'admin.common.execute'|trans }}
                    </button>
                </div>
                <div id=\"RelatedProductSearchResult\">
                </div>
            </div>
        </div>
    </div>
</div>

", "RelatedProduct42/Resource/template/admin/related_product.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\RelatedProduct42\\Resource\\template\\admin\\related_product.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 64, "set" => 65, "if" => 74, "form_theme" => 137);
        static $filters = array("escape" => 33, "trans" => 61, "no_image_product" => 77);
        static $functions = array("url" => 45, "asset" => 77, "form_widget" => 80, "form_errors" => 126);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if', 'form_theme'],
                ['escape', 'trans', 'no_image_product'],
                ['url', 'asset', 'form_widget', 'form_errors']
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
