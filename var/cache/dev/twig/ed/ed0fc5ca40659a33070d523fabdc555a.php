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

/* EccubePaymentLite42/Service/ChangeCardNotificationMailService.php */
class __TwigTemplate_3307b62c5a5fce4b0408b341b1018e91 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/ChangeCardNotificationMailService.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/ChangeCardNotificationMailService.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Service;

use Eccube\\Common\\EccubeConfig;
use Eccube\\Entity\\Customer;
use Eccube\\Entity\\MailTemplate;
use Eccube\\Repository\\BaseInfoRepository;
use Eccube\\Repository\\MailTemplateRepository;
use Eccube\\Service\\MailService;
use Symfony\\Component\\Mailer\\MailerInterface;
use Symfony\\Component\\Mime\\Address;
use Symfony\\Component\\Mime\\Email;
use Twig\\Environment;

class ChangeCardNotificationMailService
{
    /**
     * @var \\MailerInterface
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
     * @var MailService
     */
    private \$mailService;
    /**
     * @var MailTemplateRepository
     */
    private \$mailTemplateRepository;
    /**
     * @var EccubeConfig
     */
    private \$eccubeConfig;

    public function __construct(
        MailerInterface \$mailer,
        Environment \$twig,
        BaseInfoRepository \$baseInfoRepository,
        MailTemplateRepository \$mailTemplateRepository,
        MailService \$mailService,
        EccubeConfig \$eccubeConfig
    ) {
        \$this->mailer = \$mailer;
        \$this->twig = \$twig;
        \$this->baseInfoRepository = \$baseInfoRepository;
        \$this->mailTemplateRepository = \$mailTemplateRepository;
        \$this->mailService = \$mailService;
        \$this->eccubeConfig = \$eccubeConfig;
    }

    public function sendMail(Customer \$Customer)
    {
        \$BaseInfo = \$this->baseInfoRepository->find(1);
        \$expireDateTime = \$Customer
            ->getGmoEpsilonCreditCardExpirationDate();
        /** @var MailTemplate \$MailTemplate */
        \$MailTemplate = \$this->mailTemplateRepository->findOneBy([
            'file_name' => 'EccubePaymentLite42/Resource/template/default/Mail/expiration_notice_mail.twig',
        ]);
        \$body = \$this->twig->render(\$MailTemplate->getFileName(), [
            'BaseInfo' => \$BaseInfo,
            'Customer' => \$Customer,
            'expireDateTime' => \$expireDateTime,
        ]);

        \$message = (new Email())
            ->subject('['.\$BaseInfo->getShopName().'] '.\$MailTemplate->getMailSubject())
            ->from(new Address(\$BaseInfo->getEmail01(), \$BaseInfo->getShopName()))
            ->to(\$Customer->getEmail())
            ->replyTo(\$BaseInfo->getEmail03())
            ->returnPath(\$BaseInfo->getEmail04());

        \$htmlFileName = \$this->mailService->getHtmlTemplate(\$MailTemplate->getFileName());
        if (!is_null(\$htmlFileName)) {
            \$htmlBody = \$this->twig->render(\$htmlFileName, [
                'BaseInfo' => \$BaseInfo,
                'Customer' => \$Customer,
                'expireDateTime' => \$expireDateTime,
            ]);

            \$message
                ->text(\$body)
                ->html(\$htmlBody);
//
//                ->setContentType('text/plain; charset=UTF-8')
//                ->setBody(\$body, 'text/plain')
//                ->addPart(\$htmlBody, 'text/html');
        } else {
            \$message->text(\$body);
        }

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
        return "EccubePaymentLite42/Service/ChangeCardNotificationMailService.php";
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
use Eccube\\Entity\\Customer;
use Eccube\\Entity\\MailTemplate;
use Eccube\\Repository\\BaseInfoRepository;
use Eccube\\Repository\\MailTemplateRepository;
use Eccube\\Service\\MailService;
use Symfony\\Component\\Mailer\\MailerInterface;
use Symfony\\Component\\Mime\\Address;
use Symfony\\Component\\Mime\\Email;
use Twig\\Environment;

class ChangeCardNotificationMailService
{
    /**
     * @var \\MailerInterface
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
     * @var MailService
     */
    private \$mailService;
    /**
     * @var MailTemplateRepository
     */
    private \$mailTemplateRepository;
    /**
     * @var EccubeConfig
     */
    private \$eccubeConfig;

    public function __construct(
        MailerInterface \$mailer,
        Environment \$twig,
        BaseInfoRepository \$baseInfoRepository,
        MailTemplateRepository \$mailTemplateRepository,
        MailService \$mailService,
        EccubeConfig \$eccubeConfig
    ) {
        \$this->mailer = \$mailer;
        \$this->twig = \$twig;
        \$this->baseInfoRepository = \$baseInfoRepository;
        \$this->mailTemplateRepository = \$mailTemplateRepository;
        \$this->mailService = \$mailService;
        \$this->eccubeConfig = \$eccubeConfig;
    }

    public function sendMail(Customer \$Customer)
    {
        \$BaseInfo = \$this->baseInfoRepository->find(1);
        \$expireDateTime = \$Customer
            ->getGmoEpsilonCreditCardExpirationDate();
        /** @var MailTemplate \$MailTemplate */
        \$MailTemplate = \$this->mailTemplateRepository->findOneBy([
            'file_name' => 'EccubePaymentLite42/Resource/template/default/Mail/expiration_notice_mail.twig',
        ]);
        \$body = \$this->twig->render(\$MailTemplate->getFileName(), [
            'BaseInfo' => \$BaseInfo,
            'Customer' => \$Customer,
            'expireDateTime' => \$expireDateTime,
        ]);

        \$message = (new Email())
            ->subject('['.\$BaseInfo->getShopName().'] '.\$MailTemplate->getMailSubject())
            ->from(new Address(\$BaseInfo->getEmail01(), \$BaseInfo->getShopName()))
            ->to(\$Customer->getEmail())
            ->replyTo(\$BaseInfo->getEmail03())
            ->returnPath(\$BaseInfo->getEmail04());

        \$htmlFileName = \$this->mailService->getHtmlTemplate(\$MailTemplate->getFileName());
        if (!is_null(\$htmlFileName)) {
            \$htmlBody = \$this->twig->render(\$htmlFileName, [
                'BaseInfo' => \$BaseInfo,
                'Customer' => \$Customer,
                'expireDateTime' => \$expireDateTime,
            ]);

            \$message
                ->text(\$body)
                ->html(\$htmlBody);
//
//                ->setContentType('text/plain; charset=UTF-8')
//                ->setBody(\$body, 'text/plain')
//                ->addPart(\$htmlBody, 'text/html');
        } else {
            \$message->text(\$body);
        }

        return \$this->mailer->send(\$message);
    }
}
", "EccubePaymentLite42/Service/ChangeCardNotificationMailService.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Service\\ChangeCardNotificationMailService.php");
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
