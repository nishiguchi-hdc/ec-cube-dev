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

/* EccubePaymentLite42/Form/Extension/Admin/ProductTypeExtension.php */
class __TwigTemplate_3efc0111e6dae87a0a24a615f7200b7b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Form/Extension/Admin/ProductTypeExtension.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Form/Extension/Admin/ProductTypeExtension.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Form\\Extension\\Admin;

use Doctrine\\ORM\\EntityRepository;
use Eccube\\Entity\\Category;
use Eccube\\Entity\\Delivery;
use Eccube\\Entity\\Master\\SaleType;
use Eccube\\Entity\\Payment;
use Eccube\\Form\\Type\\Admin\\ProductClassType;
use Eccube\\Form\\Type\\Admin\\ProductType;
use Eccube\\Form\\Type\\Master\\PaymentType;
use Eccube\\Form\\Type\\Master\\ProductStatusType;
use Eccube\\Form\\Validator\\TwigLint;
use Eccube\\Repository\\Master\\SaleTypeRepository;
use Eccube\\Service\\Payment\\Method\\Cash;
use Plugin\\EccubePaymentLite42\\Entity\\DeliveryCompany;
use Plugin\\EccubePaymentLite42\\Entity\\RegularCycle;
use Plugin\\EccubePaymentLite42\\Service\\Method\\Credit;
use Plugin\\EccubePaymentLite42\\Service\\Method\\Reg_Credit;
use Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType;
use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\Form;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

class ProductTypeExtension extends AbstractTypeExtension
{
    /**
     * @var SaleTypeRepository
     */
    private \$saleTypeRepository;

    public function __construct(
        SaleTypeRepository \$saleTypeRepository
    ) {
        \$this->saleTypeRepository = \$saleTypeRepository;
    }


    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            // 分量に関するフリー記述
            ->add('free_description_about_quantity', TextareaType::class, [
                'required' => false,
                'constraints' => [
                    new TwigLint(),
                ],
            ])
            // 販売価格に関するフリー記述
            ->add('free_description_about_selling_price', TextareaType::class, [
                'required' => false,
                'constraints' => [
                    new TwigLint(),
                ],
            ])
            // お支払い・引き渡しに関するフリー記述
            ->add('free_description_of_payment_delivery', TextareaType::class, [
                'required' => false,
                'constraints' => [
                    new TwigLint(),
                ],
            ])
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getExtendedType()
    {
        return ProductType::class;
    }

    /**
     * Return the class of the type being extended.
     */
    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class];
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
        return "EccubePaymentLite42/Form/Extension/Admin/ProductTypeExtension.php";
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

use Doctrine\\ORM\\EntityRepository;
use Eccube\\Entity\\Category;
use Eccube\\Entity\\Delivery;
use Eccube\\Entity\\Master\\SaleType;
use Eccube\\Entity\\Payment;
use Eccube\\Form\\Type\\Admin\\ProductClassType;
use Eccube\\Form\\Type\\Admin\\ProductType;
use Eccube\\Form\\Type\\Master\\PaymentType;
use Eccube\\Form\\Type\\Master\\ProductStatusType;
use Eccube\\Form\\Validator\\TwigLint;
use Eccube\\Repository\\Master\\SaleTypeRepository;
use Eccube\\Service\\Payment\\Method\\Cash;
use Plugin\\EccubePaymentLite42\\Entity\\DeliveryCompany;
use Plugin\\EccubePaymentLite42\\Entity\\RegularCycle;
use Plugin\\EccubePaymentLite42\\Service\\Method\\Credit;
use Plugin\\EccubePaymentLite42\\Service\\Method\\Reg_Credit;
use Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType;
use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\Form;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

class ProductTypeExtension extends AbstractTypeExtension
{
    /**
     * @var SaleTypeRepository
     */
    private \$saleTypeRepository;

    public function __construct(
        SaleTypeRepository \$saleTypeRepository
    ) {
        \$this->saleTypeRepository = \$saleTypeRepository;
    }


    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            // 分量に関するフリー記述
            ->add('free_description_about_quantity', TextareaType::class, [
                'required' => false,
                'constraints' => [
                    new TwigLint(),
                ],
            ])
            // 販売価格に関するフリー記述
            ->add('free_description_about_selling_price', TextareaType::class, [
                'required' => false,
                'constraints' => [
                    new TwigLint(),
                ],
            ])
            // お支払い・引き渡しに関するフリー記述
            ->add('free_description_of_payment_delivery', TextareaType::class, [
                'required' => false,
                'constraints' => [
                    new TwigLint(),
                ],
            ])
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getExtendedType()
    {
        return ProductType::class;
    }

    /**
     * Return the class of the type being extended.
     */
    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class];
    }

}
", "EccubePaymentLite42/Form/Extension/Admin/ProductTypeExtension.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Form\\Extension\\Admin\\ProductTypeExtension.php");
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
