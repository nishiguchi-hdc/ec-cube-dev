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

/* EccubePaymentLite42/Resource/template/default/Mypage/regular_product_quantity.twig */
class __TwigTemplate_8cdde67ef60fdf860180e97f5eb0711e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Mypage/regular_product_quantity.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Mypage/regular_product_quantity.twig"));

        // line 3
        $context["mypageno"] = "regular_list";
        // line 4
        $context["regular_mypage_no"] = "product_quantity";
        // line 6
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), ["Form/form_div_layout.twig"], true);
        // line 8
        $context["body_class"] = "mypage";
        // line 1
        $this->parent = $this->loadTemplate("default_frame.twig", "EccubePaymentLite42/Resource/template/default/Mypage/regular_product_quantity.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 11
        echo "    ";
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@EccubePaymentLite42/default/Mypage/RegularNav/style.twig");
        echo "
    <style>
        .hidden-row{
            display:none;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    <div class=\"ec-mypageRole\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.title"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.front.mypage.regular_product_quantity"), "html", null, true);
        echo "</h1>
        </div>
        ";
        // line 24
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "Mypage/navi.twig");
        echo "
    </div>
    <div class=\"ec-mypageRole\">
        <div class=\"ec-navlistRole\">
            <ul class=\"ec-navlistRole__navlist\" id=\"gmoEpsilonRegularNavList\">
            </ul>
        </div>
    </div>
    <div class=\"ec-mypageRole\">
        <form method=\"post\" action=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eccube_payment_lite42_mypage_regular_product_quantity", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, true, 33)]), "html", null, true);
        echo "\">
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "_token", [], "any", false, false, true, 34), 34, $this->source), 'widget');
        echo "
            <div class=\"ec-editRole\">
                <div class=\"ec-cartRole__cart\">
                    <div class=\"ec-cartTable\">
                        <ol class=\"ec-cartHeader\">
                            <li class=\"ec-cartHeader__label\">商品内容</li>
                            <li class=\"ec-cartHeader__label\">数量</li>
                            <li class=\"ec-cartHeader__label\">小計</li>
                        </ol>
                        ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "RegularOrderItems", [], "any", false, false, true, 43)) {
            // line 44
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "RegularOrderItems", [], "any", false, false, true, 44));
            foreach ($context['_seq'] as $context["_key"] => $context["OrderItemForm"]) {
                // line 45
                echo "                                ";
                $context["OrderItem"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OrderItemForm"], "vars", [], "any", false, false, true, 45), "data", [], "any", false, false, true, 45);
                // line 46
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 46, $this->source); })()), "isProduct", [], "any", false, false, true, 46)) {
                    // line 47
                    echo "                                    <ul class=\"ec-cartRow\">
                                        <li class=\"ec-cartRow__contentColumn\">
                                            <div class=\"ec-cartRow__img\">
                                                <a target=\"_blank\" href=\"";
                    // line 50
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 50, $this->source); })()), "ProductClass", [], "any", false, false, true, 50), "Product", [], "any", false, false, true, 50), "id", [], "any", false, false, true, 50)]), "html", null, true);
                    echo "\">
                                                    <img src=\"";
                    // line 51
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 51, $this->source); })()), "ProductClass", [], "any", false, false, true, 51), "Product", [], "any", false, false, true, 51), "MainListImage", [], "any", false, false, true, 51), 51, $this->source)), "save_image"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 51, $this->source); })()), "product_name", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
                    echo "\">
                                                </a>
                                            </div>
                                            <div class=\"ec-cartRow__summary\">
                                                <div class=\"ec-cartRow__name\">
                                                    <a target=\"_blank\" href=\"";
                    // line 56
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 56, $this->source); })()), "ProductClass", [], "any", false, false, true, 56), "Product", [], "any", false, false, true, 56), "id", [], "any", false, false, true, 56)]), "html", null, true);
                    echo "\">
                                                        ";
                    // line 57
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 57, $this->source); })()), "product_name", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                    echo "
                                                    </a>
                                                </div>
                                                <div class=\"ec-cartRow__unitPrice\">
                                                    ";
                    // line 61
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 61, $this->source); })()), "priceIncTax", [], "any", false, false, true, 61), 61, $this->source)), "html", null, true);
                    echo "
                                                </div>
                                            </div>
                                        </li>
                                        <li class=\"ec-cartRow__amountColumn\">
                                            <div class=\"ec-birth\">
                                                ";
                    // line 67
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItemForm"], "quantity", [], "any", false, false, true, 67), 67, $this->source), 'widget');
                    echo "
                                            </div>
                                            <div class=\"ec-cartRow__amountSP\">
                                                数量：";
                    // line 70
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 70, $this->source); })()), "quantity", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                    echo "
                                            </div>
                                        </li>
                                        <li class=\"ec-cartRow__subtotalColumn\" style=\"text-align: center;\">
                                            <div class=\"ec-cartRow__subtotal\">
                                                ";
                    // line 75
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 75, $this->source); })()), "getTotalPrice", [], "any", false, false, true, 75), 75, $this->source)), "html", null, true);
                    echo "
                                            </div>
                                        </li>
                                    </ul>
                                ";
                }
                // line 80
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 80, $this->source); })()), "isProduct", [], "any", false, false, true, 80) == false)) {
                    // line 81
                    echo "                                    ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItemForm"], "quantity", [], "any", false, false, true, 81), 81, $this->source), 'widget', ["attr" => ["class" => "hidden-row"]]);
                    echo "
                                ";
                }
                // line 83
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderItemForm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                        ";
        }
        // line 85
        echo "                    </div>
                </div>
                <div class=\"ec-cartRole\">
                    <div class=\"ec-cartRole__total\">
                        合計：<span class=\"ec-cartRole__totalAmount\">";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "vars", [], "any", false, false, true, 89), "data", [], "any", false, false, true, 89), "subtotal", [], "any", false, false, true, 89), 89, $this->source)), "html", null, true);
        echo "</span>
                    </div>
                </div>
            </div>
            <div class=\"ec-off4Grid\">
                <div class=\"ec-off4Grid__cell\">
                    <button type=\"submit\" class=\"ec-blockBtn--cancel\">商品数を変更する</button>
                </div>
            </div>
        </form>
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
        return "EccubePaymentLite42/Resource/template/default/Mypage/regular_product_quantity.twig";
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
        return array (  257 => 89,  251 => 85,  248 => 84,  242 => 83,  236 => 81,  233 => 80,  225 => 75,  217 => 70,  211 => 67,  202 => 61,  195 => 57,  191 => 56,  181 => 51,  177 => 50,  172 => 47,  169 => 46,  166 => 45,  161 => 44,  159 => 43,  147 => 34,  143 => 33,  131 => 24,  124 => 22,  120 => 20,  110 => 19,  92 => 11,  82 => 10,  71 => 1,  69 => 8,  67 => 6,  65 => 4,  63 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'default_frame.twig' %}

