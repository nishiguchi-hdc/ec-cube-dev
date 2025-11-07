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

/* Mypage/navi.twig */
class __TwigTemplate_6feab11db59195c0699b249c65fef5c2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mypage/navi.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mypage/navi.twig"));

        // line 11
        echo "<div class=\"ec-navlistRole\">
    <ul class=\"ec-navlistRole__navlist\">
        <li class=\"ec-navlistRole__item ";
        // line 13
        if ((((array_key_exists("mypageno", $context)) ? (_twig_default_filter((isset($context["mypageno"]) || array_key_exists("mypageno", $context) ? $context["mypageno"] : (function () { throw new RuntimeError('Variable "mypageno" does not exist.', 13, $this->source); })()), "")) : ("")) == "index")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文履歴"), "html", null, true);
        echo "</a>
        </li>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 16, $this->source); })()), "option_favorite_product", [], "any", false, false, true, 16)) {
            // line 17
            echo "            <li class=\"ec-navlistRole__item ";
            if ((((array_key_exists("mypageno", $context)) ? (_twig_default_filter((isset($context["mypageno"]) || array_key_exists("mypageno", $context) ? $context["mypageno"] : (function () { throw new RuntimeError('Variable "mypageno" does not exist.', 17, $this->source); })()), "")) : ("")) == "favorite")) {
                echo "active";
            }
            echo "\">
                <a href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_favorite");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お気に入り一覧"), "html", null, true);
            echo "</a>
            </li>
        ";
        }
        // line 21
        echo "        <li class=\"ec-navlistRole__item ";
        if ((((array_key_exists("mypageno", $context)) ? (_twig_default_filter((isset($context["mypageno"]) || array_key_exists("mypageno", $context) ? $context["mypageno"] : (function () { throw new RuntimeError('Variable "mypageno" does not exist.', 21, $this->source); })()), "")) : ("")) == "change")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_change");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("会員情報編集"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"ec-navlistRole__item ";
        // line 24
        if ((((array_key_exists("mypageno", $context)) ? (_twig_default_filter((isset($context["mypageno"]) || array_key_exists("mypageno", $context) ? $context["mypageno"] : (function () { throw new RuntimeError('Variable "mypageno" does not exist.', 24, $this->source); })()), "")) : ("")) == "delivery")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_delivery");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先一覧"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"ec-navlistRole__item ";
        // line 27
        if ((((array_key_exists("mypageno", $context)) ? (_twig_default_filter((isset($context["mypageno"]) || array_key_exists("mypageno", $context) ? $context["mypageno"] : (function () { throw new RuntimeError('Variable "mypageno" does not exist.', 27, $this->source); })()), "")) : ("")) == "withdraw")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_withdraw");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("退会手続き"), "html", null, true);
        echo "</a>
        </li>
    </ul>
</div>

<div class=\"ec-welcomeMsg\">
    <p>";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ようこそ%last_name% %first_name%さん", ["%last_name%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, true, 34), "name01", [], "any", false, false, true, 34), "%first_name%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, true, 34), "name02", [], "any", false, false, true, 34)]), "html", null, true);
        echo "</p>
    ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 35, $this->source); })()), "option_point", [], "any", false, false, true, 35)) {
            // line 36
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("現在の所持ポイントは %point%pt です。", ["%point%" => twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, true, 36), "point", [], "any", false, false, true, 36), 36, $this->source))]), "html", null, true);
            echo "</p>
    ";
        }
        // line 38
        echo "</div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Mypage/navi.twig";
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
        return array (  147 => 38,  141 => 36,  139 => 35,  135 => 34,  124 => 28,  118 => 27,  111 => 25,  105 => 24,  98 => 22,  91 => 21,  83 => 18,  76 => 17,  74 => 16,  67 => 14,  61 => 13,  57 => 11,);
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
<div class=\"ec-navlistRole\">
    <ul class=\"ec-navlistRole__navlist\">
        <li class=\"ec-navlistRole__item {% if mypageno|default('') == 'index' %}active{% endif %}\">
            <a href=\"{{ url('mypage') }}\">{{ 'ご注文履歴'|trans }}</a>
        </li>
        {% if BaseInfo.option_favorite_product %}
            <li class=\"ec-navlistRole__item {% if mypageno|default('') == 'favorite' %}active{% endif %}\">
                <a href=\"{{ url('mypage_favorite') }}\">{{ 'お気に入り一覧'|trans }}</a>
            </li>
        {% endif %}
        <li class=\"ec-navlistRole__item {% if mypageno|default('') == 'change' %}active{% endif %}\">
            <a href=\"{{ url('mypage_change') }}\">{{ '会員情報編集'|trans }}</a>
        </li>
        <li class=\"ec-navlistRole__item {% if mypageno|default('') == 'delivery' %}active{% endif %}\">
            <a href=\"{{ url('mypage_delivery') }}\">{{ 'お届け先一覧'|trans }}</a>
        </li>
        <li class=\"ec-navlistRole__item {% if mypageno|default('') == 'withdraw' %}active{% endif %}\">
            <a href=\"{{ url('mypage_withdraw') }}\">{{ '退会手続き'|trans }}</a>
        </li>
    </ul>
</div>

<div class=\"ec-welcomeMsg\">
    <p>{{ 'ようこそ%last_name% %first_name%さん'|trans({ '%last_name%': app.user.name01, '%first_name%': app.user.name02 }) }}</p>
    {% if BaseInfo.option_point %}
        <p>{{ '現在の所持ポイントは %point%pt です。'|trans({ '%point%': app.user.point|number_format}) }}</p>
    {% endif %}
</div>

", "Mypage/navi.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\default\\Mypage\\navi.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 13);
        static $filters = array("default" => 13, "escape" => 14, "trans" => 14, "number_format" => 36);
        static $functions = array("url" => 14);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['default', 'escape', 'trans', 'number_format'],
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
