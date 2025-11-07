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

/* EccubePaymentLite42/Controller/Front/Shopping/CreditCardForTokenPaymentController.php */
class __TwigTemplate_7d6f45afc5aa27ab66b3150a5ccddb32 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Front/Shopping/CreditCardForTokenPaymentController.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Front/Shopping/CreditCardForTokenPaymentController.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Controller\\Front\\Shopping;

use Eccube\\Controller\\AbstractController;
use Eccube\\Form\\Type\\Shopping\\OrderType;
use Eccube\\Service\\CartService;
use Eccube\\Service\\OrderHelper;
use Plugin\\EccubePaymentLite42\\Form\\Type\\Front\\CreditCardForTokenPaymentType;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequestService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonUrlService;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Routing\\Annotation\\Route;

class CreditCardForTokenPaymentController extends AbstractController
{
    /**
     * @var GmoEpsilonUrlService
     */
    private \$gmoEpsilonUrlService;
    /**
     * @var CartService
     */
    private \$cartService;
    /**
     * @var OrderHelper
     */
    private \$orderHelper;
    /**
     * @var GmoEpsilonRequestService
     */
    private \$gmoEpsilonRequestService;

    public function __construct(
        GmoEpsilonUrlService \$gmoEpsilonUrlService,
        CartService \$cartService,
        OrderHelper \$orderHelper,
        GmoEpsilonRequestService \$gmoEpsilonRequestService
    ) {
        \$this->gmoEpsilonUrlService = \$gmoEpsilonUrlService;
        \$this->cartService = \$cartService;
        \$this->orderHelper = \$orderHelper;
        \$this->gmoEpsilonRequestService = \$gmoEpsilonRequestService;
    }

    /**
     * @Route(
     *     \"/shopping/eccube_payment_lite/credit_card\",
     *     name=\"eccube_payment_lite42_credit_card_for_token_payment\"
     * )
     * @Template(\"@EccubePaymentLite42/default/Shopping/credit_card_for_token_payment.twig\")
     */
    public function index(Request \$request)
    {
        // ログイン状態のチェック.
        if (\$this->orderHelper->isLoginRequired()) {
            log_info('[注文確認] 未ログインもしくはRememberMeログインのため, ログイン画面に遷移します.');

            return \$this->redirectToRoute('shopping_login');
        }

        // 受注の存在チェック
        \$preOrderId = \$this->cartService->getPreOrderId();
        \$Order = \$this->orderHelper->getPurchaseProcessingOrder(\$preOrderId);
        if (!\$Order) {
            log_info('[注文確認] 購入処理中の受注が存在しません.', [\$preOrderId]);

            return \$this->redirectToRoute('shopping_error');
        }
        \$form = \$this->createForm(CreditCardForTokenPaymentType::class);
        \$form->handleRequest(\$request);
        if (\$form->isSubmitted() && \$form->isValid()) {
            \$checkoutForm = \$this->createForm(OrderType::class, \$Order);

            return [
                'url_token_js' => \$this->gmoEpsilonUrlService->getUrl('token'),
                'form' => \$form->createView(),
                'checkoutForm' => \$checkoutForm->createView(),
                'token' => \$form->getData()['token'],
            ];
        }

        return [
            'url_token_js' => \$this->gmoEpsilonUrlService->getUrl('token'),
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
        return "EccubePaymentLite42/Controller/Front/Shopping/CreditCardForTokenPaymentController.php";
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

namespace Plugin\\EccubePaymentLite42\\Controller\\Front\\Shopping;

use Eccube\\Controller\\AbstractController;
use Eccube\\Form\\Type\\Shopping\\OrderType;
use Eccube\\Service\\CartService;
use Eccube\\Service\\OrderHelper;
use Plugin\\EccubePaymentLite42\\Form\\Type\\Front\\CreditCardForTokenPaymentType;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequestService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonUrlService;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Routing\\Annotation\\Route;

class CreditCardForTokenPaymentController extends AbstractController
{
    /**
     * @var GmoEpsilonUrlService
     */
    private \$gmoEpsilonUrlService;
    /**
     * @var CartService
     */
    private \$cartService;
    /**
     * @var OrderHelper
     */
    private \$orderHelper;
    /**
     * @var GmoEpsilonRequestService
     */
    private \$gmoEpsilonRequestService;

    public function __construct(
        GmoEpsilonUrlService \$gmoEpsilonUrlService,
        CartService \$cartService,
        OrderHelper \$orderHelper,
        GmoEpsilonRequestService \$gmoEpsilonRequestService
    ) {
        \$this->gmoEpsilonUrlService = \$gmoEpsilonUrlService;
        \$this->cartService = \$cartService;
        \$this->orderHelper = \$orderHelper;
        \$this->gmoEpsilonRequestService = \$gmoEpsilonRequestService;
    }

    /**
     * @Route(
     *     \"/shopping/eccube_payment_lite/credit_card\",
     *     name=\"eccube_payment_lite42_credit_card_for_token_payment\"
     * )
     * @Template(\"@EccubePaymentLite42/default/Shopping/credit_card_for_token_payment.twig\")
     */
    public function index(Request \$request)
    {
        // ログイン状態のチェック.
        if (\$this->orderHelper->isLoginRequired()) {
            log_info('[注文確認] 未ログインもしくはRememberMeログインのため, ログイン画面に遷移します.');

            return \$this->redirectToRoute('shopping_login');
        }

        // 受注の存在チェック
        \$preOrderId = \$this->cartService->getPreOrderId();
        \$Order = \$this->orderHelper->getPurchaseProcessingOrder(\$preOrderId);
        if (!\$Order) {
            log_info('[注文確認] 購入処理中の受注が存在しません.', [\$preOrderId]);

            return \$this->redirectToRoute('shopping_error');
        }
        \$form = \$this->createForm(CreditCardForTokenPaymentType::class);
        \$form->handleRequest(\$request);
        if (\$form->isSubmitted() && \$form->isValid()) {
            \$checkoutForm = \$this->createForm(OrderType::class, \$Order);

            return [
                'url_token_js' => \$this->gmoEpsilonUrlService->getUrl('token'),
                'form' => \$form->createView(),
                'checkoutForm' => \$checkoutForm->createView(),
                'token' => \$form->getData()['token'],
            ];
        }

        return [
            'url_token_js' => \$this->gmoEpsilonUrlService->getUrl('token'),
            'form' => \$form->createView(),
        ];
    }
}
", "EccubePaymentLite42/Controller/Front/Shopping/CreditCardForTokenPaymentController.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Controller\\Front\\Shopping\\CreditCardForTokenPaymentController.php");
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
