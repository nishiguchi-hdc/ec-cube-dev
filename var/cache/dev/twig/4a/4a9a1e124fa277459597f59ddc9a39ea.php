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

/* EccubePaymentLite42/Controller/Front/Shopping/ShippingDeliveryDateController.php */
class __TwigTemplate_5a929b865c37a2804694fc11f77b4e45 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Front/Shopping/ShippingDeliveryDateController.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Front/Shopping/ShippingDeliveryDateController.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Controller\\Front\\Shopping;

use Eccube\\Controller\\AbstractController;
use Exception;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Entity\\RegularCycle;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Repository\\RegularCycleRepository;
use Plugin\\EccubePaymentLite42\\Service\\CalculateNextDeliveryDateService;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException;
use Symfony\\Component\\Routing\\Annotation\\Route;

class ShippingDeliveryDateController extends AbstractController
{
    /**
     * @var RegularCycleRepository
     */
    private \$regularCycleRepository;
    /**
     * @var CalculateNextDeliveryDateService
     */
    private \$calculateNextDeliveryDateService;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;

    public function __construct(
        RegularCycleRepository \$regularCycleRepository,
        ConfigRepository \$configRepository,
        CalculateNextDeliveryDateService \$calculateNextDeliveryDateService
    ) {
        \$this->regularCycleRepository = \$regularCycleRepository;
        \$this->configRepository = \$configRepository;
        \$this->calculateNextDeliveryDateService = \$calculateNextDeliveryDateService;
    }

    /**
     * @Route(
     *     \"/shopping/eccube_payment_lite/regular/shipping_delivery_date\",
     *     name=\"eccube_payment_lite42_shipping_delivery_date\",
     *     methods={\"POST\"}
     * )
     *
     * @throws Exception
     */
    public function index(Request \$request)
    {
        if (!\$request->isXmlHttpRequest()) {
            throw new BadRequestHttpException();
        }
        \$this->isTokenValid();

        if (empty(\$request->request->get('shipping_delivery_date'))) {
            /** @var Config \$Config */
            \$Config = \$this->configRepository->find(1);
            \$addDay = \$Config->getFirstDeliveryDays();
            \$firstDeliveryDate = new \\DateTime('+'.\$Config->getFirstDeliveryDays().' day');
//            dump(\"ifff\");
        } else {
            \$firstDeliveryDate = new \\DateTime(\$request->request->get('shipping_delivery_date'));
            \$addDay = \$this->getDiffShippingDeliveryDate(\$firstDeliveryDate);
//            dump(\"else\");
        }

//       dump(\$addDay);
        /** @var RegularCycle \$RegularCycle */
        \$RegularCycle = \$this
            ->regularCycleRepository
            ->find(\$request->request->get('regular_cycle'));
        \$nextDeliveryDate = \$this
            ->calculateNextDeliveryDateService
            ->calc(\$RegularCycle, \$addDay);
//        dump(\$firstDeliveryDate);
//        dump(\$nextDeliveryDate);die;
        return \$this->json([
            'first_delivery_date' => \$this->getDayWithWeekDay(clone \$firstDeliveryDate),
            'next_delivery_date' => \$this->getDayWithWeekDay(clone \$nextDeliveryDate),
        ]);
    }

    private function getDayWithWeekDay(\$datetime): string
    {
        \$week = [
            '日',
            '月',
            '火',
            '水',
            '木',
            '金',
            '土',
        ];

        return \$datetime->format('Y/m/d').'('.\$week[(int) \$datetime->format('w')].')';
    }

    private function getDiffShippingDeliveryDate(\\DateTime \$shippingDeliveryDate): int
    {
        \$today = new \\DateTime('today');
        \$interval = \$today->diff(\$shippingDeliveryDate);

        return (int) \$interval->format('%a');
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
        return "EccubePaymentLite42/Controller/Front/Shopping/ShippingDeliveryDateController.php";
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

namespace Plugin\\EccubePaymentLite42\\Controller\\Front\\Shopping;

use Eccube\\Controller\\AbstractController;
use Exception;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Entity\\RegularCycle;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Repository\\RegularCycleRepository;
use Plugin\\EccubePaymentLite42\\Service\\CalculateNextDeliveryDateService;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException;
use Symfony\\Component\\Routing\\Annotation\\Route;

class ShippingDeliveryDateController extends AbstractController
{
    /**
     * @var RegularCycleRepository
     */
    private \$regularCycleRepository;
    /**
     * @var CalculateNextDeliveryDateService
     */
    private \$calculateNextDeliveryDateService;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;

    public function __construct(
        RegularCycleRepository \$regularCycleRepository,
        ConfigRepository \$configRepository,
        CalculateNextDeliveryDateService \$calculateNextDeliveryDateService
    ) {
        \$this->regularCycleRepository = \$regularCycleRepository;
        \$this->configRepository = \$configRepository;
        \$this->calculateNextDeliveryDateService = \$calculateNextDeliveryDateService;
    }

    /**
     * @Route(
     *     \"/shopping/eccube_payment_lite/regular/shipping_delivery_date\",
     *     name=\"eccube_payment_lite42_shipping_delivery_date\",
     *     methods={\"POST\"}
     * )
     *
     * @throws Exception
     */
    public function index(Request \$request)
    {
        if (!\$request->isXmlHttpRequest()) {
            throw new BadRequestHttpException();
        }
        \$this->isTokenValid();

        if (empty(\$request->request->get('shipping_delivery_date'))) {
            /** @var Config \$Config */
            \$Config = \$this->configRepository->find(1);
            \$addDay = \$Config->getFirstDeliveryDays();
            \$firstDeliveryDate = new \\DateTime('+'.\$Config->getFirstDeliveryDays().' day');
//            dump(\"ifff\");
        } else {
            \$firstDeliveryDate = new \\DateTime(\$request->request->get('shipping_delivery_date'));
            \$addDay = \$this->getDiffShippingDeliveryDate(\$firstDeliveryDate);
//            dump(\"else\");
        }

//       dump(\$addDay);
        /** @var RegularCycle \$RegularCycle */
        \$RegularCycle = \$this
            ->regularCycleRepository
            ->find(\$request->request->get('regular_cycle'));
        \$nextDeliveryDate = \$this
            ->calculateNextDeliveryDateService
            ->calc(\$RegularCycle, \$addDay);
//        dump(\$firstDeliveryDate);
//        dump(\$nextDeliveryDate);die;
        return \$this->json([
            'first_delivery_date' => \$this->getDayWithWeekDay(clone \$firstDeliveryDate),
            'next_delivery_date' => \$this->getDayWithWeekDay(clone \$nextDeliveryDate),
        ]);
    }

    private function getDayWithWeekDay(\$datetime): string
    {
        \$week = [
            '日',
            '月',
            '火',
            '水',
            '木',
            '金',
            '土',
        ];

        return \$datetime->format('Y/m/d').'('.\$week[(int) \$datetime->format('w')].')';
    }

    private function getDiffShippingDeliveryDate(\\DateTime \$shippingDeliveryDate): int
    {
        \$today = new \\DateTime('today');
        \$interval = \$today->diff(\$shippingDeliveryDate);

        return (int) \$interval->format('%a');
    }
}
", "EccubePaymentLite42/Controller/Front/Shopping/ShippingDeliveryDateController.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Controller\\Front\\Shopping\\ShippingDeliveryDateController.php");
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
