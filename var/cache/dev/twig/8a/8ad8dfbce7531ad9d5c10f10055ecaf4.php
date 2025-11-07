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

/* EccubePaymentLite42/Form/Type/Front/RegularCycleType.php */
class __TwigTemplate_687e31270b9bc0de8f128b8a39f9ce1d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Form/Type/Front/RegularCycleType.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Form/Type/Front/RegularCycleType.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Form\\Type\\Front;

use Plugin\\EccubePaymentLite42\\Entity\\RegularCycle;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrder;
use Plugin\\EccubePaymentLite42\\Service\\GetRegularCyclesFromProductClassId;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class RegularCycleType extends AbstractType
{
    /**
     * @var GetRegularCyclesFromProductClassId
     */
    private \$getRegularCyclesFromProductClassId;

    public function __construct(GetRegularCyclesFromProductClassId \$getRegularCyclesFromProductClassId)
    {
        \$this->getRegularCyclesFromProductClassId = \$getRegularCyclesFromProductClassId;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            ->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent \$event) {
                \$form = \$event->getForm();
                /** @var RegularOrder \$RegularOrder */
                \$RegularOrder = \$event->getData();
                \$productClassId = \$RegularOrder->getRegularProductOrderItems()[0]->getProductClass()->getId();
                \$form
                    ->add('RegularCycle', ChoiceType::class, [
                        'choices' => \$this->getRegularCyclesFromProductClassId->handle(\$productClassId),
                        'choice_value' => 'id',
                        'choice_label' => function (RegularCycle \$regularCycle) {
                            return \$regularCycle;
                        },
                        'expanded' => true,
                        'multiple' => false,
                    ])
                ;
            });
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'data_class' => RegularOrder::class,
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
        return "EccubePaymentLite42/Form/Type/Front/RegularCycleType.php";
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

use Plugin\\EccubePaymentLite42\\Entity\\RegularCycle;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrder;
use Plugin\\EccubePaymentLite42\\Service\\GetRegularCyclesFromProductClassId;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class RegularCycleType extends AbstractType
{
    /**
     * @var GetRegularCyclesFromProductClassId
     */
    private \$getRegularCyclesFromProductClassId;

    public function __construct(GetRegularCyclesFromProductClassId \$getRegularCyclesFromProductClassId)
    {
        \$this->getRegularCyclesFromProductClassId = \$getRegularCyclesFromProductClassId;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            ->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent \$event) {
                \$form = \$event->getForm();
                /** @var RegularOrder \$RegularOrder */
                \$RegularOrder = \$event->getData();
                \$productClassId = \$RegularOrder->getRegularProductOrderItems()[0]->getProductClass()->getId();
                \$form
                    ->add('RegularCycle', ChoiceType::class, [
                        'choices' => \$this->getRegularCyclesFromProductClassId->handle(\$productClassId),
                        'choice_value' => 'id',
                        'choice_label' => function (RegularCycle \$regularCycle) {
                            return \$regularCycle;
                        },
                        'expanded' => true,
                        'multiple' => false,
                    ])
                ;
            });
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'data_class' => RegularOrder::class,
        ]);
    }
}
", "EccubePaymentLite42/Form/Type/Front/RegularCycleType.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Form\\Type\\Front\\RegularCycleType.php");
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
