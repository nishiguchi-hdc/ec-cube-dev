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

/* EccubePaymentLite42/Controller/Admin/Regular/SendChangeCardMailController.php */
class __TwigTemplate_bee230777d660efe896759e473563112 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Admin/Regular/SendChangeCardMailController.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Controller/Admin/Regular/SendChangeCardMailController.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Controller\\Admin\\Regular;

use Eccube\\Controller\\AbstractController;
use Eccube\\Entity\\Customer;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrder;
use Plugin\\EccubePaymentLite42\\Entity\\RegularShipping;
use Plugin\\EccubePaymentLite42\\Entity\\RegularStatus;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Repository\\RegularShippingRepository;
use Plugin\\EccubePaymentLite42\\Service\\ChangeCardNotificationMailService;
use Plugin\\EccubePaymentLite42\\Service\\IsActiveRegularService;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;
use Symfony\\Component\\Routing\\Annotation\\Route;

class SendChangeCardMailController extends AbstractController
{
    /**
     * @var RegularShippingRepository
     */
    private \$regularShippingRepository;
    /**
     * @var ChangeCardNotificationMailService
     */
    private \$changeCardNotificationMailService;
    /**
     * @var IsActiveRegularService
     */
    private \$isActiveRegularService;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;

    public function __construct(
        ChangeCardNotificationMailService \$changeCardNotificationMailService,
        RegularShippingRepository \$regularShippingRepository,
        ConfigRepository \$configRepository,
        IsActiveRegularService \$isActiveRegularService
    ) {
        \$this->changeCardNotificationMailService = \$changeCardNotificationMailService;
        \$this->regularShippingRepository = \$regularShippingRepository;
        \$this->configRepository = \$configRepository;
        \$this->isActiveRegularService = \$isActiveRegularService;
    }

    /**
     * @Route(
     *     \"/%eccube_admin_route%/regular/eccube_payment_lite/regular/{id}/send_change_mail\",
     *     requirements={\"id\" = \"\\d+\"},
     *     name=\"eccube_payment_lite42_admin_send_change_mail\",
     *     methods={\"PUT\"}
     * )
     */
    public function notifyMail(RegularShipping \$RegularShipping): JsonResponse
    {
        if (!\$this->isActiveRegularService->isActive()) {
            throw new NotFoundHttpException();
        }
        \$this->isTokenValid();
        \$today = new \\DateTime();
        /** @var RegularOrder \$RegularOrder */
        \$RegularOrder = \$RegularShipping->getRegularOrder();
        /** @var Customer \$Customer */
        \$Customer = \$RegularOrder
            ->getCustomer();
        // クレジット有効期限切れの会員かチェック
        \$expireDateTime = \$RegularShipping
            ->getRegularOrder()
            ->getCustomer()
            ->getGmoEpsilonCreditCardExpirationDate();
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        \$expireDateTime->modify('- '.\$Config->getCardExpirationNotificationDays().'day');

        // 継続の定期ステータスかどうかチェック
        if (\$RegularOrder->getRegularStatus()->getId() !== RegularStatus::CONTINUE) {
            return \$this->jsonResponse(
                false,
                '定期受注ID: '.\$RegularShipping->getRegularOrder()->getId().'は定期ステータスが「継続」ではないため処理をスキップしました。',
                'NG'
            );
        }
        // クレジットカード有効期限通知範囲内で有効期限切れ通知メール送信済みの場合は処理を行わない
        \$cardChangeRequestMailSendDate = \$Customer->getCardChangeRequestMailSendDate();
        if (!empty(\$cardChangeRequestMailSendDate) && \$expireDateTime < \$cardChangeRequestMailSendDate) {
            return \$this->jsonResponse(
                false,
                '定期受注ID: '.\$RegularShipping->getRegularOrder()->getId().'は、クレジットカード有効期限通知範囲内で有効期限切れ通知メール送信済みのため処理をスキップしました。',
                'NG'
            );
        }

        // クレジットカード有効期限通知日が過ぎている場合はメールを送信
        if (\$expireDateTime < \$today) {
            /** @var Customer \$Customer */
            \$Customer = \$RegularShipping->getRegularOrder()->getCustomer();
            \$this->changeCardNotificationMailService->sendMail(\$Customer);
            \$Customer->setCardChangeRequestMailSendDate(new \\DateTime());
            \$this->entityManager->persist(\$Customer);
            \$this->entityManager->flush();

            return \$this->jsonResponse(
                true,
                '定期受注ID: '.\$RegularShipping->getRegularOrder()->getId().'の会員にカード変更依頼メールを送信しました。',
                'OK'
            );
        }

        return \$this->jsonResponse(
            false,
            '定期受注ID: '.\$RegularShipping->getRegularOrder()->getId().'は、クレジットカードの有効期限が有効期限切れ通知日数の範囲外のため、処理をスキップしました。',
            'NG'
        );
    }

