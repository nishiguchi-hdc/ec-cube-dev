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

/* EccubePaymentLite42/Form/Type/Admin/RegularCycleFormType.php */
class __TwigTemplate_0a2957ee2f823e879056c4f5b543561a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Form/Type/Admin/RegularCycleFormType.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Form/Type/Admin/RegularCycleFormType.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Form\\Type\\Admin;

use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Entity\\RegularCycle;
use Plugin\\EccubePaymentLite42\\Entity\\RegularCycleType;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

class RegularCycleFormType extends AbstractType
{
    /**
     * @var ConfigRepository
     */
    private \$configRepository;

    public function __construct(ConfigRepository \$configRepository)
    {
        \$this->configRepository = \$configRepository;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            ->add('regular_cycle_type', EntityType::class, [
                'class' => RegularCycleType::class,
                'required' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => '定期サイクルの種類を入力してください。',
                    ]),
                ],
            ])
            ->add('day', ChoiceType::class, [
                'required' => false,
                'choices' => \$this->getDays(),
                'multiple' => false,
                'expanded' => false,
            ])
            ->add('week', ChoiceType::class, [
                'required' => false,
                'choices' => \$this->getWeeks(),
                'multiple' => false,
                'expanded' => false,
            ])
        ;
        \$builder
            ->addEventListener(FormEvents::POST_SUBMIT, [\$this, 'validateFormDataDay'])
            ->addEventListener(FormEvents::POST_SUBMIT, [\$this, 'validateFormDataSpecificWeek']);
    }

    public function validateFormDataDay(FormEvent \$event)
    {
        \$form = \$event->getForm();
        if(is_null(\$form['regular_cycle_type']->getData())){
            return;
        }

        \$regularCycleId = \$form['regular_cycle_type']->getData()->getId();
        if (!(
            \$regularCycleId === RegularCycleType::REGULAR_DAILY_CYCLE ||
            \$regularCycleId === RegularCycleType::REGULAR_WEEKLY_CYCLE ||
            \$regularCycleId === RegularCycleType::REGULAR_MONTHLY_CYCLE ||
            \$regularCycleId === RegularCycleType::REGULAR_SPECIFIC_DAY_CYCLE
        )) {
            return;
        }
        \$day = \$form['day']->getData();
        if (is_null(\$day)) {
            \$form['day']->addError(new FormError('日付は必須入力です。'));

            return;
        }
        if (\$regularCycleId === RegularCycleType::REGULAR_DAILY_CYCLE) {
            if (\$day <= 0 || 100 <= \$day) {
                \$form['day']->addError(new FormError('日付の値が不正です。'));

                return;
            }
        }
        if (\$regularCycleId === RegularCycleType::REGULAR_DAILY_CYCLE) {
            /** @var Config \$Config */
            \$Config = \$this->configRepository->find(1);
            \$deadLine = \$Config->getRegularOrderDeadline();
            if (\$day <= \$deadLine) {
                \$form['day']->addError(new FormError('「定期受注注文締切日」よりも大きな値を設定する必要があります。'));

                return;
            }
        }
        if (\$regularCycleId === RegularCycleType::REGULAR_WEEKLY_CYCLE) {
            if (\$day <= 0 || 5 <= \$day) {
                \$form['day']->addError(new FormError('日付の値が不正です。'));

                return;
            }
        }
        if (\$regularCycleId === RegularCycleType::REGULAR_MONTHLY_CYCLE) {
            if (\$day <= 0 || 13 <= \$day) {
                \$form['day']->addError(new FormError('日付の値が不正です。'));

                return;
            }
        }
        if (\$regularCycleId === RegularCycleType::REGULAR_SPECIFIC_DAY_CYCLE) {
            if (\$day <= 0 || 32 <= \$day) {
                \$form['day']->addError(new FormError('日付の値が不正です。'));

                return;
            }
        }
    }

    public function validateFormDataSpecificWeek(FormEvent \$event)
    {
        \$form = \$event->getForm();
        if(is_null(\$form['regular_cycle_type']->getData())){
            return;
        }

        \$regularCycleId = \$form['regular_cycle_type']->getData()->getId();
        if (\$regularCycleId !== RegularCycleType::REGULAR_SPECIFIC_WEEK_CYCLE) {
            return;
        }
        \$week = \$form['week']->getData();

        if (is_null(\$week)) {
            \$form['week']->addError(new FormError('曜日は必須入力です。'));

            return;
        }
        if (\$week < 1 || 8 <= \$week) {
            \$form['week']->addError(new FormError('曜日の値が不正です。'));

            return;
        }
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        \$deadLine = \$Config->getRegularOrderDeadline();
        if (7 <= \$deadLine) {
            \$form['week']->addError(new FormError('定期受注注文締切日よりも定期サイクルが大きくなってしまうため、「特定の曜日」は設定できません。'));
        }
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'data_class' => RegularCycle::class,
        ]);
    }

    private function getDays(): array
    {
        \$days = ['-' => null];

        return array_merge(\$days, array_combine(range(1, 99), range(1, 99)));
    }

    private function getWeeks(): array
    {
        return [
            '-' => null,
            '日曜日' => RegularCycle::SUNDAY,
            '月曜日' => RegularCycle::MONDAY,
            '火曜日' => RegularCycle::TUESDAY,
            '水曜日' => RegularCycle::WEDNESDAY,
            '木曜日' => RegularCycle::THURSDAY,
            '金曜日' => RegularCycle::FRIDAY,
            '土曜日' => RegularCycle::SATURDAY,
        ];
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
        return "EccubePaymentLite42/Form/Type/Admin/RegularCycleFormType.php";
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

use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Entity\\RegularCycle;
use Plugin\\EccubePaymentLite42\\Entity\\RegularCycleType;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

class RegularCycleFormType extends AbstractType
{
    /**
     * @var ConfigRepository
     */
    private \$configRepository;

    public function __construct(ConfigRepository \$configRepository)
    {
        \$this->configRepository = \$configRepository;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            ->add('regular_cycle_type', EntityType::class, [
                'class' => RegularCycleType::class,
                'required' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => '定期サイクルの種類を入力してください。',
                    ]),
                ],
            ])
            ->add('day', ChoiceType::class, [
                'required' => false,
                'choices' => \$this->getDays(),
                'multiple' => false,
                'expanded' => false,
            ])
            ->add('week', ChoiceType::class, [
                'required' => false,
                'choices' => \$this->getWeeks(),
                'multiple' => false,
                'expanded' => false,
            ])
        ;
        \$builder
            ->addEventListener(FormEvents::POST_SUBMIT, [\$this, 'validateFormDataDay'])
            ->addEventListener(FormEvents::POST_SUBMIT, [\$this, 'validateFormDataSpecificWeek']);
    }

    public function validateFormDataDay(FormEvent \$event)
    {
        \$form = \$event->getForm();
        if(is_null(\$form['regular_cycle_type']->getData())){
            return;
        }

        \$regularCycleId = \$form['regular_cycle_type']->getData()->getId();
        if (!(
            \$regularCycleId === RegularCycleType::REGULAR_DAILY_CYCLE ||
            \$regularCycleId === RegularCycleType::REGULAR_WEEKLY_CYCLE ||
            \$regularCycleId === RegularCycleType::REGULAR_MONTHLY_CYCLE ||
            \$regularCycleId === RegularCycleType::REGULAR_SPECIFIC_DAY_CYCLE
        )) {
            return;
        }
        \$day = \$form['day']->getData();
        if (is_null(\$day)) {
            \$form['day']->addError(new FormError('日付は必須入力です。'));

            return;
        }
        if (\$regularCycleId === RegularCycleType::REGULAR_DAILY_CYCLE) {
            if (\$day <= 0 || 100 <= \$day) {
                \$form['day']->addError(new FormError('日付の値が不正です。'));

                return;
            }
        }
        if (\$regularCycleId === RegularCycleType::REGULAR_DAILY_CYCLE) {
            /** @var Config \$Config */
            \$Config = \$this->configRepository->find(1);
            \$deadLine = \$Config->getRegularOrderDeadline();
            if (\$day <= \$deadLine) {
                \$form['day']->addError(new FormError('「定期受注注文締切日」よりも大きな値を設定する必要があります。'));

                return;
            }
        }
        if (\$regularCycleId === RegularCycleType::REGULAR_WEEKLY_CYCLE) {
            if (\$day <= 0 || 5 <= \$day) {
                \$form['day']->addError(new FormError('日付の値が不正です。'));

                return;
            }
        }
        if (\$regularCycleId === RegularCycleType::REGULAR_MONTHLY_CYCLE) {
            if (\$day <= 0 || 13 <= \$day) {
                \$form['day']->addError(new FormError('日付の値が不正です。'));

                return;
            }
        }
        if (\$regularCycleId === RegularCycleType::REGULAR_SPECIFIC_DAY_CYCLE) {
            if (\$day <= 0 || 32 <= \$day) {
                \$form['day']->addError(new FormError('日付の値が不正です。'));

                return;
            }
        }
    }

    public function validateFormDataSpecificWeek(FormEvent \$event)
    {
        \$form = \$event->getForm();
        if(is_null(\$form['regular_cycle_type']->getData())){
            return;
        }

        \$regularCycleId = \$form['regular_cycle_type']->getData()->getId();
        if (\$regularCycleId !== RegularCycleType::REGULAR_SPECIFIC_WEEK_CYCLE) {
            return;
        }
        \$week = \$form['week']->getData();

        if (is_null(\$week)) {
            \$form['week']->addError(new FormError('曜日は必須入力です。'));

            return;
        }
        if (\$week < 1 || 8 <= \$week) {
            \$form['week']->addError(new FormError('曜日の値が不正です。'));

            return;
        }
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        \$deadLine = \$Config->getRegularOrderDeadline();
        if (7 <= \$deadLine) {
            \$form['week']->addError(new FormError('定期受注注文締切日よりも定期サイクルが大きくなってしまうため、「特定の曜日」は設定できません。'));
        }
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'data_class' => RegularCycle::class,
        ]);
    }

    private function getDays(): array
    {
        \$days = ['-' => null];

        return array_merge(\$days, array_combine(range(1, 99), range(1, 99)));
    }

    private function getWeeks(): array
    {
        return [
            '-' => null,
            '日曜日' => RegularCycle::SUNDAY,
            '月曜日' => RegularCycle::MONDAY,
            '火曜日' => RegularCycle::TUESDAY,
            '水曜日' => RegularCycle::WEDNESDAY,
            '木曜日' => RegularCycle::THURSDAY,
            '金曜日' => RegularCycle::FRIDAY,
            '土曜日' => RegularCycle::SATURDAY,
        ];
    }
}
", "EccubePaymentLite42/Form/Type/Admin/RegularCycleFormType.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Form\\Type\\Admin\\RegularCycleFormType.php");
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
