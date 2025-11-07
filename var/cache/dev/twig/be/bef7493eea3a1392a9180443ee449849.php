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

/* Cart/index.twig */
class __TwigTemplate_d1279605f7487df1f725e26e351507a4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Cart/index.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Cart/index.twig"));

        // line 13
        $context["body_class"] = "cart_page";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Cart/index.twig", 11);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ショッピングカート"), "html", null, true);
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
        echo "                <li class=\"ec-progress__item is-complete\">
                    <div class=\"ec-progress__number\">";
        // line 28
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 28, $this->source); })()), 28, $this->source), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 28, $this->source); })()) + 1);
        // line 29
        echo "                    </div>
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
            echo "                    <li class=\"ec-progress__item\">
                        <div class=\"ec-progress__number\">";
            // line 35
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 35, $this->source); })()), 35, $this->source), "html", null, true);
            $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 35, $this->source); })()) + 1);
            // line 36
            echo "                        </div>
                        <div class=\"ec-progress__label\">";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お客様情報"), "html", null, true);
            echo "
                        </div>
                    </li>
                ";
        }
        // line 41
        echo "                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 42
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 42, $this->source); })()), 42, $this->source), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 42, $this->source); })()) + 1);
        // line 43
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文手続き"), "html", null, true);
        echo "
                    </div>
                </li>
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 48
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 48, $this->source); })()), 48, $this->source), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 48, $this->source); })()) + 1);
        // line 49
        echo "                    </div>
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
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("完了"), "html", null, true);
        echo "
                    </div>
                </li>
            </ul>
        </div>
        ";
        // line 61
        $context["productStr"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "session", [], "any", false, false, true, 61), "flashbag", [], "any", false, false, true, 61), "get", ["eccube.front.request.product"], "method", false, false, true, 61);
        // line 62
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "session", [], "any", false, false, true, 62), "flashbag", [], "any", false, false, true, 62), "get", ["eccube.front.request.error"], "method", false, false, true, 62));
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
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 63
            echo "            ";
            $context["idx"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 63);
            // line 64
            echo "            <div class=\"ec-cartRole__error\">
                <div class=\"ec-alert-warning\">
                    <div class=\"ec-alert-warning__inner\">
                        <div class=\"ec-alert-warning__inner__item\">
                            <div class=\"ec-alert-warning__icon\"><img src=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
            echo "\"></div>
                            <div class=\"ec-alert-warning__text\">
                                ";
            // line 70
            if (twig_get_attribute($this->env, $this->source, ($context["productStr"] ?? null), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 70, $this->source); })()), [], "array", true, true, true, 70)) {
                // line 71
                echo "                                    ";
                echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed($context["error"], 71, $this->source), ["%product%" => twig_get_attribute($this->env, $this->source, (isset($context["productStr"]) || array_key_exists("productStr", $context) ? $context["productStr"] : (function () { throw new RuntimeError('Variable "productStr" does not exist.', 71, $this->source); })()), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 71, $this->source); })()), [], "array", false, false, true, 71)]), "html", null, true));
                echo "
                                ";
            } else {
                // line 73
                echo "                                    ";
                echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed($context["error"], 73, $this->source)), "html", null, true));
                echo "
                                ";
            }
            // line 75
            echo "                            </div>
                        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "session", [], "any", false, false, true, 81), "flashbag", [], "any", false, false, true, 81), "get", ["eccube.front.cart.error"], "method", false, false, true, 81));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 82
            echo "            <div class=\"ec-cartRole__error\">
                <div class=\"ec-alert-warning\">
                    <div class=\"ec-alert-warning__inner\">
                        <div class=\"ec-alert-warning__inner__item\">
                            <div class=\"ec-alert-warning__icon\"><img src=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
            echo "\"></div>
                            <div class=\"ec-alert-warning__text\">
                                ";
            // line 88
            echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed($context["error"], 88, $this->source)), "html", null, true));
            echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "        ";
        if (((isset($context["totalQuantity"]) || array_key_exists("totalQuantity", $context) ? $context["totalQuantity"] : (function () { throw new RuntimeError('Variable "totalQuantity" does not exist.', 95, $this->source); })()) > 0)) {
            // line 96
            echo "            <div class=\"ec-cartRole__totalText\">
                <p>
                    ";
            // line 98
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("商品の合計金額は「<strong>%price%</strong>」です。", ["%price%" => $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 98, $this->source); })()), 98, $this->source))]);
            echo "
                </p>
            </div>
            ";
            // line 101
            if ((twig_length_filter($this->env, (isset($context["Carts"]) || array_key_exists("Carts", $context) ? $context["Carts"] : (function () { throw new RuntimeError('Variable "Carts" does not exist.', 101, $this->source); })())) > 1)) {
                // line 102
                echo "                <div class=\"ec-cartRole__error\">
                    <div class=\"ec-alert-warning\">
                        <div class=\"ec-alert-warning__inner\">
                            <div class=\"ec-alert-warning__inner__item\">
                                <div class=\"ec-alert-warning__text\">
                                    ";
                // line 107
                echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("同時購入できない商品がカートに含まれています。"), "html", null, true));
                echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            }
            // line 114
            echo "
            <form name=\"form\" id=\"form_cart\" class=\"ec-cartRole\" method=\"post\" action=\"";
            // line 115
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart");
            echo "\">

                ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Carts"]) || array_key_exists("Carts", $context) ? $context["Carts"] : (function () { throw new RuntimeError('Variable "Carts" does not exist.', 117, $this->source); })()));
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
            foreach ($context['_seq'] as $context["CartIndex"] => $context["Cart"]) {
                // line 118
                echo "                    ";
                $context["cartKey"] = twig_get_attribute($this->env, $this->source, $context["Cart"], "cart_key", [], "any", false, false, true, 118);
                // line 119
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "session", [], "any", false, false, true, 119), "flashbag", [], "any", false, false, true, 119), "get", [(("eccube.front.cart." . (isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 119, $this->source); })())) . ".request.error")], "method", false, false, true, 119));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 120
                    echo "                        <div class=\"ec-cartRole__error\">
                            <div class=\"ec-alert-warning\">
                                <div class=\"ec-alert-warning__inner\">
                                    <div class=\"ec-alert-warning__inner__item\">
                                        <div class=\"ec-alert-warning__icon\"><img src=\"";
                    // line 124
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
                    echo "\"></div>
                                        <div class=\"ec-alert-warning__text\">
                                            ";
                    // line 126
                    echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed($context["error"], 126, $this->source)), "html", null, true));
                    echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 133
                echo "
                    <div class=\"ec-cartRole__cart\">
                        <div class=\"ec-cartTable\">
                            <ol class=\"ec-cartHeader\">
                                <li class=\"ec-cartHeader__label\">";
                // line 137
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("削除"), "html", null, true);
                echo "</li>
                                <li class=\"ec-cartHeader__label\">";
                // line 138
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("商品内容"), "html", null, true);
                echo "</li>
                                <li class=\"ec-cartHeader__label\">";
                // line 139
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("数量"), "html", null, true);
                echo "</li>
                                <li class=\"ec-cartHeader__label\">";
                // line 140
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("小計"), "html", null, true);
                echo "</li>
                            </ol>
                            ";
                // line 142
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Cart"], "CartItems", [], "any", false, false, true, 142));
                foreach ($context['_seq'] as $context["_key"] => $context["CartItem"]) {
                    // line 143
                    echo "                                ";
                    $context["ProductClass"] = twig_get_attribute($this->env, $this->source, $context["CartItem"], "ProductClass", [], "any", false, false, true, 143);
                    // line 144
                    echo "                                ";
                    $context["Product"] = twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 144, $this->source); })()), "Product", [], "any", false, false, true, 144);
                    // line 145
                    echo "                                <ul class=\"ec-cartRow\">
                                    <li class=\"ec-cartRow__delColumn\">
                                        <a href=\"";
                    // line 147
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart_handle_item", ["operation" => "remove", "productClassId" => twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 147, $this->source); })()), "id", [], "any", false, false, true, 147)]), "html", null, true);
                    echo "\" ";
                    echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                    echo " class=\"ec-icon\" data-method=\"put\" data-message=\"カートから商品を削除してもよろしいですか?\">
                                            <img src=\"";
                    // line 148
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/cross.svg"), "html", null, true);
                    echo "\" alt=\"delete\">
                                        </a>
                                    </li>
                                    <li class=\"ec-cartRow__contentColumn\">
                                        <div class=\"ec-cartRow__img\">
                                            <a target=\"_blank\" href=\"";
                    // line 153
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 153, $this->source); })()), "id", [], "any", false, false, true, 153)]), "html", null, true);
                    echo "\">
                                                <img src=\"";
                    // line 154
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 154, $this->source); })()), "MainListImage", [], "any", false, false, true, 154), 154, $this->source)), "save_image"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 154, $this->source); })()), "name", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
                    echo "\"/>
                                            </a>
                                        </div>
                                        <div class=\"ec-cartRow__summary\">
                                            <div class=\"ec-cartRow__name\">
                                                <a target=\"_blank\" href=\"";
                    // line 159
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 159, $this->source); })()), "id", [], "any", false, false, true, 159)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 159, $this->source); })()), "name", [], "any", false, false, true, 159), 159, $this->source), "html", null, true);
                    echo "</a>
                                                ";
                    // line 160
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 160, $this->source); })()), "ClassCategory1", [], "any", false, false, true, 160) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 160, $this->source); })()), "ClassCategory1", [], "any", false, false, true, 160), "id", [], "any", false, false, true, 160))) {
                        // line 161
                        echo "                                                    <br>";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 161, $this->source); })()), "ClassCategory1", [], "any", false, false, true, 161), "ClassName", [], "any", false, false, true, 161), "name", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
                        echo "：";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 161, $this->source); })()), "ClassCategory1", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
                        echo "
                                                ";
                    }
                    // line 163
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 163, $this->source); })()), "ClassCategory2", [], "any", false, false, true, 163) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 163, $this->source); })()), "ClassCategory2", [], "any", false, false, true, 163), "id", [], "any", false, false, true, 163))) {
                        // line 164
                        echo "                                                    <br>";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 164, $this->source); })()), "ClassCategory2", [], "any", false, false, true, 164), "ClassName", [], "any", false, false, true, 164), "name", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
                        echo "：";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 164, $this->source); })()), "ClassCategory2", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
                        echo "
                                                ";
                    }
                    // line 166
                    echo "                                            </div>
                                            <div class=\"ec-cartRow__unitPrice\">";
                    // line 167
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CartItem"], "price", [], "any", false, false, true, 167), 167, $this->source)), "html", null, true);
                    echo "</div>
                                            <div class=\"ec-cartRow__sutbtotalSP\">";
                    // line 168
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("小計："), "html", null, true);
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CartItem"], "total_price", [], "any", false, false, true, 168), 168, $this->source)), "html", null, true);
                    echo "</div>
                                        </div>
                                    </li>
                                    <li class=\"ec-cartRow__amountColumn\">
                                        <div class=\"ec-cartRow__amount\">";
                    // line 172
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CartItem"], "quantity", [], "any", false, false, true, 172), 172, $this->source)), "html", null, true);
                    echo "</div>
                                        <div class=\"ec-cartRow__amountSP\">";
                    // line 173
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("数量："), "html", null, true);
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CartItem"], "quantity", [], "any", false, false, true, 173), 173, $this->source)), "html", null, true);
                    echo "</div>
                                        <div class=\"ec-cartRow__amountUpDown\">
                                            ";
                    // line 175
                    if ((twig_get_attribute($this->env, $this->source, $context["CartItem"], "quantity", [], "any", false, false, true, 175) > 1)) {
                        // line 176
                        echo "                                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart_handle_item", ["operation" => "down", "productClassId" => twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 176, $this->source); })()), "id", [], "any", false, false, true, 176)]), "html", null, true);
                        echo "\" ";
                        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                        echo " class=\"ec-cartRow__amountDownButton load-overlay\" data-method=\"put\" data-confirm=\"false\">
                                                    <span class=\"ec-cartRow__amountDownButton__icon\"><img src=\"";
                        // line 177
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/minus-dark.svg"), "html", null, true);
                        echo "\" alt=\"reduce\"></span>
                                                </a>
                                            ";
                    } else {
                        // line 180
                        echo "                                                <div class=\"ec-cartRow__amountDownButtonDisabled\">
                                                    <span class=\"ec-cartRow__amountDownButton__icon\"><img src=\"";
                        // line 181
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/minus.svg"), "html", null, true);
                        echo "\" alt=\"reduce\"></span>
                                                </div>
                                            ";
                    }
                    // line 184
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart_handle_item", ["operation" => "up", "productClassId" => twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 184, $this->source); })()), "id", [], "any", false, false, true, 184)]), "html", null, true);
                    echo "\" ";
                    echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                    echo " class=\"ec-cartRow__amountUpButton load-overlay\" data-method=\"put\" data-confirm=\"false\">
                                                <span class=\"ec-cartRow__amountUpButton__icon\"><img src=\"";
                    // line 185
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/plus-dark.svg"), "html", null, true);
                    echo "\" alt=\"increase\"></span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class=\"ec-cartRow__subtotalColumn\">
                                        <div class=\"ec-cartRow__sutbtotal\">";
                    // line 190
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["CartItem"], "total_price", [], "any", false, false, true, 190), 190, $this->source)), "html", null, true);
                    echo "</div>
                                    </li>
                                </ul>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['CartItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 194
                echo "                        </div>
                    </div>
                    <div class=\"ec-cartRole__progress\">
                        ";
                // line 197
                if ((twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 197, $this->source); })()), "delivery_free_amount", [], "any", false, false, true, 197) && twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 197, $this->source); })()), "delivery_free_quantity", [], "any", false, false, true, 197))) {
                    // line 198
                    echo "                            <br/>
                            ";
                    // line 199
                    if (twig_get_attribute($this->env, $this->source, (isset($context["is_delivery_free"]) || array_key_exists("is_delivery_free", $context) ? $context["is_delivery_free"] : (function () { throw new RuntimeError('Variable "is_delivery_free" does not exist.', 199, $this->source); })()), (isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 199, $this->source); })()), [], "array", false, false, true, 199)) {
                        // line 200
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("現在送料無料です。"), "html", null, true);
                        echo "
                            ";
                    } else {
                        // line 202
                        echo "                                ";
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("あと「<strong>%price%</strong>」または「<strong>%quantity%個</strong>」のお買い上げで<strong class=\"ec-color-red\">送料無料</strong>になります。", ["%price%" => $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["least"]) || array_key_exists("least", $context) ? $context["least"] : (function () { throw new RuntimeError('Variable "least" does not exist.', 202, $this->source); })()), (isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 202, $this->source); })()), [], "array", false, false, true, 202), 202, $this->source)), "%quantity%" => twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 202, $this->source); })()), (isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 202, $this->source); })()), [], "array", false, false, true, 202), 202, $this->source))]);
                        echo "
                            ";
                    }
                    // line 204
                    echo "                        ";
                } elseif (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 204, $this->source); })()), "delivery_free_amount", [], "any", false, false, true, 204)) {
                    // line 205
                    echo "                            <br/>
                            ";
                    // line 206
                    if (twig_get_attribute($this->env, $this->source, (isset($context["is_delivery_free"]) || array_key_exists("is_delivery_free", $context) ? $context["is_delivery_free"] : (function () { throw new RuntimeError('Variable "is_delivery_free" does not exist.', 206, $this->source); })()), (isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 206, $this->source); })()), [], "array", false, false, true, 206)) {
                        // line 207
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("現在送料無料です。"), "html", null, true);
                        echo "
                            ";
                    } else {
                        // line 209
                        echo "                                ";
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("あと「<strong>%price%</strong>」のお買い上げで<strong class=\"ec-color-red\">送料無料</strong>になります。", ["%price%" => $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["least"]) || array_key_exists("least", $context) ? $context["least"] : (function () { throw new RuntimeError('Variable "least" does not exist.', 209, $this->source); })()), (isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 209, $this->source); })()), [], "array", false, false, true, 209), 209, $this->source))]);
                        echo "
                            ";
                    }
                    // line 211
                    echo "                        ";
                } elseif (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 211, $this->source); })()), "delivery_free_quantity", [], "any", false, false, true, 211)) {
                    // line 212
                    echo "                            <br/>
                            ";
                    // line 213
                    if (twig_get_attribute($this->env, $this->source, (isset($context["is_delivery_free"]) || array_key_exists("is_delivery_free", $context) ? $context["is_delivery_free"] : (function () { throw new RuntimeError('Variable "is_delivery_free" does not exist.', 213, $this->source); })()), (isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 213, $this->source); })()), [], "array", false, false, true, 213)) {
                        // line 214
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("現在送料無料です。"), "html", null, true);
                        echo "
                            ";
                    } else {
                        // line 216
                        echo "                                ";
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("あと「<strong>%quantity%個</strong>」のお買い上げで<strong class=\"ec-color-red\">送料無料</strong>になります。", ["%quantity%" => twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 216, $this->source); })()), (isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 216, $this->source); })()), [], "array", false, false, true, 216), 216, $this->source))]);
                        echo "
                            ";
                    }
                    // line 218
                    echo "                        ";
                }
                // line 219
                echo "                    </div>
                    <div class=\"ec-cartRole__actions\">
                        <div class=\"ec-cartRole__total\">";
                // line 221
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("合計："), "html", null, true);
                echo "<span class=\"ec-cartRole__totalAmount\">";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Cart"], "totalPrice", [], "any", false, false, true, 221), 221, $this->source)), "html", null, true);
                echo "</span>
                        </div>
                        <a class=\"ec-blockBtn--action\" href=\"";
                // line 223
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_buystep", ["cart_key" => (isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 223, $this->source); })())]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("レジに進む"), "html", null, true);
                echo "</a>
                        ";
                // line 224
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 224)) {
                    // line 225
                    echo "                            <a class=\"ec-blockBtn--cancel\" href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お買い物を続ける"), "html", null, true);
                    echo "</a>
                        ";
                }
                // line 227
                echo "                    </div>
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
            unset($context['_seq'], $context['_iterated'], $context['CartIndex'], $context['Cart'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 229
            echo "            </form>
        ";
        } else {
            // line 231
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Carts"]) || array_key_exists("Carts", $context) ? $context["Carts"] : (function () { throw new RuntimeError('Variable "Carts" does not exist.', 231, $this->source); })()));
            foreach ($context['_seq'] as $context["CartIndex"] => $context["Cart"]) {
                // line 232
                echo "                ";
                $context["cartKey"] = twig_get_attribute($this->env, $this->source, $context["Cart"], "cart_key", [], "any", false, false, true, 232);
                // line 233
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 233, $this->source); })()), "session", [], "any", false, false, true, 233), "flashbag", [], "any", false, false, true, 233), "get", [(("eccube.front.cart." . (isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 233, $this->source); })())) . ".request.error")], "method", false, false, true, 233));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 234
                    echo "                    <div class=\"ec-cartRole__error\">
                        <div class=\"ec-alert-warning\">
                            <div class=\"ec-alert-warning__inner\">
                                <div class=\"ec-alert-warning__inner__item\">
                                    <div class=\"ec-alert-warning__icon\"><img src=\"";
                    // line 238
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
                    echo "\"></div>
                                    <div class=\"ec-alert-warning__text\">
                                        ";
                    // line 240
                    echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed($context["error"], 240, $this->source)), "html", null, true));
                    echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 247
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['CartIndex'], $context['Cart'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 248
            echo "            <div class=\"ec-role\">
                <div class=\"ec-off3Grid\">
                    <div class=\"ec-off3Grid__cell\">
                        <div class=\"ec-alert-warning\">
                            <div class=\"ec-alert-warning__inner\">
                                <div class=\"ec-alert-warning__inner__item\">
                                    <div class=\"ec-alert-warning__icon\"><img src=\"";
            // line 254
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
            echo "\"></div>
                                    <div class=\"ec-alert-warning__text\">";
            // line 255
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("現在カート内に商品はございません。"), "html", null, true);
            echo "</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 263
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
        return "Cart/index.twig";
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
        return array (  708 => 263,  697 => 255,  693 => 254,  685 => 248,  679 => 247,  666 => 240,  661 => 238,  655 => 234,  650 => 233,  647 => 232,  642 => 231,  638 => 229,  623 => 227,  615 => 225,  613 => 224,  607 => 223,  600 => 221,  596 => 219,  593 => 218,  587 => 216,  581 => 214,  579 => 213,  576 => 212,  573 => 211,  567 => 209,  561 => 207,  559 => 206,  556 => 205,  553 => 204,  547 => 202,  541 => 200,  539 => 199,  536 => 198,  534 => 197,  529 => 194,  519 => 190,  511 => 185,  504 => 184,  498 => 181,  495 => 180,  489 => 177,  482 => 176,  480 => 175,  474 => 173,  470 => 172,  462 => 168,  458 => 167,  455 => 166,  447 => 164,  444 => 163,  436 => 161,  434 => 160,  428 => 159,  418 => 154,  414 => 153,  406 => 148,  400 => 147,  396 => 145,  393 => 144,  390 => 143,  386 => 142,  381 => 140,  377 => 139,  373 => 138,  369 => 137,  363 => 133,  350 => 126,  345 => 124,  339 => 120,  334 => 119,  331 => 118,  314 => 117,  309 => 115,  306 => 114,  296 => 107,  289 => 102,  287 => 101,  281 => 98,  277 => 96,  274 => 95,  261 => 88,  256 => 86,  250 => 82,  245 => 81,  226 => 75,  220 => 73,  214 => 71,  212 => 70,  207 => 68,  201 => 64,  198 => 63,  180 => 62,  178 => 61,  170 => 56,  167 => 55,  164 => 54,  157 => 50,  154 => 49,  151 => 48,  144 => 44,  141 => 43,  138 => 42,  135 => 41,  128 => 37,  125 => 36,  122 => 35,  119 => 34,  117 => 33,  111 => 30,  108 => 29,  105 => 28,  102 => 27,  100 => 26,  90 => 19,  85 => 16,  75 => 15,  64 => 11,  62 => 13,  37 => 11,);
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
            <h1>{{ 'ショッピングカート'|trans }}</h1>
        </div>
    </div>

    <div class=\"ec-cartRole\">
        <div class=\"ec-cartRole__progress\">
            <ul class=\"ec-progress\">
                {% set step = 1 %}
                <li class=\"ec-progress__item is-complete\">
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
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                    </div>
                    <div class=\"ec-progress__label\">{{ '完了'|trans }}
                    </div>
                </li>
            </ul>
        </div>
        {% set productStr = app.session.flashbag.get('eccube.front.request.product') %}
        {% for error in app.session.flashbag.get('eccube.front.request.error') %}
            {% set idx = loop.index0 %}
            <div class=\"ec-cartRole__error\">
                <div class=\"ec-alert-warning\">
                    <div class=\"ec-alert-warning__inner\">
                        <div class=\"ec-alert-warning__inner__item\">
                            <div class=\"ec-alert-warning__icon\"><img src=\"{{ asset('assets/icon/exclamation-white.svg') }}\"></div>
                            <div class=\"ec-alert-warning__text\">
                                {% if productStr[idx] is defined %}
                                    {{ error|trans({'%product%':productStr[idx]})|nl2br }}
                                {% else %}
                                    {{ error|trans|nl2br }}
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}
        {% for error in app.session.flashbag.get('eccube.front.cart.error') %}
            <div class=\"ec-cartRole__error\">
                <div class=\"ec-alert-warning\">
                    <div class=\"ec-alert-warning__inner\">
                        <div class=\"ec-alert-warning__inner__item\">
                            <div class=\"ec-alert-warning__icon\"><img src=\"{{ asset('assets/icon/exclamation-white.svg') }}\"></div>
                            <div class=\"ec-alert-warning__text\">
                                {{ error|trans|nl2br }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}
        {% if totalQuantity > 0 %}
            <div class=\"ec-cartRole__totalText\">
                <p>
                    {{ '商品の合計金額は「<strong>%price%</strong>」です。'|trans({ '%price%': totalPrice|price })|raw }}
                </p>
            </div>
            {% if Carts|length > 1 %}
                <div class=\"ec-cartRole__error\">
                    <div class=\"ec-alert-warning\">
                        <div class=\"ec-alert-warning__inner\">
                            <div class=\"ec-alert-warning__inner__item\">
                                <div class=\"ec-alert-warning__text\">
                                    {{ '同時購入できない商品がカートに含まれています。'|trans|nl2br }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {% endif %}

            <form name=\"form\" id=\"form_cart\" class=\"ec-cartRole\" method=\"post\" action=\"{{ url('cart') }}\">

                {% for CartIndex,Cart in Carts %}
                    {% set cartKey = Cart.cart_key %}
                    {% for error in app.session.flashbag.get('eccube.front.cart.' ~ cartKey ~ '.request.error') %}
                        <div class=\"ec-cartRole__error\">
                            <div class=\"ec-alert-warning\">
                                <div class=\"ec-alert-warning__inner\">
                                    <div class=\"ec-alert-warning__inner__item\">
                                        <div class=\"ec-alert-warning__icon\"><img src=\"{{ asset('assets/icon/exclamation-white.svg') }}\"></div>
                                        <div class=\"ec-alert-warning__text\">
                                            {{ error|trans|nl2br }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}

                    <div class=\"ec-cartRole__cart\">
                        <div class=\"ec-cartTable\">
                            <ol class=\"ec-cartHeader\">
                                <li class=\"ec-cartHeader__label\">{{ '削除'|trans }}</li>
                                <li class=\"ec-cartHeader__label\">{{ '商品内容'|trans }}</li>
                                <li class=\"ec-cartHeader__label\">{{ '数量'|trans }}</li>
                                <li class=\"ec-cartHeader__label\">{{ '小計'|trans }}</li>
                            </ol>
                            {% for CartItem in Cart.CartItems %}
                                {% set ProductClass = CartItem.ProductClass %}
                                {% set Product = ProductClass.Product %}
                                <ul class=\"ec-cartRow\">
                                    <li class=\"ec-cartRow__delColumn\">
                                        <a href=\"{{ url('cart_handle_item', {'operation': 'remove', 'productClassId': ProductClass.id }) }}\" {{ csrf_token_for_anchor() }} class=\"ec-icon\" data-method=\"put\" data-message=\"カートから商品を削除してもよろしいですか?\">
                                            <img src=\"{{ asset('assets/icon/cross.svg') }}\" alt=\"delete\">
                                        </a>
                                    </li>
                                    <li class=\"ec-cartRow__contentColumn\">
                                        <div class=\"ec-cartRow__img\">
                                            <a target=\"_blank\" href=\"{{ url('product_detail', {id : Product.id} ) }}\">
                                                <img src=\"{{ asset(Product.MainListImage|no_image_product, 'save_image') }}\" alt=\"{{ Product.name }}\"/>
                                            </a>
                                        </div>
                                        <div class=\"ec-cartRow__summary\">
                                            <div class=\"ec-cartRow__name\">
                                                <a target=\"_blank\" href=\"{{ url('product_detail', {id : Product.id} ) }}\">{{ Product.name }}</a>
                                                {% if ProductClass.ClassCategory1 and ProductClass.ClassCategory1.id %}
                                                    <br>{{ ProductClass.ClassCategory1.ClassName.name }}：{{ ProductClass.ClassCategory1 }}
                                                {% endif %}
                                                {% if ProductClass.ClassCategory2 and ProductClass.ClassCategory2.id %}
                                                    <br>{{ ProductClass.ClassCategory2.ClassName.name }}：{{ ProductClass.ClassCategory2 }}
                                                {% endif %}
                                            </div>
                                            <div class=\"ec-cartRow__unitPrice\">{{ CartItem.price|price }}</div>
                                            <div class=\"ec-cartRow__sutbtotalSP\">{{ '小計：'|trans }}{{ CartItem.total_price|price }}</div>
                                        </div>
                                    </li>
                                    <li class=\"ec-cartRow__amountColumn\">
                                        <div class=\"ec-cartRow__amount\">{{ CartItem.quantity|number_format }}</div>
                                        <div class=\"ec-cartRow__amountSP\">{{ '数量：'|trans }}{{ CartItem.quantity|number_format }}</div>
                                        <div class=\"ec-cartRow__amountUpDown\">
                                            {% if CartItem.quantity > 1 %}
                                                <a href=\"{{ url('cart_handle_item', {'operation': 'down', 'productClassId': ProductClass.id}) }}\" {{ csrf_token_for_anchor() }} class=\"ec-cartRow__amountDownButton load-overlay\" data-method=\"put\" data-confirm=\"false\">
                                                    <span class=\"ec-cartRow__amountDownButton__icon\"><img src=\"{{ asset('assets/icon/minus-dark.svg') }}\" alt=\"reduce\"></span>
                                                </a>
                                            {% else %}
                                                <div class=\"ec-cartRow__amountDownButtonDisabled\">
                                                    <span class=\"ec-cartRow__amountDownButton__icon\"><img src=\"{{ asset('assets/icon/minus.svg') }}\" alt=\"reduce\"></span>
                                                </div>
                                            {% endif %}
                                            <a href=\"{{ url('cart_handle_item', {'operation': 'up', 'productClassId': ProductClass.id}) }}\" {{ csrf_token_for_anchor() }} class=\"ec-cartRow__amountUpButton load-overlay\" data-method=\"put\" data-confirm=\"false\">
                                                <span class=\"ec-cartRow__amountUpButton__icon\"><img src=\"{{ asset('assets/icon/plus-dark.svg') }}\" alt=\"increase\"></span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class=\"ec-cartRow__subtotalColumn\">
                                        <div class=\"ec-cartRow__sutbtotal\">{{ CartItem.total_price|price }}</div>
                                    </li>
                                </ul>
                            {% endfor %}
                        </div>
                    </div>
                    <div class=\"ec-cartRole__progress\">
                        {% if BaseInfo.delivery_free_amount and BaseInfo.delivery_free_quantity %}
                            <br/>
                            {% if is_delivery_free[cartKey] %}
                                {{ '現在送料無料です。'|trans }}
                            {% else %}
                                {{ 'あと「<strong>%price%</strong>」または「<strong>%quantity%個</strong>」のお買い上げで<strong class=\"ec-color-red\">送料無料</strong>になります。'|trans({ '%price%': least[cartKey]|price, '%quantity%': quantity[cartKey]|number_format })|raw }}
                            {% endif %}
                        {% elseif BaseInfo.delivery_free_amount %}
                            <br/>
                            {% if is_delivery_free[cartKey] %}
                                {{ '現在送料無料です。'|trans }}
                            {% else %}
                                {{ 'あと「<strong>%price%</strong>」のお買い上げで<strong class=\"ec-color-red\">送料無料</strong>になります。'|trans({ '%price%': least[cartKey]|price })|raw }}
                            {% endif %}
                        {% elseif BaseInfo.delivery_free_quantity %}
                            <br/>
                            {% if is_delivery_free[cartKey] %}
                                {{ '現在送料無料です。'|trans }}
                            {% else %}
                                {{ 'あと「<strong>%quantity%個</strong>」のお買い上げで<strong class=\"ec-color-red\">送料無料</strong>になります。'|trans({ '%quantity%': quantity[cartKey]|number_format })|raw }}
                            {% endif %}
                        {% endif %}
                    </div>
                    <div class=\"ec-cartRole__actions\">
                        <div class=\"ec-cartRole__total\">{{ '合計：'|trans }}<span class=\"ec-cartRole__totalAmount\">{{ Cart.totalPrice|price }}</span>
                        </div>
                        <a class=\"ec-blockBtn--action\" href=\"{{ path('cart_buystep', {'cart_key':cartKey}) }}\">{{ 'レジに進む'|trans }}</a>
                        {% if loop.last %}
                            <a class=\"ec-blockBtn--cancel\" href=\"{{ path('homepage') }}\">{{ 'お買い物を続ける'|trans }}</a>
                        {% endif %}
                    </div>
                {% endfor %}
            </form>
        {% else %}
            {% for CartIndex,Cart in Carts %}
                {% set cartKey = Cart.cart_key %}
                {% for error in app.session.flashbag.get('eccube.front.cart.' ~ cartKey ~ '.request.error') %}
                    <div class=\"ec-cartRole__error\">
                        <div class=\"ec-alert-warning\">
                            <div class=\"ec-alert-warning__inner\">
                                <div class=\"ec-alert-warning__inner__item\">
                                    <div class=\"ec-alert-warning__icon\"><img src=\"{{ asset('assets/icon/exclamation-white.svg') }}\"></div>
                                    <div class=\"ec-alert-warning__text\">
                                        {{ error|trans|nl2br }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            {% endfor %}
            <div class=\"ec-role\">
                <div class=\"ec-off3Grid\">
                    <div class=\"ec-off3Grid__cell\">
                        <div class=\"ec-alert-warning\">
                            <div class=\"ec-alert-warning__inner\">
                                <div class=\"ec-alert-warning__inner__item\">
                                    <div class=\"ec-alert-warning__icon\"><img src=\"{{ asset('assets/icon/exclamation-white.svg') }}\"></div>
                                    <div class=\"ec-alert-warning__text\">{{ '現在カート内に商品はございません。'|trans }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {% endif %}
    </div>

{% endblock %}
", "Cart/index.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\default\\Cart\\index.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "if" => 33, "for" => 62);
        static $filters = array("escape" => 19, "trans" => 19, "nl2br" => 71, "raw" => 98, "price" => 98, "length" => 101, "no_image_product" => 154, "number_format" => 172);
        static $functions = array("is_granted" => 33, "asset" => 68, "url" => 115, "csrf_token_for_anchor" => 147, "path" => 223);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'trans', 'nl2br', 'raw', 'price', 'length', 'no_image_product', 'number_format'],
                ['is_granted', 'asset', 'url', 'csrf_token_for_anchor', 'path']
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
