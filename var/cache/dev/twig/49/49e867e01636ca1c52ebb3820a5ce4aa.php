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

/* Shopping/complete.twig */
class __TwigTemplate_186b5ef5dd5726d90a429188a97c2bd9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shopping/complete.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shopping/complete.twig"));

        // line 13
        $context["body_class"] = "cart_page";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Shopping/complete.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 16
        echo "<div class=\"ec-role\">
    <div class=\"ec-pageHeader\">
        <h1>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文完了"), "html", null, true);
        echo "</h1>
    </div>
</div>

<div class=\"ec-cartRole\">
    <div class=\"ec-cartRole__progress\">
        <ul class=\"ec-progress\">
            ";
        // line 25
        $context["step"] = 1;
        // line 26
        echo "            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">";
        // line 27
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 27, $this->source); })()), 27, $this->source), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 27, $this->source); })()) + 1);
        // line 28
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートの商品"), "html", null, true);
        echo "
                </div>
            </li>
            ";
        // line 32
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") == false)) {
            // line 33
            echo "                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
            // line 34
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 34, $this->source); })()), 34, $this->source), "html", null, true);
            $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 34, $this->source); })()) + 1);
            // line 35
            echo "                    </div>
                    <div class=\"ec-progress__label\">";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お客様情報"), "html", null, true);
            echo "
                    </div>
                </li>
            ";
        }
        // line 40
        echo "            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">";
        // line 41
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 41, $this->source); })()), 41, $this->source), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 41, $this->source); })()) + 1);
        // line 42
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文手続き"), "html", null, true);
        echo "
                </div>
            </li>
            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">";
        // line 47
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 47, $this->source); })()), 47, $this->source), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 47, $this->source); })()) + 1);
        // line 48
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文内容確認"), "html", null, true);
        echo "
                </div>
            </li>
            <li class=\"ec-progress__item  is-complete\">
                <div class=\"ec-progress__number\">";
        // line 53
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 53, $this->source); })()), 53, $this->source), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 53, $this->source); })()) + 1);
        // line 54
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("完了"), "html", null, true);
        echo "
                </div>
            </li>
        </ul>
    </div>
</div>

<div class=\"ec-cartCompleteRole\">
    <div class=\"ec-reportHeading\">
        <h2>";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文ありがとうございました"), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"ec-off3Grid ec-text-ac\">
        <div class=\"ec-off3Grid__cell\">
            <p class=\"ec-reportDescription\">
                ";
        // line 69
        echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ただいま、ご注文の確認メールをお送りさせていただきました。
万一、ご確認メールが届かない場合は、トラブルの可能性もありますので大変お手数ではございますがお問い合わせくださいますようお願いいたします。
"), "html", null, true));
        // line 71
        echo "
                ";
        // line 72
        if (twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 72, $this->source); })()), "id", [], "any", false, false, true, 72)) {
            // line 73
            echo "                    <br /><br /><strong>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文番号"), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 73, $this->source); })()), "orderNo", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            echo "</strong>
                ";
        }
        // line 75
        echo "            </p>
            ";
        // line 76
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 76, $this->source); })()), "complete_message", [], "any", false, false, true, 76))) {
            // line 77
            echo "                ";
            echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 77, $this->source); })()), "complete_message", [], "any", false, false, true, 77), 77, $this->source));
            echo "
            ";
        }
        // line 79
        echo "        </div>
    </div>
    <div class=\"ec-off4Grid\">
        ";
        // line 82
        if ((isset($context["hasNextCart"]) || array_key_exists("hasNextCart", $context) ? $context["hasNextCart"] : (function () { throw new RuntimeError('Variable "hasNextCart" does not exist.', 82, $this->source); })())) {
            // line 83
            echo "            <div class=\"ec-off4Grid__cell\"><a class=\"ec-blockBtn--primary\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("購入を続ける"), "html", null, true);
            echo "</a></div>
        ";
        } else {
            // line 85
            echo "            <div class=\"ec-off4Grid__cell\"><a class=\"ec-blockBtn--cancel\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("トップページへ"), "html", null, true);
            echo "</a></div>
        ";
        }
        // line 87
        echo "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Shopping/complete.twig";
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
        return array (  240 => 87,  232 => 85,  224 => 83,  222 => 82,  217 => 79,  211 => 77,  209 => 76,  206 => 75,  198 => 73,  196 => 72,  193 => 71,  189 => 69,  181 => 64,  169 => 55,  166 => 54,  163 => 53,  156 => 49,  153 => 48,  150 => 47,  143 => 43,  140 => 42,  137 => 41,  134 => 40,  127 => 36,  124 => 35,  121 => 34,  118 => 33,  116 => 32,  110 => 29,  107 => 28,  104 => 27,  101 => 26,  99 => 25,  89 => 18,  85 => 16,  75 => 15,  64 => 11,  62 => 13,  37 => 11,);
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

