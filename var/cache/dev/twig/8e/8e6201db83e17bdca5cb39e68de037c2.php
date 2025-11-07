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

/* AmazonPayV2_42_Bundle/AmazonPayEvent.php */
class __TwigTemplate_e73c941cefa2d87a38fa7eb2359e1a43 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/AmazonPayEvent.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/AmazonPayEvent.php"));

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

namespace Plugin\\AmazonPayV2_42_Bundle;

use Eccube\\Event\\TemplateEvent;
use Eccube\\Event\\EventArgs;
use Eccube\\Event\\EccubeEvents;
use Eccube\\Common\\EccubeConfig;
use Eccube\\Repository\\PaymentRepository;
use Eccube\\Repository\\PluginRepository;
use Eccube\\Service\\OrderHelper;
use Eccube\\Service\\CartService;
use Plugin\\AmazonPayV2_42_Bundle\\Repository\\ConfigRepository;
use Plugin\\AmazonPayV2_42_Bundle\\Service\\AmazonRequestService;
use Plugin\\AmazonPayV2_42_Bundle\\Service\\Method\\AmazonPay;
use Plugin\\AmazonPayV2_42_Bundle\\phpseclib\\Crypt\\Random;
use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Eccube\\Repository\\DeliveryRepository;
use Eccube\\Repository\\PaymentOptionRepository;
use Plugin\\AmazonPayV2_42_Bundle\\Entity\\AmazonBanner;
use Plugin\\AmazonPayV2_42_Bundle\\Service\\AmazonBannerService;

