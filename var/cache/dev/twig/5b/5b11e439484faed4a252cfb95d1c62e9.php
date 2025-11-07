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

/* AmazonPayV2_42_Bundle/Resource/template/default/Shopping/widgets.twig */
class __TwigTemplate_4047a990d2247febcbd8a0870d089aa0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Resource/template/default/Shopping/widgets.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Resource/template/default/Shopping/widgets.twig"));

        // line 10
        echo "

<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/amazon_shopping_v2.css"), "html", null, true);
        echo "\">
<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["AmazonPayV2Api"]) || array_key_exists("AmazonPayV2Api", $context) ? $context["AmazonPayV2Api"] : (function () { throw new RuntimeError('Variable "AmazonPayV2Api" does not exist.', 13, $this->source); })()), "checkout_script_url", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "\"></script>

<div class=\"d-none\">
    <div id=\"amazon_pay__address\">
        <div class=\"ec-orderDelivery__title\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先"), "html", null, true);
        echo "
            <div class=\"ec-orderDelivery__change\">
                <button class=\"ec-inlineBtn\" id=\"amazon_pay_shipping_change\" type=\"button\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先修正"), "html", null, true);
        echo "</button>
            </div>
        </div>
        <div class=\"ec-orderDelivery__address\">
            <p>";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["AmazonShippingAddress"] ?? null), "name", [], "any", true, true, true, 23)) {
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["AmazonShippingAddress"]) || array_key_exists("AmazonShippingAddress", $context) ? $context["AmazonShippingAddress"] : (function () { throw new RuntimeError('Variable "AmazonShippingAddress" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        }
        echo "</p>
            ";
        // line 24
        ob_start();
        // line 25
        echo "            <p>
                ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["AmazonShippingAddress"] ?? null), "postalCode", [], "any", true, true, true, 26)) {
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["AmazonShippingAddress"]) || array_key_exists("AmazonShippingAddress", $context) ? $context["AmazonShippingAddress"] : (function () { throw new RuntimeError('Variable "AmazonShippingAddress" does not exist.', 26, $this->source); })()), "postalCode", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        }
        // line 27
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["AmazonShippingAddress"] ?? null), "stateOrRegion", [], "any", true, true, true, 27)) {
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["AmazonShippingAddress"]) || array_key_exists("AmazonShippingAddress", $context) ? $context["AmazonShippingAddress"] : (function () { throw new RuntimeError('Variable "AmazonShippingAddress" does not exist.', 27, $this->source); })()), "stateOrRegion", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        }
        // line 28
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["AmazonShippingAddress"] ?? null), "city", [], "any", true, true, true, 28)) {
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["AmazonShippingAddress"]) || array_key_exists("AmazonShippingAddress", $context) ? $context["AmazonShippingAddress"] : (function () { throw new RuntimeError('Variable "AmazonShippingAddress" does not exist.', 28, $this->source); })()), "city", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        }
        // line 29
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["AmazonShippingAddress"] ?? null), "addressLine1", [], "any", true, true, true, 29)) {
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["AmazonShippingAddress"]) || array_key_exists("AmazonShippingAddress", $context) ? $context["AmazonShippingAddress"] : (function () { throw new RuntimeError('Variable "AmazonShippingAddress" does not exist.', 29, $this->source); })()), "addressLine1", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        }
        // line 30
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["AmazonShippingAddress"] ?? null), "addressLine2", [], "any", true, true, true, 30)) {
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["AmazonShippingAddress"]) || array_key_exists("AmazonShippingAddress", $context) ? $context["AmazonShippingAddress"] : (function () { throw new RuntimeError('Variable "AmazonShippingAddress" does not exist.', 30, $this->source); })()), "addressLine2", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        }
        // line 31
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["AmazonShippingAddress"] ?? null), "addressLine3", [], "any", true, true, true, 31)) {
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["AmazonShippingAddress"]) || array_key_exists("AmazonShippingAddress", $context) ? $context["AmazonShippingAddress"] : (function () { throw new RuntimeError('Variable "AmazonShippingAddress" does not exist.', 31, $this->source); })()), "addressLine3", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        }
        // line 32
        echo "            </p>
            ";
        $___internal_parse_4_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 24
        echo twig_spaceless($___internal_parse_4_);
        // line 34
        echo "            <p>";
        if (twig_get_attribute($this->env, $this->source, ($context["AmazonShippingAddress"] ?? null), "phoneNumber", [], "any", true, true, true, 34)) {
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["AmazonShippingAddress"]) || array_key_exists("AmazonShippingAddress", $context) ? $context["AmazonShippingAddress"] : (function () { throw new RuntimeError('Variable "AmazonShippingAddress" does not exist.', 34, $this->source); })()), "phoneNumber", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
        }
        echo "</p>
        </div>
    </div>
    <div id=\"amazon_pay__payment_descriptor\">
        ";
        // line 38
        if ((isset($context["AmazonPaymentDescriptor"]) || array_key_exists("AmazonPaymentDescriptor", $context) ? $context["AmazonPaymentDescriptor"] : (function () { throw new RuntimeError('Variable "AmazonPaymentDescriptor" does not exist.', 38, $this->source); })())) {
            // line 39
            echo "            <div class=\"amazon_pay_amazonpaymentdescriptor_block\">
                <div style=\"padding-right: 5px;\"><img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("AmazonPayV2_42_Bundle/assets/logo-amzn_pay.png", "plugin"), "html", null, true);
            echo "\"></div>
                <div>";
            // line 41
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["AmazonPaymentDescriptor"]) || array_key_exists("AmazonPaymentDescriptor", $context) ? $context["AmazonPaymentDescriptor"] : (function () { throw new RuntimeError('Variable "AmazonPaymentDescriptor" does not exist.', 41, $this->source); })()), 41, $this->source), "html", null, true);
            echo "</div>
            </div>
                <div class=\"amazon_pay_payment_change_block\">
                    <button class=\"ec-inlineBtn\" id=\"amazon_pay_payment_change\" type=\"button\">";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お支払方法修正"), "html", null, true);
            echo "</button>
                </div>
        ";
        }
        // line 47
        echo "    </div>
