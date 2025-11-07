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

/* Shopping/confirm.twig */
class __TwigTemplate_ec156cb7472abf8900705f23dfd4ee4e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shopping/confirm.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shopping/confirm.twig"));

        // line 13
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), ["Form/form_div_layout.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Shopping/confirm.twig", 11);
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
        echo "
<div class=\"ec-role\">
    <div class=\"ec-pageHeader\">
        <h1>";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文内容のご確認"), "html", null, true);
        echo "</h1>
    </div>
</div>

<div class=\"ec-cartRole\">
    <div class=\"ec-cartRole__progress\">
        <ul class=\"ec-progress\">
            ";
        // line 26
        $context["step"] = 1;
        // line 27
        echo "            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">";
        // line 28
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 28, $this->source); })()), 28, $this->source), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 28, $this->source); })()) + 1);
        // line 29
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートの商品"), "html", null, true);
        echo "
                </div>
            </li>
            ";
        // line 33
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") == false)) {
            // line 34
            echo "                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
            // line 35
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 35, $this->source); })()), 35, $this->source), "html", null, true);
            $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 35, $this->source); })()) + 1);
            // line 36
            echo "                    </div>
                    <div class=\"ec-progress__label\">";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お客様情報"), "html", null, true);
            echo "
                    </div>
                </li>
            ";
        }
        // line 41
        echo "            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">";
        // line 42
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 42, $this->source); })()), 42, $this->source), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 42, $this->source); })()) + 1);
        // line 43
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文手続き"), "html", null, true);
        echo "
                </div>
            </li>
            <li class=\"ec-progress__item is-complete\">
                <div class=\"ec-progress__number\">";
        // line 48
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 48, $this->source); })()), 48, $this->source), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 48, $this->source); })()) + 1);
        // line 49
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文内容確認"), "html", null, true);
        echo "
                </div>
            </li>
            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">";
        // line 54
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 54, $this->source); })()), 54, $this->source), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 54, $this->source); })()) + 1);
        // line 55
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("完了"), "html", null, true);
        echo "
                </div>
            </li>
        </ul>
    </div>
