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

/* Securitychecker42/Resource/template/admin/config.twig */
class __TwigTemplate_058e890a61ac8d99c4e6154089fab696 extends Template
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
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Securitychecker42/Resource/template/admin/config.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Securitychecker42/Resource/template/admin/config.twig"));

        // line 3
        $context["menus"] = ["store", "plugin", "plugin_list"];
        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 7
        $context["menus"] = ["store", "plugin", "plugin_list"];
        // line 1
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "Securitychecker42/Resource/template/admin/config.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "セキュリティチェックプラグイン";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 13
        echo "    <form role=\"form\" method=\"post\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("securitychecker42_admin_config_check");
        echo "\">
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "_token", [], "any", false, false, true, 14), 14, $this->source), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <p>EC-CUBEのセキュリティチェックリストに基づいた、セキュリティチェックをします。</p>
                            <p>前回確認日時: ";
        // line 21
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "check_date", [], "any", true, true, true, 21)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "check_date", [], "any", false, false, true, 21), 21, $this->source), "未確認")) : ("未確認")), "html", null, true);
        echo "</p>
                        ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "session", [], "any", false, false, true, 22), "flashBag", [], "any", false, false, true, 22), "has", ["eccube.admin.securitychecker3.warning"], "method", false, false, true, 22)) {
            // line 23
            echo "                            <div class=\"alert alert-warning\">
                                <p>本モジュールでは、EC-CUBE旧バージョンの脆弱性や、カスタマイズやプラグインにより生じた脆弱性はチェックできません。</p>
                                <p><a href=\"https://www.ec-cube.net/info/weakness/index.php?version=";
            // line 25
            echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
            echo "\" target=\"_blank\">こちらのEC-CUBE脆弱性情報も必ずご確認ください。</a></p>
                        </div>
                        ";
        }
        // line 28
        echo "                    </div><!-- /.box-header -->
                    <div class=\"card-body\">
                        <h4>基本チェック</h4>
                        <div class=\"row\">
                            <div class=\"col\">
                                <p>
                                    公開チェックではデータ漏洩、セッションハイジャックリスクが高いと想定されるファイルに対するチェックを実行しております。<br>
                                    セキュリティ対応申告書などに記載の「srcディレクトリ配下が公開されていないこと」のような項目に対して網羅的に確認したい場合は対象のディレクトリ/ファイルをより広く確認している<a href=\"https://www.ec-cube.net/lp/security-check/\" target=\"_blank\">セルフチェックツール</a>をご活用ください。<br>
                                    いずれの方法でも、EC-CUBE本体のディレクトリ構成を変更されている場合はチェックが動作しない可能性がありますのでご注意ください。<br>
                                </p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-5\"><span>var 以下のファイル、フォルダが公開されていないか</span></div>
                            <div class=\"col mb-2\">
                                ";
        // line 43
        if ( !twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "var", [], "any", true, true, true, 43)) {
            // line 44
            echo "                                    <p>未確認</p>
                                ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 45
(isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 45, $this->source); })()), "var", [], "any", false, false, true, 45) == false) || twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 45, $this->source); })()), "var", [], "any", false, false, true, 45)))) {
            // line 46
            echo "                                    <p>問題ありません</p>
                                ";
        } else {
            // line 48
            echo "                                    <p class=\"alert alert-danger\">
                                        var フォルダが外部から存在確認出来ます。
                                    </p>
                                    <p class=\"remark\">.htaccess というファイル名で、以下の内容のファイルを作成し、 var フォルダにアップロードしてください。アップロード後、再度セキュリティチェックを実行してください。</p>
                                    <pre>
order allow,deny
deny from all
                                    </pre>
                                ";
        }
        // line 57
        echo "                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-5\"><span>vendor 以下のファイル、フォルダが公開されていないか</span></div>
                            <div class=\"col mb-2\">
                                ";
        // line 62
        if ( !twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "vendor", [], "any", true, true, true, 62)) {
            // line 63
            echo "                                    <p>未確認</p>
                                ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 64
(isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 64, $this->source); })()), "vendor", [], "any", false, false, true, 64) == false) || twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 64, $this->source); })()), "vendor", [], "any", false, false, true, 64)))) {
            // line 65
            echo "                                    <p>問題ありません</p>
                                ";
        } else {
            // line 67
            echo "                                    <p class=\"alert alert-danger\">
                                        vendor フォルダが外部から存在確認出来ます。
                                    </p>
                                    <p class=\"remark\">.htaccess というファイル名で、以下の内容のファイルを作成し、 vendor フォルダにアップロードしてください。アップロード後、再度セキュリティチェックを実行してください。</p>
                                    <pre>
order allow,deny
deny from all
                                    </pre>
                                ";
        }
        // line 76
        echo "                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-5\">codeception が公開されていないか</div>
                            <div class=\"col mb-2\">
                                ";
        // line 81
        if ( !twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "codeception", [], "any", true, true, true, 81)) {
            // line 82
            echo "                                    <p>未確認</p>
                                ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 83
(isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 83, $this->source); })()), "codeception", [], "any", false, false, true, 83) == false) || twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 83, $this->source); })()), "codeception", [], "any", false, false, true, 83)))) {
            // line 84
            echo "                                    <p>問題ありません</p>
                                ";
        } else {
            // line 86
            echo "                                    <p class=\"alert alert-danger\">
                                        codeception フォルダが外部から存在確認出来ます
                                    </p>
                                    <p class=\"remark\">
                                        通常の運用では使用しないプログラムが含まれています。
                                        codeception フォルダを削除してください。
                                    </p>

                                ";
        }
        // line 95
        echo "                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-5\">.env が公開されていないか</div>
                            <div class=\"col mb-2\">
                                ";
        // line 100
        if ( !twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "dotenv", [], "any", true, true, true, 100)) {
            // line 101
            echo "                                    <p>未確認</p>
                                ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 102
(isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 102, $this->source); })()), "dotenv", [], "any", false, false, true, 102) == false) || twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 102, $this->source); })()), "dotenv", [], "any", false, false, true, 102)))) {
            // line 103
            echo "                                    <p>問題ありません</p>
                                ";
        } else {
            // line 105
            echo "                                    <p class=\"alert alert-danger\">
                                        .env ファイルが外部から存在確認出来ます
                                    </p>
                                    <p class=\"remark\">
                                    EC-CUBE をインストールしたフォルダの .htaccess ファイルに以下の内容を追加し、保存してください。
                                    </p>
<textarea class=\"form-control\" style=\"height: 150px\" disabled=\"disabled\">
&lt;FilesMatch &quot;^composer|^COPYING|^\\.env|^\\.maintenance|^Procfile|^app\\.json|^gulpfile\\.js|^package\\.json|^package-lock\\.json|web\\.config|^Dockerfile|\\.(ini|lock|dist|git|sh|bak|swp|env|twig|yml|yaml|dockerignore)\$&quot;&gt;
    order allow,deny
    deny from all
&lt;/FilesMatch&gt;
</textarea>
                                ";
        }
        // line 118
        echo "                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">デバッグモードが有効になっていないか</label>
                            <div class=\"col mb-2\">
                                ";
        // line 123
        if ( !twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "debug_mode", [], "any", true, true, true, 123)) {
            // line 124
            echo "                                    <p>未確認</p>
                                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 125
(isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 125, $this->source); })()), "debug_mode", [], "any", false, false, true, 125) == false)) {
            // line 126
            echo "                                    <p>問題ありません</p>
                                ";
        } else {
            // line 128
            echo "                                    <p class=\"alert alert-danger\">
                                        デバッグモードが有効になっているようです
                                    </p>
                                    <p class=\"remark\">
                                        .env ファイルを確認し、 APP_ENV=prod に設定してください
                                    </p>

                                ";
        }
        // line 136
        echo "                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">SSLが導入されているか</label>
                            <div class=\"col mb-2\">
                                ";
        // line 141
        if ( !twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "ssl", [], "any", true, true, true, 141)) {
            // line 142
            echo "                                    <p>未確認</p>
                                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 143
(isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 143, $this->source); })()), "ssl", [], "any", false, false, true, 143) == false)) {
            // line 144
            echo "                                    <p>問題ありません</p>
                                ";
        } else {
            // line 146
            echo "                                    <p class=\"alert alert-danger\">
                                        SSLが強制されておらず、平文で情報がやり取りされておりますので情報が漏洩する可能性があります。
                                    </p>
                                    <p class=\"remark\">
                                        常時SSLの利用をご検討ください。
                                    </p>

                                ";
        }
        // line 154
        echo "                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">管理画面へのアクセスには常に SSL を利用しているか</label>
                            <div class=\"col mb-2\">
                                ";
        // line 159
        if ( !twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "force_ssl", [], "any", true, true, true, 159)) {
            // line 160
            echo "                                    <p>未確認</p>
                                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 161
(isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 161, $this->source); })()), "force_ssl", [], "any", false, false, true, 161) == false)) {
            // line 162
            echo "                                    <p>問題ありません</p>
                                ";
        } else {
            // line 164
            echo "                                    <p class=\"alert alert-danger\">
                                        管理画面へのアクセスでSSLが強制されておらず、平文で情報がやり取りされておりますので情報が漏洩する可能性があります。
                                    </p>
                                    <p class=\"remark\">
                                        SSLの導入後に、システム設定＞セキュリティ設定より、SSLを強制するを設定してください。
                                    </p>

                                ";
        }
        // line 172
        echo "                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">TRUSTED_HOSTSを設定しているか</label>
                            <div class=\"col mb-2\">
                                ";
        // line 177
        if ( !twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "trusted_hosts_is_checked", [], "any", true, true, true, 177)) {
            // line 178
            echo "                                    <p>未確認</p>
                                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 179
($context["target"] ?? null), "trusted_hosts_is_empty", [], "any", true, true, true, 179) && twig_get_attribute($this->env, $this->source, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 179, $this->source); })()), "trusted_hosts_is_empty", [], "any", false, false, true, 179))) {
            // line 180
            echo "                                    <p class=\"alert alert-danger\">
                                        信頼できるホスト名が設定されていません。
                                    </p>
                                    <p class=\"remark\">
                                        システム設定＞セキュリティ設定より、信頼できるホスト名を設定してください。
                                    </p>
                                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 186
($context["target"] ?? null), "trusted_hosts_is_not_exact_match", [], "any", true, true, true, 186) && twig_get_attribute($this->env, $this->source, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 186, $this->source); })()), "trusted_hosts_is_not_exact_match", [], "any", false, false, true, 186))) {
            // line 187
            echo "                                    <p class=\"alert alert-danger\">
                                        信頼できるホスト名が完全一致で設定されていません。
                                    </p>
                                    <p class=\"remark\">
                                        システム設定＞セキュリティ設定より、信頼できるホスト名を設定してください。
                                        正規表現で完全一致となるよう設定することを推奨します。
                                    </p>
                                ";
        } else {
            // line 195
            echo "                                    <p>問題ありません</p>
                                ";
        }
        // line 197
        echo "                            </div>
                        </div>
                        <h4>不正が疑われるデータのチェック</h4>
                        <div class=\"row\">
                            <div class=\"col\">
                                <p>
                                    不正なコードに利用される「&lt;」や「&gt;」の記号を含むデータをチェック対象としています。<br>
                                    実際には不正でないデータも抽出される可能性がありますので、対象のデータが検出された場合はダウンロードして内容を確認してください。<br>
                                    ご自身で判断がつかない場合は<a href=\"https://www.ec-cube.net/info/security/\" target=\"_blank\">公式サイトで紹介されている専門企業</a>へご相談ください。
                                </p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">会員情報</label>
                            <div class=\"col mb-2\">
                                ";
        // line 212
        if ( !twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "unsafe_customers", [], "any", true, true, true, 212)) {
            // line 213
            echo "                                    <p>未確認</p>
                                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 214
(isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 214, $this->source); })()), "unsafe_customers", [], "any", false, false, true, 214) == 0)) {
            // line 215
            echo "                                    <p>検出されませんでした</p>
                                ";
        } else {
            // line 217
            echo "                                    <p class=\"alert alert-danger\">
                                        不正と疑われるデータが存在します。<a href=\"";
            // line 218
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("securitychecker42_admin_config_download", ["type" => "customer"]);
            echo "\" class=\"link\">対象の会員情報をダウンロード</a>
                                    </p>
                                ";
        }
        // line 221
        echo "                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">お届け先情報</label>
                            <div class=\"col mb-2\">
                                ";
        // line 226
        if ( !twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "unsafe_customers_address", [], "any", true, true, true, 226)) {
            // line 227
            echo "                                    <p>未確認</p>
                                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 228
(isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 228, $this->source); })()), "unsafe_customers_address", [], "any", false, false, true, 228) == 0)) {
            // line 229
            echo "                                    <p>検出されませんでした</p>
                                ";
        } else {
            // line 231
            echo "                                    <p class=\"alert alert-danger\">
                                        不正と疑われるデータが存在します。<a href=\"";
            // line 232
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("securitychecker42_admin_config_download", ["type" => "customer_address"]);
            echo "\" class=\"link\">対象のお届け先情報をダウンロード</a>
                                    </p>
                                ";
        }
        // line 235
        echo "                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">受注情報</label>
                            <div class=\"col mb-2\">
                                ";
        // line 240
        if ( !twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "unsafe_orders", [], "any", true, true, true, 240)) {
            // line 241
            echo "                                    <p>未確認</p>
                                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 242
(isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 242, $this->source); })()), "unsafe_orders", [], "any", false, false, true, 242) == 0)) {
            // line 243
            echo "                                    <p>検出されませんでした</p>
                                ";
        } else {
            // line 245
            echo "                                    <p class=\"alert alert-danger\">
                                        不正と疑われるデータが存在します。<a href=\"";
            // line 246
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("securitychecker42_admin_config_download", ["type" => "order"]);
            echo "\" class=\"link\">対象の受注情報をダウンロード</a>
                                    </p>
                                ";
        }
        // line 249
        echo "                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">配送情報</label>
                            <div class=\"col mb-2\">
                                ";
        // line 254
        if ( !twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "unsafe_shippings", [], "any", true, true, true, 254)) {
            // line 255
            echo "                                    <p>未確認</p>
                                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 256
(isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 256, $this->source); })()), "unsafe_shippings", [], "any", false, false, true, 256) == 0)) {
            // line 257
            echo "                                    <p>検出されませんでした</p>
                                ";
        } else {
            // line 259
            echo "                                    <p class=\"alert alert-danger\">
                                        不正と疑われるデータが存在します。<a href=\"";
            // line 260
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("securitychecker42_admin_config_download", ["type" => "shipping"]);
            echo "\" class=\"link\">対象の配送情報をダウンロード</a>
                                    </p>
                                ";
        }
        // line 263
        echo "                            </div>
                        </div>
                        <h4>環境情報</h4>
                        <div class=\"row\">
                            <label class=\"col-5\">PHPバージョン</label>
                            <div class=\"col mb-2\">
                                ";
        // line 269
        if ( !twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "php_version", [], "any", true, true, true, 269)) {
            // line 270
            echo "                                    <p>未確認</p>
                                ";
        } else {
            // line 272
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 272, $this->source); })()), "php_version", [], "any", false, false, true, 272), 272, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 274
        echo "                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">データーベースバージョン</label>
                            <div class=\"col mb-2\">
                                ";
        // line 279
        if ( !twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "db_version", [], "any", true, true, true, 279)) {
            // line 280
            echo "                                    <p>未確認</p>
                                ";
        } else {
            // line 282
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 282, $this->source); })()), "db_version", [], "any", false, false, true, 282), 282, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 284
        echo "                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">サイトURL</label>
                            <div class=\"col mb-2\">
                                ";
        // line 289
        if ( !twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "site_url", [], "any", true, true, true, 289)) {
            // line 290
            echo "                                    <p>未確認</p>
                                ";
        } else {
            // line 292
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 292, $this->source); })()), "site_url", [], "any", false, false, true, 292));
            foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
                // line 293
                echo "                                        <p>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["url"], 293, $this->source), "html", null, true);
                echo "</p>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 295
            echo "                                ";
        }
        // line 296
        echo "                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">EC-CUBEバージョン</label>
                            <div class=\"col mb-2\">
                                ";
        // line 301
        if ( !twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "eccube_version", [], "any", true, true, true, 301)) {
            // line 302
            echo "                                    <p>未確認</p>
                                ";
        } else {
            // line 304
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 304, $this->source); })()), "eccube_version", [], "any", false, false, true, 304), 304, $this->source), "html", null, true);
            echo "
                                ";
        }
        // line 306
        echo "                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">利用しているプラグイン</label>
                            <div class=\"col mb-2\">
                                ";
        // line 311
        if (twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "plugins", [], "any", true, true, true, 311)) {
            // line 312
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 312, $this->source); })()), "plugins", [], "any", false, false, true, 312));
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 313
                echo "                                        <p>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["plugin"], "plugin_name", [], "any", false, false, true, 313), 313, $this->source), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["plugin"], "plugin_code", [], "any", false, false, true, 313), 313, $this->source), "html", null, true);
                echo ") version";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["plugin"], "plugin_version", [], "any", false, false, true, 313), 313, $this->source), "html", null, true);
                echo "</p>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 315
            echo "                                ";
        }
        // line 316
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, ($context["target"] ?? null), "public_key", [], "any", true, true, true, 316)) {
            // line 317
            echo "                                    <p><small>認証キー: ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 317, $this->source); })()), "public_key", [], "any", false, false, true, 317), 317, $this->source), "html", null, true);
            echo "</small></p>
                                ";
        }
        // line 319
        echo "                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">株式会社イーシーキューブと共有</label>
                            <div class=\"col mb-2\">
                                ";
        // line 324
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 324, $this->source); })()), "eccube_share", [], "any", false, false, true, 324), 324, $this->source), 'widget');
        echo "
                                ";
        // line 325
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 325, $this->source); })()), "eccube_share", [], "any", false, false, true, 325), 325, $this->source), 'errors');
        echo "
                                <small>共有したチェック結果は、セキュリティリスクの分析・伝達等を目的としてのみ利用されます。</small>
                            </div>
                        </div>

                        <div class=\"row ";
        // line 330
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 330, $this->source); })()), "tools_agreement", [], "any", false, false, true, 330), "vars", [], "any", false, false, true, 330), "errors", [], "any", false, false, true, 330))) {
            echo " has-error ";
        }
        echo "\">
                            <div class=\"col-sm-12\">
                                <a href=\"https://www.ec-cube.net/info/security/tools_agreement.php\" target=\"_blank\">EC-CUBEセキュリティチェックモジュール・プラグイン利用約款</a>に同意いただける場合は「同意する」にチェックを入れ、「セキュリティチェック実行」ボタンをクリックしてください。
                                ";
        // line 333
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 333, $this->source); })()), "tools_agreement", [], "any", false, false, true, 333), 333, $this->source), 'widget');
        echo "
                                ";
        // line 334
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 334, $this->source); })()), "tools_agreement", [], "any", false, false, true, 334), "vars", [], "any", false, false, true, 334), "errors", [], "any", false, false, true, 334))) {
            echo "<p class=\"alert alert-danger\">セキュリティチェックを実行する場合は、必ず利用約款への同意をお願い致します。</p>";
        }
        // line 335
        echo "                            </div>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
                </div><!-- /.col -->
                <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\"
                               href=\"";
        // line 346
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin");
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                <span>戻る</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\"
                                        type=\"submit\">セキュリティチェックを実行</button>
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
        return "Securitychecker42/Resource/template/admin/config.twig";
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
        return array (  704 => 346,  691 => 335,  687 => 334,  683 => 333,  675 => 330,  667 => 325,  663 => 324,  656 => 319,  650 => 317,  647 => 316,  644 => 315,  631 => 313,  626 => 312,  624 => 311,  617 => 306,  611 => 304,  607 => 302,  605 => 301,  598 => 296,  595 => 295,  586 => 293,  581 => 292,  577 => 290,  575 => 289,  568 => 284,  562 => 282,  558 => 280,  556 => 279,  549 => 274,  543 => 272,  539 => 270,  537 => 269,  529 => 263,  523 => 260,  520 => 259,  516 => 257,  514 => 256,  511 => 255,  509 => 254,  502 => 249,  496 => 246,  493 => 245,  489 => 243,  487 => 242,  484 => 241,  482 => 240,  475 => 235,  469 => 232,  466 => 231,  462 => 229,  460 => 228,  457 => 227,  455 => 226,  448 => 221,  442 => 218,  439 => 217,  435 => 215,  433 => 214,  430 => 213,  428 => 212,  411 => 197,  407 => 195,  397 => 187,  395 => 186,  387 => 180,  385 => 179,  382 => 178,  380 => 177,  373 => 172,  363 => 164,  359 => 162,  357 => 161,  354 => 160,  352 => 159,  345 => 154,  335 => 146,  331 => 144,  329 => 143,  326 => 142,  324 => 141,  317 => 136,  307 => 128,  303 => 126,  301 => 125,  298 => 124,  296 => 123,  289 => 118,  274 => 105,  270 => 103,  268 => 102,  265 => 101,  263 => 100,  256 => 95,  245 => 86,  241 => 84,  239 => 83,  236 => 82,  234 => 81,  227 => 76,  216 => 67,  212 => 65,  210 => 64,  207 => 63,  205 => 62,  198 => 57,  187 => 48,  183 => 46,  181 => 45,  178 => 44,  176 => 43,  159 => 28,  153 => 25,  149 => 23,  147 => 22,  143 => 21,  133 => 14,  128 => 13,  118 => 12,  100 => 10,  81 => 9,  70 => 1,  68 => 7,  66 => 5,  64 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@admin/default_frame.twig' %}

{% set menus = ['store', 'plugin', 'plugin_list'] %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% set menus = ['store', 'plugin', 'plugin_list'] %}

{% block title %}セキュリティチェックプラグイン{% endblock %}
{% block sub_title %}{% endblock %}

{% block main %}
    <form role=\"form\" method=\"post\" action=\"{{ url('securitychecker42_admin_config_check') }}\">
        {{ form_widget(form._token) }}
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <p>EC-CUBEのセキュリティチェックリストに基づいた、セキュリティチェックをします。</p>
                            <p>前回確認日時: {{ target.check_date|default('未確認') }}</p>
                        {% if app.session.flashBag.has('eccube.admin.securitychecker3.warning') %}
                            <div class=\"alert alert-warning\">
                                <p>本モジュールでは、EC-CUBE旧バージョンの脆弱性や、カスタマイズやプラグインにより生じた脆弱性はチェックできません。</p>
                                <p><a href=\"https://www.ec-cube.net/info/weakness/index.php?version={{ constant('Eccube\\\\Common\\\\Constant::VERSION') }}\" target=\"_blank\">こちらのEC-CUBE脆弱性情報も必ずご確認ください。</a></p>
                        </div>
                        {% endif %}
                    </div><!-- /.box-header -->
                    <div class=\"card-body\">
                        <h4>基本チェック</h4>
                        <div class=\"row\">
                            <div class=\"col\">
                                <p>
                                    公開チェックではデータ漏洩、セッションハイジャックリスクが高いと想定されるファイルに対するチェックを実行しております。<br>
                                    セキュリティ対応申告書などに記載の「srcディレクトリ配下が公開されていないこと」のような項目に対して網羅的に確認したい場合は対象のディレクトリ/ファイルをより広く確認している<a href=\"https://www.ec-cube.net/lp/security-check/\" target=\"_blank\">セルフチェックツール</a>をご活用ください。<br>
                                    いずれの方法でも、EC-CUBE本体のディレクトリ構成を変更されている場合はチェックが動作しない可能性がありますのでご注意ください。<br>
                                </p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-5\"><span>var 以下のファイル、フォルダが公開されていないか</span></div>
                            <div class=\"col mb-2\">
                                {% if target.var is not defined %}
                                    <p>未確認</p>
                                {% elseif target.var == false or target.var is empty %}
                                    <p>問題ありません</p>
                                {% else %}
                                    <p class=\"alert alert-danger\">
                                        var フォルダが外部から存在確認出来ます。
                                    </p>
                                    <p class=\"remark\">.htaccess というファイル名で、以下の内容のファイルを作成し、 var フォルダにアップロードしてください。アップロード後、再度セキュリティチェックを実行してください。</p>
                                    <pre>
order allow,deny
deny from all
                                    </pre>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-5\"><span>vendor 以下のファイル、フォルダが公開されていないか</span></div>
                            <div class=\"col mb-2\">
                                {% if target.vendor is not defined %}
                                    <p>未確認</p>
                                {% elseif target.vendor == false or target.vendor is empty %}
                                    <p>問題ありません</p>
                                {% else %}
                                    <p class=\"alert alert-danger\">
                                        vendor フォルダが外部から存在確認出来ます。
                                    </p>
                                    <p class=\"remark\">.htaccess というファイル名で、以下の内容のファイルを作成し、 vendor フォルダにアップロードしてください。アップロード後、再度セキュリティチェックを実行してください。</p>
                                    <pre>
order allow,deny
deny from all
                                    </pre>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-5\">codeception が公開されていないか</div>
                            <div class=\"col mb-2\">
                                {% if target.codeception is not defined %}
                                    <p>未確認</p>
                                {% elseif target.codeception == false or target.codeception is empty %}
                                    <p>問題ありません</p>
                                {% else %}
                                    <p class=\"alert alert-danger\">
                                        codeception フォルダが外部から存在確認出来ます
                                    </p>
                                    <p class=\"remark\">
                                        通常の運用では使用しないプログラムが含まれています。
                                        codeception フォルダを削除してください。
                                    </p>

                                {% endif %}
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-5\">.env が公開されていないか</div>
                            <div class=\"col mb-2\">
                                {% if target.dotenv is not defined %}
                                    <p>未確認</p>
                                {% elseif target.dotenv == false or target.dotenv is empty %}
                                    <p>問題ありません</p>
                                {% else %}
                                    <p class=\"alert alert-danger\">
                                        .env ファイルが外部から存在確認出来ます
                                    </p>
                                    <p class=\"remark\">
                                    EC-CUBE をインストールしたフォルダの .htaccess ファイルに以下の内容を追加し、保存してください。
                                    </p>
<textarea class=\"form-control\" style=\"height: 150px\" disabled=\"disabled\">
&lt;FilesMatch &quot;^composer|^COPYING|^\\.env|^\\.maintenance|^Procfile|^app\\.json|^gulpfile\\.js|^package\\.json|^package-lock\\.json|web\\.config|^Dockerfile|\\.(ini|lock|dist|git|sh|bak|swp|env|twig|yml|yaml|dockerignore)\$&quot;&gt;
    order allow,deny
    deny from all
&lt;/FilesMatch&gt;
</textarea>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">デバッグモードが有効になっていないか</label>
                            <div class=\"col mb-2\">
                                {% if target.debug_mode is not defined %}
                                    <p>未確認</p>
                                {% elseif target.debug_mode == false %}
                                    <p>問題ありません</p>
                                {% else %}
                                    <p class=\"alert alert-danger\">
                                        デバッグモードが有効になっているようです
                                    </p>
                                    <p class=\"remark\">
                                        .env ファイルを確認し、 APP_ENV=prod に設定してください
                                    </p>

                                {% endif %}
                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">SSLが導入されているか</label>
                            <div class=\"col mb-2\">
                                {% if target.ssl is not defined %}
                                    <p>未確認</p>
                                {% elseif target.ssl == false %}
                                    <p>問題ありません</p>
                                {% else %}
                                    <p class=\"alert alert-danger\">
                                        SSLが強制されておらず、平文で情報がやり取りされておりますので情報が漏洩する可能性があります。
                                    </p>
                                    <p class=\"remark\">
                                        常時SSLの利用をご検討ください。
                                    </p>

                                {% endif %}
                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">管理画面へのアクセスには常に SSL を利用しているか</label>
                            <div class=\"col mb-2\">
                                {% if target.force_ssl is not defined %}
                                    <p>未確認</p>
                                {% elseif target.force_ssl == false %}
                                    <p>問題ありません</p>
                                {% else %}
                                    <p class=\"alert alert-danger\">
                                        管理画面へのアクセスでSSLが強制されておらず、平文で情報がやり取りされておりますので情報が漏洩する可能性があります。
                                    </p>
                                    <p class=\"remark\">
                                        SSLの導入後に、システム設定＞セキュリティ設定より、SSLを強制するを設定してください。
                                    </p>

                                {% endif %}
                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">TRUSTED_HOSTSを設定しているか</label>
                            <div class=\"col mb-2\">
                                {% if target.trusted_hosts_is_checked is not defined %}
                                    <p>未確認</p>
                                {% elseif target.trusted_hosts_is_empty is defined and target.trusted_hosts_is_empty %}
                                    <p class=\"alert alert-danger\">
                                        信頼できるホスト名が設定されていません。
                                    </p>
                                    <p class=\"remark\">
                                        システム設定＞セキュリティ設定より、信頼できるホスト名を設定してください。
                                    </p>
                                {% elseif target.trusted_hosts_is_not_exact_match is defined and target.trusted_hosts_is_not_exact_match %}
                                    <p class=\"alert alert-danger\">
                                        信頼できるホスト名が完全一致で設定されていません。
                                    </p>
                                    <p class=\"remark\">
                                        システム設定＞セキュリティ設定より、信頼できるホスト名を設定してください。
                                        正規表現で完全一致となるよう設定することを推奨します。
                                    </p>
                                {% else %}
                                    <p>問題ありません</p>
                                {% endif %}
                            </div>
                        </div>
                        <h4>不正が疑われるデータのチェック</h4>
                        <div class=\"row\">
                            <div class=\"col\">
                                <p>
                                    不正なコードに利用される「&lt;」や「&gt;」の記号を含むデータをチェック対象としています。<br>
                                    実際には不正でないデータも抽出される可能性がありますので、対象のデータが検出された場合はダウンロードして内容を確認してください。<br>
                                    ご自身で判断がつかない場合は<a href=\"https://www.ec-cube.net/info/security/\" target=\"_blank\">公式サイトで紹介されている専門企業</a>へご相談ください。
                                </p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">会員情報</label>
                            <div class=\"col mb-2\">
                                {% if target.unsafe_customers is not defined %}
                                    <p>未確認</p>
                                {% elseif target.unsafe_customers == 0 %}
                                    <p>検出されませんでした</p>
                                {% else %}
                                    <p class=\"alert alert-danger\">
                                        不正と疑われるデータが存在します。<a href=\"{{ url('securitychecker42_admin_config_download', { 'type':'customer' }) }}\" class=\"link\">対象の会員情報をダウンロード</a>
                                    </p>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">お届け先情報</label>
                            <div class=\"col mb-2\">
                                {% if target.unsafe_customers_address is not defined %}
                                    <p>未確認</p>
                                {% elseif target.unsafe_customers_address == 0 %}
                                    <p>検出されませんでした</p>
                                {% else %}
                                    <p class=\"alert alert-danger\">
                                        不正と疑われるデータが存在します。<a href=\"{{ url('securitychecker42_admin_config_download', { 'type':'customer_address' }) }}\" class=\"link\">対象のお届け先情報をダウンロード</a>
                                    </p>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">受注情報</label>
                            <div class=\"col mb-2\">
                                {% if target.unsafe_orders is not defined %}
                                    <p>未確認</p>
                                {% elseif target.unsafe_orders == 0 %}
                                    <p>検出されませんでした</p>
                                {% else %}
                                    <p class=\"alert alert-danger\">
                                        不正と疑われるデータが存在します。<a href=\"{{ url('securitychecker42_admin_config_download', { 'type':'order' }) }}\" class=\"link\">対象の受注情報をダウンロード</a>
                                    </p>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">配送情報</label>
                            <div class=\"col mb-2\">
                                {% if target.unsafe_shippings is not defined %}
                                    <p>未確認</p>
                                {% elseif target.unsafe_shippings == 0 %}
                                    <p>検出されませんでした</p>
                                {% else %}
                                    <p class=\"alert alert-danger\">
                                        不正と疑われるデータが存在します。<a href=\"{{ url('securitychecker42_admin_config_download', { 'type':'shipping' }) }}\" class=\"link\">対象の配送情報をダウンロード</a>
                                    </p>
                                {% endif %}
                            </div>
                        </div>
                        <h4>環境情報</h4>
                        <div class=\"row\">
                            <label class=\"col-5\">PHPバージョン</label>
                            <div class=\"col mb-2\">
                                {% if target.php_version is not defined %}
                                    <p>未確認</p>
                                {% else %}
                                    {{ target.php_version }}
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">データーベースバージョン</label>
                            <div class=\"col mb-2\">
                                {% if target.db_version is not defined %}
                                    <p>未確認</p>
                                {% else %}
                                    {{ target.db_version }}
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">サイトURL</label>
                            <div class=\"col mb-2\">
                                {% if target.site_url is not defined %}
                                    <p>未確認</p>
                                {% else %}
                                    {% for url in target.site_url %}
                                        <p>{{ url }}</p>
                                    {% endfor %}
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">EC-CUBEバージョン</label>
                            <div class=\"col mb-2\">
                                {% if target.eccube_version is not defined %}
                                    <p>未確認</p>
                                {% else %}
                                    {{ target.eccube_version }}
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">利用しているプラグイン</label>
                            <div class=\"col mb-2\">
                                {% if target.plugins is defined %}
                                    {% for plugin in target.plugins %}
                                        <p>{{ plugin.plugin_name }}({{ plugin.plugin_code }}) version{{ plugin.plugin_version }}</p>
                                    {% endfor %}
                                {% endif %}
                                {% if target.public_key is defined %}
                                    <p><small>認証キー: {{ target.public_key }}</small></p>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"row\">
                            <label class=\"col-5\">株式会社イーシーキューブと共有</label>
                            <div class=\"col mb-2\">
                                {{ form_widget(form.eccube_share) }}
                                {{ form_errors(form.eccube_share) }}
                                <small>共有したチェック結果は、セキュリティリスクの分析・伝達等を目的としてのみ利用されます。</small>
                            </div>
                        </div>

                        <div class=\"row {% if form.tools_agreement.vars.errors|length %} has-error {% endif %}\">
                            <div class=\"col-sm-12\">
                                <a href=\"https://www.ec-cube.net/info/security/tools_agreement.php\" target=\"_blank\">EC-CUBEセキュリティチェックモジュール・プラグイン利用約款</a>に同意いただける場合は「同意する」にチェックを入れ、「セキュリティチェック実行」ボタンをクリックしてください。
                                {{ form_widget(form.tools_agreement) }}
                                {% if form.tools_agreement.vars.errors|length %}<p class=\"alert alert-danger\">セキュリティチェックを実行する場合は、必ず利用約款への同意をお願い致します。</p>{% endif %}
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
                </div><!-- /.col -->
                <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\"
                               href=\"{{ url('admin_store_plugin') }}\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                <span>戻る</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\"
                                        type=\"submit\">セキュリティチェックを実行</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
{% endblock main %}
", "Securitychecker42/Resource/template/admin/config.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\Securitychecker42\\Resource\\template\\admin\\config.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3, "form_theme" => 5, "if" => 22, "for" => 292);
        static $filters = array("escape" => 21, "default" => 21, "length" => 330);
        static $functions = array("url" => 13, "form_widget" => 14, "constant" => 25, "form_errors" => 325);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'if', 'for'],
                ['escape', 'default', 'length'],
                ['url', 'form_widget', 'constant', 'form_errors']
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
