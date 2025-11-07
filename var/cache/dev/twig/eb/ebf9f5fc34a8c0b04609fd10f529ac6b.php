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

/* EccubePaymentLite42/Service/CreditCardPaymentWithTokenService.php */
class __TwigTemplate_e24787f90bc4c9d723fb816218666b28 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/CreditCardPaymentWithTokenService.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/CreditCardPaymentWithTokenService.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Service;

use Eccube\\Common\\EccubeConfig;
use Eccube\\Entity\\Order;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestDirectCardPaymentService;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Twig\\Environment;

class CreditCardPaymentWithTokenService
{
    /**
     * @var RequestDirectCardPaymentService
     */
    private \$requestDirectCardPaymentService;
    /**
     * @var EccubeConfig
     */
    protected \$eccubeConfig;
    /**
     * @var Environment
     */
    private \$twig;
    /**
     * @var RouterInterface
     */
    private \$router;
    /**
     * @var GmoEpsilonRequestService
     */
    private \$gmoEpsilonRequestService;

    public function __construct(
        RequestDirectCardPaymentService \$requestDirectCardPaymentService,
        EccubeConfig \$eccubeConfig,
        Environment \$twig,
        GmoEpsilonRequestService \$gmoEpsilonRequestService,
        RouterInterface \$router
    ) {
        \$this->requestDirectCardPaymentService = \$requestDirectCardPaymentService;
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->twig = \$twig;
        \$this->gmoEpsilonRequestService = \$gmoEpsilonRequestService;
        \$this->router = \$router;
    }

