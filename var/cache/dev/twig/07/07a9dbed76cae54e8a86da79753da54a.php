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

/* EccubePaymentLite42/Service/GmoEpsilonRequest/RequestDirectCardPaymentService.php */
class __TwigTemplate_7fb234ee0099e2609058a66df80bfdbe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/GmoEpsilonRequest/RequestDirectCardPaymentService.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/GmoEpsilonRequest/RequestDirectCardPaymentService.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest;

use Eccube\\Common\\Constant;
use Eccube\\Common\\EccubeConfig;
use Eccube\\Entity\\Customer;
use Eccube\\Service\\OrderHelper;
use Eccube\\Repository\\PluginRepository;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Service\\GetProductInformationFromOrderService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonOrderNoService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequestService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonUrlService;
use Symfony\\Component\\HttpFoundation\\RequestStack;

class RequestDirectCardPaymentService
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
     * @var SessionInterface
     */
    private \$session;

    /**
     * @var OrderHelper
     */
    protected \$orderHelper;

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
        RequestStack \$requestStack,
        OrderHelper \$orderHelper,
        PluginRepository \$pluginRepository
    ) {
        \$this->gmoEpsilonRequestService = \$gmoEpsilonRequestService;
        \$this->Config = \$configRepository->get();
        \$this->gmoEpsilonUrlService = \$gmoEpsilonUrlService;
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->getProductInformationFromOrderService = \$getProductInformationFromOrderService;
        \$this->gmoEpsilonOrderNoService = \$gmoEpsilonOrderNoService;
        \$this->session = \$requestStack->getSession();
        \$this->orderHelper = \$orderHelper;
        \$this->pluginRepository = \$pluginRepository;
    }

    public function handle(\$Order, \$processCode, \$stCode, \$route, \$token)
    {
        \$status = 'NG';
        \$Shipping = \$Order->getShippings()[0];
        \$Customer = \$Order->getCustomer();
        if (is_null(\$Customer)) {
            \$user_id = 'non_customer';
            /** @var Customer \$Customer */
            \$Customer = \$this->orderHelper->getNonMember('eccube.front.shopping.nonmember');
        } else {
            \$user_id = \$Customer->getId();
        }
        \$itemInfo = \$this->getProductInformationFromOrderService->handle(\$Order);
        \$orderNumber = \$this->gmoEpsilonOrderNoService->create(\$Order->getId());
        \$PluginVersion = \$this->pluginRepository->findByCode('eccubepaymentlite42')->getVersion();

        \$parameters = [
            'contract_code' => \$this->Config->getContractCode(),
            'user_id' => \$user_id,
            'user_name' => \$Customer->getName01().\$Customer->getName02(),
            'user_mail_add' => \$Customer->getEmail(),
            'order_number' => \$orderNumber,
            'item_name' => \$itemInfo['item_name'],
            'item_code' => \$itemInfo['item_code'],
            'item_price' => \$Order->getPaymentTotal(),
            'st_code' => \$stCode,
            'mission_code' => 1,
            'process_code' => \$processCode,
            'memo1' => \$route,
            'memo2' => 'EC-CUBE_' . Constant::VERSION . '_' . \$PluginVersion . \"_\" . date('YmdHis'),
            'xml' => '1',
            'user_agent' => array_key_exists('HTTP_USER_AGENT', \$_SERVER) ? \$_SERVER['HTTP_USER_AGENT'] : null,
            'tds_check_code' => 1, // 3DSフラグ / NULL or 1 ：通常処理　（初回）
            'token' => \$token,
            'keitai' => 0, // 3DS-keitai / 購入者の利用端末が携帯の場合必須 / NULL　or　0　：PC　or　1：携帯 / *3DS処理が携帯電話では利用不可のため通知が必要となります
            'security_check' => 1,
            // Start specific params of 3ds 2.0
            'tds_flag' => 21, // 3DS2.0フラ グ
            'billAddrCountry' => 392, // 請求先住所(国番号) =>  set default is Japan
            'billAddrLine1' => \$Order->getAddr01(), // 請求先住所(区域部分_1行目)
            'billAddrLine2' => \$Order->getAddr02(), // 請求先住所(区域部分_2行目)
            'billAddrLine3' => '', // 請求先住所(区域部分_3行目)
            'billAddrPostCode' => \$Order->getPostalCode(), // 請求先住所(郵便番号)
            'billAddrState' => \$Order->getPref()->getId(), // 請求先住所 (州または都道府県番号)
            'shipAddrCity' => \$Shipping->getPref()->getName(), // 送り先住所(都市)
            'shipAddrCountry' => 392, // 送り先住所(国番号) => set default is Japan
            'shipAddrLine1' => \$Shipping->getAddr01(), // 送り先住所(区域部分_1行目)
            'shipAddrLine2' => \$Shipping->getAddr02(), // 送り先住所(区域部分_2行目)
            'shipAddrLine3' => '', // 送り先住所(区域部分_3行目)
            'shipAddrPostCode' => \$Shipping->getPostalCode(), // 送り先住所(郵便番号)
            'shipAddrState' => \$Shipping->getPref()->getId(), // 送り先住所 (州または都道府県番号)
            'threeDSReqAuthMethod' => '02', // ログイ ン認証方法
            'challengeInd' => '04', // チャレンジ要求
            // End specific params of 3ds 2.0
        ];
        // write log for sent parameters to Epsilon
        logs('gmo_epsilon')->info('Parameter sent 3DS 2.0 => トークン決済 (RequestDirectCardPaymentService):  = '.print_r(\$parameters, true));
        \$xmlResponse = \$this->gmoEpsilonRequestService->sendData(
            \$this->gmoEpsilonUrlService->getUrl(
                'direct_card_payment'
            ),
            \$parameters
        );

        \$message = \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'ERR_DETAIL');

        \$errCode = \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'ERR_CODE');
        if (empty(\$errCode)) {
            \$message = '正常終了';
            \$status = 'OK';
        } else {
            logs('gmo_epsilon')->error('ERR_CODE = '.\$errCode);
            logs('gmo_epsilon')->error('ERR_DETAIL = '.\$message);
        }

        \$arrReturn = [
            'result' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'RESULT'),
            'err_code' => (int) \$errCode,
            'message' => \$message,
            'status' => \$status,
            'trans_code' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'TRANS_CODE'),
            'order_number' => \$orderNumber,
        ];

        // 0：決済NG   1：決済OK  5：3DS処理（カード会社に接続必要) 6:3DS2.0   9：システムエラー（パラメータ不足、不正等）
        \$result = \$arrReturn['result'];
        if (\$result == \$this->eccubeConfig['gmo_epsilon']['receive_parameters']['result']['3ds']) {
            // 3DS処理時カード会社への接続用URLエンコードされています。
            \$arrReturn['acsurl'] = \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'ACSURL');
            // 3DS認証処理に必要な項目です。
            \$arrReturn['pareq'] = \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'PAREQ');
        }

        if (\$result == \$this->eccubeConfig['gmo_epsilon']['receive_parameters']['result']['3ds2']) {
            // 3DS 2.0 処理時カード会社への接続用URLエンコードされています。
            \$arrReturn['tds2_url'] = \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'TDS2_URL');
            \$arrReturn['pareq'] = \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'PAREQ');
        }
        // write log for receive parameters from Epsilon
        logs('gmo_epsilon')->info('Data response arrReturn 3DS 2.0 => トークン決済 (RequestDirectCardPaymentService):  = '.print_r(\$arrReturn, true));

        return \$arrReturn;
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
        return "EccubePaymentLite42/Service/GmoEpsilonRequest/RequestDirectCardPaymentService.php";
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
use Eccube\\Entity\\Customer;
use Eccube\\Service\\OrderHelper;
use Eccube\\Repository\\PluginRepository;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Service\\GetProductInformationFromOrderService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonOrderNoService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequestService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonUrlService;
use Symfony\\Component\\HttpFoundation\\RequestStack;

