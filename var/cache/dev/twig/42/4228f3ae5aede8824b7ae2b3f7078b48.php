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

/* AmazonPayV2_42_Bundle/Resource/template/default/Mypage/amazon_login_js.twig */
class __TwigTemplate_147b510b822a69b48f0ddd0b2ae04c26 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Resource/template/default/Mypage/amazon_login_js.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Resource/template/default/Mypage/amazon_login_js.twig"));

        // line 10
        echo "
<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["AmazonPayV2Api"]) || array_key_exists("AmazonPayV2Api", $context) ? $context["AmazonPayV2Api"] : (function () { throw new RuntimeError('Variable "AmazonPayV2Api" does not exist.', 11, $this->source); })()), "checkout_script_url", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" charset=\"utf-8\">
    \$(function () {
        // エラー文を設置
        \$(\".ec-pageHeader\").after(\$(\".login_with_amazon_error\"));

        ";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, (isset($context["AmazonPayV2Config"]) || array_key_exists("AmazonPayV2Config", $context) ? $context["AmazonPayV2Config"] : (function () { throw new RuntimeError('Variable "AmazonPayV2Config" does not exist.', 17, $this->source); })()), "mypage_login_button_place", [], "any", false, false, true, 17) == twig_get_attribute($this->env, $this->source, twig_constant("Plugin\\AmazonPayV2_42_Bundle\\Form\\Type\\Master\\ConfigTypeMaster::CART_BUTTON_PLACE"), "AUTO", [], "array", false, false, true, 17))) {
            // line 18
            echo "        \$(\"div.ec-login > .div_AmazonLogin\").each(function() {
            AmazonRenderButton();
        });
        ";
        } else {
            // line 22
            echo "        AmazonRenderButton();
        ";
        }
        // line 24
        echo "
    });

    function AmazonRenderButton() {
        amazon.Pay.renderButton('#AmazonLoginButton', {
            // set checkout environment
            merchantId: '";
        // line 30
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["AmazonPayV2Config"]) || array_key_exists("AmazonPayV2Config", $context) ? $context["AmazonPayV2Config"] : (function () { throw new RuntimeError('Variable "AmazonPayV2Config" does not exist.', 30, $this->source); })()), "seller_id", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        echo "',
            ledgerCurrency: 'JPY',
            ";
        // line 32
        if ((twig_get_attribute($this->env, $this->source, (isset($context["AmazonPayV2Config"]) || array_key_exists("AmazonPayV2Config", $context) ? $context["AmazonPayV2Config"] : (function () { throw new RuntimeError('Variable "AmazonPayV2Config" does not exist.', 32, $this->source); })()), "env", [], "any", false, false, true, 32) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 32, $this->source); })()), "amazon_pay_v2", [], "any", false, false, true, 32), "env", [], "any", false, false, true, 32), "sandbox", [], "any", false, false, true, 32))) {
            // line 33
            echo "            sandbox: true,
            ";
        }
        // line 35
        echo "            // customize the buyer experience
            checkoutLanguage: 'ja_JP',
            productType: 'SignIn',
            placement: 'Other',
            buttonColor: '";
        // line 39
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["buttonColor"]) || array_key_exists("buttonColor", $context) ? $context["buttonColor"] : (function () { throw new RuntimeError('Variable "buttonColor" does not exist.', 39, $this->source); })()), 39, $this->source), "html", null, true);
        echo "',
            // configure sign in
            signInConfig: {
                payloadJSON: '";
        // line 42
        echo $this->sandbox->ensureToStringAllowed((isset($context["payload"]) || array_key_exists("payload", $context) ? $context["payload"] : (function () { throw new RuntimeError('Variable "payload" does not exist.', 42, $this->source); })()), 42, $this->source);
        echo "', // string generated in step 2
                signature: '";
        // line 43
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["signature"]) || array_key_exists("signature", $context) ? $context["signature"] : (function () { throw new RuntimeError('Variable "signature" does not exist.', 43, $this->source); })()), 43, $this->source), "html", null, true);
        echo "', // signature generatd in step 3
                publicKeyId: '";
        // line 44
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["AmazonPayV2Config"]) || array_key_exists("AmazonPayV2Config", $context) ? $context["AmazonPayV2Config"] : (function () { throw new RuntimeError('Variable "AmazonPayV2Config" does not exist.', 44, $this->source); })()), "public_key_id", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        echo "'
            }
        });
    }
