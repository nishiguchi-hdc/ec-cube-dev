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

/* EccubePaymentLite42/Entity/IpBlackList.php */
class __TwigTemplate_e40aa92267692bc18ade0b42a16b4c3e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Entity/IpBlackList.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Entity/IpBlackList.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Entity;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\ORM\\Mapping as ORM;
use Eccube\\Entity\\AbstractEntity;

/**
 * @ORM\\Table(name=\"plg_eccube_payment_lite42_ip_black_list\")
 * @ORM\\InheritanceType(\"SINGLE_TABLE\")
 * @ORM\\DiscriminatorColumn(name=\"discriminator_type\", type=\"string\", length=255)
 * @ORM\\HasLifecycleCallbacks()
 * @ORM\\Entity(repositoryClass=\"Plugin\\EccubePaymentLite42\\Repository\\IpBlackListRepository\")
 */
class IpBlackList extends AbstractEntity
{
    /**
     * @ORM\\Column(name=\"id\", type=\"integer\", options={\"unsigned\":true})
     * @ORM\\Id
     * @ORM\\GeneratedValue(strategy=\"IDENTITY\")
     */
    private \$id;

    /**
     * @ORM\\ManyToMany(targetEntity=\"Plugin\\EccubePaymentLite42\\Entity\\Config\", mappedBy=\"ipBlackList\")
     */
    private \$gmoEpsilonConfigs;

    /**
     * @ORM\\Column(name=\"ip_address\", type=\"string\", length=255)
     */
    private \$ip_address;

    /**
     * @ORM\\Column(name=\"sort_no\", type=\"smallint\", options={\"unsigned\":true})
     */
    protected \$sort_no;

    /**
     * @ORM\\Column(name=\"create_date\", type=\"datetimetz\")
     */
    private \$create_date;

    /**
     * @ORM\\Column(name=\"update_date\", type=\"datetimetz\")
     */
    private \$update_date;

    public function __construct()
    {
        \$this->gmoEpsilonConfigs = new ArrayCollection();
    }

    public function getId()
    {
        return \$this->id;
    }

    public function addGmoEpsilonConfig(Config \$Config)
    {
        \$this->gmoEpsilonConfigs[] = \$Config;

        return \$this;
    }

    public function getIpAddress()
    {
        return \$this->ip_address;
    }

    public function setIpAddress(string \$ip_address)
    {
        \$this->ip_address = \$ip_address;

        return \$this;
    }

    public function setSortNo(\$sort_no)
    {
        \$this->sort_no = \$sort_no;

        return \$this;
    }

    public function getSortNo()
    {
        return \$this->sort_no;
    }

    public function setCreateDate(\$createDate)
    {
        \$this->create_date = \$createDate;

        return \$this;
    }

    public function getCreateDate()
    {
        return \$this->create_date;
    }

    public function setUpdateDate(\$updateDate)
    {
        \$this->update_date = \$updateDate;

        return \$this;
    }

    public function getUpdateDate()
    {
        return \$this->update_date;
    }

    public function __toString()
    {
        return (string) \$this->ip_address;
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
        return "EccubePaymentLite42/Entity/IpBlackList.php";
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
use Eccube\\Entity\\AbstractEntity;

/**
 * @ORM\\Table(name=\"plg_eccube_payment_lite42_ip_black_list\")
 * @ORM\\InheritanceType(\"SINGLE_TABLE\")
 * @ORM\\DiscriminatorColumn(name=\"discriminator_type\", type=\"string\", length=255)
 * @ORM\\HasLifecycleCallbacks()
 * @ORM\\Entity(repositoryClass=\"Plugin\\EccubePaymentLite42\\Repository\\IpBlackListRepository\")
 */
class IpBlackList extends AbstractEntity
{
    /**
     * @ORM\\Column(name=\"id\", type=\"integer\", options={\"unsigned\":true})
     * @ORM\\Id
     * @ORM\\GeneratedValue(strategy=\"IDENTITY\")
     */
    private \$id;

    /**
     * @ORM\\ManyToMany(targetEntity=\"Plugin\\EccubePaymentLite42\\Entity\\Config\", mappedBy=\"ipBlackList\")
     */
    private \$gmoEpsilonConfigs;

    /**
     * @ORM\\Column(name=\"ip_address\", type=\"string\", length=255)
     */
    private \$ip_address;

    /**
     * @ORM\\Column(name=\"sort_no\", type=\"smallint\", options={\"unsigned\":true})
     */
    protected \$sort_no;

    /**
     * @ORM\\Column(name=\"create_date\", type=\"datetimetz\")
     */
    private \$create_date;

    /**
     * @ORM\\Column(name=\"update_date\", type=\"datetimetz\")
     */
    private \$update_date;

    public function __construct()
    {
        \$this->gmoEpsilonConfigs = new ArrayCollection();
    }

    public function getId()
    {
        return \$this->id;
    }

    public function addGmoEpsilonConfig(Config \$Config)
    {
        \$this->gmoEpsilonConfigs[] = \$Config;

        return \$this;
    }

    public function getIpAddress()
    {
        return \$this->ip_address;
    }

    public function setIpAddress(string \$ip_address)
    {
        \$this->ip_address = \$ip_address;

        return \$this;
    }

    public function setSortNo(\$sort_no)
    {
        \$this->sort_no = \$sort_no;

        return \$this;
    }

    public function getSortNo()
    {
        return \$this->sort_no;
    }

    public function setCreateDate(\$createDate)
    {
        \$this->create_date = \$createDate;

        return \$this;
    }

    public function getCreateDate()
    {
        return \$this->create_date;
    }

    public function setUpdateDate(\$updateDate)
    {
        \$this->update_date = \$updateDate;

        return \$this;
    }

    public function getUpdateDate()
    {
        return \$this->update_date;
    }

    public function __toString()
    {
        return (string) \$this->ip_address;
    }
}
", "EccubePaymentLite42/Entity/IpBlackList.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Entity\\IpBlackList.php");
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
