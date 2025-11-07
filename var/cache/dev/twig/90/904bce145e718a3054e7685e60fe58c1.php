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

/* EccubePaymentLite42/Controller/Front/Mypage/RegularCompleteController.php */
class __TwigTemplate_d333f2cc7476880ba2f197ab2b6f92ff extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Front/Mypage/RegularCompleteController.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Front/Mypage/RegularCompleteController.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Controller\\Front\\Mypage;

use Eccube\\Controller\\AbstractController;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrder;
use Plugin\\EccubePaymentLite42\\Service\\IsActiveRegularService;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\Routing\\Annotation\\Route;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;

class RegularCompleteController extends AbstractController
{
    /**
     * @var IsActiveRegularService
     */
    private \$isActiveRegularService;

    public function __construct(
        IsActiveRegularService \$isActiveRegularService
    ) {
        \$this->isActiveRegularService = \$isActiveRegularService;
    }

    /**
     * /**
     * 完了画面を表示する。
     *
     * @Route(
     *     \"/mypage/eccube_payment_lite/regular/{id}/complete\",
     *     name=\"eccube_payment_lite42_mypage_regular_complete\",
     *     requirements={\"id\" = \"\\d+\"}
     * )
     * @Template(\"@EccubePaymentLite42/default/Mypage/regular_complete.twig\")
     *
     * @return array|RedirectResponse
     */
    public function complete(RegularOrder \$RegularOrder)
    {
        if (!\$this->isActiveRegularService->isActive()) {
            return \$this->redirectToRoute('mypage');
        }
        if (\$RegularOrder->getCustomer()->getId() !== \$this->getUser()->getId()) {
            throw new NotFoundHttpException();
        }

        return [
            'RegularOrder' => \$RegularOrder,
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
        return "EccubePaymentLite42/Controller/Front/Mypage/RegularCompleteController.php";
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

namespace Plugin\\EccubePaymentLite42\\Controller\\Front\\Mypage;

use Eccube\\Controller\\AbstractController;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrder;
use Plugin\\EccubePaymentLite42\\Service\\IsActiveRegularService;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\Routing\\Annotation\\Route;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;

class RegularCompleteController extends AbstractController
{
    /**
     * @var IsActiveRegularService
     */
    private \$isActiveRegularService;

    public function __construct(
        IsActiveRegularService \$isActiveRegularService
    ) {
        \$this->isActiveRegularService = \$isActiveRegularService;
    }

    /**
     * /**
     * 完了画面を表示する。
     *
     * @Route(
     *     \"/mypage/eccube_payment_lite/regular/{id}/complete\",
     *     name=\"eccube_payment_lite42_mypage_regular_complete\",
     *     requirements={\"id\" = \"\\d+\"}
     * )
     * @Template(\"@EccubePaymentLite42/default/Mypage/regular_complete.twig\")
     *
     * @return array|RedirectResponse
     */
    public function complete(RegularOrder \$RegularOrder)
    {
        if (!\$this->isActiveRegularService->isActive()) {
            return \$this->redirectToRoute('mypage');
        }
        if (\$RegularOrder->getCustomer()->getId() !== \$this->getUser()->getId()) {
            throw new NotFoundHttpException();
        }

        return [
            'RegularOrder' => \$RegularOrder,
        ];
    }
}
", "EccubePaymentLite42/Controller/Front/Mypage/RegularCompleteController.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Controller\\Front\\Mypage\\RegularCompleteController.php");
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
