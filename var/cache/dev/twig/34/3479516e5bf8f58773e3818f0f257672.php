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

/* EccubePaymentLite42/Resource/template/default/Mypage/regular_list.twig */
class __TwigTemplate_962f97e6a63e294ad25ad30883ec1f8c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Mypage/regular_list.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Mypage/regular_list.twig"));

        // line 3
        $context["mypageno"] = "regular_list";
        // line 5
        $context["body_class"] = "mypage";
        // line 1
        $this->parent = $this->loadTemplate("default_frame.twig", "EccubePaymentLite42/Resource/template/default/Mypage/regular_list.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.front.mypage.regular_list"), "html", null, true);
        echo "</h1>
        </div>
        ";
        // line 12
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "Mypage/navi.twig");
        echo "
    </div>
    <div class=\"ec-mypageRole\">
        ";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 15, $this->source); })()), "totalItemCount", [], "any", false, false, true, 15) > 0)) {
            // line 16
            echo "            <p class=\"ec-para-normal\">
                ";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.history_count", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 17, $this->source); })()), "totalItemCount", [], "any", false, false, true, 17)]), "html", null, true);
            echo "
            </p>
            ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["RegularOrder"]) {
                // line 20
                echo "                <div class=\"ec-historyRole\">
                    <div class=\"ec-historyRole__contents\">
                        <div class=\"ec-historyRole__header\">
                            <div class=\"ec-historyListHeader\">
                                <p class=\"ec-historyListHeader__date\">";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrder"], "order_date", [], "any", false, false, true, 24), 24, $this->source)), "html", null, true);
                echo "</p>
                                <dl class=\"ec-definitions\">
                                    <dt>";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.order_no"), "html", null, true);
                echo "</dt>
                                    <dd>";
                // line 27
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrder"], "order_no", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "</dd>
                                </dl>
                                ";
                // line 29
                if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 29, $this->source); })()), "option_mypage_order_status_display", [], "any", false, false, true, 29)) {
                    // line 30
                    echo "                                    <dl class=\"ec-definitions\">
                                        <dt>";
                    // line 31
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.order_status"), "html", null, true);
                    echo "</dt>
                                        <dd>";
                    // line 32
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrder"], "RegularStatus", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                    echo "</dd>
                                    </dl>
                                ";
                }
                // line 35
                echo "                                <dl class=\"ec-definitions\">
                                    <dt>お届け予定日</dt>
                                    <dd>";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day_with_weekday($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RegularOrder"], "RegularShippings", [], "any", false, false, true, 37), 0, [], "array", false, false, true, 37), "shippingDeliveryDate", [], "any", false, false, true, 37), 37, $this->source)), "html", null, true);
                echo "</dd>
                                </dl>
                                ";
                // line 39
                if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RegularOrder"], "RegularShippings", [], "any", false, false, true, 39), 0, [], "array", false, false, true, 39), "nextDeliveryDate", [], "any", false, false, true, 39))) {
                    // line 40
                    echo "                                <dl class=\"ec-definitions\">
                                    <dt>次回お届け予定日</dt>
                                    <dd>";
                    // line 42
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day_with_weekday($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RegularOrder"], "RegularShippings", [], "any", false, false, true, 42), 0, [], "array", false, false, true, 42), "nextDeliveryDate", [], "any", false, false, true, 42), 42, $this->source)), "html", null, true);
                    echo "</dd>
                                </dl>
                                ";
                }
                // line 45
                echo "                                <p class=\"ec-historyListHeader__action\">
                                  <a class=\"ec-inlineBtn\"
                                     href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eccube_payment_lite42_mypage_regular_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["RegularOrder"], "id", [], "any", false, false, true, 47)]), "html", null, true);
                echo "\">
                                      ";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.view_detail"), "html", null, true);
                echo "
                                  </a>
                                </p>
                            </div>
                        </div>
                        <div class=\"ec-historyRole__detail\">
                            ";
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["RegularOrder"], "MergedRegularProductOrderItems", [], "any", false, false, true, 54));
                foreach ($context['_seq'] as $context["_key"] => $context["RegularOrderItem"]) {
                    // line 55
                    echo "                                <div class=\"ec-imageGrid\">
                                    <div class=\"ec-imageGrid__img\">
                                        ";
                    // line 57
                    if ((null === twig_get_attribute($this->env, $this->source, $context["RegularOrderItem"], "Product", [], "any", false, false, true, 57))) {
                        // line 58
                        echo "                                            <img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(""), "save_image"), "html", null, true);
                        echo "\"/>
                                        ";
                    } else {
                        // line 60
                        echo "                                            <img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RegularOrderItem"], "Product", [], "any", false, false, true, 60), "MainListImage", [], "any", false, false, true, 60), 60, $this->source)), "save_image"), "html", null, true);
                        echo "\">
                                        ";
                    }
                    // line 62
                    echo "                                    </div>
                                    <div class=\"ec-imageGrid__content\">
                                        <p class=\"ec-historyRole__detailTitle\">";
                    // line 64
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrderItem"], "product_name", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
                    echo "</p>
                                        ";
                    // line 65
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["RegularOrderItem"], "class_category_name1", [], "any", false, false, true, 65))) {
                        // line 66
                        echo "                                            ";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrderItem"], "class_category_name1", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                        echo "
                                        ";
                    }
                    // line 68
                    echo "                                        ";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["RegularOrderItem"], "class_category_name1", [], "any", false, false, true, 68))) {
                        // line 69
                        echo "                                            / ";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrderItem"], "class_category_name2", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
                        echo "
                                        ";
                    }
                    // line 71
                    echo "                                        <p class=\"ec-historyRole__detailPrice\">";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrderItem"], "price_inc_tax", [], "any", false, false, true, 71), 71, $this->source)), "html", null, true);
                    echo "
                                            × ";
                    // line 72
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularOrderItem"], "quantity", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                    echo "</p>
                                    </div>
                                </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['RegularOrderItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['RegularOrder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "            <div class=\"ec-pagerRole\">
                ";
            // line 81
            $this->loadTemplate("pager.twig", "EccubePaymentLite42/Resource/template/default/Mypage/regular_list.twig", 81)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 81, $this->source); })()), "paginationData", [], "any", false, false, true, 81)]));
            // line 82
            echo "            </div>
        ";
        } else {
            // line 84
            echo "            <p class=\"ec-para-normal\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.history_not_found"), "html", null, true);
            echo "</p>
        ";
        }
        // line 86
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "EccubePaymentLite42/Resource/template/default/Mypage/regular_list.twig";
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
        return array (  277 => 86,  271 => 84,  267 => 82,  265 => 81,  262 => 80,  253 => 76,  243 => 72,  238 => 71,  232 => 69,  229 => 68,  223 => 66,  221 => 65,  217 => 64,  213 => 62,  207 => 60,  201 => 58,  199 => 57,  195 => 55,  191 => 54,  182 => 48,  178 => 47,  174 => 45,  168 => 42,  164 => 40,  162 => 39,  157 => 37,  153 => 35,  147 => 32,  143 => 31,  140 => 30,  138 => 29,  133 => 27,  129 => 26,  124 => 24,  118 => 20,  114 => 19,  109 => 17,  106 => 16,  104 => 15,  98 => 12,  91 => 10,  87 => 8,  77 => 7,  66 => 1,  64 => 5,  62 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'default_frame.twig' %}

