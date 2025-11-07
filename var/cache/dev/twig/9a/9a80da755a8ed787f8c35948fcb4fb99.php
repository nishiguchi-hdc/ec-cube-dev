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

/* EccubePaymentLite42/Form/Extension/Admin/ProductClassTypeExtension.php */
class __TwigTemplate_d3e00f171d5d4b07b1afca53fe616e50 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Form/Extension/Admin/ProductClassTypeExtension.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Form/Extension/Admin/ProductClassTypeExtension.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Form\\Extension\\Admin;

use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Entity\\ProductClass;
use Eccube\\Form\\Type\\Admin\\ProductClassType;
use Plugin\\EccubePaymentLite42\\Entity\\ProductClassRegularCycle;
use Plugin\\EccubePaymentLite42\\Entity\\RegularCycle;
use Plugin\\EccubePaymentLite42\\Repository\\RegularDiscountRepository;
use Plugin\\EccubePaymentLite42\\Service\\IsExistRegularOrderWithRegularCyclesToBeDeleted;
use Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType;
use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Form;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

class ProductClassTypeExtension extends AbstractTypeExtension
{
    /**
     * @var EntityManagerInterface
     */
    private \$entityManager;
    /**
     * @var IsExistRegularOrderWithRegularCyclesToBeDeleted
     */
    private \$isExistRegularOrderWithRegularCyclesToBeDeleted;
    /**
     * @var RegularDiscountRepository
     */
    private \$regularDiscountRepository;

    public function __construct(
        EntityManagerInterface \$entityManager,
        IsExistRegularOrderWithRegularCyclesToBeDeleted \$isExistRegularOrderWithRegularCyclesToBeDeleted,
        RegularDiscountRepository \$regularDiscountRepository
    ) {
        \$this->entityManager = \$entityManager;
        \$this->isExistRegularOrderWithRegularCyclesToBeDeleted = \$isExistRegularOrderWithRegularCyclesToBeDeleted;
        \$this->regularDiscountRepository = \$regularDiscountRepository;
    }

    /**
     * {@inheritdoc}
     */
    public function getExtendedType()
    {
        return ProductClassType::class;
    }

    /**
     * Return the class of the type being extended.
     */
    public static function getExtendedTypes(): iterable
    {
        return [ProductClassType::class];
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder->add('RegularDiscount', ChoiceType::class, [
            'choices' => array_flip(\$this->regularDiscountRepository->getRegularDiscountsChoices()),
            'required' => false,
            'placeholder' => '選択してください',
            'mapped' => false,
        ]);

        \$builder
            ->addEventListener(
                FormEvents::POST_SET_DATA,
                [\$this, 'setRegularCycleData']
            )
            ->addEventListener(
                FormEvents::POST_SET_DATA,
                [\$this, 'setRegularDiscountData']
            )
            ->addEventListener(
                FormEvents::POST_SUBMIT,
                [\$this, 'validateProductClassRegularCycle']
            )
            ->addEventListener(
                FormEvents::POST_SUBMIT,
                [\$this, 'setProductClassRegularCycle']
            )
            ->addEventListener(
                FormEvents::POST_SUBMIT,
                [\$this, 'setRegularDiscount']
            );
    }

    public function setRegularDiscountData(FormEvent \$event)
    {
        /** @var Form \$form */
        \$form = \$event->getForm();
        /** @var ProductClass \$ProductClass */
        \$ProductClass = \$event->getData();
        if (is_null(\$ProductClass)) {
            return;
        }
        \$form['RegularDiscount']->setData(\$ProductClass->getRegularDiscount());
    }

    public function setRegularCycleData(FormEvent \$event)
    {
        /** @var Form \$form */
        \$form = \$event->getForm();
        /** @var ProductClass \$ProductClass */
        \$ProductClass = \$event->getData();
        if (is_null(\$ProductClass)) {
            return;
        }
        \$form
            ->add('RegularCycle', EntityType::class, [
                'class' => RegularCycle::class,
                'expanded' => true,
                'multiple' => true,
                'required' => false,
                'mapped' => false,
                'query_builder' => function (\$er) {
                    return \$er->createQueryBuilder('rc')
                        ->orderBy('rc.sort_no', 'DESC');
                },
            ]);
        \$form['RegularCycle']->setData(\$ProductClass->getRegularCycle());
    }

