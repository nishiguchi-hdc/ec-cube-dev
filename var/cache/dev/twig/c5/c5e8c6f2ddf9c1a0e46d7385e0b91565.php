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

/* AmazonPayV2_42_Bundle/Form/Extension/AmazonCustomerExtension.php */
class __TwigTemplate_9153965a1b3231605f019250ac42b3b4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Form/Extension/AmazonCustomerExtension.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Form/Extension/AmazonCustomerExtension.php"));

        // line 1
        echo "<?php

/*
 * Amazon Pay V2 for EC-CUBE4.2
 * Copyright(c) 2023 EC-CUBE CO.,LTD. all rights reserved.
 *
 * https://www.ec-cube.co.jp/
 *
 * This program is not free software.
 * It applies to terms of service.
 *
 */

namespace Plugin\\AmazonPayV2_42_Bundle\\Form\\Extension;

use Eccube\\Common\\EccubeConfig;
use Eccube\\Entity\\Order;
use Eccube\\Form\\Type\\Shopping\\OrderType;
use Eccube\\Repository\\PaymentRepository;
use Eccube\\Repository\\PluginRepository;
use Plugin\\AmazonPayV2_42_Bundle\\Service\\Method\\AmazonPay;
use Plugin\\AmazonPayV2_42_Bundle\\Repository\\ConfigRepository;
use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CheckboxType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface;

/**
 * 注文手続き画面のFormを拡張し、会員登録フォームを追加する.
 * 支払い方法に応じてエクステンションを作成する.
 */
class AmazonCustomerExtension extends AbstractTypeExtension
{
    protected \$authorizationChecker;

    /**
     * @var PaymentRepository
     */
    protected \$paymentRepository;
    protected \$eccubeConfig;
    protected \$configRepository;
    protected \$container;


