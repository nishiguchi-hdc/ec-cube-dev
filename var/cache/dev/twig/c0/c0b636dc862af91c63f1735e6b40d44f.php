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

/* Mail/customer_change_notify.twig */
class __TwigTemplate_9cd21303e5ecffa81c7d01938cc1eca5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mail/customer_change_notify.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mail/customer_change_notify.twig"));

        // line 9
        echo "※本メールは自動配信メールです。

┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓
　※本メールは、
　";
        // line 13
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 13, $this->source); })()), "shop_name", [], "any", false, false, true, 13), 13, $this->source), "safe_textmail", null, true);
        echo "よりお送りしています。
　もしお心当たりが無い場合は、
　その旨 ";
        // line 15
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 15, $this->source); })()), "email02", [], "any", false, false, true, 15), 15, $this->source), "safe_textmail", null, true);
        echo " まで
　ご連絡いただければ幸いです。
┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛

";
        // line 19
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 19, $this->source); })()), "name01", [], "any", false, false, true, 19), 19, $this->source), "safe_textmail", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 19, $this->source); })()), "name02", [], "any", false, false, true, 19), 19, $this->source), "safe_textmail", null, true);
        echo " 様

";
        // line 21
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 21, $this->source); })()), "shop_name", [], "any", false, false, true, 21), 21, $this->source), "safe_textmail", null, true);
        echo "でございます。
下記の日時に ";
        // line 22
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["eventName"]) || array_key_exists("eventName", $context) ? $context["eventName"] : (function () { throw new RuntimeError('Variable "eventName" does not exist.', 22, $this->source); })()), 22, $this->source), "safe_textmail", null, true);
        echo " がありましたのでお知らせいたします。

日時：";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_date_converter($this->env)), "safe_textmail", null, true);
        echo "
IPアドレス：";
        // line 25
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["ipAddress"]) || array_key_exists("ipAddress", $context) ? $context["ipAddress"] : (function () { throw new RuntimeError('Variable "ipAddress" does not exist.', 25, $this->source); })()), 25, $this->source), "safe_textmail", null, true);
        echo "
環境：";
        // line 26
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["userAgent"]) || array_key_exists("userAgent", $context) ? $context["userAgent"] : (function () { throw new RuntimeError('Variable "userAgent" does not exist.', 26, $this->source); })()), 26, $this->source), "safe_textmail", null, true);
        echo "

URL：";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage"), "safe_textmail", null, true);
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
        return "Mail/customer_change_notify.twig";
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
        return array (  104 => 28,  99 => 26,  95 => 25,  91 => 24,  86 => 22,  82 => 21,  75 => 19,  68 => 15,  63 => 13,  57 => 9,);
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
{% autoescape 'safe_textmail' %}
※本メールは自動配信メールです。

┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓
　※本メールは、
　{{ BaseInfo.shop_name }}よりお送りしています。
　もしお心当たりが無い場合は、
　その旨 {# 問い合わせ受付メール #}{{ BaseInfo.email02 }} まで
　ご連絡いただければ幸いです。
┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛

{{ Customer.name01 }} {{ Customer.name02 }} 様

{{ BaseInfo.shop_name }}でございます。
下記の日時に {{ eventName }} がありましたのでお知らせいたします。

日時：{{ date()|date_sec }}
IPアドレス：{{ ipAddress }}
環境：{{ userAgent }}

URL：{{ url('homepage') }}

{% endautoescape %}
", "Mail/customer_change_notify.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\default\\Mail\\customer_change_notify.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("autoescape" => 8);
        static $filters = array("escape" => 13, "date_sec" => 24);
        static $functions = array("date" => 24, "url" => 28);

        try {
            $this->sandbox->checkSecurity(
                ['autoescape'],
                ['escape', 'date_sec'],
                ['date', 'url']
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
