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

/* AmazonPayV2_42_Bundle/Service/Method/AmazonPay.php */
class __TwigTemplate_f9c345821717b7309af6f5b8218ac056 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Service/Method/AmazonPay.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Service/Method/AmazonPay.php"));

        // line 1
        echo "<?php

/*
 * Amazon Pay V2 for EC-CUBE4.2
 * Copyright(c) 2023 EC-CUBE CO.,LTD. all rights reserved.
 *
 * https://www.ec-cube.co.jp/
 *
 * This program is not free software.
 * It applies to terms of service.
 *
 */

namespace Plugin\\AmazonPayV2_42_Bundle\\Service\\Method;

use Plugin\\AmazonPayV2_42_Bundle\\Service\\AmazonOrderHelper;
use Plugin\\AmazonPayV2_42_Bundle\\Service\\AmazonRequestService;
use Eccube\\Entity\\Master\\OrderStatus;
use Eccube\\Entity\\Order;
use Eccube\\Repository\\Master\\OrderStatusRepository;
use Eccube\\Repository\\ProductClassRepository;
use Eccube\\Service\\Payment\\PaymentMethodInterface;
use Eccube\\Service\\Payment\\PaymentResult;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;
use Eccube\\Service\\PurchaseFlow\\PurchaseFlow;
use Symfony\\Component\\Form\\FormInterface;

class AmazonPay implements PaymentMethodInterface
{

    public function __construct(
        OrderStatusRepository \$orderStatusRepository,
        ProductClassRepository \$productClassRepository,
        PurchaseFlow \$shoppingPurchaseFlow,
        AmazonOrderHelper \$amazonOrderHelper,
        AmazonRequestService \$amazonRequestService
    ) {
        \$this->orderStatusRepository = \$orderStatusRepository;
        \$this->productClassRepository = \$productClassRepository;
        \$this->purchaseFlow = \$shoppingPurchaseFlow;
        \$this->amazonOrderHelper = \$amazonOrderHelper;
        \$this->amazonRequestService = \$amazonRequestService;
    }

    /**
     * {@inheritdoc}
     */
    public function verify()
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function apply()
    {
        \$this->purchaseFlow->prepare(\$this->Order, new PurchaseContext());

        // 受注ステータスを決済処理中へ変更
        \$OrderStatus = \$this->orderStatusRepository->find(OrderStatus::PENDING);
        \$this->Order->setOrderStatus(\$OrderStatus);

        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function checkout()
    {
        \$response = \$this->amazonOrderHelper->completeCheckout(\$this->Order, \$this->amazonCheckoutSessionId);

        // Amazon受注情報を登録
        \$this->amazonOrderHelper->setAmazonOrder(\$this->Order, \$response->chargePermissionId, \$response->chargeId);

        \$this->purchaseFlow->commit(\$this->Order, new PurchaseContext());

        \$result = new PaymentResult();
        \$result->setSuccess(true);

        return \$result;
    }

    /**
     * {@inheritdoc}
     */
    public function setFormType(FormInterface \$form)
    { }

    /**
     * {@inheritdoc}
     */
    public function setOrder(Order \$Order)
    {
        \$this->Order = \$Order;
    }

    /**
     * {@inheritdoc}
     */
    public function setAmazonCheckoutSessionId(\$amazonCheckoutSessionId)
    {
        \$this->amazonCheckoutSessionId = \$amazonCheckoutSessionId;
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
        return "AmazonPayV2_42_Bundle/Service/Method/AmazonPay.php";
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

/*
 * Amazon Pay V2 for EC-CUBE4.2
 * Copyright(c) 2023 EC-CUBE CO.,LTD. all rights reserved.
 *
 * https://www.ec-cube.co.jp/
 *
 * This program is not free software.
 * It applies to terms of service.
 *
 */

namespace Plugin\\AmazonPayV2_42_Bundle\\Service\\Method;

use Plugin\\AmazonPayV2_42_Bundle\\Service\\AmazonOrderHelper;
use Plugin\\AmazonPayV2_42_Bundle\\Service\\AmazonRequestService;
use Eccube\\Entity\\Master\\OrderStatus;
use Eccube\\Entity\\Order;
use Eccube\\Repository\\Master\\OrderStatusRepository;
use Eccube\\Repository\\ProductClassRepository;
use Eccube\\Service\\Payment\\PaymentMethodInterface;
use Eccube\\Service\\Payment\\PaymentResult;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;
use Eccube\\Service\\PurchaseFlow\\PurchaseFlow;
use Symfony\\Component\\Form\\FormInterface;

class AmazonPay implements PaymentMethodInterface
{

    public function __construct(
        OrderStatusRepository \$orderStatusRepository,
        ProductClassRepository \$productClassRepository,
        PurchaseFlow \$shoppingPurchaseFlow,
        AmazonOrderHelper \$amazonOrderHelper,
        AmazonRequestService \$amazonRequestService
    ) {
        \$this->orderStatusRepository = \$orderStatusRepository;
        \$this->productClassRepository = \$productClassRepository;
        \$this->purchaseFlow = \$shoppingPurchaseFlow;
        \$this->amazonOrderHelper = \$amazonOrderHelper;
        \$this->amazonRequestService = \$amazonRequestService;
    }

    /**
     * {@inheritdoc}
     */
    public function verify()
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function apply()
    {
        \$this->purchaseFlow->prepare(\$this->Order, new PurchaseContext());

        // 受注ステータスを決済処理中へ変更
        \$OrderStatus = \$this->orderStatusRepository->find(OrderStatus::PENDING);
        \$this->Order->setOrderStatus(\$OrderStatus);

        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function checkout()
    {
        \$response = \$this->amazonOrderHelper->completeCheckout(\$this->Order, \$this->amazonCheckoutSessionId);

        // Amazon受注情報を登録
        \$this->amazonOrderHelper->setAmazonOrder(\$this->Order, \$response->chargePermissionId, \$response->chargeId);

        \$this->purchaseFlow->commit(\$this->Order, new PurchaseContext());

        \$result = new PaymentResult();
        \$result->setSuccess(true);

        return \$result;
    }

    /**
     * {@inheritdoc}
     */
    public function setFormType(FormInterface \$form)
    { }

    /**
     * {@inheritdoc}
     */
    public function setOrder(Order \$Order)
    {
        \$this->Order = \$Order;
    }

    /**
     * {@inheritdoc}
     */
    public function setAmazonCheckoutSessionId(\$amazonCheckoutSessionId)
    {
        \$this->amazonCheckoutSessionId = \$amazonCheckoutSessionId;
    }

}
", "AmazonPayV2_42_Bundle/Service/Method/AmazonPay.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\AmazonPayV2_42_Bundle\\Service\\Method\\AmazonPay.php");
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
