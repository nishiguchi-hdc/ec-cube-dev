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

/* EccubePaymentLite42/Service/NextDeliveryChangeableRangeService.php */
class __TwigTemplate_d8b6c463836acfd56d2ee2921dadb8ee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/NextDeliveryChangeableRangeService.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/NextDeliveryChangeableRangeService.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Service;

use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Entity\\RegularShipping;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;

class NextDeliveryChangeableRangeService
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

    public function get(RegularShipping \$RegularShipping)
    {
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        \$deadlineDate = new \\DateTime('today');
        \$deadlineDate->modify('+'.\$Config->getRegularOrderDeadline().' day');
        \$day = \$Config->getNextDeliveryDateChangeableRangeDays();
        \$format = 'Y/m/d';
        \$todayForTheNextDay = clone \$RegularShipping->getNextDeliveryDate();
        \$todayForThePreviousDay = clone \$RegularShipping->getNextDeliveryDate();
        \$changeableRangeDays = [
            \$todayForTheNextDay->format(\$format) => clone \$todayForTheNextDay,
        ];
        for (\$i = 1; \$i <= \$day; \$i++) {
            \$nextDay = \$todayForTheNextDay->modify('+1 day');
            \$changeableRangeDays[\$nextDay->format(\$format)] = clone \$nextDay;
            // 「次回お届け予定日」の前方への日付追加について、
            // 「定期受注注文締切日」に実行される前提の定期受注作成バッチが実行されるようにするため
            // 「定期受注注文締切日」を含む過去の日付を設定できないようにする。
            \$previousDay = \$todayForThePreviousDay->modify('-1 day');
            if (\$deadlineDate < \$previousDay) {
                \$changeableRangeDays[\$previousDay->format(\$format)] = clone \$previousDay;
            }
        }
        asort(\$changeableRangeDays);

        return \$changeableRangeDays;
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
        return "EccubePaymentLite42/Service/NextDeliveryChangeableRangeService.php";
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

use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Entity\\RegularShipping;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;

class NextDeliveryChangeableRangeService
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

    public function get(RegularShipping \$RegularShipping)
    {
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        \$deadlineDate = new \\DateTime('today');
        \$deadlineDate->modify('+'.\$Config->getRegularOrderDeadline().' day');
        \$day = \$Config->getNextDeliveryDateChangeableRangeDays();
        \$format = 'Y/m/d';
        \$todayForTheNextDay = clone \$RegularShipping->getNextDeliveryDate();
        \$todayForThePreviousDay = clone \$RegularShipping->getNextDeliveryDate();
        \$changeableRangeDays = [
            \$todayForTheNextDay->format(\$format) => clone \$todayForTheNextDay,
        ];
        for (\$i = 1; \$i <= \$day; \$i++) {
            \$nextDay = \$todayForTheNextDay->modify('+1 day');
            \$changeableRangeDays[\$nextDay->format(\$format)] = clone \$nextDay;
            // 「次回お届け予定日」の前方への日付追加について、
            // 「定期受注注文締切日」に実行される前提の定期受注作成バッチが実行されるようにするため
            // 「定期受注注文締切日」を含む過去の日付を設定できないようにする。
            \$previousDay = \$todayForThePreviousDay->modify('-1 day');
            if (\$deadlineDate < \$previousDay) {
                \$changeableRangeDays[\$previousDay->format(\$format)] = clone \$previousDay;
            }
        }
        asort(\$changeableRangeDays);

        return \$changeableRangeDays;
    }
}
", "EccubePaymentLite42/Service/NextDeliveryChangeableRangeService.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Service\\NextDeliveryChangeableRangeService.php");
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
