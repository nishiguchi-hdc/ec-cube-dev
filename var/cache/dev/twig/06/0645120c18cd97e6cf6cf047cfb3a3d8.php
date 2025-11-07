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

/* EccubePaymentLite42/Resource/template/default/Mail/expiration_notice_mail.twig */
class __TwigTemplate_5d2ceb1179dc24b038d41b305568c269 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Mail/expiration_notice_mail.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Mail/expiration_notice_mail.twig"));

        // line 2
        echo "    ※本メールは自動配信メールです。

    ┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓
    　※本メールは、
    　";
        // line 6
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 6, $this->source); })()), "shop_name", [], "any", false, false, true, 6), 6, $this->source);
        echo "より
    　クレジットカード登録をされた方で、クレジットカードの有効期限が
    　近づいている方にお送りしています。
    　もしお心当たりが無い場合は
    　このままこのメールを破棄していただきますようお願いいたします。
    　またその旨 ";
        // line 11
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 11, $this->source); })()), "email02", [], "any", false, false, true, 11), 11, $this->source);
        echo " まで
    　ご連絡いただければ幸いです。
    ┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛

    ";
        // line 15
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 15, $this->source); })()), "name01", [], "any", false, false, true, 15), 15, $this->source);
        echo " ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 15, $this->source); })()), "name02", [], "any", false, false, true, 15), 15, $this->source);
        echo " 様

    ";
        // line 17
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 17, $this->source); })()), "shop_name", [], "any", false, false, true, 17), 17, $this->source);
        echo "でございます。

    お客様のご登録頂いておりますクレジットカードの有効期限が";
        // line 19
        echo twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["expireDateTime"]) || array_key_exists("expireDateTime", $context) ? $context["expireDateTime"] : (function () { throw new RuntimeError('Variable "expireDateTime" does not exist.', 19, $this->source); })()), 19, $this->source), "Y/m/d");
        echo "となっております。
    クレジットカードの有効期限が切れますとクレジットカード決済が出来ない状態となりますので、
    マイページでのクレジットカード情報の変更をお願いいたします。

    クレジットカード情報を変更する場合、マイページログイン後、
    下記URLにアクセスしてください。
    ";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eccube_payment_lite42_mypage_credit_card_index");
        echo "

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "EccubePaymentLite42/Resource/template/default/Mail/expiration_notice_mail.twig";
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
        return array (  99 => 25,  90 => 19,  85 => 17,  78 => 15,  71 => 11,  63 => 6,  57 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% autoescape false %}
    ※本メールは自動配信メールです。

    ┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓
    　※本メールは、
    　{{ BaseInfo.shop_name }}より
    　クレジットカード登録をされた方で、クレジットカードの有効期限が
    　近づいている方にお送りしています。
    　もしお心当たりが無い場合は
    　このままこのメールを破棄していただきますようお願いいたします。
    　またその旨 {{ BaseInfo.email02 }} まで
    　ご連絡いただければ幸いです。
    ┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛

    {{ Customer.name01 }} {{ Customer.name02 }} 様

    {{ BaseInfo.shop_name }}でございます。

    お客様のご登録頂いておりますクレジットカードの有効期限が{{ expireDateTime|date('Y/m/d') }}となっております。
    クレジットカードの有効期限が切れますとクレジットカード決済が出来ない状態となりますので、
    マイページでのクレジットカード情報の変更をお願いいたします。

    クレジットカード情報を変更する場合、マイページログイン後、
    下記URLにアクセスしてください。
    {{ url('eccube_payment_lite42_mypage_credit_card_index') }}

{% endautoescape %}
", "EccubePaymentLite42/Resource/template/default/Mail/expiration_notice_mail.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\default\\Mail\\expiration_notice_mail.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("autoescape" => 1);
        static $filters = array("date" => 19);
        static $functions = array("url" => 25);

        try {
            $this->sandbox->checkSecurity(
                ['autoescape'],
                ['date'],
                ['url']
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
