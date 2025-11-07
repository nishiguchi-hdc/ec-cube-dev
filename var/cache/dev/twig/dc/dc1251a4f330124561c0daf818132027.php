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

/* EccubePaymentLite42/Controller/Admin/Regular/RegularCycleController.php */
class __TwigTemplate_1e0cf8a3157b82c850a4079bac0e5aa6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Admin/Regular/RegularCycleController.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Admin/Regular/RegularCycleController.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Controller\\Admin\\Regular;

use Eccube\\Controller\\AbstractController;
use Plugin\\EccubePaymentLite42\\Entity\\RegularCycle;
use Plugin\\EccubePaymentLite42\\Entity\\RegularCycleType;
use Plugin\\EccubePaymentLite42\\Form\\Type\\Admin\\RegularCycleFormType;
use Plugin\\EccubePaymentLite42\\Repository\\RegularCycleRepository;
use Plugin\\EccubePaymentLite42\\Repository\\RegularCycleTypeRepository;
use Plugin\\EccubePaymentLite42\\Service\\IsActiveRegularService;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;
use Symfony\\Component\\Routing\\Annotation\\Route;

class RegularCycleController extends AbstractController
{
    /**
     * @var RegularCycleRepository
     */
    private \$regularCycleRepository;
    /**
     * @var RegularCycleTypeRepository
     */
    private \$regularCycleTypeRepository;
    /**
     * @var IsActiveRegularService
     */
    private \$isActiveRegularService;

    public function __construct(
        RegularCycleRepository \$regularCycleRepository,
        RegularCycleTypeRepository \$regularCycleTypeRepository,
        IsActiveRegularService \$isActiveRegularService
    ) {
        \$this->regularCycleRepository = \$regularCycleRepository;
        \$this->regularCycleTypeRepository = \$regularCycleTypeRepository;
        \$this->isActiveRegularService = \$isActiveRegularService;
        if (!\$this->isActiveRegularService->isActive()) {
            throw new NotFoundHttpException();
        }
    }

    /**
     * @Route(
     *     \"/%eccube_admin_route%/eccube_payment_lite/regular/cycle/index\",
     *     name=\"eccube_payment_lite42_admin_regular_cycle\"
     * )
     * @Template(\"@EccubePaymentLite42/admin/Regular/Cycle/index.twig\")
     */
    public function index()
    {
        \$RegularCycles = \$this
            ->regularCycleRepository
            ->findBy([], ['sort_no' => 'DESC']);

        return [
            'RegularCycles' => \$RegularCycles,
        ];
    }

    /**
     * @Route(
     *     \"/%eccube_admin_route%/eccube_payment_lite/regular/cycle/create\",
     *     name=\"eccube_payment_lite42_admin_regular_cycle_new\"
     * )
     * @Template(\"@EccubePaymentLite42/admin/Regular/Cycle/edit.twig\")
     */
    public function create(Request \$request)
    {
        /** @var RegularCycle \$RegularCycle */
        \$RegularCycle = \$this->regularCycleRepository->findOneBy([], [
            'sort_no' => 'DESC',
        ]);
        \$sortNo = 1;
        if (\$RegularCycle) {
            \$sortNo = \$RegularCycle->getSortNo() + 1;
        }

        \$form = \$this->createForm(RegularCycleFormType::class);

        \$form->handleRequest(\$request);
        if (\$form->isSubmitted() && \$form->isValid()) {
            \$formData = \$form->getData();

            \$RegularCycle = new RegularCycle();
            /** @var RegularCycleType \$RegularCycleType */
            \$RegularCycleType = \$this->regularCycleTypeRepository->find(\$formData['regular_cycle_type']);
            \$RegularCycle
                ->setRegularCycleType(\$RegularCycleType)
                ->setDay(\$formData['day'])
                ->setWeek(\$formData['week'])
                ->setSortNo(\$sortNo);
            \$this->entityManager->persist(\$RegularCycle);
            \$this->entityManager->flush();
            \$this->addSuccess('admin.common.save_complete', 'admin');

            return \$this->redirectToRoute('eccube_payment_lite42_admin_regular_cycle');
        }

        return [
            'form' => \$form->createView(),
        ];
    }

