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

/* EccubePaymentLite42/Form/Extension/Front/Shopping/OrderTypeExtension.php */
class __TwigTemplate_d77fd179e06ecb634af4826d5a9f8956 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Form/Extension/Front/Shopping/OrderTypeExtension.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Form/Extension/Front/Shopping/OrderTypeExtension.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Form\\Extension\\Front\\Shopping;

use Eccube\\Common\\EccubeConfig;
use Eccube\\Entity\\Order;
use Eccube\\Entity\\Shipping;
use Eccube\\Form\\Type\\Shopping\\OrderType;
use Eccube\\Repository\\PaymentRepository;
use Plugin\\EccubePaymentLite42\\Entity\\ConvenienceStore;
use Plugin\\EccubePaymentLite42\\Entity\\RegularCycle;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Repository\\RegularCycleRepository;
use Plugin\\EccubePaymentLite42\\Repository\\ConvenienceStoreRepository;
use Plugin\\EccubePaymentLite42\\Service\\GetProductClassesRegularCycles;
use Plugin\\EccubePaymentLite42\\Service\\GetRegularCyclesFromProductClassId;
use Plugin\\EccubePaymentLite42\\Service\\IsRegularPaymentService;
use Plugin\\EccubePaymentLite42\\Service\\Method\\Conveni;
use Plugin\\EccubePaymentLite42\\Service\\SaveRegularOrderService;
use Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType;
use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Form;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

class OrderTypeExtension extends AbstractTypeExtension
{
    /**
     * @var PaymentRepository
     */
    protected \$paymentRepository;
    protected \$eccubeConfig;
    protected \$gmoConfigRepository;

    /**
     * @var RegularCycleRepository
     */
    private \$regularCycleRepository;
    /**
     * @var IsRegularPaymentService
     */
    private \$isRegularPaymentService;
    /**
     * @var SaveRegularOrderService
     */
    private \$saveRegularOrderService;
    /**
     * @var GetRegularCyclesFromProductClassId
     */
    private \$getRegularCyclesFromProductClassId;
    /**
     * @var GetProductClassesRegularCycles
     */
    private \$getProductClassesRegularCycles;
    /**
     * @var ConvenienceStoreRepository
     */
    private \$convenienceStoreRepository;

    public function __construct(
        EccubeConfig \$eccubeConfig,
        PaymentRepository \$paymentRepository,
        ConfigRepository \$gmoConfigRepository,
        GetRegularCyclesFromProductClassId \$getRegularCyclesFromProductClassId,
        RegularCycleRepository \$regularCycleRepository,
        IsRegularPaymentService \$isRegularPaymentService,
        SaveRegularOrderService \$saveRegularOrderService,
        GetProductClassesRegularCycles \$getProductClassesRegularCycles,
        ConvenienceStoreRepository \$convenienceStoreRepository
    ) {
        \$this->paymentRepository = \$paymentRepository;
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->gmoConfigRepository = \$gmoConfigRepository;
        \$this->getRegularCyclesFromProductClassId = \$getRegularCyclesFromProductClassId;
        \$this->regularCycleRepository = \$regularCycleRepository;
        \$this->isRegularPaymentService = \$isRegularPaymentService;
        \$this->saveRegularOrderService = \$saveRegularOrderService;
        \$this->getProductClassesRegularCycles = \$getProductClassesRegularCycles;
        \$this->convenienceStoreRepository = \$convenienceStoreRepository;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            ->addEventListener(FormEvents::POST_SET_DATA, function (FormEvent \$event) {
                /** @var Order \$Order */
                \$Order = \$event->getData();
                \$form = \$event->getForm();

                if (!is_null(\$Order->getPayment())) {
                    if (Conveni::class !== \$Order->getPayment()->getMethodClass()) {
                        return;
                    }
                    // Get conveniences from config
                    \$Config = \$this->gmoConfigRepository->find(1);
                    \$arrConvenience = [];
                    \$useConveniences = \$Config->getConvenienceStores();
                    foreach (\$useConveniences as \$store) {
                        \$arrConvenience[] = \$store['id'];
                    }

                    // Get list convenience store  add to form builder
                    \$convenienceStore = \$this->convenienceStoreRepository->findBy(['id' => \$arrConvenience], [
                        'sort_no' => 'ASC',
                    ]);

                    \$message = trans('gmo_epsilon.admin.config.required');

                    if(empty(\$convenienceStore)){
                        \$message = trans(\"gmo_epsilon.front.shopping.use_conveni_not_fount\");
                    }

                    \$form->add('convenience', EntityType::class, [
                    'class' => ConvenienceStore::class,
                    'invalid_message' => \$message,
                    'expanded' => true,
                    'multiple' => false,
                    'choices' => \$convenienceStore,
                    'constraints' => [
                        new NotBlank(['message' => \$message]),
                    ],
                    'mapped' => false,
                ]);
                }
            })
            ->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent \$event) {
                \$form = \$event->getForm();
                /** @var Order \$Order */
                \$Order = \$event->getData();
                \$regularCycleChoices = \$this
                    ->getProductClassesRegularCycles
                    ->handle(\$Order);
                \$form
                    ->add('RegularCycles', ChoiceType::class, [
                        'choices' => \$regularCycleChoices,
                        'choice_value' => 'id',
                        'choice_label' => function (RegularCycle \$regularCycle) {
                            return \$regularCycle;
                        },
                        'expanded' => true,
                        'multiple' => false,
                        'mapped' => false,
                    ])
                ;
            })
        ;

