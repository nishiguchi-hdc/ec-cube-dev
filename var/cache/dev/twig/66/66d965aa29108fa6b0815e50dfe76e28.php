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

/* @admin/Order/order_item_prototype.twig */
class __TwigTemplate_6b29fd9409c1b4028b573b82b6553749 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Order/order_item_prototype.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Order/order_item_prototype.twig"));

        // line 11
        echo "
<tr class=\"d-none\">
    <td>
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["orderItemForm"]) || array_key_exists("orderItemForm", $context) ? $context["orderItemForm"] : (function () { throw new RuntimeError('Variable "orderItemForm" does not exist.', 14, $this->source); })()), "product_name", [], "any", false, false, true, 14), 14, $this->source), 'widget');
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["orderItemForm"]) || array_key_exists("orderItemForm", $context) ? $context["orderItemForm"] : (function () { throw new RuntimeError('Variable "orderItemForm" does not exist.', 15, $this->source); })()), "ProductClass", [], "any", false, false, true, 15), 15, $this->source), 'widget');
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["orderItemForm"]) || array_key_exists("orderItemForm", $context) ? $context["orderItemForm"] : (function () { throw new RuntimeError('Variable "orderItemForm" does not exist.', 16, $this->source); })()), "order_item_type", [], "any", false, false, true, 16), 16, $this->source), 'widget');
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["orderItemForm"]) || array_key_exists("orderItemForm", $context) ? $context["orderItemForm"] : (function () { throw new RuntimeError('Variable "orderItemForm" does not exist.', 17, $this->source); })()), "price", [], "any", false, false, true, 17), 17, $this->source), 'widget');
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["orderItemForm"]) || array_key_exists("orderItemForm", $context) ? $context["orderItemForm"] : (function () { throw new RuntimeError('Variable "orderItemForm" does not exist.', 18, $this->source); })()), "quantity", [], "any", false, false, true, 18), 18, $this->source), 'widget');
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["orderItemForm"]) || array_key_exists("orderItemForm", $context) ? $context["orderItemForm"] : (function () { throw new RuntimeError('Variable "orderItemForm" does not exist.', 19, $this->source); })()), "tax_type", [], "any", false, false, true, 19), 19, $this->source), 'widget');
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["orderItemForm"]) || array_key_exists("orderItemForm", $context) ? $context["orderItemForm"] : (function () { throw new RuntimeError('Variable "orderItemForm" does not exist.', 20, $this->source); })()), "point_rate", [], "any", false, false, true, 20), 20, $this->source), 'widget');
        echo "
    </td>
</tr>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@admin/Order/order_item_prototype.twig";
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
        return array (  86 => 20,  82 => 19,  78 => 18,  74 => 17,  70 => 16,  66 => 15,  62 => 14,  57 => 11,);
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

<tr class=\"d-none\">
    <td>
        {{ form_widget(orderItemForm.product_name) }}
        {{ form_widget(orderItemForm.ProductClass) }}
        {{ form_widget(orderItemForm.order_item_type) }}
        {{ form_widget(orderItemForm.price) }}
        {{ form_widget(orderItemForm.quantity) }}
        {{ form_widget(orderItemForm.tax_type) }}
        {{ form_widget(orderItemForm.point_rate) }}
    </td>
</tr>
", "@admin/Order/order_item_prototype.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\src\\Eccube\\Resource\\template\\admin\\Order\\order_item_prototype.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array("form_widget" => 14);

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                ['form_widget']
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
