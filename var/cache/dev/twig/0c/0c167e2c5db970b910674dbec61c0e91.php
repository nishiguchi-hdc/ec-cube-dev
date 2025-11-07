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

/* Mail/shipping_notify.twig */
class __TwigTemplate_d60d78c94195399498b8f70fad2d1e18 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mail/shipping_notify.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mail/shipping_notify.twig"));

        // line 12
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 12, $this->source); })()), "name01", [], "any", false, false, true, 12), 12, $this->source), "safe_textmail", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 12, $this->source); })()), "name02", [], "any", false, false, true, 12), 12, $this->source), "safe_textmail", null, true);
        echo " 様

お客さまがご注文された以下の商品を発送いたしました。商品の到着まで、今しばらくお待ちください。

";
        // line 16
        if (twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 16, $this->source); })()), "tracking_number", [], "any", false, false, true, 16)) {
            // line 17
            echo "お問い合わせ番号：";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 17, $this->source); })()), "tracking_number", [], "any", false, false, true, 17), 17, $this->source), "safe_textmail", null, true);
            echo "
";
            // line 18
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 18, $this->source); })()), "Delivery", [], "any", false, false, true, 18), "confirm_url", [], "any", false, false, true, 18)) {
                // line 19
                echo "お問い合わせURL：";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 19, $this->source); })()), "Delivery", [], "any", false, false, true, 19), "confirm_url", [], "any", false, false, true, 19), 19, $this->source), "safe_textmail", null, true);
                echo "
";
            }
        }
        // line 22
        echo "
************************************************
　ご注文商品明細
************************************************

";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 27, $this->source); })()), "productOrderItems", [], "any", false, false, true, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["OrderItem"]) {
            // line 28
            echo "商品コード：";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_code", [], "any", false, false, true, 28), 28, $this->source), "safe_textmail", null, true);
            echo "
商品名：";
            // line 29
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_name", [], "any", false, false, true, 29), 29, $this->source), "safe_textmail", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name1", [], "any", false, false, true, 29), 29, $this->source), "safe_textmail", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name2", [], "any", false, false, true, 29), 29, $this->source), "safe_textmail", null, true);
            echo "
数量：";
            // line 30
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "quantity", [], "any", false, false, true, 30), 30, $this->source)), "safe_textmail", null, true);
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
============================================

************************************************
　ご注文者情報
************************************************
お名前：";
        // line 39
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 39, $this->source); })()), "name01", [], "any", false, false, true, 39), 39, $this->source), "safe_textmail", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 39, $this->source); })()), "name02", [], "any", false, false, true, 39), 39, $this->source), "safe_textmail", null, true);
        echo " 様
お名前(カナ)：";
        // line 40
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 40, $this->source); })()), "kana01", [], "any", false, false, true, 40), 40, $this->source), "safe_textmail", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 40, $this->source); })()), "kana02", [], "any", false, false, true, 40), 40, $this->source), "safe_textmail", null, true);
        echo " 様
";
        // line 41
        if (twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 41, $this->source); })()), "company_name", [], "any", false, false, true, 41)) {
            // line 42
            echo "会社名：";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 42, $this->source); })()), "company_name", [], "any", false, false, true, 42), 42, $this->source), "safe_textmail", null, true);
            echo "
";
        }
        // line 44
        echo "郵便番号：〒";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 44, $this->source); })()), "postal_code", [], "any", false, false, true, 44), 44, $this->source), "safe_textmail", null, true);
        echo "
住所：";
        // line 45
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 45, $this->source); })()), "Pref", [], "any", false, false, true, 45), "name", [], "any", false, false, true, 45), 45, $this->source), "safe_textmail", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 45, $this->source); })()), "addr01", [], "any", false, false, true, 45), 45, $this->source), "safe_textmail", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 45, $this->source); })()), "addr02", [], "any", false, false, true, 45), 45, $this->source), "safe_textmail", null, true);
        echo "
電話番号：";
        // line 46
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 46, $this->source); })()), "phone_number", [], "any", false, false, true, 46), 46, $this->source), "safe_textmail", null, true);
        echo "

************************************************
　配送情報
************************************************

お名前：";
        // line 52
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 52, $this->source); })()), "name01", [], "any", false, false, true, 52), 52, $this->source), "safe_textmail", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 52, $this->source); })()), "name02", [], "any", false, false, true, 52), 52, $this->source), "safe_textmail", null, true);
        echo " 様
お名前(カナ)：";
        // line 53
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 53, $this->source); })()), "kana01", [], "any", false, false, true, 53), 53, $this->source), "safe_textmail", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 53, $this->source); })()), "kana02", [], "any", false, false, true, 53), 53, $this->source), "safe_textmail", null, true);
        echo " 様
";
        // line 54
        if (twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 54, $this->source); })()), "company_name", [], "any", false, false, true, 54)) {
            // line 55
            echo "会社名：";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 55, $this->source); })()), "company_name", [], "any", false, false, true, 55), 55, $this->source), "safe_textmail", null, true);
            echo "
