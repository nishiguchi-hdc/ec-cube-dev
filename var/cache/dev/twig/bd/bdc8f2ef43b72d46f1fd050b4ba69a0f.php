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

/* AmazonPayV2_42_Bundle/Service/AmazonBannerService.php */
class __TwigTemplate_3fdc63117999d9d5838eb69ed9340299 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Service/AmazonBannerService.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Service/AmazonBannerService.php"));

        // line 1
        echo "<?php

/*
 * Amazon Pay V2 for EC-CUBE4
 * Copyright(c) 2023 EC-CUBE CO.,LTD. all rights reserved.
 *
 * https://www.ec-cube.co.jp/
 *
 * This program is not free software.
 * It applies to terms of service.
 *
 */

namespace Plugin\\AmazonPayV2_42_Bundle\\Service;

use Plugin\\AmazonPayV2_42_Bundle\\Entity\\AmazonBanner;
use Plugin\\AmazonPayV2_42_Bundle\\Entity\\Config;
use Plugin\\AmazonPayV2_42_Bundle\\Repository\\AmazonBannerRepository;
use Plugin\\AmazonPayV2_42_Bundle\\Repository\\ConfigRepository;

class AmazonBannerService
{
    /**
     * Amazon Payプラグイン設定リポジトリ
     *
     * @var ConfigRepository
     */
    protected \$configRepository;

    /**
     * Amazonバナーリポジトリ
     *
     * @var AmazonBannerRepository
     */
    protected \$amazonBannerRepository;

    public function __construct(
        ConfigRepository \$configRepository,
        AmazonBannerRepository \$amazonBannerRepository
    ) {
        \$this->configRepository = \$configRepository;
        \$this->amazonBannerRepository = \$amazonBannerRepository;
    }

    /**
     * Amazon様バナーについて
     * 選択肢作成用の配列を取得する
     *
     * @param int \$page
     * @return 配列
     */
    public function getBannerOptions(\$page)
    {
        \$banners = \$this->amazonBannerRepository
            ->createQueryBuilder('a')
            ->where('a.page = :page')
            ->orderBy('a.id')
            ->setParameter('page', \$page)
            ->getQuery()->execute();

        \$choices = array();
        foreach (\$banners as \$b) {
            \$choices[\$b->getName()] = \$b->getId();
        }

        return \$choices;
    }

