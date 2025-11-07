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

/* EccubePaymentLite42/Service/GmoEpsilonRequest/RequestGetSales2Service.php */
class __TwigTemplate_5189888b4d8ed10686f011753480ca28 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/GmoEpsilonRequest/RequestGetSales2Service.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/GmoEpsilonRequest/RequestGetSales2Service.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest;

use Eccube\\Common\\EccubeConfig;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequestService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonUrlService;
use Symfony\\Component\\HttpFoundation\\RequestStack;

class RequestGetSales2Service
{
    /**
     * @var GmoEpsilonRequestService
     */
    private \$gmoEpsilonRequestService;

    /**
     * @var Config
     */
    private \$config;
    /**
     * @var SessionInterface
     */
    private \$session;
    /**
     * @var GmoEpsilonUrlService
     */
    private \$gmoEpsilonUrlService;
    /**
     * @var EccubeConfig
     */
    protected \$eccubeConfig;

    public function __construct(
        GmoEpsilonRequestService \$gmoEpsilonRequestService,
        ConfigRepository \$configRepository,
        RequestStack \$requestStack,
        GmoEpsilonUrlService \$gmoEpsilonUrlService,
        EccubeConfig \$eccubeConfig
    ) {
        \$this->gmoEpsilonRequestService = \$gmoEpsilonRequestService;
        \$this->config = \$configRepository->get();
        \$this->session = \$requestStack->getSession();
        \$this->gmoEpsilonUrlService = \$gmoEpsilonUrlService;
        \$this->eccubeConfig = \$eccubeConfig;
    }

    public function handle(\$transCode = null, \$orderNo = null)
    {
        \$status = 'NG';
        if (empty(\$transCode) && empty(\$orderNo)) {
            return [
                'result' => \$this->eccubeConfig['gmo_epsilon']['receive_parameters']['result']['ng'],
                'err_code' => 'trans_code、もしくはorder_numberいずれかのパラメータが必要です',
                'message' => '',
                'status' => \$status,
                'order_number' => \$orderNo,
                'payment_code' => '',
            ];
        }

        \$arrParameter = [
            'contract_code' => \$this->config->getContractCode(),
        ];
        if (!empty(\$transCode)) {
            \$arrParameter['trans_code'] = \$transCode;
        } else {
            \$arrParameter['order_number'] = \$orderNo;
        }

        \$xmlResponse = \$this->gmoEpsilonRequestService->sendData(
            \$this->gmoEpsilonUrlService->getUrl('getsales2'),
            \$arrParameter
        );

        \$message = \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'ERR_DETAIL');
        \$result = (int) \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'RESULT');
        if (\$result === 0) {
            \$message = '正常終了';
            \$status = 'OK';
        }

        return [
            'result' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'RESULT'),
            'err_code' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'ERR_CODE'),
            'message' => \$message,
            'status' => \$status,
            'route' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'MEMO1'),
            'user_mail_add' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'USER_MAIL_ADD'),
            'conveni_limit' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'CONVENI_LIMIT'),
            'state' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'STATE'),
            'receipt_date' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'RECEIPT_DATE'),
            'mission_code' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'MISSION_CODE'),
            'item_price' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'ITEM_PRICE'),
            'receipt_no' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'RECEIPT_NO'),
            'order_number' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'ORDER_NUMBER'),
            'conveni_time' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'CONVENI_TIME'),
            'st_code' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'ST_CODE'),
            'memo1' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'MEMO1'),
            'kigyou_code' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'KIGYOU_CODE'),
            'contract_code' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'CONTRACT_CODE'),
            'item_name' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'ITEM_NAME'),
            'user_name' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'USER_NAME'),
            'paid' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'PAID'),
            'haraikomi_url' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'HARAIKOMI_URL'),
            'conveni_code' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'CONVENI_CODE'),
            'process_code' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'PROCESS_CODE'),
            'keitai' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'KEITAI'),
            'due_date' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'DUE_DATE'),
            'add_info' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'ADD_INFO'),
            'user_id' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'USER_ID'),
            'memo2' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'MEMO2'),
            'trans_code' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'TRANS_CODE'),
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
        return "EccubePaymentLite42/Service/GmoEpsilonRequest/RequestGetSales2Service.php";
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
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequestService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonUrlService;
use Symfony\\Component\\HttpFoundation\\RequestStack;