</div>

    <form id=\"shopping-form\" method=\"post\" action=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping_checkout");
        echo "\">
    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "_token", [], "any", false, false, true, 64), 64, $this->source), 'widget');
        echo "
    <div class=\"ec-orderRole\">
        <div class=\"ec-orderRole__detail\">
            <div class=\"ec-orderAccount\">
                <div class=\"ec-rectHeading\">
                    <h2>";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お客様情報"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"ec-orderAccount__account\">
                    <p class=\"ec-halfInput\">";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(""), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 72, $this->source); })()), "name01", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 72, $this->source); })()), "name02", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(" 様"), "html", null, true);
        echo "</p>
                    <p class=\"ec-halfInput\">";
        // line 73
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 73, $this->source); })()), "kana01", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 73, $this->source); })()), "kana02", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
        echo "</p>
                    <p class=\"ec-input\">";
        // line 74
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 74, $this->source); })()), "companyName", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        echo "</p>
                    <p class=\"ec-zipInput\">";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 75, $this->source); })()), "postal_code", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo "</p>
                    <p class=\"ec-input\">";
        // line 76
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 76, $this->source); })()), "pref", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 76, $this->source); })()), "addr01", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 76, $this->source); })()), "addr02", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
        echo "</p>
                    <p class=\"ec-telInput\">";
        // line 77
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 77, $this->source); })()), "phone_number", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
        echo "</p>
                    <p class=\"ec-input\">";
        // line 78
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 78, $this->source); })()), "email", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"ec-orderDelivery\">
                <div class=\"ec-rectHeading\">
                    <h2>";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("配送情報"), "html", null, true);
        echo "</h2>
                </div>
                ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 85, $this->source); })()), "shippings", [], "any", false, false, true, 85));
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
        foreach ($context['_seq'] as $context["_key"] => $context["shipping"]) {
            // line 86
            echo "                    ";
            $context["idx"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 86);
            // line 87
            echo "                    ";
            $context["isShowReducedTaxMess"] = false;
            // line 88
            echo "                    <div class=\"ec-orderDelivery__item\">
                        <ul class=\"ec-borderedList\">
                            ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["shipping"], "productOrderItems", [], "any", false, false, true, 90));
            foreach ($context['_seq'] as $context["_key"] => $context["orderItem"]) {
                // line 91
                echo "                            <li>
                                <div class=\"ec-imageGrid\">
                                    <div class=\"ec-imageGrid__img\"><img src=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct((((null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "product", [], "any", false, false, true, 93))) ? (null) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "product", [], "any", false, false, true, 93), "MainListImage", [], "any", false, false, true, 93)))), "save_image"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
                echo "\"></div>
                                    <div class=\"ec-imageGrid__content\">
                                        <p>";
                // line 95
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
                if ($this->extensions['Eccube\Twig\Extension\TaxExtension']->isReducedTaxRate($context["orderItem"])) {
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("※"), "html", null, true);
                    $context["isShowReducedTaxMess"] = true;
                }
                echo "</p>
                                        ";
                // line 96
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 96)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 96), "classCategory1", [], "any", false, false, true, 96))) {
                    // line 97
                    echo "                                            <p>";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 97), "classCategory1", [], "any", false, false, true, 97), "className", [], "any", false, false, true, 97), "name", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 97), "classCategory1", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
                    echo "</p>
                                        ";
                }
                // line 99
                echo "                                        ";
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 99)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 99), "classCategory2", [], "any", false, false, true, 99))) {
                    // line 100
                    echo "                                            <p>";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 100), "classCategory2", [], "any", false, false, true, 100), "className", [], "any", false, false, true, 100), "name", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 100), "classCategory2", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
                    echo "</p>
                                        ";
                }
                // line 102
                echo "                                        <p>";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "priceIncTax", [], "any", false, false, true, 102), 102, $this->source)), "html", null, true);
                echo " × ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "quantity", [], "any", false, false, true, 102), 102, $this->source)), "html", null, true);
                echo "<span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("小計："), "html", null, true);
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "totalPrice", [], "any", false, false, true, 102), 102, $this->source)), "html", null, true);
                echo "</span></p>
                                    </div>
                                </div>
                            </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "                        </ul>
                        <p>";
            // line 108
            (((isset($context["isShowReducedTaxMess"]) || array_key_exists("isShowReducedTaxMess", $context) ? $context["isShowReducedTaxMess"] : (function () { throw new RuntimeError('Variable "isShowReducedTaxMess" does not exist.', 108, $this->source); })())) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("※ は軽減税率対象商品です。"), "html", null, true))) : (print ("")));
            echo "</p>
                    </div>
                    <div class=\"ec-orderDelivery__address\">
                        <p>";
            // line 111
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(""), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "name01", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "name02", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "kana01", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "kana02", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
            echo ")";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(" 様"), "html", null, true);
            echo "</p>
                        <p>";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "postal_code", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "pref", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "addr01", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "addr02", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            echo "</p>
                        <p>";
            // line 113
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "phone_number", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"ec-orderDelivery__actions\">
                        <div class=\"ec-selects\">
                            <div class=\"ec-select\">
                                <label>";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("配送方法"), "html", null, true);
            echo "</label>
                                ";
            // line 119
            $context["delivery_fee"] = 0;
            // line 120
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "order_items", [], "any", false, false, true, 120), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return twig_get_attribute($this->env, $this->source, $context["item"], "isDeliveryFee", [], "any", false, false, true, 120); }));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 121
                echo "                                    ";
                $context["delivery_fee"] = twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, true, 121);
                // line 122
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "                                ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 123, $this->source); })()), "Shippings", [], "any", false, false, true, 123), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 123, $this->source); })()), [], "array", false, false, true, 123), "Delivery", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed((isset($context["delivery_fee"]) || array_key_exists("delivery_fee", $context) ? $context["delivery_fee"] : (function () { throw new RuntimeError('Variable "delivery_fee" does not exist.', 123, $this->source); })()), 123, $this->source)), "html", null, true);
            echo ")
                            </div>
                            <div class=\"ec-select ec-select__delivery\">
                                <label>";
            // line 126
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け日"), "html", null, true);
            echo "</label>
                                ";
            // line 127
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 127, $this->source); })()), "Shippings", [], "any", false, false, true, 127), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 127, $this->source); })()), [], "array", false, false, true, 127), "shipping_delivery_date", [], "any", false, false, true, 127)) ? ($this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day_with_weekday($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 127, $this->source); })()), "Shippings", [], "any", false, false, true, 127), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 127, $this->source); })()), [], "array", false, false, true, 127), "shipping_delivery_date", [], "any", false, false, true, 127), 127, $this->source))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("指定なし"))), "html", null, true);
            echo "
                            </div>
                            <div class=\"ec-select ec-select__time\">
                                <label>";
            // line 130
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け時間"), "html", null, true);
            echo "</label>
                                ";
            // line 131
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 131, $this->source); })()), "Shippings", [], "any", false, false, true, 131), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 131, $this->source); })()), [], "array", false, false, true, 131), "shipping_delivery_time", [], "any", false, false, true, 131)) ?: ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("指定なし"))), "html", null, true);
            echo "
                            </div>
                        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "            </div>
            <div class=\"ec-orderPayment\">
                <div class=\"ec-rectHeading\">
                    <h2>";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お支払方法"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"ec-blockRadio\">
                    ";
        // line 142
        $context["charge"] = 0;
        // line 143
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 143, $this->source); })()), "order_items", [], "any", false, false, true, 143), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return twig_get_attribute($this->env, $this->source, $context["item"], "isCharge", [], "any", false, false, true, 143); }));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 144
            echo "                        ";
            $context["charge"] = twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, true, 144);
            // line 145
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "                    ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 146, $this->source); })()), "Payment", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
        echo "(";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed((isset($context["charge"]) || array_key_exists("charge", $context) ? $context["charge"] : (function () { throw new RuntimeError('Variable "charge" does not exist.', 146, $this->source); })()), 146, $this->source)), "html", null, true);
        echo ")
                </div>
            </div>
            ";
        // line 149
        if ((twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 149, $this->source); })()), "isOptionPoint", [], "any", false, false, true, 149) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 149, $this->source); })()), "Customer", [], "any", false, false, true, 149)))) {
            // line 150
            echo "            <div class=\"ec-orderPayment\">
                <div class=\"ec-rectHeading\">
                    <h2>";
            // line 152
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("利用ポイント"), "html", null, true);
            echo "</h2>
                </div>
                <div class=\"ec-blockRadio\">
                    ";
            // line 155
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 155, $this->source); })()), "use_point", [], "any", false, false, true, 155), 155, $this->source)), "html", null, true);
            echo " pt
                </div>
            </div>
            ";
        }
        // line 159
        echo "            <div class=\"ec-orderConfirm\">
                <div class=\"ec-rectHeading\">
                    <h2>";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お問い合わせ"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"ec-input\">
                    ";
        // line 164
        echo twig_nl2br(twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 164, $this->source); })()), "message", [], "any", false, false, true, 164), 164, $this->source), "html", null, true));
        echo "
                </div>
            </div>
            ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["activeTradeLaws"]) || array_key_exists("activeTradeLaws", $context) ? $context["activeTradeLaws"] : (function () { throw new RuntimeError('Variable "activeTradeLaws" does not exist.', 167, $this->source); })()), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return (twig_get_attribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 167, $this->source); })()), "name", [], "any", false, false, true, 167) && twig_get_attribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 167, $this->source); })()), "description", [], "any", false, false, true, 167)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["activeTradeLaw"]) {
            // line 168
            echo "                <div class=\"ec-orderConfirm\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
            // line 170
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["activeTradeLaw"], "name", [], "any", false, false, true, 170), 170, $this->source), "html", null, true);
            echo "</h2>
                    </div>
                    <div class=\"ec-input\">
                        ";
            // line 173
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["activeTradeLaw"], "description", [], "any", false, false, true, 173), 173, $this->source);
            echo "
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activeTradeLaw'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "        </div>
        <div class=\"ec-orderRole__summary\">
            <div class=\"ec-totalBox\">
                <dl class=\"ec-totalBox__spec\">
                    <dt>";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("小計"), "html", null, true);
        echo "</dt>
                    <dd class=\"ec-totalBox__specTotal\">";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 182, $this->source); })()), "subtotal", [], "any", false, false, true, 182), 182, $this->source)), "html", null, true);
        echo "</dd>
                </dl>
                <dl class=\"ec-totalBox__spec\">
                    <dt>";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("手数料"), "html", null, true);
        echo "</dt>
                    <dd>";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 186, $this->source); })()), "charge", [], "any", false, false, true, 186), 186, $this->source)), "html", null, true);
        echo "</dd>
                </dl>
                <dl class=\"ec-totalBox__spec\">
                    <dt>";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("送料"), "html", null, true);
        echo "</dt>
                    <dd>";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 190, $this->source); })()), "deliveryFeeTotal", [], "any", false, false, true, 190), 190, $this->source)), "html", null, true);
        echo "</dd>
                </dl>
                ";
        // line 192
        if ((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 192, $this->source); })()), "taxable_discount", [], "any", false, false, true, 192) < 0)) {
            // line 193
            echo "                <dl class=\"ec-totalBox__spec\">
                    <dt>";
            // line 194
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("値引き"), "html", null, true);
            echo "</dt>
                    <dd>";
            // line 195
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 195, $this->source); })()), "taxable_discount", [], "any", false, false, true, 195), 195, $this->source)), "html", null, true);
            echo "</dd>
                </dl>
                ";
        }
        // line 198
        echo "                <div class=\"ec-totalBox__total\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("合計"), "html", null, true);
        echo "<span class=\"ec-totalBox__price\">";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 198, $this->source); })()), "taxable_total", [], "any", false, false, true, 198), 198, $this->source)), "html", null, true);
        echo "</span><span class=\"ec-totalBox__taxLabel\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
        echo "</span></div>
                ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 199, $this->source); })()), "tax_free_discount_items", [], "any", false, false, true, 199));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 200
            echo "                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
            // line 201
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "product_name", [], "any", false, false, true, 201), 201, $this->source), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 202
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, true, 202), 202, $this->source)), "html", null, true);
            echo "</dd>
                    </dl>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "                <div class=\"ec-totalBox__paymentTotal\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お支払い合計"), "html", null, true);
        echo "<span class=\"ec-totalBox__price\">";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 205, $this->source); })()), "payment_total", [], "any", false, false, true, 205), 205, $this->source)), "html", null, true);
        echo "</span><span class=\"ec-totalBox__taxLabel\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
        echo "</span></div>
                ";
        // line 206
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 206, $this->source); })()), "total_by_tax_rate", [], "any", false, false, true, 206));
        foreach ($context['_seq'] as $context["rate"] => $context["total"]) {
            // line 207
            echo "                    <dl class=\"ec-totalBox__taxRate\">
                        <dt>";
            // line 208
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税率 %rate% %対象", ["%rate%" => $context["rate"]]), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 209
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed($context["total"], 209, $this->source)), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("内消費税"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 209, $this->source); })()), "tax_by_tax_rate", [], "any", false, false, true, 209), $context["rate"], [], "array", false, false, true, 209), 209, $this->source)), "html", null, true);
            echo ")</dd>
                    </dl>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rate'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 212, $this->source); })()), "isOptionPoint", [], "any", false, false, true, 212) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 212, $this->source); })()), "Customer", [], "any", false, false, true, 212)))) {
            // line 213
            echo "                <div class=\"ec-totalBox__pointBlock\">
                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
            // line 215
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご利用ポイント"), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 216
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 216, $this->source); })()), "UsePoint", [], "any", false, false, true, 216), 216, $this->source)), "html", null, true);
            echo " pt</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec\">
                        <dt><span class=\"ec-font-bold\">";
            // line 219
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("加算ポイント"), "html", null, true);
            echo "</span></dt>
                        <dd><span class=\"ec-font-bold\">";
            // line 220
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 220, $this->source); })()), "AddPoint", [], "any", false, false, true, 220), 220, $this->source)), "html", null, true);
            echo " pt</span></dd>
                    </dl>
                </div>
                ";
        }
        // line 224
        echo "                <div class=\"ec-totalBox__btn\">
                    <button type=\"submit\" class=\"ec-blockBtn--action\">";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("注文する"), "html", null, true);
        echo "</button>
                    <a href=\"";
        // line 226
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping");
        echo "\" class=\"ec-blockBtn--cancel\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文手続きに戻る"), "html", null, true);
        echo "</a>
                </div>
            </div>
        </div>
    </div>
