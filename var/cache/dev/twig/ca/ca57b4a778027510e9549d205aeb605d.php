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

/* EccubePaymentLite42/Controller/Front/Mypage/EditCreditCardController.php */
class __TwigTemplate_f481a55bfdd00f731146d58c1a808bf3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Front/Mypage/EditCreditCardController.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Front/Mypage/EditCreditCardController.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Controller\\Front\\Mypage;

use Eccube\\Common\\EccubeConfig;
use Eccube\\Controller\\AbstractController;
use Eccube\\Entity\\Customer;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Service\\ChangeRegularStatusToRePaymentService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestGetUserInfoService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestReceiveOrderService;
use Plugin\\EccubePaymentLite42\\Service\\SaveGmoEpsilonCreditCardExpirationService;
use Plugin\\EccubePaymentLite42\\Service\\UpdateNextShippingDateFromRePaymentService;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;
use Symfony\\Component\\Routing\\Annotation\\Route;

class EditCreditCardController extends AbstractController
{
    /**
     * @var RequestGetUserInfoService
     */
    private \$requestGetUserInfoService;
    /**
     * @var RequestReceiveOrderService
     */
    private \$requestReceiveOrderService;
    /**
     * @var SaveGmoEpsilonCreditCardExpirationService
     */
    private \$saveGmoEpsilonCreditCardExpirationService;
    /**
     * @var ChangeRegularStatusToRePaymentService
     */
    private \$changeRegularStatusToRePaymentService;
    /**
     * @var UpdateNextShippingDateFromRePaymentService
     */
    private \$updateNextShippingDateFromRePaymentService;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;

    /**
     * @var EccubeConfig
     */
    protected \$eccubeConfig;

    public function __construct(
        RequestGetUserInfoService \$requestGetUserInfoService,
        RequestReceiveOrderService \$requestReceiveOrderService,
        ChangeRegularStatusToRePaymentService \$changeRegularStatusToRePaymentService,
        SaveGmoEpsilonCreditCardExpirationService \$saveGmoEpsilonCreditCardExpirationService,
        UpdateNextShippingDateFromRePaymentService \$updateNextShippingDateFromRePaymentService,
        ConfigRepository \$configRepository,
        EccubeConfig \$eccubeConfig
    ) {
        \$this->requestGetUserInfoService = \$requestGetUserInfoService;
        \$this->requestReceiveOrderService = \$requestReceiveOrderService;
        \$this->changeRegularStatusToRePaymentService = \$changeRegularStatusToRePaymentService;
        \$this->saveGmoEpsilonCreditCardExpirationService = \$saveGmoEpsilonCreditCardExpirationService;
        \$this->updateNextShippingDateFromRePaymentService = \$updateNextShippingDateFromRePaymentService;
        \$this->configRepository = \$configRepository;
        \$this->eccubeConfig = \$eccubeConfig;
    }

    /**
     * @Route(
     *     \"/mypage/eccube_payment_lite/credit_card\",
     *     name=\"eccube_payment_lite42_mypage_credit_card_index\"
     * )
     * @Template(\"@EccubePaymentLite42/default/Mypage/edit_credit_card.twig\")
     *
     * @return array
     */
    public function index()
    {
        // Check active クレジットカード決済, 登録済みのクレジットカードで決済
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        \$paymentIds = \$Config->getGmoEpsilonPayments()->map(function (\$GmoEpsilonPayment) {
            return \$GmoEpsilonPayment->getId();
        })->toArray();

        if (count(\$paymentIds) > 0) {
            if (!in_array(\$this->eccubeConfig['gmo_epsilon']['pay_id']['credit'], \$paymentIds) ||
                    !in_array(\$this->eccubeConfig['gmo_epsilon']['pay_id']['reg_credit'], \$paymentIds)) {
                throw new NotFoundHttpException();
            }
        }
        /** @var Customer \$Customer */
        \$Customer = \$this->getUser();
        \$results = \$this->requestGetUserInfoService->handle(\$Customer->getId());
        \$isRegisteredCreditCard = true;
        if (\$results['status'] === 'NG') {
            \$isRegisteredCreditCard = false;
        }

        return [
            'isRegisteredCreditCard' => \$isRegisteredCreditCard,
            'cardBrand' => \$results['cardBrand'],
            'cardExpire' => \$results['cardExpire'],
            'cardNumberMask' => \$results['cardNumberMask'],
        ];
    }

