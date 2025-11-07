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

/* EccubePaymentLite42/Entity/RegularCycle.php */
class __TwigTemplate_d78e42ddab4cf19c82780e89ad83377c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Entity/RegularCycle.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Entity/RegularCycle.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Entity;

use DateTime;
use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\Common\\Collections\\Criteria;
use Doctrine\\ORM\\Mapping as ORM;
use Eccube\\Entity\\AbstractEntity;

/**
 * @ORM\\Table(name=\"plg_eccube_payment_lite42_regular_cycle\")
 * @ORM\\InheritanceType(\"SINGLE_TABLE\")
 * @ORM\\DiscriminatorColumn(name=\"discriminator_type\", type=\"string\", length=255)
 * @ORM\\HasLifecycleCallbacks()
 * @ORM\\Entity(repositoryClass=\"Plugin\\EccubePaymentLite42\\Repository\\RegularCycleRepository\")
 */
class RegularCycle extends AbstractEntity
{
    const SUNDAY = 1;
    const MONDAY = 2;
    const TUESDAY = 3;
    const WEDNESDAY = 4;
    const THURSDAY = 5;
    const FRIDAY = 6;
    const SATURDAY = 7;

    const SUNDAY_NAME = '日曜日';
    const MONDAY_NAME = '月曜日';
    const TUESDAY_NAME = '火曜日';
    const WEDNESDAY_NAME = '水曜日';
    const THURSDAY_NAME = '木曜日';
    const FRIDAY_NAME = '金曜日';
    const SATURDAY_NAME = '土曜日';

    /**
     * @var int
     *
     * @ORM\\Column(name=\"id\", type=\"integer\", options={\"unsigned\":true})
     * @ORM\\Id
     * @ORM\\GeneratedValue(strategy=\"IDENTITY\")
     */
    private \$id;

    /**
     * @ORM\\ManyToOne(targetEntity=\"Plugin\\EccubePaymentLite42\\Entity\\RegularCycleType\")
     * @ORM\\JoinColumn(name=\"regular_cycle_type_id\", referencedColumnName=\"id\")
     */
    private \$RegularCycleType;

    /**
     * @ORM\\OneToMany(
     *     targetEntity=\"Plugin\\EccubePaymentLite42\\Entity\\ProductClassRegularCycle\",
     *     mappedBy=\"RegularCycle\",
     *     cascade={\"persist\"}
     * )
     */
    private \$ProductClassRegularCycle;

    /**
     * @var int
     *
     * @ORM\\Column(name=\"day\", type=\"integer\", nullable=true)
     */
    private \$day;

    /**
     * @var int
     *
     * @ORM\\Column(name=\"week\", type=\"integer\", nullable=true)
     */
    private \$week;

    /**
     * @var int|null
     *
     * @ORM\\Column(name=\"sort_no\", type=\"smallint\", nullable=true, options={\"unsigned\":true})
     */
    private \$sort_no;

    /**
     * @var DateTime
     *
     * @ORM\\Column(name=\"create_date\", type=\"datetimetz\")
     */
    private \$create_date;

    /**
     * @var DateTime
     *
     * @ORM\\Column(name=\"update_date\", type=\"datetimetz\")
     */
    private \$update_date;

    /**
     * @return string
     */
    public function __toString()
    {
        if (\$this->getRegularCycleType()->getId() === RegularCycleType::REGULAR_DAILY_CYCLE) {
            return \$this->getDay().'日ごと';
        }
        if (\$this->getRegularCycleType()->getId() === RegularCycleType::REGULAR_WEEKLY_CYCLE) {
            return \$this->getDay().'週ごと';
        }
        if (\$this->getRegularCycleType()->getId() === RegularCycleType::REGULAR_MONTHLY_CYCLE) {
            return \$this->getDay().'ヶ月ごと';
        }
        if (\$this->getRegularCycleType()->getId() === RegularCycleType::REGULAR_SPECIFIC_DAY_CYCLE) {
            return '毎月'.\$this->getDay().'日';
        }
        if (\$this->getRegularCycleType()->getId() === RegularCycleType::REGULAR_SPECIFIC_WEEK_CYCLE) {
            return '毎週'.\$this->getWeekName();
        }

        return \$this->getRegularCycleType()->getName();
    }

    public function __construct()
    {
        \$this->ProductClassRegularCycle = new ArrayCollection();
    }

    public function getId()
    {
        return \$this->id;
    }

    public function getRegularCycleType()
    {
        return \$this->RegularCycleType;
    }

    public function setRegularCycleType(RegularCycleType \$RegularCycleType)
    {
        \$this->RegularCycleType = \$RegularCycleType;

        return \$this;
    }

    public function getDay()
    {
        return \$this->day;
    }

