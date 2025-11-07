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

/* B2BConnector/Form/Type/Admin/CustomerExtType.php */
class __TwigTemplate_e4e5df074e280415e5f3a95441316f0a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Form/Type/Admin/CustomerExtType.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Form/Type/Admin/CustomerExtType.php"));

        // line 1
        echo "<?php

namespace Plugin\\B2BConnector\\Form\\Type\\Admin;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\Extension\\Core\\Type as F;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Plugin\\B2BConnector\\Entity\\CustomerExt;

class CustomerExtType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            ->add('company_kana', F\\TextType::class, ['required' => false, 'label' => '会社名カナ'])
            ->add('rep_name01', F\\TextType::class, ['required' => false, 'label' => '代表者_姓'])
            ->add('rep_name02', F\\TextType::class, ['required' => false, 'label' => '代表者_名'])
            ->add('rep_kana01', F\\TextType::class, ['required' => false, 'label' => '代表者カナ_姓'])
            ->add('rep_kana02', F\\TextType::class, ['required' => false, 'label' => '代表者カナ_名'])
            ->add('depart_name', F\\TextType::class, ['required' => false, 'label' => '部署名'])
            ->add('pic_name01', F\\TextType::class, ['required' => false, 'label' => '担当者_姓'])
            ->add('pic_name02', F\\TextType::class, ['required' => false, 'label' => '担当者_名'])
            ->add('pic_kana01', F\\TextType::class, ['required' => false, 'label' => '担当者カナ_姓'])
            ->add('pic_kana02', F\\TextType::class, ['required' => false, 'label' => '担当者カナ_名'])
            ->add('mb_phone_number', F\\TextType::class, ['required' => false, 'label' => '携帯番号'])
            ->add('fax_number', F\\TextType::class, ['required' => false, 'label' => 'FAX番号'])
            ->add('established_ym', F\\TextType::class, ['required' => false, 'label' => '設立年月', 'attr' => ['placeholder' => 'YYYY-MM']])
            ->add('annual_sales', F\\IntegerType::class, ['required' => false, 'label' => '年商'])
            ->add('business_type', F\\TextType::class, ['required' => false, 'label' => '業態 / 業種'])
            ->add('url', F\\UrlType::class, ['required' => false, 'label' => 'ホームページURL'])
            ->add('real_store', F\\CheckboxType::class, ['required' => false, 'label' => '実店舗'])
            ->add('trade_rate', F\\NumberType::class, ['required' => false, 'label' => '掛け率', 'scale' => 2]);
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults(['data_class' => CustomerExt::class]);
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
        return "B2BConnector/Form/Type/Admin/CustomerExtType.php";
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

namespace Plugin\\B2BConnector\\Form\\Type\\Admin;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\Extension\\Core\\Type as F;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Plugin\\B2BConnector\\Entity\\CustomerExt;

class CustomerExtType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            ->add('company_kana', F\\TextType::class, ['required' => false, 'label' => '会社名カナ'])
            ->add('rep_name01', F\\TextType::class, ['required' => false, 'label' => '代表者_姓'])
            ->add('rep_name02', F\\TextType::class, ['required' => false, 'label' => '代表者_名'])
            ->add('rep_kana01', F\\TextType::class, ['required' => false, 'label' => '代表者カナ_姓'])
            ->add('rep_kana02', F\\TextType::class, ['required' => false, 'label' => '代表者カナ_名'])
            ->add('depart_name', F\\TextType::class, ['required' => false, 'label' => '部署名'])
            ->add('pic_name01', F\\TextType::class, ['required' => false, 'label' => '担当者_姓'])
            ->add('pic_name02', F\\TextType::class, ['required' => false, 'label' => '担当者_名'])
            ->add('pic_kana01', F\\TextType::class, ['required' => false, 'label' => '担当者カナ_姓'])
            ->add('pic_kana02', F\\TextType::class, ['required' => false, 'label' => '担当者カナ_名'])
            ->add('mb_phone_number', F\\TextType::class, ['required' => false, 'label' => '携帯番号'])
            ->add('fax_number', F\\TextType::class, ['required' => false, 'label' => 'FAX番号'])
            ->add('established_ym', F\\TextType::class, ['required' => false, 'label' => '設立年月', 'attr' => ['placeholder' => 'YYYY-MM']])
            ->add('annual_sales', F\\IntegerType::class, ['required' => false, 'label' => '年商'])
            ->add('business_type', F\\TextType::class, ['required' => false, 'label' => '業態 / 業種'])
            ->add('url', F\\UrlType::class, ['required' => false, 'label' => 'ホームページURL'])
            ->add('real_store', F\\CheckboxType::class, ['required' => false, 'label' => '実店舗'])
            ->add('trade_rate', F\\NumberType::class, ['required' => false, 'label' => '掛け率', 'scale' => 2]);
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults(['data_class' => CustomerExt::class]);
    }
}
", "B2BConnector/Form/Type/Admin/CustomerExtType.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\B2BConnector\\Form\\Type\\Admin\\CustomerExtType.php");
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