    /**
     * @Route(
     *     \"/mypage/eccube_payment_lite/credit_card/edit\",
     *     name=\"eccube_payment_lite42_mypage_credit_card_edit\"
     * )
     *
     * @return RedirectResponse
     */
    public function edit()
    {
        if (is_null(\$this->session->get('_security_customer'))) {
            return \$this->redirectToRoute('mypage_login');
        }
        /** @var Customer \$Customer */
        \$Customer = \$this->getUser();
        \$results = \$this
            ->requestReceiveOrderService
            ->handle(\$Customer, 4, 'eccube_payment_lite42_mypage_credit_card_edit');
        if (\$results['status'] === 'NG') {
            return \$this->redirectToRoute('eccube_payment_lite42_mypage_credit_card_index');
        }

        return \$this->redirect(\$results['url']);
    }

    /**
     * @Route(
     *     \"/mypage/eccube_payment_lite/credit_card/complete\",
     *     name=\"eccube_payment_lite42_mypage_credit_card_complete\"
     * )
     *
     * @return RedirectResponse
     */
    public function complete()
    {
        if (!\$this->isGranted('ROLE_USER')) {
            return \$this->redirectToRoute('eccube_payment_lite42_mypage_credit_card_index');
        }
        /** @var Customer \$Customer */
        \$Customer = \$this->getUser();
        \$this->saveGmoEpsilonCreditCardExpirationService->handle();
        \$this->changeRegularStatusToRePaymentService->handle(\$Customer);
        \$this->updateNextShippingDateFromRePaymentService->update(\$Customer);

        return \$this->redirectToRoute('eccube_payment_lite42_mypage_credit_card_index');
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
        return "EccubePaymentLite42/Controller/Front/Mypage/EditCreditCardController.php";
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

use Eccube\\Common\\EccubeConfig;
use Eccube\\Controller\\AbstractController;
use Eccube\\Entity\\Customer;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Service\\ChangeRegularStatusToRePaymentService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestGetUserInfoService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestReceiveOrderService;
use Plugin\\EccubePaymentLite42\\Service\\SaveGmoEpsilonCreditCardExpirationService;
use Plugin\\EccubePaymentLite42\\Service\\UpdateNextShippingDateFromRePaymentService;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;
use Symfony\\Component\\Routing\\Annotation\\Route;

class EditCreditCardController extends AbstractController
{
    /**
     * @var RequestGetUserInfoService
     */
    private \$requestGetUserInfoService;
    /**
     * @var RequestReceiveOrderService
     */
    private \$requestReceiveOrderService;
    /**
     * @var SaveGmoEpsilonCreditCardExpirationService
     */
    private \$saveGmoEpsilonCreditCardExpirationService;
    /**
     * @var ChangeRegularStatusToRePaymentService
     */
    private \$changeRegularStatusToRePaymentService;
    /**
     * @var UpdateNextShippingDateFromRePaymentService
     */
    private \$updateNextShippingDateFromRePaymentService;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;

    /**
     * @var EccubeConfig
     */
    protected \$eccubeConfig;

    public function __construct(
        RequestGetUserInfoService \$requestGetUserInfoService,
        RequestReceiveOrderService \$requestReceiveOrderService,
        ChangeRegularStatusToRePaymentService \$changeRegularStatusToRePaymentService,
        SaveGmoEpsilonCreditCardExpirationService \$saveGmoEpsilonCreditCardExpirationService,
        UpdateNextShippingDateFromRePaymentService \$updateNextShippingDateFromRePaymentService,
        ConfigRepository \$configRepository,
        EccubeConfig \$eccubeConfig
    ) {
        \$this->requestGetUserInfoService = \$requestGetUserInfoService;
        \$this->requestReceiveOrderService = \$requestReceiveOrderService;
        \$this->changeRegularStatusToRePaymentService = \$changeRegularStatusToRePaymentService;
        \$this->saveGmoEpsilonCreditCardExpirationService = \$saveGmoEpsilonCreditCardExpirationService;
        \$this->updateNextShippingDateFromRePaymentService = \$updateNextShippingDateFromRePaymentService;
        \$this->configRepository = \$configRepository;
        \$this->eccubeConfig = \$eccubeConfig;
    }

    /**
     * @Route(
     *     \"/mypage/eccube_payment_lite/credit_card\",
     *     name=\"eccube_payment_lite42_mypage_credit_card_index\"
     * )
     * @Template(\"@EccubePaymentLite42/default/Mypage/edit_credit_card.twig\")
     *
     * @return array
     */
    public function index()
    {
        // Check active クレジットカード決済, 登録済みのクレジットカードで決済
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        \$paymentIds = \$Config->getGmoEpsilonPayments()->map(function (\$GmoEpsilonPayment) {
            return \$GmoEpsilonPayment->getId();
        })->toArray();

        if (count(\$paymentIds) > 0) {
            if (!in_array(\$this->eccubeConfig['gmo_epsilon']['pay_id']['credit'], \$paymentIds) ||
                    !in_array(\$this->eccubeConfig['gmo_epsilon']['pay_id']['reg_credit'], \$paymentIds)) {
                throw new NotFoundHttpException();
            }
        }
        /** @var Customer \$Customer */
        \$Customer = \$this->getUser();
        \$results = \$this->requestGetUserInfoService->handle(\$Customer->getId());
        \$isRegisteredCreditCard = true;
        if (\$results['status'] === 'NG') {
            \$isRegisteredCreditCard = false;
        }

        return [
            'isRegisteredCreditCard' => \$isRegisteredCreditCard,
            'cardBrand' => \$results['cardBrand'],
            'cardExpire' => \$results['cardExpire'],
            'cardNumberMask' => \$results['cardNumberMask'],
        ];
    }

    /**
     * @Route(
     *     \"/mypage/eccube_payment_lite/credit_card/edit\",
     *     name=\"eccube_payment_lite42_mypage_credit_card_edit\"
     * )
     *
     * @return RedirectResponse
     */
    public function edit()
    {
        if (is_null(\$this->session->get('_security_customer'))) {
            return \$this->redirectToRoute('mypage_login');
        }
        /** @var Customer \$Customer */
        \$Customer = \$this->getUser();
        \$results = \$this
            ->requestReceiveOrderService
            ->handle(\$Customer, 4, 'eccube_payment_lite42_mypage_credit_card_edit');
        if (\$results['status'] === 'NG') {
            return \$this->redirectToRoute('eccube_payment_lite42_mypage_credit_card_index');
        }

        return \$this->redirect(\$results['url']);
    }

    /**
     * @Route(
     *     \"/mypage/eccube_payment_lite/credit_card/complete\",
     *     name=\"eccube_payment_lite42_mypage_credit_card_complete\"
     * )
     *
     * @return RedirectResponse
     */
    public function complete()
    {
        if (!\$this->isGranted('ROLE_USER')) {
            return \$this->redirectToRoute('eccube_payment_lite42_mypage_credit_card_index');
        }
        /** @var Customer \$Customer */
        \$Customer = \$this->getUser();
        \$this->saveGmoEpsilonCreditCardExpirationService->handle();
        \$this->changeRegularStatusToRePaymentService->handle(\$Customer);
        \$this->updateNextShippingDateFromRePaymentService->update(\$Customer);

        return \$this->redirectToRoute('eccube_payment_lite42_mypage_credit_card_index');
    }
}
", "EccubePaymentLite42/Controller/Front/Mypage/EditCreditCardController.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Controller\\Front\\Mypage\\EditCreditCardController.php");
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
