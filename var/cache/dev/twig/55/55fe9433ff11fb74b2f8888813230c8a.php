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

/* AmazonPayV2_42_Bundle/Resource/template/default/Shopping/confirm_widgets.twig */
class __TwigTemplate_dfa24e81a13a3eeaeb7f21e78279940d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Resource/template/default/Shopping/confirm_widgets.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Resource/template/default/Shopping/confirm_widgets.twig"));

        // line 10
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/amazon_shopping_v2.css"), "html", null, true);
        echo "\">

";
        // line 13
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 14
        echo "<script>
\$(function () {
    \$('button.ec-blockBtn--action').addClass('amazon_pay_button');
    
    // submit
    \$('#shopping-form').attr('action', '";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("amazon_pay_shopping_checkout");
        echo "');

    // back
    \$('.ec-blockBtn--cancel').attr('href', '";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("amazon_pay_shopping");
        echo "');

    //スクロール処理上書き
    \$('.pagetop').hide();

    \$(window).on('scroll', function() {
        // ページトップフェードイン
        if (\$(this).scrollTop() > 300) {
            \$('.pagetop').fadeIn();
        } else {
            \$('.pagetop').fadeOut();
        }

        // PC表示の時のみに適用
        if (window.innerWidth > 767) {

            var side = \$(\".ec-orderRole__summary\"),
                wrap = \$(\"#shopping-form\"),
                amazon_wrap = \$('.amazon_customer_regist_v2'),
                min_move = wrap.offset().top,
                max_move = wrap.height(),
                amazon_move = amazon_wrap.height(),
                margin_bottom = max_move - min_move;

            var scrollTop = \$(window).scrollTop();
            if (scrollTop > min_move && scrollTop < max_move && amazon_move > 0) {
                side.css({\"margin-top\": 0});
            } else if (scrollTop > max_move) {
                side.css({\"margin-top\": margin_bottom});
            }
        }
    });
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "AmazonPayV2_42_Bundle/Resource/template/default/Shopping/confirm_widgets.twig";
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
        return array (  98 => 22,  92 => 19,  85 => 14,  66 => 13,  61 => 11,  58 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("{#
Amazon Pay V2 for EC-CUBE4.2
Copyright(c) 2023 EC-CUBE CO.,LTD. all rights reserved.

https://www.ec-cube.co.jp/

This program is not free software.
It applies to terms of service.
#}

<link rel=\"stylesheet\" href=\"{{ asset('assets/css/amazon_shopping_v2.css') }}\">

{% block javascript %}
<script>
\$(function () {
    \$('button.ec-blockBtn--action').addClass('amazon_pay_button');
    
    // submit
    \$('#shopping-form').attr('action', '{{ url(\"amazon_pay_shopping_checkout\") }}');

    // back
    \$('.ec-blockBtn--cancel').attr('href', '{{ url(\"amazon_pay_shopping\") }}');

    //スクロール処理上書き
    \$('.pagetop').hide();

    \$(window).on('scroll', function() {
        // ページトップフェードイン
        if (\$(this).scrollTop() > 300) {
            \$('.pagetop').fadeIn();
        } else {
            \$('.pagetop').fadeOut();
        }

        // PC表示の時のみに適用
        if (window.innerWidth > 767) {

            var side = \$(\".ec-orderRole__summary\"),
                wrap = \$(\"#shopping-form\"),
                amazon_wrap = \$('.amazon_customer_regist_v2'),
                min_move = wrap.offset().top,
                max_move = wrap.height(),
                amazon_move = amazon_wrap.height(),
                margin_bottom = max_move - min_move;

            var scrollTop = \$(window).scrollTop();
            if (scrollTop > min_move && scrollTop < max_move && amazon_move > 0) {
                side.css({\"margin-top\": 0});
            } else if (scrollTop > max_move) {
                side.css({\"margin-top\": margin_bottom});
            }
        }
    });
});
</script>
{% endblock %}
", "AmazonPayV2_42_Bundle/Resource/template/default/Shopping/confirm_widgets.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\AmazonPayV2_42_Bundle\\Resource\\template\\default\\Shopping\\confirm_widgets.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 13);
        static $filters = array("escape" => 11);
        static $functions = array("asset" => 11, "url" => 19);

        try {
            $this->sandbox->checkSecurity(
                ['block'],
                ['escape'],
                ['asset', 'url']
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
