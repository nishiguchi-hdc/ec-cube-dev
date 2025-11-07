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

/* AmazonPayV2_42_Bundle/Form/Type/Admin/ConfigType.php */
class __TwigTemplate_61f798c3b28888d31333c4e2161b441d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Form/Type/Admin/ConfigType.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Form/Type/Admin/ConfigType.php"));

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

namespace Plugin\\AmazonPayV2_42_Bundle\\Form\\Type\\Admin;

use Eccube\\Common\\EccubeConfig;
use Doctrine\\ORM\\EntityManagerInterface;
use Plugin\\AmazonPayV2_42_Bundle\\Entity\\AmazonBanner;
use Plugin\\AmazonPayV2_42_Bundle\\Entity\\Config;
use Plugin\\AmazonPayV2_42_Bundle\\Service\\AmazonBannerService;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Validator\\Constraints as Assert;
use Symfony\\Component\\Validator\\Context\\ExecutionContextInterface;

class ConfigType extends AbstractType
{
    /**
     * @var EccubeConfig
     */
    protected \$eccubeConfig;

    /**
     * Undocumented variable
     *
     * @var \\Doctrine\\ORM\\EntityManagerInterface
     */
    protected \$entityManager;

    /**
     * Amazonバナーサービス
     *
     * @var AmazonBannerService
     */
    protected \$amazonBannerService;

    /**
     * ConfigType constructor.
     *
     * @param EccubeConfig \$eccubeConfig
     */
    public function __construct(
        EccubeConfig \$eccubeConfig,
        EntityManagerInterface \$entityManager,
        AmazonBannerService \$amazonBannerService
    ) {
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->entityManager = \$entityManager;
        \$this->amazonBannerService = \$amazonBannerService;
    }

