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

/* Mypage/history.twig */
class __TwigTemplate_177a785ade5d1b4ca5502964ddf4f41e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mypage/history.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mypage/history.twig"));

        // line 13
        $context["mypageno"] = "index";
        // line 15
        $context["body_class"] = "mypage";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Mypage/history.twig", 11);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文履歴詳細"), "html", null, true);
        echo "</h1>
            </div>
            ";
        // line 23
        $this->loadTemplate("Mypage/navi.twig", "Mypage/history.twig", 23)->display($context);
        // line 24
        echo "        </div>

        ";
        // line 26
        $context["remessage"] = false;
        // line 27
        echo "
        <div class=\"ec-orderRole\">
            <div class=\"ec-orderRole__detail\">
                <div class=\"ec-orderOrder\">
                    <div class=\"ec-definitions\">
                        <dt>";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文日時"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 33, $this->source); })()), "order_date", [], "any", false, false, true, 33), 33, $this->source)), "html", null, true);
        echo "</dd>
                    </div>
                    <div class=\"ec-definitions\">
                        <dt>";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文番号"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 37
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 37, $this->source); })()), "order_no", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "</dd>
                    </div>
                    ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 39, $this->source); })()), "option_mypage_order_status_display", [], "any", false, false, true, 39)) {
            // line 40
            echo "                        <div class=\"ec-definitions\">
                            <dt>";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文状況"), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 42
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 42, $this->source); })()), "CustomerOrderStatus", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "</dd>
                        </div>
                    ";
        }
        // line 45
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 45, $this->source); })()), "isOptionPoint", [], "any", false, false, true, 45)) {
            // line 46
            echo "                        <div class=\"ec-definitions\">
                            <dt>";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご利用ポイント"), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 48
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 48, $this->source); })()), "usePoint", [], "any", false, false, true, 48), 48, $this->source)), "html", null, true);
            echo " pt</dd>
                        </div>
                        <div class=\"ec-definitions\">
                            <dt>";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("加算ポイント"), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 52
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 52, $this->source); })()), "addPoint", [], "any", false, false, true, 52), 52, $this->source)), "html", null, true);
            echo " pt</dd>
                        </div>
                    ";
        }
        // line 55
        echo "
                </div>
                <div class=\"ec-orderDelivery\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("配送情報"), "html", null, true);
        echo "</h2>
                    </div>
                    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 61, $this->source); })()), "Shippings", [], "any", false, false, true, 61));
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
        foreach ($context['_seq'] as $context["_key"] => $context["Shipping"]) {
            // line 62
            echo "                        ";
            $context["isShowReducedTaxMess"] = false;
            // line 63
            echo "                        <div class=\"ec-orderDelivery__title\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先"), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 63, $this->source); })()), "multiple", [], "any", false, false, true, 63)) {
                echo "(";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                echo ")";
            }
            echo "</div>
                        ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Shipping"], "productOrderItems", [], "any", false, false, true, 64));
            foreach ($context['_seq'] as $context["_key"] => $context["orderItem"]) {
                // line 65
                echo "                            <div class=\"ec-orderDelivery__item\">
                                <div class=\"ec-imageGrid\">
                                    <div class=\"ec-imageGrid__img\">
                                        ";
                // line 68
                if ((null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "product", [], "any", false, false, true, 68))) {
                    // line 69
                    echo "                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(""), "save_image"), "html", null, true);
                    echo "\"/>
                                        ";
                } else {
                    // line 71
                    echo "                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, true, 71), "MainListImage", [], "any", false, false, true, 71), 71, $this->source)), "save_image"), "html", null, true);
                    echo "\"
                                                 alt=\"";
                    // line 72
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                    echo "\"/>
                                        ";
                }
                // line 74
                echo "                                    </div>
                                    <div class=\"ec-imageGrid__content\">
                                        <p>
                                            ";
                // line 77
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, true, 77)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, true, 77), "Status", [], "any", false, false, true, 77), "id", [], "any", false, false, true, 77) == twig_constant("Eccube\\Entity\\Master\\ProductStatus::DISPLAY_SHOW")))) {
                    // line 78
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, true, 78), "id", [], "any", false, false, true, 78)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
                    echo "</a>
                                            ";
                } else {
                    // line 80
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                    echo "
                                            ";
                }
                // line 81
                echo " ×";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "quantity", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
                echo " ";
                if ($this->extensions['Eccube\Twig\Extension\TaxExtension']->isReducedTaxRate($context["orderItem"])) {
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("※"), "html", null, true);
                    $context["isShowReducedTaxMess"] = true;
                }
                // line 82
                echo "                                        </p>
                                        ";
                // line 83
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "ProductClass", [], "any", false, false, true, 83))) {
                    // line 84
                    echo "                                            ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "ProductClass", [], "any", false, false, true, 84), "ClassCategory1", [], "any", false, false, true, 84))) {
                        // line 85
                        echo "                                                ";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 85), "classCategory1", [], "any", false, false, true, 85), "className", [], "any", false, false, true, 85), "name", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                        echo "：";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 85), "classCategory1", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 87
                    echo "                                            ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "ProductClass", [], "any", false, false, true, 87), "ClassCategory2", [], "any", false, false, true, 87)) {
                        // line 88
                        echo "                                                <br>";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 88), "classCategory2", [], "any", false, false, true, 88), "className", [], "any", false, false, true, 88), "name", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
                        echo "：";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 88), "classCategory2", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 90
                    echo "                                        ";
                }
                // line 91
                echo "                                        <p>";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "price_inc_tax", [], "any", false, false, true, 91), 91, $this->source)), "html", null, true);
                echo "
                                            × ";
                // line 92
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "quantity", [], "any", false, false, true, 92), 92, $this->source)), "html", null, true);
                echo "</p>
                                        ";
                // line 93
                if ((twig_get_attribute($this->env, $this->source, $context["orderItem"], "product", [], "any", false, false, true, 93) && (twig_get_attribute($this->env, $this->source, $context["orderItem"], "price_inc_tax", [], "any", false, false, true, 93) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 93), "price02IncTax", [], "any", false, false, true, 93)))) {
                    // line 94
                    echo "                                            <p class=\"ec-color-accent\">
                                                ";
                    // line 95
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("【現在価格】"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 95), "price02IncTax", [], "any", false, false, true, 95), 95, $this->source)), "html", null, true);
                    echo "</p>
                                            ";
                    // line 96
                    $context["remessage"] = true;
                    // line 97
                    echo "                                        ";
                }
                // line 98
                echo "
                                    </div>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "                        <p>";
            (((isset($context["isShowReducedTaxMess"]) || array_key_exists("isShowReducedTaxMess", $context) ? $context["isShowReducedTaxMess"] : (function () { throw new RuntimeError('Variable "isShowReducedTaxMess" does not exist.', 103, $this->source); })())) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("※ は軽減税率対象商品です。"), "html", null, true))) : (print ("")));
            echo "</p>
                        <div class=\"ec-orderDelivery__address\">
                            <p>";
            // line 105
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "name01", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "name02", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            echo "&nbsp;
                                (";
            // line 106
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "kana01", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "kana02", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
            echo ")</p>
                            <p>";
            // line 107
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "postal_code", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "Pref", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "addr01", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "addr02", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            echo "</p>
                            <p>";
            // line 108
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "phone_number", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"ec-definitions--soft\">
                            <dt>";
            // line 111
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("配送方法"), "html", null, true);
            echo " :</dt>
                            <dd>";
            // line 112
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_name", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            echo "</dd>
                        </div>
                        <div class=\"ec-definitions--soft\">
                            <dt>";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け日"), "html", null, true);
            echo " :</dt>
                            <dd>";
            // line 116
            echo twig_escape_filter($this->env, _twig_default_filter($this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day_with_weekday($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_date", [], "any", false, false, true, 116), 116, $this->source)), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("指定なし")), "html", null, true);
            echo "</dd>
                        </div>
                        <div class=\"ec-definitions--soft\">
                            <dt>";
            // line 119
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け時間"), "html", null, true);
            echo " :</dt>
                            <dd>";
            // line 120
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_time", [], "any", true, true, true, 120)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_time", [], "any", false, false, true, 120), 120, $this->source), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("指定なし"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("指定なし"))), "html", null, true);
            echo "</dd>
                        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Shipping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                </div>
                <div class=\"ec-orderPayment\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お支払い情報"), "html", null, true);
        echo "</h2>
                    </div>
                    <p>";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お支払い方法"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 128, $this->source); })()), "PaymentMethod", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
        echo "</p>
                </div>
                <div class=\"ec-orderConfirm\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お問い合わせ"), "html", null, true);
        echo "</h2>
                    </div>
                    <p>";
        // line 134
        echo twig_nl2br(twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "message", [], "any", true, true, true, 134)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "message", [], "any", false, false, true, 134), 134, $this->source), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("記載なし"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("記載なし"))), "html", null, true));
        echo "</p>
                </div>
                <div class=\"ec-orderMails\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("メール配信履歴一覧"), "html", null, true);
        echo "</h2>
                    </div>
                    ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 140, $this->source); })()), "MailHistories", [], "any", false, false, true, 140));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["MailHistory"]) {
            // line 141
            echo "                        <div class=\"ec-orderMail\">
                            <div class=\"ec-orderMail__time\">";
            // line 142
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["MailHistory"], "send_date", [], "any", false, false, true, 142), 142, $this->source)), "html", null, true);
            echo "</div>
                            <div class=\"ec-orderMail__link\"><a>";
            // line 143
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_subject", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
            echo "</a></div>
                            <div class=\"ec-orderMail__body\">";
            // line 144
            echo twig_nl2br(twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_body", [], "any", false, false, true, 144), 144, $this->source), "html", null, true));
            echo "<p class=\"ec-orderMail__close\"><a>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("閉じる"), "html", null, true);
            echo "</a></p></div>
                        </div>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 147
            echo "                        <p class=\"ec-reportDescription\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("メール履歴はありません。"), "html", null, true);
            echo "</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['MailHistory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "                </div>

            </div>
            <div class=\"ec-orderRole__summary\">
                <div class=\"ec-totalBox\">
                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("小計"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 156, $this->source); })()), "subtotal", [], "any", false, false, true, 156), 156, $this->source)), "html", null, true);
        echo "</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("手数料"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 160, $this->source); })()), "charge", [], "any", false, false, true, 160), 160, $this->source)), "html", null, true);
        echo "</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("送料"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 164, $this->source); })()), "delivery_fee_total", [], "any", false, false, true, 164), 164, $this->source)), "html", null, true);
        echo "</dd>
                    </dl>
                    ";
        // line 166
        if ((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 166, $this->source); })()), "taxable_discount", [], "any", false, false, true, 166) < 0)) {
            // line 167
            echo "                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
            // line 168
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("値引き"), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 169
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 169, $this->source); })()), "taxable_discount", [], "any", false, false, true, 169), 169, $this->source)), "html", null, true);
            echo "</dd>
                    </dl>
                    ";
        }
        // line 172
        echo "                    <div class=\"ec-totalBox__total\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("合計"), "html", null, true);
        echo "<span
                                class=\"ec-totalBox__price\">";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 173, $this->source); })()), "taxable_total", [], "any", false, false, true, 173), 173, $this->source)), "html", null, true);
        echo "</span><span
                                class=\"ec-totalBox__taxLabel\">";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
        echo "</span></div>
                    ";
        // line 175
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 175, $this->source); })()), "tax_free_discount_items", [], "any", false, false, true, 175));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 176
            echo "                        <dl class=\"ec-totalBox__spec\">
                            <dt>";
            // line 177
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "product_name", [], "any", false, false, true, 177), 177, $this->source), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 178
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, true, 178), 178, $this->source)), "html", null, true);
            echo "</dd>
                        </dl>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "                    <div class=\"ec-totalBox__paymentTotal\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("合計"), "html", null, true);
        echo "<span
                                class=\"ec-totalBox__price\">";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 182, $this->source); })()), "payment_total", [], "any", false, false, true, 182), 182, $this->source)), "html", null, true);
        echo "</span><span
                                class=\"ec-totalBox__taxLabel\">";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
        echo "</span></div>
                    ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 184, $this->source); })()), "total_by_tax_rate", [], "any", false, false, true, 184));
        foreach ($context['_seq'] as $context["rate"] => $context["total"]) {
            // line 185
            echo "                        <dl class=\"ec-totalBox__taxRate\">
                            <dt>";
            // line 186
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税率 %rate% %対象", ["%rate%" => $context["rate"]]), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 187
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed($context["total"], 187, $this->source)), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("内消費税"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 187, $this->source); })()), "tax_by_tax_rate", [], "any", false, false, true, 187), $context["rate"], [], "array", false, false, true, 187), 187, $this->source)), "html", null, true);
            echo ")</dd>
                        </dl>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rate'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "                    ";
        if ((isset($context["stockOrder"]) || array_key_exists("stockOrder", $context) ? $context["stockOrder"] : (function () { throw new RuntimeError('Variable "stockOrder" does not exist.', 190, $this->source); })())) {
            // line 191
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_order", ["order_no" => twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 191, $this->source); })()), "order_no", [], "any", false, false, true, 191)]), "html", null, true);
            echo "\"
                       class=\"ec-blockBtn--action load-overlay\" ";
            // line 192
            echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
            echo " data-method=\"put\"
                       data-confirm=\"false\">";
            // line 193
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("再注文する"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 195
        echo "                </div>
                ";
        // line 196
        if ((isset($context["remessage"]) || array_key_exists("remessage", $context) ? $context["remessage"] : (function () { throw new RuntimeError('Variable "remessage" does not exist.', 196, $this->source); })())) {
            // line 197
            echo "                    <p class=\"ec-color-accent\">
                        <strong>";
            // line 198
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("※金額が変更されている商品があるため、再注文時はご注意ください。"), "html", null, true);
            echo "</strong>
                    </p>
                ";
        }
        // line 201
        echo "            </div>
        </div>
        <div class=\"ec-role ec-orderRole\">
            <div class=\"ec-orderRole__detail\">
                <a href=\"";
        // line 205
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage");
        echo "\" class=\"ec-inlineBtn ec-font-bold\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("戻る"), "html", null, true);
        echo "</a>
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
        return "Mypage/history.twig";
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
        return array (  639 => 205,  633 => 201,  627 => 198,  624 => 197,  622 => 196,  619 => 195,  614 => 193,  610 => 192,  605 => 191,  602 => 190,  589 => 187,  585 => 186,  582 => 185,  578 => 184,  574 => 183,  570 => 182,  565 => 181,  556 => 178,  552 => 177,  549 => 176,  545 => 175,  541 => 174,  537 => 173,  532 => 172,  526 => 169,  522 => 168,  519 => 167,  517 => 166,  512 => 164,  508 => 163,  502 => 160,  498 => 159,  492 => 156,  488 => 155,  480 => 149,  471 => 147,  461 => 144,  457 => 143,  453 => 142,  450 => 141,  445 => 140,  440 => 138,  433 => 134,  428 => 132,  419 => 128,  414 => 126,  409 => 123,  392 => 120,  388 => 119,  382 => 116,  378 => 115,  372 => 112,  368 => 111,  362 => 108,  353 => 107,  347 => 106,  341 => 105,  335 => 103,  325 => 98,  322 => 97,  320 => 96,  315 => 95,  312 => 94,  310 => 93,  306 => 92,  301 => 91,  298 => 90,  290 => 88,  287 => 87,  279 => 85,  276 => 84,  274 => 83,  271 => 82,  263 => 81,  257 => 80,  249 => 78,  247 => 77,  242 => 74,  237 => 72,  232 => 71,  226 => 69,  224 => 68,  219 => 65,  215 => 64,  205 => 63,  202 => 62,  185 => 61,  180 => 59,  174 => 55,  168 => 52,  164 => 51,  158 => 48,  154 => 47,  151 => 46,  148 => 45,  142 => 42,  138 => 41,  135 => 40,  133 => 39,  128 => 37,  124 => 36,  118 => 33,  114 => 32,  107 => 27,  105 => 26,  101 => 24,  99 => 23,  92 => 21,  87 => 18,  77 => 17,  66 => 11,  64 => 15,  62 => 13,  37 => 11,);
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
                <h1>{{ 'マイページ'|trans }}/{{ 'ご注文履歴詳細'|trans }}</h1>
            </div>
            {% include 'Mypage/navi.twig' %}
        </div>

        {% set remessage = false %}

        <div class=\"ec-orderRole\">
            <div class=\"ec-orderRole__detail\">
                <div class=\"ec-orderOrder\">
                    <div class=\"ec-definitions\">
                        <dt>{{ 'ご注文日時'|trans }}</dt>
                        <dd>{{ Order.order_date|date_sec }}</dd>
                    </div>
                    <div class=\"ec-definitions\">
                        <dt>{{ 'ご注文番号'|trans }}</dt>
                        <dd>{{ Order.order_no }}</dd>
                    </div>
                    {% if BaseInfo.option_mypage_order_status_display %}
                        <div class=\"ec-definitions\">
                            <dt>{{ 'ご注文状況'|trans }}</dt>
                            <dd>{{ Order.CustomerOrderStatus }}</dd>
                        </div>
                    {% endif %}
                    {% if BaseInfo.isOptionPoint %}
                        <div class=\"ec-definitions\">
                            <dt>{{ 'ご利用ポイント'|trans }}</dt>
                            <dd>{{ Order.usePoint|number_format }} pt</dd>
                        </div>
                        <div class=\"ec-definitions\">
                            <dt>{{ '加算ポイント'|trans }}</dt>
                            <dd>{{ Order.addPoint|number_format }} pt</dd>
                        </div>
                    {% endif %}

                </div>
                <div class=\"ec-orderDelivery\">
                    <div class=\"ec-rectHeading\">
                        <h2>{{ '配送情報'|trans }}</h2>
                    </div>
                    {% for Shipping in Order.Shippings %}
                        {% set isShowReducedTaxMess = false %}
                        <div class=\"ec-orderDelivery__title\">{{ 'お届け先'|trans }}{% if Order.multiple %}({{ loop.index }}){% endif %}</div>
                        {% for orderItem in Shipping.productOrderItems %}
                            <div class=\"ec-orderDelivery__item\">
                                <div class=\"ec-imageGrid\">
                                    <div class=\"ec-imageGrid__img\">
                                        {% if orderItem.product is null %}
                                            <img src=\"{{ asset(''|no_image_product, 'save_image') }}\"/>
                                        {% else %}
                                            <img src=\"{{ asset(orderItem.Product.MainListImage|no_image_product, 'save_image') }}\"
                                                 alt=\"{{ orderItem.productName }}\"/>
                                        {% endif %}
                                    </div>
                                    <div class=\"ec-imageGrid__content\">
                                        <p>
                                            {% if orderItem.Product is not null and orderItem.Product.Status.id == constant('Eccube\\\\Entity\\\\Master\\\\ProductStatus::DISPLAY_SHOW') %}
                                                <a href=\"{{ url('product_detail', {'id': orderItem.Product.id}) }}\">{{ orderItem.productName }}</a>
                                            {% else %}
                                                {{ orderItem.productName }}
                                            {% endif %} ×{{ orderItem.quantity }} {% if is_reduced_tax_rate(orderItem) %}{{ '※'|trans }}{% set isShowReducedTaxMess = true %}{% endif %}
                                        </p>
                                        {% if orderItem.ProductClass is not null %}
                                            {% if orderItem.ProductClass.ClassCategory1 is not null %}
                                                {{ orderItem.productClass.classCategory1.className.name }}：{{ orderItem.productClass.classCategory1 }}
                                            {% endif %}
                                            {% if orderItem.ProductClass.ClassCategory2 %}
                                                <br>{{ orderItem.productClass.classCategory2.className.name }}：{{ orderItem.productClass.classCategory2 }}
                                            {% endif %}
                                        {% endif %}
                                        <p>{{ orderItem.price_inc_tax|price }}
                                            × {{ orderItem.quantity|number_format }}</p>
                                        {% if orderItem.product and orderItem.price_inc_tax != orderItem.productClass.price02IncTax %}
                                            <p class=\"ec-color-accent\">
                                                {{ '【現在価格】'|trans }}{{ orderItem.productClass.price02IncTax|price }}</p>
                                            {% set remessage = true %}
                                        {% endif %}

                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                        <p>{{ isShowReducedTaxMess ? '※ は軽減税率対象商品です。'|trans }}</p>
                        <div class=\"ec-orderDelivery__address\">
                            <p>{{ Shipping.name01 }}&nbsp;{{ Shipping.name02 }}&nbsp;
                                ({{ Shipping.kana01 }}&nbsp;{{ Shipping.kana02 }})</p>
                            <p>{{ '〒'|trans }}{{ Shipping.postal_code }} {{ Shipping.Pref }}{{ Shipping.addr01 }}{{ Shipping.addr02 }}</p>
                            <p>{{ Shipping.phone_number }}</p>
                        </div>
                        <div class=\"ec-definitions--soft\">
                            <dt>{{ '配送方法'|trans }} :</dt>
                            <dd>{{ Shipping.shipping_delivery_name }}</dd>
                        </div>
                        <div class=\"ec-definitions--soft\">
                            <dt>{{ 'お届け日'|trans }} :</dt>
                            <dd>{{ Shipping.shipping_delivery_date|date_day_with_weekday|default('指定なし'|trans) }}</dd>
                        </div>
                        <div class=\"ec-definitions--soft\">
                            <dt>{{ 'お届け時間'|trans }} :</dt>
                            <dd>{{ Shipping.shipping_delivery_time|default('指定なし'|trans) }}</dd>
                        </div>
                    {% endfor %}
                </div>
                <div class=\"ec-orderPayment\">
                    <div class=\"ec-rectHeading\">
                        <h2>{{ 'お支払い情報'|trans }}</h2>
                    </div>
                    <p>{{ 'お支払い方法'|trans }} : {{ Order.PaymentMethod }}</p>
                </div>
                <div class=\"ec-orderConfirm\">
                    <div class=\"ec-rectHeading\">
                        <h2>{{ 'お問い合わせ'|trans }}</h2>
                    </div>
                    <p>{{ Order.message|default('記載なし'|trans)|nl2br }}</p>
                </div>
                <div class=\"ec-orderMails\">
                    <div class=\"ec-rectHeading\">
                        <h2>{{ 'メール配信履歴一覧'|trans }}</h2>
                    </div>
                    {% for MailHistory in Order.MailHistories %}
                        <div class=\"ec-orderMail\">
                            <div class=\"ec-orderMail__time\">{{ MailHistory.send_date|date_sec }}</div>
                            <div class=\"ec-orderMail__link\"><a>{{ MailHistory.mail_subject }}</a></div>
                            <div class=\"ec-orderMail__body\">{{ MailHistory.mail_body|nl2br }}<p class=\"ec-orderMail__close\"><a>{{ '閉じる'|trans }}</a></p></div>
                        </div>
                    {% else %}
                        <p class=\"ec-reportDescription\">{{ 'メール履歴はありません。'|trans }}</p>
                    {% endfor %}
                </div>

            </div>
            <div class=\"ec-orderRole__summary\">
                <div class=\"ec-totalBox\">
                    <dl class=\"ec-totalBox__spec\">
                        <dt>{{ '小計'|trans }}</dt>
                        <dd>{{ Order.subtotal|price }}</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec\">
                        <dt>{{ '手数料'|trans }}</dt>
                        <dd>{{ Order.charge|price }}</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec\">
                        <dt>{{ '送料'|trans }}</dt>
                        <dd>{{ Order.delivery_fee_total|price }}</dd>
                    </dl>
                    {% if Order.taxable_discount < 0 %}
                    <dl class=\"ec-totalBox__spec\">
                        <dt>{{ '値引き'|trans }}</dt>
                        <dd>{{ Order.taxable_discount|price }}</dd>
                    </dl>
                    {% endif %}
                    <div class=\"ec-totalBox__total\">{{ '合計'|trans }}<span
                                class=\"ec-totalBox__price\">{{ Order.taxable_total|price }}</span><span
                                class=\"ec-totalBox__taxLabel\">{{ '税込'|trans }}</span></div>
                    {% for item in Order.tax_free_discount_items %}
                        <dl class=\"ec-totalBox__spec\">
                            <dt>{{ item.product_name }}</dt>
                            <dd>{{ item.total_price|price }}</dd>
                        </dl>
                    {% endfor %}
                    <div class=\"ec-totalBox__paymentTotal\">{{ '合計'|trans }}<span
                                class=\"ec-totalBox__price\">{{ Order.payment_total|price }}</span><span
                                class=\"ec-totalBox__taxLabel\">{{ '税込'|trans }}</span></div>
                    {% for rate, total in Order.total_by_tax_rate %}
                        <dl class=\"ec-totalBox__taxRate\">
                            <dt>{{ '税率 %rate% %対象'|trans({ '%rate%': rate }) }}</dt>
                            <dd>{{ total|price }} ({{ '内消費税'|trans }} {{ Order.tax_by_tax_rate[rate]|price }})</dd>
                        </dl>
                    {% endfor %}
                    {% if stockOrder %}
                        <a href=\"{{ url('mypage_order', {'order_no': Order.order_no }) }}\"
                       class=\"ec-blockBtn--action load-overlay\" {{ csrf_token_for_anchor() }} data-method=\"put\"
                       data-confirm=\"false\">{{ '再注文する'|trans }}</a>
                    {% endif %}
                </div>
                {% if remessage %}
                    <p class=\"ec-color-accent\">
                        <strong>{{ '※金額が変更されている商品があるため、再注文時はご注意ください。'|trans }}</strong>
                    </p>
                {% endif %}
            </div>
        </div>
        <div class=\"ec-role ec-orderRole\">
            <div class=\"ec-orderRole__detail\">
                <a href=\"{{ url('mypage') }}\" class=\"ec-inlineBtn ec-font-bold\">{{ '戻る'|trans }}</a>
            </div>
        </div>
    </div>
{% endblock %}
", "Mypage/history.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\default\\Mypage\\history.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "include" => 23, "if" => 39, "for" => 61);
        static $filters = array("escape" => 21, "trans" => 21, "date_sec" => 33, "number_format" => 48, "no_image_product" => 69, "price" => 91, "default" => 116, "date_day_with_weekday" => 116, "nl2br" => 134);
        static $functions = array("asset" => 69, "constant" => 77, "url" => 78, "is_reduced_tax_rate" => 81, "csrf_token_for_anchor" => 192);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include', 'if', 'for'],
                ['escape', 'trans', 'date_sec', 'number_format', 'no_image_product', 'price', 'default', 'date_day_with_weekday', 'nl2br'],
                ['asset', 'constant', 'url', 'is_reduced_tax_rate', 'csrf_token_for_anchor']
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
