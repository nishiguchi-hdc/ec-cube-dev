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

/* AmazonPayV2_42_Bundle/Resource/copy/css/amazon_shopping_v2.css */
class __TwigTemplate_3c0a48b721bd8a08077f824adf622e29 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Resource/copy/css/amazon_shopping_v2.css"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Resource/copy/css/amazon_shopping_v2.css"));

        // line 1
        echo "#amazon_pay__payment_descriptor {
  display: flex;
  margin-bottom: 14px;
}

#amazon_pay__payment_descriptor img {
  width: 30px;
  min-width: 30px;
}

.amazon_pay_amazonpaymentdescriptor_block {
  display: flex;
  align-items: center;
}


.amazon_pay_payment_change_block {
  margin-left: auto;
}

.amazon_pay_button {
  -moz-box-shadow: inset 0px 1px 0px 0px #f9eacf;
  -webkit-box-shadow: inset 0px 1px 0px 0px #f9eacf;
  box-shadow: inset 0px 1px 0px 0px #f9eacf;
  background: -webkit-gradient(
    linear,
    left top,
    left bottom,
    color-stop(0.05, #f6dd9f),
    color-stop(1, #f0c24d)
  );
  background: -moz-linear-gradient(center top, #f6dd9f 5%, #f0c24d 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#F6DD9F', endColorstr='#F0C24D');
  background-color: #f5d78a;
  border-color: #f5d78a;
}

.amazon_pay_button:hover {
  background: -webkit-gradient(
    linear,
    left top,
    left bottom,
    color-stop(0.05, #f5d589),
    color-stop(1, #eeba35)
  );
  background: -moz-linear-gradient(center top, #f5d589 5%, #eeba35 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#F5D589', endColorstr='#EEBA35');
  background-color: #eeba35;
  border-color: #eeba35;
}

#AmazonBanner {
  padding: 30px 0px 30px 0px;
  text-align: center;
}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "AmazonPayV2_42_Bundle/Resource/copy/css/amazon_shopping_v2.css";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("#amazon_pay__payment_descriptor {
  display: flex;
  margin-bottom: 14px;
}

#amazon_pay__payment_descriptor img {
  width: 30px;
  min-width: 30px;
}

.amazon_pay_amazonpaymentdescriptor_block {
  display: flex;
  align-items: center;
}


.amazon_pay_payment_change_block {
  margin-left: auto;
}

.amazon_pay_button {
  -moz-box-shadow: inset 0px 1px 0px 0px #f9eacf;
  -webkit-box-shadow: inset 0px 1px 0px 0px #f9eacf;
  box-shadow: inset 0px 1px 0px 0px #f9eacf;
  background: -webkit-gradient(
    linear,
    left top,
    left bottom,
    color-stop(0.05, #f6dd9f),
    color-stop(1, #f0c24d)
  );
  background: -moz-linear-gradient(center top, #f6dd9f 5%, #f0c24d 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#F6DD9F', endColorstr='#F0C24D');
  background-color: #f5d78a;
  border-color: #f5d78a;
}

.amazon_pay_button:hover {
  background: -webkit-gradient(
    linear,
    left top,
    left bottom,
    color-stop(0.05, #f5d589),
    color-stop(1, #eeba35)
  );
  background: -moz-linear-gradient(center top, #f5d589 5%, #eeba35 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#F5D589', endColorstr='#EEBA35');
  background-color: #eeba35;
  border-color: #eeba35;
}

#AmazonBanner {
  padding: 30px 0px 30px 0px;
  text-align: center;
}", "AmazonPayV2_42_Bundle/Resource/copy/css/amazon_shopping_v2.css", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\AmazonPayV2_42_Bundle\\Resource\\copy\\css\\amazon_shopping_v2.css");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
