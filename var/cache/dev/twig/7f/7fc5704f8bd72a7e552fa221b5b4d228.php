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

/* EccubePaymentLite42/Controller/Front/Shopping/Reception3DSAuthenticationController.php */
class __TwigTemplate_b596a1e438ce09beb79370e831260db9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Front/Shopping/Reception3DSAuthenticationController.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Front/Shopping/Reception3DSAuthenticationController.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Controller\\Front\\Shopping;

use Eccube\\Controller\\AbstractController;
use Eccube\\Entity\\Master\\OrderStatus;
use Eccube\\Exception\\ShoppingException;
use Eccube\\Repository\\OrderRepository;
use Eccube\\Service\\CartService;
use Eccube\\Service\\MailService;
use Eccube\\Service\\OrderHelper;
use Eccube\\Service\\Payment\\PaymentMethodInterface;
use Exception;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequestService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonUrlService;
use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException;
use Symfony\\Component\\Routing\\Annotation\\Route;

class Reception3DSAuthenticationController extends AbstractController
{
    /**
     * @var ConfigRepository
     */
    private \$configRepository;
    /**
     * @var GmoEpsilonRequestService
     */
    private \$gmoEpsilonRequestService;
    /**
     * @var GmoEpsilonUrlService
     */
    private \$gmoEpsilonUrlService;
    /**
     * @var OrderRepository
     */
    private \$orderRepository;
    /**
     * @var CartService
     */
    protected \$cartService;

    /**
     * @var MailService
     */
    protected \$mailService;

    /**
     * @var OrderHelper
     */
    protected \$orderHelper;

    /**
     * @var ContainerInterface
     */
    protected \$serviceContainer;

    public function __construct(
        ConfigRepository \$configRepository,
        GmoEpsilonRequestService \$gmoEpsilonRequestService,
        GmoEpsilonUrlService \$gmoEpsilonUrlService,
        OrderRepository \$orderRepository,
        CartService \$cartService,
        MailService \$mailService,
        OrderHelper \$orderHelper,
        ContainerInterface \$serviceContainer
    ) {
        \$this->configRepository = \$configRepository;
        \$this->gmoEpsilonRequestService = \$gmoEpsilonRequestService;
        \$this->Config = \$configRepository->get();
        \$this->gmoEpsilonUrlService = \$gmoEpsilonUrlService;
        \$this->orderRepository = \$orderRepository;
        \$this->cartService = \$cartService;
        \$this->mailService = \$mailService;
        \$this->orderHelper = \$orderHelper;
        \$this->serviceContainer = \$serviceContainer;
    }

