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

/* EccubePaymentLite42/Service/GmoEpsilonRequest/RequestCreateRegularOrderService.php */
class __TwigTemplate_e1ec5432c7afe3317cf50a632c35d981 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/GmoEpsilonRequest/RequestCreateRegularOrderService.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/GmoEpsilonRequest/RequestCreateRegularOrderService.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest;

use Eccube\\Common\\Constant;
use Eccube\\Common\\EccubeConfig;
use Eccube\\Entity\\Order;
use Eccube\\Repository\\PluginRepository;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrder;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Service\\GetProductInformationFromOrderService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonOrderNoService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequestService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonUrlService;

class RequestCreateRegularOrderService
{
    /**
     * @var GmoEpsilonRequestService
     */
    private \$gmoEpsilonRequestService;
    /**
     * @var GmoEpsilonUrlService
     */
    private \$gmoEpsilonUrlService;
    /**
     * @var EccubeConfig
     */
    protected \$eccubeConfig;
    /**
     * @var GetProductInformationFromOrderService
     */
    private \$getProductInformationFromOrderService;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;
    /**
     * @var GmoEpsilonOrderNoService
     */
    private \$gmoEpsilonOrderNoService;
    /**
     * @var GetCardCgiUrlService
     */
    private \$getCardCgiUrlService;
    /**
     * @var pluginRepository
     */
    private \$pluginRepository;

    public function __construct(
        GmoEpsilonRequestService \$gmoEpsilonRequestService,
        ConfigRepository \$configRepository,
        GmoEpsilonUrlService \$gmoEpsilonUrlService,
        EccubeConfig \$eccubeConfig,
        GetProductInformationFromOrderService \$getProductInformationFromOrderService,
        GmoEpsilonOrderNoService \$gmoEpsilonOrderNoService,
        GetCardCgiUrlService \$getCardCgiUrlService,
        PluginRepository \$pluginRepository
    ) {
        \$this->gmoEpsilonRequestService = \$gmoEpsilonRequestService;
        \$this->gmoEpsilonUrlService = \$gmoEpsilonUrlService;
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->getProductInformationFromOrderService = \$getProductInformationFromOrderService;
        \$this->configRepository = \$configRepository;
        \$this->gmoEpsilonOrderNoService = \$gmoEpsilonOrderNoService;
        \$this->getCardCgiUrlService = \$getCardCgiUrlService;
        \$this->pluginRepository = \$pluginRepository;
    }

    public function handle(RegularOrder \$RegularOrder, Order \$Order, string \$route)
    {
        \$status = 'NG';
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        \$Customer = \$RegularOrder->getCustomer();
        \$gmoEpsilonOrderNo = \$this->gmoEpsilonOrderNoService->create(\$Order->getId());
        \$itemInformation = \$this->getProductInformationFromOrderService->handle(\$Order);
        \$PluginVersion = \$this->pluginRepository->findByCode('eccubepaymentlite42')->getVersion();

        \$xmlResponse = \$this->gmoEpsilonRequestService->sendData(
            \$this->gmoEpsilonUrlService->getUrl('receive_order3'),
            [
                'version' => 1,
                'contract_code' => \$Config->getContractCode(),
                'user_id' => \$Customer->getId(),
                'user_name' => \$Customer->getName01().' '.\$Customer->getName02(),
                'user_mail_add' => \$Customer->getEmail(),
                'item_code' => \$itemInformation['item_code'],
                'item_name' => \$itemInformation['item_name'],
                'order_number' => \$gmoEpsilonOrderNo,
                'st_code' => '11000-0000-00000-00000-00000-00000-00000',
                'mission_code' => 1,
                'item_price' => (int) \$Order->getPaymentTotal(),
                'process_code' => 2, // 登録済み課金
                'memo1' => \$route, // 管理画面より登録したことを記録。card3.cgiのリダイレクト先(eccube_payment_lite42_payment_complete)で利用する。
                'memo2' => 'EC-CUBE_' . Constant::VERSION . '_' . \$PluginVersion . \"_\" . date('YmdHis'),
                'xml' => 1,
            ]
        );

        \$message = \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'ERR_DETAIL');
        \$result = (int) \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'RESULT');
        \$redirectUrl = '';
        // 正常にカード番号が取得出来た場合はカード情報を返却する
        if (\$result === \$this->eccubeConfig['gmo_epsilon']['receive_parameters']['result']['ok']) {
            \$message = '正常終了';
            \$status = 'OK';
            \$redirectUrl = \$this->getCardCgiUrlService->getUrl(\$xmlResponse);
        }

        return [
            'result' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'RESULT'),
            'err_code' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'ERR_CODE'),
            'message' => \$message,
            'status' => \$status,
            'redirectUrl' => \$redirectUrl,
            'order_no' => \$gmoEpsilonOrderNo,
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
        return "EccubePaymentLite42/Service/GmoEpsilonRequest/RequestCreateRegularOrderService.php";
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

