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

/* B2BConnector/Event/AdminProductSubscriber.php */
class __TwigTemplate_39ac5dbd6d89b649a51a2094bede86a9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Event/AdminProductSubscriber.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Event/AdminProductSubscriber.php"));

        // line 1
        echo "<?php

namespace Plugin\\B2BConnector\\Event;

use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Event\\EccubeEvents;
use Eccube\\Event\\EventArgs;
use Eccube\\Event\\TemplateEvent;
use Plugin\\B2BConnector\\Entity\\ProductClassExt;
use Plugin\\B2BConnector\\Entity\\ProductExt;
use Plugin\\B2BConnector\\Form\\Type\\Admin\\ProductClassExtType;
use Plugin\\B2BConnector\\Form\\Type\\Admin\\ProductExtType;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Twig\\Environment;

class AdminProductSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private Environment \$twig,
        private EntityManagerInterface \$em,
        private FormFactoryInterface \$formFactory,
        private LoggerInterface \$logger
    ) {}

    public static function getSubscribedEvents()
    {
        return [
            EccubeEvents::ADMIN_PRODUCT_EDIT_INITIALIZE => 'onProductEditInitialize',
        ];
    }

    public function onProductEditInitialize(EventArgs \$event): void
    {
        \$req     = \$event->getRequest();
        \$session = \$req?->getSession();

        /** @var \\Eccube\\Entity\\Product|null \$Product */
        \$Product = \$event->getArgument('Product') ?? null;

        // --- 拡張エンティティの既存 or 新規を用意 ---
        \$ProductExt = \$this->em->getRepository(ProductExt::class)
            ->findOneBy(['Product' => \$Product]) ?? (new ProductExt())->setProduct(\$Product);

        // 1商品=1SKU 前提：先頭の ProductClass を主とする
        \$PrimaryProductClass = null;
        if (\$Product && method_exists(\$Product, 'getProductClasses') && \$Product->getProductClasses()) {
            \$PrimaryProductClass = \$Product->getProductClasses()->first() ?: null;
        }
        \$ProductClassExt = null;
        if (\$PrimaryProductClass) {
            \$ProductClassExt = \$this->em->getRepository(ProductClassExt::class)
                ->findOneBy(['ProductClass' => \$PrimaryProductClass]);
        }
        if (!\$ProductClassExt) {
            \$ProductClassExt = new ProductClassExt();
            if (\$PrimaryProductClass) {
                \$ProductClassExt->setProductClass(\$PrimaryProductClass);
            }
        }

        // --- サブフォーム埋め込み（form / builder 両対応） ---
        if (\$event->hasArgument('form')) {
            \$form = \$event->getArgument('form');
            \$form->add('product_ext', ProductExtType::class, [
                'data'   => \$ProductExt,
                'mapped' => false,
            ]);
            \$form->add('product_class_ext', ProductClassExtType::class, [
                'data'   => \$ProductClassExt,
                'mapped' => false,
            ]);
        } elseif (\$event->hasArgument('builder')) {
            \$builder = \$event->getArgument('builder');
            \$builder->add('product_ext', ProductExtType::class, [
                'data'   => \$ProductExt,
                'mapped' => false,
            ]);
            \$builder->add('product_class_ext', ProductClassExtType::class, [
                'data'   => \$ProductClassExt,
                'mapped' => false,
            ]);
        } else {
            \$this->logger->warning('[B2BConnector] neither \"form\" nor \"builder\" found on product edit initialize.');
        }

        // --- 以降：既存の GET/POST 切り分け & セッション退避を踏襲 ---
        if (\$req && \$req->isMethod('POST')) {
            \$extData = [];
            \$classData = [];

            // form が渡っているならメインフォーム名配下から安全に取得（埋め込み構造対応）
            if (\$event->hasArgument('form')) {
                \$form = \$event->getArgument('form');
                \$rootName = method_exists(\$form, 'getName') ? \$form->getName() : null;
                \$payload = \$rootName ? \$req->request->all(\$rootName) : null;
                if (is_array(\$payload)) {
                    \$extData   = is_array(\$payload['product_ext'] ?? null) ? \$payload['product_ext'] : [];
                    \$classData = is_array(\$payload['product_class_ext'] ?? null) ? \$payload['product_class_ext'] : [];
                }
            }
            // 念のため従来のトップレベルキーでもフォールバック
            if (!\$extData)   { \$extData   = \$req->request->all('product_ext') ?: []; }
            if (!\$classData) { \$classData = \$req->request->all('product_class_ext') ?: []; }

            if (!\$Product || !\$Product->getId()) {
                // 新規（IDなし）：セッション退避（既存踏襲）
                if (\$session) {
                    \$session->set('b2b_pending_ext', [
                        'ext'   => \$extData,
                        'class' => \$classData,
                        'ts'    => time(),
                    ]);
                }
                return;
            }

            // 既にIDあり＝編集側POST（既存踏襲）
            \$this->saveExt(\$Product, \$extData, \$classData);
            return;
        }

        // GET：新規作成直後の /edit リダイレクト時にセッションから拾って保存（既存踏襲）
        if (\$Product && \$Product->getId() && \$session && \$session->has('b2b_pending_ext')) {
            \$pending = \$session->get('b2b_pending_ext');
            \$session->remove('b2b_pending_ext'); // 一度だけ
            \$extData   = \\is_array(\$pending['ext'] ?? null) ? \$pending['ext'] : [];
            \$classData = \\is_array(\$pending['class'] ?? null) ? \$pending['class'] : [];
            \$this->saveExt(\$Product, \$extData, \$classData);
        }
    }

    private function saveExt(\\Eccube\\Entity\\Product \$Product, array \$extData, array \$classData): void
    {
        \$em = \$this->em;

        // ProductExt
        \$ProductExt = \$em->getRepository(\\Plugin\\B2BConnector\\Entity\\ProductExt::class)
            ->findOneBy(['Product' => \$Product]) ?? (new \\Plugin\\B2BConnector\\Entity\\ProductExt())->setProduct(\$Product);

        \$ProductExt->setMadeIn(\$extData['made_in'] ?? \$ProductExt->getMadeIn());
        \$ProductExt->setSize(\$extData['size'] ?? \$ProductExt->getSize());
        \$ProductExt->setMaterial(\$extData['material'] ?? \$ProductExt->getMaterial());
        if (\\array_key_exists('weight', \$extData))        { \$ProductExt->setWeight(\$extData['weight']); }
        \$ProductExt->setColorPattern(\$extData['color_pattern'] ?? \$ProductExt->getColorPattern());
        \$ProductExt->setPackageForm(\$extData['package_form'] ?? \$ProductExt->getPackageForm());
        if (\\array_key_exists('trade_rate', \$extData))        { \$ProductExt->setTradeRate(\$extData['trade_rate']); }
        \$em->persist(\$ProductExt);

        // 1商品=1SKU
        \$ProductClass = \$Product->getProductClasses()->first();
        if (\$ProductClass) {
            \$ClassExt = \$em->getRepository(\\Plugin\\B2BConnector\\Entity\\ProductClassExt::class)
                ->findOneBy(['ProductClass' => \$ProductClass]) ?? (new \\Plugin\\B2BConnector\\Entity\\ProductClassExt())->setProductClass(\$ProductClass);

            \$ClassExt->setItemCode(\$classData['item_code'] ?? \$ClassExt->getItemCode());
            \$ClassExt->setJanCode(\$classData['jan_code'] ?? \$ClassExt->getJanCode());
            \$ClassExt->setTaxCategory(\$classData['tax_category'] ?? \$ClassExt->getTaxCategory());
            if (\\array_key_exists('display_order', \$classData)) { \$ClassExt->setDisplayOrder((int)\$classData['display_order']); }
            \$ClassExt->setIsVisible(isset(\$classData['is_visible']) ? (bool)\$classData['is_visible'] : \$ClassExt->isVisible());

            \$em->persist(\$ClassExt);
        }

        \$em->flush();
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
        return "B2BConnector/Event/AdminProductSubscriber.php";
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

namespace Plugin\\B2BConnector\\Event;

use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Event\\EccubeEvents;
use Eccube\\Event\\EventArgs;
use Eccube\\Event\\TemplateEvent;
use Plugin\\B2BConnector\\Entity\\ProductClassExt;
use Plugin\\B2BConnector\\Entity\\ProductExt;
use Plugin\\B2BConnector\\Form\\Type\\Admin\\ProductClassExtType;
use Plugin\\B2BConnector\\Form\\Type\\Admin\\ProductExtType;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Twig\\Environment;

class AdminProductSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private Environment \$twig,
        private EntityManagerInterface \$em,
        private FormFactoryInterface \$formFactory,
        private LoggerInterface \$logger
    ) {}

    public static function getSubscribedEvents()
    {
        return [
            EccubeEvents::ADMIN_PRODUCT_EDIT_INITIALIZE => 'onProductEditInitialize',
        ];
    }

    public function onProductEditInitialize(EventArgs \$event): void
    {
        \$req     = \$event->getRequest();
        \$session = \$req?->getSession();

        /** @var \\Eccube\\Entity\\Product|null \$Product */
        \$Product = \$event->getArgument('Product') ?? null;

        // --- 拡張エンティティの既存 or 新規を用意 ---
        \$ProductExt = \$this->em->getRepository(ProductExt::class)
            ->findOneBy(['Product' => \$Product]) ?? (new ProductExt())->setProduct(\$Product);

        // 1商品=1SKU 前提：先頭の ProductClass を主とする
        \$PrimaryProductClass = null;
        if (\$Product && method_exists(\$Product, 'getProductClasses') && \$Product->getProductClasses()) {
            \$PrimaryProductClass = \$Product->getProductClasses()->first() ?: null;
        }
        \$ProductClassExt = null;
        if (\$PrimaryProductClass) {
            \$ProductClassExt = \$this->em->getRepository(ProductClassExt::class)
                ->findOneBy(['ProductClass' => \$PrimaryProductClass]);
        }
        if (!\$ProductClassExt) {
            \$ProductClassExt = new ProductClassExt();
            if (\$PrimaryProductClass) {
                \$ProductClassExt->setProductClass(\$PrimaryProductClass);
            }
        }

        // --- サブフォーム埋め込み（form / builder 両対応） ---
        if (\$event->hasArgument('form')) {
            \$form = \$event->getArgument('form');
            \$form->add('product_ext', ProductExtType::class, [
                'data'   => \$ProductExt,
                'mapped' => false,
            ]);
            \$form->add('product_class_ext', ProductClassExtType::class, [
                'data'   => \$ProductClassExt,
                'mapped' => false,
            ]);
        } elseif (\$event->hasArgument('builder')) {
            \$builder = \$event->getArgument('builder');
            \$builder->add('product_ext', ProductExtType::class, [
                'data'   => \$ProductExt,
                'mapped' => false,
            ]);
            \$builder->add('product_class_ext', ProductClassExtType::class, [
                'data'   => \$ProductClassExt,
                'mapped' => false,
            ]);
        } else {
            \$this->logger->warning('[B2BConnector] neither \"form\" nor \"builder\" found on product edit initialize.');
        }

        // --- 以降：既存の GET/POST 切り分け & セッション退避を踏襲 ---
        if (\$req && \$req->isMethod('POST')) {
            \$extData = [];
            \$classData = [];

            // form が渡っているならメインフォーム名配下から安全に取得（埋め込み構造対応）
            if (\$event->hasArgument('form')) {
                \$form = \$event->getArgument('form');
                \$rootName = method_exists(\$form, 'getName') ? \$form->getName() : null;
                \$payload = \$rootName ? \$req->request->all(\$rootName) : null;
                if (is_array(\$payload)) {
                    \$extData   = is_array(\$payload['product_ext'] ?? null) ? \$payload['product_ext'] : [];
                    \$classData = is_array(\$payload['product_class_ext'] ?? null) ? \$payload['product_class_ext'] : [];
                }
            }
            // 念のため従来のトップレベルキーでもフォールバック
            if (!\$extData)   { \$extData   = \$req->request->all('product_ext') ?: []; }
            if (!\$classData) { \$classData = \$req->request->all('product_class_ext') ?: []; }

            if (!\$Product || !\$Product->getId()) {
                // 新規（IDなし）：セッション退避（既存踏襲）
                if (\$session) {
                    \$session->set('b2b_pending_ext', [
                        'ext'   => \$extData,
                        'class' => \$classData,
                        'ts'    => time(),
                    ]);
                }
                return;
            }

            // 既にIDあり＝編集側POST（既存踏襲）
            \$this->saveExt(\$Product, \$extData, \$classData);
            return;
        }

        // GET：新規作成直後の /edit リダイレクト時にセッションから拾って保存（既存踏襲）
        if (\$Product && \$Product->getId() && \$session && \$session->has('b2b_pending_ext')) {
            \$pending = \$session->get('b2b_pending_ext');
            \$session->remove('b2b_pending_ext'); // 一度だけ
            \$extData   = \\is_array(\$pending['ext'] ?? null) ? \$pending['ext'] : [];
            \$classData = \\is_array(\$pending['class'] ?? null) ? \$pending['class'] : [];
            \$this->saveExt(\$Product, \$extData, \$classData);
        }
    }

    private function saveExt(\\Eccube\\Entity\\Product \$Product, array \$extData, array \$classData): void
    {
        \$em = \$this->em;

        // ProductExt
        \$ProductExt = \$em->getRepository(\\Plugin\\B2BConnector\\Entity\\ProductExt::class)
            ->findOneBy(['Product' => \$Product]) ?? (new \\Plugin\\B2BConnector\\Entity\\ProductExt())->setProduct(\$Product);

        \$ProductExt->setMadeIn(\$extData['made_in'] ?? \$ProductExt->getMadeIn());
        \$ProductExt->setSize(\$extData['size'] ?? \$ProductExt->getSize());
        \$ProductExt->setMaterial(\$extData['material'] ?? \$ProductExt->getMaterial());
        if (\\array_key_exists('weight', \$extData))        { \$ProductExt->setWeight(\$extData['weight']); }
        \$ProductExt->setColorPattern(\$extData['color_pattern'] ?? \$ProductExt->getColorPattern());
        \$ProductExt->setPackageForm(\$extData['package_form'] ?? \$ProductExt->getPackageForm());
        if (\\array_key_exists('trade_rate', \$extData))        { \$ProductExt->setTradeRate(\$extData['trade_rate']); }
        \$em->persist(\$ProductExt);

        // 1商品=1SKU
        \$ProductClass = \$Product->getProductClasses()->first();
        if (\$ProductClass) {
            \$ClassExt = \$em->getRepository(\\Plugin\\B2BConnector\\Entity\\ProductClassExt::class)
                ->findOneBy(['ProductClass' => \$ProductClass]) ?? (new \\Plugin\\B2BConnector\\Entity\\ProductClassExt())->setProductClass(\$ProductClass);

            \$ClassExt->setItemCode(\$classData['item_code'] ?? \$ClassExt->getItemCode());
            \$ClassExt->setJanCode(\$classData['jan_code'] ?? \$ClassExt->getJanCode());
            \$ClassExt->setTaxCategory(\$classData['tax_category'] ?? \$ClassExt->getTaxCategory());
            if (\\array_key_exists('display_order', \$classData)) { \$ClassExt->setDisplayOrder((int)\$classData['display_order']); }
            \$ClassExt->setIsVisible(isset(\$classData['is_visible']) ? (bool)\$classData['is_visible'] : \$ClassExt->isVisible());

            \$em->persist(\$ClassExt);
        }

        \$em->flush();
    }
}
", "B2BConnector/Event/AdminProductSubscriber.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\B2BConnector\\Event\\AdminProductSubscriber.php");
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