    /**
     * トップページに挿入するAmazon様バナーのコードを取得する
     *
     * @return string
     */
    public function getBannerCodeOnTop()
    {
        \$id = \$this->configRepository->get()->getAmazonBannerSizeOnTop();
        if (is_null(\$id)) {
            \$banner = \$this->getDefaultBanner(AmazonBanner::PAGE_TOP);
        } else {
            \$banner = \$this->amazonBannerRepository->find(\$id);
        }
        \$config = \$this->configRepository->get();

        return str_replace('";
        // line 84
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 84, $this->source); })()), 84, $this->source), "html", null, true);
        echo "', \$config->getSellerId(), \$banner->getCode());
    }

    /**
     * カート画面に挿入するAmazon様バナーのコードを取得する
     *
     * @return string
     */
    public function getBannerCodeOnCart()
    {
        \$id = \$this->configRepository->get()->getAmazonBannerSizeOnCart();
        if (is_null(\$id)) {
            \$banner = \$this->getDefaultBanner(AmazonBanner::PAGE_CART);
        } else {
            \$banner = \$this->amazonBannerRepository->find(\$id);
        }
        \$config = \$this->configRepository->get();

        return str_replace('";
        // line 102
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["MERCHANT_ID"]) || array_key_exists("MERCHANT_ID", $context) ? $context["MERCHANT_ID"] : (function () { throw new RuntimeError('Variable "MERCHANT_ID" does not exist.', 102, $this->source); })()), 102, $this->source), "html", null, true);
        echo "', \$config->getSellerId(), \$banner->getCode());
    }

    /**
     * デフォルトバナーを取得する
     *
     * @param integer \$page ページ種別
     * @return デフォルト表示するバナーのレコード
     */
    protected function getDefaultBanner(\$page)
    {
        \$banners = \$this->amazonBannerRepository
            ->createQueryBuilder('a')
            ->where('a.page = :page')
            ->andWhere('a.isDefault = 1')
            ->setParameter('page', \$page)
            ->getQuery()->execute();

        return \$banners[0];
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
        return "AmazonPayV2_42_Bundle/Service/AmazonBannerService.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  163 => 102,  142 => 84,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * Amazon Pay V2 for EC-CUBE4
 * Copyright(c) 2023 EC-CUBE CO.,LTD. all rights reserved.
 *
 * https://www.ec-cube.co.jp/
 *
 * This program is not free software.
 * It applies to terms of service.
 *
 */

namespace Plugin\\AmazonPayV2_42_Bundle\\Service;

use Plugin\\AmazonPayV2_42_Bundle\\Entity\\AmazonBanner;
use Plugin\\AmazonPayV2_42_Bundle\\Entity\\Config;
use Plugin\\AmazonPayV2_42_Bundle\\Repository\\AmazonBannerRepository;
use Plugin\\AmazonPayV2_42_Bundle\\Repository\\ConfigRepository;

class AmazonBannerService
{
    /**
     * Amazon Payプラグイン設定リポジトリ
     *
     * @var ConfigRepository
     */
    protected \$configRepository;

    /**
     * Amazonバナーリポジトリ
     *
     * @var AmazonBannerRepository
     */
    protected \$amazonBannerRepository;

    public function __construct(
        ConfigRepository \$configRepository,
        AmazonBannerRepository \$amazonBannerRepository
    ) {
        \$this->configRepository = \$configRepository;
        \$this->amazonBannerRepository = \$amazonBannerRepository;
    }

    /**
     * Amazon様バナーについて
     * 選択肢作成用の配列を取得する
     *
     * @param int \$page
     * @return 配列
     */
    public function getBannerOptions(\$page)
    {
        \$banners = \$this->amazonBannerRepository
            ->createQueryBuilder('a')
            ->where('a.page = :page')
            ->orderBy('a.id')
            ->setParameter('page', \$page)
            ->getQuery()->execute();

        \$choices = array();
        foreach (\$banners as \$b) {
            \$choices[\$b->getName()] = \$b->getId();
        }

        return \$choices;
    }

    /**
     * トップページに挿入するAmazon様バナーのコードを取得する
     *
     * @return string
     */
    public function getBannerCodeOnTop()
    {
        \$id = \$this->configRepository->get()->getAmazonBannerSizeOnTop();
        if (is_null(\$id)) {
            \$banner = \$this->getDefaultBanner(AmazonBanner::PAGE_TOP);
        } else {
            \$banner = \$this->amazonBannerRepository->find(\$id);
        }
        \$config = \$this->configRepository->get();

        return str_replace('{{MERCHANT_ID}}', \$config->getSellerId(), \$banner->getCode());
    }

    /**
     * カート画面に挿入するAmazon様バナーのコードを取得する
     *
     * @return string
     */
    public function getBannerCodeOnCart()
    {
        \$id = \$this->configRepository->get()->getAmazonBannerSizeOnCart();
        if (is_null(\$id)) {
            \$banner = \$this->getDefaultBanner(AmazonBanner::PAGE_CART);
        } else {
            \$banner = \$this->amazonBannerRepository->find(\$id);
        }
        \$config = \$this->configRepository->get();

        return str_replace('{{MERCHANT_ID}}', \$config->getSellerId(), \$banner->getCode());
    }

    /**
     * デフォルトバナーを取得する
     *
     * @param integer \$page ページ種別
     * @return デフォルト表示するバナーのレコード
     */
    protected function getDefaultBanner(\$page)
    {
        \$banners = \$this->amazonBannerRepository
            ->createQueryBuilder('a')
            ->where('a.page = :page')
            ->andWhere('a.isDefault = 1')
            ->setParameter('page', \$page)
            ->getQuery()->execute();

        return \$banners[0];
    }
}
", "AmazonPayV2_42_Bundle/Service/AmazonBannerService.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\AmazonPayV2_42_Bundle\\Service\\AmazonBannerService.php");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 84);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
