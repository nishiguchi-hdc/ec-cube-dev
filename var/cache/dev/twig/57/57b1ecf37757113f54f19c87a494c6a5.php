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

/* EccubePaymentLite42/Controller/Admin/Regular/RegularDiscountSettingController.php */
class __TwigTemplate_b5dd19a0cab9a510ea19ff45603e3a4a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Admin/Regular/RegularDiscountSettingController.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Admin/Regular/RegularDiscountSettingController.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Controller\\Admin\\Regular;

use Eccube\\Controller\\AbstractController;
use Eccube\\Entity\\ProductClass;
use Eccube\\Repository\\ProductClassRepository;
use Plugin\\EccubePaymentLite42\\Entity\\RegularDiscount;
use Plugin\\EccubePaymentLite42\\Form\\Type\\Admin\\RegularDiscountMatrixType;
use Plugin\\EccubePaymentLite42\\Repository\\RegularDiscountRepository;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Routing\\Annotation\\Route;

class RegularDiscountSettingController extends AbstractController
{
    /**
     * @var RegularDiscountRepository
     */
    private \$regularDiscountRepository;

    /**
     * @var ProductClassRepository
     */
    private \$productClassRepository;

    /**
     * RegularDiscountSettingController constructor.
     */
    public function __construct(
        RegularDiscountRepository \$regularDiscountRepository,
        ProductClassRepository \$productClassRepository
    ) {
        \$this->regularDiscountRepository = \$regularDiscountRepository;
        \$this->productClassRepository = \$productClassRepository;
    }

    /**
     * 定期継続回数に応じた割引を設定する機能を追加
     *
     * @Route(
     *     \"/%eccube_admin_route%/eccube_payment_lite/regular/discount_setting\",
     *     name=\"eccube_payment_lite42_admin_regular_discount_setting\"
     * )
     * @Template(\"@EccubePaymentLite42/admin/Regular/Setting/discount.twig\")
     */
    public function index(Request \$request)
    {
        \$discountIdMax = \$this->getDiscountIdMax();
        \$data = \$this->getRegularDiscountData();
        if (empty(\$data)) {
            \$data = \$this->initialData();
        }

        \$form = \$this->createForm(RegularDiscountMatrixType::class, [
            'regular_discounts' => \$data,
        ]);
        \$form->handleRequest(\$request);

        if (\$form->isSubmitted() && \$form->isValid()) {
            try {
                \$data = \$form['regular_discounts']->getData();
                if (!empty(\$data)) {
                    \$ids = [];
                    foreach (\$data as \$group) {
                        \$items = !empty(\$group['regular_discount_items']) ? \$group['regular_discount_items'] : [];
                        /** @var RegularDiscount \$RegularDiscount */
                        foreach (\$items as \$key => \$RegularDiscount) {
                            \$discountId = \$RegularDiscount->getId();
                            // 更新の場合にIDを記録
                            if (!empty(\$discountId)) {
                                \$ids[] = \$discountId;
                            }
                            // 初回の場合はregular_countに1を設定する
                            if (is_null(\$RegularDiscount->getRegularCount()) && \$key == 0) {
                                \$RegularDiscount->setRegularCount(1);
                            }

                            \$this->entityManager->persist(\$RegularDiscount);
                        }
                    }

                    // filter & remove
                    \$RegularDiscounts = \$this->regularDiscountRepository->findAll();
                    foreach (\$RegularDiscounts as \$RegularDiscount) {
                        \$discountId = \$RegularDiscount->getId();
                        // 更新の場合かつ、フォームより送信されたdiscount_idが含まれない場合は削除する
                        if (!empty(\$discountId) && !in_array(\$discountId, \$ids)) {
                            \$this->entityManager->remove(\$RegularDiscount);
                        }
                    }

                    \$this->entityManager->flush();
                    \$this->addSuccess('admin.common.save_complete', 'admin');

                    return \$this->redirectToRoute('eccube_payment_lite42_admin_regular_discount_setting');
                }
            } catch (\\Exception \$e) {
                log_info('定期回数割引削除エラー', [\$e]);
                \$this->addError('関連するデータがあるため定期回数割引を削除できませんでした', 'admin');

                return \$this->redirectToRoute('eccube_payment_lite42_admin_regular_discount_setting');
            }
        }

        return [
            'form' => \$form->createView(),
            'discountIdMax' => \$discountIdMax,
        ];
    }

