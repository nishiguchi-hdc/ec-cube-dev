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

/* EccubePaymentLite42/Form/Type/Front/RegularShippingType.php */
class __TwigTemplate_19df5f367cd8dd85fbffb96e706f9286 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Form/Type/Front/RegularShippingType.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Form/Type/Front/RegularShippingType.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Form\\Type\\Front;

use Eccube\\Form\\Type\\AddressType;
use Eccube\\Form\\Type\\KanaType;
use Eccube\\Form\\Type\\NameType;
use Eccube\\Form\\Type\\PhoneNumberType;
use Eccube\\Form\\Type\\PostalType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Validator\\Constraints as Assert;

/**
 * 定期お届け先変更用Form.
 */
class RegularShippingType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            ->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent \$event) {
                \$form = \$event->getForm();
                \$form
                    ->add('name', NameType::class, [
                        'required' => true,
                    ])
                    ->add('kana', KanaType::class, [
                        'required' => true,
                    ])
                    ->add('company_name', TextType::class, [
                        'required' => false,
                        'constraints' => [
                            new Assert\\Length([
                                'max' => 255,
                            ]),
                        ],
                    ])
                    ->add('postal_code', PostalType::class)
                    ->add('address', AddressType::class)
                    ->add('phone_number', PhoneNumberType::class, [
                        'required' => true,
                    ])
                ;
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
        return "EccubePaymentLite42/Form/Type/Front/RegularShippingType.php";
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

use Eccube\\Form\\Type\\AddressType;
use Eccube\\Form\\Type\\KanaType;
use Eccube\\Form\\Type\\NameType;
use Eccube\\Form\\Type\\PhoneNumberType;
use Eccube\\Form\\Type\\PostalType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Validator\\Constraints as Assert;

/**
 * 定期お届け先変更用Form.
 */
class RegularShippingType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            ->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent \$event) {
                \$form = \$event->getForm();
                \$form
                    ->add('name', NameType::class, [
                        'required' => true,
                    ])
                    ->add('kana', KanaType::class, [
                        'required' => true,
                    ])
                    ->add('company_name', TextType::class, [
                        'required' => false,
                        'constraints' => [
                            new Assert\\Length([
                                'max' => 255,
                            ]),
                        ],
                    ])
                    ->add('postal_code', PostalType::class)
                    ->add('address', AddressType::class)
                    ->add('phone_number', PhoneNumberType::class, [
                        'required' => true,
                    ])
                ;
            });
    }
}
", "EccubePaymentLite42/Form/Type/Front/RegularShippingType.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Form\\Type\\Front\\RegularShippingType.php");
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