    /**
     * Build config type form
     *
     * @param FormBuilderInterface \$builder
     * @param array \$options
     * @return type
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$bannerOptionsOnTop = \$this->amazonBannerService->getBannerOptions(AmazonBanner::PAGE_TOP);
        \$bannerOptionsOnCart = \$this->amazonBannerService->getBannerOptions(AmazonBanner::PAGE_CART);

        \$builder
            ->add('amazon_account_mode', ChoiceType::class, [
                'choices' => [
                    '共用テストアカウント(イーシーキューブ配布)' => \$this->eccubeConfig['amazon_pay_v2']['account_mode']['shared'],
                    '自社契約アカウント' => \$this->eccubeConfig['amazon_pay_v2']['account_mode']['owned'],
                ],
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※ アカウント切り替えが選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('env', ChoiceType::class, [
                'choices' => [
                    'ダミー決済' => \$this->eccubeConfig['amazon_pay_v2']['env']['sandbox'],
                    '本番決済' => \$this->eccubeConfig['amazon_pay_v2']['env']['prod'],
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('seller_id', TextType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\\Callback(function (
                        \$objcet,
                        ExecutionContextInterface \$context
                    ) {
                        \$mode = \$context->getRoot()->get('amazon_account_mode')->getData();
                        if (\$mode == \$this->eccubeConfig['amazon_pay_v2']['account_mode']['owned'] && !\$objcet) {
                            \$context->buildViolation('※ 出品者IDが入力されていません。')
                                ->atPath('seller_id')
                                ->addViolation();
                        }
                    }),
                    new Assert\\Length(['max' => \$this->eccubeConfig['eccube_stext_len']]),
                ],
            ])

            ->add('public_key_id', TextType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\\Callback(function (
                        \$objcet,
                        ExecutionContextInterface \$context
                    ) {
                        \$mode = \$context->getRoot()->get('amazon_account_mode')->getData();
                        if (\$mode == \$this->eccubeConfig['amazon_pay_v2']['account_mode']['owned'] && !\$objcet) {
                            \$context->buildViolation('※ パブリックキーIDが入力されていません。')
                                ->atPath('public_key_id')
                                ->addViolation();
                        }
                    }),
                    new Assert\\Length(['max' => \$this->eccubeConfig['eccube_stext_len']]),
                ],
            ])

            ->add('private_key_path', TextType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\\Callback(function (
                        \$objcet,
                        ExecutionContextInterface \$context
                    ) {
                        \$mode = \$context->getRoot()->get('amazon_account_mode')->getData();
                        if (\$mode == \$this->eccubeConfig['amazon_pay_v2']['account_mode']['owned'] && !\$objcet) {
                            \$context->buildViolation('※ プライベートキーパスが入力されていません。')
                                ->atPath('private_key_path')
                                ->addViolation();
                        }
                    }),
                    new Assert\\Length(['max' => \$this->eccubeConfig['eccube_smtext_len']]),
                ],
            ])

            ->add('client_id', TextType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\\Callback(function (
                        \$objcet,
                        ExecutionContextInterface \$context
                    ) {
                        \$mode = \$context->getRoot()->get('amazon_account_mode')->getData();
                        if (\$mode == \$this->eccubeConfig['amazon_pay_v2']['account_mode']['owned'] && !\$objcet) {
                            \$context->buildViolation('※ クライアントIDが入力されていません。')
                                ->atPath('client_id')
                                ->addViolation();
                        }
                    }),
                    new Assert\\Length(['max' => \$this->eccubeConfig['eccube_smtext_len']]),
                ],
            ])

            ->add('test_client_id', TextType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\\Callback(function (
                        \$objcet,
                        ExecutionContextInterface \$context
                    ) {
                        \$mode = \$context->getRoot()->get('amazon_account_mode')->getData();
                        if (\$mode == \$this->eccubeConfig['amazon_pay_v2']['account_mode']['shared'] && !\$objcet) {
                            \$context->buildViolation('※ テスト用クライアントIDが入力されていません。')
                                ->atPath('test_client_id')
                                ->addViolation();
                        }
                    }),
                    new Assert\\Length(['max' => \$this->eccubeConfig['eccube_smtext_len']]),
                ],
            ])

            ->add('prod_key', TextType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\\Length(['max' => \$this->eccubeConfig['eccube_smtext_len']]),
                ],
            ])

            ->add('sale', ChoiceType::class, [
                'choices' => [
                    '仮売上' => \$this->eccubeConfig['amazon_pay_v2']['sale']['authori'],
                    '売上' => \$this->eccubeConfig['amazon_pay_v2']['sale']['capture'],
                ],
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※ 仮売上 or 売上が選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('use_confirm_page', ChoiceType::class, [
                'choices' => [
                    '表示' => \$this->eccubeConfig['amazon_pay_v2']['toggle']['on'],
                    '非表示' => \$this->eccubeConfig['amazon_pay_v2']['toggle']['off'],
                ],
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※ 決済確認画面が選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('auto_login', ChoiceType::class, [
                'choices' => [
                    'オン' => \$this->eccubeConfig['amazon_pay_v2']['toggle']['on'],
                    'オフ' => \$this->eccubeConfig['amazon_pay_v2']['toggle']['off'],
                ],
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※ 自動ログインが選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('login_required', ChoiceType::class, [
                'choices' => [
                    'オン' => \$this->eccubeConfig['amazon_pay_v2']['toggle']['on'],
                    'オフ' => \$this->eccubeConfig['amazon_pay_v2']['toggle']['off'],
                ],
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※ ログイン・会員登録必須が選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('order_correct', ChoiceType::class, [
                'choices' => [
                    'オン' => \$this->eccubeConfig['amazon_pay_v2']['toggle']['on'],
                    'オフ' => \$this->eccubeConfig['amazon_pay_v2']['toggle']['off'],
                ],
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※ 受注補正機能が選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('mail_notices', TextareaType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\\Length([
                        'max' => \$this->eccubeConfig['eccube_ltext_len'],
                    ]),
                ],
            ])

            ->add('use_cart_button', ChoiceType::class, [
                'choices' => [
                    'オン' => \$this->eccubeConfig['amazon_pay_v2']['toggle']['on'],
                    'オフ' => \$this->eccubeConfig['amazon_pay_v2']['toggle']['off'],
                ],
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※ Amazonボタン設置(カート画面)が選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('cart_button_color', ChoiceType::class, [
                'choices' => [
                    'ゴールド' => 'Gold',
                    'ダークグレー' => 'DarkGray',
                    'ライトグレー' => 'LightGray',
                ],
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※ Amazonログインボタンカラー(カート)が選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('cart_button_place', ChoiceType::class, [
                'choices' => [
                    '自動' => \$this->eccubeConfig['amazon_pay_v2']['button_place']['auto'],
                    '手動' => \$this->eccubeConfig['amazon_pay_v2']['button_place']['manual'],
                ],
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※ Amazonログインボタン配置(カート画面)が選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('use_mypage_login_button', ChoiceType::class, [
                'choices' => [
                    'オン' => \$this->eccubeConfig['amazon_pay_v2']['toggle']['on'],
                    'オフ' => \$this->eccubeConfig['amazon_pay_v2']['toggle']['off'],
                ],
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※「LoginWithAmazon」ボタン設置(MYページ/ログイン)が選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('mypage_login_button_color', ChoiceType::class, [
                'choices' => [
                    'ゴールド' => 'Gold',
                    'ダークグレー' => 'DarkGray',
                    'ライトグレー' => 'LightGray',
                ],
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※「LoginWithAmazon」ボタンカラー(MYページ/ログイン)が選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('mypage_login_button_place', ChoiceType::class, [
                'choices' => [
                    '自動' => \$this->eccubeConfig['amazon_pay_v2']['button_place']['auto'],
                    '手動' => \$this->eccubeConfig['amazon_pay_v2']['button_place']['manual'],
                ],
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※「LoginWithAmazon」ボタン配置(MYページ/ログイン)が選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('use_amazon_banner_on_top', ChoiceType::class, [
                'choices' => [
                    'オン' => \$this->eccubeConfig['amazon_pay_v2']['toggle']['on'],
                    'オフ' => \$this->eccubeConfig['amazon_pay_v2']['toggle']['off'],
                ],
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※ Amazon特典告知バナー設定(トップページ)が選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('amazon_banner_size_on_top', ChoiceType::class, [
                'choices' => \$bannerOptionsOnTop,
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※Amazon特典告知バナーサイズ(トップページ)が選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('amazon_banner_place_on_top', ChoiceType::class, [
                'choices' => [
                    '自動' => \$this->eccubeConfig['amazon_pay_v2']['button_place']['auto'],
                    '手動' => \$this->eccubeConfig['amazon_pay_v2']['button_place']['manual'],
                ],
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※Amazon特典告知バナー配置方法(トップページ)が選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('use_amazon_banner_on_cart', ChoiceType::class, [
                'choices' => [
                    'オン' => \$this->eccubeConfig['amazon_pay_v2']['toggle']['on'],
                    'オフ' => \$this->eccubeConfig['amazon_pay_v2']['toggle']['off'],
                ],
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※ Amazon特典告知バナー設定(カート画面)が選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('amazon_banner_size_on_cart', ChoiceType::class, [
                'choices' => \$bannerOptionsOnCart,
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※Amazon特典告知バナーサイズ(カート画面)が選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('amazon_banner_place_on_cart', ChoiceType::class, [
                'choices' => [
                    '自動' => \$this->eccubeConfig['amazon_pay_v2']['button_place']['auto'],
                    '手動' => \$this->eccubeConfig['amazon_pay_v2']['button_place']['manual'],
                ],
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※Amazon特典告知バナー配置方法(カート画面)が選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ]);
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'data_class' => Config::class,
        ]);
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
        return "AmazonPayV2_42_Bundle/Form/Type/Admin/ConfigType.php";
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

namespace Plugin\\AmazonPayV2_42_Bundle\\Form\\Type\\Admin;

use Eccube\\Common\\EccubeConfig;
use Doctrine\\ORM\\EntityManagerInterface;
use Plugin\\AmazonPayV2_42_Bundle\\Entity\\AmazonBanner;
use Plugin\\AmazonPayV2_42_Bundle\\Entity\\Config;
use Plugin\\AmazonPayV2_42_Bundle\\Service\\AmazonBannerService;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Validator\\Constraints as Assert;
use Symfony\\Component\\Validator\\Context\\ExecutionContextInterface;

class ConfigType extends AbstractType
{
    /**
     * @var EccubeConfig
     */
    protected \$eccubeConfig;

