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

/* @admin/Store/plugin_confirm_panel.twig */
class __TwigTemplate_f1c5b13f91d17167f1d791d1708df8a0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/plugin_confirm_panel.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/plugin_confirm_panel.twig"));

        // line 11
        echo "<div class=\"col-4\">
    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), "store_url", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\" target=\"_blank\">
        <img class=\"w-100 img-responsive\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 13, $this->source); })()), "image", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "\" alt=\"\"></a>
</div>
<div class=\"col\">
    <div class=\"info\">
        <h5 class=\"fw-bold mb-4\">
            ";
        // line 18
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "
        </h5>
        <div>";
        // line 20
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 20, $this->source); })()), "short_description", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "</div>
        ";
        // line 21
        if (((isset($context["is_update"]) || array_key_exists("is_update", $context) ? $context["is_update"] : (function () { throw new RuntimeError('Variable "is_update" does not exist.', 21, $this->source); })()) == false)) {
            // line 22
            echo "            <p class=\"text-danger mb-4 mt-3\"><span class=\"fw-bold text-body\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.price"), "html", null, true);
            echo " </span> ";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 22, $this->source); })()), "price", [], "any", false, false, true, 22), 22, $this->source)), "html", null, true);
            echo "<small> (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
            echo ")</small></p>
        ";
        }
        // line 24
        echo "        <div class=\"row\">
            <div class=\"col-7 ps-4\">
                ";
        // line 26
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@admin/Store/plugin_detail_info.twig");
        echo "
            </div>
        </div>
    </div>
    ";
        // line 30
        $context["version_check"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 30, $this->source); })()), "version_check", [], "any", false, false, true, 30);
        // line 31
        echo "    ";
        if (((isset($context["version_check"]) || array_key_exists("version_check", $context) ? $context["version_check"] : (function () { throw new RuntimeError('Variable "version_check" does not exist.', 31, $this->source); })()) == false)) {
            // line 32
            echo "        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"alert alert-danger border border-danger\">
                    <p class=\"text-danger mb-0\">
                        ";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.modal.note", ["%version%" => twig_constant("Eccube\\Common\\Constant::VERSION")]), "html", null, true);
            echo "
                    </p>
                </div>
            </div>
        </div>
    ";
        }
        // line 42
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
        return "@admin/Store/plugin_confirm_panel.twig";
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
        return array (  124 => 42,  115 => 36,  109 => 32,  106 => 31,  104 => 30,  97 => 26,  93 => 24,  83 => 22,  81 => 21,  77 => 20,  72 => 18,  64 => 13,  60 => 12,  57 => 11,);
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
<div class=\"col-4\">
    <a href=\"{{ item.store_url }}\" target=\"_blank\">
        <img class=\"w-100 img-responsive\" src=\"{{ item.image }}\" alt=\"\"></a>
</div>
<div class=\"col\">
    <div class=\"info\">
        <h5 class=\"fw-bold mb-4\">
            {{ item.name }}
        </h5>
        <div>{{ item.short_description }}</div>
        {% if is_update == false %}
            <p class=\"text-danger mb-4 mt-3\"><span class=\"fw-bold text-body\">{{ 'admin.store.plugin.price'|trans }} </span> {{ item.price|price }}<small> ({{ 'common.tax_include'|trans }})</small></p>
        {% endif %}
        <div class=\"row\">
            <div class=\"col-7 ps-4\">
                {{ include('@admin/Store/plugin_detail_info.twig') }}
            </div>
        </div>
    </div>
    {% set version_check = item.version_check  %}
    {% if version_check == false %}
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"alert alert-danger border border-danger\">
                    <p class=\"text-danger mb-0\">
                        {{ 'admin.store.plugin_owners_search.modal.note'|trans({'%version%': constant('Eccube\\\\Common\\\\Constant::VERSION')}) }}
                    </p>
                </div>
            </div>
        </div>
    {% endif %}
</div>
", "@admin/Store/plugin_confirm_panel.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\admin\\Store\\plugin_confirm_panel.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 21, "set" => 30);
        static $filters = array("escape" => 12, "trans" => 22, "price" => 22);
        static $functions = array("include" => 26, "constant" => 36);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'trans', 'price'],
                ['include', 'constant']
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
