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

/* B2BConnector/Form/Extension/AdminProductClassTypeExtension.php */
class __TwigTemplate_48c444331ee7662376eb6843aa82e2b0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Form/Extension/AdminProductClassTypeExtension.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "B2BConnector/Form/Extension/AdminProductClassTypeExtension.php"));

        // line 1
        echo "<?php
namespace Plugin\\B2BConnector\\Form\\Extension;

use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Entity\\ProductClass;
use Eccube\\Form\\Type\\Admin\\ProductClassType;
use Plugin\\B2BConnector\\Entity\\ProductClassExt;
use Plugin\\B2BConnector\\Form\\Type\\Admin\\ProductClassExtType;
use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

class AdminProductClassTypeExtension extends AbstractTypeExtension
{
    public function __construct(private EntityManagerInterface \$em) {}

    public static function getExtendedTypes(): iterable { return [ProductClassType::class]; }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        // GET 相当：3層目（または単数なら 2→ProductClass→ext）に埋め込み
        \$builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent \$e) {
            \$PC = \$e->getData(); if (!\$PC instanceof ProductClass) return;

            \$ext = \$this->em->getRepository(ProductClassExt::class)
                ->findOneBy(['ProductClass' => \$PC]) ?? (new ProductClassExt())->setProductClass(\$PC);

            \$e->getForm()->add('product_class_ext', ProductClassExtType::class, [
                'data'   => \$ext,
                'mapped' => false,
            ]);
        });

        // POST 相当：保存（ここでは persist のみ／flush は親(ProductType)で）
        \$builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent \$e) {
            \$form = \$e->getForm();
            \$PC = \$e->getData(); if (!\$PC instanceof ProductClass) return;

            if (\$form->has('product_class_ext')) {
                \$pcExt = \$form->get('product_class_ext')->getData();
                if (\$pcExt instanceof ProductClassExt) {
                    \$pcExt->setProductClass(\$PC);
                    \$this->em->persist(\$pcExt);
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
        return "B2BConnector/Form/Extension/AdminProductClassTypeExtension.php";
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

use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Entity\\ProductClass;
use Eccube\\Form\\Type\\Admin\\ProductClassType;
use Plugin\\B2BConnector\\Entity\\ProductClassExt;
use Plugin\\B2BConnector\\Form\\Type\\Admin\\ProductClassExtType;
use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

class AdminProductClassTypeExtension extends AbstractTypeExtension
{
    public function __construct(private EntityManagerInterface \$em) {}

    public static function getExtendedTypes(): iterable { return [ProductClassType::class]; }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        // GET 相当：3層目（または単数なら 2→ProductClass→ext）に埋め込み
        \$builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent \$e) {
            \$PC = \$e->getData(); if (!\$PC instanceof ProductClass) return;

            \$ext = \$this->em->getRepository(ProductClassExt::class)
                ->findOneBy(['ProductClass' => \$PC]) ?? (new ProductClassExt())->setProductClass(\$PC);

            \$e->getForm()->add('product_class_ext', ProductClassExtType::class, [
                'data'   => \$ext,
                'mapped' => false,
            ]);
        });

        // POST 相当：保存（ここでは persist のみ／flush は親(ProductType)で）
        \$builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent \$e) {
            \$form = \$e->getForm();
            \$PC = \$e->getData(); if (!\$PC instanceof ProductClass) return;

            if (\$form->has('product_class_ext')) {
                \$pcExt = \$form->get('product_class_ext')->getData();
                if (\$pcExt instanceof ProductClassExt) {
                    \$pcExt->setProductClass(\$PC);
                    \$this->em->persist(\$pcExt);
                }
            }
        });
    }
}
", "B2BConnector/Form/Extension/AdminProductClassTypeExtension.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\B2BConnector\\Form\\Extension\\AdminProductClassTypeExtension.php");
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
