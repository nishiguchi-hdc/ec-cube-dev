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

/* B2BConnector/Repository/CustomerRepositoryDecorator.php */
class __TwigTemplate_baaab130aa07eb94188c35e158472644 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Repository/CustomerRepositoryDecorator.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Repository/CustomerRepositoryDecorator.php"));

        // line 1
        echo "<?php

namespace Plugin\\B2BConnector\\Repository;

use Doctrine\\ORM\\QueryBuilder;
use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\Persistence\\ManagerRegistry; // ← これを使う
use Eccube\\Common\\EccubeConfig;
use Eccube\\Doctrine\\Query\\Queries;
use Eccube\\Entity\\Customer as CustomerEntity;
use Eccube\\Repository\\CustomerRepository;
use Eccube\\Repository\\OrderRepository;
use Plugin\\B2BConnector\\Entity\\CustomerExt;

class CustomerRepositoryDecorator extends CustomerRepository

{
    private CustomerRepository \$inner;

    public function __construct(
        CustomerRepository \$inner,
        ManagerRegistry \$registry,
        Queries \$queries,
        EntityManagerInterface \$entityManager,
        OrderRepository \$orderRepository,
        EccubeConfig \$eccubeConfig
    ) {
        // ★ これが必須（エンティティクラスを渡して親を初期化）
        parent::__construct(\$registry, \$queries, \$entityManager, \$orderRepository, \$eccubeConfig);
        \$this->inner = \$inner;
    }

    public function getQueryBuilderBySearchData(\$searchData)
    {
        /** @var QueryBuilder \$qb */
        \$qb = \$this->inner->getQueryBuilderBySearchData(\$searchData);

        // Traitが反映済みなら関連JOIN、未反映ならWITH句JOIN
        \$meta = \$this->getEntityManager()->getClassMetadata(CustomerEntity::class);
        if (\$meta->hasAssociation('customerExt')) {
            \$dql = (string) \$qb->getDQL();
            if (strpos(\$dql, 'c.customerExt') === false) {
                \$qb->leftJoin('c.customerExt', 'ce')->addSelect('ce');
            }
        } else {
            // フォールバック（関連名なしJOIN）
            \$qb->leftJoin(CustomerExt::class, 'ce', 'WITH', 'ce.Customer = c')
               ->addSelect('ce');
        }

        // ===== ここから「担当者・会社名」を freeword に追加 =====
        // 管理画面の単一入力はだいたい 'multi'（環境で違う場合は実際のキーに合わせて）
        \$word = \$searchData['multi'] ?? null;
        if (is_string(\$word) && \$word !== '') {
            \$like = '%' . str_replace(['%', '_'], ['\\%', '\\_'], trim(\$word)) . '%';

            // 既存の OR 条件に「担当者・会社名」を足す
            \$or = \$qb->expr()->orX(
                \$qb->expr()->like('ce.pic_name01', ':kw'),
                \$qb->expr()->like('ce.pic_name02', ':kw'),
                \$qb->expr()->like('c.company_name', ':kw')
            );

            // すでにWHEREがある場合はORで括って追加
            \$qb->orWhere(\$or)->setParameter('kw', \$like);
        }

        return \$qb;
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
        return "B2BConnector/Repository/CustomerRepositoryDecorator.php";
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

namespace Plugin\\B2BConnector\\Repository;

use Doctrine\\ORM\\QueryBuilder;
use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\Persistence\\ManagerRegistry; // ← これを使う
use Eccube\\Common\\EccubeConfig;
use Eccube\\Doctrine\\Query\\Queries;
use Eccube\\Entity\\Customer as CustomerEntity;
use Eccube\\Repository\\CustomerRepository;
use Eccube\\Repository\\OrderRepository;
use Plugin\\B2BConnector\\Entity\\CustomerExt;

class CustomerRepositoryDecorator extends CustomerRepository

{
    private CustomerRepository \$inner;

    public function __construct(
        CustomerRepository \$inner,
        ManagerRegistry \$registry,
        Queries \$queries,
        EntityManagerInterface \$entityManager,
        OrderRepository \$orderRepository,
        EccubeConfig \$eccubeConfig
    ) {
        // ★ これが必須（エンティティクラスを渡して親を初期化）
        parent::__construct(\$registry, \$queries, \$entityManager, \$orderRepository, \$eccubeConfig);
        \$this->inner = \$inner;
    }

    public function getQueryBuilderBySearchData(\$searchData)
    {
        /** @var QueryBuilder \$qb */
        \$qb = \$this->inner->getQueryBuilderBySearchData(\$searchData);

        // Traitが反映済みなら関連JOIN、未反映ならWITH句JOIN
        \$meta = \$this->getEntityManager()->getClassMetadata(CustomerEntity::class);
        if (\$meta->hasAssociation('customerExt')) {
            \$dql = (string) \$qb->getDQL();
            if (strpos(\$dql, 'c.customerExt') === false) {
                \$qb->leftJoin('c.customerExt', 'ce')->addSelect('ce');
            }
        } else {
            // フォールバック（関連名なしJOIN）
            \$qb->leftJoin(CustomerExt::class, 'ce', 'WITH', 'ce.Customer = c')
               ->addSelect('ce');
        }

        // ===== ここから「担当者・会社名」を freeword に追加 =====
        // 管理画面の単一入力はだいたい 'multi'（環境で違う場合は実際のキーに合わせて）
        \$word = \$searchData['multi'] ?? null;
        if (is_string(\$word) && \$word !== '') {
            \$like = '%' . str_replace(['%', '_'], ['\\%', '\\_'], trim(\$word)) . '%';

            // 既存の OR 条件に「担当者・会社名」を足す
            \$or = \$qb->expr()->orX(
                \$qb->expr()->like('ce.pic_name01', ':kw'),
                \$qb->expr()->like('ce.pic_name02', ':kw'),
                \$qb->expr()->like('c.company_name', ':kw')
            );

            // すでにWHEREがある場合はORで括って追加
            \$qb->orWhere(\$or)->setParameter('kw', \$like);
        }

        return \$qb;
    }

}
", "B2BConnector/Repository/CustomerRepositoryDecorator.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\B2BConnector\\Repository\\CustomerRepositoryDecorator.php");
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
