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

/* EccubePaymentLite42/Service/CalculateOneAfterAnotherNextDeliveryDateService.php */
class __TwigTemplate_d1c1614756d2ce35890831dbccf20a76 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/CalculateOneAfterAnotherNextDeliveryDateService.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/CalculateOneAfterAnotherNextDeliveryDateService.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Service;

use DateTime;
use Plugin\\EccubePaymentLite42\\Entity\\RegularCycle;
use Plugin\\EccubePaymentLite42\\Entity\\RegularCycleType;

class CalculateOneAfterAnotherNextDeliveryDateService
{
    /**
     * @var GetRegularSpecificWeekCycle
     */
    private \$getRegularSpecificWeekCycle;

    public function __construct(
        GetRegularSpecificWeekCycle \$getRegularSpecificWeekCycle
    ) {
        \$this->getRegularSpecificWeekCycle = \$getRegularSpecificWeekCycle;
    }

    /**
     * 次次回のお届け予定日を計算する
     *
     * @return DateTime
     */
    public function calc(RegularCycle \$RegularCycle, DateTime \$nextDeliveryDate)
    {
        \$DateTime = clone \$nextDeliveryDate;
        \$regularCycleDay = \$RegularCycle->getDay();
        /** @var RegularCycleType \$RegularCycleType */
        \$RegularCycleType = \$RegularCycle->getRegularCycleType();
        if (\$RegularCycleType->getId() === RegularCycleType::REGULAR_SPECIFIC_WEEK_CYCLE) {
            return \$this->getRegularSpecificWeekCycle->handle(\$RegularCycle, clone \$DateTime);
        }
        if (\$RegularCycleType->getId() === RegularCycleType::REGULAR_DAILY_CYCLE) {
            \$DateTime->modify('+'.\$regularCycleDay.' day');
        } elseif (\$RegularCycleType->getId() === RegularCycleType::REGULAR_WEEKLY_CYCLE) {
            \$DateTime->modify('+'.\$regularCycleDay.' week');
        } elseif (\$RegularCycleType->getId() === RegularCycleType::REGULAR_MONTHLY_CYCLE) {
            \$DateTime->modify('+'.\$regularCycleDay.' month');
        } elseif (\$RegularCycleType->getId() === RegularCycleType::REGULAR_SPECIFIC_DAY_CYCLE) {
            return \$this->getNextMonth(clone \$DateTime, \$regularCycleDay);
        }

        return \$DateTime;
    }

    private function getNextMonth(\$DateTime, \$regularCycleDay): \\DateTime
    {
        \$nextMonthDate = clone \$DateTime;
        \$nextMonthDate->modify('last day of next month');
        \$year = \$nextMonthDate->format('Y');
        \$month = \$nextMonthDate->format('m');
        // 存在しない日付の場合は、日付を月末とする
        if (!checkdate(\$month, \$regularCycleDay, \$year)) {
            return \$nextMonthDate;
        }
        // 存在する日付の場合
        return new \\DateTime(\$year.'-'.\$month.'-'.\$regularCycleDay);
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
        return "EccubePaymentLite42/Service/CalculateOneAfterAnotherNextDeliveryDateService.php";
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
use Plugin\\EccubePaymentLite42\\Entity\\RegularCycle;
use Plugin\\EccubePaymentLite42\\Entity\\RegularCycleType;

class CalculateOneAfterAnotherNextDeliveryDateService
{
    /**
     * @var GetRegularSpecificWeekCycle
     */
    private \$getRegularSpecificWeekCycle;

    public function __construct(
        GetRegularSpecificWeekCycle \$getRegularSpecificWeekCycle
    ) {
        \$this->getRegularSpecificWeekCycle = \$getRegularSpecificWeekCycle;
    }

    /**
     * 次次回のお届け予定日を計算する
     *
     * @return DateTime
     */
    public function calc(RegularCycle \$RegularCycle, DateTime \$nextDeliveryDate)
    {
        \$DateTime = clone \$nextDeliveryDate;
        \$regularCycleDay = \$RegularCycle->getDay();
        /** @var RegularCycleType \$RegularCycleType */
        \$RegularCycleType = \$RegularCycle->getRegularCycleType();
        if (\$RegularCycleType->getId() === RegularCycleType::REGULAR_SPECIFIC_WEEK_CYCLE) {
            return \$this->getRegularSpecificWeekCycle->handle(\$RegularCycle, clone \$DateTime);
        }
        if (\$RegularCycleType->getId() === RegularCycleType::REGULAR_DAILY_CYCLE) {
            \$DateTime->modify('+'.\$regularCycleDay.' day');
        } elseif (\$RegularCycleType->getId() === RegularCycleType::REGULAR_WEEKLY_CYCLE) {
            \$DateTime->modify('+'.\$regularCycleDay.' week');
        } elseif (\$RegularCycleType->getId() === RegularCycleType::REGULAR_MONTHLY_CYCLE) {
            \$DateTime->modify('+'.\$regularCycleDay.' month');
        } elseif (\$RegularCycleType->getId() === RegularCycleType::REGULAR_SPECIFIC_DAY_CYCLE) {
            return \$this->getNextMonth(clone \$DateTime, \$regularCycleDay);
        }

        return \$DateTime;
    }

    private function getNextMonth(\$DateTime, \$regularCycleDay): \\DateTime
    {
        \$nextMonthDate = clone \$DateTime;
        \$nextMonthDate->modify('last day of next month');
        \$year = \$nextMonthDate->format('Y');
        \$month = \$nextMonthDate->format('m');
        // 存在しない日付の場合は、日付を月末とする
        if (!checkdate(\$month, \$regularCycleDay, \$year)) {
            return \$nextMonthDate;
        }
        // 存在する日付の場合
        return new \\DateTime(\$year.'-'.\$month.'-'.\$regularCycleDay);
    }
}
", "EccubePaymentLite42/Service/CalculateOneAfterAnotherNextDeliveryDateService.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Service\\CalculateOneAfterAnotherNextDeliveryDateService.php");
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
