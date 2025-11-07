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

/* EccubePaymentLite42/Service/GmoEpsilonRequest/RequestReceiveOrderService.php */
class __TwigTemplate_1262bdf3ee5693f45e6c0415319635c4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/GmoEpsilonRequest/RequestReceiveOrderService.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/GmoEpsilonRequest/RequestReceiveOrderService.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest;

use Eccube\\Common\\Constant;
use Eccube\\Common\\EccubeConfig;
use Eccube\\Repository\\PluginRepository;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Service\\GetProductInformationFromOrderService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonOrderNoService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequestService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonUrlService;

class RequestReceiveOrderService
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
     * @var object|null
     */
    private \$Config;
    /**
     * @var EccubeConfig
     */
    protected \$eccubeConfig;
    /**
     * @var GetProductInformationFromOrderService
     */
    private \$getProductInformationFromOrderService;
    /**
     * @var GmoEpsilonOrderNoService
     */
    private \$gmoEpsilonOrderNoService;
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
        PluginRepository \$pluginRepository
    ) {
        \$this->gmoEpsilonRequestService = \$gmoEpsilonRequestService;
        \$this->Config = \$configRepository->get();
        \$this->gmoEpsilonUrlService = \$gmoEpsilonUrlService;
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->getProductInformationFromOrderService = \$getProductInformationFromOrderService;
        \$this->gmoEpsilonOrderNoService = \$gmoEpsilonOrderNoService;
        \$this->pluginRepository = \$pluginRepository;
    }

    public function handle(\$Customer, \$processCode, \$route, \$Order = null)
    {
        \$status = 'NG';
        \$PluginVersion = \$this->pluginRepository->findByCode('eccubepaymentlite42')->getVersion();

        \$parameters = [
            'contract_code' => \$this->Config->getContractCode(),
            'user_id' => \$Customer->getId(),
            'user_mail_add' => \$Customer->getEmail(),
            'st_code' => '11000-0000-00000-00000-00000-00000-00000',
            'process_code' => \$processCode,
            'memo1' => \$route,
            'memo2' => 'EC-CUBE_' . Constant::VERSION . '_' . \$PluginVersion . \"_\" . date('YmdHis'),
            'xml' => 1,
            'version' => 1,
        ];
        if (\$processCode === 1 || \$processCode === 2) {
            // 初回課金 or 登録済み課金
            \$parameters['user_name'] = \$Customer->getName01() . ' ' . \$Customer->getName02();
        }
        if (\$processCode === 2) {
            // 登録済み課金
            \$gmoEpsilonOrderNo = \$this->gmoEpsilonOrderNoService->create(\$Order->getId());
            \$itemInformation = \$this->getProductInformationFromOrderService->handle(\$Order);
            \$parameters['item_code'] = \$itemInformation['item_code'];
            \$parameters['item_name'] = \$itemInformation['item_name'];
            \$parameters['order_number'] = \$gmoEpsilonOrderNo;
            \$parameters['mission_code'] = 1;
            \$parameters['item_price'] = (int) \$Order->getPaymentTotal();
        }
        
        if (\$processCode === 4) { //add 3ds parameters
        \t\$parameters['tds_flag'] = 21; // 3DS2.0フラ グ
        }

        \$response = \$this->gmoEpsilonRequestService->sendData(
            \$this->gmoEpsilonUrlService->getUrl(
                'receive_order3'
            ),
            \$parameters
        );

        \$message = \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'ERR_DETAIL');

        // 0：決済NG   1：決済OK  5：3DS処理（カード会社に接続必要) 6:3DS2.0   9：システムエラー（パラメータ不足、不正等）
        \$tds2_url = \$pareq = null;
        \$result = (int) \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'RESULT');
        if (\$result === \$this->eccubeConfig['gmo_epsilon']['receive_parameters']['result']['ok']) {
            \$message = '正常終了';
            \$status = 'OK';
        } else if (\$result === \$this->eccubeConfig['gmo_epsilon']['receive_parameters']['result']['3ds2']) {
        \t\$tds2_url = \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'TDS2_URL');
        \t\$pareq = \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'PAREQ');
        }

        return [
            'result' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'RESULT'),
            'err_code' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'ERR_CODE'),
            'message' => \$message,
            'status' => \$status,
            'url' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'REDIRECT'),
            'tds2_url' => \$tds2_url,
            'pareq' => \$pareq,
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
        return "EccubePaymentLite42/Service/GmoEpsilonRequest/RequestReceiveOrderService.php";
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
use Eccube\\Repository\\PluginRepository;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Service\\GetProductInformationFromOrderService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonOrderNoService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequestService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonUrlService;

