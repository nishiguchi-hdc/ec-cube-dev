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

/* B2BConnector/Form/Extension/AdminShippingTypeExtension.php */
class __TwigTemplate_c5f438728557910fc0eeb1b662d5bc9b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Form/Extension/AdminShippingTypeExtension.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Form/Extension/AdminShippingTypeExtension.php"));

        // line 1
        echo "<?php

namespace Plugin\\B2BConnector\\Form\\Extension;

use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Entity\\Shipping;
use Eccube\\Form\\Type\\Admin\\ShippingType;
use Plugin\\B2BConnector\\Entity\\ShippingExt;
use Plugin\\B2BConnector\\Form\\Type\\Admin\\ShippingExtType;
use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

class AdminShippingTypeExtension extends AbstractTypeExtension
{
    public function __construct(private EntityManagerInterface \$em) {}

    public static function getExtendedTypes(): iterable
    {
        return [ShippingType::class];
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        // ① エンティティ側の NotBlank 回避（空なら既定値）
        \$builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent \$event) {
            /** @var Shipping|null \$S */
            \$S = \$event->getData();
            if (!\$S instanceof Shipping) return;

            \$S->getName01() ?: \$S->setName01('法人姓');
            \$S->getName02() ?: \$S->setName02('法人名');
            \$S->getKana01() ?: \$S->setKana01('ホウジンセイ');
            \$S->getKana02() ?: \$S->setKana02('ホウジンメイ');

            // ② shipping_ext を常時注入（単数/複数どちらでも効く）
            \$ext = \$this->em->getRepository(ShippingExt::class)
                ->findOneBy(['Shipping' => \$S]) ?? (new ShippingExt())->setShipping(\$S);

            \$event->getForm()->add('shipping_ext', ShippingExtType::class, [
                'data'   => \$ext,
                'mapped' => false,
            ]);
        });

        // ★追加：POST_SUBMIT で shipping_ext を persist（flush は親に任せる）
        \$builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent \$event) {
            \$form = \$event->getForm();
            \$S = \$event->getData();
            if (!\$S instanceof Shipping) return;

            if (\$form->has('shipping_ext')) {
                \$ext = \$form->get('shipping_ext')->getData();
                if (\$ext instanceof ShippingExt) {
                    \$ext->setShipping(\$S);
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
        return "B2BConnector/Form/Extension/AdminShippingTypeExtension.php";
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
use Eccube\\Entity\\Shipping;
use Eccube\\Form\\Type\\Admin\\ShippingType;
use Plugin\\B2BConnector\\Entity\\ShippingExt;
use Plugin\\B2BConnector\\Form\\Type\\Admin\\ShippingExtType;
use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

class AdminShippingTypeExtension extends AbstractTypeExtension
{
    public function __construct(private EntityManagerInterface \$em) {}

    public static function getExtendedTypes(): iterable
    {
        return [ShippingType::class];
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        // ① エンティティ側の NotBlank 回避（空なら既定値）
        \$builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent \$event) {
            /** @var Shipping|null \$S */
            \$S = \$event->getData();
            if (!\$S instanceof Shipping) return;

            \$S->getName01() ?: \$S->setName01('法人姓');
            \$S->getName02() ?: \$S->setName02('法人名');
            \$S->getKana01() ?: \$S->setKana01('ホウジンセイ');
            \$S->getKana02() ?: \$S->setKana02('ホウジンメイ');

            // ② shipping_ext を常時注入（単数/複数どちらでも効く）
            \$ext = \$this->em->getRepository(ShippingExt::class)
                ->findOneBy(['Shipping' => \$S]) ?? (new ShippingExt())->setShipping(\$S);

            \$event->getForm()->add('shipping_ext', ShippingExtType::class, [
                'data'   => \$ext,
                'mapped' => false,
            ]);
        });

        // ★追加：POST_SUBMIT で shipping_ext を persist（flush は親に任せる）
        \$builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent \$event) {
            \$form = \$event->getForm();
            \$S = \$event->getData();
            if (!\$S instanceof Shipping) return;

            if (\$form->has('shipping_ext')) {
                \$ext = \$form->get('shipping_ext')->getData();
                if (\$ext instanceof ShippingExt) {
                    \$ext->setShipping(\$S);
                    \$this->em->persist(\$ext);
                }
            }
        });
    }
}
", "B2BConnector/Form/Extension/AdminShippingTypeExtension.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\B2BConnector\\Form\\Extension\\AdminShippingTypeExtension.php");
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
