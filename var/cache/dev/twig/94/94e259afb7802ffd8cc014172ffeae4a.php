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

/* B2BConnector/composer.json */
class __TwigTemplate_9a31df490f896af984458d82b244f82e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/composer.json"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/composer.json"));

        // line 1
        echo "{
  \"name\": \"your-vendor/b2b-connector\",
  \"description\": \"B2B Connector plugin (EC-CUBE 4.3.1) - product & SKU ext fields\",
  \"type\": \"eccube-plugin\",
  \"version\": \"1.0.0\",
  \"license\": \"proprietary\",
  \"require\": {
    \"php\": \">=7.4\",
    \"ext-json\": \"*\",
    \"ec-cube/plugin-installer\": \"^2.0\"
  },
  \"autoload\": {\"psr-4\": {\"Plugin\\\\B2BConnector\\\\\": \"\"}},
  \"extra\": {
    \"code\": \"B2BConnector\",
    \"caption\": \"B2B Connector\",
    \"version\": \"1.0.0\",
    \"category\": \"front\",
    \"compatible\": [\"4.3.1\"],
    \"event\": \"Plugin\\\\B2BConnector\\\\Event\",
    \"migration\": \"Plugin\\\\B2BConnector\\\\Migration\",
    \"orm.path\": [\"Entity\"],
    \"service\": [\"Resource/config/services.yaml\"],
    \"routing\": [\"Resource/config/routes.yaml\"],
    \"priority\": 100
  }
}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "B2BConnector/composer.json";
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
        return new Source("{
  \"name\": \"your-vendor/b2b-connector\",
  \"description\": \"B2B Connector plugin (EC-CUBE 4.3.1) - product & SKU ext fields\",
  \"type\": \"eccube-plugin\",
  \"version\": \"1.0.0\",
  \"license\": \"proprietary\",
  \"require\": {
    \"php\": \">=7.4\",
    \"ext-json\": \"*\",
    \"ec-cube/plugin-installer\": \"^2.0\"
  },
  \"autoload\": {\"psr-4\": {\"Plugin\\\\B2BConnector\\\\\": \"\"}},
  \"extra\": {
    \"code\": \"B2BConnector\",
    \"caption\": \"B2B Connector\",
    \"version\": \"1.0.0\",
    \"category\": \"front\",
    \"compatible\": [\"4.3.1\"],
    \"event\": \"Plugin\\\\B2BConnector\\\\Event\",
    \"migration\": \"Plugin\\\\B2BConnector\\\\Migration\",
    \"orm.path\": [\"Entity\"],
    \"service\": [\"Resource/config/services.yaml\"],
    \"routing\": [\"Resource/config/routes.yaml\"],
    \"priority\": 100
  }
}", "B2BConnector/composer.json", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\B2BConnector\\composer.json");
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