    private function getRegularDiscountData(): array
    {
        \$data = [];
        \$groups = [];

        /** @var RegularDiscount[] \$RegularDiscounts */
        \$RegularDiscounts = \$this->regularDiscountRepository->findAll();
        foreach (\$RegularDiscounts as \$RegularDiscount) {
            \$discountId = \$RegularDiscount->getDiscountId();
            \$groups[\$discountId] = !empty(\$groups[\$discountId]) ? array_merge(\$groups[\$discountId], [\$RegularDiscount]) : [\$RegularDiscount];
        }

        foreach (\$groups as \$group) {
            \$data[] = ['regular_discount_items' => \$group];
        }

        return \$data;
    }

    private function initialData()
    {
        \$groupNumber = 3;
        \$itemNumber = 3;
        \$data = [];

        for (\$i = 1; \$i <= \$groupNumber; \$i++) {
            \$group = [];
            for (\$j = 1; \$j <= \$itemNumber; \$j++) {
                \$RegularDiscount = new RegularDiscount();
                \$RegularDiscount
                    ->setDiscountId(\$i)
                    ->setItemId(\$j);

                \$group[] = \$RegularDiscount;
            }

            \$data[] = ['regular_discount_items' => \$group];
        }

        return \$data;
    }

    private function getDiscountIdMax()
    {
        /** @var RegularDiscount \$RegularDiscount */
        \$RegularDiscount = \$this->regularDiscountRepository->findOneBy([], [
            'discount_id' => 'DESC',
        ]);
        /** @var ProductClass \$ProductClass */
        \$ProductClass = \$this->productClassRepository->findOneBy([], [
            'RegularDiscount' => 'DESC',
        ]);

        \$discountIdMax = \$RegularDiscount ? \$RegularDiscount->getDiscountId() : 0;
        if (!empty(\$ProductClass->getRegularDiscount()) && \$ProductClass->getRegularDiscount()->getDiscountId() > \$discountIdMax) {
            \$discountIdMax = \$ProductClass->getRegularDiscount()->getDiscountId();
        }

        return \$discountIdMax;
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
        return "EccubePaymentLite42/Controller/Admin/Regular/RegularDiscountSettingController.php";
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
use Eccube\\Entity\\ProductClass;
use Eccube\\Repository\\ProductClassRepository;
use Plugin\\EccubePaymentLite42\\Entity\\RegularDiscount;
use Plugin\\EccubePaymentLite42\\Form\\Type\\Admin\\RegularDiscountMatrixType;
use Plugin\\EccubePaymentLite42\\Repository\\RegularDiscountRepository;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Routing\\Annotation\\Route;

class RegularDiscountSettingController extends AbstractController
{
    /**
     * @var RegularDiscountRepository
     */
    private \$regularDiscountRepository;

    /**
     * @var ProductClassRepository
     */
    private \$productClassRepository;

    /**
     * RegularDiscountSettingController constructor.
     */
    public function __construct(
        RegularDiscountRepository \$regularDiscountRepository,
        ProductClassRepository \$productClassRepository
    ) {
        \$this->regularDiscountRepository = \$regularDiscountRepository;
        \$this->productClassRepository = \$productClassRepository;
    }

    /**
     * 定期継続回数に応じた割引を設定する機能を追加
     *
     * @Route(
     *     \"/%eccube_admin_route%/eccube_payment_lite/regular/discount_setting\",
     *     name=\"eccube_payment_lite42_admin_regular_discount_setting\"
     * )
     * @Template(\"@EccubePaymentLite42/admin/Regular/Setting/discount.twig\")
     */
    public function index(Request \$request)
    {
        \$discountIdMax = \$this->getDiscountIdMax();
        \$data = \$this->getRegularDiscountData();
        if (empty(\$data)) {
            \$data = \$this->initialData();
        }

        \$form = \$this->createForm(RegularDiscountMatrixType::class, [
            'regular_discounts' => \$data,
        ]);
        \$form->handleRequest(\$request);

        if (\$form->isSubmitted() && \$form->isValid()) {
            try {
                \$data = \$form['regular_discounts']->getData();
                if (!empty(\$data)) {
                    \$ids = [];
                    foreach (\$data as \$group) {
                        \$items = !empty(\$group['regular_discount_items']) ? \$group['regular_discount_items'] : [];
                        /** @var RegularDiscount \$RegularDiscount */
                        foreach (\$items as \$key => \$RegularDiscount) {
                            \$discountId = \$RegularDiscount->getId();
                            // 更新の場合にIDを記録
                            if (!empty(\$discountId)) {
                                \$ids[] = \$discountId;
                            }
                            // 初回の場合はregular_countに1を設定する
                            if (is_null(\$RegularDiscount->getRegularCount()) && \$key == 0) {
                                \$RegularDiscount->setRegularCount(1);
                            }

                            \$this->entityManager->persist(\$RegularDiscount);
                        }
                    }

                    // filter & remove
                    \$RegularDiscounts = \$this->regularDiscountRepository->findAll();
                    foreach (\$RegularDiscounts as \$RegularDiscount) {
                        \$discountId = \$RegularDiscount->getId();
                        // 更新の場合かつ、フォームより送信されたdiscount_idが含まれない場合は削除する
                        if (!empty(\$discountId) && !in_array(\$discountId, \$ids)) {
                            \$this->entityManager->remove(\$RegularDiscount);
                        }
                    }

                    \$this->entityManager->flush();
                    \$this->addSuccess('admin.common.save_complete', 'admin');

                    return \$this->redirectToRoute('eccube_payment_lite42_admin_regular_discount_setting');
                }
            } catch (\\Exception \$e) {
                log_info('定期回数割引削除エラー', [\$e]);
                \$this->addError('関連するデータがあるため定期回数割引を削除できませんでした', 'admin');

                return \$this->redirectToRoute('eccube_payment_lite42_admin_regular_discount_setting');
            }
        }

        return [
            'form' => \$form->createView(),
            'discountIdMax' => \$discountIdMax,
        ];
    }

    private function getRegularDiscountData(): array
    {
        \$data = [];
        \$groups = [];

        /** @var RegularDiscount[] \$RegularDiscounts */
        \$RegularDiscounts = \$this->regularDiscountRepository->findAll();
        foreach (\$RegularDiscounts as \$RegularDiscount) {
            \$discountId = \$RegularDiscount->getDiscountId();
            \$groups[\$discountId] = !empty(\$groups[\$discountId]) ? array_merge(\$groups[\$discountId], [\$RegularDiscount]) : [\$RegularDiscount];
        }

        foreach (\$groups as \$group) {
            \$data[] = ['regular_discount_items' => \$group];
        }

        return \$data;
    }

    private function initialData()
    {
        \$groupNumber = 3;
        \$itemNumber = 3;
        \$data = [];

        for (\$i = 1; \$i <= \$groupNumber; \$i++) {
            \$group = [];
            for (\$j = 1; \$j <= \$itemNumber; \$j++) {
                \$RegularDiscount = new RegularDiscount();
                \$RegularDiscount
                    ->setDiscountId(\$i)
                    ->setItemId(\$j);

                \$group[] = \$RegularDiscount;
            }

            \$data[] = ['regular_discount_items' => \$group];
        }

        return \$data;
    }

    private function getDiscountIdMax()
    {
        /** @var RegularDiscount \$RegularDiscount */
        \$RegularDiscount = \$this->regularDiscountRepository->findOneBy([], [
            'discount_id' => 'DESC',
        ]);
        /** @var ProductClass \$ProductClass */
        \$ProductClass = \$this->productClassRepository->findOneBy([], [
            'RegularDiscount' => 'DESC',
        ]);

        \$discountIdMax = \$RegularDiscount ? \$RegularDiscount->getDiscountId() : 0;
        if (!empty(\$ProductClass->getRegularDiscount()) && \$ProductClass->getRegularDiscount()->getDiscountId() > \$discountIdMax) {
            \$discountIdMax = \$ProductClass->getRegularDiscount()->getDiscountId();
        }

        return \$discountIdMax;
    }
}
", "EccubePaymentLite42/Controller/Admin/Regular/RegularDiscountSettingController.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Controller\\Admin\\Regular\\RegularDiscountSettingController.php");
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