class AmazonPayEvent implements EventSubscriberInterface
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
     * @var string Amazonログインステート
     */
    private \$sessionAmazonLoginStateKey = 'amazon_pay_v2.amazon_login_state';

    /**
     * @var EccubeConfig
     */
    protected \$eccubeConfig;

    /**
     * @var UrlGeneratorInterface
     */
    private \$router;

    /**
     * @var ConfigRepository
     */
    protected \$configRepository;

    /**
     * @var AmazonRequestService
     */
    protected \$amazonRequestService;

    /**
     * @var DeliveryRepository
     */
    protected \$deliveryRepository;

    /**
     * @var DeliveryRepository
     */
    protected \$paymentOptionRepository;

    /**
     * Amazon Payバナーサービス
     *
     * @var AmazonBannerService
     */
    protected \$amazonBannerService;

    /**
     * AmazonPayEvent
     *
     * @param eccubeConfig \$eccubeConfig
     * @param ConfigRepository \$configRepository
     */
    public function __construct(
        RequestStack \$requestStack,
         
        TokenStorageInterface \$tokenStorage,
        EccubeConfig \$eccubeConfig,
        UrlGeneratorInterface \$router,
        PaymentRepository \$paymentRepository,
        PluginRepository \$pluginRepository,
        ConfigRepository \$configRepository,
        ContainerInterface \$container,
        OrderHelper \$orderHelper,
        CartService \$cartService,
        AmazonRequestService \$amazonRequestService,
        DeliveryRepository \$deliveryRepository,
        PaymentOptionRepository \$paymentOptionRepository,
        AmazonBannerService \$amazonBannerService
    ) {
        \$this->requestStack = \$requestStack;
        \$this->session = \$requestStack->getSession();
        \$this->tokenStorage = \$tokenStorage;
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->router = \$router;
        \$this->paymentRepository = \$paymentRepository;
        \$this->pluginRepository = \$pluginRepository;
        \$this->configRepository = \$configRepository;
        \$this->container = \$container;
        \$this->orderHelper = \$orderHelper;
        \$this->cartService = \$cartService;
        \$this->amazonRequestService = \$amazonRequestService;
        \$this->deliveryRepository = \$deliveryRepository;
        \$this->paymentOptionRepository = \$paymentOptionRepository;
        \$this->amazonBannerService = \$amazonBannerService;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            EccubeEvents::FRONT_CART_BUYSTEP_COMPLETE => 'amazon_cart_buystep',
            'Cart/index.twig' => 'cart',
            'Shopping/index.twig' => 'amazon_pay_shopping',
            'Mypage/login.twig' => 'mypage_login',
            'Shopping/confirm.twig' => 'amazon_pay_shopping_confirm',
            'index.twig' => 'add_banner_on_top',
        ];
    }

    /**
     * トップページのイベント
     * Amazon様バナーを挿入する
     *
     * @param TemplateEvent \$event
     * @return void
     */
    public function add_banner_on_top(TemplateEvent \$event)
    {
        \$Config = \$this->configRepository->get();
        
        if (\$Config->getUseAmazonBannerOnTop() == \$this->eccubeConfig['amazon_pay_v2']['toggle']['off']) {
            return;
        }

        if (\$Config->getAmazonBannerPlaceOnTop() == \$this->eccubeConfig['amazon_pay_v2']['button_place']['auto']) {
            \$event->addSnippet('@AmazonPayV2_42_Bundle/default/amazon_banner_auto_on_top.twig');
        }
        
        \$event->addSnippet(\$this->amazonBannerService->getBannerCodeOnTop(), false);
    }

    public function cart(TemplateEvent \$event)
    {
        \$Config = \$this->configRepository->get();

        if (\$Config->getUseAmazonBannerOnCart() != \$this->eccubeConfig['amazon_pay_v2']['toggle']['off']) {

            if (\$Config->getAmazonBannerPlaceOnCart() == \$this->eccubeConfig['amazon_pay_v2']['button_place']['auto']) {
                \$event->addSnippet('@AmazonPayV2_42_Bundle/default/amazon_banner_auto_on_cart.twig');
            }

            \$event->addSnippet(\$this->amazonBannerService->getBannerCodeOnCart(), false);
        }

        \$parameters = \$event->getParameters();
        if (empty(\$parameters['Carts'])) {
            return;
        }

        if (\$Config->getUseCartButton() == \$this->eccubeConfig['amazon_pay_v2']['toggle']['off']) {
            return;
        }

        // AmazonPayに紐づく商品種別の取得
        \$Payment = \$this->paymentRepository->findOneBy(['method_class' => AmazonPay::class]);
        \$AmazonDeliveries = \$this->paymentOptionRepository->findBy(['payment_id' => \$Payment->getId()]);
        \$AmazonSaleTypes = [];
        foreach (\$AmazonDeliveries as \$AmazonDelivery) {
            \$Delivery = \$this->deliveryRepository->findOneBy(['id' => \$AmazonDelivery->getDelivery()->getId()]);
            \$AmazonSaleTypes[] = \$Delivery->getSaleType()->getId();
        }
        \$parameters['AmazonSaleTypes'] = \$AmazonSaleTypes;

        foreach (\$parameters['Carts'] as \$Cart) {
            \$cartKey = \$Cart->getCartKey();
            \$payload = \$this->amazonRequestService->createCheckoutSessionPayload(\$Cart->getCartKey());
            \$signature = \$this->amazonRequestService->signaturePayload(\$payload);

            \$parameters['cart'][\$cartKey]['payload'] = \$payload;
            \$parameters['cart'][\$cartKey]['signature'] = \$signature;
        }

        \$parameters['AmazonPayV2Config'] = \$Config;
        if (\$Config->getEnv() == \$this->eccubeConfig['amazon_pay_v2']['env']['prod']) {
            \$parameters['AmazonPayV2Api'] = \$this->eccubeConfig['amazon_pay_v2']['api']['prod'];
        } else {
            \$parameters['AmazonPayV2Api'] = \$this->eccubeConfig['amazon_pay_v2']['api']['sandbox'];
        }
        \$event->setParameters(\$parameters);

        \$event->addSnippet('@AmazonPayV2_42_Bundle/default/Cart/amazon_pay_js.twig');

        if (\$Config->getCartButtonPlace() == \$this->eccubeConfig['amazon_pay_v2']['button_place']['auto']) {
            \$event->addSnippet('@AmazonPayV2_42_Bundle/default/Cart/button.twig');
        }
    }

    public function amazon_cart_buystep(EventArgs \$event)
    {
        // Amazonログインによる仮会員情報がセッションにセットされていたら
        if (\$this->orderHelper->getNonmember() && \$this->session->get(\$this->sessionAmazonProfileKey)) {
            // 仮会員情報を削除
            \$this->session->remove(OrderHelper::SESSION_NON_MEMBER);
            \$this->session->remove(\$this->sessionAmazonProfileKey);
            \$this->cartService->setPreOrderId(null);
            \$this->cartService->save();
        }
    }

    public function amazon_pay_shopping(TemplateEvent \$event)
    {
        \$request = \$this->requestStack->getMainRequest();
        \$uri = \$request->getUri();

        \$parameters = \$event->getParameters();

        if (preg_match('/shopping\\/amazon_pay/', \$uri) == false) {
            \$referer = \$request->headers->get('referer');
            \$Order = \$parameters['Order'];
            \$Payment = \$Order->getPayment();
            // AmazonPay決済確認画面→クーポン入力画面→決済確認画面への遷移時にAmazonPay決済確認画面へ戻す
            if (\$Payment && \$Payment->getMethodClass() === AmazonPay::class && preg_match('/shopping_coupon/', \$referer)) {
                header(\"Location:\" . \$this->router->generate('amazon_pay_shopping'));
                exit;
            }

            return;
        }

        \$Config = \$this->configRepository->get();

        \$event->addSnippet('@AmazonPayV2_42_Bundle/default/Shopping/widgets.twig');
        \$event->addSnippet('@AmazonPayV2_42_Bundle/default/Shopping/customer_regist_v2.twig');

        // チェックアウトセッションIDを取得する
        \$amazonCheckoutSessionId = \$this->session->get(\$this->sessionAmazonCheckoutSessionIdKey);

        \$parameters = \$event->getParameters();
        \$parameters['amazonCheckoutSessionId'] = \$amazonCheckoutSessionId;
        \$parameters['AmazonPayV2Config'] = \$Config;

        // メルマガプラグイン利用時はチェックボックスを追加
        if (
            \$this->pluginRepository->findOneBy(['code' => 'MailMagazine42', 'enabled' => true])
            || \$this->pluginRepository->findOneBy(['code' => 'PostCarrier42', 'enabled' => true])
        ) {
            \$useMailMagazine = true;
        } else {
            \$useMailMagazine = false;
        }
        \$parameters['useMailMagazine'] = \$useMailMagazine;

        if (\$Config->getEnv() == \$this->eccubeConfig['amazon_pay_v2']['env']['prod']) {
            \$parameters['AmazonPayV2Api'] = \$this->eccubeConfig['amazon_pay_v2']['api']['prod'];
        } else {
            \$parameters['AmazonPayV2Api'] = \$this->eccubeConfig['amazon_pay_v2']['api']['sandbox'];
        }
        \$event->setParameters(\$parameters);
    }

    public function amazon_pay_shopping_confirm(TemplateEvent \$event)
    {
        \$request = \$this->requestStack->getMainRequest();
        \$uri = \$request->getUri();

        if (preg_match('/shopping\\/amazon_pay/', \$uri) == false) {
            return;
        }
        \$Config = \$this->configRepository->get();

        \$event->addSnippet('@AmazonPayV2_42_Bundle/default/Shopping/confirm_widgets.twig');
        \$event->addSnippet('@AmazonPayV2_42_Bundle/default/Shopping/confirm_customer_regist_v2.twig');

        \$parameters = \$event->getParameters();
        \$parameters['AmazonPayV2Config'] = \$Config;

        // メルマガプラグイン利用時はチェックボックスを追加
        if (
            \$this->pluginRepository->findOneBy(['code' => 'MailMagazine42', 'enabled' => true])
            || \$this->pluginRepository->findOneBy(['code' => 'PostCarrier42', 'enabled' => true])
        ) {
            \$useMailMagazine = true;
        } else {
            \$useMailMagazine = false;
        }
        \$parameters['useMailMagazine'] = \$useMailMagazine;

        if (\$Config->getEnv() == \$this->eccubeConfig['amazon_pay_v2']['env']['prod']) {
            \$parameters['AmazonPayV2Api'] = \$this->eccubeConfig['amazon_pay_v2']['api']['prod'];
        } else {
            \$parameters['AmazonPayV2Api'] = \$this->eccubeConfig['amazon_pay_v2']['api']['sandbox'];
        }
        \$event->setParameters(\$parameters);
    }

    public function mypage_login(TemplateEvent \$event)
    {
        \$Config = \$this->configRepository->get();

        if (\$Config->getUseMypageLoginButton() == \$this->eccubeConfig['amazon_pay_v2']['toggle']['off']) {
            return;
        }

        \$state = \$this->session->get(\$this->sessionAmazonLoginStateKey);
        if (!\$state) {
            // stateが生成されていなければ、生成及びセッションセット
            \$state = bin2hex(Random::string(16));
            \$this->session->set(\$this->sessionAmazonLoginStateKey, \$state);
        }

        \$returnUrl = \$this->router->generate('login_with_amazon', ['state' => \$state], UrlGeneratorInterface::ABSOLUTE_URL);

        \$parameters = \$event->getParameters();

        \$payload = \$this->amazonRequestService->createSigninPayload(\$returnUrl);
        \$signature = \$this->amazonRequestService->signaturePayload(\$payload);

        \$parameters['payload'] = \$payload;
        \$parameters['signature'] = \$signature;
        \$parameters['buttonColor'] = \$Config->getMypageLoginButtonColor();

        \$parameters['AmazonPayV2Config'] = \$Config;
        if (\$Config->getEnv() == \$this->eccubeConfig['amazon_pay_v2']['env']['prod']) {
            \$parameters['AmazonPayV2Api'] = \$this->eccubeConfig['amazon_pay_v2']['api']['prod'];
        } else {
            \$parameters['AmazonPayV2Api'] = \$this->eccubeConfig['amazon_pay_v2']['api']['sandbox'];
        }

        \$event->setParameters(\$parameters);

        if (\$Config->getMypageLoginButtonPlace() == \$this->eccubeConfig['amazon_pay_v2']['button_place']['auto']) {
            \$event->addSnippet('@AmazonPayV2_42_Bundle/default/Mypage/login_page_button.twig');
        }

        \$event->addSnippet('@AmazonPayV2_42_Bundle/default/Mypage/amazon_login_js.twig');
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
        return "AmazonPayV2_42_Bundle/AmazonPayEvent.php";
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

namespace Plugin\\AmazonPayV2_42_Bundle;

use Eccube\\Event\\TemplateEvent;
use Eccube\\Event\\EventArgs;
use Eccube\\Event\\EccubeEvents;
use Eccube\\Common\\EccubeConfig;
use Eccube\\Repository\\PaymentRepository;
use Eccube\\Repository\\PluginRepository;
use Eccube\\Service\\OrderHelper;
use Eccube\\Service\\CartService;
use Plugin\\AmazonPayV2_42_Bundle\\Repository\\ConfigRepository;
use Plugin\\AmazonPayV2_42_Bundle\\Service\\AmazonRequestService;
use Plugin\\AmazonPayV2_42_Bundle\\Service\\Method\\AmazonPay;
use Plugin\\AmazonPayV2_42_Bundle\\phpseclib\\Crypt\\Random;
use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Eccube\\Repository\\DeliveryRepository;
use Eccube\\Repository\\PaymentOptionRepository;
use Plugin\\AmazonPayV2_42_Bundle\\Entity\\AmazonBanner;
use Plugin\\AmazonPayV2_42_Bundle\\Service\\AmazonBannerService;

class AmazonPayEvent implements EventSubscriberInterface
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
     * @var string Amazonログインステート
     */
    private \$sessionAmazonLoginStateKey = 'amazon_pay_v2.amazon_login_state';

    /**
     * @var EccubeConfig
     */
    protected \$eccubeConfig;

    /**
     * @var UrlGeneratorInterface
     */
    private \$router;

    /**
     * @var ConfigRepository
     */
    protected \$configRepository;

    /**
     * @var AmazonRequestService
     */
    protected \$amazonRequestService;

    /**
     * @var DeliveryRepository
     */
    protected \$deliveryRepository;

    /**
     * @var DeliveryRepository
     */
    protected \$paymentOptionRepository;

    /**
     * Amazon Payバナーサービス
     *
     * @var AmazonBannerService
     */
    protected \$amazonBannerService;

    /**
     * AmazonPayEvent
     *
     * @param eccubeConfig \$eccubeConfig
     * @param ConfigRepository \$configRepository
     */
    public function __construct(
        RequestStack \$requestStack,
         
        TokenStorageInterface \$tokenStorage,
        EccubeConfig \$eccubeConfig,
        UrlGeneratorInterface \$router,
        PaymentRepository \$paymentRepository,
        PluginRepository \$pluginRepository,
        ConfigRepository \$configRepository,
        ContainerInterface \$container,
        OrderHelper \$orderHelper,
        CartService \$cartService,
        AmazonRequestService \$amazonRequestService,
        DeliveryRepository \$deliveryRepository,
        PaymentOptionRepository \$paymentOptionRepository,
        AmazonBannerService \$amazonBannerService
    ) {
        \$this->requestStack = \$requestStack;
        \$this->session = \$requestStack->getSession();
        \$this->tokenStorage = \$tokenStorage;
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->router = \$router;
        \$this->paymentRepository = \$paymentRepository;
        \$this->pluginRepository = \$pluginRepository;
        \$this->configRepository = \$configRepository;
        \$this->container = \$container;
        \$this->orderHelper = \$orderHelper;
        \$this->cartService = \$cartService;
        \$this->amazonRequestService = \$amazonRequestService;
        \$this->deliveryRepository = \$deliveryRepository;
        \$this->paymentOptionRepository = \$paymentOptionRepository;
        \$this->amazonBannerService = \$amazonBannerService;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            EccubeEvents::FRONT_CART_BUYSTEP_COMPLETE => 'amazon_cart_buystep',
            'Cart/index.twig' => 'cart',
            'Shopping/index.twig' => 'amazon_pay_shopping',
            'Mypage/login.twig' => 'mypage_login',
            'Shopping/confirm.twig' => 'amazon_pay_shopping_confirm',
            'index.twig' => 'add_banner_on_top',
        ];
    }

    /**
     * トップページのイベント
     * Amazon様バナーを挿入する
     *
     * @param TemplateEvent \$event
     * @return void
     */
    public function add_banner_on_top(TemplateEvent \$event)
    {
        \$Config = \$this->configRepository->get();
        
        if (\$Config->getUseAmazonBannerOnTop() == \$this->eccubeConfig['amazon_pay_v2']['toggle']['off']) {
            return;
        }

        if (\$Config->getAmazonBannerPlaceOnTop() == \$this->eccubeConfig['amazon_pay_v2']['button_place']['auto']) {
            \$event->addSnippet('@AmazonPayV2_42_Bundle/default/amazon_banner_auto_on_top.twig');
        }
        
        \$event->addSnippet(\$this->amazonBannerService->getBannerCodeOnTop(), false);
    }

    public function cart(TemplateEvent \$event)
    {
        \$Config = \$this->configRepository->get();

        if (\$Config->getUseAmazonBannerOnCart() != \$this->eccubeConfig['amazon_pay_v2']['toggle']['off']) {

            if (\$Config->getAmazonBannerPlaceOnCart() == \$this->eccubeConfig['amazon_pay_v2']['button_place']['auto']) {
                \$event->addSnippet('@AmazonPayV2_42_Bundle/default/amazon_banner_auto_on_cart.twig');
            }

            \$event->addSnippet(\$this->amazonBannerService->getBannerCodeOnCart(), false);
        }

        \$parameters = \$event->getParameters();
        if (empty(\$parameters['Carts'])) {
            return;
        }

        if (\$Config->getUseCartButton() == \$this->eccubeConfig['amazon_pay_v2']['toggle']['off']) {
            return;
        }

        // AmazonPayに紐づく商品種別の取得
        \$Payment = \$this->paymentRepository->findOneBy(['method_class' => AmazonPay::class]);
        \$AmazonDeliveries = \$this->paymentOptionRepository->findBy(['payment_id' => \$Payment->getId()]);
        \$AmazonSaleTypes = [];
        foreach (\$AmazonDeliveries as \$AmazonDelivery) {
            \$Delivery = \$this->deliveryRepository->findOneBy(['id' => \$AmazonDelivery->getDelivery()->getId()]);
            \$AmazonSaleTypes[] = \$Delivery->getSaleType()->getId();
        }
        \$parameters['AmazonSaleTypes'] = \$AmazonSaleTypes;

        foreach (\$parameters['Carts'] as \$Cart) {
            \$cartKey = \$Cart->getCartKey();
            \$payload = \$this->amazonRequestService->createCheckoutSessionPayload(\$Cart->getCartKey());
            \$signature = \$this->amazonRequestService->signaturePayload(\$payload);

            \$parameters['cart'][\$cartKey]['payload'] = \$payload;
            \$parameters['cart'][\$cartKey]['signature'] = \$signature;
        }

        \$parameters['AmazonPayV2Config'] = \$Config;
        if (\$Config->getEnv() == \$this->eccubeConfig['amazon_pay_v2']['env']['prod']) {
            \$parameters['AmazonPayV2Api'] = \$this->eccubeConfig['amazon_pay_v2']['api']['prod'];
        } else {
            \$parameters['AmazonPayV2Api'] = \$this->eccubeConfig['amazon_pay_v2']['api']['sandbox'];
        }
        \$event->setParameters(\$parameters);

        \$event->addSnippet('@AmazonPayV2_42_Bundle/default/Cart/amazon_pay_js.twig');

        if (\$Config->getCartButtonPlace() == \$this->eccubeConfig['amazon_pay_v2']['button_place']['auto']) {
            \$event->addSnippet('@AmazonPayV2_42_Bundle/default/Cart/button.twig');
        }
    }

    public function amazon_cart_buystep(EventArgs \$event)
    {
        // Amazonログインによる仮会員情報がセッションにセットされていたら
        if (\$this->orderHelper->getNonmember() && \$this->session->get(\$this->sessionAmazonProfileKey)) {
            // 仮会員情報を削除
            \$this->session->remove(OrderHelper::SESSION_NON_MEMBER);
            \$this->session->remove(\$this->sessionAmazonProfileKey);
            \$this->cartService->setPreOrderId(null);
            \$this->cartService->save();
        }
    }

    public function amazon_pay_shopping(TemplateEvent \$event)
    {
        \$request = \$this->requestStack->getMainRequest();
        \$uri = \$request->getUri();

        \$parameters = \$event->getParameters();

        if (preg_match('/shopping\\/amazon_pay/', \$uri) == false) {
            \$referer = \$request->headers->get('referer');
            \$Order = \$parameters['Order'];
            \$Payment = \$Order->getPayment();
            // AmazonPay決済確認画面→クーポン入力画面→決済確認画面への遷移時にAmazonPay決済確認画面へ戻す
            if (\$Payment && \$Payment->getMethodClass() === AmazonPay::class && preg_match('/shopping_coupon/', \$referer)) {
                header(\"Location:\" . \$this->router->generate('amazon_pay_shopping'));
                exit;
            }

            return;
        }

        \$Config = \$this->configRepository->get();

        \$event->addSnippet('@AmazonPayV2_42_Bundle/default/Shopping/widgets.twig');
        \$event->addSnippet('@AmazonPayV2_42_Bundle/default/Shopping/customer_regist_v2.twig');

        // チェックアウトセッションIDを取得する
        \$amazonCheckoutSessionId = \$this->session->get(\$this->sessionAmazonCheckoutSessionIdKey);

        \$parameters = \$event->getParameters();
        \$parameters['amazonCheckoutSessionId'] = \$amazonCheckoutSessionId;
        \$parameters['AmazonPayV2Config'] = \$Config;

        // メルマガプラグイン利用時はチェックボックスを追加
        if (
            \$this->pluginRepository->findOneBy(['code' => 'MailMagazine42', 'enabled' => true])
            || \$this->pluginRepository->findOneBy(['code' => 'PostCarrier42', 'enabled' => true])
        ) {
            \$useMailMagazine = true;
        } else {
            \$useMailMagazine = false;
        }
        \$parameters['useMailMagazine'] = \$useMailMagazine;

        if (\$Config->getEnv() == \$this->eccubeConfig['amazon_pay_v2']['env']['prod']) {
            \$parameters['AmazonPayV2Api'] = \$this->eccubeConfig['amazon_pay_v2']['api']['prod'];
        } else {
            \$parameters['AmazonPayV2Api'] = \$this->eccubeConfig['amazon_pay_v2']['api']['sandbox'];
        }
        \$event->setParameters(\$parameters);
    }

    public function amazon_pay_shopping_confirm(TemplateEvent \$event)
    {
        \$request = \$this->requestStack->getMainRequest();
        \$uri = \$request->getUri();

        if (preg_match('/shopping\\/amazon_pay/', \$uri) == false) {
            return;
        }
        \$Config = \$this->configRepository->get();

        \$event->addSnippet('@AmazonPayV2_42_Bundle/default/Shopping/confirm_widgets.twig');
        \$event->addSnippet('@AmazonPayV2_42_Bundle/default/Shopping/confirm_customer_regist_v2.twig');

        \$parameters = \$event->getParameters();
        \$parameters['AmazonPayV2Config'] = \$Config;

        // メルマガプラグイン利用時はチェックボックスを追加
        if (
            \$this->pluginRepository->findOneBy(['code' => 'MailMagazine42', 'enabled' => true])
            || \$this->pluginRepository->findOneBy(['code' => 'PostCarrier42', 'enabled' => true])
        ) {
            \$useMailMagazine = true;
        } else {
            \$useMailMagazine = false;
        }
        \$parameters['useMailMagazine'] = \$useMailMagazine;

        if (\$Config->getEnv() == \$this->eccubeConfig['amazon_pay_v2']['env']['prod']) {
            \$parameters['AmazonPayV2Api'] = \$this->eccubeConfig['amazon_pay_v2']['api']['prod'];
        } else {
            \$parameters['AmazonPayV2Api'] = \$this->eccubeConfig['amazon_pay_v2']['api']['sandbox'];
        }
        \$event->setParameters(\$parameters);
    }

    public function mypage_login(TemplateEvent \$event)
    {
        \$Config = \$this->configRepository->get();

        if (\$Config->getUseMypageLoginButton() == \$this->eccubeConfig['amazon_pay_v2']['toggle']['off']) {
            return;
        }

        \$state = \$this->session->get(\$this->sessionAmazonLoginStateKey);
        if (!\$state) {
            // stateが生成されていなければ、生成及びセッションセット
            \$state = bin2hex(Random::string(16));
            \$this->session->set(\$this->sessionAmazonLoginStateKey, \$state);
        }

        \$returnUrl = \$this->router->generate('login_with_amazon', ['state' => \$state], UrlGeneratorInterface::ABSOLUTE_URL);

        \$parameters = \$event->getParameters();

        \$payload = \$this->amazonRequestService->createSigninPayload(\$returnUrl);
        \$signature = \$this->amazonRequestService->signaturePayload(\$payload);

        \$parameters['payload'] = \$payload;
        \$parameters['signature'] = \$signature;
        \$parameters['buttonColor'] = \$Config->getMypageLoginButtonColor();

        \$parameters['AmazonPayV2Config'] = \$Config;
        if (\$Config->getEnv() == \$this->eccubeConfig['amazon_pay_v2']['env']['prod']) {
            \$parameters['AmazonPayV2Api'] = \$this->eccubeConfig['amazon_pay_v2']['api']['prod'];
        } else {
            \$parameters['AmazonPayV2Api'] = \$this->eccubeConfig['amazon_pay_v2']['api']['sandbox'];
        }

        \$event->setParameters(\$parameters);

        if (\$Config->getMypageLoginButtonPlace() == \$this->eccubeConfig['amazon_pay_v2']['button_place']['auto']) {
            \$event->addSnippet('@AmazonPayV2_42_Bundle/default/Mypage/login_page_button.twig');
        }

        \$event->addSnippet('@AmazonPayV2_42_Bundle/default/Mypage/amazon_login_js.twig');
    }
}
", "AmazonPayV2_42_Bundle/AmazonPayEvent.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\AmazonPayV2_42_Bundle\\AmazonPayEvent.php");
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
