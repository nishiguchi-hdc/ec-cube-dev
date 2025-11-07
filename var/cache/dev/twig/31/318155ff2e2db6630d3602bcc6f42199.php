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

/* EccubePaymentLite42/Service/IsExistRegularOrderWithRegularCyclesToBeDeleted.php */
class __TwigTemplate_2033141a3f40a6d20fccfff9b9160672 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/IsExistRegularOrderWithRegularCyclesToBeDeleted.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/IsExistRegularOrderWithRegularCyclesToBeDeleted.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Service;

use Plugin\\EccubePaymentLite42\\Entity\\RegularOrder;
use Plugin\\EccubePaymentLite42\\Entity\\RegularStatus;
use Plugin\\EccubePaymentLite42\\Repository\\RegularOrderRepository;

class IsExistRegularOrderWithRegularCyclesToBeDeleted
{
    /**
     * @var RegularOrderRepository
     */
    private \$regularOrderRepository;

    public function __construct(
        RegularOrderRepository \$regularOrderRepository
    ) {
        \$this->regularOrderRepository = \$regularOrderRepository;
    }

    public function isExist(\$originalRegularCycles, \$targetRegularCycles): bool
    {
        // 定期受注で「解約」以外の定期ステータスの定期受注が存在する場合、
        // 商品登録から定期サイクルを解除出来ないようにフォームの入力チェックを行う
        \$originalRegularCycleIds = [];
        foreach (\$originalRegularCycles as \$RegularCycle) {
            \$originalRegularCycleIds[] = \$RegularCycle->getId();
        }
        \$targetRegularCycleIds = [];
        foreach (\$targetRegularCycles as \$RegularCycle) {
            \$targetRegularCycleIds[] = \$RegularCycle->getId();
        }
        \$deleteTargetRegularCycleIds = array_diff(\$originalRegularCycleIds, \$targetRegularCycleIds);
        /** @var RegularOrder[] \$RegularOrders */
        \$RegularOrders = \$this->regularOrderRepository->findBy([
            'RegularStatus' => [
                RegularStatus::CONTINUE,
                RegularStatus::SUSPEND,
                RegularStatus::PAYMENT_ERROR,
                RegularStatus::SYSTEM_ERROR,
                RegularStatus::WAITING_RE_PAYMENT,
            ],
            'RegularCycle' => \$deleteTargetRegularCycleIds,
        ]);
        if (empty(\$RegularOrders)) {
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
        return "EccubePaymentLite42/Service/IsExistRegularOrderWithRegularCyclesToBeDeleted.php";
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

use Plugin\\EccubePaymentLite42\\Entity\\RegularOrder;
use Plugin\\EccubePaymentLite42\\Entity\\RegularStatus;
use Plugin\\EccubePaymentLite42\\Repository\\RegularOrderRepository;

class IsExistRegularOrderWithRegularCyclesToBeDeleted
{
    /**
     * @var RegularOrderRepository
     */
    private \$regularOrderRepository;

    public function __construct(
        RegularOrderRepository \$regularOrderRepository
    ) {
        \$this->regularOrderRepository = \$regularOrderRepository;
    }

    public function isExist(\$originalRegularCycles, \$targetRegularCycles): bool
    {
        // 定期受注で「解約」以外の定期ステータスの定期受注が存在する場合、
        // 商品登録から定期サイクルを解除出来ないようにフォームの入力チェックを行う
        \$originalRegularCycleIds = [];
        foreach (\$originalRegularCycles as \$RegularCycle) {
            \$originalRegularCycleIds[] = \$RegularCycle->getId();
        }
        \$targetRegularCycleIds = [];
        foreach (\$targetRegularCycles as \$RegularCycle) {
            \$targetRegularCycleIds[] = \$RegularCycle->getId();
        }
        \$deleteTargetRegularCycleIds = array_diff(\$originalRegularCycleIds, \$targetRegularCycleIds);
        /** @var RegularOrder[] \$RegularOrders */
        \$RegularOrders = \$this->regularOrderRepository->findBy([
            'RegularStatus' => [
                RegularStatus::CONTINUE,
                RegularStatus::SUSPEND,
                RegularStatus::PAYMENT_ERROR,
                RegularStatus::SYSTEM_ERROR,
                RegularStatus::WAITING_RE_PAYMENT,
            ],
            'RegularCycle' => \$deleteTargetRegularCycleIds,
        ]);
        if (empty(\$RegularOrders)) {
            return false;
        }

        return true;
    }
}
", "EccubePaymentLite42/Service/IsExistRegularOrderWithRegularCyclesToBeDeleted.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Service\\IsExistRegularOrderWithRegularCyclesToBeDeleted.php");
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
