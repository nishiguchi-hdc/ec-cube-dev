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

/* EccubePaymentLite42/Controller/Admin/Regular/OrderController.php */
class __TwigTemplate_0a9bc1192226e08c1ae186ab42092566 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Admin/Regular/OrderController.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Admin/Regular/OrderController.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Controller\\Admin\\Regular;

use Eccube\\Controller\\AbstractController;
use Eccube\\Repository\\Master\\PageMaxRepository;
use Eccube\\Util\\FormUtil;
use Knp\\Component\\Pager\\PaginatorInterface;
use Plugin\\EccubePaymentLite42\\Form\\Type\\Admin\\SearchRegularOrderType;
use Plugin\\EccubePaymentLite42\\Repository\\RegularOrderRepository;
use Plugin\\EccubePaymentLite42\\Service\\IsActiveRegularService;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;
use Symfony\\Component\\Routing\\Annotation\\Route;

class OrderController extends AbstractController
{
    /**
     * @var PageMaxRepository
     */
    private \$pageMaxRepository;
    /**
     * @var RegularOrderRepository
     */
    private \$regularOrderRepository;
    /**
     * @var IsActiveRegularService
     */
    private \$isActiveRegularService;

    public function __construct(
        PageMaxRepository \$pageMaxRepository,
        RegularOrderRepository \$regularOrderRepository,
        IsActiveRegularService \$isActiveRegularService
    ) {
        \$this->pageMaxRepository = \$pageMaxRepository;
        \$this->regularOrderRepository = \$regularOrderRepository;
        \$this->isActiveRegularService = \$isActiveRegularService;
    }

