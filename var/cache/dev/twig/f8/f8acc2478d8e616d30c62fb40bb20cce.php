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

/* EccubePaymentLite42/Controller/Front/Mypage/RegularNextDeliveryDateController.php */
class __TwigTemplate_015ebf9d592a5ebfae3aa174ec93ae7f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Front/Mypage/RegularNextDeliveryDateController.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Front/Mypage/RegularNextDeliveryDateController.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Controller\\Front\\Mypage;

use Eccube\\Controller\\AbstractController;
use Plugin\\EccubePaymentLite42\\Entity\\MyPageRegularSetting;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrder;
use Plugin\\EccubePaymentLite42\\Entity\\RegularShipping;
use Plugin\\EccubePaymentLite42\\Entity\\RegularStatus;
use Plugin\\EccubePaymentLite42\\Form\\Type\\Front\\RegularNextDeliveryDateType;
use Plugin\\EccubePaymentLite42\\Service\\IsActiveRegularService;
use Plugin\\EccubePaymentLite42\\Service\\IsMypageRegularSettingService;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Routing\\Annotation\\Route;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;

class RegularNextDeliveryDateController extends AbstractController
{
    /**
     * @var IsMypageRegularSettingService
     */
    private \$isMypageRegularSettingService;
    /**
     * @var IsActiveRegularService
     */
    private \$isActiveRegularService;

    public function __construct(
        IsMypageRegularSettingService \$isMypageRegularSettingService,
        IsActiveRegularService \$isActiveRegularService
    ) {
        \$this->isMypageRegularSettingService = \$isMypageRegularSettingService;
        \$this->isActiveRegularService = \$isActiveRegularService;
    }

    /**
     * お届け予定日変更画面.
     *
     * @Route(
     *     \"/mypage/eccube_payment_lite/regular/{id}/next_delivery_date\",
     *     name=\"eccube_payment_lite42_mypage_regular_next_delivery_date\",
     *     requirements={\"id\" = \"\\d+\"}
     * )
     * @Template(\"@EccubePaymentLite42/default/Mypage/regular_next_delivery_date.twig\")
     */
    public function index(Request \$request, RegularOrder \$RegularOrder)
    {
        if (!\$this->isActiveRegularService->isActive()) {
            return \$this->redirectToRoute('mypage');
        }
        if (\$RegularOrder->getCustomer()->getId() !== \$this->getUser()->getId()) {
            throw new NotFoundHttpException();
        }
        if (\$RegularOrder->getRegularStatus()->getId() !== RegularStatus::CONTINUE) {
            return \$this->redirectToRoute('eccube_payment_lite42_mypage_regular_list');
        }
        if (!\$this->isMypageRegularSettingService->handle(MyPageRegularSetting::NEXT_DELIVERY_DATE)) {
            return \$this->redirectToRoute('eccube_payment_lite42_mypage_regular_list');
        }
        /** @var RegularShipping \$RegularShipping */
        \$RegularShipping = \$RegularOrder->getRegularShippings()->first();
        \$form = \$this->createForm(RegularNextDeliveryDateType::class, \$RegularShipping);

        \$form->handleRequest(\$request);
        if (\$form->isSubmitted() && \$form->isValid()) {
            \$time_id = isset(\$form->getData()['shipping_delivery_time']['id']) ? \$form->getData()['shipping_delivery_time']['id'] : null;
            \$RegularShipping->setTimeId(\$time_id);
            \$this->entityManager->persist(\$RegularShipping);
            \$this->entityManager->flush();
            \$this->addWarning('定期商品の次回お届け予定日を変更しました。');

            return \$this->redirectToRoute('eccube_payment_lite42_mypage_regular_complete', [
                'id' => \$RegularOrder->getId(),
            ]);
        }

        return [
            'RegularOrder' => \$RegularOrder,
            'form' => \$form->createView(),
        ];
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
        return "EccubePaymentLite42/Controller/Front/Mypage/RegularNextDeliveryDateController.php";
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

namespace Plugin\\EccubePaymentLite42\\Controller\\Front\\Mypage;

use Eccube\\Controller\\AbstractController;
use Plugin\\EccubePaymentLite42\\Entity\\MyPageRegularSetting;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrder;
use Plugin\\EccubePaymentLite42\\Entity\\RegularShipping;
use Plugin\\EccubePaymentLite42\\Entity\\RegularStatus;
use Plugin\\EccubePaymentLite42\\Form\\Type\\Front\\RegularNextDeliveryDateType;
use Plugin\\EccubePaymentLite42\\Service\\IsActiveRegularService;
use Plugin\\EccubePaymentLite42\\Service\\IsMypageRegularSettingService;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Routing\\Annotation\\Route;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;

class RegularNextDeliveryDateController extends AbstractController
{
    /**
     * @var IsMypageRegularSettingService
     */
    private \$isMypageRegularSettingService;
    /**
     * @var IsActiveRegularService
     */
    private \$isActiveRegularService;

    public function __construct(
        IsMypageRegularSettingService \$isMypageRegularSettingService,
        IsActiveRegularService \$isActiveRegularService
    ) {
        \$this->isMypageRegularSettingService = \$isMypageRegularSettingService;
        \$this->isActiveRegularService = \$isActiveRegularService;
    }

    /**
     * お届け予定日変更画面.
     *
     * @Route(
     *     \"/mypage/eccube_payment_lite/regular/{id}/next_delivery_date\",
     *     name=\"eccube_payment_lite42_mypage_regular_next_delivery_date\",
     *     requirements={\"id\" = \"\\d+\"}
     * )
     * @Template(\"@EccubePaymentLite42/default/Mypage/regular_next_delivery_date.twig\")
     */
    public function index(Request \$request, RegularOrder \$RegularOrder)
    {
        if (!\$this->isActiveRegularService->isActive()) {
            return \$this->redirectToRoute('mypage');
        }
        if (\$RegularOrder->getCustomer()->getId() !== \$this->getUser()->getId()) {
            throw new NotFoundHttpException();
        }
        if (\$RegularOrder->getRegularStatus()->getId() !== RegularStatus::CONTINUE) {
            return \$this->redirectToRoute('eccube_payment_lite42_mypage_regular_list');
        }
        if (!\$this->isMypageRegularSettingService->handle(MyPageRegularSetting::NEXT_DELIVERY_DATE)) {
            return \$this->redirectToRoute('eccube_payment_lite42_mypage_regular_list');
        }
        /** @var RegularShipping \$RegularShipping */
        \$RegularShipping = \$RegularOrder->getRegularShippings()->first();
        \$form = \$this->createForm(RegularNextDeliveryDateType::class, \$RegularShipping);

        \$form->handleRequest(\$request);
        if (\$form->isSubmitted() && \$form->isValid()) {
            \$time_id = isset(\$form->getData()['shipping_delivery_time']['id']) ? \$form->getData()['shipping_delivery_time']['id'] : null;
            \$RegularShipping->setTimeId(\$time_id);
            \$this->entityManager->persist(\$RegularShipping);
            \$this->entityManager->flush();
            \$this->addWarning('定期商品の次回お届け予定日を変更しました。');

            return \$this->redirectToRoute('eccube_payment_lite42_mypage_regular_complete', [
                'id' => \$RegularOrder->getId(),
            ]);
        }

        return [
            'RegularOrder' => \$RegularOrder,
            'form' => \$form->createView(),
        ];
    }
}
", "EccubePaymentLite42/Controller/Front/Mypage/RegularNextDeliveryDateController.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Controller\\Front\\Mypage\\RegularNextDeliveryDateController.php");
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
