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

/* B2BConnector/Entity/ProductExt.php */
class __TwigTemplate_90f5b19b39aa8cd8aaccfa3b1655fb92 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Entity/ProductExt.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Entity/ProductExt.php"));

        // line 1
        echo "<?php

namespace Plugin\\B2BConnector\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Eccube\\Entity\\Product;

/**
 * @ORM\\Entity
 * @ORM\\Table(name=\"dtb_product_ext\")
 */
class ProductExt
{
    /**
     * @ORM\\Id
     * @ORM\\OneToOne(targetEntity=\"Eccube\\Entity\\Product\")
     * @ORM\\JoinColumn(name=\"product_id\", referencedColumnName=\"id\", onDelete=\"CASCADE\")
     */
    private \$Product;

    /** @ORM\\Column(type=\"string\", length=100, nullable=true) */
    private \$made_in;

    /** @ORM\\Column(type=\"string\", length=100, nullable=true) */
    private \$size;

    /** @ORM\\Column(type=\"string\", length=100, nullable=true) */
    private \$material;

    /** @ORM\\Column(type=\"decimal\", precision=10, scale=2, nullable=true) */
    private \$weight;

    /** @ORM\\Column(type=\"string\", length=100, nullable=true) */
    private \$color_pattern;

    /** @ORM\\Column(type=\"string\", length=100, nullable=true) */
    private \$package_form;

    /** @ORM\\Column(type=\"decimal\", precision=5, scale=2, nullable=true) */
    private \$trade_rate;

    // getter/setter 略（必要分だけ実装）
    public function getProduct(): ?Product { return \$this->Product; }
    public function setProduct(Product \$p): self { \$this->Product = \$p; return \$this; }

    public function getMadeIn(): ?string { return \$this->made_in; }
    public function setMadeIn(?string \$v): self { \$this->made_in = \$v; return \$this; }

    public function getSize(): ?string { return \$this->size; }
    public function setSize(?string \$v): self { \$this->size = \$v; return \$this; }

    public function getMaterial(): ?string { return \$this->material; }
    public function setMaterial(?string \$v): self { \$this->material = \$v; return \$this; }

    public function getWeight(): ?string { return \$this->weight; }
    public function setWeight(\$v): self { \$this->weight = \$v; return \$this; }

    public function getColorPattern(): ?string { return \$this->color_pattern; }
    public function setColorPattern(?string \$v): self { \$this->color_pattern = \$v; return \$this; }

    public function getPackageForm(): ?string { return \$this->package_form; }
    public function setPackageForm(?string \$v): self { \$this->package_form = \$v; return \$this; }

    public function getTradeRate(): ?string { return \$this->trade_rate; }
    public function setTradeRate(?string \$v): self { \$this->trade_rate = \$v; return \$this; }
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
        return "B2BConnector/Entity/ProductExt.php";
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
use Eccube\\Entity\\Product;

/**
 * @ORM\\Entity
 * @ORM\\Table(name=\"dtb_product_ext\")
 */
class ProductExt
{
    /**
     * @ORM\\Id
     * @ORM\\OneToOne(targetEntity=\"Eccube\\Entity\\Product\")
     * @ORM\\JoinColumn(name=\"product_id\", referencedColumnName=\"id\", onDelete=\"CASCADE\")
     */
    private \$Product;

    /** @ORM\\Column(type=\"string\", length=100, nullable=true) */
    private \$made_in;

    /** @ORM\\Column(type=\"string\", length=100, nullable=true) */
    private \$size;

    /** @ORM\\Column(type=\"string\", length=100, nullable=true) */
    private \$material;

    /** @ORM\\Column(type=\"decimal\", precision=10, scale=2, nullable=true) */
    private \$weight;

    /** @ORM\\Column(type=\"string\", length=100, nullable=true) */
    private \$color_pattern;

    /** @ORM\\Column(type=\"string\", length=100, nullable=true) */
    private \$package_form;

    /** @ORM\\Column(type=\"decimal\", precision=5, scale=2, nullable=true) */
    private \$trade_rate;

    // getter/setter 略（必要分だけ実装）
    public function getProduct(): ?Product { return \$this->Product; }
    public function setProduct(Product \$p): self { \$this->Product = \$p; return \$this; }

    public function getMadeIn(): ?string { return \$this->made_in; }
    public function setMadeIn(?string \$v): self { \$this->made_in = \$v; return \$this; }

    public function getSize(): ?string { return \$this->size; }
    public function setSize(?string \$v): self { \$this->size = \$v; return \$this; }

    public function getMaterial(): ?string { return \$this->material; }
    public function setMaterial(?string \$v): self { \$this->material = \$v; return \$this; }

    public function getWeight(): ?string { return \$this->weight; }
    public function setWeight(\$v): self { \$this->weight = \$v; return \$this; }

    public function getColorPattern(): ?string { return \$this->color_pattern; }
    public function setColorPattern(?string \$v): self { \$this->color_pattern = \$v; return \$this; }

    public function getPackageForm(): ?string { return \$this->package_form; }
    public function setPackageForm(?string \$v): self { \$this->package_form = \$v; return \$this; }

    public function getTradeRate(): ?string { return \$this->trade_rate; }
    public function setTradeRate(?string \$v): self { \$this->trade_rate = \$v; return \$this; }
}
", "B2BConnector/Entity/ProductExt.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\B2BConnector\\Entity\\ProductExt.php");
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
