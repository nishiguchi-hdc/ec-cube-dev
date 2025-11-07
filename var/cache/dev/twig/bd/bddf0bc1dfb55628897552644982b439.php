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

/* AmazonPayV2_42_Bundle/Controller/AmazonRedirectController.php */
class __TwigTemplate_391d5336e6f3591d868433be81d4553f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Controller/AmazonRedirectController.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Controller/AmazonRedirectController.php"));

        // line 1
        echo "<?php

/*
 * Amazon Pay V2 for EC-CUBE4.2
 * Copyright(c) 2023 EC-CUBE CO.,LTD. all rights reserved.
 *
 * https://www.ec-cube.co.jp/
 *
 * This program is not free software.
 * It applies to terms of service.
 *
 */

namespace Plugin\\AmazonPayV2_42_Bundle\\Controller;

use Eccube\\Controller\\AbstractController;
use Eccube\\Repository\\CustomerRepository;
use Eccube\\Repository\\ClassCategoryRepository;
use Eccube\\Repository\\ProductRepository;
use Eccube\\Repository\\ProductClassRepository;
use Eccube\\Common\\EccubeConfig;
use Eccube\\Service\\CartService;
use Eccube\\Service\\OrderHelper;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;
use Eccube\\Service\\PurchaseFlow\\PurchaseFlow;
use Plugin\\AmazonPayV2_42_Bundle\\Repository\\ConfigRepository;
use Plugin\\AmazonPayV2_42_Bundle\\Service\\AmazonOrderHelper;
use Plugin\\AmazonPayV2_42_Bundle\\Service\\AmazonRequestService;
use Plugin\\AmazonPayV2_42_Bundle\\Service\\AmazonIPNService;
use Symfony\\Component\\Routing\\Annotation\\Route;
use Symfony\\Component\\HttpFoundation\\ParameterBag;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\UsernamePasswordToken;

class AmazonRedirectController extends AbstractController
{
    /**
     * @var string プロファイル情報キー
     */
    private \$sessionAmazonProfileKey = 'amazon_pay_v2.profile';

    /**
     * @var string プロファイル情報キー
     */
    private \$sessionAmazonCheckoutSessionIdKey = 'amazon_pay_v2.checkout_session_id';

    /**
     * @var string shippingを更新するか
     */
    private \$sessionIsShippingRefresh = 'amazon_pay_v2.is_shipping_refresh';

    /**
     * @var string Amazonログインステート
     */
    private \$sessionAmazonLoginStateKey = 'amazon_pay_v2.amazon_login_state';

    /**
     * @var CartService
     */
    protected \$cartService;

    /**
     * @var ConfigRepository
     */
    protected \$configRepository;

    /**
     * @var AmazonRequestService
     */
    protected \$amazonRequestService;

    /**
     * @var AmazonIPNService
     */
    protected \$amazonIPNService;

    public function __construct(
        PurchaseFlow \$cartPurchaseFlow,
        OrderHelper \$orderHelper,
        CartService \$cartService,
        CustomerRepository \$customerRepository,
        ClassCategoryRepository \$classCategoryRepository,
        ProductRepository \$productRepository,
        ProductClassRepository \$productClassRepository,
        ConfigRepository \$configRepository,
        AmazonOrderHelper \$amazonOrderHelper,
        AmazonRequestService \$amazonRequestService,
        AmazonIPNService \$amazonIPNService,
        ParameterBag \$parameterBag,
        EccubeConfig \$eccubeConfig,
        TokenStorageInterface \$tokenStorage
    ) {
        \$this->purchaseFlow = \$cartPurchaseFlow;
        \$this->orderHelper = \$orderHelper;
        \$this->cartService = \$cartService;
        \$this->customerRepository = \$customerRepository;
        \$this->classCategoryRepository = \$classCategoryRepository;
        \$this->productRepository = \$productRepository;
        \$this->productClassRepository = \$productClassRepository;
        \$this->configRepository = \$configRepository;
        \$this->amazonOrderHelper = \$amazonOrderHelper;
        \$this->amazonRequestService = \$amazonRequestService;
        \$this->amazonIPNService = \$amazonIPNService;
        \$this->parameterBag = \$parameterBag;
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->tokenStorage = \$tokenStorage;

        \$this->Config = \$configRepository->get();
    }

