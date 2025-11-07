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

/* B2BConnector/Event/AdminCustomerAddressSubscriber.php */
class __TwigTemplate_577c93e57aee61e9afddcc38e7b26771 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Event/AdminCustomerAddressSubscriber.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Event/AdminCustomerAddressSubscriber.php"));

        // line 1
        echo "<?php

namespace Plugin\\B2BConnector\\Event;

use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Entity\\CustomerAddress;
use Eccube\\Event\\EccubeEvents;
use Eccube\\Event\\EventArgs;
use Plugin\\B2BConnector\\Entity\\CustomerAddressExt;
use Plugin\\B2BConnector\\Form\\Type\\Admin\\CustomerAddressExtType;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class AdminCustomerAddressSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private EntityManagerInterface \$em,
        private LoggerInterface \$logger
    ) {}

    public static function getSubscribedEvents(): array
    {
        return [
            // フォーム構築（埋め込み）
            EccubeEvents::ADMIN_CUSTOMER_DELIVERY_EDIT_INDEX_INITIALIZE  => 'onInitialize',
            // 保存直前（persist/flush）
            EccubeEvents::ADMIN_CUSTOMER_DELIVERY_EDIT_INDEX_COMPLETE  => 'onComplete',
        ];
    }

    /**
     * INITIALIZE: customer_address_ext サブフォームを差し込む（mapped:false）
     */
    public function onInitialize(EventArgs \$event): void
    {
        /** @var CustomerAddress|null \$Address */
        \$Address = \$event->getArgument('CustomerAddress') ?? null;

        \$ext = \$Address
            ? (\$this->em->getRepository(CustomerAddressExt::class)->findOneBy(['CustomerAddress' => \$Address])
                ?? (new CustomerAddressExt())->setCustomerAddress(\$Address))
            : new CustomerAddressExt();

        if (\$event->hasArgument('form')) {
            \$form = \$event->getArgument('form');
            \$form->add('customer_address_ext', CustomerAddressExtType::class, [
                'data'   => \$ext,
                'mapped' => false,
            ]);
        } elseif (\$event->hasArgument('builder')) {
            \$builder = \$event->getArgument('builder');
            \$builder->add('customer_address_ext', CustomerAddressExtType::class, [
                'data'   => \$ext,
                'mapped' => false,
            ]);
        } else {
            \$this->logger->warning('[B2BConnector] neither \"form\" nor \"builder\" found in address initialize args.');
        }
    }

    /**
     * COMPLETE: フォームから拡張エンティティを取得して保存
     */
    public function onComplete(EventArgs \$event): void
    {
        /** @var CustomerAddress \$Address */
        \$Address = \$event->getArgument('CustomerAddress');
        \$form    = \$event->getArgument('form');

        if (!\$form->has('customer_address_ext')) {
            \$this->logger->warning('[B2BConnector] customer_address_ext subform not found on complete.');
            return;
        }

        /** @var CustomerAddressExt \$ext */
        \$ext = \$form->get('customer_address_ext')->getData();
        if (!\$ext instanceof CustomerAddressExt) {
            \$this->logger->warning('[B2BConnector] customer_address_ext data is invalid.');
            return;
        }

        if (!\$ext->getCustomerAddress()) {
            \$ext->setCustomerAddress(\$Address);
        }

        // 必要ならここで空文字→null 等の正規化
        // if (\$ext->getDepartName() === '') \$ext->setDepartName(null);
        // if (\$ext->getPicName() === '') \$ext->setPicName(null);

        \$this->em->persist(\$ext);
        \$this->em->flush();

        \$this->logger->info('[B2BConnector] CustomerAddressExt saved', [
            'address_id' => \$Address->getId(),
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
        return "B2BConnector/Event/AdminCustomerAddressSubscriber.php";
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
use Eccube\\Entity\\CustomerAddress;
use Eccube\\Event\\EccubeEvents;
use Eccube\\Event\\EventArgs;
use Plugin\\B2BConnector\\Entity\\CustomerAddressExt;
use Plugin\\B2BConnector\\Form\\Type\\Admin\\CustomerAddressExtType;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class AdminCustomerAddressSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private EntityManagerInterface \$em,
        private LoggerInterface \$logger
    ) {}

    public static function getSubscribedEvents(): array
    {
        return [
            // フォーム構築（埋め込み）
            EccubeEvents::ADMIN_CUSTOMER_DELIVERY_EDIT_INDEX_INITIALIZE  => 'onInitialize',
            // 保存直前（persist/flush）
            EccubeEvents::ADMIN_CUSTOMER_DELIVERY_EDIT_INDEX_COMPLETE  => 'onComplete',
        ];
    }

    /**
     * INITIALIZE: customer_address_ext サブフォームを差し込む（mapped:false）
     */
    public function onInitialize(EventArgs \$event): void
    {
        /** @var CustomerAddress|null \$Address */
        \$Address = \$event->getArgument('CustomerAddress') ?? null;

        \$ext = \$Address
            ? (\$this->em->getRepository(CustomerAddressExt::class)->findOneBy(['CustomerAddress' => \$Address])
                ?? (new CustomerAddressExt())->setCustomerAddress(\$Address))
            : new CustomerAddressExt();

        if (\$event->hasArgument('form')) {
            \$form = \$event->getArgument('form');
            \$form->add('customer_address_ext', CustomerAddressExtType::class, [
                'data'   => \$ext,
                'mapped' => false,
            ]);
        } elseif (\$event->hasArgument('builder')) {
            \$builder = \$event->getArgument('builder');
            \$builder->add('customer_address_ext', CustomerAddressExtType::class, [
                'data'   => \$ext,
                'mapped' => false,
            ]);
        } else {
            \$this->logger->warning('[B2BConnector] neither \"form\" nor \"builder\" found in address initialize args.');
        }
    }

    /**
     * COMPLETE: フォームから拡張エンティティを取得して保存
     */
    public function onComplete(EventArgs \$event): void
    {
        /** @var CustomerAddress \$Address */
        \$Address = \$event->getArgument('CustomerAddress');
        \$form    = \$event->getArgument('form');

        if (!\$form->has('customer_address_ext')) {
            \$this->logger->warning('[B2BConnector] customer_address_ext subform not found on complete.');
            return;
        }

        /** @var CustomerAddressExt \$ext */
        \$ext = \$form->get('customer_address_ext')->getData();
        if (!\$ext instanceof CustomerAddressExt) {
            \$this->logger->warning('[B2BConnector] customer_address_ext data is invalid.');
            return;
        }

        if (!\$ext->getCustomerAddress()) {
            \$ext->setCustomerAddress(\$Address);
        }

        // 必要ならここで空文字→null 等の正規化
        // if (\$ext->getDepartName() === '') \$ext->setDepartName(null);
        // if (\$ext->getPicName() === '') \$ext->setPicName(null);

        \$this->em->persist(\$ext);
        \$this->em->flush();

        \$this->logger->info('[B2BConnector] CustomerAddressExt saved', [
            'address_id' => \$Address->getId(),
        ]);
    }
}
", "B2BConnector/Event/AdminCustomerAddressSubscriber.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\B2BConnector\\Event\\AdminCustomerAddressSubscriber.php");
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
