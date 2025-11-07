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

/* EccubePaymentLite42/Controller/Command/SendChangeCardMailCommand.php */
class __TwigTemplate_80dccebeba4d50f580dd2ddd7ff7d282 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Command/SendChangeCardMailCommand.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Command/SendChangeCardMailCommand.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Controller\\Command;

use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Entity\\Customer;
use Eccube\\Repository\\CustomerRepository;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Service\\ChangeCardNotificationMailService;
use Plugin\\EccubePaymentLite42\\Service\\GetCustomerForSendChangeCardMailService;
use Plugin\\EccubePaymentLite42\\Service\\IsActiveRegularService;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

class SendChangeCardMailCommand extends Command
{
    protected static \$defaultName = 'gmo_epsilon_4:regular:send_change_card_mail';
    /**
     * @var ChangeCardNotificationMailService
     */
    private \$changeCardNotificationMailService;
    /**
     * @var SymfonyStyle
     */
    private \$io;
    /**
     * @var IsActiveRegularService
     */
    private \$isActiveRegularService;
    /**
     * @var GetCustomerForSendChangeCardMailService
     */
    private \$getCustomerForSendChangeCardMailService;
    /**
     * @var CustomerRepository
     */
    private \$customerRepository;
    /**
     * @var EntityManagerInterface
     */
    private \$entityManager;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;

    public function __construct(
        ChangeCardNotificationMailService \$changeCardNotificationMailService,
        IsActiveRegularService \$isActiveRegularService,
        GetCustomerForSendChangeCardMailService \$getCustomerForSendChangeCardMailService,
        CustomerRepository \$customerRepository,
        EntityManagerInterface \$entityManager,
        ConfigRepository \$configRepository
    ) {
        parent::__construct();
        \$this->changeCardNotificationMailService = \$changeCardNotificationMailService;
        \$this->isActiveRegularService = \$isActiveRegularService;
        \$this->getCustomerForSendChangeCardMailService = \$getCustomerForSendChangeCardMailService;
        \$this->customerRepository = \$customerRepository;
        \$this->entityManager = \$entityManager;
        \$this->configRepository = \$configRepository;
    }

    protected function configure()
    {
        \$this
            ->setDescription('Send a notification email to members who are notified that their credit card has expired.');
    }

    protected function initialize(InputInterface \$input, OutputInterface \$output)
    {
        \$this->io = new SymfonyStyle(\$input, \$output);
    }

    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        if (!\$this->isActiveRegularService->isActive()) {
            \$this->io->text('=== Regular setting is not Active. ===');

            return 0;
        }
        \$this->io->text('=== SendChangeCardMailCommand start. ===');

        logs('gmo_epsilon')->info('=== SendChangeCardMailCommand Start ===');
        \$today = new \\DateTime();
        \$customerIds = \$this->getCustomerForSendChangeCardMailService->get();

        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);

        foreach (\$customerIds as \$ids) {
            foreach (\$ids as \$id) {
                /** @var Customer \$Customer */
                \$Customer = \$this->customerRepository->find(\$id);
                // クレジット有効期限切れの会員かチェック
                \$expireDate = \$Customer->getGmoEpsilonCreditCardExpirationDate();
                \$expireDate->modify('- '.\$Config->getCardExpirationNotificationDays().'day');

                // クレジットカード有効期限通知範囲内で有効期限切れ通知メール送信済みの場合は処理を行わない
                \$cardChangeRequestMailSendDate = \$Customer->getCardChangeRequestMailSendDate();
                if (!empty(\$cardChangeRequestMailSendDate) && \$expireDate < \$cardChangeRequestMailSendDate) {
                    logs('gmo_epsilon')->info('=== Customer: '.\$Customer->getId().' already sent mail. ===');
                    continue;
                }
                // クレジットカード有効期限通知日が過ぎている場合はメールを送信
                if (\$expireDate < \$today) {
                    \$expireDate = \$Customer->getGmoEpsilonCreditCardExpirationDate();
                    \$expireDate->modify('+ '.\$Config->getCardExpirationNotificationDays().'day');
                    \$this->changeCardNotificationMailService->sendMail(\$Customer);
                    \$this->io->text('=== Customer id: '.\$Customer->getId().' send. ===');
                    logs('gmo_epsilon')->info('=== Customer: '.\$Customer->getId().' -- ExpireDate : '.\$expireDate->format('Y/m/d').' send. ===');
                    \$Customer->setCardChangeRequestMailSendDate(new \\DateTime());
                    \$this->entityManager->persist(\$Customer);
                    \$this->entityManager->flush();
                }
            }
        }

        logs('gmo_epsilon')->info('=== SendChangeCardMailCommand End ===');
        \$this->io->text('=== SendChangeCardMailCommand end. ===');

        return 1;
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
        return "EccubePaymentLite42/Controller/Command/SendChangeCardMailCommand.php";
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