    /**
     * @Route(
     *     \"/%eccube_admin_route%/eccube_payment_lite/regular/cycle/{id}/edit\",
     *     name=\"eccube_payment_lite42_admin_regular_cycle_edit\",
     *     requirements={\"id\" = \"\\d+\"}
     * )
     * @Template(\"@EccubePaymentLite42/admin/Regular/Cycle/edit.twig\")
     */
    public function edit(Request \$request, RegularCycle \$RegularCycle)
    {
        \$form = \$this->createForm(RegularCycleFormType::class, \$RegularCycle);
        \$form->handleRequest(\$request);
        if (\$form->isSubmitted() && \$form->isValid()) {
            \$this->entityManager->persist(\$RegularCycle);
            \$this->entityManager->flush();
            \$this->addSuccess('admin.common.save_complete', 'admin');

            return \$this->redirectToRoute('eccube_payment_lite42_admin_regular_cycle_edit', ['id' => \$RegularCycle->getId()]);
        }

        return [
            'form' => \$form->createView(),
            'regular_cycle_id' => \$RegularCycle->getId(),
        ];
    }

    /**
     * @Route(
     *     \"/%eccube_admin_route%/eccube_payment_lite/regular/cycle/{id}/delete\",
     *     requirements={\"id\" = \"\\d+\"},
     *     name=\"eccube_payment_lite42_admin_regular_cycle_delete\",
     *     methods={\"DELETE\"}
     * )
     */
    public function delete(Request \$request, RegularCycle \$RegularCycle)
    {
        \$this->isTokenValid();

        try {
            \$this->entityManager->remove(\$RegularCycle);
            \$this->entityManager->flush();
        } catch (\\Exception \$e) {
            \$message = trans('admin.common.delete_error_foreign_key', ['%name%' => \$RegularCycle->getRegularCycleType()->getName()]);
            \$this->addError(\$message, 'admin');
        }

        return \$this->redirectToRoute('eccube_payment_lite42_admin_regular_cycle');
    }

