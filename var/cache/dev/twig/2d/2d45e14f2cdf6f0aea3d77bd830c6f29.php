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

/* AmazonPayV2_42_Bundle/Resource/template/default/Cart/amazon_pay_js.twig */
class __TwigTemplate_2e35c9abc43f8c910e6c9644377539b9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Resource/template/default/Cart/amazon_pay_js.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Resource/template/default/Cart/amazon_pay_js.twig"));

        // line 10
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["AmazonPayV2Api"]) || array_key_exists("AmazonPayV2Api", $context) ? $context["AmazonPayV2Api"] : (function () { throw new RuntimeError('Variable "AmazonPayV2Api" does not exist.', 10, $this->source); })()), "checkout_script_url", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "\"></script>

";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Carts"]) || array_key_exists("Carts", $context) ? $context["Carts"] : (function () { throw new RuntimeError('Variable "Carts" does not exist.', 12, $this->source); })()));
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
        foreach ($context['_seq'] as $context["CartIndex"] => $context["Cart"]) {
            // line 13
            echo "    ";
            $context["cartKey"] = twig_get_attribute($this->env, $this->source, $context["Cart"], "cart_key", [], "any", false, false, true, 13);
            // line 14
            echo "    ";
            $context["SaleType"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Cart"], "CartItems", [], "any", false, false, true, 14), 0, [], "array", false, false, true, 14), "ProductClass", [], "any", false, false, true, 14), "SaleType", [], "any", false, false, true, 14), "id", [], "any", false, false, true, 14);
            // line 15
            echo "    ";
            if (twig_in_filter((isset($context["SaleType"]) || array_key_exists("SaleType", $context) ? $context["SaleType"] : (function () { throw new RuntimeError('Variable "SaleType" does not exist.', 15, $this->source); })()), (isset($context["AmazonSaleTypes"]) || array_key_exists("AmazonSaleTypes", $context) ? $context["AmazonSaleTypes"] : (function () { throw new RuntimeError('Variable "AmazonSaleTypes" does not exist.', 15, $this->source); })()))) {
                // line 16
                echo "    <script>
    // ボタンを設置
    \$('#form_cart > div.ec-cartRole__actions').eq(\"";
                // line 18
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "\").after(\$(\"#AmazonPayJS";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 18, $this->source); })()), 18, $this->source), "html", null, true);
                echo "\"));

    \$(function () {
        amazon.Pay.renderButton('#AmazonPayButton";
                // line 21
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 21, $this->source); })()), 21, $this->source), "html", null, true);
                echo "', {
            // set checkout environment
            merchantId: '";
                // line 23
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["AmazonPayV2Config"]) || array_key_exists("AmazonPayV2Config", $context) ? $context["AmazonPayV2Config"] : (function () { throw new RuntimeError('Variable "AmazonPayV2Config" does not exist.', 23, $this->source); })()), "seller_id", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                echo "',
            ledgerCurrency: 'JPY',
            ";
                // line 25
                if ((twig_get_attribute($this->env, $this->source, (isset($context["AmazonPayV2Config"]) || array_key_exists("AmazonPayV2Config", $context) ? $context["AmazonPayV2Config"] : (function () { throw new RuntimeError('Variable "AmazonPayV2Config" does not exist.', 25, $this->source); })()), "env", [], "any", false, false, true, 25) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 25, $this->source); })()), "amazon_pay_v2", [], "any", false, false, true, 25), "env", [], "any", false, false, true, 25), "sandbox", [], "any", false, false, true, 25))) {
                    // line 26
                    echo "            sandbox: true,
            ";
                }
                // line 28
                echo "            // customize the buyer experience
            checkoutLanguage: 'ja_JP',
            productType: 'PayAndShip',
            placement: 'Cart',
            buttonColor: '";
                // line 32
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["AmazonPayV2Config"]) || array_key_exists("AmazonPayV2Config", $context) ? $context["AmazonPayV2Config"] : (function () { throw new RuntimeError('Variable "AmazonPayV2Config" does not exist.', 32, $this->source); })()), "cart_button_color", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                echo "',
            // configure Create Checkout Session request
            createCheckoutSessionConfig: {
                payloadJSON: '";
                // line 35
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 35, $this->source); })()), (isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 35, $this->source); })()), [], "array", false, false, true, 35), "payload", [], "any", false, false, true, 35), 35, $this->source);
                echo "', // string generated in step 2
                signature: '";
                // line 36
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 36, $this->source); })()), (isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 36, $this->source); })()), [], "array", false, false, true, 36), "signature", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                echo "', // signature generated in step 3
                publicKeyId: '";
                // line 37
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["AmazonPayV2Config"]) || array_key_exists("AmazonPayV2Config", $context) ? $context["AmazonPayV2Config"] : (function () { throw new RuntimeError('Variable "AmazonPayV2Config" does not exist.', 37, $this->source); })()), "public_key_id", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                echo "'
            }
        });
    });
    </script>
    ";
            } else {
                // line 43
                echo "        <script>
            \$(\"#AmazonPayButton";
                // line 44
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 44, $this->source); })()), 44, $this->source), "html", null, true);
                echo "\").remove();
        </script>
    ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['CartIndex'], $context['Cart'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "AmazonPayV2_42_Bundle/Resource/template/default/Cart/amazon_pay_js.twig";
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
        return array (  149 => 44,  146 => 43,  137 => 37,  133 => 36,  129 => 35,  123 => 32,  117 => 28,  113 => 26,  111 => 25,  106 => 23,  101 => 21,  93 => 18,  89 => 16,  86 => 15,  83 => 14,  80 => 13,  63 => 12,  57 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("{#
Amazon Pay V2 for EC-CUBE4.2
Copyright(c) 2023 EC-CUBE CO.,LTD. all rights reserved.

https://www.ec-cube.co.jp/

This program is not free software.
It applies to terms of service.
#}
<script src=\"{{ AmazonPayV2Api.checkout_script_url }}\"></script>

{% for CartIndex,Cart in Carts %}
    {% set cartKey = Cart.cart_key %}
    {% set SaleType = Cart.CartItems[0].ProductClass.SaleType.id %}
    {% if SaleType in AmazonSaleTypes %}
    <script>
    // ボタンを設置
    \$('#form_cart > div.ec-cartRole__actions').eq(\"{{ loop.index0 }}\").after(\$(\"#AmazonPayJS{{ cartKey }}\"));

    \$(function () {
        amazon.Pay.renderButton('#AmazonPayButton{{ cartKey }}', {
            // set checkout environment
            merchantId: '{{ AmazonPayV2Config.seller_id }}',
            ledgerCurrency: 'JPY',
            {% if AmazonPayV2Config.env == eccube_config.amazon_pay_v2.env.sandbox %}
            sandbox: true,
            {% endif %}
            // customize the buyer experience
            checkoutLanguage: 'ja_JP',
            productType: 'PayAndShip',
            placement: 'Cart',
            buttonColor: '{{ AmazonPayV2Config.cart_button_color }}',
            // configure Create Checkout Session request
            createCheckoutSessionConfig: {
                payloadJSON: '{{ cart[cartKey].payload | raw }}', // string generated in step 2
                signature: '{{ cart[cartKey].signature }}', // signature generated in step 3
                publicKeyId: '{{ AmazonPayV2Config.public_key_id }}'
            }
        });
    });
    </script>
    {% else %}
        <script>
            \$(\"#AmazonPayButton{{ cartKey }}\").remove();
        </script>
    {% endif %}
{% endfor %}
", "AmazonPayV2_42_Bundle/Resource/template/default/Cart/amazon_pay_js.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\AmazonPayV2_42_Bundle\\Resource\\template\\default\\Cart\\amazon_pay_js.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 12, "set" => 13, "if" => 15);
        static $filters = array("escape" => 10, "raw" => 35);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'raw'],
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
