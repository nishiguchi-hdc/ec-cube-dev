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

/* EccubePaymentLite42/Entity/PaymentStatus.php */
class __TwigTemplate_00cf1e0280b22eaed98f08e143b732bf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Entity/PaymentStatus.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Entity/PaymentStatus.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Eccube\\Entity\\Master\\AbstractMasterEntity;

/**
 * @ORM\\Table(name=\"plg_eccube_payment_lite42_payment_status\")
 * @ORM\\Entity(repositoryClass=\"Plugin\\EccubePaymentLite42\\Repository\\PaymentStatusRepository\")
 * @ORM\\InheritanceType(\"SINGLE_TABLE\")
 * @ORM\\DiscriminatorColumn(name=\"discriminator_type\", type=\"string\", length=255)
 * @ORM\\HasLifecycleCallbacks()
 * @ORM\\Cache(usage=\"NONSTRICT_READ_WRITE\")
 */
class PaymentStatus extends AbstractMasterEntity
{
    /**
     * 未課金
     * 決済がまだ完了していない状態、
     * または決済を最後まで完了せずに決済をやめた状態、
     * およびなんらかの原因で決済登録が失敗している可能性がある状態
     */
    const UNPAID = 0;

    /**
     * 課金済み
     * 購入者による支払いが完了した状態
     */
    const CHARGED = 1;

    /**
     * 審査中
     * GMO後払いにおいて、リアルタイム与信で審査ができなかった状態
     */
    const UNDER_REVIEW = 4;

    /**
     * 仮売上
     * クレジットカードの与信審査がOKとなった状態
     */
    const TEMPORARY_SALES = 5;

    /**
     * 出荷登録中
     * GMO後払いにおいて、出荷登録が完了した状態
     */
    const SHIPPING_REGISTRATION = 6;

    /** キャンセル */
    const CANCEL = 9;

    /**
     * 審査NG
     * GMO後払いにおいて、審査が通らなかった状態
     */
    const EXAMINATION_NG = 11;
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
        return "EccubePaymentLite42/Entity/PaymentStatus.php";
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
 * @ORM\\Table(name=\"plg_eccube_payment_lite42_payment_status\")
 * @ORM\\Entity(repositoryClass=\"Plugin\\EccubePaymentLite42\\Repository\\PaymentStatusRepository\")
 * @ORM\\InheritanceType(\"SINGLE_TABLE\")
 * @ORM\\DiscriminatorColumn(name=\"discriminator_type\", type=\"string\", length=255)
 * @ORM\\HasLifecycleCallbacks()
 * @ORM\\Cache(usage=\"NONSTRICT_READ_WRITE\")
 */
class PaymentStatus extends AbstractMasterEntity
{
    /**
     * 未課金
     * 決済がまだ完了していない状態、
     * または決済を最後まで完了せずに決済をやめた状態、
     * およびなんらかの原因で決済登録が失敗している可能性がある状態
     */
    const UNPAID = 0;

    /**
     * 課金済み
     * 購入者による支払いが完了した状態
     */
    const CHARGED = 1;

    /**
     * 審査中
     * GMO後払いにおいて、リアルタイム与信で審査ができなかった状態
     */
    const UNDER_REVIEW = 4;

    /**
     * 仮売上
     * クレジットカードの与信審査がOKとなった状態
     */
    const TEMPORARY_SALES = 5;

    /**
     * 出荷登録中
     * GMO後払いにおいて、出荷登録が完了した状態
     */
    const SHIPPING_REGISTRATION = 6;

    /** キャンセル */
    const CANCEL = 9;

    /**
     * 審査NG
     * GMO後払いにおいて、審査が通らなかった状態
     */
    const EXAMINATION_NG = 11;
}
", "EccubePaymentLite42/Entity/PaymentStatus.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Entity\\PaymentStatus.php");
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
