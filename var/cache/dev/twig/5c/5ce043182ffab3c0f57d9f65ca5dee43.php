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

/* Mypage/index.twig */
class __TwigTemplate_fc42edc49bbe9d2145b45c332db1b294 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mypage/index.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mypage/index.twig"));

        // line 13
        $context["mypageno"] = "index";
        // line 15
        $context["body_class"] = "mypage";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Mypage/index.twig", 11);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文履歴"), "html", null, true);
        echo "</h1>
            </div>
            ";
        // line 23
        $this->loadTemplate("Mypage/navi.twig", "Mypage/index.twig", 23)->display($context);
        // line 24
        echo "        </div>
        <div class=\"ec-mypageRole\">
            ";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 26, $this->source); })()), "totalItemCount", [], "any", false, false, true, 26) > 0)) {
            // line 27
            echo "                <p class=\"ec-para-normal\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%count%件の履歴があります", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 27, $this->source); })()), "totalItemCount", [], "any", false, false, true, 27)]), "html", null, true);
            echo "</p>
                ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["Order"]) {
                // line 29
                echo "                    <div class=\"ec-historyRole\">
                        <div class=\"ec-historyRole__contents\">

                            <div class=\"ec-historyRole__header\">
                                <div class=\"ec-historyListHeader\">
                                    <p class=\"ec-historyListHeader__date\">";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "order_date", [], "any", false, false, true, 34), 34, $this->source)), "html", null, true);
                echo "</p>
                                    <dl class=\"ec-definitions\">
                                        <dt>";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文番号"), "html", null, true);
                echo "</dt>
                                        <dd>";
                // line 37
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "order_no", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                echo "</dd>
                                    </dl>
                                    ";
                // line 39
                if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 39, $this->source); })()), "option_mypage_order_status_display", [], "any", false, false, true, 39)) {
                    // line 40
                    echo "                                        <dl class=\"ec-definitions\">
                                            <dt>";
                    // line 41
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文状況"), "html", null, true);
                    echo "</dt>
                                            <dd>";
                    // line 42
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Order"], "CustomerOrderStatus", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                    echo "</dd>
                                        </dl>
                                    ";
                }
                // line 45
                echo "                                    <p class=\"ec-historyListHeader__action\"><a class=\"ec-inlineBtn\"
                                                                               href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_history", ["order_no" => twig_get_attribute($this->env, $this->source, $context["Order"], "order_no", [], "any", false, false, true, 46)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("詳細を見る"), "html", null, true);
                echo "</a>
                                    </p>
                                </div>
                            </div>
                            <div class=\"ec-historyRole__detail\">
                                ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Order"], "MergedProductOrderItems", [], "any", false, false, true, 51));
                foreach ($context['_seq'] as $context["_key"] => $context["OrderItem"]) {
                    // line 52
                    echo "                                    <div class=\"ec-imageGrid\">
                                        <div class=\"ec-imageGrid__img\">
                                            ";
                    // line 54
                    if ((null === twig_get_attribute($this->env, $this->source, $context["OrderItem"], "Product", [], "any", false, false, true, 54))) {
                        // line 55
                        echo "                                                <img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(""), "save_image"), "html", null, true);
                        echo "\"/>
                                            ";
                    } else {
                        // line 57
                        echo "                                                <img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "Product", [], "any", false, false, true, 57), "MainListImage", [], "any", false, false, true, 57), 57, $this->source)), "save_image"), "html", null, true);
                        echo "\">
                                            ";
                    }
                    // line 59
                    echo "                                        </div>
                                        <div class=\"ec-imageGrid__content\">
                                            <p class=\"ec-historyRole__detailTitle\">";
                    // line 61
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_name", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                    echo "</p>
                                            ";
                    // line 62
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "class_category_name1", [], "any", false, false, true, 62))) {
                        // line 63
                        echo "                                                ";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "class_category_name1", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 65
                    echo "                                            ";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "class_category_name2", [], "any", false, false, true, 65))) {
                        // line 66
                        echo "                                                / ";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "class_category_name2", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 68
                    echo "                                            <p class=\"ec-historyRole__detailPrice\">";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "price_inc_tax", [], "any", false, false, true, 68), 68, $this->source)), "html", null, true);
                    echo "
                                                × ";
                    // line 69
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "quantity", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
                    echo "</p>
                                        </div>
                                    </div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                <div class=\"ec-pagerRole\">
                    ";
            // line 78
            $this->loadTemplate("pager.twig", "Mypage/index.twig", 78)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 78, $this->source); })()), "paginationData", [], "any", false, false, true, 78)]));
            // line 79
            echo "                </div>
            ";
        } else {
            // line 81
            echo "                <p class=\"ec-para-normal\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文履歴はありません。"), "html", null, true);
            echo "</p>
            ";
        }
        // line 83
        echo "        </div>
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
        return "Mypage/index.twig";
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
        return array (  251 => 83,  245 => 81,  241 => 79,  239 => 78,  236 => 77,  227 => 73,  217 => 69,  212 => 68,  206 => 66,  203 => 65,  197 => 63,  195 => 62,  191 => 61,  187 => 59,  181 => 57,  175 => 55,  173 => 54,  169 => 52,  165 => 51,  155 => 46,  152 => 45,  146 => 42,  142 => 41,  139 => 40,  137 => 39,  132 => 37,  128 => 36,  123 => 34,  116 => 29,  112 => 28,  107 => 27,  105 => 26,  101 => 24,  99 => 23,  92 => 21,  87 => 18,  77 => 17,  66 => 11,  64 => 15,  62 => 13,  37 => 11,);
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