    /**
     * @Route(
     *     \"/%eccube_admin_route%/eccube_payment_lite/regular/cycle/sort_no/move\",
     *     name=\"eccube_payment_lite42_admin_regular_cycle_sort_no_move\",
     *     methods={\"POST\"}
     * )
     */
    public function moveSortNo(Request \$request)
    {
        if (!\$request->isXmlHttpRequest()) {
            throw new BadRequestHttpException();
        }

        if (\$this->isTokenValid()) {
            \$sortNos = \$request->request->all();
            foreach (\$sortNos as \$regularCycleId => \$sortNo) {
                \$RegularCycle = \$this->regularCycleRepository->find(\$regularCycleId);
                \$RegularCycle->setSortNo(\$sortNo);
                \$this->entityManager->persist(\$RegularCycle);
            }
            \$this->entityManager->flush();
        }

        return \$this->json('OK', 200);
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
        return "EccubePaymentLite42/Controller/Admin/Regular/RegularCycleController.php";
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
use Plugin\\EccubePaymentLite42\\Entity\\RegularCycle;
use Plugin\\EccubePaymentLite42\\Entity\\RegularCycleType;
use Plugin\\EccubePaymentLite42\\Form\\Type\\Admin\\RegularCycleFormType;
use Plugin\\EccubePaymentLite42\\Repository\\RegularCycleRepository;
use Plugin\\EccubePaymentLite42\\Repository\\RegularCycleTypeRepository;
use Plugin\\EccubePaymentLite42\\Service\\IsActiveRegularService;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;
use Symfony\\Component\\Routing\\Annotation\\Route;

class RegularCycleController extends AbstractController
{
    /**
     * @var RegularCycleRepository
     */
    private \$regularCycleRepository;
    /**
     * @var RegularCycleTypeRepository
     */
    private \$regularCycleTypeRepository;
    /**
     * @var IsActiveRegularService
     */
    private \$isActiveRegularService;

    public function __construct(
        RegularCycleRepository \$regularCycleRepository,
        RegularCycleTypeRepository \$regularCycleTypeRepository,
        IsActiveRegularService \$isActiveRegularService
    ) {
        \$this->regularCycleRepository = \$regularCycleRepository;
        \$this->regularCycleTypeRepository = \$regularCycleTypeRepository;
        \$this->isActiveRegularService = \$isActiveRegularService;
        if (!\$this->isActiveRegularService->isActive()) {
            throw new NotFoundHttpException();
        }
    }

    /**
     * @Route(
     *     \"/%eccube_admin_route%/eccube_payment_lite/regular/cycle/index\",
     *     name=\"eccube_payment_lite42_admin_regular_cycle\"
     * )
     * @Template(\"@EccubePaymentLite42/admin/Regular/Cycle/index.twig\")
     */
    public function index()
    {
        \$RegularCycles = \$this
            ->regularCycleRepository
            ->findBy([], ['sort_no' => 'DESC']);

        return [
            'RegularCycles' => \$RegularCycles,
        ];
    }

    /**
     * @Route(
     *     \"/%eccube_admin_route%/eccube_payment_lite/regular/cycle/create\",
     *     name=\"eccube_payment_lite42_admin_regular_cycle_new\"
     * )
     * @Template(\"@EccubePaymentLite42/admin/Regular/Cycle/edit.twig\")
     */
    public function create(Request \$request)
    {
        /** @var RegularCycle \$RegularCycle */
        \$RegularCycle = \$this->regularCycleRepository->findOneBy([], [
            'sort_no' => 'DESC',
        ]);
        \$sortNo = 1;
        if (\$RegularCycle) {
            \$sortNo = \$RegularCycle->getSortNo() + 1;
        }

        \$form = \$this->createForm(RegularCycleFormType::class);

        \$form->handleRequest(\$request);
        if (\$form->isSubmitted() && \$form->isValid()) {
            \$formData = \$form->getData();

            \$RegularCycle = new RegularCycle();
            /** @var RegularCycleType \$RegularCycleType */
            \$RegularCycleType = \$this->regularCycleTypeRepository->find(\$formData['regular_cycle_type']);
            \$RegularCycle
                ->setRegularCycleType(\$RegularCycleType)
                ->setDay(\$formData['day'])
                ->setWeek(\$formData['week'])
                ->setSortNo(\$sortNo);
            \$this->entityManager->persist(\$RegularCycle);
            \$this->entityManager->flush();
            \$this->addSuccess('admin.common.save_complete', 'admin');

            return \$this->redirectToRoute('eccube_payment_lite42_admin_regular_cycle');
        }

        return [
            'form' => \$form->createView(),
        ];
    }

    /**
     * @Route(
     *     \"/%eccube_admin_route%/eccube_payment_lite/regular/cycle/{id}/edit\",
     *     name=\"eccube_payment_lite42_admin_regular_cycle_edit\",
     *     requirements={\"id\" = \"\\d+\"}
     * )
     * @Template(\"@EccubePaymentLite42/admin/Regular/Cycle/edit.twig\")
     */
    public function edit(Request \$request, RegularCycle \$RegularCycle)
    {
        \$form = \$this->createForm(RegularCycleFormType::class, \$RegularCycle);
        \$form->handleRequest(\$request);
        if (\$form->isSubmitted() && \$form->isValid()) {
            \$this->entityManager->persist(\$RegularCycle);
            \$this->entityManager->flush();
            \$this->addSuccess('admin.common.save_complete', 'admin');

            return \$this->redirectToRoute('eccube_payment_lite42_admin_regular_cycle_edit', ['id' => \$RegularCycle->getId()]);
        }

        return [
            'form' => \$form->createView(),
            'regular_cycle_id' => \$RegularCycle->getId(),
        ];
    }

    /**
     * @Route(
     *     \"/%eccube_admin_route%/eccube_payment_lite/regular/cycle/{id}/delete\",
     *     requirements={\"id\" = \"\\d+\"},
     *     name=\"eccube_payment_lite42_admin_regular_cycle_delete\",
     *     methods={\"DELETE\"}
     * )
     */
    public function delete(Request \$request, RegularCycle \$RegularCycle)
    {
        \$this->isTokenValid();

        try {
            \$this->entityManager->remove(\$RegularCycle);
            \$this->entityManager->flush();
        } catch (\\Exception \$e) {
            \$message = trans('admin.common.delete_error_foreign_key', ['%name%' => \$RegularCycle->getRegularCycleType()->getName()]);
            \$this->addError(\$message, 'admin');
        }

        return \$this->redirectToRoute('eccube_payment_lite42_admin_regular_cycle');
    }

    /**
     * @Route(
     *     \"/%eccube_admin_route%/eccube_payment_lite/regular/cycle/sort_no/move\",
     *     name=\"eccube_payment_lite42_admin_regular_cycle_sort_no_move\",
     *     methods={\"POST\"}
     * )
     */
    public function moveSortNo(Request \$request)
    {
        if (!\$request->isXmlHttpRequest()) {
            throw new BadRequestHttpException();
        }

        if (\$this->isTokenValid()) {
            \$sortNos = \$request->request->all();
            foreach (\$sortNos as \$regularCycleId => \$sortNo) {
                \$RegularCycle = \$this->regularCycleRepository->find(\$regularCycleId);
                \$RegularCycle->setSortNo(\$sortNo);
                \$this->entityManager->persist(\$RegularCycle);
            }
            \$this->entityManager->flush();
        }

        return \$this->json('OK', 200);
    }
}
", "EccubePaymentLite42/Controller/Admin/Regular/RegularCycleController.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Controller\\Admin\\Regular\\RegularCycleController.php");
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