        \$builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent \$event) {
            \$options = \$event->getForm()->getConfig()->getOptions();
            if (\$options['skip_add_form']) {
                return;
            }
            \$Payment = \$this->paymentRepository->findOneBy(['method_class' => Conveni::class]);
            \$data = \$event->getData();
            if (is_null(\$Payment)) {
                return;
            }
            if (\$Payment->getId() == \$data['Payment']) {
                return;
            }
            /** @var Form \$form */
            \$form = \$event->getForm();
            \$form->remove('convenience');
        });
        \$builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent \$event) {
            /** @var Order \$Order */
            \$Order = \$event->getData();
            if (!\$this->isRegularPaymentService->isRegularPayment(\$Order)) {
                return;
            }
            /** @var Shipping \$Shipping */
            \$Shipping = \$Order->getShippings()->first();
            if (\$Shipping->getDelivery()->getSaleType()->getName() !== '定期商品') {
                return;
            }
            if (is_null(\$event->getForm()['RegularCycles']->getData())) {
                return;
            }
            \$this
                ->saveRegularOrderService
                ->setRegularCycleIdInSession(
                    \$event->getForm()['RegularCycles']->getData()->getId()
                );
        });
    }

    /**
     * {@inheritdoc}
     */
    public function getExtendedType()
    {
        return OrderType::class;
    }

    /**
     * Return the class of the type being extended.
     */
    public static function getExtendedTypes(): iterable
    {
        return [OrderType::class];
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
        return "EccubePaymentLite42/Form/Extension/Front/Shopping/OrderTypeExtension.php";
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

namespace Plugin\\EccubePaymentLite42\\Form\\Extension\\Front\\Shopping;

use Eccube\\Common\\EccubeConfig;
use Eccube\\Entity\\Order;
use Eccube\\Entity\\Shipping;
use Eccube\\Form\\Type\\Shopping\\OrderType;
use Eccube\\Repository\\PaymentRepository;
use Plugin\\EccubePaymentLite42\\Entity\\ConvenienceStore;
use Plugin\\EccubePaymentLite42\\Entity\\RegularCycle;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Repository\\RegularCycleRepository;
use Plugin\\EccubePaymentLite42\\Repository\\ConvenienceStoreRepository;
use Plugin\\EccubePaymentLite42\\Service\\GetProductClassesRegularCycles;
use Plugin\\EccubePaymentLite42\\Service\\GetRegularCyclesFromProductClassId;
use Plugin\\EccubePaymentLite42\\Service\\IsRegularPaymentService;
use Plugin\\EccubePaymentLite42\\Service\\Method\\Conveni;
use Plugin\\EccubePaymentLite42\\Service\\SaveRegularOrderService;
use Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType;
use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Form;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

class OrderTypeExtension extends AbstractTypeExtension
{
    /**
     * @var PaymentRepository
     */
    protected \$paymentRepository;
    protected \$eccubeConfig;
    protected \$gmoConfigRepository;

    /**
     * @var RegularCycleRepository
     */
    private \$regularCycleRepository;
    /**
     * @var IsRegularPaymentService
     */
    private \$isRegularPaymentService;
    /**
     * @var SaveRegularOrderService
     */
    private \$saveRegularOrderService;
    /**
     * @var GetRegularCyclesFromProductClassId
     */
    private \$getRegularCyclesFromProductClassId;
    /**
     * @var GetProductClassesRegularCycles
     */
    private \$getProductClassesRegularCycles;
    /**
     * @var ConvenienceStoreRepository
     */
    private \$convenienceStoreRepository;

    public function __construct(
        EccubeConfig \$eccubeConfig,
        PaymentRepository \$paymentRepository,
        ConfigRepository \$gmoConfigRepository,
        GetRegularCyclesFromProductClassId \$getRegularCyclesFromProductClassId,
        RegularCycleRepository \$regularCycleRepository,
        IsRegularPaymentService \$isRegularPaymentService,
        SaveRegularOrderService \$saveRegularOrderService,
        GetProductClassesRegularCycles \$getProductClassesRegularCycles,
        ConvenienceStoreRepository \$convenienceStoreRepository
    ) {
        \$this->paymentRepository = \$paymentRepository;
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->gmoConfigRepository = \$gmoConfigRepository;
        \$this->getRegularCyclesFromProductClassId = \$getRegularCyclesFromProductClassId;
        \$this->regularCycleRepository = \$regularCycleRepository;
        \$this->isRegularPaymentService = \$isRegularPaymentService;
        \$this->saveRegularOrderService = \$saveRegularOrderService;
        \$this->getProductClassesRegularCycles = \$getProductClassesRegularCycles;
        \$this->convenienceStoreRepository = \$convenienceStoreRepository;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            ->addEventListener(FormEvents::POST_SET_DATA, function (FormEvent \$event) {
                /** @var Order \$Order */
                \$Order = \$event->getData();
                \$form = \$event->getForm();

                if (!is_null(\$Order->getPayment())) {
                    if (Conveni::class !== \$Order->getPayment()->getMethodClass()) {
                        return;
                    }
                    // Get conveniences from config
                    \$Config = \$this->gmoConfigRepository->find(1);
                    \$arrConvenience = [];
                    \$useConveniences = \$Config->getConvenienceStores();
                    foreach (\$useConveniences as \$store) {
                        \$arrConvenience[] = \$store['id'];
                    }

                    // Get list convenience store  add to form builder
                    \$convenienceStore = \$this->convenienceStoreRepository->findBy(['id' => \$arrConvenience], [
                        'sort_no' => 'ASC',
                    ]);

                    \$message = trans('gmo_epsilon.admin.config.required');

                    if(empty(\$convenienceStore)){
                        \$message = trans(\"gmo_epsilon.front.shopping.use_conveni_not_fount\");
                    }

                    \$form->add('convenience', EntityType::class, [
                    'class' => ConvenienceStore::class,
                    'invalid_message' => \$message,
                    'expanded' => true,
                    'multiple' => false,
                    'choices' => \$convenienceStore,
                    'constraints' => [
                        new NotBlank(['message' => \$message]),
                    ],
                    'mapped' => false,
                ]);
                }
            })
            ->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent \$event) {
                \$form = \$event->getForm();
                /** @var Order \$Order */
                \$Order = \$event->getData();
                \$regularCycleChoices = \$this
                    ->getProductClassesRegularCycles
                    ->handle(\$Order);
                \$form
                    ->add('RegularCycles', ChoiceType::class, [
                        'choices' => \$regularCycleChoices,
                        'choice_value' => 'id',
                        'choice_label' => function (RegularCycle \$regularCycle) {
                            return \$regularCycle;
                        },
                        'expanded' => true,
                        'multiple' => false,
                        'mapped' => false,
                    ])
                ;
            })
        ;

        \$builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent \$event) {
            \$options = \$event->getForm()->getConfig()->getOptions();
            if (\$options['skip_add_form']) {
                return;
            }
            \$Payment = \$this->paymentRepository->findOneBy(['method_class' => Conveni::class]);
            \$data = \$event->getData();
            if (is_null(\$Payment)) {
                return;
            }
            if (\$Payment->getId() == \$data['Payment']) {
                return;
            }
            /** @var Form \$form */
            \$form = \$event->getForm();
            \$form->remove('convenience');
        });
        \$builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent \$event) {
            /** @var Order \$Order */
            \$Order = \$event->getData();
            if (!\$this->isRegularPaymentService->isRegularPayment(\$Order)) {
                return;
            }
            /** @var Shipping \$Shipping */
            \$Shipping = \$Order->getShippings()->first();
            if (\$Shipping->getDelivery()->getSaleType()->getName() !== '定期商品') {
                return;
            }
            if (is_null(\$event->getForm()['RegularCycles']->getData())) {
                return;
            }
            \$this
                ->saveRegularOrderService
                ->setRegularCycleIdInSession(
                    \$event->getForm()['RegularCycles']->getData()->getId()
                );
        });
    }

    /**
     * {@inheritdoc}
     */
    public function getExtendedType()
    {
        return OrderType::class;
    }

    /**
     * Return the class of the type being extended.
     */
    public static function getExtendedTypes(): iterable
    {
        return [OrderType::class];
    }
}
", "EccubePaymentLite42/Form/Extension/Front/Shopping/OrderTypeExtension.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Form\\Extension\\Front\\Shopping\\OrderTypeExtension.php");
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
