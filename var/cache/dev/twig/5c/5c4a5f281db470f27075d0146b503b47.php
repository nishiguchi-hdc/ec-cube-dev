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

/* AmazonPayV2_42_Bundle/Resource/template/default/Shopping/customer_regist_v2.twig */
class __TwigTemplate_e2719c7e0296d4479e74f290d848a2c4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Resource/template/default/Shopping/customer_regist_v2.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Resource/template/default/Shopping/customer_regist_v2.twig"));

        // line 10
        $this->displayBlock('javascript', $context, $blocks);
        // line 34
        echo "
<div class=\"d-none\">
    <div class=\"amazon_customer_regist_v2\">
    ";
        // line 37
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 38
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["AmazonPayV2Config"]) || array_key_exists("AmazonPayV2Config", $context) ? $context["AmazonPayV2Config"] : (function () { throw new RuntimeError('Variable "AmazonPayV2Config" does not exist.', 38, $this->source); })()), "login_required", [], "any", false, false, true, 38) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 38, $this->source); })()), "amazon_pay_v2", [], "any", false, false, true, 38), "toggle", [], "any", false, false, true, 38), "on", [], "any", false, false, true, 38))) {
                // line 39
                echo "            <dl>
                <dd>
                    <div >
                        ";
                // line 42
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "login_check_v2", [], "any", false, false, true, 42), 0, [], "array", false, false, true, 42), 42, $this->source), 'widget');
                echo "
                    </div>
                </dd>
            </dl>
        ";
            }
            // line 47
            echo "        <dl>
            <dd>
                <div class=\"ec-halfInput";
            // line 49
            echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "customer_regist_v2", [], "any", false, false, true, 49), 49, $this->source))) ? (" error") : (""));
            echo "\">
                    ";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "customer_regist_v2", [], "any", false, false, true, 50), 50, $this->source), 'errors');
            echo "
                </div>
            </dd>
        </dl>
        <dl>
            <dd>
                <label>
                    ";
            // line 57
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "customer_regist_v2", [], "any", false, false, true, 57), 57, $this->source), 'widget');
            echo "
                    ";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.front.shopping.customer_regist_v2"), "html", null, true);
            echo "
                </label>
                ※ ";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.entry.agree_with_terms", ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("help_agreement")]);
            echo "
            </dd>
        </dl>
        ";
            // line 63
            if ((isset($context["useMailMagazine"]) || array_key_exists("useMailMagazine", $context) ? $context["useMailMagazine"] : (function () { throw new RuntimeError('Variable "useMailMagazine" does not exist.', 63, $this->source); })())) {
                // line 64
                echo "            <dl>
                <dd>
                    <div class=\"ec-halfInput";
                // line 66
                echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "mail_magazine", [], "any", false, false, true, 66), 66, $this->source))) ? (" error") : (""));
                echo "\">
                        ";
                // line 67
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "mail_magazine", [], "any", false, false, true, 67), 67, $this->source), 'errors');
                echo "
                    </div>
                </dd>
            </dl>
            <dl>
                <dd>
                    <label>
                        ";
                // line 74
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "mail_magazine", [], "any", false, false, true, 74), 74, $this->source), 'widget');
                echo "
                        ";
                // line 75
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.front.shopping.mail_magazine"), "html", null, true);
                echo "
                    </label>
                </dd>
            </dl>
        ";
            }
            // line 80
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["AmazonPayV2Config"]) || array_key_exists("AmazonPayV2Config", $context) ? $context["AmazonPayV2Config"] : (function () { throw new RuntimeError('Variable "AmazonPayV2Config" does not exist.', 80, $this->source); })()), "login_required", [], "any", false, false, true, 80) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 80, $this->source); })()), "amazon_pay_v2", [], "any", false, false, true, 80), "toggle", [], "any", false, false, true, 80), "on", [], "any", false, false, true, 80))) {
                // line 81
                echo "            <dl>
                <dd>
                    <div>
                        ";
                // line 84
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "login_check_v2", [], "any", false, false, true, 84), 1, [], "array", false, false, true, 84), 84, $this->source), 'widget');
                echo "
                    </div>
                </dd>
            </dl>
            <dl>
                <div class=\"col ec-halfInput";
                // line 89
                echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "amazon_login_email_v2", [], "any", false, false, true, 89), 89, $this->source))) ? (" error") : (""));
                echo "\">
                    ";
                // line 90
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "amazon_login_email_v2", [], "any", false, false, true, 90), 90, $this->source), 'errors');
                echo "
                </div>
                <dd>メールアドレス</dd>
            </dl>
            <dl>
                <div ";
                // line 95
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "amazon_login_email_v2", [], "any", false, false, true, 95), "vars", [], "any", false, false, true, 95), "errors", [], "any", false, false, true, 95))) {
                    echo "class=\"has-error\"";
                }
                echo ">
                    ";
                // line 96
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "amazon_login_email_v2", [], "any", false, false, true, 96), 96, $this->source), 'widget');
                echo "
                </div>
            </dl>
            <dl>
                <div class=\"col ec-halfInput";
                // line 100
                echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "amazon_login_password_v2", [], "any", false, false, true, 100), 100, $this->source))) ? (" error") : (""));
                echo "\">
                    ";
                // line 101
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "amazon_login_password_v2", [], "any", false, false, true, 101), 101, $this->source), 'errors');
                echo "
                </div>
                <dd>パスワード</dd>
            </dl>
            <dl>
                <div ";
                // line 106
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "amazon_login_password_v2", [], "any", false, false, true, 106), "vars", [], "any", false, false, true, 106), "errors", [], "any", false, false, true, 106))) {
                    echo "class=\"has-error\"";
                }
                echo ">
                    ";
                // line 107
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "amazon_login_password_v2", [], "any", false, false, true, 107), 107, $this->source), 'widget');
                echo "
                </div>
            </dl>
        ";
            }
            // line 111
            echo "    ";
        }
        // line 112
        echo "    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 11
        echo "<script>
