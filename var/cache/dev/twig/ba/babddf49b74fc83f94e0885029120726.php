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

/* EccubePaymentLite42/Entity/RegularDiscount.php */
class __TwigTemplate_793d3cad84ca27605d729ae7122bfd3b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Entity/RegularDiscount.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Entity/RegularDiscount.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Entity;

use DateTime;
use Doctrine\\ORM\\Mapping as ORM;
use Eccube\\Entity\\AbstractEntity;

/**
 * @ORM\\Table(name=\"plg_eccube_payment_lite42_regular_count_discount\")
 * @ORM\\InheritanceType(\"SINGLE_TABLE\")
 * @ORM\\DiscriminatorColumn(name=\"discriminator_type\", type=\"string\", length=255)
 * @ORM\\HasLifecycleCallbacks()
 * @ORM\\Entity(repositoryClass=\"Plugin\\EccubePaymentLite42\\Repository\\RegularDiscountRepository\")
 */
class RegularDiscount extends AbstractEntity
{
    /**
     * @var int
     *
     * @ORM\\Column(name=\"id\", type=\"integer\", options={\"unsigned\":true})
     * @ORM\\Id
     * @ORM\\GeneratedValue(strategy=\"IDENTITY\")
     */
    private \$id;

    /**
     * @var int
     *
     * @ORM\\Column(name=\"discount_id\", type=\"integer\", options={\"unsigned\":true})
     */
    private \$discount_id;

    /**
     * @var int
     *
     * @ORM\\Column(name=\"item_id\", type=\"integer\", options={\"unsigned\":true})
     */
    private \$item_id;

    /**
     * @var int
     *
     * @ORM\\Column(name=\"regular_count\", type=\"integer\", nullable=true)
     */
    private \$regular_count;

    /**
     * @var int
     *
     * @ORM\\Column(name=\"discount_rate\", type=\"integer\", nullable=true)
     */
    private \$discount_rate;

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
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    public function getDiscountId()
    {
        return \$this->discount_id;
    }

    /**
     * Set DiscountId
     *
     * @param int \$discount_id
     *
     * @return self
     */
    public function setDiscountId(\$discount_id = null)
    {
        \$this->discount_id = \$discount_id;

        return \$this;
    }

    /**
     * Get ItemId
     *
     * @return int
     */
    public function getItemId()
    {
        return \$this->item_id;
    }

    /**
     * Set ItemId
     *
     * @param int \$item_id
     *
     * @return self
     */
    public function setItemId(\$item_id = null)
    {
        \$this->item_id = \$item_id;

        return \$this;
    }

    /**
     * Get Regular Count
     *
     * @return int
     */
    public function getRegularCount()
    {
        return \$this->regular_count;
    }

    /**
     * Set Regular Count
     *
     * @param int \$regular_count
     *
     * @return self
     */
    public function setRegularCount(\$regular_count = null)
    {
        \$this->regular_count = \$regular_count;

        return \$this;
    }

    /**
     * Get Discount Rate
     *
     * @return int
     */
    public function getDiscountRate()
    {
        return \$this->discount_rate;
    }

    /**
     * Set Discount Rate
     *
     * @param int \$discount_rate
     *
     * @return self
     */
    public function setDiscountRate(\$discount_rate = null)
    {
        \$this->discount_rate = \$discount_rate;

        return \$this;
    }

    /**
     * @return \\DateTime
     */
    public function getCreateDate()
    {
        return \$this->create_date;
    }

    /**
     * @param \$create_date
     *
     * @return self
     */
    public function setCreateDate(\$create_date)
    {
        \$this->create_date = \$create_date;

        return \$this;
    }

    /**
     * @return \\DateTime
     */
    public function getUpdateDate()
    {
        return \$this->update_date;
    }

    /**
     * @param \$update_date
     *
     * @return self
     */
    public function setUpdateDate(\$update_date)
    {
        \$this->update_date = \$update_date;

        return \$this;
    }

