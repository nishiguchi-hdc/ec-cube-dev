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

/* EccubePaymentLite42/Resource/template/default/Shopping/specified_commercial_transactions.twig */
class __TwigTemplate_9b23cdb77efaef648a7405ba4c13f405 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Shopping/specified_commercial_transactions.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Shopping/specified_commercial_transactions.twig"));

        // line 1
        echo "<script>
    \$(function (){
        \$('.ec-orderPayment:first').append(
            /**---▼①の改修案---*/
            '<div class=\"ec-rectHeading\">' +
            '<h2>各回 購入個数について</h2>' +
            '</div>' +
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ProductOrderItems"]) || array_key_exists("ProductOrderItems", $context) ? $context["ProductOrderItems"] : (function () { throw new RuntimeError('Variable "ProductOrderItems" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["Items"]) {
            // line 9
            echo "                ";
            $context["product"] = twig_get_attribute($this->env, $this->source, $context["Items"], "product", [], "any", false, false, true, 9);
            // line 10
            echo "                ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 10, $this->source); })()), "free_description_about_quantity", [], "any", false, false, true, 10))) {
                // line 11
                echo "                ";
                $context["free_description_about_quantity"] = twig_escape_filter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 11, $this->source); })()), "free_description_about_quantity", [], "any", false, false, true, 11), 11, $this->source), ["
" => "<br>", "
" => "<br>", "" => "<br>"]), "js");
                // line 12
                echo "                ";
                if ((( !(null === twig_get_attribute($this->env, $this->source, $context["Items"], "productClass", [], "any", false, false, true, 12)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Items"], "productClass", [], "any", false, false, true, 12), "classCategory1", [], "any", false, false, true, 12)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Items"], "productClass", [], "any", false, false, true, 12), "classCategory2", [], "any", false, false, true, 12))) {
                    // line 13
                    echo "            '<p>";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                    echo " ( '+
                ";
                    // line 14
                    if (( !(null === twig_get_attribute($this->env, $this->source, $context["Items"], "productClass", [], "any", false, false, true, 14)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Items"], "productClass", [], "any", false, false, true, 14), "classCategory1", [], "any", false, false, true, 14))) {
                        // line 15
                        echo "            '<span>";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Items"], "productClass", [], "any", false, false, true, 15), "classCategory1", [], "any", false, false, true, 15), "className", [], "any", false, false, true, 15), "name", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                        echo " : ";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Items"], "productClass", [], "any", false, false, true, 15), "classCategory1", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                        echo " </span>' +
                ";
                    }
                    // line 17
                    echo "                ";
                    if (( !(null === twig_get_attribute($this->env, $this->source, $context["Items"], "productClass", [], "any", false, false, true, 17)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Items"], "productClass", [], "any", false, false, true, 17), "classCategory2", [], "any", false, false, true, 17))) {
                        // line 18
                        echo "            '<span> / ";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Items"], "productClass", [], "any", false, false, true, 18), "classCategory2", [], "any", false, false, true, 18), "className", [], "any", false, false, true, 18), "name", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                        echo " ：";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Items"], "productClass", [], "any", false, false, true, 18), "classCategory2", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                        echo " )</span>' +
                ";
                    }
                    // line 20
                    echo "            '<span> : ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["free_description_about_quantity"]) || array_key_exists("free_description_about_quantity", $context) ? $context["free_description_about_quantity"] : (function () { throw new RuntimeError('Variable "free_description_about_quantity" does not exist.', 20, $this->source); })()), 20, $this->source), "html", null, true);
                    echo "</span>'+
            '</p>' +

                ";
                } else {
                    // line 24
                    echo "            '<p> ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                    echo " : ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["free_description_about_quantity"]) || array_key_exists("free_description_about_quantity", $context) ? $context["free_description_about_quantity"] : (function () { throw new RuntimeError('Variable "free_description_about_quantity" does not exist.', 24, $this->source); })()), 24, $this->source), "html", null, true);
                    echo " '+
                ";
                }
                // line 26
                echo "                ";
            }
            // line 27
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['Items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            '<table class=\"table table-sm\">' +
            ' <thead>' +
            '<tr>' +
            '<th class=\"border-top-0 pl-3 pt-2 pb-2\">分量/回数</th>' +
            '<th class=\"border-top-0 pt-2 pb-2\">商品名</th>' +
            '<th class=\"border-top-0 pt-2 pb-2\">数量 </th>' +
            '<th class=\"border-top-0 pt-2 pb-2\">合計</th>' +
            '' +
            '</tr>' +
            '</thead>' +
                ";
        // line 38
        $context["total_quantity"] = 0;
        // line 39
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["limitCycle"]) || array_key_exists("limitCycle", $context) ? $context["limitCycle"] : (function () { throw new RuntimeError('Variable "limitCycle" does not exist.', 39, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 40
            echo "            '<tbody>' +
                ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 41, $this->source); })()), "shippings", [], "any", false, false, true, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["shipping"]) {
                // line 42
                echo "                ";
                $context["isShowReducedTaxMess"] = false;
                // line 43
                echo "                ";
                $context["countItem"] = twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "productOrderItems", [], "any", false, false, true, 43), 43, $this->source));
                // line 44
                echo "                ";
                if (((isset($context["countItem"]) || array_key_exists("countItem", $context) ? $context["countItem"] : (function () { throw new RuntimeError('Variable "countItem" does not exist.', 44, $this->source); })()) > 1)) {
                    // line 45
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["shipping"], "productOrderItems", [], "any", false, false, true, 45));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["orderItem"]) {
                        // line 46
                        echo "                ";
                        $context["total_quantity"] = (twig_get_attribute($this->env, $this->source, $context["orderItem"], "quantity", [], "any", false, false, true, 46) + (isset($context["total_quantity"]) || array_key_exists("total_quantity", $context) ? $context["total_quantity"] : (function () { throw new RuntimeError('Variable "total_quantity" does not exist.', 46, $this->source); })()));
                        // line 47
                        echo "                ";
                        $context["idx"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 47);
                        // line 48
                        echo "            '<tr>' +
                ";
                        // line 49
                        if ((((isset($context["countItem"]) || array_key_exists("countItem", $context) ? $context["countItem"] : (function () { throw new RuntimeError('Variable "countItem" does not exist.', 49, $this->source); })()) > 1) && ((isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 49, $this->source); })()) == 0))) {
                            // line 50
                            echo "            '<td style=\"text-align:center; vertical-align:middle;\" ";
                            if (((isset($context["countItem"]) || array_key_exists("countItem", $context) ? $context["countItem"] : (function () { throw new RuntimeError('Variable "countItem" does not exist.', 50, $this->source); })()) > 1)) {
                                echo " rowspan=\"";
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["countItem"]) || array_key_exists("countItem", $context) ? $context["countItem"] : (function () { throw new RuntimeError('Variable "countItem" does not exist.', 50, $this->source); })()), 50, $this->source), "html", null, true);
                                echo "\"";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 50, $this->source), "html", null, true);
                            echo "</td>' +
                ";
                        } else {
                            // line 52
                            echo "            '' +
                ";
                        }
                        // line 54
                        echo "            '<td class=\"align-middle\" >' +
            '<p>";
                        // line 55
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                        echo " </p>' +
                ";
                        // line 56
                        if (( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 56)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 56), "classCategory1", [], "any", false, false, true, 56))) {
                            // line 57
                            echo "            '<p>";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 57), "classCategory1", [], "any", false, false, true, 57), "className", [], "any", false, false, true, 57), "name", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                            echo "：";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 57), "classCategory1", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                            echo "</p>' +
                ";
                        }
                        // line 59
                        echo "                ";
                        if (( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 59)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 59), "classCategory2", [], "any", false, false, true, 59))) {
                            // line 60
                            echo "            '<p>";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 60), "classCategory2", [], "any", false, false, true, 60), "className", [], "any", false, false, true, 60), "name", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
                            echo "：";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 60), "classCategory2", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
                            echo "</p>' +
                ";
                        }
                        // line 62
                        echo "            '</td>' +
            '<td class=\"align-middle\" >";
                        // line 63
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "quantity", [], "any", false, false, true, 63), 63, $this->source)), "html", null, true);
                        echo "</td>' +
                ";
                        // line 64
                        if ((((isset($context["countItem"]) || array_key_exists("countItem", $context) ? $context["countItem"] : (function () { throw new RuntimeError('Variable "countItem" does not exist.', 64, $this->source); })()) > 1) && ((isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 64, $this->source); })()) == 0))) {
                            // line 65
                            echo "            '<td style=\"text-align:center; vertical-align:middle;\" ";
                            if (((isset($context["countItem"]) || array_key_exists("countItem", $context) ? $context["countItem"] : (function () { throw new RuntimeError('Variable "countItem" does not exist.', 65, $this->source); })()) > 1)) {
                                echo " rowspan=\"";
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["countItem"]) || array_key_exists("countItem", $context) ? $context["countItem"] : (function () { throw new RuntimeError('Variable "countItem" does not exist.', 65, $this->source); })()), 65, $this->source), "html", null, true);
                                echo "\"";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["total_quantity_item"]) || array_key_exists("total_quantity_item", $context) ? $context["total_quantity_item"] : (function () { throw new RuntimeError('Variable "total_quantity_item" does not exist.', 65, $this->source); })()), 65, $this->source)), "html", null, true);
                            echo "</td>' +
                ";
                        } else {
                            // line 67
                            echo "            '' +
                ";
                        }
                        // line 69
                        echo "            '</tr>' +
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 71
                    echo "                ";
                } else {
                    // line 72
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["shipping"], "productOrderItems", [], "any", false, false, true, 72));
                    foreach ($context['_seq'] as $context["_key"] => $context["orderItem"]) {
                        // line 73
                        echo "                ";
                        $context["total_quantity"] = (twig_get_attribute($this->env, $this->source, $context["orderItem"], "quantity", [], "any", false, false, true, 73) + (isset($context["total_quantity"]) || array_key_exists("total_quantity", $context) ? $context["total_quantity"] : (function () { throw new RuntimeError('Variable "total_quantity" does not exist.', 73, $this->source); })()));
                        // line 74
                        echo "            '<tr>' +
            '<td style=\"text-align:center; vertical-align:middle;\">";
                        // line 75
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 75, $this->source), "html", null, true);
                        echo "</td>' +
            '<td class=\"align-middle\" >' +
            '<p>";
                        // line 77
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                        echo " </p>' +
                ";
                        // line 78
                        if (( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 78)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 78), "classCategory1", [], "any", false, false, true, 78))) {
                            // line 79
                            echo "            '<p>";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 79), "classCategory1", [], "any", false, false, true, 79), "className", [], "any", false, false, true, 79), "name", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                            echo "：";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 79), "classCategory1", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                            echo "</p>' +
                ";
                        }
                        // line 81
                        echo "                ";
                        if (( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 81)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 81), "classCategory2", [], "any", false, false, true, 81))) {
                            // line 82
                            echo "            '<p>";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 82), "classCategory2", [], "any", false, false, true, 82), "className", [], "any", false, false, true, 82), "name", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                            echo "：";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 82), "classCategory2", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                            echo "</p>' +
                ";
                        }
                        // line 84
                        echo "            '</td>' +
            '<td class=\"align-middle\" >";
                        // line 85
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "quantity", [], "any", false, false, true, 85), 85, $this->source)), "html", null, true);
                        echo "</td>' +
            '<td class=\"align-middle\" >";
                        // line 86
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "quantity", [], "any", false, false, true, 86), 86, $this->source)), "html", null, true);
                        echo "</td>' +
            '</tr>' +
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 89
                    echo "                ";
                }
                // line 90
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "            '</tbody>' +
            '<tbody>' +
            '<tr>' +
            '<td colspan=\"2\" class=\"align-middle\" > ";
        // line 97
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["limitCycle"]) || array_key_exists("limitCycle", $context) ? $context["limitCycle"] : (function () { throw new RuntimeError('Variable "limitCycle" does not exist.', 97, $this->source); })()), 97, $this->source), "html", null, true);
        echo "回分の総分量</td>' +
            '<td class=\"align-middle\" > ";
        // line 98
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["total_quantity"]) || array_key_exists("total_quantity", $context) ? $context["total_quantity"] : (function () { throw new RuntimeError('Variable "total_quantity" does not exist.', 98, $this->source); })()), 98, $this->source)), "html", null, true);
        echo "</td>' +
            '<td class=\"align-middle\" > ";
        // line 99
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["total_quantity"]) || array_key_exists("total_quantity", $context) ? $context["total_quantity"] : (function () { throw new RuntimeError('Variable "total_quantity" does not exist.', 99, $this->source); })()), 99, $this->source)), "html", null, true);
        echo "</td>' +
            '</tr>'+
            '</tbody>' +
            '</table>' +

            /*---▼②の改修案---*/

            '<div class=\"ec-rectHeading\">' +
            '<h2>各回 お支払い金額について</h2>' +
            '</div>' +
                ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ProductOrderItems"]) || array_key_exists("ProductOrderItems", $context) ? $context["ProductOrderItems"] : (function () { throw new RuntimeError('Variable "ProductOrderItems" does not exist.', 109, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["Items"]) {
            // line 110
            echo "                ";
            $context["product"] = twig_get_attribute($this->env, $this->source, $context["Items"], "product", [], "any", false, false, true, 110);
            // line 111
            echo "                ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 111, $this->source); })()), "free_description_about_selling_price", [], "any", false, false, true, 111))) {
                // line 112
                echo "                ";
                $context["free_description_about_selling_price"] = twig_escape_filter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 112, $this->source); })()), "free_description_about_selling_price", [], "any", false, false, true, 112), 112, $this->source), ["
" => "<br>", "
" => "<br>", "" => "<br>"]), "js");
                // line 113
                echo "            '<p>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 113, $this->source); })()), "name", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["free_description_about_selling_price"]) || array_key_exists("free_description_about_selling_price", $context) ? $context["free_description_about_selling_price"] : (function () { throw new RuntimeError('Variable "free_description_about_selling_price" does not exist.', 113, $this->source); })()), 113, $this->source), "html", null, true);
                echo "</p>'+
                ";
            }
            // line 115
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['Items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "
            '<table class=\"table table-sm\">' +
            ' <thead>' +
            '<tr>' +
            '<th class=\"border-top-0 pl-3 pt-2 pb-2\">分量/回数</th>' +
            '<th class=\"border-top-0 pt-2 pb-2\">商品名</th>' +
            '<th class=\"border-top-0 pt-2 pb-2\">価格</th>' +
            '<th class=\"border-top-0 pt-2 pb-2\">送料 </th>' +
            '<th class=\"border-top-0 pt-2 pb-2\">合計</th>' +
            '' +
            '</tr>' +
            '</thead>' +
                ";
        // line 128
        $context["total_price"] = 0;
        // line 129
        echo "                ";
        $context["total_shipping_price"] = 0;
        // line 130
        echo "                ";
        $context["total_sub"] = 0;
        // line 131
        echo "
                ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["limitCycle"]) || array_key_exists("limitCycle", $context) ? $context["limitCycle"] : (function () { throw new RuntimeError('Variable "limitCycle" does not exist.', 132, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 133
            echo "                ";
            if (($context["i"] == 1)) {
                // line 134
                echo "                ";
                $context["total_price"] = (twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 134, $this->source); })()), "payment_total", [], "any", false, false, true, 134) + (isset($context["total_price"]) || array_key_exists("total_price", $context) ? $context["total_price"] : (function () { throw new RuntimeError('Variable "total_price" does not exist.', 134, $this->source); })()));
                // line 135
                echo "                ";
            } elseif (($context["i"] == 2)) {
                // line 136
                echo "                ";
                $context["total_price"] = ((((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 136, $this->source); })()), "payment_total", [], "any", false, false, true, 136) + (isset($context["total_price"]) || array_key_exists("total_price", $context) ? $context["total_price"] : (function () { throw new RuntimeError('Variable "total_price" does not exist.', 136, $this->source); })())) + twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 136, $this->source); })()), "use_point", [], "any", false, false, true, 136)) + (isset($context["first_discount"]) || array_key_exists("first_discount", $context) ? $context["first_discount"] : (function () { throw new RuntimeError('Variable "first_discount" does not exist.', 136, $this->source); })())) - (isset($context["second_discount"]) || array_key_exists("second_discount", $context) ? $context["second_discount"] : (function () { throw new RuntimeError('Variable "second_discount" does not exist.', 136, $this->source); })()));
                // line 137
                echo "                ";
            } elseif (($context["i"] == 3)) {
                // line 138
                echo "                ";
                $context["total_price"] = ((((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 138, $this->source); })()), "payment_total", [], "any", false, false, true, 138) + (isset($context["total_price"]) || array_key_exists("total_price", $context) ? $context["total_price"] : (function () { throw new RuntimeError('Variable "total_price" does not exist.', 138, $this->source); })())) + twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 138, $this->source); })()), "use_point", [], "any", false, false, true, 138)) + (isset($context["first_discount"]) || array_key_exists("first_discount", $context) ? $context["first_discount"] : (function () { throw new RuntimeError('Variable "first_discount" does not exist.', 138, $this->source); })())) - (isset($context["third_discount"]) || array_key_exists("third_discount", $context) ? $context["third_discount"] : (function () { throw new RuntimeError('Variable "third_discount" does not exist.', 138, $this->source); })()));
                // line 139
                echo "                ";
            } elseif (($context["i"] == 4)) {
                // line 140
                echo "                ";
                $context["total_price"] = ((((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 140, $this->source); })()), "payment_total", [], "any", false, false, true, 140) + (isset($context["total_price"]) || array_key_exists("total_price", $context) ? $context["total_price"] : (function () { throw new RuntimeError('Variable "total_price" does not exist.', 140, $this->source); })())) + twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 140, $this->source); })()), "use_point", [], "any", false, false, true, 140)) + (isset($context["first_discount"]) || array_key_exists("first_discount", $context) ? $context["first_discount"] : (function () { throw new RuntimeError('Variable "first_discount" does not exist.', 140, $this->source); })())) - (isset($context["forth_discount"]) || array_key_exists("forth_discount", $context) ? $context["forth_discount"] : (function () { throw new RuntimeError('Variable "forth_discount" does not exist.', 140, $this->source); })()));
                // line 141
                echo "                ";
            } else {
                // line 142
                echo "                ";
                $context["total_price"] = ((((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 142, $this->source); })()), "payment_total", [], "any", false, false, true, 142) + (isset($context["total_price"]) || array_key_exists("total_price", $context) ? $context["total_price"] : (function () { throw new RuntimeError('Variable "total_price" does not exist.', 142, $this->source); })())) + twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 142, $this->source); })()), "use_point", [], "any", false, false, true, 142)) + (isset($context["first_discount"]) || array_key_exists("first_discount", $context) ? $context["first_discount"] : (function () { throw new RuntimeError('Variable "first_discount" does not exist.', 142, $this->source); })())) - (isset($context["fifth_discount"]) || array_key_exists("fifth_discount", $context) ? $context["fifth_discount"] : (function () { throw new RuntimeError('Variable "fifth_discount" does not exist.', 142, $this->source); })()));
                // line 143
                echo "                ";
            }
            // line 144
            echo "                ";
            $context["total_shipping_price"] = (twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 144, $this->source); })()), "deliveryFeeTotal", [], "any", false, false, true, 144) + (isset($context["total_shipping_price"]) || array_key_exists("total_shipping_price", $context) ? $context["total_shipping_price"] : (function () { throw new RuntimeError('Variable "total_shipping_price" does not exist.', 144, $this->source); })()));
            // line 145
            echo "
            '<tbody>' +
                ";
            // line 147
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 147, $this->source); })()), "shippings", [], "any", false, false, true, 147));
            foreach ($context['_seq'] as $context["_key"] => $context["shipping"]) {
                // line 148
                echo "                ";
                $context["isShowReducedTaxMess"] = false;
                // line 149
                echo "                ";
                $context["countItem"] = twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "productOrderItems", [], "any", false, false, true, 149), 149, $this->source));
                // line 150
                echo "                ";
                if (((isset($context["countItem"]) || array_key_exists("countItem", $context) ? $context["countItem"] : (function () { throw new RuntimeError('Variable "countItem" does not exist.', 150, $this->source); })()) > 1)) {
                    // line 151
                    echo "
                ";
                    // line 152
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["shipping"], "productOrderItems", [], "any", false, false, true, 152));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["orderItem"]) {
                        // line 153
                        echo "                ";
                        $context["total_sub"] = ((twig_get_attribute($this->env, $this->source, $context["orderItem"], "priceIncTax", [], "any", false, false, true, 153) * twig_get_attribute($this->env, $this->source, $context["orderItem"], "quantity", [], "any", false, false, true, 153)) + (isset($context["total_sub"]) || array_key_exists("total_sub", $context) ? $context["total_sub"] : (function () { throw new RuntimeError('Variable "total_sub" does not exist.', 153, $this->source); })()));
                        // line 154
                        echo "                ";
                        $context["idx"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 154);
                        // line 155
                        echo "
            '<tr>' +
                ";
                        // line 157
                        if ((((isset($context["countItem"]) || array_key_exists("countItem", $context) ? $context["countItem"] : (function () { throw new RuntimeError('Variable "countItem" does not exist.', 157, $this->source); })()) > 1) && ((isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 157, $this->source); })()) == 1))) {
                            // line 158
                            echo "            '<td style=\"text-align:center; vertical-align:middle;\" ";
                            if (((isset($context["countItem"]) || array_key_exists("countItem", $context) ? $context["countItem"] : (function () { throw new RuntimeError('Variable "countItem" does not exist.', 158, $this->source); })()) > 1)) {
                                echo " rowspan=\"";
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["countItem"]) || array_key_exists("countItem", $context) ? $context["countItem"] : (function () { throw new RuntimeError('Variable "countItem" does not exist.', 158, $this->source); })()), 158, $this->source), "html", null, true);
                                echo "\"";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 158, $this->source), "html", null, true);
                            echo " </td>' +
                ";
                        } else {
                            // line 160
                            echo "            '' +
                ";
                        }
                        // line 162
                        echo "            '<td class=\"align-middle\" >";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
                        echo "</td>' +
            '<td class=\"align-middle\" >";
                        // line 163
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((twig_get_attribute($this->env, $this->source, $context["orderItem"], "priceIncTax", [], "any", false, false, true, 163) * twig_get_attribute($this->env, $this->source, $context["orderItem"], "quantity", [], "any", false, false, true, 163))), "html", null, true);
                        echo "</td>' +
                ";
                        // line 164
                        if ((((isset($context["countItem"]) || array_key_exists("countItem", $context) ? $context["countItem"] : (function () { throw new RuntimeError('Variable "countItem" does not exist.', 164, $this->source); })()) > 1) && ((isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 164, $this->source); })()) == 1))) {
                            // line 165
                            echo "            '<td style=\"text-align:center; vertical-align:middle;\" ";
                            if (((isset($context["countItem"]) || array_key_exists("countItem", $context) ? $context["countItem"] : (function () { throw new RuntimeError('Variable "countItem" does not exist.', 165, $this->source); })()) > 1)) {
                                echo " rowspan=\"";
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["countItem"]) || array_key_exists("countItem", $context) ? $context["countItem"] : (function () { throw new RuntimeError('Variable "countItem" does not exist.', 165, $this->source); })()), 165, $this->source), "html", null, true);
                                echo "\"";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 165, $this->source); })()), "deliveryFeeTotal", [], "any", false, false, true, 165), 165, $this->source)), "html", null, true);
                            echo "</td>' +
                ";
                        } else {
                            // line 167
                            echo "            '' +
                ";
                        }
                        // line 169
                        echo "
                ";
                        // line 170
                        if ((((isset($context["countItem"]) || array_key_exists("countItem", $context) ? $context["countItem"] : (function () { throw new RuntimeError('Variable "countItem" does not exist.', 170, $this->source); })()) > 1) && ((isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 170, $this->source); })()) == 1))) {
                            // line 171
                            echo "                ";
                            if (($context["i"] == 1)) {
                                // line 172
                                echo "            '<td style=\"text-align:center; vertical-align:middle;\" ";
                                if (((isset($context["countItem"]) || array_key_exists("countItem", $context) ? $context["countItem"] : (function () { throw new RuntimeError('Variable "countItem" does not exist.', 172, $this->source); })()) > 1)) {
                                    echo " rowspan=\"";
                                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["countItem"]) || array_key_exists("countItem", $context) ? $context["countItem"] : (function () { throw new RuntimeError('Variable "countItem" does not exist.', 172, $this->source); })()), 172, $this->source), "html", null, true);
                                    echo "\"";
                                }
                                echo ">";
                                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 172, $this->source); })()), "payment_total", [], "any", false, false, true, 172), 172, $this->source)), "html", null, true);
                                echo "</td>' +
                ";
                            } elseif ((                            // line 173
$context["i"] == 2)) {
                                // line 174
                                echo "            '<td style=\"text-align:center; vertical-align:middle;\" ";
                                if (((isset($context["countItem"]) || array_key_exists("countItem", $context) ? $context["countItem"] : (function () { throw new RuntimeError('Variable "countItem" does not exist.', 174, $this->source); })()) > 1)) {
                                    echo " rowspan=\"";
                                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["countItem"]) || array_key_exists("countItem", $context) ? $context["countItem"] : (function () { throw new RuntimeError('Variable "countItem" does not exist.', 174, $this->source); })()), 174, $this->source), "html", null, true);
                                    echo "\"";
                                }
                                echo ">";
                                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 174, $this->source); })()), "payment_total", [], "any", false, false, true, 174) + twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 174, $this->source); })()), "use_point", [], "any", false, false, true, 174)) + (isset($context["first_discount"]) || array_key_exists("first_discount", $context) ? $context["first_discount"] : (function () { throw new RuntimeError('Variable "first_discount" does not exist.', 174, $this->source); })())) - (isset($context["second_discount"]) || array_key_exists("second_discount", $context) ? $context["second_discount"] : (function () { throw new RuntimeError('Variable "second_discount" does not exist.', 174, $this->source); })()))), "html", null, true);
                                echo "</td>' +
                ";
                            } elseif ((                            // line 175
$context["i"] == 3)) {
                                // line 176
                                echo "            '<td style=\"text-align:center; vertical-align:middle;\" ";
                                if (((isset($context["countItem"]) || array_key_exists("countItem", $context) ? $context["countItem"] : (function () { throw new RuntimeError('Variable "countItem" does not exist.', 176, $this->source); })()) > 1)) {
                                    echo " rowspan=\"";
                                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["countItem"]) || array_key_exists("countItem", $context) ? $context["countItem"] : (function () { throw new RuntimeError('Variable "countItem" does not exist.', 176, $this->source); })()), 176, $this->source), "html", null, true);
                                    echo "\"";
                                }
                                echo ">";
                                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 176, $this->source); })()), "payment_total", [], "any", false, false, true, 176) + twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 176, $this->source); })()), "use_point", [], "any", false, false, true, 176)) + (isset($context["first_discount"]) || array_key_exists("first_discount", $context) ? $context["first_discount"] : (function () { throw new RuntimeError('Variable "first_discount" does not exist.', 176, $this->source); })())) - (isset($context["third_discount"]) || array_key_exists("third_discount", $context) ? $context["third_discount"] : (function () { throw new RuntimeError('Variable "third_discount" does not exist.', 176, $this->source); })()))), "html", null, true);
                                echo "</td>' +
                ";
                            } elseif ((                            // line 177
$context["i"] == 4)) {
                                // line 178
                                echo "            '<td style=\"text-align:center; vertical-align:middle;\" ";
                                if (((isset($context["countItem"]) || array_key_exists("countItem", $context) ? $context["countItem"] : (function () { throw new RuntimeError('Variable "countItem" does not exist.', 178, $this->source); })()) > 1)) {
                                    echo " rowspan=\"";
                                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["countItem"]) || array_key_exists("countItem", $context) ? $context["countItem"] : (function () { throw new RuntimeError('Variable "countItem" does not exist.', 178, $this->source); })()), 178, $this->source), "html", null, true);
                                    echo "\"";
                                }
                                echo ">";
                                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 178, $this->source); })()), "payment_total", [], "any", false, false, true, 178) + twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 178, $this->source); })()), "use_point", [], "any", false, false, true, 178)) + (isset($context["first_discount"]) || array_key_exists("first_discount", $context) ? $context["first_discount"] : (function () { throw new RuntimeError('Variable "first_discount" does not exist.', 178, $this->source); })())) - (isset($context["forth_discount"]) || array_key_exists("forth_discount", $context) ? $context["forth_discount"] : (function () { throw new RuntimeError('Variable "forth_discount" does not exist.', 178, $this->source); })()))), "html", null, true);
                                echo "</td>' +
                ";
                            } else {
                                // line 180
                                echo "            '<td style=\"text-align:center; vertical-align:middle;\" ";
                                if (((isset($context["countItem"]) || array_key_exists("countItem", $context) ? $context["countItem"] : (function () { throw new RuntimeError('Variable "countItem" does not exist.', 180, $this->source); })()) > 1)) {
                                    echo " rowspan=\"";
                                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["countItem"]) || array_key_exists("countItem", $context) ? $context["countItem"] : (function () { throw new RuntimeError('Variable "countItem" does not exist.', 180, $this->source); })()), 180, $this->source), "html", null, true);
                                    echo "\"";
                                }
                                echo ">";
                                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 180, $this->source); })()), "payment_total", [], "any", false, false, true, 180) + twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 180, $this->source); })()), "use_point", [], "any", false, false, true, 180)) + (isset($context["first_discount"]) || array_key_exists("first_discount", $context) ? $context["first_discount"] : (function () { throw new RuntimeError('Variable "first_discount" does not exist.', 180, $this->source); })())) - (isset($context["fifth_discount"]) || array_key_exists("fifth_discount", $context) ? $context["fifth_discount"] : (function () { throw new RuntimeError('Variable "fifth_discount" does not exist.', 180, $this->source); })()))), "html", null, true);
                                echo "</td>' +
                ";
                            }
                            // line 182
                            echo "                ";
                        } else {
                            // line 183
                            echo "            '' +
                ";
                        }
                        // line 185
                        echo "
            '</tr>' +
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 188
                    echo "
                ";
                } else {
                    // line 190
                    echo "
                ";
                    // line 191
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["shipping"], "productOrderItems", [], "any", false, false, true, 191));
                    foreach ($context['_seq'] as $context["_key"] => $context["orderItem"]) {
                        // line 192
                        echo "                ";
                        $context["total_sub"] = ((twig_get_attribute($this->env, $this->source, $context["orderItem"], "priceIncTax", [], "any", false, false, true, 192) * twig_get_attribute($this->env, $this->source, $context["orderItem"], "quantity", [], "any", false, false, true, 192)) + (isset($context["total_sub"]) || array_key_exists("total_sub", $context) ? $context["total_sub"] : (function () { throw new RuntimeError('Variable "total_sub" does not exist.', 192, $this->source); })()));
                        // line 193
                        echo "            '<tr>' +
            '<td style=\"text-align:center; vertical-align:middle;\" >";
                        // line 194
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 194, $this->source), "html", null, true);
                        echo "</td>' +
            '<td class=\"align-middle\" >";
                        // line 195
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, true, 195), 195, $this->source), "html", null, true);
                        echo "</td>' +
            '<td class=\"align-middle\" >";
                        // line 196
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((twig_get_attribute($this->env, $this->source, $context["orderItem"], "priceIncTax", [], "any", false, false, true, 196) * twig_get_attribute($this->env, $this->source, $context["orderItem"], "quantity", [], "any", false, false, true, 196))), "html", null, true);
                        echo "</td>' +
            '<td class=\"align-middle\" >";
                        // line 197
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 197, $this->source); })()), "deliveryFeeTotal", [], "any", false, false, true, 197), 197, $this->source)), "html", null, true);
                        echo "</td>' +
                ";
                        // line 198
                        if (($context["i"] == 1)) {
                            // line 199
                            echo "            '<td class=\"align-middle\" >";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 199, $this->source); })()), "payment_total", [], "any", false, false, true, 199), 199, $this->source)), "html", null, true);
                            echo "</td>' +
                ";
                        } elseif ((                        // line 200
$context["i"] == 2)) {
                            // line 201
                            echo "            '<td class=\"align-middle\" >";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 201, $this->source); })()), "payment_total", [], "any", false, false, true, 201) + twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 201, $this->source); })()), "use_point", [], "any", false, false, true, 201)) + (isset($context["first_discount"]) || array_key_exists("first_discount", $context) ? $context["first_discount"] : (function () { throw new RuntimeError('Variable "first_discount" does not exist.', 201, $this->source); })())) - (isset($context["second_discount"]) || array_key_exists("second_discount", $context) ? $context["second_discount"] : (function () { throw new RuntimeError('Variable "second_discount" does not exist.', 201, $this->source); })()))), "html", null, true);
                            echo "</td>' +
                ";
                        } elseif ((                        // line 202
$context["i"] == 3)) {
                            // line 203
                            echo "            '<td class=\"align-middle\" >";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 203, $this->source); })()), "payment_total", [], "any", false, false, true, 203) + twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 203, $this->source); })()), "use_point", [], "any", false, false, true, 203)) + (isset($context["first_discount"]) || array_key_exists("first_discount", $context) ? $context["first_discount"] : (function () { throw new RuntimeError('Variable "first_discount" does not exist.', 203, $this->source); })())) - (isset($context["third_discount"]) || array_key_exists("third_discount", $context) ? $context["third_discount"] : (function () { throw new RuntimeError('Variable "third_discount" does not exist.', 203, $this->source); })()))), "html", null, true);
                            echo "</td>' +
                ";
                        } elseif ((                        // line 204
$context["i"] == 4)) {
                            // line 205
                            echo "            '<td class=\"align-middle\" >";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 205, $this->source); })()), "payment_total", [], "any", false, false, true, 205) + twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 205, $this->source); })()), "use_point", [], "any", false, false, true, 205)) + (isset($context["first_discount"]) || array_key_exists("first_discount", $context) ? $context["first_discount"] : (function () { throw new RuntimeError('Variable "first_discount" does not exist.', 205, $this->source); })())) - (isset($context["forth_discount"]) || array_key_exists("forth_discount", $context) ? $context["forth_discount"] : (function () { throw new RuntimeError('Variable "forth_discount" does not exist.', 205, $this->source); })()))), "html", null, true);
                            echo "</td>' +
                ";
                        } else {
                            // line 207
                            echo "            '<td class=\"align-middle\" >";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 207, $this->source); })()), "payment_total", [], "any", false, false, true, 207) + twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 207, $this->source); })()), "use_point", [], "any", false, false, true, 207)) + (isset($context["first_discount"]) || array_key_exists("first_discount", $context) ? $context["first_discount"] : (function () { throw new RuntimeError('Variable "first_discount" does not exist.', 207, $this->source); })())) - (isset($context["fifth_discount"]) || array_key_exists("fifth_discount", $context) ? $context["fifth_discount"] : (function () { throw new RuntimeError('Variable "fifth_discount" does not exist.', 207, $this->source); })()))), "html", null, true);
                            echo "</td>' +
                ";
                        }
                        // line 209
                        echo "            '</tr>' +
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 211
                    echo "                ";
                }
                // line 212
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        echo "            '</tbody>' +
            '<tbody>' +
            '<tr>' +
            '<td colspan=\"2\" class=\"align-middle\" > ";
        // line 218
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["limitCycle"]) || array_key_exists("limitCycle", $context) ? $context["limitCycle"] : (function () { throw new RuntimeError('Variable "limitCycle" does not exist.', 218, $this->source); })()), 218, $this->source), "html", null, true);
        echo "回分の総額</td>' +
            '<td class=\"align-middle\" > ";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed((isset($context["total_sub"]) || array_key_exists("total_sub", $context) ? $context["total_sub"] : (function () { throw new RuntimeError('Variable "total_sub" does not exist.', 219, $this->source); })()), 219, $this->source)), "html", null, true);
        echo "</td>' +
            '<td class=\"align-middle\" > ";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed((isset($context["total_shipping_price"]) || array_key_exists("total_shipping_price", $context) ? $context["total_shipping_price"] : (function () { throw new RuntimeError('Variable "total_shipping_price" does not exist.', 220, $this->source); })()), 220, $this->source)), "html", null, true);
        echo "</td>' +
            '<td class=\"align-middle\" > ";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed((isset($context["total_price"]) || array_key_exists("total_price", $context) ? $context["total_price"] : (function () { throw new RuntimeError('Variable "total_price" does not exist.', 221, $this->source); })()), 221, $this->source)), "html", null, true);
        echo "</td>' +
            '</tr>'+
            '</tbody>' +
            '</table>'
        );
    })