{% set mypageno = 'index' %}

{% set body_class = 'mypage' %}

{% block main %}
    <div class=\"ec-layoutRole__main\">
        <div class=\"ec-mypageRole\">
            <div class=\"ec-pageHeader\">
                <h1>{{ 'マイページ'|trans }}/{{ 'ご注文履歴'|trans }}</h1>
            </div>
            {% include 'Mypage/navi.twig' %}
        </div>
        <div class=\"ec-mypageRole\">
            {% if pagination.totalItemCount > 0 %}
                <p class=\"ec-para-normal\">{{ '%count%件の履歴があります'|trans({'%count%':pagination.totalItemCount}) }}</p>
                {% for Order in pagination %}
                    <div class=\"ec-historyRole\">
                        <div class=\"ec-historyRole__contents\">

                            <div class=\"ec-historyRole__header\">
                                <div class=\"ec-historyListHeader\">
                                    <p class=\"ec-historyListHeader__date\">{{ Order.order_date|date_sec }}</p>
                                    <dl class=\"ec-definitions\">
                                        <dt>{{ 'ご注文番号'|trans }}</dt>
                                        <dd>{{ Order.order_no }}</dd>
                                    </dl>
                                    {% if (BaseInfo.option_mypage_order_status_display) %}
                                        <dl class=\"ec-definitions\">
                                            <dt>{{ 'ご注文状況'|trans }}</dt>
                                            <dd>{{ Order.CustomerOrderStatus }}</dd>
                                        </dl>
                                    {% endif %}
                                    <p class=\"ec-historyListHeader__action\"><a class=\"ec-inlineBtn\"
                                                                               href=\"{{ url('mypage_history', {'order_no': Order.order_no}) }}\">{{ '詳細を見る'|trans }}</a>
                                    </p>
                                </div>
                            </div>
                            <div class=\"ec-historyRole__detail\">
                                {% for OrderItem in Order.MergedProductOrderItems %}
                                    <div class=\"ec-imageGrid\">
                                        <div class=\"ec-imageGrid__img\">
                                            {% if OrderItem.Product is null %}
                                                <img src=\"{{ asset(''|no_image_product, 'save_image') }}\"/>
                                            {% else %}
                                                <img src=\"{{ asset(OrderItem.Product.MainListImage|no_image_product, 'save_image') }}\">
                                            {% endif %}
                                        </div>
                                        <div class=\"ec-imageGrid__content\">
                                            <p class=\"ec-historyRole__detailTitle\">{{ OrderItem.product_name }}</p>
                                            {% if OrderItem.class_category_name1 is not empty %}
                                                {{ OrderItem.class_category_name1 }}
                                            {% endif %}
                                            {% if OrderItem.class_category_name2 is not empty %}
                                                / {{ OrderItem.class_category_name2 }}
                                            {% endif %}
                                            <p class=\"ec-historyRole__detailPrice\">{{ OrderItem.price_inc_tax|price }}
                                                × {{ OrderItem.quantity }}</p>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                {% endfor %}
                <div class=\"ec-pagerRole\">
                    {% include \"pager.twig\" with {'pages': pagination.paginationData} %}
                </div>
            {% else %}
                <p class=\"ec-para-normal\">{{ 'ご注文履歴はありません。'|trans }}</p>
            {% endif %}
        </div>
    </div>
{% endblock %}
", "Mypage/index.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\default\\Mypage\\index.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "include" => 23, "if" => 26, "for" => 28);
        static $filters = array("escape" => 21, "trans" => 21, "date_sec" => 34, "no_image_product" => 55, "price" => 68);
        static $functions = array("url" => 46, "asset" => 55);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include', 'if', 'for'],
                ['escape', 'trans', 'date_sec', 'no_image_product', 'price'],
                ['url', 'asset']
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
