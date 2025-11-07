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

/* EccubePaymentLite42/Repository/SearchProductRepository.php */
class __TwigTemplate_4e5a8ebd6013f317d55d5186007ac753 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Repository/SearchProductRepository.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Repository/SearchProductRepository.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Repository;

use Eccube\\Common\\EccubeConfig;
use Eccube\\Doctrine\\Query\\Queries;
use Eccube\\Repository\\ProductRepository;
use Eccube\\Repository\\QueryKey;
use Eccube\\Util\\StringUtil;
use Doctrine\\Persistence\\ManagerRegistry;

class SearchProductRepository extends ProductRepository
{
    /**
     * @var Queries
     */
    protected \$queries;

    public function __construct(ManagerRegistry \$registry, Queries \$queries, EccubeConfig \$eccubeConfig)
    {
        parent::__construct(\$registry, \$queries, \$eccubeConfig);
        \$this->queries = \$queries;
    }

    /**
     * Search regular product
     *
     * @param array \$searchData
     * @param \$SaleType
     *
     * @return \\Doctrine\\ORM\\QueryBuilder
     *
     * @throws \\Doctrine\\DBAL\\DBALException
     */
    public function getQueryBuilderBySearchDataProductForAdmin(\$searchData, \$SaleType)
    {
        \$qb = \$this->createQueryBuilder('p')
            ->addSelect('pc', 'pi', 'tr', 'ps')
            ->innerJoin('p.ProductClasses', 'pc')
            ->leftJoin('p.ProductImage', 'pi')
            ->leftJoin('pc.TaxRule', 'tr')
            ->leftJoin('pc.ProductStock', 'ps')
            ->andWhere('pc.visible = :visible')
            ->setParameter('visible', true)
            ->andWhere('pc.SaleType = :SaleType')
            ->setParameter('SaleType', \$SaleType);

        // id
        if (isset(\$searchData['id']) && StringUtil::isNotBlank(\$searchData['id'])) {
            \$id = preg_match('/^\\d{0,10}\$/', \$searchData['id']) ? \$searchData['id'] : null;
            if (\$id && \$id > '2147483647' && \$this->isPostgreSQL()) {
                \$id = null;
            }
            \$qb
                ->andWhere('p.id = :id OR p.name LIKE :likeid OR pc.code LIKE :likeid')
                ->setParameter('id', \$id)
                ->setParameter('likeid', '%'.str_replace(['%', '_'], ['\\\\%', '\\\\_'], \$searchData['id']).'%');
        }

        // category
        if (!empty(\$searchData['category_id']) && \$searchData['category_id']) {
            \$Categories = \$searchData['category_id']->getSelfAndDescendants();
            if (\$Categories) {
                \$qb
                    ->innerJoin('p.ProductCategories', 'pct')
                    ->innerJoin('pct.Category', 'c')
                    ->andWhere(\$qb->expr()->in('pct.Category', ':Categories'))
                    ->setParameter('Categories', \$Categories);
            }
        }

        // Order By
        \$qb
            ->orderBy('p.update_date', 'DESC');

        return \$this->queries->customize(QueryKey::PRODUCT_SEARCH_ADMIN, \$qb, \$searchData);
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
        return "EccubePaymentLite42/Repository/SearchProductRepository.php";
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

use Eccube\\Common\\EccubeConfig;
use Eccube\\Doctrine\\Query\\Queries;
use Eccube\\Repository\\ProductRepository;
use Eccube\\Repository\\QueryKey;
use Eccube\\Util\\StringUtil;
use Doctrine\\Persistence\\ManagerRegistry;

class SearchProductRepository extends ProductRepository
{
    /**
     * @var Queries
     */
    protected \$queries;

    public function __construct(ManagerRegistry \$registry, Queries \$queries, EccubeConfig \$eccubeConfig)
    {
        parent::__construct(\$registry, \$queries, \$eccubeConfig);
        \$this->queries = \$queries;
    }

    /**
     * Search regular product
     *
     * @param array \$searchData
     * @param \$SaleType
     *
     * @return \\Doctrine\\ORM\\QueryBuilder
     *
     * @throws \\Doctrine\\DBAL\\DBALException
     */
    public function getQueryBuilderBySearchDataProductForAdmin(\$searchData, \$SaleType)
    {
        \$qb = \$this->createQueryBuilder('p')
            ->addSelect('pc', 'pi', 'tr', 'ps')
            ->innerJoin('p.ProductClasses', 'pc')
            ->leftJoin('p.ProductImage', 'pi')
            ->leftJoin('pc.TaxRule', 'tr')
            ->leftJoin('pc.ProductStock', 'ps')
            ->andWhere('pc.visible = :visible')
            ->setParameter('visible', true)
            ->andWhere('pc.SaleType = :SaleType')
            ->setParameter('SaleType', \$SaleType);

        // id
        if (isset(\$searchData['id']) && StringUtil::isNotBlank(\$searchData['id'])) {
            \$id = preg_match('/^\\d{0,10}\$/', \$searchData['id']) ? \$searchData['id'] : null;
            if (\$id && \$id > '2147483647' && \$this->isPostgreSQL()) {
                \$id = null;
            }
            \$qb
                ->andWhere('p.id = :id OR p.name LIKE :likeid OR pc.code LIKE :likeid')
                ->setParameter('id', \$id)
                ->setParameter('likeid', '%'.str_replace(['%', '_'], ['\\\\%', '\\\\_'], \$searchData['id']).'%');
        }

        // category
        if (!empty(\$searchData['category_id']) && \$searchData['category_id']) {
            \$Categories = \$searchData['category_id']->getSelfAndDescendants();
            if (\$Categories) {
                \$qb
                    ->innerJoin('p.ProductCategories', 'pct')
                    ->innerJoin('pct.Category', 'c')
                    ->andWhere(\$qb->expr()->in('pct.Category', ':Categories'))
                    ->setParameter('Categories', \$Categories);
            }
        }

        // Order By
        \$qb
            ->orderBy('p.update_date', 'DESC');

        return \$this->queries->customize(QueryKey::PRODUCT_SEARCH_ADMIN, \$qb, \$searchData);
    }
}
", "EccubePaymentLite42/Repository/SearchProductRepository.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Repository\\SearchProductRepository.php");
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
