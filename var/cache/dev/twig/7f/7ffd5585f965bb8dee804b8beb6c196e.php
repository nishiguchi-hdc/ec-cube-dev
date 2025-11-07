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

/* EccubePaymentLite42/Entity/OrderTrait.php */
class __TwigTemplate_48fd6adae1933806fa77f0b59059a27e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Entity/OrderTrait.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Entity/OrderTrait.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Eccube\\Annotation\\EntityExtension;

/**
 * @EntityExtension(\"Eccube\\Entity\\Order\")
 */
trait OrderTrait
{
    /**
     * @ORM\\Column(name=\"trans_code\", type=\"string\", length=255, nullable=true)
     */
    private \$trans_code;

    /**
     * @ORM\\Column(name=\"gmo_epsilon_order_no\", type=\"string\", length=255, nullable=true)
     */
    private \$gmo_epsilon_order_no;

    /**
     * @ORM\\ManyToOne(targetEntity=\"Plugin\\EccubePaymentLite42\\Entity\\PaymentStatus\")
     * @ORM\\JoinColumn(name=\"payment_status_id\", referencedColumnName=\"id\")
     */
    private \$PaymentStatus;

    /**
     * @ORM\\ManyToOne(targetEntity=\"Plugin\\EccubePaymentLite42\\Entity\\RegularOrder\", inversedBy=\"Orders\")
     * @ORM\\JoinColumn(name=\"regular_order_id\", referencedColumnName=\"id\")
     */
    private \$RegularOrder;

    public function setTransCode(\$transCode)
    {
        \$this->trans_code = \$transCode;

        return \$this;
    }

    public function getTransCode()
    {
        return \$this->trans_code;
    }

    public function getPaymentStatus()
    {
        return \$this->PaymentStatus;
    }

    public function setPaymentStatus(PaymentStatus \$PaymentStatus = null)
    {
        \$this->PaymentStatus = \$PaymentStatus;

        return \$this;
    }

    public function getGmoEpsilonOrderNo()
    {
        return \$this->gmo_epsilon_order_no;
    }

    public function setGmoEpsilonOrderNo(\$gmo_epsilon_order_no = null)
    {
        \$this->gmo_epsilon_order_no = \$gmo_epsilon_order_no;

        return \$this;
    }

    public function getRegularOrder()
    {
        return \$this->RegularOrder;
    }

    public function setRegularOrder(\$RegularOrder)
    {
        \$this->RegularOrder = \$RegularOrder;

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
        return "EccubePaymentLite42/Entity/OrderTrait.php";
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
use Eccube\\Annotation\\EntityExtension;

/**
 * @EntityExtension(\"Eccube\\Entity\\Order\")
 */
trait OrderTrait
{
    /**
     * @ORM\\Column(name=\"trans_code\", type=\"string\", length=255, nullable=true)
     */
    private \$trans_code;

    /**
     * @ORM\\Column(name=\"gmo_epsilon_order_no\", type=\"string\", length=255, nullable=true)
     */
    private \$gmo_epsilon_order_no;

    /**
     * @ORM\\ManyToOne(targetEntity=\"Plugin\\EccubePaymentLite42\\Entity\\PaymentStatus\")
     * @ORM\\JoinColumn(name=\"payment_status_id\", referencedColumnName=\"id\")
     */
    private \$PaymentStatus;

    /**
     * @ORM\\ManyToOne(targetEntity=\"Plugin\\EccubePaymentLite42\\Entity\\RegularOrder\", inversedBy=\"Orders\")
     * @ORM\\JoinColumn(name=\"regular_order_id\", referencedColumnName=\"id\")
     */
    private \$RegularOrder;

    public function setTransCode(\$transCode)
    {
        \$this->trans_code = \$transCode;

        return \$this;
    }

    public function getTransCode()
    {
        return \$this->trans_code;
    }

    public function getPaymentStatus()
    {
        return \$this->PaymentStatus;
    }

    public function setPaymentStatus(PaymentStatus \$PaymentStatus = null)
    {
        \$this->PaymentStatus = \$PaymentStatus;

        return \$this;
    }

    public function getGmoEpsilonOrderNo()
    {
        return \$this->gmo_epsilon_order_no;
    }

    public function setGmoEpsilonOrderNo(\$gmo_epsilon_order_no = null)
    {
        \$this->gmo_epsilon_order_no = \$gmo_epsilon_order_no;

        return \$this;
    }

    public function getRegularOrder()
    {
        return \$this->RegularOrder;
    }

    public function setRegularOrder(\$RegularOrder)
    {
        \$this->RegularOrder = \$RegularOrder;

        return \$this;
    }
}
", "EccubePaymentLite42/Entity/OrderTrait.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Entity\\OrderTrait.php");
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
