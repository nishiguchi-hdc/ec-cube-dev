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

/* EccubePaymentLite42/Resource/template/default/Mypage/regular_detail.twig */
class __TwigTemplate_abbbc79d11559e0cb93aa521edfeb996 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Mypage/regular_detail.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Mypage/regular_detail.twig"));

        // line 3
        $context["mypageno"] = "regular_list";
        // line 4
        $context["regular_mypage_no"] = "regular_detail";
        // line 6
        $context["body_class"] = "mypage";
        // line 1
        $this->parent = $this->loadTemplate("default_frame.twig", "EccubePaymentLite42/Resource/template/default/Mypage/regular_detail.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 9
        echo "    ";
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@EccubePaymentLite42/default/Mypage/RegularNav/style.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 13
        echo "    <div class=\"ec-mypageRole\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.title"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.front.mypage.regular_detail"), "html", null, true);
        echo "</h1>
        </div>
        ";
        // line 17
        $this->loadTemplate("Mypage/navi.twig", "EccubePaymentLite42/Resource/template/default/Mypage/regular_detail.twig", 17)->display($context);
        // line 18
        echo "    </div>
    <div class=\"ec-mypageRole\">
        <div class=\"ec-navlistRole\">
            <ul class=\"ec-navlistRole__navlist\" id=\"gmoEpsilonRegularNavList\">
            </ul>
        </div>
    </div>
    ";
        // line 25
        $context["remessage"] = false;
        // line 26
        echo "
    <div class=\"ec-orderRole\">
        <div class=\"ec-orderRole__detail\">
            <div class=\"ec-orderOrder\">
                <div class=\"ec-definitions\">
                    <dt>ご注文日時</dt>
                    <dd>";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 32, $this->source); })()), "create_date", [], "any", false, false, true, 32), 32, $this->source)), "html", null, true);
        echo "</dd>
                </div>
                ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 34, $this->source); })()), "option_mypage_order_status_display", [], "any", false, false, true, 34)) {
            // line 35
            echo "                    <div class=\"ec-definitions\">
                        <dt>ご注文状況</dt>
                        <dd>";
            // line 37
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 37, $this->source); })()), "RegularStatus", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "</dd>
                    </div>
                ";
        }
        // line 40
        echo "                <div class=\"ec-definitions\">
                    <dt>定期回数</dt>
                    <dd>";
        // line 42
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 42, $this->source); })()), "RegularOrderCount", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
        echo "</dd>
                </div>
                <div class=\"ec-definitions\">
                    <dt>お届けサイクル</dt>
                    <dd>";
        // line 46
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 46, $this->source); })()), "RegularCycle", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
        echo "</dd>
                </div>
                <div class=\"ec-definitions\">
                    <dt>お届け予定日・お届け時間</dt>
                    <dd>";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day_with_weekday($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 50, $this->source); })()), "RegularShippings", [], "any", false, false, true, 50), 0, [], "array", false, false, true, 50), "shippingDeliveryDate", [], "any", false, false, true, 50), 50, $this->source)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 50, $this->source); })()), "RegularShippings", [], "any", false, false, true, 50), 0, [], "array", false, false, true, 50), "ShippingDeliveryTime", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
        echo "</dd>
                </div>
                ";
        // line 52
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 52, $this->source); })()), "RegularShippings", [], "any", false, false, true, 52), 0, [], "array", false, false, true, 52), "nextDeliveryDate", [], "any", false, false, true, 52)) {
            // line 53
            echo "                    <div id=\"next_delivery_date_time\" class=\"ec-definitions\">
                        <dt>次回お届け予定日・お届け時間</dt>
                        <dd>";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day_with_weekday($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 55, $this->source); })()), "RegularShippings", [], "any", false, false, true, 55), 0, [], "array", false, false, true, 55), "nextDeliveryDate", [], "any", false, false, true, 55), 55, $this->source)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 55, $this->source); })()), "RegularShippings", [], "any", false, false, true, 55), 0, [], "array", false, false, true, 55), "ShippingDeliveryTime", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "</dd>
                    </div>
                ";
        }
        // line 58
        echo "            </div>
            <div class=\"ec-orderDelivery\">
                <div class=\"ec-rectHeading\">
                    <h2>";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.delivery_info"), "html", null, true);
        echo "</h2>
                </div>
                ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 63, $this->source); })()), "RegularShippings", [], "any", false, false, true, 63));
        foreach ($context['_seq'] as $context["_key"] => $context["RegularShipping"]) {
            // line 64
            echo "                    <div class=\"ec-orderDelivery__title\">
                        ";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.delivery"), "html", null, true);
            echo "</div>
                    ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "RegularProductOrderItems", [], "any", false, false, true, 66));
            foreach ($context['_seq'] as $context["_key"] => $context["regularProductOrderItem"]) {
                // line 67
                echo "                        <div class=\"ec-orderDelivery__item\">
                            <div class=\"ec-imageGrid\">
                                <div class=\"ec-imageGrid__img\">
                                    ";
                // line 70
                if ((null === twig_get_attribute($this->env, $this->source, $context["regularProductOrderItem"], "product", [], "any", false, false, true, 70))) {
                    // line 71
                    echo "                                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(""), "save_image"), "html", null, true);
                    echo "\"/>
                                    ";
                } else {
                    // line 73
                    echo "                                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["regularProductOrderItem"], "Product", [], "any", false, false, true, 73), "MainListImage", [], "any", false, false, true, 73), 73, $this->source)), "save_image"), "html", null, true);
                    echo "\"
                                             alt=\"";
                    // line 74
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["regularProductOrderItem"], "productName", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                    echo "\"/>
                                    ";
                }
                // line 76
                echo "                                </div>
                                <div class=\"ec-imageGrid__content\">
                                    <p>
                                        ";
                // line 79
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["regularProductOrderItem"], "Product", [], "any", false, false, true, 79)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["regularProductOrderItem"], "Product", [], "any", false, false, true, 79), "Status", [], "any", false, false, true, 79), "id", [], "any", false, false, true, 79) == twig_constant("Eccube\\Entity\\Master\\ProductStatus::DISPLAY_SHOW")))) {
                    // line 80
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["regularProductOrderItem"], "Product", [], "any", false, false, true, 80), "id", [], "any", false, false, true, 80)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["regularProductOrderItem"], "productName", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                    echo "</a>
                                        ";
                } else {
                    // line 82
                    echo "                                            ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["regularProductOrderItem"], "productName", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                    echo "
                                        ";
                }
                // line 83
                echo " ×";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["regularProductOrderItem"], "quantity", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                echo "
                                    </p>
                                    ";
                // line 85
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["regularProductOrderItem"], "ProductClass", [], "any", false, false, true, 85))) {
                    // line 86
                    echo "                                        ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["regularProductOrderItem"], "ProductClass", [], "any", false, false, true, 86), "ClassCategory1", [], "any", false, false, true, 86))) {
                        // line 87
                        echo "                                            ";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["regularProductOrderItem"], "productClass", [], "any", false, false, true, 87), "classCategory1", [], "any", false, false, true, 87), "className", [], "any", false, false, true, 87), "name", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
                        echo "：";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["regularProductOrderItem"], "productClass", [], "any", false, false, true, 87), "classCategory1", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
                        echo "
                                        ";
                    }
                    // line 89
                    echo "                                        ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["regularProductOrderItem"], "ProductClass", [], "any", false, false, true, 89), "ClassCategory2", [], "any", false, false, true, 89)) {
                        // line 90
                        echo "                                            <br>";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["regularProductOrderItem"], "productClass", [], "any", false, false, true, 90), "classCategory2", [], "any", false, false, true, 90), "className", [], "any", false, false, true, 90), "name", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
                        echo "：";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["regularProductOrderItem"], "productClass", [], "any", false, false, true, 90), "classCategory2", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
                        echo "
                                        ";
                    }
                    // line 92
                    echo "                                    ";
                }
                // line 93
                echo "                                    <p>";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["regularProductOrderItem"], "price_inc_tax", [], "any", false, false, true, 93), 93, $this->source)), "html", null, true);
                echo "
                                        × ";
                // line 94
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["regularProductOrderItem"], "quantity", [], "any", false, false, true, 94), 94, $this->source)), "html", null, true);
                echo "</p>
                                    ";
                // line 95
                if ((twig_get_attribute($this->env, $this->source, $context["regularProductOrderItem"], "product", [], "any", false, false, true, 95) && (twig_get_attribute($this->env, $this->source, $context["regularProductOrderItem"], "price_inc_tax", [], "any", false, false, true, 95) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["regularProductOrderItem"], "productClass", [], "any", false, false, true, 95), "price02IncTax", [], "any", false, false, true, 95)))) {
                    // line 96
                    echo "                                        <p class=\"ec-color-accent\">
                                            ";
                    // line 97
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.current_price"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["regularProductOrderItem"], "productClass", [], "any", false, false, true, 97), "price02IncTax", [], "any", false, false, true, 97), 97, $this->source)), "html", null, true);
                    echo "</p>
                                        ";
                    // line 98
                    $context["remessage"] = true;
                    // line 99
                    echo "                                    ";
                }
                // line 100
                echo "
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['regularProductOrderItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "                    <div class=\"ec-orderDelivery__address\">
                        <p>";
            // line 106
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "name01", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "name02", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
            echo "&nbsp;
                            (";
            // line 107
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "kana01", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "kana02", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            echo ")</p>
                        <p>";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.postal_symbol"), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "postal_code", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "Pref", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "addr01", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "addr02", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
            echo "</p>
                        <p>";
            // line 109
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "phone_number", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"ec-definitions--soft\">
                        <dt>";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.delivery_provider"), "html", null, true);
            echo " :</dt>
                        <dd>";
            // line 113
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "shipping_delivery_name", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
            echo "</dd>
                    </div>
                    <div class=\"ec-definitions--soft\">
                        <dt>";
            // line 116
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.delivery_date"), "html", null, true);
            echo " :</dt>
                        <dd>";
            // line 117
            echo twig_escape_filter($this->env, _twig_default_filter($this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day_with_weekday($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "shipping_delivery_date", [], "any", false, false, true, 117), 117, $this->source)), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.select__unspecified")), "html", null, true);
            echo "</dd>
                    </div>
                    <div class=\"ec-definitions--soft\">
                        <dt>";
            // line 120
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.delivery_time"), "html", null, true);
            echo " :</dt>
                        <dd>";
            // line 121
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "shipping_delivery_time", [], "any", true, true, true, 121)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["RegularShipping"], "shipping_delivery_time", [], "any", false, false, true, 121), 121, $this->source), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.select__unspecified"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.select__unspecified"))), "html", null, true);
            echo "</dd>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['RegularShipping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "            </div>
            <div class=\"ec-orderPayment\">
                <div class=\"ec-rectHeading\">
                    <h2>";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.payment_info"), "html", null, true);
        echo "</h2>
                </div>
                <p>";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.payment"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 129, $this->source); })()), "PaymentMethod", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
        echo "</p>
            </div>
            <div class=\"ec-orderConfirm\">
                <div class=\"ec-rectHeading\">
                    <h2>";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.message"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"ec-orderMail\">
                    <p>";
        // line 136
        echo twig_nl2br(twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["RegularOrder"] ?? null), "message", [], "any", true, true, true, 136)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["RegularOrder"] ?? null), "message", [], "any", false, false, true, 136), 136, $this->source), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.message_not_found"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.message_not_found"))), "html", null, true));
        echo "</p>
                </div>
            </div>
        </div>
        <div class=\"ec-orderRole__summary\">
            <div class=\"ec-totalBox\">
                <dl class=\"ec-totalBox__spec\">
                    <dt>";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.subtotal"), "html", null, true);
        echo "</dt>
                    <dd>";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 144, $this->source); })()), "subtotal", [], "any", false, false, true, 144), 144, $this->source)), "html", null, true);
        echo "</dd>
                </dl>
                <dl id=\"regular_order_charge\" class=\"ec-totalBox__spec\">
                    <dt>";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.charge"), "html", null, true);
        echo "</dt>
                    <dd>";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 148, $this->source); })()), "charge", [], "any", false, false, true, 148), 148, $this->source)), "html", null, true);
        echo "</dd>
                </dl>
                <dl class=\"ec-totalBox__spec\">
                    <dt>";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.delivery_fee"), "html", null, true);
        echo "</dt>
                    <dd>";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 152, $this->source); })()), "delivery_fee_total", [], "any", false, false, true, 152), 152, $this->source)), "html", null, true);
        echo "</dd>
                </dl>
                ";
        // line 154
        if ((twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 154, $this->source); })()), "taxable_discount", [], "any", false, false, true, 154) < 0)) {
            // line 155
            echo "                <dl class=\"ec-totalBox__spec\">
                    <dt>";
            // line 156
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.discount"), "html", null, true);
            echo "</dt>
                    <dd>";
            // line 157
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 157, $this->source); })()), "taxable_discount", [], "any", false, false, true, 157), 157, $this->source)), "html", null, true);
            echo "</dd>
                </dl>
                ";
        }
        // line 160
        echo "                <div class=\"ec-totalBox__total\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.total"), "html", null, true);
        echo "<span
                            class=\"ec-totalBox__price\">";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 161, $this->source); })()), "taxable_total", [], "any", false, false, true, 161), 161, $this->source)), "html", null, true);
        echo "</span><span
                            class=\"ec-totalBox__taxLabel\">";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
        echo "</span></div>
                ";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 163, $this->source); })()), "taxable_total_by_tax_rate", [], "any", false, false, true, 163));
        foreach ($context['_seq'] as $context["rate"] => $context["total"]) {
            // line 164
            echo "                <dl class=\"ec-totalBox__taxRate\">
                    <dt>";
            // line 165
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_rate_target", ["%rate%" => $context["rate"]]), "html", null, true);
            echo "</dt>
                    <dd>";
            // line 166
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed($context["total"], 166, $this->source)), "html", null, true);
            echo "</dd>
                </dl>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rate'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 169, $this->source); })()), "tax_free_discount_items", [], "any", false, false, true, 169));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 170
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 170)) {
                echo "<div class=\"ec-totalBox__total\"></div>";
            }
            // line 171
            echo "                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
            // line 172
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "product_name", [], "any", false, false, true, 172), 172, $this->source), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 173
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, true, 173), 173, $this->source)), "html", null, true);
            echo "</dd>
                    </dl>
                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "                <div class=\"ec-totalBox__paymentTotal\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.total"), "html", null, true);
        echo "<span
                            class=\"ec-totalBox__price\">";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["RegularOrder"]) || array_key_exists("RegularOrder", $context) ? $context["RegularOrder"] : (function () { throw new RuntimeError('Variable "RegularOrder" does not exist.', 177, $this->source); })()), "payment_total", [], "any", false, false, true, 177), 177, $this->source)), "html", null, true);
        echo "</span><span
                            class=\"ec-totalBox__taxLabel\">";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
        echo "</span></div>
            </div>
            ";
        // line 180
        if ((isset($context["remessage"]) || array_key_exists("remessage", $context) ? $context["remessage"] : (function () { throw new RuntimeError('Variable "remessage" does not exist.', 180, $this->source); })())) {
            // line 181
            echo "                <p class=\"ec-color-accent\">
                    <strong>";
            // line 182
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.reorder_message"), "html", null, true);
            echo "</strong>
                </p>
            ";
        }
        // line 185
        echo "        </div>
    </div>
    <div class=\"ec-role\">
        <a href=\"";
        // line 188
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eccube_payment_lite42_mypage_regular_list");
        echo "\" class=\"ec-inlineBtn\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.back"), "html", null, true);
        echo "</a>
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
        return "EccubePaymentLite42/Resource/template/default/Mypage/regular_detail.twig";
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
        return array (  589 => 188,  584 => 185,  578 => 182,  575 => 181,  573 => 180,  568 => 178,  564 => 177,  559 => 176,  542 => 173,  538 => 172,  535 => 171,  530 => 170,  512 => 169,  503 => 166,  499 => 165,  496 => 164,  492 => 163,  488 => 162,  484 => 161,  479 => 160,  473 => 157,  469 => 156,  466 => 155,  464 => 154,  459 => 152,  455 => 151,  449 => 148,  445 => 147,  439 => 144,  435 => 143,  425 => 136,  419 => 133,  410 => 129,  405 => 127,  400 => 124,  391 => 121,  387 => 120,  381 => 117,  377 => 116,  371 => 113,  367 => 112,  361 => 109,  352 => 108,  346 => 107,  340 => 106,  337 => 105,  327 => 100,  324 => 99,  322 => 98,  317 => 97,  314 => 96,  312 => 95,  308 => 94,  303 => 93,  300 => 92,  292 => 90,  289 => 89,  281 => 87,  278 => 86,  276 => 85,  270 => 83,  264 => 82,  256 => 80,  254 => 79,  249 => 76,  244 => 74,  239 => 73,  233 => 71,  231 => 70,  226 => 67,  222 => 66,  218 => 65,  215 => 64,  211 => 63,  206 => 61,  201 => 58,  193 => 55,  189 => 53,  187 => 52,  180 => 50,  173 => 46,  166 => 42,  162 => 40,  156 => 37,  152 => 35,  150 => 34,  145 => 32,  137 => 26,  135 => 25,  126 => 18,  124 => 17,  117 => 15,  113 => 13,  103 => 12,  90 => 9,  80 => 8,  69 => 1,  67 => 6,  65 => 4,  63 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'default_frame.twig' %}

