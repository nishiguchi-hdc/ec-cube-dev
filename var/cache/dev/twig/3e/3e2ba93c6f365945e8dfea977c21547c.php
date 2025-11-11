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

/* B2BConnector/Form/Extension/CustomerAddressTypeExtension.php */
class __TwigTemplate_43d56f6c054348ac3ea235b894454832 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Form/Extension/CustomerAddressTypeExtension.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Form/Extension/CustomerAddressTypeExtension.php"));

        // line 1
        echo "<?php

namespace Plugin\\B2BConnector\\Form\\Extension;

use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Entity\\CustomerAddress;
use Eccube\\Form\\Type\\Front\\CustomerAddressType as FrontCustomerAddressType;
use Eccube\\Form\\Type\\Shopping\\CustomerAddressType as ShoppingCustomerAddressType;
use Plugin\\B2BConnector\\Entity\\CustomerAddressExt;
use Plugin\\B2BConnector\\Form\\Type\\Admin\\CustomerAddressExtType; // Ext 用 Type（既存のもの）
use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

class CustomerAddressTypeExtension extends AbstractTypeExtension
{
    public function __construct(private EntityManagerInterface \$em) {}

    // フロント用・購入フロー用の両方を拡張対象にする
    public static function getExtendedTypes(): iterable
    {
        return [FrontCustomerAddressType::class, ShoppingCustomerAddressType::class];
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        // 常時、生やす（管理画面限定の判定は撤廃）
        \$builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent \$event) {
            \$Address = \$event->getData();
            if (!\$Address instanceof CustomerAddress) return;

            // 氏名/カナが空なら B2B 用の既定値で補完（Twigは.d-noneで非表示OK）
            \$Address->getName01() ?: \$Address->setName01('法人姓');
            \$Address->getName02() ?: \$Address->setName02('法人名');
            \$Address->getKana01() ?: \$Address->setKana01('ホウジンセイ');
            \$Address->getKana02() ?: \$Address->setKana02('ホウジンメイ');

            \$ext = \$this->em->getRepository(CustomerAddressExt::class)
                ->findOneBy(['CustomerAddress' => \$Address])
                ?? (new CustomerAddressExt())->setCustomerAddress(\$Address);

            // 2層目: form.customer_address_ext
            \$event->getForm()->add('customer_address_ext', CustomerAddressExtType::class, [
                'data'   => \$ext,
                'mapped' => false,
            ]);
        });

        // 保存：persist のみ（flush は各画面の既存処理に委ねる）
        \$builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent \$event) {
            \$form = \$event->getForm();
            \$Address = \$event->getData();
            if (!\$Address instanceof CustomerAddress) return;

            if (\$form->has('customer_address_ext')) {
                \$ext = \$form->get('customer_address_ext')->getData();
                if (\$ext instanceof CustomerAddressExt) {
                    \$ext->setCustomerAddress(\$Address);
                    \$this->em->persist(\$ext);
                }
            }
        });
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
        return "B2BConnector/Form/Extension/CustomerAddressTypeExtension.php";
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

namespace Plugin\\B2BConnector\\Form\\Extension;

use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Entity\\CustomerAddress;
use Eccube\\Form\\Type\\Front\\CustomerAddressType as FrontCustomerAddressType;
use Eccube\\Form\\Type\\Shopping\\CustomerAddressType as ShoppingCustomerAddressType;
use Plugin\\B2BConnector\\Entity\\CustomerAddressExt;
use Plugin\\B2BConnector\\Form\\Type\\Admin\\CustomerAddressExtType; // Ext 用 Type（既存のもの）
use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

class CustomerAddressTypeExtension extends AbstractTypeExtension
{
    public function __construct(private EntityManagerInterface \$em) {}

    // フロント用・購入フロー用の両方を拡張対象にする
    public static function getExtendedTypes(): iterable
    {
        return [FrontCustomerAddressType::class, ShoppingCustomerAddressType::class];
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        // 常時、生やす（管理画面限定の判定は撤廃）
        \$builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent \$event) {
            \$Address = \$event->getData();
            if (!\$Address instanceof CustomerAddress) return;

            // 氏名/カナが空なら B2B 用の既定値で補完（Twigは.d-noneで非表示OK）
            \$Address->getName01() ?: \$Address->setName01('法人姓');
            \$Address->getName02() ?: \$Address->setName02('法人名');
            \$Address->getKana01() ?: \$Address->setKana01('ホウジンセイ');
            \$Address->getKana02() ?: \$Address->setKana02('ホウジンメイ');

            \$ext = \$this->em->getRepository(CustomerAddressExt::class)
                ->findOneBy(['CustomerAddress' => \$Address])
                ?? (new CustomerAddressExt())->setCustomerAddress(\$Address);

            // 2層目: form.customer_address_ext
            \$event->getForm()->add('customer_address_ext', CustomerAddressExtType::class, [
                'data'   => \$ext,
                'mapped' => false,
            ]);
        });

        // 保存：persist のみ（flush は各画面の既存処理に委ねる）
        \$builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent \$event) {
            \$form = \$event->getForm();
            \$Address = \$event->getData();
            if (!\$Address instanceof CustomerAddress) return;

            if (\$form->has('customer_address_ext')) {
                \$ext = \$form->get('customer_address_ext')->getData();
                if (\$ext instanceof CustomerAddressExt) {
                    \$ext->setCustomerAddress(\$Address);
                    \$this->em->persist(\$ext);
                }
            }
        });
    }
}
", "B2BConnector/Form/Extension/CustomerAddressTypeExtension.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\B2BConnector\\Form\\Extension\\CustomerAddressTypeExtension.php");
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
