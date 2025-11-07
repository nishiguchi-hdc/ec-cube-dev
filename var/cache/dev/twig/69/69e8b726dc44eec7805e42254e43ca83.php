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

/* EccubePaymentLite42/Entity/ConvenienceStore.php */
class __TwigTemplate_cc3ecb8ed0d3b825fa68034c4366b793 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Entity/ConvenienceStore.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Entity/ConvenienceStore.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Entity;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\ORM\\Mapping as ORM;
use Eccube\\Entity\\Master\\AbstractMasterEntity;

/**
 * @ORM\\Table(name=\"plg_eccube_payment_lite42_convenience_store\")
 * @ORM\\InheritanceType(\"SINGLE_TABLE\")
 * @ORM\\DiscriminatorColumn(name=\"discriminator_type\", type=\"string\", length=255)
 * @ORM\\HasLifecycleCallbacks()
 * @ORM\\Entity(repositoryClass=\"Plugin\\EccubePaymentLite42\\Repository\\ConvenienceStoreRepository\")
 * @ORM\\Cache(usage=\"NONSTRICT_READ_WRITE\")
 */
class ConvenienceStore extends AbstractMasterEntity
{
    const SEVEN_ELEVEN = 11;
    const FAMILY_MART = 21;
    const LAWSON = 31;
    const SEICO_MART = 32;
    const MINI_STOP = 33;

    const SEVEN_ELEVEN_NAME = 'セブンイレブン';
    const FAMILY_MART_NAME = 'ファミリーマート';
    const LAWSON_NAME = 'ローソン';
    const SEICO_MART_NAME = 'セイコーマート';
    const MINI_STOP_NAME = 'ミニストップ';

    /**
     * @ORM\\Column(name=\"conveni_code\", type=\"smallint\", options={\"unsigned\":true})
     */
    private \$conveni_code;

    /**
     * @ORM\\ManyToMany(targetEntity=\"Plugin\\EccubePaymentLite42\\Entity\\Config\", mappedBy=\"ConvenienceStores\")
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

    public function getConveniCode()
    {
        return \$this->conveni_code;
    }

    public function setConveniCode(\$conveni_code): self
    {
        \$this->conveni_code = \$conveni_code;

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
        return "EccubePaymentLite42/Entity/ConvenienceStore.php";
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
 * @ORM\\Table(name=\"plg_eccube_payment_lite42_convenience_store\")
 * @ORM\\InheritanceType(\"SINGLE_TABLE\")
 * @ORM\\DiscriminatorColumn(name=\"discriminator_type\", type=\"string\", length=255)
 * @ORM\\HasLifecycleCallbacks()
 * @ORM\\Entity(repositoryClass=\"Plugin\\EccubePaymentLite42\\Repository\\ConvenienceStoreRepository\")
 * @ORM\\Cache(usage=\"NONSTRICT_READ_WRITE\")
 */
class ConvenienceStore extends AbstractMasterEntity
{
    const SEVEN_ELEVEN = 11;
    const FAMILY_MART = 21;
    const LAWSON = 31;
    const SEICO_MART = 32;
    const MINI_STOP = 33;

    const SEVEN_ELEVEN_NAME = 'セブンイレブン';
    const FAMILY_MART_NAME = 'ファミリーマート';
    const LAWSON_NAME = 'ローソン';
    const SEICO_MART_NAME = 'セイコーマート';
    const MINI_STOP_NAME = 'ミニストップ';

    /**
     * @ORM\\Column(name=\"conveni_code\", type=\"smallint\", options={\"unsigned\":true})
     */
    private \$conveni_code;

    /**
     * @ORM\\ManyToMany(targetEntity=\"Plugin\\EccubePaymentLite42\\Entity\\Config\", mappedBy=\"ConvenienceStores\")
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

    public function getConveniCode()
    {
        return \$this->conveni_code;
    }

    public function setConveniCode(\$conveni_code): self
    {
        \$this->conveni_code = \$conveni_code;

        return \$this;
    }
}
", "EccubePaymentLite42/Entity/ConvenienceStore.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Entity\\ConvenienceStore.php");
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
