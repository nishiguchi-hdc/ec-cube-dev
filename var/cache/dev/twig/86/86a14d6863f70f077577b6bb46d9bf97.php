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

/* EccubePaymentLite42/Service/AccessBlockProcessService.php */
class __TwigTemplate_a89c8df6c72105c558af78e83c249217 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/AccessBlockProcessService.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Service/AccessBlockProcessService.php"));

        // line 1
        echo "<?php

namespace Plugin\\EccubePaymentLite42\\Service;

use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Service\\Payment\\PaymentDispatcher;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Entity\\CreditAccessLog;
use Plugin\\EccubePaymentLite42\\Entity\\CreditBlock;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Repository\\CreditAccessLogRepository;
use Plugin\\EccubePaymentLite42\\Repository\\CreditBlockRepository;
use Symfony\\Component\\HttpFoundation\\Response;
use Twig\\Environment;
use Twig\\Error\\LoaderError;
use Twig\\Error\\RuntimeError;
use Twig\\Error\\SyntaxError;

class AccessBlockProcessService
{
    /**
     * @var ConfigRepository
     */
    private \$configRepository;
    /**
     * @var object|null
     */
    private \$Config;
    /**
     * @var CreditAccessLogRepository
     */
    private \$creditAccessLogRepository;
    /**
     * @var CreditBlockRepository
     */
    private \$creditBlockRepository;
    /**
     * @var EntityManagerInterface
     */
    private \$entityManager;
    /**
     * @var Environment
     */
    private \$twig;

    public function __construct(
        ConfigRepository \$configRepository,
        CreditAccessLogRepository \$creditAccessLogRepository,
        CreditBlockRepository \$creditBlockRepository,
        EntityManagerInterface \$entityManager,
        Environment \$twig
    ) {
        \$this->configRepository = \$configRepository;
        \$this->creditAccessLogRepository = \$creditAccessLogRepository;
        \$this->creditBlockRepository = \$creditBlockRepository;
        \$this->entityManager = \$entityManager;
        \$this->twig = \$twig;
        /* @var Config Config */
        \$this->Config = \$this->configRepository->find(1);
    }

