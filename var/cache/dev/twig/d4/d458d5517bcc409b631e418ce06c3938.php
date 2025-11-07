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

/* EccubePaymentLite42/Controller/Front/Mypage/RegularCancelController.php */
class __TwigTemplate_2bdf9f486e8184821352359da33ad9dd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Front/Mypage/RegularCancelController.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Front/Mypage/RegularCancelController.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Controller\\Front\\Mypage;

use Eccube\\Controller\\AbstractController;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Entity\\MyPageRegularSetting;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrder;
use Plugin\\EccubePaymentLite42\\Entity\\RegularShipping;
use Plugin\\EccubePaymentLite42\\Entity\\RegularStatus;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Repository\\RegularOrderRepository;
use Plugin\\EccubePaymentLite42\\Repository\\RegularStatusRepository;
use Plugin\\EccubePaymentLite42\\Service\\IsActiveRegularService;
use Plugin\\EccubePaymentLite42\\Service\\IsMypageRegularSettingService;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Routing\\Annotation\\Route;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;

class RegularCancelController extends AbstractController
{
    /**
     * @var RegularOrderRepository
     */
    private \$regularOrderRepository;
    /**
     * @var RegularStatusRepository
     */
    private \$regularStatusRepository;
    /**
     * @var IsMypageRegularSettingService
     */
    private \$isMypageRegularSettingService;
    /**
     * @var IsActiveRegularService
     */
    private \$isActiveRegularService;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;

    public function __construct(
        RegularOrderRepository \$regularOrderRepository,
        RegularStatusRepository \$regularStatusRepository,
        IsMypageRegularSettingService \$isMypageRegularSettingService,
        IsActiveRegularService \$isActiveRegularService,
        ConfigRepository \$configRepository
    ) {
        \$this->regularOrderRepository = \$regularOrderRepository;
        \$this->regularStatusRepository = \$regularStatusRepository;
        \$this->isMypageRegularSettingService = \$isMypageRegularSettingService;
        \$this->isActiveRegularService = \$isActiveRegularService;
        \$this->configRepository = \$configRepository;
    }

    /**
     * 定期受注解約確認画面を表示する。
     *
     * @Route(
     *     \"/mypage/eccube_payment_lite/regular/{id}/cancel\",
     *     name=\"eccube_payment_lite42_mypage_regular_cancel\",
     *     requirements={\"id\" = \"\\d+\"})
     * @Template(\"@EccubePaymentLite42/default/Mypage/regular_cancel.twig\")
     */
    public function cancel(Request \$request)
    {
        if (!\$this->isActiveRegularService->isActive()) {
            return \$this->redirectToRoute('mypage');
        }

        /** @var RegularOrder \$RegularOrder */
        \$RegularOrder = \$this->regularOrderRepository->findOneBy([
            'id' => \$request->get('id'),
            'Customer' => \$this->getUser(),
        ]);
        if (!\$RegularOrder) {
            throw new NotFoundHttpException();
        }

        if (\$RegularOrder->getRegularStatus()->getId() !== RegularStatus::CONTINUE && \$RegularOrder->getRegularStatus()->getId() !== RegularStatus::SUSPEND) {
            return \$this->redirectToRoute('eccube_payment_lite42_mypage_regular_list');
        }
        if (!\$this->isMypageRegularSettingService->handle(MyPageRegularSetting::CANCELLATION)) {
            return \$this->redirectToRoute('eccube_payment_lite42_mypage_regular_list');
        }
        \$builder = \$this->formFactory->createBuilder();
        \$form = \$builder->getForm();
        \$form->handleRequest(\$request);
        // 解約可能な定期回数かチェック
        if (!\$this->isPossibleToCancel(\$RegularOrder->getRegularOrderCount())) {
            \$form->addError(new FormError(''));
            \$this->addWarning('定期商品の解約が可能な購入回数に達していないため、解約できません。');
        }
        if (\$form->isSubmitted() && \$form->isValid()) {
            /** @var RegularStatus \$RegularStatus */
            \$RegularStatus = \$this->regularStatusRepository->find(RegularStatus::CANCELLATION);
            /** @var RegularShipping \$RegularShipping */
            \$RegularShipping = \$RegularOrder->getRegularShippings()->first();
            \$RegularShipping->setNextDeliveryDate(null);
            \$RegularOrder->setRegularStatus(\$RegularStatus);
            \$this->entityManager->persist(\$RegularOrder);
            \$this->entityManager->flush();
            \$this->addWarning('定期商品のご注文を解約しました。');

            return \$this->redirectToRoute('eccube_payment_lite42_mypage_regular_complete', [
                'id' => \$RegularOrder->getId(),
            ]);
        }

        return [
            'form' => \$form->createView(),
            'RegularOrder' => \$RegularOrder,
        ];
    }

