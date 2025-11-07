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

/* EccubePaymentLite42/EventListener/EventSubscriber/Admin/Product/AddFreeAreaDescriptionFormToProductType.php */
class __TwigTemplate_e6426190af621c9bb42e9a14b41e46e7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/EventListener/EventSubscriber/Admin/Product/AddFreeAreaDescriptionFormToProductType.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/EventListener/EventSubscriber/Admin/Product/AddFreeAreaDescriptionFormToProductType.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\EventListener\\EventSubscriber\\Admin\\Product;

use Eccube\\Entity\\Master\\SaleType;
use Eccube\\Entity\\Product;
use Eccube\\Event\\TemplateEvent;
use Eccube\\Repository\\Master\\SaleTypeRepository;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class AddFreeAreaDescriptionFormToProductType implements EventSubscriberInterface
{
    /**
     * @var SaleTypeRepository
     */
    private \$saleTypeRepository;

    public function __construct(
        SaleTypeRepository \$saleTypeRepository
    ) {
        \$this->saleTypeRepository = \$saleTypeRepository;
    }

    public static function getSubscribedEvents()
    {
        return [
            '@admin/Product/product.twig' => 'product',
        ];
    }

    public function product(TemplateEvent \$event)
    {
        /** @var Product \$Product */
        \$Product = \$event->getParameter('Product');
        \$sale_type_flg = false;
        if (\$Product->getProductClasses()->count() > 1) {
            foreach (\$Product->getProductClasses() as \$productClass){
                if(\$productClass->getSaleType()->getName() === '定期商品'){
                    \$sale_type_flg = true;
                }
            }
        }

        /** @var SaleType \$SaleType */
        \$SaleType = \$this->saleTypeRepository->findOneBy([
            'name' => '定期商品',
        ]);

        if (is_null(\$SaleType)) {
            return;
        }

        \$event->setParameter('regularSaleTypeId', \$SaleType->getId());
        \$event->setParameter('sale_type_flg', \$sale_type_flg);
        \$event->addSnippet('@EccubePaymentLite42/admin/Product/add_free_area_description_form.twig');
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
        return "EccubePaymentLite42/EventListener/EventSubscriber/Admin/Product/AddFreeAreaDescriptionFormToProductType.php";
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

namespace Plugin\\EccubePaymentLite42\\EventListener\\EventSubscriber\\Admin\\Product;

use Eccube\\Entity\\Master\\SaleType;
use Eccube\\Entity\\Product;
use Eccube\\Event\\TemplateEvent;
use Eccube\\Repository\\Master\\SaleTypeRepository;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class AddFreeAreaDescriptionFormToProductType implements EventSubscriberInterface
{
    /**
     * @var SaleTypeRepository
     */
    private \$saleTypeRepository;

    public function __construct(
        SaleTypeRepository \$saleTypeRepository
    ) {
        \$this->saleTypeRepository = \$saleTypeRepository;
    }

    public static function getSubscribedEvents()
    {
        return [
            '@admin/Product/product.twig' => 'product',
        ];
    }

    public function product(TemplateEvent \$event)
    {
        /** @var Product \$Product */
        \$Product = \$event->getParameter('Product');
        \$sale_type_flg = false;
        if (\$Product->getProductClasses()->count() > 1) {
            foreach (\$Product->getProductClasses() as \$productClass){
                if(\$productClass->getSaleType()->getName() === '定期商品'){
                    \$sale_type_flg = true;
                }
            }
        }

        /** @var SaleType \$SaleType */
        \$SaleType = \$this->saleTypeRepository->findOneBy([
            'name' => '定期商品',
        ]);

        if (is_null(\$SaleType)) {
            return;
        }

        \$event->setParameter('regularSaleTypeId', \$SaleType->getId());
        \$event->setParameter('sale_type_flg', \$sale_type_flg);
        \$event->addSnippet('@EccubePaymentLite42/admin/Product/add_free_area_description_form.twig');
    }
}
", "EccubePaymentLite42/EventListener/EventSubscriber/Admin/Product/AddFreeAreaDescriptionFormToProductType.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\EventListener\\EventSubscriber\\Admin\\Product\\AddFreeAreaDescriptionFormToProductType.php");
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
