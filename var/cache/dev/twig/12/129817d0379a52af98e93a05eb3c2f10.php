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

/* Coupon42/Resource/template/admin/order_edit_coupon.twig */
class __TwigTemplate_90a3083ce337d0bb14e79afb30f147e7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Coupon42/Resource/template/admin/order_edit_coupon.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Coupon42/Resource/template/admin/order_edit_coupon.twig"));

        // line 10
        echo "<script type=\"text/javascript\">
    \$(function () {
        \$(\".c-primaryCol .card\").last().before(\$(\"#coupon\").detach());
    });
</script>
";
        // line 16
        echo "<div id=\"coupon\" class=\"card rounded border-0 mb-4\">
    <div class=\"card-header\">
        <div class=\"row\">
            <div class=\"col-8\">
                <div class=\"d-inline-block\">
                    <span class=\"card-title\">";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.order_edit.header"), "html", null, true);
        echo "</span>
                </div>
            </div>
            <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#couponArea\" aria-expanded=\"false\" aria-controls=\"couponArea\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
        </div>
    </div>
    <div class=\"collapse show ec-cardCollapse\" id=\"couponArea\">
        <div class=\"card-body\">
            <label class=\"control-label\">";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.order_edit.body"), "html", null, true);
        echo "</label>　
            ";
        // line 30
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["coupon_cd"]) || array_key_exists("coupon_cd", $context) ? $context["coupon_cd"] : (function () { throw new RuntimeError('Variable "coupon_cd" does not exist.', 30, $this->source); })()), 30, $this->source), "html", null, true);
        echo "　";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["coupon_name"]) || array_key_exists("coupon_name", $context) ? $context["coupon_name"] : (function () { throw new RuntimeError('Variable "coupon_name" does not exist.', 30, $this->source); })()), 30, $this->source), "html", null, true);
        echo " ";
        if ((isset($context["coupon_change_status"]) || array_key_exists("coupon_change_status", $context) ? $context["coupon_change_status"] : (function () { throw new RuntimeError('Variable "coupon_change_status" does not exist.', 30, $this->source); })())) {
            echo "<p class=\"text-danger\">注文がキャンセルされたため、クーポンが適用されていません。お支払い合計を変更する場合は、「";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["coupon_name"]) || array_key_exists("coupon_name", $context) ? $context["coupon_name"] : (function () { throw new RuntimeError('Variable "coupon_name" does not exist.', 30, $this->source); })()), 30, $this->source), "html", null, true);
            echo "」の明細を手動にて削除してください。</p>";
        }
        // line 31
        echo "        </div>
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
        return "Coupon42/Resource/template/admin/order_edit_coupon.twig";
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
        return array (  96 => 31,  86 => 30,  82 => 29,  71 => 21,  64 => 16,  57 => 10,);
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
        \$(\".c-primaryCol .card\").last().before(\$(\"#coupon\").detach());
    });
</script>
{# クーポン情報 #}
<div id=\"coupon\" class=\"card rounded border-0 mb-4\">
    <div class=\"card-header\">
        <div class=\"row\">
            <div class=\"col-8\">
                <div class=\"d-inline-block\">
                    <span class=\"card-title\">{{ 'plugin_coupon.admin.order_edit.header'|trans }}</span>
                </div>
            </div>
            <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#couponArea\" aria-expanded=\"false\" aria-controls=\"couponArea\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
        </div>
    </div>
    <div class=\"collapse show ec-cardCollapse\" id=\"couponArea\">
        <div class=\"card-body\">
            <label class=\"control-label\">{{ 'plugin_coupon.admin.order_edit.body'|trans }}</label>　
            {{ coupon_cd }}　{{ coupon_name }} {% if coupon_change_status %}<p class=\"text-danger\">注文がキャンセルされたため、クーポンが適用されていません。お支払い合計を変更する場合は、「{{ coupon_name}}」の明細を手動にて削除してください。</p>{% endif %}
        </div>
    </div>
</div>
", "Coupon42/Resource/template/admin/order_edit_coupon.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\Coupon42\\Resource\\template\\admin\\order_edit_coupon.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 30);
        static $filters = array("escape" => 21, "trans" => 21);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'trans'],
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
