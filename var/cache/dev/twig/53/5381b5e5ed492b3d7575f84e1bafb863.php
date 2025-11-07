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

/* EccubePaymentLite42/Service/GetRegularNoticeUserService.php */
class __TwigTemplate_0ac190af3ab461b7346ae10c42af3032 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/GetRegularNoticeUserService.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/GetRegularNoticeUserService.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Service;

use DateTime;
use Doctrine\\ORM\\EntityManagerInterface;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Entity\\RegularShipping;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;

class GetRegularNoticeUserService
{
    /**
     * @var EntityManagerInterface
     */
    private \$entityManager;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;

    public function __construct(
        EntityManagerInterface \$entityManager,
        ConfigRepository \$configRepository
    ) {
        \$this->entityManager = \$entityManager;
        \$this->configRepository = \$configRepository;
    }

    public function handle()
    {
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        \$regularDeliveryNotificationEmailDate = \$Config->getRegularDeliveryNotificationEmailDays();
        if (is_null(\$regularDeliveryNotificationEmailDate)) {
            return [];
        }
        // 次回配送予定日の5日前(定期配送お知らせメール日で設定されている数値の定期受注を取得
        \$today = new DateTime('today');
        \$sendMailDateStart = \$today->modify('+'.\$regularDeliveryNotificationEmailDate.' day');
        \$today = new DateTime('today');
        \$sendMailDateEnd = \$today->modify('+'.(\$regularDeliveryNotificationEmailDate + 1).' day');
        \$qb = \$this
            ->entityManager
            ->createQueryBuilder()
            ->select('rs')
            ->from(RegularShipping::class, 'rs')
            ->where('rs.next_delivery_date >= :next_delivery_date_start')
            ->setParameter('next_delivery_date_start', \$sendMailDateStart)
            ->andWhere('rs.next_delivery_date < :next_delivery_date_end')
            ->setParameter('next_delivery_date_end', \$sendMailDateEnd);

        return \$qb
            ->getQuery()
            ->getArrayResult();
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
        return "EccubePaymentLite42/Service/GetRegularNoticeUserService.php";
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

use DateTime;
use Doctrine\\ORM\\EntityManagerInterface;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Entity\\RegularShipping;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;

class GetRegularNoticeUserService
{
    /**
     * @var EntityManagerInterface
     */
    private \$entityManager;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;

    public function __construct(
        EntityManagerInterface \$entityManager,
        ConfigRepository \$configRepository
    ) {
        \$this->entityManager = \$entityManager;
        \$this->configRepository = \$configRepository;
    }

    public function handle()
    {
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        \$regularDeliveryNotificationEmailDate = \$Config->getRegularDeliveryNotificationEmailDays();
        if (is_null(\$regularDeliveryNotificationEmailDate)) {
            return [];
        }
        // 次回配送予定日の5日前(定期配送お知らせメール日で設定されている数値の定期受注を取得
        \$today = new DateTime('today');
        \$sendMailDateStart = \$today->modify('+'.\$regularDeliveryNotificationEmailDate.' day');
        \$today = new DateTime('today');
        \$sendMailDateEnd = \$today->modify('+'.(\$regularDeliveryNotificationEmailDate + 1).' day');
        \$qb = \$this
            ->entityManager
            ->createQueryBuilder()
            ->select('rs')
            ->from(RegularShipping::class, 'rs')
            ->where('rs.next_delivery_date >= :next_delivery_date_start')
            ->setParameter('next_delivery_date_start', \$sendMailDateStart)
            ->andWhere('rs.next_delivery_date < :next_delivery_date_end')
            ->setParameter('next_delivery_date_end', \$sendMailDateEnd);

        return \$qb
            ->getQuery()
            ->getArrayResult();
    }
}
", "EccubePaymentLite42/Service/GetRegularNoticeUserService.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Service\\GetRegularNoticeUserService.php");
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