    /**
     * @Route(\"/amazon_checkout_review\", name=\"amazon_checkout_review\")
     *
     * @param Request \$request
     *
     * @return RedirectResponse
     */
    public function amazonCheckoutReview(Request \$request)
    {
        logs('amazon_pay_v2')->info('AmazonRedirect::amazonCheckoutReview start.');

        try {
            \$checkoutSession = \$this->amazonRequestService->getCheckoutSession(\$request->get('amazonCheckoutSessionId'));
            \$buyer = \$checkoutSession->buyer;
            // buyerIdがnullの場合は例外スロー
            if (\$buyer->buyerId == null) {
                throw new \\Exception(\"** buyerIdがnullです.処理を中断します. **\");
            }
        } catch (\\Exception \$e) {
            logs('amazon_pay_v2')->error(\$e->getMessage() . ' amazonCheckoutSessionId = ' . \$request->get('amazonCheckoutSessionId'));
            return \$this->redirectToRoute('shopping_error');
        }

        \$cartKey = \$request->get('cart');

        \$this->cartService->setPrimary(\$cartKey);
        \$this->cartService->save();

        // 自動ログイン
        if (
            !\$this->isGranted('ROLE_USER') && \$this->Config->getAutoLogin() == \$this->eccubeConfig['amazon_pay_v2']['toggle']['on'] &&
            \$Customer = \$this->customerRepository->getNonWithdrawingCustomers(['v2_amazon_user_id' => \$buyer->buyerId])
        ) {
            \$token = new UsernamePasswordToken(\$Customer[0], 'customer', ['ROLE_USER']);
            \$this->tokenStorage->setToken(\$token);
            \$request->getSession()->migrate(true);

            \$this->cartService->mergeFromPersistedCart();
            foreach (\$this->cartService->getCarts() as \$Cart) {
                \$this->purchaseFlow->validate(\$Cart, new PurchaseContext(\$Cart, \$Customer[0]));
            }
            \$this->cartService->save();
        }

        if (\$this->isGranted('IS_AUTHENTICATED_FULLY') && \$this->Config->getOrderCorrect() == \$this->eccubeConfig['amazon_pay_v2']['toggle']['on']) {
            \$Customer = \$this->getUser();

            \$revise_flg = false;

            // 名前補正
            \$name02 = \$Customer->getName02();
            if (empty(\$name02) || \$name02 == '　') {
                \$arrFixName = \$this->amazonOrderHelper->reviseName(\$Customer->getName01());
                if (!empty(\$arrFixName)) {
                    \$Customer->setName01(\$arrFixName['name01'])
                        ->setName02(\$arrFixName['name02']);
                    \$revise_flg = true;

                    logs('amazon_pay_v2')->info('*** 会員情報 名前補正 *** customer_id = ' . \$Customer->getId());
                }
            }

            // フリガナ補正
            \$kana01 = \$Customer->getKana01();
            \$kana02 = \$Customer->getKana02();
            if ((empty(\$kana01) || \$kana01 === '　') && (empty(\$kana02) || \$kana02 === '　')) {
                \$arrFixKana = \$this->amazonOrderHelper->reviseKana(\$Customer->getName01(), \$Customer->getName02(), \$Customer->getEmail());
                if (!empty(\$arrFixKana)) {
                    \$Customer->setKana01(\$arrFixKana['kana01'])
                        ->setKana02(\$arrFixKana['kana02']);
                    \$revise_flg = true;

                    logs('amazon_pay_v2')->info('*** 会員情報 フリガナ補正 *** customer_id = ' . \$Customer->getId());
                }
            }

            if (\$revise_flg) {
                \$this->entityManager->persist(\$Customer);
                \$this->entityManager->flush();
            }
        }

        // AmazonのユーザIDをセッションに保存
        \$this->session->set(\$this->sessionAmazonProfileKey, serialize(\$buyer));

        \$this->session->set(\$this->sessionAmazonCheckoutSessionIdKey, \$request->get('amazonCheckoutSessionId'));

        // shippingの更新フラグを保存
        \$this->session->set(\$this->sessionIsShippingRefresh, true);

        logs('amazon_pay_v2')->info('AmazonRedirect::index end.');

        return \$this->redirectToRoute('amazon_pay_shopping', []);
    }

    /**
     * @Route(\"/amazon_instant_payment_notifications\", name=\"instant_payment_notifications\")
     */
    public function instantPaymentNotifications(Request \$request)
    {
        logs('amazon_pay_v2')->info('AmazonRedirect::instantPaymentNotifications start.');

        \$json = \$request->getContent();
        \$content = json_decode(\$json, true);

        if (isset(\$content['Type']) && \$content['Type'] == 'Notification') {
            \$arrParam = json_decode(\$content['Message'], true);
            \$this->amazonIPNService->mainProcess(\$arrParam);
        } else {
            throw new \\Exception('IPN Type Error.');
        }

        logs('amazon_pay_v2')->info('AmazonRedirect::instantPaymentNotifications end.');

        return new Response();
    }

    /**
     * @Route(\"/mypage/login_with_amazon\", name=\"login_with_amazon\")
     */
    public function loginWithAmazon(Request \$request)
    {
        logs('amazon_pay_v2')->info('AmazonRedirect::loginWithAmazon start.');

        \$route = 'homepage';

        \$buyerToken = \$request->get('buyerToken');
        \$state = \$request->get('state');
        \$sessionState =\$this->session->get(\$this->sessionAmazonLoginStateKey);

        if (!isset(\$buyerToken) || !isset(\$state)) {
            throw new AccessDeniedHttpException('不正なアクセスです。');
        }

        if (\$state !== \$sessionState) {
            \$this->addError('amazon_pay_v2.front.error','amazon_pay_v2');
            \$route = 'mypage_login';
            return \$this->redirectToRoute(\$route);
        }

        \$this->session->remove(\$this->sessionAmazonLoginStateKey);

        try {
            // ログイン済みでなければ処理
            if (!\$this->isGranted('ROLE_USER')) {
                \$buyer = \$this->amazonRequestService->getBuyer(\$request->get('buyerToken'));
                \$buyerId = \$buyer->buyerId;
                \$isLogin = \$this->amazonRequestService->loginWithBuyerId(\$request, \$buyerId);
                if (!\$isLogin) {
                    // Buyerが一致する会員が存在しない場合はエラー
                    \$this->addError('amazon_pay_v2.front_mypage_fail_to_login','amazon_pay_v2');
                    \$route = 'mypage_login';
                }
            }
        } catch (\\Exception \$e) {
            logs('amazon_pay_v2')->info(\$e->getMessage());
            \$this->addError('amazon_pay_v2.front.error','amazon_pay_v2');
            \$route = 'mypage_login';
        }

        logs('amazon_pay_v2')->info('AmazonRedirect::loginWithAmazon end.');

        return \$this->redirectToRoute(\$route);
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
        return "AmazonPayV2_42_Bundle/Controller/AmazonRedirectController.php";
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

/*
 * Amazon Pay V2 for EC-CUBE4.2
 * Copyright(c) 2023 EC-CUBE CO.,LTD. all rights reserved.
 *
 * https://www.ec-cube.co.jp/
 *
 * This program is not free software.
 * It applies to terms of service.
 *
 */

namespace Plugin\\AmazonPayV2_42_Bundle\\Controller;

use Eccube\\Controller\\AbstractController;
use Eccube\\Repository\\CustomerRepository;
use Eccube\\Repository\\ClassCategoryRepository;
use Eccube\\Repository\\ProductRepository;
use Eccube\\Repository\\ProductClassRepository;
use Eccube\\Common\\EccubeConfig;
use Eccube\\Service\\CartService;
use Eccube\\Service\\OrderHelper;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;
use Eccube\\Service\\PurchaseFlow\\PurchaseFlow;
use Plugin\\AmazonPayV2_42_Bundle\\Repository\\ConfigRepository;
use Plugin\\AmazonPayV2_42_Bundle\\Service\\AmazonOrderHelper;
use Plugin\\AmazonPayV2_42_Bundle\\Service\\AmazonRequestService;
use Plugin\\AmazonPayV2_42_Bundle\\Service\\AmazonIPNService;
use Symfony\\Component\\Routing\\Annotation\\Route;
use Symfony\\Component\\HttpFoundation\\ParameterBag;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\UsernamePasswordToken;

class AmazonRedirectController extends AbstractController
{
    /**
     * @var string プロファイル情報キー
     */
    private \$sessionAmazonProfileKey = 'amazon_pay_v2.profile';

    /**
     * @var string プロファイル情報キー
     */
    private \$sessionAmazonCheckoutSessionIdKey = 'amazon_pay_v2.checkout_session_id';

    /**
     * @var string shippingを更新するか
     */
    private \$sessionIsShippingRefresh = 'amazon_pay_v2.is_shipping_refresh';

    /**
     * @var string Amazonログインステート
     */
    private \$sessionAmazonLoginStateKey = 'amazon_pay_v2.amazon_login_state';

    /**
     * @var CartService
     */
    protected \$cartService;

    /**
     * @var ConfigRepository
     */
    protected \$configRepository;

    /**
     * @var AmazonRequestService
     */
    protected \$amazonRequestService;

    /**
     * @var AmazonIPNService
     */
    protected \$amazonIPNService;

    public function __construct(
        PurchaseFlow \$cartPurchaseFlow,
        OrderHelper \$orderHelper,
        CartService \$cartService,
        CustomerRepository \$customerRepository,
        ClassCategoryRepository \$classCategoryRepository,
        ProductRepository \$productRepository,
        ProductClassRepository \$productClassRepository,
        ConfigRepository \$configRepository,
        AmazonOrderHelper \$amazonOrderHelper,
        AmazonRequestService \$amazonRequestService,
        AmazonIPNService \$amazonIPNService,
        ParameterBag \$parameterBag,
        EccubeConfig \$eccubeConfig,
        TokenStorageInterface \$tokenStorage
    ) {
        \$this->purchaseFlow = \$cartPurchaseFlow;
        \$this->orderHelper = \$orderHelper;
        \$this->cartService = \$cartService;
        \$this->customerRepository = \$customerRepository;
        \$this->classCategoryRepository = \$classCategoryRepository;
        \$this->productRepository = \$productRepository;
        \$this->productClassRepository = \$productClassRepository;
        \$this->configRepository = \$configRepository;
        \$this->amazonOrderHelper = \$amazonOrderHelper;
        \$this->amazonRequestService = \$amazonRequestService;
        \$this->amazonIPNService = \$amazonIPNService;
        \$this->parameterBag = \$parameterBag;
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->tokenStorage = \$tokenStorage;

        \$this->Config = \$configRepository->get();
    }

    /**
     * @Route(\"/amazon_checkout_review\", name=\"amazon_checkout_review\")
     *
     * @param Request \$request
     *
     * @return RedirectResponse
     */
    public function amazonCheckoutReview(Request \$request)
    {
        logs('amazon_pay_v2')->info('AmazonRedirect::amazonCheckoutReview start.');

        try {
            \$checkoutSession = \$this->amazonRequestService->getCheckoutSession(\$request->get('amazonCheckoutSessionId'));
            \$buyer = \$checkoutSession->buyer;
            // buyerIdがnullの場合は例外スロー
            if (\$buyer->buyerId == null) {
                throw new \\Exception(\"** buyerIdがnullです.処理を中断します. **\");
            }
        } catch (\\Exception \$e) {
            logs('amazon_pay_v2')->error(\$e->getMessage() . ' amazonCheckoutSessionId = ' . \$request->get('amazonCheckoutSessionId'));
            return \$this->redirectToRoute('shopping_error');
        }

        \$cartKey = \$request->get('cart');

        \$this->cartService->setPrimary(\$cartKey);
        \$this->cartService->save();

        // 自動ログイン
        if (
            !\$this->isGranted('ROLE_USER') && \$this->Config->getAutoLogin() == \$this->eccubeConfig['amazon_pay_v2']['toggle']['on'] &&
            \$Customer = \$this->customerRepository->getNonWithdrawingCustomers(['v2_amazon_user_id' => \$buyer->buyerId])
        ) {
            \$token = new UsernamePasswordToken(\$Customer[0], 'customer', ['ROLE_USER']);
            \$this->tokenStorage->setToken(\$token);
            \$request->getSession()->migrate(true);

            \$this->cartService->mergeFromPersistedCart();
            foreach (\$this->cartService->getCarts() as \$Cart) {
                \$this->purchaseFlow->validate(\$Cart, new PurchaseContext(\$Cart, \$Customer[0]));
            }
            \$this->cartService->save();
        }

        if (\$this->isGranted('IS_AUTHENTICATED_FULLY') && \$this->Config->getOrderCorrect() == \$this->eccubeConfig['amazon_pay_v2']['toggle']['on']) {
            \$Customer = \$this->getUser();

            \$revise_flg = false;

            // 名前補正
            \$name02 = \$Customer->getName02();
            if (empty(\$name02) || \$name02 == '　') {
                \$arrFixName = \$this->amazonOrderHelper->reviseName(\$Customer->getName01());
                if (!empty(\$arrFixName)) {
                    \$Customer->setName01(\$arrFixName['name01'])
                        ->setName02(\$arrFixName['name02']);
                    \$revise_flg = true;

                    logs('amazon_pay_v2')->info('*** 会員情報 名前補正 *** customer_id = ' . \$Customer->getId());
                }
            }

            // フリガナ補正
            \$kana01 = \$Customer->getKana01();
            \$kana02 = \$Customer->getKana02();
            if ((empty(\$kana01) || \$kana01 === '　') && (empty(\$kana02) || \$kana02 === '　')) {
                \$arrFixKana = \$this->amazonOrderHelper->reviseKana(\$Customer->getName01(), \$Customer->getName02(), \$Customer->getEmail());
                if (!empty(\$arrFixKana)) {
                    \$Customer->setKana01(\$arrFixKana['kana01'])
                        ->setKana02(\$arrFixKana['kana02']);
                    \$revise_flg = true;

                    logs('amazon_pay_v2')->info('*** 会員情報 フリガナ補正 *** customer_id = ' . \$Customer->getId());
                }
            }

            if (\$revise_flg) {
                \$this->entityManager->persist(\$Customer);
                \$this->entityManager->flush();
            }
        }

        // AmazonのユーザIDをセッションに保存
        \$this->session->set(\$this->sessionAmazonProfileKey, serialize(\$buyer));

        \$this->session->set(\$this->sessionAmazonCheckoutSessionIdKey, \$request->get('amazonCheckoutSessionId'));

        // shippingの更新フラグを保存
        \$this->session->set(\$this->sessionIsShippingRefresh, true);

        logs('amazon_pay_v2')->info('AmazonRedirect::index end.');

        return \$this->redirectToRoute('amazon_pay_shopping', []);
    }

    /**
     * @Route(\"/amazon_instant_payment_notifications\", name=\"instant_payment_notifications\")
     */
    public function instantPaymentNotifications(Request \$request)
    {
        logs('amazon_pay_v2')->info('AmazonRedirect::instantPaymentNotifications start.');

        \$json = \$request->getContent();
        \$content = json_decode(\$json, true);

        if (isset(\$content['Type']) && \$content['Type'] == 'Notification') {
            \$arrParam = json_decode(\$content['Message'], true);
            \$this->amazonIPNService->mainProcess(\$arrParam);
        } else {
            throw new \\Exception('IPN Type Error.');
        }

        logs('amazon_pay_v2')->info('AmazonRedirect::instantPaymentNotifications end.');

        return new Response();
    }

    /**
     * @Route(\"/mypage/login_with_amazon\", name=\"login_with_amazon\")
     */
    public function loginWithAmazon(Request \$request)
    {
        logs('amazon_pay_v2')->info('AmazonRedirect::loginWithAmazon start.');

        \$route = 'homepage';

        \$buyerToken = \$request->get('buyerToken');
        \$state = \$request->get('state');
        \$sessionState =\$this->session->get(\$this->sessionAmazonLoginStateKey);

        if (!isset(\$buyerToken) || !isset(\$state)) {
            throw new AccessDeniedHttpException('不正なアクセスです。');
        }

        if (\$state !== \$sessionState) {
            \$this->addError('amazon_pay_v2.front.error','amazon_pay_v2');
            \$route = 'mypage_login';
            return \$this->redirectToRoute(\$route);
        }

        \$this->session->remove(\$this->sessionAmazonLoginStateKey);

        try {
            // ログイン済みでなければ処理
            if (!\$this->isGranted('ROLE_USER')) {
                \$buyer = \$this->amazonRequestService->getBuyer(\$request->get('buyerToken'));
                \$buyerId = \$buyer->buyerId;
                \$isLogin = \$this->amazonRequestService->loginWithBuyerId(\$request, \$buyerId);
                if (!\$isLogin) {
                    // Buyerが一致する会員が存在しない場合はエラー
                    \$this->addError('amazon_pay_v2.front_mypage_fail_to_login','amazon_pay_v2');
                    \$route = 'mypage_login';
                }
            }
        } catch (\\Exception \$e) {
            logs('amazon_pay_v2')->info(\$e->getMessage());
            \$this->addError('amazon_pay_v2.front.error','amazon_pay_v2');
            \$route = 'mypage_login';
        }

        logs('amazon_pay_v2')->info('AmazonRedirect::loginWithAmazon end.');

        return \$this->redirectToRoute(\$route);
    }
}
", "AmazonPayV2_42_Bundle/Controller/AmazonRedirectController.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\AmazonPayV2_42_Bundle\\Controller\\AmazonRedirectController.php");
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