    /**
     * @Route(
     *     \"/%eccube_admin_route%/eccube_payment_lite/regular/index\",
     *     name=\"eccube_payment_lite42_admin_regular_index\", methods={\"GET\", \"POST\"}
     * )
     * @Route(
     *     \"/%eccube_admin_route%/eccube_payment_lite/regular/index/page/{page_no}\", requirements={\"page_no\" = \"\\d+\"},
     *     name=\"eccube_payment_lite42_admin_regular_index_page\" , methods={\"GET\", \"POST\"}
     * )
     * @Template(\"@EccubePaymentLite42/admin/Regular/Order/index.twig\")
     */
    public function index(Request \$request, PaginatorInterface \$paginator, \$page_no = null)
    {
        if (!\$this->isActiveRegularService->isActive()) {
            throw new NotFoundHttpException();
        }
        \$searchForm = \$this->createForm(SearchRegularOrderType::class);
        \$page_count = \$this->session->get('eccube.admin.regular.order.search.page_count',
            \$this->eccubeConfig->get('eccube_default_page_count'));

        \$page_count_param = (int) \$request->get('page_count');
        \$pageMaxis = \$this->pageMaxRepository->findAll();

        if (\$page_count_param) {
            foreach (\$pageMaxis as \$pageMax) {
                if (\$page_count_param == \$pageMax->getName()) {
                    \$page_count = \$pageMax->getName();
                    \$this->session->set('eccube.admin.regular.order.search.page_count', \$page_count);
                    break;
                }
            }
        }
        if ('POST' === \$request->getMethod()) {
            \$searchForm->handleRequest(\$request);

            if (\$searchForm->isValid()) {
                \$page_no = 1;
                \$searchData = \$searchForm->getData();

                // 検索条件, ページ番号をセッションに保持.
                \$this->session->set('eccube.admin.regular.order.search', FormUtil::getViewData(\$searchForm));
                \$this->session->set('eccube.admin.regular.order.search.page_no', \$page_no);
            } else {
                // 検索エラーの際は, 詳細検索枠を開いてエラー表示する.
                return [
                    'searchForm' => \$searchForm->createView(),
                    'pagination' => [],
                    'pageMaxis' => \$pageMaxis,
                    'page_no' => \$page_no,
                    'page_count' => \$page_count,
                    'has_errors' => true,
                ];
            }
        } else {
            if (null !== \$page_no || \$request->get('resume')) {
                if (\$page_no) {
                    \$this->session->set('eccube.admin.regular.order.search.page_no', (int) \$page_no);
                } else {
                    \$page_no = \$this->session->get('eccube.admin.regular.order.search.page_no', 1);
                }
                \$viewData = \$this->session->get('eccube.admin.regular.order.search', []);
                \$searchData = FormUtil::submitAndGetData(\$searchForm, \$viewData);
            } else {
                \$page_no = 1;
                \$viewData = [];

                if (\$statusId = (int) \$request->get('order_status_id')) {
                    \$viewData = ['status' => \$statusId];
                }

                \$searchData = FormUtil::submitAndGetData(\$searchForm, \$viewData);

                // セッション中の検索条件, ページ番号を初期化.
                \$this->session->set('eccube.admin.regular.order.search', \$viewData);
                \$this->session->set('eccube.admin.regular.order.search.page_no', \$page_no);
            }
        }

        \$qb = \$this->regularOrderRepository->getQueryBuilderBySearchDataForAdmin(\$searchData);

        \$pagination = \$paginator->paginate(
            \$qb,
            \$page_no,
            \$page_count
        );

        return [
            'searchForm' => \$searchForm->createView(),
            'pagination' => \$pagination,
            'pageMaxis' => \$pageMaxis,
            'page_no' => \$page_no,
            'page_count' => \$page_count,
            'has_errors' => false,
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
        return "EccubePaymentLite42/Controller/Admin/Regular/OrderController.php";
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

namespace Plugin\\EccubePaymentLite42\\Controller\\Admin\\Regular;

use Eccube\\Controller\\AbstractController;
use Eccube\\Repository\\Master\\PageMaxRepository;
use Eccube\\Util\\FormUtil;
use Knp\\Component\\Pager\\PaginatorInterface;
use Plugin\\EccubePaymentLite42\\Form\\Type\\Admin\\SearchRegularOrderType;
use Plugin\\EccubePaymentLite42\\Repository\\RegularOrderRepository;
use Plugin\\EccubePaymentLite42\\Service\\IsActiveRegularService;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;
use Symfony\\Component\\Routing\\Annotation\\Route;

class OrderController extends AbstractController
{
    /**
     * @var PageMaxRepository
     */
    private \$pageMaxRepository;
    /**
     * @var RegularOrderRepository
     */
    private \$regularOrderRepository;
    /**
     * @var IsActiveRegularService
     */
    private \$isActiveRegularService;

    public function __construct(
        PageMaxRepository \$pageMaxRepository,
        RegularOrderRepository \$regularOrderRepository,
        IsActiveRegularService \$isActiveRegularService
    ) {
        \$this->pageMaxRepository = \$pageMaxRepository;
        \$this->regularOrderRepository = \$regularOrderRepository;
        \$this->isActiveRegularService = \$isActiveRegularService;
    }

    /**
     * @Route(
     *     \"/%eccube_admin_route%/eccube_payment_lite/regular/index\",
     *     name=\"eccube_payment_lite42_admin_regular_index\", methods={\"GET\", \"POST\"}
     * )
     * @Route(
     *     \"/%eccube_admin_route%/eccube_payment_lite/regular/index/page/{page_no}\", requirements={\"page_no\" = \"\\d+\"},
     *     name=\"eccube_payment_lite42_admin_regular_index_page\" , methods={\"GET\", \"POST\"}
     * )
     * @Template(\"@EccubePaymentLite42/admin/Regular/Order/index.twig\")
     */
    public function index(Request \$request, PaginatorInterface \$paginator, \$page_no = null)
    {
        if (!\$this->isActiveRegularService->isActive()) {
            throw new NotFoundHttpException();
        }
        \$searchForm = \$this->createForm(SearchRegularOrderType::class);
        \$page_count = \$this->session->get('eccube.admin.regular.order.search.page_count',
            \$this->eccubeConfig->get('eccube_default_page_count'));

        \$page_count_param = (int) \$request->get('page_count');
        \$pageMaxis = \$this->pageMaxRepository->findAll();

        if (\$page_count_param) {
            foreach (\$pageMaxis as \$pageMax) {
                if (\$page_count_param == \$pageMax->getName()) {
                    \$page_count = \$pageMax->getName();
                    \$this->session->set('eccube.admin.regular.order.search.page_count', \$page_count);
                    break;
                }
            }
        }
        if ('POST' === \$request->getMethod()) {
            \$searchForm->handleRequest(\$request);

            if (\$searchForm->isValid()) {
                \$page_no = 1;
                \$searchData = \$searchForm->getData();

                // 検索条件, ページ番号をセッションに保持.
                \$this->session->set('eccube.admin.regular.order.search', FormUtil::getViewData(\$searchForm));
                \$this->session->set('eccube.admin.regular.order.search.page_no', \$page_no);
            } else {
                // 検索エラーの際は, 詳細検索枠を開いてエラー表示する.
                return [
                    'searchForm' => \$searchForm->createView(),
                    'pagination' => [],
                    'pageMaxis' => \$pageMaxis,
                    'page_no' => \$page_no,
                    'page_count' => \$page_count,
                    'has_errors' => true,
                ];
            }
        } else {
            if (null !== \$page_no || \$request->get('resume')) {
                if (\$page_no) {
                    \$this->session->set('eccube.admin.regular.order.search.page_no', (int) \$page_no);
                } else {
                    \$page_no = \$this->session->get('eccube.admin.regular.order.search.page_no', 1);
                }
                \$viewData = \$this->session->get('eccube.admin.regular.order.search', []);
                \$searchData = FormUtil::submitAndGetData(\$searchForm, \$viewData);
            } else {
                \$page_no = 1;
                \$viewData = [];

                if (\$statusId = (int) \$request->get('order_status_id')) {
                    \$viewData = ['status' => \$statusId];
                }

                \$searchData = FormUtil::submitAndGetData(\$searchForm, \$viewData);

                // セッション中の検索条件, ページ番号を初期化.
                \$this->session->set('eccube.admin.regular.order.search', \$viewData);
                \$this->session->set('eccube.admin.regular.order.search.page_no', \$page_no);
            }
        }

        \$qb = \$this->regularOrderRepository->getQueryBuilderBySearchDataForAdmin(\$searchData);

        \$pagination = \$paginator->paginate(
            \$qb,
            \$page_no,
            \$page_count
        );

        return [
            'searchForm' => \$searchForm->createView(),
            'pagination' => \$pagination,
            'pageMaxis' => \$pageMaxis,
            'page_no' => \$page_no,
            'page_count' => \$page_count,
            'has_errors' => false,
        ];
    }
}
", "EccubePaymentLite42/Controller/Admin/Regular/OrderController.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Controller\\Admin\\Regular\\OrderController.php");
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
