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

/* EccubePaymentLite42/Service/GetProductClassesRegularCycles.php */
class __TwigTemplate_06a3655b4740304c1ee0a08d7e5d8c11 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/GetProductClassesRegularCycles.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/GetProductClassesRegularCycles.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Service;

use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Entity\\Order;
use Eccube\\Entity\\ProductClass;
use Eccube\\Repository\\ProductClassRepository;
use Plugin\\EccubePaymentLite42\\Entity\\ProductClassRegularCycle;
use Plugin\\EccubePaymentLite42\\Entity\\RegularCycle;

class GetProductClassesRegularCycles
{
    /**
     * @var ProductClassRepository
     */
    private \$productClassRepository;
    /**
     * @var EntityManagerInterface
     */
    private \$entityManager;

    public function __construct(
        ProductClassRepository \$productClassRepository,
        EntityManagerInterface \$entityManager
    ) {
        \$this->productClassRepository = \$productClassRepository;
        \$this->entityManager = \$entityManager;
    }

    public function handle(Order \$Order)
    {
        \$productClassIds = \$this->getProductClassIds(\$Order);
        \$regularCycleIds = \$this->getRegularCycleIds(\$Order);
        \$qb = \$this
            ->entityManager
            ->createQueryBuilder();
        \$qb
            ->select('rc')
            ->from(ProductClass::class, 'pc')
            ->innerJoin(ProductClassRegularCycle::class, 'pcrc')
            ->innerJoin(RegularCycle::class, 'rc')
            ->where(
                \$qb->expr()->in('pc.id', ':productClassIds')
            )
            ->andWhere(
                \$qb->expr()->in('rc.id', ':regularCycleIds')
            )
            ->setParameter('productClassIds', \$productClassIds)
            ->setParameter('regularCycleIds', \$regularCycleIds)
            ->orderBy('rc.sort_no', 'DESC')
        ;

        return \$qb
            ->getQuery()
            ->getResult();
    }

    private function getProductClassIds(Order \$Order)
    {
        \$productClassIds = [];
        foreach (\$Order->getProductOrderItems() as \$key => \$OrderItem) {
            \$productClassId = \$OrderItem->getProductClass()->getId();
            \$productClassIds[\$productClassId] = \$productClassId;
        }

        return \$productClassIds;
    }

    private function getRegularCycleIds(Order \$Order)
    {
        \$regularCycleIds = [];
        foreach (\$Order->getProductOrderItems() as \$key => \$OrderItem) {
            \$tempRegularCycleIds = [];
            foreach (\$OrderItem->getProductClass()->getRegularCycle() as \$regularCycle) {
                /** @var RegularCycle \$regularCycle */
                \$regularCycleId = \$regularCycle->getId();
                \$tempRegularCycleIds[] = \$regularCycleId;
            }
            if (\$key === 0) {
                \$regularCycleIds = \$tempRegularCycleIds;
                continue;
            }
            \$regularCycleIds = array_intersect(\$regularCycleIds, \$tempRegularCycleIds);
        }

        return \$regularCycleIds;
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
        return "EccubePaymentLite42/Service/GetProductClassesRegularCycles.php";
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

use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Entity\\Order;
use Eccube\\Entity\\ProductClass;
use Eccube\\Repository\\ProductClassRepository;
use Plugin\\EccubePaymentLite42\\Entity\\ProductClassRegularCycle;
use Plugin\\EccubePaymentLite42\\Entity\\RegularCycle;

class GetProductClassesRegularCycles
{
    /**
     * @var ProductClassRepository
     */
    private \$productClassRepository;
    /**
     * @var EntityManagerInterface
     */
    private \$entityManager;

    public function __construct(
        ProductClassRepository \$productClassRepository,
        EntityManagerInterface \$entityManager
    ) {
        \$this->productClassRepository = \$productClassRepository;
        \$this->entityManager = \$entityManager;
    }

    public function handle(Order \$Order)
    {
        \$productClassIds = \$this->getProductClassIds(\$Order);
        \$regularCycleIds = \$this->getRegularCycleIds(\$Order);
        \$qb = \$this
            ->entityManager
            ->createQueryBuilder();
        \$qb
            ->select('rc')
            ->from(ProductClass::class, 'pc')
            ->innerJoin(ProductClassRegularCycle::class, 'pcrc')
            ->innerJoin(RegularCycle::class, 'rc')
            ->where(
                \$qb->expr()->in('pc.id', ':productClassIds')
            )
            ->andWhere(
                \$qb->expr()->in('rc.id', ':regularCycleIds')
            )
            ->setParameter('productClassIds', \$productClassIds)
            ->setParameter('regularCycleIds', \$regularCycleIds)
            ->orderBy('rc.sort_no', 'DESC')
        ;

        return \$qb
            ->getQuery()
            ->getResult();
    }

    private function getProductClassIds(Order \$Order)
    {
        \$productClassIds = [];
        foreach (\$Order->getProductOrderItems() as \$key => \$OrderItem) {
            \$productClassId = \$OrderItem->getProductClass()->getId();
            \$productClassIds[\$productClassId] = \$productClassId;
        }

        return \$productClassIds;
    }

    private function getRegularCycleIds(Order \$Order)
    {
        \$regularCycleIds = [];
        foreach (\$Order->getProductOrderItems() as \$key => \$OrderItem) {
            \$tempRegularCycleIds = [];
            foreach (\$OrderItem->getProductClass()->getRegularCycle() as \$regularCycle) {
                /** @var RegularCycle \$regularCycle */
                \$regularCycleId = \$regularCycle->getId();
                \$tempRegularCycleIds[] = \$regularCycleId;
            }
            if (\$key === 0) {
                \$regularCycleIds = \$tempRegularCycleIds;
                continue;
            }
            \$regularCycleIds = array_intersect(\$regularCycleIds, \$tempRegularCycleIds);
        }

        return \$regularCycleIds;
    }
}
", "EccubePaymentLite42/Service/GetProductClassesRegularCycles.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Service\\GetProductClassesRegularCycles.php");
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