{% set mypageno = 'regular_list' %}
{% set regular_mypage_no = 'regular_detail' %}

{% set body_class = 'mypage' %}

{% block stylesheet %}
    {{ include('@EccubePaymentLite42/default/Mypage/RegularNav/style.twig') }}
{% endblock stylesheet %}

{% block main %}
    <div class=\"ec-mypageRole\">
        <div class=\"ec-pageHeader\">
            <h1>{{ 'front.mypage.title'|trans }}/{{ 'gmo_epsilon.front.mypage.regular_detail'|trans }}</h1>
        </div>
        {% include 'Mypage/navi.twig' %}
    </div>
    <div class=\"ec-mypageRole\">
        <div class=\"ec-navlistRole\">
            <ul class=\"ec-navlistRole__navlist\" id=\"gmoEpsilonRegularNavList\">
            </ul>
        </div>
    </div>
    {% set remessage = false %}

    <div class=\"ec-orderRole\">
        <div class=\"ec-orderRole__detail\">
            <div class=\"ec-orderOrder\">
                <div class=\"ec-definitions\">
                    <dt>ご注文日時</dt>
                    <dd>{{ RegularOrder.create_date|date_sec }}</dd>
                </div>
                {% if BaseInfo.option_mypage_order_status_display %}
                    <div class=\"ec-definitions\">
                        <dt>ご注文状況</dt>
                        <dd>{{ RegularOrder.RegularStatus }}</dd>
                    </div>
                {% endif %}
                <div class=\"ec-definitions\">
                    <dt>定期回数</dt>
                    <dd>{{ RegularOrder.RegularOrderCount }}</dd>
                </div>
                <div class=\"ec-definitions\">
                    <dt>お届けサイクル</dt>
                    <dd>{{ RegularOrder.RegularCycle }}</dd>
                </div>
                <div class=\"ec-definitions\">
                    <dt>お届け予定日・お届け時間</dt>
                    <dd>{{ RegularOrder.RegularShippings[0].shippingDeliveryDate|date_day_with_weekday }} {{ RegularOrder.RegularShippings[0].ShippingDeliveryTime }}</dd>
                </div>
                {% if RegularOrder.RegularShippings[0].nextDeliveryDate %}
                    <div id=\"next_delivery_date_time\" class=\"ec-definitions\">
                        <dt>次回お届け予定日・お届け時間</dt>
                        <dd>{{ RegularOrder.RegularShippings[0].nextDeliveryDate|date_day_with_weekday }} {{ RegularOrder.RegularShippings[0].ShippingDeliveryTime }}</dd>
                    </div>
                {% endif %}
            </div>
            <div class=\"ec-orderDelivery\">
                <div class=\"ec-rectHeading\">
                    <h2>{{ 'front.mypage.delivery_info'|trans }}</h2>
                </div>
                {% for RegularShipping in RegularOrder.RegularShippings %}
                    <div class=\"ec-orderDelivery__title\">
                        {{ 'front.mypage.delivery'|trans }}</div>
                    {% for regularProductOrderItem in RegularShipping.RegularProductOrderItems %}
                        <div class=\"ec-orderDelivery__item\">
                            <div class=\"ec-imageGrid\">
                                <div class=\"ec-imageGrid__img\">
                                    {% if regularProductOrderItem.product is null %}
                                        <img src=\"{{ asset(''|no_image_product, 'save_image') }}\"/>
                                    {% else %}
                                        <img src=\"{{ asset(regularProductOrderItem.Product.MainListImage|no_image_product, 'save_image') }}\"
                                             alt=\"{{ regularProductOrderItem.productName }}\"/>
                                    {% endif %}
                                </div>
                                <div class=\"ec-imageGrid__content\">
                                    <p>
                                        {% if regularProductOrderItem.Product is not null and regularProductOrderItem.Product.Status.id == constant('Eccube\\\\Entity\\\\Master\\\\ProductStatus::DISPLAY_SHOW') %}
                                            <a href=\"{{ url('product_detail', {'id': regularProductOrderItem.Product.id}) }}\">{{ regularProductOrderItem.productName }}</a>
                                        {% else %}
                                            {{ regularProductOrderItem.productName }}
                                        {% endif %} ×{{ regularProductOrderItem.quantity }}
                                    </p>
                                    {% if regularProductOrderItem.ProductClass is not null %}
                                        {% if regularProductOrderItem.ProductClass.ClassCategory1 is not null %}
                                            {{ regularProductOrderItem.productClass.classCategory1.className.name }}：{{ regularProductOrderItem.productClass.classCategory1 }}
                                        {% endif %}
                                        {% if regularProductOrderItem.ProductClass.ClassCategory2 %}
                                            <br>{{ regularProductOrderItem.productClass.classCategory2.className.name }}：{{ regularProductOrderItem.productClass.classCategory2 }}
                                        {% endif %}
                                    {% endif %}
                                    <p>{{ regularProductOrderItem.price_inc_tax|price }}
                                        × {{ regularProductOrderItem.quantity|number_format }}</p>
                                    {% if regularProductOrderItem.product and regularProductOrderItem.price_inc_tax != regularProductOrderItem.productClass.price02IncTax %}
                                        <p class=\"ec-color-accent\">
                                            {{ 'front.mypage.current_price'|trans }}{{ regularProductOrderItem.productClass.price02IncTax|price }}</p>
                                        {% set remessage = true %}
                                    {% endif %}

                                </div>
                            </div>
                        </div>
                    {% endfor %}
                    <div class=\"ec-orderDelivery__address\">
                        <p>{{ RegularShipping.name01 }}&nbsp;{{ RegularShipping.name02 }}&nbsp;
                            ({{ RegularShipping.kana01 }}&nbsp;{{ RegularShipping.kana02 }})</p>
                        <p>{{ 'common.postal_symbol'|trans }}{{ RegularShipping.postal_code }} {{ RegularShipping.Pref }}{{ RegularShipping.addr01 }}{{ RegularShipping.addr02 }}</p>
                        <p>{{ RegularShipping.phone_number }}</p>
                    </div>
                    <div class=\"ec-definitions--soft\">
                        <dt>{{ 'front.mypage.delivery_provider'|trans }} :</dt>
                        <dd>{{ RegularShipping.shipping_delivery_name }}</dd>
                    </div>
                    <div class=\"ec-definitions--soft\">
                        <dt>{{ 'front.mypage.delivery_date'|trans }} :</dt>
                        <dd>{{ RegularShipping.shipping_delivery_date|date_day_with_weekday|default('common.select__unspecified'|trans) }}</dd>
                    </div>
                    <div class=\"ec-definitions--soft\">
                        <dt>{{ 'front.mypage.delivery_time'|trans }} :</dt>
                        <dd>{{ RegularShipping.shipping_delivery_time|default('common.select__unspecified'|trans) }}</dd>
                    </div>
                {% endfor %}
            </div>
            <div class=\"ec-orderPayment\">
                <div class=\"ec-rectHeading\">
                    <h2>{{ 'front.mypage.payment_info'|trans }}</h2>
                </div>
                <p>{{ 'front.mypage.payment'|trans }} : {{ RegularOrder.PaymentMethod }}</p>
            </div>
            <div class=\"ec-orderConfirm\">
                <div class=\"ec-rectHeading\">
                    <h2>{{ 'front.mypage.message'|trans }}</h2>
                </div>
                <div class=\"ec-orderMail\">
                    <p>{{ RegularOrder.message|default('front.mypage.message_not_found'|trans)|nl2br }}</p>
                </div>
            </div>
        </div>
        <div class=\"ec-orderRole__summary\">
            <div class=\"ec-totalBox\">
                <dl class=\"ec-totalBox__spec\">
                    <dt>{{ 'common.subtotal'|trans }}</dt>
                    <dd>{{ RegularOrder.subtotal|price }}</dd>
                </dl>
                <dl id=\"regular_order_charge\" class=\"ec-totalBox__spec\">
                    <dt>{{ 'common.charge'|trans }}</dt>
                    <dd>{{ RegularOrder.charge|price }}</dd>
                </dl>
                <dl class=\"ec-totalBox__spec\">
                    <dt>{{ 'common.delivery_fee'|trans }}</dt>
                    <dd>{{ RegularOrder.delivery_fee_total|price }}</dd>
                </dl>
                {% if RegularOrder.taxable_discount < 0 %}
                <dl class=\"ec-totalBox__spec\">
                    <dt>{{ 'common.discount'|trans }}</dt>
                    <dd>{{ RegularOrder.taxable_discount|price }}</dd>
                </dl>
                {% endif %}
                <div class=\"ec-totalBox__total\">{{ 'common.total'|trans }}<span
                            class=\"ec-totalBox__price\">{{ RegularOrder.taxable_total|price }}</span><span
                            class=\"ec-totalBox__taxLabel\">{{ 'common.tax_include'|trans }}</span></div>
                {% for rate, total in RegularOrder.taxable_total_by_tax_rate %}
                <dl class=\"ec-totalBox__taxRate\">
                    <dt>{{ 'common.tax_rate_target'|trans({ '%rate%': rate }) }}</dt>
                    <dd>{{ total|price }}</dd>
                </dl>
                {% endfor %}
                {% for item in RegularOrder.tax_free_discount_items %}
                    {% if loop.first %}<div class=\"ec-totalBox__total\"></div>{% endif %}
                    <dl class=\"ec-totalBox__spec\">
                        <dt>{{ item.product_name }}</dt>
                        <dd>{{ item.total_price|price }}</dd>
                    </dl>
                {% endfor %}
                <div class=\"ec-totalBox__paymentTotal\">{{ 'common.total'|trans }}<span
                            class=\"ec-totalBox__price\">{{ RegularOrder.payment_total|price }}</span><span
                            class=\"ec-totalBox__taxLabel\">{{ 'common.tax_include'|trans }}</span></div>
            </div>
            {% if remessage %}
                <p class=\"ec-color-accent\">
                    <strong>{{ 'front.mypage.reorder_message'|trans }}</strong>
                </p>
            {% endif %}
        </div>
    </div>
    <div class=\"ec-role\">
        <a href=\"{{ url('eccube_payment_lite42_mypage_regular_list') }}\" class=\"ec-inlineBtn\">{{ 'common.back'|trans }}</a>
    </div>
{% endblock %}
", "EccubePaymentLite42/Resource/template/default/Mypage/regular_detail.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\default\\Mypage\\regular_detail.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3, "include" => 17, "if" => 34, "for" => 63);
        static $filters = array("escape" => 15, "trans" => 15, "date_sec" => 32, "date_day_with_weekday" => 50, "no_image_product" => 71, "price" => 93, "number_format" => 94, "default" => 117, "nl2br" => 136);
        static $functions = array("include" => 9, "asset" => 71, "constant" => 79, "url" => 80);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include', 'if', 'for'],
                ['escape', 'trans', 'date_sec', 'date_day_with_weekday', 'no_image_product', 'price', 'number_format', 'default', 'nl2br'],
                ['include', 'asset', 'constant', 'url']
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
