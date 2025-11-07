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

/* EccubePaymentLite42/Service/GmoEpsilonRequest/RequestGetEpsilonPaymentInformationService.php */
class __TwigTemplate_8465712294f119e314dee649b19660cb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/GmoEpsilonRequest/RequestGetEpsilonPaymentInformationService.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/GmoEpsilonRequest/RequestGetEpsilonPaymentInformationService.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest;

use Eccube\\Common\\EccubeConfig;
use Eccube\\Entity\\Order;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequestService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonUrlService;

class RequestGetEpsilonPaymentInformationService
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
     * @var EccubeConfig
     */
    private \$eccubeConfig;

    public function __construct(
        ConfigRepository \$configRepository,
        GmoEpsilonRequestService \$gmoEpsilonRequestService,
        GmoEpsilonUrlService \$gmoEpsilonUrlService,
        EccubeConfig \$eccubeConfig
    ) {
        \$this->configRepository = \$configRepository;
        \$this->gmoEpsilonRequestService = \$gmoEpsilonRequestService;
        \$this->gmoEpsilonUrlService = \$gmoEpsilonUrlService;
        \$this->eccubeConfig = \$eccubeConfig;
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
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        \$response = \$this->gmoEpsilonRequestService->sendData(
            \$this->gmoEpsilonUrlService->getUrl('getsales2'),
            [
                'contract_code' => \$Config->getContractCode(),
                'order_number' => \$Order->getGmoEpsilonOrderNo(),
            ]
        );
        \$message = \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'ERR_DETAIL');

        \$result = (int) \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'RESULT');
        if (\$result === \$this->eccubeConfig['gmo_epsilon']['receive_parameters']['result']['ok']) {
            \$status = 'OK';
        }
        // 決済が未登録の場合
        if (count(\$response) === 1) {
            // TODO
            return [
                'result' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'RESULT'),
                'err_code' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'ERR_CODE'),
                'message' => \$message,
                'status' => \$status,
            ];
        }

        // 決済登録済みの場合
        return [
            'result' => \$this->eccubeConfig['gmo_epsilon']['receive_parameters']['result']['ok'],
            'err_code' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'ERR_CODE'),
            'message' => '受注ID: '.\$Order->getId().' 決済情報取得完了',
            'status' => \$status,
            'contract_code' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'CONTRACT_CODE'),
            'email' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'USER_MAIL_ADD'),
            'state' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'STATE'),
            'trans_code' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'TRANS_CODE'),
            'mission_code' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'MISSION_CODE'),
            'process_code' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'PROCESS_CODE'),
            'payment_code' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'PAYMENT_CODE'),
            'order_number' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'ORDER_NUMBER'),
            'item_code' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'ITEM_CODE'),
            'item_name' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'ITEM_NAME'),
            'item_price' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'ITEM_PRICE'),
            'memo1' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'MEMO1'),
            'memo2' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'MEMO2'),
            'customer_id' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'USER_ID'),
            'user_name' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'USER_NAME'),
            'pay_time' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'PAY_TIME'),
            'keitai' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'KEITAI'),
            'credit_flag' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'CREDIT_FLAG'),
            'credit_time' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'CREDIT_TIME'),
            'due_date' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'DUE_DATE'),
            'card_st_code' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'CARD_ST_CODE'),
            'add_info' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'ADD_INFO'),
            'update_date' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'LAST_UPDATE'),
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
        return "EccubePaymentLite42/Service/GmoEpsilonRequest/RequestGetEpsilonPaymentInformationService.php";
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
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequestService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonUrlService;

class RequestGetEpsilonPaymentInformationService
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
     * @var EccubeConfig
     */
    private \$eccubeConfig;

    public function __construct(
        ConfigRepository \$configRepository,
        GmoEpsilonRequestService \$gmoEpsilonRequestService,
        GmoEpsilonUrlService \$gmoEpsilonUrlService,
        EccubeConfig \$eccubeConfig
    ) {
        \$this->configRepository = \$configRepository;
        \$this->gmoEpsilonRequestService = \$gmoEpsilonRequestService;
        \$this->gmoEpsilonUrlService = \$gmoEpsilonUrlService;
        \$this->eccubeConfig = \$eccubeConfig;
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
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        \$response = \$this->gmoEpsilonRequestService->sendData(
            \$this->gmoEpsilonUrlService->getUrl('getsales2'),
            [
                'contract_code' => \$Config->getContractCode(),
                'order_number' => \$Order->getGmoEpsilonOrderNo(),
            ]
        );
        \$message = \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'ERR_DETAIL');

        \$result = (int) \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'RESULT');
        if (\$result === \$this->eccubeConfig['gmo_epsilon']['receive_parameters']['result']['ok']) {
            \$status = 'OK';
        }
        // 決済が未登録の場合
        if (count(\$response) === 1) {
            // TODO
            return [
                'result' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'RESULT'),
                'err_code' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'ERR_CODE'),
                'message' => \$message,
                'status' => \$status,
            ];
        }

        // 決済登録済みの場合
        return [
            'result' => \$this->eccubeConfig['gmo_epsilon']['receive_parameters']['result']['ok'],
            'err_code' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'ERR_CODE'),
            'message' => '受注ID: '.\$Order->getId().' 決済情報取得完了',
            'status' => \$status,
            'contract_code' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'CONTRACT_CODE'),
            'email' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'USER_MAIL_ADD'),
            'state' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'STATE'),
            'trans_code' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'TRANS_CODE'),
            'mission_code' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'MISSION_CODE'),
            'process_code' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'PROCESS_CODE'),
            'payment_code' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'PAYMENT_CODE'),
            'order_number' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'ORDER_NUMBER'),
            'item_code' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'ITEM_CODE'),
            'item_name' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'ITEM_NAME'),
            'item_price' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'ITEM_PRICE'),
            'memo1' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'MEMO1'),
            'memo2' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'MEMO2'),
            'customer_id' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'USER_ID'),
            'user_name' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'USER_NAME'),
            'pay_time' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'PAY_TIME'),
            'keitai' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'KEITAI'),
            'credit_flag' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'CREDIT_FLAG'),
            'credit_time' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'CREDIT_TIME'),
            'due_date' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'DUE_DATE'),
            'card_st_code' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'CARD_ST_CODE'),
            'add_info' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'ADD_INFO'),
            'update_date' => \$this->gmoEpsilonRequestService->getXMLValue(\$response, 'RESULT', 'LAST_UPDATE'),
        ];
    }
}
", "EccubePaymentLite42/Service/GmoEpsilonRequest/RequestGetEpsilonPaymentInformationService.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestGetEpsilonPaymentInformationService.php");
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
