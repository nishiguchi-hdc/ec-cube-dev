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

/* EccubePaymentLite42/Service/PurchaseFlow/Processor/MemberCheckForRegularPurchaseValidator.php */
class __TwigTemplate_01ddbdf48aade3b93afbccc6b1913f18 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/PurchaseFlow/Processor/MemberCheckForRegularPurchaseValidator.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/PurchaseFlow/Processor/MemberCheckForRegularPurchaseValidator.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Service\\PurchaseFlow\\Processor;

use Eccube\\Annotation\\ShoppingFlow;
use Eccube\\Entity\\ItemHolderInterface;
use Eccube\\Entity\\Order;
use Eccube\\Request\\Context;
use Eccube\\Service\\PurchaseFlow\\ItemHolderValidator;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;

/**
 * @ShoppingFlow
 */
class MemberCheckForRegularPurchaseValidator extends ItemHolderValidator
{
    /**
     * @var Context
     */
    private \$context;
    /**
     * @var TokenStorageInterface
     */
    private \$tokenStorage;

    public function __construct(
        TokenStorageInterface \$tokenStorage,
        Context \$context
    ) {
        \$this->context = \$context;
        \$this->tokenStorage = \$tokenStorage;
    }

    protected function validate(ItemHolderInterface \$itemHolder, PurchaseContext \$context)
    {
        if (\$this->context->isAdmin()) {
            return;
        }
        // Command実行時はチェックを行わないため以下のチェックを行う
        if (!\$this->context->isFront()) {
            return;
        }
        /** @var Order \$Order */
        \$Order = \$itemHolder;
        if (\$Order->getShippings()->first()) {
            // 定期商品ではない場合は処理をスキップ
            if (\$Order->getShippings()->first()->getDelivery()->getSaleType()->getName() !== '定期商品') {
                return;
            }
            // ログイン済みの場合は処理をスキップ
            if (!is_null(\$this->getUser())) {
                return;
            }
            \$this->throwInvalidItemException('定期商品は、会員登録が必要です。お手数ですが、会員登録をお願いします。', null, false);
        }
    }

    private function getUser()
    {
        if (!\$this->tokenStorage) {
            throw new \\LogicException('The SecurityBundle is not registered in your application. Try running \"composer require symfony/security-bundle\".');
        }

        if (null === \$token = \$this->tokenStorage->getToken()) {
            return null;
        }

        if (!\\is_object(\$user = \$token->getUser())) {
            // e.g. anonymous authentication
            return null;
        }

        return \$user;
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
        return "EccubePaymentLite42/Service/PurchaseFlow/Processor/MemberCheckForRegularPurchaseValidator.php";
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

namespace Plugin\\EccubePaymentLite42\\Service\\PurchaseFlow\\Processor;

use Eccube\\Annotation\\ShoppingFlow;
use Eccube\\Entity\\ItemHolderInterface;
use Eccube\\Entity\\Order;
use Eccube\\Request\\Context;
use Eccube\\Service\\PurchaseFlow\\ItemHolderValidator;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;

/**
 * @ShoppingFlow
 */
class MemberCheckForRegularPurchaseValidator extends ItemHolderValidator
{
    /**
     * @var Context
     */
    private \$context;
    /**
     * @var TokenStorageInterface
     */
    private \$tokenStorage;

    public function __construct(
        TokenStorageInterface \$tokenStorage,
        Context \$context
    ) {
        \$this->context = \$context;
        \$this->tokenStorage = \$tokenStorage;
    }

    protected function validate(ItemHolderInterface \$itemHolder, PurchaseContext \$context)
    {
        if (\$this->context->isAdmin()) {
            return;
        }
        // Command実行時はチェックを行わないため以下のチェックを行う
        if (!\$this->context->isFront()) {
            return;
        }
        /** @var Order \$Order */
        \$Order = \$itemHolder;
        if (\$Order->getShippings()->first()) {
            // 定期商品ではない場合は処理をスキップ
            if (\$Order->getShippings()->first()->getDelivery()->getSaleType()->getName() !== '定期商品') {
                return;
            }
            // ログイン済みの場合は処理をスキップ
            if (!is_null(\$this->getUser())) {
                return;
            }
            \$this->throwInvalidItemException('定期商品は、会員登録が必要です。お手数ですが、会員登録をお願いします。', null, false);
        }
    }

    private function getUser()
    {
        if (!\$this->tokenStorage) {
            throw new \\LogicException('The SecurityBundle is not registered in your application. Try running \"composer require symfony/security-bundle\".');
        }

        if (null === \$token = \$this->tokenStorage->getToken()) {
            return null;
        }

        if (!\\is_object(\$user = \$token->getUser())) {
            // e.g. anonymous authentication
            return null;
        }

        return \$user;
    }
}
", "EccubePaymentLite42/Service/PurchaseFlow/Processor/MemberCheckForRegularPurchaseValidator.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Service\\PurchaseFlow\\Processor\\MemberCheckForRegularPurchaseValidator.php");
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
