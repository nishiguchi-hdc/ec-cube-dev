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

/* EccubePaymentLite42/Service/GmoEpsilonRequest/RequestShippingRegistrationService.php */
class __TwigTemplate_effa601960c4b842552e4ce51a0e2277 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/GmoEpsilonRequest/RequestShippingRegistrationService.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/GmoEpsilonRequest/RequestShippingRegistrationService.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest;

use Eccube\\Common\\EccubeConfig;
use Eccube\\Entity\\Order;
use Eccube\\Entity\\Shipping;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Repository\\PaymentStatusRepository;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequestService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonUrlService;

class RequestShippingRegistrationService
{
    /**
     * @var GmoEpsilonUrlService
     */
    private \$gmoEpsilonUrlService;
    /**
     * @var GmoEpsilonRequestService
     */
    private \$gmoEpsilonRequestService;
    /**
     * @var EccubeConfig
     */
    private \$eccubeConfig;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;
    /**
     * @var PaymentStatusRepository
     */
    private \$paymentStatusRepository;

    public function __construct(
        GmoEpsilonUrlService \$gmoEpsilonUrlService,
        GmoEpsilonRequestService \$gmoEpsilonRequestService,
        EccubeConfig \$eccubeConfig,
        ConfigRepository \$configRepository,
        PaymentStatusRepository \$paymentStatusRepository
    ) {
        \$this->gmoEpsilonUrlService = \$gmoEpsilonUrlService;
        \$this->gmoEpsilonRequestService = \$gmoEpsilonRequestService;
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->configRepository = \$configRepository;
        \$this->paymentStatusRepository = \$paymentStatusRepository;
    }

    public function handle(Order \$Order)
    {
        \$status = 'NG';
        // gmo_epsilon_order_noのチェック
        if (is_null(\$Order->getGmoEpsilonOrderNo())) {
            return [
                'result' => \$this->eccubeConfig['gmo_epsilon']['receive_parameters']['result']['ng'],
                'err_code' => '',
                'message' => '受注ID: '.\$Order->getId().' GMOイプシロンIDが未登録のため、イプシロン決済サービスとの同期処理をスキップしました',
                'status' => \$status,
            ];
        }

        // 決済種別のチェック
        // GMO後払いではない場合処理をスキップする
        if (\$Order->getPaymentMethod() !== \$this->eccubeConfig['gmo_epsilon']['pay_name']['deferred']) {
            return [
                'result' => \$this->eccubeConfig['gmo_epsilon']['receive_parameters']['result']['ng'],
                'err_code' => '',
                'message' => '受注ID: '.\$Order->getId().' 決済種別がGMO後払いではないため、イプシロン決済サービスとの同期処理をスキップしました',
                'status' => \$status,
            ];
        }

        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);

        /** @var Shipping \$Shipping */
        \$Shipping = \$Order->getShippings()->first();

        // trackingNumberのチェック
        if (is_null(\$Shipping->getTrackingNumber())) {
            return [
                'result' => \$this->eccubeConfig['gmo_epsilon']['receive_parameters']['result']['ng'],
                'err_code' => '',
                'message' => '受注ID: '.\$Order->getId().' お問い合わせ番号が未登録のため、イプシロン決済サービスとの同期処理をスキップしました',
                'status' => \$status,
            ];
        }
        \$response = \$this->gmoEpsilonRequestService->sendData(
            \$this->gmoEpsilonUrlService->getUrl('ship_request'), [
                'contract_code' => \$Config->getContractCode(),
                'order_number' => \$Order->getGmoEpsilonOrderNo(),
                'delivery_com_code' => \$Shipping->getDelivery()->getDeliveryCompany()->getId(),
                'ship_no' => \$Shipping->getTrackingNumber(),
            ]
        );

        \$message = \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'ERR_DETAIL');

        \$result = (int) \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'RESULT');
        if (\$result === \$this->eccubeConfig['gmo_epsilon']['receive_parameters']['result']['ok']) {
            \$message = '受注ID: '.\$Order->getId().' 出荷登録処理が完了しました。イプシロン決済システムの決済ステータスが「仮売上」→ 「出荷登録中」に変更されました。';
            \$status = 'OK';
        }

        return [
            'result' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'RESULT'),
            'err_code' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'ERR_CODE'),
            'message' => \$message,
            'status' => \$status,
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
        return "EccubePaymentLite42/Service/GmoEpsilonRequest/RequestShippingRegistrationService.php";
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

