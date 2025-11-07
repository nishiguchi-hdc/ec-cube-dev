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

/* EccubePaymentLite42/Form/Type/Admin/RegularOrderItemType.php */
class __TwigTemplate_47dff2602b879dc56ebc22639f797bd9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Form/Type/Admin/RegularOrderItemType.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Form/Type/Admin/RegularOrderItemType.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Form\\Type\\Admin;

use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Common\\EccubeConfig;
use Eccube\\Entity\\BaseInfo;
use Eccube\\Entity\\Master\\OrderItemType;
use Eccube\\Entity\\Master\\OrderItemType as OrderItemTypeMaster;
use Eccube\\Entity\\Master\\TaxDisplayType;
use Eccube\\Entity\\Master\\TaxType;
use Eccube\\Entity\\ProductClass;
use Eccube\\Form\\DataTransformer;
use Eccube\\Form\\Type\\PriceType;
use Eccube\\Repository\\BaseInfoRepository;
use Eccube\\Repository\\Master\\OrderItemTypeRepository;
use Eccube\\Repository\\OrderItemRepository;
use Eccube\\Repository\\ProductClassRepository;
use Eccube\\Repository\\TaxRuleRepository;
use Eccube\\Service\\TaxRuleService;
use Eccube\\Util\\StringUtil;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrderItem;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Validator\\Constraints as Assert;
use Symfony\\Component\\Validator\\ConstraintViolationListInterface;
use Symfony\\Component\\Validator\\Validator\\ValidatorInterface;

class RegularOrderItemType extends AbstractType
{
    /**
     * @var EntityManagerInterface
     */
    protected \$entityManager;

    /**
     * @var EccubeConfig
     */
    protected \$eccubeConfig;

    /**
     * @var BaseInfo
     */
    protected \$BaseInfo;

    /**
     * @var ProductClassRepository
     */
    protected \$productClassRepository;

    /**
     * @var OrderItemRepository
     */
    protected \$orderItemRepository;

    /**
     * @var OrderItemTypeRepository
     */
    protected \$orderItemTypeRepository;

    /**
     * @var TaxRuleRepository
     */
    protected \$taxRuleRepository;

    /**
     * @var ValidatorInterface
     */
    protected \$validator;

    /**
     * @var TaxRuleService
     */
    protected \$taxRuleService;

