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

/* AmazonPayV2_42_Bundle/Entity/Config.php */
class __TwigTemplate_2eea73b0ca9aa7086f2f92eaa124259c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Entity/Config.php"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Entity/Config.php"));

        // line 1
        echo "<?php

/*
 * Amazon Pay V2 for EC-CUBE4.2
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
 * Config
 *
 * @ORM\\Table(name=\"plg_amazon_pay_v2_config\")
 * @ORM\\Entity(repositoryClass=\"Plugin\\AmazonPayV2_42_Bundle\\Repository\\ConfigRepository\")
 */
class Config extends AbstractEntity
{
    /**
     * @var int
     *
     * @ORM\\Column(name=\"id\", type=\"integer\", options={\"unsigned\":true})
     * @ORM\\Id
     * @ORM\\GeneratedValue(strategy=\"IDENTITY\")
     */
    private \$id;

    /**
     * @ORM\\Column(name=\"amazon_account_mode\", type=\"integer\", nullable=true)
     */
    private \$amazon_account_mode;

    /**
     * @var integer
     *
     * @ORM\\Column(name=\"env\", type=\"integer\")
     */
    private \$env;

    /**
     * @var string
     *
     * @ORM\\Column(name=\"seller_id\", type=\"string\", length=255, nullable=true)
     */
    private \$seller_id;

    /**
     * @var string
     *
     * @ORM\\Column(name=\"client_id\", type=\"string\", length=255, nullable=true)
     */
    private \$client_id;

    /**
     * @var string
     *
     * @ORM\\Column(name=\"test_client_id\", type=\"string\", length=255, nullable=true)
     */
    private \$test_client_id;

    /**
     * @var string
     *
     * @ORM\\Column(name=\"prod_key\", type=\"string\", length=255, nullable=true)
     */
    private \$prod_key;

    /**
     * @var string
     *
     * @ORM\\Column(name=\"public_key_id\", type=\"string\", length=255, nullable=true)
     */
    private \$public_key_id;

    /**
     * @var string
     *
     * @ORM\\Column(name=\"private_key_path\", type=\"string\", length=255, nullable=true)
     */
    private \$private_key_path;

    /**
     * @var integer
     *
     * @ORM\\Column(name=\"sale\", type=\"integer\")
     */
    private \$sale;

    /**
     * @var boolean
     *
     * @ORM\\Column(name=\"use_confirm_page\", type=\"boolean\", options={\"default\":false})
     */
    private \$use_confirm_page;

    /**
     * @var boolean
     *
     * @ORM\\Column(name=\"auto_login\", type=\"boolean\", options={\"default\":false})
     */
    private \$auto_login;

    /**
     * @var boolean
     *
     * @ORM\\Column(name=\"login_required\", type=\"boolean\", options={\"default\":false})
     */
    private \$login_required;

    /**
     * @var boolean
     *
     * @ORM\\Column(name=\"order_correct\", type=\"boolean\", options={\"default\":false})
     */
    private \$order_correct;

    /**
     * @var string|null
     *
     * @ORM\\Column(name=\"mail_notices\", type=\"text\", nullable=true)
     */
    private \$mail_notices;

    /**
     * @var boolean
     *
     * @ORM\\Column(name=\"use_cart_button\", type=\"boolean\", options={\"default\":true})
     */
    private \$use_cart_button;

    /**
     * @var string
     *
     * @ORM\\Column(name=\"cart_button_color\", type=\"string\", length=255, nullable=true, options={\"default\":\"Gold\"})
     */
    private \$cart_button_color;

    /**
     * @var string
     *
     * @ORM\\Column(name=\"cart_button_place\", type=\"string\", length=255, nullable=true, options={\"default\":1})
     */
    private \$cart_button_place;

    /**
     * @var boolean
     *
     * @ORM\\Column(name=\"use_mypage_login_button\", type=\"boolean\", options={\"default\":false})
     */
    private \$use_mypage_login_button;

    /**
     * @var string
     *
     * @ORM\\Column(name=\"mypage_login_button_color\", type=\"string\", length=255, nullable=true, options={\"default\":\"Gold\"})
     */
    private \$mypage_login_button_color;

