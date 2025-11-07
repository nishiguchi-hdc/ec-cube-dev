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

/* EccubePaymentLite42/EventListener/EventSubscriber/Admin/Order/OrderEditRequestEventSubscriber.php */
class __TwigTemplate_1ea3fa92cbf455009f1fd21f1bd4af68 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/EventListener/EventSubscriber/Admin/Order/OrderEditRequestEventSubscriber.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/EventListener/EventSubscriber/Admin/Order/OrderEditRequestEventSubscriber.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\EventListener\\EventSubscriber\\Admin\\Order;

use Eccube\\Entity\\Order;
use Eccube\\Event\\EccubeEvents;
use Eccube\\Event\\EventArgs;
use Plugin\\EccubePaymentLite42\\Entity\\PaymentStatus;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestCancelPaymentService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestSalesPaymentService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestShippingRegistrationService;
use Plugin\\EccubePaymentLite42\\Service\\Method\\Reg_Credit;
use Plugin\\EccubePaymentLite42\\Service\\UpdatePaymentStatusService;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Form\\Form;
use Symfony\\Component\\HttpFoundation\\RequestStack;

class OrderEditRequestEventSubscriber implements EventSubscriberInterface
{
    /**
     * @var RequestCancelPaymentService
     */
    private \$requestCancelPaymentService;
    /**
     * @var SessionInterface
     */
    private \$session;
    /**
     * @var UpdatePaymentStatusService
     */
    private \$updatePaymentStatusService;
    /**
     * @var RequestSalesPaymentService
     */
    private \$requestSalesPaymentService;
    /**
     * @var RequestShippingRegistrationService
     */
    private \$requestShippingRegistrationService;

    public function __construct(
        RequestCancelPaymentService \$requestCancelPaymentService,
        RequestSalesPaymentService \$requestSalesPaymentService,
        RequestShippingRegistrationService \$requestShippingRegistrationService,
        UpdatePaymentStatusService \$updatePaymentStatusService,
        RequestStack \$requestStack
    ) {
        \$this->requestCancelPaymentService = \$requestCancelPaymentService;
        \$this->requestSalesPaymentService = \$requestSalesPaymentService;
        \$this->requestShippingRegistrationService = \$requestShippingRegistrationService;
        \$this->updatePaymentStatusService = \$updatePaymentStatusService;
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
        // mapped => falseで定義しているため, フォームから決済ステータスを取得する.
        /** @var Form \$form */
        \$form = \$eventArgs->getArgument('form');
        if (\$eventArgs->getRequest()->attributes->get('_route') === 'admin_order_new') {
            if (\$TargetOrder->getPayment()->getMethodClass() !== Reg_Credit::class) {
                return;
            }
            \$this->addWarningMessage('イプシロン決済サービスに登録済みクレジットカード決済登録は行っておりません。「決済を登録する」ボタンより決済処理を完了させてください。');

            return;
        }
        // 決済ステータスが未入力の場合は処理を行なわない。
        if (is_null(\$form->get('PaymentStatus')->getData())) {
            return;
        }
        /** @var PaymentStatus \$PaymentStatus */
        \$paymentStatusId = \$form->get('PaymentStatus')->getData()->getId();

        // 受注登録（編集）画面
        if (\$paymentStatusId === PaymentStatus::CHARGED) {
            \$results = \$this
                ->requestSalesPaymentService
                ->handle(\$TargetOrder);
            // リクエストの成否に関わらず、決済ステータスは更新する。
            \$this
                ->updatePaymentStatusService
                ->handle(\$TargetOrder, \$paymentStatusId);
            \$this->addSuccessMessage('受注情報の決済ステータスを「課金済み」に変更しました');
            if (\$results['status'] === 'OK') {
                \$this->addSuccessMessage(\$results['message']);

                return;
            }
            \$this->addWarningMessage(\$results['message']);

            return;
        }
        if (\$paymentStatusId === PaymentStatus::CANCEL) {
            \$results = \$this
                ->requestCancelPaymentService
                ->handle(\$TargetOrder);
            // リクエストの成否に関わらず決済ステータスを更新する
            \$this
                ->updatePaymentStatusService
                ->handle(\$TargetOrder, \$paymentStatusId);
            \$this->addSuccessMessage('受注情報の決済ステータスを「キャンセル」に変更しました');
            if (\$results['status'] === 'OK') {
                \$this->addSuccessMessage(\$results['message']);

                return;
            }
            \$this->addWarningMessage(\$results['message']);

            return;
        }
        if (\$paymentStatusId === PaymentStatus::SHIPPING_REGISTRATION) {
            \$results = \$this
                ->requestShippingRegistrationService
                ->handle(\$TargetOrder);
            // リクエストの成否に関わらず決済ステータスを更新する
            \$this
                ->updatePaymentStatusService
                ->handle(\$TargetOrder, \$paymentStatusId);
            \$this->addSuccessMessage('受注情報の決済ステータスを「出荷登録中」に変更しました');
            if (\$results['status'] === 'OK') {
                \$this->addSuccessMessage(\$results['message']);

                return;
            }
            \$this->addWarningMessage(\$results['message']);

            return;
        }
        if (\$paymentStatusId === PaymentStatus::TEMPORARY_SALES) {
            \$this
                ->updatePaymentStatusService
                ->handle(\$TargetOrder, \$paymentStatusId);
            \$this->addSuccessMessage('受注情報の決済ステータスを「仮売上」に変更しました');

            return;
        }
        if (\$paymentStatusId === PaymentStatus::UNPAID) {
            \$this
                ->updatePaymentStatusService
                ->handle(\$TargetOrder, \$paymentStatusId);
            \$this->addSuccessMessage('受注情報の決済ステータスを「未課金」に変更しました');

            return;
        }
        if (\$paymentStatusId === PaymentStatus::UNDER_REVIEW) {
            \$this
                ->updatePaymentStatusService
                ->handle(\$TargetOrder, \$paymentStatusId);
            \$this->addSuccessMessage('受注情報の決済ステータスを「審査中」に変更しました');

            return;
        }
        if (\$paymentStatusId === PaymentStatus::EXAMINATION_NG) {
            \$this
                ->updatePaymentStatusService
                ->handle(\$TargetOrder, \$paymentStatusId);
            \$this->addSuccessMessage('受注情報の決済ステータスを「審査NG」に変更しました');

            return;
        }
    }