    public function validateProductClassRegularCycle(FormEvent \$event)
    {
        /** @var Form \$form */
        \$form = \$event->getForm();
        if (\$form['sale_type']->getData()->getName() === '定期商品' && empty(\$form['RegularCycle']->getData())) {
            \$form['RegularCycle']->addError(new FormError('定期サイクルは必須入力です。'));

            return;
        }
        if (\$this->isExistRegularOrderWithRegularCyclesToBeDeleted->isExist(
            \$event->getData()->getRegularCycle(),
            \$form['RegularCycle']->getData()
        )) {
            \$form['RegularCycle']->addError(new FormError('「解約」以外の定期ステータスの定期受注が存在するため、定期サイクルを解除出来ません。'));
        }
    }

    public function setProductClassRegularCycle(FormEvent \$event)
    {
        /** @var Form \$form */
        \$form = \$event->getForm();
        /** @var ProductClass \$ProductClass */
        \$ProductClass = \$event->getData();
        foreach (\$ProductClass->getProductClassRegularCycle() as \$ProductClassRegularCycle) {
            \$ProductClass->removeProductClassRegularCycle(\$ProductClassRegularCycle);
            \$this->entityManager->remove(\$ProductClassRegularCycle);
        }
        \$RegularCycles = \$form['RegularCycle']->getData();
        foreach (\$RegularCycles as \$RegularCycle) {
            /** @var RegularCycle \$RegularCycle */
            \$ProductClassRegularCycle = new ProductClassRegularCycle();
            \$ProductClassRegularCycle
                ->setProductClass(\$ProductClass)
                ->setRegularCycle(\$RegularCycle);
            \$ProductClass->addProductClassRegularCycle(\$ProductClassRegularCycle);
        }
    }