</div>

";
        // line 50
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 51
        echo "<script>

    \$(function () {
    // submit
";
        // line 55
        if ((twig_get_attribute($this->env, $this->source, (isset($context["AmazonPayV2Config"]) || array_key_exists("AmazonPayV2Config", $context) ? $context["AmazonPayV2Config"] : (function () { throw new RuntimeError('Variable "AmazonPayV2Config" does not exist.', 55, $this->source); })()), "use_confirm_page", [], "any", false, false, true, 55) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 55, $this->source); })()), "amazon_pay_v2", [], "any", false, false, true, 55), "toggle", [], "any", false, false, true, 55), "on", [], "any", false, false, true, 55))) {
            // line 56
            echo "    \$('#shopping-form').attr('action', '";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("amazon_pay_shopping_confirm");
            echo "')
";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 57
(isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 57, $this->source); })()), "postal_code", [], "any", false, false, true, 57) == " ")) {
            // line 58
            echo "    alert('お客様情報登録に失敗しました。他のお届け先を選択してください。');
    \$('button.ec-blockBtn--action').text('注文する').prop( 'disabled', true );
    \$('button.ec-blockBtn--action').addClass('amazon_pay_button');
    \$('#shopping-form').attr('action', '";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("amazon_pay_shopping_checkout");
            echo "');
";
        } else {
            // line 63
            echo "    \$('button.ec-blockBtn--action').text('注文する');
    \$('button.ec-blockBtn--action').addClass('amazon_pay_button');
    \$('#shopping-form').attr('action', '";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("amazon_pay_shopping_checkout");
            echo "');
";
        }
        // line 67
        echo "
// イベント上書き
var \$redirectCallbackAmazon = function () {
    loadingOverlay();
    \$('#shopping_order_redirect_to').val(\$(this).attr('data-path'));
    \$('#shopping-form').attr('action', '";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("amazon_pay_shopping_redirect_to");
        echo "').submit();
};
\$('[data-trigger]').each(function() {
    \$(this).off(\$(this).attr('data-trigger'));
    \$(this).on(\$(this).attr('data-trigger'), \$redirectCallbackAmazon);
});

\$('div.ec-orderRole__detail > div.ec-orderDelivery > div.ec-orderDelivery__title').remove();
\$('div.ec-orderRole__detail > div.ec-orderDelivery > div.ec-orderDelivery__item:not(:eq(0))').remove();
\$('div.ec-orderRole__detail > div.ec-orderDelivery > div.ec-orderDelivery__address').remove();
\$('div.ec-orderRole__detail > div.ec-orderDelivery > div.ec-orderDelivery__actions:not(:eq(0))').remove();
\$('div.ec-orderRole__detail > div.ec-orderDelivery > div.ec-orderDelivery__edit').remove();

\$('div.ec-orderRole__detail > div.ec-orderDelivery > .ec-rectHeading').after(\$('#amazon_pay__address > div.ec-orderDelivery__title'));
\$('div.ec-orderRole__detail > div.ec-orderDelivery > div.ec-orderDelivery__item').append(\$('#amazon_pay__address > div.ec-orderDelivery__address'));

// payment
\$('div.ec-orderRole__detail > div.ec-orderPayment > .ec-radio').first().hide();
\$('div.ec-orderRole__detail > div.ec-orderPayment > .ec-input').first().hide();

\$('div.ec-orderRole__detail > div.ec-orderPayment:first').append(\$('#amazon_pay__payment_descriptor'));

var orderSaveFlg = true;

//変更された時の対応
\$(\"#amazon_pay_shipping_change, #amazon_pay_payment_change\").on(\"click\",function(){
    if (orderSaveFlg) {
        const targetButton = \$(this);
        const targetForm = \$(\"#shopping-form\");

        \$.ajax({
            type: \"POST\",
            url: \"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("amazon_pay_shopping_order_save");
        echo "\",
            data: targetForm.serialize()
        })
            .done(function (data) {
                amazon.Pay.bindChangeAction('#amazon_pay_shipping_change', {
                    amazonCheckoutSessionId: '";
        // line 109
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["amazonCheckoutSessionId"]) || array_key_exists("amazonCheckoutSessionId", $context) ? $context["amazonCheckoutSessionId"] : (function () { throw new RuntimeError('Variable "amazonCheckoutSessionId" does not exist.', 109, $this->source); })()), 109, $this->source), "html", null, true);
        echo "',
                    changeAction: 'changeAddress'
                });
                amazon.Pay.bindChangeAction('#amazon_pay_payment_change', {
                    amazonCheckoutSessionId: '";
        // line 113
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["amazonCheckoutSessionId"]) || array_key_exists("amazonCheckoutSessionId", $context) ? $context["amazonCheckoutSessionId"] : (function () { throw new RuntimeError('Variable "amazonCheckoutSessionId" does not exist.', 113, $this->source); })()), 113, $this->source), "html", null, true);
        echo "',
                    changeAction: 'changePayment'
                });
                orderSaveFlg = false;
                targetButton.click();
            }).fail(function (data) {
                if (data.responseJSON.error == 'validateError') {
                    targetForm.submit();
                } else {
                    alert('通信中にエラーが発生しました。カート画面に移動します。');
                    window.location.href = \"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart");
        echo "\";
                }
            });
    };
});

