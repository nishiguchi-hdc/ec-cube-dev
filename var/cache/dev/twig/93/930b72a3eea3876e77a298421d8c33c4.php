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

/* Mypage/delivery.twig */
class __TwigTemplate_4170be403751cbcf784a19ea6873a95f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mypage/delivery.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mypage/delivery.twig"));

        // line 13
        $context["mypageno"] = "delivery";
        // line 15
        $context["body_class"] = "mypage";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Mypage/delivery.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 17
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 18
        echo "    <div class=\"ec-layoutRole__main\">
        <div class=\"ec-mypageRole\">
            <div class=\"ec-pageHeader\">
                <h1>";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("マイページ"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先一覧"), "html", null, true);
        echo "</h1>
            </div>
            ";
        // line 23
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "Mypage/navi.twig");
        echo "
        </div>
        <div class=\"ec-mypageRole\">
            ";
        // line 26
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 26, $this->source); })()), "CustomerAddresses", [], "any", false, false, true, 26)) > 0)) {
            // line 27
            echo "                <p class=\"ec-para-normal\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%count%件のお届け先があります", ["%count%" => twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 27, $this->source); })()), "CustomerAddresses", [], "any", false, false, true, 27), 27, $this->source))]), "html", null, true);
            echo "</p>
            ";
        } else {
            // line 29
            echo "                <p class=\"ec-para-normal\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先は登録されていません。"), "html", null, true);
            echo "</p>
            ";
        }
        // line 31
        echo "        </div>
        <div class=\"ec-mypageRole\">
            <div class=\"ec-off1Grid\">
                <div class=\"ec-off1Grid__cell\">
                    <div class=\"ec-addressRole\">
                        <div class=\"ec-addressRole__actions\">
                            ";
        // line 37
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 37, $this->source); })()), "CustomerAddresses", [], "any", false, false, true, 37)) < twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 37, $this->source); })()), "eccube_deliv_addr_max", [], "any", false, false, true, 37))) {
            // line 38
            echo "                                <a class=\"ec-inlineBtn\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_delivery_new");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("新規お届け先を追加する"), "html", null, true);
            echo "</a>
                            ";
        } else {
            // line 40
            echo "                                <span class=\"ec-errorMessage\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先登録の上限の%count%件に達しています。お届け先を入力したい場合は、削除か変更を行ってください。", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 40, $this->source); })()), "eccube_deliv_addr_max", [], "any", false, false, true, 40)]), "html", null, true);
            echo "</span>
                            ";
        }
        // line 42
        echo "                        </div>
                    </div>
                    ";
        // line 44
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 44, $this->source); })()), "CustomerAddresses", [], "any", false, false, true, 44)) > 0)) {
            // line 45
            echo "                        <div class=\"ec-addressList\">
                            ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 46, $this->source); })()), "CustomerAddresses", [], "any", false, false, true, 46));
            foreach ($context['_seq'] as $context["_key"] => $context["CustomerAddress"]) {
                // line 47
                echo "                                <div class=\"ec-addressList__item\">
                                    <a class=\"ec-addressList__remove\" href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_delivery_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "id", [], "any", false, false, true, 48)]), "html", null, true);
                echo "\" ";
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo " data-method=\"delete\">
                                        <div class=\"ec-icon\">
                                            <img src=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/cross.svg"), "html", null, true);
                echo "\" alt=\"remove\">
                                        </div>
                                    </a>
                                    <div class=\"ec-addressList__address\">
                                        <div>";
                // line 54
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "name01", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "name02", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                echo "</div>
                                        <div>";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "postal_code", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "Pref", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "addr01", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "addr02", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                echo "</div>
                                        <div>";
                // line 56
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "phone_number", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                echo "</div>
                                    </div>
                                    <div class=\"ec-addressList__action\">
                                        <a class=\"ec-inlineBtn\" href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_delivery_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "id", [], "any", false, false, true, 59)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("変更"), "html", null, true);
                echo "</a>
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['CustomerAddress'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                        </div>
                    ";
        }
        // line 65
        echo "                </div>
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
        return "Mypage/delivery.twig";
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
        return array (  210 => 65,  206 => 63,  194 => 59,  188 => 56,  179 => 55,  173 => 54,  166 => 50,  159 => 48,  156 => 47,  152 => 46,  149 => 45,  147 => 44,  143 => 42,  137 => 40,  129 => 38,  127 => 37,  119 => 31,  113 => 29,  107 => 27,  105 => 26,  99 => 23,  92 => 21,  87 => 18,  77 => 17,  66 => 11,  64 => 15,  62 => 13,  37 => 11,);
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

{% set mypageno = 'delivery' %}

{% set body_class = 'mypage' %}

{% block main %}
    <div class=\"ec-layoutRole__main\">
        <div class=\"ec-mypageRole\">
            <div class=\"ec-pageHeader\">
                <h1>{{ 'マイページ'|trans }}/{{ 'お届け先一覧'|trans }}</h1>
            </div>
            {{ include('Mypage/navi.twig') }}
        </div>
        <div class=\"ec-mypageRole\">
            {% if Customer.CustomerAddresses|length > 0 %}
                <p class=\"ec-para-normal\">{{ '%count%件のお届け先があります'|trans({'%count%':Customer.CustomerAddresses|length}) }}</p>
            {% else %}
                <p class=\"ec-para-normal\">{{ 'お届け先は登録されていません。'|trans }}</p>
            {% endif %}
        </div>
        <div class=\"ec-mypageRole\">
            <div class=\"ec-off1Grid\">
                <div class=\"ec-off1Grid__cell\">
                    <div class=\"ec-addressRole\">
                        <div class=\"ec-addressRole__actions\">
                            {% if Customer.CustomerAddresses|length < eccube_config.eccube_deliv_addr_max %}
                                <a class=\"ec-inlineBtn\" href=\"{{ url('mypage_delivery_new') }}\">{{ '新規お届け先を追加する'|trans }}</a>
                            {% else %}
                                <span class=\"ec-errorMessage\">{{ 'お届け先登録の上限の%count%件に達しています。お届け先を入力したい場合は、削除か変更を行ってください。'|trans({ '%count%': eccube_config.eccube_deliv_addr_max }) }}</span>
                            {% endif %}
                        </div>
                    </div>
                    {% if Customer.CustomerAddresses|length > 0 %}
                        <div class=\"ec-addressList\">
                            {% for CustomerAddress in Customer.CustomerAddresses %}
                                <div class=\"ec-addressList__item\">
                                    <a class=\"ec-addressList__remove\" href=\"{{ url('mypage_delivery_delete', { id : CustomerAddress.id }) }}\" {{ csrf_token_for_anchor() }} data-method=\"delete\">
                                        <div class=\"ec-icon\">
                                            <img src=\"{{ asset('assets/icon/cross.svg') }}\" alt=\"remove\">
                                        </div>
                                    </a>
                                    <div class=\"ec-addressList__address\">
                                        <div>{{ CustomerAddress.name01 }}&nbsp;{{ CustomerAddress.name02 }}</div>
                                        <div>{{ '〒'|trans }}{{ CustomerAddress.postal_code }} {{ CustomerAddress.Pref }}{{ CustomerAddress.addr01 }}{{ CustomerAddress.addr02 }}</div>
                                        <div>{{ CustomerAddress.phone_number }}</div>
                                    </div>
                                    <div class=\"ec-addressList__action\">
                                        <a class=\"ec-inlineBtn\" href=\"{{ url('mypage_delivery_edit', { id : CustomerAddress.id }) }}\">{{ '変更'|trans }}</a>
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "Mypage/delivery.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\default\\Mypage\\delivery.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "if" => 26, "for" => 46);
        static $filters = array("escape" => 21, "trans" => 21, "length" => 26);
        static $functions = array("include" => 23, "url" => 38, "csrf_token_for_anchor" => 48, "asset" => 50);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'trans', 'length'],
                ['include', 'url', 'csrf_token_for_anchor', 'asset']
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