    public function __construct(
        EntityManagerInterface \$entityManager,
        EccubeConfig \$eccubeConfig,
        BaseInfoRepository \$baseInfoRepository,
        ProductClassRepository \$productClassRepository,
        OrderItemRepository \$orderItemRepository,
        OrderItemTypeRepository \$orderItemTypeRepository,
        TaxRuleRepository \$taxRuleRepository,
        ValidatorInterface \$validator,
        TaxRuleService \$taxRuleService
    ) {
        \$this->entityManager = \$entityManager;
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->BaseInfo = \$baseInfoRepository->get();
        \$this->productClassRepository = \$productClassRepository;
        \$this->orderItemRepository = \$orderItemRepository;
        \$this->orderItemTypeRepository = \$orderItemTypeRepository;
        \$this->taxRuleRepository = \$taxRuleRepository;
        \$this->validator = \$validator;
        \$this->taxRuleService = \$taxRuleService;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            ->add('product_name', TextType::class, [
                'constraints' => [
                    new Assert\\NotBlank(),
                    new Assert\\Length([
                        'max' => \$this->eccubeConfig['eccube_mtext_len'],
                    ]),
                ],
            ])
            ->add('price', PriceType::class, [
                'accept_minus' => true,
            ])
            ->add('quantity', IntegerType::class, [
                'constraints' => [
                    new Assert\\NotBlank(),
                    new Assert\\Length([
                        'max' => \$this->eccubeConfig['eccube_int_len'],
                    ]),
                ],
            ])
            ->add('tax_rate', IntegerType::class, [
                'required' => true,
                'constraints' => [
                    new Assert\\NotBlank(),
                    new Assert\\Range(['min' => 0]),
                    new Assert\\Regex([
                        'pattern' => \"/^\\d+(\\.\\d+)?\$/u\",
                        'message' => 'form_error.float_only',
                    ]),
                ],
            ])
            ->add('point_rate', HiddenType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\\Range(['min' => 0]),
                    new Assert\\Regex([
                        'pattern' => \"/^\\d+(\\.\\d+)?\$/u\",
                        'message' => 'form_error.float_only',
                    ]),
                ],
            ])
        ;

        \$builder
            ->add(\$builder->create('order_item_type', HiddenType::class)
                ->addModelTransformer(new DataTransformer\\EntityToIdTransformer(
                    \$this->entityManager,
                    OrderItemTypeMaster::class
                )))
            ->add(\$builder->create('tax_type', HiddenType::class)
                ->addModelTransformer(new DataTransformer\\EntityToIdTransformer(
                    \$this->entityManager,
                    TaxType::class
                )))
            ->add(\$builder->create('ProductClass', HiddenType::class)
                ->addModelTransformer(new DataTransformer\\EntityToIdTransformer(
                    \$this->entityManager,
                    ProductClass::class
                )));

        // 受注明細フォームの税率を補完する
        \$builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent \$event) {
            /** @var RegularOrderItem \$RegularOrderItem */
            \$RegularOrderItem = \$event->getData();

            if (!isset(\$RegularOrderItem['tax_rate']) || StringUtil::isBlank(\$RegularOrderItem['tax_rate'])) {
                \$orderItemTypeId = \$RegularOrderItem['order_item_type'];

                if (\$orderItemTypeId == OrderItemTypeMaster::PRODUCT) {
                    /** @var ProductClass \$ProductClass */
                    \$ProductClass = \$this->productClassRepository->find(\$RegularOrderItem['ProductClass']);
                    \$Product = \$ProductClass->getProduct();
                    \$TaxRule = \$this->taxRuleRepository->getByRule(\$Product, \$ProductClass);

                    if (!isset(\$RegularOrderItem['tax_type']) || StringUtil::isBlank(\$RegularOrderItem['tax_type'])) {
                        \$RegularOrderItem['tax_type'] = TaxType::TAXATION;
                    }
                } else {
                    if (\$orderItemTypeId == OrderItemTypeMaster::DISCOUNT && \$RegularOrderItem['tax_type'] == TaxType::NON_TAXABLE) {
                        \$RegularOrderItem['tax_rate'] = '0';
                        \$event->setData(\$RegularOrderItem);

                        return;
                    }

                    \$TaxRule = \$this->taxRuleRepository->getByRule();
                }

                \$RegularOrderItem['tax_rate'] = \$TaxRule->getTaxRate();
                \$event->setData(\$RegularOrderItem);
            }
        });

        \$builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent \$event) {
            /** @var RegularOrderItem \$RegularOrderItem */
            \$RegularOrderItem = \$event->getData();

            \$OrderItemType = \$RegularOrderItem->getOrderItemType();

            switch (\$OrderItemType->getId()) {
                case OrderItemTypeMaster::PRODUCT:
                    \$ProductClass = \$RegularOrderItem->getProductClass();
                    \$Product = \$ProductClass->getProduct();
                    \$RegularOrderItem->setProduct(\$Product);
                    if (null === \$RegularOrderItem->getPrice()) {
                        \$RegularOrderItem->setPrice(\$ProductClass->getPrice02());
                    }
                    if (null === \$RegularOrderItem->getProductCode()) {
                        \$RegularOrderItem->setProductCode(\$ProductClass->getCode());
                    }
                    if (null === \$RegularOrderItem->getClassName1() && \$ProductClass->hasClassCategory1()) {
                        \$ClassCategory1 = \$ProductClass->getClassCategory1();
                        \$RegularOrderItem->setClassName1(\$ClassCategory1->getClassName()->getName());
                        \$RegularOrderItem->setClassCategoryName1(\$ClassCategory1->getName());
                    }
                    if (null === \$RegularOrderItem->getClassName2() && \$ProductClass->hasClassCategory2()) {
                        if (\$ClassCategory2 = \$ProductClass->getClassCategory2()) {
                            \$RegularOrderItem->setClassName2(\$ClassCategory2->getClassName()->getName());
                            \$RegularOrderItem->setClassCategoryName2(\$ClassCategory2->getName());
                        }
                    }
                    if (null === \$RegularOrderItem->getRoundingType()) {
                        \$TaxRule = \$this->taxRuleRepository->getByRule(\$Product, \$ProductClass);
                        \$RegularOrderItem->setRoundingType(\$TaxRule->getRoundingType())
                            ->setTaxAdjust(\$TaxRule->getTaxAdjust());
                    }

                    // 税込表示の場合は, priceが税込金額のため割り戻す.
                    \$this->recalculateTax(\$RegularOrderItem, \$OrderItemType);
                    break;
                default:
                    if (null === \$RegularOrderItem->getRoundingType()) {
                        \$TaxRule = \$this->taxRuleRepository->getByRule();
                        \$RegularOrderItem->setRoundingType(\$TaxRule->getRoundingType())
                            ->setTaxAdjust(\$TaxRule->getTaxAdjust());
                    }
            }
        });

        // price, quantityのバリデーション
        \$builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent \$event) {
            \$form = \$event->getForm();
            /** @var RegularOrderItem \$RegularOrderItem */
            \$RegularOrderItem = \$event->getData();

            \$OrderItemType = \$RegularOrderItem->getOrderItemType();
            switch (\$OrderItemType->getId()) {
                // 商品明細: 金額 -> 正, 個数 -> 正負
                case OrderItemTypeMaster::PRODUCT:
                    \$errors = \$this->validator->validate(\$RegularOrderItem->getPrice(), [new Assert\\GreaterThanOrEqual(0)]);
                    \$this->addErrorsIfExists(\$form['price'], \$errors);
                    break;

                // 値引き明細: 金額 -> 負, 個数 -> 正
                case OrderItemTypeMaster::DISCOUNT:
                    \$errors = \$this->validator->validate(\$RegularOrderItem->getPrice(), [new Assert\\LessThanOrEqual(0)]);
                    \$this->addErrorsIfExists(\$form['price'], \$errors);
                    \$errors = \$this->validator->validate(\$RegularOrderItem->getQuantity(), [new Assert\\GreaterThanOrEqual(0)]);
                    \$this->addErrorsIfExists(\$form['quantity'], \$errors);

                    break;

                // 送料, 手数料: 金額 -> 正, 個数 -> 正
                case OrderItemTypeMaster::DELIVERY_FEE:
                case OrderItemTypeMaster::CHARGE:
                    \$errors = \$this->validator->validate(\$RegularOrderItem->getPrice(), [new Assert\\GreaterThanOrEqual(0)]);
                    \$this->addErrorsIfExists(\$form['price'], \$errors);
                    \$errors = \$this->validator->validate(\$RegularOrderItem->getQuantity(), [new Assert\\GreaterThanOrEqual(0)]);
                    \$this->addErrorsIfExists(\$form['quantity'], \$errors);

                    break;

                default:
                    break;
            }
        });
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'data_class' => RegularOrderItem::class,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'regular_order_item';
    }

    protected function addErrorsIfExists(FormInterface \$form, ConstraintViolationListInterface \$errors)
    {
        if (empty(\$errors)) {
            return;
        }

        foreach (\$errors as \$error) {
            \$form->addError(new FormError(
                \$error->getMessage(),
                \$error->getMessageTemplate(),
                \$error->getParameters(),
                \$error->getPlural()));
        }
    }

    protected function recalculateTax(\$RegularOrderItem, \$OrderItemType)
    {
        if (!\$RegularOrderItem->getTaxDisplayType() && \$OrderItemType->getId() == OrderItemType::PRODUCT) {
            \$TaxDisplayType = \$this->entityManager->find(TaxDisplayType::class, TaxDisplayType::EXCLUDED);
            \$RegularOrderItem->setTaxDisplayType(\$TaxDisplayType);
        }

        if (\$RegularOrderItem->getTaxDisplayType()->getId() == TaxDisplayType::INCLUDED) {
            \$tax = \$this->taxRuleService->calcTaxIncluded(
                \$RegularOrderItem->getPrice(), \$RegularOrderItem->getTaxRate(), \$RegularOrderItem->getRoundingType()->getId(),
                \$RegularOrderItem->getTaxAdjust());
        } else {
            \$tax = \$this->taxRuleService->calcTax(
                \$RegularOrderItem->getPrice(), \$RegularOrderItem->getTaxRate(), \$RegularOrderItem->getRoundingType()->getId(),
                \$RegularOrderItem->getTaxAdjust());
        }

        \$RegularOrderItem->setTax(\$tax);
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
        return "EccubePaymentLite42/Form/Type/Admin/RegularOrderItemType.php";
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

namespace Plugin\\EccubePaymentLite42\\Form\\Type\\Admin;

use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Common\\EccubeConfig;
use Eccube\\Entity\\BaseInfo;
use Eccube\\Entity\\Master\\OrderItemType;
use Eccube\\Entity\\Master\\OrderItemType as OrderItemTypeMaster;
use Eccube\\Entity\\Master\\TaxDisplayType;
use Eccube\\Entity\\Master\\TaxType;
use Eccube\\Entity\\ProductClass;
use Eccube\\Form\\DataTransformer;
use Eccube\\Form\\Type\\PriceType;
use Eccube\\Repository\\BaseInfoRepository;
use Eccube\\Repository\\Master\\OrderItemTypeRepository;
use Eccube\\Repository\\OrderItemRepository;
use Eccube\\Repository\\ProductClassRepository;
use Eccube\\Repository\\TaxRuleRepository;
use Eccube\\Service\\TaxRuleService;
use Eccube\\Util\\StringUtil;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrderItem;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Validator\\Constraints as Assert;
use Symfony\\Component\\Validator\\ConstraintViolationListInterface;
use Symfony\\Component\\Validator\\Validator\\ValidatorInterface;

class RegularOrderItemType extends AbstractType
{
    /**
     * @var EntityManagerInterface
     */
    protected \$entityManager;

    /**
     * @var EccubeConfig
     */
    protected \$eccubeConfig;

    /**
     * @var BaseInfo
     */
    protected \$BaseInfo;

    /**
     * @var ProductClassRepository
     */
    protected \$productClassRepository;

    /**
     * @var OrderItemRepository
     */
    protected \$orderItemRepository;

    /**
     * @var OrderItemTypeRepository
     */
    protected \$orderItemTypeRepository;

    /**
     * @var TaxRuleRepository
     */
    protected \$taxRuleRepository;

    /**
     * @var ValidatorInterface
     */
    protected \$validator;

    /**
     * @var TaxRuleService
     */
    protected \$taxRuleService;

    public function __construct(
        EntityManagerInterface \$entityManager,
        EccubeConfig \$eccubeConfig,
        BaseInfoRepository \$baseInfoRepository,
        ProductClassRepository \$productClassRepository,
        OrderItemRepository \$orderItemRepository,
        OrderItemTypeRepository \$orderItemTypeRepository,
        TaxRuleRepository \$taxRuleRepository,
        ValidatorInterface \$validator,
        TaxRuleService \$taxRuleService
    ) {
        \$this->entityManager = \$entityManager;
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->BaseInfo = \$baseInfoRepository->get();
        \$this->productClassRepository = \$productClassRepository;
        \$this->orderItemRepository = \$orderItemRepository;
        \$this->orderItemTypeRepository = \$orderItemTypeRepository;
        \$this->taxRuleRepository = \$taxRuleRepository;
        \$this->validator = \$validator;
        \$this->taxRuleService = \$taxRuleService;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            ->add('product_name', TextType::class, [
                'constraints' => [
                    new Assert\\NotBlank(),
                    new Assert\\Length([
                        'max' => \$this->eccubeConfig['eccube_mtext_len'],
                    ]),
                ],
            ])
            ->add('price', PriceType::class, [
                'accept_minus' => true,
            ])
            ->add('quantity', IntegerType::class, [
                'constraints' => [
                    new Assert\\NotBlank(),
                    new Assert\\Length([
                        'max' => \$this->eccubeConfig['eccube_int_len'],
                    ]),
                ],
            ])
            ->add('tax_rate', IntegerType::class, [
                'required' => true,
                'constraints' => [
                    new Assert\\NotBlank(),
                    new Assert\\Range(['min' => 0]),
                    new Assert\\Regex([
                        'pattern' => \"/^\\d+(\\.\\d+)?\$/u\",
                        'message' => 'form_error.float_only',
                    ]),
                ],
            ])
            ->add('point_rate', HiddenType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\\Range(['min' => 0]),
                    new Assert\\Regex([
                        'pattern' => \"/^\\d+(\\.\\d+)?\$/u\",
                        'message' => 'form_error.float_only',
                    ]),
                ],
            ])
        ;

        \$builder
            ->add(\$builder->create('order_item_type', HiddenType::class)
                ->addModelTransformer(new DataTransformer\\EntityToIdTransformer(
                    \$this->entityManager,
                    OrderItemTypeMaster::class
                )))
            ->add(\$builder->create('tax_type', HiddenType::class)
                ->addModelTransformer(new DataTransformer\\EntityToIdTransformer(
                    \$this->entityManager,
                    TaxType::class
                )))
            ->add(\$builder->create('ProductClass', HiddenType::class)
                ->addModelTransformer(new DataTransformer\\EntityToIdTransformer(
                    \$this->entityManager,
                    ProductClass::class
                )));

        // 受注明細フォームの税率を補完する
        \$builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent \$event) {
            /** @var RegularOrderItem \$RegularOrderItem */
            \$RegularOrderItem = \$event->getData();

            if (!isset(\$RegularOrderItem['tax_rate']) || StringUtil::isBlank(\$RegularOrderItem['tax_rate'])) {
                \$orderItemTypeId = \$RegularOrderItem['order_item_type'];

                if (\$orderItemTypeId == OrderItemTypeMaster::PRODUCT) {
                    /** @var ProductClass \$ProductClass */
                    \$ProductClass = \$this->productClassRepository->find(\$RegularOrderItem['ProductClass']);
                    \$Product = \$ProductClass->getProduct();
                    \$TaxRule = \$this->taxRuleRepository->getByRule(\$Product, \$ProductClass);

                    if (!isset(\$RegularOrderItem['tax_type']) || StringUtil::isBlank(\$RegularOrderItem['tax_type'])) {
                        \$RegularOrderItem['tax_type'] = TaxType::TAXATION;
                    }
                } else {
                    if (\$orderItemTypeId == OrderItemTypeMaster::DISCOUNT && \$RegularOrderItem['tax_type'] == TaxType::NON_TAXABLE) {
                        \$RegularOrderItem['tax_rate'] = '0';
                        \$event->setData(\$RegularOrderItem);

                        return;
                    }

                    \$TaxRule = \$this->taxRuleRepository->getByRule();
                }

                \$RegularOrderItem['tax_rate'] = \$TaxRule->getTaxRate();
                \$event->setData(\$RegularOrderItem);
            }
        });

        \$builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent \$event) {
            /** @var RegularOrderItem \$RegularOrderItem */
            \$RegularOrderItem = \$event->getData();

            \$OrderItemType = \$RegularOrderItem->getOrderItemType();

            switch (\$OrderItemType->getId()) {
                case OrderItemTypeMaster::PRODUCT:
                    \$ProductClass = \$RegularOrderItem->getProductClass();
                    \$Product = \$ProductClass->getProduct();
                    \$RegularOrderItem->setProduct(\$Product);
                    if (null === \$RegularOrderItem->getPrice()) {
                        \$RegularOrderItem->setPrice(\$ProductClass->getPrice02());
                    }
                    if (null === \$RegularOrderItem->getProductCode()) {
                        \$RegularOrderItem->setProductCode(\$ProductClass->getCode());
                    }
                    if (null === \$RegularOrderItem->getClassName1() && \$ProductClass->hasClassCategory1()) {
                        \$ClassCategory1 = \$ProductClass->getClassCategory1();
                        \$RegularOrderItem->setClassName1(\$ClassCategory1->getClassName()->getName());
                        \$RegularOrderItem->setClassCategoryName1(\$ClassCategory1->getName());
                    }
                    if (null === \$RegularOrderItem->getClassName2() && \$ProductClass->hasClassCategory2()) {
                        if (\$ClassCategory2 = \$ProductClass->getClassCategory2()) {
                            \$RegularOrderItem->setClassName2(\$ClassCategory2->getClassName()->getName());
                            \$RegularOrderItem->setClassCategoryName2(\$ClassCategory2->getName());
                        }
                    }
                    if (null === \$RegularOrderItem->getRoundingType()) {
                        \$TaxRule = \$this->taxRuleRepository->getByRule(\$Product, \$ProductClass);
                        \$RegularOrderItem->setRoundingType(\$TaxRule->getRoundingType())
                            ->setTaxAdjust(\$TaxRule->getTaxAdjust());
                    }

                    // 税込表示の場合は, priceが税込金額のため割り戻す.
                    \$this->recalculateTax(\$RegularOrderItem, \$OrderItemType);
                    break;
                default:
                    if (null === \$RegularOrderItem->getRoundingType()) {
                        \$TaxRule = \$this->taxRuleRepository->getByRule();
                        \$RegularOrderItem->setRoundingType(\$TaxRule->getRoundingType())
                            ->setTaxAdjust(\$TaxRule->getTaxAdjust());
                    }
            }
        });

        // price, quantityのバリデーション
        \$builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent \$event) {
            \$form = \$event->getForm();
            /** @var RegularOrderItem \$RegularOrderItem */
            \$RegularOrderItem = \$event->getData();

            \$OrderItemType = \$RegularOrderItem->getOrderItemType();
            switch (\$OrderItemType->getId()) {
                // 商品明細: 金額 -> 正, 個数 -> 正負
                case OrderItemTypeMaster::PRODUCT:
                    \$errors = \$this->validator->validate(\$RegularOrderItem->getPrice(), [new Assert\\GreaterThanOrEqual(0)]);
                    \$this->addErrorsIfExists(\$form['price'], \$errors);
                    break;

                // 値引き明細: 金額 -> 負, 個数 -> 正
                case OrderItemTypeMaster::DISCOUNT:
                    \$errors = \$this->validator->validate(\$RegularOrderItem->getPrice(), [new Assert\\LessThanOrEqual(0)]);
                    \$this->addErrorsIfExists(\$form['price'], \$errors);
                    \$errors = \$this->validator->validate(\$RegularOrderItem->getQuantity(), [new Assert\\GreaterThanOrEqual(0)]);
                    \$this->addErrorsIfExists(\$form['quantity'], \$errors);

                    break;

                // 送料, 手数料: 金額 -> 正, 個数 -> 正
                case OrderItemTypeMaster::DELIVERY_FEE:
                case OrderItemTypeMaster::CHARGE:
                    \$errors = \$this->validator->validate(\$RegularOrderItem->getPrice(), [new Assert\\GreaterThanOrEqual(0)]);
                    \$this->addErrorsIfExists(\$form['price'], \$errors);
                    \$errors = \$this->validator->validate(\$RegularOrderItem->getQuantity(), [new Assert\\GreaterThanOrEqual(0)]);
                    \$this->addErrorsIfExists(\$form['quantity'], \$errors);

                    break;

                default:
                    break;
            }
        });
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'data_class' => RegularOrderItem::class,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'regular_order_item';
    }

    protected function addErrorsIfExists(FormInterface \$form, ConstraintViolationListInterface \$errors)
    {
        if (empty(\$errors)) {
            return;
        }

        foreach (\$errors as \$error) {
            \$form->addError(new FormError(
                \$error->getMessage(),
                \$error->getMessageTemplate(),
                \$error->getParameters(),
                \$error->getPlural()));
        }
    }

    protected function recalculateTax(\$RegularOrderItem, \$OrderItemType)
    {
        if (!\$RegularOrderItem->getTaxDisplayType() && \$OrderItemType->getId() == OrderItemType::PRODUCT) {
            \$TaxDisplayType = \$this->entityManager->find(TaxDisplayType::class, TaxDisplayType::EXCLUDED);
            \$RegularOrderItem->setTaxDisplayType(\$TaxDisplayType);
        }

        if (\$RegularOrderItem->getTaxDisplayType()->getId() == TaxDisplayType::INCLUDED) {
            \$tax = \$this->taxRuleService->calcTaxIncluded(
                \$RegularOrderItem->getPrice(), \$RegularOrderItem->getTaxRate(), \$RegularOrderItem->getRoundingType()->getId(),
                \$RegularOrderItem->getTaxAdjust());
        } else {
            \$tax = \$this->taxRuleService->calcTax(
                \$RegularOrderItem->getPrice(), \$RegularOrderItem->getTaxRate(), \$RegularOrderItem->getRoundingType()->getId(),
                \$RegularOrderItem->getTaxAdjust());
        }

        \$RegularOrderItem->setTax(\$tax);
    }
}
", "EccubePaymentLite42/Form/Type/Admin/RegularOrderItemType.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Form\\Type\\Admin\\RegularOrderItemType.php");
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
