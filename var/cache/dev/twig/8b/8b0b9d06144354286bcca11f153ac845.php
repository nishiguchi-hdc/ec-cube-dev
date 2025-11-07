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

/* AmazonPayV2_42_Bundle/Entity/AmazonBanner.php */
class __TwigTemplate_853cceef7ba023cdddd3b70741c0c6b4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Entity/AmazonBanner.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Entity/AmazonBanner.php"));

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

namespace Plugin\\AmazonPayV2_42_Bundle\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Eccube\\Entity\\AbstractEntity;

/**
 * AmazonBanner
 *
 * @ORM\\Table(name=\"plg_amazon_pay_v2_banner\")
 * @ORM\\Entity(repositoryClass=\"Plugin\\AmazonPayV2_42_Bundle\\Repository\\AmazonBannerRepository\")
 */
class AmazonBanner extends AbstractEntity
{
    /** page用定数：トップページ */
    public const PAGE_TOP = 1;

    /** page用定数：カート画面 */
    public const PAGE_CART = 2;

    /**
     * @var int
     *
     * @ORM\\Column(name=\"id\", type=\"integer\", options={\"unsigned\":true})
     * @ORM\\Id
     * @ORM\\GeneratedValue(strategy=\"IDENTITY\")
     */
    private \$id;

    /**
     * ページ種類
     *
     * @var int
     * 
     * @ORM\\Column(name=\"page\", type=\"integer\", options={\"unsigned\":true})
     */
    private \$page;

    /**
     * 画面へ表示するラベル
     * @var string
     *
     * @ORM\\Column(name=\"name\", type=\"string\", length=255, nullable=true)
     */
    private \$name;

    /**
     * バナーのソースコード
     * @var string
     *
     * @ORM\\Column(name=\"code\", type=\"string\", length=1024, nullable=true)
     */
    private \$code;

    /**
     * デフォルト選択値かどうか
     * ただのdefaultは予約語なのでis_をつける
     * @var boolean
     *
     * @ORM\\Column(name=\"is_default\", type=\"boolean\", nullable=true, options={\"default\":false})
     */
    private \$isDefault;

    /**
     * Get the value of id
     *
     * @return  int
     */ 
    public function getId()
    {
        return \$this->id;
    }

    /**
     * Set the value of id
     *
     * @param  int  \$id
     *
     * @return  self
     */ 
    public function setId(int \$id)
    {
        \$this->id = \$id;

        return \$this;
    }

    /**
     * Get ページ種類
     *
     * @return  int
     */ 
    public function getPage()
    {
        return \$this->page;
    }

    /**
     * Set ページ種類
     *
     * @param  int  \$page  ページ種類
     *
     * @return  self
     */ 
    public function setPage(int \$page)
    {
        \$this->page = \$page;

        return \$this;
    }

    /**
     * Get the value of name
     *
     * @return  string
     */ 
    public function getName()
    {
        return \$this->name;
    }

    /**
     * Set the value of name
     *
     * @param  string  \$name
     *
     * @return  self
     */ 
    public function setName(string \$name)
    {
        \$this->name = \$name;

        return \$this;
    }

    /**
     * Get the value of code
     *
     * @return  string
     */ 
    public function getCode()
    {
        return \$this->code;
    }

    /**
     * Set the value of code
     *
     * @param  string  \$code
     *
     * @return  self
     */ 
    public function setCode(string \$code)
    {
        \$this->code = \$code;

        return \$this;
    }

    /**
     * Get ただのdefaultは予約語なのでis_をつける
     *
     * @return  boolean
     */ 
    public function getIsDefault()
    {
        return \$this->isDefault;
    }

