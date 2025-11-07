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

/* AmazonPayV2_42_Bundle/Resource/template/default/Shopping/confirm_customer_regist_v2.twig */
class __TwigTemplate_54317eb97df74c308c9405ce6027ed31 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Resource/template/default/Shopping/confirm_customer_regist_v2.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Resource/template/default/Shopping/confirm_customer_regist_v2.twig"));

        // line 10
        $this->displayBlock('javascript', $context, $blocks);
        // line 29
        echo "
<div class=\"d-none\">
    <div class=\"amazon_customer_regist_v2\">
    ";
        // line 32
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 33
            echo "       
    ";
        } else {
            // line 35
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["AmazonPayV2Config"]) || array_key_exists("AmazonPayV2Config", $context) ? $context["AmazonPayV2Config"] : (function () { throw new RuntimeError('Variable "AmazonPayV2Config" does not exist.', 35, $this->source); })()), "login_required", [], "any", false, false, true, 35) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 35, $this->source); })()), "amazon_pay_v2", [], "any", false, false, true, 35), "toggle", [], "any", false, false, true, 35), "on", [], "any", false, false, true, 35))) {
                // line 36
                echo "            <dl>
                <dd>
                    <div >
                        ";
                // line 39
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "login_check_v2", [], "any", false, false, true, 39), 0, [], "array", false, false, true, 39), 39, $this->source), 'widget', ["attr" => ["disabled" => "disabled"]]);
                echo "
                    </div>
                </dd>
            </dl>
        ";
            }
            // line 44
            echo "        <dl>
            <dd>
                ";
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "customer_regist_v2", [], "any", false, false, true, 46), 46, $this->source), 'errors');
            echo "
            </dd>
        </dl>
        <dl>
            <dd>
                ";
            // line 51
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "customer_regist_v2", [], "any", false, false, true, 51), 51, $this->source), 'widget', ["attr" => ["disabled" => "disabled"]]);
            echo "
                ※ ";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.entry.agree_with_terms", ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("help_agreement")]);
            echo "
            </dd>
        </dl>
        ";
            // line 55
            if ((isset($context["useMailMagazine"]) || array_key_exists("useMailMagazine", $context) ? $context["useMailMagazine"] : (function () { throw new RuntimeError('Variable "useMailMagazine" does not exist.', 55, $this->source); })())) {
                // line 56
                echo "            <dl>
                <dd>
                    <div class=\"ec-halfInput";
                // line 58
                echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "mail_magazine", [], "any", false, false, true, 58), 58, $this->source))) ? (" error") : (""));
                echo "\">
                        ";
                // line 59
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "mail_magazine", [], "any", false, false, true, 59), 59, $this->source), 'errors');
                echo "
                    </div>
                </dd>
            </dl>
            <dl>
                <dd>
                     ";
                // line 65
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "mail_magazine", [], "any", false, false, true, 65), 65, $this->source), 'widget', ["attr" => ["disabled" => "disabled"]]);
                echo "
                </dd>
            </dl>
        ";
            }
            // line 69
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["AmazonPayV2Config"]) || array_key_exists("AmazonPayV2Config", $context) ? $context["AmazonPayV2Config"] : (function () { throw new RuntimeError('Variable "AmazonPayV2Config" does not exist.', 69, $this->source); })()), "login_required", [], "any", false, false, true, 69) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 69, $this->source); })()), "amazon_pay_v2", [], "any", false, false, true, 69), "toggle", [], "any", false, false, true, 69), "on", [], "any", false, false, true, 69))) {
                // line 70
                echo "            <dl>
                <dd>
                    <div>
                        ";
                // line 73
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "login_check_v2", [], "any", false, false, true, 73), 1, [], "array", false, false, true, 73), 73, $this->source), 'widget', ["attr" => ["disabled" => "disabled"]]);
                echo "
                    </div>
                </dd>
            </dl>
            <dl>
                <div class=\"col\">
                    ";
                // line 79
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "amazon_login_email_v2", [], "any", false, false, true, 79), 79, $this->source), 'errors');
                echo "
                </div>
                <dd>メールアドレス</dd>
            </dl>
            <dl>
                <div ";
                // line 84
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "amazon_login_email_v2", [], "any", false, false, true, 84), "vars", [], "any", false, false, true, 84), "errors", [], "any", false, false, true, 84))) {
                    echo "class=\"has-error\"";
                }
                echo ">
                    ";
                // line 85
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "amazon_login_email_v2", [], "any", false, false, true, 85), 85, $this->source), 'widget', ["attr" => ["disabled" => "disabled"]]);
                echo "
                </div>
            </dl>
            <dl>
                <div class=\"col\">
                    ";
                // line 90
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "amazon_login_password_v2", [], "any", false, false, true, 90), 90, $this->source), 'errors');
                echo "
                </div>
                <dd>パスワード</dd>
            </dl>
            <dl>
                <div ";
                // line 95
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "amazon_login_password_v2", [], "any", false, false, true, 95), "vars", [], "any", false, false, true, 95), "errors", [], "any", false, false, true, 95))) {
                    echo "class=\"has-error\"";
                }
                echo ">
                    ";
                // line 96
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "amazon_login_password_v2", [], "any", false, false, true, 96), 96, $this->source), 'widget', ["attr" => ["disabled" => "disabled"]]);
                echo "
                </div>
            </dl>
        ";
            }
            // line 100
            echo "    ";
        }
        // line 101
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

