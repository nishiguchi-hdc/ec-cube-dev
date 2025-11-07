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

/* B2BConnector/Entity/CustomerExt.php */
class __TwigTemplate_cf2f9279de63b91cb792f2ebcf89bd41 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Entity/CustomerExt.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Entity/CustomerExt.php"));

        // line 1
        echo "<?php

namespace Plugin\\B2BConnector\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Eccube\\Entity\\Customer;

/**
 * @ORM\\Entity
 * @ORM\\Table(name=\"dtb_customer_ext\")
 */
class CustomerExt
{
    /**
     * @ORM\\Id
     * @ORM\\OneToOne(targetEntity=\"Eccube\\Entity\\Customer\")
     * @ORM\\JoinColumn(name=\"customer_id\", referencedColumnName=\"id\", onDelete=\"CASCADE\")
     */
    private \$Customer;

    /** @ORM\\Column(type=\"string\", length=255, nullable=true) */
    private \$company_kana;

    /** @ORM\\Column(type=\"string\", length=255, nullable=true) */
    private \$rep_name01;

    /** @ORM\\Column(type=\"string\", length=255, nullable=true) */
    private \$rep_name02;

    /** @ORM\\Column(type=\"string\", length=255, nullable=true) */
    private \$rep_kana01;

    /** @ORM\\Column(type=\"string\", length=255, nullable=true) */
    private \$rep_kana02;

    /** @ORM\\Column(type=\"string\", length=255, nullable=true) */
    private \$depart_name;

    /** @ORM\\Column(type=\"string\", length=255, nullable=true) */
    private \$pic_name01;

    /** @ORM\\Column(type=\"string\", length=255, nullable=true) */
    private \$pic_name02;

    /** @ORM\\Column(type=\"string\", length=255, nullable=true) */
    private \$pic_kana01;

    /** @ORM\\Column(type=\"string\", length=255, nullable=true) */
    private \$pic_kana02;

    /** @ORM\\Column(type=\"string\", length=50, nullable=true) */
    private \$mb_phone_number;

    /** @ORM\\Column(type=\"string\", length=50, nullable=true) */
    private \$fax_number;

    /** @ORM\\Column(type=\"string\", length=7, nullable=true) */
    private \$established_ym;

    /** @ORM\\Column(type=\"bigint\", nullable=true) */
    private \$annual_sales;

    /** @ORM\\Column(type=\"string\", length=255, nullable=true) */
    private \$business_type;

    /** @ORM\\Column(type=\"string\", length=512, nullable=true) */
    private \$url;

    /** @ORM\\Column(type=\"boolean\", options={\"default\": false}) */
    private \$real_store = false;

    /** @ORM\\Column(type=\"decimal\", precision=5, scale=2, nullable=true) */
    private \$trade_rate;

    public function getCustomer(): ?Customer { return \$this->Customer; }
    public function setCustomer(?Customer \$c): self { \$this->Customer = \$c; return \$this; }

    public function getCompanyKana(): ?string { return \$this->company_kana; }
    public function setCompanyKana(?string \$v): self { \$this->company_kana = \$v; return \$this; }

    public function getRepName01(): ?string { return \$this->rep_name01; }
    public function setRepName01(?string \$v): self { \$this->rep_name01 = \$v; return \$this; }

    public function getRepName02(): ?string { return \$this->rep_name02; }
    public function setRepName02(?string \$v): self { \$this->rep_name02 = \$v; return \$this; }

    public function getRepKana01(): ?string { return \$this->rep_kana01; }
    public function setRepKana01(?string \$v): self { \$this->rep_kana01 = \$v; return \$this; }

    public function getRepKana02(): ?string { return \$this->rep_kana02; }
    public function setRepKana02(?string \$v): self { \$this->rep_kana02 = \$v; return \$this; }

    public function getDepartName(): ?string { return \$this->depart_name; }
    public function setDepartName(?string \$v): self { \$this->depart_name = \$v; return \$this; }

    public function getPicName01(): ?string { return \$this->pic_name01; }
    public function setPicName01(?string \$v): self { \$this->pic_name01 = \$v; return \$this; }

    public function getPicName02(): ?string { return \$this->pic_name02; }
    public function setPicName02(?string \$v): self { \$this->pic_name02 = \$v; return \$this; }

    public function getPicKana01(): ?string { return \$this->pic_kana01; }
    public function setPicKana01(?string \$v): self { \$this->pic_kana01 = \$v; return \$this; }

    public function getPicKana02(): ?string { return \$this->pic_kana02; }
    public function setPicKana02(?string \$v): self { \$this->pic_kana02 = \$v; return \$this; }

    public function getMbPhoneNumber(): ?string { return \$this->mb_phone_number; }
    public function setMbPhoneNumber(?string \$v): self { \$this->mb_phone_number = \$v; return \$this; }

    public function getFaxNumber(): ?string { return \$this->fax_number; }
    public function setFaxNumber(?string \$v): self { \$this->fax_number = \$v; return \$this; }

    public function getEstablishedYm(): ?string { return \$this->established_ym; }
    public function setEstablishedYm(?string \$v): self { \$this->established_ym = \$v; return \$this; }

    public function getAnnualSales(): ?int { return \$this->annual_sales; }
    public function setAnnualSales(?int \$v): self { \$this->annual_sales = \$v; return \$this; }

    public function getBusinessType(): ?string { return \$this->business_type; }
    public function setBusinessType(?string \$v): self { \$this->business_type = \$v; return \$this; }

    public function getUrl(): ?string { return \$this->url; }
    public function setUrl(?string \$v): self { \$this->url = \$v; return \$this; }