</form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Shopping/confirm.twig";
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
        return array (  675 => 226,  671 => 225,  668 => 224,  661 => 220,  657 => 219,  651 => 216,  647 => 215,  643 => 213,  640 => 212,  627 => 209,  623 => 208,  620 => 207,  616 => 206,  607 => 205,  598 => 202,  594 => 201,  591 => 200,  587 => 199,  578 => 198,  572 => 195,  568 => 194,  565 => 193,  563 => 192,  558 => 190,  554 => 189,  548 => 186,  544 => 185,  538 => 182,  534 => 181,  528 => 177,  518 => 173,  512 => 170,  508 => 168,  504 => 167,  498 => 164,  492 => 161,  488 => 159,  481 => 155,  475 => 152,  471 => 150,  469 => 149,  460 => 146,  454 => 145,  451 => 144,  446 => 143,  444 => 142,  438 => 139,  433 => 136,  414 => 131,  410 => 130,  404 => 127,  400 => 126,  391 => 123,  385 => 122,  382 => 121,  377 => 120,  375 => 119,  371 => 118,  363 => 113,  354 => 112,  341 => 111,  335 => 108,  332 => 107,  315 => 102,  307 => 100,  304 => 99,  296 => 97,  294 => 96,  286 => 95,  279 => 93,  275 => 91,  271 => 90,  267 => 88,  264 => 87,  261 => 86,  244 => 85,  239 => 83,  231 => 78,  227 => 77,  221 => 76,  216 => 75,  212 => 74,  206 => 73,  198 => 72,  192 => 69,  184 => 64,  180 => 63,  170 => 56,  167 => 55,  164 => 54,  157 => 50,  154 => 49,  151 => 48,  144 => 44,  141 => 43,  138 => 42,  135 => 41,  128 => 37,  125 => 36,  122 => 35,  119 => 34,  117 => 33,  111 => 30,  108 => 29,  105 => 28,  102 => 27,  100 => 26,  90 => 19,  85 => 16,  75 => 15,  64 => 11,  62 => 13,  37 => 11,);
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