</script>

<div class=\"hidden\">
    <div class=\"ec-role login_with_amazon_error\">
        <div class=\"ec-grid3 ec-grid--center\">
            <div class=\"ec-off3Grid__cell\">
                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "session", [], "any", false, false, true, 54), "flashbag", [], "any", false, false, true, 54), "get", ["eccube.amazon_pay_v2.error"], "method", false, false, true, 54));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 55
            echo "                    <div class=\"ec-alert-warning\">
                        <div class=\"ec-alert-warning__icon\">
                            <img src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
            echo "\">
                        </div>
                        <div class=\"ec-alert-warning__text\">
                            ";
            // line 60
            echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed($context["error"], 60, $this->source)), "html", null, true));
            echo "
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "            </div>
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "AmazonPayV2_42_Bundle/Resource/template/default/Mypage/amazon_login_js.twig";
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
        return array (  157 => 64,  147 => 60,  141 => 57,  137 => 55,  133 => 54,  120 => 44,  116 => 43,  112 => 42,  106 => 39,  100 => 35,  96 => 33,  94 => 32,  89 => 30,  81 => 24,  77 => 22,  71 => 18,  69 => 17,  60 => 11,  57 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("{#
Amazon Pay V2 for EC-CUBE4.2
Copyright(c) 2023 EC-CUBE CO.,LTD. all rights reserved.

https://www.ec-cube.co.jp/

This program is not free software.
It applies to terms of service.
#}

<script src=\"{{ AmazonPayV2Api.checkout_script_url }}\"></script>
<script type=\"text/javascript\" charset=\"utf-8\">
    \$(function () {
        // エラー文を設置
        \$(\".ec-pageHeader\").after(\$(\".login_with_amazon_error\"));

        {% if AmazonPayV2Config.mypage_login_button_place == constant('Plugin\\\\AmazonPayV2_42_Bundle\\\\Form\\\\Type\\\\Master\\\\ConfigTypeMaster::CART_BUTTON_PLACE')['AUTO'] %}
        \$(\"div.ec-login > .div_AmazonLogin\").each(function() {
            AmazonRenderButton();
        });
        {% else %}
        AmazonRenderButton();
        {% endif %}

    });

    function AmazonRenderButton() {
        amazon.Pay.renderButton('#AmazonLoginButton', {
            // set checkout environment
            merchantId: '{{ AmazonPayV2Config.seller_id }}',
            ledgerCurrency: 'JPY',
            {% if AmazonPayV2Config.env == eccube_config.amazon_pay_v2.env.sandbox %}
            sandbox: true,
            {% endif %}
            // customize the buyer experience
            checkoutLanguage: 'ja_JP',
            productType: 'SignIn',
            placement: 'Other',
            buttonColor: '{{ buttonColor }}',
            // configure sign in
            signInConfig: {
                payloadJSON: '{{ payload | raw }}', // string generated in step 2
                signature: '{{ signature }}', // signature generatd in step 3
                publicKeyId: '{{ AmazonPayV2Config.public_key_id }}'
            }
        });
    }
</script>

<div class=\"hidden\">
    <div class=\"ec-role login_with_amazon_error\">
        <div class=\"ec-grid3 ec-grid--center\">
            <div class=\"ec-off3Grid__cell\">
                {% for error in app.session.flashbag.get('eccube.amazon_pay_v2.error') %}
                    <div class=\"ec-alert-warning\">
                        <div class=\"ec-alert-warning__icon\">
                            <img src=\"{{ asset('assets/icon/exclamation-white.svg') }}\">
                        </div>
                        <div class=\"ec-alert-warning__text\">
                            {{ error|trans|nl2br }}
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
</div>", "AmazonPayV2_42_Bundle/Resource/template/default/Mypage/amazon_login_js.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\AmazonPayV2_42_Bundle\\Resource\\template\\default\\Mypage\\amazon_login_js.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 17, "for" => 54);
        static $filters = array("escape" => 11, "raw" => 42, "nl2br" => 60, "trans" => 60);
        static $functions = array("constant" => 17, "asset" => 57);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'nl2br', 'trans'],
                ['constant', 'asset']
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
