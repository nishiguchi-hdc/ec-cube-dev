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

/* B2BConnector/Resource/config/services.yaml */
class __TwigTemplate_b38fe3c72d079ec70804b1a37898d093 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Resource/config/services.yaml"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Resource/config/services.yaml"));

        // line 1
        echo "services:
  Plugin\\B2BConnector\\:
    resource: '../../*'
    exclude: '../../{composer.json,Resource,Migration,Entity,Repository}/'

  Plugin\\B2BConnector\\Event\\AdminProductSubscriber:
    public: true
    autowire: true
    autoconfigure: true
    tags:
      - { name: kernel.event_subscriber }

  Plugin\\B2BConnector\\Event\\TemplateSubscriber:
    tags:
      - { name: kernel.event_subscriber }

  Plugin\\B2BConnector\\Event\\AdminCustomerSubscriber:
    public: true
    autowire: true
    autoconfigure: true
    tags: ['kernel.event_subscriber']

  Plugin\\B2BConnector\\Event\\AdminCustomerAddressSubscriber:
    public: true
    autowire: true
    autoconfigure: true
    tags: ['kernel.event_subscriber']

  Plugin\\B2BConnector\\Event\\AdminOrderSubscriber:
    public: true
    autowire: true
    autoconfigure: true
    tags: ['kernel.event_subscriber']

  Plugin\\B2BConnector\\Event\\AdminRouteGuardSubscriber:
    public: true
    autowire: true
    autoconfigure: true
    tags: ['kernel.event_subscriber']

  Plugin\\B2BConnector\\Form\\Extension\\AdminOrderTypeExtension:
    public: true
    autowire: true
    autoconfigure: true
    tags: ['form.type_extension']

  Plugin\\B2BConnector\\Form\\Extension\\AdminShippingTypeExtension:
    public: true
    autowire: true
    autoconfigure: true
    tags: ['form.type_extension']

  Plugin\\B2BConnector\\Form\\Extension\\AdminCustomerTypeExtension:
    public: true
    autowire: true
    autoconfigure: true
    tags: ['form.type_extension']

  Plugin\\B2BConnector\\Form\\Extension\\AdminProductTypeExtension:
    public: true
    autowire: true
    autoconfigure: true
    tags: ['form.type_extension']

  Plugin\\B2BConnector\\Form\\Extension\\AdminProductClassTypeExtension:
    public: true
    autowire: true
    autoconfigure: true
    tags: ['form.type_extension']

  Plugin\\B2BConnector\\Form\\Extension\\CustomerAddressTypeExtension:
    public: true
    autowire: true
    autoconfigure: true
    tags: ['form.type_extension']

  Plugin\\B2BConnector\\Form\\Type\\Admin\\OrderExtType:
    public: true
    autowire: true
    autoconfigure: true

  Plugin\\B2BConnector\\Repository\\CustomerRepositoryDecorator:
    decorates: 'Eccube\\Repository\\CustomerRepository'
    autowire: true
    autoconfigure: true
    public: false
    arguments:
      \$inner: '@Plugin\\B2BConnector\\Repository\\CustomerRepositoryDecorator.inner'
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "B2BConnector/Resource/config/services.yaml";
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
        return new Source("services:
  Plugin\\B2BConnector\\:
    resource: '../../*'
    exclude: '../../{composer.json,Resource,Migration,Entity,Repository}/'

  Plugin\\B2BConnector\\Event\\AdminProductSubscriber:
    public: true
    autowire: true
    autoconfigure: true
    tags:
      - { name: kernel.event_subscriber }

  Plugin\\B2BConnector\\Event\\TemplateSubscriber:
    tags:
      - { name: kernel.event_subscriber }

  Plugin\\B2BConnector\\Event\\AdminCustomerSubscriber:
    public: true
    autowire: true
    autoconfigure: true
    tags: ['kernel.event_subscriber']

  Plugin\\B2BConnector\\Event\\AdminCustomerAddressSubscriber:
    public: true
    autowire: true
    autoconfigure: true
    tags: ['kernel.event_subscriber']

  Plugin\\B2BConnector\\Event\\AdminOrderSubscriber:
    public: true
    autowire: true
    autoconfigure: true
    tags: ['kernel.event_subscriber']

  Plugin\\B2BConnector\\Event\\AdminRouteGuardSubscriber:
    public: true
    autowire: true
    autoconfigure: true
    tags: ['kernel.event_subscriber']

  Plugin\\B2BConnector\\Form\\Extension\\AdminOrderTypeExtension:
    public: true
    autowire: true
    autoconfigure: true
    tags: ['form.type_extension']

  Plugin\\B2BConnector\\Form\\Extension\\AdminShippingTypeExtension:
    public: true
    autowire: true
    autoconfigure: true
    tags: ['form.type_extension']

  Plugin\\B2BConnector\\Form\\Extension\\AdminCustomerTypeExtension:
    public: true
    autowire: true
    autoconfigure: true
    tags: ['form.type_extension']

  Plugin\\B2BConnector\\Form\\Extension\\AdminProductTypeExtension:
    public: true
    autowire: true
    autoconfigure: true
    tags: ['form.type_extension']

  Plugin\\B2BConnector\\Form\\Extension\\AdminProductClassTypeExtension:
    public: true
    autowire: true
    autoconfigure: true
    tags: ['form.type_extension']

  Plugin\\B2BConnector\\Form\\Extension\\CustomerAddressTypeExtension:
    public: true
    autowire: true
    autoconfigure: true
    tags: ['form.type_extension']

  Plugin\\B2BConnector\\Form\\Type\\Admin\\OrderExtType:
    public: true
    autowire: true
    autoconfigure: true

  Plugin\\B2BConnector\\Repository\\CustomerRepositoryDecorator:
    decorates: 'Eccube\\Repository\\CustomerRepository'
    autowire: true
    autoconfigure: true
    public: false
    arguments:
      \$inner: '@Plugin\\B2BConnector\\Repository\\CustomerRepositoryDecorator.inner'
", "B2BConnector/Resource/config/services.yaml", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\B2BConnector\\Resource\\config\\services.yaml");
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
