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

/* EccubePaymentLite42/Controller/Admin/Order/ChangePaymentStatusController.php */
class __TwigTemplate_2e6b83f0a0794c3abca4de82df29dd0b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Admin/Order/ChangePaymentStatusController.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Admin/Order/ChangePaymentStatusController.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Controller\\Admin\\Order;

use Eccube\\Controller\\AbstractController;
use Eccube\\Entity\\Order;
use Eccube\\Entity\\Shipping;
use Eccube\\Repository\\OrderRepository;
use Eccube\\Repository\\ShippingRepository;
use Plugin\\EccubePaymentLite42\\Entity\\PaymentStatus;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Routing\\Annotation\\Route;

class ChangePaymentStatusController extends AbstractController
{
    /**
     * @var OrderRepository
     */
    private \$orderRepository;
    /**
     * @var ShippingRepository
     */
    private \$shippingRepository;

    public function __construct(
        OrderRepository \$orderRepository,
        ShippingRepository \$shippingRepository
    ) {
        \$this->orderRepository = \$orderRepository;
        \$this->shippingRepository = \$shippingRepository;
    }

    /**
     * @Route(
     *     \"/%eccube_admin_route%/eccube_payment_lite/order/change_payment_status\",
     *     name=\"eccube_payment_lite42_admin_change_payment_status\",
     *     methods={\"POST\"}
     * )
     */
    public function index(Request \$request)
    {
        \$shippingId = (int) \$request->request->get('shippingId');
        /** @var Shipping \$Shipping */
        \$Shipping = \$this->shippingRepository->find(\$shippingId);
        \$orderId = \$Shipping->getOrder()->getId();
        // 変更対象の決済ステータスを取得
        \$paymentStatusId = (int) \$request->request->get('paymentStatusId');
        /** @var Order \$Order */
        \$Order = \$this->orderRepository->find(\$orderId);
        if (is_null(\$Order)) {
            return \$this->json([
                'status' => 'NG',
                'message' => 'ID: '.\$Order->getId().'の受注がありませんでした。',
            ]);
        }

        if (\$paymentStatusId === PaymentStatus::CANCEL) {
            return \$this->forwardToRoute(
                'eccube_payment_lite42_change_payment_status_to_cancel',
                [],
                ['Shipping' => \$Shipping]
            );
        }
        if (\$paymentStatusId === PaymentStatus::CHARGED) {
            return \$this->forwardToRoute(
                'eccube_payment_lite42_change_payment_status_to_charged',
                [],
                ['Shipping' => \$Shipping]
            );
        }

        if (\$paymentStatusId === PaymentStatus::SHIPPING_REGISTRATION) {
            return \$this->forwardToRoute(
                'eccube_payment_lite42_change_payment_status_to_shipping_registration',
                [],
                ['Shipping' => \$Shipping]
            );
        }

        return \$this->json([
            'status' => 'NG',
            'message' => 'ID: '.\$Order->getId().'の受注の決済ステータスは、一括変更できません。',
        ]);
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
        return "EccubePaymentLite42/Controller/Admin/Order/ChangePaymentStatusController.php";
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

namespace Plugin\\EccubePaymentLite42\\Controller\\Admin\\Order;

use Eccube\\Controller\\AbstractController;
use Eccube\\Entity\\Order;
use Eccube\\Entity\\Shipping;
use Eccube\\Repository\\OrderRepository;
use Eccube\\Repository\\ShippingRepository;
use Plugin\\EccubePaymentLite42\\Entity\\PaymentStatus;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Routing\\Annotation\\Route;

class ChangePaymentStatusController extends AbstractController
{
    /**
     * @var OrderRepository
     */
    private \$orderRepository;
    /**
     * @var ShippingRepository
     */
    private \$shippingRepository;

    public function __construct(
        OrderRepository \$orderRepository,
        ShippingRepository \$shippingRepository
    ) {
        \$this->orderRepository = \$orderRepository;
        \$this->shippingRepository = \$shippingRepository;
    }

    /**
     * @Route(
     *     \"/%eccube_admin_route%/eccube_payment_lite/order/change_payment_status\",
     *     name=\"eccube_payment_lite42_admin_change_payment_status\",
     *     methods={\"POST\"}
     * )
     */
    public function index(Request \$request)
    {
        \$shippingId = (int) \$request->request->get('shippingId');
        /** @var Shipping \$Shipping */
        \$Shipping = \$this->shippingRepository->find(\$shippingId);
        \$orderId = \$Shipping->getOrder()->getId();
        // 変更対象の決済ステータスを取得
        \$paymentStatusId = (int) \$request->request->get('paymentStatusId');
        /** @var Order \$Order */
        \$Order = \$this->orderRepository->find(\$orderId);
        if (is_null(\$Order)) {
            return \$this->json([
                'status' => 'NG',
                'message' => 'ID: '.\$Order->getId().'の受注がありませんでした。',
            ]);
        }

        if (\$paymentStatusId === PaymentStatus::CANCEL) {
            return \$this->forwardToRoute(
                'eccube_payment_lite42_change_payment_status_to_cancel',
                [],
                ['Shipping' => \$Shipping]
            );
        }
        if (\$paymentStatusId === PaymentStatus::CHARGED) {
            return \$this->forwardToRoute(
                'eccube_payment_lite42_change_payment_status_to_charged',
                [],
                ['Shipping' => \$Shipping]
            );
        }

        if (\$paymentStatusId === PaymentStatus::SHIPPING_REGISTRATION) {
            return \$this->forwardToRoute(
                'eccube_payment_lite42_change_payment_status_to_shipping_registration',
                [],
                ['Shipping' => \$Shipping]
            );
        }

        return \$this->json([
            'status' => 'NG',
            'message' => 'ID: '.\$Order->getId().'の受注の決済ステータスは、一括変更できません。',
        ]);
    }
}
", "EccubePaymentLite42/Controller/Admin/Order/ChangePaymentStatusController.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Controller\\Admin\\Order\\ChangePaymentStatusController.php");
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