class RequestGetSales2Service
{
    /**
     * @var GmoEpsilonRequestService
     */
    private \$gmoEpsilonRequestService;

    /**
     * @var Config
     */
    private \$config;
    /**
     * @var SessionInterface
     */
    private \$session;
    /**
     * @var GmoEpsilonUrlService
     */
    private \$gmoEpsilonUrlService;
    /**
     * @var EccubeConfig
     */
    protected \$eccubeConfig;

    public function __construct(
        GmoEpsilonRequestService \$gmoEpsilonRequestService,
        ConfigRepository \$configRepository,
        RequestStack \$requestStack,
        GmoEpsilonUrlService \$gmoEpsilonUrlService,
        EccubeConfig \$eccubeConfig
    ) {
        \$this->gmoEpsilonRequestService = \$gmoEpsilonRequestService;
        \$this->config = \$configRepository->get();
        \$this->session = \$requestStack->getSession();
        \$this->gmoEpsilonUrlService = \$gmoEpsilonUrlService;
        \$this->eccubeConfig = \$eccubeConfig;
    }

    public function handle(\$transCode = null, \$orderNo = null)
    {
        \$status = 'NG';
        if (empty(\$transCode) && empty(\$orderNo)) {
            return [
                'result' => \$this->eccubeConfig['gmo_epsilon']['receive_parameters']['result']['ng'],
                'err_code' => 'trans_code、もしくはorder_numberいずれかのパラメータが必要です',
                'message' => '',
                'status' => \$status,
                'order_number' => \$orderNo,
                'payment_code' => '',
            ];
        }

        \$arrParameter = [
            'contract_code' => \$this->config->getContractCode(),
        ];
        if (!empty(\$transCode)) {
            \$arrParameter['trans_code'] = \$transCode;
        } else {
            \$arrParameter['order_number'] = \$orderNo;
        }

        \$xmlResponse = \$this->gmoEpsilonRequestService->sendData(
            \$this->gmoEpsilonUrlService->getUrl('getsales2'),
            \$arrParameter
        );

        \$message = \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'ERR_DETAIL');
        \$result = (int) \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'RESULT');
        if (\$result === 0) {
            \$message = '正常終了';
            \$status = 'OK';
        }

        return [
            'result' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'RESULT'),
            'err_code' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'ERR_CODE'),
            'message' => \$message,
            'status' => \$status,
            'route' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'MEMO1'),
            'user_mail_add' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'USER_MAIL_ADD'),
            'conveni_limit' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'CONVENI_LIMIT'),
            'state' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'STATE'),
            'receipt_date' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'RECEIPT_DATE'),
            'mission_code' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'MISSION_CODE'),
            'item_price' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'ITEM_PRICE'),
            'receipt_no' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'RECEIPT_NO'),
            'order_number' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'ORDER_NUMBER'),
            'conveni_time' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'CONVENI_TIME'),
            'st_code' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'ST_CODE'),
            'memo1' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'MEMO1'),
            'kigyou_code' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'KIGYOU_CODE'),
            'contract_code' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'CONTRACT_CODE'),
            'item_name' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'ITEM_NAME'),
            'user_name' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'USER_NAME'),
            'paid' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'PAID'),
            'haraikomi_url' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'HARAIKOMI_URL'),
            'conveni_code' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'CONVENI_CODE'),
            'process_code' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'PROCESS_CODE'),
            'keitai' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'KEITAI'),
            'due_date' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'DUE_DATE'),
            'add_info' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'ADD_INFO'),
            'user_id' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'USER_ID'),
            'memo2' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'MEMO2'),
            'trans_code' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'TRANS_CODE'),
        ];
    }
}
", "EccubePaymentLite42/Service/GmoEpsilonRequest/RequestGetSales2Service.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestGetSales2Service.php");
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
