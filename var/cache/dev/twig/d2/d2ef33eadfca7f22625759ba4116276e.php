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

/* EccubePaymentLite42/Form/Type/Admin/SearchRegularOrderType.php */
class __TwigTemplate_7018c006b5b411fd86e886188acaafff extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Form/Type/Admin/SearchRegularOrderType.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Form/Type/Admin/SearchRegularOrderType.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Form\\Type\\Admin;

use Eccube\\Common\\EccubeConfig;
use Eccube\\Form\\EventListener\\ConvertKanaListener;
use Eccube\\Form\\Type\\Master\\OrderStatusType;
use Eccube\\Form\\Type\\Master\\SexType;
use Eccube\\Form\\Type\\PriceType;
use Plugin\\EccubePaymentLite42\\Entity\\RegularShipping;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Validator\\Constraints as Assert;

class SearchRegularOrderType extends AbstractType
{
    /**
     * @var EccubeConfig
     */
    protected \$eccubeConfig;

    public function __construct(EccubeConfig \$eccubeConfig)
    {
        \$this->eccubeConfig = \$eccubeConfig;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            // 定期ID・注文者名・注文者（フリガナ）・注文者会社名
            ->add('multi', TextType::class, [
                'label' => 'admin.order.multi_search_label',
                'required' => false,
                'constraints' => [
                    new Assert\\Length(['max' => \$this->eccubeConfig['eccube_stext_len']]),
                ],
            ])
            ->add('latest_status', OrderStatusType::class, [
                'label' => 'gmo_epsilon.admin.regular_order.latest_status',
                'expanded' => false,
                'multiple' => false,
                'placeholder' => '指定なし',
            ])
            ->add('regular_status', RegularStatusType::class, [
                'label' => 'gmo_epsilon.admin.regular_order.regular_status',
                'expanded' => true,
                'multiple' => true,
            ])
            ->add('name', TextType::class, [
                'label' => 'admin.order.orderer_name',
                'required' => false,
            ])
            ->add(\$builder
                ->create('kana', TextType::class, [
                    'label' => 'admin.order.orderer_kana',
                    'required' => false,
                    'constraints' => [
                        new Assert\\Regex([
                            'pattern' => '/^[ァ-ヶｦ-ﾟー]+\$/u',
                            'message' => 'form_error.kana_only',
                        ]),
                    ],
                ])
                ->addEventSubscriber(new ConvertKanaListener('CV')
            ))
            ->add('company_name', TextType::class, [
                'label' => 'admin.order.orderer_company_name',
                'required' => false,
            ])
            ->add('email', TextType::class, [
                'label' => 'admin.common.mail_address',
                'required' => false,
            ])
            ->add('phone_number', TextType::class, [
                'label' => 'admin.common.phone_number',
                'required' => false,
                'constraints' => [
                    new Assert\\Regex([
                        'pattern' => \"/^[\\d-]+\$/u\",
                        'message' => 'form_error.graph_and_hyphen_only',
                    ]),
                ],
            ])
            ->add('sex', SexType::class, [
                'label' => 'admin.common.gender',
                'required' => false,
                'expanded' => true,
                'multiple' => true,
            ])
            ->add('first_order_date_start', DateType::class, [
                'label' => 'gmo_epsilon.admin.regular_order.first_order_date_start',
                'required' => false,
                'input' => 'datetime',
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'placeholder' => ['year' => '----', 'month' => '--', 'day' => '--'],
                'attr' => [
                    'class' => 'datetimepicker-input',
                    'data-bs-target' => '#'.\$this->getBlockPrefix().'_first_order_date_start',
                    'data-bs-toggle' => 'datetimepicker',
                ],
            ])
            ->add('first_order_date_end', DateType::class, [
                'label' => 'gmo_epsilon.admin.regular_order.first_order_date_end',
                'required' => false,
                'input' => 'datetime',
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'placeholder' => ['year' => '----', 'month' => '--', 'day' => '--'],
                'attr' => [
                    'class' => 'datetimepicker-input',
                    'data-bs-target' => '#'.\$this->getBlockPrefix().'_first_order_date_end',
                    'data-bs-toggle' => 'datetimepicker',
                ],
            ])
            ->add('next_delivery_date_start', DateType::class, [
                'label' => 'gmo_epsilon.admin.regular_order.next_delivery_date_start',
                'required' => false,
                'input' => 'datetime',
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'placeholder' => ['year' => '----', 'month' => '--', 'day' => '--'],
                'attr' => [
                    'class' => 'datetimepicker-input',
                    'data-bs-target' => '#'.\$this->getBlockPrefix().'_next_delivery_date_start',
                    'data-bs-toggle' => 'datetimepicker',
                ],
            ])
            ->add('next_delivery_date_end', DateType::class, [
                'label' => 'gmo_epsilon.admin.regular_order.next_delivery_date_end',
                'required' => false,
                'input' => 'datetime',
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'placeholder' => ['year' => '----', 'month' => '--', 'day' => '--'],
                'attr' => [
                    'class' => 'datetimepicker-input',
                    'data-bs-target' => '#'.\$this->getBlockPrefix().'_next_delivery_date_end',
                    'data-bs-toggle' => 'datetimepicker',
                ],
            ])
            ->add('regular_order_id', NumberType::class, [
                'label' => 'gmo_epsilon.admin.regular_order.regular_order_id',
                'required' => false,
            ])
            ->add('buy_product_id', NumberType::class, [
                'label' => 'gmo_epsilon.admin.regular_order.buy_product_id',
                'required' => false,
            ])
            ->add('order_no', NumberType::class, [
                'label' => 'gmo_epsilon.admin.regular_order.order_no',
                'required' => false,
            ])
            ->add('buy_product_name', TextType::class, [
                'label' => 'gmo_epsilon.admin.regular_order.buy_product_name',
                'required' => false,
            ])
            ->add('regular_count_start', NumberType::class, [
                'label' => 'gmo_epsilon.admin.regular_order.regular_count_start',
                'required' => false,
            ])
            ->add('regular_count_end', NumberType::class, [
                'label' => 'gmo_epsilon.admin.regular_order.regular_count_end',
                'required' => false,
            ])
            ->add('payment_total_start', PriceType::class, [
                'label' => 'admin.order.purchase_price__start',
                'required' => false,
            ])
            ->add('payment_total_end', PriceType::class, [
                'label' => 'admin.order.purchase_price__end',
                'required' => false,
            ])
            ->add('card_change_request_mail_status', ChoiceType::class, [
                'label' => 'gmo_epsilon.admin.regular_order.card_change_request_mail_status',
                'choices' => [
                    '未送信' => RegularShipping::CARD_CHANGE_REQUEST_MAIL_UNSENT,
                    '送信済み' => RegularShipping::CARD_CHANGE_REQUEST_MAIL_SENT,
                ],
                'expanded' => true,
                'multiple' => true,
            ])
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'admin_search_regular_order';
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
        return "EccubePaymentLite42/Form/Type/Admin/SearchRegularOrderType.php";
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

use Eccube\\Common\\EccubeConfig;
use Eccube\\Form\\EventListener\\ConvertKanaListener;
use Eccube\\Form\\Type\\Master\\OrderStatusType;
use Eccube\\Form\\Type\\Master\\SexType;
use Eccube\\Form\\Type\\PriceType;
use Plugin\\EccubePaymentLite42\\Entity\\RegularShipping;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Validator\\Constraints as Assert;

class SearchRegularOrderType extends AbstractType
{
    /**
     * @var EccubeConfig
     */
    protected \$eccubeConfig;

    public function __construct(EccubeConfig \$eccubeConfig)
    {
        \$this->eccubeConfig = \$eccubeConfig;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            // 定期ID・注文者名・注文者（フリガナ）・注文者会社名
            ->add('multi', TextType::class, [
                'label' => 'admin.order.multi_search_label',
                'required' => false,
                'constraints' => [
                    new Assert\\Length(['max' => \$this->eccubeConfig['eccube_stext_len']]),
                ],
            ])
            ->add('latest_status', OrderStatusType::class, [
                'label' => 'gmo_epsilon.admin.regular_order.latest_status',
                'expanded' => false,
                'multiple' => false,
                'placeholder' => '指定なし',
            ])
            ->add('regular_status', RegularStatusType::class, [
                'label' => 'gmo_epsilon.admin.regular_order.regular_status',
                'expanded' => true,
                'multiple' => true,
            ])
            ->add('name', TextType::class, [
                'label' => 'admin.order.orderer_name',
                'required' => false,
            ])
            ->add(\$builder
                ->create('kana', TextType::class, [
                    'label' => 'admin.order.orderer_kana',
                    'required' => false,
                    'constraints' => [
                        new Assert\\Regex([
                            'pattern' => '/^[ァ-ヶｦ-ﾟー]+\$/u',
                            'message' => 'form_error.kana_only',
                        ]),
                    ],
                ])
                ->addEventSubscriber(new ConvertKanaListener('CV')
            ))
            ->add('company_name', TextType::class, [
                'label' => 'admin.order.orderer_company_name',
                'required' => false,
            ])
            ->add('email', TextType::class, [
                'label' => 'admin.common.mail_address',
                'required' => false,
            ])
            ->add('phone_number', TextType::class, [
                'label' => 'admin.common.phone_number',
                'required' => false,
                'constraints' => [
                    new Assert\\Regex([
                        'pattern' => \"/^[\\d-]+\$/u\",
                        'message' => 'form_error.graph_and_hyphen_only',
                    ]),
                ],
            ])
            ->add('sex', SexType::class, [
                'label' => 'admin.common.gender',
                'required' => false,
                'expanded' => true,
                'multiple' => true,
            ])
            ->add('first_order_date_start', DateType::class, [
                'label' => 'gmo_epsilon.admin.regular_order.first_order_date_start',
                'required' => false,
                'input' => 'datetime',
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'placeholder' => ['year' => '----', 'month' => '--', 'day' => '--'],
                'attr' => [
                    'class' => 'datetimepicker-input',
                    'data-bs-target' => '#'.\$this->getBlockPrefix().'_first_order_date_start',
                    'data-bs-toggle' => 'datetimepicker',
                ],
            ])
            ->add('first_order_date_end', DateType::class, [
                'label' => 'gmo_epsilon.admin.regular_order.first_order_date_end',
                'required' => false,
                'input' => 'datetime',
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'placeholder' => ['year' => '----', 'month' => '--', 'day' => '--'],
                'attr' => [
                    'class' => 'datetimepicker-input',
                    'data-bs-target' => '#'.\$this->getBlockPrefix().'_first_order_date_end',
                    'data-bs-toggle' => 'datetimepicker',
                ],
            ])
            ->add('next_delivery_date_start', DateType::class, [
                'label' => 'gmo_epsilon.admin.regular_order.next_delivery_date_start',
                'required' => false,
                'input' => 'datetime',
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'placeholder' => ['year' => '----', 'month' => '--', 'day' => '--'],
                'attr' => [
                    'class' => 'datetimepicker-input',
                    'data-bs-target' => '#'.\$this->getBlockPrefix().'_next_delivery_date_start',
                    'data-bs-toggle' => 'datetimepicker',
                ],
            ])
            ->add('next_delivery_date_end', DateType::class, [
                'label' => 'gmo_epsilon.admin.regular_order.next_delivery_date_end',
                'required' => false,
                'input' => 'datetime',
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'placeholder' => ['year' => '----', 'month' => '--', 'day' => '--'],
                'attr' => [
                    'class' => 'datetimepicker-input',
                    'data-bs-target' => '#'.\$this->getBlockPrefix().'_next_delivery_date_end',
                    'data-bs-toggle' => 'datetimepicker',
                ],
            ])
            ->add('regular_order_id', NumberType::class, [
                'label' => 'gmo_epsilon.admin.regular_order.regular_order_id',
                'required' => false,
            ])
            ->add('buy_product_id', NumberType::class, [
                'label' => 'gmo_epsilon.admin.regular_order.buy_product_id',
                'required' => false,
            ])
            ->add('order_no', NumberType::class, [
                'label' => 'gmo_epsilon.admin.regular_order.order_no',
                'required' => false,
            ])
            ->add('buy_product_name', TextType::class, [
                'label' => 'gmo_epsilon.admin.regular_order.buy_product_name',
                'required' => false,
            ])
            ->add('regular_count_start', NumberType::class, [
                'label' => 'gmo_epsilon.admin.regular_order.regular_count_start',
                'required' => false,
            ])
            ->add('regular_count_end', NumberType::class, [
                'label' => 'gmo_epsilon.admin.regular_order.regular_count_end',
                'required' => false,
            ])
            ->add('payment_total_start', PriceType::class, [
                'label' => 'admin.order.purchase_price__start',
                'required' => false,
            ])
            ->add('payment_total_end', PriceType::class, [
                'label' => 'admin.order.purchase_price__end',
                'required' => false,
            ])
            ->add('card_change_request_mail_status', ChoiceType::class, [
                'label' => 'gmo_epsilon.admin.regular_order.card_change_request_mail_status',
                'choices' => [
                    '未送信' => RegularShipping::CARD_CHANGE_REQUEST_MAIL_UNSENT,
                    '送信済み' => RegularShipping::CARD_CHANGE_REQUEST_MAIL_SENT,
                ],
                'expanded' => true,
                'multiple' => true,
            ])
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'admin_search_regular_order';
    }
}
", "EccubePaymentLite42/Form/Type/Admin/SearchRegularOrderType.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Form\\Type\\Admin\\SearchRegularOrderType.php");
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