\$('#shopping-form').submit(function(e) {
    \$amazon_pay_button = \$('.ec-blockBtn--action.amazon_pay_button');
    // 2重クリック防止
    \$amazon_pay_button.prop('disabled', true);
})
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "AmazonPayV2_42_Bundle/Resource/template/default/Shopping/widgets.twig";
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
        return array (  290 => 123,  277 => 113,  270 => 109,  262 => 104,  227 => 72,  220 => 67,  215 => 65,  211 => 63,  206 => 61,  201 => 58,  199 => 57,  194 => 56,  192 => 55,  186 => 51,  167 => 50,  162 => 47,  156 => 44,  150 => 41,  146 => 40,  143 => 39,  141 => 38,  131 => 34,  129 => 24,  125 => 32,  120 => 31,  115 => 30,  110 => 29,  105 => 28,  100 => 27,  96 => 26,  93 => 25,  91 => 24,  85 => 23,  78 => 19,  73 => 17,  66 => 13,  62 => 12,  58 => 10,);
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


<link rel=\"stylesheet\" href=\"{{ asset('assets/css/amazon_shopping_v2.css') }}\">
<script src=\"{{ AmazonPayV2Api.checkout_script_url }}\"></script>

<div class=\"d-none\">
    <div id=\"amazon_pay__address\">
        <div class=\"ec-orderDelivery__title\">{{ 'お届け先'|trans }}
            <div class=\"ec-orderDelivery__change\">
                <button class=\"ec-inlineBtn\" id=\"amazon_pay_shipping_change\" type=\"button\">{{ 'お届け先修正'|trans }}</button>
            </div>
        </div>
        <div class=\"ec-orderDelivery__address\">
            <p>{% if AmazonShippingAddress.name is defined %}{{ AmazonShippingAddress.name }}{% endif %}</p>
            {% apply spaceless %}
            <p>
                {% if AmazonShippingAddress.postalCode is defined %}{{ AmazonShippingAddress.postalCode }}{% endif %}
                {% if AmazonShippingAddress.stateOrRegion is defined %}{{ AmazonShippingAddress.stateOrRegion }}{% endif %}
                {% if AmazonShippingAddress.city is defined %}{{ AmazonShippingAddress.city }}{% endif %}
                {% if AmazonShippingAddress.addressLine1 is defined %}{{ AmazonShippingAddress.addressLine1 }}{% endif %}
                {% if AmazonShippingAddress.addressLine2 is defined %}{{ AmazonShippingAddress.addressLine2 }}{% endif %}
                {% if AmazonShippingAddress.addressLine3 is defined %}{{ AmazonShippingAddress.addressLine3 }}{% endif %}
            </p>
            {% endapply %}
            <p>{% if AmazonShippingAddress.phoneNumber is defined %}{{ AmazonShippingAddress.phoneNumber }}{% endif %}</p>
        </div>
    </div>
    <div id=\"amazon_pay__payment_descriptor\">
        {% if AmazonPaymentDescriptor %}
            <div class=\"amazon_pay_amazonpaymentdescriptor_block\">
                <div style=\"padding-right: 5px;\"><img src=\"{{ asset('AmazonPayV2_42_Bundle/assets/logo-amzn_pay.png', 'plugin') }}\"></div>
                <div>{{ AmazonPaymentDescriptor }}</div>
            </div>
                <div class=\"amazon_pay_payment_change_block\">
                    <button class=\"ec-inlineBtn\" id=\"amazon_pay_payment_change\" type=\"button\">{{ 'お支払方法修正'|trans }}</button>
                </div>
        {% endif %}
    </div>