    /**
     * Undocumented variable
     *
     * @var \\Doctrine\\ORM\\EntityManagerInterface
     */
    protected \$entityManager;

    /**
     * Amazonバナーサービス
     *
     * @var AmazonBannerService
     */
    protected \$amazonBannerService;

    /**
     * ConfigType constructor.
     *
     * @param EccubeConfig \$eccubeConfig
     */
    public function __construct(
        EccubeConfig \$eccubeConfig,
        EntityManagerInterface \$entityManager,
        AmazonBannerService \$amazonBannerService
    ) {
        \$this->eccubeConfig = \$eccubeConfig;
        \$this->entityManager = \$entityManager;
        \$this->amazonBannerService = \$amazonBannerService;
    }

    /**
     * Build config type form
     *
     * @param FormBuilderInterface \$builder
     * @param array \$options
     * @return type
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$bannerOptionsOnTop = \$this->amazonBannerService->getBannerOptions(AmazonBanner::PAGE_TOP);
        \$bannerOptionsOnCart = \$this->amazonBannerService->getBannerOptions(AmazonBanner::PAGE_CART);

        \$builder
            ->add('amazon_account_mode', ChoiceType::class, [
                'choices' => [
                    '共用テストアカウント(イーシーキューブ配布)' => \$this->eccubeConfig['amazon_pay_v2']['account_mode']['shared'],
                    '自社契約アカウント' => \$this->eccubeConfig['amazon_pay_v2']['account_mode']['owned'],
                ],
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※ アカウント切り替えが選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('env', ChoiceType::class, [
                'choices' => [
                    'ダミー決済' => \$this->eccubeConfig['amazon_pay_v2']['env']['sandbox'],
                    '本番決済' => \$this->eccubeConfig['amazon_pay_v2']['env']['prod'],
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('seller_id', TextType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\\Callback(function (
                        \$objcet,
                        ExecutionContextInterface \$context
                    ) {
                        \$mode = \$context->getRoot()->get('amazon_account_mode')->getData();
                        if (\$mode == \$this->eccubeConfig['amazon_pay_v2']['account_mode']['owned'] && !\$objcet) {
                            \$context->buildViolation('※ 出品者IDが入力されていません。')
                                ->atPath('seller_id')
                                ->addViolation();
                        }
                    }),
                    new Assert\\Length(['max' => \$this->eccubeConfig['eccube_stext_len']]),
                ],
            ])

            ->add('public_key_id', TextType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\\Callback(function (
                        \$objcet,
                        ExecutionContextInterface \$context
                    ) {
                        \$mode = \$context->getRoot()->get('amazon_account_mode')->getData();
                        if (\$mode == \$this->eccubeConfig['amazon_pay_v2']['account_mode']['owned'] && !\$objcet) {
                            \$context->buildViolation('※ パブリックキーIDが入力されていません。')
                                ->atPath('public_key_id')
                                ->addViolation();
                        }
                    }),
                    new Assert\\Length(['max' => \$this->eccubeConfig['eccube_stext_len']]),
                ],
            ])

            ->add('private_key_path', TextType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\\Callback(function (
                        \$objcet,
                        ExecutionContextInterface \$context
                    ) {
                        \$mode = \$context->getRoot()->get('amazon_account_mode')->getData();
                        if (\$mode == \$this->eccubeConfig['amazon_pay_v2']['account_mode']['owned'] && !\$objcet) {
                            \$context->buildViolation('※ プライベートキーパスが入力されていません。')
                                ->atPath('private_key_path')
                                ->addViolation();
                        }
                    }),
                    new Assert\\Length(['max' => \$this->eccubeConfig['eccube_smtext_len']]),
                ],
            ])

            ->add('client_id', TextType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\\Callback(function (
                        \$objcet,
                        ExecutionContextInterface \$context
                    ) {
                        \$mode = \$context->getRoot()->get('amazon_account_mode')->getData();
                        if (\$mode == \$this->eccubeConfig['amazon_pay_v2']['account_mode']['owned'] && !\$objcet) {
                            \$context->buildViolation('※ クライアントIDが入力されていません。')
                                ->atPath('client_id')
                                ->addViolation();
                        }
                    }),
                    new Assert\\Length(['max' => \$this->eccubeConfig['eccube_smtext_len']]),
                ],
            ])

            ->add('test_client_id', TextType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\\Callback(function (
                        \$objcet,
                        ExecutionContextInterface \$context
                    ) {
                        \$mode = \$context->getRoot()->get('amazon_account_mode')->getData();
                        if (\$mode == \$this->eccubeConfig['amazon_pay_v2']['account_mode']['shared'] && !\$objcet) {
                            \$context->buildViolation('※ テスト用クライアントIDが入力されていません。')
                                ->atPath('test_client_id')
                                ->addViolation();
                        }
                    }),
                    new Assert\\Length(['max' => \$this->eccubeConfig['eccube_smtext_len']]),
                ],
            ])

            ->add('prod_key', TextType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\\Length(['max' => \$this->eccubeConfig['eccube_smtext_len']]),
                ],
            ])

            ->add('sale', ChoiceType::class, [
                'choices' => [
                    '仮売上' => \$this->eccubeConfig['amazon_pay_v2']['sale']['authori'],
                    '売上' => \$this->eccubeConfig['amazon_pay_v2']['sale']['capture'],
                ],
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※ 仮売上 or 売上が選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('use_confirm_page', ChoiceType::class, [
                'choices' => [
                    '表示' => \$this->eccubeConfig['amazon_pay_v2']['toggle']['on'],
                    '非表示' => \$this->eccubeConfig['amazon_pay_v2']['toggle']['off'],
                ],
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※ 決済確認画面が選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('auto_login', ChoiceType::class, [
                'choices' => [
                    'オン' => \$this->eccubeConfig['amazon_pay_v2']['toggle']['on'],
                    'オフ' => \$this->eccubeConfig['amazon_pay_v2']['toggle']['off'],
                ],
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※ 自動ログインが選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('login_required', ChoiceType::class, [
                'choices' => [
                    'オン' => \$this->eccubeConfig['amazon_pay_v2']['toggle']['on'],
                    'オフ' => \$this->eccubeConfig['amazon_pay_v2']['toggle']['off'],
                ],
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※ ログイン・会員登録必須が選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('order_correct', ChoiceType::class, [
                'choices' => [
                    'オン' => \$this->eccubeConfig['amazon_pay_v2']['toggle']['on'],
                    'オフ' => \$this->eccubeConfig['amazon_pay_v2']['toggle']['off'],
                ],
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※ 受注補正機能が選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('mail_notices', TextareaType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\\Length([
                        'max' => \$this->eccubeConfig['eccube_ltext_len'],
                    ]),
                ],
            ])

            ->add('use_cart_button', ChoiceType::class, [
                'choices' => [
                    'オン' => \$this->eccubeConfig['amazon_pay_v2']['toggle']['on'],
                    'オフ' => \$this->eccubeConfig['amazon_pay_v2']['toggle']['off'],
                ],
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※ Amazonボタン設置(カート画面)が選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('cart_button_color', ChoiceType::class, [
                'choices' => [
                    'ゴールド' => 'Gold',
                    'ダークグレー' => 'DarkGray',
                    'ライトグレー' => 'LightGray',
                ],
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※ Amazonログインボタンカラー(カート)が選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('cart_button_place', ChoiceType::class, [
                'choices' => [
                    '自動' => \$this->eccubeConfig['amazon_pay_v2']['button_place']['auto'],
                    '手動' => \$this->eccubeConfig['amazon_pay_v2']['button_place']['manual'],
                ],
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※ Amazonログインボタン配置(カート画面)が選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('use_mypage_login_button', ChoiceType::class, [
                'choices' => [
                    'オン' => \$this->eccubeConfig['amazon_pay_v2']['toggle']['on'],
                    'オフ' => \$this->eccubeConfig['amazon_pay_v2']['toggle']['off'],
                ],
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※「LoginWithAmazon」ボタン設置(MYページ/ログイン)が選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('mypage_login_button_color', ChoiceType::class, [
                'choices' => [
                    'ゴールド' => 'Gold',
                    'ダークグレー' => 'DarkGray',
                    'ライトグレー' => 'LightGray',
                ],
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※「LoginWithAmazon」ボタンカラー(MYページ/ログイン)が選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('mypage_login_button_place', ChoiceType::class, [
                'choices' => [
                    '自動' => \$this->eccubeConfig['amazon_pay_v2']['button_place']['auto'],
                    '手動' => \$this->eccubeConfig['amazon_pay_v2']['button_place']['manual'],
                ],
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※「LoginWithAmazon」ボタン配置(MYページ/ログイン)が選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('use_amazon_banner_on_top', ChoiceType::class, [
                'choices' => [
                    'オン' => \$this->eccubeConfig['amazon_pay_v2']['toggle']['on'],
                    'オフ' => \$this->eccubeConfig['amazon_pay_v2']['toggle']['off'],
                ],
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※ Amazon特典告知バナー設定(トップページ)が選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('amazon_banner_size_on_top', ChoiceType::class, [
                'choices' => \$bannerOptionsOnTop,
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※Amazon特典告知バナーサイズ(トップページ)が選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('amazon_banner_place_on_top', ChoiceType::class, [
                'choices' => [
                    '自動' => \$this->eccubeConfig['amazon_pay_v2']['button_place']['auto'],
                    '手動' => \$this->eccubeConfig['amazon_pay_v2']['button_place']['manual'],
                ],
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※Amazon特典告知バナー配置方法(トップページ)が選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('use_amazon_banner_on_cart', ChoiceType::class, [
                'choices' => [
                    'オン' => \$this->eccubeConfig['amazon_pay_v2']['toggle']['on'],
                    'オフ' => \$this->eccubeConfig['amazon_pay_v2']['toggle']['off'],
                ],
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※ Amazon特典告知バナー設定(カート画面)が選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('amazon_banner_size_on_cart', ChoiceType::class, [
                'choices' => \$bannerOptionsOnCart,
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※Amazon特典告知バナーサイズ(カート画面)が選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ])

            ->add('amazon_banner_place_on_cart', ChoiceType::class, [
                'choices' => [
                    '自動' => \$this->eccubeConfig['amazon_pay_v2']['button_place']['auto'],
                    '手動' => \$this->eccubeConfig['amazon_pay_v2']['button_place']['manual'],
                ],
                'constraints' => [
                    new Assert\\NotBlank(['message' => '※Amazon特典告知バナー配置方法(カート画面)が選択されていません。']),
                ],
                'multiple' => false,
                'expanded' => true,
            ]);
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'data_class' => Config::class,
        ]);
    }
}
", "AmazonPayV2_42_Bundle/Form/Type/Admin/ConfigType.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\AmazonPayV2_42_Bundle\\Form\\Type\\Admin\\ConfigType.php");
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