    public function setDay(\$day = null)
    {
        \$this->day = \$day;

        return \$this;
    }

    public function getWeek()
    {
        return \$this->week;
    }

    public function setWeek(\$week): self
    {
        \$this->week = \$week;

        return \$this;
    }

    public function getSortNo()
    {
        return \$this->sort_no;
    }

    public function setSortNo(?int \$sort_no)
    {
        \$this->sort_no = \$sort_no;

        return \$this;
    }

    public function getCreateDate(): DateTime
    {
        return \$this->create_date;
    }

    public function setCreateDate(DateTime \$create_date)
    {
        \$this->create_date = \$create_date;

        return \$this;
    }

    public function getUpdateDate(): DateTime
    {
        return \$this->update_date;
    }

    public function setUpdateDate(DateTime \$update_date)
    {
        \$this->update_date = \$update_date;

        return \$this;
    }

    public function addProductClassRegularCycle(ProductClassRegularCycle \$ProductClassRegularCycle)
    {
        \$this->ProductClassRegularCycle[] = (\$ProductClassRegularCycle);

        return \$this;
    }

    public function removeProductClassRegularCycle(ProductClassRegularCycle \$ProductClassRegularCycle)
    {
        return \$this->ProductClassRegularCycle->removeElement(\$ProductClassRegularCycle);
    }

    public function hasProductClassRegularCycles()
    {
        \$criteria = Criteria::create()
            ->orderBy(['id' => Criteria::ASC])
            ->setFirstResult(0)
            ->setMaxResults(1);

        return \$this->ProductClassRegularCycle->matching(\$criteria)->count() > 0;
    }

