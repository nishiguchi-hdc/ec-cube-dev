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

/* B2BConnector/Form/Extension/AdminCustomerTypeExtension.php */
class __TwigTemplate_966ff0fa129255590abf927f12827d16 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Form/Extension/AdminCustomerTypeExtension.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Form/Extension/AdminCustomerTypeExtension.php"));

        // line 1
        echo "<?php

namespace Plugin\\B2BConnector\\Form\\Extension;

use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Entity\\Customer;
use Eccube\\Form\\Type\\Admin\\CustomerType;
use Plugin\\B2BConnector\\Entity\\CustomerExt;
use Plugin\\B2BConnector\\Form\\Type\\Admin\\CustomerExtType;
use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

class AdminCustomerTypeExtension extends AbstractTypeExtension
{
    public function __construct(private EntityManagerInterface \$em) {}

    public static function getExtendedTypes(): iterable
    {
        return [CustomerType::class];
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        // 画面初期化時に NotBlank を満たす既定値注入＋ customer_ext を 2層目に追加
        \$builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent \$event) {
            /** @var Customer|null \$Customer */
            \$Customer = \$event->getData();
            if (!\$Customer instanceof Customer) return;

            // 氏名/カナが空なら B2B 用の既定値で補完（Twigは.d-noneで非表示OK）
            \$Customer->getName01() ?: \$Customer->setName01('法人姓');
            \$Customer->getName02() ?: \$Customer->setName02('法人名');
            \$Customer->getKana01() ?: \$Customer->setKana01('ホウジンセイ');
            \$Customer->getKana02() ?: \$Customer->setKana02('ホウジンメイ');

            // CustomerExt を取得 or 新規作成
            \$ext = \$this->em->getRepository(CustomerExt::class)
                ->findOneBy(['Customer' => \$Customer]) ?? (new CustomerExt())->setCustomer(\$Customer);

            // 2層目に常時追加（mapped:false）
            \$event->getForm()->add('customer_ext', CustomerExtType::class, [
                'data'   => \$ext,
                'mapped' => false,
            ]);
        });

        // 保存：自分の ext を persist して最後に flush
        \$builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent \$e) {
            \$form = \$e->getForm();
            \$Customer = \$e->getData(); if (!\$Customer instanceof Customer) return;

            if (\$form->has('customer_ext')) {
                \$ext = \$form->get('customer_ext')->getData();
                if (\$ext instanceof CustomerExt) {
                    \$ext->setCustomer(\$Customer);
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
        return "B2BConnector/Form/Extension/AdminCustomerTypeExtension.php";
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
use Eccube\\Entity\\Customer;
use Eccube\\Form\\Type\\Admin\\CustomerType;
use Plugin\\B2BConnector\\Entity\\CustomerExt;
use Plugin\\B2BConnector\\Form\\Type\\Admin\\CustomerExtType;
use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

class AdminCustomerTypeExtension extends AbstractTypeExtension
{
    public function __construct(private EntityManagerInterface \$em) {}

    public static function getExtendedTypes(): iterable
    {
        return [CustomerType::class];
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        // 画面初期化時に NotBlank を満たす既定値注入＋ customer_ext を 2層目に追加
        \$builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent \$event) {
            /** @var Customer|null \$Customer */
            \$Customer = \$event->getData();
            if (!\$Customer instanceof Customer) return;

            // 氏名/カナが空なら B2B 用の既定値で補完（Twigは.d-noneで非表示OK）
            \$Customer->getName01() ?: \$Customer->setName01('法人姓');
            \$Customer->getName02() ?: \$Customer->setName02('法人名');
            \$Customer->getKana01() ?: \$Customer->setKana01('ホウジンセイ');
            \$Customer->getKana02() ?: \$Customer->setKana02('ホウジンメイ');

            // CustomerExt を取得 or 新規作成
            \$ext = \$this->em->getRepository(CustomerExt::class)
                ->findOneBy(['Customer' => \$Customer]) ?? (new CustomerExt())->setCustomer(\$Customer);

            // 2層目に常時追加（mapped:false）
            \$event->getForm()->add('customer_ext', CustomerExtType::class, [
                'data'   => \$ext,
                'mapped' => false,
            ]);
        });

        // 保存：自分の ext を persist して最後に flush
        \$builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent \$e) {
            \$form = \$e->getForm();
            \$Customer = \$e->getData(); if (!\$Customer instanceof Customer) return;

            if (\$form->has('customer_ext')) {
                \$ext = \$form->get('customer_ext')->getData();
                if (\$ext instanceof CustomerExt) {
                    \$ext->setCustomer(\$Customer);
                    \$this->em->persist(\$ext);
                }
            }
        });

    }
}
", "B2BConnector/Form/Extension/AdminCustomerTypeExtension.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\B2BConnector\\Form\\Extension\\AdminCustomerTypeExtension.php");
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
