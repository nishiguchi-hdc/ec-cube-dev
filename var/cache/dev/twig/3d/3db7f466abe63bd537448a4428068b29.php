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

/* @admin/Product/product_class_popup.twig */
class __TwigTemplate_ace5e59ee9efd85c76cb159ada88f5a3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Product/product_class_popup.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Product/product_class_popup.twig"));

        // line 11
        echo "<table class=\"table table-striped\">
    <thead class=\"table-active\">
    <tr>
        <th class=\"pt-2 pb-2 ps-2\">";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category1__short"), "html", null, true);
        echo "</th>
        <th class=\"pt-2 pb-2\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category2__short"), "html", null, true);
        echo "</th>
        <th class=\"pt-2 pb-2\">";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_code__short"), "html", null, true);
        echo "</th>
        <th class=\"pt-2 pb-2\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock"), "html", null, true);
        echo "</th>
        <th class=\"pt-2 pb-2 pe-2\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.price"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Class"]) {
            // line 23
            echo "        <tr id=\"ex-class-";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Class"], "id", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "\">
            <td class=\"ps-3\">";
            // line 24
            if (twig_get_attribute($this->env, $this->source, $context["Class"], "hasClassCategory1", [], "any", false, false, true, 24)) {
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Class"], "ClassCategory1", [], "any", false, false, true, 24), "name", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 25
            if (twig_get_attribute($this->env, $this->source, $context["Class"], "hasClassCategory2", [], "any", false, false, true, 25)) {
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Class"], "ClassCategory2", [], "any", false, false, true, 25), "name", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Class"], "code", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            if (twig_get_attribute($this->env, $this->source, $context["Class"], "stock_unlimited", [], "any", false, false, true, 27)) {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock_unlimited__short"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Class"], "stock", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            }
            echo "</td>
            <td class=\"pe-3\">";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Class"], "price02", [], "any", false, false, true, 28), 28, $this->source)), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </tbody>
</table>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@admin/Product/product_class_popup.twig";
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
        return array (  127 => 31,  118 => 28,  110 => 27,  106 => 26,  100 => 25,  94 => 24,  89 => 23,  85 => 22,  78 => 18,  74 => 17,  70 => 16,  66 => 15,  62 => 14,  57 => 11,);
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
<table class=\"table table-striped\">
    <thead class=\"table-active\">
    <tr>
        <th class=\"pt-2 pb-2 ps-2\">{{ 'admin.product.class_category1__short'|trans }}</th>
        <th class=\"pt-2 pb-2\">{{ 'admin.product.class_category2__short'|trans }}</th>
        <th class=\"pt-2 pb-2\">{{ 'admin.product.product_code__short'|trans }}</th>
        <th class=\"pt-2 pb-2\">{{ 'admin.product.stock'|trans }}</th>
        <th class=\"pt-2 pb-2 pe-2\">{{ 'admin.product.price'|trans }}</th>
    </tr>
    </thead>
    <tbody>
    {% for Class in data %}
        <tr id=\"ex-class-{{ Class.id }}\">
            <td class=\"ps-3\">{% if Class.hasClassCategory1 %}{{ Class.ClassCategory1.name }}{% endif %}</td>
            <td>{% if Class.hasClassCategory2 %}{{ Class.ClassCategory2.name }}{% endif %}</td>
            <td>{{ Class.code }}</td>
            <td>{% if Class.stock_unlimited %}{{ 'admin.product.stock_unlimited__short'|trans }}{% else %}{{ Class.stock }}{% endif %}</td>
            <td class=\"pe-3\">{{ Class.price02|price }}</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
", "@admin/Product/product_class_popup.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\admin\\Product\\product_class_popup.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 22, "if" => 24);
        static $filters = array("escape" => 14, "trans" => 14, "price" => 28);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'trans', 'price'],
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
