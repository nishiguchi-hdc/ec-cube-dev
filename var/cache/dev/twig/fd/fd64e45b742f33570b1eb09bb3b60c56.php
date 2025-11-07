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

/* Help/about.twig */
class __TwigTemplate_8d55bcf710857bd1998e6939ca5eb003 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Help/about.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Help/about.twig"));

        $this->parent = $this->loadTemplate("default_frame.twig", "Help/about.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 14
        echo "
<div class=\"ec-role\">
    <div class=\"ec-pageHeader\">
        <h1>";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("当サイトについて"), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"ec-off1Grid\">
        <div class=\"ec-off1Grid__cell\">
            <div class=\"ec-borderedDefs\">
                ";
        // line 22
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", true, true, true, 22)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, true, 22))) : ("")))) {
            // line 23
            echo "                    <dl id=\"help_about_box__shop_name\">
                        <dt>
                            <label class=\"ec-label\">";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("店名"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>";
            // line 27
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 27, $this->source); })()), "shop_name", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "</dd>
                    </dl>
                ";
        }
        // line 30
        echo "                ";
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "company_name", [], "any", true, true, true, 30)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "company_name", [], "any", false, false, true, 30))) : ("")))) {
            // line 31
            echo "                    <dl id=\"help_about_box__company_name\">
                        <dt>
                            <label class=\"ec-label\">";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("会社名"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>";
            // line 35
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 35, $this->source); })()), "company_name", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "</dd>
                    </dl>
                ";
        }
        // line 38
        echo "
                ";
        // line 39
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "postal_code", [], "any", true, true, true, 39)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "postal_code", [], "any", false, false, true, 39))) : ("")))) {
            // line 40
            echo "                    <dl id=\"help_about_box__address\">
                        <dt>
                            <label class=\"ec-label\">";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("住所"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 44, $this->source); })()), "postal_code", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "<br />
                            ";
            // line 45
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 45, $this->source); })()), "pref", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 45, $this->source); })()), "addr01", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 45, $this->source); })()), "addr02", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "
                        </dd>
                    </dl>
                ";
        }
        // line 49
        echo "
                ";
        // line 50
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "phone_number", [], "any", true, true, true, 50)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "phone_number", [], "any", false, false, true, 50))) : ("")))) {
            // line 51
            echo "                    <dl id=\"help_about_box__phone_number\">
                        <dt>
                            <label class=\"ec-label\">";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("電話番号"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>";
            // line 55
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 55, $this->source); })()), "phone_number", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "</dd>
                    </dl>
                ";
        }
        // line 58
        echo "
                ";
        // line 59
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "business_hour", [], "any", true, true, true, 59)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "business_hour", [], "any", false, false, true, 59))) : ("")))) {
            // line 60
            echo "                    <dl id=\"help_about_box__business_hour\">
                        <dt>
                            <label class=\"ec-label\">";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("店舗営業時間"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>";
            // line 64
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 64, $this->source); })()), "business_hour", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo "</dd>
                    </dl>
                ";
        }
        // line 67
        echo "
                ";
        // line 68
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "good_traded", [], "any", true, true, true, 68)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "good_traded", [], "any", false, false, true, 68))) : ("")))) {
            // line 69
            echo "                    <dl id=\"help_about_box__good_traded\">
                        <dt>
                            <label class=\"ec-label\">";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("取り扱い商品"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>";
            // line 73
            echo twig_nl2br(twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 73, $this->source); })()), "good_traded", [], "any", false, false, true, 73), 73, $this->source), "html", null, true));
            echo "</dd>
                    </dl>
                ";
        }
        // line 76
        echo "
                ";
        // line 77
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "message", [], "any", true, true, true, 77)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "message", [], "any", false, false, true, 77))) : ("")))) {
            // line 78
            echo "                    <dl id=\"help_about_box__message\">
                        <dt>
                            <label class=\"ec-label\">";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("メッセージ"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>";
            // line 82
            echo twig_nl2br(twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 82, $this->source); })()), "message", [], "any", false, false, true, 82), 82, $this->source), "html", null, true));
            echo "</dd>
                    </dl>
                ";
        }
        // line 85
        echo "            </div>

        </div>
    </div>
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
        return "Help/about.twig";
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
        return array (  238 => 85,  232 => 82,  227 => 80,  223 => 78,  221 => 77,  218 => 76,  212 => 73,  207 => 71,  203 => 69,  201 => 68,  198 => 67,  192 => 64,  187 => 62,  183 => 60,  181 => 59,  178 => 58,  172 => 55,  167 => 53,  163 => 51,  161 => 50,  158 => 49,  149 => 45,  144 => 44,  139 => 42,  135 => 40,  133 => 39,  130 => 38,  124 => 35,  119 => 33,  115 => 31,  112 => 30,  106 => 27,  101 => 25,  97 => 23,  95 => 22,  87 => 17,  82 => 14,  72 => 13,  37 => 11,);
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

