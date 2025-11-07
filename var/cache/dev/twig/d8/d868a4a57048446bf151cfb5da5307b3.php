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

/* EccubePaymentLite42/Resource/template/default/Mypage/edit_credit_card.twig */
class __TwigTemplate_b815d3031a45456f4c9ec822ca79faa9 extends Template
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
        // line 1
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Mypage/edit_credit_card.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Mypage/edit_credit_card.twig"));

        // line 3
        $context["mypageno"] = "credit_card";
        // line 5
        $context["body_class"] = "mypage";
        // line 1
        $this->parent = $this->loadTemplate("default_frame.twig", "EccubePaymentLite42/Resource/template/default/Mypage/edit_credit_card.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "    <div class=\"ec-mypageRole\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.title"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.front.mypage.edit_credit_card"), "html", null, true);
        echo "</h1>
        </div>
        ";
        // line 12
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "Mypage/navi.twig");
        echo "
    </div>
    <div class=\"ec-mypageRole\">
        <div class=\"ec-historyRole__contents\">
            <div class=\"ec-historyRole__header\">
                <div class=\"ec-historyListHeader\">
                    <p class=\"ec-historyListHeader__date\">お客様のクレジットカード</p>
                    <p>
                        前回使用したクレジットカード情報です。<br>
                        次回注文の際にクレジットカード情報の入力を省略できます。
                    </p>
                    ";
        // line 23
        if ((isset($context["isRegisteredCreditCard"]) || array_key_exists("isRegisteredCreditCard", $context) ? $context["isRegisteredCreditCard"] : (function () { throw new RuntimeError('Variable "isRegisteredCreditCard" does not exist.', 23, $this->source); })())) {
            // line 24
            echo "                        <dl class=\"ec-definitions\">
                            <dt>カードブランド：&nbsp;</dt>
                            <dd>";
            // line 26
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["cardBrand"]) || array_key_exists("cardBrand", $context) ? $context["cardBrand"] : (function () { throw new RuntimeError('Variable "cardBrand" does not exist.', 26, $this->source); })()), 26, $this->source), "html", null, true);
            echo "</dd>
                        </dl>
                        <dl class=\"ec-definitions\">
                            <dt>クレジットカード番号：&nbsp;</dt>
                            <dd>**** - **** - **** - ";
            // line 30
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["cardNumberMask"]) || array_key_exists("cardNumberMask", $context) ? $context["cardNumberMask"] : (function () { throw new RuntimeError('Variable "cardNumberMask" does not exist.', 30, $this->source); })()), 30, $this->source), "html", null, true);
            echo "</dd>
                        </dl>
                        <dl class=\"ec-definitions\">
                            <dt>有効期限：&nbsp;</dt>
                            <dd>";
            // line 34
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["cardExpire"]) || array_key_exists("cardExpire", $context) ? $context["cardExpire"] : (function () { throw new RuntimeError('Variable "cardExpire" does not exist.', 34, $this->source); })()), 34, $this->source), "html", null, true);
            echo "</dd>
                        </dl>
                    ";
        } else {
            // line 37
            echo "                        <div class=\"col-12\">
                            <p>クレジットカードは登録されていません。</p>
                        </div>
                    ";
        }
        // line 41
        echo "                    <div class=\"ec-historyListHeader__action\">
                        ";
        // line 42
        if ((isset($context["isRegisteredCreditCard"]) || array_key_exists("isRegisteredCreditCard", $context) ? $context["isRegisteredCreditCard"] : (function () { throw new RuntimeError('Variable "isRegisteredCreditCard" does not exist.', 42, $this->source); })())) {
            // line 43
            echo "                            <a class=\"ec-inlineBtn\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eccube_payment_lite42_mypage_credit_card_edit");
            echo "\">
                                ";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.front.mypage.change_credit_card"), "html", null, true);
            echo "
                            </a>
                        ";
        } else {
            // line 47
            echo "                            <p>
                                初回のご注文時に使用したクレジットカードを次回以降もご使用いただけます。<br>
                                初回注文後は本ページにてクレジットカード情報の編集も可能です。
                            </p>
                        ";
        }
        // line 52
        echo "                    </div>
                </div>
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
        return "EccubePaymentLite42/Resource/template/default/Mypage/edit_credit_card.twig";
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
        return array (  167 => 52,  160 => 47,  154 => 44,  149 => 43,  147 => 42,  144 => 41,  138 => 37,  132 => 34,  125 => 30,  118 => 26,  114 => 24,  112 => 23,  98 => 12,  91 => 10,  87 => 8,  77 => 7,  66 => 1,  64 => 5,  62 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'default_frame.twig' %}

{% set mypageno = 'credit_card' %}

{% set body_class = 'mypage' %}

{% block main %}
    <div class=\"ec-mypageRole\">
        <div class=\"ec-pageHeader\">
            <h1>{{ 'front.mypage.title'|trans }}/{{ 'gmo_epsilon.front.mypage.edit_credit_card'|trans }}</h1>
        </div>
        {{ include('Mypage/navi.twig') }}
    </div>
    <div class=\"ec-mypageRole\">
        <div class=\"ec-historyRole__contents\">
            <div class=\"ec-historyRole__header\">
                <div class=\"ec-historyListHeader\">
                    <p class=\"ec-historyListHeader__date\">お客様のクレジットカード</p>
                    <p>
                        前回使用したクレジットカード情報です。<br>
                        次回注文の際にクレジットカード情報の入力を省略できます。
                    </p>
                    {% if isRegisteredCreditCard %}
                        <dl class=\"ec-definitions\">
                            <dt>カードブランド：&nbsp;</dt>
                            <dd>{{ cardBrand }}</dd>
                        </dl>
                        <dl class=\"ec-definitions\">
                            <dt>クレジットカード番号：&nbsp;</dt>
                            <dd>**** - **** - **** - {{ cardNumberMask }}</dd>
                        </dl>
                        <dl class=\"ec-definitions\">
                            <dt>有効期限：&nbsp;</dt>
                            <dd>{{ cardExpire }}</dd>
                        </dl>
                    {% else %}
                        <div class=\"col-12\">
                            <p>クレジットカードは登録されていません。</p>
                        </div>
                    {% endif %}
                    <div class=\"ec-historyListHeader__action\">
                        {% if isRegisteredCreditCard %}
                            <a class=\"ec-inlineBtn\" href=\"{{ path('eccube_payment_lite42_mypage_credit_card_edit') }}\">
                                {{ 'gmo_epsilon.front.mypage.change_credit_card'|trans }}
                            </a>
                        {% else %}
                            <p>
                                初回のご注文時に使用したクレジットカードを次回以降もご使用いただけます。<br>
                                初回注文後は本ページにてクレジットカード情報の編集も可能です。
                            </p>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "EccubePaymentLite42/Resource/template/default/Mypage/edit_credit_card.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\default\\Mypage\\edit_credit_card.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3, "if" => 23);
        static $filters = array("escape" => 10, "trans" => 10);
        static $functions = array("include" => 12, "path" => 43);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'trans'],
                ['include', 'path']
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
