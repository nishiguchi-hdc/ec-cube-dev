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

/* B2BConnector/Form/Extension/AdminOrderTypeExtension.php */
class __TwigTemplate_baf35bca4e779b1cbbbb4d8450beab24 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Form/Extension/AdminOrderTypeExtension.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Form/Extension/AdminOrderTypeExtension.php"));

        // line 1
        echo "<?php

namespace Plugin\\B2BConnector\\Form\\Extension;

use Doctrine\\ORM\\EntityManagerInterface; // ★追加
use Eccube\\Entity\\Order;
use Eccube\\Entity\\Shipping;
use Eccube\\Form\\Type\\Admin\\OrderType;
use Plugin\\B2BConnector\\Entity\\OrderExt;
use Plugin\\B2BConnector\\Form\\Type\\Admin\\OrderExtType;
use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

class AdminOrderTypeExtension extends AbstractTypeExtension
{
    public function __construct(private EntityManagerInterface \$em) {} // ★追加

    public static function getExtendedTypes(): iterable
    {
        return [OrderType::class];
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        // 初期表示時（エンティティに既定値を埋める）
        \$builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent \$event) {
            /** @var Order|null \$Order */
            \$Order = \$event->getData();
            if (!\$Order instanceof Order) return;

            // 注文者：NotBlank 回避（空なら既定値）
            \$Order->getName01() ?: \$Order->setName01('法人姓');
            \$Order->getName02() ?: \$Order->setName02('法人名');
            \$Order->getKana01() ?: \$Order->setKana01('ホウジンセイ');
            \$Order->getKana02() ?: \$Order->setKana02('ホウジンメイ');

            // 数値（必須）は null だけ 0 初期化
            if (\$Order->getDiscount() === null)         { \$Order->setDiscount(0); }
            // if (\$Order->getDeliveryFeeTotal() === null) { \$Order->setDeliveryFeeTotal(0); }
            // if (\$Order->getCharge() === null)           { \$Order->setCharge(0); }
            if (\$Order->getUsePoint() === null)         { \$Order->setUsePoint(0); }
            if (\$Order->getAddPoint() === null)         { \$Order->setAddPoint(0); }            

            // OrderExt を取得 or 新規作成
            \$ext = \$this->em->getRepository(OrderExt::class)
                ->findOneBy(['Order' => \$Order])
                ?? (new OrderExt())->setOrder(\$Order);

            \$event->getForm()->add('order_ext', OrderExtType::class, [
                'data' => \$ext,
                'mapped' => false,
            ]);

            // 出荷先：0件なら1件作成（単数配送UIの前提を担保）
            if (\$Order->getShippings()->isEmpty()) {
                \$Shipping = new Shipping();
                \$Shipping->setOrder(\$Order);
                \$Order->addShipping(\$Shipping);
            }
        });

        \$builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent \$e) {
            \$form = \$e->getForm();
            \$Order = \$e->getData();
            if (!\$Order instanceof Order) return;

            if (\$form->has('order_ext')) {
                \$oExt = \$form->get('order_ext')->getData();
                if (\$oExt instanceof OrderExt) {
                    \$oExt->setOrder(\$Order);
                    \$this->em->persist(\$oExt);
                }
            }
        });
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
        return "B2BConnector/Form/Extension/AdminOrderTypeExtension.php";
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

namespace Plugin\\B2BConnector\\Form\\Extension;

use Doctrine\\ORM\\EntityManagerInterface; // ★追加
use Eccube\\Entity\\Order;
use Eccube\\Entity\\Shipping;
use Eccube\\Form\\Type\\Admin\\OrderType;
use Plugin\\B2BConnector\\Entity\\OrderExt;
use Plugin\\B2BConnector\\Form\\Type\\Admin\\OrderExtType;
use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

class AdminOrderTypeExtension extends AbstractTypeExtension
{
    public function __construct(private EntityManagerInterface \$em) {} // ★追加

    public static function getExtendedTypes(): iterable
    {
        return [OrderType::class];
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        // 初期表示時（エンティティに既定値を埋める）
        \$builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent \$event) {
            /** @var Order|null \$Order */
            \$Order = \$event->getData();
            if (!\$Order instanceof Order) return;

            // 注文者：NotBlank 回避（空なら既定値）
            \$Order->getName01() ?: \$Order->setName01('法人姓');
            \$Order->getName02() ?: \$Order->setName02('法人名');
            \$Order->getKana01() ?: \$Order->setKana01('ホウジンセイ');
            \$Order->getKana02() ?: \$Order->setKana02('ホウジンメイ');

            // 数値（必須）は null だけ 0 初期化
            if (\$Order->getDiscount() === null)         { \$Order->setDiscount(0); }
            // if (\$Order->getDeliveryFeeTotal() === null) { \$Order->setDeliveryFeeTotal(0); }
            // if (\$Order->getCharge() === null)           { \$Order->setCharge(0); }
            if (\$Order->getUsePoint() === null)         { \$Order->setUsePoint(0); }
            if (\$Order->getAddPoint() === null)         { \$Order->setAddPoint(0); }            

            // OrderExt を取得 or 新規作成
            \$ext = \$this->em->getRepository(OrderExt::class)
                ->findOneBy(['Order' => \$Order])
                ?? (new OrderExt())->setOrder(\$Order);

            \$event->getForm()->add('order_ext', OrderExtType::class, [
                'data' => \$ext,
                'mapped' => false,
            ]);

            // 出荷先：0件なら1件作成（単数配送UIの前提を担保）
            if (\$Order->getShippings()->isEmpty()) {
                \$Shipping = new Shipping();
                \$Shipping->setOrder(\$Order);
                \$Order->addShipping(\$Shipping);
            }
        });

        \$builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent \$e) {
            \$form = \$e->getForm();
            \$Order = \$e->getData();
            if (!\$Order instanceof Order) return;

            if (\$form->has('order_ext')) {
                \$oExt = \$form->get('order_ext')->getData();
                if (\$oExt instanceof OrderExt) {
                    \$oExt->setOrder(\$Order);
                    \$this->em->persist(\$oExt);
                }
            }
        });
    }


}
", "B2BConnector/Form/Extension/AdminOrderTypeExtension.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\B2BConnector\\Form\\Extension\\AdminOrderTypeExtension.php");
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
