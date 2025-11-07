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

/* EccubePaymentLite42/Entity/DeliveryCompany.php */
class __TwigTemplate_1f737491a399765c3d0eccff1d6a86b9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Entity/DeliveryCompany.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Entity/DeliveryCompany.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Eccube\\Entity\\Master\\AbstractMasterEntity;

/**
 * @ORM\\Table(name=\"plg_eccube_payment_lite42_delivery_company\")
 * @ORM\\Entity(repositoryClass=\"Plugin\\EccubePaymentLite42\\Repository\\DeliveryCompanyRepository\")
 * @ORM\\InheritanceType(\"SINGLE_TABLE\")
 * @ORM\\DiscriminatorColumn(name=\"discriminator_type\", type=\"string\", length=255)
 * @ORM\\HasLifecycleCallbacks()
 * @ORM\\Cache(usage=\"NONSTRICT_READ_WRITE\")
 */
class DeliveryCompany extends AbstractMasterEntity
{
    const SAGAWA = 11;
    const SAGAWA_NAME = '佐川急便';

    const YAMATO = 12;
    const YAMATO_NAME = 'ヤマト運輸・ネコポス・宅急便コンパクト・クロネコDM便';

    const SEINO = 14;
    const SEINO_NAME = '西濃運輸';

    const REGISTERED_MAIL__SPECIFIC_RECORD_MAIL = 15;
    const REGISTERED_MAIL__SPECIFIC_RECORD_MAIL_NAME = '郵便書留・特定記録郵便';

    const YUPACK__EXPACK__POST_PACKET = 16;
    const YUPACK__EXPACK__POST_PACKET_NAME = 'ゆうパック・エクスパック・ポスパケット';

    const FUKUYAMA = 18;
    const FUKUYAMA_NAME = '福山通運';

    const ECOHAI = 27;
    const ECOHAI_NAME = 'エコ配';

    const TEN_FLIGHT__LETTER_PACK__NEW_LIMITED_EXPRESS_MAIL__YU_PACKET = 28;
    const TEN_FLIGHT__LETTER_PACK__NEW_LIMITED_EXPRESS_MAIL__YU_PACKET_NAME = '翌朝10時便・レターパック・新特急郵便・ゆうパケット';
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
        return "EccubePaymentLite42/Entity/DeliveryCompany.php";
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
 * @ORM\\Table(name=\"plg_eccube_payment_lite42_delivery_company\")
 * @ORM\\Entity(repositoryClass=\"Plugin\\EccubePaymentLite42\\Repository\\DeliveryCompanyRepository\")
 * @ORM\\InheritanceType(\"SINGLE_TABLE\")
 * @ORM\\DiscriminatorColumn(name=\"discriminator_type\", type=\"string\", length=255)
 * @ORM\\HasLifecycleCallbacks()
 * @ORM\\Cache(usage=\"NONSTRICT_READ_WRITE\")
 */
class DeliveryCompany extends AbstractMasterEntity
{
    const SAGAWA = 11;
    const SAGAWA_NAME = '佐川急便';

    const YAMATO = 12;
    const YAMATO_NAME = 'ヤマト運輸・ネコポス・宅急便コンパクト・クロネコDM便';

    const SEINO = 14;
    const SEINO_NAME = '西濃運輸';

    const REGISTERED_MAIL__SPECIFIC_RECORD_MAIL = 15;
    const REGISTERED_MAIL__SPECIFIC_RECORD_MAIL_NAME = '郵便書留・特定記録郵便';

    const YUPACK__EXPACK__POST_PACKET = 16;
    const YUPACK__EXPACK__POST_PACKET_NAME = 'ゆうパック・エクスパック・ポスパケット';

    const FUKUYAMA = 18;
    const FUKUYAMA_NAME = '福山通運';

    const ECOHAI = 27;
    const ECOHAI_NAME = 'エコ配';

    const TEN_FLIGHT__LETTER_PACK__NEW_LIMITED_EXPRESS_MAIL__YU_PACKET = 28;
    const TEN_FLIGHT__LETTER_PACK__NEW_LIMITED_EXPRESS_MAIL__YU_PACKET_NAME = '翌朝10時便・レターパック・新特急郵便・ゆうパケット';
}
", "EccubePaymentLite42/Entity/DeliveryCompany.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Entity\\DeliveryCompany.php");
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