namespace Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest;

use Eccube\\Common\\EccubeConfig;
use Eccube\\Entity\\Order;
use Eccube\\Entity\\Shipping;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Repository\\PaymentStatusRepository;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequestService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonUrlService;

class RequestShippingRegistrationService
{
    /**
     * @var GmoEpsilonUrlService
     */
    private \$gmoEpsilonUrlService;
    /**
     * @var GmoEpsilonRequestService
     */
    private \$gmoEpsilonRequestService;
    /**
     * @var EccubeConfig
     */
    private \$eccubeConfig;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;
    /**
     * @var PaymentStatusRepository
     */
    private \$paymentStatusRepository;

    public function __construct(
        GmoEpsilonUrlService \$gmoEpsilonUrlService,
        GmoEpsilonRequestService \$gmoEpsilonRequestService,
        EccubeConfig \$eccubeConfig,
        ConfigRepository \$configRepository,
        PaymentStatusRepository \$paymentStatusRepository
    ) {
        \$this->gmoEpsilonUrlService = \$gmoEpsilonUrlService;
        \$this->gmoEpsilonRequestService = \$gmoEpsilonRequestService;
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->configRepository = \$configRepository;
        \$this->paymentStatusRepository = \$paymentStatusRepository;
    }

    public function handle(Order \$Order)
    {
        \$status = 'NG';
        // gmo_epsilon_order_noのチェック
        if (is_null(\$Order->getGmoEpsilonOrderNo())) {
            return [
                'result' => \$this->eccubeConfig['gmo_epsilon']['receive_parameters']['result']['ng'],
                'err_code' => '',
                'message' => '受注ID: '.\$Order->getId().' GMOイプシロンIDが未登録のため、イプシロン決済サービスとの同期処理をスキップしました',
                'status' => \$status,
            ];
        }

        // 決済種別のチェック
        // GMO後払いではない場合処理をスキップする
        if (\$Order->getPaymentMethod() !== \$this->eccubeConfig['gmo_epsilon']['pay_name']['deferred']) {
            return [
                'result' => \$this->eccubeConfig['gmo_epsilon']['receive_parameters']['result']['ng'],
                'err_code' => '',
                'message' => '受注ID: '.\$Order->getId().' 決済種別がGMO後払いではないため、イプシロン決済サービスとの同期処理をスキップしました',
                'status' => \$status,
            ];
        }

        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);

        /** @var Shipping \$Shipping */
        \$Shipping = \$Order->getShippings()->first();

        // trackingNumberのチェック
        if (is_null(\$Shipping->getTrackingNumber())) {
            return [
                'result' => \$this->eccubeConfig['gmo_epsilon']['receive_parameters']['result']['ng'],
                'err_code' => '',
                'message' => '受注ID: '.\$Order->getId().' お問い合わせ番号が未登録のため、イプシロン決済サービスとの同期処理をスキップしました',
                'status' => \$status,
            ];
        }
        \$response = \$this->gmoEpsilonRequestService->sendData(
            \$this->gmoEpsilonUrlService->getUrl('ship_request'), [
                'contract_code' => \$Config->getContractCode(),
                'order_number' => \$Order->getGmoEpsilonOrderNo(),
                'delivery_com_code' => \$Shipping->getDelivery()->getDeliveryCompany()->getId(),
                'ship_no' => \$Shipping->getTrackingNumber(),
            ]
        );

        \$message = \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'ERR_DETAIL');

        \$result = (int) \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'RESULT');
        if (\$result === \$this->eccubeConfig['gmo_epsilon']['receive_parameters']['result']['ok']) {
            \$message = '受注ID: '.\$Order->getId().' 出荷登録処理が完了しました。イプシロン決済システムの決済ステータスが「仮売上」→ 「出荷登録中」に変更されました。';
            \$status = 'OK';
        }

        return [
            'result' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'RESULT'),
            'err_code' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'ERR_CODE'),
            'message' => \$message,
            'status' => \$status,
        ];
    }
}
", "EccubePaymentLite42/Service/GmoEpsilonRequest/RequestShippingRegistrationService.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestShippingRegistrationService.php");
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