</script>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "EccubePaymentLite42/Resource/template/default/Shopping/specified_commercial_transactions.twig";
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
        return array (  774 => 221,  770 => 220,  766 => 219,  762 => 218,  757 => 215,  750 => 213,  744 => 212,  741 => 211,  734 => 209,  728 => 207,  722 => 205,  720 => 204,  715 => 203,  713 => 202,  708 => 201,  706 => 200,  701 => 199,  699 => 198,  695 => 197,  691 => 196,  687 => 195,  683 => 194,  680 => 193,  677 => 192,  673 => 191,  670 => 190,  666 => 188,  650 => 185,  646 => 183,  643 => 182,  631 => 180,  619 => 178,  617 => 177,  606 => 176,  604 => 175,  593 => 174,  591 => 173,  580 => 172,  577 => 171,  575 => 170,  572 => 169,  568 => 167,  556 => 165,  554 => 164,  550 => 163,  545 => 162,  541 => 160,  529 => 158,  527 => 157,  523 => 155,  520 => 154,  517 => 153,  500 => 152,  497 => 151,  494 => 150,  491 => 149,  488 => 148,  484 => 147,  480 => 145,  477 => 144,  474 => 143,  471 => 142,  468 => 141,  465 => 140,  462 => 139,  459 => 138,  456 => 137,  453 => 136,  450 => 135,  447 => 134,  444 => 133,  440 => 132,  437 => 131,  434 => 130,  431 => 129,  429 => 128,  415 => 116,  409 => 115,  401 => 113,  396 => 112,  393 => 111,  390 => 110,  386 => 109,  373 => 99,  369 => 98,  365 => 97,  360 => 94,  352 => 91,  346 => 90,  343 => 89,  334 => 86,  330 => 85,  327 => 84,  319 => 82,  316 => 81,  308 => 79,  306 => 78,  302 => 77,  297 => 75,  294 => 74,  291 => 73,  286 => 72,  283 => 71,  268 => 69,  264 => 67,  252 => 65,  250 => 64,  246 => 63,  243 => 62,  235 => 60,  232 => 59,  224 => 57,  222 => 56,  218 => 55,  215 => 54,  211 => 52,  199 => 50,  197 => 49,  194 => 48,  191 => 47,  188 => 46,  170 => 45,  167 => 44,  164 => 43,  161 => 42,  157 => 41,  154 => 40,  149 => 39,  147 => 38,  135 => 28,  129 => 27,  126 => 26,  118 => 24,  110 => 20,  102 => 18,  99 => 17,  91 => 15,  89 => 14,  84 => 13,  81 => 12,  76 => 11,  73 => 10,  70 => 9,  66 => 8,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    \$(function (){
        \$('.ec-orderPayment:first').append(
            /**---▼①の改修案---*/
            '<div class=\"ec-rectHeading\">' +
            '<h2>各回 購入個数について</h2>' +
            '</div>' +
                {% for key, Items in ProductOrderItems %}
                {% set product = Items.product %}
                {% if product.free_description_about_quantity is not empty %}
                {% set free_description_about_quantity = product.free_description_about_quantity|replace({ '\\r\\n': '<br>', '\\n': '<br>', '\\r': '<br>' })|escape('js') %}
                {% if  Items.productClass is not null and Items.productClass.classCategory1 or Items.productClass.classCategory2 %}
            '<p>{{ product.name }} ( '+
                {% if Items.productClass is not null and Items.productClass.classCategory1 %}
            '<span>{{ Items.productClass.classCategory1.className.name }} : {{ Items.productClass.classCategory1 }} </span>' +
                {% endif %}
                {% if Items.productClass is not null and Items.productClass.classCategory2 %}
            '<span> / {{ Items.productClass.classCategory2.className.name }} ：{{ Items.productClass.classCategory2 }} )</span>' +
                {% endif %}
            '<span> : {{ free_description_about_quantity }}</span>'+
            '</p>' +

                {% else %}
            '<p> {{ product.name }} : {{ free_description_about_quantity }} '+
                {% endif %}
                {% endif %}
                {% endfor %}
            '<table class=\"table table-sm\">' +
            ' <thead>' +
            '<tr>' +
            '<th class=\"border-top-0 pl-3 pt-2 pb-2\">分量/回数</th>' +
            '<th class=\"border-top-0 pt-2 pb-2\">商品名</th>' +
            '<th class=\"border-top-0 pt-2 pb-2\">数量 </th>' +
            '<th class=\"border-top-0 pt-2 pb-2\">合計</th>' +
            '' +
            '</tr>' +
            '</thead>' +
                {% set total_quantity = 0 %}
                {% for i in 1..limitCycle %}
            '<tbody>' +
                {% for shipping in Order.shippings %}
                {% set isShowReducedTaxMess = false %}
                {% set countItem = shipping.productOrderItems|length %}
                {% if countItem > 1 %}
                {% for orderItem in shipping.productOrderItems %}
                {% set total_quantity =  orderItem.quantity + total_quantity %}
                {% set idx = loop.index0%}
            '<tr>' +
                {% if countItem > 1 and idx == 0 %}
            '<td style=\"text-align:center; vertical-align:middle;\" {% if countItem > 1 %} rowspan=\"{{ countItem }}\"{% endif %}>{{ i }}</td>' +
                {% else %}
            '' +
                {% endif %}
            '<td class=\"align-middle\" >' +
            '<p>{{ orderItem.productName }} </p>' +
                {% if orderItem.productClass is not null and orderItem.productClass.classCategory1 %}
            '<p>{{ orderItem.productClass.classCategory1.className.name }}：{{ orderItem.productClass.classCategory1 }}</p>' +
                {% endif %}
                {% if orderItem.productClass is not null and orderItem.productClass.classCategory2 %}
            '<p>{{ orderItem.productClass.classCategory2.className.name }}：{{ orderItem.productClass.classCategory2 }}</p>' +
                {% endif %}
            '</td>' +
            '<td class=\"align-middle\" >{{ orderItem.quantity|number_format }}</td>' +
                {% if countItem > 1 and idx == 0 %}
            '<td style=\"text-align:center; vertical-align:middle;\" {% if countItem > 1 %} rowspan=\"{{ countItem }}\"{% endif %}>{{ total_quantity_item|number_format }}</td>' +
                {% else %}
            '' +
                {% endif %}
            '</tr>' +
                {% endfor %}
                {% else %}
                {% for orderItem in shipping.productOrderItems %}
                {% set total_quantity = orderItem.quantity + total_quantity %}
            '<tr>' +
            '<td style=\"text-align:center; vertical-align:middle;\">{{ i }}</td>' +
            '<td class=\"align-middle\" >' +
            '<p>{{ orderItem.productName }} </p>' +
                {% if orderItem.productClass is not null and orderItem.productClass.classCategory1 %}
            '<p>{{ orderItem.productClass.classCategory1.className.name }}：{{ orderItem.productClass.classCategory1 }}</p>' +
                {% endif %}
                {% if orderItem.productClass is not null and orderItem.productClass.classCategory2 %}
            '<p>{{ orderItem.productClass.classCategory2.className.name }}：{{ orderItem.productClass.classCategory2 }}</p>' +
                {% endif %}
            '</td>' +
            '<td class=\"align-middle\" >{{ orderItem.quantity|number_format }}</td>' +
            '<td class=\"align-middle\" >{{ orderItem.quantity|number_format }}</td>' +
            '</tr>' +
                {% endfor %}
                {% endif %}
                {% endfor %}


                {% endfor %}
            '</tbody>' +
            '<tbody>' +
            '<tr>' +
            '<td colspan=\"2\" class=\"align-middle\" > {{ limitCycle }}回分の総分量</td>' +
            '<td class=\"align-middle\" > {{ total_quantity|number_format }}</td>' +
            '<td class=\"align-middle\" > {{ total_quantity|number_format }}</td>' +
            '</tr>'+
            '</tbody>' +
            '</table>' +

            /*---▼②の改修案---*/

            '<div class=\"ec-rectHeading\">' +
            '<h2>各回 お支払い金額について</h2>' +
            '</div>' +
                {% for key, Items in ProductOrderItems %}
                {% set product = Items.product %}
                {% if product.free_description_about_selling_price is not empty %}
                {% set free_description_about_selling_price = product.free_description_about_selling_price|replace({ '\\r\\n': '<br>', '\\n': '<br>', '\\r': '<br>' })|escape('js') %}
            '<p>{{ product.name }} : {{ free_description_about_selling_price }}</p>'+
                {% endif %}
                {% endfor %}

            '<table class=\"table table-sm\">' +
            ' <thead>' +
            '<tr>' +
            '<th class=\"border-top-0 pl-3 pt-2 pb-2\">分量/回数</th>' +
            '<th class=\"border-top-0 pt-2 pb-2\">商品名</th>' +
            '<th class=\"border-top-0 pt-2 pb-2\">価格</th>' +
            '<th class=\"border-top-0 pt-2 pb-2\">送料 </th>' +
            '<th class=\"border-top-0 pt-2 pb-2\">合計</th>' +
            '' +
            '</tr>' +
            '</thead>' +
                {% set total_price = 0 %}
                {% set total_shipping_price = 0 %}
                {% set total_sub = 0 %}

                {% for i in 1..limitCycle %}
                {% if i == 1 %}
                {% set total_price = Order.payment_total + total_price %}
                {% elseif i == 2 %}
                {% set total_price = Order.payment_total + total_price + Order.use_point + first_discount - second_discount %}
                {% elseif i == 3 %}
                {% set total_price = Order.payment_total + total_price + Order.use_point + first_discount - third_discount %}
                {% elseif i == 4 %}
                {% set total_price = Order.payment_total + total_price + Order.use_point + first_discount - forth_discount %}
                {% else %}
                {% set total_price = Order.payment_total + total_price + Order.use_point + first_discount - fifth_discount%}
                {% endif %}
                {% set total_shipping_price = Order.deliveryFeeTotal + total_shipping_price %}

            '<tbody>' +
                {% for shipping in Order.shippings %}
                {% set isShowReducedTaxMess = false %}
                {% set countItem = shipping.productOrderItems|length %}
                {% if countItem > 1 %}

                {% for orderItem in shipping.productOrderItems %}
                {% set total_sub = (orderItem.priceIncTax * orderItem.quantity) + total_sub %}
                {% set idx = loop.index %}

            '<tr>' +
                {% if countItem > 1 and idx == 1 %}
            '<td style=\"text-align:center; vertical-align:middle;\" {% if countItem > 1 %} rowspan=\"{{ countItem }}\"{% endif %}>{{ i }} </td>' +
                {% else %}
            '' +
                {% endif %}
            '<td class=\"align-middle\" >{{ orderItem.productName }}</td>' +
            '<td class=\"align-middle\" >{{ (orderItem.priceIncTax * orderItem.quantity)|price }}</td>' +
                {% if countItem > 1 and idx == 1 %}
            '<td style=\"text-align:center; vertical-align:middle;\" {% if countItem > 1 %} rowspan=\"{{ countItem }}\"{% endif %}>{{ Order.deliveryFeeTotal|price }}</td>' +
                {% else %}
            '' +
                {% endif %}

                {% if countItem > 1 and idx == 1 %}
                {% if i == 1 %}
            '<td style=\"text-align:center; vertical-align:middle;\" {% if countItem > 1 %} rowspan=\"{{ countItem }}\"{% endif %}>{{ Order.payment_total|price }}</td>' +
                {% elseif i == 2 %}
            '<td style=\"text-align:center; vertical-align:middle;\" {% if countItem > 1 %} rowspan=\"{{ countItem }}\"{% endif %}>{{ (Order.payment_total + Order.use_point + first_discount - second_discount)|price }}</td>' +
                {% elseif i == 3 %}
            '<td style=\"text-align:center; vertical-align:middle;\" {% if countItem > 1 %} rowspan=\"{{ countItem }}\"{% endif %}>{{ (Order.payment_total + Order.use_point + first_discount - third_discount)|price }}</td>' +
                {% elseif i == 4 %}
            '<td style=\"text-align:center; vertical-align:middle;\" {% if countItem > 1 %} rowspan=\"{{ countItem }}\"{% endif %}>{{ (Order.payment_total + Order.use_point + first_discount - forth_discount)|price }}</td>' +
                {% else %}
            '<td style=\"text-align:center; vertical-align:middle;\" {% if countItem > 1 %} rowspan=\"{{ countItem }}\"{% endif %}>{{ (Order.payment_total + Order.use_point + first_discount - fifth_discount)|price }}</td>' +
                {% endif %}
                {% else %}
            '' +
                {% endif %}

            '</tr>' +
                {% endfor %}

                {% else %}

                {% for orderItem in shipping.productOrderItems %}
                {% set total_sub = (orderItem.priceIncTax * orderItem.quantity) + total_sub %}
            '<tr>' +
            '<td style=\"text-align:center; vertical-align:middle;\" >{{ i }}</td>' +
            '<td class=\"align-middle\" >{{ orderItem.productName }}</td>' +
            '<td class=\"align-middle\" >{{ (orderItem.priceIncTax * orderItem.quantity)|price }}</td>' +
            '<td class=\"align-middle\" >{{ Order.deliveryFeeTotal|price }}</td>' +
                {% if i == 1 %}
            '<td class=\"align-middle\" >{{ Order.payment_total|price }}</td>' +
                {% elseif i == 2 %}
            '<td class=\"align-middle\" >{{ (Order.payment_total + Order.use_point + first_discount - second_discount)|price }}</td>' +
                {% elseif i == 3 %}
            '<td class=\"align-middle\" >{{ (Order.payment_total + Order.use_point + first_discount - third_discount)|price }}</td>' +
                {% elseif i == 4 %}
            '<td class=\"align-middle\" >{{ (Order.payment_total + Order.use_point + first_discount - forth_discount)|price }}</td>' +
                {% else %}
            '<td class=\"align-middle\" >{{ (Order.payment_total + Order.use_point + first_discount - fifth_discount)|price }}</td>' +
                {% endif %}
            '</tr>' +
                {% endfor %}
                {% endif %}
                {% endfor %}

                {% endfor %}
            '</tbody>' +
            '<tbody>' +
            '<tr>' +
            '<td colspan=\"2\" class=\"align-middle\" > {{ limitCycle }}回分の総額</td>' +
            '<td class=\"align-middle\" > {{ total_sub|price }}</td>' +
            '<td class=\"align-middle\" > {{ total_shipping_price|price }}</td>' +
            '<td class=\"align-middle\" > {{ total_price|price }}</td>' +
            '</tr>'+
            '</tbody>' +
            '</table>'
        );
    })
</script>

", "EccubePaymentLite42/Resource/template/default/Shopping/specified_commercial_transactions.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\default\\Shopping\\specified_commercial_transactions.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 8, "set" => 9, "if" => 10);
        static $filters = array("escape" => 11, "replace" => 11, "length" => 43, "number_format" => 63, "price" => 163);
        static $functions = array("range" => 39);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'replace', 'length', 'number_format', 'price'],
                ['range']
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
