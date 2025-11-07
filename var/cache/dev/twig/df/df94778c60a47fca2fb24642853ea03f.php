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

/* EccubePaymentLite42/Service/IsResumeRegularOrder.php */
class __TwigTemplate_e56f712c60ba9c7b4e09e31016ca3c1e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/IsResumeRegularOrder.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/IsResumeRegularOrder.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Service;

use DateTime;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrder;
use Plugin\\EccubePaymentLite42\\Entity\\RegularStatus;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;

class IsResumeRegularOrder
{
    /**
     * @var ConfigRepository
     */
    private \$configRepository;

    public function __construct(
        ConfigRepository \$configRepository
    ) {
        \$this->configRepository = \$configRepository;
    }

    /**
     * 定期受注が再開可能の場合はtrue
     *
     * @return bool
     */
    public function handle(RegularOrder \$RegularOrder)
    {
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        \$regularResumbablePeriod = \$Config->getRegularResumablePeriod();
        // 定期再開可能期間が設定されていない場合は、無制限で再開可能
        if (is_null(\$regularResumbablePeriod)) {
            return true;
        }
        // 定期ステータスが「休止」以外の場合は処理を行わない。
        if (\$RegularOrder->getRegularStatus()->getId() !== RegularStatus::SUSPEND) {
            return true;
        }
        /** @var DateTime \$regularStopDate */
        \$regularStopDate = \$RegularOrder->getRegularStopDate();
        if (is_null(\$regularStopDate)) {
            return true;
        }
        \$today = new DateTime('today');
        \$regularResumptionDeadLine = \$regularStopDate->modify('+ '.\$regularResumbablePeriod.'day 00:00:00');
        // 定期再開可能期間［regular_resumable_period］＋休止日［regular_stop_date］）＜今日　の場合
        if (\$regularResumptionDeadLine < \$today) {
            return false;
        }

        return true;
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
        return "EccubePaymentLite42/Service/IsResumeRegularOrder.php";
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
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrder;
use Plugin\\EccubePaymentLite42\\Entity\\RegularStatus;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;

class IsResumeRegularOrder
{
    /**
     * @var ConfigRepository
     */
    private \$configRepository;

    public function __construct(
        ConfigRepository \$configRepository
    ) {
        \$this->configRepository = \$configRepository;
    }

    /**
     * 定期受注が再開可能の場合はtrue
     *
     * @return bool
     */
    public function handle(RegularOrder \$RegularOrder)
    {
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        \$regularResumbablePeriod = \$Config->getRegularResumablePeriod();
        // 定期再開可能期間が設定されていない場合は、無制限で再開可能
        if (is_null(\$regularResumbablePeriod)) {
            return true;
        }
        // 定期ステータスが「休止」以外の場合は処理を行わない。
        if (\$RegularOrder->getRegularStatus()->getId() !== RegularStatus::SUSPEND) {
            return true;
        }
        /** @var DateTime \$regularStopDate */
        \$regularStopDate = \$RegularOrder->getRegularStopDate();
        if (is_null(\$regularStopDate)) {
            return true;
        }
        \$today = new DateTime('today');
        \$regularResumptionDeadLine = \$regularStopDate->modify('+ '.\$regularResumbablePeriod.'day 00:00:00');
        // 定期再開可能期間［regular_resumable_period］＋休止日［regular_stop_date］）＜今日　の場合
        if (\$regularResumptionDeadLine < \$today) {
            return false;
        }

        return true;
    }
}
", "EccubePaymentLite42/Service/IsResumeRegularOrder.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Service\\IsResumeRegularOrder.php");
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