{% block main %}

<div class=\"ec-role\">
    <div class=\"ec-pageHeader\">
        <h1>{{ '当サイトについて'|trans }}</h1>
    </div>
    <div class=\"ec-off1Grid\">
        <div class=\"ec-off1Grid__cell\">
            <div class=\"ec-borderedDefs\">
                {% if BaseInfo.shop_name|default is not empty %}
                    <dl id=\"help_about_box__shop_name\">
                        <dt>
                            <label class=\"ec-label\">{{ '店名'|trans }}</label>
                        </dt>
                        <dd>{{ BaseInfo.shop_name }}</dd>
                    </dl>
                {% endif %}
                {% if BaseInfo.company_name|default is not empty %}
                    <dl id=\"help_about_box__company_name\">
                        <dt>
                            <label class=\"ec-label\">{{ '会社名'|trans }}</label>
                        </dt>
                        <dd>{{ BaseInfo.company_name }}</dd>
                    </dl>
                {% endif %}

                {% if BaseInfo.postal_code|default is not empty %}
                    <dl id=\"help_about_box__address\">
                        <dt>
                            <label class=\"ec-label\">{{ '住所'|trans }}</label>
                        </dt>
                        <dd>{{ '〒'|trans }}{{ BaseInfo.postal_code }}<br />
                            {{ BaseInfo.pref }}{{ BaseInfo.addr01 }}{{ BaseInfo.addr02 }}
                        </dd>
                    </dl>
                {% endif %}

                {% if BaseInfo.phone_number|default is not empty %}
                    <dl id=\"help_about_box__phone_number\">
                        <dt>
                            <label class=\"ec-label\">{{ '電話番号'|trans }}</label>
                        </dt>
                        <dd>{{ BaseInfo.phone_number }}</dd>
                    </dl>
                {% endif %}

                {% if BaseInfo.business_hour|default is not empty %}
                    <dl id=\"help_about_box__business_hour\">
                        <dt>
                            <label class=\"ec-label\">{{ '店舗営業時間'|trans }}</label>
                        </dt>
                        <dd>{{ BaseInfo.business_hour }}</dd>
                    </dl>
                {% endif %}

                {% if BaseInfo.good_traded|default is not empty %}
                    <dl id=\"help_about_box__good_traded\">
                        <dt>
                            <label class=\"ec-label\">{{ '取り扱い商品'|trans }}</label>
                        </dt>
                        <dd>{{ BaseInfo.good_traded|nl2br }}</dd>
                    </dl>
                {% endif %}

                {% if BaseInfo.message|default is not empty %}
                    <dl id=\"help_about_box__message\">
                        <dt>
                            <label class=\"ec-label\">{{ 'メッセージ'|trans }}</label>
                        </dt>
                        <dd>{{ BaseInfo.message|nl2br }}</dd>
                    </dl>
                {% endif %}
            </div>

        </div>
    </div>
</div>

{% endblock %}
", "Help/about.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\default\\Help\\about.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 22);
        static $filters = array("escape" => 17, "trans" => 17, "default" => 22, "nl2br" => 73);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'trans', 'default', 'nl2br'],
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
