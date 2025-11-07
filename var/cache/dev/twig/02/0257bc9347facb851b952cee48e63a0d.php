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

/* EccubePaymentLite42/EventListener/EventSubscriber/Admin/Order/OrderIndexEventSubscriber.php */
class __TwigTemplate_f55d4b24de4e4209cf5ab8a0088b5eb6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/EventListener/EventSubscriber/Admin/Order/OrderIndexEventSubscriber.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/EventListener/EventSubscriber/Admin/Order/OrderIndexEventSubscriber.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\EventListener\\EventSubscriber\\Admin\\Order;

use Eccube\\Common\\EccubeConfig;
use Eccube\\Entity\\Order;
use Eccube\\Entity\\Shipping;
use Eccube\\Event\\TemplateEvent;
use Eccube\\Repository\\OrderRepository;
use Plugin\\EccubePaymentLite42\\Entity\\PaymentStatus;
use Plugin\\EccubePaymentLite42\\Repository\\PaymentStatusRepository;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class OrderIndexEventSubscriber implements EventSubscriberInterface
{
    /**
     * @var OrderRepository
     */
    private \$orderRepository;
    /**
     * @var PaymentStatusRepository
     */
    private \$paymentStatusRepository;
    /**
     * @var EccubeConfig
     */
    private \$eccubeConfig;

    public function __construct(
        OrderRepository \$orderRepository,
        PaymentStatusRepository \$paymentStatusRepository,
        EccubeConfig \$eccubeConfig
    ) {
        \$this->orderRepository = \$orderRepository;
        \$this->paymentStatusRepository = \$paymentStatusRepository;
        \$this->eccubeConfig = \$eccubeConfig;
    }

    public static function getSubscribedEvents()
    {
        return [
            '@admin/Order/index.twig' => 'index',
        ];
    }

    public function index(TemplateEvent \$event)
    {
        \$orderList = \$event->getParameter('pagination')->getItems();
        \$orders = [];
        foreach (\$orderList as \$key => \$Order) {
            /* @var Order \$Order */
            \$orders[\$key] = \$Order->toArray();
            \$orders[\$key]['PaymentStatus'] = is_null(\$orders[\$key]['PaymentStatus']) ? null : \$orders[\$key]['PaymentStatus']->toArray();
            \$orders[\$key]['Payment']['payment_method'] = is_null(\$orders[\$key]['payment_method']) ? null : \$orders[\$key]['payment_method'];
            \$orders[\$key]['Shippings'] = is_null(\$orders[\$key]['Shippings']) ? null : \$orders[\$key]['Shippings']->toArray();
            foreach (\$Order->getShippings() as \$index => \$Shipping) {
                /* @var Shipping \$Shipping */
                \$orders[\$key]['Shippings'][\$index] = \$Shipping->toArray();
            }
        }
        \$displayOrders = [];
        foreach (\$orders as \$key => \$order) {
            \$displayOrders[\$key]['PaymentStatus'] = \$order['PaymentStatus'];
            \$displayOrders[\$key]['payment_method'] = \$order['payment_method'];
            foreach (\$order['Shippings'] as \$index => \$shipping) {
                \$displayOrders[\$key]['Shippings'][\$index] = ['id' => \$shipping['id']];
            }
        }
        \$PaymentStatuses = \$this->paymentStatusRepository->findBy([
            'id' => [
                PaymentStatus::CHARGED,
                PaymentStatus::SHIPPING_REGISTRATION,
                PaymentStatus::CANCEL,
            ],
        ], []);
        \$event->setParameter('PaymentStatuses', \$PaymentStatuses);
        \$event->setParameter('orders', \$displayOrders);
        \$event->setParameter('virtual_account', \$this->eccubeConfig['gmo_epsilon']['pay_name']['virtual_account']);
        \$event->setParameter('payment_status_id', PaymentStatus::CHARGED);
        \$event->addSnippet('@EccubePaymentLite42/admin/Order/index.twig');
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
        return "EccubePaymentLite42/EventListener/EventSubscriber/Admin/Order/OrderIndexEventSubscriber.php";
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
use Eccube\\Entity\\Shipping;
use Eccube\\Event\\TemplateEvent;
use Eccube\\Repository\\OrderRepository;
use Plugin\\EccubePaymentLite42\\Entity\\PaymentStatus;
use Plugin\\EccubePaymentLite42\\Repository\\PaymentStatusRepository;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class OrderIndexEventSubscriber implements EventSubscriberInterface
{
    /**
     * @var OrderRepository
     */
    private \$orderRepository;
    /**
     * @var PaymentStatusRepository
     */
    private \$paymentStatusRepository;
    /**
     * @var EccubeConfig
     */
    private \$eccubeConfig;

    public function __construct(
        OrderRepository \$orderRepository,
        PaymentStatusRepository \$paymentStatusRepository,
        EccubeConfig \$eccubeConfig
    ) {
        \$this->orderRepository = \$orderRepository;
        \$this->paymentStatusRepository = \$paymentStatusRepository;
        \$this->eccubeConfig = \$eccubeConfig;
    }

    public static function getSubscribedEvents()
    {
        return [
            '@admin/Order/index.twig' => 'index',
        ];
    }

    public function index(TemplateEvent \$event)
    {
        \$orderList = \$event->getParameter('pagination')->getItems();
        \$orders = [];
        foreach (\$orderList as \$key => \$Order) {
            /* @var Order \$Order */
            \$orders[\$key] = \$Order->toArray();
            \$orders[\$key]['PaymentStatus'] = is_null(\$orders[\$key]['PaymentStatus']) ? null : \$orders[\$key]['PaymentStatus']->toArray();
            \$orders[\$key]['Payment']['payment_method'] = is_null(\$orders[\$key]['payment_method']) ? null : \$orders[\$key]['payment_method'];
            \$orders[\$key]['Shippings'] = is_null(\$orders[\$key]['Shippings']) ? null : \$orders[\$key]['Shippings']->toArray();
            foreach (\$Order->getShippings() as \$index => \$Shipping) {
                /* @var Shipping \$Shipping */
                \$orders[\$key]['Shippings'][\$index] = \$Shipping->toArray();
            }
        }
        \$displayOrders = [];
        foreach (\$orders as \$key => \$order) {
            \$displayOrders[\$key]['PaymentStatus'] = \$order['PaymentStatus'];
            \$displayOrders[\$key]['payment_method'] = \$order['payment_method'];
            foreach (\$order['Shippings'] as \$index => \$shipping) {
                \$displayOrders[\$key]['Shippings'][\$index] = ['id' => \$shipping['id']];
            }
        }
        \$PaymentStatuses = \$this->paymentStatusRepository->findBy([
            'id' => [
                PaymentStatus::CHARGED,
                PaymentStatus::SHIPPING_REGISTRATION,
                PaymentStatus::CANCEL,
            ],
        ], []);
        \$event->setParameter('PaymentStatuses', \$PaymentStatuses);
        \$event->setParameter('orders', \$displayOrders);
        \$event->setParameter('virtual_account', \$this->eccubeConfig['gmo_epsilon']['pay_name']['virtual_account']);
        \$event->setParameter('payment_status_id', PaymentStatus::CHARGED);
        \$event->addSnippet('@EccubePaymentLite42/admin/Order/index.twig');
    }
}
", "EccubePaymentLite42/EventListener/EventSubscriber/Admin/Order/OrderIndexEventSubscriber.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\EventListener\\EventSubscriber\\Admin\\Order\\OrderIndexEventSubscriber.php");
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
