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

/* B2BConnector/Entity/ProductClassExt.php */
class __TwigTemplate_51d3630857be0a088a327ff1f18f974a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Entity/ProductClassExt.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Entity/ProductClassExt.php"));

        // line 1
        echo "<?php

namespace Plugin\\B2BConnector\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Eccube\\Entity\\ProductClass;

/**
 * @ORM\\Entity
 * @ORM\\Table(name=\"dtb_product_class_ext\")
 */
class ProductClassExt
{
    /**
     * @ORM\\Id
     * @ORM\\OneToOne(targetEntity=\"Eccube\\Entity\\ProductClass\")
     * @ORM\\JoinColumn(name=\"product_class_id\", referencedColumnName=\"id\", onDelete=\"CASCADE\")
     */
    private \$ProductClass;

    /** @ORM\\Column(type=\"string\", length=50, nullable=true) */
    private \$item_code;

    /** @ORM\\Column(type=\"string\", length=20, nullable=true) */
    private \$jan_code;

    /** @ORM\\Column(type=\"string\", length=20, nullable=true) */
    private \$tax_category;

    /** @ORM\\Column(type=\"integer\") */
    private \$display_order = 0;

    /** @ORM\\Column(type=\"boolean\") */
    private \$is_visible = true;
    
    // getter/setter 略（必要分）
    public function getProductClass(): ?ProductClass { return \$this->ProductClass; }
    public function setProductClass(ProductClass \$pc): self { \$this->ProductClass = \$pc; return \$this; }

    public function getItemCode(): ?string { return \$this->item_code; }
    public function setItemCode(?string \$v): self { \$this->item_code = \$v; return \$this; }

    public function getJanCode(): ?string { return \$this->jan_code; }
    public function setJanCode(?string \$v): self { \$this->jan_code = \$v; return \$this; }

    public function getTaxCategory(): ?string { return \$this->tax_category; }
    public function setTaxCategory(?string \$v): self { \$this->tax_category = \$v; return \$this; }

    public function getDisplayOrder(): int { return \$this->display_order; }
    public function setDisplayOrder(int \$v): self { \$this->display_order = \$v; return \$this; }

    public function isVisible(): bool { return (bool)\$this->is_visible; }
    public function setIsVisible(bool \$v): self { \$this->is_visible = \$v; return \$this; }

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
        return "B2BConnector/Entity/ProductClassExt.php";
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
use Eccube\\Entity\\ProductClass;

/**
 * @ORM\\Entity
 * @ORM\\Table(name=\"dtb_product_class_ext\")
 */
class ProductClassExt
{
    /**
     * @ORM\\Id
     * @ORM\\OneToOne(targetEntity=\"Eccube\\Entity\\ProductClass\")
     * @ORM\\JoinColumn(name=\"product_class_id\", referencedColumnName=\"id\", onDelete=\"CASCADE\")
     */
    private \$ProductClass;

    /** @ORM\\Column(type=\"string\", length=50, nullable=true) */
    private \$item_code;

    /** @ORM\\Column(type=\"string\", length=20, nullable=true) */
    private \$jan_code;

    /** @ORM\\Column(type=\"string\", length=20, nullable=true) */
    private \$tax_category;

    /** @ORM\\Column(type=\"integer\") */
    private \$display_order = 0;

    /** @ORM\\Column(type=\"boolean\") */
    private \$is_visible = true;
    
    // getter/setter 略（必要分）
    public function getProductClass(): ?ProductClass { return \$this->ProductClass; }
    public function setProductClass(ProductClass \$pc): self { \$this->ProductClass = \$pc; return \$this; }

    public function getItemCode(): ?string { return \$this->item_code; }
    public function setItemCode(?string \$v): self { \$this->item_code = \$v; return \$this; }

    public function getJanCode(): ?string { return \$this->jan_code; }
    public function setJanCode(?string \$v): self { \$this->jan_code = \$v; return \$this; }

    public function getTaxCategory(): ?string { return \$this->tax_category; }
    public function setTaxCategory(?string \$v): self { \$this->tax_category = \$v; return \$this; }

    public function getDisplayOrder(): int { return \$this->display_order; }
    public function setDisplayOrder(int \$v): self { \$this->display_order = \$v; return \$this; }

    public function isVisible(): bool { return (bool)\$this->is_visible; }
    public function setIsVisible(bool \$v): self { \$this->is_visible = \$v; return \$this; }

}
", "B2BConnector/Entity/ProductClassExt.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\B2BConnector\\Entity\\ProductClassExt.php");
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