    /**
     * 不正アクセスブロック処理
     *
     * @return PaymentDispatcher \$dispatcher
     *
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function check(): PaymentDispatcher
    {
        \$dispatcher = new PaymentDispatcher();

        \$block_mode = \$this->Config->getBlockMode();

        if (\$block_mode) {
            \$block_flg = false;

            // アクセス頻度時間を過ぎたIPアドレスを削除
            \$this->creditAccessLogRepository->deleteAllIpAddressForPassedAccessFrequencyTime(\$this->Config->getAccessFrequencyTime());
            // ブロック時間を過ぎたIPアドレスを削除
            \$this->creditBlockRepository->deleteAllIpAddressForPassedBlockTime(\$this->Config->getBlockTime());

            \$arrWhiteList = explode(',', \$this->Config->getWhiteList());
            \$is_registed_whiteList = in_array(\$_SERVER['REMOTE_ADDR'], \$arrWhiteList);
            if (!\$is_registed_whiteList) {
                \$this->registCreditAccessLog();
            }

            if (\$this->isAlreadyBlockedCreditAccess()) {
                \$block_flg = true;
            } elseif (!\$is_registed_whiteList) {
                \$block_flg = \$this->judgeAccessBlocking();
            }

            if (\$block_flg && !\$is_registed_whiteList) {
                \$err_detail = 'message';
                \$content = \$this->twig->render('error.twig', [
                    'error_title' => trans('front.shopping.error'),
                    'error_message' => trans('front.shopping.order_error'),
                ]);
                \$dispatcher->setResponse(Response::create(\$content));
            }
        }

        return \$dispatcher;
    }

    /**
     * 不正アクセスをブロックする
     */
    private function judgeAccessBlocking()
    {
        \$creditAccessLog = \$this->creditAccessLogRepository->findBy(['ip_address' => \$_SERVER['REMOTE_ADDR']]);

        \$CreditBlock = new CreditBlock();
        if (count(\$creditAccessLog) >= \$this->Config->getAccessFrequency()) {
            // 不正アクセスと判断
            \$date = new \\DateTime();
            logs('gmo_epsilon')->info(\"access block IPADDRESS:\$_SERVER[REMOTE_ADDR] DATE:{\$date->format('Y-m-d H:i:s')}\");

            \$CreditBlock->setIpAddress(\$_SERVER['REMOTE_ADDR']);
            \$CreditBlock->setBlockDate(new \\DateTime());

            \$this->entityManager->persist(\$CreditBlock);
            \$this->entityManager->flush();

            return true;
        }

        return false;
    }

    /**
     * クレジットアクセスログを記録する
     */
    private function registCreditAccessLog()
    {
        \$date = new \\DateTime();
        \$CreditAccessLog = new CreditAccessLog();
        logs('gmo_epsilon')->info(\"regist access log IPADDRESS:\$_SERVER[REMOTE_ADDR] DATE:{\$date->format('Y-m-d H:i:s')}\");
        \$CreditAccessLog->setIpAddress(\$_SERVER['REMOTE_ADDR']);
        \$CreditAccessLog->setAccessDate(\$date);

        \$this->entityManager->persist(\$CreditAccessLog);
        \$this->entityManager->flush();
    }

    /**
     * 既に不正アクセスとしてブロックされていないか確認する
     */
    private function isAlreadyBlockedCreditAccess()
    {
        \$CreditBlock = \$this->creditBlockRepository->findBy(['ip_address' => \$_SERVER['REMOTE_ADDR']]);

        return \$CreditBlock ? true : false;
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
        return "EccubePaymentLite42/Service/AccessBlockProcessService.php";
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

namespace Plugin\\EccubePaymentLite42\\Service;

use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Service\\Payment\\PaymentDispatcher;
use Plugin\\EccubePaymentLite42\\Entity\\Config;
use Plugin\\EccubePaymentLite42\\Entity\\CreditAccessLog;
use Plugin\\EccubePaymentLite42\\Entity\\CreditBlock;
use Plugin\\EccubePaymentLite42\\Repository\\ConfigRepository;
use Plugin\\EccubePaymentLite42\\Repository\\CreditAccessLogRepository;
use Plugin\\EccubePaymentLite42\\Repository\\CreditBlockRepository;
use Symfony\\Component\\HttpFoundation\\Response;
use Twig\\Environment;
use Twig\\Error\\LoaderError;
use Twig\\Error\\RuntimeError;
use Twig\\Error\\SyntaxError;

class AccessBlockProcessService
{
    /**
     * @var ConfigRepository
     */
    private \$configRepository;
    /**
     * @var object|null
     */
    private \$Config;
    /**
     * @var CreditAccessLogRepository
     */
    private \$creditAccessLogRepository;
    /**
     * @var CreditBlockRepository
     */
    private \$creditBlockRepository;
    /**
     * @var EntityManagerInterface
     */
    private \$entityManager;
    /**
     * @var Environment
     */
    private \$twig;

    public function __construct(
        ConfigRepository \$configRepository,
        CreditAccessLogRepository \$creditAccessLogRepository,
        CreditBlockRepository \$creditBlockRepository,
        EntityManagerInterface \$entityManager,
        Environment \$twig
    ) {
        \$this->configRepository = \$configRepository;
        \$this->creditAccessLogRepository = \$creditAccessLogRepository;
        \$this->creditBlockRepository = \$creditBlockRepository;
        \$this->entityManager = \$entityManager;
        \$this->twig = \$twig;
        /* @var Config Config */
        \$this->Config = \$this->configRepository->find(1);
    }

    /**
     * 不正アクセスブロック処理
     *
     * @return PaymentDispatcher \$dispatcher
     *
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function check(): PaymentDispatcher
    {
        \$dispatcher = new PaymentDispatcher();

        \$block_mode = \$this->Config->getBlockMode();

        if (\$block_mode) {
            \$block_flg = false;

            // アクセス頻度時間を過ぎたIPアドレスを削除
            \$this->creditAccessLogRepository->deleteAllIpAddressForPassedAccessFrequencyTime(\$this->Config->getAccessFrequencyTime());
            // ブロック時間を過ぎたIPアドレスを削除
            \$this->creditBlockRepository->deleteAllIpAddressForPassedBlockTime(\$this->Config->getBlockTime());

            \$arrWhiteList = explode(',', \$this->Config->getWhiteList());
            \$is_registed_whiteList = in_array(\$_SERVER['REMOTE_ADDR'], \$arrWhiteList);
            if (!\$is_registed_whiteList) {
                \$this->registCreditAccessLog();
            }

            if (\$this->isAlreadyBlockedCreditAccess()) {
                \$block_flg = true;
            } elseif (!\$is_registed_whiteList) {
                \$block_flg = \$this->judgeAccessBlocking();
            }

            if (\$block_flg && !\$is_registed_whiteList) {
                \$err_detail = 'message';
                \$content = \$this->twig->render('error.twig', [
                    'error_title' => trans('front.shopping.error'),
                    'error_message' => trans('front.shopping.order_error'),
                ]);
                \$dispatcher->setResponse(Response::create(\$content));
            }
        }

        return \$dispatcher;
    }

    /**
     * 不正アクセスをブロックする
     */
    private function judgeAccessBlocking()
    {
        \$creditAccessLog = \$this->creditAccessLogRepository->findBy(['ip_address' => \$_SERVER['REMOTE_ADDR']]);

        \$CreditBlock = new CreditBlock();
        if (count(\$creditAccessLog) >= \$this->Config->getAccessFrequency()) {
            // 不正アクセスと判断
            \$date = new \\DateTime();
            logs('gmo_epsilon')->info(\"access block IPADDRESS:\$_SERVER[REMOTE_ADDR] DATE:{\$date->format('Y-m-d H:i:s')}\");

            \$CreditBlock->setIpAddress(\$_SERVER['REMOTE_ADDR']);
            \$CreditBlock->setBlockDate(new \\DateTime());

            \$this->entityManager->persist(\$CreditBlock);
            \$this->entityManager->flush();

            return true;
        }

        return false;
    }

    /**
     * クレジットアクセスログを記録する
     */
    private function registCreditAccessLog()
    {
        \$date = new \\DateTime();
        \$CreditAccessLog = new CreditAccessLog();
        logs('gmo_epsilon')->info(\"regist access log IPADDRESS:\$_SERVER[REMOTE_ADDR] DATE:{\$date->format('Y-m-d H:i:s')}\");
        \$CreditAccessLog->setIpAddress(\$_SERVER['REMOTE_ADDR']);
        \$CreditAccessLog->setAccessDate(\$date);

        \$this->entityManager->persist(\$CreditAccessLog);
        \$this->entityManager->flush();
    }

    /**
     * 既に不正アクセスとしてブロックされていないか確認する
     */
    private function isAlreadyBlockedCreditAccess()
    {
        \$CreditBlock = \$this->creditBlockRepository->findBy(['ip_address' => \$_SERVER['REMOTE_ADDR']]);

        return \$CreditBlock ? true : false;
    }
}
", "EccubePaymentLite42/Service/AccessBlockProcessService.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Service\\AccessBlockProcessService.php");
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