";
        }
        // line 57
        echo "郵便番号：〒";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 57, $this->source); })()), "postal_code", [], "any", false, false, true, 57), 57, $this->source), "safe_textmail", null, true);
        echo "
住所：";
        // line 58
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 58, $this->source); })()), "Pref", [], "any", false, false, true, 58), "name", [], "any", false, false, true, 58), 58, $this->source), "safe_textmail", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 58, $this->source); })()), "addr01", [], "any", false, false, true, 58), 58, $this->source), "safe_textmail", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 58, $this->source); })()), "addr02", [], "any", false, false, true, 58), 58, $this->source), "safe_textmail", null, true);
        echo "
電話番号：";
        // line 59
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 59, $this->source); })()), "phone_number", [], "any", false, false, true, 59), 59, $this->source), "safe_textmail", null, true);
        echo "

配送方法：";
        // line 61
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 61, $this->source); })()), "shipping_delivery_name", [], "any", false, false, true, 61), 61, $this->source), "safe_textmail", null, true);
        echo "
お届け日：";
        // line 62
        ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 62, $this->source); })()), "shipping_delivery_date", [], "any", false, false, true, 62))) ? (print ("指定なし")) : (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 62, $this->source); })()), "shipping_delivery_date", [], "any", false, false, true, 62)), "safe_textmail", null, true))));
        echo "
お届け時間：";
        // line 63
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "shipping_delivery_time", [], "any", true, true, true, 63)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "shipping_delivery_time", [], "any", false, false, true, 63), 63, $this->source), "指定なし")) : ("指定なし")), "safe_textmail", null, true);
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
        return "Mail/shipping_notify.twig";
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
        return array (  207 => 63,  203 => 62,  199 => 61,  194 => 59,  188 => 58,  183 => 57,  177 => 55,  175 => 54,  169 => 53,  163 => 52,  154 => 46,  148 => 45,  143 => 44,  137 => 42,  135 => 41,  129 => 40,  123 => 39,  115 => 33,  106 => 30,  98 => 29,  93 => 28,  89 => 27,  82 => 22,  75 => 19,  73 => 18,  68 => 17,  66 => 16,  57 => 12,);
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
{% autoescape 'safe_textmail' %}
{{ Order.name01 }} {{ Order.name02 }} 様

お客さまがご注文された以下の商品を発送いたしました。商品の到着まで、今しばらくお待ちください。

{% if Shipping.tracking_number %}
お問い合わせ番号：{{ Shipping.tracking_number }}
{% if Shipping.Delivery.confirm_url %}
お問い合わせURL：{{ Shipping.Delivery.confirm_url }}
{% endif %}
{% endif %}

************************************************
　ご注文商品明細
************************************************

{% for OrderItem in Shipping.productOrderItems %}
商品コード：{{ OrderItem.product_code }}
商品名：{{ OrderItem.product_name }}  {{ OrderItem.classcategory_name1 }}  {{ OrderItem.classcategory_name2 }}
数量：{{ OrderItem.quantity|number_format }}

{% endfor %}

============================================

************************************************
　ご注文者情報
************************************************
お名前：{{ Order.name01 }} {{ Order.name02 }} 様
お名前(カナ)：{{ Order.kana01 }} {{ Order.kana02 }} 様
{% if Order.company_name %}
会社名：{{ Order.company_name }}
{% endif %}
郵便番号：〒{{ Order.postal_code }}
住所：{{ Order.Pref.name }}{{ Order.addr01 }}{{ Order.addr02 }}
電話番号：{{ Order.phone_number }}

************************************************
　配送情報
************************************************

お名前：{{ Shipping.name01 }} {{ Shipping.name02 }} 様
お名前(カナ)：{{ Shipping.kana01 }} {{ Shipping.kana02 }} 様
{% if Shipping.company_name %}
会社名：{{ Shipping.company_name }}
{% endif %}
郵便番号：〒{{ Shipping.postal_code }}
住所：{{ Shipping.Pref.name }}{{ Shipping.addr01 }}{{ Shipping.addr02 }}
電話番号：{{ Shipping.phone_number }}

配送方法：{{ Shipping.shipping_delivery_name }}
お届け日：{{ Shipping.shipping_delivery_date is empty ? '指定なし' : Shipping.shipping_delivery_date|date_day }}
お届け時間：{{ Shipping.shipping_delivery_time|default('指定なし') }}
{% endautoescape %}
", "Mail/shipping_notify.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\default\\Mail\\shipping_notify.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("autoescape" => 11, "if" => 16, "for" => 27);
        static $filters = array("escape" => 12, "number_format" => 30, "date_day" => 62, "default" => 63);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['autoescape', 'if', 'for'],
                ['escape', 'number_format', 'date_day', 'default'],
                []
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