    /**
     * @var string
     *
     * @ORM\\Column(name=\"mypage_login_button_place\", type=\"string\", length=255, nullable=true, options={\"default\":1})
     */
    private \$mypage_login_button_place;

    /**
     * @var boolean
     *
     * @ORM\\Column(name=\"use_amazon_banner_on_top\", type=\"boolean\", options={\"default\":true})
     */
    private \$use_amazon_banner_on_top = true;

    /**
     * @var boolean
     *
     * @ORM\\Column(name=\"use_amazon_banner_on_cart\", type=\"boolean\", options={\"default\":true})
     */
    private \$use_amazon_banner_on_cart = true;

    // NOTE OneToOneにしたいが、そうするとカラムが生成されない
    /**
     * @var AmazonBanner
     * 
     * @ORM\\Column(name=\"amazon_banner_id_on_top\", type=\"integer\", nullable=true)
     */
    private \$amazon_banner_size_on_top;

    // NOTE OneToOneにしたいが、そうするとカラムが生成されない
    /**
     * @var AmazonBanner
     * 
     * @ORM\\Column(name=\"amazon_banner_id_on_cart\", type=\"integer\", nullable=true)
     */
    private \$amazon_banner_size_on_cart;

    /**
     * Amazon特典告知バナー（トップページ）の配置方法（自動／手動）
     *
     * @var string
     * 
     * @ORM\\Column(name=\"amazon_banner_place_on_top\", type=\"string\", length=255, nullable=true, options={\"default\":1})
     */
    private \$amazon_banner_place_on_top = 1;

    /**
     * Amazon特典告知バナー（カート画面）の配置方法（自動／手動）
     *
     * @var string
     * 
     * @ORM\\Column(name=\"amazon_banner_place_on_cart\", type=\"string\", length=255, nullable=true, options={\"default\":1})
     */
    private \$amazon_banner_place_on_cart = 1;

    /**
     * Constructor
     */
    public function __construct()
    { }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAmazonAccountMode()
    {
        return \$this->amazon_account_mode;
    }

