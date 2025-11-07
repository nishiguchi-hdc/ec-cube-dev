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

/* Mail/order.html.twig */
class __TwigTemplate_5f06e4a9f0ca8538206f565eb0f5cc63 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mail/order.html.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mail/order.html.twig"));

        // line 11
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">

<body bgcolor=\"#F0F0F0\" leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\" style=\"margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;\">
<br>
<br>
<div align=\"center\"><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage");
        echo "\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:30px;color:#333333;text-decoration:none;\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 17, $this->source); })()), "shop_name", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "</a></div>
<!-- 100% background wrapper (grey background) -->
<table border=\"0\" width=\"100%\" height=\"100%\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#F0F0F0\" style=\"border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;\">
    <tr>
        <td align=\"center\" valign=\"top\" bgcolor=\"#F0F0F0\" style=\"background-color:#F0F0F0;border-collapse:collapse;\">
            <br>
            <!-- 600px container (white background) -->
            <table id=\"html-mail-table1\" border=\"0\" width=\"600px\" cellpadding=\"10\" cellspacing=\"0\" class=\"container\" style=\"border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;\">
                <tr>
                    <td class=\"container-padding content\" align=\"left\" style=\"border-collapse:collapse;padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff;\">
                        <br>
                        <div class=\"title\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:600;color:#374550;\">この度はご注文いただき誠にありがとうございます。</div>
                        <br>
                        <div class=\"body-text\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333;\">
                            ";
        // line 31
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 31, $this->source); })()), "name01", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 31, $this->source); })()), "name02", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo " 様<br/>
                            <br/>
                            下記ご注文内容にお間違えがないかご確認下さい。<br/>
                            <br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　ご請求金額<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            ご注文日時：";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 38, $this->source); })()), "order_date", [], "any", false, false, true, 38), 38, $this->source)), "html", null, true);
        echo "<br/>
                            ご注文番号：";
        // line 39
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 39, $this->source); })()), "order_no", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "<br/>
                            お支払い合計：";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 40, $this->source); })()), "payment_total", [], "any", false, false, true, 40), 40, $this->source)), "html", null, true);
        echo "<br/>
                            お支払い方法：";
        // line 41
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 41, $this->source); })()), "payment_method", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        echo "<br/>
                            ";
        // line 42
        if ((twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 42, $this->source); })()), "isOptionPoint", [], "any", false, false, true, 42) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 42, $this->source); })()), "Customer", [], "any", false, false, true, 42)))) {
            // line 43
            echo "                            ご利用ポイント：";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 43, $this->source); })()), "usePoint", [], "any", false, false, true, 43), 43, $this->source)), "html", null, true);
            echo " pt<br/>
                            加算ポイント：";
            // line 44
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 44, $this->source); })()), "addPoint", [], "any", false, false, true, 44), 44, $this->source)), "html", null, true);
            echo " pt<br/>
                            ";
        }
        // line 46
        echo "                            お問い合わせ：";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 46, $this->source); })()), "message", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
        echo "<br/>
                            <br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　ご注文商品明細<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            ";
        // line 51
        $context["isShowReducedTaxMess"] = false;
        // line 52
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 52, $this->source); })()), "MergedProductOrderItems", [], "any", false, false, true, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["OrderItem"]) {
            // line 53
            echo "                                商品コード：";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_code", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "<br/>
                                商品名：";
            // line 54
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_name", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name1", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name2", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            if ($this->extensions['Eccube\Twig\Extension\TaxExtension']->isReducedTaxRate($context["OrderItem"])) {
                echo "※";
                $context["isShowReducedTaxMess"] = true;
            }
            echo "<br/>
                                単価：";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "price_inctax", [], "any", false, false, true, 55), 55, $this->source)), "html", null, true);
            echo "<br/>
                                数量：";
            // line 56
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "quantity", [], "any", false, false, true, 56), 56, $this->source)), "html", null, true);
            echo "<br/>
                                <br/>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                            ";
        if ((isset($context["isShowReducedTaxMess"]) || array_key_exists("isShowReducedTaxMess", $context) ? $context["isShowReducedTaxMess"] : (function () { throw new RuntimeError('Variable "isShowReducedTaxMess" does not exist.', 59, $this->source); })())) {
            echo "※は軽減税率対象商品です。";
        }
        // line 60
        echo "                            <hr style=\"border-top: 2px dashed #8c8b8b;\">
                            小　計：";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 61, $this->source); })()), "subtotal", [], "any", false, false, true, 61), 61, $this->source)), "html", null, true);
        echo "<br/>
                            手数料：";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 62, $this->source); })()), "charge", [], "any", false, false, true, 62), 62, $this->source)), "html", null, true);
        echo "<br/>
                            送　料：";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 63, $this->source); })()), "delivery_fee_total", [], "any", false, false, true, 63), 63, $this->source)), "html", null, true);
        echo "<br/>
                            ";
        // line 64
        if ((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 64, $this->source); })()), "taxable_discount", [], "any", false, false, true, 64) < 0)) {
            // line 65
            echo "                            値引き：";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 65, $this->source); })()), "taxable_discount", [], "any", false, false, true, 65), 65, $this->source)), "html", null, true);
            echo "<br/>
                            ";
        }
        // line 67
        echo "                            <hr style=\"border-top: 1px dotted #8c8b8b;\">
                            合　計：";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 68, $this->source); })()), "taxable_total", [], "any", false, false, true, 68), 68, $this->source)), "html", null, true);
        echo "<br/>
                            ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 69, $this->source); })()), "tax_free_discount_items", [], "any", false, false, true, 69));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 70
            echo "                                <hr style=\"border-top: 1px dotted #8c8b8b;\">
                                ";
            // line 71
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "product_name", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            echo "：";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, true, 71), 71, $this->source)), "html", null, true);
            echo "<br/>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                            <hr style=\"border-top: 1px dotted #8c8b8b;\">
                            お支払い合計：";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 74, $this->source); })()), "payment_total", [], "any", false, false, true, 74), 74, $this->source)), "html", null, true);
        echo "
                            ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 75, $this->source); })()), "total_by_tax_rate", [], "any", false, false, true, 75));
        foreach ($context['_seq'] as $context["rate"] => $context["total"]) {
            // line 76
            echo "                                (";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["rate"], 76, $this->source), "html", null, true);
            echo " %対象：";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed($context["total"], 76, $this->source)), "html", null, true);
            echo " 内消費税： ";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 76, $this->source); })()), "tax_by_tax_rate", [], "any", false, false, true, 76), $context["rate"], [], "array", false, false, true, 76), 76, $this->source)), "html", null, true);
            echo ")<br/>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rate'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                            <br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            ご注文者情報<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            お名前：";
        // line 82
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 82, $this->source); })()), "name01", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 82, $this->source); })()), "name02", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
        echo " 様<br/>
                            お名前(カナ)：";
        // line 83
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 83, $this->source); })()), "kana01", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 83, $this->source); })()), "kana02", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
        echo " 様<br/>
                            ";
        // line 84
        if (twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 84, $this->source); })()), "company_name", [], "any", false, false, true, 84)) {
            // line 85
            echo "                                会社名：";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 85, $this->source); })()), "company_name", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
            echo "<br/>
                            ";
        }
        // line 87
        echo "                            郵便番号：〒";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 87, $this->source); })()), "postal_code", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
        echo "<br/>
                            住所：";
        // line 88
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 88, $this->source); })()), "Pref", [], "any", false, false, true, 88), "name", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 88, $this->source); })()), "addr01", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 88, $this->source); })()), "addr02", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
        echo "<br/>
                            電話番号：";
        // line 89
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 89, $this->source); })()), "phone_number", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
        echo "<br/>
                            メールアドレス：";
        // line 90
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 90, $this->source); })()), "email", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
        echo "<br/>
                            <br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　配送情報<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">

                            ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 96, $this->source); })()), "Shippings", [], "any", false, false, true, 96));
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
        foreach ($context['_seq'] as $context["_key"] => $context["Shipping"]) {
            // line 97
            echo "                                ◎お届け先";
            if (twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 97, $this->source); })()), "multiple", [], "any", false, false, true, 97)) {
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
            }
            echo "<br/>
                                <br/>
                                お名前：";
            // line 99
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "name01", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "name02", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
            echo " 様<br/>
                                お名前(カナ)：";
            // line 100
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "kana01", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "kana02", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
            echo " 様<br/>
                                ";
            // line 101
            if (twig_get_attribute($this->env, $this->source, $context["Shipping"], "company_name", [], "any", false, false, true, 101)) {
                // line 102
                echo "                                    会社名：";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "company_name", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
                echo "<br/>
                                ";
            }
            // line 104
            echo "                                郵便番号：〒";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "postal_code", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
            echo "<br/>
                                住所：";
            // line 105
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Shipping"], "Pref", [], "any", false, false, true, 105), "name", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "addr01", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "addr02", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            echo "<br/>
                                電話番号：";
            // line 106
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "phone_number", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
            echo "<br/>
                                <br/>
                                配送方法：";
            // line 108
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_name", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
            echo "<br/>
                                お届け日：";
            // line 109
            ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_date", [], "any", false, false, true, 109))) ? (print ("指定なし")) : (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_date", [], "any", false, false, true, 109)), "html", null, true))));
            echo "<br/>
                                お届け時間：";
            // line 110
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_time", [], "any", true, true, true, 110)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_time", [], "any", false, false, true, 110), 110, $this->source), "指定なし")) : ("指定なし")), "html", null, true);
            echo "<br/>
                                <br/>
                                ";
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Shipping"], "productOrderItems", [], "any", false, false, true, 112));
            foreach ($context['_seq'] as $context["_key"] => $context["OrderItem"]) {
                // line 113
                echo "                                    商品コード：";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_code", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
                echo "<br/>
                                    商品名：";
                // line 114
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_name", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name1", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name2", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
                echo "<br/>
                                    数量：";
                // line 115
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "quantity", [], "any", false, false, true, 115), 115, $this->source)), "html", null, true);
                echo "<br/>
                                    <br/>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Shipping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "                            ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 119, $this->source); })()), "complete_mail_message", [], "any", false, false, true, 119))) {
            // line 120
            echo "                                ";
            echo twig_nl2br(twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 120, $this->source); })()), "complete_mail_message", [], "any", false, false, true, 120), 120, $this->source), "html", null, true));
            echo "<br/>
                            ";
        }
        // line 122
        echo "                            <hr style=\"border-top: 2px dotted #8c8b8b;\">
                            このメッセージはお客様へのお知らせ専用ですので、<br/>
                            このメッセージへの返信としてご質問をお送りいただいても回答できません。<br/>
                            ご了承ください。<br/>
                        </div>
                    </td>
                </tr>
            </table>
            <!--/600px container -->
            <br>
            <br>
            <table id=\"html-mail-table2\" border=\"0\" width=\"600px\" cellpadding=\"10\" cellspacing=\"0\" class=\"container\" style=\"border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;\">
                <tr>
                    <td class=\"container-padding content footer-text\" align=\"left\" style=\"border-collapse:collapse;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:16px;color:#aaaaaa;padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff;\">
                        本メールは、";
        // line 136
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 136, $this->source); })()), "shop_name", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
        echo "より送信しております。<br/>
                        もしお心当たりが無い場合は、その旨 <a href=\"mailto:";
        // line 137
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 137, $this->source); })()), "email02", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
        echo "\" style=\"text-decoration:none;\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 137, $this->source); })()), "email02", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
        echo "</a> までご連絡いただければ幸いです。<br/>
                        <br/>
                        <div class=\"title\" style=\"font-size:14px;font-family:Helvetica, Arial, sans-serif;font-weight:600;color:#374550;\"><a href=\"";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage");
        echo "\" style=\"color:#aaaaaa;text-decoration:none;\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 139, $this->source); })()), "shop_name", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
        echo "</a></div>
                        <div>copyright &copy; ";
        // line 140
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 140, $this->source); })()), "shop_name", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
        echo " all rights reserved.</div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!--/100% background wrapper-->