    public function __construct(
        EccubeConfig \$eccubeConfig,
        PaymentRepository \$paymentRepository,
        PluginRepository \$pluginRepository,
        ConfigRepository \$configRepository,
        ContainerInterface \$container,
        AuthorizationCheckerInterface \$authorizationChecker
    ) {
        \$this->paymentRepository = \$paymentRepository;
        \$this->pluginRepository = \$pluginRepository;
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->configRepository = \$configRepository;

        \$this->Config = \$this->configRepository->get();
        \$this->container = \$container;
        \$this->authorizationChecker = \$authorizationChecker;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$self = \$this;

        \$builder->addEventListener(FormEvents::POST_SET_DATA, function (FormEvent \$event) use (\$self) {
            /** @var Order \$data */
            \$data = \$event->getData();
            \$form = \$event->getForm();

            if (\$data->getPayment()) {
                // 支払い方法が一致する場合
                if (\$data->getPayment()->getMethodClass() === AmazonPay::class && !\$this->authorizationChecker->isGranted('IS_AUTHENTICATED_FULLY')) {
                    \$form
                        ->add(
                            'customer_regist_v2',
                            CheckboxType::class,
                            [
                                'label' => null,
                                'required' => false,
                                'mapped' => false,
                                'attr' => [
                                    'autocomplete' => 'off',
                                ]
                            ]
                        );
                    // メルマガプラグイン利用時はチェックボックスを追加
                    if (
                        \$this->pluginRepository->findOneBy(['code' => 'MailMagazine42', 'enabled' => true])
                        || \$this->pluginRepository->findOneBy(['code' => 'PostCarrier42', 'enabled' => true])
                    ) {
                        \$form->add(
                            'mail_magazine',
                            CheckboxType::class,
                            [
                                'label' => null,
                                'required' => false,
                                'mapped' => false,
                                'attr' => [
                                    'autocomplete' => 'off',
                                ]
                            ]
                        );
                    }
                    // ログイン必須設定かつ未ログイン状態である場合
                    if (
                        \$this->Config->getLoginRequired() == \$this->eccubeConfig['amazon_pay_v2']['toggle']['on'] &&
                        !\$this->authorizationChecker->isGranted('IS_AUTHENTICATED_FULLY')
                    ) {
                        \$form
                            ->add(
                                'login_check_v2',
                                ChoiceType::class,
                                [
                                    'choices'  => [
                                        'まだ会員登録されていないお客様'   => 'regist',
                                        '会員登録がお済みのお客様' => 'login',
                                    ],
                                    'mapped' => false,
                                    'expanded' => true,
                                ]
                            )
                            ->add(
                                'amazon_login_email_v2',
                                TextType::class,
                                [
                                    'mapped' => false,
                                    'required' => false,
                                    'attr' => [
                                        'class' => 'form-control',
                                        'max_length' => 50,
                                    ],
                                ]
                            )
                            ->add(
                                'amazon_login_password_v2',
                                PasswordType::class,
                                [
                                    'mapped' => false,
                                    'required' => false,
                                    'always_empty' => false,
                                    'attr' => [
                                        'class' => 'form-control',
                                        'max_length' => 50,
                                    ],
                                ]
                            );
                    }
                }
            }
        });

        \$builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent \$event) {
            \$options = \$event->getForm()->getConfig()->getOptions();

            // 注文確認->注文処理時はフォームは定義されない.
            if (\$options['skip_add_form']) {
                // \$event->getData()ではなく、\$event->getForm()->getData()でOrderエンティティを取得できる
                /** @var Order \$Order */
                // \$Order = \$event->getForm()->getData();
                return;
            } else {
                \$Payment = \$this->paymentRepository->findOneBy(['method_class' => AmazonPay::class]);
                \$data = \$event->getData();
                \$form = \$event->getForm();
                // AmazonPayでなければremove
                if (!empty(\$data['Payment']) && \$Payment->getId() != \$data['Payment']) {
                    \$form
                        ->remove('customer_regist_v2')
                        ->remove('login_check_v2')
                        ->remove('amazon_login_email_v2')
                        ->remove('amazon_login_password_v2');
                }
            }
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
        return "AmazonPayV2_42_Bundle/Form/Extension/AmazonCustomerExtension.php";
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

/*
 * Amazon Pay V2 for EC-CUBE4.2
 * Copyright(c) 2023 EC-CUBE CO.,LTD. all rights reserved.
 *
 * https://www.ec-cube.co.jp/
 *
 * This program is not free software.
 * It applies to terms of service.
 *
 */

namespace Plugin\\AmazonPayV2_42_Bundle\\Form\\Extension;

use Eccube\\Common\\EccubeConfig;
use Eccube\\Entity\\Order;
use Eccube\\Form\\Type\\Shopping\\OrderType;
use Eccube\\Repository\\PaymentRepository;
use Eccube\\Repository\\PluginRepository;
use Plugin\\AmazonPayV2_42_Bundle\\Service\\Method\\AmazonPay;
use Plugin\\AmazonPayV2_42_Bundle\\Repository\\ConfigRepository;
use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CheckboxType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface;

/**
 * 注文手続き画面のFormを拡張し、会員登録フォームを追加する.
 * 支払い方法に応じてエクステンションを作成する.
 */
class AmazonCustomerExtension extends AbstractTypeExtension
{
    protected \$authorizationChecker;

    /**
     * @var PaymentRepository
     */
    protected \$paymentRepository;
    protected \$eccubeConfig;
    protected \$configRepository;
    protected \$container;


    public function __construct(
        EccubeConfig \$eccubeConfig,
        PaymentRepository \$paymentRepository,
        PluginRepository \$pluginRepository,
        ConfigRepository \$configRepository,
        ContainerInterface \$container,
        AuthorizationCheckerInterface \$authorizationChecker
    ) {
        \$this->paymentRepository = \$paymentRepository;
        \$this->pluginRepository = \$pluginRepository;
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->configRepository = \$configRepository;

        \$this->Config = \$this->configRepository->get();
        \$this->container = \$container;
        \$this->authorizationChecker = \$authorizationChecker;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$self = \$this;

        \$builder->addEventListener(FormEvents::POST_SET_DATA, function (FormEvent \$event) use (\$self) {
            /** @var Order \$data */
            \$data = \$event->getData();
            \$form = \$event->getForm();

            if (\$data->getPayment()) {
                // 支払い方法が一致する場合
                if (\$data->getPayment()->getMethodClass() === AmazonPay::class && !\$this->authorizationChecker->isGranted('IS_AUTHENTICATED_FULLY')) {
                    \$form
                        ->add(
                            'customer_regist_v2',
                            CheckboxType::class,
                            [
                                'label' => null,
                                'required' => false,
                                'mapped' => false,
                                'attr' => [
                                    'autocomplete' => 'off',
                                ]
                            ]
                        );
                    // メルマガプラグイン利用時はチェックボックスを追加
                    if (
                        \$this->pluginRepository->findOneBy(['code' => 'MailMagazine42', 'enabled' => true])
                        || \$this->pluginRepository->findOneBy(['code' => 'PostCarrier42', 'enabled' => true])
                    ) {
                        \$form->add(
                            'mail_magazine',
                            CheckboxType::class,
                            [
                                'label' => null,
                                'required' => false,
                                'mapped' => false,
                                'attr' => [
                                    'autocomplete' => 'off',
                                ]
                            ]
                        );
                    }
                    // ログイン必須設定かつ未ログイン状態である場合
                    if (
                        \$this->Config->getLoginRequired() == \$this->eccubeConfig['amazon_pay_v2']['toggle']['on'] &&
                        !\$this->authorizationChecker->isGranted('IS_AUTHENTICATED_FULLY')
                    ) {
                        \$form
                            ->add(
                                'login_check_v2',
                                ChoiceType::class,
                                [
                                    'choices'  => [
                                        'まだ会員登録されていないお客様'   => 'regist',
                                        '会員登録がお済みのお客様' => 'login',
                                    ],
                                    'mapped' => false,
                                    'expanded' => true,
                                ]
                            )
                            ->add(
                                'amazon_login_email_v2',
                                TextType::class,
                                [
                                    'mapped' => false,
                                    'required' => false,
                                    'attr' => [
                                        'class' => 'form-control',
                                        'max_length' => 50,
                                    ],
                                ]
                            )
                            ->add(
                                'amazon_login_password_v2',
                                PasswordType::class,
                                [
                                    'mapped' => false,
                                    'required' => false,
                                    'always_empty' => false,
                                    'attr' => [
                                        'class' => 'form-control',
                                        'max_length' => 50,
                                    ],
                                ]
                            );
                    }
                }
            }
        });

        \$builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent \$event) {
            \$options = \$event->getForm()->getConfig()->getOptions();

            // 注文確認->注文処理時はフォームは定義されない.
            if (\$options['skip_add_form']) {
                // \$event->getData()ではなく、\$event->getForm()->getData()でOrderエンティティを取得できる
                /** @var Order \$Order */
                // \$Order = \$event->getForm()->getData();
                return;
            } else {
                \$Payment = \$this->paymentRepository->findOneBy(['method_class' => AmazonPay::class]);
                \$data = \$event->getData();
                \$form = \$event->getForm();
                // AmazonPayでなければremove
                if (!empty(\$data['Payment']) && \$Payment->getId() != \$data['Payment']) {
                    \$form
                        ->remove('customer_regist_v2')
                        ->remove('login_check_v2')
                        ->remove('amazon_login_email_v2')
                        ->remove('amazon_login_password_v2');
                }
            }
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
", "AmazonPayV2_42_Bundle/Form/Extension/AmazonCustomerExtension.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\AmazonPayV2_42_Bundle\\Form\\Extension\\AmazonCustomerExtension.php");
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