    private function jsonResponse(\$isSendMail, \$message, \$status): JsonResponse
    {
        return \$this->json([
            'mail' => \$isSendMail,
            'message' => \$message,
            'status' => \$status,
        ]);
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
        return "EccubePaymentLite42/Controller/Admin/Regular/SendChangeCardMailController.php";
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
use Eccube\\Entity\\Customer;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrder;
use Plugin\\EccubePaymentLite42\\Entity\\RegularShipping;
use Plugin\\EccubePaymentLite42\\Entity\\RegularStatus;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Repository\\RegularShippingRepository;
use Plugin\\EccubePaymentLite42\\Service\\ChangeCardNotificationMailService;
use Plugin\\EccubePaymentLite42\\Service\\IsActiveRegularService;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;
use Symfony\\Component\\Routing\\Annotation\\Route;

class SendChangeCardMailController extends AbstractController
{
    /**
     * @var RegularShippingRepository
     */
    private \$regularShippingRepository;
    /**
     * @var ChangeCardNotificationMailService
     */
    private \$changeCardNotificationMailService;
    /**
     * @var IsActiveRegularService
     */
    private \$isActiveRegularService;
    /**
     * @var ConfigRepository
     */
    private \$configRepository;

    public function __construct(
        ChangeCardNotificationMailService \$changeCardNotificationMailService,
        RegularShippingRepository \$regularShippingRepository,
        ConfigRepository \$configRepository,
        IsActiveRegularService \$isActiveRegularService
    ) {
        \$this->changeCardNotificationMailService = \$changeCardNotificationMailService;
        \$this->regularShippingRepository = \$regularShippingRepository;
        \$this->configRepository = \$configRepository;
        \$this->isActiveRegularService = \$isActiveRegularService;
    }

    /**
     * @Route(
     *     \"/%eccube_admin_route%/regular/eccube_payment_lite/regular/{id}/send_change_mail\",
     *     requirements={\"id\" = \"\\d+\"},
     *     name=\"eccube_payment_lite42_admin_send_change_mail\",
     *     methods={\"PUT\"}
     * )
     */
    public function notifyMail(RegularShipping \$RegularShipping): JsonResponse
    {
        if (!\$this->isActiveRegularService->isActive()) {
            throw new NotFoundHttpException();
        }
        \$this->isTokenValid();
        \$today = new \\DateTime();
        /** @var RegularOrder \$RegularOrder */
        \$RegularOrder = \$RegularShipping->getRegularOrder();
        /** @var Customer \$Customer */
        \$Customer = \$RegularOrder
            ->getCustomer();
        // クレジット有効期限切れの会員かチェック
        \$expireDateTime = \$RegularShipping
            ->getRegularOrder()
            ->getCustomer()
            ->getGmoEpsilonCreditCardExpirationDate();
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        \$expireDateTime->modify('- '.\$Config->getCardExpirationNotificationDays().'day');

        // 継続の定期ステータスかどうかチェック
        if (\$RegularOrder->getRegularStatus()->getId() !== RegularStatus::CONTINUE) {
            return \$this->jsonResponse(
                false,
                '定期受注ID: '.\$RegularShipping->getRegularOrder()->getId().'は定期ステータスが「継続」ではないため処理をスキップしました。',
                'NG'
            );
        }
        // クレジットカード有効期限通知範囲内で有効期限切れ通知メール送信済みの場合は処理を行わない
        \$cardChangeRequestMailSendDate = \$Customer->getCardChangeRequestMailSendDate();
        if (!empty(\$cardChangeRequestMailSendDate) && \$expireDateTime < \$cardChangeRequestMailSendDate) {
            return \$this->jsonResponse(
                false,
                '定期受注ID: '.\$RegularShipping->getRegularOrder()->getId().'は、クレジットカード有効期限通知範囲内で有効期限切れ通知メール送信済みのため処理をスキップしました。',
                'NG'
            );
        }

        // クレジットカード有効期限通知日が過ぎている場合はメールを送信
        if (\$expireDateTime < \$today) {
            /** @var Customer \$Customer */
            \$Customer = \$RegularShipping->getRegularOrder()->getCustomer();
            \$this->changeCardNotificationMailService->sendMail(\$Customer);
            \$Customer->setCardChangeRequestMailSendDate(new \\DateTime());
            \$this->entityManager->persist(\$Customer);
            \$this->entityManager->flush();

            return \$this->jsonResponse(
                true,
                '定期受注ID: '.\$RegularShipping->getRegularOrder()->getId().'の会員にカード変更依頼メールを送信しました。',
                'OK'
            );
        }

        return \$this->jsonResponse(
            false,
            '定期受注ID: '.\$RegularShipping->getRegularOrder()->getId().'は、クレジットカードの有効期限が有効期限切れ通知日数の範囲外のため、処理をスキップしました。',
            'NG'
        );
    }

    private function jsonResponse(\$isSendMail, \$message, \$status): JsonResponse
    {
        return \$this->json([
            'mail' => \$isSendMail,
            'message' => \$message,
            'status' => \$status,
        ]);
    }
}
", "EccubePaymentLite42/Controller/Admin/Regular/SendChangeCardMailController.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Controller\\Admin\\Regular\\SendChangeCardMailController.php");
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
