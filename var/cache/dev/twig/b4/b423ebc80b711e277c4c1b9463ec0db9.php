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

/* AmazonPayV2_42_Bundle/Entity/OrderTrait.php */
class __TwigTemplate_2838598e7b5564e093ffb35e374b2531 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Entity/OrderTrait.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Entity/OrderTrait.php"));

        // line 1
        echo "<?php

/*
 * Amazon Pay V2 for EC-CUBE4.2
 * Copyright(c) 2023 EC-CUBE CO.,LTD. all rights reserved.
 *
 * https://www.ec-cube.co.jp/
 *
 * This program is not free software.
 * It applies to terms of service.
 *
 */

namespace Plugin\\AmazonPayV2_42_Bundle\\Entity;

use Eccube\\Annotation\\EntityExtension;
use Doctrine\\ORM\\Mapping as ORM;

/**
 * @EntityExtension(\"Eccube\\Entity\\Order\")
 */
trait OrderTrait
{
    public function getAmazonPayV2SumAuthoriAmount()
    {
        \$sumAuthoriAmount = 0;
        foreach (\$this->AmazonPayV2AmazonTradings as \$AmazonTrading) {
            \$sumAuthoriAmount += \$AmazonTrading->getAuthoriAmount();
        }

        return \$sumAuthoriAmount;
    }

    public function getAmazonPayV2SumCaptureAmount()
    {
        \$sumCaptureAmount = 0;
        foreach (\$this->AmazonPayV2AmazonTradings as \$AmazonTrading) {
            \$sumCaptureAmount += \$AmazonTrading->getCaptureAmount();
        }

        return \$sumCaptureAmount;
    }

    /**
     * @var string
     * 
     * @ORM\\Column(name=\"amazonpay_v2_charge_permission_id\", type=\"string\", length=255, nullable=true)
     */
    private \$amazonpay_v2_charge_permission_id;

    /**
     * @var integer
     * 
     * @ORM\\Column(name=\"amazonpay_v2_billable_amount\", type=\"integer\", nullable=true)
     */
    private \$amazonpay_v2_billable_amount;

    /**
     * @var AmazonStatus
     * @ORM\\ManyToOne(targetEntity=\"Plugin\\AmazonPayV2_42_Bundle\\Entity\\Master\\AmazonStatus\")
     * @ORM\\JoinColumns({
     *   @ORM\\JoinColumn(name=\"amazonpay_v2_amazon_status_id\", referencedColumnName=\"id\")
     * })
     */
    private \$AmazonPayV2AmazonStatus;

    /**
     * @var \\Doctrine\\Common\\Collections\\Collection
     * 
     * @ORM\\OneToMany(targetEntity=\"Plugin\\AmazonPayV2_42_Bundle\\Entity\\AmazonTrading\", mappedBy=\"Order\", cascade={\"persist\", \"remove\"})
     */
    private \$AmazonPayV2AmazonTradings;

    /**
     * @var string
     * @ORM\\Column(name=\"amazonpay_v2_session_temp\", type=\"text\", length=36777215, nullable=true)
     */
    private \$amazonpay_v2_session_temp;

