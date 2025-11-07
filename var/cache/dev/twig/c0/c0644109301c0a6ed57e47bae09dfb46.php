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

/* EccubePaymentLite42/Form/Type/Front/RegularNextDeliveryDateType.php */
class __TwigTemplate_322d27c03fce59bf06f5945eea0bf550 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Form/Type/Front/RegularNextDeliveryDateType.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Form/Type/Front/RegularNextDeliveryDateType.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Form\\Type\\Front;

use Doctrine\\ORM\\EntityRepository;
use Eccube\\Entity\\DeliveryTime;
use Eccube\\Repository\\DeliveryTimeRepository;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Entity\\RegularShipping;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Service\\NextDeliveryChangeableRangeService;
use Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Validator\\Constraints\\Callback;
use Symfony\\Component\\Validator\\Context\\ExecutionContextInterface;

class RegularNextDeliveryDateType extends AbstractType
{
    /**
     * @var NextDeliveryChangeableRangeService
     */
    private \$nextDeliveryChangeableRangeService;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;
    /**
     * @var DeliveryTimeRepository
     */
    private \$deliveryTimeRepository;

    public function __construct(
        NextDeliveryChangeableRangeService \$nextDeliveryChangeableRangeService,
        ConfigRepository \$configRepository,
        DeliveryTimeRepository \$deliveryTimeRepository
    ) {
        \$this->nextDeliveryChangeableRangeService = \$nextDeliveryChangeableRangeService;
        \$this->configRepository = \$configRepository;
        \$this->deliveryTimeRepository = \$deliveryTimeRepository;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        /** @var RegularShipping \$RegularShipping */
        \$RegularShipping = \$builder->getData();
        \$changeableDays = \$this->nextDeliveryChangeableRangeService->get(clone \$RegularShipping);

        \$Delivery = \$RegularShipping->getDelivery();
        \$timeId = \$RegularShipping->getTimeId();
        \$DeliveryTime = null;
        if (\$timeId) {
            \$DeliveryTime = \$this->deliveryTimeRepository->find(\$timeId);
        }
        \$builder
            ->add('NextDeliveryDate', ChoiceType::class, [
                'choices' => \$changeableDays,
                'data' => \$changeableDays[array_search(\$RegularShipping->getNextDeliveryDate(), \$changeableDays)],
                'constraints' => [
                    new Callback(function (
                        \$object,
                        ExecutionContextInterface \$context
                    ) {
                        /** @var Config \$Config */
                        \$Config = \$this->configRepository->find(1);
                        \$deadlineDate = new \\DateTime('today');
                        \$deadlineDate->modify('+'.\$Config->getRegularOrderDeadline().' day');
                        if (is_null(\$deadlineDate)) {
                            return;
                        }
                        if (\$deadlineDate >= \$object) {
                            \$context
                                ->buildViolation('「次回お届け予定日」は「定期受注注文締切日」より後の日付を設定する必要があります。')
                                ->atPath('next_delivery_date')
                                ->addViolation();
                        }
                    }),
                ],
            ])
            ->add('ShippingDeliveryTime', EntityType::class, [
                'class' => DeliveryTime::class,
                'placeholder' => 'common.select__unspecified',
                'required' => false,
                'query_builder' => function (EntityRepository \$er) use (\$Delivery) {
                    return \$er
                        ->createQueryBuilder('dt')
                        ->orderBy('dt.visible', 'DESC')
                        ->addOrderBy('dt.sort_no', 'ASC')
                        ->where('dt.Delivery = :Delivery')
                        ->setParameter('Delivery', \$Delivery);
                },
                'data' => \$DeliveryTime,
            ])
        ;
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'data_class' => RegularShipping::class,
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
        return "EccubePaymentLite42/Form/Type/Front/RegularNextDeliveryDateType.php";
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

namespace Plugin\\EccubePaymentLite42\\Form\\Type\\Front;

use Doctrine\\ORM\\EntityRepository;
use Eccube\\Entity\\DeliveryTime;
use Eccube\\Repository\\DeliveryTimeRepository;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Entity\\RegularShipping;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Service\\NextDeliveryChangeableRangeService;
use Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Validator\\Constraints\\Callback;
use Symfony\\Component\\Validator\\Context\\ExecutionContextInterface;

class RegularNextDeliveryDateType extends AbstractType
{
    /**
     * @var NextDeliveryChangeableRangeService
     */
    private \$nextDeliveryChangeableRangeService;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;
    /**
     * @var DeliveryTimeRepository
     */
    private \$deliveryTimeRepository;

    public function __construct(
        NextDeliveryChangeableRangeService \$nextDeliveryChangeableRangeService,
        ConfigRepository \$configRepository,
        DeliveryTimeRepository \$deliveryTimeRepository
    ) {
        \$this->nextDeliveryChangeableRangeService = \$nextDeliveryChangeableRangeService;
        \$this->configRepository = \$configRepository;
        \$this->deliveryTimeRepository = \$deliveryTimeRepository;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        /** @var RegularShipping \$RegularShipping */
        \$RegularShipping = \$builder->getData();
        \$changeableDays = \$this->nextDeliveryChangeableRangeService->get(clone \$RegularShipping);

        \$Delivery = \$RegularShipping->getDelivery();
        \$timeId = \$RegularShipping->getTimeId();
        \$DeliveryTime = null;
        if (\$timeId) {
            \$DeliveryTime = \$this->deliveryTimeRepository->find(\$timeId);
        }
        \$builder
            ->add('NextDeliveryDate', ChoiceType::class, [
                'choices' => \$changeableDays,
                'data' => \$changeableDays[array_search(\$RegularShipping->getNextDeliveryDate(), \$changeableDays)],
                'constraints' => [
                    new Callback(function (
                        \$object,
                        ExecutionContextInterface \$context
                    ) {
                        /** @var Config \$Config */
                        \$Config = \$this->configRepository->find(1);
                        \$deadlineDate = new \\DateTime('today');
                        \$deadlineDate->modify('+'.\$Config->getRegularOrderDeadline().' day');
                        if (is_null(\$deadlineDate)) {
                            return;
                        }
                        if (\$deadlineDate >= \$object) {
                            \$context
                                ->buildViolation('「次回お届け予定日」は「定期受注注文締切日」より後の日付を設定する必要があります。')
                                ->atPath('next_delivery_date')
                                ->addViolation();
                        }
                    }),
                ],
            ])
            ->add('ShippingDeliveryTime', EntityType::class, [
                'class' => DeliveryTime::class,
                'placeholder' => 'common.select__unspecified',
                'required' => false,
                'query_builder' => function (EntityRepository \$er) use (\$Delivery) {
                    return \$er
                        ->createQueryBuilder('dt')
                        ->orderBy('dt.visible', 'DESC')
                        ->addOrderBy('dt.sort_no', 'ASC')
                        ->where('dt.Delivery = :Delivery')
                        ->setParameter('Delivery', \$Delivery);
                },
                'data' => \$DeliveryTime,
            ])
        ;
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'data_class' => RegularShipping::class,
        ]);
    }
}
", "EccubePaymentLite42/Form/Type/Front/RegularNextDeliveryDateType.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Form\\Type\\Front\\RegularNextDeliveryDateType.php");
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
