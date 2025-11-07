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

/* error.twig */
class __TwigTemplate_933c579825bdeb8b4d5a9fe3df5e0520 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "error.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "error.twig"));

        // line 1
        echo "<!doctype html>
";
        // line 12
        echo "<html lang=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 12, $this->source); })()), "locale", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>";
        // line 16
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["error_title"]) || array_key_exists("error_title", $context) ? $context["error_title"] : (function () { throw new RuntimeError('Variable "error_title" does not exist.', 16, $this->source); })()), 16, $this->source), "html", null, true);
        echo "</title>
    <link rel=\"icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/common/favicon.ico", "user_data"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
</head>
<body>
<div class=\"ec-layoutRole\">
    <div class=\"ec-404Role\">
        <div class=\"ec-off4Grid\">
            <div class=\"ec-off4Grid__cell\">
                <div style=\"font-size:100px;text-align:center;\">
                    <div class=\"ec-404Role__icon ec-icon\">
                        <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-pale.svg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                </div>
                <p class=\"ec-404Role__title ec-reportHeading\">";
        // line 30
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["error_title"]) || array_key_exists("error_title", $context) ? $context["error_title"] : (function () { throw new RuntimeError('Variable "error_title" does not exist.', 30, $this->source); })()), 30, $this->source), "html", null, true);
        echo "</p>
                <p class=\"ec-404Role__description ec-reportDescription\">";
        // line 31
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["error_message"]) || array_key_exists("error_message", $context) ? $context["error_message"] : (function () { throw new RuntimeError('Variable "error_message" does not exist.', 31, $this->source); })()), 31, $this->source), "html", null, true);
        echo "</p>
                <a class=\"ec-blockBtn--cancel\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, true, 32), "basePath", [], "any", false, false, true, 32), 32, $this->source) . "/"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("トップページへ"), "html", null, true);
        echo "</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "error.twig";
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
        return array (  102 => 32,  98 => 31,  94 => 30,  88 => 27,  76 => 18,  72 => 17,  68 => 16,  60 => 12,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
{#
This file is part of EC-CUBE

Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.

http://www.ec-cube.co.jp/

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
#}
<html lang=\"{{ eccube_config.locale }}\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>{{ error_title }}</title>
    <link rel=\"icon\" href=\"{{ asset('assets/img/common/favicon.ico', 'user_data') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
</head>
<body>
<div class=\"ec-layoutRole\">
    <div class=\"ec-404Role\">
        <div class=\"ec-off4Grid\">
            <div class=\"ec-off4Grid__cell\">
                <div style=\"font-size:100px;text-align:center;\">
                    <div class=\"ec-404Role__icon ec-icon\">
                        <img src=\"{{ asset('assets/icon/exclamation-pale.svg') }}\" alt=\"\">
                    </div>
                </div>
                <p class=\"ec-404Role__title ec-reportHeading\">{{ error_title }}</p>
                <p class=\"ec-404Role__description ec-reportDescription\">{{ error_message }}</p>
                <a class=\"ec-blockBtn--cancel\" href=\"{{ app.request.basePath ~ '/' }}\">{{ 'トップページへ'|trans }}</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
", "error.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\default\\error.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 12, "trans" => 32);
        static $functions = array("asset" => 17);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'trans'],
                ['asset']
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
