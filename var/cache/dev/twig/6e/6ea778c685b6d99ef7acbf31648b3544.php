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

/* EccubePaymentLite42/Service/Mail/OrderCreationBatchResultMailService.php */
class __TwigTemplate_d802c755a3232c37e688c80e10e8ec0e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/Mail/OrderCreationBatchResultMailService.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/Mail/OrderCreationBatchResultMailService.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Service\\Mail;

use Eccube\\Repository\\BaseInfoRepository;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Symfony\\Component\\Mailer\\MailerInterface;
use Symfony\\Component\\Mime\\Address;
use Symfony\\Component\\Mime\\Email;
use Twig\\Environment;

class OrderCreationBatchResultMailService
{
    /**
     * @var MailerInterface
     */
    private \$mailer;
    /**
     * @var Environment
     */
    private \$twig;
    /**
     * @var BaseInfoRepository
     */
    private \$baseInfoRepository;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;

    public function __construct(
        MailerInterface \$mailer,
        Environment \$twig,
        BaseInfoRepository \$baseInfoRepository,
        ConfigRepository \$configRepository
    ) {
        \$this->mailer = \$mailer;
        \$this->twig = \$twig;
        \$this->baseInfoRepository = \$baseInfoRepository;
        \$this->configRepository = \$configRepository;
    }

    /**
     * @param \$PaymentErrorRegularOrders
     *
     * @return int|void
     *
     * @throws \\Twig\\Error\\LoaderError
     * @throws \\Twig\\Error\\RuntimeError
     * @throws \\Twig\\Error\\SyntaxError
     */
    public function sendMail(
        \$PaymentErrorRegularOrders,
        int \$numberOfRegularOrders,
        int \$numberOfCompletedOrder,
        int \$numberOfPaymentError,
        int \$numberOfSystemError)
    {
        \$body = \$this->twig->render('EccubePaymentLite42/Resource/template/default/Mail/order_creation_batch_result_mail.twig', [
            'now' => new \\DateTime(),
            'PaymentErrorRegularOrders' => \$PaymentErrorRegularOrders,
            'numberOfRegularOrders' => \$numberOfRegularOrders,
            'numberOfCompletedOrder' => \$numberOfCompletedOrder,
            'numberOfPaymentError' => \$numberOfPaymentError,
            'numberOfSystemError' => \$numberOfSystemError,
        ]);

        \$BaseInfo = \$this->baseInfoRepository->find(1);
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        \$message = (new Email())
            ->subject('['.\$BaseInfo->getShopName().'] '.'受注作成バッチ実行結果通知メール')
            ->from(new Address(\$BaseInfo->getEmail01(), \$BaseInfo->getShopName()))
            ->to(\$Config->getRegularOrderNotificationEmail())
            ->replyTo(\$BaseInfo->getEmail03())
            ->returnPath(\$BaseInfo->getEmail04());
        \$message->text(\$body);

        return \$this->mailer->send(\$message);
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
        return "EccubePaymentLite42/Service/Mail/OrderCreationBatchResultMailService.php";
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

namespace Plugin\\EccubePaymentLite42\\Service\\Mail;

use Eccube\\Repository\\BaseInfoRepository;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Symfony\\Component\\Mailer\\MailerInterface;
use Symfony\\Component\\Mime\\Address;
use Symfony\\Component\\Mime\\Email;
use Twig\\Environment;

class OrderCreationBatchResultMailService
{
    /**
     * @var MailerInterface
     */
    private \$mailer;
    /**
     * @var Environment
     */
    private \$twig;
    /**
     * @var BaseInfoRepository
     */
    private \$baseInfoRepository;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;

    public function __construct(
        MailerInterface \$mailer,
        Environment \$twig,
        BaseInfoRepository \$baseInfoRepository,
        ConfigRepository \$configRepository
    ) {
        \$this->mailer = \$mailer;
        \$this->twig = \$twig;
        \$this->baseInfoRepository = \$baseInfoRepository;
        \$this->configRepository = \$configRepository;
    }

    /**
     * @param \$PaymentErrorRegularOrders
     *
     * @return int|void
     *
     * @throws \\Twig\\Error\\LoaderError
     * @throws \\Twig\\Error\\RuntimeError
     * @throws \\Twig\\Error\\SyntaxError
     */
    public function sendMail(
        \$PaymentErrorRegularOrders,
        int \$numberOfRegularOrders,
        int \$numberOfCompletedOrder,
        int \$numberOfPaymentError,
        int \$numberOfSystemError)
    {
        \$body = \$this->twig->render('EccubePaymentLite42/Resource/template/default/Mail/order_creation_batch_result_mail.twig', [
            'now' => new \\DateTime(),
            'PaymentErrorRegularOrders' => \$PaymentErrorRegularOrders,
            'numberOfRegularOrders' => \$numberOfRegularOrders,
            'numberOfCompletedOrder' => \$numberOfCompletedOrder,
            'numberOfPaymentError' => \$numberOfPaymentError,
            'numberOfSystemError' => \$numberOfSystemError,
        ]);

        \$BaseInfo = \$this->baseInfoRepository->find(1);
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        \$message = (new Email())
            ->subject('['.\$BaseInfo->getShopName().'] '.'受注作成バッチ実行結果通知メール')
            ->from(new Address(\$BaseInfo->getEmail01(), \$BaseInfo->getShopName()))
            ->to(\$Config->getRegularOrderNotificationEmail())
            ->replyTo(\$BaseInfo->getEmail03())
            ->returnPath(\$BaseInfo->getEmail04());
        \$message->text(\$body);

        return \$this->mailer->send(\$message);
    }
}
", "EccubePaymentLite42/Service/Mail/OrderCreationBatchResultMailService.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Service\\Mail\\OrderCreationBatchResultMailService.php");
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
