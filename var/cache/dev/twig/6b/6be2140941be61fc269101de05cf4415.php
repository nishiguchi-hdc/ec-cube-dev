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

/* EccubePaymentLite42/Service/GmoEpsilonRequest/RequestGetUserInfoService.php */
class __TwigTemplate_4ed556e044f2c3d78892989e9021be3f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/GmoEpsilonRequest/RequestGetUserInfoService.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/GmoEpsilonRequest/RequestGetUserInfoService.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest;

use Eccube\\Common\\EccubeConfig;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequestService;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonUrlService;
use Symfony\\Component\\HttpFoundation\\RequestStack;

class RequestGetUserInfoService
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

    public function handle(int \$customerId): array
    {
        \$status = 'NG';
        \$responseXml = \$this->gmoEpsilonRequestService->sendData(
            \$this->gmoEpsilonUrlService->getUrl('get_user_info'), [
                'contract_code' => \$this->config->getContractCode(),
                'user_id' => \$customerId,
            ]
        );

        \$message = \$this->gmoEpsilonRequestService->getXMLValue(\$responseXml, 'RESULT', 'ERR_DETAIL');
        \$result = (int) \$this->gmoEpsilonRequestService->getXMLValue(\$responseXml, 'RESULT', 'RESULT');
        \$cardExpire = '';
        \$cardNumberMask = '';
        // 正常にカード番号が取得出来た場合はカード情報を返却する
        if (\$result === \$this->eccubeConfig['gmo_epsilon']['receive_parameters']['result']['ok']) {
            \$message = '正常終了';
            \$status = 'OK';
            \$cardExpire = \$this->gmoEpsilonRequestService->getXMLValue(\$responseXml, 'RESULT', 'CARD_EXPIRE');
            \$cardExpire = mb_substr(\$cardExpire, 0, 4).'/'.mb_substr(\$cardExpire, 4, 2);
            \$cardNumberMask = explode('-', \$this->gmoEpsilonRequestService->getXMLValue(\$responseXml, 'RESULT', 'CARD_NUMBER_MASK'))[3];
        }

        return [
            'result' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$responseXml, 'RESULT', 'RESULT'),
            'err_code' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$responseXml, 'RESULT', 'ERR_CODE'),
            'message' => \$message,
            'status' => \$status,
            'cardBrand' => \$this->gmoEpsilonRequestService->getXMLValue(\$responseXml, 'RESULT', 'CARD_BRAND'),
            'cardExpire' => \$cardExpire,
            'cardNumberMask' => \$cardNumberMask,
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
        return "EccubePaymentLite42/Service/GmoEpsilonRequest/RequestGetUserInfoService.php";
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

class RequestGetUserInfoService
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

    public function handle(int \$customerId): array
    {
        \$status = 'NG';
        \$responseXml = \$this->gmoEpsilonRequestService->sendData(
            \$this->gmoEpsilonUrlService->getUrl('get_user_info'), [
                'contract_code' => \$this->config->getContractCode(),
                'user_id' => \$customerId,
            ]
        );

        \$message = \$this->gmoEpsilonRequestService->getXMLValue(\$responseXml, 'RESULT', 'ERR_DETAIL');
        \$result = (int) \$this->gmoEpsilonRequestService->getXMLValue(\$responseXml, 'RESULT', 'RESULT');
        \$cardExpire = '';
        \$cardNumberMask = '';
        // 正常にカード番号が取得出来た場合はカード情報を返却する
        if (\$result === \$this->eccubeConfig['gmo_epsilon']['receive_parameters']['result']['ok']) {
            \$message = '正常終了';
            \$status = 'OK';
            \$cardExpire = \$this->gmoEpsilonRequestService->getXMLValue(\$responseXml, 'RESULT', 'CARD_EXPIRE');
            \$cardExpire = mb_substr(\$cardExpire, 0, 4).'/'.mb_substr(\$cardExpire, 4, 2);
            \$cardNumberMask = explode('-', \$this->gmoEpsilonRequestService->getXMLValue(\$responseXml, 'RESULT', 'CARD_NUMBER_MASK'))[3];
        }

        return [
            'result' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$responseXml, 'RESULT', 'RESULT'),
            'err_code' => (int) \$this->gmoEpsilonRequestService->getXMLValue(\$responseXml, 'RESULT', 'ERR_CODE'),
            'message' => \$message,
            'status' => \$status,
            'cardBrand' => \$this->gmoEpsilonRequestService->getXMLValue(\$responseXml, 'RESULT', 'CARD_BRAND'),
            'cardExpire' => \$cardExpire,
            'cardNumberMask' => \$cardNumberMask,
        ];
    }
}
", "EccubePaymentLite42/Service/GmoEpsilonRequest/RequestGetUserInfoService.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestGetUserInfoService.php");
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
