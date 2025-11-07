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

/* EccubePaymentLite42/EventListener/EventSubscriber/Admin/AddRegularNav.php */
class __TwigTemplate_ec27b54ee6522ac9b62a69a33f2620a9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/EventListener/EventSubscriber/Admin/AddRegularNav.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/EventListener/EventSubscriber/Admin/AddRegularNav.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\EventListener\\EventSubscriber\\Admin;

use Eccube\\Event\\TemplateEvent;
use Eccube\\Request\\Context;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;

class AddRegularNav implements EventSubscriberInterface
{
    /**
     * @var Context
     */
    private \$context;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;
    /**
     * @var EventDispatcherInterface
     */
    private \$eventDispatcher;

    public function __construct(
        Context \$context,
        ConfigRepository \$configRepository,
        EventDispatcherInterface \$eventDispatcher
    ) {
        \$this->context = \$context;
        \$this->configRepository = \$configRepository;
        \$this->eventDispatcher = \$eventDispatcher;
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::CONTROLLER_ARGUMENTS => 'onKernelController',
        ];
    }

    public function onKernelController(ControllerArgumentsEvent \$event)
    {
        if (!\$this->context->isAdmin()) {
            return;
        }
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        if (!\$Config->getRegular()) {
            return;
        }
        if (!\$event->getRequest()->attributes->has('_template')) {
            return;
        }
        /* @var Template \$template */
        \$template = \$event->getRequest()->attributes->get('_template');
        \$this->eventDispatcher->addListener(\$template->getTemplate(), function (TemplateEvent \$templateEvent) {
            \$templateEvent->addSnippet('@EccubePaymentLite42/admin/Nav/regular_nav.twig');
        });
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "EccubePaymentLite42/EventListener/EventSubscriber/Admin/AddRegularNav.php";
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
        return new Source("<?php

namespace Plugin\\EccubePaymentLite42\\EventListener\\EventSubscriber\\Admin;

use Eccube\\Event\\TemplateEvent;
use Eccube\\Request\\Context;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;

class AddRegularNav implements EventSubscriberInterface
{
    /**
     * @var Context
     */
    private \$context;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;
    /**
     * @var EventDispatcherInterface
     */
    private \$eventDispatcher;

    public function __construct(
        Context \$context,
        ConfigRepository \$configRepository,
        EventDispatcherInterface \$eventDispatcher
    ) {
        \$this->context = \$context;
        \$this->configRepository = \$configRepository;
        \$this->eventDispatcher = \$eventDispatcher;
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::CONTROLLER_ARGUMENTS => 'onKernelController',
        ];
    }

    public function onKernelController(ControllerArgumentsEvent \$event)
    {
        if (!\$this->context->isAdmin()) {
            return;
        }
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        if (!\$Config->getRegular()) {
            return;
        }
        if (!\$event->getRequest()->attributes->has('_template')) {
            return;
        }
        /* @var Template \$template */
        \$template = \$event->getRequest()->attributes->get('_template');
        \$this->eventDispatcher->addListener(\$template->getTemplate(), function (TemplateEvent \$templateEvent) {
            \$templateEvent->addSnippet('@EccubePaymentLite42/admin/Nav/regular_nav.twig');
        });
    }
}
", "EccubePaymentLite42/EventListener/EventSubscriber/Admin/AddRegularNav.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\EventListener\\EventSubscriber\\Admin\\AddRegularNav.php");
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
