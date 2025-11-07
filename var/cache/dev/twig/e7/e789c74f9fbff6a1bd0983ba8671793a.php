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

/* EccubePaymentLite42/Repository/RegularDiscountRepository.php */
class __TwigTemplate_b61984ffa5cbea79f8882d11a42a3c8b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Repository/RegularDiscountRepository.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Repository/RegularDiscountRepository.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Repository;

use Doctrine\\ORM\\NonUniqueResultException;
use Doctrine\\ORM\\NoResultException;
use Eccube\\Repository\\AbstractRepository;
use Plugin\\EccubePaymentLite42\\Entity\\RegularDiscount;
use Doctrine\\Persistence\\ManagerRegistry;

class RegularDiscountRepository extends AbstractRepository
{
    public function __construct(ManagerRegistry \$registry)
    {
        parent::__construct(\$registry, RegularDiscount::class);
    }

    public function getRegularDiscountsChoices(): array
    {
        \$groups = [];
        \$RegularDiscounts = \$this->findAll();

        /** @var RegularDiscount \$RegularDiscount */
        foreach (\$RegularDiscounts as \$RegularDiscount) {
            \$discountId = \$RegularDiscount->getDiscountId();
            \$regularCount = \$RegularDiscount->getRegularCount();
            \$discountRate = \$RegularDiscount->getDiscountRate();

            \$text = !empty(\$groups[\$discountId]) ? \$groups[\$discountId] : '';
            if (empty(\$text)) {
                \$text .= 'ID:'.\$discountId.' 初回'.(is_null(\$discountRate) ? '--' : \$discountRate).'%割引 ';
            } else {
                \$text .= (is_null(\$regularCount) ? '--' : \$regularCount).'回から'.(is_null(\$discountRate) ? '--' : \$discountRate).'%割引 ';
            }

            \$groups[\$discountId] = \$text;
        }

        return \$groups;
    }

    public function getMaxNumberOfRegularCount(\$discountId, \$regularCount): int
    {
        \$qb = \$this
            ->createQueryBuilder('rd')
            ->select('MAX(rd.regular_count) as max_number_of_regular_count')
            ->where('rd.discount_id = :discountId')
            ->andWhere('rd.regular_count <= :regularCount')
            ->setParameter('discountId', \$discountId)
            ->setParameter('regularCount', \$regularCount)
        ;
        try {
            return (int) \$qb
                ->getQuery()
                ->getSingleResult()['max_number_of_regular_count'];
        } catch (NoResultException | NonUniqueResultException \$e) {
            return \$regularCount;
        }
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
        return "EccubePaymentLite42/Repository/RegularDiscountRepository.php";
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

namespace Plugin\\EccubePaymentLite42\\Repository;

use Doctrine\\ORM\\NonUniqueResultException;
use Doctrine\\ORM\\NoResultException;
use Eccube\\Repository\\AbstractRepository;
use Plugin\\EccubePaymentLite42\\Entity\\RegularDiscount;
use Doctrine\\Persistence\\ManagerRegistry;

class RegularDiscountRepository extends AbstractRepository
{
    public function __construct(ManagerRegistry \$registry)
    {
        parent::__construct(\$registry, RegularDiscount::class);
    }

    public function getRegularDiscountsChoices(): array
    {
        \$groups = [];
        \$RegularDiscounts = \$this->findAll();

        /** @var RegularDiscount \$RegularDiscount */
        foreach (\$RegularDiscounts as \$RegularDiscount) {
            \$discountId = \$RegularDiscount->getDiscountId();
            \$regularCount = \$RegularDiscount->getRegularCount();
            \$discountRate = \$RegularDiscount->getDiscountRate();

            \$text = !empty(\$groups[\$discountId]) ? \$groups[\$discountId] : '';
            if (empty(\$text)) {
                \$text .= 'ID:'.\$discountId.' 初回'.(is_null(\$discountRate) ? '--' : \$discountRate).'%割引 ';
            } else {
                \$text .= (is_null(\$regularCount) ? '--' : \$regularCount).'回から'.(is_null(\$discountRate) ? '--' : \$discountRate).'%割引 ';
            }

            \$groups[\$discountId] = \$text;
        }

        return \$groups;
    }

    public function getMaxNumberOfRegularCount(\$discountId, \$regularCount): int
    {
        \$qb = \$this
            ->createQueryBuilder('rd')
            ->select('MAX(rd.regular_count) as max_number_of_regular_count')
            ->where('rd.discount_id = :discountId')
            ->andWhere('rd.regular_count <= :regularCount')
            ->setParameter('discountId', \$discountId)
            ->setParameter('regularCount', \$regularCount)
        ;
        try {
            return (int) \$qb
                ->getQuery()
                ->getSingleResult()['max_number_of_regular_count'];
        } catch (NoResultException | NonUniqueResultException \$e) {
            return \$regularCount;
        }
    }
}
", "EccubePaymentLite42/Repository/RegularDiscountRepository.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Repository\\RegularDiscountRepository.php");
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