{% set mypageno = 'regular_list' %}

{% set body_class = 'mypage' %}

{% block main %}
    <div class=\"ec-mypageRole\">
        <div class=\"ec-pageHeader\">
            <h1>{{ 'front.mypage.title'|trans }}/{{ 'gmo_epsilon.front.mypage.regular_list'|trans }}</h1>
        </div>
        {{ include('Mypage/navi.twig') }}
    </div>
    <div class=\"ec-mypageRole\">
        {% if pagination.totalItemCount > 0 %}
            <p class=\"ec-para-normal\">
                {{ 'front.mypage.history_count'|trans({'%count%':pagination.totalItemCount}) }}
            </p>
            {% for RegularOrder in pagination %}
                <div class=\"ec-historyRole\">
                    <div class=\"ec-historyRole__contents\">
                        <div class=\"ec-historyRole__header\">
                            <div class=\"ec-historyListHeader\">
                                <p class=\"ec-historyListHeader__date\">{{ RegularOrder.order_date|date_sec }}</p>
                                <dl class=\"ec-definitions\">
                                    <dt>{{ 'front.mypage.order_no'|trans }}</dt>
                                    <dd>{{ RegularOrder.order_no }}</dd>
                                </dl>
                                {% if (BaseInfo.option_mypage_order_status_display) %}
                                    <dl class=\"ec-definitions\">
                                        <dt>{{ 'front.mypage.order_status'|trans }}</dt>
                                        <dd>{{ RegularOrder.RegularStatus }}</dd>
                                    </dl>
                                {% endif %}
                                <dl class=\"ec-definitions\">
                                    <dt>お届け予定日</dt>
                                    <dd>{{ RegularOrder.RegularShippings[0].shippingDeliveryDate|date_day_with_weekday }}</dd>
                                </dl>
                                {% if RegularOrder.RegularShippings[0].nextDeliveryDate is not null %}
                                <dl class=\"ec-definitions\">
                                    <dt>次回お届け予定日</dt>
                                    <dd>{{ RegularOrder.RegularShippings[0].nextDeliveryDate|date_day_with_weekday }}</dd>
                                </dl>
                                {% endif %}
                                <p class=\"ec-historyListHeader__action\">
                                  <a class=\"ec-inlineBtn\"
                                     href=\"{{ url('eccube_payment_lite42_mypage_regular_detail', {'id': RegularOrder.id}) }}\">
                                      {{ 'front.mypage.view_detail'|trans }}
                                  </a>
                                </p>
                            </div>
                        </div>
                        <div class=\"ec-historyRole__detail\">
                            {% for RegularOrderItem in RegularOrder.MergedRegularProductOrderItems %}
                                <div class=\"ec-imageGrid\">
                                    <div class=\"ec-imageGrid__img\">
                                        {% if RegularOrderItem.Product is null %}
                                            <img src=\"{{ asset(''|no_image_product, 'save_image') }}\"/>
                                        {% else %}
                                            <img src=\"{{ asset(RegularOrderItem.Product.MainListImage|no_image_product, 'save_image') }}\">
                                        {% endif %}
                                    </div>
                                    <div class=\"ec-imageGrid__content\">
                                        <p class=\"ec-historyRole__detailTitle\">{{ RegularOrderItem.product_name }}</p>
                                        {% if RegularOrderItem.class_category_name1 is not empty %}
                                            {{ RegularOrderItem.class_category_name1 }}
                                        {% endif %}
                                        {% if RegularOrderItem.class_category_name1 is not empty %}
                                            / {{ RegularOrderItem.class_category_name2 }}
                                        {% endif %}
                                        <p class=\"ec-historyRole__detailPrice\">{{ RegularOrderItem.price_inc_tax|price }}
                                            × {{ RegularOrderItem.quantity }}</p>
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
            <p class=\"ec-para-normal\">{{ 'front.mypage.history_not_found'|trans }}</p>
        {% endif %}
    </div>
{% endblock %}
", "EccubePaymentLite42/Resource/template/default/Mypage/regular_list.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\default\\Mypage\\regular_list.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3, "if" => 15, "for" => 19, "include" => 81);
        static $filters = array("escape" => 10, "trans" => 10, "date_sec" => 24, "date_day_with_weekday" => 37, "no_image_product" => 58, "price" => 71);
        static $functions = array("include" => 12, "url" => 47, "asset" => 58);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'include'],
                ['escape', 'trans', 'date_sec', 'date_day_with_weekday', 'no_image_product', 'price'],
                ['include', 'url', 'asset']
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