{% form_theme form 'Form/form_div_layout.twig' %}

{% block main %}

<div class=\"ec-role\">
    <div class=\"ec-pageHeader\">
        <h1>{{ 'ご注文内容のご確認'|trans }}</h1>
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
            <li class=\"ec-progress__item is-complete\">
                <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                </div>
                <div class=\"ec-progress__label\">{{ 'ご注文内容確認'|trans }}
                </div>
            </li>
            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                </div>
                <div class=\"ec-progress__label\">{{ '完了'|trans }}
                </div>
            </li>
        </ul>
    </div>
</div>

    <form id=\"shopping-form\" method=\"post\" action=\"{{ url('shopping_checkout') }}\">
    {{ form_widget(form._token) }}
    <div class=\"ec-orderRole\">
        <div class=\"ec-orderRole__detail\">
            <div class=\"ec-orderAccount\">
                <div class=\"ec-rectHeading\">
                    <h2>{{ 'お客様情報'|trans }}</h2>
                </div>
                <div class=\"ec-orderAccount__account\">
                    <p class=\"ec-halfInput\">{{ ''|trans }}{{ Order.name01 }} {{ Order.name02 }}{{ ' 様'|trans }}</p>
                    <p class=\"ec-halfInput\">{{ Order.kana01 }} {{ Order.kana02 }}</p>
                    <p class=\"ec-input\">{{ Order.companyName }}</p>
                    <p class=\"ec-zipInput\">{{ '〒'|trans }}{{ Order.postal_code }}</p>
                    <p class=\"ec-input\">{{ Order.pref }}{{ Order.addr01 }}{{ Order.addr02 }}</p>
                    <p class=\"ec-telInput\">{{ Order.phone_number }}</p>
                    <p class=\"ec-input\">{{ Order.email }}</p>
                </div>
            </div>
            <div class=\"ec-orderDelivery\">
                <div class=\"ec-rectHeading\">
                    <h2>{{ '配送情報'|trans }}</h2>
                </div>
                {% for shipping in Order.shippings %}
                    {% set idx = loop.index0 %}
                    {% set isShowReducedTaxMess = false %}
                    <div class=\"ec-orderDelivery__item\">
                        <ul class=\"ec-borderedList\">
                            {% for orderItem in shipping.productOrderItems %}
                            <li>
                                <div class=\"ec-imageGrid\">
                                    <div class=\"ec-imageGrid__img\"><img src=\"{{ asset((orderItem.product is null ? null : orderItem.product.MainListImage)|no_image_product, 'save_image') }}\" alt=\"{{ orderItem.productName }}\"></div>
                                    <div class=\"ec-imageGrid__content\">
                                        <p>{{ orderItem.productName }}{% if is_reduced_tax_rate(orderItem) %}{{ '※'|trans }}{% set isShowReducedTaxMess = true %}{% endif %}</p>
                                        {% if orderItem.productClass is not null and orderItem.productClass.classCategory1 %}
                                            <p>{{ orderItem.productClass.classCategory1.className.name }}：{{ orderItem.productClass.classCategory1 }}</p>
                                        {% endif %}
                                        {% if orderItem.productClass is not null and orderItem.productClass.classCategory2 %}
                                            <p>{{ orderItem.productClass.classCategory2.className.name }}：{{ orderItem.productClass.classCategory2 }}</p>
                                        {% endif %}
                                        <p>{{ orderItem.priceIncTax|price }} × {{ orderItem.quantity|number_format }}<span>{{ '小計：'|trans }}{{ orderItem.totalPrice|price }}</span></p>
                                    </div>
                                </div>
                            </li>
                            {% endfor %}
                        </ul>
                        <p>{{ isShowReducedTaxMess ? '※ は軽減税率対象商品です。'|trans }}</p>
                    </div>
                    <div class=\"ec-orderDelivery__address\">
                        <p>{{ ''|trans }}{{ shipping.name01 }} {{ shipping.name02 }} ({{ shipping.kana01 }} {{ shipping.kana02 }}){{ ' 様'|trans }}</p>
                        <p>{{ '〒'|trans }}{{ shipping.postal_code }} {{ shipping.pref }}{{ shipping.addr01 }}{{ shipping.addr02 }}</p>
                        <p>{{ shipping.phone_number }}</p>
                    </div>
                    <div class=\"ec-orderDelivery__actions\">
                        <div class=\"ec-selects\">
                            <div class=\"ec-select\">
                                <label>{{ '配送方法'|trans }}</label>
                                {% set delivery_fee = 0 %}
                                {% for item in shipping.order_items|filter(item => item.isDeliveryFee) %}
                                    {% set delivery_fee = item.total_price %}
                                {% endfor %}
                                {{ Order.Shippings[idx].Delivery }}({{ delivery_fee|price }})
                            </div>
                            <div class=\"ec-select ec-select__delivery\">
                                <label>{{ 'お届け日'|trans }}</label>
                                {{ Order.Shippings[idx].shipping_delivery_date? Order.Shippings[idx].shipping_delivery_date|date_day_with_weekday : '指定なし'|trans }}
                            </div>
                            <div class=\"ec-select ec-select__time\">
                                <label>{{ 'お届け時間'|trans }}</label>
                                {{ Order.Shippings[idx].shipping_delivery_time?: '指定なし'|trans }}
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
            <div class=\"ec-orderPayment\">
                <div class=\"ec-rectHeading\">
                    <h2>{{ 'お支払方法'|trans }}</h2>
                </div>
                <div class=\"ec-blockRadio\">
                    {% set charge = 0 %}
                    {% for item in Order.order_items|filter(item => item.isCharge) %}
                        {% set charge = item.total_price %}
                    {% endfor %}
                    {{ Order.Payment }}({{ charge|price }})
                </div>
            </div>
            {% if BaseInfo.isOptionPoint and Order.Customer is not null %}
            <div class=\"ec-orderPayment\">
                <div class=\"ec-rectHeading\">
                    <h2>{{ '利用ポイント'|trans }}</h2>
                </div>
                <div class=\"ec-blockRadio\">
                    {{ Order.use_point|number_format }} pt
                </div>
            </div>
            {% endif %}
            <div class=\"ec-orderConfirm\">
                <div class=\"ec-rectHeading\">
                    <h2>{{ 'お問い合わせ'|trans }}</h2>
                </div>
                <div class=\"ec-input\">
                    {{ Order.message|nl2br }}
                </div>
            </div>
            {% for activeTradeLaw in activeTradeLaws|filter(t => t.name and t.description) %}
                <div class=\"ec-orderConfirm\">
                    <div class=\"ec-rectHeading\">
                        <h2>{{ activeTradeLaw.name }}</h2>
                    </div>
                    <div class=\"ec-input\">
                        {{ activeTradeLaw.description|raw }}
                    </div>
                </div>
            {% endfor %}
        </div>
        <div class=\"ec-orderRole__summary\">
            <div class=\"ec-totalBox\">
                <dl class=\"ec-totalBox__spec\">
                    <dt>{{ '小計'|trans }}</dt>
                    <dd class=\"ec-totalBox__specTotal\">{{ Order.subtotal|price }}</dd>
                </dl>
                <dl class=\"ec-totalBox__spec\">
                    <dt>{{ '手数料'|trans }}</dt>
                    <dd>{{ Order.charge|price }}</dd>
                </dl>
                <dl class=\"ec-totalBox__spec\">
                    <dt>{{ '送料'|trans }}</dt>
                    <dd>{{ Order.deliveryFeeTotal|price }}</dd>
                </dl>
                {% if Order.taxable_discount < 0 %}
                <dl class=\"ec-totalBox__spec\">
                    <dt>{{ '値引き'|trans }}</dt>
                    <dd>{{ Order.taxable_discount|price }}</dd>
                </dl>
                {% endif %}
                <div class=\"ec-totalBox__total\">{{ '合計'|trans }}<span class=\"ec-totalBox__price\">{{ Order.taxable_total|price }}</span><span class=\"ec-totalBox__taxLabel\">{{ '税込'|trans }}</span></div>
                {% for item in Order.tax_free_discount_items %}
                    <dl class=\"ec-totalBox__spec\">
                        <dt>{{ item.product_name }}</dt>
                        <dd>{{ item.total_price|price }}</dd>
                    </dl>
                {% endfor %}
                <div class=\"ec-totalBox__paymentTotal\">{{ 'お支払い合計'|trans }}<span class=\"ec-totalBox__price\">{{ Order.payment_total|price }}</span><span class=\"ec-totalBox__taxLabel\">{{ '税込'|trans }}</span></div>
                {% for rate, total in Order.total_by_tax_rate %}
                    <dl class=\"ec-totalBox__taxRate\">
                        <dt>{{ '税率 %rate% %対象'|trans({ '%rate%': rate }) }}</dt>
                        <dd>{{ total|price }} ({{ '内消費税'|trans }} {{ Order.tax_by_tax_rate[rate]|price }})</dd>
                    </dl>
                {% endfor %}
                {% if BaseInfo.isOptionPoint and Order.Customer is not null %}
                <div class=\"ec-totalBox__pointBlock\">
                    <dl class=\"ec-totalBox__spec\">
                        <dt>{{ 'ご利用ポイント'|trans }}</dt>
                        <dd>{{ Order.UsePoint|number_format }} pt</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec\">
                        <dt><span class=\"ec-font-bold\">{{ '加算ポイント'|trans }}</span></dt>
                        <dd><span class=\"ec-font-bold\">{{ Order.AddPoint|number_format }} pt</span></dd>
                    </dl>
                </div>
                {% endif %}
                <div class=\"ec-totalBox__btn\">
                    <button type=\"submit\" class=\"ec-blockBtn--action\">{{ '注文する'|trans }}</button>
                    <a href=\"{{ url('shopping') }}\" class=\"ec-blockBtn--cancel\">{{ 'ご注文手続きに戻る'|trans }}</a>
                </div>
            </div>
        </div>
    </div>
</form>
{% endblock %}
", "Shopping/confirm.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\default\\Shopping\\confirm.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("form_theme" => 13, "set" => 26, "if" => 33, "for" => 85);
        static $filters = array("escape" => 19, "trans" => 19, "no_image_product" => 93, "price" => 102, "number_format" => 102, "filter" => 120, "date_day_with_weekday" => 127, "nl2br" => 164, "raw" => 173);
        static $functions = array("is_granted" => 33, "url" => 63, "form_widget" => 64, "asset" => 93, "is_reduced_tax_rate" => 95);

        try {
            $this->sandbox->checkSecurity(
                ['form_theme', 'set', 'if', 'for'],
                ['escape', 'trans', 'no_image_product', 'price', 'number_format', 'filter', 'date_day_with_weekday', 'nl2br', 'raw'],
                ['is_granted', 'url', 'form_widget', 'asset', 'is_reduced_tax_rate']
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
