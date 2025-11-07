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

/* EccubePaymentLite42/Form/Type/Front/CreditCardForTokenPaymentType.php */
class __TwigTemplate_3ad03ef774d5c0f2f23b857f1e387c74 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Form/Type/Front/CreditCardForTokenPaymentType.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Form/Type/Front/CreditCardForTokenPaymentType.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Form\\Type\\Front;

use DateTime;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Service\\GetYearsService;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\Form;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Validator\\Constraints\\Length;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;
use Symfony\\Component\\Validator\\Constraints\\Type;
use Symfony\\Component\\Validator\\Constraints as Assert;

class CreditCardForTokenPaymentType extends AbstractType
{
    /**
     * @var ConfigRepository
     */
    private \$configRepository;
    /**
     * @var GetYearsService
     */
    private \$getYearsService;

    public function __construct(ConfigRepository \$configRepository, GetYearsService \$getYearsService)
    {
        \$this->configRepository = \$configRepository;
        \$this->getYearsService = \$getYearsService;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);

        \$builder
            ->add('contract_code', HiddenType::class, [
                'data' => \$Config->getContractCode(),
                'constraints' => [
                    new NotBlank(),
                    new Length([
                        'max' => 8,
                        'min' => 8,
                    ]),
                ],
            ])
            ->add('credit_card_number', TextType::class)
            ->add('holder_name', TextType::class)
            ->add('expiration_month', ChoiceType::class, [
                'choices' => [
                    '-' => null,
                    '1月' => '1',
                    '2月' => '2',
                    '3月' => '3',
                    '4月' => '4',
                    '5月' => '5',
                    '6月' => '6',
                    '7月' => '7',
                    '8月' => '8',
                    '9月' => '9',
                    '10月' => '10',
                    '11月' => '11',
                    '12月' => '12',
                ],
            ])
            ->add('expiration_year', ChoiceType::class, [
                'choices' => \$this->getYearsService->get(10),
            ])
            ->add('security_code', TextType::class)
            ->add('token', HiddenType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => '購入処理中にエラーが発生しました。',
                    ]),
                ],
            ])
        ;
        \$builder
            ->addEventListener(
                FormEvents::POST_SUBMIT,
                [\$this, 'validateExpiration']
            );
    }

    public function validateExpiration(FormEvent \$event)
    {
        /** @var Form \$form */
        /*
        \$form = \$event->getForm();
        \$form['expiration_month'];
        \$form['expiration_year'];
        \$inputExpirationDateTime = new DateTime(\$form['expiration_year']->getData().'-'.sprintf('%02d', \$form['expiration_month']->getData()).'-01');
        \$firstDayOfThisMonth = new Datetime('first day of this month');
        \$firstDayOfThisMonth->setTime(00, 00, 00);

        if (\$firstDayOfThisMonth > \$inputExpirationDateTime) {
            \$form['expiration_year']->addError(new FormError('有効な年月を入力する必要があります。'));
            \$form['expiration_month']->addError(new FormError(''));
        }
        */
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
        return "EccubePaymentLite42/Form/Type/Front/CreditCardForTokenPaymentType.php";
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

use DateTime;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Service\\GetYearsService;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\Form;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Validator\\Constraints\\Length;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;
use Symfony\\Component\\Validator\\Constraints\\Type;
use Symfony\\Component\\Validator\\Constraints as Assert;

class CreditCardForTokenPaymentType extends AbstractType
{
    /**
     * @var ConfigRepository
     */
    private \$configRepository;
    /**
     * @var GetYearsService
     */
    private \$getYearsService;

    public function __construct(ConfigRepository \$configRepository, GetYearsService \$getYearsService)
    {
        \$this->configRepository = \$configRepository;
        \$this->getYearsService = \$getYearsService;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);

        \$builder
            ->add('contract_code', HiddenType::class, [
                'data' => \$Config->getContractCode(),
                'constraints' => [
                    new NotBlank(),
                    new Length([
                        'max' => 8,
                        'min' => 8,
                    ]),
                ],
            ])
            ->add('credit_card_number', TextType::class)
            ->add('holder_name', TextType::class)
            ->add('expiration_month', ChoiceType::class, [
                'choices' => [
                    '-' => null,
                    '1月' => '1',
                    '2月' => '2',
                    '3月' => '3',
                    '4月' => '4',
                    '5月' => '5',
                    '6月' => '6',
                    '7月' => '7',
                    '8月' => '8',
                    '9月' => '9',
                    '10月' => '10',
                    '11月' => '11',
                    '12月' => '12',
                ],
            ])
            ->add('expiration_year', ChoiceType::class, [
                'choices' => \$this->getYearsService->get(10),
            ])
            ->add('security_code', TextType::class)
            ->add('token', HiddenType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => '購入処理中にエラーが発生しました。',
                    ]),
                ],
            ])
        ;
        \$builder
            ->addEventListener(
                FormEvents::POST_SUBMIT,
                [\$this, 'validateExpiration']
            );
    }

    public function validateExpiration(FormEvent \$event)
    {
        /** @var Form \$form */
        /*
        \$form = \$event->getForm();
        \$form['expiration_month'];
        \$form['expiration_year'];
        \$inputExpirationDateTime = new DateTime(\$form['expiration_year']->getData().'-'.sprintf('%02d', \$form['expiration_month']->getData()).'-01');
        \$firstDayOfThisMonth = new Datetime('first day of this month');
        \$firstDayOfThisMonth->setTime(00, 00, 00);

        if (\$firstDayOfThisMonth > \$inputExpirationDateTime) {
            \$form['expiration_year']->addError(new FormError('有効な年月を入力する必要があります。'));
            \$form['expiration_month']->addError(new FormError(''));
        }
        */
    }
}
", "EccubePaymentLite42/Form/Type/Front/CreditCardForTokenPaymentType.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Form\\Type\\Front\\CreditCardForTokenPaymentType.php");
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