var amazon_submit_flag = false;

\$(function () {
    \$('.ec-orderRole__summary').append(\$('.amazon_customer_regist_v2'));

    \$('input[name=\"_shopping_order[login_check_v2]\"]:radio').on(\"change\", function () {
        set_required(\$(this));
    });
});
function set_required(e){
    if (e.val() === 'regist') {
        \$(\"#shopping_order_customer_regist_v2\").attr('required','required');
        \$(\"#shopping_order_amazon_login_email_v2\").removeAttr('required');
        \$(\"#shopping_order_amazon_login_password_v2\").removeAttr('required');
    } else if (e.val() === 'login') {
        \$('#shopping_order_customer_regist_v2').removeAttr('required');
        \$(\"#shopping_order_amazon_login_email_v2\").attr('required','required');
        \$(\"#shopping_order_amazon_login_password_v2\").attr('required','required');
    }
}
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
        return "AmazonPayV2_42_Bundle/Resource/template/default/Shopping/customer_regist_v2.twig";
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
        return array (  239 => 11,  229 => 10,  217 => 112,  214 => 111,  207 => 107,  201 => 106,  193 => 101,  189 => 100,  182 => 96,  176 => 95,  168 => 90,  164 => 89,  156 => 84,  151 => 81,  148 => 80,  140 => 75,  136 => 74,  126 => 67,  122 => 66,  118 => 64,  116 => 63,  110 => 60,  105 => 58,  101 => 57,  91 => 50,  87 => 49,  83 => 47,  75 => 42,  70 => 39,  67 => 38,  65 => 37,  60 => 34,  58 => 10,);
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
{% block javascript %}
<script>
var amazon_submit_flag = false;

\$(function () {
    \$('.ec-orderRole__summary').append(\$('.amazon_customer_regist_v2'));

    \$('input[name=\"_shopping_order[login_check_v2]\"]:radio').on(\"change\", function () {
        set_required(\$(this));
    });
});
function set_required(e){
    if (e.val() === 'regist') {
        \$(\"#shopping_order_customer_regist_v2\").attr('required','required');
        \$(\"#shopping_order_amazon_login_email_v2\").removeAttr('required');
        \$(\"#shopping_order_amazon_login_password_v2\").removeAttr('required');
    } else if (e.val() === 'login') {
        \$('#shopping_order_customer_regist_v2').removeAttr('required');
        \$(\"#shopping_order_amazon_login_email_v2\").attr('required','required');
        \$(\"#shopping_order_amazon_login_password_v2\").attr('required','required');
    }
}
</script>
{% endblock %}

<div class=\"d-none\">
    <div class=\"amazon_customer_regist_v2\">
    {% if not is_granted('ROLE_USER') %}
        {% if AmazonPayV2Config.login_required == eccube_config.amazon_pay_v2.toggle.on %}
            <dl>
                <dd>
                    <div >
                        {{ form_widget(form.login_check_v2[0]) }}
                    </div>
                </dd>
            </dl>
        {% endif %}
        <dl>
            <dd>
                <div class=\"ec-halfInput{{ has_errors(form.customer_regist_v2) ? ' error'}}\">
                    {{ form_errors(form.customer_regist_v2) }}
                </div>
            </dd>
        </dl>
        <dl>
            <dd>
                <label>
                    {{ form_widget(form.customer_regist_v2) }}
                    {{ 'amazon_pay_v2.front.shopping.customer_regist_v2'|trans }}
                </label>
                ※ {{ 'front.entry.agree_with_terms'|trans({ '%url%': url('help_agreement') })|raw }}
            </dd>
        </dl>
        {% if useMailMagazine %}
            <dl>
                <dd>
                    <div class=\"ec-halfInput{{ has_errors(form.mail_magazine) ? ' error'}}\">
                        {{ form_errors(form.mail_magazine) }}
                    </div>
                </dd>
            </dl>
            <dl>
                <dd>
                    <label>
                        {{ form_widget(form.mail_magazine) }}
                        {{ 'amazon_pay_v2.front.shopping.mail_magazine'|trans }}
                    </label>
                </dd>
            </dl>
        {% endif %}
        {% if AmazonPayV2Config.login_required == eccube_config.amazon_pay_v2.toggle.on %}
            <dl>
                <dd>
                    <div>
                        {{ form_widget(form.login_check_v2[1]) }}
                    </div>
                </dd>
            </dl>
            <dl>
                <div class=\"col ec-halfInput{{ has_errors(form.amazon_login_email_v2) ? ' error'}}\">
                    {{ form_errors(form.amazon_login_email_v2) }}
                </div>
                <dd>メールアドレス</dd>
            </dl>
            <dl>
                <div {% if form.amazon_login_email_v2.vars.errors is not empty %}class=\"has-error\"{% endif %}>
                    {{ form_widget(form.amazon_login_email_v2) }}
                </div>
            </dl>
            <dl>
                <div class=\"col ec-halfInput{{ has_errors(form.amazon_login_password_v2) ? ' error'}}\">
                    {{ form_errors(form.amazon_login_password_v2) }}
                </div>
                <dd>パスワード</dd>
            </dl>
            <dl>
                <div {% if form.amazon_login_password_v2.vars.errors is not empty %}class=\"has-error\"{% endif %}>
                    {{ form_widget(form.amazon_login_password_v2) }}
                </div>
            </dl>
        {% endif %}
    {% endif %}
    </div>
</div>
", "AmazonPayV2_42_Bundle/Resource/template/default/Shopping/customer_regist_v2.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\AmazonPayV2_42_Bundle\\Resource\\template\\default\\Shopping\\customer_regist_v2.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 10, "if" => 37);
        static $filters = array("escape" => 58, "trans" => 58, "raw" => 60);
        static $functions = array("is_granted" => 37, "form_widget" => 42, "has_errors" => 49, "form_errors" => 50, "url" => 60);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['escape', 'trans', 'raw'],
                ['is_granted', 'form_widget', 'has_errors', 'form_errors', 'url']
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