class RequestReceiveOrderService
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
     * @var object|null
     */
    private \$Config;
    /**
     * @var EccubeConfig
     */
    protected \$eccubeConfig;
    /**
     * @var GetProductInformationFromOrderService
     */
    private \$getProductInformationFromOrderService;
    /**
     * @var GmoEpsilonOrderNoService
     */
    private \$gmoEpsilonOrderNoService;
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
        PluginRepository \$pluginRepository
    ) {
        \$this->gmoEpsilonRequestService = \$gmoEpsilonRequestService;
        \$this->Config = \$configRepository->get();
        \$this->gmoEpsilonUrlService = \$gmoEpsilonUrlService;
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->getProductInformationFromOrderService = \$getProductInformationFromOrderService;
        \$this->gmoEpsilonOrderNoService = \$gmoEpsilonOrderNoService;
        \$this->pluginRepository = \$pluginRepository;
    }

    public function handle(\$Customer, \$processCode, \$route, \$Order = null)
    {
        \$status = 'NG';
        \$PluginVersion = \$this->pluginRepository->findByCode('eccubepaymentlite42')->getVersion();

        \$parameters = [
            'contract_code' => \$this->Config->getContractCode(),
            'user_id' => \$Customer->getId(),
            'user_mail_add' => \$Customer->getEmail(),
            'st_code' => '11000-0000-00000-00000-00000-00000-00000',
            'process_code' => \$processCode,
            'memo1' => \$route,
            'memo2' => 'EC-CUBE_' . Constant::VERSION . '_' . \$PluginVersion . \"_\" . date('YmdHis'),
            'xml' => 1,
            'version' => 1,
        ];
        if (\$processCode === 1 || \$processCode === 2) {
            // 初回課金 or 登録済み課金
            \$parameters['user_name'] = \$Customer->getName01() . ' ' . \$Customer->getName02();
        }
        if (\$processCode === 2) {
            // 登録済み課金
            \$gmoEpsilonOrderNo = \$this->gmoEpsilonOrderNoService->create(\$Order->getId());
            \$itemInformation = \$this->getProductInformationFromOrderService->handle(\$Order);
            \$parameters['item_code'] = \$itemInformation['item_code'];
            \$parameters['item_name'] = \$itemInformation['item_name'];
            \$parameters['order_number'] = \$gmoEpsilonOrderNo;
            \$parameters['mission_code'] = 1;
            \$parameters['item_price'] = (int) \$Order->getPaymentTotal();
        }
        
        if (\$processCode === 4) { //add 3ds parameters
        \t\$parameters['tds_flag'] = 21; // 3DS2.0フラ グ
        }

        \$response = \$this->gmoEpsilonRequestService->sendData(
            \$this->gmoEpsilonUrlService->getUrl(
                'receive_order3'
            ),
            \$parameters
        );

        \$message = \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'ERR_DETAIL');

        // 0：決済NG   1：決済OK  5：3DS処理（カード会社に接続必要) 6:3DS2.0   9：システムエラー（パラメータ不足、不正等）
        \$tds2_url = \$pareq = null;
        \$result = (int) \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'RESULT');
        if (\$result === \$this->eccubeConfig['gmo_epsilon']['receive_parameters']['result']['ok']) {
            \$message = '正常終了';
            \$status = 'OK';
        } else if (\$result === \$this->eccubeConfig['gmo_epsilon']['receive_parameters']['result']['3ds2']) {
        \t\$tds2_url = \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'TDS2_URL');
        \t\$pareq = \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'PAREQ');
        }

        return [
            'result' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'RESULT'),
            'err_code' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'ERR_CODE'),
            'message' => \$message,
            'status' => \$status,
            'url' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'REDIRECT'),
            'tds2_url' => \$tds2_url,
            'pareq' => \$pareq,
        ];
    }
}
", "EccubePaymentLite42/Service/GmoEpsilonRequest/RequestReceiveOrderService.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestReceiveOrderService.php");
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