{% set body_class = 'cart_page' %}

{% block main %}
<div class=\"ec-role\">
    <div class=\"ec-pageHeader\">
        <h1>{{ 'ご注文完了'|trans }}</h1>
    </div>
</div>

<div class=\"ec-cartRole\">
    <div class=\"ec-cartRole__progress\">
        <ul class=\"ec-progress\">
            {% set step = 1 %}
            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                </div>
                <div class=\"ec-progress__label\">{{ 'カートの商品'|trans }}
                </div>
            </li>
            {% if is_granted('ROLE_USER') == false %}
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                    </div>
                    <div class=\"ec-progress__label\">{{ 'お客様情報'|trans }}
                    </div>
                </li>
            {% endif %}
            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                </div>
                <div class=\"ec-progress__label\">{{ 'ご注文手続き'|trans }}
                </div>
            </li>
            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                </div>
                <div class=\"ec-progress__label\">{{ 'ご注文内容確認'|trans }}
                </div>
            </li>
            <li class=\"ec-progress__item  is-complete\">
                <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                </div>
                <div class=\"ec-progress__label\">{{ '完了'|trans }}
                </div>
            </li>
        </ul>
    </div>
</div>

<div class=\"ec-cartCompleteRole\">
    <div class=\"ec-reportHeading\">
        <h2>{{ 'ご注文ありがとうございました'|trans }}</h2>
    </div>
    <div class=\"ec-off3Grid ec-text-ac\">
        <div class=\"ec-off3Grid__cell\">
            <p class=\"ec-reportDescription\">
                {{ 'ただいま、ご注文の確認メールをお送りさせていただきました。
万一、ご確認メールが届かない場合は、トラブルの可能性もありますので大変お手数ではございますがお問い合わせくださいますようお願いいたします。
'|trans|nl2br }}
                {% if Order.id %}
                    <br /><br /><strong>{{ 'ご注文番号'|trans }} : {{ Order.orderNo }}</strong>
                {% endif %}
            </p>
            {% if Order.complete_message is not empty %}
                {{ Order.complete_message|raw|purify }}
            {% endif %}
        </div>
    </div>
    <div class=\"ec-off4Grid\">
        {% if hasNextCart %}
            <div class=\"ec-off4Grid__cell\"><a class=\"ec-blockBtn--primary\" href=\"{{ url('cart') }}\">{{ '購入を続ける'|trans }}</a></div>
        {% else %}
            <div class=\"ec-off4Grid__cell\"><a class=\"ec-blockBtn--cancel\" href=\"{{ url('homepage') }}\">{{ 'トップページへ'|trans }}</a></div>
        {% endif %}
    </div>
</div>
{% endblock %}
", "Shopping/complete.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\default\\Shopping\\complete.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "if" => 32);
        static $filters = array("escape" => 18, "trans" => 18, "nl2br" => 71, "purify" => 77, "raw" => 77);
        static $functions = array("is_granted" => 32, "url" => 83);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'trans', 'nl2br', 'purify', 'raw'],
                ['is_granted', 'url']
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
