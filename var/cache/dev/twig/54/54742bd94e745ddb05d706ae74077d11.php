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

/* EccubePaymentLite42/Resource/template/default/Shopping/transition_3ds2_screen.twig */
class __TwigTemplate_b4bcf51b0ece0ff71649999ff1be2219 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Shopping/transition_3ds2_screen.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Shopping/transition_3ds2_screen.twig"));

        // line 1
        echo "<!doctype html>
";
        // line 12
        echo "<html lang=\"ja\">
<body onload=\"onLoadPage();\">
<noscript>
    <br><br><h2>
        3D 2.0 セキュア認証を続けます。<br>
        ボタンをクリックしてください。
        <input type=\"submit\" value=\"OK\">
    </h2>
</noscript>

<form name=\"downloadForm\" method=\"post\" action=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["ACSUrl"]) || array_key_exists("ACSUrl", $context) ? $context["ACSUrl"] : (function () { throw new RuntimeError('Variable "ACSUrl" does not exist.', 22, $this->source); })()), 22, $this->source), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"TermUrl\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["TermUrl"]) || array_key_exists("TermUrl", $context) ? $context["TermUrl"] : (function () { throw new RuntimeError('Variable "TermUrl" does not exist.', 23, $this->source); })()), 23, $this->source), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"PaReq\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["PaReq"]) || array_key_exists("PaReq", $context) ? $context["PaReq"] : (function () { throw new RuntimeError('Variable "PaReq" does not exist.', 24, $this->source); })()), 24, $this->source), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"MD\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MD"]) || array_key_exists("MD", $context) ? $context["MD"] : (function () { throw new RuntimeError('Variable "MD" does not exist.', 25, $this->source); })()), 25, $this->source), "html", null, true);
        echo "\">
</form>

<script type=\"text/javascript\">
    function onLoadPage() {
        document.downloadForm.submit();
    }
</script>
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
        return "EccubePaymentLite42/Resource/template/default/Shopping/transition_3ds2_screen.twig";
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
        return array (  84 => 25,  80 => 24,  76 => 23,  72 => 22,  60 => 12,  57 => 1,);
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
<html lang=\"ja\">
<body onload=\"onLoadPage();\">
<noscript>
    <br><br><h2>
        3D 2.0 セキュア認証を続けます。<br>
        ボタンをクリックしてください。
        <input type=\"submit\" value=\"OK\">
    </h2>
</noscript>

<form name=\"downloadForm\" method=\"post\" action=\"{{ ACSUrl }}\">
    <input type=\"hidden\" name=\"TermUrl\" value=\"{{ TermUrl }}\">
    <input type=\"hidden\" name=\"PaReq\" value=\"{{ PaReq }}\">
    <input type=\"hidden\" name=\"MD\" value=\"{{ MD }}\">
</form>

<script type=\"text/javascript\">
    function onLoadPage() {
        document.downloadForm.submit();
    }
</script>
</body>
</html>
", "EccubePaymentLite42/Resource/template/default/Shopping/transition_3ds2_screen.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\default\\Shopping\\transition_3ds2_screen.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
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