    public function handle(string \$token, string \$stCode, \$dispatcher, Order \$Order)
    {
        \$results = \$this
            ->requestDirectCardPaymentService
            ->handle(
                \$Order,
                1,
                \$stCode,
                'shopping_checkout',
                \$token
            );
        if (\$results['status'] === 'NG') {
            \$message = \$results['message'];
            \$content = \$this->twig->render('error.twig', [
                'error_title' => trans('gmo_epsilon.front.shopping.error'),
                'error_message' => \$message,
            ]);
            \$dispatcher->setResponse(new Response(\$content));

            return \$dispatcher;
        }

        \$Order->setTransCode(\$results['trans_code']);
        \$Order->setGmoEpsilonOrderNo(\$results['order_number']);

        // 3DS処理（カード会社に接続必要）
        if (\$results['result'] === \$this->eccubeConfig['gmo_epsilon']['receive_parameters']['result']['3ds']) {
            // 3Dセキュア認証送信パラメータ1　加盟店様⇒カード会社
            \$content = \$this->twig->render('@EccubePaymentLite42/default/Shopping/transition_3ds_screen.twig', [
                'AcsUrl' => \$results['acsurl'],
                'PaReq' => \$results['pareq'],
                'TermUrl' => \$this->router->generate('eccube_payment_lite42_reception_3ds', [], UrlGeneratorInterface::ABSOLUTE_URL),
                'MD' => \$Order->getPreOrderId(),
            ]);
            \$dispatcher->setResponse(new Response(\$content));

            return \$dispatcher;
        }

        // 3DS 2.0 処理（カード会社に接続必要）
        if (\$results['result'] === \$this->eccubeConfig['gmo_epsilon']['receive_parameters']['result']['3ds2']) {
            \$url = \$this->router->generate('eccube_payment_lite42_reception_3ds2', [], UrlGeneratorInterface::ABSOLUTE_URL);
            // 3D 2.0 セキュア認証送信パラメータ1　加盟店様⇒カード会社
            \$content = \$this->twig->render('@EccubePaymentLite42/default/Shopping/transition_3ds2_screen.twig', [
                'ACSUrl' => \$results['tds2_url'],
                'TermUrl' => \$url,
                'MD' => \$Order->getPreOrderId(),
                'PaReq' => \$results['pareq'],
            ]);
            // start write log for sent parameters to カード会社に接続必要
            logs('gmo_epsilon')->info('Parameter sent 3DS 2.0 処理（カード会社に接続必要） (ACSUrl):  = '.\$results['tds2_url']);
            logs('gmo_epsilon')->info('Parameter sent 3DS 2.0 処理（カード会社に接続必要） (TermUrl):  = '.\$url);
            logs('gmo_epsilon')->info('Parameter sent 3DS 2.0 処理（カード会社に接続必要） (MD):  = '.\$Order->getPreOrderId());
            logs('gmo_epsilon')->info('Parameter sent 3DS 2.0 処理（カード会社に接続必要） (PaReq):  = '.\$results['pareq']);
            // end write log for sent parameters to カード会社に接続必要
            \$dispatcher->setResponse(new Response(\$content));

            return \$dispatcher;
        }

        return false;
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
        return "EccubePaymentLite42/Service/CreditCardPaymentWithTokenService.php";
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

namespace Plugin\\EccubePaymentLite42\\Service;

use Eccube\\Common\\EccubeConfig;
use Eccube\\Entity\\Order;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestDirectCardPaymentService;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Twig\\Environment;

class CreditCardPaymentWithTokenService
{
    /**
     * @var RequestDirectCardPaymentService
     */
    private \$requestDirectCardPaymentService;
    /**
     * @var EccubeConfig
     */
    protected \$eccubeConfig;
    /**
     * @var Environment
     */
    private \$twig;
    /**
     * @var RouterInterface
     */
    private \$router;
    /**
     * @var GmoEpsilonRequestService
     */
    private \$gmoEpsilonRequestService;

    public function __construct(
        RequestDirectCardPaymentService \$requestDirectCardPaymentService,
        EccubeConfig \$eccubeConfig,
        Environment \$twig,
        GmoEpsilonRequestService \$gmoEpsilonRequestService,
        RouterInterface \$router
    ) {
        \$this->requestDirectCardPaymentService = \$requestDirectCardPaymentService;
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->twig = \$twig;
        \$this->gmoEpsilonRequestService = \$gmoEpsilonRequestService;
        \$this->router = \$router;
    }

    public function handle(string \$token, string \$stCode, \$dispatcher, Order \$Order)
    {
        \$results = \$this
            ->requestDirectCardPaymentService
            ->handle(
                \$Order,
                1,
                \$stCode,
                'shopping_checkout',
                \$token
            );
        if (\$results['status'] === 'NG') {
            \$message = \$results['message'];
            \$content = \$this->twig->render('error.twig', [
                'error_title' => trans('gmo_epsilon.front.shopping.error'),
                'error_message' => \$message,
            ]);
            \$dispatcher->setResponse(new Response(\$content));

            return \$dispatcher;
        }

        \$Order->setTransCode(\$results['trans_code']);
        \$Order->setGmoEpsilonOrderNo(\$results['order_number']);

        // 3DS処理（カード会社に接続必要）
        if (\$results['result'] === \$this->eccubeConfig['gmo_epsilon']['receive_parameters']['result']['3ds']) {
            // 3Dセキュア認証送信パラメータ1　加盟店様⇒カード会社
            \$content = \$this->twig->render('@EccubePaymentLite42/default/Shopping/transition_3ds_screen.twig', [
                'AcsUrl' => \$results['acsurl'],
                'PaReq' => \$results['pareq'],
                'TermUrl' => \$this->router->generate('eccube_payment_lite42_reception_3ds', [], UrlGeneratorInterface::ABSOLUTE_URL),
                'MD' => \$Order->getPreOrderId(),
            ]);
            \$dispatcher->setResponse(new Response(\$content));

            return \$dispatcher;
        }

        // 3DS 2.0 処理（カード会社に接続必要）
        if (\$results['result'] === \$this->eccubeConfig['gmo_epsilon']['receive_parameters']['result']['3ds2']) {
            \$url = \$this->router->generate('eccube_payment_lite42_reception_3ds2', [], UrlGeneratorInterface::ABSOLUTE_URL);
            // 3D 2.0 セキュア認証送信パラメータ1　加盟店様⇒カード会社
            \$content = \$this->twig->render('@EccubePaymentLite42/default/Shopping/transition_3ds2_screen.twig', [
                'ACSUrl' => \$results['tds2_url'],
                'TermUrl' => \$url,
                'MD' => \$Order->getPreOrderId(),
                'PaReq' => \$results['pareq'],
            ]);
            // start write log for sent parameters to カード会社に接続必要
            logs('gmo_epsilon')->info('Parameter sent 3DS 2.0 処理（カード会社に接続必要） (ACSUrl):  = '.\$results['tds2_url']);
            logs('gmo_epsilon')->info('Parameter sent 3DS 2.0 処理（カード会社に接続必要） (TermUrl):  = '.\$url);
            logs('gmo_epsilon')->info('Parameter sent 3DS 2.0 処理（カード会社に接続必要） (MD):  = '.\$Order->getPreOrderId());
            logs('gmo_epsilon')->info('Parameter sent 3DS 2.0 処理（カード会社に接続必要） (PaReq):  = '.\$results['pareq']);
            // end write log for sent parameters to カード会社に接続必要
            \$dispatcher->setResponse(new Response(\$content));

            return \$dispatcher;
        }

        return false;
    }
}
", "EccubePaymentLite42/Service/CreditCardPaymentWithTokenService.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Service\\CreditCardPaymentWithTokenService.php");
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
