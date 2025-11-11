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

/* B2BConnector/Entity/OrderExt.php */
class __TwigTemplate_18a2c4f44323a5a22a8efcaed693a8cb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Entity/OrderExt.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Entity/OrderExt.php"));

        // line 1
        echo "<?php

namespace Plugin\\B2BConnector\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Eccube\\Entity\\Order;

/**
 * @ORM\\Entity
 * @ORM\\Table(name=\"dtb_order_ext\")
 */
class OrderExt
{
    /**
     * Order と 1:1 (PK兼FK)
     * @ORM\\Id
     * @ORM\\OneToOne(targetEntity=\"Eccube\\Entity\\Order\")
     * @ORM\\JoinColumn(name=\"order_id\", referencedColumnName=\"id\", onDelete=\"CASCADE\")
     */
    private ?Order \$Order = null;

    /** @ORM\\Column(type=\"string\", length=100, nullable=true) */
    private ?string \$depart_name = null;

    /** @ORM\\Column(type=\"string\", length=100, nullable=true) */
    private ?string \$pic_name = null;

    /** @ORM\\Column(type=\"string\", length=100, nullable=true) */
    private ?string \$quote_no = null;

    // ===== getter / setter =====
    public function getOrder(): ?Order { return \$this->Order; }
    public function setOrder(Order \$Order): self { \$this->Order = \$Order; return \$this; }

    public function getDepartName(): ?string { return \$this->depart_name; }
    public function setDepartName(?string \$v): self { \$this->depart_name = \$v; return \$this; }

    public function getPicName(): ?string { return \$this->pic_name; }
    public function setPicName(?string \$v): self { \$this->pic_name = \$v; return \$this; }

    public function getQuoteNo(): ?string { return \$this->quote_no; }
    public function setQuoteNo(?string \$v): self { \$this->quote_no = \$v; return \$this; }
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
        return "B2BConnector/Entity/OrderExt.php";
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

namespace Plugin\\B2BConnector\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Eccube\\Entity\\Order;

/**
 * @ORM\\Entity
 * @ORM\\Table(name=\"dtb_order_ext\")
 */
class OrderExt
{
    /**
     * Order と 1:1 (PK兼FK)
     * @ORM\\Id
     * @ORM\\OneToOne(targetEntity=\"Eccube\\Entity\\Order\")
     * @ORM\\JoinColumn(name=\"order_id\", referencedColumnName=\"id\", onDelete=\"CASCADE\")
     */
    private ?Order \$Order = null;

    /** @ORM\\Column(type=\"string\", length=100, nullable=true) */
    private ?string \$depart_name = null;

    /** @ORM\\Column(type=\"string\", length=100, nullable=true) */
    private ?string \$pic_name = null;

    /** @ORM\\Column(type=\"string\", length=100, nullable=true) */
    private ?string \$quote_no = null;

    // ===== getter / setter =====
    public function getOrder(): ?Order { return \$this->Order; }
    public function setOrder(Order \$Order): self { \$this->Order = \$Order; return \$this; }

    public function getDepartName(): ?string { return \$this->depart_name; }
    public function setDepartName(?string \$v): self { \$this->depart_name = \$v; return \$this; }

    public function getPicName(): ?string { return \$this->pic_name; }
    public function setPicName(?string \$v): self { \$this->pic_name = \$v; return \$this; }

    public function getQuoteNo(): ?string { return \$this->quote_no; }
    public function setQuoteNo(?string \$v): self { \$this->quote_no = \$v; return \$this; }
}
", "B2BConnector/Entity/OrderExt.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\B2BConnector\\Entity\\OrderExt.php");
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