    /**
     * 3Dセキュア認証受信パラメータ1　カード会社⇒加盟店様
     *
     * @Route(
     *     \"/shopping/eccube_payment_lite/reception3ds\",
     *     name=\"eccube_payment_lite42_reception_3ds\",
     *     methods={\"POST\"}
     * )
     * @Route(
     *     \"/shopping/eccube_payment_lite/reception3ds2\",
     *     name=\"eccube_payment_lite42_reception_3ds2\",
     *     methods={\"POST\"}
     * )
     *
     * @throws Exception
     */
    public function index(Request \$request)
    {
        logs('gmo_epsilon')->info(' Access to Reception3DSAuthenticationController ');
        \$md = '';
        \$paRes = '';
        if (\$request->get('MD')) {
            \$md = \$request->get('MD');
        }
        if (\$request->get('PaRes')) {
            \$paRes = \$request->get('PaRes');
        }

        \$preOrderId = \$md;
        \$Order = \$this->getPurchasePendingOrder(\$preOrderId);
        if (!\$Order) {
            log_info('[注文処理] 決済処理中の受注が存在しません.', [\$preOrderId]);

            return \$this->redirectToRoute('shopping_error');
        }

        \$parameters = [
            'contract_code' => \$this->Config->getContractCode(),
            'order_number' => \$Order->getGmoEpsilonOrderNo(),
            'tds_check_code' => 2, // 2：3DS結果確認処理（2回目）
            'tds_pares' => \$paRes, // カード会社からの戻り値「PaRes」を設定してください。
        ];
        // write log for sent parameters to  Epsilon
        logs('gmo_epsilon')->info('Data 3Dセキュア認証送信パラメータ2 3DS 2.0 => トークン決済 (eccube_payment_lite4_reception_3ds2):  = '.print_r(\$parameters, true));
        // 3Dセキュア認証送信パラメータ2　加盟店様⇒イプシロン
        \$xmlResponse = \$this->gmoEpsilonRequestService->sendData(
            \$this->gmoEpsilonUrlService->getUrl(
                'direct_card_payment'),
            \$parameters
        );

        \$message = \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'ERR_DETAIL');
        \$errCode = \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'ERR_CODE');
        \$result = (int) \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'RESULT');
        // write log for receive parameters from Epsilon
        logs('gmo_epsilon')->info('Data response arrReturn 3DS 2.0 => トークン決済 (message) :  = '.print_r(\$message, true));
        logs('gmo_epsilon')->info('Data response arrReturn 3DS 2.0 => トークン決済 (errCode) :  = '.print_r(\$errCode, true));
        logs('gmo_epsilon')->info('Data response arrReturn 3DS 2.0 => トークン決済 (result)  :  = '.print_r(\$result, true));
        if (!empty(\$errCode)) {
            logs('gmo_epsilon')->error('ERR_CODE = '.\$errCode);
            logs('gmo_epsilon')->error('ERR_DETAIL = '.\$message);
            return \$this->redirectToRoute('shopping_error');
        }

        if (\$result === \$this->eccubeConfig['gmo_epsilon']['receive_parameters']['result']['ok']) {
            try {
                log_info('[注文処理] PaymentMethodを取得しますssss.', [\$Order->getPayment()->getMethodClass()]);
                \$PaymentMethod = \$this->serviceContainer->get(\$Order->getPayment()->getMethodClass());
                \$PaymentMethod->setOrder(\$Order);

                /*
                 * 決済実行
                 *
                 * PaymentMethod::checkoutでは決済処理が行われ, 正常に処理出来た場合はPurchaseFlow::commitがコールされます.
                 */
                log_info('[注文処理] PaymentMethod::checkoutを実行します.');
                if (\$response = \$this->executeCheckout(\$PaymentMethod)) {
                    return \$response;
                }

                \$this->entityManager->flush();

                log_info('[注文処理] 注文処理が完了しました.', [\$Order->getId()]);
            } catch (ShoppingException \$e) {
                log_error('[注文処理] 購入エラーが発生しました.', [\$e->getMessage()]);

                \$this->entityManager->rollback();

                \$this->addError(\$e->getMessage());

                return \$this->redirectToRoute('shopping_error');
            } catch (\\Exception \$e) {
                log_error('[注文処理] 予期しないエラーが発生しました.', [\$e->getMessage()]);

                \$this->entityManager->rollback();

                \$this->addError('front.shopping.system_error');

                return \$this->redirectToRoute('shopping_error');
            }


            // カート削除
            log_info('[注文処理] カートをクリアします.', [\$Order->getId()]);
            \$this->cartService->clear();

            // 受注IDをセッションにセット
            \$this->session->set(OrderHelper::SESSION_ORDER_ID, \$Order->getId());

            // メール送信
            log_info('[注文処理] 注文メールの送信を行います.', [\$Order->getId()]);
            \$this->mailService->sendOrderMail(\$Order);
            \$this->entityManager->flush();

            log_info('[注文処理] 注文処理が完了しました. 購入完了画面へ遷移します.', [\$Order->getId()]);

            return \$this->redirectToRoute('shopping_complete');
        }
    }

    /**
     * PaymentMethod::checkoutを実行する.
     *
     * @param PaymentMethodInterface \$paymentMethod
     *
     * @return \\Symfony\\Component\\HttpFoundation\\RedirectResponse|\\Symfony\\Component\\HttpFoundation\\Response
     */
    protected function executeCheckout(PaymentMethodInterface \$paymentMethod)
    {
        \$PaymentResult = \$paymentMethod->checkout();
        \$response = \$PaymentResult->getResponse();
        // PaymentResultがresponseを保持している場合はresponseを返す
        if (\$response instanceof Response && (\$response->isRedirection() || \$response->isSuccessful())) {
            \$this->entityManager->flush();
            log_info('[注文処理] PaymentMethod::checkoutが指定したレスポンスを表示します.');

            return \$response;
        }

        // エラー時はロールバックして購入エラーとする.
        if (!\$PaymentResult->isSuccess()) {
            \$this->entityManager->rollback();
            foreach (\$PaymentResult->getErrors() as \$error) {
                \$this->addError(\$error);
            }

            log_info('[注文処理] PaymentMethod::checkoutのエラーのため, 購入エラー画面へ遷移します.', [\$PaymentResult->getErrors()]);

            return \$this->redirectToRoute('shopping_error');
        }
    }

    /**
     * 決済処理中の受注を取得する.
     *
     * @param null|string \$preOrderId
     *
     * @return null|Order
     */
    public function getPurchasePendingOrder(\$preOrderId = null)
    {
        if (null === \$preOrderId) {
            return null;
        }

        return \$this->orderRepository->findOneBy([
            'pre_order_id' => \$preOrderId,
            'OrderStatus' => OrderStatus::PENDING,
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
        return "EccubePaymentLite42/Controller/Front/Shopping/Reception3DSAuthenticationController.php";
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
use Eccube\\Entity\\Master\\OrderStatus;
use Eccube\\Exception\\ShoppingException;
use Eccube\\Repository\\OrderRepository;
use Eccube\\Service\\CartService;
use Eccube\\Service\\MailService;
use Eccube\\Service\\OrderHelper;
use Eccube\\Service\\Payment\\PaymentMethodInterface;
use Exception;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequestService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonUrlService;
use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException;
use Symfony\\Component\\Routing\\Annotation\\Route;

class Reception3DSAuthenticationController extends AbstractController
{
    /**
     * @var ConfigRepository
     */
    private \$configRepository;
    /**
     * @var GmoEpsilonRequestService
     */
    private \$gmoEpsilonRequestService;
    /**
     * @var GmoEpsilonUrlService
     */
    private \$gmoEpsilonUrlService;
    /**
     * @var OrderRepository
     */
    private \$orderRepository;
    /**
     * @var CartService
     */
    protected \$cartService;

    /**
     * @var MailService
     */
    protected \$mailService;

    /**
     * @var OrderHelper
     */
    protected \$orderHelper;

    /**
     * @var ContainerInterface
     */
    protected \$serviceContainer;

    public function __construct(
        ConfigRepository \$configRepository,
        GmoEpsilonRequestService \$gmoEpsilonRequestService,
        GmoEpsilonUrlService \$gmoEpsilonUrlService,
        OrderRepository \$orderRepository,
        CartService \$cartService,
        MailService \$mailService,
        OrderHelper \$orderHelper,
        ContainerInterface \$serviceContainer
    ) {
        \$this->configRepository = \$configRepository;
        \$this->gmoEpsilonRequestService = \$gmoEpsilonRequestService;
        \$this->Config = \$configRepository->get();
        \$this->gmoEpsilonUrlService = \$gmoEpsilonUrlService;
        \$this->orderRepository = \$orderRepository;
        \$this->cartService = \$cartService;
        \$this->mailService = \$mailService;
        \$this->orderHelper = \$orderHelper;
        \$this->serviceContainer = \$serviceContainer;
    }

    /**
     * 3Dセキュア認証受信パラメータ1　カード会社⇒加盟店様
     *
     * @Route(
     *     \"/shopping/eccube_payment_lite/reception3ds\",
     *     name=\"eccube_payment_lite42_reception_3ds\",
     *     methods={\"POST\"}
     * )
     * @Route(
     *     \"/shopping/eccube_payment_lite/reception3ds2\",
     *     name=\"eccube_payment_lite42_reception_3ds2\",
     *     methods={\"POST\"}
     * )
     *
     * @throws Exception
     */
    public function index(Request \$request)
    {
        logs('gmo_epsilon')->info(' Access to Reception3DSAuthenticationController ');
        \$md = '';
        \$paRes = '';
        if (\$request->get('MD')) {
            \$md = \$request->get('MD');
        }
        if (\$request->get('PaRes')) {
            \$paRes = \$request->get('PaRes');
        }

        \$preOrderId = \$md;
        \$Order = \$this->getPurchasePendingOrder(\$preOrderId);
        if (!\$Order) {
            log_info('[注文処理] 決済処理中の受注が存在しません.', [\$preOrderId]);

            return \$this->redirectToRoute('shopping_error');
        }

        \$parameters = [
            'contract_code' => \$this->Config->getContractCode(),
            'order_number' => \$Order->getGmoEpsilonOrderNo(),
            'tds_check_code' => 2, // 2：3DS結果確認処理（2回目）
            'tds_pares' => \$paRes, // カード会社からの戻り値「PaRes」を設定してください。
        ];
        // write log for sent parameters to  Epsilon
        logs('gmo_epsilon')->info('Data 3Dセキュア認証送信パラメータ2 3DS 2.0 => トークン決済 (eccube_payment_lite4_reception_3ds2):  = '.print_r(\$parameters, true));
        // 3Dセキュア認証送信パラメータ2　加盟店様⇒イプシロン
        \$xmlResponse = \$this->gmoEpsilonRequestService->sendData(
            \$this->gmoEpsilonUrlService->getUrl(
                'direct_card_payment'),
            \$parameters
        );

        \$message = \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'ERR_DETAIL');
        \$errCode = \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'ERR_CODE');
        \$result = (int) \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'RESULT');
        // write log for receive parameters from Epsilon
        logs('gmo_epsilon')->info('Data response arrReturn 3DS 2.0 => トークン決済 (message) :  = '.print_r(\$message, true));
        logs('gmo_epsilon')->info('Data response arrReturn 3DS 2.0 => トークン決済 (errCode) :  = '.print_r(\$errCode, true));
        logs('gmo_epsilon')->info('Data response arrReturn 3DS 2.0 => トークン決済 (result)  :  = '.print_r(\$result, true));
        if (!empty(\$errCode)) {
            logs('gmo_epsilon')->error('ERR_CODE = '.\$errCode);
            logs('gmo_epsilon')->error('ERR_DETAIL = '.\$message);
            return \$this->redirectToRoute('shopping_error');
        }

        if (\$result === \$this->eccubeConfig['gmo_epsilon']['receive_parameters']['result']['ok']) {
            try {
                log_info('[注文処理] PaymentMethodを取得しますssss.', [\$Order->getPayment()->getMethodClass()]);
                \$PaymentMethod = \$this->serviceContainer->get(\$Order->getPayment()->getMethodClass());
                \$PaymentMethod->setOrder(\$Order);

                /*
                 * 決済実行
                 *
                 * PaymentMethod::checkoutでは決済処理が行われ, 正常に処理出来た場合はPurchaseFlow::commitがコールされます.
                 */
                log_info('[注文処理] PaymentMethod::checkoutを実行します.');
                if (\$response = \$this->executeCheckout(\$PaymentMethod)) {
                    return \$response;
                }

                \$this->entityManager->flush();

                log_info('[注文処理] 注文処理が完了しました.', [\$Order->getId()]);
            } catch (ShoppingException \$e) {
                log_error('[注文処理] 購入エラーが発生しました.', [\$e->getMessage()]);

                \$this->entityManager->rollback();

                \$this->addError(\$e->getMessage());

                return \$this->redirectToRoute('shopping_error');
            } catch (\\Exception \$e) {
                log_error('[注文処理] 予期しないエラーが発生しました.', [\$e->getMessage()]);

                \$this->entityManager->rollback();

                \$this->addError('front.shopping.system_error');

                return \$this->redirectToRoute('shopping_error');
            }


            // カート削除
            log_info('[注文処理] カートをクリアします.', [\$Order->getId()]);
            \$this->cartService->clear();

            // 受注IDをセッションにセット
            \$this->session->set(OrderHelper::SESSION_ORDER_ID, \$Order->getId());

            // メール送信
            log_info('[注文処理] 注文メールの送信を行います.', [\$Order->getId()]);
            \$this->mailService->sendOrderMail(\$Order);
            \$this->entityManager->flush();

            log_info('[注文処理] 注文処理が完了しました. 購入完了画面へ遷移します.', [\$Order->getId()]);

            return \$this->redirectToRoute('shopping_complete');
        }
    }

    /**
     * PaymentMethod::checkoutを実行する.
     *
     * @param PaymentMethodInterface \$paymentMethod
     *
     * @return \\Symfony\\Component\\HttpFoundation\\RedirectResponse|\\Symfony\\Component\\HttpFoundation\\Response
     */
    protected function executeCheckout(PaymentMethodInterface \$paymentMethod)
    {
        \$PaymentResult = \$paymentMethod->checkout();
        \$response = \$PaymentResult->getResponse();
        // PaymentResultがresponseを保持している場合はresponseを返す
        if (\$response instanceof Response && (\$response->isRedirection() || \$response->isSuccessful())) {
            \$this->entityManager->flush();
            log_info('[注文処理] PaymentMethod::checkoutが指定したレスポンスを表示します.');

            return \$response;
        }

        // エラー時はロールバックして購入エラーとする.
        if (!\$PaymentResult->isSuccess()) {
            \$this->entityManager->rollback();
            foreach (\$PaymentResult->getErrors() as \$error) {
                \$this->addError(\$error);
            }

            log_info('[注文処理] PaymentMethod::checkoutのエラーのため, 購入エラー画面へ遷移します.', [\$PaymentResult->getErrors()]);

            return \$this->redirectToRoute('shopping_error');
        }
    }

    /**
     * 決済処理中の受注を取得する.
     *
     * @param null|string \$preOrderId
     *
     * @return null|Order
     */
    public function getPurchasePendingOrder(\$preOrderId = null)
    {
        if (null === \$preOrderId) {
            return null;
        }

        return \$this->orderRepository->findOneBy([
            'pre_order_id' => \$preOrderId,
            'OrderStatus' => OrderStatus::PENDING,
        ]);
    }
}
", "EccubePaymentLite42/Controller/Front/Shopping/Reception3DSAuthenticationController.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Controller\\Front\\Shopping\\Reception3DSAuthenticationController.php");
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
