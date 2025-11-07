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

/* Coupon42/Resource/template/default/coupon_shopping_item.twig */
class __TwigTemplate_658d5d3e4e9be587c05638b7f2c9d859 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Coupon42/Resource/template/default/coupon_shopping_item.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Coupon42/Resource/template/default/coupon_shopping_item.twig"));

        // line 10
        echo "<script type=\"text/javascript\">
    \$(function () {
        \$('#coupon_button').on(\"click\", function () {
            \$(this).attr('disabled', 'disabled');
            \$.ajax({
                type: 'POST',
                data: \$('#shopping-form').serialize(),
                url: '";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping_redirect_to");
        echo "',
                success: function(data) {
                    window.location.href = '";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("plugin_coupon_shopping");
        echo "';
                },
                error: function() {
                    window.location.href = '";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("plugin_coupon_shopping");
        echo "';
                }
            });
            return false;
        });

        // append to layout
        \$(\".ec-orderPayment\").last().after(\$(\"#coupon\").detach());
    })
</script>

<div id=\"coupon\" class=\"ec-orderCoupon\">
    <div class=\"ec-rectHeading\">
        <h2>";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.front.shopping.header"), "html", null, true);
        echo "</h2>
    </div>
    <div id=\"customer_detail_box\" class=\"column\">
        ";
        // line 38
        if ((isset($context["CouponOrder"]) || array_key_exists("CouponOrder", $context) ? $context["CouponOrder"] : (function () { throw new RuntimeError('Variable "CouponOrder" does not exist.', 38, $this->source); })())) {
            // line 39
            echo "            <strong class=\"ec-color-red\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.front.shopping.message.use_code", ["%code%" => twig_get_attribute($this->env, $this->source, (isset($context["CouponOrder"]) || array_key_exists("CouponOrder", $context) ? $context["CouponOrder"] : (function () { throw new RuntimeError('Variable "CouponOrder" does not exist.', 39, $this->source); })()), "coupon_cd", [], "any", false, false, true, 39)]), "html", null, true);
            echo "</strong>
        ";
        } else {
            // line 41
            echo "            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.front.shopping.message.empty"), "html", null, true);
            echo "
        ";
        }
        // line 43
        echo "        <p><a class=\"ec-inlineBtn\" id=\"coupon_button\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("plugin_coupon_shopping");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.front.shopping.button.add_coupon"), "html", null, true);
        echo "</a></p>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Coupon42/Resource/template/default/coupon_shopping_item.twig";
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
        return array (  113 => 43,  107 => 41,  101 => 39,  99 => 38,  93 => 35,  77 => 22,  71 => 19,  66 => 17,  57 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 This file is part of the Coupon plugin

 Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 http://www.ec-cube.co.jp/

 For the full copyright and license information, please view the LICENSE
 file that was distributed with this source code.
#}
<script type=\"text/javascript\">
    \$(function () {
        \$('#coupon_button').on(\"click\", function () {
            \$(this).attr('disabled', 'disabled');
            \$.ajax({
                type: 'POST',
                data: \$('#shopping-form').serialize(),
                url: '{{ url(\"shopping_redirect_to\") }}',
                success: function(data) {
                    window.location.href = '{{ url('plugin_coupon_shopping') }}';
                },
                error: function() {
                    window.location.href = '{{ url('plugin_coupon_shopping') }}';
                }
            });
            return false;
        });

        // append to layout
        \$(\".ec-orderPayment\").last().after(\$(\"#coupon\").detach());
    })
</script>

<div id=\"coupon\" class=\"ec-orderCoupon\">
    <div class=\"ec-rectHeading\">
        <h2>{{ 'plugin_coupon.front.shopping.header'|trans }}</h2>
    </div>
    <div id=\"customer_detail_box\" class=\"column\">
        {% if CouponOrder %}
            <strong class=\"ec-color-red\">{{ 'plugin_coupon.front.shopping.message.use_code'|trans({'%code%': CouponOrder.coupon_cd }) }}</strong>
        {% else %}
            {{ 'plugin_coupon.front.shopping.message.empty'|trans }}
        {% endif %}
        <p><a class=\"ec-inlineBtn\" id=\"coupon_button\" href=\"{{ url('plugin_coupon_shopping') }}\">{{ 'plugin_coupon.front.shopping.button.add_coupon'|trans }}</a></p>
    </div>
</div>
", "Coupon42/Resource/template/default/coupon_shopping_item.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\Coupon42\\Resource\\template\\default\\coupon_shopping_item.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 38);
        static $filters = array("escape" => 35, "trans" => 35);
        static $functions = array("url" => 17);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'trans'],
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