</div>

{% block javascript %}
<script>

    \$(function () {
    // submit
{% if AmazonPayV2Config.use_confirm_page == eccube_config.amazon_pay_v2.toggle.on %}
    \$('#shopping-form').attr('action', '{{ url(\"amazon_pay_shopping_confirm\") }}')
{% elseif Order.postal_code == ' ' %}
    alert('お客様情報登録に失敗しました。他のお届け先を選択してください。');
    \$('button.ec-blockBtn--action').text('注文する').prop( 'disabled', true );
    \$('button.ec-blockBtn--action').addClass('amazon_pay_button');
    \$('#shopping-form').attr('action', '{{ url(\"amazon_pay_shopping_checkout\") }}');
{% else %}
    \$('button.ec-blockBtn--action').text('注文する');
    \$('button.ec-blockBtn--action').addClass('amazon_pay_button');
    \$('#shopping-form').attr('action', '{{ url(\"amazon_pay_shopping_checkout\") }}');
{% endif %}

// イベント上書き
var \$redirectCallbackAmazon = function () {
    loadingOverlay();
    \$('#shopping_order_redirect_to').val(\$(this).attr('data-path'));
    \$('#shopping-form').attr('action', '{{ url(\"amazon_pay_shopping_redirect_to\") }}').submit();
};
\$('[data-trigger]').each(function() {
    \$(this).off(\$(this).attr('data-trigger'));
    \$(this).on(\$(this).attr('data-trigger'), \$redirectCallbackAmazon);
});

\$('div.ec-orderRole__detail > div.ec-orderDelivery > div.ec-orderDelivery__title').remove();
\$('div.ec-orderRole__detail > div.ec-orderDelivery > div.ec-orderDelivery__item:not(:eq(0))').remove();
\$('div.ec-orderRole__detail > div.ec-orderDelivery > div.ec-orderDelivery__address').remove();
\$('div.ec-orderRole__detail > div.ec-orderDelivery > div.ec-orderDelivery__actions:not(:eq(0))').remove();
\$('div.ec-orderRole__detail > div.ec-orderDelivery > div.ec-orderDelivery__edit').remove();

\$('div.ec-orderRole__detail > div.ec-orderDelivery > .ec-rectHeading').after(\$('#amazon_pay__address > div.ec-orderDelivery__title'));
\$('div.ec-orderRole__detail > div.ec-orderDelivery > div.ec-orderDelivery__item').append(\$('#amazon_pay__address > div.ec-orderDelivery__address'));

// payment
\$('div.ec-orderRole__detail > div.ec-orderPayment > .ec-radio').first().hide();
\$('div.ec-orderRole__detail > div.ec-orderPayment > .ec-input').first().hide();

\$('div.ec-orderRole__detail > div.ec-orderPayment:first').append(\$('#amazon_pay__payment_descriptor'));

var orderSaveFlg = true;

//変更された時の対応
\$(\"#amazon_pay_shipping_change, #amazon_pay_payment_change\").on(\"click\",function(){
    if (orderSaveFlg) {
        const targetButton = \$(this);
        const targetForm = \$(\"#shopping-form\");

        \$.ajax({
            type: \"POST\",
            url: \"{{ url('amazon_pay_shopping_order_save') }}\",
            data: targetForm.serialize()
        })
            .done(function (data) {
                amazon.Pay.bindChangeAction('#amazon_pay_shipping_change', {
                    amazonCheckoutSessionId: '{{ amazonCheckoutSessionId }}',
                    changeAction: 'changeAddress'
                });
                amazon.Pay.bindChangeAction('#amazon_pay_payment_change', {
                    amazonCheckoutSessionId: '{{ amazonCheckoutSessionId }}',
                    changeAction: 'changePayment'
                });
                orderSaveFlg = false;
                targetButton.click();
            }).fail(function (data) {
                if (data.responseJSON.error == 'validateError') {
                    targetForm.submit();
                } else {
                    alert('通信中にエラーが発生しました。カート画面に移動します。');
                    window.location.href = \"{{ url('cart') }}\";
                }
            });
    };
});

\$('#shopping-form').submit(function(e) {
    \$amazon_pay_button = \$('.ec-blockBtn--action.amazon_pay_button');
    // 2重クリック防止
    \$amazon_pay_button.prop('disabled', true);
})
});
</script>
{% endblock %}
", "AmazonPayV2_42_Bundle/Resource/template/default/Shopping/widgets.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\AmazonPayV2_42_Bundle\\Resource\\template\\default\\Shopping\\widgets.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 23, "apply" => 24, "block" => 50);
        static $filters = array("escape" => 12, "trans" => 17, "spaceless" => 24);
        static $functions = array("asset" => 12, "url" => 56);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'apply', 'block'],
                ['escape', 'trans', 'spaceless'],
                ['asset', 'url']
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
