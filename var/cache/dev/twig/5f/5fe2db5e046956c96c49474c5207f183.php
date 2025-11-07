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

/* EccubePaymentLite42/Resource/template/default/Mail/regular_notice_mail.twig */
class __TwigTemplate_62ea500e037108544ba1e2b2cbc9cc8a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Mail/regular_notice_mail.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Mail/regular_notice_mail.twig"));

        // line 2
        echo "    ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 2, $this->source); })()), "name01", [], "any", false, false, true, 2), 2, $this->source);
        echo " ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 2, $this->source); })()), "name02", [], "any", false, false, true, 2), 2, $this->source);
        echo " 様

    こちらは定期購入内容の事前お知らせメールとなります。
    下記ご注文内容にお間違えがないかご確認下さい。

    ************************************************
    　ご請求金額
    ************************************************

    お支払い合計：";
        // line 11
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 11, $this->source); })()), "payment_total", [], "any", false, false, true, 11), 11, $this->source));
        echo "
    お支払い方法：";
        // line 12
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 12, $this->source); })()), "payment_method", [], "any", false, false, true, 12), 12, $this->source);
        echo "


    ************************************************
    　ご注文商品明細
    ************************************************

    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 19, $this->source); })()), "MergedRegularProductOrderItems", [], "any", false, false, true, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["RegularOrderItem"]) {
            // line 20
            echo "        商品コード：";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrderItem"], "product_code", [], "any", false, false, true, 20), 20, $this->source);
            echo "
        商品名：";
            // line 21
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrderItem"], "product_name", [], "any", false, false, true, 21), 21, $this->source);
            echo "  ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrderItem"], "classcategory_name1", [], "any", false, false, true, 21), 21, $this->source);
            echo "  ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrderItem"], "classcategory_name2", [], "any", false, false, true, 21), 21, $this->source);
            echo "
        小計：";
            // line 22
            echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrderItem"], "total_price", [], "any", false, false, true, 22), 22, $this->source));
            echo "
        数量：";
            // line 23
            echo twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrderItem"], "quantity", [], "any", false, false, true, 23), 23, $this->source));
            echo "

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['RegularOrderItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
    -------------------------------------------------
    小　計：";
        // line 28
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 28, $this->source); })()), "subtotal", [], "any", false, false, true, 28), 28, $this->source));
        echo "

    手数料：";
        // line 30
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 30, $this->source); })()), "charge", [], "any", false, false, true, 30), 30, $this->source));
        echo "
    送　料：";
        // line 31
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 31, $this->source); })()), "delivery_fee_total", [], "any", false, false, true, 31), 31, $this->source));
        echo "
    ";
        // line 32
        if ((twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 32, $this->source); })()), "discount", [], "any", false, false, true, 32) > 0)) {
            // line 33
            echo "        値引き：";
            echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((0 - twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 33, $this->source); })()), "discount", [], "any", false, false, true, 33)));
            echo "
    ";
        }
        // line 35
        echo "    ============================================
    合　計：";
        // line 36
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 36, $this->source); })()), "payment_total", [], "any", false, false, true, 36), 36, $this->source));
        echo "

    ************************************************
    　ご注文者情報
    ************************************************
    お名前：";
        // line 41
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 41, $this->source); })()), "name01", [], "any", false, false, true, 41), 41, $this->source);
        echo " ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 41, $this->source); })()), "name02", [], "any", false, false, true, 41), 41, $this->source);
        echo " 様
    お名前(カナ)：";
        // line 42
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 42, $this->source); })()), "kana01", [], "any", false, false, true, 42), 42, $this->source);
        echo " ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 42, $this->source); })()), "kana02", [], "any", false, false, true, 42), 42, $this->source);
        echo " 様
    ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 43, $this->source); })()), "company_name", [], "any", false, false, true, 43)) {
            // line 44
            echo "        会社名：";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 44, $this->source); })()), "company_name", [], "any", false, false, true, 44), 44, $this->source);
            echo "
    ";
        }
        // line 46
        echo "    郵便番号：〒";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 46, $this->source); })()), "postal_code", [], "any", false, false, true, 46), 46, $this->source);
        echo "
    住所：";
        // line 47
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 47, $this->source); })()), "Pref", [], "any", false, false, true, 47), "name", [], "any", false, false, true, 47), 47, $this->source);
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 47, $this->source); })()), "addr01", [], "any", false, false, true, 47), 47, $this->source);
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 47, $this->source); })()), "addr02", [], "any", false, false, true, 47), 47, $this->source);
        echo "
    電話番号：";
        // line 48
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 48, $this->source); })()), "phone_number", [], "any", false, false, true, 48), 48, $this->source);
        echo "
    メールアドレス：";
        // line 49
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 49, $this->source); })()), "email", [], "any", false, false, true, 49), 49, $this->source);
        echo "

    ************************************************
    　配送情報
    ************************************************

    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 55, $this->source); })()), "RegularShippings", [], "any", false, false, true, 55));
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
            // line 56
            echo "        ◎お届け先";
            if (twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 56, $this->source); })()), "multiple", [], "any", false, false, true, 56)) {
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 56), 56, $this->source);
            }
            // line 57
            echo "
        お名前：";
            // line 58
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "name01", [], "any", false, false, true, 58), 58, $this->source);
            echo " ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "name02", [], "any", false, false, true, 58), 58, $this->source);
            echo " 様
        お名前(カナ)：";
            // line 59
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "kana01", [], "any", false, false, true, 59), 59, $this->source);
            echo " ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "kana02", [], "any", false, false, true, 59), 59, $this->source);
            echo " 様
        ";
            // line 60
            if (twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "company_name", [], "any", false, false, true, 60)) {
                // line 61
                echo "            会社名：";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "company_name", [], "any", false, false, true, 61), 61, $this->source);
                echo "
        ";
            }
            // line 63
            echo "        郵便番号：〒";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "postal_code", [], "any", false, false, true, 63), 63, $this->source);
            echo "
        住所：";
            // line 64
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "Pref", [], "any", false, false, true, 64), "name", [], "any", false, false, true, 64), 64, $this->source);
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "addr01", [], "any", false, false, true, 64), 64, $this->source);
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "addr02", [], "any", false, false, true, 64), 64, $this->source);
            echo "
        電話番号：";
            // line 65
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "phone_number", [], "any", false, false, true, 65), 65, $this->source);
            echo "

        配送方法：";
            // line 67
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "shipping_delivery_name", [], "any", false, false, true, 67), 67, $this->source);
            echo "
        お届け日：";
            // line 68
            echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "next_delivery_date", [], "any", false, false, true, 68))) ? ("指定なし") : (twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "next_delivery_date", [], "any", false, false, true, 68), 68, $this->source), "Y/m/d")));
            echo "
        お届け時間：";
            // line 69
            echo ((twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "shipping_delivery_time", [], "any", true, true, true, 69)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "shipping_delivery_time", [], "any", false, false, true, 69), 69, $this->source), "指定なし")) : ("指定なし"));
            echo "

        ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "RegularProductOrderItems", [], "any", false, false, true, 71));
            foreach ($context['_seq'] as $context["_key"] => $context["RegularOrderItem"]) {
                // line 72
                echo "            商品コード：";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrderItem"], "product_code", [], "any", false, false, true, 72), 72, $this->source);
                echo "
            商品名：";
                // line 73
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrderItem"], "product_name", [], "any", false, false, true, 73), 73, $this->source);
                echo "  ";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrderItem"], "classcategory_name1", [], "any", false, false, true, 73), 73, $this->source);
                echo "  ";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrderItem"], "classcategory_name2", [], "any", false, false, true, 73), 73, $this->source);
                echo "
            数量：";
                // line 74
                echo twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrderItem"], "quantity", [], "any", false, false, true, 74), 74, $this->source));
                echo "

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['RegularOrderItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "    ";
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
        // line 78
        echo "
    ";
        // line 79
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 79, $this->source); })()), "complete_mail_message", [], "any", false, false, true, 79))) {
            // line 80
            echo "        ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 80, $this->source); })()), "complete_mail_message", [], "any", false, false, true, 80), 80, $this->source);
            echo "
    ";
        }
        // line 82
        echo "
    ============================================

    このメッセージはお客様へのお知らせ専用ですので、
    このメッセージへの返信としてご質問をお送りいただいても回答できません。
    ご了承ください。
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "EccubePaymentLite42/Resource/template/default/Mail/regular_notice_mail.twig";
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
        return array (  321 => 82,  315 => 80,  313 => 79,  310 => 78,  296 => 77,  287 => 74,  279 => 73,  274 => 72,  270 => 71,  265 => 69,  261 => 68,  257 => 67,  252 => 65,  246 => 64,  241 => 63,  235 => 61,  233 => 60,  227 => 59,  221 => 58,  218 => 57,  213 => 56,  196 => 55,  187 => 49,  183 => 48,  177 => 47,  172 => 46,  166 => 44,  164 => 43,  158 => 42,  152 => 41,  144 => 36,  141 => 35,  135 => 33,  133 => 32,  129 => 31,  125 => 30,  120 => 28,  116 => 26,  107 => 23,  103 => 22,  95 => 21,  90 => 20,  86 => 19,  76 => 12,  72 => 11,  57 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% autoescape false %}
    {{ RegularOrder.name01 }} {{ RegularOrder.name02 }} 様

    こちらは定期購入内容の事前お知らせメールとなります。
    下記ご注文内容にお間違えがないかご確認下さい。

    ************************************************
    　ご請求金額
    ************************************************

    お支払い合計：{{ RegularOrder.payment_total|price}}
    お支払い方法：{{ RegularOrder.payment_method }}


    ************************************************
    　ご注文商品明細
    ************************************************

    {% for RegularOrderItem in RegularOrder.MergedRegularProductOrderItems %}
        商品コード：{{ RegularOrderItem.product_code }}
        商品名：{{ RegularOrderItem.product_name }}  {{ RegularOrderItem.classcategory_name1 }}  {{ RegularOrderItem.classcategory_name2 }}
        小計：{{ RegularOrderItem.total_price|price }}
        数量：{{ RegularOrderItem.quantity|number_format }}

    {% endfor %}

    -------------------------------------------------
    小　計：{{ RegularOrder.subtotal|price }}

    手数料：{{ RegularOrder.charge|price }}
    送　料：{{ RegularOrder.delivery_fee_total|price}}
    {% if RegularOrder.discount > 0 %}
        値引き：{{ (0 - RegularOrder.discount)|price}}
    {% endif %}
    ============================================
    合　計：{{ RegularOrder.payment_total|price }}

    ************************************************
    　ご注文者情報
    ************************************************
    お名前：{{ RegularOrder.name01 }} {{ RegularOrder.name02 }} 様
    お名前(カナ)：{{ RegularOrder.kana01 }} {{ RegularOrder.kana02 }} 様
    {% if RegularOrder.company_name %}
        会社名：{{ RegularOrder.company_name }}
    {% endif %}
    郵便番号：〒{{ RegularOrder.postal_code }}
    住所：{{ RegularOrder.Pref.name }}{{ RegularOrder.addr01 }}{{ RegularOrder.addr02 }}
    電話番号：{{ RegularOrder.phone_number }}
    メールアドレス：{{ RegularOrder.email }}

    ************************************************
    　配送情報
    ************************************************

    {%  for RegularShipping in RegularOrder.RegularShippings %}
        ◎お届け先{% if RegularOrder.multiple %}{{ loop.index }}{% endif %}

        お名前：{{ RegularShipping.name01 }} {{ RegularShipping.name02 }} 様
        お名前(カナ)：{{ RegularShipping.kana01 }} {{ RegularShipping.kana02 }} 様
        {% if RegularShipping.company_name %}
            会社名：{{ RegularShipping.company_name }}
        {% endif %}
        郵便番号：〒{{ RegularShipping.postal_code }}
        住所：{{ RegularShipping.Pref.name }}{{ RegularShipping.addr01 }}{{ RegularShipping.addr02 }}
        電話番号：{{ RegularShipping.phone_number }}

        配送方法：{{ RegularShipping.shipping_delivery_name }}
        お届け日：{{ RegularShipping.next_delivery_date is empty ? '指定なし' : RegularShipping.next_delivery_date|date('Y/m/d') }}
        お届け時間：{{ RegularShipping.shipping_delivery_time|default('指定なし') }}

        {%  for RegularOrderItem in RegularShipping.RegularProductOrderItems %}
            商品コード：{{ RegularOrderItem.product_code }}
            商品名：{{ RegularOrderItem.product_name }}  {{ RegularOrderItem.classcategory_name1 }}  {{ RegularOrderItem.classcategory_name2 }}
            数量：{{ RegularOrderItem.quantity|number_format }}

        {% endfor %}
    {% endfor %}

    {% if RegularOrder.complete_mail_message is not empty %}
        {{ RegularOrder.complete_mail_message }}
    {% endif %}

    ============================================

    このメッセージはお客様へのお知らせ専用ですので、
    このメッセージへの返信としてご質問をお送りいただいても回答できません。
    ご了承ください。
{% endautoescape %}
", "EccubePaymentLite42/Resource/template/default/Mail/regular_notice_mail.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\default\\Mail\\regular_notice_mail.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("autoescape" => 1, "for" => 19, "if" => 32);
        static $filters = array("price" => 11, "number_format" => 23, "date" => 68, "default" => 69);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['autoescape', 'for', 'if'],
                ['price', 'number_format', 'date', 'default'],
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