class RequestDirectCardPaymentService
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
     * @var SessionInterface
     */
    private \$session;

    /**
     * @var OrderHelper
     */
    protected \$orderHelper;

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
        RequestStack \$requestStack,
        OrderHelper \$orderHelper,
        PluginRepository \$pluginRepository
    ) {
        \$this->gmoEpsilonRequestService = \$gmoEpsilonRequestService;
        \$this->Config = \$configRepository->get();
        \$this->gmoEpsilonUrlService = \$gmoEpsilonUrlService;
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->getProductInformationFromOrderService = \$getProductInformationFromOrderService;
        \$this->gmoEpsilonOrderNoService = \$gmoEpsilonOrderNoService;
        \$this->session = \$requestStack->getSession();
        \$this->orderHelper = \$orderHelper;
        \$this->pluginRepository = \$pluginRepository;
    }

    public function handle(\$Order, \$processCode, \$stCode, \$route, \$token)
    {
        \$status = 'NG';
        \$Shipping = \$Order->getShippings()[0];
        \$Customer = \$Order->getCustomer();
        if (is_null(\$Customer)) {
            \$user_id = 'non_customer';
            /** @var Customer \$Customer */
            \$Customer = \$this->orderHelper->getNonMember('eccube.front.shopping.nonmember');
        } else {
            \$user_id = \$Customer->getId();
        }
        \$itemInfo = \$this->getProductInformationFromOrderService->handle(\$Order);
        \$orderNumber = \$this->gmoEpsilonOrderNoService->create(\$Order->getId());
        \$PluginVersion = \$this->pluginRepository->findByCode('eccubepaymentlite42')->getVersion();

        \$parameters = [
            'contract_code' => \$this->Config->getContractCode(),
            'user_id' => \$user_id,
            'user_name' => \$Customer->getName01().\$Customer->getName02(),
            'user_mail_add' => \$Customer->getEmail(),
            'order_number' => \$orderNumber,
            'item_name' => \$itemInfo['item_name'],
            'item_code' => \$itemInfo['item_code'],
            'item_price' => \$Order->getPaymentTotal(),
            'st_code' => \$stCode,
            'mission_code' => 1,
            'process_code' => \$processCode,
            'memo1' => \$route,
            'memo2' => 'EC-CUBE_' . Constant::VERSION . '_' . \$PluginVersion . \"_\" . date('YmdHis'),
            'xml' => '1',
            'user_agent' => array_key_exists('HTTP_USER_AGENT', \$_SERVER) ? \$_SERVER['HTTP_USER_AGENT'] : null,
            'tds_check_code' => 1, // 3DSフラグ / NULL or 1 ：通常処理　（初回）
            'token' => \$token,
            'keitai' => 0, // 3DS-keitai / 購入者の利用端末が携帯の場合必須 / NULL　or　0　：PC　or　1：携帯 / *3DS処理が携帯電話では利用不可のため通知が必要となります
            'security_check' => 1,
            // Start specific params of 3ds 2.0
            'tds_flag' => 21, // 3DS2.0フラ グ
            'billAddrCountry' => 392, // 請求先住所(国番号) =>  set default is Japan
            'billAddrLine1' => \$Order->getAddr01(), // 請求先住所(区域部分_1行目)
            'billAddrLine2' => \$Order->getAddr02(), // 請求先住所(区域部分_2行目)
            'billAddrLine3' => '', // 請求先住所(区域部分_3行目)
            'billAddrPostCode' => \$Order->getPostalCode(), // 請求先住所(郵便番号)
            'billAddrState' => \$Order->getPref()->getId(), // 請求先住所 (州または都道府県番号)
            'shipAddrCity' => \$Shipping->getPref()->getName(), // 送り先住所(都市)
            'shipAddrCountry' => 392, // 送り先住所(国番号) => set default is Japan
            'shipAddrLine1' => \$Shipping->getAddr01(), // 送り先住所(区域部分_1行目)
            'shipAddrLine2' => \$Shipping->getAddr02(), // 送り先住所(区域部分_2行目)
            'shipAddrLine3' => '', // 送り先住所(区域部分_3行目)
            'shipAddrPostCode' => \$Shipping->getPostalCode(), // 送り先住所(郵便番号)
            'shipAddrState' => \$Shipping->getPref()->getId(), // 送り先住所 (州または都道府県番号)
            'threeDSReqAuthMethod' => '02', // ログイ ン認証方法
            'challengeInd' => '04', // チャレンジ要求
            // End specific params of 3ds 2.0
        ];
        // write log for sent parameters to Epsilon
        logs('gmo_epsilon')->info('Parameter sent 3DS 2.0 => トークン決済 (RequestDirectCardPaymentService):  = '.print_r(\$parameters, true));
        \$xmlResponse = \$this->gmoEpsilonRequestService->sendData(
            \$this->gmoEpsilonUrlService->getUrl(
                'direct_card_payment'
            ),
            \$parameters
        );

        \$message = \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'ERR_DETAIL');

        \$errCode = \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'ERR_CODE');
        if (empty(\$errCode)) {
            \$message = '正常終了';
            \$status = 'OK';
        } else {
            logs('gmo_epsilon')->error('ERR_CODE = '.\$errCode);
            logs('gmo_epsilon')->error('ERR_DETAIL = '.\$message);
        }

        \$arrReturn = [
            'result' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'RESULT'),
            'err_code' => (int) \$errCode,
            'message' => \$message,
            'status' => \$status,
            'trans_code' => \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'TRANS_CODE'),
            'order_number' => \$orderNumber,
        ];

        // 0：決済NG   1：決済OK  5：3DS処理（カード会社に接続必要) 6:3DS2.0   9：システムエラー（パラメータ不足、不正等）
        \$result = \$arrReturn['result'];
        if (\$result == \$this->eccubeConfig['gmo_epsilon']['receive_parameters']['result']['3ds']) {
            // 3DS処理時カード会社への接続用URLエンコードされています。
            \$arrReturn['acsurl'] = \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'ACSURL');
            // 3DS認証処理に必要な項目です。
            \$arrReturn['pareq'] = \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'PAREQ');
        }

        if (\$result == \$this->eccubeConfig['gmo_epsilon']['receive_parameters']['result']['3ds2']) {
            // 3DS 2.0 処理時カード会社への接続用URLエンコードされています。
            \$arrReturn['tds2_url'] = \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'TDS2_URL');
            \$arrReturn['pareq'] = \$this->gmoEpsilonRequestService->getXMLValue(\$xmlResponse, 'RESULT', 'PAREQ');
        }
        // write log for receive parameters from Epsilon
        logs('gmo_epsilon')->info('Data response arrReturn 3DS 2.0 => トークン決済 (RequestDirectCardPaymentService):  = '.print_r(\$arrReturn, true));

        return \$arrReturn;
    }
}
", "EccubePaymentLite42/Service/GmoEpsilonRequest/RequestDirectCardPaymentService.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestDirectCardPaymentService.php");
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
