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

/* EccubePaymentLite42/Entity/GmoEpsilonPayment.php */
class __TwigTemplate_a5260b2b64a07f200714772da111889c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Entity/GmoEpsilonPayment.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Entity/GmoEpsilonPayment.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Entity;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\ORM\\Mapping as ORM;
use Eccube\\Entity\\Master\\AbstractMasterEntity;

/**
 * @ORM\\Table(name=\"plg_eccube_payment_lite42_payment\")
 * @ORM\\InheritanceType(\"SINGLE_TABLE\")
 * @ORM\\DiscriminatorColumn(name=\"discriminator_type\", type=\"string\", length=255)
 * @ORM\\HasLifecycleCallbacks()
 * @ORM\\Entity(repositoryClass=\"Plugin\\EccubePaymentLite42\\Repository\\GmoEpsilonPaymentRepository\")
 * @ORM\\Cache(usage=\"NONSTRICT_READ_WRITE\")
 */
class GmoEpsilonPayment extends AbstractMasterEntity
{
    const CREDIT = 1;
    const REGISTERED_CREDIT_CARD = 2;
    const CONVENIENCE_STORE = 3;
    const ONLINE_BANK_JAPAN_NET_BANK = 4;
    const ONLINE_BANK_RAKUTEN = 5;
    const PAY_EASY = 7;
    const WEB_MONEY = 8;
    const YAHOO_WALLET = 9;
    const PAYPAL = 11;
    const BIT_CASH = 12;
    const CHOCOM_E_MONEY = 13;
    const SMARTPHONE_CARRIER = 15;
    const JCB_PREMO = 16;
    const ONLINE_BANK_SUMISHIN_SBI = 17;
    const GMO_DEFERRED_PAYMENT = 18;
    const VIRTUAL_ACCOUNT = 22;
    const PAYPAY = 25;
    const MAIL_LINK = 99;

    /**
     * @var int
     * @ORM\\Column(name=\"charge\", type=\"decimal\", precision=12, scale=2, nullable=true, options={\"unsigned\":true,\"default\":0})
     */
    private \$charge = 0;

    /**
     * @var string|null
     *
     * @ORM\\Column(name=\"rule_max\", type=\"decimal\", precision=12, scale=2, nullable=true, options={\"unsigned\":true})
     */
    private \$rule_max;

    /**
     * @var string|null
     *
     * @ORM\\Column(name=\"rule_min\", type=\"decimal\", precision=12, scale=2, nullable=true, options={\"unsigned\":true})
     */
    private \$rule_min;

    /**
     * @var string|null
     *
     * @ORM\\Column(name=\"method_class\", type=\"string\", length=255, nullable=true)
     */
    private \$method_class;
    /**
     * @ORM\\ManyToMany(targetEntity=\"Plugin\\EccubePaymentLite42\\Entity\\Config\", mappedBy=\"gmoEpsilonPayments\")
     */
    private \$gmoEpsilonConfigs;

    public function __construct()
    {
        \$this->gmoEpsilonConfigs = new ArrayCollection();
    }

    public function addGmoEpsilonConfig(Config \$Config)
    {
        \$this->gmoEpsilonConfigs[] = \$Config;

        return \$this;
    }

    /**
     * @return int
     */
    public function getCharge()
    {
        return \$this->charge;
    }

    /**
     * @return self
     */
    public function setCharge(int \$charge)
    {
        \$this->charge = \$charge;

        return \$this;
    }

    /**
     * @return string|null
     */
    public function getRuleMax()
    {
        return \$this->rule_max;
    }

    /**
     * @return self
     */
    public function setRuleMax(?string \$rule_max)
    {
        \$this->rule_max = \$rule_max;

        return \$this;
    }

    /**
     * @return string|null
     */
    public function getRuleMin()
    {
        return \$this->rule_min;
    }

    /**
     * @return self
     */
    public function setRuleMin(?string \$rule_min)
    {
        \$this->rule_min = \$rule_min;

        return \$this;
    }

    /**
     * @return string|null
     */
    public function getMethodClass()
    {
        return \$this->method_class;
    }

