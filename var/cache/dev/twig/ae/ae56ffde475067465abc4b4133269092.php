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

/* AmazonPayV2_42_Bundle/PluginManager.php */
class __TwigTemplate_478a718cf1ad6500570f8f8df5d399b8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/PluginManager.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/PluginManager.php"));

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

namespace Plugin\\AmazonPayV2_42_Bundle;

use Symfony\\Component\\Filesystem\\Filesystem;
use Psr\\Container\\ContainerInterface;
use Eccube\\Plugin\\AbstractPluginManager;
use Eccube\\Common\\Constant;
use Eccube\\Entity\\Payment;
use Eccube\\Entity\\PaymentOption;
use Eccube\\Entity\\Page;
use Eccube\\Entity\\PageLayout;
use Eccube\\Entity\\Csv;
use Eccube\\Entity\\Plugin;
use Eccube\\Entity\\Layout;
use Eccube\\Entity\\BaseInfo;
use Eccube\\Entity\\Master\\CsvType;
use Eccube\\Repository\\BaseInfoRepository;
use Eccube\\Repository\\PageRepository;
use Eccube\\Repository\\LayoutRepository;
use Eccube\\Repository\\PageLayoutRepository;
use Eccube\\Repository\\PaymentRepository;
use Eccube\\Repository\\DeliveryRepository;
use Eccube\\Repository\\Master\\CsvTypeRepository;
use Eccube\\Repository\\CsvRepository;
use Symfony\\Component\\Mailer\\Transport;
use Symfony\\Component\\Mailer\\Mailer;
use Symfony\\Component\\Mime\\Address;
use Symfony\\Component\\Mime\\Email;
use Plugin\\AmazonPayV2_42_Bundle\\Entity\\Master\\AmazonStatus;
use Plugin\\AmazonPayV2_42_Bundle\\Entity\\Config;
use Plugin\\AmazonPayV2_42_Bundle\\Form\\Type\\Master\\ConfigTypeMaster as Master;
use Plugin\\AmazonPayV2_42_Bundle\\Service\\Method\\AmazonPay;
use Eccube\\Repository\\PluginRepository;
use Eccube\\Service\\PluginService;
use Plugin\\AmazonPayV2_42_Bundle\\Entity\\AmazonBanner;

class PluginManager extends AbstractPluginManager
{
    /**
     * PluginManager constructor.
     */
    public function __construct()
    {
        // コピー元のディレクトリ
        \$this->origin_css = __DIR__ . '/Resource/copy/css';
        \$this->origin_plugin_data = __DIR__ . '/Resource/PluginData';

        // コピー先のディレクトリ
        \$this->target_css = __DIR__ . '/../../../html/template/default/assets/css';
        \$this->target_plugin_data = __DIR__ . '/../../PluginData/AmazonPayV2_42_Bundle';

        \$this->target_user_data = __DIR__ . '/../../../html/user_data';
    }