    public function setRegularDiscount(FormEvent \$event)
    {
        /** @var Form \$form */
        \$form = \$event->getForm();
        /** @var ProductClass \$ProductClass */
        \$ProductClass = \$event->getData();
        \$RegularDiscountId = \$form['RegularDiscount']->getData();
        \$RegularDiscount = \$this->regularDiscountRepository->findOneBy([
            'discount_id' => \$RegularDiscountId,
        ]);
        \$ProductClass->setRegularDiscount(\$RegularDiscount);
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
        return "EccubePaymentLite42/Form/Extension/Admin/ProductClassTypeExtension.php";
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

namespace Plugin\\EccubePaymentLite42\\Form\\Extension\\Admin;

use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Entity\\ProductClass;
use Eccube\\Form\\Type\\Admin\\ProductClassType;
use Plugin\\EccubePaymentLite42\\Entity\\ProductClassRegularCycle;
use Plugin\\EccubePaymentLite42\\Entity\\RegularCycle;
use Plugin\\EccubePaymentLite42\\Repository\\RegularDiscountRepository;
use Plugin\\EccubePaymentLite42\\Service\\IsExistRegularOrderWithRegularCyclesToBeDeleted;
use Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType;
use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Form;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

class ProductClassTypeExtension extends AbstractTypeExtension
{
    /**
     * @var EntityManagerInterface
     */
    private \$entityManager;
    /**
     * @var IsExistRegularOrderWithRegularCyclesToBeDeleted
     */
    private \$isExistRegularOrderWithRegularCyclesToBeDeleted;
    /**
     * @var RegularDiscountRepository
     */
    private \$regularDiscountRepository;

    public function __construct(
        EntityManagerInterface \$entityManager,
        IsExistRegularOrderWithRegularCyclesToBeDeleted \$isExistRegularOrderWithRegularCyclesToBeDeleted,
        RegularDiscountRepository \$regularDiscountRepository
    ) {
        \$this->entityManager = \$entityManager;
        \$this->isExistRegularOrderWithRegularCyclesToBeDeleted = \$isExistRegularOrderWithRegularCyclesToBeDeleted;
        \$this->regularDiscountRepository = \$regularDiscountRepository;
    }

    /**
     * {@inheritdoc}
     */
    public function getExtendedType()
    {
        return ProductClassType::class;
    }

    /**
     * Return the class of the type being extended.
     */
    public static function getExtendedTypes(): iterable
    {
        return [ProductClassType::class];
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder->add('RegularDiscount', ChoiceType::class, [
            'choices' => array_flip(\$this->regularDiscountRepository->getRegularDiscountsChoices()),
            'required' => false,
            'placeholder' => '選択してください',
            'mapped' => false,
        ]);

        \$builder
            ->addEventListener(
                FormEvents::POST_SET_DATA,
                [\$this, 'setRegularCycleData']
            )
            ->addEventListener(
                FormEvents::POST_SET_DATA,
                [\$this, 'setRegularDiscountData']
            )
            ->addEventListener(
                FormEvents::POST_SUBMIT,
                [\$this, 'validateProductClassRegularCycle']
            )
            ->addEventListener(
                FormEvents::POST_SUBMIT,
                [\$this, 'setProductClassRegularCycle']
            )
            ->addEventListener(
                FormEvents::POST_SUBMIT,
                [\$this, 'setRegularDiscount']
            );
    }

    public function setRegularDiscountData(FormEvent \$event)
    {
        /** @var Form \$form */
        \$form = \$event->getForm();
        /** @var ProductClass \$ProductClass */
        \$ProductClass = \$event->getData();
        if (is_null(\$ProductClass)) {
            return;
        }
        \$form['RegularDiscount']->setData(\$ProductClass->getRegularDiscount());
    }

    public function setRegularCycleData(FormEvent \$event)
    {
        /** @var Form \$form */
        \$form = \$event->getForm();
        /** @var ProductClass \$ProductClass */
        \$ProductClass = \$event->getData();
        if (is_null(\$ProductClass)) {
            return;
        }
        \$form
            ->add('RegularCycle', EntityType::class, [
                'class' => RegularCycle::class,
                'expanded' => true,
                'multiple' => true,
                'required' => false,
                'mapped' => false,
                'query_builder' => function (\$er) {
                    return \$er->createQueryBuilder('rc')
                        ->orderBy('rc.sort_no', 'DESC');
                },
            ]);
        \$form['RegularCycle']->setData(\$ProductClass->getRegularCycle());
    }

    public function validateProductClassRegularCycle(FormEvent \$event)
    {
        /** @var Form \$form */
        \$form = \$event->getForm();
        if (\$form['sale_type']->getData()->getName() === '定期商品' && empty(\$form['RegularCycle']->getData())) {
            \$form['RegularCycle']->addError(new FormError('定期サイクルは必須入力です。'));

            return;
        }
        if (\$this->isExistRegularOrderWithRegularCyclesToBeDeleted->isExist(
            \$event->getData()->getRegularCycle(),
            \$form['RegularCycle']->getData()
        )) {
            \$form['RegularCycle']->addError(new FormError('「解約」以外の定期ステータスの定期受注が存在するため、定期サイクルを解除出来ません。'));
        }
    }

    public function setProductClassRegularCycle(FormEvent \$event)
    {
        /** @var Form \$form */
        \$form = \$event->getForm();
        /** @var ProductClass \$ProductClass */
        \$ProductClass = \$event->getData();
        foreach (\$ProductClass->getProductClassRegularCycle() as \$ProductClassRegularCycle) {
            \$ProductClass->removeProductClassRegularCycle(\$ProductClassRegularCycle);
            \$this->entityManager->remove(\$ProductClassRegularCycle);
        }
        \$RegularCycles = \$form['RegularCycle']->getData();
        foreach (\$RegularCycles as \$RegularCycle) {
            /** @var RegularCycle \$RegularCycle */
            \$ProductClassRegularCycle = new ProductClassRegularCycle();
            \$ProductClassRegularCycle
                ->setProductClass(\$ProductClass)
                ->setRegularCycle(\$RegularCycle);
            \$ProductClass->addProductClassRegularCycle(\$ProductClassRegularCycle);
        }
    }

    public function setRegularDiscount(FormEvent \$event)
    {
        /** @var Form \$form */
        \$form = \$event->getForm();
        /** @var ProductClass \$ProductClass */
        \$ProductClass = \$event->getData();
        \$RegularDiscountId = \$form['RegularDiscount']->getData();
        \$RegularDiscount = \$this->regularDiscountRepository->findOneBy([
            'discount_id' => \$RegularDiscountId,
        ]);
        \$ProductClass->setRegularDiscount(\$RegularDiscount);
    }
}
", "EccubePaymentLite42/Form/Extension/Admin/ProductClassTypeExtension.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Form\\Extension\\Admin\\ProductClassTypeExtension.php");
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
