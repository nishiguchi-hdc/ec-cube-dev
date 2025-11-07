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

/* EccubePaymentLite42/Service/SaveGmoEpsilonCreditCardExpirationService.php */
class __TwigTemplate_0beb368e328a1dd371ba75231812b774 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/SaveGmoEpsilonCreditCardExpirationService.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/SaveGmoEpsilonCreditCardExpirationService.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Service;

use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Entity\\Customer;
use Eccube\\Repository\\CustomerRepository;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestGetUserInfoService;
use Symfony\\Component\\HttpFoundation\\RequestStack;

class SaveGmoEpsilonCreditCardExpirationService
{
    /**
     * @var EntityManagerInterface
     */
    private \$entityManager;
    /**
     * @var SessionInterface
     */
    private \$session;
    /**
     * @var RequestGetUserInfoService
     */
    private \$requestGetUserInfoService;
    /**
     * @var CustomerRepository
     */
    private \$customerRepository;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;
    /**
     * @var GetCardExpireDateTimeService
     */
    private \$getCardExpireDateTimeService;

    public function __construct(
        EntityManagerInterface \$entityManager,
        RequestStack \$requestStack,
        RequestGetUserInfoService \$requestGetUserInfoService,
        CustomerRepository \$customerRepository,
        ConfigRepository \$configRepository,
        GetCardExpireDateTimeService \$getCardExpireDateTimeService
    ) {
        \$this->entityManager = \$entityManager;
        \$this->session = \$requestStack->getSession();
        \$this->requestGetUserInfoService = \$requestGetUserInfoService;
        \$this->customerRepository = \$customerRepository;
        \$this->configRepository = \$configRepository;
        \$this->getCardExpireDateTimeService = \$getCardExpireDateTimeService;
    }

    public function handle()
    {
        // ゲスト購入の場合は処理を行わない
        if (is_null(\$this->session->get('_security_customer'))) {
            return;
        }
        /** @var Customer \$customer */
        \$customer = unserialize(\$this->session->get('_security_customer'))->getUser();
        /** @var Customer \$Customer */
        \$Customer = \$this->customerRepository->find(\$customer->getId());
        \$results = \$this->requestGetUserInfoService->handle(\$Customer->getId());
        // クレジットカード有効期限を保存する
        if (\$results['status'] === 'OK' && strpos(\$results['cardExpire'], '/') !== false) {
            \$Customer->setGmoEpsilonCreditCardExpirationDate(\$this->getCardExpireDateTimeService->get(\$results['cardExpire']));
        }
        \$Customer->setCardChangeRequestMailSendDate(null);
        \$this->entityManager->persist(\$Customer);
        \$this->entityManager->flush();
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
        return "EccubePaymentLite42/Service/SaveGmoEpsilonCreditCardExpirationService.php";
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

use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Entity\\Customer;
use Eccube\\Repository\\CustomerRepository;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Service\\GmoEpsilonRequest\\RequestGetUserInfoService;
use Symfony\\Component\\HttpFoundation\\RequestStack;

class SaveGmoEpsilonCreditCardExpirationService
{
    /**
     * @var EntityManagerInterface
     */
    private \$entityManager;
    /**
     * @var SessionInterface
     */
    private \$session;
    /**
     * @var RequestGetUserInfoService
     */
    private \$requestGetUserInfoService;
    /**
     * @var CustomerRepository
     */
    private \$customerRepository;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;
    /**
     * @var GetCardExpireDateTimeService
     */
    private \$getCardExpireDateTimeService;

    public function __construct(
        EntityManagerInterface \$entityManager,
        RequestStack \$requestStack,
        RequestGetUserInfoService \$requestGetUserInfoService,
        CustomerRepository \$customerRepository,
        ConfigRepository \$configRepository,
        GetCardExpireDateTimeService \$getCardExpireDateTimeService
    ) {
        \$this->entityManager = \$entityManager;
        \$this->session = \$requestStack->getSession();
        \$this->requestGetUserInfoService = \$requestGetUserInfoService;
        \$this->customerRepository = \$customerRepository;
        \$this->configRepository = \$configRepository;
        \$this->getCardExpireDateTimeService = \$getCardExpireDateTimeService;
    }

    public function handle()
    {
        // ゲスト購入の場合は処理を行わない
        if (is_null(\$this->session->get('_security_customer'))) {
            return;
        }
        /** @var Customer \$customer */
        \$customer = unserialize(\$this->session->get('_security_customer'))->getUser();
        /** @var Customer \$Customer */
        \$Customer = \$this->customerRepository->find(\$customer->getId());
        \$results = \$this->requestGetUserInfoService->handle(\$Customer->getId());
        // クレジットカード有効期限を保存する
        if (\$results['status'] === 'OK' && strpos(\$results['cardExpire'], '/') !== false) {
            \$Customer->setGmoEpsilonCreditCardExpirationDate(\$this->getCardExpireDateTimeService->get(\$results['cardExpire']));
        }
        \$Customer->setCardChangeRequestMailSendDate(null);
        \$this->entityManager->persist(\$Customer);
        \$this->entityManager->flush();
    }
}
", "EccubePaymentLite42/Service/SaveGmoEpsilonCreditCardExpirationService.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Service\\SaveGmoEpsilonCreditCardExpirationService.php");
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