    /**
     * {@inheritdoc}
     */
    public function setAmazonPayV2ChargePermissionId(\$AmazonPayV2ChargePermissionId)
    {
        \$this->amazonpay_v2_charge_permission_id = \$AmazonPayV2ChargePermissionId;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAmazonPayV2ChargePermissionId()
    {
        return \$this->amazonpay_v2_charge_permission_id;
    }

    /**
     * {@inheritdoc}
     */
    public function setAmazonPayV2BillableAmount(\$amazonpayV2BillableAmount)
    {
        \$this->amazonpay_v2_billable_amount = \$amazonpayV2BillableAmount;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAmazonPayV2BillableAmount()
    {
        return \$this->amazonpay_v2_billable_amount;
    }

    /**
     * {@inheritdoc}
     */
    public function setAmazonPayV2AmazonStatus(\\Plugin\\AmazonPayV2_42_Bundle\\Entity\\Master\\AmazonStatus \$AmazonPayV2AmazonStatus)
    {
        \$this->AmazonPayV2AmazonStatus = \$AmazonPayV2AmazonStatus;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAmazonPayV2AmazonStatus()
    {
        return \$this->AmazonPayV2AmazonStatus;
    }

    /**
     * {@inheritdoc}
     */
    public function addAmazonPayV2AmazonTrading(\\Plugin\\AmazonPayV2_42_Bundle\\Entity\\AmazonTrading \$AmazonPayV2AmazonTrading)
    {
        \$this->AmazonPayV2AmazonTradings[] = \$AmazonPayV2AmazonTrading;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function clearAmazonPayV2AmazonTradings()
    {
        \$this->AmazonPayV2AmazonTradings->clear();

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAmazonPayV2AmazonTradings()
    {
        return \$this->AmazonPayV2AmazonTradings;
    }

    /**
     * {@inheritdoc}
     */
    public function setAmazonPayV2SessionTemp(\$AmazonPayV2SessionTemp)
    {
        \$this->amazonpay_v2_session_temp = \$AmazonPayV2SessionTemp;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAmazonPayV2SessionTemp()
    {
        return \$this->amazonpay_v2_session_temp;
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
        return "AmazonPayV2_42_Bundle/Entity/OrderTrait.php";
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

/*
 * Amazon Pay V2 for EC-CUBE4.2
 * Copyright(c) 2023 EC-CUBE CO.,LTD. all rights reserved.
 *
 * https://www.ec-cube.co.jp/
 *
 * This program is not free software.
 * It applies to terms of service.
 *
 */

namespace Plugin\\AmazonPayV2_42_Bundle\\Entity;

use Eccube\\Annotation\\EntityExtension;
use Doctrine\\ORM\\Mapping as ORM;

/**
 * @EntityExtension(\"Eccube\\Entity\\Order\")
 */
trait OrderTrait
{
    public function getAmazonPayV2SumAuthoriAmount()
    {
        \$sumAuthoriAmount = 0;
        foreach (\$this->AmazonPayV2AmazonTradings as \$AmazonTrading) {
            \$sumAuthoriAmount += \$AmazonTrading->getAuthoriAmount();
        }

        return \$sumAuthoriAmount;
    }

    public function getAmazonPayV2SumCaptureAmount()
    {
        \$sumCaptureAmount = 0;
        foreach (\$this->AmazonPayV2AmazonTradings as \$AmazonTrading) {
            \$sumCaptureAmount += \$AmazonTrading->getCaptureAmount();
        }

        return \$sumCaptureAmount;
    }

    /**
     * @var string
     * 
     * @ORM\\Column(name=\"amazonpay_v2_charge_permission_id\", type=\"string\", length=255, nullable=true)
     */
    private \$amazonpay_v2_charge_permission_id;

    /**
     * @var integer
     * 
     * @ORM\\Column(name=\"amazonpay_v2_billable_amount\", type=\"integer\", nullable=true)
     */
    private \$amazonpay_v2_billable_amount;

    /**
     * @var AmazonStatus
     * @ORM\\ManyToOne(targetEntity=\"Plugin\\AmazonPayV2_42_Bundle\\Entity\\Master\\AmazonStatus\")
     * @ORM\\JoinColumns({
     *   @ORM\\JoinColumn(name=\"amazonpay_v2_amazon_status_id\", referencedColumnName=\"id\")
     * })
     */
    private \$AmazonPayV2AmazonStatus;

    /**
     * @var \\Doctrine\\Common\\Collections\\Collection
     * 
     * @ORM\\OneToMany(targetEntity=\"Plugin\\AmazonPayV2_42_Bundle\\Entity\\AmazonTrading\", mappedBy=\"Order\", cascade={\"persist\", \"remove\"})
     */
    private \$AmazonPayV2AmazonTradings;

    /**
     * @var string
     * @ORM\\Column(name=\"amazonpay_v2_session_temp\", type=\"text\", length=36777215, nullable=true)
     */
    private \$amazonpay_v2_session_temp;

    /**
     * {@inheritdoc}
     */
    public function setAmazonPayV2ChargePermissionId(\$AmazonPayV2ChargePermissionId)
    {
        \$this->amazonpay_v2_charge_permission_id = \$AmazonPayV2ChargePermissionId;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAmazonPayV2ChargePermissionId()
    {
        return \$this->amazonpay_v2_charge_permission_id;
    }

    /**
     * {@inheritdoc}
     */
    public function setAmazonPayV2BillableAmount(\$amazonpayV2BillableAmount)
    {
        \$this->amazonpay_v2_billable_amount = \$amazonpayV2BillableAmount;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAmazonPayV2BillableAmount()
    {
        return \$this->amazonpay_v2_billable_amount;
    }

    /**
     * {@inheritdoc}
     */
    public function setAmazonPayV2AmazonStatus(\\Plugin\\AmazonPayV2_42_Bundle\\Entity\\Master\\AmazonStatus \$AmazonPayV2AmazonStatus)
    {
        \$this->AmazonPayV2AmazonStatus = \$AmazonPayV2AmazonStatus;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAmazonPayV2AmazonStatus()
    {
        return \$this->AmazonPayV2AmazonStatus;
    }

    /**
     * {@inheritdoc}
     */
    public function addAmazonPayV2AmazonTrading(\\Plugin\\AmazonPayV2_42_Bundle\\Entity\\AmazonTrading \$AmazonPayV2AmazonTrading)
    {
        \$this->AmazonPayV2AmazonTradings[] = \$AmazonPayV2AmazonTrading;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function clearAmazonPayV2AmazonTradings()
    {
        \$this->AmazonPayV2AmazonTradings->clear();

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAmazonPayV2AmazonTradings()
    {
        return \$this->AmazonPayV2AmazonTradings;
    }

    /**
     * {@inheritdoc}
     */
    public function setAmazonPayV2SessionTemp(\$AmazonPayV2SessionTemp)
    {
        \$this->amazonpay_v2_session_temp = \$AmazonPayV2SessionTemp;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAmazonPayV2SessionTemp()
    {
        return \$this->amazonpay_v2_session_temp;
    }
}
", "AmazonPayV2_42_Bundle/Entity/OrderTrait.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\AmazonPayV2_42_Bundle\\Entity\\OrderTrait.php");
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