    public function getRealStore(): bool { return \$this->real_store; }
    public function setRealStore(bool \$v): self { \$this->real_store = \$v; return \$this; }

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
        return "B2BConnector/Entity/CustomerExt.php";
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
use Eccube\\Entity\\Customer;

/**
 * @ORM\\Entity
 * @ORM\\Table(name=\"dtb_customer_ext\")
 */
class CustomerExt
{
    /**
     * @ORM\\Id
     * @ORM\\OneToOne(targetEntity=\"Eccube\\Entity\\Customer\")
     * @ORM\\JoinColumn(name=\"customer_id\", referencedColumnName=\"id\", onDelete=\"CASCADE\")
     */
    private \$Customer;

    /** @ORM\\Column(type=\"string\", length=255, nullable=true) */
    private \$company_kana;

    /** @ORM\\Column(type=\"string\", length=255, nullable=true) */
    private \$rep_name01;

    /** @ORM\\Column(type=\"string\", length=255, nullable=true) */
    private \$rep_name02;

    /** @ORM\\Column(type=\"string\", length=255, nullable=true) */
    private \$rep_kana01;

    /** @ORM\\Column(type=\"string\", length=255, nullable=true) */
    private \$rep_kana02;

    /** @ORM\\Column(type=\"string\", length=255, nullable=true) */
    private \$depart_name;

    /** @ORM\\Column(type=\"string\", length=255, nullable=true) */
    private \$pic_name01;

    /** @ORM\\Column(type=\"string\", length=255, nullable=true) */
    private \$pic_name02;

    /** @ORM\\Column(type=\"string\", length=255, nullable=true) */
    private \$pic_kana01;

    /** @ORM\\Column(type=\"string\", length=255, nullable=true) */
    private \$pic_kana02;

    /** @ORM\\Column(type=\"string\", length=50, nullable=true) */
    private \$mb_phone_number;

    /** @ORM\\Column(type=\"string\", length=50, nullable=true) */
    private \$fax_number;

    /** @ORM\\Column(type=\"string\", length=7, nullable=true) */
    private \$established_ym;

    /** @ORM\\Column(type=\"bigint\", nullable=true) */
    private \$annual_sales;

    /** @ORM\\Column(type=\"string\", length=255, nullable=true) */
    private \$business_type;

    /** @ORM\\Column(type=\"string\", length=512, nullable=true) */
    private \$url;

    /** @ORM\\Column(type=\"boolean\", options={\"default\": false}) */
    private \$real_store = false;

    /** @ORM\\Column(type=\"decimal\", precision=5, scale=2, nullable=true) */
    private \$trade_rate;

    public function getCustomer(): ?Customer { return \$this->Customer; }
    public function setCustomer(?Customer \$c): self { \$this->Customer = \$c; return \$this; }

    public function getCompanyKana(): ?string { return \$this->company_kana; }
    public function setCompanyKana(?string \$v): self { \$this->company_kana = \$v; return \$this; }

    public function getRepName01(): ?string { return \$this->rep_name01; }
    public function setRepName01(?string \$v): self { \$this->rep_name01 = \$v; return \$this; }

    public function getRepName02(): ?string { return \$this->rep_name02; }
    public function setRepName02(?string \$v): self { \$this->rep_name02 = \$v; return \$this; }

    public function getRepKana01(): ?string { return \$this->rep_kana01; }
    public function setRepKana01(?string \$v): self { \$this->rep_kana01 = \$v; return \$this; }

    public function getRepKana02(): ?string { return \$this->rep_kana02; }
    public function setRepKana02(?string \$v): self { \$this->rep_kana02 = \$v; return \$this; }

    public function getDepartName(): ?string { return \$this->depart_name; }
    public function setDepartName(?string \$v): self { \$this->depart_name = \$v; return \$this; }

    public function getPicName01(): ?string { return \$this->pic_name01; }
    public function setPicName01(?string \$v): self { \$this->pic_name01 = \$v; return \$this; }

    public function getPicName02(): ?string { return \$this->pic_name02; }
    public function setPicName02(?string \$v): self { \$this->pic_name02 = \$v; return \$this; }

    public function getPicKana01(): ?string { return \$this->pic_kana01; }
    public function setPicKana01(?string \$v): self { \$this->pic_kana01 = \$v; return \$this; }

    public function getPicKana02(): ?string { return \$this->pic_kana02; }
    public function setPicKana02(?string \$v): self { \$this->pic_kana02 = \$v; return \$this; }

    public function getMbPhoneNumber(): ?string { return \$this->mb_phone_number; }
    public function setMbPhoneNumber(?string \$v): self { \$this->mb_phone_number = \$v; return \$this; }

    public function getFaxNumber(): ?string { return \$this->fax_number; }
    public function setFaxNumber(?string \$v): self { \$this->fax_number = \$v; return \$this; }

    public function getEstablishedYm(): ?string { return \$this->established_ym; }
    public function setEstablishedYm(?string \$v): self { \$this->established_ym = \$v; return \$this; }

    public function getAnnualSales(): ?int { return \$this->annual_sales; }
    public function setAnnualSales(?int \$v): self { \$this->annual_sales = \$v; return \$this; }

    public function getBusinessType(): ?string { return \$this->business_type; }
    public function setBusinessType(?string \$v): self { \$this->business_type = \$v; return \$this; }

    public function getUrl(): ?string { return \$this->url; }
    public function setUrl(?string \$v): self { \$this->url = \$v; return \$this; }

    public function getRealStore(): bool { return \$this->real_store; }
    public function setRealStore(bool \$v): self { \$this->real_store = \$v; return \$this; }

    public function getTradeRate(): ?string { return \$this->trade_rate; }
    public function setTradeRate(?string \$v): self { \$this->trade_rate = \$v; return \$this; }
}

", "B2BConnector/Entity/CustomerExt.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\B2BConnector\\Entity\\CustomerExt.php");
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
