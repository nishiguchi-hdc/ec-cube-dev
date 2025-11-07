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

/* EccubePaymentLite42/Resource/template/admin/config.twig */
class __TwigTemplate_7c534784ba34f0e77d703caa1f4360d1 extends Template
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
        // line 1
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/config.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/config.twig"));

        // line 3
        $context["menus"] = ["setting", "gmo_epsilon_config"];
        // line 8
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), ["@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "EccubePaymentLite42/Resource/template/admin/config.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.title"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.sub_title"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 11
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 14
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.core.min.js", "admin"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.widget.min.js", "admin"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js", "admin"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js", "admin"), "html", null, true);
        echo "\"></script>
<script>
    // 降順にソートする
    \$(function() {
        var \$items_wrapper = \$('.sortable-container');
        var \$items = \$('.sortable-item');
        \$items.sort(function(a, b) {
            return parseInt(\$(a).find('.sort-no').val()) > parseInt(\$(b).find('.sort-no').val());
        });
        \$items.each(function() {
            \$items_wrapper.append(\$(this).remove());
        })
    });

    // 並び替え後にsort noを更新
    function updateSortNo() {
        var \$items = \$('.sortable-container').find('.sortable-item');
        \$items.each(function() {
            \$(this).find('.sort-no').val(\$items.index(this) + 1);
        });
    }
    // 表示順の更新を行う
    function moveSortNo() {
        updateSortNo();
        redrawDisableAllows();
    }
    // 最初と最後の↑↓を再描画
    function redrawDisableAllows() {
        var items = \$('.sortable-item');
        items.find('a').removeClass('disabled');
        items.first().find('a.action-up').addClass('disabled');
        items.last().find('a.action-down').addClass('disabled');
    }
    \$(function() {
        var \$collectionHolder = \$('#ip_black_list_group');
        var index = \$collectionHolder.find('.ip_black_list_item').length;
        redrawDisableAllows();

        \$('#add_ip_black_list_button').on('click', function(event) {

            // 追加するお届け時間名を取得
            var ipBlackList = \$('#add_ip_black_list_value').val();

            if (ipBlackList == '') {
                return;
            }

            var prototype = \$collectionHolder.data('prototype');

            var newForm = prototype.replace(/__name__/g, index);
            var newForm = newForm.replace(/__value__/g, ipBlackList);

            // 要素を追加
            var \$lastRow = \$('#ip_black_list_group > li:last');
            \$lastRow.after(newForm);

            // ブラックリストIP名を入れる
            var inputId = '#config_ip_black_list_' + index + '_ip_address';
            \$(inputId).val(ipBlackList);
            \$(inputId).attr('data-origin-value', ipBlackList);

            // 入力欄を初期化
            \$('#add_ip_black_list_value').val('');

            // 要素数をインクリメント
            index++;

            moveSortNo();
        });
        \$('#ip_black_list_group').on('click', '.remove_ip_black_list_item', function(event) {
            event.preventDefault();

            \$(this).tooltip('hide');

            // 自身の行を削除.
            \$(event.target).parents('li').remove();

            moveSortNo();
        });
        // Drag and Drop
        \$('.sortable-container').sortable({
            items: '> .sortable-item',
            cursor: 'move',
            update: function(e, ui) {
                moveSortNo();
            }
        });
        // Up
        \$('#ip_black_list_group').on('click', 'a.action-up', function(e) {
            e.preventDefault();
            var current = \$(this).parents('li');
            if (current.prev().hasClass('sortable-item')) {
                current.prev().before(current);
                moveSortNo();
            }
        });
        // Down
        \$('#ip_black_list_group').on('click', 'a.action-down', function(e) {
            e.preventDefault();
            var current = \$(this).parents('li');
            if (current.next().hasClass('sortable-item')) {
                current.next().after(current);
                moveSortNo();
            }
        });

        // 編集
        \$('#ip_black_list_group').on('click', 'a.action-edit', function(e) {
            e.preventDefault();
            var current = \$(this).parents('li');
            current.find('.mode-view').addClass('d-none');
            current.find('.mode-edit').removeClass('d-none');
            current.find('.action-edit-submit').attr('disabled', false);
            current.find('.action-edit-cancel').attr('disabled', false);
        });

        // 編集決定
        \$('#ip_black_list_group').on('click', 'button.action-edit-submit', function(e) {
            e.preventDefault();
            var current = \$(this).parents('li');
            var value = current.find('.form-control').val();
            current.find('.display-label').text(value);
            current.find('.mode-view').removeClass('d-none');
            current.find('.mode-edit').addClass('d-none');
            current.find('[data-origin-value]').each(function(e) {
                \$(this).attr('data-origin-value', value);
            });
        });
        // 編集キャンセル
        \$('#ip_black_list_group').on('click', 'button.action-edit-cancel', function(e) {
            e.preventDefault();
            var current = \$(this).parents('li');
            current.find('[data-origin-value]').each(function(e) {
                \$(this).val(\$(this).attr('data-origin-value'));
            });
            var value = current.find('.form-control').val();
            current.find('.display-label').text(value);
            current.find('.mode-view').removeClass('d-none');
            current.find('.mode-edit').addClass('d-none');
        });
        // 編集時, エラーがあれば入力欄を表示.
        \$('#ip_black_list_group').find('.is-invalid').each(function(e) {
            var current = \$(this).parents('li');
            current.find('.mode-view').addClass('d-none');
            current.find('.mode-edit').removeClass('d-none');
        });
    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 167
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 168
        echo "
    <form role=\"form\" method=\"post\">

        ";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "_token", [], "any", false, false, true, 171), 171, $this->source), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">当プラグインのご利用にはイプシロン決済サービスへのお申込、ご契約が必要となります。<br/>
                            以下URLにてサービス料金ご確認の上、お申込手続きへお進み下さい。<br/>
                            <a href=\"https://www.ec-cube.net/product/epsilon.php#link01\" target=\"_blank\">https://www.ec-cube.net/product/epsilon.php#link01</a>
                        </div>
                        <div class=\"card-header\"><span>";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.header"), "html", null, true);
        echo "</span></div>
                        <!-- /.box-header -->
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.contract_code"), "html", null, true);
        echo "</span><span class=\"badge bg-primary ml-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.required"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 186
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "contract_code", [], "any", false, false, true, 186), 186, $this->source), 'widget');
        echo "
                                    ";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "contract_code", [], "any", false, false, true, 187), 187, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.environmental_setting"), "html", null, true);
        echo "</span><span class=\"badge bg-primary ml-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.required"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "environmental_setting", [], "any", false, false, true, 195), 195, $this->source), 'widget');
        echo "
                                    ";
        // line 196
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "environmental_setting", [], "any", false, false, true, 196), 196, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.credit_payment_setting"), "html", null, true);
        echo "</span><span class=\"badge bg-primary ml-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.required"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 204
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 204, $this->source); })()), "credit_payment_setting", [], "any", false, false, true, 204), 204, $this->source), 'widget');
        echo "
                                    ";
        // line 205
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), "credit_payment_setting", [], "any", false, false, true, 205), 205, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.use_payment"), "html", null, true);
        echo "</span><span class=\"badge bg-primary ml-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.required"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 213
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 213, $this->source); })()), "gmo_epsilon_payments", [], "any", false, false, true, 213), 213, $this->source), 'widget');
        echo "
                                    ";
        // line 214
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 214, $this->source); })()), "gmo_epsilon_payments", [], "any", false, false, true, 214), 214, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.use_convenience"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 222
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 222, $this->source); })()), "convenience_stores", [], "any", false, false, true, 222), 222, $this->source), 'widget');
        echo "
                                    ";
        // line 223
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 223, $this->source); })()), "convenience_stores", [], "any", false, false, true, 223), 223, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <span>";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.card_expiration_notification_days"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 233
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 233, $this->source); })()), "card_expiration_notification_days", [], "any", false, false, true, 233), 233, $this->source), 'widget');
        echo "
                                    ";
        // line 234
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 234, $this->source); })()), "card_expiration_notification_days", [], "any", false, false, true, 234), 234, $this->source), 'errors');
        echo "
                                    <span>有効期限切れの○日前</span>
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
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.section_regular"), "html", null, true);
        echo "</span></div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <span>";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.regular"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 254
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 254, $this->source); })()), "regular", [], "any", false, false, true, 254), 254, $this->source), 'widget');
        echo "
                                    ";
        // line 255
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 255, $this->source); })()), "regular", [], "any", false, false, true, 255), 255, $this->source), 'errors');
        echo "
                                    <span>";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.regular_message"), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\">
                                        <span>";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.regular_order_notification_email"), "html", null, true);
        echo "</span>
                                    </div>
                                    <span class=\"badge bg-primary ml-1\">
                                ";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "
                            </span>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 271
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 271, $this->source); })()), "regular_order_notification_email", [], "any", false, false, true, 271), 271, $this->source), 'widget');
        echo "
                                    ";
        // line 272
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 272, $this->source); })()), "regular_order_notification_email", [], "any", false, false, true, 272), 272, $this->source), 'errors');
        echo "
                                    <span>※ 定期課金機能を利用する場合は、「";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.regular_order_notification_email"), "html", null, true);
        echo "」は必須入力となります。</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\">
                                        <span>";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.my_page_regular_settings"), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 285
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 285, $this->source); })()), "my_page_regular_settings", [], "any", false, false, true, 285), 285, $this->source), 'widget');
        echo "
                                    ";
        // line 286
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 286, $this->source); })()), "my_page_regular_settings", [], "any", false, false, true, 286), 286, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\">
                                        <span>";
        // line 294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.next_delivery_date_changeable_range_days"), "html", null, true);
        echo "</span>
                                        <span class=\"badge bg-primary ml-1\">
                                    ";
        // line 296
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "
                                </span>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 301
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 301, $this->source); })()), "next_delivery_date_changeable_range_days", [], "any", false, false, true, 301), 301, $this->source), 'widget');
        echo "
                                    ";
        // line 302
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 302, $this->source); })()), "next_delivery_date_changeable_range_days", [], "any", false, false, true, 302), 302, $this->source), 'errors');
        echo "
                                    <span>次回配送予定日の前後○日</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\">
                                        <span>";
        // line 311
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.first_delivery_days"), "html", null, true);
        echo "</span>
                                        <span class=\"badge bg-primary ml-1\">
                                    ";
        // line 313
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "
                                </span>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 318
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 318, $this->source); })()), "first_delivery_days", [], "any", false, false, true, 318), 318, $this->source), 'widget');
        echo "
                                    ";
        // line 319
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 319, $this->source); })()), "first_delivery_days", [], "any", false, false, true, 319), 319, $this->source), 'errors');
        echo "
                                    <span>受注日の○日後</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\">
                                        <span>";
        // line 328
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.next_delivery_days_at_regular_resumption"), "html", null, true);
        echo "</span>
                                        <span class=\"badge bg-primary ml-1\">
                                    ";
        // line 330
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "
                                </span>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 335
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 335, $this->source); })()), "next_delivery_days_at_regular_resumption", [], "any", false, false, true, 335), 335, $this->source), 'widget');
        echo "
                                    ";
        // line 336
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 336, $this->source); })()), "next_delivery_days_at_regular_resumption", [], "any", false, false, true, 336), 336, $this->source), 'errors');
        echo "
                                    <span>再開日の○日後</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\">
                                        <span>";
        // line 345
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.next_delivery_days_after_re_payment"), "html", null, true);
        echo "</span>
                                        <span class=\"badge bg-primary ml-1\">
                                    ";
        // line 347
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "
                                </span>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 352
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 352, $this->source); })()), "next_delivery_days_after_re_payment", [], "any", false, false, true, 352), 352, $this->source), 'widget');
        echo "
                                    ";
        // line 353
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 353, $this->source); })()), "next_delivery_days_after_re_payment", [], "any", false, false, true, 353), 353, $this->source), 'errors');
        echo "
                                    <span>再決済日の○日後</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\">
                                        <span>";
        // line 362
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.regular_order_deadline"), "html", null, true);
        echo "</span>
                                        <span class=\"badge bg-primary ml-1\">
                                    ";
        // line 364
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "
                                </span>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 369
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 369, $this->source); })()), "regular_order_deadline", [], "any", false, false, true, 369), 369, $this->source), 'widget');
        echo "
                                    ";
        // line 370
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 370, $this->source); })()), "regular_order_deadline", [], "any", false, false, true, 370), 370, $this->source), 'errors');
        echo "
                                    <span>次回配送予定日の○日前</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\">
                                        <span>";
        // line 379
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.regular_delivery_notification_email_days"), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 383
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 383, $this->source); })()), "regular_delivery_notification_email_days", [], "any", false, false, true, 383), 383, $this->source), 'widget');
        echo "
                                    ";
        // line 384
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 384, $this->source); })()), "regular_delivery_notification_email_days", [], "any", false, false, true, 384), 384, $this->source), 'errors');
        echo "
                                    <span>次回配送予定日の○日前</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\">
                                        <span>";
        // line 393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.regular_stoppable_count"), "html", null, true);
        echo "</span>
                                        <span class=\"badge bg-primary ml-1\">";
        // line 394
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 398
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 398, $this->source); })()), "regular_stoppable_count", [], "any", false, false, true, 398), 398, $this->source), 'widget');
        echo "
                                    ";
        // line 399
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 399, $this->source); })()), "regular_stoppable_count", [], "any", false, false, true, 399), 399, $this->source), 'errors');
        echo "
                                    <span>○回目以降は停止可能</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\">
                                        <span>";
        // line 408
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.regular_cancelable_count"), "html", null, true);
        echo "</span>
                                        <span class=\"badge bg-primary ml-1\">";
        // line 409
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 413
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 413, $this->source); })()), "regular_cancelable_count", [], "any", false, false, true, 413), 413, $this->source), 'widget');
        echo "
                                    ";
        // line 414
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 414, $this->source); })()), "regular_cancelable_count", [], "any", false, false, true, 414), 414, $this->source), 'errors');
        echo "
                                    <span>○回目以降は解約可能</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\">
                                        <span>";
        // line 423
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.regular_resumable_period"), "html", null, true);
        echo "</span>
                                        <span class=\"badge bg-primary ml-1\">";
        // line 424
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 428
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 428, $this->source); })()), "regular_resumable_period", [], "any", false, false, true, 428), 428, $this->source), 'widget');
        echo "
                                    ";
        // line 429
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 429, $this->source); })()), "regular_resumable_period", [], "any", false, false, true, 429), 429, $this->source), 'errors');
        echo "
                                    <span>未入力の場合無制限となります</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" title=\"通常購入時と比較した定期受注時のポイント付与倍率を設定します。\">
                                        <span>";
        // line 438
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.regular_point_magnification"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></span>
                                        <span class=\"badge bg-primary ml-1\">";
        // line 439
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 443
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 443, $this->source); })()), "regular_point_magnification", [], "any", false, false, true, 443), 443, $this->source), 'widget', ["attr" => ["style" => "display:inline-block; width:10%"]]);
        echo "
                                    ";
        // line 444
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 444, $this->source); })()), "regular_point_magnification", [], "any", false, false, true, 444), 444, $this->source), 'errors');
        echo "
                                    <div class=\"col-auto text-start d-inline-block\">
                                        <span>倍</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\"  data-tooltip=\"true\" data-placement=\"top\" title=\"設定した定期回数に達した場合、対象の会員メールアドレス当てに「定期指定回数お知らせメール」を送信します。\">
                                        <span>";
        // line 455
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.regular_specified_count_notification_mail"), "html", null, true);
        echo "</span>
                                        <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                    </div>

                                </div>
                                <div class=\"col-2\">
                                    ";
        // line 461
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 461, $this->source); })()), "regular_specified_count_notification_mail", [], "any", false, false, true, 461), 461, $this->source), 'widget');
        echo "
                                    ";
        // line 462
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 462, $this->source); })()), "regular_specified_count_notification_mail", [], "any", false, false, true, 462), 462, $this->source), 'errors');
        echo "
                                </div>
                                <div class=\"col-auto text-start\">
                                    <span>回目に通知</span>
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
        // line 477
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.access_block"), "html", null, true);
        echo "</span></div>
                        <div class=\"card-body\">
                            <span>";
        // line 479
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.access_block_message");
        echo "</span>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 483
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.block_mode"), "html", null, true);
        echo "</span><span class=\"badge bg-primary ml-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.required"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 485
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 485, $this->source); })()), "block_mode", [], "any", false, false, true, 485), 485, $this->source), 'widget');
        echo "
                                    ";
        // line 486
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 486, $this->source); })()), "block_mode", [], "any", false, false, true, 486), 486, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 492
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.access_frequency"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    <div class=\"row justify-content-start\">
                                        <div class=\"col-2\">
                                            ";
        // line 496
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 496, $this->source); })()), "access_frequency_time", [], "any", false, false, true, 496), 496, $this->source), 'widget');
        echo "
                                        </div>
                                        <div class=\"col-auto text-center\">
                                            ";
        // line 499
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.access_frequency_message_1"), "html", null, true);
        echo "
                                        </div>
                                        <div class=\"col-2\">
                                            ";
        // line 502
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 502, $this->source); })()), "access_frequency", [], "any", false, false, true, 502), 502, $this->source), 'widget');
        echo "
                                        </div>
                                        <div class=\"col-auto text-center\">
                                            ";
        // line 505
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.access_frequency_message_2"), "html", null, true);
        echo "
                                        </div>
                                        ";
        // line 507
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 507, $this->source); })()), "access_frequency", [], "any", false, false, true, 507), 507, $this->source), 'errors');
        echo "
                                        ";
        // line 508
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 508, $this->source); })()), "access_frequency_time", [], "any", false, false, true, 508), 508, $this->source), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 515
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.block_time"), "html", null, true);
        echo "</span></div>
                                <div class=\"col-2\">
                                    ";
        // line 517
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 517, $this->source); })()), "block_time", [], "any", false, false, true, 517), 517, $this->source), 'widget');
        echo "
                                    ";
        // line 518
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 518, $this->source); })()), "block_time", [], "any", false, false, true, 518), 518, $this->source), 'errors');
        echo "
                                </div>
                                <div class=\"col-auto text-start\">
                                    <span>";
        // line 521
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.block_time_message"), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 527
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.white_list"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 529
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 529, $this->source); })()), "white_list", [], "any", false, false, true, 529), 529, $this->source), 'widget');
        echo "
                                    ";
        // line 530
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 530, $this->source); })()), "white_list", [], "any", false, false, true, 530), 530, $this->source), 'errors');
        echo "
                                    <span>";
        // line 531
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.white_list_message"), "html", null, true);
        echo "</span>
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
                    <div class=\"card rounded border-0 mb-2\">
                        <div class=\"card-header\"><span>";
        // line 543
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.ip_black_list"), "html", null, true);
        echo "</span></div>
                        <div id=\"ex-ip-black-list\" class=\"card-body p-0\">
                                <ul id=\"ip_black_list_group\"
                                    class=\"list-group list-group-flush sortable-container\"
                                    data-prototype=\"";
        // line 547
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@EccubePaymentLite42/admin/ip_black_list_prototype.twig", ["form" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 547, $this->source); })()), "ip_black_list", [], "any", false, false, true, 547), "vars", [], "any", false, false, true, 547), "prototype", [], "any", false, false, true, 547)]));
        echo "\"
                                >
                                    <li class=\"list-group-item\">
                                        <div class=\"row\">

                                            <div class=\"col-3\">
                                                <span>";
        // line 553
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.black_list"), "html", null, true);
        echo "</span>
                                            </div>
                                            <div class=\"col-auto d-flex align-items-center\">
                                                <input id=\"add_ip_black_list_value\" class=\"form-control\" type=\"text\">
                                            </div>
                                            <div class=\"col-auto d-flex align-items-center\">
                                                <button id=\"add_ip_black_list_button\" class=\"btn btn-ec-regular\" type=\"button\">
                                                    ";
        // line 560
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
        echo "
                                                </button>
                                            </div>

                                        </div>
                                    </li>
                                    ";
        // line 566
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 566, $this->source); })()), "ip_black_list", [], "any", false, false, true, 566));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 567
            echo "                                        ";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@EccubePaymentLite42/admin/ip_black_list_prototype.twig", ["form" => $context["child"]]);
            echo "
                                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 569
        echo "                                </ul>
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
        // line 583
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin");
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                <span>";
        // line 585
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.back"), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\"
                                        type=\"submit\">";
        // line 593
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.save"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <form action=\"";
        // line 601
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eccube_payment_lite42_admin_update_payment_table");
        echo "\" method=\"post\">
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-2\">
                        <div class=\"card-header\"><span>";
        // line 606
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.update_payment_block"), "html", null, true);
        echo "</span></div>
                        <div class=\"card-body p-0\">
                            <div class=\"list-group list-group-flush sortable-container\">
                                <div class=\"list-group-item\">
                                    <div class=\"form-row\">
                                        <div class=\"col-auto d-flex align-items-center\">
                                            <button class=\"btn btn-ec-regular\" type=\"submit\">
                                                ";
        // line 613
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("gmo_epsilon.admin.config.update"), "html", null, true);
        echo "
                                            </button>
                                        </div>
                                    </div>
                                </div>
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
        return "EccubePaymentLite42/Resource/template/admin/config.twig";
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
        return array (  1134 => 613,  1124 => 606,  1116 => 601,  1105 => 593,  1094 => 585,  1089 => 583,  1073 => 569,  1056 => 567,  1039 => 566,  1030 => 560,  1020 => 553,  1011 => 547,  1004 => 543,  989 => 531,  985 => 530,  981 => 529,  976 => 527,  967 => 521,  961 => 518,  957 => 517,  952 => 515,  942 => 508,  938 => 507,  933 => 505,  927 => 502,  921 => 499,  915 => 496,  908 => 492,  899 => 486,  895 => 485,  888 => 483,  881 => 479,  876 => 477,  858 => 462,  854 => 461,  845 => 455,  831 => 444,  827 => 443,  820 => 439,  816 => 438,  804 => 429,  800 => 428,  793 => 424,  789 => 423,  777 => 414,  773 => 413,  766 => 409,  762 => 408,  750 => 399,  746 => 398,  739 => 394,  735 => 393,  723 => 384,  719 => 383,  712 => 379,  700 => 370,  696 => 369,  688 => 364,  683 => 362,  671 => 353,  667 => 352,  659 => 347,  654 => 345,  642 => 336,  638 => 335,  630 => 330,  625 => 328,  613 => 319,  609 => 318,  601 => 313,  596 => 311,  584 => 302,  580 => 301,  572 => 296,  567 => 294,  556 => 286,  552 => 285,  545 => 281,  534 => 273,  530 => 272,  526 => 271,  519 => 267,  513 => 264,  502 => 256,  498 => 255,  494 => 254,  488 => 251,  481 => 247,  465 => 234,  461 => 233,  455 => 230,  445 => 223,  441 => 222,  436 => 220,  427 => 214,  423 => 213,  416 => 211,  407 => 205,  403 => 204,  396 => 202,  387 => 196,  383 => 195,  376 => 193,  367 => 187,  363 => 186,  356 => 184,  349 => 180,  337 => 171,  332 => 168,  322 => 167,  163 => 17,  159 => 16,  155 => 15,  150 => 14,  140 => 13,  129 => 11,  119 => 10,  100 => 6,  81 => 5,  70 => 1,  68 => 8,  66 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@admin/default_frame.twig' %}

{% set menus = ['setting', 'gmo_epsilon_config'] %}

{% block title %}{{ 'gmo_epsilon.admin.config.title'|trans }}{% endblock %}
{% block sub_title %}{{ 'gmo_epsilon.admin.config.sub_title'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block stylesheet %}

{% endblock stylesheet %}
{% block javascript %}
<script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.core.min.js', 'admin') }}\"></script>
<script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.widget.min.js', 'admin') }}\"></script>
<script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js', 'admin') }}\"></script>
<script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js', 'admin') }}\"></script>
<script>
    // 降順にソートする
    \$(function() {
        var \$items_wrapper = \$('.sortable-container');
        var \$items = \$('.sortable-item');
        \$items.sort(function(a, b) {
            return parseInt(\$(a).find('.sort-no').val()) > parseInt(\$(b).find('.sort-no').val());
        });
        \$items.each(function() {
            \$items_wrapper.append(\$(this).remove());
        })
    });

    // 並び替え後にsort noを更新
    function updateSortNo() {
        var \$items = \$('.sortable-container').find('.sortable-item');
        \$items.each(function() {
            \$(this).find('.sort-no').val(\$items.index(this) + 1);
        });
    }
    // 表示順の更新を行う
    function moveSortNo() {
        updateSortNo();
        redrawDisableAllows();
    }
    // 最初と最後の↑↓を再描画
    function redrawDisableAllows() {
        var items = \$('.sortable-item');
        items.find('a').removeClass('disabled');
        items.first().find('a.action-up').addClass('disabled');
        items.last().find('a.action-down').addClass('disabled');
    }
    \$(function() {
        var \$collectionHolder = \$('#ip_black_list_group');
        var index = \$collectionHolder.find('.ip_black_list_item').length;
        redrawDisableAllows();

        \$('#add_ip_black_list_button').on('click', function(event) {

            // 追加するお届け時間名を取得
            var ipBlackList = \$('#add_ip_black_list_value').val();

            if (ipBlackList == '') {
                return;
            }

            var prototype = \$collectionHolder.data('prototype');

            var newForm = prototype.replace(/__name__/g, index);
            var newForm = newForm.replace(/__value__/g, ipBlackList);

            // 要素を追加
            var \$lastRow = \$('#ip_black_list_group > li:last');
            \$lastRow.after(newForm);

            // ブラックリストIP名を入れる
            var inputId = '#config_ip_black_list_' + index + '_ip_address';
            \$(inputId).val(ipBlackList);
            \$(inputId).attr('data-origin-value', ipBlackList);

            // 入力欄を初期化
            \$('#add_ip_black_list_value').val('');

            // 要素数をインクリメント
            index++;

            moveSortNo();
        });
        \$('#ip_black_list_group').on('click', '.remove_ip_black_list_item', function(event) {
            event.preventDefault();

            \$(this).tooltip('hide');

            // 自身の行を削除.
            \$(event.target).parents('li').remove();

            moveSortNo();
        });
        // Drag and Drop
        \$('.sortable-container').sortable({
            items: '> .sortable-item',
            cursor: 'move',
            update: function(e, ui) {
                moveSortNo();
            }
        });
        // Up
        \$('#ip_black_list_group').on('click', 'a.action-up', function(e) {
            e.preventDefault();
            var current = \$(this).parents('li');
            if (current.prev().hasClass('sortable-item')) {
                current.prev().before(current);
                moveSortNo();
            }
        });
        // Down
        \$('#ip_black_list_group').on('click', 'a.action-down', function(e) {
            e.preventDefault();
            var current = \$(this).parents('li');
            if (current.next().hasClass('sortable-item')) {
                current.next().after(current);
                moveSortNo();
            }
        });

        // 編集
        \$('#ip_black_list_group').on('click', 'a.action-edit', function(e) {
            e.preventDefault();
            var current = \$(this).parents('li');
            current.find('.mode-view').addClass('d-none');
            current.find('.mode-edit').removeClass('d-none');
            current.find('.action-edit-submit').attr('disabled', false);
            current.find('.action-edit-cancel').attr('disabled', false);
        });

        // 編集決定
        \$('#ip_black_list_group').on('click', 'button.action-edit-submit', function(e) {
            e.preventDefault();
            var current = \$(this).parents('li');
            var value = current.find('.form-control').val();
            current.find('.display-label').text(value);
            current.find('.mode-view').removeClass('d-none');
            current.find('.mode-edit').addClass('d-none');
            current.find('[data-origin-value]').each(function(e) {
                \$(this).attr('data-origin-value', value);
            });
        });
        // 編集キャンセル
        \$('#ip_black_list_group').on('click', 'button.action-edit-cancel', function(e) {
            e.preventDefault();
            var current = \$(this).parents('li');
            current.find('[data-origin-value]').each(function(e) {
                \$(this).val(\$(this).attr('data-origin-value'));
            });
            var value = current.find('.form-control').val();
            current.find('.display-label').text(value);
            current.find('.mode-view').removeClass('d-none');
            current.find('.mode-edit').addClass('d-none');
        });
        // 編集時, エラーがあれば入力欄を表示.
        \$('#ip_black_list_group').find('.is-invalid').each(function(e) {
            var current = \$(this).parents('li');
            current.find('.mode-view').addClass('d-none');
            current.find('.mode-edit').removeClass('d-none');
        });
    });
</script>
{% endblock %}

{% block main %}

    <form role=\"form\" method=\"post\">

        {{ form_widget(form._token) }}
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">当プラグインのご利用にはイプシロン決済サービスへのお申込、ご契約が必要となります。<br/>
                            以下URLにてサービス料金ご確認の上、お申込手続きへお進み下さい。<br/>
                            <a href=\"https://www.ec-cube.net/product/epsilon.php#link01\" target=\"_blank\">https://www.ec-cube.net/product/epsilon.php#link01</a>
                        </div>
                        <div class=\"card-header\"><span>{{ 'gmo_epsilon.admin.config.header'|trans }}</span></div>
                        <!-- /.box-header -->
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'gmo_epsilon.admin.config.contract_code'|trans }}</span><span class=\"badge bg-primary ml-1\">{{ 'gmo_epsilon.admin.config.required'|trans }}</span></div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.contract_code) }}
                                    {{ form_errors(form.contract_code) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'gmo_epsilon.admin.config.environmental_setting'|trans }}</span><span class=\"badge bg-primary ml-1\">{{ 'gmo_epsilon.admin.config.required'|trans }}</span></div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.environmental_setting) }}
                                    {{ form_errors(form.environmental_setting) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'gmo_epsilon.admin.config.credit_payment_setting'|trans }}</span><span class=\"badge bg-primary ml-1\">{{ 'gmo_epsilon.admin.config.required'|trans }}</span></div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.credit_payment_setting) }}
                                    {{ form_errors(form.credit_payment_setting) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'gmo_epsilon.admin.config.use_payment'|trans }}</span><span class=\"badge bg-primary ml-1\">{{ 'gmo_epsilon.admin.config.required'|trans }}</span></div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.gmo_epsilon_payments) }}
                                    {{ form_errors(form.gmo_epsilon_payments) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'gmo_epsilon.admin.config.use_convenience'|trans }}</span></div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.convenience_stores) }}
                                    {{ form_errors(form.convenience_stores) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <span>{{ 'gmo_epsilon.admin.config.card_expiration_notification_days'|trans }}</span>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.card_expiration_notification_days) }}
                                    {{ form_errors(form.card_expiration_notification_days) }}
                                    <span>有効期限切れの○日前</span>
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
                        <div class=\"card-header\"><span>{{ 'gmo_epsilon.admin.config.section_regular'|trans }}</span></div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <span>{{ 'gmo_epsilon.admin.config.regular'|trans }}</span>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.regular) }}
                                    {{ form_errors(form.regular) }}
                                    <span>{{ 'gmo_epsilon.admin.config.regular_message'|trans }}</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\">
                                        <span>{{ 'gmo_epsilon.admin.config.regular_order_notification_email'|trans }}</span>
                                    </div>
                                    <span class=\"badge bg-primary ml-1\">
                                {{ 'admin.common.required'|trans }}
                            </span>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.regular_order_notification_email) }}
                                    {{ form_errors(form.regular_order_notification_email) }}
                                    <span>※ 定期課金機能を利用する場合は、「{{ 'gmo_epsilon.admin.config.regular_order_notification_email'|trans }}」は必須入力となります。</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\">
                                        <span>{{ 'gmo_epsilon.admin.config.my_page_regular_settings'|trans }}</span>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.my_page_regular_settings) }}
                                    {{ form_errors(form.my_page_regular_settings) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\">
                                        <span>{{ 'gmo_epsilon.admin.config.next_delivery_date_changeable_range_days'|trans }}</span>
                                        <span class=\"badge bg-primary ml-1\">
                                    {{ 'admin.common.required'|trans }}
                                </span>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.next_delivery_date_changeable_range_days) }}
                                    {{ form_errors(form.next_delivery_date_changeable_range_days) }}
                                    <span>次回配送予定日の前後○日</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\">
                                        <span>{{ 'gmo_epsilon.admin.config.first_delivery_days'|trans }}</span>
                                        <span class=\"badge bg-primary ml-1\">
                                    {{ 'admin.common.required'|trans }}
                                </span>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.first_delivery_days) }}
                                    {{ form_errors(form.first_delivery_days) }}
                                    <span>受注日の○日後</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\">
                                        <span>{{ 'gmo_epsilon.admin.config.next_delivery_days_at_regular_resumption'|trans }}</span>
                                        <span class=\"badge bg-primary ml-1\">
                                    {{ 'admin.common.required'|trans }}
                                </span>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.next_delivery_days_at_regular_resumption) }}
                                    {{ form_errors(form.next_delivery_days_at_regular_resumption) }}
                                    <span>再開日の○日後</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\">
                                        <span>{{ 'gmo_epsilon.admin.config.next_delivery_days_after_re_payment'|trans }}</span>
                                        <span class=\"badge bg-primary ml-1\">
                                    {{ 'admin.common.required'|trans }}
                                </span>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.next_delivery_days_after_re_payment) }}
                                    {{ form_errors(form.next_delivery_days_after_re_payment) }}
                                    <span>再決済日の○日後</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\">
                                        <span>{{ 'gmo_epsilon.admin.config.regular_order_deadline'|trans }}</span>
                                        <span class=\"badge bg-primary ml-1\">
                                    {{ 'admin.common.required'|trans }}
                                </span>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.regular_order_deadline) }}
                                    {{ form_errors(form.regular_order_deadline) }}
                                    <span>次回配送予定日の○日前</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\">
                                        <span>{{ 'gmo_epsilon.admin.config.regular_delivery_notification_email_days'|trans }}</span>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.regular_delivery_notification_email_days) }}
                                    {{ form_errors(form.regular_delivery_notification_email_days) }}
                                    <span>次回配送予定日の○日前</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\">
                                        <span>{{ 'gmo_epsilon.admin.config.regular_stoppable_count'|trans }}</span>
                                        <span class=\"badge bg-primary ml-1\">{{ 'admin.common.required'|trans }}</span>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.regular_stoppable_count) }}
                                    {{ form_errors(form.regular_stoppable_count) }}
                                    <span>○回目以降は停止可能</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\">
                                        <span>{{ 'gmo_epsilon.admin.config.regular_cancelable_count'|trans }}</span>
                                        <span class=\"badge bg-primary ml-1\">{{ 'admin.common.required'|trans }}</span>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.regular_cancelable_count) }}
                                    {{ form_errors(form.regular_cancelable_count) }}
                                    <span>○回目以降は解約可能</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\">
                                        <span>{{ 'gmo_epsilon.admin.config.regular_resumable_period'|trans }}</span>
                                        <span class=\"badge bg-primary ml-1\">{{ 'admin.common.required'|trans }}</span>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.regular_resumable_period) }}
                                    {{ form_errors(form.regular_resumable_period) }}
                                    <span>未入力の場合無制限となります</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" title=\"通常購入時と比較した定期受注時のポイント付与倍率を設定します。\">
                                        <span>{{ 'gmo_epsilon.admin.config.regular_point_magnification'|trans }}<i class=\"fa fa-question-circle fa-lg ml-1\"></i></span>
                                        <span class=\"badge bg-primary ml-1\">{{ 'admin.common.required'|trans }}</span>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.regular_point_magnification, { attr : { style : 'display:inline-block; width:10%' } }) }}
                                    {{ form_errors(form.regular_point_magnification) }}
                                    <div class=\"col-auto text-start d-inline-block\">
                                        <span>倍</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\"  data-tooltip=\"true\" data-placement=\"top\" title=\"設定した定期回数に達した場合、対象の会員メールアドレス当てに「定期指定回数お知らせメール」を送信します。\">
                                        <span>{{ 'gmo_epsilon.admin.config.regular_specified_count_notification_mail'|trans }}</span>
                                        <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                    </div>

                                </div>
                                <div class=\"col-2\">
                                    {{ form_widget(form.regular_specified_count_notification_mail) }}
                                    {{ form_errors(form.regular_specified_count_notification_mail) }}
                                </div>
                                <div class=\"col-auto text-start\">
                                    <span>回目に通知</span>
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
                        <div class=\"card-header\"><span>{{ 'gmo_epsilon.admin.config.access_block'|trans }}</span></div>
                        <div class=\"card-body\">
                            <span>{{ 'gmo_epsilon.admin.config.access_block_message'|trans|raw }}</span>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'gmo_epsilon.admin.config.block_mode'|trans }}</span><span class=\"badge bg-primary ml-1\">{{ 'gmo_epsilon.admin.config.required'|trans }}</span></div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.block_mode) }}
                                    {{ form_errors(form.block_mode) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'gmo_epsilon.admin.config.access_frequency'|trans }}</span></div>
                                <div class=\"col mb-2\">
                                    <div class=\"row justify-content-start\">
                                        <div class=\"col-2\">
                                            {{ form_widget(form.access_frequency_time) }}
                                        </div>
                                        <div class=\"col-auto text-center\">
                                            {{ 'gmo_epsilon.admin.config.access_frequency_message_1'|trans }}
                                        </div>
                                        <div class=\"col-2\">
                                            {{ form_widget(form.access_frequency) }}
                                        </div>
                                        <div class=\"col-auto text-center\">
                                            {{ 'gmo_epsilon.admin.config.access_frequency_message_2'|trans }}
                                        </div>
                                        {{ form_errors(form.access_frequency) }}
                                        {{ form_errors(form.access_frequency_time) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'gmo_epsilon.admin.config.block_time'|trans }}</span></div>
                                <div class=\"col-2\">
                                    {{ form_widget(form.block_time) }}
                                    {{ form_errors(form.block_time) }}
                                </div>
                                <div class=\"col-auto text-start\">
                                    <span>{{ 'gmo_epsilon.admin.config.block_time_message'|trans }}</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'gmo_epsilon.admin.config.white_list'|trans }}</span></div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.white_list) }}
                                    {{ form_errors(form.white_list) }}
                                    <span>{{ 'gmo_epsilon.admin.config.white_list_message'|trans }}</span>
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
                    <div class=\"card rounded border-0 mb-2\">
                        <div class=\"card-header\"><span>{{ 'gmo_epsilon.admin.config.ip_black_list'|trans }}</span></div>
                        <div id=\"ex-ip-black-list\" class=\"card-body p-0\">
                                <ul id=\"ip_black_list_group\"
                                    class=\"list-group list-group-flush sortable-container\"
                                    data-prototype=\"{{ include('@EccubePaymentLite42/admin/ip_black_list_prototype.twig', {'form': form.ip_black_list.vars.prototype})|escape }}\"
                                >
                                    <li class=\"list-group-item\">
                                        <div class=\"row\">

                                            <div class=\"col-3\">
                                                <span>{{ 'gmo_epsilon.admin.config.black_list'|trans }}</span>
                                            </div>
                                            <div class=\"col-auto d-flex align-items-center\">
                                                <input id=\"add_ip_black_list_value\" class=\"form-control\" type=\"text\">
                                            </div>
                                            <div class=\"col-auto d-flex align-items-center\">
                                                <button id=\"add_ip_black_list_button\" class=\"btn btn-ec-regular\" type=\"button\">
                                                    {{ 'admin.common.create__new'|trans }}
                                                </button>
                                            </div>

                                        </div>
                                    </li>
                                    {% for child in form.ip_black_list %}
                                        {{ include('@EccubePaymentLite42/admin/ip_black_list_prototype.twig', {'form': child}) }}
                                    {% endfor %}
                                </ul>
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
                                <span>{{ 'gmo_epsilon.admin.config.back'|trans }}</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\"
                                        type=\"submit\">{{ 'gmo_epsilon.admin.config.save'|trans }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <form action=\"{{ url('eccube_payment_lite42_admin_update_payment_table') }}\" method=\"post\">
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-2\">
                        <div class=\"card-header\"><span>{{ 'gmo_epsilon.admin.config.update_payment_block'|trans }}</span></div>
                        <div class=\"card-body p-0\">
                            <div class=\"list-group list-group-flush sortable-container\">
                                <div class=\"list-group-item\">
                                    <div class=\"form-row\">
                                        <div class=\"col-auto d-flex align-items-center\">
                                            <button class=\"btn btn-ec-regular\" type=\"submit\">
                                                {{ 'gmo_epsilon.admin.config.update'|trans }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
{% endblock %}
", "EccubePaymentLite42/Resource/template/admin/config.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\admin\\config.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3, "form_theme" => 8, "for" => 566);
        static $filters = array("escape" => 5, "trans" => 5, "raw" => 479);
        static $functions = array("asset" => 14, "form_widget" => 171, "form_errors" => 187, "include" => 547, "url" => 583);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'for'],
                ['escape', 'trans', 'raw'],
                ['asset', 'form_widget', 'form_errors', 'include', 'url']
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
