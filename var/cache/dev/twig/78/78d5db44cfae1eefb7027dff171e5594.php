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

/* Mail/shipping_notify.html.twig */
class __TwigTemplate_6ac7542993e0514c178773812a6827f6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mail/shipping_notify.html.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mail/shipping_notify.html.twig"));

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
                        <div class=\"title\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:600;color:#374550;\">商品を発送いたしました。</div>
                        <br>
                        <div class=\"body-text\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333;\">
                            ";
        // line 31
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 31, $this->source); })()), "name01", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 31, $this->source); })()), "name02", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo " 様<br>
                            <br>
                            ";
        // line 33
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 33, $this->source); })()), "shop_name", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "でございます。<br/>
                            お客さまがご注文された以下の商品を発送いたしました。商品の到着まで、今しばらくお待ちください。<br/>
                            <br/>
                            ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 36, $this->source); })()), "tracking_number", [], "any", false, false, true, 36)) {
            // line 37
            echo "                                <hr style=\"border-top: 3px double #8c8b8b;\">
                                お問い合わせ番号：";
            // line 38
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 38, $this->source); })()), "tracking_number", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "
                                ";
            // line 39
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 39, $this->source); })()), "Delivery", [], "any", false, false, true, 39), "confirm_url", [], "any", false, false, true, 39)) {
                // line 40
                echo "                                    <br/>
                                    お問い合わせURL：";
                // line 41
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 41, $this->source); })()), "Delivery", [], "any", false, false, true, 41), "confirm_url", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                echo "
                                ";
            }
            // line 43
            echo "                                <br/>
                            ";
        }
        // line 45
        echo "                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　ご注文商品明細<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 48, $this->source); })()), "productOrderItems", [], "any", false, false, true, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["OrderItem"]) {
            // line 49
            echo "                                商品コード：";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_code", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            echo "<br/>
                                商品名：";
            // line 50
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_name", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name1", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name2", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "<br/>
                                数量：";
            // line 51
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "quantity", [], "any", false, false, true, 51), 51, $this->source)), "html", null, true);
            echo "<br/>
                                <br/>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　ご注文者情報<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            お名前：";
        // line 57
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 57, $this->source); })()), "name01", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 57, $this->source); })()), "name02", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        echo " 様<br/>
                            お名前(カナ)：";
        // line 58
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 58, $this->source); })()), "kana01", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 58, $this->source); })()), "kana02", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
        echo " 様<br/>
                            ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 59, $this->source); })()), "company_name", [], "any", false, false, true, 59)) {
            // line 60
            echo "                                会社名：";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 60, $this->source); })()), "company_name", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "<br/>
                            ";
        }
        // line 62
        echo "                            郵便番号：〒";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 62, $this->source); })()), "postal_code", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "<br/>
                            住所：";
        // line 63
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 63, $this->source); })()), "Pref", [], "any", false, false, true, 63), "name", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 63, $this->source); })()), "addr01", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 63, $this->source); })()), "addr02", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "<br/>
                            電話番号：";
        // line 64
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 64, $this->source); })()), "phone_number", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
        echo "<br/>
                            <br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　配送情報<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            お名前：";
        // line 69
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 69, $this->source); })()), "name01", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 69, $this->source); })()), "name02", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
        echo " 様<br/>
                            お名前(カナ)：";
        // line 70
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 70, $this->source); })()), "kana01", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 70, $this->source); })()), "kana02", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo " 様<br/>
                            ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 71, $this->source); })()), "company_name", [], "any", false, false, true, 71)) {
            // line 72
            echo "                                会社名：";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 72, $this->source); })()), "company_name", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo "<br/>
                            ";
        }
        // line 74
        echo "                            郵便番号：〒";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 74, $this->source); })()), "postal_code", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        echo "<br/>
                            住所：";
        // line 75
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 75, $this->source); })()), "Pref", [], "any", false, false, true, 75), "name", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 75, $this->source); })()), "addr01", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 75, $this->source); })()), "addr02", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo "<br/>
                            電話番号：";
        // line 76
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 76, $this->source); })()), "phone_number", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
        echo "<br/>
                            <br/>
                            配送方法：";
        // line 78
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 78, $this->source); })()), "shipping_delivery_name", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
        echo "<br/>
                            お届け日：";
        // line 79
        ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 79, $this->source); })()), "shipping_delivery_date", [], "any", false, false, true, 79))) ? (print ("指定なし")) : (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 79, $this->source); })()), "shipping_delivery_date", [], "any", false, false, true, 79)), "html", null, true))));
        echo "<br/>
                            お届け時間：";
        // line 80
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "shipping_delivery_time", [], "any", true, true, true, 80)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "shipping_delivery_time", [], "any", false, false, true, 80), 80, $this->source), "指定なし")) : ("指定なし")), "html", null, true);
        echo "<br/>
                            <br/>
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
        // line 92
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 92, $this->source); })()), "shop_name", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
        echo "より送信しております。<br/>
                        もしお心当たりが無い場合は、その旨 <a href=\"mailto:";
        // line 93
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 93, $this->source); })()), "email02", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
        echo "\" style=\"text-decoration:none;\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 93, $this->source); })()), "email02", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
        echo "</a> までご連絡いただければ幸いです。<br/>
                        <br/>
                        <div class=\"title\" style=\"font-size:14px;font-family:Helvetica, Arial, sans-serif;font-weight:600;color:#374550;\"><a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage");
        echo "\" style=\"color:#aaaaaa;text-decoration:none;\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 95, $this->source); })()), "shop_name", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
        echo "</a></div>
                        <div>copyright &copy; ";
        // line 96
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 96, $this->source); })()), "shop_name", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
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
        return "Mail/shipping_notify.html.twig";
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
        return array (  271 => 96,  265 => 95,  258 => 93,  254 => 92,  239 => 80,  235 => 79,  231 => 78,  226 => 76,  220 => 75,  215 => 74,  209 => 72,  207 => 71,  201 => 70,  195 => 69,  187 => 64,  181 => 63,  176 => 62,  170 => 60,  168 => 59,  162 => 58,  156 => 57,  151 => 54,  142 => 51,  134 => 50,  129 => 49,  125 => 48,  120 => 45,  116 => 43,  111 => 41,  108 => 40,  106 => 39,  102 => 38,  99 => 37,  97 => 36,  91 => 33,  84 => 31,  65 => 17,  57 => 11,);
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
                        <div class=\"title\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:600;color:#374550;\">商品を発送いたしました。</div>
                        <br>
                        <div class=\"body-text\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333;\">
                            {{ Order.name01 }} {{ Order.name02 }} 様<br>
                            <br>
                            {{ BaseInfo.shop_name }}でございます。<br/>
                            お客さまがご注文された以下の商品を発送いたしました。商品の到着まで、今しばらくお待ちください。<br/>
                            <br/>
                            {% if Shipping.tracking_number %}
                                <hr style=\"border-top: 3px double #8c8b8b;\">
                                お問い合わせ番号：{{ Shipping.tracking_number }}
                                {% if Shipping.Delivery.confirm_url %}
                                    <br/>
                                    お問い合わせURL：{{ Shipping.Delivery.confirm_url }}
                                {% endif %}
                                <br/>
                            {% endif %}
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　ご注文商品明細<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            {% for OrderItem in Shipping.productOrderItems %}
                                商品コード：{{ OrderItem.product_code }}<br/>
                                商品名：{{ OrderItem.product_name }}  {{ OrderItem.classcategory_name1 }}  {{ OrderItem.classcategory_name2 }}<br/>
                                数量：{{ OrderItem.quantity|number_format }}<br/>
                                <br/>
                            {% endfor %}
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
                            <br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　配送情報<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
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

", "Mail/shipping_notify.html.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\default\\Mail\\shipping_notify.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 36, "for" => 48);
        static $filters = array("escape" => 17, "number_format" => 51, "date_day" => 79, "default" => 80);
        static $functions = array("url" => 17);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'number_format', 'date_day', 'default'],
                ['url']
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