namespace Plugin\\EccubePaymentLite42\\Controller\\Command;

use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Entity\\Customer;
use Eccube\\Repository\\CustomerRepository;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Service\\ChangeCardNotificationMailService;
use Plugin\\EccubePaymentLite42\\Service\\GetCustomerForSendChangeCardMailService;
use Plugin\\EccubePaymentLite42\\Service\\IsActiveRegularService;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

class SendChangeCardMailCommand extends Command
{
    protected static \$defaultName = 'gmo_epsilon_4:regular:send_change_card_mail';
    /**
     * @var ChangeCardNotificationMailService
     */
    private \$changeCardNotificationMailService;
    /**
     * @var SymfonyStyle
     */
    private \$io;
    /**
     * @var IsActiveRegularService
     */
    private \$isActiveRegularService;
    /**
     * @var GetCustomerForSendChangeCardMailService
     */
    private \$getCustomerForSendChangeCardMailService;
    /**
     * @var CustomerRepository
     */
    private \$customerRepository;
    /**
     * @var EntityManagerInterface
     */
    private \$entityManager;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;

    public function __construct(
        ChangeCardNotificationMailService \$changeCardNotificationMailService,
        IsActiveRegularService \$isActiveRegularService,
        GetCustomerForSendChangeCardMailService \$getCustomerForSendChangeCardMailService,
        CustomerRepository \$customerRepository,
        EntityManagerInterface \$entityManager,
        ConfigRepository \$configRepository
    ) {
        parent::__construct();
        \$this->changeCardNotificationMailService = \$changeCardNotificationMailService;
        \$this->isActiveRegularService = \$isActiveRegularService;
        \$this->getCustomerForSendChangeCardMailService = \$getCustomerForSendChangeCardMailService;
        \$this->customerRepository = \$customerRepository;
        \$this->entityManager = \$entityManager;
        \$this->configRepository = \$configRepository;
    }

    protected function configure()
    {
        \$this
            ->setDescription('Send a notification email to members who are notified that their credit card has expired.');
    }

    protected function initialize(InputInterface \$input, OutputInterface \$output)
    {
        \$this->io = new SymfonyStyle(\$input, \$output);
    }

    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        if (!\$this->isActiveRegularService->isActive()) {
            \$this->io->text('=== Regular setting is not Active. ===');

            return 0;
        }
        \$this->io->text('=== SendChangeCardMailCommand start. ===');

        logs('gmo_epsilon')->info('=== SendChangeCardMailCommand Start ===');
        \$today = new \\DateTime();
        \$customerIds = \$this->getCustomerForSendChangeCardMailService->get();

        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);

        foreach (\$customerIds as \$ids) {
            foreach (\$ids as \$id) {
                /** @var Customer \$Customer */
                \$Customer = \$this->customerRepository->find(\$id);
                // クレジット有効期限切れの会員かチェック
                \$expireDate = \$Customer->getGmoEpsilonCreditCardExpirationDate();
                \$expireDate->modify('- '.\$Config->getCardExpirationNotificationDays().'day');

                // クレジットカード有効期限通知範囲内で有効期限切れ通知メール送信済みの場合は処理を行わない
                \$cardChangeRequestMailSendDate = \$Customer->getCardChangeRequestMailSendDate();
                if (!empty(\$cardChangeRequestMailSendDate) && \$expireDate < \$cardChangeRequestMailSendDate) {
                    logs('gmo_epsilon')->info('=== Customer: '.\$Customer->getId().' already sent mail. ===');
                    continue;
                }
                // クレジットカード有効期限通知日が過ぎている場合はメールを送信
                if (\$expireDate < \$today) {
                    \$expireDate = \$Customer->getGmoEpsilonCreditCardExpirationDate();
                    \$expireDate->modify('+ '.\$Config->getCardExpirationNotificationDays().'day');
                    \$this->changeCardNotificationMailService->sendMail(\$Customer);
                    \$this->io->text('=== Customer id: '.\$Customer->getId().' send. ===');
                    logs('gmo_epsilon')->info('=== Customer: '.\$Customer->getId().' -- ExpireDate : '.\$expireDate->format('Y/m/d').' send. ===');
                    \$Customer->setCardChangeRequestMailSendDate(new \\DateTime());
                    \$this->entityManager->persist(\$Customer);
                    \$this->entityManager->flush();
                }
            }
        }

        logs('gmo_epsilon')->info('=== SendChangeCardMailCommand End ===');
        \$this->io->text('=== SendChangeCardMailCommand end. ===');

        return 1;
    }
}
", "EccubePaymentLite42/Controller/Command/SendChangeCardMailCommand.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Controller\\Command\\SendChangeCardMailCommand.php");
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