    private function isPossibleToCancel(\$regularOrderCount): bool
    {
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        \$regularCancelableCount = \$Config->getRegularCancelableCount();
        if (\$regularOrderCount < \$regularCancelableCount) {
            return false;
        }

        return true;
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
        return "EccubePaymentLite42/Controller/Front/Mypage/RegularCancelController.php";
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
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Entity\\MyPageRegularSetting;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrder;
use Plugin\\EccubePaymentLite42\\Entity\\RegularShipping;
use Plugin\\EccubePaymentLite42\\Entity\\RegularStatus;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Repository\\RegularOrderRepository;
use Plugin\\EccubePaymentLite42\\Repository\\RegularStatusRepository;
use Plugin\\EccubePaymentLite42\\Service\\IsActiveRegularService;
use Plugin\\EccubePaymentLite42\\Service\\IsMypageRegularSettingService;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Routing\\Annotation\\Route;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;

class RegularCancelController extends AbstractController
{
    /**
     * @var RegularOrderRepository
     */
    private \$regularOrderRepository;
    /**
     * @var RegularStatusRepository
     */
    private \$regularStatusRepository;
    /**
     * @var IsMypageRegularSettingService
     */
    private \$isMypageRegularSettingService;
    /**
     * @var IsActiveRegularService
     */
    private \$isActiveRegularService;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;

    public function __construct(
        RegularOrderRepository \$regularOrderRepository,
        RegularStatusRepository \$regularStatusRepository,
        IsMypageRegularSettingService \$isMypageRegularSettingService,
        IsActiveRegularService \$isActiveRegularService,
        ConfigRepository \$configRepository
    ) {
        \$this->regularOrderRepository = \$regularOrderRepository;
        \$this->regularStatusRepository = \$regularStatusRepository;
        \$this->isMypageRegularSettingService = \$isMypageRegularSettingService;
        \$this->isActiveRegularService = \$isActiveRegularService;
        \$this->configRepository = \$configRepository;
    }

    /**
     * 定期受注解約確認画面を表示する。
     *
     * @Route(
     *     \"/mypage/eccube_payment_lite/regular/{id}/cancel\",
     *     name=\"eccube_payment_lite42_mypage_regular_cancel\",
     *     requirements={\"id\" = \"\\d+\"})
     * @Template(\"@EccubePaymentLite42/default/Mypage/regular_cancel.twig\")
     */
    public function cancel(Request \$request)
    {
        if (!\$this->isActiveRegularService->isActive()) {
            return \$this->redirectToRoute('mypage');
        }

        /** @var RegularOrder \$RegularOrder */
        \$RegularOrder = \$this->regularOrderRepository->findOneBy([
            'id' => \$request->get('id'),
            'Customer' => \$this->getUser(),
        ]);
        if (!\$RegularOrder) {
            throw new NotFoundHttpException();
        }

        if (\$RegularOrder->getRegularStatus()->getId() !== RegularStatus::CONTINUE && \$RegularOrder->getRegularStatus()->getId() !== RegularStatus::SUSPEND) {
            return \$this->redirectToRoute('eccube_payment_lite42_mypage_regular_list');
        }
        if (!\$this->isMypageRegularSettingService->handle(MyPageRegularSetting::CANCELLATION)) {
            return \$this->redirectToRoute('eccube_payment_lite42_mypage_regular_list');
        }
        \$builder = \$this->formFactory->createBuilder();
        \$form = \$builder->getForm();
        \$form->handleRequest(\$request);
        // 解約可能な定期回数かチェック
        if (!\$this->isPossibleToCancel(\$RegularOrder->getRegularOrderCount())) {
            \$form->addError(new FormError(''));
            \$this->addWarning('定期商品の解約が可能な購入回数に達していないため、解約できません。');
        }
        if (\$form->isSubmitted() && \$form->isValid()) {
            /** @var RegularStatus \$RegularStatus */
            \$RegularStatus = \$this->regularStatusRepository->find(RegularStatus::CANCELLATION);
            /** @var RegularShipping \$RegularShipping */
            \$RegularShipping = \$RegularOrder->getRegularShippings()->first();
            \$RegularShipping->setNextDeliveryDate(null);
            \$RegularOrder->setRegularStatus(\$RegularStatus);
            \$this->entityManager->persist(\$RegularOrder);
            \$this->entityManager->flush();
            \$this->addWarning('定期商品のご注文を解約しました。');

            return \$this->redirectToRoute('eccube_payment_lite42_mypage_regular_complete', [
                'id' => \$RegularOrder->getId(),
            ]);
        }

        return [
            'form' => \$form->createView(),
            'RegularOrder' => \$RegularOrder,
        ];
    }

    private function isPossibleToCancel(\$regularOrderCount): bool
    {
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        \$regularCancelableCount = \$Config->getRegularCancelableCount();
        if (\$regularOrderCount < \$regularCancelableCount) {
            return false;
        }

        return true;
    }
}
", "EccubePaymentLite42/Controller/Front/Mypage/RegularCancelController.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Controller\\Front\\Mypage\\RegularCancelController.php");
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