    private function addSuccessMessage(\$message)
    {
        \$this
            ->session
            ->getFlashBag()
            ->add('eccube.admin.success', \$message);
    }

    private function addWarningMessage(\$message)
    {
        \$this
            ->session
            ->getFlashBag()
            ->add('eccube.admin.warning', \$message);
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
        return "EccubePaymentLite42/EventListener/EventSubscriber/Admin/Order/OrderEditRequestEventSubscriber.php";
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

use Eccube\\Entity\\Order;
use Eccube\\Event\\EccubeEvents;
use Eccube\\Event\\EventArgs;
use Plugin\\EccubePaymentLite42\\Entity\\PaymentStatus;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestCancelPaymentService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestSalesPaymentService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestShippingRegistrationService;
use Plugin\\EccubePaymentLite42\\Service\\Method\\Reg_Credit;
use Plugin\\EccubePaymentLite42\\Service\\UpdatePaymentStatusService;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Form\\Form;
use Symfony\\Component\\HttpFoundation\\RequestStack;

class OrderEditRequestEventSubscriber implements EventSubscriberInterface
{
    /**
     * @var RequestCancelPaymentService
     */
    private \$requestCancelPaymentService;
    /**
     * @var SessionInterface
     */
    private \$session;
    /**
     * @var UpdatePaymentStatusService
     */
    private \$updatePaymentStatusService;
    /**
     * @var RequestSalesPaymentService
     */
    private \$requestSalesPaymentService;
    /**
     * @var RequestShippingRegistrationService
     */
    private \$requestShippingRegistrationService;

    public function __construct(
        RequestCancelPaymentService \$requestCancelPaymentService,
        RequestSalesPaymentService \$requestSalesPaymentService,
        RequestShippingRegistrationService \$requestShippingRegistrationService,
        UpdatePaymentStatusService \$updatePaymentStatusService,
        RequestStack \$requestStack
    ) {
        \$this->requestCancelPaymentService = \$requestCancelPaymentService;
        \$this->requestSalesPaymentService = \$requestSalesPaymentService;
        \$this->requestShippingRegistrationService = \$requestShippingRegistrationService;
        \$this->updatePaymentStatusService = \$updatePaymentStatusService;
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
        // mapped => falseで定義しているため, フォームから決済ステータスを取得する.
        /** @var Form \$form */
        \$form = \$eventArgs->getArgument('form');
        if (\$eventArgs->getRequest()->attributes->get('_route') === 'admin_order_new') {
            if (\$TargetOrder->getPayment()->getMethodClass() !== Reg_Credit::class) {
                return;
            }
            \$this->addWarningMessage('イプシロン決済サービスに登録済みクレジットカード決済登録は行っておりません。「決済を登録する」ボタンより決済処理を完了させてください。');

            return;
        }
        // 決済ステータスが未入力の場合は処理を行なわない。
        if (is_null(\$form->get('PaymentStatus')->getData())) {
            return;
        }
        /** @var PaymentStatus \$PaymentStatus */
        \$paymentStatusId = \$form->get('PaymentStatus')->getData()->getId();

        // 受注登録（編集）画面
        if (\$paymentStatusId === PaymentStatus::CHARGED) {
            \$results = \$this
                ->requestSalesPaymentService
                ->handle(\$TargetOrder);
            // リクエストの成否に関わらず、決済ステータスは更新する。
            \$this
                ->updatePaymentStatusService
                ->handle(\$TargetOrder, \$paymentStatusId);
            \$this->addSuccessMessage('受注情報の決済ステータスを「課金済み」に変更しました');
            if (\$results['status'] === 'OK') {
                \$this->addSuccessMessage(\$results['message']);

                return;
            }
            \$this->addWarningMessage(\$results['message']);

            return;
        }
        if (\$paymentStatusId === PaymentStatus::CANCEL) {
            \$results = \$this
                ->requestCancelPaymentService
                ->handle(\$TargetOrder);
            // リクエストの成否に関わらず決済ステータスを更新する
            \$this
                ->updatePaymentStatusService
                ->handle(\$TargetOrder, \$paymentStatusId);
            \$this->addSuccessMessage('受注情報の決済ステータスを「キャンセル」に変更しました');
            if (\$results['status'] === 'OK') {
                \$this->addSuccessMessage(\$results['message']);

                return;
            }
            \$this->addWarningMessage(\$results['message']);

            return;
        }
        if (\$paymentStatusId === PaymentStatus::SHIPPING_REGISTRATION) {
            \$results = \$this
                ->requestShippingRegistrationService
                ->handle(\$TargetOrder);
            // リクエストの成否に関わらず決済ステータスを更新する
            \$this
                ->updatePaymentStatusService
                ->handle(\$TargetOrder, \$paymentStatusId);
            \$this->addSuccessMessage('受注情報の決済ステータスを「出荷登録中」に変更しました');
            if (\$results['status'] === 'OK') {
                \$this->addSuccessMessage(\$results['message']);

                return;
            }
            \$this->addWarningMessage(\$results['message']);

            return;
        }
        if (\$paymentStatusId === PaymentStatus::TEMPORARY_SALES) {
            \$this
                ->updatePaymentStatusService
                ->handle(\$TargetOrder, \$paymentStatusId);
            \$this->addSuccessMessage('受注情報の決済ステータスを「仮売上」に変更しました');

            return;
        }
        if (\$paymentStatusId === PaymentStatus::UNPAID) {
            \$this
                ->updatePaymentStatusService
                ->handle(\$TargetOrder, \$paymentStatusId);
            \$this->addSuccessMessage('受注情報の決済ステータスを「未課金」に変更しました');

            return;
        }
        if (\$paymentStatusId === PaymentStatus::UNDER_REVIEW) {
            \$this
                ->updatePaymentStatusService
                ->handle(\$TargetOrder, \$paymentStatusId);
            \$this->addSuccessMessage('受注情報の決済ステータスを「審査中」に変更しました');

            return;
        }
        if (\$paymentStatusId === PaymentStatus::EXAMINATION_NG) {
            \$this
                ->updatePaymentStatusService
                ->handle(\$TargetOrder, \$paymentStatusId);
            \$this->addSuccessMessage('受注情報の決済ステータスを「審査NG」に変更しました');

            return;
        }
    }

    private function addSuccessMessage(\$message)
    {
        \$this
            ->session
            ->getFlashBag()
            ->add('eccube.admin.success', \$message);
    }

    private function addWarningMessage(\$message)
    {
        \$this
            ->session
            ->getFlashBag()
            ->add('eccube.admin.warning', \$message);
    }
}
", "EccubePaymentLite42/EventListener/EventSubscriber/Admin/Order/OrderEditRequestEventSubscriber.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\EventListener\\EventSubscriber\\Admin\\Order\\OrderEditRequestEventSubscriber.php");
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
