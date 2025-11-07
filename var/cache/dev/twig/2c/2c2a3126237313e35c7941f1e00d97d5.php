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

/* B2BConnector/Event/AdminCustomerSubscriber.php */
class __TwigTemplate_7fee01d09c33444ed2e092bf8461f18d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Event/AdminCustomerSubscriber.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Event/AdminCustomerSubscriber.php"));

        // line 1
        echo "<?php

namespace Plugin\\B2BConnector\\Event;

use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Entity\\Customer;
use Eccube\\Event\\EccubeEvents;
use Eccube\\Event\\EventArgs;
use Plugin\\B2BConnector\\Entity\\CustomerExt;
use Plugin\\B2BConnector\\Form\\Type\\Admin\\CustomerExtType;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;

class AdminCustomerSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private FormFactoryInterface \$formFactory,
        private EntityManagerInterface \$em,
        private LoggerInterface \$logger,
    ) {}

    public static function getSubscribedEvents(): array
    {
        // EC-CUBE 4.3 の管理画面：顧客編集（一覧→編集の画面）
        return [
            EccubeEvents::ADMIN_CUSTOMER_EDIT_INDEX_INITIALIZE => 'onInitialize',
            EccubeEvents::ADMIN_CUSTOMER_EDIT_INDEX_COMPLETE   => 'onComplete',
        ];
    }

    /**
     * 画面初期化：拡張フォームを差し込み（自由レイアウトで include できるように）
     */
    public function onInitialize(EventArgs \$event): void
    {
        /** @var Customer|null \$Customer */
        \$Customer = \$event->getArgument('Customer') ?? null;

        if (\$Customer) {
            \$ext = \$this->em->getRepository(CustomerExt::class)
                ->findOneBy(['Customer' => \$Customer]);            
            if (!\$ext) {
                \$ext = new CustomerExt();
                \$ext->setCustomer(\$Customer);
            }
        } else {
            \$ext = new CustomerExt();
        }

        // ★ form / builder の両対応
        if (\$event->hasArgument('form')) {
            \$form = \$event->getArgument('form');
            \$form->add('customer_ext', CustomerExtType::class, [
                'data' => \$ext,
                'mapped' => false,
            ]);
        } elseif (\$event->hasArgument('builder')) {
            \$builder = \$event->getArgument('builder');
            \$builder->add('customer_ext', CustomerExtType::class, [
                'data' => \$ext,
                'mapped' => false,
            ]);
        } else {
            \$this->logger->warning('[B2BConnector] neither \"form\" nor \"builder\" found in initialize args.');
        }
    }

    /**
     * 保存完了前：POST値を CustomerExt に反映して永続化
     */
    public function onComplete(EventArgs \$event): void
    {
        /** @var Customer \$Customer */
        \$Customer = \$event->getArgument('Customer');
        \$form     = \$event->getArgument('form');

        // 念のため存在確認（他プラグイン等の干渉対策）
        if (!\$form->has('customer_ext')) {
            \$this->logger->warning('[B2BConnector] customer_ext subform not found on complete.');
            return;
        }

        /** @var \\Plugin\\B2BConnector\\Entity\\CustomerExt \$ext */
        \$ext = \$event->hasArgument('customer_ext_entity')
            ? \$event->getArgument('customer_ext_entity')
            : (\$this->em->getRepository(CustomerExt::class)->findOneBy(['Customer' => \$Customer]) ?? (new CustomerExt())->setCustomer(\$Customer));

        if (!\$ext->getCustomer()) {
            \$ext->setCustomer(\$Customer);
        }        

        // 必要ならここで空文字→null 等の正規化を行う（任意）
        // 例）if (\$ext->getFaxNumber() === '') { \$ext->setFaxNumber(null); }

        \$this->em->persist(\$ext);
        \$this->em->flush();

        \$this->logger->info('[B2BConnector] CustomerExt saved via subform', [
            'customer_id' => \$Customer->getId(),
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
        return "B2BConnector/Event/AdminCustomerSubscriber.php";
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
use Eccube\\Entity\\Customer;
use Eccube\\Event\\EccubeEvents;
use Eccube\\Event\\EventArgs;
use Plugin\\B2BConnector\\Entity\\CustomerExt;
use Plugin\\B2BConnector\\Form\\Type\\Admin\\CustomerExtType;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;

class AdminCustomerSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private FormFactoryInterface \$formFactory,
        private EntityManagerInterface \$em,
        private LoggerInterface \$logger,
    ) {}

    public static function getSubscribedEvents(): array
    {
        // EC-CUBE 4.3 の管理画面：顧客編集（一覧→編集の画面）
        return [
            EccubeEvents::ADMIN_CUSTOMER_EDIT_INDEX_INITIALIZE => 'onInitialize',
            EccubeEvents::ADMIN_CUSTOMER_EDIT_INDEX_COMPLETE   => 'onComplete',
        ];
    }

    /**
     * 画面初期化：拡張フォームを差し込み（自由レイアウトで include できるように）
     */
    public function onInitialize(EventArgs \$event): void
    {
        /** @var Customer|null \$Customer */
        \$Customer = \$event->getArgument('Customer') ?? null;

        if (\$Customer) {
            \$ext = \$this->em->getRepository(CustomerExt::class)
                ->findOneBy(['Customer' => \$Customer]);            
            if (!\$ext) {
                \$ext = new CustomerExt();
                \$ext->setCustomer(\$Customer);
            }
        } else {
            \$ext = new CustomerExt();
        }

        // ★ form / builder の両対応
        if (\$event->hasArgument('form')) {
            \$form = \$event->getArgument('form');
            \$form->add('customer_ext', CustomerExtType::class, [
                'data' => \$ext,
                'mapped' => false,
            ]);
        } elseif (\$event->hasArgument('builder')) {
            \$builder = \$event->getArgument('builder');
            \$builder->add('customer_ext', CustomerExtType::class, [
                'data' => \$ext,
                'mapped' => false,
            ]);
        } else {
            \$this->logger->warning('[B2BConnector] neither \"form\" nor \"builder\" found in initialize args.');
        }
    }

    /**
     * 保存完了前：POST値を CustomerExt に反映して永続化
     */
    public function onComplete(EventArgs \$event): void
    {
        /** @var Customer \$Customer */
        \$Customer = \$event->getArgument('Customer');
        \$form     = \$event->getArgument('form');

        // 念のため存在確認（他プラグイン等の干渉対策）
        if (!\$form->has('customer_ext')) {
            \$this->logger->warning('[B2BConnector] customer_ext subform not found on complete.');
            return;
        }

        /** @var \\Plugin\\B2BConnector\\Entity\\CustomerExt \$ext */
        \$ext = \$event->hasArgument('customer_ext_entity')
            ? \$event->getArgument('customer_ext_entity')
            : (\$this->em->getRepository(CustomerExt::class)->findOneBy(['Customer' => \$Customer]) ?? (new CustomerExt())->setCustomer(\$Customer));

        if (!\$ext->getCustomer()) {
            \$ext->setCustomer(\$Customer);
        }        

        // 必要ならここで空文字→null 等の正規化を行う（任意）
        // 例）if (\$ext->getFaxNumber() === '') { \$ext->setFaxNumber(null); }

        \$this->em->persist(\$ext);
        \$this->em->flush();

        \$this->logger->info('[B2BConnector] CustomerExt saved via subform', [
            'customer_id' => \$Customer->getId(),
        ]);
    }
}
", "B2BConnector/Event/AdminCustomerSubscriber.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\B2BConnector\\Event\\AdminCustomerSubscriber.php");
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