\$(function () {
    ";
        // line 14
        if (( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") && (twig_get_attribute($this->env, $this->source, (isset($context["AmazonPayV2Config"]) || array_key_exists("AmazonPayV2Config", $context) ? $context["AmazonPayV2Config"] : (function () { throw new RuntimeError('Variable "AmazonPayV2Config" does not exist.', 14, $this->source); })()), "login_required", [], "any", false, false, true, 14) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 14, $this->source); })()), "amazon_pay_v2", [], "any", false, false, true, 14), "toggle", [], "any", false, false, true, 14), "on", [], "any", false, false, true, 14)))) {
            // line 15
            echo "        \$('.ec-orderRole__summary').append(\$('.amazon_customer_regist_v2'));

        // 仮の値をセット
        \$('#shopping_order_amazon_login_password_v2').val(\"";
            // line 18
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "amazon_login_password_v2", [], "any", false, false, true, 18), "vars", [], "any", false, false, true, 18), "data", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "\");
    ";
        }
        // line 20
        echo "
    \$('.amazon_cancel_button').on('click', function(){
        form = \$('#shopping-form');
        form.attr('action', \"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("amazon_pay_shopping");
        echo "\");
        form.submit();
    });
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
        return "AmazonPayV2_42_Bundle/Resource/template/default/Shopping/confirm_customer_regist_v2.twig";
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
        return array (  243 => 23,  238 => 20,  233 => 18,  228 => 15,  226 => 14,  221 => 11,  211 => 10,  198 => 101,  195 => 100,  188 => 96,  182 => 95,  174 => 90,  166 => 85,  160 => 84,  152 => 79,  143 => 73,  138 => 70,  135 => 69,  128 => 65,  119 => 59,  115 => 58,  111 => 56,  109 => 55,  103 => 52,  99 => 51,  91 => 46,  87 => 44,  79 => 39,  74 => 36,  71 => 35,  67 => 33,  65 => 32,  60 => 29,  58 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("{#
AmazonPay for EC-CUBE4
Copyright(c) 2023 EC-CUBE CO.,LTD. all rights reserved.

https://www.ec-cube.co.jp/

This program is not free software.
It applies to terms of service.
#}
{% block javascript %}
<script>

\$(function () {
    {% if not is_granted('ROLE_USER') and AmazonPayV2Config.login_required == eccube_config.amazon_pay_v2.toggle.on %}
        \$('.ec-orderRole__summary').append(\$('.amazon_customer_regist_v2'));

        // 仮の値をセット
        \$('#shopping_order_amazon_login_password_v2').val(\"{{ form.amazon_login_password_v2.vars.data }}\");
    {% endif %}

    \$('.amazon_cancel_button').on('click', function(){
        form = \$('#shopping-form');
        form.attr('action', \"{{ url('amazon_pay_shopping') }}\");
        form.submit();
    });
});
</script>
{% endblock %}

<div class=\"d-none\">
    <div class=\"amazon_customer_regist_v2\">
    {% if is_granted('ROLE_USER') %}
       
    {% else %}
        {% if AmazonPayV2Config.login_required == eccube_config.amazon_pay_v2.toggle.on %}
            <dl>
                <dd>
                    <div >
                        {{ form_widget(form.login_check_v2[0], { attr: { disabled: 'disabled' } }) }}
                    </div>
                </dd>
            </dl>
        {% endif %}
        <dl>
            <dd>
                {{ form_errors(form.customer_regist_v2) }}
            </dd>
        </dl>
        <dl>
            <dd>
                {{ form_widget(form.customer_regist_v2, { attr: { disabled: 'disabled' } }) }}
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
                     {{ form_widget(form.mail_magazine, { attr: { disabled: 'disabled' } }) }}
                </dd>
            </dl>
        {% endif %}
        {% if AmazonPayV2Config.login_required == eccube_config.amazon_pay_v2.toggle.on %}
            <dl>
                <dd>
                    <div>
                        {{ form_widget(form.login_check_v2[1], { attr: { disabled: 'disabled' } }) }}
                    </div>
                </dd>
            </dl>
            <dl>
                <div class=\"col\">
                    {{ form_errors(form.amazon_login_email_v2) }}
                </div>
                <dd>メールアドレス</dd>
            </dl>
            <dl>
                <div {% if form.amazon_login_email_v2.vars.errors is not empty %}class=\"has-error\"{% endif %}>
                    {{ form_widget(form.amazon_login_email_v2, { attr: { disabled: 'disabled' } }) }}
                </div>
            </dl>
            <dl>
                <div class=\"col\">
                    {{ form_errors(form.amazon_login_password_v2) }}
                </div>
                <dd>パスワード</dd>
            </dl>
            <dl>
                <div {% if form.amazon_login_password_v2.vars.errors is not empty %}class=\"has-error\"{% endif %}>
                    {{ form_widget(form.amazon_login_password_v2, { attr: { disabled: 'disabled' } }) }}
                </div>
            </dl>
        {% endif %}
    {% endif %}
    </div>

</div>
", "AmazonPayV2_42_Bundle/Resource/template/default/Shopping/confirm_customer_regist_v2.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\AmazonPayV2_42_Bundle\\Resource\\template\\default\\Shopping\\confirm_customer_regist_v2.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 10, "if" => 32);
        static $filters = array("raw" => 52, "trans" => 52, "escape" => 18);
        static $functions = array("is_granted" => 32, "form_widget" => 39, "form_errors" => 46, "url" => 52, "has_errors" => 58);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['raw', 'trans', 'escape'],
                ['is_granted', 'form_widget', 'form_errors', 'url', 'has_errors']
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