    public function __toString(): string
    {
        return \$this->discount_id;
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
        return "EccubePaymentLite42/Entity/RegularDiscount.php";
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
use Doctrine\\ORM\\Mapping as ORM;
use Eccube\\Entity\\AbstractEntity;

/**
 * @ORM\\Table(name=\"plg_eccube_payment_lite42_regular_count_discount\")
 * @ORM\\InheritanceType(\"SINGLE_TABLE\")
 * @ORM\\DiscriminatorColumn(name=\"discriminator_type\", type=\"string\", length=255)
 * @ORM\\HasLifecycleCallbacks()
 * @ORM\\Entity(repositoryClass=\"Plugin\\EccubePaymentLite42\\Repository\\RegularDiscountRepository\")
 */
class RegularDiscount extends AbstractEntity
{
    /**
     * @var int
     *
     * @ORM\\Column(name=\"id\", type=\"integer\", options={\"unsigned\":true})
     * @ORM\\Id
     * @ORM\\GeneratedValue(strategy=\"IDENTITY\")
     */
    private \$id;

    /**
     * @var int
     *
     * @ORM\\Column(name=\"discount_id\", type=\"integer\", options={\"unsigned\":true})
     */
    private \$discount_id;

    /**
     * @var int
     *
     * @ORM\\Column(name=\"item_id\", type=\"integer\", options={\"unsigned\":true})
     */
    private \$item_id;

    /**
     * @var int
     *
     * @ORM\\Column(name=\"regular_count\", type=\"integer\", nullable=true)
     */
    private \$regular_count;

    /**
     * @var int
     *
     * @ORM\\Column(name=\"discount_rate\", type=\"integer\", nullable=true)
     */
    private \$discount_rate;

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
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    public function getDiscountId()
    {
        return \$this->discount_id;
    }

    /**
     * Set DiscountId
     *
     * @param int \$discount_id
     *
     * @return self
     */
    public function setDiscountId(\$discount_id = null)
    {
        \$this->discount_id = \$discount_id;

        return \$this;
    }

    /**
     * Get ItemId
     *
     * @return int
     */
    public function getItemId()
    {
        return \$this->item_id;
    }

    /**
     * Set ItemId
     *
     * @param int \$item_id
     *
     * @return self
     */
    public function setItemId(\$item_id = null)
    {
        \$this->item_id = \$item_id;

        return \$this;
    }

    /**
     * Get Regular Count
     *
     * @return int
     */
    public function getRegularCount()
    {
        return \$this->regular_count;
    }

    /**
     * Set Regular Count
     *
     * @param int \$regular_count
     *
     * @return self
     */
    public function setRegularCount(\$regular_count = null)
    {
        \$this->regular_count = \$regular_count;

        return \$this;
    }

    /**
     * Get Discount Rate
     *
     * @return int
     */
    public function getDiscountRate()
    {
        return \$this->discount_rate;
    }

    /**
     * Set Discount Rate
     *
     * @param int \$discount_rate
     *
     * @return self
     */
    public function setDiscountRate(\$discount_rate = null)
    {
        \$this->discount_rate = \$discount_rate;

        return \$this;
    }

    /**
     * @return \\DateTime
     */
    public function getCreateDate()
    {
        return \$this->create_date;
    }

    /**
     * @param \$create_date
     *
     * @return self
     */
    public function setCreateDate(\$create_date)
    {
        \$this->create_date = \$create_date;

        return \$this;
    }

    /**
     * @return \\DateTime
     */
    public function getUpdateDate()
    {
        return \$this->update_date;
    }

    /**
     * @param \$update_date
     *
     * @return self
     */
    public function setUpdateDate(\$update_date)
    {
        \$this->update_date = \$update_date;

        return \$this;
    }

    public function __toString(): string
    {
        return \$this->discount_id;
    }
}
", "EccubePaymentLite42/Entity/RegularDiscount.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Entity\\RegularDiscount.php");
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
