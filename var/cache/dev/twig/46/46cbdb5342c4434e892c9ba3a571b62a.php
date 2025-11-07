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

/* AmazonPayV2_42_Bundle/Resource/template/default/Cart/button.twig */
class __TwigTemplate_77e956504a617898f266b773e3725062 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Resource/template/default/Cart/button.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Resource/template/default/Cart/button.twig"));

        // line 10
        echo "
<style>
    .AmazonPayButton {
        margin-top: 10px;
    }
</style>
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Carts"]) || array_key_exists("Carts", $context) ? $context["Carts"] : (function () { throw new RuntimeError('Variable "Carts" does not exist.', 16, $this->source); })()));
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
            // line 17
            echo "    ";
            $context["cartKey"] = twig_get_attribute($this->env, $this->source, $context["Cart"], "cart_key", [], "any", false, false, true, 17);
            // line 18
            echo "    ";
            $context["SaleType"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Cart"], "CartItems", [], "any", false, false, true, 18), 0, [], "array", false, false, true, 18), "ProductClass", [], "any", false, false, true, 18), "SaleType", [], "any", false, false, true, 18), "id", [], "any", false, false, true, 18);
            // line 19
            echo "    ";
            if (twig_in_filter((isset($context["SaleType"]) || array_key_exists("SaleType", $context) ? $context["SaleType"] : (function () { throw new RuntimeError('Variable "SaleType" does not exist.', 19, $this->source); })()), (isset($context["AmazonSaleTypes"]) || array_key_exists("AmazonSaleTypes", $context) ? $context["AmazonSaleTypes"] : (function () { throw new RuntimeError('Variable "AmazonSaleTypes" does not exist.', 19, $this->source); })()))) {
                // line 20
                echo "        <div style=\"width: 210px;\">
            <p style=\"height: 70px;\" id=\"AmazonPayButton";
                // line 21
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 21, $this->source); })()), 21, $this->source), "html", null, true);
                echo "\" class=\"AmazonPayButton\"></p>
        </div>
        <script>
            \$(function () {
                // ボタンを設置
                \$('#form_cart > div.ec-cartRole__actions').eq(\"";
                // line 26
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                echo "\").append(\$(\"#AmazonPayButton";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 26, $this->source); })()), 26, $this->source), "html", null, true);
                echo "\"));
            });
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
        return "AmazonPayV2_42_Bundle/Resource/template/default/Cart/button.twig";
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
        return array (  102 => 26,  94 => 21,  91 => 20,  88 => 19,  85 => 18,  82 => 17,  65 => 16,  57 => 10,);
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

<style>
    .AmazonPayButton {
        margin-top: 10px;
    }
</style>
{% for CartIndex,Cart in Carts %}
    {% set cartKey = Cart.cart_key %}
    {% set SaleType = Cart.CartItems[0].ProductClass.SaleType.id %}
    {% if SaleType in AmazonSaleTypes %}
        <div style=\"width: 210px;\">
            <p style=\"height: 70px;\" id=\"AmazonPayButton{{ cartKey }}\" class=\"AmazonPayButton\"></p>
        </div>
        <script>
            \$(function () {
                // ボタンを設置
                \$('#form_cart > div.ec-cartRole__actions').eq(\"{{ loop.index0 }}\").append(\$(\"#AmazonPayButton{{ cartKey }}\"));
            });
        </script>
    {% endif %}
{% endfor %}", "AmazonPayV2_42_Bundle/Resource/template/default/Cart/button.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\AmazonPayV2_42_Bundle\\Resource\\template\\default\\Cart\\button.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 16, "set" => 17, "if" => 19);
        static $filters = array("escape" => 21);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape'],
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