    /**
     * {@inheritdoc}
     */
    public function setAmazonAccountMode(\$amazon_account_mode = null)
    {
        \$this->amazon_account_mode = \$amazon_account_mode;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getEnv()
    {
        return \$this->env;
    }

    /**
     * {@inheritdoc}
     */
    public function setEnv(\$env)
    {
        \$this->env = \$env;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSellerId()
    {
        return \$this->seller_id;
    }

    /**
     * {@inheritdoc}
     */
    public function setSellerId(\$seller_id)
    {
        \$this->seller_id = \$seller_id;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPublicKeyId()
    {
        return \$this->public_key_id;
    }

    /**
     * {@inheritdoc}
     */
    public function setPublicKeyId(\$public_key_id)
    {
        \$this->public_key_id = \$public_key_id;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPrivateKeyPath()
    {
        return \$this->private_key_path;
    }

    /**
     * {@inheritdoc}
     */
    public function setPrivateKeyPath(\$private_key_path)
    {
        \$this->private_key_path = \$private_key_path;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getClientId()
    {
        return \$this->client_id;
    }

    /**
     * {@inheritdoc}
     */
    public function setClientId(\$client_id)
    {
        \$this->client_id = \$client_id;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTestClientId()
    {
        return \$this->test_client_id;
    }

    /**
     * {@inheritdoc}
     */
    public function setTestClientId(\$test_client_id)
    {
        \$this->test_client_id = \$test_client_id;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getProdKey()
    {
        return \$this->prod_key;
    }

    /**
     * {@inheritdoc}
     */
    public function setProdKey(\$prod_key)
    {
        \$this->prod_key = \$prod_key;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSale()
    {
        return \$this->sale;
    }

    /**
     * {@inheritdoc}
     */
    public function setSale(\$sale)
    {
        \$this->sale = \$sale;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAutoLogin()
    {
        return \$this->auto_login;
    }

    /**
     * {@inheritdoc}
     */
    public function setAutoLogin(\$auto_login)
    {
        \$this->auto_login = \$auto_login;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLoginRequired()
    {
        return \$this->login_required;
    }

    /**
     * {@inheritdoc}
     */
    public function setLoginRequired(\$login_required)
    {
        \$this->login_required = \$login_required;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getOrderCorrect()
    {
        return \$this->order_correct;
    }

    /**
     * {@inheritdoc}
     */
    public function setOrderCorrect(\$order_correct)
    {
        \$this->order_correct = \$order_correct;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getMailNotices()
    {
        return \$this->mail_notices;
    }

    /**
     * {@inheritdoc}
     */
    public function setMailNotices(\$mail_notices)
    {
        \$this->mail_notices = \$mail_notices;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getUseConfirmPage()
    {
        return \$this->use_confirm_page;
    }

    /**
     * {@inheritdoc}
     */
    public function setUseConfirmPage(\$use_confirm_page)
    {
        \$this->use_confirm_page = \$use_confirm_page;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getUseCartButton()
    {
        return \$this->use_cart_button;
    }

    /**
     * {@inheritdoc}
     */
    public function setUseCartButton(\$use_cart_button)
    {
        \$this->use_cart_button = \$use_cart_button;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCartButtonColor()
    {
        return \$this->cart_button_color;
    }

    /**
     * {@inheritdoc}
     */
    public function setCartButtonColor(\$cart_button_color)
    {
        \$this->cart_button_color = \$cart_button_color;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCartButtonPlace()
    {
        return \$this->cart_button_place;
    }

    /**
     * {@inheritdoc}
     */
    public function setCartButtonPlace(\$cart_button_place)
    {
        \$this->cart_button_place = \$cart_button_place;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getUseMypageLoginButton()
    {
        return \$this->use_mypage_login_button;
    }

    /**
     * {@inheritdoc}
     */
    public function setUseMypageLoginButton(\$use_mypage_login_button)
    {
        \$this->use_mypage_login_button = \$use_mypage_login_button;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getMypageLoginButtonColor()
    {
        return \$this->mypage_login_button_color;
    }

    /**
     * {@inheritdoc}
     */
    public function setMypageLoginButtonColor(\$mypage_login_button_color)
    {
        \$this->mypage_login_button_color = \$mypage_login_button_color;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getMypageLoginButtonPlace()
    {
        return \$this->mypage_login_button_place;
    }

    /**
     * {@inheritdoc}
     */
    public function setMypageLoginButtonPlace(\$mypage_login_button_place)
    {
        \$this->mypage_login_button_place = \$mypage_login_button_place;

        return \$this;
    }


    /**
     * Get the value of use_amazon_banner_on_top
     */ 
    public function getUseAmazonBannerOnTop()
    {
        return isset(\$this->use_amazon_banner_on_top) ? \$this->use_amazon_banner_on_top : true;
    }

    /**
     * Set the value of use_amazon_banner_on_top
     *
     * @return  self
     */ 
    public function setUseAmazonBannerOnTop(\$use_amazon_banner_on_top)
    {
        \$this->use_amazon_banner_on_top = \$use_amazon_banner_on_top;

        return \$this;
    }

    /**
     * Get the value of use_amazon_banner_on_cart
     */ 
    public function getUseAmazonBannerOnCart()
    {
        return isset(\$this->use_amazon_banner_on_cart) ? \$this->use_amazon_banner_on_cart : true;
    }

    /**
     * Set the value of use_amazon_banner_on_cart
     *
     * @return  self
     */ 
    public function setUseAmazonBannerOnCart(\$use_amazon_banner_on_cart)
    {
        \$this->use_amazon_banner_on_cart = \$use_amazon_banner_on_cart;

        return \$this;
    }

    /**
     * Get the value of amazon_banner_size_on_top
     */ 
    public function getAmazonBannerSizeOnTop()
    {
        return \$this->amazon_banner_size_on_top;
    }

    /**
     * Set the value of amazon_banner_size_on_top
     *
     * @return  self
     */ 
    public function setAmazonBannerSizeOnTop(\$amazon_banner_size_on_top)
    {
        \$this->amazon_banner_size_on_top = \$amazon_banner_size_on_top;

        return \$this;
    }

    /**
     * Get the value of amazon_banner_size_on_cart
     *
     * @return  AmazonBanner
     */ 
    public function getAmazonBannerSizeOnCart()
    {
        return \$this->amazon_banner_size_on_cart;
    }

    /**
     * Set the value of amazon_banner_size_on_cart
     *
     * @param  AmazonBanner  \$amazon_banner_size_on_cart
     *
     * @return  self
     */ 
    public function setAmazonBannerSizeOnCart(\$amazon_banner_size_on_cart)
    {
        \$this->amazon_banner_size_on_cart = \$amazon_banner_size_on_cart;

        return \$this;
    }

    /**
     * Get amazon特典告知バナー（トップページ）の配置方法（自動／手動）
     *
     * @return  string
     */ 
    public function getAmazonBannerPlaceOnTop()
    {
        if (!isset(\$this->amazon_banner_place_on_top)) {
            return 1; // 1:自動
        }
        return \$this->amazon_banner_place_on_top;
    }

    /**
     * Set amazon特典告知バナー（トップページ）の配置方法（自動／手動）
     *
     * @param  string  \$amazon_banner_place_on_top  Amazon特典告知バナー（トップページ）の配置方法（自動／手動）
     *
     * @return  self
     */ 
    public function setAmazonBannerPlaceOnTop(string \$amazon_banner_place_on_top)
    {
        \$this->amazon_banner_place_on_top = \$amazon_banner_place_on_top;

        return \$this;
    }

    /**
     * Get amazon特典告知バナー（カート画面）の配置方法（自動／手動）
     *
     * @return  string
     */ 
    public function getAmazonBannerPlaceOnCart()
    {
        if (!isset(\$this->amazon_banner_place_on_cart)) {
            return 1; // 1:自動
        }
        return \$this->amazon_banner_place_on_cart;
    }

    /**
     * Set amazon特典告知バナー（カート画面）の配置方法（自動／手動）
     *
     * @param  string  \$amazon_banner_place_on_cart  Amazon特典告知バナー（カート画面）の配置方法（自動／手動）
     *
     * @return  self
     */ 
    public function setAmazonBannerPlaceOnCart(string \$amazon_banner_place_on_cart)
    {
        \$this->amazon_banner_place_on_cart = \$amazon_banner_place_on_cart;

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
        return "AmazonPayV2_42_Bundle/Entity/Config.php";
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
 * Amazon Pay V2 for EC-CUBE4.2
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
 * Config
 *
 * @ORM\\Table(name=\"plg_amazon_pay_v2_config\")
 * @ORM\\Entity(repositoryClass=\"Plugin\\AmazonPayV2_42_Bundle\\Repository\\ConfigRepository\")
 */
class Config extends AbstractEntity
{
    /**
     * @var int
     *
     * @ORM\\Column(name=\"id\", type=\"integer\", options={\"unsigned\":true})
     * @ORM\\Id
     * @ORM\\GeneratedValue(strategy=\"IDENTITY\")
     */
    private \$id;

    /**
     * @ORM\\Column(name=\"amazon_account_mode\", type=\"integer\", nullable=true)
     */
    private \$amazon_account_mode;

    /**
     * @var integer
     *
     * @ORM\\Column(name=\"env\", type=\"integer\")
     */
    private \$env;

    /**
     * @var string
     *
     * @ORM\\Column(name=\"seller_id\", type=\"string\", length=255, nullable=true)
     */
    private \$seller_id;

    /**
     * @var string
     *
     * @ORM\\Column(name=\"client_id\", type=\"string\", length=255, nullable=true)
     */
    private \$client_id;

    /**
     * @var string
     *
     * @ORM\\Column(name=\"test_client_id\", type=\"string\", length=255, nullable=true)
     */
    private \$test_client_id;

    /**
     * @var string
     *
     * @ORM\\Column(name=\"prod_key\", type=\"string\", length=255, nullable=true)
     */
    private \$prod_key;

    /**
     * @var string
     *
     * @ORM\\Column(name=\"public_key_id\", type=\"string\", length=255, nullable=true)
     */
    private \$public_key_id;

    /**
     * @var string
     *
     * @ORM\\Column(name=\"private_key_path\", type=\"string\", length=255, nullable=true)
     */
    private \$private_key_path;

    /**
     * @var integer
     *
     * @ORM\\Column(name=\"sale\", type=\"integer\")
     */
    private \$sale;

    /**
     * @var boolean
     *
     * @ORM\\Column(name=\"use_confirm_page\", type=\"boolean\", options={\"default\":false})
     */
    private \$use_confirm_page;

    /**
     * @var boolean
     *
     * @ORM\\Column(name=\"auto_login\", type=\"boolean\", options={\"default\":false})
     */
    private \$auto_login;

    /**
     * @var boolean
     *
     * @ORM\\Column(name=\"login_required\", type=\"boolean\", options={\"default\":false})
     */
    private \$login_required;

    /**
     * @var boolean
     *
     * @ORM\\Column(name=\"order_correct\", type=\"boolean\", options={\"default\":false})
     */
    private \$order_correct;

    /**
     * @var string|null
     *
     * @ORM\\Column(name=\"mail_notices\", type=\"text\", nullable=true)
     */
    private \$mail_notices;

    /**
     * @var boolean
     *
     * @ORM\\Column(name=\"use_cart_button\", type=\"boolean\", options={\"default\":true})
     */
    private \$use_cart_button;

    /**
     * @var string
     *
     * @ORM\\Column(name=\"cart_button_color\", type=\"string\", length=255, nullable=true, options={\"default\":\"Gold\"})
     */
    private \$cart_button_color;

    /**
     * @var string
     *
     * @ORM\\Column(name=\"cart_button_place\", type=\"string\", length=255, nullable=true, options={\"default\":1})
     */
    private \$cart_button_place;

    /**
     * @var boolean
     *
     * @ORM\\Column(name=\"use_mypage_login_button\", type=\"boolean\", options={\"default\":false})
     */
    private \$use_mypage_login_button;

    /**
     * @var string
     *
     * @ORM\\Column(name=\"mypage_login_button_color\", type=\"string\", length=255, nullable=true, options={\"default\":\"Gold\"})
     */
    private \$mypage_login_button_color;

    /**
     * @var string
     *
     * @ORM\\Column(name=\"mypage_login_button_place\", type=\"string\", length=255, nullable=true, options={\"default\":1})
     */
    private \$mypage_login_button_place;

    /**
     * @var boolean
     *
     * @ORM\\Column(name=\"use_amazon_banner_on_top\", type=\"boolean\", options={\"default\":true})
     */
    private \$use_amazon_banner_on_top = true;

    /**
     * @var boolean
     *
     * @ORM\\Column(name=\"use_amazon_banner_on_cart\", type=\"boolean\", options={\"default\":true})
     */
    private \$use_amazon_banner_on_cart = true;

    // NOTE OneToOneにしたいが、そうするとカラムが生成されない
    /**
     * @var AmazonBanner
     * 
     * @ORM\\Column(name=\"amazon_banner_id_on_top\", type=\"integer\", nullable=true)
     */
    private \$amazon_banner_size_on_top;

    // NOTE OneToOneにしたいが、そうするとカラムが生成されない
    /**
     * @var AmazonBanner
     * 
     * @ORM\\Column(name=\"amazon_banner_id_on_cart\", type=\"integer\", nullable=true)
     */
    private \$amazon_banner_size_on_cart;

    /**
     * Amazon特典告知バナー（トップページ）の配置方法（自動／手動）
     *
     * @var string
     * 
     * @ORM\\Column(name=\"amazon_banner_place_on_top\", type=\"string\", length=255, nullable=true, options={\"default\":1})
     */
    private \$amazon_banner_place_on_top = 1;

    /**
     * Amazon特典告知バナー（カート画面）の配置方法（自動／手動）
     *
     * @var string
     * 
     * @ORM\\Column(name=\"amazon_banner_place_on_cart\", type=\"string\", length=255, nullable=true, options={\"default\":1})
     */
    private \$amazon_banner_place_on_cart = 1;

    /**
     * Constructor
     */
    public function __construct()
    { }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAmazonAccountMode()
    {
        return \$this->amazon_account_mode;
    }

    /**
     * {@inheritdoc}
     */
    public function setAmazonAccountMode(\$amazon_account_mode = null)
    {
        \$this->amazon_account_mode = \$amazon_account_mode;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getEnv()
    {
        return \$this->env;
    }

    /**
     * {@inheritdoc}
     */
    public function setEnv(\$env)
    {
        \$this->env = \$env;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSellerId()
    {
        return \$this->seller_id;
    }

    /**
     * {@inheritdoc}
     */
    public function setSellerId(\$seller_id)
    {
        \$this->seller_id = \$seller_id;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPublicKeyId()
    {
        return \$this->public_key_id;
    }

    /**
     * {@inheritdoc}
     */
    public function setPublicKeyId(\$public_key_id)
    {
        \$this->public_key_id = \$public_key_id;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPrivateKeyPath()
    {
        return \$this->private_key_path;
    }

    /**
     * {@inheritdoc}
     */
    public function setPrivateKeyPath(\$private_key_path)
    {
        \$this->private_key_path = \$private_key_path;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getClientId()
    {
        return \$this->client_id;
    }

    /**
     * {@inheritdoc}
     */
    public function setClientId(\$client_id)
    {
        \$this->client_id = \$client_id;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTestClientId()
    {
        return \$this->test_client_id;
    }

    /**
     * {@inheritdoc}
     */
    public function setTestClientId(\$test_client_id)
    {
        \$this->test_client_id = \$test_client_id;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getProdKey()
    {
        return \$this->prod_key;
    }

    /**
     * {@inheritdoc}
     */
    public function setProdKey(\$prod_key)
    {
        \$this->prod_key = \$prod_key;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSale()
    {
        return \$this->sale;
    }

    /**
     * {@inheritdoc}
     */
    public function setSale(\$sale)
    {
        \$this->sale = \$sale;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAutoLogin()
    {
        return \$this->auto_login;
    }

    /**
     * {@inheritdoc}
     */
    public function setAutoLogin(\$auto_login)
    {
        \$this->auto_login = \$auto_login;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLoginRequired()
    {
        return \$this->login_required;
    }

    /**
     * {@inheritdoc}
     */
    public function setLoginRequired(\$login_required)
    {
        \$this->login_required = \$login_required;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getOrderCorrect()
    {
        return \$this->order_correct;
    }

    /**
     * {@inheritdoc}
     */
    public function setOrderCorrect(\$order_correct)
    {
        \$this->order_correct = \$order_correct;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getMailNotices()
    {
        return \$this->mail_notices;
    }

    /**
     * {@inheritdoc}
     */
    public function setMailNotices(\$mail_notices)
    {
        \$this->mail_notices = \$mail_notices;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getUseConfirmPage()
    {
        return \$this->use_confirm_page;
    }

    /**
     * {@inheritdoc}
     */
    public function setUseConfirmPage(\$use_confirm_page)
    {
        \$this->use_confirm_page = \$use_confirm_page;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getUseCartButton()
    {
        return \$this->use_cart_button;
    }

    /**
     * {@inheritdoc}
     */
    public function setUseCartButton(\$use_cart_button)
    {
        \$this->use_cart_button = \$use_cart_button;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCartButtonColor()
    {
        return \$this->cart_button_color;
    }

    /**
     * {@inheritdoc}
     */
    public function setCartButtonColor(\$cart_button_color)
    {
        \$this->cart_button_color = \$cart_button_color;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCartButtonPlace()
    {
        return \$this->cart_button_place;
    }

    /**
     * {@inheritdoc}
     */
    public function setCartButtonPlace(\$cart_button_place)
    {
        \$this->cart_button_place = \$cart_button_place;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getUseMypageLoginButton()
    {
        return \$this->use_mypage_login_button;
    }

    /**
     * {@inheritdoc}
     */
    public function setUseMypageLoginButton(\$use_mypage_login_button)
    {
        \$this->use_mypage_login_button = \$use_mypage_login_button;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getMypageLoginButtonColor()
    {
        return \$this->mypage_login_button_color;
    }

    /**
     * {@inheritdoc}
     */
    public function setMypageLoginButtonColor(\$mypage_login_button_color)
    {
        \$this->mypage_login_button_color = \$mypage_login_button_color;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getMypageLoginButtonPlace()
    {
        return \$this->mypage_login_button_place;
    }

    /**
     * {@inheritdoc}
     */
    public function setMypageLoginButtonPlace(\$mypage_login_button_place)
    {
        \$this->mypage_login_button_place = \$mypage_login_button_place;

        return \$this;
    }


    /**
     * Get the value of use_amazon_banner_on_top
     */ 
    public function getUseAmazonBannerOnTop()
    {
        return isset(\$this->use_amazon_banner_on_top) ? \$this->use_amazon_banner_on_top : true;
    }

    /**
     * Set the value of use_amazon_banner_on_top
     *
     * @return  self
     */ 
    public function setUseAmazonBannerOnTop(\$use_amazon_banner_on_top)
    {
        \$this->use_amazon_banner_on_top = \$use_amazon_banner_on_top;

        return \$this;
    }

    /**
     * Get the value of use_amazon_banner_on_cart
     */ 
    public function getUseAmazonBannerOnCart()
    {
        return isset(\$this->use_amazon_banner_on_cart) ? \$this->use_amazon_banner_on_cart : true;
    }

    /**
     * Set the value of use_amazon_banner_on_cart
     *
     * @return  self
     */ 
    public function setUseAmazonBannerOnCart(\$use_amazon_banner_on_cart)
    {
        \$this->use_amazon_banner_on_cart = \$use_amazon_banner_on_cart;

        return \$this;
    }

    /**
     * Get the value of amazon_banner_size_on_top
     */ 
    public function getAmazonBannerSizeOnTop()
    {
        return \$this->amazon_banner_size_on_top;
    }

    /**
     * Set the value of amazon_banner_size_on_top
     *
     * @return  self
     */ 
    public function setAmazonBannerSizeOnTop(\$amazon_banner_size_on_top)
    {
        \$this->amazon_banner_size_on_top = \$amazon_banner_size_on_top;

        return \$this;
    }

    /**
     * Get the value of amazon_banner_size_on_cart
     *
     * @return  AmazonBanner
     */ 
    public function getAmazonBannerSizeOnCart()
    {
        return \$this->amazon_banner_size_on_cart;
    }

    /**
     * Set the value of amazon_banner_size_on_cart
     *
     * @param  AmazonBanner  \$amazon_banner_size_on_cart
     *
     * @return  self
     */ 
    public function setAmazonBannerSizeOnCart(\$amazon_banner_size_on_cart)
    {
        \$this->amazon_banner_size_on_cart = \$amazon_banner_size_on_cart;

        return \$this;
    }

    /**
     * Get amazon特典告知バナー（トップページ）の配置方法（自動／手動）
     *
     * @return  string
     */ 
    public function getAmazonBannerPlaceOnTop()
    {
        if (!isset(\$this->amazon_banner_place_on_top)) {
            return 1; // 1:自動
        }
        return \$this->amazon_banner_place_on_top;
    }

    /**
     * Set amazon特典告知バナー（トップページ）の配置方法（自動／手動）
     *
     * @param  string  \$amazon_banner_place_on_top  Amazon特典告知バナー（トップページ）の配置方法（自動／手動）
     *
     * @return  self
     */ 
    public function setAmazonBannerPlaceOnTop(string \$amazon_banner_place_on_top)
    {
        \$this->amazon_banner_place_on_top = \$amazon_banner_place_on_top;

        return \$this;
    }

    /**
     * Get amazon特典告知バナー（カート画面）の配置方法（自動／手動）
     *
     * @return  string
     */ 
    public function getAmazonBannerPlaceOnCart()
    {
        if (!isset(\$this->amazon_banner_place_on_cart)) {
            return 1; // 1:自動
        }
        return \$this->amazon_banner_place_on_cart;
    }

    /**
     * Set amazon特典告知バナー（カート画面）の配置方法（自動／手動）
     *
     * @param  string  \$amazon_banner_place_on_cart  Amazon特典告知バナー（カート画面）の配置方法（自動／手動）
     *
     * @return  self
     */ 
    public function setAmazonBannerPlaceOnCart(string \$amazon_banner_place_on_cart)
    {
        \$this->amazon_banner_place_on_cart = \$amazon_banner_place_on_cart;

        return \$this;
    }
}
", "AmazonPayV2_42_Bundle/Entity/Config.php", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\AmazonPayV2_42_Bundle\\Entity\\Config.php");
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