<br>
<br>
</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Mail/order.html.twig";
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
        return array (  452 => 140,  446 => 139,  439 => 137,  435 => 136,  419 => 122,  413 => 120,  410 => 119,  396 => 118,  387 => 115,  379 => 114,  374 => 113,  370 => 112,  365 => 110,  361 => 109,  357 => 108,  352 => 106,  346 => 105,  341 => 104,  335 => 102,  333 => 101,  327 => 100,  321 => 99,  313 => 97,  296 => 96,  287 => 90,  283 => 89,  277 => 88,  272 => 87,  266 => 85,  264 => 84,  258 => 83,  252 => 82,  246 => 78,  233 => 76,  229 => 75,  225 => 74,  222 => 73,  212 => 71,  209 => 70,  205 => 69,  201 => 68,  198 => 67,  192 => 65,  190 => 64,  186 => 63,  182 => 62,  178 => 61,  175 => 60,  170 => 59,  161 => 56,  157 => 55,  145 => 54,  140 => 53,  135 => 52,  133 => 51,  124 => 46,  119 => 44,  114 => 43,  112 => 42,  108 => 41,  104 => 40,  100 => 39,  96 => 38,  84 => 31,  65 => 17,  57 => 11,);
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
<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">

<body bgcolor=\"#F0F0F0\" leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\" style=\"margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;\">
<br>
<br>
<div align=\"center\"><a href=\"{{ url('homepage') }}\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:30px;color:#333333;text-decoration:none;\">{{ BaseInfo.shop_name }}</a></div>
<!-- 100% background wrapper (grey background) -->
<table border=\"0\" width=\"100%\" height=\"100%\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#F0F0F0\" style=\"border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;\">
    <tr>
        <td align=\"center\" valign=\"top\" bgcolor=\"#F0F0F0\" style=\"background-color:#F0F0F0;border-collapse:collapse;\">
            <br>
            <!-- 600px container (white background) -->
            <table id=\"html-mail-table1\" border=\"0\" width=\"600px\" cellpadding=\"10\" cellspacing=\"0\" class=\"container\" style=\"border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;\">
                <tr>
                    <td class=\"container-padding content\" align=\"left\" style=\"border-collapse:collapse;padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff;\">
                        <br>
                        <div class=\"title\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:600;color:#374550;\">この度はご注文いただき誠にありがとうございます。</div>
                        <br>
                        <div class=\"body-text\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333;\">
                            {{ Order.name01 }} {{ Order.name02 }} 様<br/>
                            <br/>
                            下記ご注文内容にお間違えがないかご確認下さい。<br/>
                            <br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　ご請求金額<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            ご注文日時：{{ Order.order_date|date_sec }}<br/>
                            ご注文番号：{{ Order.order_no }}<br/>
                            お支払い合計：{{ Order.payment_total|price }}<br/>
                            お支払い方法：{{ Order.payment_method }}<br/>
                            {% if BaseInfo.isOptionPoint and Order.Customer is not null %}
                            ご利用ポイント：{{ Order.usePoint|number_format }} pt<br/>
                            加算ポイント：{{ Order.addPoint|number_format }} pt<br/>
                            {% endif %}
                            お問い合わせ：{{ Order.message }}<br/>
                            <br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　ご注文商品明細<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            {% set isShowReducedTaxMess = false %}
                            {% for OrderItem in Order.MergedProductOrderItems %}
                                商品コード：{{ OrderItem.product_code }}<br/>
                                商品名：{{ OrderItem.product_name }}  {{ OrderItem.classcategory_name1 }}  {{ OrderItem.classcategory_name2 }}{% if is_reduced_tax_rate(OrderItem) %}※{% set isShowReducedTaxMess = true %}{% endif %}<br/>
                                単価：{{ OrderItem.price_inctax|price }}<br/>
                                数量：{{ OrderItem.quantity|number_format }}<br/>
                                <br/>
                            {% endfor %}
                            {% if isShowReducedTaxMess %}※は軽減税率対象商品です。{% endif %}
                            <hr style=\"border-top: 2px dashed #8c8b8b;\">
                            小　計：{{ Order.subtotal|price }}<br/>
                            手数料：{{ Order.charge|price }}<br/>
                            送　料：{{ Order.delivery_fee_total|price }}<br/>
                            {% if Order.taxable_discount < 0 %}
                            値引き：{{ Order.taxable_discount|price }}<br/>
                            {% endif %}
                            <hr style=\"border-top: 1px dotted #8c8b8b;\">
                            合　計：{{ Order.taxable_total|price }}<br/>
                            {% for item in Order.tax_free_discount_items %}
                                <hr style=\"border-top: 1px dotted #8c8b8b;\">
                                {{ item.product_name }}：{{ item.total_price|price }}<br/>
                            {% endfor %}
                            <hr style=\"border-top: 1px dotted #8c8b8b;\">
                            お支払い合計：{{ Order.payment_total|price }}
                            {% for rate, total in Order.total_by_tax_rate %}
                                ({{ rate }} %対象：{{ total|price }} 内消費税： {{ Order.tax_by_tax_rate[rate]|price }})<br/>
                            {% endfor %}
                            <br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            ご注文者情報<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            お名前：{{ Order.name01 }} {{ Order.name02 }} 様<br/>
                            お名前(カナ)：{{ Order.kana01 }} {{ Order.kana02 }} 様<br/>
                            {% if Order.company_name %}
                                会社名：{{ Order.company_name }}<br/>
                            {% endif %}
                            郵便番号：〒{{ Order.postal_code }}<br/>
                            住所：{{ Order.Pref.name }}{{ Order.addr01 }}{{ Order.addr02 }}<br/>
                            電話番号：{{ Order.phone_number }}<br/>
                            メールアドレス：{{ Order.email }}<br/>
                            <br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　配送情報<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">

                            {% for Shipping in Order.Shippings %}
                                ◎お届け先{% if Order.multiple %}{{ loop.index }}{% endif %}<br/>
                                <br/>
                                お名前：{{ Shipping.name01 }} {{ Shipping.name02 }} 様<br/>
                                お名前(カナ)：{{ Shipping.kana01 }} {{ Shipping.kana02 }} 様<br/>
                                {% if Shipping.company_name %}
                                    会社名：{{ Shipping.company_name }}<br/>
                                {% endif %}
                                郵便番号：〒{{ Shipping.postal_code }}<br/>
                                住所：{{ Shipping.Pref.name }}{{ Shipping.addr01 }}{{ Shipping.addr02 }}<br/>
                                電話番号：{{ Shipping.phone_number }}<br/>
                                <br/>
                                配送方法：{{ Shipping.shipping_delivery_name }}<br/>
                                お届け日：{{ Shipping.shipping_delivery_date is empty ? '指定なし' : Shipping.shipping_delivery_date|date_day }}<br/>
                                お届け時間：{{ Shipping.shipping_delivery_time|default('指定なし') }}<br/>
                                <br/>
                                {% for OrderItem in Shipping.productOrderItems %}
                                    商品コード：{{ OrderItem.product_code }}<br/>
                                    商品名：{{ OrderItem.product_name }}  {{ OrderItem.classcategory_name1 }}  {{ OrderItem.classcategory_name2 }}<br/>
                                    数量：{{ OrderItem.quantity|number_format }}<br/>
                                    <br/>
                                {% endfor %}
                            {% endfor %}
                            {% if Order.complete_mail_message is not empty %}
                                {{ Order.complete_mail_message|nl2br }}<br/>
                            {% endif %}
                            <hr style=\"border-top: 2px dotted #8c8b8b;\">
                            このメッセージはお客様へのお知らせ専用ですので、<br/>
                            このメッセージへの返信としてご質問をお送りいただいても回答できません。<br/>
                            ご了承ください。<br/>
                        </div>
                    </td>
                </tr>
            </table>
            <!--/600px container -->
            <br>
            <br>
            <table id=\"html-mail-table2\" border=\"0\" width=\"600px\" cellpadding=\"10\" cellspacing=\"0\" class=\"container\" style=\"border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;\">
                <tr>
                    <td class=\"container-padding content footer-text\" align=\"left\" style=\"border-collapse:collapse;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:16px;color:#aaaaaa;padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff;\">
                        本メールは、{{ BaseInfo.shop_name }}より送信しております。<br/>
                        もしお心当たりが無い場合は、その旨 <a href=\"mailto:{{ BaseInfo.email02 }}\" style=\"text-decoration:none;\">{{ BaseInfo.email02 }}</a> までご連絡いただければ幸いです。<br/>
                        <br/>
                        <div class=\"title\" style=\"font-size:14px;font-family:Helvetica, Arial, sans-serif;font-weight:600;color:#374550;\"><a href=\"{{ url('homepage') }}\" style=\"color:#aaaaaa;text-decoration:none;\">{{ BaseInfo.shop_name }}</a></div>
                        <div>copyright &copy; {{ BaseInfo.shop_name }} all rights reserved.</div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!--/100% background wrapper-->
<br>
<br>
</body>

</html>
", "Mail/order.html.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\default\\Mail\\order.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 42, "set" => 51, "for" => 52);
        static $filters = array("escape" => 17, "date_sec" => 38, "price" => 40, "number_format" => 43, "date_day" => 109, "default" => 110, "nl2br" => 120);
        static $functions = array("url" => 17, "is_reduced_tax_rate" => 54);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'date_sec', 'price', 'number_format', 'date_day', 'default', 'nl2br'],
                ['url', 'is_reduced_tax_rate']
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
