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

/* EccubePaymentLite42/Resource/template/default/Shopping/credit_card_info.twig */
class __TwigTemplate_cf991f070e47e405a2b3610660d8ab40 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Shopping/credit_card_info.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Shopping/credit_card_info.twig"));

        // line 1
        echo "<script>
    \$(function () {
        ";
        // line 3
        if ((isset($context["isRegisteredCreditCard"]) || array_key_exists("isRegisteredCreditCard", $context) ? $context["isRegisteredCreditCard"] : (function () { throw new RuntimeError('Variable "isRegisteredCreditCard" does not exist.', 3, $this->source); })())) {
            // line 4
            echo "            \$('.ec-orderPayment:first').after(
                '<div class=\"ec-orderPayment\">'+
                    '<div class=\"ec-rectHeading\">'+
                        '<h2>前回使用したクレジットカード</h2>'+
                    '</div>'+
                    '<p>カードブランド: ";
            // line 9
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["cardBrand"]) || array_key_exists("cardBrand", $context) ? $context["cardBrand"] : (function () { throw new RuntimeError('Variable "cardBrand" does not exist.', 9, $this->source); })()), 9, $this->source), "html", null, true);
            echo "</p>'+
                    '<p>クレジットカード番号: **** - **** - **** - ";
            // line 10
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["cardNumberMask"]) || array_key_exists("cardNumberMask", $context) ? $context["cardNumberMask"] : (function () { throw new RuntimeError('Variable "cardNumberMask" does not exist.', 10, $this->source); })()), 10, $this->source), "html", null, true);
            echo "</p>'+
                    '<p>有効期限: ";
            // line 11
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["cardExpire"]) || array_key_exists("cardExpire", $context) ? $context["cardExpire"] : (function () { throw new RuntimeError('Variable "cardExpire" does not exist.', 11, $this->source); })()), 11, $this->source), "html", null, true);
            echo "</p>'+
                '</div>'
            );
        ";
        }
        // line 15
        echo "    });
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "EccubePaymentLite42/Resource/template/default/Shopping/credit_card_info.twig";
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
        return array (  85 => 15,  78 => 11,  74 => 10,  70 => 9,  63 => 4,  61 => 3,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    \$(function () {
        {% if isRegisteredCreditCard %}
            \$('.ec-orderPayment:first').after(
                '<div class=\"ec-orderPayment\">'+
                    '<div class=\"ec-rectHeading\">'+
                        '<h2>前回使用したクレジットカード</h2>'+
                    '</div>'+
                    '<p>カードブランド: {{ cardBrand }}</p>'+
                    '<p>クレジットカード番号: **** - **** - **** - {{ cardNumberMask }}</p>'+
                    '<p>有効期限: {{ cardExpire }}</p>'+
                '</div>'
            );
        {% endif %}
    });
</script>
", "EccubePaymentLite42/Resource/template/default/Shopping/credit_card_info.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\default\\Shopping\\credit_card_info.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3);
        static $filters = array("escape" => 9);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
