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

/* EccubePaymentLite42/EventListener/EventSubscriber/Front/Mypage/AddRegularNavEventSubscriber.php */
class __TwigTemplate_0b3da6cc31da12aa3099a24e993ae10b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/EventListener/EventSubscriber/Front/Mypage/AddRegularNavEventSubscriber.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/EventListener/EventSubscriber/Front/Mypage/AddRegularNavEventSubscriber.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\EventListener\\EventSubscriber\\Front\\Mypage;

use Eccube\\Event\\TemplateEvent;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Entity\\MyPageRegularSetting;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrder;
use Plugin\\EccubePaymentLite42\\Entity\\RegularStatus;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Service\\IsMypageRegularSettingService;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class AddRegularNavEventSubscriber implements EventSubscriberInterface
{
    /**
     * @var ConfigRepository
     */
    private \$configRepository;
    /**
     * @var IsMypageRegularSettingService
     */
    private \$isMypageRegularSettingService;

    public function __construct(
        ConfigRepository \$configRepository,
        IsMypageRegularSettingService \$isMypageRegularSettingService
    ) {
        \$this->configRepository = \$configRepository;
        \$this->isMypageRegularSettingService = \$isMypageRegularSettingService;
    }

    public static function getSubscribedEvents()
    {
        return [
            '@EccubePaymentLite42/default/Mypage/regular_detail.twig' => 'index',
            '@EccubePaymentLite42/default/Mypage/regular_cycle.twig' => 'index',
            '@EccubePaymentLite42/default/Mypage/regular_cancel.twig' => 'index',
            '@EccubePaymentLite42/default/Mypage/regular_complete.twig' => 'index',
            '@EccubePaymentLite42/default/Mypage/regular_next_delivery_date.twig' => 'index',
            '@EccubePaymentLite42/default/Mypage/regular_product_quantity.twig' => 'index',
            '@EccubePaymentLite42/default/Mypage/regular_resume.twig' => 'index',
            '@EccubePaymentLite42/default/Mypage/regular_shipping.twig' => 'index',
            '@EccubePaymentLite42/default/Mypage/regular_skip.twig' => 'index',
            '@EccubePaymentLite42/default/Mypage/regular_suspend.twig' => 'index',
        ];
    }

    /**
     * 定期ナビゲーションの表示を行うeventSubscriberクラス
     * 定期ステータスが継続、休止以外の場合は定期ナビゲーションは表示しない
     */
    public function index(TemplateEvent \$event)
    {
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        if (!\$Config->getRegular()) {
            return;
        }
        /** @var RegularOrder \$RegularOrder */
        \$RegularOrder = \$event->getParameter('RegularOrder');
        \$RegularStatus = \$RegularOrder->getRegularStatus();
        // Get regular skip flag
        \$regularSkipFlg = \$RegularOrder->getRegularSkipFlag();
        // 定期ステータスが継続の場合
        if (\$RegularStatus->getId() === RegularStatus::CONTINUE) {
            \$event->addSnippet('@EccubePaymentLite42/default/Mypage/RegularNav/detail.twig');
            if (\$this->isMypageRegularSettingService->handle(MyPageRegularSetting::REGULAR_CYCLE)) {
                \$event->addSnippet('@EccubePaymentLite42/default/Mypage/RegularNav/cycle.twig');
            }
            if (\$this->isMypageRegularSettingService->handle(MyPageRegularSetting::NEXT_DELIVERY_DATE)) {
                \$event->addSnippet('@EccubePaymentLite42/default/Mypage/RegularNav/next_delivery_date.twig');
            }
            // お届け先変更は管理画面で表示、非表示の制御を行わない。
            \$event->addSnippet('@EccubePaymentLite42/default/Mypage/RegularNav/shipping.twig');
            if (\$this->isMypageRegularSettingService->handle(MyPageRegularSetting::NUMBER_OR_ITEMS)) {
                \$event->addSnippet('@EccubePaymentLite42/default/Mypage/RegularNav/product_quantity.twig');
            }
            if (\$this->isMypageRegularSettingService->handle(MyPageRegularSetting::SKIP_ONCE) && \$regularSkipFlg == 0) {
                \$event->addSnippet('@EccubePaymentLite42/default/Mypage/RegularNav/skip.twig');
            }
            if (\$this->isMypageRegularSettingService->handle(MyPageRegularSetting::SUSPEND_AND_RESUME)) {
                \$event->addSnippet('@EccubePaymentLite42/default/Mypage/RegularNav/suspend.twig');
            }
            if (\$this->isMypageRegularSettingService->handle(MyPageRegularSetting::CANCELLATION)) {
                \$event->addSnippet('@EccubePaymentLite42/default/Mypage/RegularNav/cancel.twig');
            }

            return;
        }
        // ステータスが休止の場合
        if (\$RegularStatus->getId() === RegularStatus::SUSPEND) {
            \$event->addSnippet('@EccubePaymentLite42/default/Mypage/RegularNav/detail.twig');
            // お届け先変更は管理画面で表示、非表示の制御を行わない。
            \$event->addSnippet('@EccubePaymentLite42/default/Mypage/RegularNav/shipping.twig');

            if (\$this->isMypageRegularSettingService->handle(MyPageRegularSetting::NUMBER_OR_ITEMS)) {
                \$event->addSnippet('@EccubePaymentLite42/default/Mypage/RegularNav/product_quantity.twig');
            }
            if (\$this->isMypageRegularSettingService->handle(MyPageRegularSetting::CANCELLATION)) {
                \$event->addSnippet('@EccubePaymentLite42/default/Mypage/RegularNav/cancel.twig');
            }
            if (\$this->isMypageRegularSettingService->handle(MyPageRegularSetting::SUSPEND_AND_RESUME)) {
                \$event->addSnippet('@EccubePaymentLite42/default/Mypage/RegularNav/resume.twig');
            }
        }
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
        return "EccubePaymentLite42/EventListener/EventSubscriber/Front/Mypage/AddRegularNavEventSubscriber.php";
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

namespace Plugin\\EccubePaymentLite42\\EventListener\\EventSubscriber\\Front\\Mypage;

use Eccube\\Event\\TemplateEvent;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Entity\\MyPageRegularSetting;
use Plugin\\EccubePaymentLite42\\Entity\\RegularOrder;
use Plugin\\EccubePaymentLite42\\Entity\\RegularStatus;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Service\\IsMypageRegularSettingService;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class AddRegularNavEventSubscriber implements EventSubscriberInterface
{
    /**
     * @var ConfigRepository
     */
    private \$configRepository;
    /**
     * @var IsMypageRegularSettingService
     */
    private \$isMypageRegularSettingService;

    public function __construct(
        ConfigRepository \$configRepository,
        IsMypageRegularSettingService \$isMypageRegularSettingService
    ) {
        \$this->configRepository = \$configRepository;
        \$this->isMypageRegularSettingService = \$isMypageRegularSettingService;
    }

    public static function getSubscribedEvents()
    {
        return [
            '@EccubePaymentLite42/default/Mypage/regular_detail.twig' => 'index',
            '@EccubePaymentLite42/default/Mypage/regular_cycle.twig' => 'index',
            '@EccubePaymentLite42/default/Mypage/regular_cancel.twig' => 'index',
            '@EccubePaymentLite42/default/Mypage/regular_complete.twig' => 'index',
            '@EccubePaymentLite42/default/Mypage/regular_next_delivery_date.twig' => 'index',
            '@EccubePaymentLite42/default/Mypage/regular_product_quantity.twig' => 'index',
            '@EccubePaymentLite42/default/Mypage/regular_resume.twig' => 'index',
            '@EccubePaymentLite42/default/Mypage/regular_shipping.twig' => 'index',
            '@EccubePaymentLite42/default/Mypage/regular_skip.twig' => 'index',
            '@EccubePaymentLite42/default/Mypage/regular_suspend.twig' => 'index',
        ];
    }

    /**
     * 定期ナビゲーションの表示を行うeventSubscriberクラス
     * 定期ステータスが継続、休止以外の場合は定期ナビゲーションは表示しない
     */
    public function index(TemplateEvent \$event)
    {
        /** @var Config \$Config */
        \$Config = \$this->configRepository->find(1);
        if (!\$Config->getRegular()) {
            return;
        }
        /** @var RegularOrder \$RegularOrder */
        \$RegularOrder = \$event->getParameter('RegularOrder');
        \$RegularStatus = \$RegularOrder->getRegularStatus();
        // Get regular skip flag
        \$regularSkipFlg = \$RegularOrder->getRegularSkipFlag();
        // 定期ステータスが継続の場合
        if (\$RegularStatus->getId() === RegularStatus::CONTINUE) {
            \$event->addSnippet('@EccubePaymentLite42/default/Mypage/RegularNav/detail.twig');
            if (\$this->isMypageRegularSettingService->handle(MyPageRegularSetting::REGULAR_CYCLE)) {
                \$event->addSnippet('@EccubePaymentLite42/default/Mypage/RegularNav/cycle.twig');
            }
            if (\$this->isMypageRegularSettingService->handle(MyPageRegularSetting::NEXT_DELIVERY_DATE)) {
                \$event->addSnippet('@EccubePaymentLite42/default/Mypage/RegularNav/next_delivery_date.twig');
            }
            // お届け先変更は管理画面で表示、非表示の制御を行わない。
            \$event->addSnippet('@EccubePaymentLite42/default/Mypage/RegularNav/shipping.twig');
            if (\$this->isMypageRegularSettingService->handle(MyPageRegularSetting::NUMBER_OR_ITEMS)) {
                \$event->addSnippet('@EccubePaymentLite42/default/Mypage/RegularNav/product_quantity.twig');
            }
            if (\$this->isMypageRegularSettingService->handle(MyPageRegularSetting::SKIP_ONCE) && \$regularSkipFlg == 0) {
                \$event->addSnippet('@EccubePaymentLite42/default/Mypage/RegularNav/skip.twig');
            }
            if (\$this->isMypageRegularSettingService->handle(MyPageRegularSetting::SUSPEND_AND_RESUME)) {
                \$event->addSnippet('@EccubePaymentLite42/default/Mypage/RegularNav/suspend.twig');
            }
            if (\$this->isMypageRegularSettingService->handle(MyPageRegularSetting::CANCELLATION)) {
                \$event->addSnippet('@EccubePaymentLite42/default/Mypage/RegularNav/cancel.twig');
            }

            return;
        }
        // ステータスが休止の場合
        if (\$RegularStatus->getId() === RegularStatus::SUSPEND) {
            \$event->addSnippet('@EccubePaymentLite42/default/Mypage/RegularNav/detail.twig');
            // お届け先変更は管理画面で表示、非表示の制御を行わない。
            \$event->addSnippet('@EccubePaymentLite42/default/Mypage/RegularNav/shipping.twig');

            if (\$this->isMypageRegularSettingService->handle(MyPageRegularSetting::NUMBER_OR_ITEMS)) {
                \$event->addSnippet('@EccubePaymentLite42/default/Mypage/RegularNav/product_quantity.twig');
            }
            if (\$this->isMypageRegularSettingService->handle(MyPageRegularSetting::CANCELLATION)) {
                \$event->addSnippet('@EccubePaymentLite42/default/Mypage/RegularNav/cancel.twig');
            }
            if (\$this->isMypageRegularSettingService->handle(MyPageRegularSetting::SUSPEND_AND_RESUME)) {
                \$event->addSnippet('@EccubePaymentLite42/default/Mypage/RegularNav/resume.twig');
            }
        }
    }
}
", "EccubePaymentLite42/EventListener/EventSubscriber/Front/Mypage/AddRegularNavEventSubscriber.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\EventListener\\EventSubscriber\\Front\\Mypage\\AddRegularNavEventSubscriber.php");
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
