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

/* AmazonPayV2_42_Bundle/Resource/template/admin/config.twig */
class __TwigTemplate_156da3861f5f50041e89081a56f96744 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 10
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Resource/template/admin/config.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AmazonPayV2_42_Bundle/Resource/template/admin/config.twig"));

        // line 12
        $context["menus"] = ["store", "plugin", "plugin_list"];
        // line 17
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 10
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "AmazonPayV2_42_Bundle/Resource/template/admin/config.twig", 10);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.title"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.sub_title"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 20
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 23
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 24
        echo "<script>
    \$(function(){
        toggleAmazonAccountMode();
        toggleEnv();
        toggleButtonCode(\"cart\");
        toggleButtonCode(\"products\");
        toggleButtonCode(\"mypage_change\");
        toggleButtonCode(\"mypage_login\");
        toggleBannerCode(\"top\");
        toggleBannerCode(\"cart\");
    });

    \$(\"#config_env\").click(function(){
        toggleEnv();
    });

    \$(\"#config_amazon_account_mode\").click(function(){
        toggleAmazonAccountMode();
    });

    \$(\"#config_products_button_place\").click(function(){
        toggleButtonCode(\"products\");
    });

    \$(\"#config_cart_button_place\").click(function(){
        toggleButtonCode(\"cart\");
    });

    \$(\"#config_mypage_change_button_place\").click(function(){
        toggleButtonCode(\"mypage_change\");
    });

    \$(\"#config_mypage_login_button_place\").click(function(){
        toggleButtonCode(\"mypage_login\");
    });

    \$(\"#config_amazon_banner_place_on_top\").click(function(){
        toggleBannerCode(\"top\");
    });

    \$(\"#config_amazon_banner_place_on_cart\").click(function(){
        toggleBannerCode(\"cart\");
    });

    function toggleBannerCode(page) {
        if (\$(\"#config_amazon_banner_place_on_\" + page + \"_0\").prop('checked')) {
            \$(\"#banner_code_on_\" + page).css(\"display\", \"none\");
        } else {
            \$(\"#banner_code_on_\" + page).css(\"display\", \"block\");
        }
    }

    function toggleButtonCode(page) {
        if (\$(\"#config_\" + page + \"_button_place_0\").prop('checked')) {
            \$(\"#button_code_\" + page).css(\"display\", \"none\");
        } else {
            \$(\"#button_code_\" + page).css(\"display\", \"block\");
        }
    }

    function toggleEnv() {
        if (\$(\"#config_env_0\").prop('checked')) {
            \$(\".env--prod\").css(\"display\", \"none\");
            \$(\".env--sandbox\").css(\"display\", \"block\");
        } else {
            \$(\".env--prod\").css(\"display\", \"block\");
            \$(\".env--sandbox\").css(\"display\", \"none\");
        }
    }

    function toggleAmazonAccountMode() {
        if (\$(\"#config_amazon_account_mode_0\").prop('checked')) {
            \$(\".mode--owned\").css(\"display\", \"none\");
            \$(\".mode--shared\").css(\"display\", \"block\");
            \$(\".env--prod\").css(\"display\", \"none\");
        } else {
            \$(\".mode--owned\").css(\"display\", \"block\");
            \$(\".mode--shared\").css(\"display\", \"none\");
            if (\$(\"#config_env_1\").prop('checked')) {
                \$(\".env--prod\").css(\"display\", \"block\");
            }
        }
    }
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 109
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 110
        echo "
    <form role=\"form\" method=\"post\">

        ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "_token", [], "any", false, false, true, 113), 113, $this->source), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>■テスト環境（ダミー決済）利用について</span></div>
                        <div class=\"card-body\">
                            いますぐにテスト環境（ダミー決済）での利用が可能です。利用方法は「<a href=\"https://www.ec-cube.net/user_data/amazonpay/installtest4_2.pdf\" target=\"_blank\">テストインストールマニュアル</a>」をご確認ください。
                        </div>
                        <div class=\"card-header\"><span>■本番環境（本番決済）利用について</span></div>
                        <div class=\"card-body\">
                            株式会社イーシーキューブ、アマゾンジャパン合同会社様、両社との契約が必要となります。
                            詳細情報をご案内いたしますので、以下のフォームより「本番環境申し込み」をお願いいたします。<br />
                            <a href=\"https://www.ec-cube.net/lp/amazonpay/form/bundle.html\" target=\"_blank\">https://www.ec-cube.net/lp/amazonpay/form/bundle.html</a>
                        </div>
                        <div class=\"card-header\"><span>■各種マニュアル</span></div>
                        <div class=\"card-body\">
                            <ul>
                                <li><a href=\"https://www.ec-cube.net/user_data/amazonpay/introduce_cv2.pdf\" target=\"_blank\">Amazon Payプラグインのご紹介</a></li>
                                <li><a href=\"https://www.ec-cube.net/user_data/amazonpay/install4_2.pdf\" target=\"_blank\">本番環境切り替えマニュアル</a></li>
                                <li><a href=\"https://www.ec-cube.net/user_data/amazonpay/operation4_2.pdf\" target=\"_blank\">オペレーションマニュアル</a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.header"), "html", null, true);
        echo "</span></div>
                        <!-- /.box-header -->
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.amazon_account_mode"), "html", null, true);
        echo " <span class=\"text-danger small\">必須</span></label>
                                <div class=\"col mb-2\">
                                    ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "amazon_account_mode", [], "any", false, false, true, 149), 149, $this->source), 'widget', ["label_attr" => ["class" => "radio-inline"]]);
        echo "
                                    ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "amazon_account_mode", [], "any", false, false, true, 150), 150, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.env"), "html", null, true);
        echo "</label>
                                <div class=\"col mb-2\">
                                    <div class=\"mode--owned\">
                                        ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "env", [], "any", false, false, true, 159), 159, $this->source), 'widget', ["label_attr" => ["class" => "radio-inline"]]);
        echo "
                                        ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "env", [], "any", false, false, true, 160), 160, $this->source), 'errors');
        echo "
                                    </div>
                                    <div class=\"mode--shared\">
                                        ";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.env.sandbox"), "html", null, true);
        echo "
                                    </div>
                                </div>
                            </div>
                            <span class=\"text-danger small mode--shared\">※共用テストアカウントではダミー決済のみお試しいただくことが可能です。</span>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.seller_id"), "html", null, true);
        echo "</label>
                                <div class=\"col mb-2\">
                                    <div class=\"mode--owned\">
                                        ";
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "seller_id", [], "any", false, false, true, 174), 174, $this->source), 'widget');
        echo "
                                        ";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 175, $this->source); })()), "seller_id", [], "any", false, false, true, 175), 175, $this->source), 'errors');
        echo "
                                    </div>
                                    <div class=\"mode--shared\">
                                        ";
        // line 178
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["testAccount"]) || array_key_exists("testAccount", $context) ? $context["testAccount"] : (function () { throw new RuntimeError('Variable "testAccount" does not exist.', 178, $this->source); })()), "seller_id", [], "any", false, false, true, 178), 178, $this->source), "html", null, true);
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.public_key_id"), "html", null, true);
        echo "</label>
                                <div class=\"col mb-2\">
                                    <div class=\"mode--owned\">
                                        ";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "public_key_id", [], "any", false, false, true, 188), 188, $this->source), 'widget');
        echo "
                                        ";
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 189, $this->source); })()), "public_key_id", [], "any", false, false, true, 189), 189, $this->source), 'errors');
        echo "
                                    </div>
                                    <div class=\"mode--shared\">
                                        ";
        // line 192
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["testAccount"]) || array_key_exists("testAccount", $context) ? $context["testAccount"] : (function () { throw new RuntimeError('Variable "testAccount" does not exist.', 192, $this->source); })()), "public_key_id", [], "any", false, false, true, 192), 192, $this->source), "html", null, true);
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.private_key_path"), "html", null, true);
        echo "</label>
                                <div class=\"col mb-2\">
                                    <div class=\"mode--owned\">
                                        ";
        // line 202
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "private_key_path", [], "any", false, false, true, 202), 202, $this->source), 'widget');
        echo "
                                        ";
        // line 203
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "private_key_path", [], "any", false, false, true, 203), 203, $this->source), 'errors');
        echo "
                                    </div>
                                    <div class=\"mode--shared\">
                                        ";
        // line 206
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["testAccount"]) || array_key_exists("testAccount", $context) ? $context["testAccount"] : (function () { throw new RuntimeError('Variable "testAccount" does not exist.', 206, $this->source); })()), "private_key_path", [], "any", false, false, true, 206), 206, $this->source), "html", null, true);
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body mode--owned\">
                            <div class=\"row\">
                                <label class=\"col-3\">";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.client_id"), "html", null, true);
        echo "</label>
                                <div class=\"col mb-2\">
                                    ";
        // line 215
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 215, $this->source); })()), "client_id", [], "any", false, false, true, 215), 215, $this->source), 'widget');
        echo "
                                    ";
        // line 216
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), "client_id", [], "any", false, false, true, 216), 216, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body mode--shared\">
                            <div class=\"row\">
                                <label class=\"col-3\">";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.test_client_id"), "html", null, true);
        echo "</label>
                                <div class=\"col mb-2\">
                                    ";
        // line 224
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 224, $this->source); })()), "test_client_id", [], "any", false, false, true, 224), 224, $this->source), 'widget');
        echo "
                                    ";
        // line 225
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 225, $this->source); })()), "test_client_id", [], "any", false, false, true, 225), 225, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body env--prod\">
                            <div class=\"row\">
                                <label class=\"col-3\">";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.prod_key"), "html", null, true);
        echo "</label>
                                <div class=\"col mb-2\">
                                    ";
        // line 233
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 233, $this->source); })()), "prod_key", [], "any", false, false, true, 233), 233, $this->source), 'widget');
        echo "
                                    ";
        // line 234
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 234, $this->source); })()), "prod_key", [], "any", false, false, true, 234), 234, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <span class=\"text-danger small\">※本番環境（本番決済）への切り替えにはイーシーキューブとの契約時に発行されるキーが必要です。</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.header"), "html", null, true);
        echo "</span></div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"\" data-original-title=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.tooltip.sale"), "html", null, true);
        echo "\">
                                        <span>";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.sale"), "html", null, true);
        echo "</span> <span class=\"text-danger small\">必須</span>
                                        <i class=\"fa fa-question-circle fa-lg fa-lg ml-1\"></i>
                                    </div>
                                </div>

                                <div class=\"col mb-2\">
                                    ";
        // line 259
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 259, $this->source); })()), "sale", [], "any", false, false, true, 259), 259, $this->source), 'widget');
        echo "
                                    ";
        // line 260
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 260, $this->source); })()), "sale", [], "any", false, false, true, 260), 260, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.use_confirm_page"), "html", null, true);
        echo " <span class=\"text-danger small\">必須</span></label>

                                <div class=\"col mb-2\">
                                    ";
        // line 269
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 269, $this->source); })()), "use_confirm_page", [], "any", false, false, true, 269), 269, $this->source), 'widget');
        echo "
                                    ";
        // line 270
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 270, $this->source); })()), "use_confirm_page", [], "any", false, false, true, 270), 270, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"\" data-original-title=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.tooltip.auto_login"), "html", null, true);
        echo "\">
                                        <span>";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.auto_login"), "html", null, true);
        echo "</span> <span class=\"text-danger small\">必須</span>
                                        <i class=\"fa fa-question-circle fa-lg fa-lg ml-1\"></i>
                                    </div>
                                </div>

                                <div class=\"col mb-2\">
                                    ";
        // line 284
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 284, $this->source); })()), "auto_login", [], "any", false, false, true, 284), 284, $this->source), 'widget');
        echo "
                                    ";
        // line 285
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 285, $this->source); })()), "auto_login", [], "any", false, false, true, 285), 285, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"\" data-original-title=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.tooltip.login_required"), "html", null, true);
        echo "\">
                                        <span>";
        // line 293
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.login_required"), "html", null, true);
        echo "</span> <span class=\"text-danger small\">必須</span>
                                        <i class=\"fa fa-question-circle fa-lg fa-lg ml-1\"></i>
                                    </div>
                                </div>

                                <div class=\"col mb-2\">
                                    ";
        // line 299
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 299, $this->source); })()), "login_required", [], "any", false, false, true, 299), 299, $this->source), 'widget');
        echo "
                                    ";
        // line 300
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 300, $this->source); })()), "login_required", [], "any", false, false, true, 300), 300, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"\" data-original-title=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.tooltip.order_correct"), "html", null, true);
        echo "\">
                                        <span>";
        // line 308
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.order_correct"), "html", null, true);
        echo "</span> <span class=\"text-danger small\">必須</span>
                                        <i class=\"fa fa-question-circle fa-lg fa-lg ml-1\"></i>
                                    </div>
                                </div>

                                <div class=\"col mb-2\">
                                    ";
        // line 314
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 314, $this->source); })()), "order_correct", [], "any", false, false, true, 314), 314, $this->source), 'widget');
        echo "
                                    ";
        // line 315
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 315, $this->source); })()), "order_correct", [], "any", false, false, true, 315), 315, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"\" data-original-title=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.tooltip.mail_notices"), "html", null, true);
        echo "\">
                                        <span>";
        // line 323
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.mail_notices"), "html", null, true);
        echo "</span>
                                        <i class=\"fa fa-question-circle fa-lg fa-lg ml-1\"></i>
                                    </div>
                                </div>

                                <div class=\"col mb-2\">
                                    ";
        // line 329
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 329, $this->source); })()), "mail_notices", [], "any", false, false, true, 329), 329, $this->source), 'widget');
        echo "
                                    ";
        // line 330
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 330, $this->source); })()), "mail_notices", [], "any", false, false, true, 330), 330, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 343
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.header"), "html", null, true);
        echo "</span></div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">";
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.use_cart_button"), "html", null, true);
        echo "</label>
                                <div class=\"col mb-2\">
                                    ";
        // line 348
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 348, $this->source); })()), "use_cart_button", [], "any", false, false, true, 348), 348, $this->source), 'widget');
        echo "
                                    ";
        // line 349
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 349, $this->source); })()), "use_cart_button", [], "any", false, false, true, 349), 349, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.cart_button_color"), "html", null, true);
        echo " <span class=\"text-danger small\">必須</span></label>
                                <div class=\"col mb-2\">
                                    ";
        // line 357
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 357, $this->source); })()), "cart_button_color", [], "any", false, false, true, 357), 357, $this->source), 'widget');
        echo "
                                    ";
        // line 358
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 358, $this->source); })()), "cart_button_color", [], "any", false, false, true, 358), 358, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">";
        // line 364
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.cart_button_place"), "html", null, true);
        echo " <span class=\"text-danger small\">必須</span></label>
                                <div class=\"col mb-2\">
                                    ";
        // line 366
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 366, $this->source); })()), "cart_button_place", [], "any", false, false, true, 366), 366, $this->source), 'widget');
        echo "
                                    ";
        // line 367
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 367, $this->source); })()), "cart_button_place", [], "any", false, false, true, 367), 367, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div id=\"button_code_cart\"";
        // line 372
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 372, $this->source); })()), "cart_button_place", [], "any", false, false, true, 372), "vars", [], "any", false, false, true, 372), "value", [], "any", false, false, true, 372) == "auto")) {
            echo "style=\"display:none;\"";
        }
        echo ">
                                <p>以下のコードをカート画面のテンプレートファイルに追記して下さい。</p>
                                <p>※ コンテンツ管理 > ページ管理 > 現在のカゴの中</p>
                                <textarea type=\"text\" class=\"form-control\" readonly=\"readonly\" rows=3>";
        // line 375
        echo "<div style=\"width: 210px;\">
    <p style=\"height: 70px;\" id=\"AmazonPayButton{{ cartKey }}\"></p>