{% set mypageno = 'regular_list' %}
{% set regular_mypage_no = 'product_quantity' %}

{% form_theme form 'Form/form_div_layout.twig' %}

{% set body_class = 'mypage' %}

{% block stylesheet %}
    {{ include('@EccubePaymentLite42/default/Mypage/RegularNav/style.twig') }}
    <style>
        .hidden-row{
            display:none;
        }
    </style>
{% endblock stylesheet %}

{% block main %}
    <div class=\"ec-mypageRole\">
        <div class=\"ec-pageHeader\">
            <h1>{{ 'front.mypage.title'|trans }}/{{ 'gmo_epsilon.front.mypage.regular_product_quantity'|trans }}</h1>
        </div>
        {{ include('Mypage/navi.twig') }}
    </div>
    <div class=\"ec-mypageRole\">
        <div class=\"ec-navlistRole\">
            <ul class=\"ec-navlistRole__navlist\" id=\"gmoEpsilonRegularNavList\">
            </ul>
        </div>
    </div>
    <div class=\"ec-mypageRole\">
        <form method=\"post\" action=\"{{ url('eccube_payment_lite42_mypage_regular_product_quantity', { id: RegularOrder.id }) }}\">
            {{ form_widget(form._token) }}
            <div class=\"ec-editRole\">
                <div class=\"ec-cartRole__cart\">
                    <div class=\"ec-cartTable\">
                        <ol class=\"ec-cartHeader\">
                            <li class=\"ec-cartHeader__label\">商品内容</li>
                            <li class=\"ec-cartHeader__label\">数量</li>
                            <li class=\"ec-cartHeader__label\">小計</li>
                        </ol>
                        {% if form.RegularOrderItems %}
                            {% for OrderItemForm in form.RegularOrderItems %}
                                {% set OrderItem = OrderItemForm.vars.data %}
                                {% if OrderItem.isProduct %}
                                    <ul class=\"ec-cartRow\">
                                        <li class=\"ec-cartRow__contentColumn\">
                                            <div class=\"ec-cartRow__img\">
                                                <a target=\"_blank\" href=\"{{ url('product_detail', {id : OrderItem.ProductClass.Product.id} ) }}\">
                                                    <img src=\"{{ asset(OrderItem.ProductClass.Product.MainListImage|no_image_product, 'save_image') }}\" alt=\"{{ OrderItem.product_name }}\">
                                                </a>
                                            </div>
                                            <div class=\"ec-cartRow__summary\">
                                                <div class=\"ec-cartRow__name\">
                                                    <a target=\"_blank\" href=\"{{ url('product_detail', {id :  OrderItem.ProductClass.Product.id} ) }}\">
                                                        {{ OrderItem.product_name }}
                                                    </a>
                                                </div>
                                                <div class=\"ec-cartRow__unitPrice\">
                                                    {{ OrderItem.priceIncTax|price }}
                                                </div>
                                            </div>
                                        </li>
                                        <li class=\"ec-cartRow__amountColumn\">
                                            <div class=\"ec-birth\">
                                                {{ form_widget(OrderItemForm.quantity) }}
                                            </div>
                                            <div class=\"ec-cartRow__amountSP\">
                                                数量：{{ OrderItem.quantity }}
                                            </div>
                                        </li>
                                        <li class=\"ec-cartRow__subtotalColumn\" style=\"text-align: center;\">
                                            <div class=\"ec-cartRow__subtotal\">
                                                {{ OrderItem.getTotalPrice|price }}
                                            </div>
                                        </li>
                                    </ul>
                                {% endif %}
                                {% if OrderItem.isProduct == false%}
                                    {{ form_widget(OrderItemForm.quantity,{ 'attr': {'class': 'hidden-row'} }) }}
                                {% endif %}
                            {% endfor %}
                        {% endif %}
                    </div>
                </div>
                <div class=\"ec-cartRole\">
                    <div class=\"ec-cartRole__total\">
                        合計：<span class=\"ec-cartRole__totalAmount\">{{ form.vars.data.subtotal|price }}</span>
                    </div>
                </div>
            </div>
            <div class=\"ec-off4Grid\">
                <div class=\"ec-off4Grid__cell\">
                    <button type=\"submit\" class=\"ec-blockBtn--cancel\">商品数を変更する</button>
                </div>
            </div>
        </form>
    </div>
{% endblock %}
", "EccubePaymentLite42/Resource/template/default/Mypage/regular_product_quantity.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\default\\Mypage\\regular_product_quantity.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3, "form_theme" => 6, "if" => 43, "for" => 44);
        static $filters = array("escape" => 22, "trans" => 22, "no_image_product" => 51, "price" => 61);
        static $functions = array("include" => 11, "url" => 33, "form_widget" => 34, "asset" => 51);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'if', 'for'],
                ['escape', 'trans', 'no_image_product', 'price'],
                ['include', 'url', 'form_widget', 'asset']
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
