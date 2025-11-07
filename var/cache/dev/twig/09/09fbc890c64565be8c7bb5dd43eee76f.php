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

/* EccubePaymentLite42/Controller/Front/PaymentNotification/DeferredPaymentStatusChangeNotificationController.php */
class __TwigTemplate_a28c93d8f769c451d2308ecae6bde5b5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Front/PaymentNotification/DeferredPaymentStatusChangeNotificationController.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Front/PaymentNotification/DeferredPaymentStatusChangeNotificationController.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Controller\\Front\\PaymentNotification;

use Eccube\\Controller\\AbstractController;
use Eccube\\Entity\\Order;
use Eccube\\Repository\\OrderRepository;
use Plugin\\EccubePaymentLite42\\Entity\\PaymentStatus;
use Plugin\\EccubePaymentLite42\\Repository\\PaymentStatusRepository;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\Annotation\\Route;

class DeferredPaymentStatusChangeNotificationController extends AbstractController
{
    /**
     * @var OrderRepository
     */
    private \$orderRepository;
    /**
     * @var PaymentStatusRepository
     */
    private \$paymentStatusRepository;

    public function __construct(
        OrderRepository \$orderRepository,
        PaymentStatusRepository \$paymentStatusRepository
    ) {
        \$this->orderRepository = \$orderRepository;
        \$this->paymentStatusRepository = \$paymentStatusRepository;
    }

    /**
     * @Route(
     *     \"/epsilon_deferred_payment_status_change_notification\",
     *     name=\"eccube_payment_lite42_deferred_payment_status_change_notification\"
     * )
     */
    public function index(Request \$request)
    {
        logs('gmo_epsilon')->info('後払い決済ステータス変更通知: start.');
        logs('gmo_epsilon')->info('POST param argument '.print_r(\$request->getContent(), true));
        /** @var Order \$Order */
        \$Order = \$this->orderRepository->findOneBy([
            'gmo_epsilon_order_no' => \$request->get('order_number'),
            'trans_code' => \$request->get('trans_code'),
            'payment_method' => 'GMO後払い',
        ]);
        if (!\$Order) {
            logs('gmo_epsilon')
                ->addWarning('後払い決済ステータス変更通知: 対象の受注が見つかりません。');

            return new Response(0);
        }

        /** @var PaymentStatus \$PaymentStatus */
        \$PaymentStatus = \$this
            ->paymentStatusRepository
            ->find(\$request->get('state'));
        \$Order->setPaymentStatus(\$PaymentStatus);
        \$this->entityManager->persist(\$Order);
        \$this->entityManager->flush();
        logs('gmo_epsilon')
            ->info('後払い決済ステータス変更通知: end.');

        return new Response(1);
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
        return "EccubePaymentLite42/Controller/Front/PaymentNotification/DeferredPaymentStatusChangeNotificationController.php";
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

namespace Plugin\\EccubePaymentLite42\\Controller\\Front\\PaymentNotification;

use Eccube\\Controller\\AbstractController;
use Eccube\\Entity\\Order;
use Eccube\\Repository\\OrderRepository;
use Plugin\\EccubePaymentLite42\\Entity\\PaymentStatus;
use Plugin\\EccubePaymentLite42\\Repository\\PaymentStatusRepository;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\Annotation\\Route;

class DeferredPaymentStatusChangeNotificationController extends AbstractController
{
    /**
     * @var OrderRepository
     */
    private \$orderRepository;
    /**
     * @var PaymentStatusRepository
     */
    private \$paymentStatusRepository;

    public function __construct(
        OrderRepository \$orderRepository,
        PaymentStatusRepository \$paymentStatusRepository
    ) {
        \$this->orderRepository = \$orderRepository;
        \$this->paymentStatusRepository = \$paymentStatusRepository;
    }

    /**
     * @Route(
     *     \"/epsilon_deferred_payment_status_change_notification\",
     *     name=\"eccube_payment_lite42_deferred_payment_status_change_notification\"
     * )
     */
    public function index(Request \$request)
    {
        logs('gmo_epsilon')->info('後払い決済ステータス変更通知: start.');
        logs('gmo_epsilon')->info('POST param argument '.print_r(\$request->getContent(), true));
        /** @var Order \$Order */
        \$Order = \$this->orderRepository->findOneBy([
            'gmo_epsilon_order_no' => \$request->get('order_number'),
            'trans_code' => \$request->get('trans_code'),
            'payment_method' => 'GMO後払い',
        ]);
        if (!\$Order) {
            logs('gmo_epsilon')
                ->addWarning('後払い決済ステータス変更通知: 対象の受注が見つかりません。');

            return new Response(0);
        }

        /** @var PaymentStatus \$PaymentStatus */
        \$PaymentStatus = \$this
            ->paymentStatusRepository
            ->find(\$request->get('state'));
        \$Order->setPaymentStatus(\$PaymentStatus);
        \$this->entityManager->persist(\$Order);
        \$this->entityManager->flush();
        logs('gmo_epsilon')
            ->info('後払い決済ステータス変更通知: end.');

        return new Response(1);
    }
}
", "EccubePaymentLite42/Controller/Front/PaymentNotification/DeferredPaymentStatusChangeNotificationController.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Controller\\Front\\PaymentNotification\\DeferredPaymentStatusChangeNotificationController.php");
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
