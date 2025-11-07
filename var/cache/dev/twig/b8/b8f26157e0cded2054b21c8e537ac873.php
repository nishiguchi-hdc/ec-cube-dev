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

/* EccubePaymentLite42/Resource/template/default/Mail/regular_notice_mail.html.twig */
class __TwigTemplate_aa59efcb9435b54635e0c293ce428461 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Mail/regular_notice_mail.html.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Mail/regular_notice_mail.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">

<body bgcolor=\"#F0F0F0\" leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\" style=\"margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;\">
<br>
<br>
<div align=\"center\"><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage");
        echo "\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:30px;color:#333333;text-decoration:none;\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 7, $this->source); })()), "shop_name", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
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
                        <div class=\"body-text\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333;\">
                            ";
        // line 19
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 19, $this->source); })()), "name01", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 19, $this->source); })()), "name02", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo " 様<br/>
                            <br/>
                            こちらは定期購入内容の事前お知らせメールとなります。<br/>
                            下記ご注文内容にお間違えがないかご確認下さい。<br/>
                            <br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　ご請求金額<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            お支払い合計：";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 27, $this->source); })()), "payment_total", [], "any", false, false, true, 27), 27, $this->source)), "html", null, true);
        echo "<br/>
                            お支払い方法：";
        // line 28
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 28, $this->source); })()), "payment_method", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "<br/>
                            <br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　ご注文商品明細<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 33, $this->source); })()), "MergedRegularProductOrderItems", [], "any", false, false, true, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["RegularOrderItem"]) {
            // line 34
            echo "                                商品コード：";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrderItem"], "product_code", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "<br/>
                                商品名：";
            // line 35
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrderItem"], "product_name", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrderItem"], "classcategory_name1", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrderItem"], "classcategory_name2", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "<br/>
                                小計：";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrderItem"], "total_price", [], "any", false, false, true, 36), 36, $this->source)), "html", null, true);
            echo "<br/>
                                数量：";
            // line 37
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrderItem"], "quantity", [], "any", false, false, true, 37), 37, $this->source)), "html", null, true);
            echo "<br/>
                                <br/>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['RegularOrderItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                            <hr style=\"border-top: 2px dashed #8c8b8b;\">
                            小　計：";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 41, $this->source); })()), "subtotal", [], "any", false, false, true, 41), 41, $this->source)), "html", null, true);
        echo "<br/>
                            <br/>
                            手数料：";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 43, $this->source); })()), "charge", [], "any", false, false, true, 43), 43, $this->source)), "html", null, true);
        echo "<br/>
                            送　料：";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 44, $this->source); })()), "delivery_fee_total", [], "any", false, false, true, 44), 44, $this->source)), "html", null, true);
        echo "<br/>
                            ";
        // line 45
        if ((twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 45, $this->source); })()), "discount", [], "any", false, false, true, 45) > 0)) {
            // line 46
            echo "                                値引き：";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((0 - twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 46, $this->source); })()), "discount", [], "any", false, false, true, 46))), "html", null, true);
            echo "<br/>
                            ";
        }
        // line 48
        echo "                            <hr style=\"border-top: 1px dotted #8c8b8b;\">
                            合　計：";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 49, $this->source); })()), "payment_total", [], "any", false, false, true, 49), 49, $this->source)), "html", null, true);
        echo "<br/>
                            <br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            ご注文者情報<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            お名前：";
        // line 54
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 54, $this->source); })()), "name01", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 54, $this->source); })()), "name02", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo " 様<br/>
                            お名前(カナ)：";
        // line 55
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 55, $this->source); })()), "kana01", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 55, $this->source); })()), "kana02", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
        echo " 様<br/>
                            ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 56, $this->source); })()), "company_name", [], "any", false, false, true, 56)) {
            // line 57
            echo "                                会社名：";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 57, $this->source); })()), "company_name", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            echo "<br/>
                            ";
        }
        // line 59
        echo "                            郵便番号：〒";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 59, $this->source); })()), "postal_code", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo "<br/>
                            住所：";
        // line 60
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 60, $this->source); })()), "Pref", [], "any", false, false, true, 60), "name", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 60, $this->source); })()), "addr01", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 60, $this->source); })()), "addr02", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "<br/>
                            電話番号：";
        // line 61
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 61, $this->source); })()), "phone_number", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        echo "<br/>
                            メールアドレス：";
        // line 62
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 62, $this->source); })()), "email", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "<br/>
                            <br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　配送情報<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">

                            ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 68, $this->source); })()), "RegularShippings", [], "any", false, false, true, 68));
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
        foreach ($context['_seq'] as $context["_key"] => $context["RegularShipping"]) {
            // line 69
            echo "                                ◎お届け先";
            if (twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 69, $this->source); })()), "multiple", [], "any", false, false, true, 69)) {
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
            }
            echo "<br/>
                                <br/>
                                お名前：";
            // line 71
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "name01", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "name02", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            echo " 様<br/>
                                お名前(カナ)：";
            // line 72
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "kana01", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "kana02", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo " 様<br/>
                                ";
            // line 73
            if (twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "company_name", [], "any", false, false, true, 73)) {
                // line 74
                echo "                                    会社名：";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "company_name", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                echo "<br/>
                                ";
            }
            // line 76
            echo "                                郵便番号：〒";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "postal_code", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            echo "<br/>
                                住所：";
            // line 77
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "Pref", [], "any", false, false, true, 77), "name", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "addr01", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "addr02", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "<br/>
                                電話番号：";
            // line 78
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "phone_number", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
            echo "<br/>
                                <br/>
                                配送方法：";
            // line 80
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "shipping_delivery_name", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "<br/>
                                お届け日：";
            // line 81
            ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "next_delivery_date", [], "any", false, false, true, 81))) ? (print ("指定なし")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "next_delivery_date", [], "any", false, false, true, 81), "Y/m/d"), "html", null, true))));
            echo "<br/>
                                お届け時間：";
            // line 82
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "shipping_delivery_time", [], "any", true, true, true, 82)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "shipping_delivery_time", [], "any", false, false, true, 82), 82, $this->source), "指定なし")) : ("指定なし")), "html", null, true);
            echo "<br/>
                                <br/>
                                ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "RegularProductOrderItems", [], "any", false, false, true, 84));
            foreach ($context['_seq'] as $context["_key"] => $context["RegularOrderItem"]) {
                // line 85
                echo "                                    商品コード：";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrderItem"], "product_code", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                echo "<br/>
                                    商品名：";
                // line 86
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrderItem"], "product_name", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrderItem"], "classcategory_name1", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrderItem"], "classcategory_name2", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                echo "<br/>
                                    数量：";
                // line 87
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrderItem"], "quantity", [], "any", false, false, true, 87), 87, $this->source)), "html", null, true);
                echo "<br/>
                                    <br/>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['RegularOrderItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['RegularShipping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                            ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 91, $this->source); })()), "complete_mail_message", [], "any", false, false, true, 91))) {
            // line 92
            echo "                                ";
            echo twig_nl2br(twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 92, $this->source); })()), "complete_mail_message", [], "any", false, false, true, 92), 92, $this->source), "html", null, true));
            echo "<br/>
                            ";
        }
        // line 94
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
        // line 108
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 108, $this->source); })()), "shop_name", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
        echo "より送信しております。<br/>
                        もしお心当たりが無い場合は、その旨 <a href=\"mailto:";
        // line 109
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 109, $this->source); })()), "email02", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
        echo "\" style=\"text-decoration:none;\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 109, $this->source); })()), "email02", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
        echo "</a> までご連絡いただければ幸いです。<br/>
                        <br/>
                        <div class=\"title\" style=\"font-size:14px;font-family:Helvetica, Arial, sans-serif;font-weight:600;color:#374550;\"><a href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage");
        echo "\" style=\"color:#aaaaaa;text-decoration:none;\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 111, $this->source); })()), "shop_name", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
        echo "</a></div>
                        <div>copyright &copy; ";
        // line 112
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 112, $this->source); })()), "shop_name", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
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
        return "EccubePaymentLite42/Resource/template/default/Mail/regular_notice_mail.html.twig";
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
        return array (  372 => 112,  366 => 111,  359 => 109,  355 => 108,  339 => 94,  333 => 92,  330 => 91,  316 => 90,  307 => 87,  299 => 86,  294 => 85,  290 => 84,  285 => 82,  281 => 81,  277 => 80,  272 => 78,  266 => 77,  261 => 76,  255 => 74,  253 => 73,  247 => 72,  241 => 71,  233 => 69,  216 => 68,  207 => 62,  203 => 61,  197 => 60,  192 => 59,  186 => 57,  184 => 56,  178 => 55,  172 => 54,  164 => 49,  161 => 48,  155 => 46,  153 => 45,  149 => 44,  145 => 43,  140 => 41,  137 => 40,  128 => 37,  124 => 36,  116 => 35,  111 => 34,  107 => 33,  99 => 28,  95 => 27,  82 => 19,  65 => 7,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
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
                        <div class=\"body-text\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333;\">
                            {{ RegularOrder.name01 }} {{ RegularOrder.name02 }} 様<br/>
                            <br/>
                            こちらは定期購入内容の事前お知らせメールとなります。<br/>
                            下記ご注文内容にお間違えがないかご確認下さい。<br/>
                            <br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　ご請求金額<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            お支払い合計：{{ RegularOrder.payment_total|price }}<br/>
                            お支払い方法：{{ RegularOrder.payment_method }}<br/>
                            <br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　ご注文商品明細<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            {% for RegularOrderItem in RegularOrder.MergedRegularProductOrderItems %}
                                商品コード：{{ RegularOrderItem.product_code }}<br/>
                                商品名：{{ RegularOrderItem.product_name }}  {{ RegularOrderItem.classcategory_name1 }}  {{ RegularOrderItem.classcategory_name2 }}<br/>
                                小計：{{ RegularOrderItem.total_price|price }}<br/>
                                数量：{{ RegularOrderItem.quantity|number_format }}<br/>
                                <br/>
                            {% endfor %}
                            <hr style=\"border-top: 2px dashed #8c8b8b;\">
                            小　計：{{ RegularOrder.subtotal|price }}<br/>
                            <br/>
                            手数料：{{ RegularOrder.charge|price }}<br/>
                            送　料：{{ RegularOrder.delivery_fee_total|price }}<br/>
                            {% if RegularOrder.discount > 0 %}
                                値引き：{{ (0 - RegularOrder.discount)|price }}<br/>
                            {% endif %}
                            <hr style=\"border-top: 1px dotted #8c8b8b;\">
                            合　計：{{ RegularOrder.payment_total|price }}<br/>
                            <br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            ご注文者情報<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            お名前：{{ RegularOrder.name01 }} {{ RegularOrder.name02 }} 様<br/>
                            お名前(カナ)：{{ RegularOrder.kana01 }} {{ RegularOrder.kana02 }} 様<br/>
                            {% if RegularOrder.company_name %}
                                会社名：{{ RegularOrder.company_name }}<br/>
                            {% endif %}
                            郵便番号：〒{{ RegularOrder.postal_code }}<br/>
                            住所：{{ RegularOrder.Pref.name }}{{ RegularOrder.addr01 }}{{ RegularOrder.addr02 }}<br/>
                            電話番号：{{ RegularOrder.phone_number }}<br/>
                            メールアドレス：{{ RegularOrder.email }}<br/>
                            <br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　配送情報<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">

                            {% for RegularShipping in RegularOrder.RegularShippings %}
                                ◎お届け先{% if RegularOrder.multiple %}{{ loop.index }}{% endif %}<br/>
                                <br/>
                                お名前：{{ RegularShipping.name01 }} {{ RegularShipping.name02 }} 様<br/>
                                お名前(カナ)：{{ RegularShipping.kana01 }} {{ RegularShipping.kana02 }} 様<br/>
                                {% if RegularShipping.company_name %}
                                    会社名：{{ RegularShipping.company_name }}<br/>
                                {% endif %}
                                郵便番号：〒{{ RegularShipping.postal_code }}<br/>
                                住所：{{ RegularShipping.Pref.name }}{{ RegularShipping.addr01 }}{{ RegularShipping.addr02 }}<br/>
                                電話番号：{{ RegularShipping.phone_number }}<br/>
                                <br/>
                                配送方法：{{ RegularShipping.shipping_delivery_name }}<br/>
                                お届け日：{{ RegularShipping.next_delivery_date is empty ? '指定なし' : RegularShipping.next_delivery_date|date('Y/m/d') }}<br/>
                                お届け時間：{{ RegularShipping.shipping_delivery_time|default('指定なし') }}<br/>
                                <br/>
                                {% for RegularOrderItem in RegularShipping.RegularProductOrderItems %}
                                    商品コード：{{ RegularOrderItem.product_code }}<br/>
                                    商品名：{{ RegularOrderItem.product_name }}  {{ RegularOrderItem.classcategory_name1 }}  {{ RegularOrderItem.classcategory_name2 }}<br/>
                                    数量：{{ RegularOrderItem.quantity|number_format }}<br/>
                                    <br/>
                                {% endfor %}
                            {% endfor %}
                            {% if RegularOrder.complete_mail_message is not empty %}
                                {{ RegularOrder.complete_mail_message|nl2br }}<br/>
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
", "EccubePaymentLite42/Resource/template/default/Mail/regular_notice_mail.html.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\default\\Mail\\regular_notice_mail.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 33, "if" => 45);
        static $filters = array("escape" => 7, "price" => 27, "number_format" => 37, "date" => 81, "default" => 82, "nl2br" => 92);
        static $functions = array("url" => 7);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'price', 'number_format', 'date', 'default', 'nl2br'],
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
