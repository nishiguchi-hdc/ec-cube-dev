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

/* EccubePaymentLite42/EventListener/EventSubscriber/Admin/Order/OrderEditChangePriceEventSubscriber.php */
class __TwigTemplate_2aa5976c6b7ac192273713c542e7812c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/EventListener/EventSubscriber/Admin/Order/OrderEditChangePriceEventSubscriber.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/EventListener/EventSubscriber/Admin/Order/OrderEditChangePriceEventSubscriber.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\EventListener\\EventSubscriber\\Admin\\Order;

use Eccube\\Common\\EccubeConfig;
use Eccube\\Entity\\Order;
use Eccube\\Event\\EccubeEvents;
use Eccube\\Event\\EventArgs;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestChangePaymentAmountService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestGetEpsilonPaymentInformationService;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;

class OrderEditChangePriceEventSubscriber implements EventSubscriberInterface
{
    /**
     * @var RequestGetEpsilonPaymentInformationService
     */
    private \$requestGetEpsilonPaymentInformationService;
    /**
     * @var RequestChangePaymentAmountService
     */
    private \$requestChangePaymentAmountService;
    /**
     * @var EccubeConfig
     */
    private \$eccubeConfig;
    /**
     * @var SessionInterface
     */
    private \$session;

    public function __construct(
        RequestGetEpsilonPaymentInformationService \$requestGetEpsilonPaymentInformationService,
        RequestChangePaymentAmountService \$requestChangePaymentAmountService,
        EccubeConfig \$eccubeConfig,
        RequestStack \$requestStack
    ) {
        \$this->requestGetEpsilonPaymentInformationService = \$requestGetEpsilonPaymentInformationService;
        \$this->requestChangePaymentAmountService = \$requestChangePaymentAmountService;
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->session = \$requestStack->getSession();
    }

    public static function getSubscribedEvents()
    {
        return [
            EccubeEvents::ADMIN_ORDER_EDIT_INDEX_COMPLETE => 'adminOrderEditIndexComplete',
        ];
    }

    public function adminOrderEditIndexComplete(EventArgs \$eventArgs)
    {
        /** @var Order \$TargetOrder */
        \$TargetOrder = \$eventArgs->getArgument('TargetOrder');
        \$results = \$this
            ->requestChangePaymentAmountService
            ->handle(\$TargetOrder);
        // 決済金額変更リクエストが成功すれば、successのメッセージを返す。
        if (!is_null(\$results) && \$results['status'] === 'OK') {
            \$this
                ->session
                ->getFlashBag()
                ->add('eccube.admin.success', \$results['message']);

            return;
        }
        // 決済金額変更リクエストが失敗すれば、warningのメッセージを返す。
        if (!is_null(\$results)) {
            \$this
                ->session
                ->getFlashBag()
                ->add('eccube.admin.warning', \$results['message']);
        }
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
        return "EccubePaymentLite42/EventListener/EventSubscriber/Admin/Order/OrderEditChangePriceEventSubscriber.php";
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

namespace Plugin\\EccubePaymentLite42\\EventListener\\EventSubscriber\\Admin\\Order;

use Eccube\\Common\\EccubeConfig;
use Eccube\\Entity\\Order;
use Eccube\\Event\\EccubeEvents;
use Eccube\\Event\\EventArgs;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestChangePaymentAmountService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestGetEpsilonPaymentInformationService;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;

class OrderEditChangePriceEventSubscriber implements EventSubscriberInterface
{
    /**
     * @var RequestGetEpsilonPaymentInformationService
     */
    private \$requestGetEpsilonPaymentInformationService;
    /**
     * @var RequestChangePaymentAmountService
     */
    private \$requestChangePaymentAmountService;
    /**
     * @var EccubeConfig
     */
    private \$eccubeConfig;
    /**
     * @var SessionInterface
     */
    private \$session;

    public function __construct(
        RequestGetEpsilonPaymentInformationService \$requestGetEpsilonPaymentInformationService,
        RequestChangePaymentAmountService \$requestChangePaymentAmountService,
        EccubeConfig \$eccubeConfig,
        RequestStack \$requestStack
    ) {
        \$this->requestGetEpsilonPaymentInformationService = \$requestGetEpsilonPaymentInformationService;
        \$this->requestChangePaymentAmountService = \$requestChangePaymentAmountService;
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->session = \$requestStack->getSession();
    }

    public static function getSubscribedEvents()
    {
        return [
            EccubeEvents::ADMIN_ORDER_EDIT_INDEX_COMPLETE => 'adminOrderEditIndexComplete',
        ];
    }

    public function adminOrderEditIndexComplete(EventArgs \$eventArgs)
    {
        /** @var Order \$TargetOrder */
        \$TargetOrder = \$eventArgs->getArgument('TargetOrder');
        \$results = \$this
            ->requestChangePaymentAmountService
            ->handle(\$TargetOrder);
        // 決済金額変更リクエストが成功すれば、successのメッセージを返す。
        if (!is_null(\$results) && \$results['status'] === 'OK') {
            \$this
                ->session
                ->getFlashBag()
                ->add('eccube.admin.success', \$results['message']);

            return;
        }
        // 決済金額変更リクエストが失敗すれば、warningのメッセージを返す。
        if (!is_null(\$results)) {
            \$this
                ->session
                ->getFlashBag()
                ->add('eccube.admin.warning', \$results['message']);
        }
    }
}
", "EccubePaymentLite42/EventListener/EventSubscriber/Admin/Order/OrderEditChangePriceEventSubscriber.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\EventListener\\EventSubscriber\\Admin\\Order\\OrderEditChangePriceEventSubscriber.php");
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
