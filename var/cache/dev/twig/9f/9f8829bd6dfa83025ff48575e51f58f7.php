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

/* EccubePaymentLite42/Resource/template/default/Shopping/gmo_deferred_payment_description.twig */
class __TwigTemplate_33c3e763534a671f449fbad70c52c6e7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Shopping/gmo_deferred_payment_description.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/default/Shopping/gmo_deferred_payment_description.twig"));

        // line 1
        echo "<script>
    \$(function (){
        \$('.ec-orderPayment:first').append(
            '<div id=\"gmo-description\">' +
                'GMO後払いとは お客様の手元に商品が到着した後に代金をお支払い頂く決済方法です。' +
                '商品出荷後、商品とは別に払込票を郵送いたしますので、お近くの コンビニエンスストア・郵便局（ゆうちょ銀行）・銀行・LINE Payにてお支払いください。' +
            '</div>' +
            '<div>' +
                '<a href=\"https://www.gmo-ps.com/customer/\" target=\"_blank\">' +
                    '<img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("EccubePaymentLite42/assets/img/ps_banner_2101.gif", "plugin"), "html", null, true);
        echo "\" width=\"187\" alt=\"\" style=\"width: 187px\" />' +
                '</a>' +
            '</div>'
        );
    })
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
        return "EccubePaymentLite42/Resource/template/default/Shopping/gmo_deferred_payment_description.twig";
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
        return array (  68 => 10,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    \$(function (){
        \$('.ec-orderPayment:first').append(
            '<div id=\"gmo-description\">' +
                'GMO後払いとは お客様の手元に商品が到着した後に代金をお支払い頂く決済方法です。' +
                '商品出荷後、商品とは別に払込票を郵送いたしますので、お近くの コンビニエンスストア・郵便局（ゆうちょ銀行）・銀行・LINE Payにてお支払いください。' +
            '</div>' +
            '<div>' +
                '<a href=\"https://www.gmo-ps.com/customer/\" target=\"_blank\">' +
                    '<img src=\"{{ asset('EccubePaymentLite42/assets/img/ps_banner_2101.gif', 'plugin') }}\" width=\"187\" alt=\"\" style=\"width: 187px\" />' +
                '</a>' +
            '</div>'
        );
    })
</script>
", "EccubePaymentLite42/Resource/template/default/Shopping/gmo_deferred_payment_description.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\default\\Shopping\\gmo_deferred_payment_description.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 10);
        static $functions = array("asset" => 10);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
