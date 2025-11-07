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

/* EccubePaymentLite42/Controller/Front/PaymentNotification/ConveniAndPayeasyNotificationController.php */
class __TwigTemplate_0b949f702c5dba87ffde5a0e1cad6b74 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Front/PaymentNotification/ConveniAndPayeasyNotificationController.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Front/PaymentNotification/ConveniAndPayeasyNotificationController.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Controller\\Front\\PaymentNotification;

use Eccube\\Controller\\AbstractController;
use Eccube\\Entity\\Master\\OrderStatus;
use Eccube\\Repository\\Master\\OrderStatusRepository;
use Eccube\\Repository\\OrderRepository;
use Plugin\\EccubePaymentLite42\\Entity\\PaymentStatus;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonOrderNoService;
use Plugin\\EccubePaymentLite42\\Repository\\PaymentStatusRepository;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\Annotation\\Route;

class ConveniAndPayeasyNotificationController extends AbstractController
{
    /**
     * @var OrderRepository
     */
    private \$orderRepository;
    /**
     * @var OrderStatusRepository
     */
    private \$orderStatusRepository;
    /**
     * @var GmoEpsilonOrderNoService
     */
    private \$gmoEpsilonOrderNoService;
    /**
     * @var PaymentStatusRepository
     */
    private \$paymentStatusRepository;

    public function __construct(
        OrderRepository \$orderRepository,
        OrderStatusRepository \$orderStatusRepository,
        GmoEpsilonOrderNoService \$gmoEpsilonOrderNoService,
        PaymentStatusRepository \$paymentStatusRepository
    ) {
        \$this->orderRepository = \$orderRepository;
        \$this->orderStatusRepository = \$orderStatusRepository;
        \$this->gmoEpsilonOrderNoService = \$gmoEpsilonOrderNoService;
        \$this->paymentStatusRepository = \$paymentStatusRepository;
    }

    /**
     * @Route(
     *     \"/epsilon_receive_conveni_and_payeasy_complete\",
     *     name=\"eccube_payment_lite42_conveni_and_payeasy_notification\"
     * )
     */
    public function receiveConveniAndPayeasyComplete(Request \$request): Response
    {
        logs('gmo_epsilon')->info('コンビニ・ペイジー決済入金結果通知: start.');
        logs('gmo_epsilon')->info('コンビニ・ペイジー決済入金結果通知: '.print_r(\$request->getContent(), true));
        // 受注情報を取得
        \$Order = \$this->orderRepository->findOneBy([
            'order_no' => \$this->gmoEpsilonOrderNoService->get(\$request->get('order_number')),
            'trans_code' => \$request->get('trans_code'),
        ]);

        if (!\$Order) {
            logs('gmo_epsilon')->warning('コンビニ・ペイジー決済入金結果通知: Not Found Order. POST param argument '.print_r(\$request->getContent(), true));

            // 異常応答
            return new Response(0);
        }

        if ((int) \$request->get('paid') === 1) {
            // 受注ステータスを入金済みへ変更
            \$OrderStatus = \$this->orderStatusRepository->find(OrderStatus::PAID);
            \$Order->setOrderStatus(\$OrderStatus);

            // イプシロン決済ステータスを更新
            \$PaymentStatus = \$this->paymentStatusRepository->find(PaymentStatus::CHARGED);
            \$Order->setPaymentStatus(\$PaymentStatus);
            \$Order->setPaymentDate(new \\DateTime());

            \$this->entityManager->flush();
            logs('gmo_epsilon')->info('コンビニ・ペイジー決済入金結果通知: 受注ステータスを入金済みに、決済ステータスを課金済みに変更しました');
        }

        logs('gmo_epsilon')->info('コンビニ・ペイジー決済入金結果通知: end.');

        // 正常応答
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
        return "EccubePaymentLite42/Controller/Front/PaymentNotification/ConveniAndPayeasyNotificationController.php";
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
use Eccube\\Entity\\Master\\OrderStatus;
use Eccube\\Repository\\Master\\OrderStatusRepository;
use Eccube\\Repository\\OrderRepository;
use Plugin\\EccubePaymentLite42\\Entity\\PaymentStatus;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonOrderNoService;
use Plugin\\EccubePaymentLite42\\Repository\\PaymentStatusRepository;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\Annotation\\Route;

class ConveniAndPayeasyNotificationController extends AbstractController
{
    /**
     * @var OrderRepository
     */
    private \$orderRepository;
    /**
     * @var OrderStatusRepository
     */
    private \$orderStatusRepository;
    /**
     * @var GmoEpsilonOrderNoService
     */
    private \$gmoEpsilonOrderNoService;
    /**
     * @var PaymentStatusRepository
     */
    private \$paymentStatusRepository;

    public function __construct(
        OrderRepository \$orderRepository,
        OrderStatusRepository \$orderStatusRepository,
        GmoEpsilonOrderNoService \$gmoEpsilonOrderNoService,
        PaymentStatusRepository \$paymentStatusRepository
    ) {
        \$this->orderRepository = \$orderRepository;
        \$this->orderStatusRepository = \$orderStatusRepository;
        \$this->gmoEpsilonOrderNoService = \$gmoEpsilonOrderNoService;
        \$this->paymentStatusRepository = \$paymentStatusRepository;
    }

    /**
     * @Route(
     *     \"/epsilon_receive_conveni_and_payeasy_complete\",
     *     name=\"eccube_payment_lite42_conveni_and_payeasy_notification\"
     * )
     */
    public function receiveConveniAndPayeasyComplete(Request \$request): Response
    {
        logs('gmo_epsilon')->info('コンビニ・ペイジー決済入金結果通知: start.');
        logs('gmo_epsilon')->info('コンビニ・ペイジー決済入金結果通知: '.print_r(\$request->getContent(), true));
        // 受注情報を取得
        \$Order = \$this->orderRepository->findOneBy([
            'order_no' => \$this->gmoEpsilonOrderNoService->get(\$request->get('order_number')),
            'trans_code' => \$request->get('trans_code'),
        ]);

        if (!\$Order) {
            logs('gmo_epsilon')->warning('コンビニ・ペイジー決済入金結果通知: Not Found Order. POST param argument '.print_r(\$request->getContent(), true));

            // 異常応答
            return new Response(0);
        }

        if ((int) \$request->get('paid') === 1) {
            // 受注ステータスを入金済みへ変更
            \$OrderStatus = \$this->orderStatusRepository->find(OrderStatus::PAID);
            \$Order->setOrderStatus(\$OrderStatus);

            // イプシロン決済ステータスを更新
            \$PaymentStatus = \$this->paymentStatusRepository->find(PaymentStatus::CHARGED);
            \$Order->setPaymentStatus(\$PaymentStatus);
            \$Order->setPaymentDate(new \\DateTime());

            \$this->entityManager->flush();
            logs('gmo_epsilon')->info('コンビニ・ペイジー決済入金結果通知: 受注ステータスを入金済みに、決済ステータスを課金済みに変更しました');
        }

        logs('gmo_epsilon')->info('コンビニ・ペイジー決済入金結果通知: end.');

        // 正常応答
        return new Response(1);
    }
}
", "EccubePaymentLite42/Controller/Front/PaymentNotification/ConveniAndPayeasyNotificationController.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Controller\\Front\\PaymentNotification\\ConveniAndPayeasyNotificationController.php");
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