    public function getWeekName()
    {
        if (\$this->week === self::SUNDAY) {
            return self::SUNDAY_NAME;
        } elseif (\$this->week === self::MONDAY) {
            return self::MONDAY_NAME;
        } elseif (\$this->week === self::TUESDAY) {
            return self::TUESDAY_NAME;
        } elseif (\$this->week === self::WEDNESDAY) {
            return self::WEDNESDAY_NAME;
        } elseif (\$this->week === self::THURSDAY) {
            return self::THURSDAY_NAME;
        } elseif (\$this->week === self::FRIDAY) {
            return self::FRIDAY_NAME;
        } elseif (\$this->week === self::SATURDAY) {
            return self::SATURDAY_NAME;
        }

        return \$this->week;
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
        return "EccubePaymentLite42/Entity/RegularCycle.php";
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

namespace Plugin\\EccubePaymentLite42\\Entity;

use DateTime;
use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\Common\\Collections\\Criteria;
use Doctrine\\ORM\\Mapping as ORM;
use Eccube\\Entity\\AbstractEntity;

/**
 * @ORM\\Table(name=\"plg_eccube_payment_lite42_regular_cycle\")
 * @ORM\\InheritanceType(\"SINGLE_TABLE\")
 * @ORM\\DiscriminatorColumn(name=\"discriminator_type\", type=\"string\", length=255)
 * @ORM\\HasLifecycleCallbacks()
 * @ORM\\Entity(repositoryClass=\"Plugin\\EccubePaymentLite42\\Repository\\RegularCycleRepository\")
 */
class RegularCycle extends AbstractEntity
{
    const SUNDAY = 1;
    const MONDAY = 2;
    const TUESDAY = 3;
    const WEDNESDAY = 4;
    const THURSDAY = 5;
    const FRIDAY = 6;
    const SATURDAY = 7;

    const SUNDAY_NAME = '日曜日';
    const MONDAY_NAME = '月曜日';
    const TUESDAY_NAME = '火曜日';
    const WEDNESDAY_NAME = '水曜日';
    const THURSDAY_NAME = '木曜日';
    const FRIDAY_NAME = '金曜日';
    const SATURDAY_NAME = '土曜日';

    /**
     * @var int
     *
     * @ORM\\Column(name=\"id\", type=\"integer\", options={\"unsigned\":true})
     * @ORM\\Id
     * @ORM\\GeneratedValue(strategy=\"IDENTITY\")
     */
    private \$id;

    /**
     * @ORM\\ManyToOne(targetEntity=\"Plugin\\EccubePaymentLite42\\Entity\\RegularCycleType\")
     * @ORM\\JoinColumn(name=\"regular_cycle_type_id\", referencedColumnName=\"id\")
     */
    private \$RegularCycleType;

    /**
     * @ORM\\OneToMany(
     *     targetEntity=\"Plugin\\EccubePaymentLite42\\Entity\\ProductClassRegularCycle\",
     *     mappedBy=\"RegularCycle\",
     *     cascade={\"persist\"}
     * )
     */
    private \$ProductClassRegularCycle;

    /**
     * @var int
     *
     * @ORM\\Column(name=\"day\", type=\"integer\", nullable=true)
     */
    private \$day;

    /**
     * @var int
     *
     * @ORM\\Column(name=\"week\", type=\"integer\", nullable=true)
     */
    private \$week;

    /**
     * @var int|null
     *
     * @ORM\\Column(name=\"sort_no\", type=\"smallint\", nullable=true, options={\"unsigned\":true})
     */
    private \$sort_no;

    /**
     * @var DateTime
     *
     * @ORM\\Column(name=\"create_date\", type=\"datetimetz\")
     */
    private \$create_date;

    /**
     * @var DateTime
     *
     * @ORM\\Column(name=\"update_date\", type=\"datetimetz\")
     */
    private \$update_date;

    /**
     * @return string
     */
    public function __toString()
    {
        if (\$this->getRegularCycleType()->getId() === RegularCycleType::REGULAR_DAILY_CYCLE) {
            return \$this->getDay().'日ごと';
        }
        if (\$this->getRegularCycleType()->getId() === RegularCycleType::REGULAR_WEEKLY_CYCLE) {
            return \$this->getDay().'週ごと';
        }
        if (\$this->getRegularCycleType()->getId() === RegularCycleType::REGULAR_MONTHLY_CYCLE) {
            return \$this->getDay().'ヶ月ごと';
        }
        if (\$this->getRegularCycleType()->getId() === RegularCycleType::REGULAR_SPECIFIC_DAY_CYCLE) {
            return '毎月'.\$this->getDay().'日';
        }
        if (\$this->getRegularCycleType()->getId() === RegularCycleType::REGULAR_SPECIFIC_WEEK_CYCLE) {
            return '毎週'.\$this->getWeekName();
        }

        return \$this->getRegularCycleType()->getName();
    }

    public function __construct()
    {
        \$this->ProductClassRegularCycle = new ArrayCollection();
    }

    public function getId()
    {
        return \$this->id;
    }

    public function getRegularCycleType()
    {
        return \$this->RegularCycleType;
    }

    public function setRegularCycleType(RegularCycleType \$RegularCycleType)
    {
        \$this->RegularCycleType = \$RegularCycleType;

        return \$this;
    }

    public function getDay()
    {
        return \$this->day;
    }

    public function setDay(\$day = null)
    {
        \$this->day = \$day;

        return \$this;
    }

    public function getWeek()
    {
        return \$this->week;
    }

    public function setWeek(\$week): self
    {
        \$this->week = \$week;

        return \$this;
    }

    public function getSortNo()
    {
        return \$this->sort_no;
    }

    public function setSortNo(?int \$sort_no)
    {
        \$this->sort_no = \$sort_no;

        return \$this;
    }

    public function getCreateDate(): DateTime
    {
        return \$this->create_date;
    }

    public function setCreateDate(DateTime \$create_date)
    {
        \$this->create_date = \$create_date;

        return \$this;
    }

    public function getUpdateDate(): DateTime
    {
        return \$this->update_date;
    }

    public function setUpdateDate(DateTime \$update_date)
    {
        \$this->update_date = \$update_date;

        return \$this;
    }

    public function addProductClassRegularCycle(ProductClassRegularCycle \$ProductClassRegularCycle)
    {
        \$this->ProductClassRegularCycle[] = (\$ProductClassRegularCycle);

        return \$this;
    }

    public function removeProductClassRegularCycle(ProductClassRegularCycle \$ProductClassRegularCycle)
    {
        return \$this->ProductClassRegularCycle->removeElement(\$ProductClassRegularCycle);
    }

    public function hasProductClassRegularCycles()
    {
        \$criteria = Criteria::create()
            ->orderBy(['id' => Criteria::ASC])
            ->setFirstResult(0)
            ->setMaxResults(1);

        return \$this->ProductClassRegularCycle->matching(\$criteria)->count() > 0;
    }

    public function getWeekName()
    {
        if (\$this->week === self::SUNDAY) {
            return self::SUNDAY_NAME;
        } elseif (\$this->week === self::MONDAY) {
            return self::MONDAY_NAME;
        } elseif (\$this->week === self::TUESDAY) {
            return self::TUESDAY_NAME;
        } elseif (\$this->week === self::WEDNESDAY) {
            return self::WEDNESDAY_NAME;
        } elseif (\$this->week === self::THURSDAY) {
            return self::THURSDAY_NAME;
        } elseif (\$this->week === self::FRIDAY) {
            return self::FRIDAY_NAME;
        } elseif (\$this->week === self::SATURDAY) {
            return self::SATURDAY_NAME;
        }

        return \$this->week;
    }
}
", "EccubePaymentLite42/Entity/RegularCycle.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Entity\\RegularCycle.php");
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
