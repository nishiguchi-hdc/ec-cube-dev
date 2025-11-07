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

/* EccubePaymentLite42/Service/GetRegularSpecificWeekCycle.php */
class __TwigTemplate_4036ece65294e474d11f41c23332bc44 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/GetRegularSpecificWeekCycle.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/GetRegularSpecificWeekCycle.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Service;

use Plugin\\EccubePaymentLite42\\Entity\\RegularCycle;

class GetRegularSpecificWeekCycle
{
    public function handle(\$RegularCycle, \$DateTime)
    {
        \$weekNumber = (int) \$DateTime->format('w') + 1;
        if (\$RegularCycle->getWeek() === RegularCycle::SUNDAY) {
            if (\$weekNumber !== RegularCycle::SUNDAY) {
                \$DateTime->modify('next Sunday');
            }

            return \$DateTime->modify('next Sunday');
        } elseif (\$RegularCycle->getWeek() === RegularCycle::MONDAY) {
            if (\$weekNumber !== RegularCycle::MONDAY) {
                \$DateTime->modify('next Monday');
            }

            return \$DateTime->modify('next Monday');
        } elseif (\$RegularCycle->getWeek() === RegularCycle::TUESDAY) {
            if (\$weekNumber !== RegularCycle::TUESDAY) {
                \$DateTime->modify('next Tuesday');
            }

            return \$DateTime->modify('next Tuesday');
        } elseif (\$RegularCycle->getWeek() === RegularCycle::WEDNESDAY) {
            if (\$weekNumber !== RegularCycle::WEDNESDAY) {
                \$DateTime->modify('next Wednesday');
            }

            return \$DateTime->modify('next Wednesday');
        } elseif (\$RegularCycle->getWeek() === RegularCycle::THURSDAY) {
            if (\$weekNumber !== RegularCycle::THURSDAY) {
                \$DateTime->modify('next Thursday');
            }

            return \$DateTime->modify('next Thursday');
        } elseif (\$RegularCycle->getWeek() === RegularCycle::FRIDAY) {
            if (\$weekNumber !== RegularCycle::FRIDAY) {
                \$DateTime->modify('next Friday');
            }

            return \$DateTime->modify('next Friday');
        } elseif (\$RegularCycle->getWeek() === RegularCycle::SATURDAY) {
            if (\$weekNumber !== RegularCycle::SATURDAY) {
                \$DateTime->modify('next Saturday');
            }

            return \$DateTime->modify('next Saturday');
        }

        return \$DateTime->modify('+1 week');
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
        return "EccubePaymentLite42/Service/GetRegularSpecificWeekCycle.php";
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

use Plugin\\EccubePaymentLite42\\Entity\\RegularCycle;

class GetRegularSpecificWeekCycle
{
    public function handle(\$RegularCycle, \$DateTime)
    {
        \$weekNumber = (int) \$DateTime->format('w') + 1;
        if (\$RegularCycle->getWeek() === RegularCycle::SUNDAY) {
            if (\$weekNumber !== RegularCycle::SUNDAY) {
                \$DateTime->modify('next Sunday');
            }

            return \$DateTime->modify('next Sunday');
        } elseif (\$RegularCycle->getWeek() === RegularCycle::MONDAY) {
            if (\$weekNumber !== RegularCycle::MONDAY) {
                \$DateTime->modify('next Monday');
            }

            return \$DateTime->modify('next Monday');
        } elseif (\$RegularCycle->getWeek() === RegularCycle::TUESDAY) {
            if (\$weekNumber !== RegularCycle::TUESDAY) {
                \$DateTime->modify('next Tuesday');
            }

            return \$DateTime->modify('next Tuesday');
        } elseif (\$RegularCycle->getWeek() === RegularCycle::WEDNESDAY) {
            if (\$weekNumber !== RegularCycle::WEDNESDAY) {
                \$DateTime->modify('next Wednesday');
            }

            return \$DateTime->modify('next Wednesday');
        } elseif (\$RegularCycle->getWeek() === RegularCycle::THURSDAY) {
            if (\$weekNumber !== RegularCycle::THURSDAY) {
                \$DateTime->modify('next Thursday');
            }

            return \$DateTime->modify('next Thursday');
        } elseif (\$RegularCycle->getWeek() === RegularCycle::FRIDAY) {
            if (\$weekNumber !== RegularCycle::FRIDAY) {
                \$DateTime->modify('next Friday');
            }

            return \$DateTime->modify('next Friday');
        } elseif (\$RegularCycle->getWeek() === RegularCycle::SATURDAY) {
            if (\$weekNumber !== RegularCycle::SATURDAY) {
                \$DateTime->modify('next Saturday');
            }

            return \$DateTime->modify('next Saturday');
        }

        return \$DateTime->modify('+1 week');
    }
}
", "EccubePaymentLite42/Service/GetRegularSpecificWeekCycle.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Service\\GetRegularSpecificWeekCycle.php");
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