    public function install(array \$config, ContainerInterface \$serviceContainer)
    {
        // リソースファイルのコピー
        \$this->copyAssets(\$serviceContainer);

        // lastNameListのコピー
        \$file = new Filesystem();
        if (!\$file->exists(\$this->target_plugin_data . '/lastNameList.csv')) {
            \$file->copy(\$this->origin_plugin_data . '/lastNameList.csv', \$this->target_plugin_data . '/lastNameList.csv');
        }

        // amazon_pay_config.iniの設定
        \$this->setConfigIni();

        // メール送信
        try {
            log_info(\"AmazonPayプラグイン(V2)インストールメール送信処理開始\");
            \$this->sendAutoMail(\$config, \$serviceContainer, 'インストール');
        } catch (\\Exception \$e) {
            log_info(\"AmazonPayプラグイン(V2)インストールメール送信に失敗しました。\" . \$e->getMessage());
        }
        log_info(\"AmazonPayプラグイン(V2)インストールメール送信処理終了\");
    }

    public function enable(array \$config, ContainerInterface \$serviceContainer)
    {
        \$PluginRepository = \$serviceContainer->get(\"doctrine.orm.entity_manager\")->getRepository(Plugin::class);
        //\$PluginService = \$serviceContainer->get('Eccube\\Service\\PluginService');

        \$Plugin = \$PluginRepository->findByCode('AmazonPayV2_42_Bundle');
        //\$PluginService->generateProxyAndUpdateSchema(\$Plugin, \$config);

        \$this->createAmazonPay(\$serviceContainer);
        \$this->createConfigCsv(\$serviceContainer);
        \$this->createAmazonPage(\$serviceContainer);

        \$this->createPlgAmazonPayBanner(\$serviceContainer);
        \$this->createPlgAmazonPayConfig(\$serviceContainer);
        \$this->createPlgAmazonPayStatus(\$serviceContainer);
    }

    public function disable(array \$config, ContainerInterface \$serviceContainer)
    {
        \$this->disableAmazonPay(\$serviceContainer);
    }

    public function uninstall(array \$config, ContainerInterface \$serviceContainer)
    {
        // リソースファイルの削除
        \$this->removeAssets(\$serviceContainer);

        // lastNameListの削除
        \$file = new Filesystem();
        \$file->remove(\$this->target_plugin_data . '/lastNameList.csv');

        // 関連DB削除
        \$this->removeConfigCsv(\$serviceContainer);
        \$this->removeAmazonPage(\$serviceContainer);

        // メール送信
        try {
            log_info(\"AmazonPayプラグイン(V2)削除メール送信処理開始\");
            \$this->sendAutoMail(\$config, \$serviceContainer, '削除');
        } catch (\\Exception \$e) {
            log_info(\"AmazonPayプラグイン(V2)削除メール送信に失敗しました。\" . \$e->getMessage());
        }
        log_info(\"AmazonPayプラグイン(V2)削除メール送信処理終了\");
    }

    public function update(array \$config, ContainerInterface \$serviceContainer)
    {
        // リソースファイルのアップデート
        \$this->updateAssets(\$serviceContainer);
        // ページのアップデート
        \$this->createAmazonPage(\$serviceContainer);

        \$this->createPlgAmazonPayBanner(\$serviceContainer);

        // メール送信
        try {
            log_info(\"AmazonPayプラグイン(V2)アップデートメール送信処理開始\");
            \$this->sendAutoMail(\$config, \$serviceContainer, 'アップデート');
        } catch (\\Exception \$e) {
            log_info(\"AmazonPayプラグイン(V2)アップデートメール送信に失敗しました。\" . \$e->getMessage());
        }
    }

    private function createAmazonPay(ContainerInterface \$serviceContainer)
    {
        \$entityManage = \$serviceContainer->get('doctrine.orm.entity_manager');
        \$paymentRepository = \$entityManage->getRepository(Payment::class);

        \$Payment = \$paymentRepository->findOneBy(['method_class' => AmazonPay::class]);
        if (\$Payment) {
            \$Payment->setVisible(true);
            \$entityManage->flush(\$Payment);

            return;
        }

        \$Payment = \$paymentRepository->findOneBy([], ['sort_no' => 'DESC']);
        \$sortNo = \$Payment ? \$Payment->getSortNo() + 1 : 1;

        // AmazonPay
        \$Payment = new Payment();
        \$Payment->setCharge(0);
        \$Payment->setSortNo(\$sortNo);
        \$Payment->setVisible(true);
        \$Payment->setMethod('Amazon Pay');
        \$Payment->setMethodClass(AmazonPay::class);
        \$Payment->setRuleMin(0);

        \$entityManage->persist(\$Payment);
        \$entityManage->flush(\$Payment);
    }

    private function disableAmazonPay(ContainerInterface \$serviceContainer)
    {
        \$entityManage = \$serviceContainer->get('doctrine.orm.entity_manager');
        \$paymentRepository = \$entityManage->getRepository(Payment::class);

        \$Payment = \$paymentRepository->findOneBy(['method_class' => AmazonPay::class]);
        if (\$Payment) {
            \$Payment->setVisible(false);
            \$entityManage->flush(\$Payment);
        }
    }

    private function createConfigCsv(ContainerInterface \$serviceContainer)
    {
        \$entityManage = \$serviceContainer->get('doctrine.orm.entity_manager');
        \$csvTypeRepository = \$entityManage->getRepository(CsvType::class);
        \$csvRepository = \$entityManage->getRepository(Csv::class);

        \$OrderCsvType = \$csvTypeRepository->find(3);

        \$LastCsv = \$csvRepository->findOneBy(['CsvType' => \$OrderCsvType], ['sort_no' => 'DESC']);

        \$sortNo = \$LastCsv->getSortNo();

        \$arrCsv = [
            [
                'entity_name' => 'Eccube\\\\Entity\\\\Order',
                'field_name' => 'amazonpay_v2_charge_permission_id',
                'reference_field_name' => null,
                'disp_name' => 'Amazon参照ID',
            ],
            [
                'entity_name' => 'Eccube\\\\Entity\\\\Order',
                'field_name' => 'AmazonPayV2AmazonStatus',
                'reference_field_name' => 'name',
                'disp_name' => 'Amazon状況',
            ]
        ];

        foreach (\$arrCsv as \$c) {
            \$Csv = \$csvRepository->findOneBy(['disp_name' => \$c['disp_name']]);
            if (\$Csv) {
                continue;
            }
            \$Csv = new Csv();

            \$Csv->setCsvType(\$OrderCsvType);
            \$Csv->setEntityName(\$c['entity_name']);
            \$Csv->setFieldName(\$c['field_name']);
            \$Csv->setReferenceFieldName(\$c['reference_field_name']);
            \$Csv->setDispName(\$c['disp_name']);
            \$Csv->setSortNo(\$sortNo++);
            \$Csv->setCreateDate(new \\DateTime());
            \$Csv->setUpdateDate(new \\DateTime());

            \$entityManage->persist(\$Csv);
            \$entityManage->flush(\$Csv);
        }
    }

    private function removeConfigCsv(ContainerInterface \$serviceContainer)
    {
        \$entityManage = \$serviceContainer->get('doctrine.orm.entity_manager');
        \$csvTypeRepository = \$entityManage->getRepository(CsvType::class);
        \$csvRepository = \$entityManage->getRepository(Csv::class);

        \$OrderCsvType = \$csvTypeRepository->find(3);

        \$arrCsv = [
            [
                'entity_name' => 'Eccube\\\\Entity\\\\Order',
                'field_name' => 'amazonpay_v2_charge_permission_id',
                'reference_field_name' => null,
                'disp_name' => 'Amazon参照ID',
            ],
            [
                'entity_name' => 'Eccube\\\\Entity\\\\Order',
                'field_name' => 'AmazonPayV2AmazonStatus',
                'reference_field_name' => 'name',
                'disp_name' => 'Amazon状況',
            ]
        ];

        foreach (\$arrCsv as \$c) {
            \$Csv = \$csvRepository->findOneBy(\$c);
            if (\$Csv) {
                \$entityManage->remove(\$Csv);
                \$entityManage->flush();
            }
        }
    }

    private function createAmazonPage(ContainerInterface \$serviceContainer)
    {
        \$entityManage = \$serviceContainer->get('doctrine.orm.entity_manager');

        // ページ追加
        \$pageRepository = \$entityManage->getRepository(Page::class);
        \$layoutRepository = \$entityManage->getRepository(Layout::class);
        \$pageLayoutRepository = \$entityManage->getRepository(PageLayout::class);
        \$Layout = \$layoutRepository->find(2);

        \$LastPageLayout = \$pageLayoutRepository->findOneBy([], ['sort_no' => 'DESC']);
        \$sortNo = \$LastPageLayout->getSortNo();

        \$arrPage = [
            [
                'page_name' => '商品購入(Amazon Pay)',
                'url' => 'amazon_pay_shopping',
                'file_name' => 'Shopping/index'
            ],
            [
                'page_name' => '商品購入(Amazon Pay)/ご注文確認',
                'url' => 'amazon_pay_shopping_confirm',
                'file_name' => 'Shopping/confirm'
            ],
        ];

        foreach (\$arrPage as \$p) {
            \$Page = \$pageRepository->findOneBy(['url' => \$p['url']]);
            if (\$Page) {
                continue;
            }

            \$Page = new Page();
            \$Page->setName(\$p['page_name']);
            \$Page->setUrl(\$p['url']);
            \$Page->setFileName(\$p['file_name']);
            \$Page->setEditType(Page::EDIT_TYPE_DEFAULT);
            \$Page->setCreateDate(new \\DateTime());
            \$Page->setUpdateDate(new \\DateTime());
            \$Page->setMetaRobots('noindex');

            \$entityManage->persist(\$Page);
            \$entityManage->flush(\$Page);

            \$PageLayout = new PageLayout();
            \$PageLayout->setPage(\$Page);
            \$PageLayout->setPageId(\$Page->getId());
            \$PageLayout->setLayout(\$Layout);
            \$PageLayout->setLayoutId(\$Layout->getId());
            \$PageLayout->setSortNo(\$sortNo++);

            \$entityManage->persist(\$PageLayout);
            \$entityManage->flush(\$PageLayout);
        }
    }

    private function removeAmazonPage(ContainerInterface \$serviceContainer)
    {
        \$entityManage = \$serviceContainer->get('doctrine.orm.entity_manager');
        \$pageRepository = \$entityManage->getRepository(Page::class);

        \$arrPage = [
            [
                'name' => '商品購入(Amazon Pay)',
                'url' => 'amazon_pay_shopping',
                'file_name' => 'Shopping/index'
            ],
            [
                'name' => '商品購入(Amazon Pay)/ご注文確認',
                'url' => 'amazon_pay_shopping_confirm',
                'file_name' => 'Shopping/confirm'
            ],
        ];

        foreach (\$arrPage as \$p) {
            \$Page = \$pageRepository->findOneBy(\$p);
            if (\$Page) {
                foreach (\$Page->getPageLayouts() as \$PageLayout) {
                    \$Page->removePageLayout(\$PageLayout);
                    \$entityManage->remove(\$PageLayout);
                    \$entityManage->flush(\$PageLayout);
                }

                \$entityManage->remove(\$Page);
                \$entityManage->flush();
            }
        }
    }

    /**
     * create table plg_amazon_pay_config
     *
     * @param ContainerInterface \$serviceContainer
     */
    public function createPlgAmazonPayConfig(ContainerInterface \$serviceContainer)
    {
        \$entityManage = \$serviceContainer->get('doctrine.orm.entity_manager');
        /** @var \\Plugin\\AmazonPayV2_42_Bundle\\Entity\\Config \$Config */
        \$Config = \$entityManage->find(Config::class, 1);
        if (\$Config) {
            // eccubeConfig['amazon_pay_v2']['env']みたいに値を取得
            \$amazonPayEnvs = \$serviceContainer->get(\\Eccube\\Common\\EccubeConfig::class)->get('amazon_pay_v2')['env'];
            if (in_array(\$Config->getEnv(), \$amazonPayEnvs)) {
                \$Config->setAmazonAccountMode(2);
            } else {
                \$Config->setEnv(1);
                \$Config->setAmazonAccountMode(1);
            }
            \$entityManage->flush();

            return;
        }

        \$bannerRepository = \$entityManage->getRepository(AmazonBanner::class);
        \$firstBannerOnTop = \$bannerRepository->findOneBy(['page' => AmazonBanner::PAGE_TOP, 'isDefault' => true]);
        \$firstBannerOnCart = \$bannerRepository->findOneBy(['page' => AmazonBanner::PAGE_CART, 'isDefault' => true]);

        // プラグイン情報初期セット
        // 動作設定
        \$Config = new Config();
        \$Config->setAmazonAccountMode(Master::ACCOUNT_MODE['SHARED']);
        \$Config->setEnv(Master::ENV['SANDBOX']);
        \$Config->setPrivateKeyPath('app/PluginData/AmazonPayV2_42_Bundle/AmazonPay_*.pem');
        \$Config->setSale(Master::SALE['AUTORI']);
        \$Config->setUseConfirmPage(false);
        \$Config->setAutoLogin(true);
        \$Config->setLoginRequired(false);
        \$Config->setOrderCorrect(true);
        \$Config->setMailNotices(null);
        // カート画面
        \$Config->setUseCartButton(true);
        \$Config->setCartButtonColor('Gold');
        \$Config->setCartButtonPlace(Master::CART_BUTTON_PLACE['AUTO']);
        // MYページ/ログイン
        \$Config->setUseMypageLoginButton(false);
        \$Config->setMypageLoginButtonColor('Gold');
        \$Config->setMypageLoginButtonPlace(Master::MYPAGE_LOGIN_BUTTON_PLACE['AUTO']);
        // AmazonPayバナー
        \$Config->setUseAmazonBannerOnTop(true);
        \$Config->setUseAmazonBannerOnCart(true);
        \$Config->setAmazonBannerSizeOnTop(\$firstBannerOnTop->getId());
        \$Config->setAmazonBannerSizeOnCart(\$firstBannerOnCart->getId());

        \$entityManage->persist(\$Config);
        \$entityManage->flush(\$Config);
    }

    public function createPlgAmazonPayStatus(ContainerInterface \$serviceContainer)
    {
        \$entityManage = \$serviceContainer->get('doctrine.orm.entity_manager');

        \$statuses = [
            AmazonStatus::AUTHORI => 'オーソリ',
            AmazonStatus::CAPTURE => '売上',
            AmazonStatus::CANCEL => '取消',
        ];

        \$i = 0;
        foreach (\$statuses as \$id => \$name) {
            \$AmazonStatus = \$entityManage->find(AmazonStatus::class, \$id);
            if (\$AmazonStatus) {
                continue;
            }

            \$AmazonStatus = new AmazonStatus();

            \$AmazonStatus->setId(\$id);
            \$AmazonStatus->setName(\$name);
            \$AmazonStatus->setSortNo(\$i++);

            \$entityManage->persist(\$AmazonStatus);
            \$entityManage->flush(\$AmazonStatus);
        }
    }

    /**
     * バナーマスタの内容を登録する
     *
     * @param ContainerInterface \$container コンテナ
     * @return void
     */
    public function createPlgAmazonPayBanner(ContainerInterface \$container)
    {
        \$entityManage = \$container->get('doctrine.orm.entity_manager');

        \$banners = [
            '728x90' => '<a href=\"https://apay-up-banner.com?merchantId=";
        // line 461
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 461, $this->source); })()), 461, $this->source), "html", null, true);
        echo "&banner=01_Amazon_Pay_BBP_728x90.png&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 461, $this->source); })()), 461, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/01_Amazon_Pay_BBP_728x90.png?merchantId=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 461, $this->source); })()), 461, $this->source), "html", null, true);
        echo "&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 461, $this->source); })()), 461, $this->source), "html", null, true);
        echo "&height=728&width=90\"/></a>',
            '710x160' => '<a href=\"https://apay-up-banner.com?merchantId=";
        // line 462
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 462, $this->source); })()), 462, $this->source), "html", null, true);
        echo "&banner=02_Amazon_Pay_BBP_710x160.png&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 462, $this->source); })()), 462, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/02_Amazon_Pay_BBP_710x160.png?merchantId=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 462, $this->source); })()), 462, $this->source), "html", null, true);
        echo "&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 462, $this->source); })()), 462, $this->source), "html", null, true);
        echo "&height=710&width=160\"/></a>',
            '700x350' => '<a href=\"https://apay-up-banner.com?merchantId=";
        // line 463
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 463, $this->source); })()), 463, $this->source), "html", null, true);
        echo "&banner=03_Amazon_Pay_BBP_700x350.png&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 463, $this->source); })()), 463, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/03_Amazon_Pay_BBP_700x350.png?merchantId=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 463, $this->source); })()), 463, $this->source), "html", null, true);
        echo "&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 463, $this->source); })()), 463, $this->source), "html", null, true);
        echo "&height=700&width=350\"/></a>',
            '660x660' => '<a href=\"https://apay-up-banner.com?merchantId=";
        // line 464
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 464, $this->source); })()), 464, $this->source), "html", null, true);
        echo "&banner=04_Amazon_Pay_BBP_660x660.png&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 464, $this->source); })()), 464, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/04_Amazon_Pay_BBP_660x660.png?merchantId=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 464, $this->source); })()), 464, $this->source), "html", null, true);
        echo "&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 464, $this->source); })()), 464, $this->source), "html", null, true);
        echo "&height=660&width=660\"/></a>',
            '640x100' => '<a href=\"https://apay-up-banner.com?merchantId=";
        // line 465
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 465, $this->source); })()), 465, $this->source), "html", null, true);
        echo "&banner=05_Amazon_Pay_BBP_640x100.png&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 465, $this->source); })()), 465, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/05_Amazon_Pay_BBP_640x100.png?merchantId=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 465, $this->source); })()), 465, $this->source), "html", null, true);
        echo "&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 465, $this->source); })()), 465, $this->source), "html", null, true);
        echo "&height=640&width=100\"/></a>',
            '590x354' => '<a href=\"https://apay-up-banner.com?merchantId=";
        // line 466
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 466, $this->source); })()), 466, $this->source), "html", null, true);
        echo "&banner=06_Amazon_Pay_BBP_590x354.png&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 466, $this->source); })()), 466, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/06_Amazon_Pay_BBP_590x354.png?merchantId=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 466, $this->source); })()), 466, $this->source), "html", null, true);
        echo "&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 466, $this->source); })()), 466, $this->source), "html", null, true);
        echo "&height=590&width=354\"/></a>',
            '336x280' => '<a href=\"https://apay-up-banner.com?merchantId=";
        // line 467
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 467, $this->source); })()), 467, $this->source), "html", null, true);
        echo "&banner=07_Amazon_Pay_BBP_336x280.png&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 467, $this->source); })()), 467, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/07_Amazon_Pay_BBP_336x280.png?merchantId=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 467, $this->source); })()), 467, $this->source), "html", null, true);
        echo "&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 467, $this->source); })()), 467, $this->source), "html", null, true);
        echo "&height=336&width=280\"/></a>',
            '320x100' => '<a href=\"https://apay-up-banner.com?merchantId=";
        // line 468
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 468, $this->source); })()), 468, $this->source), "html", null, true);
        echo "&banner=08_Amazon_Pay_BBP_320x100.png&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 468, $this->source); })()), 468, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/08_Amazon_Pay_BBP_320x100.png?merchantId=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 468, $this->source); })()), 468, $this->source), "html", null, true);
        echo "&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 468, $this->source); })()), 468, $this->source), "html", null, true);
        echo "&height=320&width=100\"/></a>',
            '320x50' => '<a href=\"https://apay-up-banner.com?merchantId=";
        // line 469
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 469, $this->source); })()), 469, $this->source), "html", null, true);
        echo "&banner=09_Amazon_Pay_BBP_320x50.png&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 469, $this->source); })()), 469, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/09_Amazon_Pay_BBP_320x50.png?merchantId=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 469, $this->source); })()), 469, $this->source), "html", null, true);
        echo "&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 469, $this->source); })()), 469, $this->source), "html", null, true);
        echo "&height=320&width=50\"/></a>',
            '300x250' => '<a href=\"https://apay-up-banner.com?merchantId=";
        // line 470
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 470, $this->source); })()), 470, $this->source), "html", null, true);
        echo "&banner=10_Amazon_Pay_BBP_300x250.png&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 470, $this->source); })()), 470, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/10_Amazon_Pay_BBP_300x250.png?merchantId=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 470, $this->source); })()), 470, $this->source), "html", null, true);
        echo "&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 470, $this->source); })()), 470, $this->source), "html", null, true);
        echo "&height=300&width=250\"/></a>',
            '250x250' => '<a href=\"https://apay-up-banner.com?merchantId=";
        // line 471
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 471, $this->source); })()), 471, $this->source), "html", null, true);
        echo "&banner=11_Amazon_Pay_BBP_250x250.png&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 471, $this->source); })()), 471, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/11_Amazon_Pay_BBP_250x250.png?merchantId=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 471, $this->source); })()), 471, $this->source), "html", null, true);
        echo "&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 471, $this->source); })()), 471, $this->source), "html", null, true);
        echo "&height=250&width=250\"/></a>',
            '160x600' => '<a href=\"https://apay-up-banner.com?merchantId=";
        // line 472
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 472, $this->source); })()), 472, $this->source), "html", null, true);
        echo "&banner=12_Amazon_Pay_BBP_160x600.png&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 472, $this->source); })()), 472, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/12_Amazon_Pay_BBP_160x600.png?merchantId=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 472, $this->source); })()), 472, $this->source), "html", null, true);
        echo "&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 472, $this->source); })()), 472, $this->source), "html", null, true);
        echo "&height=160&width=600\"/></a>',
            '1500x750' => '<a href=\"https://apay-up-banner.com?merchantId=";
        // line 473
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 473, $this->source); })()), 473, $this->source), "html", null, true);
        echo "&banner=13_Amazon_Pay_BBP_1500x750.png&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 473, $this->source); })()), 473, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/13_Amazon_Pay_BBP_1500x750.png?merchantId=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 473, $this->source); })()), 473, $this->source), "html", null, true);
        echo "&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 473, $this->source); })()), 473, $this->source), "html", null, true);
        echo "&height=1500&width=750\"/></a>',
            '1000x120' => '<a href=\"https://apay-up-banner.com?merchantId=";
        // line 474
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 474, $this->source); })()), 474, $this->source), "html", null, true);
        echo "&banner=14_Amazon_Pay_BBP_1000x120.png&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 474, $this->source); })()), 474, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/14_Amazon_Pay_BBP_1000x120.png?merchantId=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 474, $this->source); })()), 474, $this->source), "html", null, true);
        echo "&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 474, $this->source); })()), 474, $this->source), "html", null, true);
        echo "&height=1000&width=120\"/></a>',
            '990x200' => '<a href=\"https://apay-up-banner.com?merchantId=";
        // line 475
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 475, $this->source); })()), 475, $this->source), "html", null, true);
        echo "&banner=15_Amazon_Pay_BBP_990x200.png&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 475, $this->source); })()), 475, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/15_Amazon_Pay_BBP_990x200.png?merchantId=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 475, $this->source); })()), 475, $this->source), "html", null, true);
        echo "&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 475, $this->source); })()), 475, $this->source), "html", null, true);
        echo "&height=990&width=200\"/></a>',
            '750x750' => '<a href=\"https://apay-up-banner.com?merchantId=";
        // line 476
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 476, $this->source); })()), 476, $this->source), "html", null, true);
        echo "&banner=16_Amazon_Pay_BBP_750x750.png&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 476, $this->source); })()), 476, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/16_Amazon_Pay_BBP_750x750.png?merchantId=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 476, $this->source); })()), 476, $this->source), "html", null, true);
        echo "&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 476, $this->source); })()), 476, $this->source), "html", null, true);
        echo "&height=750&width=750\"/></a>',
            '750x220' => '<a href=\"https://apay-up-banner.com?merchantId=";
        // line 477
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 477, $this->source); })()), 477, $this->source), "html", null, true);
        echo "&banner=17_Amazon_Pay_BBP_750x220.png&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 477, $this->source); })()), 477, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/17_Amazon_Pay_BBP_750x220.png?merchantId=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 477, $this->source); })()), 477, $this->source), "html", null, true);
        echo "&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 477, $this->source); })()), 477, $this->source), "html", null, true);
        echo "&height=750&width=220\"/></a>',
            '737x128' => '<a href=\"https://apay-up-banner.com?merchantId=";
        // line 478
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 478, $this->source); })()), 478, $this->source), "html", null, true);
        echo "&banner=18_Amazon_Pay_BBP_737x128.png&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 478, $this->source); })()), 478, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/18_Amazon_Pay_BBP_737x128.png?merchantId=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 478, $this->source); })()), 478, $this->source), "html", null, true);
        echo "&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 478, $this->source); })()), 478, $this->source), "html", null, true);
        echo "&height=737&width=128\"/></a>',
            '120x76' => '<a href=\"https://apay-up-banner.com?merchantId=";
        // line 479
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 479, $this->source); })()), 479, $this->source), "html", null, true);
        echo "&banner=19_Amazon_Pay_BBP_120x76.png&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 479, $this->source); })()), 479, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/19_Amazon_Pay_BBP_120x76.png?merchantId=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 479, $this->source); })()), 479, $this->source), "html", null, true);
        echo "&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 479, $this->source); })()), 479, $this->source), "html", null, true);
        echo "&height=120&width=76\"/></a>',
            '240x76' => '<a href=\"https://apay-up-banner.com?merchantId=";
        // line 480
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 480, $this->source); })()), 480, $this->source), "html", null, true);
        echo "&banner=20_Amazon_Pay_BBP_240x76.png&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 480, $this->source); })()), 480, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/20_Amazon_Pay_BBP_240x76.png?merchantId=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 480, $this->source); })()), 480, $this->source), "html", null, true);
        echo "&locale=ja_JP&utm_source=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 480, $this->source); })()), 480, $this->source), "html", null, true);
        echo "&height=240&width=76\"/></a>'
        ];

        \$amazonBannerRepository = \$entityManage->getRepository(AmazonBanner::class);
        // トップページ用レコードの作成
        foreach (\$banners as \$key => \$value) {
            \$code = 
            '    <script>' .
            '        \$(function () {' .
            '            /* ボタンを設置 */' .
            '            \$(\"div#AmazonBanner\").append(\$(\"div#div_AmazonBanner\"));' .
            '        });' .
            '    </script>' .
            '    ' .
            '    <div class=\"hidden\">' .
            '        <div id=\"div_AmazonBanner\">' .
                        \$value .
            '        </div>' .
            '    </div>';

            // すでにレコードがあれば更新する
            \$record = \$amazonBannerRepository->findOneBy(['name' => \$key, 'page' => AmazonBanner::PAGE_TOP]);
            if (isset(\$record)) {
                \$record->setCode(\$code);
                \$entityManage->persist(\$record);
                \$entityManage->flush(\$record);
            } else {
                \$AmazonBanner = new AmazonBanner();
                \$AmazonBanner->setPage(AmazonBanner::PAGE_TOP);
                \$AmazonBanner->setName(\$key);
                \$AmazonBanner->setCode(\$code);
                if (\$key == '1000x120') {
                    \$AmazonBanner->setIsDefault(true);
                }
                \$entityManage->persist(\$AmazonBanner);
                \$entityManage->flush(\$AmazonBanner);
            }
        }

        // カート画面用レコードの作成
        foreach (\$banners as \$key => \$value) {
            \$code = 
            '    <script>' .
            '        \$(function () {' .
            '            /* ボタンを設置 */' .
            '            \$(\"div#AmazonBanner\").append(\$(\"div#div_AmazonBanner\"));' .
            '        });' .
            '    </script>' .
            '    ' .
            '    <div class=\"hidden\">' .
            '        <div id=\"div_AmazonBanner\">' .
                        \$value .
            '        </div>' .
            '    </div>';

            // すでにレコードがあれば更新する
            \$record = \$amazonBannerRepository->findOneBy(['name' => \$key, 'page' => AmazonBanner::PAGE_CART]);
            if (isset(\$record)) {
                \$record->setCode(\$code);
                \$entityManage->persist(\$record);
                \$entityManage->flush(\$record);
            } else {
                \$AmazonBanner = new AmazonBanner();
                \$AmazonBanner->setPage(AmazonBanner::PAGE_CART);
                \$AmazonBanner->setName(\$key);
                \$AmazonBanner->setCode(\$code);
                if (\$key == '1000x120') {
                    \$AmazonBanner->setIsDefault(true);
                }
                \$entityManage->persist(\$AmazonBanner);
                \$entityManage->flush(\$AmazonBanner);
            }
        }

        /** @var \\Plugin\\AmazonPayV2_42_Bundle\\Entity\\Config \$Config */
        \$Config = \$entityManage->find(Config::class, 1);
        if (\$Config) {
            // すでに設定レコードがあれば、AmazonBannerの初期値を設定する
            \$firstBannerOnTop = \$amazonBannerRepository->findOneBy(['page' => AmazonBanner::PAGE_TOP, 'isDefault' => true]);
            \$firstBannerOnCart = \$amazonBannerRepository->findOneBy(['page' => AmazonBanner::PAGE_CART, 'isDefault' => true]);

            // AmazonPayバナー
            \$tmp = \$Config->getUseAmazonBannerOnTop();
            if (!isset(\$tmp)) {
                \$Config->setUseAmazonBannerOnTop(true);
            }
            \$tmp = \$Config->getUseAmazonBannerOnCart();
            if (!isset(\$tmp)) {
                \$Config->setUseAmazonBannerOnCart(true);
            }
            \$tmp  = \$Config->getAmazonBannerSizeOnTop();
            if (!isset(\$tmp) || \$tmp == 0) {
                \$Config->setAmazonBannerSizeOnTop(\$firstBannerOnTop->getId());
            }
            \$tmp = \$Config->getAmazonBannerSizeOnCart();
            if (!isset(\$tmp) || \$tmp == 0) {
                \$Config->setAmazonBannerSizeOnCart(\$firstBannerOnCart->getId());
            }

            \$entityManage->persist(\$Config);
            \$entityManage->flush(\$Config);
        }
    }

    /**
     * ファイルをコピー
     */
    private function copyAssets(ContainerInterface \$serviceContainer)
    {
        \$file = new Filesystem();

        // css
        \$file->mkdir(\$this->target_css);
        \$file->mirror(\$this->origin_css, \$this->target_css);
    }

    /**
     * コピーしたファイルを削除
     */
    private function removeAssets(ContainerInterface \$serviceContainer)
    {
        \$file = new Filesystem();

        // css
        \$file->remove(\$this->target_css . '/amazon_shopping_v2.css');
    }

    /**
     * ファイルをアップデート
     */
    private function updateAssets(ContainerInterface \$serviceContainer)
    {
        \$file = new Filesystem();
        if (!\$file->exists(\$this->target_plugin_data . '/lastNameList.csv')) {
            \$file->copy(\$this->origin_plugin_data . '/lastNameList.csv', \$this->target_plugin_data . '/lastNameList.csv');
        }
        // css
        \$file->remove(\$this->target_css . '/amazon_shopping_v2.css');
        \$file->copy(\$this->origin_css . '/amazon_shopping_v2.css', \$this->target_css . '/amazon_shopping_v2.css');
    }

    /**
     * 自動メール送信 ※インストール、アンイストール、アップデート時
     *
     * @param string \$process
     */
    public function sendAutoMail(\$config, \$serviceContainer, \$process)
    {
        \$entityManage = \$serviceContainer->get('doctrine.orm.entity_manager');
        \$baseInfoRepository = \$entityManage->getRepository(BaseInfo::class);
        \$BaseInfo = \$baseInfoRepository->get();

        \$url = '';
        if(isset(\$_SERVER['HTTP_HOST']) && isset(\$_SERVER['REQUEST_URI'])) {
            \$url = \"http://\" . \$_SERVER[\"HTTP_HOST\"] . \$_SERVER['REQUEST_URI'];
            \$url = substr(\$url, 0, strrpos(\$url, 'store') - 1);
            \$url = substr(\$url, 0, strrpos(\$url, '/') + 1);
        }

        \$datetime = date('Y-m-d H:i:s');

        // EC-CUBEのバージョン取得
        \$version = Constant::VERSION;
        // プラグインのバージョン取得
        \$plugin_version = \$config['version'];

        \$body = <<<__EOS__
Amazon Pay プラグインサポート各位

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
■　プラグイン{\$process}のお知らせ　■
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

以下のECサイトでAmazon Pay V2 プラグインが{\$process}されました。

【店名】{\$BaseInfo->getShopName()}
【EC-CUBE】{\$version}
【プラグイン】{\$plugin_version}
【URL】{\$url}
【メールアドレス】{\$BaseInfo->getEmail01()}
【処理日時】{\$datetime}


※本メールは、配信専用です。
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
Amazon Pay　プラグインサポート
URL：https://www.ec-cube.net/product/amazonpay.php
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
__EOS__;

        \$message = new Email();
        \$message
            ->subject('[' . \$BaseInfo->getShopName() . '] ' . 'プラグイン' . \$process . '処理のお知らせ【Amazon Pay V2】')
            ->from(new Address(\$BaseInfo->getEmail03(), \$BaseInfo->getShopName()))
            ->to(new Address('amazonpay-support@ec-cube.net', 'amazon'))
            ->text(\$body);

        \$transport = Transport::fromDsn(\$serviceContainer->get(\\Eccube\\Common\\EccubeConfig::class)->get('eccube_mailer_dsn'));
        \$mailer = new Mailer(\$transport);
        \$mailer->send(\$message);
    }

    private function setConfigIni()
    {
        \$eccubePlatform = env('ECCUBE_PLATFORM');
        if (!(\$eccubePlatform === 'ec-cube.co')) {
            // ECCUBEクラウド版のみ行うため
            return;
        }

        // 16桁で生成
        \$rand = \\Eccube\\Util\\StringUtil::random();
        file_put_contents(__DIR__ . '/amazon_pay_config.ini', \"prefix = '{\$rand}'\");
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
        return "AmazonPayV2_42_Bundle/PluginManager.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  709 => 480,  699 => 479,  689 => 478,  679 => 477,  669 => 476,  659 => 475,  649 => 474,  639 => 473,  629 => 472,  619 => 471,  609 => 470,  599 => 469,  589 => 468,  579 => 467,  569 => 466,  559 => 465,  549 => 464,  539 => 463,  529 => 462,  519 => 461,  57 => 1,);
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

namespace Plugin\\AmazonPayV2_42_Bundle;

use Symfony\\Component\\Filesystem\\Filesystem;
use Psr\\Container\\ContainerInterface;
use Eccube\\Plugin\\AbstractPluginManager;
use Eccube\\Common\\Constant;
use Eccube\\Entity\\Payment;
use Eccube\\Entity\\PaymentOption;
use Eccube\\Entity\\Page;
use Eccube\\Entity\\PageLayout;
use Eccube\\Entity\\Csv;
use Eccube\\Entity\\Plugin;
use Eccube\\Entity\\Layout;
use Eccube\\Entity\\BaseInfo;
use Eccube\\Entity\\Master\\CsvType;
use Eccube\\Repository\\BaseInfoRepository;
use Eccube\\Repository\\PageRepository;
use Eccube\\Repository\\LayoutRepository;
use Eccube\\Repository\\PageLayoutRepository;
use Eccube\\Repository\\PaymentRepository;
use Eccube\\Repository\\DeliveryRepository;
use Eccube\\Repository\\Master\\CsvTypeRepository;
use Eccube\\Repository\\CsvRepository;
use Symfony\\Component\\Mailer\\Transport;
use Symfony\\Component\\Mailer\\Mailer;
use Symfony\\Component\\Mime\\Address;
use Symfony\\Component\\Mime\\Email;
use Plugin\\AmazonPayV2_42_Bundle\\Entity\\Master\\AmazonStatus;
use Plugin\\AmazonPayV2_42_Bundle\\Entity\\Config;
use Plugin\\AmazonPayV2_42_Bundle\\Form\\Type\\Master\\ConfigTypeMaster as Master;
use Plugin\\AmazonPayV2_42_Bundle\\Service\\Method\\AmazonPay;
use Eccube\\Repository\\PluginRepository;
use Eccube\\Service\\PluginService;
use Plugin\\AmazonPayV2_42_Bundle\\Entity\\AmazonBanner;

class PluginManager extends AbstractPluginManager
{
    /**
     * PluginManager constructor.
     */
    public function __construct()
    {
        // コピー元のディレクトリ
        \$this->origin_css = __DIR__ . '/Resource/copy/css';
        \$this->origin_plugin_data = __DIR__ . '/Resource/PluginData';

        // コピー先のディレクトリ
        \$this->target_css = __DIR__ . '/../../../html/template/default/assets/css';
        \$this->target_plugin_data = __DIR__ . '/../../PluginData/AmazonPayV2_42_Bundle';

        \$this->target_user_data = __DIR__ . '/../../../html/user_data';
    }

    public function install(array \$config, ContainerInterface \$serviceContainer)
    {
        // リソースファイルのコピー
        \$this->copyAssets(\$serviceContainer);

        // lastNameListのコピー
        \$file = new Filesystem();
        if (!\$file->exists(\$this->target_plugin_data . '/lastNameList.csv')) {
            \$file->copy(\$this->origin_plugin_data . '/lastNameList.csv', \$this->target_plugin_data . '/lastNameList.csv');
        }

        // amazon_pay_config.iniの設定
        \$this->setConfigIni();

        // メール送信
        try {
            log_info(\"AmazonPayプラグイン(V2)インストールメール送信処理開始\");
            \$this->sendAutoMail(\$config, \$serviceContainer, 'インストール');
        } catch (\\Exception \$e) {
            log_info(\"AmazonPayプラグイン(V2)インストールメール送信に失敗しました。\" . \$e->getMessage());
        }
        log_info(\"AmazonPayプラグイン(V2)インストールメール送信処理終了\");
    }

    public function enable(array \$config, ContainerInterface \$serviceContainer)
    {
        \$PluginRepository = \$serviceContainer->get(\"doctrine.orm.entity_manager\")->getRepository(Plugin::class);
        //\$PluginService = \$serviceContainer->get('Eccube\\Service\\PluginService');

        \$Plugin = \$PluginRepository->findByCode('AmazonPayV2_42_Bundle');
        //\$PluginService->generateProxyAndUpdateSchema(\$Plugin, \$config);

        \$this->createAmazonPay(\$serviceContainer);
        \$this->createConfigCsv(\$serviceContainer);
        \$this->createAmazonPage(\$serviceContainer);

        \$this->createPlgAmazonPayBanner(\$serviceContainer);
        \$this->createPlgAmazonPayConfig(\$serviceContainer);
        \$this->createPlgAmazonPayStatus(\$serviceContainer);
    }

    public function disable(array \$config, ContainerInterface \$serviceContainer)
    {
        \$this->disableAmazonPay(\$serviceContainer);
    }

    public function uninstall(array \$config, ContainerInterface \$serviceContainer)
    {
        // リソースファイルの削除
        \$this->removeAssets(\$serviceContainer);

        // lastNameListの削除
        \$file = new Filesystem();
        \$file->remove(\$this->target_plugin_data . '/lastNameList.csv');

        // 関連DB削除
        \$this->removeConfigCsv(\$serviceContainer);
        \$this->removeAmazonPage(\$serviceContainer);

        // メール送信
        try {
            log_info(\"AmazonPayプラグイン(V2)削除メール送信処理開始\");
            \$this->sendAutoMail(\$config, \$serviceContainer, '削除');
        } catch (\\Exception \$e) {
            log_info(\"AmazonPayプラグイン(V2)削除メール送信に失敗しました。\" . \$e->getMessage());
        }
        log_info(\"AmazonPayプラグイン(V2)削除メール送信処理終了\");
    }

    public function update(array \$config, ContainerInterface \$serviceContainer)
    {
        // リソースファイルのアップデート
        \$this->updateAssets(\$serviceContainer);
        // ページのアップデート
        \$this->createAmazonPage(\$serviceContainer);

        \$this->createPlgAmazonPayBanner(\$serviceContainer);

        // メール送信
        try {
            log_info(\"AmazonPayプラグイン(V2)アップデートメール送信処理開始\");
            \$this->sendAutoMail(\$config, \$serviceContainer, 'アップデート');
        } catch (\\Exception \$e) {
            log_info(\"AmazonPayプラグイン(V2)アップデートメール送信に失敗しました。\" . \$e->getMessage());
        }
    }

    private function createAmazonPay(ContainerInterface \$serviceContainer)
    {
        \$entityManage = \$serviceContainer->get('doctrine.orm.entity_manager');
        \$paymentRepository = \$entityManage->getRepository(Payment::class);

        \$Payment = \$paymentRepository->findOneBy(['method_class' => AmazonPay::class]);
        if (\$Payment) {
            \$Payment->setVisible(true);
            \$entityManage->flush(\$Payment);

            return;
        }

        \$Payment = \$paymentRepository->findOneBy([], ['sort_no' => 'DESC']);
        \$sortNo = \$Payment ? \$Payment->getSortNo() + 1 : 1;

        // AmazonPay
        \$Payment = new Payment();
        \$Payment->setCharge(0);
        \$Payment->setSortNo(\$sortNo);
        \$Payment->setVisible(true);
        \$Payment->setMethod('Amazon Pay');
        \$Payment->setMethodClass(AmazonPay::class);
        \$Payment->setRuleMin(0);

        \$entityManage->persist(\$Payment);
        \$entityManage->flush(\$Payment);
    }

    private function disableAmazonPay(ContainerInterface \$serviceContainer)
    {
        \$entityManage = \$serviceContainer->get('doctrine.orm.entity_manager');
        \$paymentRepository = \$entityManage->getRepository(Payment::class);

        \$Payment = \$paymentRepository->findOneBy(['method_class' => AmazonPay::class]);
        if (\$Payment) {
            \$Payment->setVisible(false);
            \$entityManage->flush(\$Payment);
        }
    }

    private function createConfigCsv(ContainerInterface \$serviceContainer)
    {
        \$entityManage = \$serviceContainer->get('doctrine.orm.entity_manager');
        \$csvTypeRepository = \$entityManage->getRepository(CsvType::class);
        \$csvRepository = \$entityManage->getRepository(Csv::class);

        \$OrderCsvType = \$csvTypeRepository->find(3);

        \$LastCsv = \$csvRepository->findOneBy(['CsvType' => \$OrderCsvType], ['sort_no' => 'DESC']);

        \$sortNo = \$LastCsv->getSortNo();

        \$arrCsv = [
            [
                'entity_name' => 'Eccube\\\\Entity\\\\Order',
                'field_name' => 'amazonpay_v2_charge_permission_id',
                'reference_field_name' => null,
                'disp_name' => 'Amazon参照ID',
            ],
            [
                'entity_name' => 'Eccube\\\\Entity\\\\Order',
                'field_name' => 'AmazonPayV2AmazonStatus',
                'reference_field_name' => 'name',
                'disp_name' => 'Amazon状況',
            ]
        ];

        foreach (\$arrCsv as \$c) {
            \$Csv = \$csvRepository->findOneBy(['disp_name' => \$c['disp_name']]);
            if (\$Csv) {
                continue;
            }
            \$Csv = new Csv();

            \$Csv->setCsvType(\$OrderCsvType);
            \$Csv->setEntityName(\$c['entity_name']);
            \$Csv->setFieldName(\$c['field_name']);
            \$Csv->setReferenceFieldName(\$c['reference_field_name']);
            \$Csv->setDispName(\$c['disp_name']);
            \$Csv->setSortNo(\$sortNo++);
            \$Csv->setCreateDate(new \\DateTime());
            \$Csv->setUpdateDate(new \\DateTime());

            \$entityManage->persist(\$Csv);
            \$entityManage->flush(\$Csv);
        }
    }

    private function removeConfigCsv(ContainerInterface \$serviceContainer)
    {
        \$entityManage = \$serviceContainer->get('doctrine.orm.entity_manager');
        \$csvTypeRepository = \$entityManage->getRepository(CsvType::class);
        \$csvRepository = \$entityManage->getRepository(Csv::class);

        \$OrderCsvType = \$csvTypeRepository->find(3);

        \$arrCsv = [
            [
                'entity_name' => 'Eccube\\\\Entity\\\\Order',
                'field_name' => 'amazonpay_v2_charge_permission_id',
                'reference_field_name' => null,
                'disp_name' => 'Amazon参照ID',
            ],
            [
                'entity_name' => 'Eccube\\\\Entity\\\\Order',
                'field_name' => 'AmazonPayV2AmazonStatus',
                'reference_field_name' => 'name',
                'disp_name' => 'Amazon状況',
            ]
        ];

        foreach (\$arrCsv as \$c) {
            \$Csv = \$csvRepository->findOneBy(\$c);
            if (\$Csv) {
                \$entityManage->remove(\$Csv);
                \$entityManage->flush();
            }
        }
    }

    private function createAmazonPage(ContainerInterface \$serviceContainer)
    {
        \$entityManage = \$serviceContainer->get('doctrine.orm.entity_manager');

        // ページ追加
        \$pageRepository = \$entityManage->getRepository(Page::class);
        \$layoutRepository = \$entityManage->getRepository(Layout::class);
        \$pageLayoutRepository = \$entityManage->getRepository(PageLayout::class);
        \$Layout = \$layoutRepository->find(2);

        \$LastPageLayout = \$pageLayoutRepository->findOneBy([], ['sort_no' => 'DESC']);
        \$sortNo = \$LastPageLayout->getSortNo();

        \$arrPage = [
            [
                'page_name' => '商品購入(Amazon Pay)',
                'url' => 'amazon_pay_shopping',
                'file_name' => 'Shopping/index'
            ],
            [
                'page_name' => '商品購入(Amazon Pay)/ご注文確認',
                'url' => 'amazon_pay_shopping_confirm',
                'file_name' => 'Shopping/confirm'
            ],
        ];

        foreach (\$arrPage as \$p) {
            \$Page = \$pageRepository->findOneBy(['url' => \$p['url']]);
            if (\$Page) {
                continue;
            }

            \$Page = new Page();
            \$Page->setName(\$p['page_name']);
            \$Page->setUrl(\$p['url']);
            \$Page->setFileName(\$p['file_name']);
            \$Page->setEditType(Page::EDIT_TYPE_DEFAULT);
            \$Page->setCreateDate(new \\DateTime());
            \$Page->setUpdateDate(new \\DateTime());
            \$Page->setMetaRobots('noindex');

            \$entityManage->persist(\$Page);
            \$entityManage->flush(\$Page);

            \$PageLayout = new PageLayout();
            \$PageLayout->setPage(\$Page);
            \$PageLayout->setPageId(\$Page->getId());
            \$PageLayout->setLayout(\$Layout);
            \$PageLayout->setLayoutId(\$Layout->getId());
            \$PageLayout->setSortNo(\$sortNo++);

            \$entityManage->persist(\$PageLayout);
            \$entityManage->flush(\$PageLayout);
        }
    }

    private function removeAmazonPage(ContainerInterface \$serviceContainer)
    {
        \$entityManage = \$serviceContainer->get('doctrine.orm.entity_manager');
        \$pageRepository = \$entityManage->getRepository(Page::class);

        \$arrPage = [
            [
                'name' => '商品購入(Amazon Pay)',
                'url' => 'amazon_pay_shopping',
                'file_name' => 'Shopping/index'
            ],
            [
                'name' => '商品購入(Amazon Pay)/ご注文確認',
                'url' => 'amazon_pay_shopping_confirm',
                'file_name' => 'Shopping/confirm'
            ],
        ];

        foreach (\$arrPage as \$p) {
            \$Page = \$pageRepository->findOneBy(\$p);
            if (\$Page) {
                foreach (\$Page->getPageLayouts() as \$PageLayout) {
                    \$Page->removePageLayout(\$PageLayout);
                    \$entityManage->remove(\$PageLayout);
                    \$entityManage->flush(\$PageLayout);
                }

                \$entityManage->remove(\$Page);
                \$entityManage->flush();
            }
        }
    }

    /**
     * create table plg_amazon_pay_config
     *
     * @param ContainerInterface \$serviceContainer
     */
    public function createPlgAmazonPayConfig(ContainerInterface \$serviceContainer)
    {
        \$entityManage = \$serviceContainer->get('doctrine.orm.entity_manager');
        /** @var \\Plugin\\AmazonPayV2_42_Bundle\\Entity\\Config \$Config */
        \$Config = \$entityManage->find(Config::class, 1);
        if (\$Config) {
            // eccubeConfig['amazon_pay_v2']['env']みたいに値を取得
            \$amazonPayEnvs = \$serviceContainer->get(\\Eccube\\Common\\EccubeConfig::class)->get('amazon_pay_v2')['env'];
            if (in_array(\$Config->getEnv(), \$amazonPayEnvs)) {
                \$Config->setAmazonAccountMode(2);
            } else {
                \$Config->setEnv(1);
                \$Config->setAmazonAccountMode(1);
            }
            \$entityManage->flush();

            return;
        }

        \$bannerRepository = \$entityManage->getRepository(AmazonBanner::class);
        \$firstBannerOnTop = \$bannerRepository->findOneBy(['page' => AmazonBanner::PAGE_TOP, 'isDefault' => true]);
        \$firstBannerOnCart = \$bannerRepository->findOneBy(['page' => AmazonBanner::PAGE_CART, 'isDefault' => true]);

        // プラグイン情報初期セット
        // 動作設定
        \$Config = new Config();
        \$Config->setAmazonAccountMode(Master::ACCOUNT_MODE['SHARED']);
        \$Config->setEnv(Master::ENV['SANDBOX']);
        \$Config->setPrivateKeyPath('app/PluginData/AmazonPayV2_42_Bundle/AmazonPay_*.pem');
        \$Config->setSale(Master::SALE['AUTORI']);
        \$Config->setUseConfirmPage(false);
        \$Config->setAutoLogin(true);
        \$Config->setLoginRequired(false);
        \$Config->setOrderCorrect(true);
        \$Config->setMailNotices(null);
        // カート画面
        \$Config->setUseCartButton(true);
        \$Config->setCartButtonColor('Gold');
        \$Config->setCartButtonPlace(Master::CART_BUTTON_PLACE['AUTO']);
        // MYページ/ログイン
        \$Config->setUseMypageLoginButton(false);
        \$Config->setMypageLoginButtonColor('Gold');
        \$Config->setMypageLoginButtonPlace(Master::MYPAGE_LOGIN_BUTTON_PLACE['AUTO']);
        // AmazonPayバナー
        \$Config->setUseAmazonBannerOnTop(true);
        \$Config->setUseAmazonBannerOnCart(true);
        \$Config->setAmazonBannerSizeOnTop(\$firstBannerOnTop->getId());
        \$Config->setAmazonBannerSizeOnCart(\$firstBannerOnCart->getId());

        \$entityManage->persist(\$Config);
        \$entityManage->flush(\$Config);
    }

    public function createPlgAmazonPayStatus(ContainerInterface \$serviceContainer)
    {
        \$entityManage = \$serviceContainer->get('doctrine.orm.entity_manager');

        \$statuses = [
            AmazonStatus::AUTHORI => 'オーソリ',
            AmazonStatus::CAPTURE => '売上',
            AmazonStatus::CANCEL => '取消',
        ];

        \$i = 0;
        foreach (\$statuses as \$id => \$name) {
            \$AmazonStatus = \$entityManage->find(AmazonStatus::class, \$id);
            if (\$AmazonStatus) {
                continue;
            }

            \$AmazonStatus = new AmazonStatus();

            \$AmazonStatus->setId(\$id);
            \$AmazonStatus->setName(\$name);
            \$AmazonStatus->setSortNo(\$i++);

            \$entityManage->persist(\$AmazonStatus);
            \$entityManage->flush(\$AmazonStatus);
        }
    }

    /**
     * バナーマスタの内容を登録する
     *
     * @param ContainerInterface \$container コンテナ
     * @return void
     */
    public function createPlgAmazonPayBanner(ContainerInterface \$container)
    {
        \$entityManage = \$container->get('doctrine.orm.entity_manager');

        \$banners = [
            '728x90' => '<a href=\"https://apay-up-banner.com?merchantId={{MERCHANT_ID}}&banner=01_Amazon_Pay_BBP_728x90.png&locale=ja_JP&utm_source={{MERCHANT_ID}}\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/01_Amazon_Pay_BBP_728x90.png?merchantId={{MERCHANT_ID}}&locale=ja_JP&utm_source={{MERCHANT_ID}}&height=728&width=90\"/></a>',
            '710x160' => '<a href=\"https://apay-up-banner.com?merchantId={{MERCHANT_ID}}&banner=02_Amazon_Pay_BBP_710x160.png&locale=ja_JP&utm_source={{MERCHANT_ID}}\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/02_Amazon_Pay_BBP_710x160.png?merchantId={{MERCHANT_ID}}&locale=ja_JP&utm_source={{MERCHANT_ID}}&height=710&width=160\"/></a>',
            '700x350' => '<a href=\"https://apay-up-banner.com?merchantId={{MERCHANT_ID}}&banner=03_Amazon_Pay_BBP_700x350.png&locale=ja_JP&utm_source={{MERCHANT_ID}}\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/03_Amazon_Pay_BBP_700x350.png?merchantId={{MERCHANT_ID}}&locale=ja_JP&utm_source={{MERCHANT_ID}}&height=700&width=350\"/></a>',
            '660x660' => '<a href=\"https://apay-up-banner.com?merchantId={{MERCHANT_ID}}&banner=04_Amazon_Pay_BBP_660x660.png&locale=ja_JP&utm_source={{MERCHANT_ID}}\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/04_Amazon_Pay_BBP_660x660.png?merchantId={{MERCHANT_ID}}&locale=ja_JP&utm_source={{MERCHANT_ID}}&height=660&width=660\"/></a>',
            '640x100' => '<a href=\"https://apay-up-banner.com?merchantId={{MERCHANT_ID}}&banner=05_Amazon_Pay_BBP_640x100.png&locale=ja_JP&utm_source={{MERCHANT_ID}}\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/05_Amazon_Pay_BBP_640x100.png?merchantId={{MERCHANT_ID}}&locale=ja_JP&utm_source={{MERCHANT_ID}}&height=640&width=100\"/></a>',
            '590x354' => '<a href=\"https://apay-up-banner.com?merchantId={{MERCHANT_ID}}&banner=06_Amazon_Pay_BBP_590x354.png&locale=ja_JP&utm_source={{MERCHANT_ID}}\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/06_Amazon_Pay_BBP_590x354.png?merchantId={{MERCHANT_ID}}&locale=ja_JP&utm_source={{MERCHANT_ID}}&height=590&width=354\"/></a>',
            '336x280' => '<a href=\"https://apay-up-banner.com?merchantId={{MERCHANT_ID}}&banner=07_Amazon_Pay_BBP_336x280.png&locale=ja_JP&utm_source={{MERCHANT_ID}}\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/07_Amazon_Pay_BBP_336x280.png?merchantId={{MERCHANT_ID}}&locale=ja_JP&utm_source={{MERCHANT_ID}}&height=336&width=280\"/></a>',
            '320x100' => '<a href=\"https://apay-up-banner.com?merchantId={{MERCHANT_ID}}&banner=08_Amazon_Pay_BBP_320x100.png&locale=ja_JP&utm_source={{MERCHANT_ID}}\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/08_Amazon_Pay_BBP_320x100.png?merchantId={{MERCHANT_ID}}&locale=ja_JP&utm_source={{MERCHANT_ID}}&height=320&width=100\"/></a>',
            '320x50' => '<a href=\"https://apay-up-banner.com?merchantId={{MERCHANT_ID}}&banner=09_Amazon_Pay_BBP_320x50.png&locale=ja_JP&utm_source={{MERCHANT_ID}}\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/09_Amazon_Pay_BBP_320x50.png?merchantId={{MERCHANT_ID}}&locale=ja_JP&utm_source={{MERCHANT_ID}}&height=320&width=50\"/></a>',
            '300x250' => '<a href=\"https://apay-up-banner.com?merchantId={{MERCHANT_ID}}&banner=10_Amazon_Pay_BBP_300x250.png&locale=ja_JP&utm_source={{MERCHANT_ID}}\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/10_Amazon_Pay_BBP_300x250.png?merchantId={{MERCHANT_ID}}&locale=ja_JP&utm_source={{MERCHANT_ID}}&height=300&width=250\"/></a>',
            '250x250' => '<a href=\"https://apay-up-banner.com?merchantId={{MERCHANT_ID}}&banner=11_Amazon_Pay_BBP_250x250.png&locale=ja_JP&utm_source={{MERCHANT_ID}}\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/11_Amazon_Pay_BBP_250x250.png?merchantId={{MERCHANT_ID}}&locale=ja_JP&utm_source={{MERCHANT_ID}}&height=250&width=250\"/></a>',
            '160x600' => '<a href=\"https://apay-up-banner.com?merchantId={{MERCHANT_ID}}&banner=12_Amazon_Pay_BBP_160x600.png&locale=ja_JP&utm_source={{MERCHANT_ID}}\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/12_Amazon_Pay_BBP_160x600.png?merchantId={{MERCHANT_ID}}&locale=ja_JP&utm_source={{MERCHANT_ID}}&height=160&width=600\"/></a>',
            '1500x750' => '<a href=\"https://apay-up-banner.com?merchantId={{MERCHANT_ID}}&banner=13_Amazon_Pay_BBP_1500x750.png&locale=ja_JP&utm_source={{MERCHANT_ID}}\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/13_Amazon_Pay_BBP_1500x750.png?merchantId={{MERCHANT_ID}}&locale=ja_JP&utm_source={{MERCHANT_ID}}&height=1500&width=750\"/></a>',
            '1000x120' => '<a href=\"https://apay-up-banner.com?merchantId={{MERCHANT_ID}}&banner=14_Amazon_Pay_BBP_1000x120.png&locale=ja_JP&utm_source={{MERCHANT_ID}}\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/14_Amazon_Pay_BBP_1000x120.png?merchantId={{MERCHANT_ID}}&locale=ja_JP&utm_source={{MERCHANT_ID}}&height=1000&width=120\"/></a>',
            '990x200' => '<a href=\"https://apay-up-banner.com?merchantId={{MERCHANT_ID}}&banner=15_Amazon_Pay_BBP_990x200.png&locale=ja_JP&utm_source={{MERCHANT_ID}}\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/15_Amazon_Pay_BBP_990x200.png?merchantId={{MERCHANT_ID}}&locale=ja_JP&utm_source={{MERCHANT_ID}}&height=990&width=200\"/></a>',
            '750x750' => '<a href=\"https://apay-up-banner.com?merchantId={{MERCHANT_ID}}&banner=16_Amazon_Pay_BBP_750x750.png&locale=ja_JP&utm_source={{MERCHANT_ID}}\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/16_Amazon_Pay_BBP_750x750.png?merchantId={{MERCHANT_ID}}&locale=ja_JP&utm_source={{MERCHANT_ID}}&height=750&width=750\"/></a>',
            '750x220' => '<a href=\"https://apay-up-banner.com?merchantId={{MERCHANT_ID}}&banner=17_Amazon_Pay_BBP_750x220.png&locale=ja_JP&utm_source={{MERCHANT_ID}}\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/17_Amazon_Pay_BBP_750x220.png?merchantId={{MERCHANT_ID}}&locale=ja_JP&utm_source={{MERCHANT_ID}}&height=750&width=220\"/></a>',
            '737x128' => '<a href=\"https://apay-up-banner.com?merchantId={{MERCHANT_ID}}&banner=18_Amazon_Pay_BBP_737x128.png&locale=ja_JP&utm_source={{MERCHANT_ID}}\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/18_Amazon_Pay_BBP_737x128.png?merchantId={{MERCHANT_ID}}&locale=ja_JP&utm_source={{MERCHANT_ID}}&height=737&width=128\"/></a>',
            '120x76' => '<a href=\"https://apay-up-banner.com?merchantId={{MERCHANT_ID}}&banner=19_Amazon_Pay_BBP_120x76.png&locale=ja_JP&utm_source={{MERCHANT_ID}}\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/19_Amazon_Pay_BBP_120x76.png?merchantId={{MERCHANT_ID}}&locale=ja_JP&utm_source={{MERCHANT_ID}}&height=120&width=76\"/></a>',
            '240x76' => '<a href=\"https://apay-up-banner.com?merchantId={{MERCHANT_ID}}&banner=20_Amazon_Pay_BBP_240x76.png&locale=ja_JP&utm_source={{MERCHANT_ID}}\" target=\"_blank\"><img src=\"https://apay-up-banner.com/banner/20_Amazon_Pay_BBP_240x76.png?merchantId={{MERCHANT_ID}}&locale=ja_JP&utm_source={{MERCHANT_ID}}&height=240&width=76\"/></a>'
        ];

        \$amazonBannerRepository = \$entityManage->getRepository(AmazonBanner::class);
        // トップページ用レコードの作成
        foreach (\$banners as \$key => \$value) {
            \$code = 
            '    <script>' .
            '        \$(function () {' .
            '            /* ボタンを設置 */' .
            '            \$(\"div#AmazonBanner\").append(\$(\"div#div_AmazonBanner\"));' .
            '        });' .
            '    </script>' .
            '    ' .
            '    <div class=\"hidden\">' .
            '        <div id=\"div_AmazonBanner\">' .
                        \$value .
            '        </div>' .
            '    </div>';

            // すでにレコードがあれば更新する
            \$record = \$amazonBannerRepository->findOneBy(['name' => \$key, 'page' => AmazonBanner::PAGE_TOP]);
            if (isset(\$record)) {
                \$record->setCode(\$code);
                \$entityManage->persist(\$record);
                \$entityManage->flush(\$record);
            } else {
                \$AmazonBanner = new AmazonBanner();
                \$AmazonBanner->setPage(AmazonBanner::PAGE_TOP);
                \$AmazonBanner->setName(\$key);
                \$AmazonBanner->setCode(\$code);
                if (\$key == '1000x120') {
                    \$AmazonBanner->setIsDefault(true);
                }
                \$entityManage->persist(\$AmazonBanner);
                \$entityManage->flush(\$AmazonBanner);
            }
        }

        // カート画面用レコードの作成
        foreach (\$banners as \$key => \$value) {
            \$code = 
            '    <script>' .
            '        \$(function () {' .
            '            /* ボタンを設置 */' .
            '            \$(\"div#AmazonBanner\").append(\$(\"div#div_AmazonBanner\"));' .
            '        });' .
            '    </script>' .
            '    ' .
            '    <div class=\"hidden\">' .
            '        <div id=\"div_AmazonBanner\">' .
                        \$value .
            '        </div>' .
            '    </div>';

            // すでにレコードがあれば更新する
            \$record = \$amazonBannerRepository->findOneBy(['name' => \$key, 'page' => AmazonBanner::PAGE_CART]);
            if (isset(\$record)) {
                \$record->setCode(\$code);
                \$entityManage->persist(\$record);
                \$entityManage->flush(\$record);
            } else {
                \$AmazonBanner = new AmazonBanner();
                \$AmazonBanner->setPage(AmazonBanner::PAGE_CART);
                \$AmazonBanner->setName(\$key);
                \$AmazonBanner->setCode(\$code);
                if (\$key == '1000x120') {
                    \$AmazonBanner->setIsDefault(true);
                }
                \$entityManage->persist(\$AmazonBanner);
                \$entityManage->flush(\$AmazonBanner);
            }
        }

        /** @var \\Plugin\\AmazonPayV2_42_Bundle\\Entity\\Config \$Config */
        \$Config = \$entityManage->find(Config::class, 1);
        if (\$Config) {
            // すでに設定レコードがあれば、AmazonBannerの初期値を設定する
            \$firstBannerOnTop = \$amazonBannerRepository->findOneBy(['page' => AmazonBanner::PAGE_TOP, 'isDefault' => true]);
            \$firstBannerOnCart = \$amazonBannerRepository->findOneBy(['page' => AmazonBanner::PAGE_CART, 'isDefault' => true]);

            // AmazonPayバナー
            \$tmp = \$Config->getUseAmazonBannerOnTop();
            if (!isset(\$tmp)) {
                \$Config->setUseAmazonBannerOnTop(true);
            }
            \$tmp = \$Config->getUseAmazonBannerOnCart();
            if (!isset(\$tmp)) {
                \$Config->setUseAmazonBannerOnCart(true);
            }
            \$tmp  = \$Config->getAmazonBannerSizeOnTop();
            if (!isset(\$tmp) || \$tmp == 0) {
                \$Config->setAmazonBannerSizeOnTop(\$firstBannerOnTop->getId());
            }
            \$tmp = \$Config->getAmazonBannerSizeOnCart();
            if (!isset(\$tmp) || \$tmp == 0) {
                \$Config->setAmazonBannerSizeOnCart(\$firstBannerOnCart->getId());
            }

            \$entityManage->persist(\$Config);
            \$entityManage->flush(\$Config);
        }
    }

    /**
     * ファイルをコピー
     */
    private function copyAssets(ContainerInterface \$serviceContainer)
    {
        \$file = new Filesystem();

        // css
        \$file->mkdir(\$this->target_css);
        \$file->mirror(\$this->origin_css, \$this->target_css);
    }

    /**
     * コピーしたファイルを削除
     */
    private function removeAssets(ContainerInterface \$serviceContainer)
    {
        \$file = new Filesystem();

        // css
        \$file->remove(\$this->target_css . '/amazon_shopping_v2.css');
    }

    /**
     * ファイルをアップデート
     */
    private function updateAssets(ContainerInterface \$serviceContainer)
    {
        \$file = new Filesystem();
        if (!\$file->exists(\$this->target_plugin_data . '/lastNameList.csv')) {
            \$file->copy(\$this->origin_plugin_data . '/lastNameList.csv', \$this->target_plugin_data . '/lastNameList.csv');
        }
        // css
        \$file->remove(\$this->target_css . '/amazon_shopping_v2.css');
        \$file->copy(\$this->origin_css . '/amazon_shopping_v2.css', \$this->target_css . '/amazon_shopping_v2.css');
    }

    /**
     * 自動メール送信 ※インストール、アンイストール、アップデート時
     *
     * @param string \$process
     */
    public function sendAutoMail(\$config, \$serviceContainer, \$process)
    {
        \$entityManage = \$serviceContainer->get('doctrine.orm.entity_manager');
        \$baseInfoRepository = \$entityManage->getRepository(BaseInfo::class);
        \$BaseInfo = \$baseInfoRepository->get();

        \$url = '';
        if(isset(\$_SERVER['HTTP_HOST']) && isset(\$_SERVER['REQUEST_URI'])) {
            \$url = \"http://\" . \$_SERVER[\"HTTP_HOST\"] . \$_SERVER['REQUEST_URI'];
            \$url = substr(\$url, 0, strrpos(\$url, 'store') - 1);
            \$url = substr(\$url, 0, strrpos(\$url, '/') + 1);
        }

        \$datetime = date('Y-m-d H:i:s');

        // EC-CUBEのバージョン取得
        \$version = Constant::VERSION;
        // プラグインのバージョン取得
        \$plugin_version = \$config['version'];

        \$body = <<<__EOS__
Amazon Pay プラグインサポート各位

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
■　プラグイン{\$process}のお知らせ　■
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

以下のECサイトでAmazon Pay V2 プラグインが{\$process}されました。

【店名】{\$BaseInfo->getShopName()}
【EC-CUBE】{\$version}
【プラグイン】{\$plugin_version}
【URL】{\$url}
【メールアドレス】{\$BaseInfo->getEmail01()}
【処理日時】{\$datetime}


※本メールは、配信専用です。
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
Amazon Pay　プラグインサポート
URL：https://www.ec-cube.net/product/amazonpay.php
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
__EOS__;

        \$message = new Email();
        \$message
            ->subject('[' . \$BaseInfo->getShopName() . '] ' . 'プラグイン' . \$process . '処理のお知らせ【Amazon Pay V2】')
            ->from(new Address(\$BaseInfo->getEmail03(), \$BaseInfo->getShopName()))
            ->to(new Address('amazonpay-support@ec-cube.net', 'amazon'))
            ->text(\$body);

        \$transport = Transport::fromDsn(\$serviceContainer->get(\\Eccube\\Common\\EccubeConfig::class)->get('eccube_mailer_dsn'));
        \$mailer = new Mailer(\$transport);
        \$mailer->send(\$message);
    }

    private function setConfigIni()
    {
        \$eccubePlatform = env('ECCUBE_PLATFORM');
        if (!(\$eccubePlatform === 'ec-cube.co')) {
            // ECCUBEクラウド版のみ行うため
            return;
        }

        // 16桁で生成
        \$rand = \\Eccube\\Util\\StringUtil::random();
        file_put_contents(__DIR__ . '/amazon_pay_config.ini', \"prefix = '{\$rand}'\");
    }
}
", "AmazonPayV2_42_Bundle/PluginManager.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\AmazonPayV2_42_Bundle\\PluginManager.php");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 461);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
