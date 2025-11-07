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

/* EccubePaymentLite42/Entity/CreditBlock.php */
class __TwigTemplate_34dc5689028f7f76905aec5bf4e615f8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Entity/CreditBlock.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Entity/CreditBlock.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Eccube\\Entity\\AbstractEntity;

/**
 * @ORM\\Table(name=\"plg_eccube_payment_lite42_credit_access_block\", indexes={@ORM\\Index(name=\"dtb_epsilon_credit_aceess_block_ip_address_key_idx\", columns={\"ip_address\"})})
 * @ORM\\Entity(repositoryClass=\"Plugin\\EccubePaymentLite42\\Repository\\CreditBlockRepository\")
 * @ORM\\Cache(usage=\"NONSTRICT_READ_WRITE\")
 */
class CreditBlock extends AbstractEntity
{
    /**
     * @ORM\\Column(name=\"id\", type=\"integer\", options={\"unsigned\":true})
     * @ORM\\Id
     * @ORM\\GeneratedValue(strategy=\"IDENTITY\")
     */
    private \$id;

    /**
     * @ORM\\Column(name=\"ip_address\", type=\"string\", length=255, nullable=true)
     */
    private \$ip_address;

    /**
     * @ORM\\Column(name=\"block_date\", type=\"datetimetz\")
     */
    private \$block_date;

    public function __construct()
    {
    }

    public function getId()
    {
        return \$this->id;
    }

    public function getIpAddress()
    {
        return \$this->ip_address;
    }

    public function setIpAddress(\$ip_address)
    {
        \$this->ip_address = \$ip_address;

        return \$this;
    }

    public function getBlockDate()
    {
        return \$this->block_date;
    }

    public function setBlockDate(\$block_date)
    {
        \$this->block_date = \$block_date;

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
        return "EccubePaymentLite42/Entity/CreditBlock.php";
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

use Doctrine\\ORM\\Mapping as ORM;
use Eccube\\Entity\\AbstractEntity;

/**
 * @ORM\\Table(name=\"plg_eccube_payment_lite42_credit_access_block\", indexes={@ORM\\Index(name=\"dtb_epsilon_credit_aceess_block_ip_address_key_idx\", columns={\"ip_address\"})})
 * @ORM\\Entity(repositoryClass=\"Plugin\\EccubePaymentLite42\\Repository\\CreditBlockRepository\")
 * @ORM\\Cache(usage=\"NONSTRICT_READ_WRITE\")
 */
class CreditBlock extends AbstractEntity
{
    /**
     * @ORM\\Column(name=\"id\", type=\"integer\", options={\"unsigned\":true})
     * @ORM\\Id
     * @ORM\\GeneratedValue(strategy=\"IDENTITY\")
     */
    private \$id;

    /**
     * @ORM\\Column(name=\"ip_address\", type=\"string\", length=255, nullable=true)
     */
    private \$ip_address;

    /**
     * @ORM\\Column(name=\"block_date\", type=\"datetimetz\")
     */
    private \$block_date;

    public function __construct()
    {
    }

    public function getId()
    {
        return \$this->id;
    }

    public function getIpAddress()
    {
        return \$this->ip_address;
    }

    public function setIpAddress(\$ip_address)
    {
        \$this->ip_address = \$ip_address;

        return \$this;
    }

    public function getBlockDate()
    {
        return \$this->block_date;
    }

    public function setBlockDate(\$block_date)
    {
        \$this->block_date = \$block_date;

        return \$this;
    }
}
", "EccubePaymentLite42/Entity/CreditBlock.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Entity\\CreditBlock.php");
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