    /**
     * Set ただのdefaultは予約語なのでis_をつける
     *
     * @param  boolean  \$isDefault  ただのdefaultは予約語なのでis_をつける
     *
     * @return  self
     */ 
    public function setIsDefault(bool \$isDefault)
    {
        \$this->isDefault = \$isDefault;

        return \$this;
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
        return "AmazonPayV2_42_Bundle/Entity/AmazonBanner.php";
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

namespace Plugin\\AmazonPayV2_42_Bundle\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Eccube\\Entity\\AbstractEntity;

/**
 * AmazonBanner
 *
 * @ORM\\Table(name=\"plg_amazon_pay_v2_banner\")
 * @ORM\\Entity(repositoryClass=\"Plugin\\AmazonPayV2_42_Bundle\\Repository\\AmazonBannerRepository\")
 */
class AmazonBanner extends AbstractEntity
{
    /** page用定数：トップページ */
    public const PAGE_TOP = 1;

    /** page用定数：カート画面 */
    public const PAGE_CART = 2;

    /**
     * @var int
     *
     * @ORM\\Column(name=\"id\", type=\"integer\", options={\"unsigned\":true})
     * @ORM\\Id
     * @ORM\\GeneratedValue(strategy=\"IDENTITY\")
     */
    private \$id;

    /**
     * ページ種類
     *
     * @var int
     * 
     * @ORM\\Column(name=\"page\", type=\"integer\", options={\"unsigned\":true})
     */
    private \$page;

    /**
     * 画面へ表示するラベル
     * @var string
     *
     * @ORM\\Column(name=\"name\", type=\"string\", length=255, nullable=true)
     */
    private \$name;

    /**
     * バナーのソースコード
     * @var string
     *
     * @ORM\\Column(name=\"code\", type=\"string\", length=1024, nullable=true)
     */
    private \$code;

    /**
     * デフォルト選択値かどうか
     * ただのdefaultは予約語なのでis_をつける
     * @var boolean
     *
     * @ORM\\Column(name=\"is_default\", type=\"boolean\", nullable=true, options={\"default\":false})
     */
    private \$isDefault;

    /**
     * Get the value of id
     *
     * @return  int
     */ 
    public function getId()
    {
        return \$this->id;
    }

    /**
     * Set the value of id
     *
     * @param  int  \$id
     *
     * @return  self
     */ 
    public function setId(int \$id)
    {
        \$this->id = \$id;

        return \$this;
    }

    /**
     * Get ページ種類
     *
     * @return  int
     */ 
    public function getPage()
    {
        return \$this->page;
    }

    /**
     * Set ページ種類
     *
     * @param  int  \$page  ページ種類
     *
     * @return  self
     */ 
    public function setPage(int \$page)
    {
        \$this->page = \$page;

        return \$this;
    }

    /**
     * Get the value of name
     *
     * @return  string
     */ 
    public function getName()
    {
        return \$this->name;
    }

    /**
     * Set the value of name
     *
     * @param  string  \$name
     *
     * @return  self
     */ 
    public function setName(string \$name)
    {
        \$this->name = \$name;

        return \$this;
    }

    /**
     * Get the value of code
     *
     * @return  string
     */ 
    public function getCode()
    {
        return \$this->code;
    }

    /**
     * Set the value of code
     *
     * @param  string  \$code
     *
     * @return  self
     */ 
    public function setCode(string \$code)
    {
        \$this->code = \$code;

        return \$this;
    }

    /**
     * Get ただのdefaultは予約語なのでis_をつける
     *
     * @return  boolean
     */ 
    public function getIsDefault()
    {
        return \$this->isDefault;
    }

    /**
     * Set ただのdefaultは予約語なのでis_をつける
     *
     * @param  boolean  \$isDefault  ただのdefaultは予約語なのでis_をつける
     *
     * @return  self
     */ 
    public function setIsDefault(bool \$isDefault)
    {
        \$this->isDefault = \$isDefault;

        return \$this;
    }

}
", "AmazonPayV2_42_Bundle/Entity/AmazonBanner.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\AmazonPayV2_42_Bundle\\Entity\\AmazonBanner.php");
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
