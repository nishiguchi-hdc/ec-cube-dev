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

/* EccubePaymentLite42/Entity/RegularStatus.php */
class __TwigTemplate_7d5a89084b4e49435d62d59278712f70 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Entity/RegularStatus.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Entity/RegularStatus.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Eccube\\Entity\\Master\\AbstractMasterEntity;

/**
 * RegularStatus
 *
 * @ORM\\Table(name=\"plg_eccube_payment_lite42_regular_status\")
 * @ORM\\Entity(repositoryClass=\"Plugin\\EccubePaymentLite42\\Repository\\RegularStatusRepository\")
 * @ORM\\InheritanceType(\"SINGLE_TABLE\")
 * @ORM\\DiscriminatorColumn(name=\"discriminator_type\", type=\"string\", length=255)
 * @ORM\\HasLifecycleCallbacks()
 * @ORM\\Cache(usage=\"NONSTRICT_READ_WRITE\")
 */
class RegularStatus extends AbstractMasterEntity
{
    /** 継続 */
    const CONTINUE = 1;
    /** 解約 */
    const CANCELLATION = 2;
    /** 休止 */
    const SUSPEND = 3;
    /** 決済エラー */
    const PAYMENT_ERROR = 4;
    /** システムエラー */
    const SYSTEM_ERROR = 5;
    /** 再決済待ち */
    const WAITING_RE_PAYMENT = 6;
    /** 解約（再開可能期限切れ） */
    const CANCELLATION_EXPIRED_RESUMPTION = 7;

    const CONTINUE_NAME = '継続';
    const CANCELLATION_NAME = '解約';
    const SUSPEND_NAME = '休止';
    const PAYMENT_ERROR_NAME = '決済エラー';
    const SYSTEM_ERROR_NAME = 'システムエラー';
    const WAITING_RE_PAYMENT_NAME = '再決済待ち';
    const CANCELLATION_EXPIRED_RESUMPTION_NAME = '解約（再開可能期限切れ）';
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
        return "EccubePaymentLite42/Entity/RegularStatus.php";
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
use Eccube\\Entity\\Master\\AbstractMasterEntity;

/**
 * RegularStatus
 *
 * @ORM\\Table(name=\"plg_eccube_payment_lite42_regular_status\")
 * @ORM\\Entity(repositoryClass=\"Plugin\\EccubePaymentLite42\\Repository\\RegularStatusRepository\")
 * @ORM\\InheritanceType(\"SINGLE_TABLE\")
 * @ORM\\DiscriminatorColumn(name=\"discriminator_type\", type=\"string\", length=255)
 * @ORM\\HasLifecycleCallbacks()
 * @ORM\\Cache(usage=\"NONSTRICT_READ_WRITE\")
 */
class RegularStatus extends AbstractMasterEntity
{
    /** 継続 */
    const CONTINUE = 1;
    /** 解約 */
    const CANCELLATION = 2;
    /** 休止 */
    const SUSPEND = 3;
    /** 決済エラー */
    const PAYMENT_ERROR = 4;
    /** システムエラー */
    const SYSTEM_ERROR = 5;
    /** 再決済待ち */
    const WAITING_RE_PAYMENT = 6;
    /** 解約（再開可能期限切れ） */
    const CANCELLATION_EXPIRED_RESUMPTION = 7;

    const CONTINUE_NAME = '継続';
    const CANCELLATION_NAME = '解約';
    const SUSPEND_NAME = '休止';
    const PAYMENT_ERROR_NAME = '決済エラー';
    const SYSTEM_ERROR_NAME = 'システムエラー';
    const WAITING_RE_PAYMENT_NAME = '再決済待ち';
    const CANCELLATION_EXPIRED_RESUMPTION_NAME = '解約（再開可能期限切れ）';
}
", "EccubePaymentLite42/Entity/RegularStatus.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Entity\\RegularStatus.php");
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