    /**
     * @return self
     */
    public function setMethodClass(?string \$method_class)
    {
        \$this->method_class = \$method_class;

        return \$this;
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
        return "EccubePaymentLite42/Entity/GmoEpsilonPayment.php";
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

use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\ORM\\Mapping as ORM;
use Eccube\\Entity\\Master\\AbstractMasterEntity;

/**
 * @ORM\\Table(name=\"plg_eccube_payment_lite42_payment\")
 * @ORM\\InheritanceType(\"SINGLE_TABLE\")
 * @ORM\\DiscriminatorColumn(name=\"discriminator_type\", type=\"string\", length=255)
 * @ORM\\HasLifecycleCallbacks()
 * @ORM\\Entity(repositoryClass=\"Plugin\\EccubePaymentLite42\\Repository\\GmoEpsilonPaymentRepository\")
 * @ORM\\Cache(usage=\"NONSTRICT_READ_WRITE\")
 */
class GmoEpsilonPayment extends AbstractMasterEntity
{
    const CREDIT = 1;
    const REGISTERED_CREDIT_CARD = 2;
    const CONVENIENCE_STORE = 3;
    const ONLINE_BANK_JAPAN_NET_BANK = 4;
    const ONLINE_BANK_RAKUTEN = 5;
    const PAY_EASY = 7;
    const WEB_MONEY = 8;
    const YAHOO_WALLET = 9;
    const PAYPAL = 11;
    const BIT_CASH = 12;
    const CHOCOM_E_MONEY = 13;
    const SMARTPHONE_CARRIER = 15;
    const JCB_PREMO = 16;
    const ONLINE_BANK_SUMISHIN_SBI = 17;
    const GMO_DEFERRED_PAYMENT = 18;
    const VIRTUAL_ACCOUNT = 22;
    const PAYPAY = 25;
    const MAIL_LINK = 99;

    /**
     * @var int
     * @ORM\\Column(name=\"charge\", type=\"decimal\", precision=12, scale=2, nullable=true, options={\"unsigned\":true,\"default\":0})
     */
    private \$charge = 0;

    /**
     * @var string|null
     *
     * @ORM\\Column(name=\"rule_max\", type=\"decimal\", precision=12, scale=2, nullable=true, options={\"unsigned\":true})
     */
    private \$rule_max;

    /**
     * @var string|null
     *
     * @ORM\\Column(name=\"rule_min\", type=\"decimal\", precision=12, scale=2, nullable=true, options={\"unsigned\":true})
     */
    private \$rule_min;

    /**
     * @var string|null
     *
     * @ORM\\Column(name=\"method_class\", type=\"string\", length=255, nullable=true)
     */
    private \$method_class;
    /**
     * @ORM\\ManyToMany(targetEntity=\"Plugin\\EccubePaymentLite42\\Entity\\Config\", mappedBy=\"gmoEpsilonPayments\")
     */
    private \$gmoEpsilonConfigs;

    public function __construct()
    {
        \$this->gmoEpsilonConfigs = new ArrayCollection();
    }

    public function addGmoEpsilonConfig(Config \$Config)
    {
        \$this->gmoEpsilonConfigs[] = \$Config;

        return \$this;
    }

    /**
     * @return int
     */
    public function getCharge()
    {
        return \$this->charge;
    }

    /**
     * @return self
     */
    public function setCharge(int \$charge)
    {
        \$this->charge = \$charge;

        return \$this;
    }

    /**
     * @return string|null
     */
    public function getRuleMax()
    {
        return \$this->rule_max;
    }

    /**
     * @return self
     */
    public function setRuleMax(?string \$rule_max)
    {
        \$this->rule_max = \$rule_max;

        return \$this;
    }

    /**
     * @return string|null
     */
    public function getRuleMin()
    {
        return \$this->rule_min;
    }

    /**
     * @return self
     */
    public function setRuleMin(?string \$rule_min)
    {
        \$this->rule_min = \$rule_min;

        return \$this;
    }

    /**
     * @return string|null
     */
    public function getMethodClass()
    {
        return \$this->method_class;
    }

    /**
     * @return self
     */
    public function setMethodClass(?string \$method_class)
    {
        \$this->method_class = \$method_class;

        return \$this;
    }
}
", "EccubePaymentLite42/Entity/GmoEpsilonPayment.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Entity\\GmoEpsilonPayment.php");
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