use Eccube\\Common\\Constant;
use Eccube\\Common\\EccubeConfig;
use Eccube\\Entity\\Order;
use Eccube\\Repository\\PluginRepository;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrder;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Service\\GetProductInformationFromOrderService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonOrderNoService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequestService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonUrlService;

class RequestCreateRegularOrderService
{
    /**
     * @var GmoEpsilonRequestService
     */
    private \$gmoEpsilonRequestService;
    /**
     * @var GmoEpsilonUrlService
     */
    private \$gmoEpsilonUrlService;
    /**
     * @var EccubeConfig
     */
    protected \$eccubeConfig;
    /**
     * @var GetProductInformationFromOrderService
     */
    private \$getProductInformationFromOrderService;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;
    /**
     * @var GmoEpsilonOrderNoService
     */
    private \$gmoEpsilonOrderNoService;
    /**
     * @var GetCardCgiUrlService
     */
    private \$getCardCgiUrlService;
    /**
     * @var pluginRepository
     */
    private \$pluginRepository;

    public function __construct(
        GmoEpsilonRequestService \$gmoEpsilonRequestService,
        ConfigRepository \$configRepository,
        GmoEpsilonUrlService \$gmoEpsilonUrlService,
        EccubeConfig \$eccubeConfig,
        GetProductInformationFromOrderService \$getProductInformationFromOrderService,
        GmoEpsilonOrderNoService \$gmoEpsilonOrderNoService,
        GetCardCgiUrlService \$getCardCgiUrlService,
        PluginRepository \$pluginRepository
    ) {
        \$this->gmoEpsilonRequestService = \$gmoEpsilonRequestService;
        \$this->gmoEpsilonUrlService = \$gmoEpsilonUrlService;
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->getProductInformationFromOrderService = \$getProductInformationFromOrderService;
        \$this->configRepository = \$configRepository;
        \$this->gmoEpsilonOrderNoService = \$gmoEpsilonOrderNoService;
        \$this->getCardCgiUrlService = \$getCardCgiUrlService;
        \$this->pluginRepository = \$pluginRepository;
    }

    public function handle(RegularOrder \$RegularOrder, Order \$Order, string \$route)
    {
        \$status = 'NG';
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        \$Customer = \$RegularOrder->getCustomer();
        \$gmoEpsilonOrderNo = \$this->gmoEpsilonOrderNoService->create(\$Order->getId());
        \$itemInformation = \$this->getProductInformationFromOrderService->handle(\$Order);
        \$PluginVersion = \$this->pluginRepository->findByCode('eccubepaymentlite42')->getVersion();

        \$xmlResponse = \$this->gmoEpsilonRequestService->sendData(
            \$this->gmoEpsilonUrlService->getUrl('receive_order3'),
            [
                'version' => 1,
                'contract_code' => \$Config->getContractCode(),
                'user_id' => \$Customer->getId(),
                'user_name' => \$Customer->getName01().' '.\$Customer->getName02(),
                'user_mail_add' => \$Customer->getEmail(),
                'item_code' => \$itemInformation['item_code'],
                'item_name' => \$itemInformation['item_name'],
                'order_number' => \$gmoEpsilonOrderNo,
                'st_code' => '11000-0000-00000-00000-00000-00000-00000',
                'mission_code' => 1,
                'item_price' => (int) \$Order->getPaymentTotal(),
                'process_code' => 2, // 登録済み課金
                'memo1' => \$route, // 管理画面より登録したことを記録。card3.cgiのリダイレクト先(eccube_payment_lite42_payment_complete)で利用する。
                'memo2' => 'EC-CUBE_' . Constant::VERSION . '_' . \$PluginVersion . \"_\" . date('YmdHis'),
                'xml' => 1,
            ]
        );

        \$message = \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'ERR_DETAIL');
        \$result = (int) \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'RESULT');
        \$redirectUrl = '';
        // 正常にカード番号が取得出来た場合はカード情報を返却する
        if (\$result === \$this->eccubeConfig['gmo_epsilon']['receive_parameters']['result']['ok']) {
            \$message = '正常終了';
            \$status = 'OK';
            \$redirectUrl = \$this->getCardCgiUrlService->getUrl(\$xmlResponse);
        }

        return [
            'result' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'RESULT'),
            'err_code' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'ERR_CODE'),
            'message' => \$message,
            'status' => \$status,
            'redirectUrl' => \$redirectUrl,
            'order_no' => \$gmoEpsilonOrderNo,
        ];
    }
}
", "EccubePaymentLite42/Service/GmoEpsilonRequest/RequestCreateRegularOrderService.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestCreateRegularOrderService.php");
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