</div>";
        // line 377
        echo "</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 389
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.header"), "html", null, true);
        echo "</span></div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">";
        // line 392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.use_mypage_login_button"), "html", null, true);
        echo "</label>
                                <div class=\"col mb-2\">
                                    ";
        // line 394
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 394, $this->source); })()), "use_mypage_login_button", [], "any", false, false, true, 394), 394, $this->source), 'widget');
        echo "
                                    ";
        // line 395
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 395, $this->source); })()), "use_mypage_login_button", [], "any", false, false, true, 395), 395, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">";
        // line 401
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.mypage_login_button_color"), "html", null, true);
        echo " <span class=\"text-danger small\">必須</span></label>
                                <div class=\"col mb-2\">
                                    ";
        // line 403
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 403, $this->source); })()), "mypage_login_button_color", [], "any", false, false, true, 403), 403, $this->source), 'widget');
        echo "
                                    ";
        // line 404
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 404, $this->source); })()), "mypage_login_button_color", [], "any", false, false, true, 404), 404, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">";
        // line 410
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.mypage_login_button_place"), "html", null, true);
        echo " <span class=\"text-danger small\">必須</span></label>
                                <div class=\"col mb-2\">
                                    ";
        // line 412
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 412, $this->source); })()), "mypage_login_button_place", [], "any", false, false, true, 412), 412, $this->source), 'widget');
        echo "
                                    ";
        // line 413
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 413, $this->source); })()), "mypage_login_button_place", [], "any", false, false, true, 413), 413, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div id=\"button_code_mypage_login\"";
        // line 418
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 418, $this->source); })()), "mypage_login_button_place", [], "any", false, false, true, 418), "vars", [], "any", false, false, true, 418), "value", [], "any", false, false, true, 418) == "auto")) {
            echo "style=\"display:none;\"";
        }
        echo ">
                                <p>以下のコードをログイン画面のテンプレートファイルに追記して下さい。</p>
                                <p>※ コンテンツ管理 > ページ管理 > MYページ/ログイン</p>
                                <input type=\"text\" class=\"lockon_card_row form-control\" readonly=\"readonly\" value='";
        // line 421
        echo "<div id=\"AmazonLoginButton\"></div>";
        echo "'/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 433
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.amazon_banner.header.top"), "html", null, true);
        echo "</span></div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">";
        // line 436
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.amazon_banner.use_amazon_banner"), "html", null, true);
        echo " <span class=\"text-danger small\">必須</span></label>
                                <div class=\"col mb-2\">
                                    ";
        // line 438
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 438, $this->source); })()), "use_amazon_banner_on_top", [], "any", false, false, true, 438), 438, $this->source), 'widget');
        echo "
                                    ";
        // line 439
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 439, $this->source); })()), "use_amazon_banner_on_top", [], "any", false, false, true, 439), 439, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">";
        // line 445
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.amazon_banner.banner_size"), "html", null, true);
        echo " <span class=\"text-danger small\">必須</span></label>
                                <div class=\"col mb-2\">
                                    ";
        // line 447
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 447, $this->source); })()), "amazon_banner_size_on_top", [], "any", false, false, true, 447), 447, $this->source), 'widget');
        echo "
                                    ";
        // line 448
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 448, $this->source); })()), "amazon_banner_size_on_top", [], "any", false, false, true, 448), 448, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">";
        // line 454
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.amazon_banner.banner_place"), "html", null, true);
        echo " <span class=\"text-danger small\">必須</span></label>
                                <div class=\"col mb-2\">
                                    ";
        // line 456
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 456, $this->source); })()), "amazon_banner_place_on_top", [], "any", false, false, true, 456), 456, $this->source), 'widget');
        echo "
                                    ";
        // line 457
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 457, $this->source); })()), "amazon_banner_place_on_top", [], "any", false, false, true, 457), 457, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div id=\"banner_code_on_top\"";
        // line 462
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 462, $this->source); })()), "amazon_banner_place_on_top", [], "any", false, false, true, 462), "vars", [], "any", false, false, true, 462), "value", [], "any", false, false, true, 462) == "auto")) {
            echo "style=\"display:none;\"";
        }
        echo ">
                                <p>以下のコードをトップページのテンプレートファイルに追記して下さい。</p>
                                <p>※ コンテンツ管理 > ページ管理 > TOPページ</p>
                                <input type=\"text\" class=\"lockon_card_row form-control\" readonly=\"readonly\" value='";
        // line 465
        echo "<div id=\"AmazonBanner\"></div>";
        echo "'/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 477
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.amazon_banner.header.cart"), "html", null, true);
        echo "</span></div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">";
        // line 480
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.amazon_banner.use_amazon_banner"), "html", null, true);
        echo " <span class=\"text-danger small\">必須</span></label>
                                <div class=\"col mb-2\">
                                    ";
        // line 482
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 482, $this->source); })()), "use_amazon_banner_on_cart", [], "any", false, false, true, 482), 482, $this->source), 'widget');
        echo "
                                    ";
        // line 483
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 483, $this->source); })()), "use_amazon_banner_on_cart", [], "any", false, false, true, 483), 483, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">";
        // line 489
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.amazon_banner.banner_size"), "html", null, true);
        echo " <span class=\"text-danger small\">必須</span></label>
                                <div class=\"col mb-2\">
                                    ";
        // line 491
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 491, $this->source); })()), "amazon_banner_size_on_cart", [], "any", false, false, true, 491), 491, $this->source), 'widget');
        echo "
                                    ";
        // line 492
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 492, $this->source); })()), "amazon_banner_size_on_cart", [], "any", false, false, true, 492), 492, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">";
        // line 498
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.amazon_banner.banner_place"), "html", null, true);
        echo " <span class=\"text-danger small\">必須</span></label>
                                <div class=\"col mb-2\">
                                    ";
        // line 500
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 500, $this->source); })()), "amazon_banner_place_on_cart", [], "any", false, false, true, 500), 500, $this->source), 'widget');
        echo "
                                    ";
        // line 501
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 501, $this->source); })()), "amazon_banner_place_on_cart", [], "any", false, false, true, 501), 501, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div id=\"banner_code_on_cart\"";
        // line 506
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 506, $this->source); })()), "amazon_banner_place_on_top", [], "any", false, false, true, 506), "vars", [], "any", false, false, true, 506), "value", [], "any", false, false, true, 506) == "auto")) {
            echo "style=\"display:none;\"";
        }
        echo ">
                                <p>以下のコードをカート画面のテンプレートファイルに追記して下さい。</p>
                                <p>※ コンテンツ管理 > ページ管理 > 現在のカゴの中</p>
                                <input type=\"text\" class=\"lockon_card_row form-control\" readonly=\"readonly\" value='";
        // line 509
        echo "<div id=\"AmazonBanner\"></div>";
        echo "'/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\"
                               href=\"";
        // line 523
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin");
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                <span>";
        // line 525
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.back"), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\"
                                        type=\"submit\">";
        // line 533
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("amazon_pay_v2.admin.config.save"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "AmazonPayV2_42_Bundle/Resource/template/admin/config.twig";
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
        return array (  1000 => 533,  989 => 525,  984 => 523,  967 => 509,  959 => 506,  951 => 501,  947 => 500,  942 => 498,  933 => 492,  929 => 491,  924 => 489,  915 => 483,  911 => 482,  906 => 480,  900 => 477,  885 => 465,  877 => 462,  869 => 457,  865 => 456,  860 => 454,  851 => 448,  847 => 447,  842 => 445,  833 => 439,  829 => 438,  824 => 436,  818 => 433,  803 => 421,  795 => 418,  787 => 413,  783 => 412,  778 => 410,  769 => 404,  765 => 403,  760 => 401,  751 => 395,  747 => 394,  742 => 392,  736 => 389,  722 => 377,  718 => 375,  710 => 372,  702 => 367,  698 => 366,  693 => 364,  684 => 358,  680 => 357,  675 => 355,  666 => 349,  662 => 348,  657 => 346,  651 => 343,  635 => 330,  631 => 329,  622 => 323,  618 => 322,  608 => 315,  604 => 314,  595 => 308,  591 => 307,  581 => 300,  577 => 299,  568 => 293,  564 => 292,  554 => 285,  550 => 284,  541 => 278,  537 => 277,  527 => 270,  523 => 269,  517 => 266,  508 => 260,  504 => 259,  495 => 253,  491 => 252,  484 => 248,  467 => 234,  463 => 233,  458 => 231,  449 => 225,  445 => 224,  440 => 222,  431 => 216,  427 => 215,  422 => 213,  412 => 206,  406 => 203,  402 => 202,  396 => 199,  386 => 192,  380 => 189,  376 => 188,  370 => 185,  360 => 178,  354 => 175,  350 => 174,  344 => 171,  333 => 163,  327 => 160,  323 => 159,  317 => 156,  308 => 150,  304 => 149,  299 => 147,  292 => 143,  259 => 113,  254 => 110,  244 => 109,  150 => 24,  140 => 23,  129 => 20,  119 => 19,  100 => 15,  81 => 14,  70 => 10,  68 => 17,  66 => 12,  41 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("{#
Amazon Pay V2 for EC-CUBE4.2
Copyright(c) 2023 EC-CUBE CO.,LTD. all rights reserved.

https://www.ec-cube.co.jp/

This program is not free software.
It applies to terms of service.
#}
{% extends '@admin/default_frame.twig' %}

{% set menus = ['store', 'plugin', 'plugin_list'] %}

{% block title %}{{ 'amazon_pay_v2.admin.config.title'|trans }}{% endblock %}
{% block sub_title %}{{ 'amazon_pay_v2.admin.config.sub_title'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block stylesheet %}

{% endblock stylesheet %}

{% block javascript %}
<script>
    \$(function(){
        toggleAmazonAccountMode();
        toggleEnv();
        toggleButtonCode(\"cart\");
        toggleButtonCode(\"products\");
        toggleButtonCode(\"mypage_change\");
        toggleButtonCode(\"mypage_login\");
        toggleBannerCode(\"top\");
        toggleBannerCode(\"cart\");
    });

    \$(\"#config_env\").click(function(){
        toggleEnv();
    });

    \$(\"#config_amazon_account_mode\").click(function(){
        toggleAmazonAccountMode();
    });

    \$(\"#config_products_button_place\").click(function(){
        toggleButtonCode(\"products\");
    });

    \$(\"#config_cart_button_place\").click(function(){
        toggleButtonCode(\"cart\");
    });

    \$(\"#config_mypage_change_button_place\").click(function(){
        toggleButtonCode(\"mypage_change\");
    });

    \$(\"#config_mypage_login_button_place\").click(function(){
        toggleButtonCode(\"mypage_login\");
    });

    \$(\"#config_amazon_banner_place_on_top\").click(function(){
        toggleBannerCode(\"top\");
    });

    \$(\"#config_amazon_banner_place_on_cart\").click(function(){
        toggleBannerCode(\"cart\");
    });

    function toggleBannerCode(page) {
        if (\$(\"#config_amazon_banner_place_on_\" + page + \"_0\").prop('checked')) {
            \$(\"#banner_code_on_\" + page).css(\"display\", \"none\");
        } else {
            \$(\"#banner_code_on_\" + page).css(\"display\", \"block\");
        }
    }

    function toggleButtonCode(page) {
        if (\$(\"#config_\" + page + \"_button_place_0\").prop('checked')) {
            \$(\"#button_code_\" + page).css(\"display\", \"none\");
        } else {
            \$(\"#button_code_\" + page).css(\"display\", \"block\");
        }
    }

    function toggleEnv() {
        if (\$(\"#config_env_0\").prop('checked')) {
            \$(\".env--prod\").css(\"display\", \"none\");
            \$(\".env--sandbox\").css(\"display\", \"block\");
        } else {
            \$(\".env--prod\").css(\"display\", \"block\");
            \$(\".env--sandbox\").css(\"display\", \"none\");
        }
    }

    function toggleAmazonAccountMode() {
        if (\$(\"#config_amazon_account_mode_0\").prop('checked')) {
            \$(\".mode--owned\").css(\"display\", \"none\");
            \$(\".mode--shared\").css(\"display\", \"block\");
            \$(\".env--prod\").css(\"display\", \"none\");
        } else {
            \$(\".mode--owned\").css(\"display\", \"block\");
            \$(\".mode--shared\").css(\"display\", \"none\");
            if (\$(\"#config_env_1\").prop('checked')) {
                \$(\".env--prod\").css(\"display\", \"block\");
            }
        }
    }
</script>
{% endblock %}
{% block main %}

    <form role=\"form\" method=\"post\">

        {{ form_widget(form._token) }}
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>■テスト環境（ダミー決済）利用について</span></div>
                        <div class=\"card-body\">
                            いますぐにテスト環境（ダミー決済）での利用が可能です。利用方法は「<a href=\"https://www.ec-cube.net/user_data/amazonpay/installtest4_2.pdf\" target=\"_blank\">テストインストールマニュアル</a>」をご確認ください。
                        </div>
                        <div class=\"card-header\"><span>■本番環境（本番決済）利用について</span></div>
                        <div class=\"card-body\">
                            株式会社イーシーキューブ、アマゾンジャパン合同会社様、両社との契約が必要となります。
                            詳細情報をご案内いたしますので、以下のフォームより「本番環境申し込み」をお願いいたします。<br />
                            <a href=\"https://www.ec-cube.net/lp/amazonpay/form/bundle.html\" target=\"_blank\">https://www.ec-cube.net/lp/amazonpay/form/bundle.html</a>
                        </div>
                        <div class=\"card-header\"><span>■各種マニュアル</span></div>
                        <div class=\"card-body\">
                            <ul>
                                <li><a href=\"https://www.ec-cube.net/user_data/amazonpay/introduce_cv2.pdf\" target=\"_blank\">Amazon Payプラグインのご紹介</a></li>
                                <li><a href=\"https://www.ec-cube.net/user_data/amazonpay/install4_2.pdf\" target=\"_blank\">本番環境切り替えマニュアル</a></li>
                                <li><a href=\"https://www.ec-cube.net/user_data/amazonpay/operation4_2.pdf\" target=\"_blank\">オペレーションマニュアル</a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>{{ 'amazon_pay_v2.admin.config.header'|trans }}</span></div>
                        <!-- /.box-header -->
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">{{ 'amazon_pay_v2.admin.config.amazon_account_mode'|trans }} <span class=\"text-danger small\">必須</span></label>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.amazon_account_mode, {'label_attr': {'class': 'radio-inline'}}) }}
                                    {{ form_errors(form.amazon_account_mode) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">{{ 'amazon_pay_v2.admin.config.env'|trans }}</label>
                                <div class=\"col mb-2\">
                                    <div class=\"mode--owned\">
                                        {{ form_widget(form.env, {'label_attr': {'class': 'radio-inline'}}) }}
                                        {{ form_errors(form.env) }}
                                    </div>
                                    <div class=\"mode--shared\">
                                        {{ 'amazon_pay_v2.admin.config.env.sandbox'|trans }}
                                    </div>
                                </div>
                            </div>
                            <span class=\"text-danger small mode--shared\">※共用テストアカウントではダミー決済のみお試しいただくことが可能です。</span>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">{{ 'amazon_pay_v2.admin.config.seller_id'|trans }}</label>
                                <div class=\"col mb-2\">
                                    <div class=\"mode--owned\">
                                        {{ form_widget(form.seller_id) }}
                                        {{ form_errors(form.seller_id) }}
                                    </div>
                                    <div class=\"mode--shared\">
                                        {{ testAccount.seller_id }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">{{ 'amazon_pay_v2.admin.config.public_key_id'|trans }}</label>
                                <div class=\"col mb-2\">
                                    <div class=\"mode--owned\">
                                        {{ form_widget(form.public_key_id) }}
                                        {{ form_errors(form.public_key_id) }}
                                    </div>
                                    <div class=\"mode--shared\">
                                        {{ testAccount.public_key_id }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">{{ 'amazon_pay_v2.admin.config.private_key_path'|trans }}</label>
                                <div class=\"col mb-2\">
                                    <div class=\"mode--owned\">
                                        {{ form_widget(form.private_key_path) }}
                                        {{ form_errors(form.private_key_path) }}
                                    </div>
                                    <div class=\"mode--shared\">
                                        {{ testAccount.private_key_path }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body mode--owned\">
                            <div class=\"row\">
                                <label class=\"col-3\">{{ 'amazon_pay_v2.admin.config.client_id'|trans }}</label>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.client_id) }}
                                    {{ form_errors(form.client_id) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body mode--shared\">
                            <div class=\"row\">
                                <label class=\"col-3\">{{ 'amazon_pay_v2.admin.config.test_client_id'|trans }}</label>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.test_client_id) }}
                                    {{ form_errors(form.test_client_id) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body env--prod\">
                            <div class=\"row\">
                                <label class=\"col-3\">{{ 'amazon_pay_v2.admin.config.prod_key'|trans }}</label>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.prod_key) }}
                                    {{ form_errors(form.prod_key) }}
                                </div>
                            </div>
                            <span class=\"text-danger small\">※本番環境（本番決済）への切り替えにはイーシーキューブとの契約時に発行されるキーが必要です。</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>{{ 'amazon_pay_v2.admin.config.header'|trans }}</span></div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"\" data-original-title=\"{{ 'amazon_pay_v2.admin.config.tooltip.sale'|trans }}\">
                                        <span>{{ 'amazon_pay_v2.admin.config.sale'|trans }}</span> <span class=\"text-danger small\">必須</span>
                                        <i class=\"fa fa-question-circle fa-lg fa-lg ml-1\"></i>
                                    </div>
                                </div>

                                <div class=\"col mb-2\">
                                    {{ form_widget(form.sale) }}
                                    {{ form_errors(form.sale) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">{{ 'amazon_pay_v2.admin.config.use_confirm_page'|trans }} <span class=\"text-danger small\">必須</span></label>

                                <div class=\"col mb-2\">
                                    {{ form_widget(form.use_confirm_page) }}
                                    {{ form_errors(form.use_confirm_page) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"\" data-original-title=\"{{ 'amazon_pay_v2.admin.config.tooltip.auto_login'|trans }}\">
                                        <span>{{ 'amazon_pay_v2.admin.config.auto_login'|trans }}</span> <span class=\"text-danger small\">必須</span>
                                        <i class=\"fa fa-question-circle fa-lg fa-lg ml-1\"></i>
                                    </div>
                                </div>

                                <div class=\"col mb-2\">
                                    {{ form_widget(form.auto_login) }}
                                    {{ form_errors(form.auto_login) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"\" data-original-title=\"{{ 'amazon_pay_v2.admin.config.tooltip.login_required'|trans }}\">
                                        <span>{{ 'amazon_pay_v2.admin.config.login_required'|trans }}</span> <span class=\"text-danger small\">必須</span>
                                        <i class=\"fa fa-question-circle fa-lg fa-lg ml-1\"></i>
                                    </div>
                                </div>

                                <div class=\"col mb-2\">
                                    {{ form_widget(form.login_required) }}
                                    {{ form_errors(form.login_required) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"\" data-original-title=\"{{ 'amazon_pay_v2.admin.config.tooltip.order_correct'|trans }}\">
                                        <span>{{ 'amazon_pay_v2.admin.config.order_correct'|trans }}</span> <span class=\"text-danger small\">必須</span>
                                        <i class=\"fa fa-question-circle fa-lg fa-lg ml-1\"></i>
                                    </div>
                                </div>

                                <div class=\"col mb-2\">
                                    {{ form_widget(form.order_correct) }}
                                    {{ form_errors(form.order_correct) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"\" data-original-title=\"{{ 'amazon_pay_v2.admin.config.tooltip.mail_notices'|trans }}\">
                                        <span>{{ 'amazon_pay_v2.admin.config.mail_notices'|trans }}</span>
                                        <i class=\"fa fa-question-circle fa-lg fa-lg ml-1\"></i>
                                    </div>
                                </div>

                                <div class=\"col mb-2\">
                                    {{ form_widget(form.mail_notices) }}
                                    {{ form_errors(form.mail_notices) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>{{ 'amazon_pay_v2.admin.config.header'|trans }}</span></div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">{{ 'amazon_pay_v2.admin.config.use_cart_button'|trans }}</label>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.use_cart_button) }}
                                    {{ form_errors(form.use_cart_button) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">{{ 'amazon_pay_v2.admin.config.cart_button_color'|trans }} <span class=\"text-danger small\">必須</span></label>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.cart_button_color) }}
                                    {{ form_errors(form.cart_button_color) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">{{ 'amazon_pay_v2.admin.config.cart_button_place'|trans }} <span class=\"text-danger small\">必須</span></label>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.cart_button_place) }}
                                    {{ form_errors(form.cart_button_place) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div id=\"button_code_cart\"{% if form.cart_button_place.vars.value == 'auto' %}style=\"display:none;\"{% endif %}>
                                <p>以下のコードをカート画面のテンプレートファイルに追記して下さい。</p>
                                <p>※ コンテンツ管理 > ページ管理 > 現在のカゴの中</p>
                                <textarea type=\"text\" class=\"form-control\" readonly=\"readonly\" rows=3>{{'<div style=\"width: 210px;\">
    <p style=\"height: 70px;\" id=\"AmazonPayButton{{ cartKey }}\"></p>
</div>'}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>{{ 'amazon_pay_v2.admin.config.header'|trans }}</span></div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">{{ 'amazon_pay_v2.admin.config.use_mypage_login_button'|trans }}</label>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.use_mypage_login_button) }}
                                    {{ form_errors(form.use_mypage_login_button) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">{{ 'amazon_pay_v2.admin.config.mypage_login_button_color'|trans }} <span class=\"text-danger small\">必須</span></label>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.mypage_login_button_color) }}
                                    {{ form_errors(form.mypage_login_button_color) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">{{ 'amazon_pay_v2.admin.config.mypage_login_button_place'|trans }} <span class=\"text-danger small\">必須</span></label>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.mypage_login_button_place) }}
                                    {{ form_errors(form.mypage_login_button_place) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div id=\"button_code_mypage_login\"{% if form.mypage_login_button_place.vars.value == 'auto' %}style=\"display:none;\"{% endif %}>
                                <p>以下のコードをログイン画面のテンプレートファイルに追記して下さい。</p>
                                <p>※ コンテンツ管理 > ページ管理 > MYページ/ログイン</p>
                                <input type=\"text\" class=\"lockon_card_row form-control\" readonly=\"readonly\" value='{{\"<div id=\\\"AmazonLoginButton\\\"></div>\"}}'/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>{{ 'amazon_pay_v2.admin.config.amazon_banner.header.top'|trans }}</span></div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">{{ 'amazon_pay_v2.admin.config.amazon_banner.use_amazon_banner'|trans }} <span class=\"text-danger small\">必須</span></label>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.use_amazon_banner_on_top) }}
                                    {{ form_errors(form.use_amazon_banner_on_top) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">{{ 'amazon_pay_v2.admin.config.amazon_banner.banner_size'|trans }} <span class=\"text-danger small\">必須</span></label>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.amazon_banner_size_on_top) }}
                                    {{ form_errors(form.amazon_banner_size_on_top) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">{{ 'amazon_pay_v2.admin.config.amazon_banner.banner_place'|trans }} <span class=\"text-danger small\">必須</span></label>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.amazon_banner_place_on_top) }}
                                    {{ form_errors(form.amazon_banner_place_on_top) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div id=\"banner_code_on_top\"{% if form.amazon_banner_place_on_top.vars.value == 'auto' %}style=\"display:none;\"{% endif %}>
                                <p>以下のコードをトップページのテンプレートファイルに追記して下さい。</p>
                                <p>※ コンテンツ管理 > ページ管理 > TOPページ</p>
                                <input type=\"text\" class=\"lockon_card_row form-control\" readonly=\"readonly\" value='{{\"<div id=\\\"AmazonBanner\\\"></div>\"}}'/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>{{ 'amazon_pay_v2.admin.config.amazon_banner.header.cart'|trans }}</span></div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">{{ 'amazon_pay_v2.admin.config.amazon_banner.use_amazon_banner'|trans }} <span class=\"text-danger small\">必須</span></label>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.use_amazon_banner_on_cart) }}
                                    {{ form_errors(form.use_amazon_banner_on_cart) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">{{ 'amazon_pay_v2.admin.config.amazon_banner.banner_size'|trans }} <span class=\"text-danger small\">必須</span></label>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.amazon_banner_size_on_cart) }}
                                    {{ form_errors(form.amazon_banner_size_on_cart) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-3\">{{ 'amazon_pay_v2.admin.config.amazon_banner.banner_place'|trans }} <span class=\"text-danger small\">必須</span></label>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.amazon_banner_place_on_cart) }}
                                    {{ form_errors(form.amazon_banner_place_on_cart) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div id=\"banner_code_on_cart\"{% if form.amazon_banner_place_on_top.vars.value == 'auto' %}style=\"display:none;\"{% endif %}>
                                <p>以下のコードをカート画面のテンプレートファイルに追記して下さい。</p>
                                <p>※ コンテンツ管理 > ページ管理 > 現在のカゴの中</p>
                                <input type=\"text\" class=\"lockon_card_row form-control\" readonly=\"readonly\" value='{{\"<div id=\\\"AmazonBanner\\\"></div>\"}}'/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\"
                               href=\"{{ url('admin_store_plugin') }}\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                <span>{{ 'amazon_pay_v2.admin.config.back'|trans }}</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\"
                                        type=\"submit\">{{ 'amazon_pay_v2.admin.config.save'|trans }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
{% endblock %}
", "AmazonPayV2_42_Bundle/Resource/template/admin/config.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\AmazonPayV2_42_Bundle\\Resource\\template\\admin\\config.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 12, "form_theme" => 17, "if" => 372);
        static $filters = array("escape" => 14, "trans" => 14);
        static $functions = array("form_widget" => 113, "form_errors" => 150, "url" => 523);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'if'],
                ['escape', 'trans'],
                ['form_widget', 'form_errors', 'url']
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
