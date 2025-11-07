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

/* EccubePaymentLite42/Controller/Front/Mypage/RegularListController.php */
class __TwigTemplate_8be2862749071e4206d05c0dc67771dd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Front/Mypage/RegularListController.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Front/Mypage/RegularListController.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Controller\\Front\\Mypage;

use Eccube\\Controller\\AbstractController;
use Eccube\\Entity\\Customer;
use Eccube\\Repository\\OrderRepository;
use Knp\\Component\\Pager\\PaginatorInterface;
use Plugin\\EccubePaymentLite42\\Repository\\RegularOrderRepository;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Routing\\Annotation\\Route;

class RegularListController extends AbstractController
{
    /**
     * @var RegularOrderRepository
     */
    private \$regularOrderRepository;
    /**
     * @var OrderRepository
     */
    private \$orderRepository;

    public function __construct(
        RegularOrderRepository \$regularOrderRepository,
        OrderRepository \$orderRepository
    ) {
        \$this->regularOrderRepository = \$regularOrderRepository;
        \$this->orderRepository = \$orderRepository;
    }

    /**
     * 定期一覧画面
     *
     * @Route(
     *     \"/mypage/eccube_payment_lite/regular/\",
     *     name=\"eccube_payment_lite42_mypage_regular_list\"
     * )
     * @Template(\"@EccubePaymentLite42/default/Mypage/regular_list.twig\")
     */
    public function index(Request \$request, PaginatorInterface \$paginator)
    {
        /** @var Customer \$Customer */
        \$Customer = \$this->getUser();

        \$qb = \$this->regularOrderRepository->getQueryBuilderByCustomer(\$Customer);

        \$pagination = \$paginator->paginate(
            \$qb,
            \$request->get('pageno', 1),
            \$this->eccubeConfig['eccube_search_pmax']
        );

        return [
            'pagination' => \$pagination,
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
        return "EccubePaymentLite42/Controller/Front/Mypage/RegularListController.php";
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
use Eccube\\Entity\\Customer;
use Eccube\\Repository\\OrderRepository;
use Knp\\Component\\Pager\\PaginatorInterface;
use Plugin\\EccubePaymentLite42\\Repository\\RegularOrderRepository;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Routing\\Annotation\\Route;

class RegularListController extends AbstractController
{
    /**
     * @var RegularOrderRepository
     */
    private \$regularOrderRepository;
    /**
     * @var OrderRepository
     */
    private \$orderRepository;

    public function __construct(
        RegularOrderRepository \$regularOrderRepository,
        OrderRepository \$orderRepository
    ) {
        \$this->regularOrderRepository = \$regularOrderRepository;
        \$this->orderRepository = \$orderRepository;
    }

    /**
     * 定期一覧画面
     *
     * @Route(
     *     \"/mypage/eccube_payment_lite/regular/\",
     *     name=\"eccube_payment_lite42_mypage_regular_list\"
     * )
     * @Template(\"@EccubePaymentLite42/default/Mypage/regular_list.twig\")
     */
    public function index(Request \$request, PaginatorInterface \$paginator)
    {
        /** @var Customer \$Customer */
        \$Customer = \$this->getUser();

        \$qb = \$this->regularOrderRepository->getQueryBuilderByCustomer(\$Customer);

        \$pagination = \$paginator->paginate(
            \$qb,
            \$request->get('pageno', 1),
            \$this->eccubeConfig['eccube_search_pmax']
        );

        return [
            'pagination' => \$pagination,
        ];
    }
}
", "EccubePaymentLite42/Controller/Front/Mypage/RegularListController.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Controller\\Front\\Mypage\\RegularListController.php");
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
